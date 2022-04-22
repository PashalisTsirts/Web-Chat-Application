<?xml version="1.0" encoding="UTF-8"?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>ChatRooms</title>
  <link rel="stylesheet" href="css/stylehome.css" type="text/css">
</head>
<body>

    <div class="wrapper">
        <section class="home">
            <header>
                <?php
                    session_start();
                    include_once "connection.php";
                    if(isset($_SESSION["uid"])){
                        $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE uid = {$_SESSION["uid"]}");
                        if(mysqli_num_rows($sql1) > 0){
                            $row = mysqli_fetch_assoc($sql1);
                        }    
                    }
                ?>
                <div class="userinfo"><span><?php echo $row["uname"]?><br> <?php echo $row["usurname"]?> </span></div>
                <div class="dropdown">
                    <button class="Menu">Menu</button>
                    <div class="Menu-content">
                      <a href="newChatroom.html">New Chat-Room</a>
                      <a href="logout.php">Logout</a>
                    </div>
                </div>
            </header>
            <div class="chatroom-list"> </div>
        </section>
    </div>
    <script src="Javascript/chatrooms.js"></script>
</body>
</html>    