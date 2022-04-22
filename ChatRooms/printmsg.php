<?php
    session_start();
    include_once "connection.php";
    $output = "";
    
    if(isset($_SESSION["uid"]) && isset($_SESSION["rid"])){
        $sql = mysqli_query($conn, "SELECT * FROM messages WHERE ms_rid={$_SESSION["rid"]} ");
        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                if($_SESSION["uid"] == $row["ms_uid"]){
                    $output .= '<div class="outcoming">
                                <div class="userdateinc"><span>Me---' . $row["msdatetime"] . ':</span></div>
                                <span>' . $row["mstext"] . '</span>
                                </div> ';
                }
                else{
                    $id = mysqli_query($conn, "SELECT * FROM users WHERE uid = {$row["ms_uid"]}"); 
                    if(mysqli_num_rows($id) > 0){$rowid = mysqli_fetch_assoc($id);}
                    $output .= '<div class="incoming">
                                <div class="userdateinc"><span>'. $rowid["uname"] . '---' . $row["msdatetime"] .':</span></div>
                                <span>' . $row["mstext"] . '</span>
                                </div> ';
                }
            }
        }
        echo $output;
    }
    else{
        header("location: loginForm.php");
    }
?>