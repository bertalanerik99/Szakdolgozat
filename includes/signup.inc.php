<?php
    if (isset($_POST['signup'])) {
        echo "sajt";
       require_once 'databasehandler.inc.php';
       
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $password2 = $_POST['pwd2'];
        $phone = $_POST['phone'];
        #itt input ellenorzes van de én valahogy máshogy szeretném megcsinálni. ZSóval ezt majd át kell alakítani
        if(empty($username) || empty($email) || empty($password) || empty($password2) || empty($phone)){
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email."&phone=".$phone);
            exit();
            #ha valamelyik mező üres
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invalidmailuid");
            exit();
            #ha rossz az email és a felhasznáónév is
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidmail&uid=".$username."&phone=".$phone);
            exit();
            #ha rossz az email-cím
        }
        elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invaliduid&mail=".$email."&phone=".$phone);
            exit();
            #ha nem megfelelő a jelszóformátum
        }
        elseif ($password !== $password2) {
            header("Location: ../signup.php?error=passwordcheck&mail=".$username."&email=".$email."&phone=".$phone);
            exit();
        }
        elseif (!preg_match("/^[+0-9]*$/", $phone)) {
            header("Location: ../signup.php?error=invalidphonenumber&mail=".$username."&email=".$email);
            exit();
        }
    }