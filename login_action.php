<?php
$user_name=$_POST['username'];
$user_password=$_POST['login_password'];

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodee";
    
    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection Faild: ".$conn->connect_error);
    }

    $result = $conn->query("select * from users");

$i=0;
while($db_field=$result->fetch_assoc())
{
    
    echo $db_field['email'];
    echo $db_field['password'];
    
    echo $user_name." ".$password;
	
	if($user_name==$db_field['email'] && $user_password==$db_field['password'])
	{
		$i=1;
    }
}
if($i==1)
{

	header('location: after_login.html');

}
else
{
	
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.html'>Login</a></div>";
}

mysqli_close($db);
?>