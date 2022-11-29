<?php
$server = "localhost";
$user   = "root";
$pwd    = "";
$database = "dbpl";

$conn = mysqli_connect($server,$user,$pwd,$database);

if(!$conn){
    echo "tidak konek";
}


?>