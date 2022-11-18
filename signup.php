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
                    <form action="includes/signup.inc.php" method="post">
                        <input type="text" name="uid" id="uid" class="" placeholder="Felhasználónév" required> <br>
                        <input type="email" name="mail" id="mail" class="" placeholder="E-mail cím" required> <br>
                        <input type="password" name="pwd" id="pwd" class="" placeholder="Jelszó" minlength="8" required> <br>
                        <input type="password" name="pwd2" id="pwd2" class="" placeholder="Jelszó ismét" minlength="8" required> <br>
                        <input type="tel" name="phone" id="p" class="" placeholder ="Telefonszám" required> <br>
                        <!------>
                        <input type="text" name="lastname" id="" class="" placeholder="Vezetéknév" required> <br>
                        <input type="text" name="firstname" id="" class="" placeholder="Keresztnév" required> <br>
                        <input type="number" name="postcode" id="" class="" placeholder= irányítószám required min="1000" max="9999" > <br>
                        <input type="text" name="settlement" id="" class="" placeholder="telpülés" required> <br>
                        <input type="text" name="adress" id="" class="" placeholder="cím" required> <br>
                        
                        <div class="d-block text-center">
                            <button type="submit" name="signup">Regisztráció</button>
                        </div>
            
                    </form>
                    
                    
                </div> 
            </div>
        </div><?php
            echo 'Current PHP version: ' . phpversion();
        ?>
    </main>
</body>