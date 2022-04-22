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
    <section class="form singup">
        <header> Sign Up</header>
       
        <form action="#" method="POST">
            <div class="input">
                <label>First name</label>
                <input type="text" name="fname" placeholder="Enter your name">
            </div>
            <div class="input">
                <label>Last name</label>
                <input type="text" name="lname" placeholder="Enter your last name">
            </div>
            <div class="input">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="input">
                <label>Username</label>
                <input type="text" name="uname" placeholder="Enter your username">
            </div>
            <div class="input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password">
            </div>          
            <div class="button">
                <input type="submit" Value="Create Account">
            </div>
            <div class="error"></div>
        </form>

        <div class="link">
            Already have an account? <a href="loginForm.php">Log in now!</a>
        </div>
    </section>
</div>

<script src="Javascript/singup.js"></script>
</body>
</html>    