<?php
    require 'header.php';
    require 'navbar.php';

?>
<body>
    <?php
        if(isset($_SESSION['userId'])){
           echo '<p>Bejeletkeztél</p>';
        }
        else{
            header("Location: ./index.php");
            exit();
        }
    ?>
</body>