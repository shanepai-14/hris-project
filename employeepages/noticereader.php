<?php 
 session_start();
 $session = $_SESSION['id'];

if (isset($_POST['readnotice'])){


    
    require_once('../connect.php');
	$noticeid=$_POST['postid'];
	  $coma = ",";
   

    if (empty($fullname) && empty($username) && empty($phonenumber)&& empty($birthday)
    && empty($birthday) && empty($educ_attainment) && empty($department )) {
        echo "Empty Fields";
     
    }
      else {
     
        

        $sql = "UPDATE notice_table SET 
        noticeread= concat(noticeread ,'-','$session')
        WHERE id='$noticeid'"; 
                                                  

            if($conn->query($sql) === TRUE) {
                ?>
                <script>
                   
                      alert("Read Notice Succesfully");
                      window.location.href = "notice.php";
                    
                </script>
                <?php
            } else {
                echo "Error " . $sql . ' ' . $conn->connect_error;
            }
            $conn->close();
        }


    }





?>