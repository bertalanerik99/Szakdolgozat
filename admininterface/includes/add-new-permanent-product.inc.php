<?php
if(isset($_POST['add'])){
    require 'admin-databasehandler.inc.php';
    $product_name = $_POST['product-name'];
    $product_price = $_POST['product-price'];
    $product_image = $_FILES['product-img'];
    $product_description = $_POST['product-description'];

    $fileName = $product_image['name'];
    $fileTmpName = $product_image['tmp_name'];
    $fileSize = $product_image['size'];
    $fileError = $product_image['error'];
    $fileType = $product_image['type'];
    
    if (empty($product_name) || empty($product_price) || empty($product_image) || empty($product_description)) {
        header("Location: ../admin-permanentoffers.php?error=emptyfields");
        exit();
    }
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpeg', 'jpeg', 'png');
    if(in_array($fileActualExt, $allowed)){
        if ($fileError === 0) {
            if($fileSize < 100000){
                $displayphoto = file_get_contents($fileTmpName);
                $photodata= base64_encode($displayphoto);
                $query = "INSERT INTO permanent_offers (product_name, product_price, product_description ,product_image)
                 VALUES ('$product_name','$product_price','$product_description','$photodata')";
                $data = mysqli_query($connect, $query);
                if ($data) {
                    header("Location: ../admin-permanentoffers.php?success=successful");
                    exit();
                }else{
                    header("Location: ../admin-permanentoffers.php?error=unsuccessfull");
                    exit();
                }
                
                
            }else{
                header("Location: ../admin-permanentoffers.php?error=toobigfile");
                exit();
            }
        }
        else{
            header("Location: ../admin-permanentoffers.php?error=erroruploading");
            exit();
        }
    }else{
        header("Location: ../admin-permanentoffers.php?error=wrongfiletype");
        exit();
    }
    


    

}

 ?>