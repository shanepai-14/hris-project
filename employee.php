<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVC HRIS</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="loadingspinnerem.css">   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


 

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css"/>





</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- =============== Navigation ================ -->
   
    <?php include 'navigation.php';?>

        <!-- ========================= Main ==================== -->
        <div class="main">
        <?php 
        include 'topbar.php';
        ?>

            <!-- ======================= Cards ================== -->

            <!-- ================ Order Details List ================= -->
 
            <div class="details" id="refresh-emp">
            <div class="loaderbg" id="loaderbg"></div>
<div class="loader" id="loader"></div>
                <div class="recentOrders">

                    <div class="cardHeader">
                        <h2>Employee List</h2>
                        <a href="#" class="btn">View All</a>
                        <a href="#" id="cancel" type="button" onclick="demoHide();"  class="btn btn-danger">Cancel</a>
                        <a href="#" id="create" type="button" onclick="demoShow();"  class="btn">Create Employee</a>
                        <script type="text/javascript"> 
    function demoShow()
    {document.getElementById("p2").style.display="block";
        document.getElementById("create").style.display="none"; 
        document.getElementById("cancel").style.display="block";}
    function demoHide()
    {document.getElementById("p2").style.display="none"; 
        document.getElementById("create").style.display="block"; 
        document.getElementById("cancel").style.display="none";}
</script>
                    </div>
                    <?php include 'createEmployee.php';?>
                  
                    <table>
                 
                        <thead>
                            <tr>
                            <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Gender</td>
                                <td>Department</td>
                                <td>Designation</td>
                                <td>Date Hired</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php

                        // select from user_table
include "connect.php";

$sql = "SELECT * FROM  user_table WHERE user_type = 1 AND archive = 0 ORDER BY id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

    <tr>
    <td ><?php echo $row['id']; ?></td>
    <td data-column="id"><?php echo $row['fullname']; ?></td>
      <td data-column="Client name"><?php echo $row['email']; ?></td>
      <td style="white-space:nowrap;" data-column="Contact Number"><?php echo $row['phone_number']; ?></td>
      <td data-column="email"><?php echo $row['gender']; ?></td>
      <td data-column="room id"><?php echo $row['department']; ?></td>
      <td data-column="adult"><?php echo $row['designation']; ?></td>
      <td style="white-space:nowrap;" data-column="children"><?php
      
      $date = strtotime($row['date_employed']);

      
      echo date('M-d-Y',$date); ?></td>
<?php 
                  if($row['status'] == 0){
                    echo   '<td><span class="status pending">Pending</span></td>';
                  }else{
                   echo '<td><span class="status delivered">Approved</span></td>';
                  }
                 
     
     
     ?>
    
      <td data-column="Twitter">
       <button  data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-primary">View</button>

      </td>

    </tr>

    <?php     
      }

}

?>   



<?php include 'modal.php';?>



                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
             
            </div>
        </div>
    
    <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'modalbody.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('table').DataTable();
            });


    </script>
</body>

</html>