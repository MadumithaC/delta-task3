<?php
//session_start();
//$_SESSION['$user'] = $_POST['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	
		body{
  font-family: 'Open Sans', sans-serif;
  background:#eeaeee;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}


h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #8b4789 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:red;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}



#btn2{
  float:left;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#3594D2; 
}
	</style>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
</head>
<body>
<p align="center" style="font-size: 50px">Welcome User!</p>
<form method="post" action="">
<div class="box">
<h1>Login Here</h1>

<input type="text" name="uname" placeholder="Type ypur Username" class="email" />
  
<input type="password" name="psw" class="email" />
  
<input type="reset" class="btn" value="Cancel"> <!-- End Btn -->

<input type="submit" id="btn2" name="submit1" value="Login"> <!-- End Btn2 -->
  
</div> <!-- End Box -->
  
</form>
<p style="font-size: 30px">Dont have an ID? <div><button class="btn" style="margin: 0px 0px 0px 600px;background-color: #871f78;" onclick="document.getElementById('signup').style.display='block'">Sign up</button></div></p><br><br>


<div id="signup" class="box" style="display: none; width:500px; height:auto;">
            <form method="POST" action="">
                <h1>Sign up here</h1>
                <div><label for="username">Set Username *: </label><br><input type="text" class="email" name="uname" id="username" /></div><br>
                <div><label for="pwd"> Set Password *: </label><br><input type="password" class="email"  name="psw" id="pwd" /></div><br>
                
                <div><label for="email">Email *: </label><br><input type="email"  class="email" name="email" id="email" /></div>
               
                <p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
               <input type="submit" class="btn" name="submit2" value="Sign up" style="margin-left: 190px; background-color: #800080">

                </form>
        </div>
<?php 
if(isset($_POST['submit2'])) {
	$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "appointments";
$con = new mysqli($servername, $username, $psw, $dbname);
$count=0;

$res = mysqli_query($con, "select * from login where username='$_POST[uname]'");
$count = mysqli_num_rows($res);
if($count>0) {
	?>
	<script>
 alert("This username already exists. Choose another username");
	</script>
	<?php
}
else {
	$pwd = md5($_POST["psw"]);
	$sql = "INSERT INTO login (username, password, email)
VALUES ('$_POST[uname]', '$pwd', '$_POST[email]')";
if ($con->query($sql) === TRUE) {
    }
	?>
	<script type="text/javascript">
		alert("You have been signed up successfully");
	</script>
	<?php
//session_start();
//$_SESSION['uname'] = $user;

//On page 2
//$user = $_SESSION['uname'];


	$user = $_POST["uname"];
	$sql2 = "CREATE TABLE $user (
	appdate DATE,
    title VARCHAR(255),
    description VARCHAR(255),
    stime TIME,
    etime TIME  
    

)";
if ($con->query($sql2) === TRUE) {
    
}
}
}


if(isset($_POST['submit1'])) {
	$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "appointments";
$con = new mysqli($servername, $username, $psw, $dbname);
$count=0;
$pwd = md5($_POST["psw"]);
$res = mysqli_query($con, "select * from login where username='$_POST[uname]' && password='$pwd'");
$count = mysqli_num_rows($res);
if($count>0) {
	
	
?>
<script>
		window.location="calendar4.php";
			</script>
			<?php

}
else {
	?>
	<script>
		alert("Incorrect password");
	</script>
	<?php
}

}
?>
</body>
</html>
