<?php
    require 'header.php';
    require 'navbar.php';
?>
<main>
    <div class="card" style="width: 18rem;">
        <form action="includes/login.inc.php" method="post">
            <label for="username">Felhasználónév</label>
            <br>
            <input type="text" id="username" name="username" placeholder="Felhasználónév/E-mail">
            <br>
            <label for="password">Jelszó:</label>
            <br>
            <input type="password" id="password" name="password" placeholder="password">
            <button type="submit" name="login">Bejelentkezés</button>
        </form>
        <a href="./signup.php">Regisztráció</a> 
        
    </div>
</main>