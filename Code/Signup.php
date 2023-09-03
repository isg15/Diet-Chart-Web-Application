<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Sign up</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet" type="text/css" 
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
		
	<style>
		body {
			background:linear-gradient(rgba(0,0,25,0.5),rgba(0,0,25,0.5));
			background-image:url('https://st4.depositphotos.com/4590583/i/600/depositphotos_278237456-stock-photo-fresh-vegetables-fruits-black-background.jpg');
			background-size:100% 100%;
			background-position:center;
			background-repeat:no-repeat;
			background-attachment:fixed;
	
	}

		.login-box {
			max-width:2500px;
			max-height:500px;
			float:none;
			margin-left:5px;
			margin-top:10px;
		}

		
		.login-right {
			background:rgba(360,360,360,0.7);
			padding:30px;
			border:2px solid black;
	
		}

		.form-control {
			background-color:transparent !important;
			border: 2px solid black !important;
		}

	</style>
	</head>
	<body>
		<div class="container">
		  <div class="login-box">
			<div class="row">
			  
			<div class="col-md-6 login-right">
			    <h2>Sign up</h2><br>
				<form onsubmit="return check();" action="Signup.php" method="post">
				<?php include('errors.php'); ?>
				  <div class="form group">
				    <label><b>Username</b></label>
					<input type="text" name="user" class="form-control" required>
			      </div><br>
				  <div class="form group"  style="float:left;">
				    <label><b>Password</b></label>
					<input type="password" name="password1" class="form-control" required>
			      </div><br><br><br>
				  <div class="form group"  style="float:left;">
				    <label><b>Confirm Password</b></label>
					<input type="password" name="password2" class="form-control" required>
			      </div><br><br><br><br>
				  <div class="form group">
				    <label><b>Gender</b></label><br>
					<input type="radio" id="male" name="gender" value="Male" required>
					<label for="male">Male</label><br>
					<input type="radio" id="female" name="gender" value="Female"  required>
					<label for="female">Female</label><br>
			      </div><br>
				  <div class="form-group">
				  <label><b>Your age (in years)</b></label>
					<input type="number" id="age" name="age" class="form-control" min="5" max="150"  required>
			      </div><br>
				  <div class="form group" style="float:left;">
				    <label><b>Your height (in cm)</b></label>
					<input type="number" name="height" id="height" class="form-control" min="85" max="272" step="0.1"  required>
			      </div>
				  <div class="form group" style="float:left;margin-left:89px;">
				    <label><b>Your weight (in kg)</b></label>
					<input type="number" name="weight" id="weight" class="form-control" min="12" max="200" step="0.1"  required>
			      </div><br><br><br><br>
				  <div>
				    <label><b>Which of these health conditions are you diagnosed with?</b></label><br>
						<input type="checkbox" id="diabetes" name="conditions[]" value="Diabetes" class="d" onclick="disable_none();">
						<label for="diabetes">Diabetes</label><br>
						<input type="checkbox" id="high_cholesterol" name="conditions[]" value="High LDL Cholesterol" class="d" onclick="disable_none();">
						<label for="high_cholesterol">High LDL Cholesterol</label><br>		
						<input type="checkbox" id="high_blood_pressure" name="conditions[]" value="High Blood Pressure" class="d" onclick="disable_none();">
						<label for="high_pressure">High Blood Pressure</label><br>
						<input type="checkbox" id="low_blood_pressure" name="conditions[]" value="Low Blood Pressure" class="d" onclick="disable_none();">
						<label for="low_pressure">Low Blood Pressure</label><br>
						<input type="checkbox" id="anaemia" name="conditions[]" value="Anaemia" class="d" onclick="disable_none();">
						<label for="anaemia">Anaemia</label><br>
						<input type="checkbox" id="cardiovascular_disease" name="conditions[]" value="Cardiovascular Disease" class="d" onclick="disable_none();">
						<label for="cardiovascular_disease">Cardiovascular Disease</label><br>
						<input type="checkbox" id="indigestion" name="conditions[]" value="Indigestion" class="d" onclick="disable_none();">
						<label for="indigestion">Indigestion</label><br>
						<input type="checkbox" id="osteoporosis" name="conditions[]" value="Osteoporosis" class="d" onclick="disable_none();">
						<label for="osteoporosis">Osteoporosis</label><br>
						<input type="checkbox" id="poor_eyesight" name="conditions[]" value="Poor Eyesight" class="d" onclick="disable_none();">
						<label for="poor_eyesight">Poor Eyesight</label><br>
						<input type="checkbox" id="asthma" name="conditions[]" value="Asthma" class="d" onclick="disable_none();">
						<label for="asthma">Asthma</label><br>
						<input type="checkbox" id="none" name="conditions[]" value="None" onclick="disable_all();">
						<label for="none">None</label><br>
			      </div><br>
				  <div class="form group">
				    <label><b>How active are you?</b></label><br>
					<input type="radio" id="not_very_active" name="activity" value="Not Very Active" required>
					<label for="not_very_active">Not Very Active</label><br>
					<input type="radio" id="lightly_active" name="activity" value="Lightly Active"  required>
					<label for="lightly_active">Lightly Active</label><br>
					<input type="radio" id="active" name="activity" value="Active" required>
					<label for="active">Active</label><br>
					<input type="radio" id="very_active" name="activity" value="Very Active" required>
					<label for="very_active">Very Active</label><br>
			      </div><br>
				  <button type="submit" class="btn btn-primary" name="reg_user">Sign up</button>
				</form><br>
				<p>
				Already a member? <a href="index.php">Login</a>
				</p>
			  </div>
			 </div>
			</div>
			</div>
			<script>
				function disable_none() {
					var arr=document.getElementsByClassName("d");
					var l=arr.length;
					var c=0;
					for(var i=0;i<l;i++){
					if(arr[i].checked == true) {
						c++;
					}
					}
					if(c>0) {
						document.getElementById("none").disabled=true;
					}else {
						document.getElementById("none").disabled=false;
					}
					if(document.getElementById("high_blood_pressure").checked == true){
						document.getElementById("low_blood_pressure").disabled=true;
					}else{
						document.getElementById("low_blood_pressure").disabled=false;
					}
					
					if(document.getElementById("low_blood_pressure").checked == true){
						document.getElementById("high_blood_pressure").disabled=true;
					}else{
						document.getElementById("high_blood_pressure").disabled=false;
					}
				}
				
				function disable_all() {
					var arr=document.getElementsByClassName("d");
					var l=arr.length;
					if(document.getElementById("none").checked == true) {
						for(var i=0;i<l;i++){
							arr[i].disabled = true;
						}
					}else {
						for(var i=0;i<l;i++){
							arr[i].disabled = false;
						}
					}
					}
					
				function check() {
					if((document.getElementById("diabetes").checked == false)&&(document.getElementById("high_cholesterol").checked == false)&&(document.getElementById("high_blood_pressure").checked == false)&&(document.getElementById("low_blood_pressure").checked == false)&&(document.getElementById("anaemia").checked == false)&&(document.getElementById("cardiovascular_disease").checked == false)&&(document.getElementById("indigestion").checked == false)&&(document.getElementById("osteoporosis").checked == false)&&(document.getElementById("poor_eyesight").checked == false)&&(document.getElementById("asthma").checked == false)&&(document.getElementById("none").checked == false)) {
					alert("Check at least one of the options given under health conditions");
					return false;
					}
				}
				
					
					
				
			</script>
	</body>
	

</html>