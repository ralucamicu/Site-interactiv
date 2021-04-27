<?php
include('tabelbaza.php');
?>

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
    include("antet.php"); ?>
    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php
                        $sql = " SELECT * FROM tabel_categorii ";
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id_categorie = $row['id_cat'];
                                $nume_categorie = $row['nume_cat'];
                                $imagine = $row['imagine'];

                                echo '
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="lista_produse.php?id_categorie=' . $id_categorie . '">' . $nume_categorie . '</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="lista_produse.php?id_categorie=' . $id_categorie . '">
                                            <img src="poze/Iconite categorii/' . $imagine . '" width="300" height="300" border="0" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                        } ?>
                    </div>

                </div>

                <!-- Side Bar Start -->

                <!-- Side Bar End -->
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