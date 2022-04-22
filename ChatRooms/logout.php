<?php
    session_start();
    include_once "connection.php";
    $offline = 0;

    if(isset($_SESSION["uid"])){
        $sql_offline = mysqli_query($conn, "UPDATE members SET mstatus='$offline' WHERE m_uid = {$_SESSION["uid"]}");
        session_unset();
        session_destroy();
        header("location: loginForm.php");
    }
?>