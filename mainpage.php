<?php
    require_once 'header.php';
    require_once 'navbar.php';

?>
<body>
    
    <div class="container">
        <div class="row">
            <p class="text-center fs-2 fw-bold p-4 mb-4">
                <?php
                    if(isset($_SESSION['id'])){ 
                        echo "Üdvözöljük ";
                        echo $_SESSION['lastname'];
                        echo "&nbsp";
                        echo $_SESSION['firstname'];
                        echo "!";
                    }
                    else
                    {
                    header("Location: ./index.php");
                    exit();
                    }
                ?>
            </p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="img/allando-ajanlatok.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/heti-ajanlatok.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/rendeleseim.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>