<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="createEmployee.css"> 
  <link rel="stylesheet" href="loadingspinner.css">
  <title></title>
</head>
<body>
<div id="p2" class="containerz">
 
<?php
include "../connect.php";

$session = $_SESSION['id'];

 
$sql1 = "SELECT * FROM user_table WHERE id='$session'";
$result1 = mysqli_query($conn,$sql1);
while($row1 = mysqli_fetch_array($result1) ){
?>

  <form action="#" method="post">

    <div class="user__details" id="refresh-section">
    
      <div class="input__box">
        <span class="details">Full Name</span>
        <input type="text" placeholder="E.g: John Smith" value="<?php echo $row1['2'];  ?>" name="fullname" required>
      </div>
      <div class="input__box">
        <span class="details">Username</span>
        <input type="text" placeholder="johnWC98"  value="<?php echo $row1['4'];  ?>" name="username" disabled>
      </div>
      <div class="input__box">
        <span class="details">Email</span>
        <input type="email" placeholder="sample@gmail.com" value="<?php echo $row1['3'];  ?>" name="email" required>
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="0912-345-6789"  value="<?php echo $row1['13'];?>" name="phonenumber" required>
      </div>
      <div class="input__box">
        <span class="details">Password</span>
        <input type="password" placeholder="********" value="<?php echo $row1['5'];  ?>" name="password" required>
      </div>
      <div class="input__box">
        <span class="details">Confirm Password</span>
        <input type="password" placeholder="********"  value="<?php echo $row1['5'];  ?>" name="confirmpassword" required>
      </div>
      <div class="input__box">
        <span class="details">Birthday</span>
        <input type="date" placeholder="E.g: John Smith" value="<?php echo $row1['6'];  ?>" name="birthday" required>
      </div>
      <div class="input__box">
        <span class="details">Date Employed</span>
        <input type="date" placeholder="E.g: John Smith" name="dateemployed" value="<?php echo $row1['7'];  ?>" required>
      </div>
      <div class="input__box">
        <span class="details">Department</span>
        <input type="text" placeholder="IT" name="department" value="<?php echo $row1['14'];  ?>" required>
      </div>
      <div class="input__box">
        <span class="details">Designation</span>
        <input type="text" placeholder="teacher" name="designation" value="<?php echo $row1['15'];  ?>" required>
      </div>
      <div class="input__box">
        <span class="details">Educational Attainment</span>
        <textarea id="message" name="educ_attainment" placeholder="" ><?php echo $row1['8'];  ?>"</textarea>
      </div>
      <div class="input__box">
        <span class="details">Employment Record</span>
        <textarea id="message" name="employment_record" placeholder=""><?php echo $row1['9'];  ?>"</textarea>
      </div>
     
      <span style="font-size:25px;">Status :   <?php 
                  if($row1['11'] == 0){
                    echo   '<span style="font-size:25px;" class="status pending">Pending</span>';
                  }else{
                   echo '<span style="font-size:25px;" class="status delivered">Approved</span>';
                  }
                 
     
     
     ?></span>


    
    </div>
    <div class="gender__details">
      

   


      <input type="radio" name="gender" value="Male"  id="dot-1">
      <input type="radio" name="gender" value="Female" id="dot-2">
      <input type="radio" name="gender" value="Prefer not to say" id="dot-3">
      <span class="gender__title">Gender</span>
      <div class="category">
        <label for="dot-1">
          <span class="dot one"></span>
          <span>Male</span>
        </label>
        <label for="dot-2">
          <span class="dot two"></span>
          <span>Female</span>
        </label>
        <label for="dot-3">
          <span class="dot three"></span>
          <span>Prefer not to say</span>
        </label>
        <?php 
    if( $row1['10'] == "Male"){ 
     
      ?>
      <script type="text/javascript"> 
        document.getElementById("dot-1").checked="true";
</script>

<?php 
    }else if($row1['10'] == "Female"){
      ?>
      <script type="text/javascript"> 
        document.getElementById("dot-2").checked="true";
</script>

<?php 


    }else {

      ?>
      <script type="text/javascript"> 
        document.getElementById("dot-3").checked="true";
</script>

<?php 

    }


    
    ?>



      </div>
    </div>
    <div class="button">
      <input type="submit" name="updateemployee" value="UPDATE">
    </div>
  </form>

  <?php
 } 


?>
</div>
<?php

if (isset($_POST['updateemployee'])){

  ?>
  <script>

document.getElementById("loader").style.display="block";
document.getElementById("loaderbg").style.display="block";
  </script>

  <?php

  require_once('../connect.php');
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $birthday = $_POST['birthday'];
  $dateemployed = $_POST['dateemployed'];
  $department = $_POST['department'];
  $designation = $_POST['designation'];
  $educ_attainment = substr_replace($_POST['educ_attainment'], "", -1);
  $employment_record = substr_replace($_POST['employment_record'], "", -1);
  $gender = $_POST['gender'];
  $password = $_POST['password'];
 

 

  if (empty($fullname) && empty($username) && empty($phonenumber)&& empty($birthday)
  && empty($birthday) && empty($educ_attainment) && empty($department )) {
      echo "Empty Fields";
   
  }
    else {
   
      $sql ="SELECT * FROM user_table WHERE id = '$session'";

      $result3 = $conn->query($sql);

      $sql = "UPDATE user_table SET 
      fullname='$fullname', 
      email='$email', 
      birthday='$birthday', 
      date_employed='$dateemployed',
      educ_attainment='$educ_attainment', 
      employment_record='$employment_record', 
      password = '$password',
      gender='$gender', 
      phone_number='$phonenumber', 
      department='$department', 
      designation='$designation'
      WHERE id='$session'"; 
                                                

          if($conn->query($sql) === TRUE) {
              ?>
              <script>
                 
                 var delayInMilliseconds = 1000; //1 second
setTimeout(function() {
  //your code to be executed after 1 second
  document.getElementById("loader").style.display="none";
                document.getElementById("loaderbg").style.display="none";
                document.getElementById("alertsuccess").style.display="block";
}, delayInMilliseconds);
                
                 $("#refresh-section").load(location.href+" #refresh-section");
               
              </script>
              <?php
          } else {
              echo "Error " . $sql . ' ' . $conn->connect_error;
          }
          $conn->close();
      }


  }




?>
</body>
</html>