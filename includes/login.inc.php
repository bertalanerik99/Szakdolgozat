<?php

    if (isset($_POST['login'])) {
        require 'databasehandler.inc.php';
        $MailorName = $_POST['username'];
        $Password = $_POST['password'];
        if (empty($MailorName) || empty($Password)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username=? OR email=?;";
            $stmt = mysqli_stmt_init($connect);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?errot=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "ss", $MailorName, $MailorName);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $passwordCheck = password_verify($Password, $row['pwd']);
                    if($passwordCheck == false){
                        header("Location: ../index.php?error=wrongpassword1");
                        exit();
                    }
                    elseif($passwordCheck == true){
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['lastname'] = $row['lastname'];
                        $_SESSION['firstname'] = $row['firstname'];
                        header("Location: ../teszt.php");
                        exit();
                    }
                    else{
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                }else{
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../index.php");
        exit();
    }