<?php
    session_start();
    include_once "connection.php";
    $fname = htmlspecialchars(addslashes($_POST['fname']));
    $lname = htmlspecialchars(addslashes($_POST['lname']));
    $email = htmlspecialchars(addslashes($_POST['email']));
    $uname = htmlspecialchars(addslashes($_POST['uname']));
    $pwd = htmlspecialchars(addslashes($_POST['password']));

    function valid_username($uname){
        if (preg_match("/^[a-zA-Z]{1,15}$/", $uname))
            return true;
        else
            return false;
        }
      
    function valid_password($pwd){
        if (preg_match("/^(?=.*[0-9])(?=.*[!@#$%^*])[a-zA-Z0-9!@#$%^*]{8,15}$/", $pwd))
            return true;
        else
            return false;
        }

    if(empty($fname) || empty($lname) || empty($email) || empty($uname) || empty($pwd)){
        echo "Fill all fields";
    } 
    else{
        if(valid_username($uname)){ 
            $sql1 = mysqli_query($conn, "SELECT uusername FROM users WHERE uusername = '$uname'");
            if(mysqli_num_rows($sql1) > 0){
                echo "This username already exists.";
            }
            else{
                if(valid_password($pwd)){ 
                    $userid = rand(time(),1000);
                    $public_id = 1;
                    $mstatus = 1;
                    $sql2 = mysqli_query($conn, "INSERT INTO users(uid, uusername, uname, usurname, upass, uemail) VALUES ('$userid','$uname','$fname','$lname','$pwd','$email')");
                    if($sql2){
                        $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE uusername = '$uname'");
                        if(mysqli_num_rows($sql3) > 0){
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION["uid"] = $row["uid"];
                            $sql_members = mysqli_query($conn,"INSERT INTO members(m_uid, m_rid, mstatus) VALUES ('$userid','$public_id','$mstatus')");
                            echo "1";            
                        }
                    }
                    else {
                        echo "Try again.";
                    }
                }
                else{
                    echo "Password must contain at least one number and one special character.";
                }
            } 
        }
        else{
            echo "Username must contain only alphabetic characters.";
        }
    }
?>