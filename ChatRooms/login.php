<?php
    session_start();
    include_once "connection.php";
    $uname = htmlspecialchars(addslashes($_POST['uname']));
    $pwd = htmlspecialchars(addslashes($_POST['password']));
    $online = 1;
    
    if(empty($uname) || empty($pwd)){
        echo "Fill all fields";
    }
    else{
        $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE uusername = '$uname' AND upass ='$pwd'");
        if(mysqli_num_rows($sql1) > 0){              
                $row = mysqli_fetch_assoc($sql1);
                $_SESSION["uid"] = $row["uid"];
                $sql_online = mysqli_query($conn, "UPDATE members SET mstatus='$online' WHERE m_uid = {$_SESSION["uid"]}");
                echo "1";            
            }
        else{
            echo "This account does not exists.";
        }
    } 

?>    