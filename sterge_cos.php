<?php 
                                    
      include ("tabelbaza.php") ;                             
                                        
                                       
                                        
                                        if(isset($_POST['update'])){
                                            if($_POST['remove']!=0){
                                            foreach($_POST['remove'] as $remove_id){
                                                
                                                
                                                $delete_product = "DELETE FROM cart WHERE p_id='$remove_id'";
                                                
                                                $run_delete = mysqli_query($conn,$delete_product);
                                                
                                                if($run_delete){
                                                    
                                                    echo "<script>window.open('cos_produse.php','_self')</script>";
                                                    
                                                }
                                            }
                                        }
                                            else{
                                                echo "<script>window.open('cos_produse.php','_self')</script>";
                                            
                                            }
                                            
                                        }
                                        
                                    
                                    
                                    ?>
                            