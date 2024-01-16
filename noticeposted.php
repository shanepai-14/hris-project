<div id="refresh-section">
        <h1 id="infos">Recent Notice</h1>

<?php 

include "connect.php";

$sql = "SELECT * FROM  notice_table WHERE archive = 0 ORDER BY id DESC";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    

    $currentuserid = $row['noticeposterid'];
    $string = $row['noticeread'];
    $string = ltrim($string, '-');
    $str_arr =explode("-", $string);

    $sql1 = "SELECT * FROM user_table WHERE id='$currentuserid'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {

        while ($row1 = $result1->fetch_assoc()) {


?>


        <div class="content">
           
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['message']; ?></p>
            <h4>Posted by : <?php echo $row1['fullname'];?>[<?php echo $row1['user_name'];?>]</h4>
            <h4>Seen :<?php echo count($str_arr); ?> people</h4>
            <h4><?php echo $row['dateposted']; ?> </h4>
           
        </div>
<?php   
}

}

}

}

?>   

    </div>


    <style>


h1{
	text-align: center;
	margin: 15px 0;
}
.content{
	width: 100%;
	max-width: 100%;
	min-height: 250px;
	background: chartreuse;
	margin: 20px 0;
	background-color: #fff;
	 box-shadow: 0px 1px 2px rgba(50, 50, 50, .1), 
		0px 2px 4px rgba(60, 60, 60, 0.1);
	border-radius: 5px;
	padding: 30px;
}
.content h2{
	font-weight: 800;
	margin: 10px 0;
}
.content p{
	margin: 10px 0;
	color: rgb(82, 80, 80);
	font-size: 1.1rem;
}
.content h4{
	font-weight: 90;
	margin: 15px 0;
	font-size: 15px;
}



    </style>