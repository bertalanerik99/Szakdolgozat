<?php
    require 'header.php';
    require 'navbar.php';
?>
<body>
    <main>
        
        
        <div class="container">
            <div class="card mt-4 d-flex align-items-center justify-content-center mx-auto" style="width: 18rem;">
                <div class="card-body ">
                    <p class="card-tittle text-center fs-3 fw-bold">Regisztráció</p> 
                    <form action="includes/signup.inc.php" method="post" name="signup-form">
                        <input type="text" name="uid" id="uid" class="uid mb-2" placeholder="Felhasználónév" required> <br>
                        <input type="email" name="mail" id="mail" class="mail mb-2" placeholder="E-mail cím" required> <br>
                        <input type="password" name="pwd" id="pwd" class="pwd mb-2" placeholder="Jelszó" minlength="8" required> <br>
                        <input type="password" name="pwd2" id="pwd2" class="pwd2 mb-2" placeholder="Jelszó ismét" minlength="8" required> <br>
                        <input type="tel" name="phone" id="phone" class="phone mb-2" placeholder ="Telefonszám" required> <br>
                        <!------>
                        <input type="text" name="lastname" id="lastname" class="lastname mb-2" placeholder="Vezetéknév" required> <br>
                        <input type="text" name="firstname" id="firstname" class="firstname mb-2" placeholder="Keresztnév" required> <br>
                        <input type="number" name="postcode" id="postcode" class="postcode mb-2" placeholder= irányítószám required min="1000" max="9999" > <br>
                        <input type="text" name="settlement" id="settlement" class="settlement mb-2" placeholder="telpülés" required> <br>
                        <input type="text" name="address" id="address" class="address mb-2" placeholder="cím" required> <br>
                        
                        <div class="d-block text-center">
                            <button type="submit" name="signup">Regisztráció</button>
                        </div>
            
                    </form>
                    
                    
                </div> 
            </div>
        </div>
        <?php
            echo 'Current PHP version: ' . phpversion();
        ?>
    </main>
</body>
<link rel="stylesheet" href="check.css">
<script src="check.js"></script>