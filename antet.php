<?php
include('tabelbaza.php');
include("function.php");

?>

<?php

if (isset($_GET['p'])) {

    $product_id = $_GET['p'];

    $get_product = "SELECT * from tabel_produse where id_produs='$product_id'";

    $run_product = mysqli_query($conn, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['id_cat'];

    $pro_title = $row_product['nume_produs'];

    $pro_price = $row_product['pret'];

    $pro_desc = $row_product['id_descriere'];

    $pro_img1 = $row_product['imagine'];



    $get_p_desc = "SELECT * from tabel_descriere where id_descriere='$pro_desc'";

    $run_product = mysqli_query($conn, $get_p_desc);

    $row_product = mysqli_fetch_array($run_product);

    $p_mat = $row_product['material'];

    $p_dim = $row_product['dimensiuni'];
}

?>


<!-- Top bar Start -->
<div class="top-bar">
    <img src="poze/banner_cropped.png" alt="logo" id="image-top-bar" height="150">
</div>
<!-- Top bar End -->

<!-- Nav Bar Start -->
<div class="nav top-nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENIU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-between">
                <div class="navbar-nav mr-auto">
                    <a href="acasa.php" class="nav-item nav-link">Acasă</a>
                    <a href="categorii.php" class="nav-item nav-link">Categorii</a>
                    <a href="lista_produse_pers.php" class="nav-item nav-link">Personlizare de produs</a>
                    <!--<a href="cos_produse.php" class="nav-item nav-link">Coșul meu</a>-->
                    <a href="contact.php" class="nav-item nav-link">Contactează-ne & Despre noi</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="cos_produse.php" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->