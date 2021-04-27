<?php
include("tabelbaza.php");

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
                     $inserare_personalizare="INSERT INTO comenzi_personalizate (order_id,id_produs,nume,prenume,email,telefon,adresa,judet,localitate,cod_postal,mesaj,size,color,pret,order_date,order_status) values
                      ('".$order_id."','".$nume."','".$prenume."','".$email."','".$telefon."','".$adresa."','".$judet."','".$localitate."','".$codpostal."','".$mesaj."','".$product_size."','".$product_color."','".$pret."','".$date."','".$order_status."')";
                     $run_insertcom=mysqli_query($conn,$inserare_personalizare);
                     echo "<script>window.open('mesaj.php','_self')</script>";

                                    ?>