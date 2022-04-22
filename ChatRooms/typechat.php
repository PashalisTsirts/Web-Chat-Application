<?php
    session_start();
    include_once "connection.php";
    if(isset($_SESSION["rid"])){
        $sql = mysqli_query($conn, "SELECT * FROM rooms WHERE rid = {$_SESSION["rid"]}");
        $output = "";

        if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
            if($row["rid"] == 1){
                $output .=  '<a href="ChatroomList.php"> &#8592; </a>
                            <span>' . $row["rname"] . '</span>
                            <span> <a href="publiclist.php"><button class="quit">Users</button></a></span>';
            }
            else{
                $output .=  '<a href="ChatroomList.php"> &#8592; </a>
                            <span>' . $row["rname"] . '</span>
                            <span> <a href="deleteChatroom.php"><button class="editdelete">Delete Chatroom</button></span>';
            }
        }
        else{
            $output .= "No chatrooms are available."; 
        }
    }
    else{
        header("location: loginForm.php");
    }

    echo $output;
?>