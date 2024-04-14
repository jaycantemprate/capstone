<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "3ke");

    if(!$conn){
        die("Connection Error");
    }

?>