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
<head title="American Meals"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

		table,th {
			margin-left: 10px;
			margin-top: 30px;
		} 
		
		td{
			padding: 10px;
			margin: 10px;
			border: 3px solid #05386B;
		}
		.text{
			font-family: Copperplate, Fantasy;
			color: crimson;
			font-size:300%;
			background-color: none;
			width: 1000px;
			height: 60px;
			border: none;
			border-radius:12px;
			margin-right:500px;
			margin-top:10px;
			padding: 10px;
			margin-left:25px;
			margin-bottom:0px;
		}
		.para1{
			font-family: Papyrus, Serif;
			color: green;
			font-size:200%;
			text-align:center;
			margin-top:0px;
		}
		.para2{
			font-family: Garamond, Serif;
			color: purple;
			text-align: center;
			font-size:200%;
			margin-top:0px;
			padding: 5px;
			margin-bottom:0;
		}
		.para3 {
			font-family: Lucida Handwriting;
			color: rgba(100,10,255,1);
			font-size:250%;
			margin-top:0px;
			padding: 5px;
			margin-bottom:0px;
			margin-left: 50px;
		}
		.button {
		  border: 5px solid #05386B;
		  background:Cornsilk;
		  color:#05386B;
		  border-radius: 8px;
		  text-align: center;
		  margin-left: 600px;
		  text-decoration: none;
		  display: inline-block;
		  width: 300px;
		  height: 50px;
		  font-size: 30px;
		  cursor: pointer;
		}
		.button:hover {
		   color:Cornsilk;
		   background-color:#05386B;
		}
		.button1 {
		 
		  border: 5px solid #05386B;
		  background:Cornsilk;
		  color:#05386B;
		  border-radius: 8px;
		  text-align: center;
		  margin-left: 600px;
		  text-decoration: none;
		  display: inline-block;
		  width: 300px;
		  height: 50px;
		  font-size: 30px;
		  cursor: pointer;
		}
		
		.button1:hover {
		   color:Cornsilk;
		   background-color:#05386B;
		}
		.in {
			width:100%;
			padding:5px;
			border: none;
			margin-left:auto;
			margin-right:auto;
			background:none;
			color:#05386B;
			
		}
		.out {
			width:25%;
			padding:15px 15px 15px 15px;
			border: 1px solid black;
			margin-left:50px;
			margin-right:50px;
			background:Cornsilk;
			color:#05386B;
			text-align:center;
			float:left;
			font-family: Lucida Handwriting;
			font-size:20px;
			
			
		}
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
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  height:550px;
		  width: 100%;
		  position: relative;
		  }

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 15px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 7s;
		  animation-name: fade;
		  animation-duration: 2s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
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
	<div class="slideshow-container">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="https://www.meeting-point.com/wp-content/uploads/2019/09/America.jpg" style="width:100%; height:500px;">
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="https://www.unileverfoodsolutions.com.my/en/chef-inspiration/knorr-world-cuisine/western-trends-and-tips/introduction-to-american-cuisine/jcr:content/parsys/content-aside-footer/textimage_1885460863/image.transform/jpeg-optimized/image.1620986105642.jpg" style="width:100%; height:500px;">
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="https://www.thegreatcoursesdaily.com/wp-content/uploads/2020/04/header-2.jpg" style="width:100%; height:500px;" >
		</div>

	</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
		</script>

	<div class="column">
 
		<h1 style="text-align:center; font-size:40px;">Hey! What's Up<br>
		<h1 style="text-align:center; font-size:35px; text-decoration: underline;">What did you eat today?</h1>
		<br><p style="font-size:25px; font-style:oblique; text-align:center; font-family:Times New Roman"><b>Choose what you had for breakfast, lunch and dinner and see your calorie intake.</b></p><br><br>
		<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;" ><b> Breakfast</b></p>
		<table>
		<tr width="100%;">
		<td width="20%;" >
		<img src = "https://www.kitchenathoskins.com/wp-content/uploads/2020/08/best-belgian-waffles-18-cover.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="waffle" name="bf" value="Waffle"><label for="waffle"><b>Waffle <br> [218 cal per serving]</b></label><br><br>
		<label for="s1"><b>Number of servings:</b></label>
		<input type="number" id="s1" name="s1" min="1" ><br></td>
		<td>
		<img src = "https://media.smallbiztrends.com/2020/07/best-donut-franchise-businesses.png" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="donut" name="bf" value="Donut"><label for="donut"><b>Donut <br>[195 cal per serving]</b></label><br><br>
		<label for="s2"><b>Number of servings:</b></label>
		<input type="number" id="s2" name="s2" min="1"><br></td>
		<td>
		<img src = "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/119674.jpg?output-format=auto&output-quality=auto" alt ="picture" height= "250" width ="100%" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="pancakes" name="bf" value="Pancakes"><label for="pancakes"><b>Pancakes<br> [86 cal per serving]</b></label><br><br>
		<label for="s3"><b>Number of servings:</b></label>
		<input type="number" id="s3" name="s3" min="1" ><br></td>
		<td>
		<img src = "https://media.healthyfood.com/wp-content/uploads/2017/03/Everyday-shopping-Breakfast-cereals.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="cereal" name="bf" value="Cereal"><label for="cereal"><b>Cereal<br> [307 cal per serving]</b></label><br><br>
		<label for="s4"><b>Number of servings:</b></label>
		<input type="number" id="s4" name="s4" min="1" ><br></td>
		<td><img src = "https://sugargeekshow.com/wp-content/uploads/2019/10/chocolate-chip-muffins-featured.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="muffins" name="bf" value="Muffins"><label for="muffins"><b>Muffins <br>[249 cal per serving] </b></label><br><br>
		<label for="s5"><b>Number of servings:</b></label>
		<input type="number" id="s5" name="s5" min="1"><br></td></tr>

		<tr><td><img src = "https://www.jessicagavin.com/wp-content/uploads/2020/05/french-toast-11-1200.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="frencht" name="bf" value="French-Toast"><label for="frencht"><b>French-Toast<br> [149 cal per serving]</b></label><br><br>
		<label for="s6"><b>Number of servings:</b></label>
		<input type="number" id="s6" name="s6" min="1" ><br></td>
		<td><img src = "https://www.thespruceeats.com/thmb/62zv8nLe4bdUirYyESvKuwDD--w=/2667x2000/smart/filters:no_upscale()/scrambledeggscreamcheese-bc8a9f84e07944aab5f16b1ee8d36857.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="egg" name="bf" value="Scrambled-Egg"><label for="egg"><b>Scrambled Egg <br>[326 cal per serving]</b></label><br><br>
		<label for="s7"><b>Number of servings:</b></label>
		<input type="number" id="s7" name="s7" min="1"><br></td>
		<td><img src = "https://253qv1sx4ey389p9wtpp9sj0-wpengine.netdna-ssl.com/wp-content/uploads/2020/06/Barley_Kimchi_Sausage_GettyImages-1214116994_1920x1280-700x461.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="sausage" name="bf" value="Sausage"><label for="sausage"><b>Sausage <br>[346 cal per serving]</b></label><br><br>
		<label for="s8"><b>Number of servings:</b></label>
		<input type="number" id="s8" name="s8" min="1" ><br></td>
		<td><img src = "https://www.justonecookbook.com/wp-content/uploads/2015/05/Baked-Chicken-Katsu-Sandwich-500x400.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="csandwich" name="bf" value="ChickenSandwich"><label for="csandwich"><b>Chicken Sandwich <br>[515 cal per serving]</b></label><br><br>
		<label for="s9"><b>Number of servings:</b></label>
		<input type="number" id="s9" name="s9" min="1" ><br></td>
		<td><img src = "https://static.toiimg.com/thumb/60057435.cms?width=1200&height=900" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vsandwich" name="bf" value="VegSandwich"><label for="vsandwich"><b>Veg Sandwich <br>[266 cal per serving]</b></label><br><br>
		<label for="s10"><b>Number of servings:</b></label>
		<input type="number" id="s10" name="s10" min="1"><br></td></tr>

		<tr><td><img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqjmN3dgk7YJrvRAyba73JFdvJHV8CD2gFsw&usqp=CAU" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="juice" name="bf" value="Juice"><label for="juice"><b>Juice <br>[136 cal per serving]</b></label><br><br>
		<label for="s11"><b>Number of servings:</b></label>
		<input type="number" id="s11" name="s11" min="1"><br></td>
		<td><img src = "https://fil-idf.org/wp-content/uploads/2021/01/Standards.png" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="milk" name="bf" value="Milk"><label for="milk"><b>Milk <br>[50 cal per serving]</b></label><br><br>
		<label for="s12"><b>Number of servings:</b></label>
		<input type="number" id="s12" name="s12" min="1"><br></td>
		<td><img src = "https://static.toiimg.com/photo/72294806.cms" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="tea" name="bf" value="Tea"><label for="tea"><b>Tea <br>[75 cal per serving]</b></label><br><br>
		<label for="s13"><b>Number of servings:</b></label>
		<input type="number" id="s13" name="s13" min="1" ><br></td>
		<td><img src = "https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2019_33/2203981/171026-better-coffee-boost-se-329p-2203981.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="coffee" name="bf" value="Coffee"><label for="coffee"><b>Coffee <br> [120 cal per serving]</b></label><br><br>
		<label for="s14"><b>Number of servings:</b></label>
		<input type="number" id="s14" name="s14" min="1" ><br></td>
		<td><img src = "https://www.recipetineats.com/wp-content/uploads/2020/03/Brownies_0-SQ.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="sweets" name="bf" value="Sweets"><label for="sweets"><b>Sweets<br> [600 cal per serving]</b></label><br><br>
		<label for="s15"><b>Number of servings:</b></label>
		<input type="number" id="s15" name="s15" min="1"><br></td></tr>
		</table>
		<br><br>
		<button class="button" onClick="calc();" style="font-family:Garamond"><b>Add Breakfast</b></button></p><br><br><br><br><br><br>
		<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;"><b> Lunch</b></p>

		<table>
		<tr><td><img src = "https://www.vegrecipesofindia.com/wp-content/uploads/2018/12/veg-burger-recipe-1.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vburger" name="lunch" value="VegBurger"><label for="vburger"><b>Veg Burger <br>[124 cal per serving]</b></label><br><br>
		<label for="s16"><b>Number of servings:</b></label>
		<input type="number" id="s16" name="s16" min="1"><br></td>
		<td><img src = "https://images.immediate.co.uk/production/volatile/sites/2/2017/06/Butchies-2.jpg?quality=90&crop=10px%2C1099px%2C3819px%2C1643px&resize=960%2C408" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="cburger" name="lunch" value="ChickenBurger"><label for="cburger"><b>Chicken Burger<br> [200 cal per serving]</b></label><br><br>
		<label for="s17"><b>Number of servings:</b></label>
		<input type="number" id="s17" name="s17" min="1"><br></td>
		<td><img src = "https://foodal.com/wp-content/uploads/2019/12/Favorite-Recipe-for-Rice-and-Beans.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="rice" name="lunch" value="Rice"><label for="rice"><b>Rice <br>[150 cal per serving]</b></label><br><br>
		<label for="s18"><b>Number of servings:</b></label>
		<input type="number" id="s18" name="s18" min="1"><br></td>
		<td><img src = "https://static.toiimg.com/thumb/54659021.cms?imgsize=275086&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="fries" name="lunch" value="Fries"><label for="fries"><b>French Fries <br>[365 cal per serving]</b></label><br><br>
		<label for="s19"><b>Number of servings:</b></label>
		<input type="number" id="s19" name="s19" min="1"><br></td>
		<td><img src = "https://static.toiimg.com/thumb/60057435.cms?width=1200&height=900" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vsandwich2" name="lunch" value="VegSandwich2"><label for="vsandwich2"><b>Veg Sandwich <br>[266 cal per serving]</b></label><br><br>
		<label for="s20"><b>Number of servings:</b></label>
		<input type="number" id="s20" name="s20" min="1"><br></td></tr>

		<tr><td><img src = "https://www.justonecookbook.com/wp-content/uploads/2015/05/Baked-Chicken-Katsu-Sandwich-500x400.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="csandwich2" name="lunch" value="ChickenSandwich2"><label for="csandwich2"><b>Chicken Sandwich<br> [515 cal per serving]</b></label><br><br>
		<label for="s21"><b>Number of servings:</b></label>
		<input type="number" id="s21" name="s21" min="1"><br></td>
		<td><img src = "https://static.toiimg.com/thumb/61831141.cms?imgsize=664042&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="csalad" name="lunch" value="ChickenSalad"><label for="csalad"><b>Chicken Salad [100 cal per serving]</b></label><br><br>
		<label for="s22"><b>Number of servings:</b></label>
		<input type="number" id="s22" name="s22" min="1"><br></td>
		<td><img src = "https://c.ndtvimg.com/2020-07/9mmaqfa8_salad_625x300_29_July_20.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vsalad" name="lunch" value="VegSalad"><label for="vsalad"><b>Veg Salad [55 cal per serving]</b></label><br><br>
		<label for="s23"><b>Number of servings:</b></label>
		<input type="number" id="s23" name="s23" min="1"><br></td>
		<td><img src = "https://www.timeoutabudhabi.com/public/images/2021/05/10/best_tacos_abu_dhabi-2021.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="tacos" name="lunch" value="Tacos"><label for="tacos"><b>Tacos <br>[156 cal per serving]</b></label><br><br>
		<label for="s24"><b>Number of servings:</b></label>
		<input type="number" id="s24" name="s24" min="1"><br></td>
		<td><img src = "https://assets.change.org/photos/6/nk/ft/esnKFTvMKOlMDsv-800x450-noPad.jpg?1541614618" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="burrito" name="lunch" value="Burrito"><label for="burrito"><b>Burrito <br>[206 cal per serving]</b></label><br><br>
		<label for="s25"><b>Number of servings:</b></label>
		<input type="number" id="s25" name="s25" min="1"><br></td></tr>

		<tr><td><img src = "https://mybayutcdn.bayut.com/mybayut/wp-content/uploads/JW-steakhouse.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="steak" name="lunch" value="Steak"><label for="steak"><b>Steak<br> [679 cal per serving]</b></label><br><br>
		<label for="s26"><b>Number of servings:</b></label>
		<input type="number" id="s26" name="s26" min="1"><br></td>
		<td><img src = "https://static.toiimg.com/thumb/53339084.cms?imgsize=85489&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="cpizza" name="lunch" value="ChickenPizza"><label for="cpizza"><b>Chicken Pizza<br> [360 cal per serving]</b></label><br><br>
		<label for="s27"><b>Number of servings:</b></label>
		<input type="number" id="s27" name="s27" min="1"><br></td>
		<td><img src = "https://www.archanaskitchen.com/images/archanaskitchen/1-Author/Waagmi_Soni/Gralic_Crust_Veggie_Pizza.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vpizza" name="lunch" value="VegPizza"><label for="vpizza"><b>Veg Pizza<br> [300 cal per serving]</b></label><br><br>
		<label for="s28"><b>Number of servings:</b></label>
		<input type="number" id="s28" name="s28" min="1"><br></td>
		<td><img src = "https://thumbor.thedailymeal.com/ljapf934sswmk2wdeoe55KPoW4I=/870x565/https://www.thedailymeal.com/sites/default/files/slideshows/1678638/2172658/New_York-minestrone_soup-467947693.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vsoup" name="lunch" value="VegSoup"><label for="vsoup"><b>Veg Soup<br> [125 cal per serving]</b></label><br><br>
		<label for="s29"><b>Number of servings:</b></label>
		<input type="number" id="s29" name="s29" min="1"><br></td>
		<td><img src = "https://en.bcdn.biz/images/emails_source/0cd4a377-9323-4ee5-a20d-6624e18e1a85.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="coke" name="lunch" value="Coke"><label for="coke"><b>Coke<br> [150 cal per serving]</b></label><br><br>
		<label for="s30"><b>Number of servings:</b></label>
		<input type="number" id="s30" name="s30" min="1"><br></td></tr>
		</table>
		<br><br><br>
		<button class="button" onClick="lcalc();" style="font-family:Garamond"><b>Add Lunch</b></button></p><br><br><br><br><br><br>
		<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;"><b> Dinner</b></p>

		<table>
		<tr><td><img src = "https://www.justonecookbook.com/wp-content/uploads/2015/05/Baked-Chicken-Katsu-Sandwich-500x400.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="csandwich3" name="dinner" value="ChickenSandwich"><label for="csandwich3"><b>Chicken Sandwich<br> [515 cal per serving]</b></label><br><br>
		<label for="s31"><b>Number of servings:</b></label>
		<input type="number" id="s31" name="s31" min="1" ><br></td>
		<td><img src = "https://static.toiimg.com/thumb/61831141.cms?imgsize=664042&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="csalad3" name="dinner" value="ChickenSalad"><label for="csalad3"><b>Chicken Salad <br>[100 cal per serving]</b></label><br><br>
		<label for="s32"><b>Number of servings:</b></label>
		<input type="number" id="s32" name="s32" min="1" ><br></td>
		<td><img src = "https://static.toiimg.com/thumb/60057435.cms?width=1200&height=900" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vsandwich3" name="dinner" value="VegSandwich"><label for="vsandwich3"><b>Veg Sandwich <br>[266 cal per serving]</b></label><br><br>
		<label for="s33"><b>Number of servings:</b></label>
		<input type="number" id="s33" name="s33" min="1" ><br></td>
		<td><img src = "https://c.ndtvimg.com/2020-07/9mmaqfa8_salad_625x300_29_July_20.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vsalad3" name="dinner" value="Vegsalad"><label for="vsalad3"><b>Veg Salad<br> [55 cal per serving]</b></label><br><br>
		<label for="s34"><b>Number of servings:</b></label>
		<input type="number" id="s34" name="s34" min="1" ><br></td>
		<td><img src = "https://assets.change.org/photos/6/nk/ft/esnKFTvMKOlMDsv-800x450-noPad.jpg?1541614618" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="burrito3" name="dinner" value="Burito"><label for="burrito3"><b>Burrito <br>[206 cal per serving]</b></label><br><br>
		<label for="s35"><b>Number of servings:</b></label>
		<input type="number" id="s35" name="s35" min="1" ><br></td></tr>

		<tr><td><img src = "https://www.vegrecipesofindia.com/wp-content/uploads/2018/12/veg-burger-recipe-1.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vburger3" name="dinner" value="Vegburger"><label for="vburger3"><b>Veg Burger<br> [124 cal per serving]</b></label><br><br>
		<label for="s36"><b>Number of servings:</b></label>
		<input type="number" id="s36" name="s36" min="1" ><br></td>
		<td><img src = "https://images.immediate.co.uk/production/volatile/sites/2/2017/06/Butchies-2.jpg?quality=90&crop=10px%2C1099px%2C3819px%2C1643px&resize=960%2C408" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="cburger3" name="dinner" value="Chickenburger"><label for="cburger3"><b>Chicken Buger<br> [200 cal per serving]</b></label><br><br>
		<label for="s37"><b>Number of servings:</b></label>
		<input type="number" id="s37" name="s37" min="1" ><br></td>
		<td><img src = "https://www.timeoutabudhabi.com/public/images/2021/05/10/best_tacos_abu_dhabi-2021.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="tacos3" name="dinner" value="Tacos"><label for="tacos3"><b>Tacos<br> [156 cal per serving]</b></label><br><br>
		<label for="s38"><b>Number of servings:</b></label>
		<input type="number" id="s38" name="s38" min="1" ><br></td>
		<td><img src = "https://static.toiimg.com/thumb/54659021.cms?imgsize=275086&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="fries3" name="dinner" value="Fries"><label for="fries3"><b>French Fries <br>[365 cal per serving]</b></label><br><br>
		<label for="s39"><b>Number of servings:</b></label>
		<input type="number" id="s39" name="s39" min="1" ><br></td>
		<td><img src = "https://foodal.com/wp-content/uploads/2019/12/Favorite-Recipe-for-Rice-and-Beans.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="rice3" name="dinner" value="RiceBean"><label for="rice3"><b>Rice and Toasted beans<br> [270 cal per serving]</b></label><br><br>
		<label for="s40"><b>Number of servings:</b></label>
		<input type="number" id="s40" name="s40" min="1" ><br></td></tr>

		<tr><td><img src = "https://mybayutcdn.bayut.com/mybayut/wp-content/uploads/JW-steakhouse.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="steak3" name="dinner" value="Steak"><label for="steak3"><b>Steak<br> [679 cal per serving]</b></label><br><br>
		<label for="s41"><b>Number of servings:</b></label>
		<input type="number" id="s41" name="s41" min="1" ><br></td>
		<td><img src = "https://static.toiimg.com/thumb/53339084.cms?imgsize=85489&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="cpizza3" name="dinner" value="ChickenPizza"><label for="cpizza3"><b>Chicken Pizza <br>[360 cal per serving]</b></label><br><br>
		<label for="s42"><b>Number of servings:</b></label>
		<input type="number" id="s42" name="s42" min="1" ><br><br></td>
		<td><img src = "https://www.archanaskitchen.com/images/archanaskitchen/1-Author/Waagmi_Soni/Gralic_Crust_Veggie_Pizza.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="vpizza3" name="dinner" value="Vegpizza"><label for="vpizza3"><b>Veg Pizza <br>[300 cal per serving]</b></label><br><br>
		<label for="s43"><b>Number of servings:</b></label>
		<input type="number" id="s43" name="s43" min="1" ><br></td>
		<td><img src = "https://thumbor.thedailymeal.com/ljapf934sswmk2wdeoe55KPoW4I=/870x565/https://www.thedailymeal.com/sites/default/files/slideshows/1678638/2172658/New_York-minestrone_soup-467947693.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="veg3" name="dinner" value="VegSoup"><label for="veg3"><b>Veg Soup<br> [125 cal per serving]</b></label><br><br>
		<label for="s44"><b>Number of servings:</b></label>
		<input type="number" id="s44" name="s44" min="1" ><br></td>
		<td><img src = "https://en.bcdn.biz/images/emails_source/0cd4a377-9323-4ee5-a20d-6624e18e1a85.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="coke3" name="dinner" value="Coke"><label for="coke3"><b>Carbonated beverages <br>[150 cal per serving]</b></label><br><br>
		<label for="s45"><b>Number of servings:</b></label>
		<input type="number" id="s45" name="s45" min="1" ><br></td></tr>

		<tr><td><img src = "https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F43%2F2020%2F06%2F19%2FEasy-Meatloaf.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="meat3" name="dinner" value="meat"><label for="meat3"><b>Meatloaf <br>[149 cal per serving]</b></label><br><br>
		<label for="s46"><b>Number of servings:</b></label>
		<input type="number" id="s46" name="s46" min="1" ><br></td>
		<td><img src = "https://idsb.tmgrup.com.tr/2014/11/22/HaberDetay/1416615205683.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="turkey" name="dinner" value="Turkey"><label for="turkey"><b>Turkey<br> [189 cal per serving]</b></label><br><br>
		<label for="s47"><b>Number of servings:</b></label>
		<input type="number" id="s47" name="s47" min="1" ><br></td>
		<td><img src = "https://freezermealfrenzy.com/wp-content/uploads/2019/01/tjoestots02.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="tots" name="dinner" value="Tots"><label for="tots"><b>Tater Tots <br>[160 cal per serving]</b></label><br><br>
		<label for="s48"><b>Number of servings:</b></label>
		<input type="number" id="s48" name="s48" min="1" ><br></td>
		<td><img src = "https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F5445825.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="mac" name="dinner" value="Mac"><label for="mac"><b>Mac and Cheese<br> [310 cal per serving]</b></label><br><br>
		<label for="s49"><b>Number of servings:</b></label>
		<input type="number" id="s49" name="s49" min="1" ><br></td>
		<td><img src = "https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2020/02/Chicken-Fajitas-7.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
		<input style="vertical-align:center" type="checkbox" id="fajitas" name="dinner" value="Fajitas"><label for="fajitas"><b>Fajitas<br> [135 cal per serving]</b></label><br><br>
		<label for="s50"><b>Number of servings:</b></label>
		<input type="number" id="s50" name="s50" min="1" ><br></td></tr>

		</table>
<br>
<button class="button" onClick="dcalc();" style="font-family:Garamond"><b>Add Dinner</b></button></p><br><br><br><br><br><br><br><br>
<div style="padding:15px;	margin-left:50px;	margin-right:50px;  background-color:#ebdfb2;	height:350px;	text-align:left;  border: 5px solid #05386B">

<button class="button1" onClick="tcalc();" style="font-family:Lucida Handwriting;height:100px;margin-left:535px;">View Total Calorie Intake</button></p>
<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family: Lucida handwriting; font-size:20px;"> <b>Breakfast:</b><div class="in" id="breakfast_cal"></div></div>

<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Lunch:</b><div class="in" id="lunch_cal"><b></b></div></div>

<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Dinner:</b><div class="in" id="dinner_cal"><b></b></div></div>

<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Total:</b><div class="in" id="total_cal"><b></b></div></div></div>
<br><br><br><br>

<script>
 var tsum1=tsum2=tsum3=tsum=0;
 function calc() {
		var sum1=waffle=donut=pancakes=cereal=muffins=frencht=egg=sausage=csandwich=vsandwich=juice=milk=tea=coffee=sweets=0;
		if(document.getElementById("waffle").checked == true) {
		 waffle = document.getElementById("s1").value;
		}
		if(document.getElementById("donut").checked == true) {
		 donut = document.getElementById("s2").value;
		}
		if(document.getElementById("pancakes").checked == true) {
		 pancakes = document.getElementById("s3").value;
		}
		if(document.getElementById("cereal").checked == true) {
		 cereal = document.getElementById("s4").value;
		}
		if(document.getElementById("muffins").checked == true) {
		 muffins = document.getElementById("s5").value;
		}
		if(document.getElementById("frencht").checked == true) {
		 frencht = document.getElementById("s6").value;
		}
		if(document.getElementById("egg").checked == true) {
		 egg = document.getElementById("s7").value;
		}
		if(document.getElementById("sausage").checked == true) {
		 sausage = document.getElementById("s8").value;
		}
		if(document.getElementById("csandwich").checked == true) {
		 csandwich = document.getElementById("s9").value;
		}
		if(document.getElementById("vsandwich").checked == true) {
		 vsandwich = document.getElementById("s10").value;
		}
		if(document.getElementById("juice").checked == true) {
		 juice = document.getElementById("s11").value;
		}
		if(document.getElementById("milk").checked == true) {
		 milk = document.getElementById("s12").value;
		}
		if(document.getElementById("tea").checked == true) {
		 tea = document.getElementById("s13").value;
		}
		if(document.getElementById("coffee").checked == true) {
		 coffee = document.getElementById("s14").value;
		}
		if(document.getElementById("sweets").checked == true) {
		  sweets = document.getElementById("s15").value;
		}
		sum1=(218*waffle)+(195*donut)+(86*pancakes)+(307*cereal)+(249*muffins)+(149*frencht)+(326*egg)+(346*sausage)+(515*csandwich)+(266*vsandwich)+(136*juice)+(50*milk)+(75*tea)+(120*coffee)+(600*sweets);
		tsum1=sum1;
		
		}
		
		function lcalc() { 
		var sum2=vburger=cburger=rice=fries=vsandwich2=csandwich2=csalad=vsalad=tacos=burrito=steak=cpizza=vpizza=vsoup=coke=0;
		if(document.getElementById("vburger").checked == true) {
		 var vburger = document.getElementById("s16").value;
		}
		if(document.getElementById("cburger").checked == true) {
		  var cburger = document.getElementById("s17").value;
		}
		if(document.getElementById("rice").checked == true) {
		  var rice = document.getElementById("s18").value;
		}
		if(document.getElementById("fries").checked == true) {
		  var fries = document.getElementById("s19").value;
		}
		if(document.getElementById("vsandwich2").checked == true) {
		  var vsandwich2 = document.getElementById("s20").value;
		}
		if(document.getElementById("csandwich2").checked == true) {
		  var csandwich2 = document.getElementById("s21").value;
		}
		if(document.getElementById("csalad").checked == true) {
		 var csalad = document.getElementById("s22").value;
		}
		if(document.getElementById("vsalad").checked == true) {
		 var vsalad = document.getElementById("s23").value;
		}
		if(document.getElementById("tacos").checked == true) {
		 var tacos = document.getElementById("s24").value;
		}
		if(document.getElementById("burrito").checked == true) {
		 var burrito = document.getElementById("s25").value;
		}
		if(document.getElementById("steak").checked == true) {
		 var steak = document.getElementById("s26").value;
		}
		if(document.getElementById("cpizza").checked == true) {
		 var cpizza = document.getElementById("s27").value;
		}
		if(document.getElementById("vpizza").checked == true) {
		 var vpizza = document.getElementById("s28").value;
		}
		if(document.getElementById("vsoup").checked == true) {
		 var vsoup = document.getElementById("s29").value;
		}
		if(document.getElementById("coke").checked == true) {
		  var coke = document.getElementById("s30").value;
		}
	     sum2=(124*vburger)+(200*cburger)+(150*rice)+(365*fries)+(266*vsandwich2)+(515*csandwich2)+(100*csalad)+(55*vsalad)+(156*tacos)+(206*burrito)+(679*steak)+(360*cpizza)+(300*vpizza)+(125*vsoup)+(150*coke);
		tsum2=sum2;
		
		
}

 function dcalc() {
	var sum3=csandwich3=csalad3=vsandwich3=vsalad3=burrito3=vburger3=cburger3=tacos3=fries3=rice3=steak3=cpizza3=vpizza3=veg3=coke3=meat3=turkey=tots=mac=fajitas=0;
		if(document.getElementById("csandwich3").checked == true) {
		 csandwich3 = document.getElementById("s31").value;
		}
		if(document.getElementById("csalad3").checked == true) {
		 csalad3 = document.getElementById("s32").value;
		}
		if(document.getElementById("vsandwich3").checked == true) {
		 vsandwich3 = document.getElementById("s33").value;
		}
		if(document.getElementById("vsalad3").checked == true) {
		  vsalad3 = document.getElementById("s34").value;
		}
		if(document.getElementById("burrito3").checked == true) {
		 burrito = document.getElementById("s35").value;
		}
		if(document.getElementById("vburger3").checked == true) {
		 vburger3 = document.getElementById("s36").value;
		}
		if(document.getElementById("cburger3").checked == true) {
		 cburger3 = document.getElementById("s37").value;
		}
		if(document.getElementById("tacos3").checked == true) {
		 tacos3 = document.getElementById("s38").value;
		}
		if(document.getElementById("fries3").checked == true) {
		 fries3 = document.getElementById("s39").value;
		}
		if(document.getElementById("rice3").checked == true) {
		 rice3 = document.getElementById("s40").value;
		}
		if(document.getElementById("steak3").checked == true) {
		 steak3 = document.getElementById("s41").value;
		}
		if(document.getElementById("cpizza3").checked == true) {
		 cpizza3 = document.getElementById("s42").value;
		}
		if(document.getElementById("vpizza3").checked == true) {
		 vpizza3 = document.getElementById("s43").value;
		}
		if(document.getElementById("veg3").checked == true) {
		 veg3 = document.getElementById("s44").value;
		}
		if(document.getElementById("coke3").checked == true) {
		 coke3 = document.getElementById("s45").value;
		}
		if(document.getElementById("meat3").checked == true) {
		  meat3 = document.getElementById("s46").value;
		}
		if(document.getElementById("turkey").checked == true) {
		  turkey = document.getElementById("s47").value;
		}
		if(document.getElementById("tots").checked == true) {
		  tots = document.getElementById("s48").value;
		}
		if(document.getElementById("mac").checked == true) {
		  mac = document.getElementById("s49").value;
		}
		if(document.getElementById("fajitas").checked == true) {
		  fajitas = document.getElementById("s50").value;
		}
		
		sum3=(515*csandwich3)+(100*csalad3)+(266*vsandwich3)+(55*vsalad3)+(206*burrito3)+(124*vburger3)+(200*cburger3)+(156*tacos3)+(365*fries3)+(270*rice3)+(697*steak3)+(360*cpizza3)+(300*vpizza3)+(125*veg3)+(150*coke3)+(149*meat3)+(189*turkey)+(160*tots)+(310*mac)+(135*fajitas);
		tsum3=sum3;
		
		}

 function tcalc() {
	 document.getElementById("breakfast_cal").innerHTML= tsum1+" cal";
	 document.getElementById("lunch_cal").innerHTML= tsum2+" cal";
	 document.getElementById("dinner_cal").innerHTML= tsum3+" cal";
	 tsum = tsum1+tsum2+tsum3;
	 document.getElementById("total_cal").innerHTML= tsum+" cal";
	
 }
 
		
 
</script>
</body>
</html>