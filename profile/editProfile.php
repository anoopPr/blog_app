<?php
include '/common/db_connection.php';
include '/common/sessioncheck.php';

$user_id = $_SESSION['user_id'];

// Output the user ID
echo "The user ID is: " . $user_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<link rel="stylesheet" href="/Style/editProfileStyle.css">
<body>
    <div class="container">
    <nav> 
        <div class="leftNav"> 
            <div class="logo"> 
                <h3>Logo</h3> 
            </div> 
            
            
        </div> 
        <div class="pagetitle">
            <h2>Edit Profile</h2>
        </div>

        
        
    </nav>
    <section>
        <div class="formBox">
            <div class="imgbox">
                <img src="/media/blogmedia/image 7.png" alt="#">
                <input type="file">
            </div>
            <div class="fieldbox">
            <form action="">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="email id">
               
                <input type="text" placeholder="Bio" name="bio">
                <input type="submit" value="Save">
            </form>
            </div>

        </div>

    </section>
</div>
</body>
<script src="https://kit.fontawesome.com/4cfe4e4dfd.js" crossorigin="anonymous"></script>
</html>