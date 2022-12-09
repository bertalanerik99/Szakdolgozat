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
        <div class="row">
            <div class="col-6">
                <p class="text-end">Teljes név:</p>
            </div>
            <div class="col-6">
                <?php echo $fullname; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p class="text-end">E-Mail cím:</p>
            </div>
            <div class="col-6">
                <?php echo $email; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p class="text-end">Telefonszam:</p>
            </div>
            <div class="col-6">
                <?php echo $phone; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p class="text-end">Lakcím:</p>
            </div>
            <div class="col-6">
                <?php echo $address; ?>
            </div>
        </div>
    </div>
</body>