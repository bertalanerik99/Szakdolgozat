<?php
    
    if(!isset($_SESSION['id'])){ 
        header("Location: ../userinterface/index.php?error=youarenotloggedin");
        exit();
    }
    
?>
