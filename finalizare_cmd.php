<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Adresa de facturare</title>
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
    <!-- Checkout Start -->
    <div class="checkout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-inner">
                        <div class="billing-address">
                            <h2>Adresa de facturare</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="comadare.php" method="POST">
                                        <label>Nume</label>
                                        <input class="form-control" type="text" name="nume">
                                </div>
                                <div class="col-md-6">
                                    <label>Prenume</label>
                                    <input class="form-control" type="text" name="prenume">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label>Telefon</label>
                                    <input class="form-control" type="text" name="telefon">
                                </div>
                                <div class="col-md-12">
                                    <label>Adresă</label>
                                    <input class="form-control" type="text" name="adresa">
                                </div>
                                <div class="col-md-6">
                                    <label>Județ</label>
                                    <input class="form-control" type="text" name="judet">
                                </div>
                                <div class="col-md-6">
                                    <label>Localitate</label>
                                    <input class="form-control" type="text" name="localitate">
                                </div>

                                <div class="col-md-6">
                                    <label>Cod poștal</label>
                                    <input class="form-control" type="text" name="codpostal">
                                </div>


                            </div>
                        </div>


                    </div>

                </div>
                <?php
                //include('function.php');
                $ip_add = getRealIpUser();
                $total = 0;
                $totaltp = 0;
                $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

                $run_cart = mysqli_query($conn, $select_cart);

                while ($row_cart = mysqli_fetch_array($run_cart)) {

                    $pro_id = $row_cart['p_id'];
                    $pro_qty = $row_cart['qty'];
                    $produse = "SELECT * FROM tabel_produse where id_produs='$pro_id'";
                    $run_produse = mysqli_query($conn, $produse);

                    while ($row_products = mysqli_fetch_array($run_produse)) {
                        $sub_total = $row_products['pret'] * $pro_qty;
                        $total += $sub_total;
                        $totaltp = $total + 15;
                    }
                } ?>
                <div class="col-lg-4">
                    <div class="checkout-inner">
                        <div class="checkout-summary">
                            <?php
                            echo '

                                <h1>Total coș</h1>
                                
                                <p class="sub-total">Sub Total<span>' . $total . 'Lei</span></p>
                                <p class="ship-cost">Transport<span>15 Lei</span></p>
                                <h2>Total<span>' . $totaltp . 'Lei</span></h2>
                                ';
                            ?>
                        </div>

                        <div class="checkout-payment">
                            <div class="payment-methods">
                                <h1>Metodă de plată</h1>

                                <div class="payment-method">

                                    <label>Plata la livrare
                                        <p>
                                            Coletul se livrează prin fan-curier, transportul costă 15 lei.
                                        </p>
                                    </label>

                                    <div class="payment-content">
                                        <p>
                                            Coletul se livreaza prin fan-curier , transportul costa 15 lei.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn">
                                <button>Plasesază Comanda</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

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