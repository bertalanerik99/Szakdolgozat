<?php
    if (isset($_POST['signup'])) {
        echo "sajt";
       require_once 'databasehandler.inc.php';
       require_once 'signupdatacheck.inc.php';
       
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $password2 = $_POST['pwd2'];
        $phone = $_POST['phone'];
        #-----------------------
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
        else{
            #ezt a részt majd meg kell néznem újramert nem teljesen tiszta,hogy hogyan működik. A lényeg hogy el akarjuk kerülni hogy beírjanak e mezőbe egy sql parancsot.
            $sql = "SELECT username FROM users  WHERE username=?";
            $stmt = mysqli_stmt_init($connect);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $username );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultcheck = mysqli_stmt_num_rows($stmt);
                if($resultcheck > 0){
                    header("Location: ../signup.php?error=usertaken&mail=".$email);
                    exit();
                }else{
                    $sql = "INSERT INTO users (username, email, pwd, tel) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($connect);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }else{
                        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedpassword, $phone);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup=success");
                        exit();
                        
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }
    else{
        header("Location: ../signup.php");
        exit();
    }