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
            sss
        </div>
    </div>
</body>