<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM user WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows ($result);

if($num==1){
     $_SESSION['username'] = $name;


    header ('location:home.php'); //Home page 
}

else{
    header ('location:index.html'); //If ur password is wrong u gonna redirected @login
}



?>