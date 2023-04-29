<?php

SESSION_START();

include "db.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $finance_email = $_POST['finance_email'];
  $finance_password = $_POST['finance_password'];
  //$password = $_POST['student_password'];

 $selected_db = mysqli_select_db ($con, 'check');

  if(!$selected_db){

    echo "No Database Selected";

  }

$table_query = "SELECT * FROM finance WHERE finance_email = '$finance_email' AND finance_password = '$finance_password'";

$table_result = mysqli_query($con,$table_query);
$row = mysqli_fetch_array($table_result,MYSQLI_ASSOC);
$count = mysqli_num_rows ($table_result);


if ($count == 1){
    $last = 1200 + time();
    $_SESSION['email'] = $student_email;    
    setcookie(logged, date("F jS - g:i a"), $last);
    //echo "Successful";
    header('location:finance/finance_profile.php');

}else{

  echo "Incorrect Username or Password";

}

}

$con->close();

?>












