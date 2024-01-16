<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="createEmployee.css"> 
 
  <title></title>
</head>
<body>
<div id="p2" class="containerz">

  <div class="titlez">Registration</div>
  <form action="#" method="post">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Full Name</span>
        <input type="text" placeholder="E.g: John Smith"  name="fullname" required>
      </div>
      <div class="input__box">
      
        <span class="details" id="check-username">Username</span>
        <input type="text" placeholder="johnWC98" name="username" id="username"   onInput="checkUsername()" required>
      </div>
      <div class="input__box">
        <span class="details">Email</span>
        <input type="email" placeholder="sample@gmail.com" name="email" required>
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="0912-345-6789"  name="phonenumber" required>
      </div>
      <div class="input__box">
        <span class="details">Password</span>
        <input type="password" placeholder="********" name="password" id="password" required>
      </div>
      <div class="input__box">
        <span class="details" >Confirm Password : <span id="message" >sdsds</span></span>
        <input type="password" placeholder="********" name="confirmpassword" id="confirm_password" required>
      </div>
      <script>

        $('#password, #confirm_password').on('keyup', function () {
          if($('#password').val() != "" && $('#confirm_password').val != ""){
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red'); }else{

      $('#message').html('').css('color', 'red');
    }
});
      </script>
      <div class="input__box">
        <span class="details">Birthday</span>
        <input type="date" placeholder="E.g: John Smith" name="birthday" required>
      </div>
      <div class="input__box">
        <span class="details">Date Employed</span>
        <input type="date" placeholder="E.g: John Smith" name="dateemployed" required>
      </div>
      <div class="input__box">
        <span class="details">Department</span>
        <input type="text" placeholder="IT" name="department" required>
      </div>
      <div class="input__box">
        <span class="details">Designation</span>
        <input type="text" placeholder="teacher" name="designation" required>
      </div>
      <div class="input__box">
        <span class="details">Educational Attainment</span>
        <textarea id="message" name="educ_attainment" placeholder="" ></textarea>
      </div>
      <div class="input__box">
        <span class="details">Employment Record</span>
        <textarea id="message" name="employment_record" placeholder=""></textarea>
      </div>


    </div>
    <div class="gender__details">
      <input type="radio" name="gender" value="Male" id="dot-1">
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
      </div>
    </div>
    <div class="button">
      <input type="submit" name="createmployee" value="Register">
    </div>
  </form>
</div>
<?php

if (isset($_POST['createmployee'])){
  ?>
  <script>
document.getElementById("loader").style.display="block";
document.getElementById("loaderbg").style.display="block";
  </script>

  <?php

    require_once('connect.php');

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $birthday = $_POST['birthday'];
    $dateemployed = $_POST['dateemployed'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $educ_attainment = substr_replace($_POST['educ_attainment'], "", -1);
    $employment_record = substr_replace($_POST['employment_record'], "", -1);
    $gender = $_POST['gender'];
    $user_type = 1;

    $sql3 = "SELECT * FROM  user_table WHERE user_name ='" . $username . "'";
    $result3= mysqli_query($conn, $sql3);
    $count = mysqli_num_rows($result3);
    if ($count > 0) {

      ?>
      <script>
           alert("Username Already exist");
          
      </script>
      <?php  
      
    
     }else{

   

//  $sql1 = "SELECT * FROM user_table WHERE user_name = '$username'";

            
    if ($password != $confirmpassword) {
        echo "Password doesnt match";
    }
      else {
        $sql = "INSERT INTO `user_table` (`user_type`, `fullname`, `email`, `user_name`, `password`, `birthday`, `date_employed`,
         `educ_attainment`, `employment_record`, `gender`, `status`, `archive`, `phone_number`, `department`, `designation`) 

        VALUES ( '$user_type', '$fullname', '$email', '$username', '$password', 
        '$birthday', '$dateemployed', '$educ_attainment', '$employment_record', '$gender', '0', '0', '$phonenumber','$department','$designation')";

            if($conn->query($sql) === TRUE) {
                ?>
                <script>
                         var delayInMilliseconds = 1000; //1 second
setTimeout(function() {
  //your code to be executed after 1 second
  document.getElementById("loader").style.display="none";
                document.getElementById("loaderbg").style.display="none";
                
}, delayInMilliseconds);
                      $("#refresh-emp").load(location.href+" #refresh-emp");
                    
                </script>
                <?php    
                
            } else {
                echo "Error " . $sql . ' ' . $conn->connect_error;
            }
            $conn->close();
        }

      }
    }




?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script >

function checkUsername() {
    
    jQuery.ajax({
    url: "checkusername.php",
    data:'username='+$("#username").val(),
    type: "POST",
    success:function(data){
        $("#check-username").html(data);
    },
    error:function (){}
    });
}

</script>
</body>
</html>