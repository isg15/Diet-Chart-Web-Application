<?php include("server.php")?>
<html>
<head>
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
			color:Cornsilk;
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
		
		.details {
			width:100%;
			margin-left:auto;
			margin-right:auto;
			border: 3px solid #05386B;
			padding:30px 30px 30px 30px;
			text-align:left;
			
		}
	
		table,td,th {
			width:45%;
			border: 3px solid #05386B;
			border-collapse:collapse;
			text-align:left;
			padding: 10px;
			margin-left:auto;
			margin-right:auto;
		}

.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  height:600px;
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
		
		.colz {
		  float: left;
		  width: 32%;
		  padding: 5px;
		  border: 5px solid #05386B;
		  margin: 5px;
			}

		/* Clearfix (clear floats) */
		.row::after {
			  content: "";
			  clear: both;
			  display: table;
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
	<h1 style="text-align:center;  text-decoration: underline;"> My Diet Chart </h1>

<?php



	if (!$db){ 
   echo "NO CONNECTION ";
  }
$row="";
$sql4 = "SELECT * from users WHERE user='$_SESSION[user]'";
$res4 = mysqli_query($db, $sql4); 
if($res4){
   
	while($row = mysqli_fetch_assoc($res4)){
	echo "<p style='font-size:30px; text-align:center; font-style:oblique; font-family:Times New Roman'>Your BMI is: "  . $row["bmi"] . "<br> According to the universal BMI chart you are currently <b><u>". $row["status"]. ".</u></b> <br></p>";
	//Data according to user BMI
	if($row["bmi"] <18.5){
		echo "
		<div class='scrollo'>
		<img src='https://shathayu.com/wp-content/uploads/2019/08/Untitled-1.jpg' style='width:80%; opacity:1.0;' height='500px; margin-left:10%; margin-right:10%;'>
		</div>

		<h1 style='text-align:center; font-style:underline;'> <u>What to eat to increase your BMI</u></h1><br> 
		<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Eating junk food may result in weight gain. However, it will not satisfy the nutrition your body needs. Even if the fat, sugar, and salt in junk food doesn’t result as extra weight, it can still harm your body. For a healthy weight gain, the following tips can help:</p>
<br><br>
<ol>
<div class='row'>
			<div class='col'>
				<img src='https://blog-images.pharmeasy.in/2020/12/23175034/shutterstock_300219740-1-810x540.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li> Add healthy calories </li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>You don’t need to drastically change your diet. You can increase calories by adding nut or seed toppings, cheese, and healthy side dishes. Try almonds, sunflower seeds, fruit, or whole-grain, wheat toast.
				</p>
			</div>
</div><br><br>
<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Go nutrient dense</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Instead of eating empty calories and junk food, eat foods that are rich in nutrients. Consider high-protein meats, which can help you to build muscle. Also, choose nutritious carbohydrates, such as brown rice and other whole grains. This helps ensure your body is receiving as much nourishment as possible, even if you’re dealing with a reduced appetite.
				</p>
			</div>
			<div class='col'>
				<img src='http://www.cronuspersonaltraining.com/blog2/wp-content/uploads/2020/06/Nutrient-Dense-Food.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://health.clevelandclinic.org/wp-content/uploads/sites/3/2014/06/healthySnacks-1249099963-770x533-1.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li> Snack away </li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Enjoy snacks that contain plenty of protein and healthy carbohydrates. Consider options like trail mix, protein bars or drinks, and crackers with hummus or peanut butter. Also, enjoy snacks that contain “good fats,” which are important for a healthy heart. Examples include nuts and avocados..
				</p>
			</div>
</div><br><Br>
<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Eat mini meals</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>If you’re struggling with a poor appetite, due to medical or emotional issues, eating large amounts of food may not seem appealing. Consider eating smaller meals throughout the day to increase your calorie intake.</p>
			</div>
			<div class='col'>
				<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvBP6UT_OrrR9KJ95JfJc-D2xIMXzT0uD-NcZNyFXeh4F46VExoxGaqRvfXQ2hAj0ckaI&usqp=CAU' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://a57.foxnews.com/static.foxbusiness.com/foxbusiness.com/content/uploads/2020/08/931/523/dumbell-iStock.jpg?ve=1&tl=1' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Bulk up</li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>While too much aerobic exercise will burn calories and work against your weight goal, strength training can help. This includes weightlifting or yoga. You gain weight by building muscle.
				</p>
			</div>
</div><br><Br>

<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Add Calories to Increase BMI</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Eating more calories than your body needs increases your weight, which, in turn, increases your BMI. While the equation for weight loss is fairly straightforward, factors outside your control -- like your genetics -- make it a little more difficult to estimate your needs for weight gain.
				</p>
			</div>
			<div class='col'>
				<img src='https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/articles/health_tools/safe_ways_to_gain_weight_slideshow/493ss_thinkstock_rf_six_panel_healthy_meals.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://www.elitetrack.com/wp-content/uploads/2014/08/strength-training-getting-started.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li> Add Muscle Weight</li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>While some of the weight you'll gain when you're boosting your BMI will come from fat, make sure some of the gain comes from muscle to increase your sense of well-being. Carrying too much body fat actually puts you at the same risk for obesity-related illness as being overweight, even if you're at a healthy BMI. Regular strength-training is necessary to promote muscle gains. A good muscle-building program includes one exercise for each major muscle group, abs, chest, legs, shoulders, arms and back, performed two to three times, with each set containing four to eight repetitions.
				</p>
			</div>
</div><br><Br>
<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Resistance Exercise</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Increasing the amount of resistance training, such as weightlifting, you perform will help you increase your BMI and gain lean muscle instead of just body fat. The 2008 Physical Activity Guidelines for Americans encourage doing muscle-strengthening exercises that involve all major muscle groups at least two times per week. Exercise different muscle groups during each workout. For example, you could work your legs and abdominal muscles on Monday, exercise your back and shoulder muscles on Tuesday, rest on Wednesday, exercise your chest and arm muscles on Thursday and work your legs and abdominal muscles again on Friday. Once all your major muscle groups start to increase in size, you should start to gain weight.
				</p>
			</div>
			<div class='col'>
				<img src='https://images.emedicinehealth.com/images/article/main_image/resistance-exercise.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://i1.wp.com/www.eatthis.com/wp-content/uploads/2019/11/doctor-woman-nutritionist-diet-losing-weight.jpg?fit=1200%2C800&ssl=1' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Concerns</li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Before beginning a weight gain program, talk to your doctor. Being underweight may be due to an underlying health problem. It won’t be corrected by diet changes. According to the American Academy of Family Physicians, some causes of low body weight include thyroid disorders, cancer, other illnesses, certain medications, stress, depression and eating disorders. Depending on the cause of your low BMI, you may require medical treatment or counseling to help get it up into a normal, healthy range. Your doctor will be able to help you track your progress. He or she will make sure that healthy changes are taking place.
				</p>
			</div>
</div><br><Br><br><br></ol>
<hr style='height:5px; color:#05386B; background-color:#05386B'>
";}





	if(($row["bmi"] >= 18.5) && ($row["bmi"]<= 24.9)){
		echo "
		<div class='scrollo'>
		<img src='https://cdn5.vectorstock.com/i/1000x1000/67/24/normal-weight-human-feet-on-scales-isolated-on-vector-21006724.jpg' style='width:60%; opacity:1.0;' height='600px; margin-left:20%; margin-right:20%;'>
		</div>
		<br><br><br>
		<h1 style='text-align:center; font-style:underline;'> <u> What to eat to maintain your BMI</u></h1><br><br>
<h2 style='text-align:center; font-style:underline;'> Stick to a healthy routine</h2>
<p style='font-size:25px; font-style:oblique; font-family:Times New Roman; text-align:center;'>
A healthy eating plan gives your body the nutrients it needs every day while staying within your daily calorie goal for weight loss. A healthy eating plan also will lower your risk for heart disease and other health conditions.
</p>
<br><br><br>

<div class='row'>
			<div class='col'>
				<img src='https://blog-images.pharmeasy.in/2020/12/23175034/shutterstock_300219740-1-810x540.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>A healthy eating plan</li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Emphasizes vegetables, fruits, whole grains, and fat-free or low-fat dairy products.
				<br>Includes lean meats, poultry, fish, beans, eggs, and nuts.
				<br>Limits saturated and trans fats, sodium, and added sugars.
				<br>Controls portion sizes.
				</p>
			</div>
</div><br><br>
<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Calcium-rich foods</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>In addition to fat-free and low-fat milk, consider low-fat and fat-free yogurts without added sugars. These come in a variety of flavors and can be a great dessert substitute.
				</p>
			</div>
			<div class='col'>
				<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_4ACOZLd5S9697ftcDs8Zzs-DpySZHe68yq2AzBOJBDxapyklca4RXbXc0cREkZNRaG8&usqp=CAU' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://i.ndtvimg.com/i/2017-09/meat_650x400_71505822587.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li> Meat </li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>If your favorite recipe calls for frying fish or breaded chicken, try healthier variations by baking or grilling. Maybe even try dry beans in place of meats. Ask friends and search the internet and magazines for recipes with fewer calories ― you might be surprised to find you have a new favorite dish!
				</p>
			</div>
</div><br><br>
<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Comfort Foods</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>IHealthy eating is all about balance. You can enjoy your favorite foods, even if they are high in calories, fat or added sugars. The key is eating them only once in a while and balancing them with healthier foods and more physical activity.
					<br>
					Some general tips for comfort foods:
					<br><ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
					<li>Eat them less often. If you normally eat these foods every day, cut back to once a week or once a month.</li>
					<li>Eat smaller amounts. If your favorite higher-calorie food is a chocolate bar, have a smaller size or only half a bar.</li>
					<li>Try a lower-calorie version. Use lower-calorie ingredients or prepare food differently. For example, if your macaroni and cheese recipe includes whole milk, butter, and full-fat cheese, try remaking it with non-fat milk, less butter, low-fat cheese, fresh spinach and tomatoes. </li>
					<li>Just remember to not increase your portion size.</li></ul>
				</p>
			</div>
			<div class='col'>
				<br><br>
				<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxg-mdZFlJEPuMiw7oe5BEPzZUImEthVFJSQ&usqp=CAU' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://www.elitetrack.com/wp-content/uploads/2014/08/strength-training-getting-started.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li> Calories</li></h2>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>To lose weight, most people need to reduce the number of calories they get from food and beverages (energy IN) and increase their physical activity (energy OUT).
					<br>
					For a weight loss of 1–1 ½ pounds per week, daily intake should be reduced by 500 to 750 calories. 
				</p>
			</div>
</div><br><Br>
<h2> Note: </h2>
	<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>In general:<br>
	<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
			<li>Eating plans that contain 1,200–1,500 calories each day will help most women lose weight safely.</li>
			<li>Eating plans that contain 1,500–1,800 calories each day are suitable for men and for women who weigh more or who exercise regularly.</li>
			<li>Very low calorie diets of fewer than 800 calories per day should not be used unless you are being monitored by your doctor.	</li>
	</ul></p><br><br><br>
<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Energy Balance</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Energy balance is important for maintaining a healthy weight. The amount of energy or calories you get from food and drinks (energy IN) is balanced with the energy your body uses for things like breathing, digesting, and being physically active (energy OUT):<br>
				<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
					<li>The same amount of energy IN and energy OUT over time = weight stays the same,</li>
					<li>More energy IN than OUT over time = weight gain,</li>
					<li>More energy OUT than IN over time = weight loss.</li><br>
				</ul>
				</p>
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
				To maintain a healthy weight, your energy IN and OUT don’t have to balance exactly every day. It’s the balance over time that helps you maintain a healthy weight.
				<br>
				</p>
			</div>
			<div class='col'>
				<img src='https://images.emedicinehealth.com/images/article/main_image/resistance-exercise.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
</div>

<br><br><br>
<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
You can reach and maintain a healthy weight if you:
Follow a healthy diet, reduce your daily intake by 500 calories for weight loss, be physically active and limit the time you spend being physically inactive	</p>
<br><br><br><br>
<hr style='height:5px; color:#05386B; background-color:#05386B'>";}





	if($row["bmi"]>=25.0){
		echo "
		<div class='scrollo'>
		<img src='https://media.gettyimages.com/photos/broken-scales-picture-id111035045?k=6&m=111035045&s=612x612&w=0&h=44NfS5VSWZC5QxJUSJgThOOxEr-4BZULH3kt4Em0YNQ=' style='width:80%; opacity:1.0;' height='500px; margin-left:10%; margin-right:10%;'>
		</div>
		<br><br><br>
		<h1 style='text-align:center; font-style:underline;'> <u>  What to eat to lower your BMI</u></h1>
		<br><br>
		<ol>
		<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Be Calorie Conscious</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Reducing how many calories you eat will assist in your weight loss, as the calories in foods people eat can quickly add up. Entering a calorie deficit, where you eat fewer calories than you burn in a day will prevent you consuming excess fat that serves to increase your BMI.
					<br>Starting to cook for yourself more can help you monitor your food portions and subsequent calorie intake.
					<br>Check food labels to be sure you are eating the smallest amount of saturated fat possible, and so you can avoid the fats that come from fried and baked foods.
				</p>
			</div>
			<div class='col'>
				<img src='https://b.zmtcdn.com/data/pictures/0/19549300/1e43417115ca46a55bfca079878de98f.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			</div><br><br>
			<div class='row'>
						<div class='col'>
							<img src='nutr.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
						</div>
						<div class='col1'>
							<h2 style='text-decoration: underline;'><li>Fruit and vegetables</li></h2>
							<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Adding five servings of fruit and vegetables a day can add nutrition to your diet, which will also serve to fill you up.
							<br>Vegetables, especially, are packed with the nutrition our bodies need to feel satisfied and they’re generally low in calories.
							<br>Using dressings, herbs and spices can make vegetables more appealing if they do not normally make your shopping list on a regular basis.
							</p>
						</div>
		</div><br><Br>
 <div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Whole grain replacements</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>High sugar foods such as sweetened cereal, chocolate and pastries should be avoided, as well as sugary soda drinks.
				<br>Replace starchy version of foods such as bread, flour and rice with whole grain foods. Whole grain foods are less heavily processed than their white counterparts and contain significantly more fibre and natural nutrition.
				</p>
			</div>
			<div class='col'>
				<img src='http://unifylogisticsolutions.com/wp-content/uploads/2021/06/HS-Website-Seeds-Grains-Paste-Beans.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
		</div><br><br>
		<div class='row'>
						<div class='col'>
							<img src='data:image/jpeg;base64,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' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
						</div>
						<div class='col1'>
							<h2 style='text-decoration: underline;'><li>Attack snacks</li></h2>
							<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>It can be quite tempting to buy snacks when shopping, but snacks such as crisps and chocolate can contain excess calories. Buy some chewing gum to replace these snacks when hunger strikes, while drinking a large glass of water can also fight off hunger pangs.
							</p>
						</div>
		</div><br><Br>
	<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Change your diet</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Ditch highly processed foods
				<br>Processed food should be avoided as part of your diet, with a generally reliable rule being the more processed a choice of food is, the worse it is for your health. 
				</p>
			</div>
			<div class='col'>
				<img src='https://image.shutterstock.com/image-photo/motivation-inspirational-quote-eat-better-260nw-612462122.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
		</div><br><br>
		<div class='row'>
						<div class='col'>
							<img src='https://health.clevelandclinic.org/wp-content/uploads/sites/3/2014/06/healthySnacks-1249099963-770x533-1.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
						</div>
						<div class='col1'>
							<h2 style='text-decoration: underline;'><li>Increase your Fibre intake</li></h2>
							<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Increasing your fibre intake will not only give you more energy, but it will also help you regulate your body’s systems.
							Your BMR (Basal Metabolic Rate), which is the number of calories required to keep your body functioning at rest, will increase following enhanced fibre. This can also speed up your weight loss in the process.
							Whole grain ingredients and products will also assist you in your fibre increase, while whole wheat flour and oatmeal are other good fibre sources.
							</p>
						</div>
			</div><br><Br>

	<div class='row'>
			<div class='col1'>
				<h2 style='text-decoration: underline;'><li>Make use of protein</li></h2> 
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Protein has a number of distinct benefits because it provides fewer calories per gram than carbohydrate or fat and keeps you feeling full for long periods of time.
				If you need to be strict on calorie content, opt for lean meat such as chicken breast and cuts of red meat with the fat trimmed off.
				Eggs are a strong and versatile choice and beans are lentils are a great choice, particularly for people following vegetarian or vegan diets.
				</p>
				</div>
			<div class='col'>
				<img src='https://images.everydayhealth.com/images/diet-nutrition/all-about-protein-722x406.jpg?sfvrsn=66dc1fa5_0' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
		</div><br><br>
		<div class='row'>
						<div class='col'>
							<img src='https://static.cms.yp.ca/ecms/media/1/Lean-meats-1443977351-600x360.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
						</div>
						<div class='col1'>
							<h2 style='text-decoration: underline;'><li>Lean meat</li></h2>
							<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Eating lean meat can assist with weight loss as it contains significantly more protein and has less fat and carbohydrate content.
							Chicken generally tends to be very lea, with the white of the meat containing less fat than the meat found on the thighs or wings.</p>
						</div>
		</div><br><Br>
		</ol>	
			<br><br><br><br></ol>
	<hr style='height:5px; color:#05386B; background-color:#05386B'>";}
	
	
			echo "
		
		<div class='slideshow-container'>

		<div class='mySlides fade'>
		  <div class='numbertext'>1 / 3</div>
		  <img src='https://shreeherbalindia.com/wp-content/uploads/2019/09/Change-Your-Diet-to-Change-your-Lifestyles.png' style='width:100%; height:600px;'>
		</div>

		<div class='mySlides fade'>
		  <div class='numbertext'>2 / 3</div>
		  <img src='https://vaya.in/news/wp-content/uploads/2019/07/BMI.jpg' style='width:100%; height:600px;'>
		</div>

		<div class='mySlides fade'>
		  <div class='numbertext'>3 / 3</div>
		  <img src='https://www.heart.org/-/media/aha/recipe/article-images/family-eating2.jpg' style='width:100%; height:600px;' >
		</div>

	</div>
		<br>

		<div style='text-align:center'>
		  <span class='dot'></span> 
		  <span class='dot'></span> 
		  <span class='dot'></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName('mySlides');
		  var dots = document.getElementsByClassName('dot');
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = 'none';  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(' active', '');
		  }
		  slides[slideIndex-1].style.display = 'block';  
		  dots[slideIndex-1].className += ' active';
		  setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
		</script>

		<hr style='height:5px; color:#05386B; background-color:#05386B'>
";
		echo "<br><br>";
		//Data according to user age
		echo "
		<h1 style='text-align:center; font-style:underline;'><u>Few diet tips to follow for your age ($row[age] yrs)</u></h1><br><br>";	
			if(($row["age"]>=5) && ($row["age"]<=12)) {
			echo "<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
				<li>Eat 2 to 3 cups of fruits each day.</li><br><br>
				<li>Eat 1 to 4 cups of vegetables each day.</li><br><br>
				<li>Drink 2 to 3 cups of milk each day (typically fat-free or low-fat).</li><br><br>
				<li>Eat 2 to 7 ounces of low-fat or lean meat or chicken, or other food from the Meat and Beans food group, such as fish, beans, peas, eggs, etc.</li><br><br>
				</ul><br><br>";
		}
		if (($row["age"]>=13) && ($row["age"]<=19)) {
			echo "<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
					<li>Drink fat-free, low-fat milk, or water instead of sugary drinks.</li><br><br>
					<li>Eat at least five servings a day of fruits and veggies.</li><br><br>
					<li>Choose a variety of protein foods, like lean meat and poultry, seafood, beans, soy products, and nuts.</li><br><br>
					<li>Eat whole grains (like whole-wheat bread, brown rice, and oatmeal).</li><br><br>
					<li>Do not skip your breakfast. Studies show that people who eat breakfast do better in school, tend to eat less throughout the day, and are less likely to be overweight.</li><br><br>
					</ul><br><br>";
		}
		if (($row["age"]>=20)&& ($row["age"]<=59)) {
			echo "<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
			<li><b>Select a mix of colorful vegetables each day.</b><br> Choose dark, leafy greens—such as spinach, kale, collards, and mustard greens—and red and orange vegetables such as carrots, sweet potatoes, red peppers, and tomatoes. </li><br><br>
				 <li><b>Choose whole grains more often.</b><br> Try whole-grain breads and pastas, oatmeal, or brown rice.</li><br><br>
				 <li><b>Shift from solid fats to oils.</b><br> Try cooking with vegetable, olive, canola, or peanut oil instead of solid fats such as butter, stick margarine, shortening, lard, or coconut oil. Choose foods that naturally contain oils, such as seafood and nuts, instead of some meat and poultry. And use salad dressings and spreads that are made with oils rather than solid fats.</li><br><br>
				 <li><b>Switch from frying to baking or grilling.</b><br> Instead of fried chicken, try a salad topped with grilled chicken. Instead of ordering fries when eating out, ask for a side of steamed veggies.</li><br><br>
				 <li><b>Have healthy snacks on hand.</b><br> Whether you are at home, at work, or on the go, healthy snacks may help combat hunger and prevent overeating. Look for snacks that are low in added sugar and salt. Try whole foods—like baby carrots, fresh fruit, or low-fat or fat-free yogurt instead of chips, cakes, or cookies—rather than packaged or processed foods.</li><br><br>
				 <li><b>Limit food and beverages that are high in sugar and salt.</b><br> Avoid snack foods high in salt and added sugars; and keep away from sugary soft drinks.</li></ul><br><br>";
		}	
		if ($row["age"]>=60) {
			echo "<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
					<li><b> Consume more liquids</b><br>
					As you age, your sense of thirst lessens. We suggest you to drinking plenty of water throughout the day to stay hydrated even if you don't exactly feel thirsty. Fat-free milk and 100-percent juice are other options to consider besides water.</li><br><br>
					<li><b>Eat a variety of food</b><br>
					Consuming a variety of food will ensure you're getting all of the nutrients you need. A healthy meal should consist of lean protein, fruits and vegetables, whole grains and low-fat dairy.</li><br><br>
					<li><b>Minimize your use of table salt</b><br>
					As you age, your sense of taste declines. More often than not, you'll want to season your dishes with salt to increase the flavor.Consuming too much salt can lead to high blood pressure, which can ultimately lead to heart disease, stroke and kidney disease. Make sure you're consuming no more than 2,300 milligrams of sodium every day.</li><br><br>
					<li><b>Choose healthy fats</b>
					You shouldn't cut all fats from your diet. Instead, just eliminate the saturated and trans fats. Healthy monounsaturated and polyunsaturated fats can help protect your body against disease and support mood and mental well-being. Olive oil, avocado, nuts and fish high in omega-3 fatty acids are excellent choices.</li><br><br>
					
					</ul><br>";
		}
		
	
	echo "<br><br><hr style='height:5px; color:#05386B; background-color:#05386B'>
";

	if($row["conditions"] != "None"){
		echo "<h1 style='text-align:center; font-style:underline;'><u>Special diet tips according to your health conditions:</u><br></h1>";
		$arr = preg_split("/\,/",$row['conditions']);
		$i=0;$length=count($arr);
		for($i=0;$i<($length);$i++) {
			if($arr[$i] == "Diabetes") {
				echo "<br><br><p style='font-size:35px; text-align:center; font-style:oblique; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
						<div class='row'>
							<div class='col' style='width: 50%;'>
							<h2><b>Eat more</b></h2>
							<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
								<li>Healthy fats from nuts, olive oil, fish oils, flax seeds, or avocados.</li>
								<li>Fruits and vegetables—ideally fresh, the more colorful the better; whole fruit rather than juices.</li>
								<li>High-fiber cereals and breads made from whole grains.</li>
								<li>Fish and shellfish, organic chicken or turkey.</li>
								<li>High-quality protein such as eggs, beans, low-fat dairy, and unsweetened yogurt.</li>
							</ul>
							<br><br>
						<h2 ><b>Eat less</b></h2>
							<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
								<li>Packaged and fast foods, especially those high in sugar, baked goods, sweets, chips, desserts.</li>
								<li>White bread, sugary cereals, refined pastas or rice.</li>
								<li>Processed meat and red meat.</li>
								<li>Low-fat products that have replaced fat with added sugar, such as fat-free yogurt.</li>
							</ul>
						</p>
							</div>
						<div class='col1' style='width: 45%;'>
						<br><br><br>
							<img src='diabetes.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
						</div>
						</div>
						<br><br><Br>
						<h2 ><b>Choose high-fiber, slow-release carbs</b></h2>
							<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
							Carbohydrates have a big impact on your blood sugar levels—more so than fats and proteins—so you need to be smart about what types of carbs you eat. Limit refined carbohydrates like white bread, pasta, and rice, as well as soda, candy, packaged meals, and snack foods. Focus on high-fiber complex carbohydrates—also known as slow-release carbs. They are digested more slowly, thus preventing your body from producing too much insulin.<br>
							</p>
						<br><br><br>
						<h2 ><b> Be smart about sweets </b></h2>
							<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
							Eating a diabetic diet doesn’t mean eliminating sugar altogether, but like most of us, chances are you consume more sugar than is healthy. If you have diabetes, you can still enjoy a small serving of your favorite dessert now and then. The key is moderation.<br>
							</p>
						<br><br>
						<div class='row'>
							  <div class='colz'>
								<img src='https://www.boldsky.com/img/2017/12/coverimage-08-1512725939.jpg' alt='Snow' style='width:100%;' height='300px;'>
							  </div>
							  <div class='colz'>
								<img src='https://www.homage.sg/wp-content/uploads/2021/02/bigstock-Word-Diabetes-And-Diabetic-Acc-361734181.jpg' alt='Forest' style='width:100%;' height='300px;'>
							  </div>
							  <div class='colz'>
								<img src='https://www.cdc.gov/diabetes/images/managing/Diabetes-Manage-Eat-Well-Plate-Graphic_600px.jpg' alt='Mountains' style='width:100%;' height='300px;'>
							  </div>
						</div><br>
						<hr style='height:5px; color:#05386B; background-color:#05386B'>
						";
						}
						
			if($arr[$i] == "High LDL Cholesterol") {
				echo "<br><br>
					<p style='font-size:35px; text-align:center; font-style:oblique; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
							<ul>
							<h2>Eat Foods Rich in Soluble Fiber</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Soluble fiber is found in large quantities in beans, legumes, whole grains, flax, apples and citrus.</p>
								<br><br>
								
							<h2>Enjoy Lots of Fruits and Vegetables</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Eating fruits and vegetables is an easy way to lower LDL cholesterol levels.<br>
								Studies show that people who consume at least four servings of fruits and vegetables each day have roughly 6% lower LDL cholesterol levels than people who eat fewer than two servings per day.</p>
								<br>
							
							<div class='row'>
									<div class='col' style='width: 45%;' height='500px;'>
										<br>
										<img src='https://www.lark.com/wp-content/uploads/2020/11/shutterstock_510654247-1024x640.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
									</div>
									
									<div class='col' style='width: 50%;'>							
										<h2>Cook with Herbs and Spices</h2>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Herbs and spices are nutritional powerhouses packed with vitamins, minerals and antioxidants.
											<br>Human studies have shown that garlic, turmeric and ginger are especially effective at lowering cholesterol when eaten regularly.
											<br>In fact, eating just one garlic clove per day for three months is enough to lower total cholesterol by 9%.</p>
									
										<br><br>
								<h2>Avoid Artificial Trans Fats</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Substantive research shows that eating artificial trans fats increases “bad” LDL cholesterol and lowers “good” HDL cholesterol. </p>
								<br><br>
							</div>
							<h2>Eat a Variety of Unsaturated Fats</h2>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Research shows that replacing most of your saturated fats with unsaturated fats can reduce total cholesterol by 9% and “bad” LDL cholesterol by 11% in just eight weeks.
											<br>Longer-term studies have also found that people who eat more unsaturated fats and fewer saturated fats tend to have lower cholesterol levels over time.
											<br>Foods like avocados, olives, fatty fish and nuts contain ample unsaturated fats, so it’s beneficial to eat them regularly.</p>
											<br><br>	
											
							<h2>Eat Fewer Added Sugars</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>It’s not just saturated and trans fats that can raise cholesterol levels. Eating too many added sugars can do the same thing.</p>
								<br><br>
							<div class='row'>
								<div class='col' style='width: 50%;'>		
									<h2>Eat More Soy</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Eating soy every day for at least one month can increase good HDL cholesterol by 1.4 mg/dL and reduce bad LDL cholesterol by about 4 mg/dL.
									<br>Less processed forms of soy, such as soybeans or soy milk, are likely more effective at lowering cholesterol than processed soy protein extracts or supplements.</p>
									<br><br>
									
									<li><h2>Drink Green Tea</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>A review of 14 studies found that consuming green tea daily for at least two weeks lowers total cholesterol by about 7 mg/dL and bad LDL cholesterol by roughly 2 mg/dL.</p>
									</li>
								</div>
								<div class='col' style='width: 45%;' height='500px;'>
										<br><br><br>
										<img src='https://www.heart.org/-/media/images/health-topics/video-thumbnails/cholesterol-how-to-manage-video.jpg?h=720&w=1280&hash=CFAC5B85F36E5984D254D68D3392C0AC0F81D12D' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
								</div>
							</div>
							
							<br><br><br><Br>
								<hr style='height:5px; color:#05386B; background-color:#05386B'>
								";
			}
			if($arr[$i] == "High Blood Pressure") {
				echo "<br>
					<p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Eating a diet that is rich in whole grains, fruits, vegetables and low-fat dairy products and skimps on saturated fat and cholesterol can lower your blood pressure by up to 11 mm Hg.
								<br><br>This eating plan is known as the Dietary Approaches to Stop Hypertension (DASH) diet.<br><br>
								
								<div class='row'>
									<div class='col' style='width: 45%;'>
										<br><br><br>
										<img src='https://www.lark.com/wp-content/uploads/2020/01/Blog_thumb-94.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
									</div>
									
									<div class='col' style='width: 50%;'>
										<br><br><Br><Br>
										<h2><b>Consider boosting potassium.</b></h2>
										<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Potassium can lessen the effects of sodium on blood pressure. The best source of potassium is food, such as fruits and vegetables, rather than supplements.</p> 
										<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
										<li>Berries</li>
										<li>Pistachios</li>
										<li>Celery</li>
										<li>Tomatoes and tomato products</li>
										<li>Broccoli</li>
										<li>Herbs and spices</li>
										</ul>
										<br>
									</div>
								</div>
								<br><Br>
										<h2><b>Reduce sodium in your diet</b></h2>
										<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Even a small reduction in the sodium in your diet can improve your heart health and reduce blood pressure by about 5 to 6 mm Hg if you have high blood pressure.
										Potassium, magnesium, and fiber, on the other hand, may help control blood pressure. Fruits and vegetables are high in potassium, magnesium, and fiber, and they’re low in sodium. Stick to whole fruits and veggies. Juice is less helpful, because the fiber is removed. Also, nuts, seeds, legumes, lean meats, and poultry are good sources of magnesium.
										<br>To increase the amounts of natural potassium, magnesium, and fiber you take in, select from the following:</p>
										<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
										<li>Citrus fruits</li>
										<li>Salmon and other fatty fish</li>
										<li>Swiss chard</li>
										<li>Pumpkin seeds</li>
										<li>Beans and lentils</li>
										<li>Berries</li>
										<li>Pistachios</li>
										<li>Celery</li>
										<li>Tomatoes and tomato products</li>
										<li>Broccoli</li>
										<li>Herbs and spices</li>
										<li>Chia and flax seeds</li>
										<li>Spinach</li>
										<li>Yogurt (fat-free) </li>
								</ul>
								<div class='scrollo'>
									<img src='https://www.careinsurance.com/upload_master/media/posts/December2019/BuWF2hGzN51nalajh3Zw.jpg' style='width:80%; opacity:1.0; height:500px; margin-left:10%; margin-right:10%; padding: 5px;  border: 5px solid #05386B; margin: 5px;'>
								</div>
								<br><br><br><Br>
								<hr style='height:5px; color:#05386B; background-color:#05386B'>
								";
			}
			if($arr[$i] == "Low Blood Pressure") {
				echo "<br><br>
						<p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
								<ul><br><br>
								<h2><li><b>Drink Plenty of Fluids</b></h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>When you are dehydrated, your blood volume is reduced, which causes your blood pressure to decrease. Most doctors recommend drinking at least two litres (roughly eight glasses) of water every day. Your water intake should be higher in hot weather or while exercising.</p></li>
								<br><br>
								<div class='row'>
									<div class='col' style='width: 45%;'>
										<br><br>
										<img src='https://www.lark.com/wp-content/uploads/2020/01/Blog_thumb-94.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
									</div>
									<div class='col' style='width: 50%;'>
										<h2><li><b>Eat Salty Foods</b></h2>
										<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Foods with high salt content can elevate your blood pressure. Good sources of salt include olives, cottage cheese, and canned soup or tuna. You can also add table salt or sea salt to your meals, depending on your preference.</p></li>
										<br><br>
										
										<h2><li><b>Boost Your B12 Intake</b></h2>
										<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Vitamin B12 performs a critical role in helping the body produce healthy red blood cells. Lack of this important vitamin can result in decreased blood pressure levels. Foods that are rich in vitamin B12 include eggs, chicken, fish like salmon and tuna, and low-fat dairy products.</p></li>
									</div>
								</div>
										<h2><li><b>Fill Up On Folate</b></h2>
										<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Folate (also known as Vitamin B9) is another essential vitamin found in foods such as asparagus, broccoli, liver, and legumes such as lentils and chickpeas. A folate deficiency can have many of the same symptoms as a Vitamin B12 deficiency, leading to lowered blood pressure.</p></li>
										<bR><br>
									
								<h2><li><b>Cut Back On Carbs</b></h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Foods that are high in carbohydrates, particularly processed carbs, tend to digest very quickly relative to other foods. This can lead to sudden drops in blood pressure. A low-carb diet has been shown in some studies to help with off-setting hypotension.</p></li>
								<br><br>
								
								<h2><li><b>Reduce Meal Size</b></h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>When you eat a large meal, it takes your body a lot more energy to digest it, which can send your blood pressure plunging. This is particularly a problem for breakfast-skippers and intermittent fasters – skipping meals can frequently lead to over-eating later to compensate. Even if you are not reducing the overall amount that you’re eating, having smaller meals throughout the day is healthier for both your digestion and blood flow.</p></li></ul><br>
								
								<div class='scrollo' >
									<img src='https://www.careinsurance.com/upload_master/media/posts/December2019/BuWF2hGzN51nalajh3Zw.jpg' style='width:80%; opacity:1.0; height:500px; margin-left:10%; margin-right:10%; padding: 5px;  border: 5px solid #05386B; margin: 5px;'>
								</div>
								<br><br><br>
						<hr style='height:5px; color:#05386B; background-color:#05386B'>";
			}
			if($arr[$i] == "Anaemia") {
				echo "<p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
					
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Add these foods to your diet to get more iron and help fight iron deficiency anaemia:</p><br><br>
								<h2>Leafy greens</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Leafy greens, especially dark ones like spinach, are among the best sources of nonheme iron.
								<br><br>
								<div class='row'>
									  <div class='colz' style='width:48%;'>
										<img src='https://blog-images.pharmeasy.in/2021/01/04140120/shutterstock_390988804-1-810x540.jpg' alt='Snow' style='width:100%;' height='300px;'>
									  </div>
									  <div class='colz' style='width:48%; float:right'>
										<img src='https://c.ndtvimg.com/2018-11/bec671rg_iron_625x300_26_November_18.jpg' alt='Forest' style='width:100%;' height='300px;'>
									  </div>
									 </div>
								<h2>Meat and poultry</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>All meat and poultry contain heme iron. Red meat and lamb are the best sources. Poultry and chicken have lower amounts.
								<br>Eating meat or poultry with nonheme iron foods, such as leafy greens, along with a vitamin C-rich fruit can increase iron absorption.</p>
								<bR><br>
								
								<h2>Seafood</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Some seafood provides heme iron. Shellfish such as oysters, clams, scallops, crabs, and shrimp are good sources. Most fish contain iron.<br>
								</p>
								<div class='row'>
									<div class='col' style='width: 45%;'>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Fish with the best levels of iron include:</p>
											<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
											<li>canned or fresh tuna</li>
											<li>mackerel</li>
											<li>mahi mahi</li>
											<li>pompano</li>
											<li>fresh perch</li>
											<li>fresh or canned salmon</li></ul>
									<br><Br><br>
											<h2>Beans</h2>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Beans are good sources of iron for vegetarians and meat eaters alike. They’re also inexpensive and versatile.</p>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Some iron-rich options are:</p>
											<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
											<li>kidney beans</li>
											<li>chickpeas</li>
											<li>soybeans</li>
											<li>black-eyed peas</li>
											<li>pinto beans</li>
											<li>black beans</li>
											<li>peas</li>
											<li>lima beans</li></ul>
											<br><br><br>
									</div>
									<div class='col' style='width: 45%; float:right;'>
										
										<img src='https://universityhealthnews.com/media/anemia-causes.jpg' alt='Nutrition' width='80%;' style='padding: 5px; margin-left: 10%; margin-right:10%;  border: 5px solid #05386B;'>
										<br><Br><br>
										<img src='https://upload.wikimedia.org/wikipedia/commons/9/92/Trachurus_declivis.jpg' alt='Nutrition' width='80%;' style='padding: 5px; margin-left: 10%; margin-right:10%; border: 5px solid #05386B;'>
									</div>
								</div>
								<h2>Nuts and seeds</h2>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Many types of nuts and seeds are good sources of iron. They taste great on their own or sprinkled on salads or yogurt.
								<br>Some nuts and seeds that contain iron are:</p>
								<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
								<li>pumpkin seeds</li>
								<li>cashews</li>
								<li>pistachios</li>
								<li>hemp seeds</li>
								<li>pine nuts</li>
								<li>sunflower seeds</ul>
								<br>
								</div>
								
								<div class='scrollo' >
										<img src='https://www.tododisca.com/wp-content/uploads/2020/11/Iron-rich-foods.jpg' style='width:80%; opacity:1.0; height:500px; margin-left:10%; margin-right:10%; padding: 5px;  border: 5px solid #05386B; margin: 5px;'>
								</div>
									<br><br>
								<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>When following a diet plan for anaemia, remember these guidelines:</p>
									<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
									<li><b>Don’t eat iron-rich foods with foods or beverages that block iron absorption.</b> These include coffee or tea, eggs, foods high in oxalates, and foods high in calcium.</li>
									<li><b>Eat iron-rich foods with vitamin C-rich foods</b>, such as oranges, tomatoes, or strawberries, to improve absorption.</li>
									<li><b>Eat iron-rich foods with foods that contain beta carotene</b>, such as apricots, red peppers, and beets, to improve absorption.</li>
									<li><b>Eat a variety of heme and nonheme iron foods</b> throughout the day to up your iron intake.</li>
									<li><b>Eat heme and nonheme iron foods together</b> whenever possible to increase iron absorption.</li>
									<li><b>Add foods rich in folate and vitamin B-12</b> to support red blood cell production.</li></ul>
									
									
									<br><br><br>
									<hr style='height:5px; color:#05386B; background-color:#05386B'>
									";
			}
			if($arr[$i] == "Cardiovascular Disease") {
				echo "<br><br><p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
							<div class='row'>
									<div class='col' style='width: 45%;'>
										<br>
										<img src='https://www.irishtimes.com/polopoly_fs/1.4455586.1610381615!/image/image.jpg_gen/derivatives/ratio_1x1_w1200/image.jpg' alt='Nutrition' width='80%;' style='padding: 5px; margin-left: 10%; margin-right:10%;  border: 5px solid #05386B;'>
									</div>
									<div class='col' style='width: 50%; float:right;'>
												<h2>Follow a heart-healthy diet consisting of:</h2>
												<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
												<li>lots of fruits and vegetables</li>
												<li>lean meats</li>
												<li>nuts, beans, and legumes</li>
												<li>fish</li>
												<li>whole grains</li>
												<li>plant-based oils, such as olive oil</li>
												<li>low-fat dairy products</li>
												<li>eggs (you can eat up to six per week)</li></ul>
												<br><Br><br>
									</div>
							</div>
									
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>These are all low in saturated fats and empty calories. As a rule of thumb, make sure your plate is half full and contains a variety of vegetables at every meal.</p>
							<br><br>
							<div class='row'>
									<div class='col' style='width: 45%;'>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'><b>The following is a partial list of foods to limit or avoid:</b></p>
											<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
											<li>fast food</li>
											<li>fried food</li>
											<li>canned food </li>
											<li>processed frozen meals</li>
											<li>condiments such as mayonnaise, ketchup, and packaged dressing</li>
											<li>red meat </li>
											<li>hydrogenated vegetable oils (these contain trans fats) </li>
											</ul>
									</div>
									<div class='col' style='width: 50%; float:right;'>
											<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3GyGTwMfstglZtDp6Tf5dPo1aAaEhkPLauQ&usqp=CAU' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
									</div>
							</div>
									<br><Br><Br>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>For a happy heart, limit your intake of saturated fat and avoid trans-fat (found in hydrogenated oils) completely.</p>
									<br><br><br>
									<hr style='height:5px; color:#05386B; background-color:#05386B'>
									";
			}
			if($arr[$i] == "Indigestion") {
				echo "<br><br><p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
									<br><br>
									<h2><b>Try to include the following in your diet:</b></h2>
									<br>
									<h2>Vegetables</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Vegetables are naturally low in fat and sugar, and they help reduce stomach acid. Good options include green beans, broccoli, asparagus, cauliflower, leafy greens, potatoes, and cucumbers.</p>
									<bR>
									
									<h2>Ginger</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Ginger has natural anti-inflammatory properties, and it’s a natural treatment for heartburn and other gastrointestinal problems. You can add grated or sliced ginger root to recipes or smoothies or drink ginger tea to ease symptoms.</p>
									<br>
									
									<h2>Oatmeal</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Oatmeal is a breakfast favorite, a whole grain, and an excellent source of fiber. A diet high in fiber has been linked with a lower risk of acid reflux. Other fiber options include whole-grain breads and whole-grain rice.</p>
									<br>
									<div class='row'>
									  <div class='colz'>
										<img src='https://img.emedihealth.com/wp-content/uploads/2020/08/indigestion-causes-feat.jpg' alt='Snow' style='width:100%;' height='300px;'>
									  </div>
									  <div class='colz'>
										<img src='https://cdn.xxl.thumbs.canstockphoto.com/indigestion-background-concept-glowing-background-concept-wordcloud-illustration-of-indigestion-stock-photos_csp29414934.jpg' alt='Forest' style='width:100%;' height='300px;'>
									  </div>
									  <div class='colz'>
										<img src='https://img.emedihealth.com/wp-content/uploads/2020/08/indigestion-lifestyle-changes.jpg'alt='Mountains' style='width:100%;' height='300px;'>
									  </div>
									</div>
									<h2>Non-citrus fruits</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Noncitrus fruits, including melons, bananas, apples, and pears, are less likely to trigger reflux symptoms than acidic fruits.</p>
									<br>
									
									<h2>Lean meats and seafood</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Lean meats, such as chicken, turkey, fish, and seafood, are low-fat and reduce symptoms of indigestion and acid reflux. Try them grilled, broiled, baked, or poached.</p>
									<br>
									
									<h2>Egg whites</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Egg whites are a good option. Stay away from egg yolks, though, which are high in fat and may trigger reflux symptoms.</p>
									<br>
									
									<h2>Healthy fats</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Sources of healthy fats include avocados, walnuts, flaxseed, olive oil, sesame oil, and sunflower oil. Reduce your intake of saturated fats and trans fats and replace them with these healthier unsaturated fats.</p>
									<br><br><br>
									<hr style='height:5px; color:#05386B; background-color:#05386B'>	
										";
												}
			if($arr[$i] == "Osteoporosis") {
				echo "<br><br><Br><p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
								  <p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'><b>Try to include the following in your diet:</b></p><br>
									<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
									<li>Dairy products such as low-fat and non-fat milk, yogurt and cheese.</li>
									<br>
									<li>Fish like sardines and salmon (with bones) and fatty varieties such as salmon, mackerel, tuna and sardines.</li>
									<br>
									<div class='row'>
										<div class='col1' style='width:50%;'>
											<img src='https://clf1.medpagetoday.net/media/images/80xxx/80637.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
											<p  style='font-size:25px; font-style:oblique; font-family:Times New Roman;'> Avoid Excess of:
												<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
													<li>Beans (Legumes)</li>
													<li>Meat and Other High Protein Foods</li>
													<li>Salty Foods</li>
													<li>Spinach and Other Foods with Oxalates</li>
													<li>Wheat Bran</li>
													<li>Caffeine</li></ul>
										</div>
										<div class='col1' style='width:40%; float:right'>
											Fruits and vegetables like :
												<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
													<li>collard greens,
													<li>turnip greens,
													<li>kale, 
													<li>okra,
													<li>chinese cabbage,
													<li>dandelion greens,
													<li>mustard greens,
													<li>broccoli,
													<li>spinach, 
													<li>beet greens,
													<li>tomato products,
													<li>artichokes,
													<li>plantains, bananas.
													<li>potatoes, sweet potatoes,
													<li>raisins,
													<li>papaya, pineapples
													<li>oranges, orange juice, 
													<li>prunes,
													<li>red peppers, green peppers,  
													<li>strawberries, 
													<li>brussels sprouts,  
												</ul><br><br><Br>
											</div>
										</div></ul>	
									<br><br><br>
									<hr style='height:5px; color:#05386B; background-color:#05386B'>
									";
			}
			if($arr[$i] == "Poor Eyesight") {
				echo "<br><br><Br>
						<p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
									<div class='scrollo' >
										<img src='https://images.indianexpress.com/2019/11/GettyImages-1126400394.jpg' style='width:80%; opacity:1.0; height:500px; margin-left:10%; margin-right:10%; padding: 5px;  border: 5px solid #05386B; margin: 5px;'>
									</div>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
									<b>Try to include the following in your diet:</b></p> 
									
									<h2>Fish</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Cold-water fish such as salmon, tuna, sardines and mackerel are rich in omega-3 fatty acids, which may help protect against dry eyes, macular degeneration and even cataracts. If you don’t eat seafood, you can get a good supply of omega-3s by using fish oil supplements or taking vegetarian supplements that contain black currant seed oil or flaxseed oil.</p>
									<br><br>
									
									<h2>Vitamin A Rich Food</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>For example: Carrots, Papaya, Mangoes and Peaches</p>
									<br><br>
									
									<h2>Leafy Greens</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Spinach, kale and collard greens, to name just a few, are packed full of lutein and zeaxanthin, important plant pigments that can help stem the development of macular degeneration and cataracts. Broccoli, peas and avocados are also good sources of this powerful antioxidant duo.</p>
									<br><br>
									
									<h2>Eggs</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>The vitamins and nutrients in eggs, including lutein and vitamin A (which may protect against night blindness and dry eyes), promote eye health and function.</p>
									<br><br>
									
									<h2>Whole Grains</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>A diet containing foods with a low glycemic index (GI) can help reduce your risk for age-related macular degeneration. Swap refined carbohydrates for quinoa, brown rice, whole oats and whole-wheat breads and pasta. The vitamin E, zinc and niacin found in whole grains also help promote overall eye health.</p>
									<br><Br>
									
									<h2>Citrus Fruits and Berries</h2>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Oranges, grapefruits, lemons and berries are high in vitamin C, which may reduce the risk of cataracts and macular degeneration.</p>
									<br><br>
									
									<h2>Nuts</h3>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Pistachios, walnuts, almonds are rich in omega-3 fatty acids and vitamin E that boost your eye health.</p>
									<br><br>
									
									<h2>Legumes</h3>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Kidney beans, black-eyed peas and lentils are good sources of bioflavonoids and zinc — and can help protect the retina and lower the risk for developing macular degeneration and cataracts.</p>
									<br><br>
									
									<h2>Fish Oil, Flaxseed Oil and Black Currant Seed Oil</h3>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>These super supplements contain omega-3 fatty acids and have many eye health benefits, including helping to prevent or control dry eye syndrome as well as reduce the risk of macular degeneration and cataracts.</p>
									<br><br>
									
									<h2>Sunflower Seeds</h3>
									<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Help keep your eyes healthy and disease-free by snacking on sunflowers seeds, which are excellent sources of vitamin E and zinc.</p><br>

									<br><br><br>
									<hr style='height:5px; color:#05386B; background-color:#05386B'>
									";
			}
			if($arr[$i] == "Asthma") {
				echo "<br><br><Br><p style='font-size:35px; font-style:oblique; text-align:center; font-family:Times New Roman'><u>As you have ".$arr[$i].",</u></p>
									<ul>
										<li><h2>Eat plenty of fruits and vegetables.</h2>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>They are a good source of antioxidants such as beta carotene and vitamins C and E, which may help reduce lung swelling and irritation (inflammation) caused by cell-damaging chemicals known as free radicals.</li>
											</p><br>
											
										<li><h2>Avoid allergy-triggering foods.</h2> 
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Allergic food reactions can cause asthma symptoms. In some people, exercising after eating an allergy-causing food leads to asthma symptoms.</li>
											</p><bR>
											
										<li><h2>Take in vitamin D.</h2>
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>People with more-severe asthma may have low vitamin D levels. Milk, eggs and fish such as salmon all contain vitamin D. Even spending a few minutes outdoors in the sun can increase vitamin D levels.</li>
											</p><br>
											
										<li><h2>Avoid sulfites.</h2> 
											<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>Sulfites can trigger asthma symptoms in some people. Used as a preservative, sulfites can be found in dried fruits, pickles, fresh and frozen shrimp, and some other foods.</li>
											</p><br>

									</ul>
									
									";
			}
		}
		
		}
			
			echo "<div class='scrollo' >
									<img src='https://blogs.cornell.edu/ccesuffolkfhw/files/2019/10/index-fall-activities-1531250605.jpg' style='width:90%; opacity:1.0; height:500px; margin-left:5%; margin-right:5%; padding: 5px;  border: 5px solid #05386B; margin: 5px;'>
				</div>
				<br><br><hr style='height:5px; color:#05386B; background-color:#05386B'>
			<br><br><br><br><br>";
	//Data according to user activity
	echo "<h1 style='text-align:center; font-style:underline;'><u> Best workout/activities for your body type.</u></h1>";
	echo "<br><br><p style='font-size:30px; text-align:center; font-style:oblique; font-family:Times New Roman'>According to your details you are ". $row["activity"]. ".</p>" ;

	if($row["activity"]=="Lightly Active"){
		echo "
		<br><br><h3 style='text-decoration: underline; text-align:center'>Lightly Active</h3>
<p style='font-size:25px; font-style:bold; font-family:Times New Roman'>If you’re lightly active, your daily activities include:</p>
<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
<li>Activities of daily living only, such as shopping, cleaning, watering plants, taking out the trash, walking the dog, mowing the lawn and gardening.</li><br><br>
<li>Daily exercise that is equal to walking for 30 minutes at 4mph.  For an adult of average weight, this amount of exercise will burn about 130-160 additional calories.</li><br><br>
<li>More intense exercise can be performed for less time to achieve the same goal.  For example, 15-20 minutes of vigorous activity, such as aerobics, skiing or jogging on a daily basis would put you in this category.</li><br><br>
<li>Spending a good part of the day on your feet (e.g. teacher, salesman)<br><br>
</ul>";}




	if($row["activity"]=="Not Very Active"){
		echo"
		<br><br><h3 style='text-decoration: underline;  text-align:center;'>Not Very Active</h3><br>
<p style='font-size:25px; font-style:bold; font-family:Times New Roman'>If you’re sedentary, your daily activities include:</p>
<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
<li>Activities of daily living only, such as shopping, cleaning, watering plants, taking out the trash, walking the dog, mowing the lawn and gardening.</li><br><br>
<li>No moderate of vigorous activities.</li><br><br>
<li>Unless you do at least 30 minutes per day of intentional exercise, you are considered sedentary.</li><br><br>
<li>Spending most of the day sitting (e.g. bank teller, desk job)</li><br><br>
<br></ul>The majority of people will be considered sedentary.
";}
	
	
	
	
	if($row["activity"]=="Active"){
		echo"
		<br><br><h3  style='text-decoration: underline; text-align:center;'>Active</h3>
<p style='font-size:25px; font-style:bold; font-family:Times New Roman'>If you’re active, your daily activities include:</p>
<ul style='font-size:20px; font-style:oblique; font-family:Times New Roman'>
<li>Activities of daily living only, such as shopping, cleaning, watering plants, taking out the trash, walking the dog, mowing the lawn and gardening.<br><br>
<li>Daily exercise that is equal to walking for 1 hour and 45 minutes at 4mph.  For an adult of average weight, this amount of exercise will burn about 470-580 additional calories.<br><br>
<li>More intense exercise can be performed for less time.  For example, jogging for 50 minutes per day.<br><br>
<li>Spending a good part of the day doing some physical activity (e.g. waitress, mailman)<br><br>
</ul>";}


	if($row["activity"]=="Very Active"){
		echo"
		<br><br><h3 style='text-decoration: underline; text-align:center;'>Very Active</h3>
<p style='font-size:25px; font-style:bold; font-family:Times New Roman'> If you’re very active, your daily activities include:</p>
<ul style='font-size:20px; font-style:oblique; font-family:Times New Roman'>
<li>Activities of daily living only, such as shopping, cleaning, watering plants, taking out the trash, walking the dog, mowing the lawn and gardening.</li><br><br>
<li>Daily exercise that is equal to walking for 4 hours and 15 minutes at 4mph.  For an adult of average weight, this amount of exercise will burn about 1,150-1400 additional calories.</li><br><br>
<li>More intense exercise can be performed for less time.  For example, jogging for 2 hours minutes per day.</li><br><br>
<li>Spending most of the day doing heavy physical activity (e.g. bike messenger, carpenter)<br><br>
</ul>";}
	}
}
	else {
		echo "Error: " . $res4 . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
</div>
</body>
</html>