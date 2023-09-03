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
<head title="Italian Meals"/>
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
			width:25%;
			padding:15px;
			border: none;
			margin-left:auto;
			margin-right:auto;
			background:none;
			color:#05386B;
		}
		.out {
			width:25%;
			padding:15px 15px 25px 15px;
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
		  height:610px;
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
		  -webkit-animation-duration: 3s;
		  animation-name: fade;
		  animation-duration: 3s;
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
			padding:15px 15px 25px 15px;
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
		  <img src="https://www.pharmaceutical-technology.com/wp-content/uploads/sites/10/2021/03/Italy-2.jpg" style="width:100%; height:600px;">
		  <div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="https://www.onhisowntrip.com/wp-content/uploads/2020/08/RACQ.jpg" style="width:100%; height:600px;">
		  <div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="https://www.coe.int/documents/14577325/16404142/ITA_publication+report.jpg/3f0588a6-aade-560c-03ef-862cab05e90f" style="width:100%; height:600px;" >
		  <div class="text">Caption Three</div>
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
 		<h1 style="text-align:center; font-size:40px;">Buongiorno! Come va?<br>
		<h1 style="text-align:center; font-size:35px; text-decoration: underline;">What did you eat today?</h1>
		<br><p style="font-size:25px; font-style:oblique; text-align:center; font-family:Times New Roman"><b>Choose what you had for breakfast, lunch and dinner and see your calorie intake.</b></p><br><br>
		<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;" ><b> Breakfast</b></p>
<table>
<tr><td><img src = "https://www.seasonedkitchen.com/wp-content/uploads/poached-eggs-tomato-sauce-recipe.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="poach" name="bf" value="PoachedEgg"><label for="poach"><b>Italian Poached Egg <br>[71 cal per serving]</b></label><br><br>
<label for="s1"><b>Number of servings:</b></label>
<input type="number" id="s1" name="s1" min="1" ><br></td>
<td><img src = "https://media.fromthegrapevine.com/assets/images/2015/5/croissantswithcappuccino.jpg.480x0_q71_crop-scale.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="cornetti" name="bf" value="Cornetti"><label for="cornetti"><b>Cornetti n Cappuccino<br> [70 cal per serving]</b></label><br><br>
<label for="s2"><b>Number of servings:</b></label>
<input type="number" id="s2" name="s2" min="1" ><br></td>
<td><img src = "https://www.thespruceeats.com/thmb/gWECZIQLFhIbuTcacWJcKbDD2ko=/1280x854/filters:fill(auto,1)/175602146-56a214873df78cf77271c3be.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="tuna" name="bf" value="TunaSalad"><label for="tuna"><b>Tuna Salad <br>[383 cal per serving]</b></label><br><br>
<label for="s3"><b>Number of servings:</b></label>
<input type="number" id="s3" name="s3" min="1" ><br></td>
<td><img src = "https://media.healthyfood.com/wp-content/uploads/2017/03/Everyday-shopping-Breakfast-cereals.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="cereal" name="bf" value="Cereal"><label for="cereal"><b>Cereal<br> [307 cal per serving]</b></label><br><br>
<label for="s4"><b>Number of servings:</b></label>
<input type="number" id="s4" name="s4" min="1" ><br></td>
<td><img src = "https://sugargeekshow.com/wp-content/uploads/2019/10/chocolate-chip-muffins-featured.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="muffins" name="bf" value="Muffins"><label for="muffins"><b>Muffins <bR> [249 cal per serving]</b></label><br><br>
<label for="s5"><b>Number of servings:</b></label>
<input type="number" id="s5" name="s5" min="1" ><br></td></tr>

<tr><td><img src = "https://www.jessicagavin.com/wp-content/uploads/2020/05/french-toast-11-1200.jpg" alt ="picture" height= "250px" width ="100%" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="frencht" name="bf" value="French-Toast"><label for="frencht"><b>French-Toast <br>[149 cal per serving]</b></label><br><br>
<label for="s6"><b>Number of servings:</b></label>
<input type="number" id="s6" name="s6" min="1" ><br></td>
<td><img src = "https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2021/03/Spring-Vegetable-Frittata-Asparagus-Leek-and-Pea-Main-3.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="frittata" name="bf" value="Frittata"><label for="frittata"><b>Frittata <br>[107 cal per serving]</b></label><br><br>
<label for="s7"><b>Number of servings:</b></label>
<input type="number" id="s7" name="s7" min="1" ><br></td>
<td><img src = "https://253qv1sx4ey389p9wtpp9sj0-wpengine.netdna-ssl.com/wp-content/uploads/2020/06/Barley_Kimchi_Sausage_GettyImages-1214116994_1920x1280-700x461.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="sausage" name="bf" value="Sausage"><label for="sausage"><b>Sausage<br> [346 cal per serving]</b></label><br><br>
<label for="s8"><b>Number of servings:</b></label>
<input type="number" id="s8" name="s8" min="1" ><br></td>
<td><img src = "https://www.justonecookbook.com/wp-content/uploads/2015/05/Baked-Chicken-Katsu-Sandwich-500x400.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="csandwich" name="bf" value="ChickenSandwich"><label for="csandwich"><b>Chicken Sandwich <br>[515 cal per serving]</b></label><br><br>
<label for="s9"><b>Number of servings:</b></label>
<input type="number" id="s9" name="s9" min="1" ><br></td>
<td><img src = "https://static.toiimg.com/thumb/60057435.cms?width=1200&height=900" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="vsandwich" name="bf" value="VegSandwich"><label for="vsandwich"><b>Veg Sandwich <br>[266 cal per serving]</b></label><br><br>
<label for="s10"><b>Number of servings:</b></label>
<input type="number" id="s10" name="s10" min="1" ><br></td></tr>

<tr><td><img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqjmN3dgk7YJrvRAyba73JFdvJHV8CD2gFsw&usqp=CAU" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="juice" name="bf" value="Juice"><label for="juice"><b>Juice<br> [136 cal per serving]</b></label><br><br>
<label for="s11"><b>Number of servings:</b></label>
<input type="number" id="s11" name="s11" min="1" ><br></td>
<td><img src = "https://fil-idf.org/wp-content/uploads/2021/01/Standards.png" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="milk" name="bf" value="Milk"><label for="milk"><b>Milk <br>[50 cal per serving]</b></label><br><br>
<label for="s12"><b>Number of servings:</b></label>
<input type="number" id="s12" name="s12" min="1" ><br></td>
<td><img src = "https://static.toiimg.com/photo/72294806.cms" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="tea" name="bf" value="Tea"><label for="tea"><b>Tea <br>[75 cal per serving]</b></label><br><br>
<label for="s13"><b>Number of servings:</b></label>
<input type="number" id="s13" name="s13" min="1" ><br></td>
<td><img src = "https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2019_33/2203981/171026-better-coffee-boost-se-329p-2203981.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="coffee" name="bf" value="Coffee"><label for="coffee"><b>Coffee <br>[120 cal per serving]</b></label><br><br>
<label for="s14"><b>Number of servings:</b></label>
<input type="number" id="s14" name="s14" min="1" ><br></td>
<td><img src = "https://www.recipetineats.com/wp-content/uploads/2020/03/Brownies_0-SQ.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="sweets" name="bf" value="Sweets"><label for="sweets"><b>Sweets <br>[600 cal per serving]</b></label><br><br>
<label for="s15"><b>Number of servings:</b></label>
<input type="number" id="s15" name="s15" min="1" ><br></td></tr>

</table><br>
<button class="button" onClick="calc();" style="font-family:Garamond"><b>Add Breakfast</b></button></p><br><br><br><br><br><Br><br>
<p  style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;" ><b> Lunch</b></p>

<table>
<tr><td><img src = "https://i.ndtvimg.com/i/2017-09/caprese-salad_625x350_51506417724.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pesto" name="lunch" value="Pesto"><label for="pesto"><b>Caprese Salad with Pesto Sauce<br> [200 cal per serving]</b></label><br><br>
<label for="s16"><b>Number of servings:</b></label>
<input type="number" id="s16" name="s16" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/panzenella_600x300_71506417795.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="panz" name="lunch" value="Panzenella"><label for="panz"><b>Panzenella <br>[363 cal per serving]</b></label><br><br>
<label for="s17"><b>Number of servings:</b></label>
<input type="number" id="s17" name="s17" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/bruschetta_625x350_71506417841.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="bru" name="lunch" value="Bruschetta"><label for="bru"><b> Bruschetta<br> [48 cal per serving]</b></label><br><br>
<label for="s18"><b>Number of servings:</b></label>
<input type="number" id="s18" name="s18" min="1"><br></td></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/frocaccia_600x300_41506417893.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="foc" name="lunch" value="Focaccia"><label for="foc"><b>Focaccia Bread <br>[142 cal per serving]</b></label><br><br>
<label for="s19"><b>Number of servings:</b></label>
<input type="number" id="s19" name="s19" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/pasta-carbonara_600x300_41506417953.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pasta" name="lunch" value=" PastaCarbonara"><label for="pasta"><b> Pasta Carbonara<br> [574 cal per serving]</b></label><br><br>
<label for="s20"><b>Number of servings:</b></label>
<input type="number" id="s20" name="s20" min="1"><br></td></tr>

<tr><td><img src = "https://i.ndtvimg.com/i/2017-09/margherita-pizza_600x300_51506418004.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="marg" name="lunch" value=" MargheritaPizza"><label for="marg"><b> Margherita Pizza [204 cal per serving]</b></label><br><br>
<label for="s21"><b>Number of servings:</b></label>
<input type="number" id="s21" name="s21" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/risotto_625x350_81506418041.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="risotto" name="lunch" value="MushroomRisotto"><label for="risotto"><b>Mushroom Risotto <br>[367 cal per serving]</b></label><br><br>
<label for="s22"><b>Number of servings:</b></label>
<input type="number" id="s22" name="s22" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/pasta-con-pomodoro-e-basilico_625x350_51506418092.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pastacom" name="lunch" value=" Pasta Con Pomodoro E Basilico"><label for="pastacom"><b>Pasta Con Pomodoro E Basilico <br>[354 cal per serving]</b></label><br><br>
<label for="s23"><b>Number of servings:</b></label>
<input type="number" id="s23" name="s23" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/tiramisu-the-pick-me-up-cake_625x350_81506418133.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Tiramisu" name="lunch" value="Tiramisu"><label for="Tiramisu"><b>Tiramisu <br>[405 cal per serving]</b></label><br><br>
<label for="s24"><b>Number of servings:</b></label>
<input type="number" id="s24" name="s24" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-10/lasagna_620x350_81508846322.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Lasagna" name="lunch" value="Lasagna"><label for="Lasagna"><b>Lasagna <br>[154 cal per serving]</b></label><br><br>
<label for="s25"><b>Number of servings:</b></label>
<input type="number" id="s25" name="s25" min="1"><br></td></tr>

<tr><td><img src = "https://www.vegrecipesofindia.com/wp-content/uploads/2018/12/veg-burger-recipe-1.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="vburger" name="lunch" value="VegBurger"><label for="vburger"><b>Veg Burger <br>[124 cal per serving]</b></label><br><br>
<label for="s26"><b>Number of servings:</b></label>
<input type="number" id="s26" name="s26" min="1"><br></td>
<td><img src = "https://images.immediate.co.uk/production/volatile/sites/2/2017/06/Butchies-2.jpg?quality=90&crop=10px%2C1099px%2C3819px%2C1643px&resize=960%2C408" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="cburger" name="lunch" value="ChickenBurger"><label for="cburger"><b>Chicken Burger<br> [200 cal per serving]</b></label><br><br>
<label for="s27"><b>Number of servings:</b></label>
<input type="number" id="s27" name="s27" min="1"><br></td>
<td><img src = "https://static.toiimg.com/thumb/61831141.cms?imgsize=664042&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="csalad" name="lunch" value="ChickenSalad"><label for="csalad"><b>Chicken Salad<br> [100 cal per serving]</b></label><br><br>
<label for="s28"><b>Number of servings:</b></label>
<input type="number" id="s28" name="s28" min="1"><br></td>
<td><img src = "https://c.ndtvimg.com/2020-07/9mmaqfa8_salad_625x300_29_July_20.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="vsalad" name="lunch" value="VegSalad"><label for="vsalad"><b>Veg Salad<br> [55 cal per serving]</b></label><br><br>
<label for="s29"><b>Number of servings:</b></label>
<input type="number" id="s29" name="s29" min="1"><br></td>
<td><img src = "https://c.ndtvimg.com/2018-10/a1v6ja2g_panna-cota_625x300_22_October_18.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Pistachio" name="lunch" value="PistachioPannaCotta"><label for="Pistachio"><b> Pistachio Panna Cotta <br>[392 cal per serving]</b></label><br><br>
<label for="s30"><b>Number of servings:</b></label>
<input type="number" id="s30" name="s30" min="1"><br></td></tr>
</table>
<br>
<button class="button" onClick="lcalc();" style="font-family:Garamond"><b>Add Lunch</b></button></p><br><br><br><br><Br><br>
<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;"><b> Dinner</b></p>

<table>
<tr><td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd/public/recipe_photo/Chicken_mushroom_ravioli.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Ravioli" name="dinner" value="Ravioli"><label for="Ravioli"><b>Ravioli with Simple Tomato Sauce<br> [187 cal per serving]</b></label><br><br>
<label for="s31"><b>Number of servings:</b></label>
<input type="number" id="s31" name="s31" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/panzenella_600x300_71506417795.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="panz2" name="dinner" value="Panzenella"><label for="panz"><b>Panzenella<br> [363 cal per serving]</b></label><br><br>
<label for="s32"><b>Number of servings:</b></label>
<input type="number" id="s32" name="s32" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/pasta-con-pomodoro-e-basilico_625x350_51506418092.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pastacom2" name="dinner" value=" Pasta Con Pomodoro E Basilico"><label for="pastacom"><b>Pasta Con Pomodoro E Basilico<br> [354 cal per serving]</b></label><br><br>
<label for="s33"><b>Number of servings:</b></label>
<input type="number" id="s33" name="s33" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/tiramisu-the-pick-me-up-cake_625x350_81506418133.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Tiramisu2" name="dinner" value="Tiramisu"><label for="Tiramisu"><b>Tiramisu <br>[405 cal per serving]</b></label><br><br>
<label for="s34"><b>Number of servings:</b></label>
<input type="number" id="s34" name="s34" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/pasta-carbonara_600x300_41506417953.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pasta2" name="dinner" value=" PastaCarbonara"><label for="pasta"><b> Pasta Carbonara<br> [574 cal per serving]</b></label><br><br>
<label for="s35"><b>Number of servings:</b></label>
<input type="number" id="s35" name="s35" min="1"><br></td></tr>

<tr><td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd/public/recipe_photo/Whisk_PI_300419_Spinach_and_Ricotta_Cannelloni_V.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Spinach" name="dinner" value=" Spinach"><label for="Spinach"><b>Spinach and Ricotta Cannelloni <br>[620 cal per serving]</b></label><br><br>
<label for="s36"><b>Number of servings:</b></label>
<input type="number" id="s36" name="s36" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/risotto_625x350_81506418041.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="risotto2" name="dinner" value="MushroomRisotto"><label for="risotto"><b>Mushroom Risotto <br>[367 cal per serving]</b></label><br><br>
<label for="s37"><b>Number of servings:</b></label>
<input type="number" id="s37" name="s37" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/bruschetta_625x350_71506417841.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="bru2" name="dinner" value="Bruschetta"><label for="bru"><b> Bruschetta <br>[48 cal per serving]</b></label><br><br>
<label for="s38"><b>Number of servings:</b></label>
<input type="number" id="s38" name="s38" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-09/frocaccia_600x300_41506417893.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="foc2" name="dinner" value="Focaccia"><label for="foc"><b>Focaccia Bread<br> [142 cal per serving]</b></label><br><br>
<label for="s39"><b>Number of servings:</b></label>
<input type="number" id="s39" name="s39" min="1"><br></td>
<td><img src = "https://i.ndtvimg.com/i/2017-10/lasagna_620x350_81508846322.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Lasagna2" name="dinner" value="Lasagna"><label for="Lasagna"><b>Lasagna <br>[154 cal per serving]</b></label><br><br>
<label for="s40"><b>Number of servings:</b></label>
<input type="number" id="s40" name="s40" min="1"><br></td></tr>

<tr><td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd_fd/public/recipe_photo/Classic_beef_lasagne.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="beef" name="dinner" value="ClassicBeefLasagne"><label for="beef"><b>Classic Beef Lasagne <br>[320 cal per serving]</b></label><br><br>
<label for="s41"><b>Number of servings:</b></label>
<input type="number" id="s41" name="s41" min="1"><br></td>
<td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd/public/recipe_photo/Perf20159141_0.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="formaggio" name="dinner" value="RisottoFormaggio"><label for="formaggio"><b>Risotto Formaggio <br>[330 cal per serving]</b></label><br><br>
<label for="s42"><b>Number of servings:</b></label>
<input type="number" id="s42" name="s42" min="1"><br></td>
<td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd/public/recipe_photo/WS_Cacio_E_Pepe_Pasta_WIDE_408_R.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pepe" name="dinner" value="CacioePepePasta"><label for="pepe"><b>Cacio e Pepe Pasta<br> [513 cal per serving]</b></label><br><br>
<label for="s43"><b>Number of servings:</b></label>
<input type="number" id="s43" name="s43" min="1"><br></td>
<td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd/public/recipe_photo/Apricot%20cheesecake%20lasagne_4730.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="apricot" name="dinner" value="Apricot"><label for="apricot"><b>Apricot and Peach Cheesecake Lasagne<br> [1400 cal per serving]</b></label><br><br>
<label for="s44"><b>Number of servings:</b></label>
<input type="number" id="s44" name="s44" min="1"><br></td>
<td><img src = "https://myfoodbook.com.au/sites/default/files/styles/rc_wd/public/recipe_photo/Mozzarella%20Tortellini%20Crop.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="Mozzarella" name="dinner" value="MozzarellaTortellini"><label for="Mozzarella"><b>Mozzarella Tortellini <br>[280 cal per serving]</b></label><br><br>
<label for="s45"><b>Number of servings:</b></label>
<input type="number" id="s45" name="s45" min="1"><br></td></tr>
</table>
<br>
<button class="button" onClick="dcalc();" style="font-family:Garamond"><b>Add Dinner</b></button></p><br><br><br><br><br><Br><br>
<div style="padding:15px;	margin-left:50px;	margin-right:50px;  background-color:#ebdfb2;	height:350px;	text-align:left;  border: 5px solid #05386B">

<button class="button1" onClick="tcalc();" style="font-family:Lucida Handwriting; height:100px; margin-left:525px;">View Total Calorie Intake</button></p>
<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family: Lucida handwriting; font-size:20px;"> <b>Breakfast:</b><div class="in" id="breakfast_cal"></div></div>

	<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Lunch:</b><div class="in" id="lunch_cal"><b></b></div></div>

	<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Dinner:</b><div class="in" id="dinner_cal"><b></b></div></div>

	<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Total:</b><div class="in" id="total_cal"><b></b></div></div></div>
<script>
 var tsum1=tsum2=tsum3=tsum=0;
 function calc() {
		var sum1=poach=cornetti=tuna=cereal=muffins=frencht=frittata=sausage=csandwich=vsandwich=juice=milk=tea=coffee=sweets=0;
		if(document.getElementById("poach").checked == true) {
		 poach = document.getElementById("s1").value;
		}
		if(document.getElementById("cornetti").checked == true) {
		 cornetti = document.getElementById("s2").value;
		}
		if(document.getElementById("tuna").checked == true) {
		 tuna = document.getElementById("s3").value;
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
		if(document.getElementById("frittata").checked == true) {
		 frittata = document.getElementById("s7").value;
		}
		if(document.getElementById("sausage").checked == true) {
		 sausage = document.getElementById("s8").value;
		}
		if(document.getElementById("csandwich").checked == true) {
		 paratha = document.getElementById("s9").value;
		}
		if(document.getElementById("vsandwich").checked == true) {
		 pongal = document.getElementById("s10").value;
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
		sum1=(71*poach)+(70*cornetti)+(383*tuna)+(307*cereal)+(249*muffins)+(149*frencht)+(107*frittata)+(346*sausage)+(515*csandwich)+(266*vsandwich)+(136*juice)+(50*milk)+(75*tea)+(120*coffee)+(600*sweets);
		tsum1=sum1;
		
		}
		
		function lcalc() { 
		var sum2=pesto=panz=bru=foc=pasta=marg=risotto=pastacom=Tiramisu=Lasagna=vburger=cburger=csalad=vsalad=Pistachio=0;
		if(document.getElementById("pesto").checked == true) {
		 var pesto = document.getElementById("s16").value;
		}
		if(document.getElementById("panz").checked == true) {
		  var panz = document.getElementById("s17").value;
		}
		if(document.getElementById("bru").checked == true) {
		  var bru = document.getElementById("s18").value;
		}
		if(document.getElementById("foc").checked == true) {
		  var foc = document.getElementById("s19").value;
		}
		if(document.getElementById("pasta").checked == true) {
		  var pasta = document.getElementById("s20").value;
		}
		if(document.getElementById("marg").checked == true) {
		  var marg = document.getElementById("s21").value;
		}
		if(document.getElementById("risotto").checked == true) {
		 var risotto = document.getElementById("s22").value;
		}
		if(document.getElementById("pastacom").checked == true) {
		 var pastacom = document.getElementById("s23").value;
		}
		if(document.getElementById("Tiramisu").checked == true) {
		 var Tiramisu = document.getElementById("s24").value;
		}
		if(document.getElementById("Lasagna").checked == true) {
		 var Lasagna = document.getElementById("s25").value;
		}
		if(document.getElementById("vburger").checked == true) {
		 var vburger = document.getElementById("s26").value;
		}
		if(document.getElementById("cburger").checked == true) {
		 var cburger = document.getElementById("s27").value;
		}
		if(document.getElementById("csalad").checked == true) {
		 var csalad = document.getElementById("s28").value;
		}
		if(document.getElementById("vsalad").checked == true) {
		 var vsalad = document.getElementById("s29").value;
		}
		if(document.getElementById("Pistachio").checked == true) {
		  var Pistachio = document.getElementById("s30").value;
		}
	     sum2=(200*pesto)+(363*panz)+(48*bru)+(142*foc)+(574*pasta)+(204*marg)+(367*risotto)+(354*pastacom)+(405*Tiramisu)+(154*Lasagna)+(124*vburger)+(200*cburger)+(100*csalad)+(55*vsalad)+(392*Pistachio);
		tsum2=sum2;
		
		
}

 function dcalc() {
	var sum3=Ravioli=panz2=pastacom2=Tiramisu2=pasta2=Spinach=risotto2=bru2=foc2=Lasagna2=beef=formaggio=pepe=apricot=Mozzarella=0;
		if(document.getElementById("Ravioli").checked == true) {
		 Ravioli = document.getElementById("s31").value;
		}
		if(document.getElementById("panz2").checked == true) {
		 panz2 = document.getElementById("s32").value;
		}
		if(document.getElementById("pastacom2").checked == true) {
		 pastacom2 = document.getElementById("s33").value;
		}
		if(document.getElementById("Tiramisu2").checked == true) {
		  Tiramisu2 = document.getElementById("s34").value;
		}
		if(document.getElementById("pasta2").checked == true) {
		 pasta2 = document.getElementById("s35").value;
		}
		if(document.getElementById("Spinach").checked == true) {
		 Spinach = document.getElementById("s36").value;
		}
		if(document.getElementById("risotto2").checked == true) {
		 risotto2 = document.getElementById("s37").value;
		}
		if(document.getElementById("bru2").checked == true) {
		 bru2 = document.getElementById("s38").value;
		}
		if(document.getElementById("foc2").checked == true) {
		 foc2 = document.getElementById("s39").value;
		}
		if(document.getElementById("Lasagna2").checked == true) {
		 Lasagna2 = document.getElementById("s40").value;
		}
		if(document.getElementById("beef").checked == true) {
		 beef = document.getElementById("s41").value;
		}
		if(document.getElementById("formaggio").checked == true) {
		 formaggio = document.getElementById("s42").value;
		}
		if(document.getElementById("pepe").checked == true) {
		 pepe = document.getElementById("s43").value;
		}
		if(document.getElementById("apricot").checked == true) {
		 apricot = document.getElementById("s44").value;
		}
		if(document.getElementById("Mozzarella").checked == true) {
		 Mozzarella = document.getElementById("s45").value;
		}
	
		sum3=(187*Ravioli)+(363*panz2)+(354*pastacom2)+(405*Tiramisu2)+(574*pasta2)+(620*Spinach)+(367*risotto2)+(48*bru2)+(142*foc2)+(154*Lasagna2)+(320*beef)+(330*formaggio)+(513*pepe)+(1400*apricot)+(280*Mozzarella);
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