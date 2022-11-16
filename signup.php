<?php
    require 'header.php';
    require 'navbar.php';
?>
<body>
    <main>
        <h1>Regisztráció</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" id="" class="" placeholder="Felhasználónév" required> <br>
            <input type="email" name="mail" id="" class="" placeholder="E-mail cím" required> <br>
            <input type="password" name="pwd" id="" class="" placeholder="Jelszó" minlength="8" required> <br>
            <input type="password" name="pwd2" id="" class="" placeholder="Jelszó ismét" minlength="8" required> <br>
            <input type="tel" name="phone" id="" class="" placeholder ="Telefonszám" required> <br>
            <!------>
            <input type="text" name="lastname" id="" class="" placeholder="Vezetéknév" required> <br>
            <input type="text" name="firstname" id="" class="" placeholder="Keresztnév" required> <br>
            <input type="number" name="postcode" id="" class="" placeholder= irányítószám required min="1000" max="9999" > <br>
            <input type="text" name="settlement" id="" class="" placeholder="telpülés" required> <br>
            <input type="text" name="adress" id="" class="" placeholder="cím" required> <br>
            <button type="submit" name="signup">Regisztráció</button>
        </form>
        <?php
            echo 'Current PHP version: ' . phpversion();
        ?>
    </main>
</body>