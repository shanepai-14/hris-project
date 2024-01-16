<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVC HRIS</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php include 'navigation.php';?>

        <!-- ========================= Main ==================== -->
        <div class="main">
        <?php 
        include 'topbar.php';
        ?>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <?php 
                        include "countemployee.php";
                       
                    
                        ?>
                        <div class="numbers"><?php echo  $rowcount; ?></div>
                        <div class="cardName">Active Employee</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo  $rowcount1; ?></div>
                        <div class="cardName">Pending</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo  $rowcount2; ?></div>
                        <div class="cardName">Approved</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo  $rowcount3; ?></div>
                        <div class="cardName">Notice Read</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Employee</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                            <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Department</td>
                                <td>Designation</td>
                                <td>Date Hired</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php

// select from user_table
include "connect.php";

$sql = "SELECT * FROM  user_table WHERE user_type = 1 AND archive = 0 ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {

?>

<tr>

<td data-column="id"><?php echo $row['fullname']; ?></td>
<td data-column="Client name"><?php echo $row['email']; ?></td>
<td  style="white-space:nowrap;" data-column="Contact Number"><?php echo $row['phone_number']; ?></td>
<td data-column="room id"><?php echo $row['department']; ?></td>
<td data-column="adult"><?php echo $row['designation']; ?></td>
<td style="white-space:nowrap;" data-column="children"><?php $date = strtotime($row['date_employed']);

      
echo date('M-d-Y',$date); ?></td>
<?php 
if($row['status'] == 0){
echo   '<td><span class="status pending">Pending</span></td>';
}else{
echo '<td><span class="status delivered">Approved</span></td>';
}



?>

</tr>

<?php     
}

}

?>   
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
             
            </div>
        </div>
    

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
   
</body>

</html>