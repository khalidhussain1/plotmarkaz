<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pmarkaz";


$connection = mysqli_connect($servername,$username,$password,$database);

if(!$connection){
    echo "connection failed ";
}

?>
