<?php

// Report all PHP errors
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    // should work properly if you use (localhost) otherwise the prb is from the databse and the host
    $conn = mysqli_connect($host, $username, $password, $database); 
  
     $number      = mysqli_real_escape_string($conn, $_POST['number']);
     $name        = mysqli_real_escape_string($conn, $_POST['name']);
     $company     = mysqli_real_escape_string($conn, $_POST['company']);
     $email       = mysqli_real_escape_string($conn, $_POST['email']);
     $consumption = mysqli_real_escape_string($conn, $_POST['consumption']);

    $sql = "INSERT INTO form (number, name, company, email, consumption) 
            VALUES ('$number', '$name', '$company', '$email', '$consumption')";

    if(!isset($sql)){
      // show the error 
      echo 'something went wrong';
    }else{
      echo "Entry added successfully";
    }
   
}
