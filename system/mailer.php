<?php
if(isset($_POST['email']) && isset($_POST['subject'])){
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  switch ($subject) {
    case 'activation-link':
      $mailTo = $email;
      $mailSubject = "Activate your account";
      $msg = $_POST['msg'];
      $mailMsg = "Please go to link n/ ".$msg;
      if(mail($mailTo,$mailSubject,$mailMsg)){
        echo 'email sended';
      }


      break;

    default:
      // code...
      break;
  }





}else{
  header('Location: home');
}
?>
