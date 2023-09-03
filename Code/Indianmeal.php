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
<head title="Indian Meals"/>
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
			padding:15px 15px 25px 15px;
			border: 1px solid black;
			margin-left:50px;
			margin-right:50px;
			background:Cornsilk;
			color:#05386B;
			text-align:left;
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
		  <img src="https://static.dw.com/image/55000481_303.jpg" style="width:100%; height:600px;">
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="https://img.jakpost.net/c/2018/03/22/2018_03_22_42682_1521688810._large.jpg" style="width:100%; height:600px;">
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="https://c.ndtvimg.com/2018-11/72jbsodo_south-indian-food_625x300_03_November_18.jpg" style="width:100%; height:600px;" >
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
 
		<h1 style="text-align:center; font-size:40px;">Namaste!<br>
		<h1 style="text-align:center; font-size:35px; text-decoration: underline;">What did you eat today?</h1>
		<br><p style="font-size:25px; font-style:oblique; text-align:center; font-family:Times New Roman"><b>Choose what you had for breakfast, lunch and dinner and see your calorie intake.</b></p><br><br>
		<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;" ><b> Breakfast</b></p>
<table>
<tr><td><img src = "https://chakriskitchen.com/wp-content/uploads/2018/12/Idly19-500x500.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="idly" name="bf" value="Idly"><label for="idly"><b>Idly<br> [90 cal per serving]</b></label><br><br>
<label for="s1"><b>Number of servings:</b></label>
<input type="number" id="s1" name="s1" min="1" ><br></td>
<td><img src = "https://www.cookwithmanali.com/wp-content/uploads/2020/05/Masala-Dosa.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="dosa" name="bf" value="Dosa"><label for="dosa"><b>Dosa <br>[170 cal per serving]</b></label><br><br>
<label for="s2"><b>Number of servings:</b></label>
<input type="number" id="s2" name="s2" min="1"><br></td>
<td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2020/07/dosa-recipe.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="mdosa" name="bf" value="mDosa"><label for="mdosa"><b>Masala-Dosa <br>[180 cal per serving]</b></label><br><br>
<label for="s3"><b>Number of servings:</b></label>
<input type="number" id="s3" name="s3" min="1" ><br></td>
<td><img src = "https://fforflavour.com/wp-content/uploads/2018/07/rava-dosa.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="rdosa" name="bf" value="rDosa"><label for="rdosa"><b>Rava-Dosa<br> [116 cal per serving]</b></label><br><br>
<label for="s4"><b>Number of servings:</b></label>
<input type="number" id="s4" name="s4" min="1" ><br></td>
<td><img src = "https://lh5.ggpht.com/-qOsH7EtYuiU/UpWAnSO-pMI/AAAAAAAAW98/ZvDHrB5cm0A/poori-picture_thumb3.jpg?imgmax=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="poori" name="bf" value="Poori"><label for="poori"><b>Poori<br> [200 cal per serving] </b></label><br><br>
<label for="s5"><b>Number of servings:</b></label>
<input type="number" id="s5" name="s5" min="1"><br></td></tr>

<tr><td><img src = "https://www.funfoodfrolic.com/wp-content/uploads/2020/10/Medu-Vada-Thumbnail-500x500.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="vada" name="bf" value="Vada"><label for="vada"><b>Vada <br>[ 97 cal per serving]</b></label><br><br>
<label for="s6"><b>Number of servings:</b></label>
<input type="number" id="s6" name="s6" min="1" ><br></td>
<td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2020/01/poha-500x500.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pooha" name="bf" value="Pooha"><label for="pooha"><b>Poha<br> [180 cal per serving]</b></label><br><br>
<label for="s7"><b>Number of servings:</b></label>
<input type="number" id="s7" name="s7" min="1"><br></td>
<td><img src = "https://www.whiskaffair.com/wp-content/uploads/2019/06/Rava-Upma-1-3.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="upma" name="bf" value="Upma"><label for="upma"><b>Upma<br> [192 cal per serving]</b></label><br><br>
<label for="s8"><b>Number of servings:</b></label>
<input type="number" id="s8" name="s8" min="1" ><br></td>
<td><img src = "https://www.cookwithkushi.com/wp-content/uploads/2021/03/IMG_78753.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="paratha" name="bf" value="Paratha"><label for="paratha"><b>Aloo Paratha<br> [177 cal per serving]</b></label><br><br>
<label for="s9"><b>Number of servings:</b></label>
<input type="number" id="s9" name="s9" min="1" ><br></td>
<td><img src = "https://static.toiimg.com/thumb/67488780.cms?imgsize=524381&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pongal" name="bf" value="Pongal"><label for="pongal"><b>Pongal<br> [250 cal per serving]</b></label><br><br>
<label for="s10"><b>Number of servings:</b></label>
<input type="number" id="s10" name="s10" min="1"><br></td></tr>

<tr><td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2016/04/paniyaram-recipe-1.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="paniaram" name="bf" value="Paniaram"><label for="paniaram"><b>Paniaram<br> [150 cal per serving]</b></label><br><br>
<label for="s11"><b>Number of servings:</b></label>
<input type="number" id="s11" name="s11" min="1"><br></td>
<td><img src = "https://fil-idf.org/wp-content/uploads/2021/01/Standards.png" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="milk" name="bf" value="Milk"><label for="milk"><b>Milk <br>[50 cal per serving]</b></label><br><br>
<label for="s12"><b>Number of servings:</b></label>
<input type="number" id="s12" name="s12" min="1"><br></td>
<td><img src = "https://static.toiimg.com/photo/72294806.cms" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="tea" name="bf" value="Tea"><label for="tea"><b>Tea<br> [75 cal per serving]</b></label><br><br>
<label for="s13"><b>Number of servings:</b></label>
<input type="number" id="s13" name="s13" min="1" ><br></td>
<td><img src = "https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2019_33/2203981/171026-better-coffee-boost-se-329p-2203981.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="coffee" name="bf" value="Coffee"><label for="coffee"><b>Coffee<br> [120 cal per serving]</b></label><br><br>
<label for="s14"><b>Number of servings:</b></label>
<input type="number" id="s14" name="s14" min="1" ><br></td>
<td><img src = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-126550896-1554999269.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="nuts" name="bf" value="Nuts"><label for="nuts"><b>Nuts<br> [85 cal per serving]</b></label><br><br>
<label for="s15"><b>Number of servings:</b></label>
<input type="number" id="s15" name="s15" min="1"><br></td></tr>
</table>
<br>
<button class="button" onClick="calc();" style="font-family:Garamond"><b>Add Breakfast</b></button></p><br><br><br><br><br><br><br>
<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;"><b> Lunch</b></p>

<table>
<tr><td><img src = "https://www.errenskitchen.com/wp-content/uploads/2014/02/Rice-Pilaf2.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="rice" name="lunch" value="Rice"><label for="rice"><b>Rice <br>[200 cal per serving]</b></label><br><br>
<label for="s16"><b>Number of servings:</b></label>
<input type="number" id="s16" name="s16" min="1"><br></td>
<td><img src = "https://static.toiimg.com/thumb/61203720.cms?width=1200&height=900" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="chapati" name="lunch" value="Chapati"><label for="chapati"><b>Chapati<br> [140 cal per serving]</b></label><br><br>
<label for="s17"><b>Number of servings:</b></label>
<input type="number" id="s17" name="s17" min="1"><br></td>
<td><img src = "https://swatisani.net/kitchen/wp-content/uploads/2015/10/IMG_9350.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="chicken" name="lunch" value="Chicken"><label for="chicken"><b>Chicken dish<br> [330 cal per serving]</b></label><br><br>
<label for="s18"><b>Number of servings:</b></label>
<input type="number" id="s18" name="s18" min="1"><br></td>
<td><img src = "https://www.archanaskitchen.com/images/archanaskitchen/1-Author/Pooja_Thakur/Dabha_mutton.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="mutton" name="lunch" value="Mutton"><label for="mutton"><b>Mutton dish<br> [500 cal per serving]</b></label><br><br>
<label for="s19"><b>Number of servings:</b></label>
<input type="number" id="s19" name="s19" min="1"><br></td>
<td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2014/10/egg-fried-rice-recipe-10.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="egg" name="lunch" value="Egg"><label for="egg"><b>Egg Fried Rice<br> [400 cal per serving]</b></label><br><br>
<label for="s20"><b>Number of servings:</b></label>
<input type="number" id="s20" name="s20" min="1"><br></td></tr>

<tr><td><img src = "https://listing10.com/wp-content/uploads/2020/11/FI-2.png" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="roti" name="lunch" value="Roti"><label for="roti"><b>Roti<br> [100 cal per serving]</b></label><br><br>
<label for="s21"><b>Number of servings:</b></label>
<input type="number" id="s21" name="s21" min="1"><br></td>
<td><img src = "https://i2.wp.com/www.sujiscooking.com/wp-content/uploads/2014/11/kozhikodan-biriyani-recipe.1024x1024-2.jpg?fit=1024%2C1549&ssl=1" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="biriyani" name="lunch" value="Biriyani"><label for="biriyani"><b>Biriyani<br> [448 cal per serving]</b></label><br><br>
<label for="s22"><b>Number of servings:</b></label>
<input type="number" id="s22" name="s22" min="1"><br></td>
<td><img src = "https://i.pinimg.com/originals/a0/66/1b/a0661b8adfbde9ea11c56a88cf27d651.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="fish" name="lunch" value="Fish"><label for="fish"><b>Fish dish <br>[200 cal per serving]</b></label><br><br>
<label for="s23"><b>Number of servings:</b></label>
<input type="number" id="s23" name="s23" min="1"><br></td>
<td><img src = "https://www.cookwithkushi.com/wp-content/uploads/2021/03/IMG_78753.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="lparatha" name="lunch" value="Paratha"><label for="lparatha"><b>Paratha<br> [177 cal per serving]</b></label><br><br>
<label for="s24"><b>Number of servings:</b></label>
<input type="number" id="s24" name="s24" min="1"><br></td>
<td><img src = "https://assets.bonappetit.com/photos/5d4b5b39e9887a0008135935/6:9/w_2366,h_3549,c_limit/BA-0919-Tofu-Summer-Veggie-Curry.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="veg" name="lunch" value="Vegetables"><label for="veg"><b>Vegetables<br> [80 cal per serving]</b></label><br><br>
<label for="s25"><b>Number of servings:</b></label>
<input type="number" id="s25" name="s25" min="1"><br></td></tr>

<tr><td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2014/11/paneer-butter-masala-recipe-2.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="paneer" name="lunch" value="Paneer"><label for="paneer"><b>Paneer<br> [100 cal per serving]</b></label><br><br>
<label for="s26"><b>Number of servings:</b></label>
<input type="number" id="s26" name="s26" min="1"><br></td>
<td><img src = "https://www.vegrecipesofindia.com/wp-content/uploads/2012/05/how-to-make-curd-recipe-1.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="curd" name="lunch" value="Curd"><label for="curd"><b>Curd<br> [98 cal per serving]</b></label><br><br>
<label for="s27"><b>Number of servings:</b></label>
<input type="number" id="s27" name="s27" min="1"><br></td>
<td><img src = "https://static.toiimg.com/photo/72294806.cms" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="ltea" name="lunch" value="Tea"><label for="ltea"><b>Tea<br> [75 cal per serving]</b></label><br><br>
<label for="s28"><b>Number of servings:</b></label>
<input type="number" id="s28" name="s28" min="1"><br></td>
<td><img src = "https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2019_33/2203981/171026-better-coffee-boost-se-329p-2203981.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="lcoffee" name="lunch" value="Coffee"><label for="lcoffee"><b>Coffee<br> [120 cal per serving]</b></label><br><br>
<label for="s29"><b>Number of servings:</b></label>
<input type="number" id="s29" name="s29" min="1"><br></td>
<td><img src = "https://imgk.timesnownews.com/story/diwali_sweets.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="sweets" name="lunch" value="Sweets"><label for="sweets"><b>Sweets<br> [600 cal per serving]</b></label><br><br>
<label for="s30"><b>Number of servings:</b></label>
<input type="number" id="s30" name="s30" min="1"><br></td></tr>
</table>
<br>
<button class="button" onClick="lcalc();" style="font-family:Garamond"><b>Add Lunch</b></button></p><br><br><br><br><br><br><br><br>
<p style="font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman; text-decoration: underline;"><b> Dinner</b></p>

<table>
<tr><td><img src = "https://chakriskitchen.com/wp-content/uploads/2018/12/Idly19-500x500.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="idly2" name="bf" value="Idly"><label for="idly2"><b>Idly<br> [90 cal per serving]</b></label><br><br>
<label for="s31"><b>Number of servings:</b></label>
<input type="number" id="s31" name="s31" min="1"><br></td>
<td><img src = "https://www.cookwithmanali.com/wp-content/uploads/2020/05/Masala-Dosa.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="dosa2" name="bf" value="Dosa"><label for="dosa2"><b>Dosa<br> [170 cal per serving]</b></label><br><br>
<label for="s32"><b>Number of servings:</b></label>
<input type="number" id="s32" name="s32" min="1"><br></td>
<td><img src = "https://www.funfoodfrolic.com/wp-content/uploads/2020/10/Medu-Vada-Thumbnail-500x500.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="vada2" name="bf" value="Vada"><label for="vada2"><b>Vada <br>[97 cal per serving]</b></label><br><br>
<label for="s33"><b>Number of servings:</b></label>
<input type="number" id="s33" name="s33" min="1"><br></td>
<td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2020/01/poha-500x500.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pooha2" name="bf" value="Pooha"><label for="pooha2"><b>Poha<br> [180 cal per serving]</b></label><br><br>
<label for="s34"><b>Number of servings:</b></label>
<input type="number" id="s34" name="s34" min="1"><br></td>
<td><img src = "https://www.errenskitchen.com/wp-content/uploads/2014/02/Rice-Pilaf2.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="rice2" name="lunch" value="Rice"><label for="rice2"><b>Rice<br> [200 cal per serving]</b></label><br><br>
<label for="s35"><b>Number of servings:</b></label>
<input type="number" id="s35" name="s35" min="1"><br></td></tr>

<tr><td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2020/07/dosa-recipe.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="mdosa2" name="bf" value="mDosa"><label for="mdosa2"><b>Masala-Dosa<br> [180 cal per serving]</b></label><br><br>
<label for="s36"><b>Number of servings:</b></label>
<input type="number" id="s36" name="s36" min="1"><br></td>
<td><img src = "https://fforflavour.com/wp-content/uploads/2018/07/rava-dosa.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="rdosa2" name="bf" value="rDosa"><label for="rdosa2"><b>Rava-Dosa <br>[116 cal per serving]</b></label><br><br>
<label for="s37"><b>Number of servings:</b></label>
<input type="number" id="s37" name="s37" min="1"><br></td>
<td><img src = "https://lh5.ggpht.com/-qOsH7EtYuiU/UpWAnSO-pMI/AAAAAAAAW98/ZvDHrB5cm0A/poori-picture_thumb3.jpg?imgmax=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="poori2" name="bf" value="Poori"><label for="poori2"><b>Poori <br>[200 cal per serving]</b></label><br><br>
<label for="s38"><b>Number of servings:</b></label>
<input type="number" id="s38" name="s38" min="1"><br></td>
<td><img src = "https://www.cookwithkushi.com/wp-content/uploads/2021/03/IMG_78753.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="paratha2" name="bf" value="Paratha"><label for="paratha2"><b>Paratha<br> [117 cal per serving]</b></label><br><br>
<label for="s39"><b>Number of servings:</b></label>
<input type="number" id="s39" name="s39" min="1"><br></td>
<td><img src = "https://static.toiimg.com/thumb/67488780.cms?imgsize=524381&width=800&height=800" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="pongal2" name="bf" value="Pongal"><label for="pongal2"><b>Pongal<br> [250 cal per serving]</b></label><br><br>
<label for="s40"><b>Number of servings:</b></label>
<input type="number" id="s40" name="s40" min="1"><br></td></td></tr>

<tr><td><img src = "https://static.toiimg.com/thumb/61203720.cms?width=1200&height=900" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="chapati2" name="lunch" value="Chapati"><label for="chapati2"><b>Chapati<br> [140 cal per serving]</b></label><br><br>
<label for="s41"><b>Number of servings:</b></label>
<input type="number" id="s41" name="s41" min="1"><br></td>
<td><img src = "https://listing10.com/wp-content/uploads/2020/11/FI-2.png" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="roti2" name="lunch" value="Roti"><label for="roti2"><b>Roti <br>[100 cal per serving]</b></label><br><br>
<label for="s42"><b>Number of servings:</b></label>
<input type="number" id="s42" name="s42" min="1"><br></td>
<td><img src = "https://assets.bonappetit.com/photos/5d4b5b39e9887a0008135935/6:9/w_2366,h_3549,c_limit/BA-0919-Tofu-Summer-Veggie-Curry.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="veg2" name="lunch" value="Vegetables"><label for="veg2"><b>Vegetables <br>[100 cal per serving]</b></label><br><br>
<label for="s43"><b>Number of servings:</b></label>
<input type="number" id="s43" name="s43" min="1"><br></td>
<td><img src = "https://www.indianhealthyrecipes.com/wp-content/uploads/2014/11/paneer-butter-masala-recipe-2.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="paneer2" name="lunch" value="Panner"><label for="paneer2"><b>Paneer<br> [80 cal per serving]</b></label><br><br>
<label for="s44"><b>Number of servings:</b></label>
<input type="number" id="s44" name="s44" min="1"><br></td>
<td><img src = "https://www.whiskaffair.com/wp-content/uploads/2019/06/Rava-Upma-1-3.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="upma2" name="bf" value="Upma"><label for="upma2"><b>Upma<br> [192 cal per serving]</b></label><br><br>
<label for="s45"><b>Number of servings:</b></label>
<input type="number" id="s45" name="s45" min="1"><br></td></tr>

<tr><td><img src = "https://static.toiimg.com/photo/72294806.cms" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="tea2" name="bf" value="Tea"><label for="tea2"><b>Tea <br>[75 cal per serving]</b></label><br><br>
<label for="s46"><b>Number of servings:</b></label>
<input type="number" id="s46" name="s46" min="1"><br></td>
<td><img src = "https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2019_33/2203981/171026-better-coffee-boost-se-329p-2203981.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="coffee2" name="bf" value="Coffee"><label for="coffee2"><b>Coffee <br>[120 cal per serving]</b></label><br><br>
<label for="s47"><b>Number of servings:</b></label>
<input type="number" id="s47" name="s47" min="1"><br></td>
<td><img src = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-126550896-1554999269.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="nuts2" name="bf" value="Nuts"><label for="nuts2"><b>Nuts <br>[85 cal per serving]</b></label><br><br>
<label for="s48"><b>Number of servings:</b></label>
<input type="number" id="s48" name="s48" min="1"><br></td>
<td><img src = "https://fil-idf.org/wp-content/uploads/2021/01/Standards.png" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="milk2" name="bf" value="Milk"><label for="milk2"><b>Milk <br>[50 cal per serving]</b></label><br><br>
<label for="s49"><b>Number of servings:</b></label>
<input type="number" id="s49" name="s49" min="1"><br></td>
<td><img src = "https://imgk.timesnownews.com/story/diwali_sweets.jpg" alt ="picture" height= "250px" width ="250px" id ="im"><br><br>
<input style="vertical-align:center" type="checkbox" id="sweets2" name="lunch" value="Sweets"><label for="sweets2"><b>Sweets <br>[600 cal per serving]</b></label><br><br>
<label for="s50"><b>Number of servings:</b></label>
<input type="number" id="s50" name="s50" min="1"><br></td></tr>

</table>
<br>
<button class="button" onClick="dcalc();" style="font-family:Garamond"><b>Add Dinner</b></button></p><br><br><br><br><br><br><br>
<div style="padding:15px;	margin-left:50px;	margin-right:50px;  background-color:#ebdfb2;	height:350px;	text-align:left;  border: 5px solid #05386B">

<button class="button1" onClick="tcalc();" style="font-family:Lucida Handwriting; height:100px; margin-left:525px;">View Total Calorie Intake</button></p>
<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family: Lucida handwriting; font-size:20px;"> <b>Breakfast:</b><div class="in" id="breakfast_cal"></div></div>

	<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Lunch:</b><div class="in" id="lunch_cal"><b></b></div></div>

	<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Dinner:</b><div class="in" id="dinner_cal"><b></b></div></div>

	<div class="out" style=" width:200px; padding:15px 15px 25px 15px; border: 5px solid #05386B; margin-left:77px; margin-right:50px; text-align:center; float:left;	font-family:  Lucida handwriting; font-size:20px;"><b>Total:</b><div class="in" id="total_cal"><b></b></div></div></div>
</div>
<script>
 var tsum1=tsum2=tsum3=tsum=0;
 function calc() {
		var sum1=idly=dosa=mdosa=rdosa=poori=vada=pooha=upma=paratha=pongal=paniaram=milk=tea=coffee=nuts=0;
		if(document.getElementById("idly").checked == true) {
		 idly = document.getElementById("s1").value;
		}
		if(document.getElementById("dosa").checked == true) {
		 dosa = document.getElementById("s2").value;
		}
		if(document.getElementById("mdosa").checked == true) {
		 mdosa = document.getElementById("s3").value;
		}
		if(document.getElementById("rdosa").checked == true) {
		 rdosa = document.getElementById("s4").value;
		}
		if(document.getElementById("poori").checked == true) {
		 poori = document.getElementById("s5").value;
		}
		if(document.getElementById("vada").checked == true) {
		 vada = document.getElementById("s6").value;
		}
		if(document.getElementById("pooha").checked == true) {
		 pooha = document.getElementById("s7").value;
		}
		if(document.getElementById("upma").checked == true) {
		 upma = document.getElementById("s8").value;
		}
		if(document.getElementById("paratha").checked == true) {
		 paratha = document.getElementById("s9").value;
		}
		if(document.getElementById("pongal").checked == true) {
		 pongal = document.getElementById("s10").value;
		}
		if(document.getElementById("paniaram").checked == true) {
		 paniaram = document.getElementById("s11").value;
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
		if(document.getElementById("nuts").checked == true) {
		  nuts = document.getElementById("s15").value;
		}
		sum1=(90*idly)+(170*dosa)+(180*mdosa)+(116*rdosa)+(200*poori)+(97*vada)+(180*pooha)+(192*upma)+(177*paratha)+(250*pongal)+(150*paniaram)+(50*milk)+(75*tea)+(120*coffee)+(85*nuts);
		tsum1=sum1;
		
		}
		
		function lcalc() { 
		var sum2=rice=chapati=chicken=mutton=egg=roti=biriyani=fish=lparatha=veg=paneer=curd=ltea=lcoffee=sweets=0;
		if(document.getElementById("rice").checked == true) {
		 var rice = document.getElementById("s16").value;
		}
		if(document.getElementById("chapati").checked == true) {
		  var chapati = document.getElementById("s17").value;
		}
		if(document.getElementById("chicken").checked == true) {
		  var chicken = document.getElementById("s18").value;
		}
		if(document.getElementById("mutton").checked == true) {
		  var mutton = document.getElementById("s19").value;
		}
		if(document.getElementById("egg").checked == true) {
		  var egg = document.getElementById("s20").value;
		}
		if(document.getElementById("roti").checked == true) {
		  var roti = document.getElementById("s21").value;
		}
		if(document.getElementById("biriyani").checked == true) {
		 var biriyani = document.getElementById("s22").value;
		}
		if(document.getElementById("fish").checked == true) {
		 var fish = document.getElementById("s23").value;
		}
		if(document.getElementById("lparatha").checked == true) {
		 var lparatha = document.getElementById("s24").value;
		}
		if(document.getElementById("veg").checked == true) {
		 var veg = document.getElementById("s25").value;
		}
		if(document.getElementById("paneer").checked == true) {
		 var paneer = document.getElementById("s26").value;
		}
		if(document.getElementById("curd").checked == true) {
		 var curd = document.getElementById("s27").value;
		}
		if(document.getElementById("ltea").checked == true) {
		 var ltea = document.getElementById("s28").value;
		}
		if(document.getElementById("lcoffee").checked == true) {
		 var lcoffee = document.getElementById("s29").value;
		}
		if(document.getElementById("sweets").checked == true) {
		  var sweets = document.getElementById("s30").value;
		}
	     sum2=(200*rice)+(140*chapati)+(330*chicken)+(500*mutton)+(400*egg)+(100*roti)+(448*biriyani)+(200*fish)+(177*lparatha)+(80*veg)+(100*paneer)+(98*curd)+(75*ltea)+(120*lcoffee)+(600*sweets);
		tsum2=sum2;
		
		
}

 function dcalc() {
	var sum3=idly2=dosa2=mdosa2=rdosa2=poori2=vada2=pooha2=upma2=paratha2=pongal2=milk2=tea2=coffee2=nuts2=rice2=chapati2=roti2=veg2=paneer2=sweets2=0;
		if(document.getElementById("idly2").checked == true) {
		 idly2 = document.getElementById("s31").value;
		}
		if(document.getElementById("dosa2").checked == true) {
		 dosa2 = document.getElementById("s32").value;
		}
		if(document.getElementById("mdosa2").checked == true) {
		 mdosa2 = document.getElementById("s36").value;
		}
		if(document.getElementById("rdosa2").checked == true) {
		 rdosa2 = document.getElementById("s37").value;
		}
		if(document.getElementById("poori2").checked == true) {
		 poori2 = document.getElementById("s38").value;
		}
		if(document.getElementById("vada2").checked == true) {
		 vada2 = document.getElementById("s33").value;
		}
		if(document.getElementById("pooha2").checked == true) {
		 pooha2 = document.getElementById("s34").value;
		}
		if(document.getElementById("upma2").checked == true) {
		 upma2 = document.getElementById("s45").value;
		}
		if(document.getElementById("paratha2").checked == true) {
		 paratha2 = document.getElementById("s39").value;
		}
		if(document.getElementById("pongal2").checked == true) {
		 pongal2 = document.getElementById("s40").value;
		}
		if(document.getElementById("rice2").checked == true) {
		 rice2 = document.getElementById("s35").value;
		}
		if(document.getElementById("milk2").checked == true) {
		 milk2 = document.getElementById("s49").value;
		}
		if(document.getElementById("tea2").checked == true) {
		 tea2 = document.getElementById("s46").value;
		}
		if(document.getElementById("coffee2").checked == true) {
		 coffee2 = document.getElementById("s47").value;
		}
		if(document.getElementById("nuts2").checked == true) {
		  nuts2 = document.getElementById("s48").value;
		}
		if(document.getElementById("chapati2").checked == true) {
		  chapati2 = document.getElementById("s41").value;
		}
		if(document.getElementById("roti2").checked == true) {
		  roti2 = document.getElementById("s42").value;
		}
		if(document.getElementById("veg2").checked == true) {
		  veg2 = document.getElementById("s43").value;
		}
		if(document.getElementById("paneer2").checked == true) {
		  paneer2 = document.getElementById("s44").value;
		}
		if(document.getElementById("sweets2").checked == true) {
		  sweets2 = document.getElementById("s50").value;
		}
		sum3=(90*idly2)+(170*dosa2)+(180*mdosa2)+(116*rdosa2)+(200*poori2)+(97*vada2)+(180*pooha2)+(192*upma2)+(177*paratha2)+(250*pongal2)+(200*rice2)+(50*milk2)+(75*tea2)+(120*coffee2)+(85*nuts2)+(140*chapati2)+(100*roti2)+(80*veg2)+(100*paneer2)+(600*sweets2);
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