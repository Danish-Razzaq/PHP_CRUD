<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbaname = "crud project";
$conn = mysqli_connect($servername, $username, $password, $dbaname);

if (!$conn) {
    die("There is a Connection Error" . mysqli_connect_errno());
}


?>