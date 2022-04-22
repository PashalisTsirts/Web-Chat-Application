<?php
    session_start();
    include_once "connection.php";
    $output = "";
    $online = 1;

    $sql = mysqli_query($conn, "SELECT * FROM members WHERE m_rid = {$_SESSION["rid"]}");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $id = mysqli_query($conn, "SELECT * FROM users WHERE uid = {$row["m_uid"]}"); 

            if(mysqli_num_rows($id) > 0){$rowid = mysqli_fetch_assoc($id);}        
            if($row["mstatus"] == $online){
            $output .=  '<li>' . $rowid["uname"] . ' ' . $rowid["usurname"] .' <span>Online</span> </li>';
            }     
            else{
                $output.=   '<li>' . $rowid["uname"] . ' ' . $rowid["usurname"] .' <span>Offline</span> </li>';
            } 
        }      
        echo $output;
    } 
?>
