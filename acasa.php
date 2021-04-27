<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Creează emoții - Magazin Online</title>
    <!--Am schimbat si titlul-->
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
    <!-- Main Slider Start -->
    <div class="header">
        <br><br>
        <div class="container-fluid">
            <div class="row row-slider">
                <div class="col-md-3">
                    <br><br><br>
                    <nav class="navbar bg-light">
                        <p class="main-header-p">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bună ziua!
                            <br>&nbsp;&nbsp;Suntem aici pentru a vă ajuta<br> ca fiecare detaliu important <br>din evenimentul special, <br>ce urmează să vină, să nu <br>lipsească.
                            <br>&nbsp;&nbsp;Pentru a-i surprinde pe cei <br> din jurul dumneavostră, este <br>important ca surpriza să fie<br> impresionantă atât prin<br> design cât și prin vorbele<br> alese care să vă definească <br> întrutotul.

                        </p>
                    </nav>
                </div>
                <div class="col-md-6"><br>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;În curând vor aparea aceste produse. Fiți pe fază!</h4><br>
                    <div class="header-slider normal-slider">
                        <div class="header-slider-item">
                        
                            <img src="poze/poze/slider1.jpg" alt="Slider Image" />
                           
                        </div>
                        <div class="header-slider-item">
                            <img src="poze/poze/slider2.jpg" alt="Slider Image" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <br><br><br>
                    <nav class="navbar bg-light">
                        <p class="main-header-p">
                            &nbsp;&nbsp;Noi vă putem ajuta să creați <br>propriul cadou astfel încât <br>să realizați primul impact <br>asupra celor dragi așa cum vi <br>l-ați imaginat.
                            <br>&nbsp;&nbsp;În cazul în care nu știți ce<br> vă doriți sau nu aveți idee de <br>unde să începeți, noi vă <br>punem la dispoziție câteva <br>produse realizate de<br> magazinul nostru.
                        </P>
                    </nav>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <!-- Main Slider End -->
    <!-- Category Start-->
    <div class="category">
        <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cele mai iubite de clienții noștri:</h4><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="poze/poze/Rama_foto_1(4102001).jpg" />
                        <a class="category-name" href="detaliu_produs.php?p=4102001">
                            <p>Pentru amintiri de neuitat!</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-250">
                        <img src="poze/poze/Globuri_1(4201001).jpg" />
                        <a class="category-name" href="detaliu_produs.php?p=4201001">
                            <p>Sărbătorește într-un mod croit special pentru tine!</p>
                        </a>
                    </div>
                    <div class="category-item ch-150">
                        <img src="poze/poze/Masa_polistiren_candybar_2(6101002).jpg" />
                        <a class="category-name" href="detaliu_produs.php?p=6101002">
                            <p>Alege o variantă stylish și practică pentru orice petrecere! </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-150">
                        <img src="poze/poze/Invitatie_botez_1(2201001).jpg" />
                        <a class="category-name" href="detaliu_produs.php?p=2201001">
                            <p>Cauți să îți sărbătorești următorul eveniment special din viață?</p>
                        </a>
                    </div>
                    <div class="category-item ch-250">
                        <img src="poze/poze/Stiker_frizerie_1(3103001).jpg" />
                        <a class="category-name" href="detaliu_produs.php?p=3103001">
                            <p>Dă caracter oricărei suprafață.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="poze/poze/Cutie_vin(4104001).jpg" />
                        <a class="category-name" href="detaliu_produs.php?p=4104001">
                            <p>Surpinde-i pe cei dragi ție!</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <!-- Category End-->
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