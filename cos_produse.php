<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cos de cumparaturi</title>
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
    <!-- Cart Start -->
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <form action="sterge_cos.php" method="POST" enctype="multipart/form-data">
                        <?php
                        $ip_add = getRealIpUser();
                        $select_tabel = "SELECT * FROM cart where ip_add ='$ip_add'";
                        $run_cos = mysqli_query($conn, $select_tabel);
                        $count = mysqli_num_rows($run_cos);
                        ?>
                        <p>Ai <?php echo $count; ?> produse in cos</p>
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th colespam="7">Imagine produs</th>
                                            <th>Denumire produs</th>
                                            <th>Preț</th>
                                            <th>Cantitate</th>
                                            <th>Culoare</th>
                                            <th>Mărime</th>
                                            <th>Total</th>
                                            <th>Șterge</th>
                                        </tr>
                                    </thead>

                                    <tbody class="align-middle">
                                        <?php
                                        $total = 0;

                                        while ($row = mysqli_fetch_array($run_cos)) {

                                            $produs_id = $row['p_id'];
                                            $produs_marime = $row['size'];
                                            $produs_cantitate = $row['qty'];
                                            $produs_culoare = $row['color'];

                                            $produse = "SELECT * FROM tabel_produse where id_produs='$produs_id'";
                                            $run_produse = mysqli_query($conn, $produse);
                                            while ($row_produse = mysqli_fetch_array($run_produse)) {
                                                $tilu = $row_produse['nume_produs'];
                                                $poza = $row_produse['imagine'];
                                                $pret = $row_produse['pret'];

                                                $subtotal = $pret * $produs_cantitate;
                                                $total += $subtotal;
                                        ?>
                                                <tr>
                                                    <td>
                                                        <div class="img">
                                                            <a href="#"><img src="poze/poze/<?php echo $poza; ?>" alt="Image"></a>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="name">
                                                            <a href=" detaliu_produs.php?p=<?php echo $produs_id; ?>"> <?php echo $tilu; ?>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="price">
                                                            <?php echo $pret; ?>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="cantitate">
                                                            <p>
                                                                <?php echo $produs_cantitate; ?>
                                                            </p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="color">
                                                            <?php echo $produs_culoare; ?>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="size">
                                                            <?php echo $produs_marime; ?>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                        <?php echo $subtotal; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                            <div>    
                                                            <input type="checkbox" name="remove[]" value="<?php echo $produs_id; ?>">
                                                        </div>    
                                                 </td>
                                                </tr>
                                             <?php
                                                        }
                                                    }
                                                    ?>
                                    </tbody>
                                  </table>
                               
                                        <div class="col-lg-8">
                                        <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                            <i class="fa fa-refresh"></i> Actualizează coșul
                                        </button>
                                        </div>
                                </div>
                          </div>
                                
                                
                    </form>
                </div>
           


            <div class="col-lg-4">
                <div class="cart-page-inner">
                         <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                            <div class="cart-content">
                                                <h1>Sumar cumpărături</h1>
                                                <p>Subtotal<span><?php echo $total; ?> Lei</span></p>
                                                <p>Transport<span>15 Lei</span></p>
                                                <h2>Total<span><?php echo $total + 15; ?> Lei</span></h2>
                                            </div>
                        
                                            <div  >
                                        <a href=" finalizare_cmd.php"> <button class="btn btn-default">Adresă facturare</button>
                                                </div>
                                    </div>
                                     

                               </div>
                        </div>
                    </div>
                 </div>
                 
                                                </div>               
         </div>                                   
     </div>
                                                </div>
  
   
   
   
   <br> <br>
   
    <!-- Cart End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>