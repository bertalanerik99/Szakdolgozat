<?php
    require 'header.php';
    require 'navbar.php';
?>
<body>
    <main>
        <h1>Regisztráció</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" id="" class="" placeholder="Felhasználónév">
            <input type="email" name="mail" id="" class="" placeholder="E-mail cím">
            <input type="password" name="pwd" id="" class="" placeholder="Jelszó">
            <input type="pasword" name="pwd2" id="" class="" placeholder="Jelszó ismét">
            <input type="tel" name="phone" id="" class="" placeholder ="Telefonszám">
            <button type="submit" name="signup">Regisztráció</button>
        </form>
        <?php
            echo 'Current PHP version: ' . phpversion();
        ?>
    </main>
</body>