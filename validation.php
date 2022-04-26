<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM user WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows ($result);

if($num==1){

    header('location:home.html'); 

} 
else{
       header('location:index.html');
    }


?>