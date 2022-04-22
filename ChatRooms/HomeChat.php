<?xml version="1.0" encoding="UTF-8"?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>ChatRooms</title>
  <link rel="stylesheet" href="css/styleChat.css" type="text/css">
</head>
<body>

<div class="wrapper">
    <section class="chat">       
        <header>
            <?php
                session_start();
                include_once "connection.php";
                $_SESSION["rid"] = $_GET['rid'];
            ?>           
            <div class="chatname"></div>            
        </header>

        <div class="chatarea"></div>
        <div class="form typing">
            <form action="" method="POST">
                <input type="text" class="message" name="message" placeholder="Write a message here...">
                <button>Send</button>
            </form>
        </div>         
    </section>
</div>

<script src="Javascript/typechat.js"></script>
<script src="Javascript/chat.js"></script>

</body>
</html>    