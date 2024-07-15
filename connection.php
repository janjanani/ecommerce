<?php
$server='localhost:3307';
$user='root';
$pass="";
$dbname='mystore';
$con=mysqli_connect($server,$user,$pass,$dbname);
if(!$con){
    echo "not connected";
}

?>