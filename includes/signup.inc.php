<?php
    if (isset($_POST['signup'])) {
        echo "sajt";
       require_once 'databasehandler.inc.php';
       
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
        $adress = $_POST['adress'];
        #itt input ellenorzes van de én valahogy máshogy szeretném megcsinálni. ZSóval ezt majd át kell alakítani
        if(empty($username) || empty($email) || empty($password) || empty($password2) || empty($phone) || empty($lastname) 
        || empty($firstname) || empty($postcode) || empty($city) || empty($adress)){
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
        }else{
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