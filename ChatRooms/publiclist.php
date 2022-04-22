<?xml version="1.0" encoding="UTF-8"?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>ChatRooms</title>
  <link rel="stylesheet" href="css/styleList.css" type="text/css">
</head>
<body>

<div class="wrapper">
    <section class="Edit form">
        <header> 
            <p><a href="HomeChat.php?rid=<?php session_start(); echo $_SESSION["rid"];?>" > &#8592; </a>
           Chat Users &#8595; </p>
        </header> 

        <div class="users"><ul></ul> </div>  
               
    </section>
</div>

<script src="Javascript/list.js"></script>

</body>
</html>    