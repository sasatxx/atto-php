<?php
include('system/error-msg.php');

if(isset($_POST['email'])){
  $input_email = $_POST['email'];
  $input_password = $_POST['password'];

  if($input_email == ""){
    $error_email = $error_msgs['email'];
  }
  if($input_password == ""){
    $error_password = $error_msgs['password'];
  }

  if($input_email != "" && $input_password != ""){
    //Make all vars
    $clientIP = getIP();
    $passwordHash = md5($input_password);
    $date = date("Y-m-d-H-i-s");
    $expire = "never";
    $loginToken = genToken64();

    $sqlLoginCheck = "SELECT * FROM users WHERE email = '$input_email' AND password = '$passwordHash'";
    $sqlLoginResult = mysqli_query($conn, $sqlLoginCheck);
    $userExist = mysqli_num_rows($sqlLoginResult);
    $userInfo = mysqli_fetch_assoc($sqlLoginResult);

    $userInfoUsername = $userInfo['username'];
    $userInfoActivated = $userInfo['activated'];
    $userInfoBanned = $userInfo['banned'];


    if($userExist != 0){
      if($userInfoBanned == "yes"){
        $error_msg = $error_msgs['banned'];
      }else{
        if($userInfoActivated == "yes"){
          $sqlLoginToken = "INSERT INTO token (`user_id`, `token`, `user_ip`, `date`, `expire`, `data`)
                                       VALUES ('$userInfoUsername','$loginToken','$clientIP','$date','$expire', 'login')";

          $sqlLogin = "UPDATE `users` SET `last_login`='$date',`last_ip`='$clientIP',`token`='$loginToken' WHERE `username`='$userInfoUsername'";

          if (mysqli_query($conn, $sqlLoginToken)) {
            if(mysqli_query($conn, $sqlLogin)){
              echo 'sve ok';
            }

          } else {
            $error_msg = "Error.";
          }
        }else{
          header("Location: activation/".$input_email);
        }
      }




    }else {
      $error_msg = $error_msgs['noexist'];
    }
  }
}
?>
