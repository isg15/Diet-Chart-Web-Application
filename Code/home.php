<?php 
  session_start(); 

  if (!isset($_SESSION['user'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user']);
  	header("location: login.php");
  }
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		*{
			box-sizing:border-box;
		}

		body{
			font-family:Lucida handwriting;
			padding:10px;
			background-color:Cornsilk;
			color:#05386B;
		}
 
		.header {
			padding:30px;
			text-align: center;
			background-image: url("image.jpg");
			background-size: cover;
			color:#5CDB95;
		}
		
		.header h1{
			font-size: 50px;
			color: #05386B;
		}
		
		.topnav{
			overflow: hidden;
			background-color: NavyBlue;
		}
		
		.topnav a{
			width: 20%;
			float: left;
			display: block;
			color: Cornsilk;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			background-color:#05386B;
		}
		
		.topnav a:hover{
			background-color: Cornsilk;
			color: black;
		}
		
		
		.topnav1 {
			overflow: hidden;
			background-color: NavyBlue;
		}
		
		.topnav1 a{
			width: 20%;
			float: left;
			display: block;
			background-color: Cornsilk;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			color:#05386B;
		}
		
		.topnav1 a:hover{
			background-color: #05386B;
			color: Cornsilk;
		}
		
		.column{
			float: right;
			width: 100%
			font-align: center;
			background-color: Cornsilk;
			border:5px solid #05386B;
			padding:5px;
			margin:5px;
		}
		
		.card{
			background-color: Cornsilk;
			padding: 20px;
			margin: 20px;
			font-align: center;
		}
		
		.row:after{
			content:"";
			display: table;
			clear: both;
			background-color: Cornsilk;
		}
		
		.footer{
			padding:20px;
			text-align: center;
			background-color: #ddd;
			margin-top:20px;
		}
		.scrollo {
			padding-top: 30px;
			text-align: center;
			background-color:Cornsilk;
			background-size:cover;
			color:#5CDB95;
			position: relative;
			width:100%;
		}

		.center {
			position: absolute;
			top: 90%;
		    left: 65%;
			transform: translate(-50%, -50%);
			font-size: 38px;
			font-family:Lucida handwriting;
			color:Cornsilk;
		}
		
		boxy{
			width:1350px;
			border:15px #05386B;
			padding:25px;
			margin:25px;
		}

	</style>
</head>
<body>
	<div class="header">
		<?php  if (isset($_SESSION['user'])) : ?>
		<p style="float:right;margin-top:0px;margin-right:30px;width:150px; border: 5px solid red;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			background-color:Cornsilk;
			font-family: Arial"> <a href="index.php?logout='1'" style="color:red;">Logout</a> </p>
		<?php endif ?>
		
		<?php  if (isset($_SESSION['user'])) : ?>
    	<h1><p style="font-size:50px;color:Cornsilk;"><b>Welcome</b> <strong><?php echo $_SESSION['user']; ?> !</strong></p></h1>
    	<?php endif ?>
		
	</div>
	
	<div class="topnav">
		<a href="home.php"> Home </a>
		<a href="about.php"> About Us </a>
		<a href="my_account.php"> My Account </a>
		<a href="diet_chart.php"> Generate My Diet Chart </a>
		<a href="cuisine1.php"> Calories today</a>
	</div>
	
	<div class="scrollo">
		<img src="download.jpg" style="width:100%; opacity:1.0;" height="500px;">
		<div class="center"> <p> We&#39re here for you </p></div>
	</div>
	<br>
	<div class="column">
		<div class="card">
			<h1 style="color:#05386B; font-family:Lucida handwriting;">First step towards staying healthy........</h1>
			<p></p>
			<p style="color:#05386B; font-family:Lucida handwriting; font-size:20px;">A-Z Health</p>
			<p style="color:#05386B; font-family:Times New Roman; font-size:25px; font-style:oblique;">Whether you&#39re looking to create new, healthy habits to support an all-round approach to wellness, you&#39ve been diagnosed with a chronic condition or you&#39re looking for help with rehabilitation, using nutritional therapy as part of your approach to good health has a huge variety of benefits.</p>
			<p style="color:#05386B; font-family:Times New Roman; font-size:25px; font-style:oblique;"> 
				
					A healthy diet is a diet that helps maintain or improve overall health. A healthy diet provides the body with essential nutrition: fluid, macronutrients, micronutrients, and adequate food energy.
					<br>
					<br>
			</p>
			
			<h3 style="text-align:center; font-style:underline;">Components of a diet </h3>					
			<div class="topnav1">
				<a href="#" ><img src="carbohydrate.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Carbohydrate </p></a>
				<a href="#" ><img src="protein.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Protein </p></a>
				<a href="#" ><img src="fats.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Fats </p></a>
				<a href="#" ><img src="vitamin.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Vitamins </p></a>
				<a href="#" ><img src="minerals.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Minerals </p></a>
			</div>
			<p style="color:#05386B; font-family:Times New Roman; font-size:25px; font-style:oblique;">
			<br><br>
					A healthy diet may contain fruits, vegetables, and whole grains, and may include little to no processed food or sweetened beverages. The requirements for a healthy diet can be met from a variety of plant-based and animal-based foods, 
					although a non-plant source of vitamin B12 is needed for those following a vegan diet. Various nutrition guides are published by medical and governmental institutions to educate individuals on what they should be eating to be healthy. Nutrition facts labels are also mandatory in some countries to allow consumers to choose between foods based on the components relevant to health.
				
			</p>
			
			<h3 style="text-align:center; font-style:underlined;"> Various cuisines </h3>	 				
			<div class="topnav1">
				<a href="#" ><img src="indian.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Indian </p></a>
				<a href="#" ><img src="italian.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Italian</p></a>
				<a href="#" ><img src="america.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> American </p></a>
				<a href="#" ><img src="chinese.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> Chinese </p></a>
				<a href="#" ><img src="french.jpg" width="100%" height="250px"><p style="font-family:Lucida handwriting; font-size:20px;"> French </p></a>
			</div>
		</div>
	</div>
</body>
</html>
			
				