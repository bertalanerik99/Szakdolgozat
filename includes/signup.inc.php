<?php
    if (isset($_POST['signup'])) {
        require 'databasehandler.inc.php';
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $password2 = $_POST['pwd2'];
        $phone = $_POST['phone'];
    }