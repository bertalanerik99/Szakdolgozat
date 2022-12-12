<?php 
    require_once 'admin-header.php';
    require_once 'admin-navbar.php';
?>
<body>
    <div class="container">
        <div class="row">
        <div class="card mt-4 d-flex align-items-center  mx-auto" style="width: 18rem;">
                <div class="card-body ">
                    <p class="card-tittle text-center fs-3 fw-bold">Admin login</p> 
                    <form calss="" action="includes/adminlogin.inc.php" method="post">
                        <label for="username">Felhasználónév:</label>
                        <br>
                        <input type="text" id="username" name="adminusername" placeholder="Felhasználónév/E-mail">
                        <br>
                        <label for="password">Jelszó:</label>
                        <br>
                        <input type="password" id="password" name="adminpassword" placeholder="Jelszó">
                        <div class="text-center">
                            <button type="submit" name="adminlogin" id="login-button">Bejelentkezés</button>
                        </div>
                    </form>
                </div> 
            </div>
            </div>
        </div>
    </div>
</body>
