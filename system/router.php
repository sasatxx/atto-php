<?php


if (isset($_GET['path'])) {
  $path = $_GET['path'];

  switch($path){
      //Home
    case 'home':
      include('frontend/pages/home.php');
      break;
      //Login
    case 'login':
      headerMenu();
      include('system/functions/user/login.php');
      include('frontend/pages/user/login.php');
      break;
      //Login
    case 'create-account':
      headerMenu();
      include('system/functions/user/register.php');
      include('frontend/pages/user/register.php');
      break;
      //Recovery
    case 'recovery':
      headerMenu();
      include('system/functions/user/recovery.php');
      include('frontend/pages/user/recovery.php');
      break;
      //Activation
    case 'activation':
      headerMenu();
      include('system/functions/user/activation.php');
      include('frontend/pages/user/activation.php');
      break;
      //About
    case 'about':
      include('frontend/pages/about/intro.php');
      break;
      //About
    case 'mailer':
      include('system/mailer.php');
      break;
      //default
    default:
      include('frontend/pages/home.php');
  }
}else{
  include('frontend/pages/home.php');
}
