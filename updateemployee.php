<?php 
include "connect.php";

session_start();
 $session = $_SESSION['id'];

if (isset($_POST['updateemployee'])){



    require_once('connect.php');
    $userid = $_POST['update_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $birthday = $_POST['birthday'];
    $dateemployed = $_POST['dateemployed'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $educ_attainment = $_POST['educ_attainment'];
    $employment_record = $_POST['employment_record'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];

   

    if (empty($fullname) && empty($username) && empty($phonenumber)&& empty($birthday)
    && empty($birthday) && empty($educ_attainment) && empty($department )) {
        echo "Empty Fields";
     
    }
      else {
     
        $sql ="SELECT * FROM user_table WHERE id = '$userid'";

        $result3 = $conn->query($sql);

        $sql = "UPDATE user_table SET 
        fullname='$fullname', 
        email='$email', 
        birthday='$birthday', 
        date_employed='$dateemployed',
        educ_attainment='$educ_attainment', 
        employment_record='$employment_record', 
        gender='$gender', 
        status='$status',  
        phone_number='$phonenumber', 
        department='$department', 
        designation='$designation'
        WHERE id='$userid'"; 
                                                  

            if($conn->query($sql) === TRUE) {
                ?>
                <script>
                   
                      alert("Employee Updated Succesfully");
                      window.location.href = "employee.php";
                    
                </script>
                <?php
            } else {
                echo "Error " . $sql . ' ' . $conn->connect_error;
            }
            $conn->close();
        }


    }


    if (isset($_POST['deleteemployee'])){



        require_once('connect.php');
        $userid = $_POST['update_id'];
        $archive =1; 
    
       
    
        if (empty($fullname) && empty($username) && empty($phonenumber)&& empty($birthday)
        && empty($birthday) && empty($educ_attainment) && empty($department )) {
            echo "Empty Fields";
         
        }
          else {
         
            $sql ="SELECT * FROM user_table WHERE id = '$userid'";
    
            $result3 = $conn->query($sql);
    
            $sql = "UPDATE user_table SET 
            archive='$archive'
           WHERE id='$userid'"; 
                                                      
    
                if($conn->query($sql) === TRUE) {
                    ?>
                    <script>
                       
                          alert("Employee Archive Succesfully");
                          window.location.href = "employee.php";
                        
                    </script>
                    <?php
                } else {
                    echo "Error " . $sql . ' ' . $conn->connect_error;
                }
                $conn->close();
            }
    
    
        }


        

    







?>