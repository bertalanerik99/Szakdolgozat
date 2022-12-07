<?php
    require 'header.php';
    require 'navbar.php';

?>
<body>
    <?php
        if(isset($_SESSION['id'])){
           echo '<p>Bejeletkeztél</p>';
           echo $_SESSION['lastname'];
           echo "&nbsp";
           echo $_SESSION['firstname'];
           
        }
        else{
            header("Location: ./index.php");
            exit();
        }
    ?>
</body>