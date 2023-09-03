<?php
session_start();
$server1 = "localhost";
$username="root";
$pass = "";
// initializing variables
$user = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect($server1, $username,$pass, 'userregistration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $_SESSION["user"]=$_POST["user"];
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $gender=mysqli_real_escape_string($db, $_POST['gender']);
  $age=mysqli_real_escape_string($db, $_POST['age']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $activity = mysqli_real_escape_string($db, $_POST['activity']);
  $conditions = $_POST['conditions'];
  
   

  
	

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($user)) { array_push($errors, "Username is required"); }
 
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE user='$user'";
  $result = mysqli_query($db, $user_check_query);
  $usernm = mysqli_fetch_assoc($result);
  
  if ($usernm) { // if user exists
    if (strtolower($usernm['user']) === strtolower($user)) {
      array_push($errors, "Username already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password1);//encrypt the password before saving in the database
	$chk="";  
	/*foreach($conditions as $chk1)  
	{  
      $chk .= $chk1.",";  
	} */
	for ($i=0;$i<count($conditions);$i++){
		if ( $i == (count($conditions)-1)){
			$chk .= $conditions[$i]; 
		}
		if ($i < (count($conditions)-1)){
			 $chk .= $conditions[$i].",";  
		}
	}
	
	$bmi = ($weight/(($height*$height)/(100*100)));
	if ($bmi>=25.0){
		$status="Overweight";
	}
	if(($bmi >= 18.5) && ($bmi<= 24.9)) {
		$status = "Normal weight";
	}
	if($bmi <18.5) {
		$status = "Underweight";
	}
	$cal=0.0;
	if ($gender == "Male") {
		$bmr = 66.5+(13.8* $weight)+(5 * $height)-(6.8 * $age);
	}
	if ($gender == "Female") {
		$bmr = 655.1+(9.6* $weight)+(1.9 * $height)-(4.7 * $age);
	}
	if($activity == "Not Very Active"){
		$cal = $bmr * 1.2;
	}
	if($activity == "Lightly Active"){
		$cal = $bmr * 1.3;
	}
	if($activity == "Active"){
		$cal = $bmr * 1.4;
	}
	if($activity == "Very Active"){
		$cal = $bmr * 1.5;
	}
	

  	$query = "INSERT INTO users (user, password, gender, age, height, weight,bmi,status,conditions, activity,recommended_calorie_intake) 
  			  VALUES('$user', '$password','$gender','$age','$height','$weight','$bmi','$status','$chk','$activity','$cal')";
  	mysqli_query($db, $query);
  	$_SESSION['user'] = $user;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
	$_SESSION["user"]=$_POST["user"];
	$_SESSION["password"]=$_POST["password"];
	$userr=$_SESSION["user"];
 
  if (empty($user)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE user='$user' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['user'] = $user;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
	
  }
}
if (isset($_POST['edit_user'])) {
  // receive all input values from the form
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $_SESSION["user"]=$_POST["user"];
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $gender=mysqli_real_escape_string($db, $_POST['gender']);
  $age=mysqli_real_escape_string($db, $_POST['age']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $activity = mysqli_real_escape_string($db, $_POST['activity']);
  $conditions = $_POST['conditions'];
  
   

  
	

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($user)) { array_push($errors, "Username is required"); }
 
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

 

    
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password1);//encrypt the password before saving in the database
	$chk="";  
	/*foreach($conditions as $chk1)  
	{  
      $chk .= $chk1.",";  
	} */
	for ($i=0;$i<count($conditions);$i++){
		if ( $i == (count($conditions)-1)){
			$chk .= $conditions[$i]; 
		}
		if ($i < (count($conditions)-1)){
			 $chk .= $conditions[$i].",";  
		}
	}
	
	$bmi = ($weight/(($height*$height)/(100*100)));
	if ($bmi>=25.0){
		$status="Overweight";
	}
	if(($bmi >= 18.5) && ($bmi<= 24.9)) {
		$status = "Normal weight";
	}
	if($bmi <18.5) {
		$status = "Underweight";
	}
	$cal=0.0;
	if ($gender == "Male") {
		$bmr = 66.5+(13.8* $weight)+(5 * $height)-(6.8 * $age);
	}
	if ($gender == "Female") {
		$bmr = 655.1+(9.6* $weight)+(1.9 * $height)-(4.7 * $age);
	}
	if($activity == "Not Very Active"){
		$cal = $bmr * 1.2;
	}
	if($activity == "Lightly Active"){
		$cal = $bmr * 1.3;
	}
	if($activity == "Active"){
		$cal = $bmr * 1.4;
	}
	if($activity == "Very Active"){
		$cal = $bmr * 1.5;
	}

if (!$db){ 
   echo "NO CONNECTION ";
  }
$row="";
$sql4 = "UPDATE users SET user='$user', password='$password', gender='$gender', age='$age',height='$height', weight='$weight', bmi='$bmi', status='$status', conditions='$chk', activity='$activity', recommended_calorie_intake='$cal' WHERE user='$_SESSION[user]'";
$res4 = mysqli_query($db, $sql4); 
if($res4) {
	echo "<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<style>
body {
			background:linear-gradient(rgba(0,0,25,0.5),rgba(0,0,25,0.5));
			background-image:url('https://st4.depositphotos.com/4590583/i/600/depositphotos_278237456-stock-photo-fresh-vegetables-fruits-black-background.jpg');
			background-size:100% 100%;
			background-position:center;
			background-repeat:no-repeat;
			background-attachment:fixed;
	
	}
</style>
</head>
<body>
<div style='width:400px;height:250px;margin-left:175px;margin-top:200px;padding:30px 0px 0px 0px;text-align:center;border:3px solid black;font-size:35px;background-color:rgba(255,255,255,0.7)'>Your details have been updated!<br><br><p style='font-size:25px;'>Go back to <a href='my_account.php'>My Account</a> Page</p></div>
</body>
</html>";
}




  	

  }
}




?>

