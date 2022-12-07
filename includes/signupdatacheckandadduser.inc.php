<?php

function postcodecheck($postcode){
    $isTrue = FALSE;
    if($postcode > 1000 && $postcode < 10000){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
function namecheck($firstname, $lastname){
    $isTrue = FALSE;
    if(!empty($firstname) && !empty($lastname)){
        if(preg_match("/^[a-zA-Z-]*$/",$firstname) && preg_match("/^[a-zA-Z-]*$/",$lastname)){
            $isTrue = TRUE;
            return $isTrue;
        }
        else{
            return $isTrue;
        }
    }else{
        return $isTrue;
    }
}
function addresscheck($settlement, $address){
    $isTrue = FALSE;
    if(!empty($settlement) || !empty($address)){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }

}
function passwordcheck($password){
    $isTrue = FALSE;
    if(preg_match("/^[a-zA-Z0-9]*$/", $password)){
        $isTrue= TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
function pwdmatch($pwd, $pwd2){
    $isTrue = FALSE;
    if($pwd == $pwd2){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
function usernamecheck($username){
    $isTrue = FALSE;
    if(preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
} function mailcheck($email){
    $isTrue = FALSE;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
function phonecheck($phonenumber){
    $isTrue = FALSE;
    if(preg_match("/^[-+0-9]*$/", $phonenumber)){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
function takenemail($email){
    require 'databasehandler.inc.php';
    $isTrue = FALSE;
    $sql = "SELECT username FROM users  WHERE email=?";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $email );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
        if($resultcheck > 0){
            $isTrue = TRUE;
            return $isTrue;
        }
        else{
            return $isTrue;
        }
    }
}
function adduser($username, $email, $password, $password2, $phone, $lastname, $firstname, $postcode, $city, $address){
     #ezt a részt majd meg kell néznem újramert nem teljesen tiszta,hogy hogyan működik. A lényeg hogy el akarjuk kerülni hogy beírjanak e mezőbe egy sql parancsot.
     require 'databasehandler.inc.php';
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
             header("Location: ../signup.php?error=usertaken");
             exit();
         }else{
             $sql = "INSERT INTO users (username, email, pwd, tel, lastname, firstname, postcode, settlement, addr) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
             $stmt = mysqli_stmt_init($connect);
             if(!mysqli_stmt_prepare($stmt, $sql)){
                 header("Location: ../signup.php?error=sqlerror");
                 exit();
             }else{
                 $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                 mysqli_stmt_bind_param($stmt, "sssssssss", $username, $email, $hashedpassword, $phone, $lastname, $firstname, $postcode, $city, $address);
                 mysqli_stmt_execute($stmt);
                 mysqli_stmt_close($stmt);
                 mysqli_close($connect);
                 header("Location: ../signup.php?signup=success");
                 exit();
                 
             }
         }
     }
}