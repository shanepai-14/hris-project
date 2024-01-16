<?php
session_start();


if(isset($_POST['but_submit'])){

            
    require_once('connect.php');
    

    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM user_table WHERE user_name LIKE '$user_username' AND password LIKE '$user_password'";
    $result = $conn->query($sql);
        
    if($result->num_rows > 0) { 

            while($row = $result->fetch_assoc()) {
                     
                $_SESSION['id'] = $row['id'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_type'] = $row['user_type'];
                
                if ($row['user_type'] == 0 ) {
                     
                    
                   
                   header('Location: index.php');
                    
                   

                }else{
                   
                 
                    header('Location:employeepages/index.php');

                }


    



            }

          
        
        }
        else {
            ?>
            <script>
                alert("Wrong Username or Password");
            </script>
            <?php
        }
        



}
?>


<body>


    <header>
        <h1>Davao Vision College HRIS</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" method="post">
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" id="user_username" name="user_username" type="text" placeholder="Username" autofocus>
                <label>Password:</label>
                <input  class="field_class"  type="password" placeholder="Password" id="user_password" name="user_password">
                <button class="submit_class" type="submit"  name="but_submit" id="but_submit" form="login_form" >Login</button>
            </div>
          
        </form>
    </main>
    <footer>
        <p>Develop by  <a href="#">Shane Enriquez&trade;</a></p>
    </footer>
</body>

<style>
* {
    padding: 0px;
    margin: 0px;
}
body {
    background-color: lightgreen;
}
header {
    background-color: #f1f1f1;
    color: dodgerblue;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 15vh;
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
  
}
h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url(dvc.jpg) no-repeat center center;
    background-position: center 30%;
    background-size: cover;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-color: white;
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}
.info_div {
    letter-spacing: 1px;
}
.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
}
footer {
    height: 10vh;
    background-color: #f1f1f1;
    color: #4738f1;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}
footer > p {
    text-align: center;
    font-family: 'system-ui';
    letter-spacing: 3px;
}
footer > p > a {
    text-decoration: none;
    color: dodgerblue;
    font-weight: bold;
}




</style>