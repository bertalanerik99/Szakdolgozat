<?php
    require 'header.php';
    session_start();
?>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Bejelenkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Regisztráció</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
            if(isset($_SESSION['id'])){
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout">Kijelentkezés</button>
                </form>';
            }
        ?>
    </nav>
</body>