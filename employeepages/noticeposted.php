<div id="container">
        <h1>Recent Notice</h1>

<?php 

include "../connect.php";
$session = $_SESSION['id'];
$sql = "SELECT * FROM  notice_table WHERE archive = 0 ORDER BY id DESC";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    

    $currentuserid = $row['noticeposterid'];


    $sql1 = "SELECT * FROM user_table WHERE id='$currentuserid'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {

        while ($row1 = $result1->fetch_assoc()) {
           
		 $string = $row['noticeread'];
		 $string = ltrim($string, '-');
		 $str_arr =explode("-", $string); 
         $myid =$session;
		

?>

       <form action="noticereader.php" method="post">
        <div type="submit" name="readnotice" class="content" style="background-color:<?php 
			
			for ($x = 0; $x < count($str_arr); $x++) {
				if($str_arr[$x]==$myid){
					   echo "#d2d2fb";
			
					
			   break;
				}
			  } 
	
			
			
			
			?>;" id="cont">
		<input type="hidden"  value="<?php echo $row['id'];?>"  name="postid" id="postid">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['message']; ?></p>
            <h4>Posted by : <?php echo $row1['fullname'];?>[<?php echo $row1['user_name'];?>]</h4>
            <h4>Seen :<?php echo count($str_arr); ?> people</h4>
            <h4><?php echo $row['dateposted']; ?> </h4> 
			<button type="submit" name="readnotice" id="bt" style="display:
			<?php 
			
			for ($x = 0; $x < count($str_arr); $x++) {
				if($str_arr[$x]==$myid){
					   echo "none";
			
					
			   break;
				}
			  } 
	
			
			
			
			?>;" class="btn btn-primary">READ</button>
        </div>
		</form>	
<?php 

 
}

}

}


}





?>   

    </div>

    <style>
#bt{
	float:right;
	position: relative;
    bottom:30px;
}

h1{
	text-align: center;
	margin: 15px 0;
}
.content:hover {
  background-color: #d2d2fb;
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