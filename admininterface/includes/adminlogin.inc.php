<?php
    if(isset($_POST['adminlogin'])){
        require 'admin-databasehandler.inc.php';
        $adminuser = $_POST['adminusername'];
        $password =$_POST['adminpassword'];
        if(empty($adminuser) || empty($password)){
            header("location: ../index.php?=emptyfields");
            exit();
        }
        else{
            $sql = "SELECT * FROM admins WHERE admin_user=?";
            $stmt = mysqli_stmt_init($connect);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $adminuser);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $passwordCheck = password_verify($password, $row['admin_password']);
                    if($passwordCheck == false){
                        header("Location: ../index.php?error=wrongpassword-admin");
                        exit();
                    }
                    elseif($passwordCheck == true){
                        session_start();
                        $_SESSION['admin_id'] = $row['admin_id'];
                        
                        header("Location: ../admin-homepage.php");
                        exit();
                    }
                    else{
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                }else{
                    header("Location: ../index.php?error=noadminuser");
                    exit();
                }
            }
        }
    }
    
?>