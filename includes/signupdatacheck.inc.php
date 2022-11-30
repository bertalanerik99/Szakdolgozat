<?php

function postcodecheck($postcode){
    $isTrue = false;
    if($postcode > 1000 && $postcode < 10000){
        $isTrue = true;
        return $isTrue;
    }
    else{
        return $isTrue;
    }
}
function namecheck($firstname, $lastname){
    $isTrue = false;
    if(!empty($firstname) && !empty($lastname)){
        if(preg_match("/^[a-zA-Z-]*$/",$firstname) && preg_match("/^[a-zA-Z-]*$/",$lastname)){
            $isTrue = true;
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
    $isTrue = false;

}