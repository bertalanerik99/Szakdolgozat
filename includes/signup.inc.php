<?php
    if (isset($_POST['signup'])) {
       require_once 'databasehandler.inc.php';
       require_once 'signupdatacheckandadduser.inc.php';
       
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $password2 = $_POST['pwd2'];
        $phone = $_POST['phone'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $postcode = $_POST['postcode'];
        $city = $_POST['settlement'];
        $address = $_POST['address'];
        
        if(postcodecheck($postcode) == FALSE){
            header("Location: ../signup.php?error=invalidpasscode");
            exit();
        }
        elseif(namecheck($firstname, $lastname)==FALSE){
            header("Location: ../signup.php?error=invalidlastorfistname");
            exit(); 
        }
        elseif(addresscheck($city, $address) == FALSE){
            header("Location: ../signup.php?error=invalidaddress");
            exit();   
        }
        elseif(passwordcheck($password)==FALSE){
            header("Location: ../signup.php?error=invalidpassword");
            exit();   
        }
        elseif (pwdmatch($password, $password2==FALSE)) {
            header("Location: ../signup.php?error=nomatchingpasswords");
            exit();
        }
        elseif (usernamecheck($username)==FALSE) {
            header("Location: ../signup.php?error=invalidusername");
            exit();
        }
        elseif (mailcheck($email)==FALSE) {
                header("Location: ../signup.php?error=invalidemailaddress");
                exit();
        }
        elseif (phonecheck($phone)==FALSE) {
            header("Location: ../signup.php?error=invalidphonenumber");
            exit();
        }
        elseif(takenemail($email) == TRUE){
            header("Location: ../signup.php?error=takenemail");
            exit();
        }
        else{
           adduser($username, $email, $password, $password2, $phone, $lastname, $firstname, $postcode, $city, $address);
        } 
    }
    else{
        header("Location: ../signup.php");
        exit();
    }
    