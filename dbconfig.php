<?php
// $servername="localhost";
// $username="root";
// $password="";
// $db="cars";
$conn=mysqli_connect("localhost","root","","cars");
if (!$conn) {
    die("connection failed due to".mysqli_connect_error());
}

?>
