<?php
require_once 'admin-databasehandler.inc.php';
  if(isset($_POST['modify'])){
    $ertek = $_POST['modify'];
    echo $ertek;
  }
  if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    header('Location: ../admin-permanentoffers.php?delete=isdelet');
    $query = "DELETE FROM permanent_offers WHERE id = $id";
    $result = mysqli_query($connect, $query);
    if($result){
        header('Location: ../admin-permanentoffers.php?success=deletesuccess');
        exit();
    }
    else{
        header('Location: ../admin-permanentoffers.php?error=deleteerror');
        exit();
    }
  }
?>