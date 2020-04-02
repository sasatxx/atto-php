<?php
include('system/error-msg.php');

if (isset($_POST['email'])) {
  $input_email = $_POST['email'];
  $input_password = $_POST['password'];
  $input_rpassword = $_POST['rpassword'];
  $passwordHash = md5($input_password);
  $date = $date = date("Y-m-d-H-i-s");
  $clientIP = getIP();
  $activationToken = genToken32();
  if(isset($_POST['terms'])){$input_terms = $_POST['terms'];}
  else{$input_terms='off';}

  if(isset($_POST['news'])){$input_news = $_POST['news'];}
  else{$input_news='off';}

  echo $input_email.'<br>';
  echo $input_password.'<br>';
  echo $input_rpassword.'<br>';
  echo $passwordHash.'<br>';
  echo $input_terms.'<br>';
  echo $input_news.'<br>';
  echo $activationToken.'<br>';

  if($input_email == ""){
    $error_email = $error_msgs['regEmail'];
  }elseif(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
    $error_email = $error_msgs['regEmailCorrect'];
  }elseif($input_password == ""){
    $error_password = $error_msgs['regPass'];
  }elseif($input_rpassword == ""){
    $error_rpassword = $error_msgs['regRPass'];
  }elseif($input_password != $input_rpassword){
    $error_rpassword = $error_msgs['regpass!'];
  }elseif($input_terms == "off"){
    $error_msg = $error_msgs['regTerms'];
  }else{
    $sqlExist = "SELECT * FROM `users` WHERE `email` = '$input_email'";
    $sqlExistResult = mysqli_query($conn, $sqlExist);
    $userExist = mysqli_num_rows($sqlExistResult);

    if($userExist != 0){
      $error_msg = $error_msgs['emailExist'];
    }else{
      echo "OK";
    }
  }




}
 ?>
