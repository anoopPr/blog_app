<h5>Recent Posts</h5>
<?php 
  include '../common/sessioncheck.php';
  include '../common/db_connection.php';
  $query="select * from posts where post_status=0 order by post_date";
  $result=$conn->query($query);
  $post_details=[];
  while ($row = $result->fetch_assoc()) {
    $user_data="select * from blog_user where user_id='".$row['user_id']."'";
    $user_data=$conn->query($user_data);
    if($user_row=$user_data->fetch_assoc()){
      $username=$user_row['user_name'];
    }
    $media_data="select * from blog_media where post_id='".$row['post_id']."'";
    $media_data=$conn->query($media_data);
    if($media_row=$media_data->fetch_assoc()){
      $image=$media_row['media_name'];
    }
    $date=time_calculation($row['post_date']);
    $post_details[]=[
      'Author'=>$username,
      'Image'=>$image,
      'Post_ID'=>$row['post_id'],
      'Post_Title'=>$row['post_title'],
      'Post_detailed'=>$row['post_detailed'],
      'Post_date'=>$date,
    ];
  }
?>
<?php if(count($post_details)>0){ ?>
<div class="block-container">


  <?php foreach ($post_details as $data){ ?>
  <div class="blog-block">
    <div class="blog-image">
      <img  src="../media/blogmedia/<?php echo $data['Image']; ?>" alt="" />
    </div>
    <div class="blog-content">
      <h2><?php echo $data['Post_Title']; ?></h2>
      <span><?php echo $data['Post_detailed']; ?>
      </span>
      <div class="bottom-part">
        <div class="footer-part">
          <span class="auther">By <?php echo $data['Author']; ?> </span>
          <span><?php echo $data['Post_date']; ?></span>
        </div>

        <i class="fa-solid fa-ellipsis" onclick="report_more(this)"></i>
      </div>
      <div class="Responded-More-details">
        <ul>
          <li style="background-color: red;">Suspend</li>
          <li style="background-color: rgb(44, 128, 254);">View More</li>
        </ul>
      </div>
    </div>
  </div>
    <?php }?>
</div>
<?php }else{
      echo"<div style='height:80%;width:100%; display:grid; place-content:center; font-size:50px; font-weight: 600;'>No Recent Post Found</div>";
    } ?>

<script>option_select(0)</script>