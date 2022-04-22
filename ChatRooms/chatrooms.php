<?php
    session_start();
    include_once "connection.php";
    $sql = mysqli_query($conn, "SELECT * FROM rooms");
    $output = "";
    $public_id = 1;

    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            if($row["rid"] == $public_id){
                $output .= '<a href="HomeChat.php?rid='. $row["rid"] .'">
                            <div class="message">
                            <span>' . $row["rname"] . '</span>
                            <p>Click here and start chating!</p>
                            </div>
                            </a>';
            }
            else{
                if(isset($_SESSION["uid"])){
                    if($_SESSION["uid"] == $row["rowner"]){
                        $output .= '<a href="HomeChat.php?rid='. $row["rid"] .'">
                                    <div class="message">
                                    <span>' . $row["rname"] . '</span>
                                    <p>Click here and start chating!</p>
                                    <span> <a href=""><button class="Request">My Chat</button></a></span>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .=  '<a href="HomeChat.php?rid='. $row["rid"] .'">
                                    <div class="message">
                                    <span>' . $row["rname"] . '</span>
                                    <p>Click here and start chating!</p>
                                    
                                    </div>
                                    </a>';
                        }   
                }     
            }
        }
    }
    else{
        $output .= "No chatrooms are available."; 
    }

    echo $output;
?>