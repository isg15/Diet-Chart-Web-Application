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
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Select your cuisine</title>
<style>
*{
			box-sizing:border-box;
		}

		body{
			font-family:Lucida handwriting;
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
		
		
		p,h1 {
			font-family: "Lucida Handwriting";
		}
		.container {
			
			width:1250px;
			height:1000px;
			padding:50px;
			margin:100px 200px 200px 200px;
			border: none;
		}
		.div1 {
			float:left;
			background: Cornsilk;
			margin: 10px 10px 10px 10px;
			padding: 10px;
			border: 5px solid #05386B;		
		}
		.div2 {
			float:left;
			background:Cornsilk;
			margin: 10px 10px 10px 10px;
			padding: 10px;
			border: 5px solid #05386B;
			//background:rgba(10,255,200,0.7);
			
		}
		.div3 {
			float:left;
			background: Cornsilk;
			margin: 10px 10px 10px 10px;
			padding: 10px;
			border: 5px solid #05386B;
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
			
		<div class="container" name="cont">
			<h1 style="text-align:center;color:#05386B">Which cuisine do you prefer?</h1>
			<div class="topnav1">
				<a href='Indianmeal.php' class="div2">
					<img src="https://thumbs.dreamstime.com/b/indian-food-curry-butter-chicken-palak-paneer-chiken-tikka-biryani-vegetable-curry-papad-dal-palak-sabji-jira-alu-rice-138549925.jpg" alt="There was some error" width="300px" height="200px">
	`				<p style="text-align:center;"><b>INDIAN</b></p>
			
				<a href='Americanmeal.php' class="div2">
					<img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/254/254836/grilled-tofu-and-dragon-fruit-buddha-bowl-with-vegetables-whole-grain-and-salad.jpg?w=1155&h=1503"alt="There was some problem" width="300px" height="200px">
					<p style="text-align:center;"><b>AMERICAN</b></p>
			
				<a href='Italianmeal.php' class="div2">
					<img src="https://www.thesun.co.uk/wp-content/uploads/2020/08/NINTCHDBPICT000603046726.jpg" alt="There was some problem" width="300px" height="200px">
					<p style="text-align:center;"><b>ITALIAN</b></p></a>
			</div>
		</div>
</body>
</html>