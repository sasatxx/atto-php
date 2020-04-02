<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">

  <!-- Icon -->
  <link rel="icon" href="frontend/favicon.png">

  <!-- SEO Meta -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="sasatx">

  <!-- BootStrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- StyleSheet -->
  <link rel="stylesheet" href="master.css">
  <!-- <link rel="stylesheet" href="frontend/css/master.css"> -->

  <!-- JavaScript -->
  <!-- System JS -->
  <script src="frontend/js/master.js"></script>

  <!-- JQuery JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Google JS -->


  <!-- Other JS -->
  <!-- Iconify -->
  <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>

</head>

<body>
  <?php
  //Include system files
  date_default_timezone_set("Europe/Belgrade");

  include('system/functions.php');
  include('system/msg.php');
  include('system/mysql-connect.php');
  include('system/router.php');
  ?>
</body>

</html>
