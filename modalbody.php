<?php
include "connect.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from user_table where id=".$userid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>




<form action="updateemployee.php" method="post">
        <div class="row g-3 m-2">
        <input type="hidden"  value="<?php echo $row['id']; ?>"  name="update_id" id="update_id">

  <div class="col">
  <label class="form-label">Full name</label>
    <input type="text" class="form-control" placeholder="Full name" value="<?php echo $row['fullname']; ?>"  name="fullname" >
  </div>
  <div class="col">
  <label class="form-label">Email</label>
    <input type="text" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>"  name="email">
  </div>
  <div class="col">
  <label class="form-label">Username</label>
    <input type="text" class="form-control" placeholder="Username" value="<?php echo $row['user_name']; ?>" name="username" disabled>
  </div>
  <div class="col ">
  <label class="form-label">Phone number</label>
    <input type="text" class="form-control" placeholder="Phone Number"  value="<?php echo $row['phone_number']; ?>" name="phonenumber">
  </div>
</div>

<div class="row g-3 m-2">
  <div class="col">
  <label class="form-label">Department</label>
    <input type="text" class="form-control" placeholder="Department" value="<?php echo $row['department']; ?>" name="department">
  </div>
  <div class="col">
  <label class="form-label">Designation</label>
    <input type="text" class="form-control" placeholder="Designation" value="<?php echo $row['designation']; ?>" name="designation">
  </div>
  <div class="col">
  <label class="form-label">Birthday</label>
    <input type="date" class="form-control" placeholder="Birthday" value="<?php echo $row['birthday']; ?>" name="birthday">
  </div>
  <div class="col">
  <label class="form-label">Date Employed</label>
    <input type="date" class="form-control" placeholder="Date Employed" value="<?php echo $row['date_employed']; ?>" name="dateemployed">
  </div>
</div>
<div class="row g-2 m-2">
  <div class="col">
  <label class="form-label">Educational Attainment</label>
    <textarea type="text" class="form-control" placeholder="Educational Attainment"    rows="3" name="educ_attainment"><?php echo $row['educ_attainment']; ?></textarea>
  </div>
  <div class="col">
  <label class="form-label">Employement Record</label>
    <textarea type="text" class="form-control" placeholder="Employement Record"   rows="3"  name="employment_record" ><?php echo $row['employment_record']; ?>"</textarea>
  </div>
  <div class="row g-1 m-2">
  <div class="col">
  <label class="form-label">Gender</label>
  <select class="form-select" name="gender" aria-label="Default select example">
  <option selected><?php echo $row['gender']; ?></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Prefer not to say">Prefer not to say</option>
</select>
  </div>

 
</div>
<div class="row g-1 m-2">
  <div class="col">
  <label class="form-label">Status</label>
  <select class="form-select" name="status">

  <option value="<?php 
  
  if($row['status'] == 0){
    echo "0";
  }else{
    echo "1";
  } 

  
  ?>" selected>
    <?php 
  
  if($row['status'] == 0){
    echo "Pending";
  }else{
    echo "Approved";
  } 

  
  ?></option>
  <option value="0">Pending</option>
  <option value="1">Approved</option>
</select>
</div>

 
</div>
<div class="modal-footer ">
    
      <button type="submit" style="float:left;" class="btn btn-warning" name="deleteemployee">Archive</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="updateemployee" class="btn btn-primary">Update</button>
      </div>
</form>

<?php
 } 


?>