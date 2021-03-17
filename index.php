
<?php

// Report all PHP errors
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    // should work properly if you use (localhost) otherwise the prb is from the databse and the host


    // $con = mysqli_connect('localhost', 'root', '', 'userform');
    $conn = mysqli_connect('localhost', 'root', '', 'justest'); 
  
     $number      = mysqli_real_escape_string($conn, $_POST['number']);
     $name        = mysqli_real_escape_string($conn, $_POST['name']);
     $company     = mysqli_real_escape_string($conn, $_POST['company']);
     $email       = mysqli_real_escape_string($conn, $_POST['email']);
     $consumption = mysqli_real_escape_string($conn, $_POST['consumption']);

    $sql = "INSERT INTO `form`
    (`name`, `company`, `email`, `consumption`) 
    VALUES (
        '$name', '$company', '$email', '$consumption'
    );";
    $my_sql_insert = mysqli_query($conn, $sql);
    if(isset($my_sql_insert)){
      echo "Entry added successfully";
    //   echo $sql;
    }else{
        // show the error 
      echo 'something went wrong';
    }
   
}
?>



<section class="form">
        <form class="form__wrapper" action="index.php" method="POST">
            <h2 class="form__wrapper_text">Contact us</h2>
            <div class="form__wrapper_inputs">
                <div class="form__wrapper_inputs_number">
                    <p>Number</p>
                    <input type="tel" value="+380" name="number">
                </div>
                <div class="form__wrapper_inputs_name">
                    <p>Name</p>
                    <input type="text" name="name">
                </div>
                <div class="form__wrapper_inputs_company">
                   <p>Company</p>
                   <input type="text" name="company">
                </div>
                <div class="form__wrapper_inputs_email">
                    <p>Email</p>
                    <input type="email" name="email">
                </div>
                <div class="form__wrapper_inputs_energy" >
                    <p>Consumption</p>
                    <span>кВт</span>
                    <input type="text" pattern="[0-9]*" name="consumption">
                </div>
                <input type="submit" name="submit" class="form__wrapper_inputs_send" value="Submit">
                <!--<button type="submit" class="form__wrapper_inputs_send">Submit</button>-->
            </div>

        </form>
    </section>
