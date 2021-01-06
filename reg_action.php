<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodee";
    
    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection Faild: ".$conn->connect_error);
    }
    
    function insert_user($conn,$firstname,$lastname,$email,$password){
        $sql_query = "insert into users values('$firstname','$lastname','$email','$password')";
        
        if($conn->query($sql_query)===TRUE){
            header('location: after_reg.html');
        }else{
            echo "Error: ".$sql_query."<br>".$conn->error;
        }
    }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $lastname = $email = $password = "";
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    
    insert_user($conn,$firstname,$lastname,$email,$password);
}
    


?>