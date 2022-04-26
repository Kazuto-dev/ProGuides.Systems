<?php
session_start();

header ('location:index.html');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM user WHERE email = '$email'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows ($result);

if($num==1){
    echo" Usename Already Taken";
}

else{
        $reg = "insert into user (name , email , password) values ('$name' , '$email', '$pass')";
        mysqli_query($con, $reg);
}
?>