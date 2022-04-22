<?php
    session_start();
    include_once "connection.php";
    if(isset($_SESSION["uid"]) && isset($_SESSION["rid"])){
        $msg = htmlspecialchars(addslashes($_POST["message"]));
        $date = date('Y/m/d H:i:s');
        if(!empty($msg)){
            $sql = mysqli_query($conn, "INSERT INTO messages(ms_uid, ms_rid, msdatetime, mstext) VALUES ('{$_SESSION["uid"]}', '{$_SESSION["rid"]}', '$date', '$msg')");
        }
    }
    else{
        header("location: loginForm.php");
    }
?>