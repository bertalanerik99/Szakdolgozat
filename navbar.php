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
                    <?php
                        if(!isset($_SESSION['id'])){
                            echo '<li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Bejelenkezés</a>
                            </li>';
                        }

                        if(!isset($_SESSION['id'])){
                            echo '<li class="nav-item">
                            <a class="nav-link" href="signup.php">Regisztráció</a>
                            </li>';
                        }
                        if(isset($_SESSION['id'])){
                            echo '<li class="nav-item">
                            <a class="nav-link" href="personaldata.php">
                                Profilom <i class="bi bi-person-circle"></i>
                            </a>
                            </li>';
                                                }
                        if(isset($_SESSION['id'])){
                            echo '<li class="nav-item">
                            <a class="nav-link" href="./includes/logout.inc.php">
                                Kijelentkezés <i class="bi bi-box-arrow-right"></i>
                            </a>
                            </li>';
                        }

                        
                    ?>
                </ul>
            </div>
        </div>
        
    </nav>
</body>