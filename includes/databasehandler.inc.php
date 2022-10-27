<?php
$severname = "localhost";
$databaseUsername = "root";
$databasePasword = "";
$databaseName = "szakdoga";
$connect = msqli_connect($severname, $databaseUsername, $databasePasword, $databaseName);
if(!$connect){
    die("Connection failed: ".mysqli_connect_error())
}