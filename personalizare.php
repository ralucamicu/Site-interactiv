<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Personalizare</title>
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
                        <?php $order_id =mt_rand();
                            ?>
                            <?php
                            if (isset($_GET['p'])) {

                                $product_id = $_GET['p'];

                                $get_product = "SELECT * from tabel_produse_personalizare where id_produs='$product_id'";

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

                            echo '
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <img src="poze/poze/' . $pro_img1 . '" alt="Product Image">
                                       
                                    </div>
                                   
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="title"><h2>' . $pro_title . '</h2></div>
                                      
                                        <div class="price">
                                            <h4>Preț:</h4>
                                            <p>' . $pro_price . ' Lei/RON</p>
                                        </div>
                                       ';
                            ?>
                          
                             <p>Alegeti o fotografie</p>
                             <p> ATENȚIE!! Numele pozei introduse trebuie să aibă următorul format : nume_prenume </p>
                            <form class="trimite" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <input type="file" name="file">
                                        <button type="submit" name="submit">Incarca fotografia</button>
                                    </div>
                                    
                                    <br>
                           </form>
                           <?php 
                               if (isset($_POST['submit'])) {
                                                    $file = $_FILES['file'];
                                                    $fileName = $_FILES['file']['name'];
                                                    $fileTmpName = $_FILES['file']['tmp_name'];
                                                    $fileSize = $_FILES['file']['size'];
                                                    $fileError = $_FILES['file']['error'];
                                                    $fileNType = $_FILES['file']['type'];
                                                    $fileExt= explode('.', $fileName);
                                                    $fileActualExt = strtolower(end($fileExt));
                                                    $allowed = array('jpg','jpeg','png');
                                                    if (in_array($fileActualExt, $allowed)) {
                                                        if ($fileError === 0) {
                                                            if ($fileSize < 500000) {
                                                                $fileDestinaton = 'Uploads/'.$fileName;
                                                                move_uploaded_file($fileTmpName,$fileDestinaton);
                                                              echo ' <div class="col-md-6">
                                                                <img src="Uploads/'.$fileName.'" width=100px >
                                                                </div>';
                                                            }else {
                                                                echo "<script>alert('Fisier prea mare ')<script>";
                                                                }
                                                     }
                                                     else {
                                                            echo "A aparut o eroare";
                                                            }
                                                    }
                                                    else {
                                                        echo "Tip fisier incorect";
                                                        }
                                                }
    ?>
                            <br>
                           
                                    <br>
                            <form method="post"  method="POST" enctype="multipart/form-data">
                            <?php
                            if ($p_cat_id == '1') {
                                echo '<div class="p-size">
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

                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Mesaj" name="mesaj"></textarea>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nume</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Prenume</label>
                                            <input class="form-control" type="text" name="pren">
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
                                            <label>Adresa</label>
                                            <input class="form-control" type="text" name="adresa">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Judet</label>
                                            <input class="form-control" type="text" name="judet">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Localitate</label>
                                            <input class="form-control" type="text" name="localitate">
                                        </div>

                                        <div class="col-md-6">
                                            <label>Cod postal</label>
                                            <input class="form-control" type="text" name="codp">
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" name="send_message_btn">Trimite mesajul</button>
                                    </div>
                               </form>
                              
    </div>
                        </div>
                    </div>
                    
                   <?php
if (isset($_POST['send_message_btn'])) {
                    $nume =$_POST['name'];
                    $prenume =$_POST['pren'];
                    $email =$_POST['email'] ;
                    $telefon =$_POST['telefon'] ;
                    $adresa =$_POST['adresa'];
                    $judet =$_POST['judet'];
                    
                    $localitate =$_POST['localitate'];
                    $codpostal =$_POST['codp'];
                    $mesaj=$_POST['mesaj'];
                    $order_status="in asteptare";
                    $date=date("Y/m/d");

                     
                     $product_size = $_POST['product_size'];
                     $product_color = $_POST['product_color'];

                     $pret = $pro_price;
                     $inserare_personalizare="INSERT INTO comenzi_personalizate (id_produs,nume,prenume,email,telefon,adresa,judet,localitate,cod_postal,mesaj,size,color,pret,order_date,order_status) values
                      ('".$product_id."','".$nume."','".$prenume."','".$email."','".$telefon."','".$adresa."','".$judet."','".$localitate."','".$codpostal."','".$mesaj."','".$product_size."','".$product_color."','".$pret."','".$date."','".$order_status."')";
                     $run_insertcom=mysqli_query($conn,$inserare_personalizare);
                     echo "<script>window.open('mesaj.php','_self')</script>";
}
                                    ?>
                                                
                </div>
            </div>

            <?php
            echo '
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Descriere</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active">
                                        
                                        <p>' . $p_mat . '
                                        </p>
                                        <p>' . $p_dim . '
                                        </p>
                                    </div>
                                    
                                    ';
            ?>
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
                        <a class="nav-link" href="lista_produse.php?id_categorie=1"></i>Textile</a>
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