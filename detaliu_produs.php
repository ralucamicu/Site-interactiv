<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Creează emoții - Magazin Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include("antet.php");
    ?>
    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-5">

                                <div class="product-slider-single normal-slider">
                                    <img src="poze/poze/<?php echo $pro_img1; ?>" alt="Product Image">

                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">
                                    <div class="title">
                                        <h2><?php echo $pro_title; ?></h2>
                                    </div>

                                    <div class="price">
                                        <h4>Preț:</h4>
                                        <p><?php echo $pro_price; ?> LEI</p>
                                    </div>
                                    <?php

                                    if (isset($_GET['add_cart'])) {
                                        $ip_add = getRealIpUser();

                                        $id_produs = $_GET['add_cart'];

                                        $product_cantitate = $_POST['product_qty'];

                                        $product_size = $_POST['product_size'];

                                        $product_color = $_POST['product_color'];



                                        // $check_product = "SELECT *from cart where ip_add='$ip_add' AND p_id='$id_produs'";

                                        // $run_check = mysqli_query($conn,$check_product);

                                        //  if(mysqli_num_rows($run_check)>0){

                                        // echo "<script>alert('This product has already added in cart')</script>";
                                        //  echo "<script>window.open('product_detail.php?p=$id_produs','_self')</script>";

                                        // }else{

                                        $query = "INSERT  INTO cart (p_id,ip_add,qty,size,color) values ('" . $id_produs . "','" . $ip_add . "','" . $product_cantitate . "','" . $product_size . "','" . $product_color . "')";
                                        //$query = "INSERT INTO tabel_cos (id_produs,nume_produs,ip_add,cantitate,cod_marime,cod_culoare,pret) values ('$id_produs','$pro_title','$ip_add','$product_cantitate','$product_size','$product_color','$pro_price',)";

                                        mysqli_query($conn, $query);

                                        echo "<script>window.open('detaliu_produs.php?p=$id_produs.','_self')</script>";
                                    }
                                    //}



                                    ?>
                                    <form action="detaliu_produs.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                                        <div class="quantity">
                                            <h4>Cantitate:</h4>
                                            <select name="product_qty" class="btn-group btn-group-sm">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <?php
                                        if ($p_cat_id == '1') {
                                            echo '
                                        <div class="p-size">
                                            <h4>Mărime:</h4>
                                            <select name="product_size"   class="btn-group btn-group-sm">
                                                <option>Alege marime</option>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select> 
                                        </div>
                                        <div class="p-color">
                                            <h4>Culoare:</h4>
                                            <select name="product_color" class="btn-group btn-group-sm">
                                                <option>Alb</option>
                                                <option>Negru</option>
                                                <option>Albastru</option>
                                            </select> 
                                        </div>
                                        ';
                                        }
                                        ?>
                                        <div class="add-to-cart">

                                            <p class="text-center buttons"><button name="add_cart" class="btn btn-primary i fa fa-shopping-cart"> Adaugă în coș</button></p>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#specification">Specificații produse</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4> </h4>
                                <p>
                                   <?php echo $p_dim; ?>
                                </p>
                                <p>
                                    <?php echo $p_mat; ?>
                                </p>

                            </div>
                            <div id="specification" class="container tab-pane fade">

                                <div class="reviews-submitted">
                                    <div class="reviewer">
                                        Detalii pentru starea și livrarea produselor :
                                    </div><br>
                                    <p>
                                        Deoarece suntem o companie mică, locală, durata de fabricație și de
                                        livrarea produselor poate dura undeva la 5-6 zile. În cazul în care
                                        durata de livrare este depașită sau întâmpinați alte probleme
                                        nu ezitați să ne contactați!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Categorii</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="lista_produse.php?id_categorie=1"></i>Personalizari textile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lista_produse.php?id_categorie=2"></i>Elemente Evenimente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lista_produse.php?id_categorie=3"></i>Elemente personalizare Auto si Magazine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lista_produse.php?id_categorie=4"></i>Elemente din lemn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lista_produse.php?id_categorie=5"></i>Elemente din plexiglas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lista_produse.php?id_categorie=6"></i>Elemente din polistiren</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Side Bar End -->
        </div>
    </div>
    </div>
    <!-- Product Detail End -->

    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-md-12">
                            <h2>Produse din aceeasi categorie <h2>
                        </div>
                        <?php
                        $produse = "SELECT * FROM tabel_produse WHERE id_cat ='$p_cat_id' LIMIT 0,3";
                        $get_produse = mysqli_query($conn, $produse);


                        while ($row_produse = mysqli_fetch_array($get_produse)) {
                            $id_categorie = $row_produse['id_cat'];
                            $id_produs = $row_produse['id_produs'];
                            $nume_produs = $row_produse['nume_produs'];
                            $imagine = $row_produse['imagine'];
                            $id_descriere = $row_produse['id_descriere'];
                            $pret = $row_produse['pret'];

                            if ($id_produs != $product_id) {
                                echo '
                                <div class="col-md-4">
                                     <div class="product-item">
                                                                <div class="product-title">
                                                                    <a href="detaliu_produs.php?p=' . $id_produs . '">' . $nume_produs . '</a>
                                                                    <!--de inlocuit cu nume-->
                                                                </div>


                                        <div class="product-image">
                                                                <a href="detaliu_produs.php?p=' . $id_produs . '">
                                                                    <img src="poze/poze/' . $imagine . '" alt="Product Image">
                                                                    <!--de inlocuit cu pozele noastre-->

                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="detaliu_produs.php?p=' . $id_produs . '"><i class="fa fa-cart-plus"></i></a>
                                                                    <!-- nue sigur daca ramne -    
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                            -->
                                                                </div>
                                        </div>
                                                        <div class="product-price">
                                                            <h3><span>Lei/Ron  </span>' . $pret . '</h3>
                                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php


        include("footer.php");
        ?>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>