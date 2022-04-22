<?php
    session_start();
    if(isset($_SESSION["uid"])){
        header("location: ChatroomList.php");
    }
?>

<?xml version="1.0" encoding="UTF-8"?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>ChatRooms</title>
  <link rel="stylesheet" href="css/styleForms.css" type="text/css">
</head>
<body>

<div class="wrapper">
    <section class="form login">
        <header> Log in</header>
       
        <form action="" method="POST">
            <div class="input">
                <label>Username</label>
                <input type="text" name="uname" placeholder="Enter your Username">
            </div>
            <div class="input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="button">
                <input type="submit" Value="Login">
            </div>
            <div class="error"></div>
        </form>

        <div class="link">
            Don't have an account? <a href="index.php">Sign up now!</a>
        </div>       
    </section>
</div>

<script src="Javascript/login.js"></script>

</body>
</html>    