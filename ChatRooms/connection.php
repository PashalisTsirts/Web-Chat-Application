<?php 
    $conn = mysqli_connect("localhost","root","","chatrooms");
    if(!$conn){
        die('Could not connect: ' . mysqli_error());
    }   
?>