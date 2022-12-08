<?php   
    $id = $_SESSION['id'];
    require_once 'databasehandler.inc.php';
    $sql = "SELECT * FROM users where id = $id";
    $stmt = mysqli_stmt_init($connect);
    $result = mysqli_query($stmt, $sql);
    //ennek valami baja van
?>