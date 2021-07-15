<?php

    $conn = mysqli_connect("localhost","root","","zerotohero");

    if(!$conn){
        die("ERROR: Couldn't connect to database".mysqli_connect_error());
    }
?>
