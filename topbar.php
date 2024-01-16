<?php 
 session_start();
 $sessionid=$_SESSION['id'];
 $sessionfullname=$_SESSION['fullname'];
 $sessionuser_name=$_SESSION['user_name'];


//Check user login or not
if(!isset($sessionid)){

    header('Location: login.php');   
  
}


?>


<div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

             

                <div class="userz">
                <span class="title"><?php 
               
                // include "connect.php";
              
                // $sql1 = "SELECT * FROM user_table WHERE id='$sessionid'";
                // $result1 = $conn->query($sql1);
                // if ($result1->num_rows > 0) {
            
                //     while ($row1 = $result1->fetch_assoc() ) {
                        
                //        $string = $row1['fullname'];
                //        $string1 = $row1['user_name'];
                //        $str_arr=explode("-",  $string); 
                //        $str_arr1=explode("-",  $string1);
                //        echo $str_arr['0']."[".$str_arr1['0']."]";
                      
                       
                //     }
                    
                //     }
                echo $sessionfullname."[".$sessionuser_name."]";
                
                ?></span>
                </div>
            </div>