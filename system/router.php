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
      //About
    case 'about':
      include('frontend/pages/about/intro.php');
      break;
      //default
    default:
      include('frontend/pages/home.php');
  }
}else{
  include('frontend/pages/home.php');
}
