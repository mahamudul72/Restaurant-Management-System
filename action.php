<?php
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
include("config.php");

	$about_detect= "select * from info where email='$email'";
	$res1= mysqli_query($db,$about_detect) or die("Faild to Open please try again".mysqli_error($about_detect));
	$row11 = mysqli_fetch_array($res1);
	$found=$row11['email']; 

	if($email==$found){
			echo "You alredy have an account";
	}else{
	

			$sql="insert into info(fname,lname,email,pass) values ('$fname','$lname','$email','$password')";
			$result=mysqli_query($db,$sql);

			if($result)
			{
				$j=2;
				
				header('location: after_reg.html');
			}
			else
			{
				
				echo "REGISTRATION Not Complete";
			}

			mysqli_close($db);

		}

?>