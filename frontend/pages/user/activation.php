<?php
if(isset($_GET['email'])){
  $email = $_GET['email'];
  $activationLink = "https://facebook.com";
}else{
  header('Location: login');
}
?>
<head>
  <title>Activation</title>
</head>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 m-auto jumbotron" style="margin-top: 2rem;">
      <h4 class="text-lighter text-center">Activation</h4><br><br>
      <p class="small">
        <?php echo $activation_msgs['activation'] ?>
        <br>
        Your email is <?php echo $email ?>
      </p>
      <hr>
      <form action="mailer" method="post">
        <input type="hidden" name="subject" value="activation-link">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="msg" value="<?php echo $activationLink ?>">
        <input type="submit" value="Resend Activation email" class="btn btn-warning btn-block">
      </form>
    </div>
  </div>
</div>
