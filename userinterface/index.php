<?php
    require_once 'header.php';
    require_once 'navbar.php';
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="card mt-4 d-flex align-items-center  mx-auto" style="width: 18rem;">
                <div class="card-body ">
                    <p class="card-tittle text-center fs-3 fw-bold">Jelentkezz be!</p> 
                    <form class="" action="includes/login.inc.php" method="post">
                        <label for="username">Felhasználónév:</label>
                        <br>
                        <input type="text" id="username" name="username" placeholder="Felhasználónév/E-mail">
                        <br>
                        <label for="password">Jelszó:</label>
                        <br>
                        <input type="password" id="password" name="password" placeholder="password">
                        <div id="login-button-div">
                            <button type="submit" name="login" id="login-button">Bejelentkezés</button>
                        </div>
                    </form>
                    
                    <div class="text-center">
                        <a href="./signup.php" class="btn">Regisztráció</a> 
                    </div>
                </div> 
            </div>
        </div>
    </main>
</body>
<?php 
    if(isset($_GET['error'])){
        if ($_GET['error'] == "emptyfields") {
            echo '<script>
            Swal.fire({
                title: "Hiba!",
                text: "Kérem töltse ki az összes mezőt!",
                icon: "error",
                confirmButtonColor: "red"
              });
                </script>';
        }
        if ($_GET['error'] == "wrongpasswordorusername") {
            echo '<script>
            Swal.fire({
                title: "Hiba!",
                text: "Rossz felhasználónév vagy jelszó!",
                icon: "error",
                confirmButtonColor: "red"
              });
                </script>';
        }
        
    }
?>
