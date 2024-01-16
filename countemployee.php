<?php 
                        include "connect.php";
                        $sql = "SELECT * FROM  user_table WHERE user_type = 1 AND archive = 0 ";

                        if ($result = mysqli_query($conn, $sql)) {

                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            
                           
                        
                         }

                         $sql1 = "SELECT * FROM  user_table WHERE user_type = 1 AND archive = 0 AND status= 0";

                         if ($result1 = mysqli_query($conn, $sql1)) {
 
                             // Return the number of rows in result set
                             $rowcount1 = mysqli_num_rows($result1);
                             
                            
                         
                          }

                          $sql2 = "SELECT * FROM  user_table WHERE user_type = 1 AND archive = 0 AND status= 1";

                          if ($result2= mysqli_query($conn, $sql2)) {
  
                              // Return the number of rows in result set
                              $rowcount2 = mysqli_num_rows($result2);
                              
                             
                          
                           }

                           $sql3 = "SELECT * FROM  notice_table WHERE archive = 0";

                           if ($result3= mysqli_query($conn, $sql3)) {
   
                               // Return the number of rows in result set
                               $rowcount3 = mysqli_num_rows($result3);
                               
                              
                           
                            }
 



                        
                        ?>