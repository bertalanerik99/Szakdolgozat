<?php   
    $id = $_SESSION['id'];
    require_once 'databasehandler.inc.php';
    $sql = "SELECT * FROM users where id = $id";
    $stmt = mysqli_stmt_init($connect); //elvileg ellenőrzi hogy jó e a kapcsolat.
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../personaldata.php?error=sqlerror");
        exit();
    }
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $fullname = $row['lastname']." ".$row['firstname'];
    $email = $row['email'];
    $phone = $row['tel'];
    $address = $row['postcode']." ".$row['settlement']." ".$row['addr'];
    
?>