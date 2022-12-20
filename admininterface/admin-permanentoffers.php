<?php
    require_once 'admin-header.php';
    require_once 'admin-navbar.php';
    require_once './includes/redirection.inc.php'
?>
<body>
    <div class="container">
        <div class="row">
            <div class="card mx-auto mt-5" style="width:50rem;">
                <div class="card-header">
                    <h3 class="text-center">Adjon Hozzá új terméket!</h3>
                </div>
                <div class="card-body text-center">
                    <form action="includes/add-new-permanent-product.inc.php" name="addproduct" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Termék neve:</span>
                            <input type="text" aria-label="First name" class="form-control" name="product-name">
                            
                            <span class="input-group-text">Termék ára:</span>
                            <input type="number" aria-label="First name" class="form-control" name="product-price">
                            <span class="input-group-text">HUF</span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Termék Leírás</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="product-description">
                        </div>

                        <div class="mb-3 mt-3">
                            <input class="form-control" type="file" id="formFile" name="product-img">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Hozzáadás</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div>
            <?php require_once 'admin-display-permanentoffers.php'?>
        </div>
    </div>
</body>