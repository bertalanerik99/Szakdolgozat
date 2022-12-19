<?php
if(isset($_POST['add'])){
    $product_name = $_POST['product-name'];
    $product_price = $_POST['product-price'];
    $image = $_FILES['product-img']['tmp_name'];
    $img_name = $_FILES['product-img']['name'];
    if(empty($product_name) || empty($product_price) || empty($image) || empty($img_name)){
        header("Location: ../admin-permanentoffers.php?error=emptyfields");
        exit();
    }elseif((substr($img_name, -strlen('.jpeg')) != '.jpeg') && (substr($img_name, -strlen('.png')) != '.png')){
        header("Location: ../admin-permanentoffers.php?error=wrongfiletype");
        exit();
    }
    else{
        require 'admin-databasehandler.inc.php';
        $sql = "INSERT INTO permanent_offers (product_name, product_price, product_image, image_name) 
        VALUE ('$product_name','$product_price','$image','$img_name')";
        mysqli_query($connect, $sql);
    }

}
 ?>