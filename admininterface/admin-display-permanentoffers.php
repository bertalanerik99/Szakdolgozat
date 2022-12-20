<?php
require_once './includes/admin-databasehandler.inc.php';
?>
<body>
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kép</th>
                <th scope="col">Név</th>
                <th scope="col">Leírás</th>
                <th scope="col">Ár</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sorszam = 1;
                    $sql = "SELECT * FROM permanent_offers";
                    $select = mysqli_query($connect, $sql);
                    
                    while($row = mysqli_fetch_array($select)){
                    echo "<tr>";
                    echo "<td>$sorszam.</td>";
                    echo "<td><img src='data:image;base64,".$row["product_image"]."' width=60 height=40></td>";
                    echo "<td>$row[product_name]</td>";
                    echo "<td>$row[product_description]</td>";
                    echo "<td>$row[product_price] Ft</td>";
                    echo "<td><form action='./includes/changeordelete-product.inc.php' method='post'>
                    <button type='submit' class='btn btn-success' name='modify' value='$row[id]'><i class='bi bi-pencil-square'></i></button>
                    <button type='submit' class='btn btn-danger' name='delete' value='$row[id]'><i class='bi bi-trash'></i></button>
                    </form></td>";
                    echo "</tr>";
                    $sorszam = $sorszam + 1;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php 
    if(isset($_GET['error'])){
        if ($_GET['error'] == "deleteerror") {
            echo '<script>
            Swal.fire({
                title: "Hiba!",
                text: "Hiba történt a törlés közben!",
                icon: "error",
                confirmButtonColor: "red"
              });
                </script>';
        }
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
        if ($_GET['error'] == "toobigfile") {
            echo '<script>
            Swal.fire({
                title: "Hiba!",
                html: "<p><strong>Túl nagy méretű a fájl!</strong></p><p>Maximum 100KB-os méretű lehet a fájl!</p>",
                icon: "error",
                confirmButtonColor: "red"
              });
                </script>';
        }
        if ($_GET['error'] == "wrongfiletype") {
            echo '<script>
            Swal.fire({
                title: "Hiba!",
                html: "<p><strong>Rossz file kiterjesztés!</strong></p><p>Megengedett Fájlformátum: JPEG, JPG, PNG</p>",
                icon: "error",
                confirmButtonColor: "red"
              });
                </script>';
        }
        if ($_GET['error'] == "erroruploading" || $_GET['error'] == "unsuccessfull") {
            echo '<script>
            Swal.fire({
                title: "Hiba!",
                html: "<p><strong>Hiba a feltöltés közben!</strong>",
                icon: "error",
                confirmButtonColor: "red"
              });
                </script>';
        }
        
    }
    if(isset($_GET['success'])){
        if ($_GET['success'] == "successful") {
            echo '<script>
            Swal.fire({
                title: "Siker!",
                html: "<p><strong>Új termék hozzáadva!</strong></p>",
                icon: "success",
                confirmButtonColor: "green",
                
              });
                </script>';
        }
    }
    if(isset($_GET['success'])){
        if ($_GET['success'] == "deletesuccess") {
            echo '<script>
            Swal.fire({
                title: "Siker!",
                html: "<p>Sikeresen töröltük a terméket</p>",
                icon: "success",
                confirmButtonColor: "green",
                
              });
                </script>';
        }
    }
    
?>