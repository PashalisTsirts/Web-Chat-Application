<?php
    session_start();
    include_once "connection.php";
    $nchat =  htmlspecialchars(addslashes($_POST['nchat']));
    $online =  1;

    function valid_name_chat($nchat){
        if (preg_match("/^[a-zA-Z]{1,15}$/", $nchat))
            return true;
        else
            return false;
        }

    if(isset($_SESSION["uid"])){
        if(valid_name_chat($nchat)){
            $roomid = rand(time(),1000);
            $sql = mysqli_query($conn, "INSERT INTO rooms(rid, rname, rowner) VALUES ('$roomid','$nchat','{$_SESSION["uid"]}')");
            $owner = mysqli_query($conn,"INSERT INTO members(m_uid, m_rid, mstatus) VALUES ('{$_SESSION["uid"]}','$roomid','$online')");
            if($sql){
                echo "1";
            }
            else{
                echo "Try again.";
            }
        }
    }
    else{
        header("location: loginForm.php");
    }    
?>