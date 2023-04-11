<?php

$con = mysqli_connect("localhost","root","","user_registration");

if(!$con){
    die('Connection Fialed'.mysqli_connect_error());
}

// echo "Connectes Successfully";

?>