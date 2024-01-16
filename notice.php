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
    <!-- =============== Navigation ================ -->
    <?php include 'navigation.php';?>

        <!-- ========================= Main ==================== -->
        <div class="main">
        <?php 
        include 'topbar.php';
        ?>
            <!-- ======================= Cards ================== -->

            <!-- ================ Order Details List ================= -->
            
            <div class="details">
           
                <div class="recentOrders">
                    <div class="cardHeader">
                    <?php include "noticepost.php"?>
                       
                    </div>
                  <!-- ================= POST NOTICE ================ -->
               
                  <?php include "noticeposted.php"?>
                 
                </div>

                <!-- ================= New Customers ================ -->
             
            </div>
        </div>
    

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>