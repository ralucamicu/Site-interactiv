<?php
include('tabelbaza.php');
//include('function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Creeaza Emotii -Magazin Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon  - cred ca asta pune o poza sus langa numele paginii -->
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
    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <!--Start bloc cod produs-->
                        <!--Copy&Paste  acest bloc de cod pentru a adauga produse -->
                        <?php
                        $produse = "SELECT * FROM tabel_produse_personalizare ";
                        $get_produse = mysqli_query($conn, $produse) or die(mysqli_error($conn));


                        while ($row_produse = mysqli_fetch_array($get_produse)) {
                            $id_categorie = $row_produse['id_cat'];
                            $id_produs = $row_produse['id_produs'];
                            $nume_produs = $row_produse['nume_produs'];
                            $imagine = $row_produse['imagine'];
                            $id_descriere = $row_produse['id_descriere'];
                            $pret = $row_produse['pret'];

                            echo '    
                                <div class="col-md-4">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="personalizare.php?p=' . $id_produs . '">' . $nume_produs . '</a>
                                            <!--de inlocuit cu nume-->
                                        </div>


                                        <div class="product-image">
                                            <a href="detaliu_produs.php?p=' . $id_produs . '">
                                                <img src="poze/poze/' . $imagine . '" width="300" height="300" border="0" alt="Product Image">
                                                <!--de inlocuit cu pozele noastre-->

                                            </a>
                                            <div class="product-action">
                                                <a href="detaliu_produs.php?p=' . $id_produs . '"></a>
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
                        ?>
                        <!--End bloc cod produs-->

                        <!-- Pagination Start  nu cred ca e necesar momentan ,nu avem suficient de multe produse-->
                        <!-- <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                        <!-- Pagination Start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product List End -->

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