<?php
require_once './includes/databasehandler.inc.php';
?>
<body>
    <div class="row mt-3">
        <?php
            $sql = "SELECT * FROM permanent_offers";
            $select = mysqli_query($connect, $sql);
            
            while($row = mysqli_fetch_array($select)){
                echo "<div class='card mb-3 ms-2 me-2' style='max-width: 540px;'>
                        <div class='row g-0'>
                            <div class='col-md-4'>
                                
                                <img src='data:image;base64,".$row["product_image"]."'  class='img-fluid rounded-start'>
                            </div>
                            <div class='col-md-6'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$row[product_name]</h5>
                                    <p class='card-text'>$row[product_description]</p>
                                    <p class='card-text fw-bold'>Ár: $row[product_price] Ft</p>
                                </div>
                            </div>
                            <div class='col-md-2 d-flex align-items-center'>
                                <button class='btn btn-success'>Rendelés</button>
                            </div>
                        </div>
                    </div>";
            }
            
        ?>
    </div>
</body>