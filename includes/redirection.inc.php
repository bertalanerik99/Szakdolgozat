<?php
    
    if(!isset($_SESSION['id'])){ 
        header("Location: ./index.php?error=youarenotloggedin");
        exit();
    }
    
?>
