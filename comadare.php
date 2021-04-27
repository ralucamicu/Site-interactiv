<?php
include("function.php");
$ip_add = getRealIpUser();
$nume =$_POST['nume'];
$prenume =$_POST['prenume'];
$email =$_POST['email'] ;
$telefon =$_POST['telefon'] ;
$adresa =$_POST['adresa'];
$judet =$_POST['judet'];
$nume =$_POST['nume'];
$localitate =$_POST['localitate'];
$codpostal =$_POST['codpostal'];
$order_id=mt_rand();
$total=0;
$status = "in asteptare";

$date=date("Y/m/d");
$select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

$run_cart = mysqli_query($conn,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
      $pro_id = $row_cart['p_id'];
    
    $pro_qty = $row_cart['qty'];
    
    $pro_size = $row_cart['size'];

    $pro_color = $row_cart['color'];
    
    $produse="SELECT * FROM tabel_produse where id_produs='$pro_id'";
    $run_produse=mysqli_query($conn,$produse);    
    
    while($row_products = mysqli_fetch_array($run_produse)){
        $pro_title= $row_products['nume_produs'];
        $sub_total = $row_products['pret']*$pro_qty;
        $total+=$sub_total;

        $inserare_prod_com="INSERT INTO produse_comandate (order_id,id_produs,nume_produs,qty,size,color,subtotal,order_status) 
        values ('$order_id','$pro_id ','$pro_title','$pro_qty','$pro_size','$pro_color','$sub_total','$status')";
        $run_insertcom=mysqli_query($conn,$inserare_prod_com);
    }}
        $inserare_client="INSERT INTO comenzi (order_id,nume_client,prenume_client,adresa,judet,localitate,cod_postal,order_date,total,
        order_status,email,telefon) values ('".$order_id."','".$nume."','".$prenume."','".$adresa."','".$judet."','".$localitate."',
        '".$codpostal."','".$date."','".$total."','".$status."','".$email."','".$telefon."')";
        $run_insertcl=mysqli_query($conn,$inserare_client);

        $delete_cart = "DELETE FROM cart where ip_add='$ip_add'";

                    $run_delete = mysqli_query($conn,$delete_cart);
                    
                    echo "<script>alert('Your orders has been submitted, Thanks')</script>";
                    
                    echo "<script>window.open('mesaj.php','_self')</script>";
?>