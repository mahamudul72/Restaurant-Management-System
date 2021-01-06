<!DOCTYPE html>
<html>
<head>
	<title>FOODEE</title>
		<link rel="stylesheet" type="text/css" href="story.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.registration{
			text-align: center;
		}
		.registration h2{
			    padding: 2%;
    			font-size: 20px;
		}
		.btn{
			margin-bottom: 15px;
		}
	</style>
</head>
<body class="body">
		<div class="container" id="important">
			<div class="row">
				<div class="heading">
					<a href="index.html"><img  src="img/logo.png"></a>
				</div>
											
			</div>
		</div>
		<div class="registration">
			<h2><i>Registration Form</i></h2>
			<form action="reg_action.php" method="post">
				<input type="text" name="first_name" class="input" placeholder="First Nmae">
				<br>
				<input type="text" name="last_name" class="input" placeholder="Last Nmae">
				<br>
				<input type="email" name="email" class="input" placeholder="Email">
				<br>
				<input type="password" name="password" class="input" placeholder="password">
				<br>
				<input type="submit" value="Sign UP" name="" class="btn">
			</form>
		</div>

		<div class="Footer">&copy;FOODEE</div>
</body>
</html> 