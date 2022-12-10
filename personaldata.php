<?php
    require_once 'navbar.php';
    require_once 'header.php';
    require_once './includes/showpersonaldata.inc.php';
    if(!isset($_SESSION['id'])){
        header("Location: ./index.php");
        exit();
    }
?>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Személyes adatok:</h1>
        </div>
        <div class="row lh-lg">
            <div class="col-4 col-sm-6 col-md-6 col-lg-6">
                <p class="text-end fw-bold">Teljes név:</p>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <?php echo $fullname; ?>
            </div>
            <div class="col-2 col-sm-2 col-md-3 col-lg-3"> 
                <button type="button" class="btn btn-success">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </div>
        </div>
        <div class="row lh-lg">
            <div class="col-4 col-sm-6 col-md-6 col-lg-6">
                <p class="text-end fw-bold">E-Mail cím:</p>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <?php echo $email; ?>
            </div>
            <div class="col-2 col-sm-2 col-md-3 col-lg-3"> 
                <button type="button" class="btn btn-success">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </div>
        </div>
        <div class="row lh-lg">
            <div class="col-4 col-sm-6 col-md-6 col-lg-6">
                <p class="text-end fw-bold">Telefonszam:</p>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <?php echo $phone; ?>
            </div>
            <div class="col-2 col-sm-2 col-md-3 col-lg-3"> 
                <button type="button" class="btn btn-success">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </div>
        </div>
        <div class="row lh-lg">
            <div class="col-4 col-sm-6 col-md-6 col-lg-6">
                <p class="text-end fw-bold">Lakcím:</p>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <?php echo $address; ?>
            </div>
            <div class="col-2 col-sm-2 col-md-3 col-lg-3"> 
                <button type="button" class="btn btn-success">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </div>
        </div>
    </div>
</body>