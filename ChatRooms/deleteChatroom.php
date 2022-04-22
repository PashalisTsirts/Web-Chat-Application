<?php
        session_start();
        include_once "connection.php";

        if(isset($_SESSION["uid"]) && isset($_SESSION["rid"])){
            $owner = mysqli_query($conn,"SELECT * FROM rooms WHERE rid = {$_SESSION["rid"]}");
            if(mysqli_num_rows($owner) > 0){ $row = mysqli_fetch_assoc($owner);}
            if($_SESSION["uid"] == $row["rowner"] ){
                $empty = mysqli_query($conn,"SELECT * FROM members WHERE m_rid = {$_SESSION["rid"]} EXCEPT SELECT * FROM members WHERE m_uid = {$_SESSION["uid"]} ");
                if(mysqli_num_rows($empty) == 0){
                    $sql = mysqli_query($conn,"DELETE FROM rooms WHERE rid = {$_SESSION["rid"]}");
                    header("location: ChatroomList.php");
                }
                else{
                    echo "Not empty chatroom";
                }
            }
            else{
                header("location: ChatroomList.php");
            }
        }    

?>