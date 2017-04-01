<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; maximum-scale=1; minimum-scale=1;" />
    <title>SimpleCMS</title>

    <link rel="icon" sizes="24x24" href="img/icon.png">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="dist/css/sticky-footer-navbar.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>


  <body>



    <?php include('lib/navbar.php'); ?>

    <?php

    if (isset($_GET['a']))
      $a = $_GET['a'];

    if (!isset($a))
      $a = 'home';

    switch($a)
    {
        default: include('lib/home.php'); break;
        case 'home': include('lib/home.php'); break;
        case 'news': include('lib/news.php'); break;
        case 'gallery': include('lib/gallery.php'); break;
        case 'about': include('lib/about.php'); break;
    }

    ?>

    <?php include('lib/footer.php'); ?>

    <script src="dist/js/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

  </body>
</html>
