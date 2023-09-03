<?php include("server.php")?>
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
		  height:500px;
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
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>While too much aerobic exercise will burn calories and work against your weight goal, strength training can help. This includes weightlifting. You gain weight by building muscle.
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
		echo "<h1 style='text-align:center; font-style:underline;'> <u> What to eat to maintain your BMI</u></h1><br><br>
<h2 style='text-align:center; font-style:underline;'> Stick to a healthy routine</h2>
<p style='font-size:25px; font-style:oblique; font-family:Times New Roman; text-align:center;'>
A healthy eating plan gives your body the nutrients it needs every day while staying within your daily calorie goal for weight loss. A healthy eating plan also will lower your risk for heart disease and other health conditions.
</p>
<br><br><br>
<ol>
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
				<img src='http://www.cronuspersonaltraining.com/blog2/wp-content/uploads/2020/06/Nutrient-Dense-Food.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://c.ndtvimg.com/2020-01/op8grfc_fish_625x300_11_January_20.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
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
				<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>Healthy eating is all about balance. You can enjoy your favorite foods, even if they are high in calories, fat or added sugars. The key is eating them only once in a while and balancing them with healthier foods and more physical activity.
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
				<img src='https://www.vegrecipesofindia.com/wp-content/uploads/2014/01/grilled-sandwich-1.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
</div><br><br>
<div class='row'>
			<div class='col'>
				<img src='https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/ways-to-cut-calories-1296x728-feature.jpg?w=1155&h=1528' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
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
</ol>
</div><br><br><br>
<p style='font-size:25px; font-style:oblique; font-family:Times New Roman'>
You can reach and maintain a healthy weight if you:
Follow a healthy diet, reduce your daily intake by 500 calories for weight loss, be physically active and limit the time you spend being physically inactive	</p>
<br><br><br><br></ol>
<hr style='height:5px; color:#05386B; background-color:#05386B'>";}





	if($row["bmi"]>=25.0){
		echo "<h1 style='text-align:center; font-style:underline;'> <u>  What to eat to lower your BMI</u></h1>
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
				<img src='data:image/jpeg;base64,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' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
			</div><br><br>
			<div class='row'>
						<div class='col'>
							<img src='data:image/jpeg;base64,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' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
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
				<img src='https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/foodnavigator-latam.com/news/regulation/brazil-s-whole-grain-headache-refined-fortified-flour-is-not-whole-grain-campaigners-tell-anvisa/9376829-1-eng-GB/Brazil-s-whole-grain-headache-Refined-fortified-flour-is-not-whole-grain-campaigners-tell-ANVISA_wrbm_large.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
		</div><br><br>
		<div class='row'>
						<div class='col'>
							<img src='https://www.kindpng.com/picc/m/194-1948236_transparent-snacks-clipart-say-no-to-junk-foods.png' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;height:375px;'>
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
				<img src='http://thinkdiet.com/wp-content/uploads/2014/03/no-processed-foods-allowed.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
		</div><br><br>
		<div class='row'>
						<div class='col'>
							<img src='https://stylesatlife.com/wp-content/uploads/2020/03/Best-Fiber-Rich-Foods-List-Available-In-India.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
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
				<img src='https://img.jakpost.net/c/2019/04/02/2019_04_02_69095_1554196119._large.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
			</div>
		</div><br><br>
		<div class='row'>
						<div class='col'>
							<img src='https://www.inlifehealthcare.com/wp-content/uploads/2015/02/fish.jpg' alt='Nutrition' width='100%;' style='padding: 5px; margin: 5px; border: 5px solid #05386B;'>
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
		  <img src='https://www.narayanahealth.org/blog/wp-content/uploads/2019/11/shutterstock_288277301.jpg' style='width:80%; opacity:1.0; height:500px;margin-left:10%;margin-right:10%;'>
		</div>

		<div class='mySlides fade'>
		  <div class='numbertext'>2 / 3</div>
		  <img src='https://www.narayanahealth.org/blog/wp-content/uploads/2020/07/Blog-9.jpg' style='width:80%; opacity:1.0; height:500px;margin-left:10%;margin-right:10%;'>
		</div>

		<div class='mySlides fade'>
		  <div class='numbertext'>3 / 3</div>
		  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8-gS0IQv_qxHL9_S70z07ImIM2_jOw4oJRvzV-LHp9IQgkN133zFlRceEBoote081zV4&usqp=CAU'; style='width:80%; opacity:1.0; height:500px;margin-left:10%;margin-right:10%;' >
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
				echo "<p style='font-size:35px; font-style:oblique; font-family:Times New Roman'>As you have ".$arr[$i].",</p>
						<h2 style='text-decoration: underline;'><b>Eat more</b></h2>
							<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
								<li>Healthy fats from nuts, olive oil, fish oils, flax seeds, or avocados.</li>
								<li>Fruits and vegetables—ideally fresh, the more colorful the better; whole fruit rather than juices.</li>
								<li>High-fiber cereals and breads made from whole grains.</li>
								<li>Fish and shellfish, organic chicken or turkey.</li>
								<li>High-quality protein such as eggs, beans, low-fat dairy, and unsweetened yogurt.</li>
							</ul>
							<br><br><Br>
						<h2 style='text-decoration: underline;'><b>Eat less</b></h2>
							<ul style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
								<li>Packaged and fast foods, especially those high in sugar, baked goods, sweets, chips, desserts.</li>
								<li>White bread, sugary cereals, refined pastas or rice.</li>
								<li>Processed meat and red meat.</li>
								<li>Low-fat products that have replaced fat with added sugar, such as fat-free yogurt.</li>
							</ul>
						</p>
						<br><br><Br>
						<h2 style='text-decoration: underline;'><b>Choose high-fiber, slow-release carbs</b></h2>
						<p style='font-size:25px; font-style:oblique; font-family:Times New Roman;'>
						Carbohydrates have a big impact on your blood sugar levels—more so than fats and proteins—so you need to be smart about what types of carbs you eat. Limit refined carbohydrates like white bread, pasta, and rice, as well as soda, candy, packaged meals, and snack foods. Focus on high-fiber complex carbohydrates—also known as slow-release carbs. They are digested more slowly, thus preventing your body from producing too much insulin.<br>
						<br><br><img src='diabetes.jpg' width=550px; height=500px;><br>
						<h3>Be smart about sweets</h3>
						Eating a diabetic diet doesn’t mean eliminating sugar altogether, but like most of us, chances are you consume more sugar than is healthy. If you have diabetes, you can still enjoy a small serving of your favorite dessert now and then. The key is moderation.<br>";
									}
			if($arr[$i] == "High LDL Cholesterol") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2><ul><li><b>Eat Foods Rich in Soluble Fiber</b>
						<p>Soluble fiber is found in large quantities in beans, legumes, whole grains, flax, apples and citrus.</p></li>
						<li><b>Enjoy Lots of Fruits and Vegetables</b>
							<p>Eating fruits and vegetables is an easy way to lower LDL cholesterol levels.</p>
							<p>Studies show that people who consume at least four servings of fruits and vegetables each day have roughly 6% lower LDL cholesterol levels than people who eat fewer than two servings per day.</p></li>
							<li><b>Cook with Herbs and Spices</b><p>Herbs and spices are nutritional powerhouses packed with vitamins, minerals and antioxidants.</p><p>Human studies have shown that garlic, turmeric and ginger are especially effective at lowering cholesterol when eaten regularly.</p><p>In fact, eating just one garlic clove per day for three months is enough to lower total cholesterol by 9%.</p></li>
							<li><b>Eat a Variety of Unsaturated Fats</b><p>Research shows that replacing most of your saturated fats with unsaturated fats can reduce total cholesterol by 9% and “bad” LDL cholesterol by 11% in just eight weeks.</p>
								<p>Longer-term studies have also found that people who eat more unsaturated fats and fewer saturated fats tend to have lower cholesterol levels over time.
								<p>Foods like avocados, olives, fatty fish and nuts contain ample unsaturated fats, so it’s beneficial to eat them regularly.</p></li>
							<li><b>Avoid Artificial Trans Fats</b><p>Substantive research shows that eating artificial trans fats increases “bad” LDL cholesterol and lowers “good” HDL cholesterol. </p></li>
							<li><b>Eat Fewer Added Sugars</b><p>It’s not just saturated and trans fats that can raise cholesterol levels. Eating too many added sugars can do the same thing.</p></li>
							<li><b>Eat More Soy</b><p>Eating soy every day for at least one month can increase good HDL cholesterol by 1.4 mg/dL and reduce bad LDL cholesterol by about 4 mg/dL.</p>
													<p>Less processed forms of soy, such as soybeans or soy milk, are likely more effective at lowering cholesterol than processed soy protein extracts or supplements.</p></li>
							<li><b>Drink Green Tea</b><p>A review of 14 studies found that consuming green tea daily for at least two weeks lowers total cholesterol by about 7 mg/dL and bad LDL cholesterol by roughly 2 mg/dL.</p></li></ul>";
			}
			if($arr[$i] == "High Blood Pressure") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
								<p>Eating a diet that is rich in whole grains, fruits, vegetables and low-fat dairy products and skimps on saturated fat and cholesterol can lower your blood pressure by up to 11 mm Hg.</p>
								<p>This eating plan is known as the Dietary Approaches to Stop Hypertension (DASH) diet.</p>
								<p><b>Consider boosting potassium.</b> Potassium can lessen the effects of sodium on blood pressure. The best source of potassium is food, such as fruits and vegetables, rather than supplements.</p> 
								<p><b>Reduce sodium in your diet</b></p>
								<p>Even a small reduction in the sodium in your diet can improve your heart health and reduce blood pressure by about 5 to 6 mm Hg if you have high blood pressure.</p>
								<p>Potassium, magnesium, and fiber, on the other hand, may help control blood pressure. Fruits and vegetables are high in potassium, magnesium, and fiber, and they’re low in sodium. Stick to whole fruits and veggies. Juice is less helpful, because the fiber is removed. Also, nuts, seeds, legumes, lean meats, and poultry are good sources of magnesium.</p>
								<p>To increase the amounts of natural potassium, magnesium, and fiber you take in, select from the following:</p><ul>

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
								<li>Yogurt (fat-free) </li></ul><br>
								";
			}
			if($arr[$i] == "Low Blood Pressure") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
								<ul><li><b>Drink Plenty of Fluids</b>
								<p>When you are dehydrated, your blood volume is reduced, which causes your blood pressure to decrease. Most doctors recommend drinking at least two litres (roughly eight glasses) of water every day. Your water intake should be higher in hot weather or while exercising.</p></li>
								<li><b>Eat Salty Foods</b>
								<p>Foods with high salt content can elevate your blood pressure. Good sources of salt include olives, cottage cheese, and canned soup or tuna. You can also add table salt or sea salt to your meals, depending on your preference.</p></li>

								<li><b>Boost Your B12 Intake</b>
								<p>Vitamin B12 performs a critical role in helping the body produce healthy red blood cells. Lack of this important vitamin can result in decreased blood pressure levels. Foods that are rich in vitamin B12 include eggs, chicken, fish like salmon and tuna, and low-fat dairy products.</p></li>
								<li><b>Fill Up On Folate</b>
								<p>Folate (also known as Vitamin B9) is another essential vitamin found in foods such as asparagus, broccoli, liver, and legumes such as lentils and chickpeas. A folate deficiency can have many of the same symptoms as a Vitamin B12 deficiency, leading to lowered blood pressure.</p></li>
								<li><b>Cut Back On Carbs</b>
								<p>Foods that are high in carbohydrates, particularly processed carbs, tend to digest very quickly relative to other foods. This can lead to sudden drops in blood pressure. A low-carb diet has been shown in some studies to help with off-setting hypotension.</p></li>
								<li><b>Reduce Meal Size</b>
								<p>When you eat a large meal, it takes your body a lot more energy to digest it, which can send your blood pressure plunging. This is particularly a problem for breakfast-skippers and intermittent fasters – skipping meals can frequently lead to over-eating later to compensate. Even if you are not reducing the overall amount that you’re eating, having smaller meals throughout the day is healthier for both your digestion and blood flow.</p></li></ul><br>
								";
			}
			if($arr[$i] == "Anaemia") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
								<p>Add these foods to your diet to get more iron and help fight iron deficiency anaemia:</p>
								<h3>Leafy greens</h3>
								<p>Leafy greens, especially dark ones like spinach, are among the best sources of nonheme iron.
								<h3>Meat and poultry</h3>
								<p>All meat and poultry contain heme iron. Red meat and lamb are the best sources. Poultry and chicken have lower amounts.</p>
								<p>Eating meat or poultry with nonheme iron foods, such as leafy greens, along with a vitamin C-rich fruit can increase iron absorption.</p>
								<h3>Seafood</h3>
								<p>Some seafood provides heme iron. Shellfish such as oysters, clams, scallops, crabs, and shrimp are good sources. Most fish contain iron.</p>
								<p>Fish with the best levels of iron include:</p>
								<ul><li>canned or fresh tuna</li>
								<li>mackerel</li>
								<li>mahi mahi</li>
								<li>pompano</li>
								<li>fresh perch</li>
								<li>fresh or canned salmon</li></ul>

								<h3>Beans</h3>
								<p>Beans are good sources of iron for vegetarians and meat eaters alike. They’re also inexpensive and versatile.</p>
								<p>Some iron-rich options are:</p>
								<ul><li>kidney beans</li>
								<li>chickpeas</li>
								<li>soybeans</li>
								<li>black-eyed peas</li>
								<li>pinto beans</li>
								<li>black beans</li>
								<li>peas</li>
								<li>lima beans</li></ul>
								<h3>Nuts and seeds</h3>
								<p>Many types of nuts and seeds are good sources of iron. They taste great on their own or sprinkled on salads or yogurt.</p>
								<p>Some nuts and seeds that contain iron are:</p>
								<ul><li>pumpkin seeds</li>
								<li>cashews</li>
								<li>pistachios</li>
								<li>hemp seeds</li>
								<li>pine nuts</li>
								<li>sunflower seeds</ul>



								<p>When following a diet plan for anaemia, remember these guidelines:</p>
									<ul><li><b>Don’t eat iron-rich foods with foods or beverages that block iron absorption.</b> These include coffee or tea, eggs, foods high in oxalates, and foods high in calcium.</li>
									<li><b>Eat iron-rich foods with vitamin C-rich foods</b>, such as oranges, tomatoes, or strawberries, to improve absorption.</li>
									<li><b>Eat iron-rich foods with foods that contain beta carotene</b>, such as apricots, red peppers, and beets, to improve absorption.</li>
									<li><b>Eat a variety of heme and nonheme iron foods</b> throughout the day to up your iron intake.</li>
									<li><b>Eat heme and nonheme iron foods together</b> whenever possible to increase iron absorption.</li>
									<li><b>Add foods rich in folate and vitamin B-12</b> to support red blood cell production.</li></ul>
									";
			}
			if($arr[$i] == "Cardiovascular Disease") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
									<p><b>Follow a heart-healthy diet consisting of:</b><p>
									<ul><li>lots of fruits and vegetables</li>
									<li>lean meats</li>
									<li>nuts, beans, and legumes</li>
									<li>fish</li>
									<li>whole grains</li>
									<li>plant-based oils, such as olive oil</li>
									<li>low-fat dairy products</li>
									<li>eggs (you can eat up to six per week)</li></ul>
									<p>These are all low in saturated fats and empty calories. As a rule of thumb, make sure your plate is half full and contains a variety of vegetables at every meal.</p>
									<p><b>The following is a partial list of foods to limit or avoid:</b></p>
									<ul><li>fast food</li>
									<li>fried food</li>
									<li>canned food </li>
									<li>processed frozen meals</li>
									<li>condiments such as mayonnaise, ketchup, and packaged dressing</li>
									<li>red meat </li>
									<li>hydrogenated vegetable oils (these contain trans fats) </li></ul>

									<p>For a happy heart, limit your intake of saturated fat and avoid trans-fat (found in hydrogenated oils) completely.</p>
									";
			}
			if($arr[$i] == "Indigestion") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
									<p><b>Try to include the following in your diet:</b></p>
									<h3><u>Vegetables</u></h3>
									<p>Vegetables are naturally low in fat and sugar, and they help reduce stomach acid. Good options include green beans, broccoli, asparagus, cauliflower, leafy greens, potatoes, and cucumbers.</p>
									 <h3><u>Ginger</u></h3>
									<p>Ginger has natural anti-inflammatory properties, and it’s a natural treatment for heartburn and other gastrointestinal problems. You can add grated or sliced ginger root to recipes or smoothies or drink ginger tea to ease symptoms.</p>
									 <h3><u>Oatmeal</u></h3>
									<p>Oatmeal is a breakfast favorite, a whole grain, and an excellent source of fiber. A diet high in fiber has been linked with a lower risk of acid reflux. Other fiber options include whole-grain breads and whole-grain rice.</p>
									 <h3><u>Noncitrus fruits</u></h3>
									<p>Noncitrus fruits, including melons, bananas, apples, and pears, are less likely to trigger reflux symptoms than acidic fruits.</p>
									 <h3><u>Lean meats and seafood</u></h3>
									<p>Lean meats, such as chicken, turkey, fish, and seafood, are low-fat and reduce symptoms of indigestion and acid reflux. Try them grilled, broiled, baked, or poached.</p>
									 <h3><u>Egg whites</u></h3>
									<p>Egg whites are a good option. Stay away from egg yolks, though, which are high in fat and may trigger reflux symptoms.</p>
									<h3><u>Healthy fats</u></h3>
									<p>Sources of healthy fats include avocados, walnuts, flaxseed, olive oil, sesame oil, and sunflower oil. Reduce your intake of saturated fats and trans fats and replace them with these healthier unsaturated fats.</p>
										";
												}
			if($arr[$i] == "Osteoporosis") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
								  <p><b>Try to include the following in your diet:</b></p>
									<ul>
									<li>Dairy products such as low-fat and non-fat milk, yogurt and cheese.</li>
									<li>Fish like sardines and salmon (with bones) and fatty varieties such as salmon, mackerel, tuna and sardines.</li>
									<li>Fruits and vegetables like collard greens, turnip greens, kale, okra, chinese cabbage, dandelion greens, mustard greens,
									broccoli,spinach, beet greens, okra, tomato products, artichokes, plantains, potatoes, sweet potatoes, collard greens, raisins,
									tomato products, raisins, potatoes, spinach, sweet potatoes, papaya, oranges, orange juice, bananas, plantains, prunes,red peppers,
									green peppers, oranges, grapefruits, broccoli, strawberries, brussels sprouts, papaya, pineapples,dark green leafy vegetables such as kale, 
									collard greens, spinach, mustard greens, turnip greens and brussel sprouts.	</li>
									</ul>
									<p><b>Avoid Excess of:</b></p>
									<ul><li>Beans (Legumes)</li>
									<li>Meat and Other High Protein Foods</li>
									<li>Salty Foods</li>
									<li>Spinach and Other Foods with Oxalates</li>
									<li>Wheat Bran</li>
									<li>Caffeine</li></ul>
									";
			}
			if($arr[$i] == "Poor Eyesight") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
									<p>Try to include the following in your diet:</p> 
									<h3>Fish</h3>
									<p>Cold-water fish such as salmon, tuna, sardines and mackerel are rich in omega-3 fatty acids, which may help protect against dry eyes, macular degeneration and even cataracts. If you don’t eat seafood, you can get a good supply of omega-3s by using fish oil supplements or taking vegetarian supplements that contain black currant seed oil or flaxseed oil.</p>

									<h3>Vitamin A Rich Food</h3>
									<p>For example: Carrots, Papaya, Mangoes and Peaches</p>

									<h3>Leafy Greens</h3>
									<p>Spinach, kale and collard greens, to name just a few, are packed full of lutein and zeaxanthin, important plant pigments that can help stem the development of macular degeneration and cataracts. Broccoli, peas and avocados are also good sources of this powerful antioxidant duo.</p>

									<h3>Eggs</h3>
									<p>The vitamins and nutrients in eggs, including lutein and vitamin A (which may protect against night blindness and dry eyes), promote eye health and function.</p>
									<h3>Whole Grains</h3>
									<p>A diet containing foods with a low glycemic index (GI) can help reduce your risk for age-related macular degeneration. Swap refined carbohydrates for quinoa, brown rice, whole oats and whole-wheat breads and pasta. The vitamin E, zinc and niacin found in whole grains also help promote overall eye health.</p>
									<h3>Citrus Fruits and Berries</h3>
									<p>Oranges, grapefruits, lemons and berries are high in vitamin C, which may reduce the risk of cataracts and macular degeneration.</p>
									<h3>Nuts</h3>
									<p>Pistachios, walnuts, almonds are rich in omega-3 fatty acids and vitamin E that boost your eye health.</p>
									<h3>Legumes</h3>
									<p>Kidney beans, black-eyed peas and lentils are good sources of bioflavonoids and zinc — and can help protect the retina and lower the risk for developing macular degeneration and cataracts.</p>
									<h3>Fish Oil, Flaxseed Oil and Black Currant Seed Oil</h3>
									<p>These super supplements contain omega-3 fatty acids and have many eye health benefits, including helping to prevent or control dry eye syndrome as well as reduce the risk of macular degeneration and cataracts.</p>
									<h3>Sunflower Seeds</h3>
									<p>Help keep your eyes healthy and disease-free by snacking on sunflowers seeds, which are excellent sources of vitamin E and zinc.</p><br>

									";
			}
			if($arr[$i] == "Asthma") {
				echo "<br><br><h2>As you have ".$arr[$i].",</h2>
									<ul><li><b>Eat plenty of fruits and vegetables.</b><p> They are a good source of antioxidants such as beta carotene and vitamins C and E, which may help reduce lung swelling and irritation (inflammation) caused by cell-damaging chemicals known as free radicals.</p></li>
									<li><b>Avoid allergy-triggering foods.</b> <p>Allergic food reactions can cause asthma symptoms. In some people, exercising after eating an allergy-causing food leads to asthma symptoms.</p></li>
									<li><b>Take in vitamin D.</b> <p>People with more-severe asthma may have low vitamin D levels. Milk, eggs and fish such as salmon all contain vitamin D. Even spending a few minutes outdoors in the sun can increase vitamin D levels.</p></li>
									<li><b>Avoid sulfites.</b> <p>Sulfites can trigger asthma symptoms in some people. Used as a preservative, sulfites can be found in dried fruits, pickles, fresh and frozen shrimp, and some other foods.</p></li></ul>
									";
			}
		}
		
		}
		
			echo "<br><br><hr style='height:5px; color:#05386B; background-color:#05386B'>
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
		<h3 style='text-decoration: underline; text-align:center;>Very Active</h3>
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