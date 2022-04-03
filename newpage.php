<?php

    //get input on checking
   $email = $_POST['email'];
   $password =$_POST['password'];

   //connection code for database
   $con = new mysqli("localhost", "root","","login");

   if($con-> connect_error){
        die("fuck off u failed to connect : ".$con->connect_error);
    } 
    else{
        $connecting = $con->prepare("select * from form where email = ?"); //table name "form"
        $connecting-> bind_param("s", $email); //Where "s" is a value for string = email and pass
        $connecting -> execute();
        $connecting_result = $connecting -> get_result();
        if($connecting_result->num_rows >0){
            $data = $connecting_result -> fetch_assoc();
            if($data['password'] === $password){
                echo "<h2>Congrats Bitch</h2>";
            } else{
                echo "<h2>Fuck off Invalid Email or Password </h2>";
            }
        } else{
            echo "<h2>Fuck off Invalid Email or Password </h2>";
        }
    }

?>