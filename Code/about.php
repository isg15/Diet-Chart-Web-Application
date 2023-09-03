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
			text-align: center;
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
		.col{
			float: left;
			width: 30%;
			padding: 10px;
			margin: 10px;
		}
		.col1{
			float: left;
			width: 65%;
			padding: 10px;
			margin: 10px;
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
		<a href="cuisine1.php"> Calories today </a>
	</div>
	<br>
	<div class="column">
		<h1 style="text-align:center;  text-decoration: underline;"> About Us </h1>
		<div class="row">
			<div class="col">
				<img src="nutr.jpg" alt="Nutrition" width="100%;" style="padding: 5px; margin: 5px; border: 5px solid #05386B;">
			</div>
			<div class="col1">
				<h2 style="text-decoration: underline;"> Why is diet important? </h2>
				<p style="font-size:25px; font-style:oblique; font-family:Times New Roman">Diet is established among the most important influences on health in modern societies. Injudicious diet figures among the leading causes of premature death and chronic disease. Optimal eating is associated with increased life expectancy, dramatic reduction in lifetime risk of all chronic disease, and amelioration of gene expression. In this context, claims abound for the competitive merits of various diets relative to one another. Whereas such claims, particularly when attached to commercial interests, emphasize distinctions, the fundamentals of virtually all eating patterns associated with meaningful evidence of health benefit overlap substantially.</p>
			</div>
		</div>
		<br>
		
		<div class="row">
			<div class="col1">
				<h2  style="text-decoration: underline;"> What Experts say </h2>
				<p style="font-size:25px; font-style:oblique; font-family:Times New Roman"><q>By finding strategies that fit with your lifestyle rather than adhering to the latest fad, you&#39ll set yourself up for success,</q> says Barrile, who previously worked at Massachusetts General Hospital&#39s weight management center. 
				<br>
				Mary Kate Keyes, a clinical instructor in the Department of Biomedical and Nutritional Sciences who is also a registered dietitian, says that it may help if people think of the word <q>diet</q> as a description of what we eat every day, rather than referring to a particular restrictive eating regimen. 
				<br>
				<q>While some people do great on commercial programs like Weight Watchers, the mindset is that I&#39m either &#39on&#39 a diet or &#39off &#39 a diet,</q> says Keyes. <q>The best way to live is somewhere in the middle &#8208 not restricting and not indulging at every meal, every day.</q> 
			</div>
			<div class="col">
				<img src="Nutrition.jpg" alt="veggies" width="100%" style="padding: 5px; margin: 5px; border: 5px solid #05386B;">
			</div>	
		</div>
		
		<br>
		<h1 style="text-align:center;  text-decoration: underline;"> Our Objective</h1>
		<div class="col">
			<img src="veggie.jpg" style="width:100%; padding: 5px; margin: 5px; border: 5px solid #05386B;">
			</div>
		<div class="col1">
			<p style="font-size:25px; font-style: oblique; font-family:Times New Roman">We will help you, our valuable clients,choose one among the diets planned by our expert commitee to provide you with the best considering your health conditions and your cuisine preferences. Dietary guidelines evolve with scientific advances, so it can be challenging to stay on top of current recommendations and know what to eat. This is where we come in to help you choose the right diet and provide you the best nutrition.</p>
		</div>
		<br><br>
		
	</div>
</body>
</html>