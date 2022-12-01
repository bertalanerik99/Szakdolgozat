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
    $isTrue = FALSE
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
    $isTrue = FALSE
    if(preg_match("/^[-+0-9]*$/", $phonenumber)){
        $isTrue = TRUE;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
