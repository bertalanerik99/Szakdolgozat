<?php
$severname = "localhost";
$databaseUsername = "root";
$databasePasword = "";
$databaseName = "szakdoga";
$connect = mysqli_connect($severname, $databaseUsername, $databasePasword, $databaseName);
echo "sajt2";
if(!$connect){
    die("A kapcsolat sikertelen: ".mysqli_connect_error());
}

