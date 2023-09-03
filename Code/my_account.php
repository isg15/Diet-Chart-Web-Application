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
		img{
			margin-left:10%;
			float:left;
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
		tr:nth-child(even) {
            background-color:white;
			color:#05386B;
        }
		tr:nth-child(odd) {
            background-color: #E5F8FE;
			color:#05386B;
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
	<h1 style="text-align:center;  text-decoration: underline;"> My Account </h1><div style="float:right;margin-top:20px;margin-right:20px;border: 5px solid #05386B ;text-align: center;padding: 14px 16px;text-decoration: none;background-color:Cornsilk;"><a href="edit_data.php" style="color:red;">Edit Account</a></div>
<?php



	if (!$db){ 
   echo "NO CONNECTION ";
  }
$row="";
$sql4 = "SELECT * from users WHERE user='$_SESSION[user]'";
$res4 = mysqli_query($db, $sql4); 
if($res4){
   
	while($row = mysqli_fetch_assoc($res4)){
	echo "<div class='details'><img src='https://w7.pngwing.com/pngs/526/142/png-transparent-google-account-email-computer-icons-invoice-payment-svg-icon-account-miscellaneous-blue-text.png' style='width:250px; height:300px;margin-right:15px;margin-top:30px'><table><tr><th>Registration Id:</th><td> " . $row["id"]. "</td></tr><tr><th>Name:</th><td> " . $row["user"]. "</td></tr><tr><th>Gender:</th><td> " . $row["gender"]."</td></tr><tr><th>Age:</th><td> " . $row["age"]." yrs </td></tr><tr><th>Height:</th><td> " . $row["height"]." cm</td></tr><tr><th>Weight:</th><td> " . $row["weight"]. " kg </td></tr><tr><th>Body Mass Index (BMI):</th><td> " . $row["bmi"]. "</td></tr><tr><th>You are currently:</th><td> " . $row["status"]."</td></tr><tr><th>Medical conditions:</th><td> " . $row["conditions"]."</td></tr><tr><th>Activity Level:</th><td> " . $row["activity"]."</td></tr><tr><th>Recommended Calorie intake per day:</th><td> " . $row["recommended_calorie_intake"]." calories</td></tr></table></div>";}
} else {
    echo "Error: " . $res4 . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>

</body>
</html>