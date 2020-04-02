<?php
if(isset($_GET['email'])){
  $email = $_GET['email'];
  $activationLink = "https://facebook.com";
}elseif(isset($_GET['token'])){
  $token = $_GET['token'];

  $sqlActivation = "SELECT * FROM users WHERE token = '$token'";
  $activationResult = mysqli_query($conn, $sqlActivation);
  $activationCheck = mysqli_num_rows($activationResult);

  if($activationCheck != 0){
    $sqlActivator = "UPDATE `users` SET `activated`='yes' WHERE `token`='$token'";
    if (mysqli_query($conn, $sqlActivator)) {
      header('Location: login?activated');
    }else{
      $error_msg = "Invalid link";
    }
  }else {
    $error_msg = "Invalid link";
  }
}else{
  header('Location: login?error');
}
?>
<head>
  <title>Activation</title>
</head>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 m-auto jumbotron" style="margin-top: 2rem;">
      <h4 class="text-lighter text-center">Activation</h4><br><br>
      <? if(isset($error_msg)){
        echo '
        <div class="alert alert-danger" role="alert">
          '.$error_msg.'
        </div>
        ';
      } ?>
      <?php if(isset($_GET['email'])){ ?>
      <p class="small">
        <?php echo $activation_msgs['activation'] ?>
        <br>
        <?php if(isset($_GET['email'])){  echo $email; }?>
      </p>
      <hr>
      <form action="mailer" method="post">
        <input type="hidden" name="subject" value="activation-link">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="msg" value="<?php echo $activationLink ?>">
        <input type="submit" value="Resend Activation email" class="btn btn-warning btn-block">
      </form>
    <?php } ?>
    </div>
  </div>
</div>
