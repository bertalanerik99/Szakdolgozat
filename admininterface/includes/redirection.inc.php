<?php
    if(!isset($_SESSION['admin_id'])){
        header("Location: ../admininterface/index.php?error=youarenotloggedin");
    }
?>