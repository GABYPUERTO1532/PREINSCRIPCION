<?php

  if(isset($_SESSION['sub_lev'])){
    switch ($_SESSION['sub_lev']){
      case "lev_3":
        $route="../../..";
      break;    

      case "lev_2":
        $route="../..";
      break;
    }
  }

?>
<!doctype html>
<html lang="es">

<head>
  <title><?php $titulo=$_SESSION['titulo']; echo($titulo);?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="<?php echo($route)?>/config/library/bootstrap-5.0.2-dist/css/bootstrap.min.css">  

  <link rel="stylesheet" href="<?php echo($route)?>/addons/style.css">

</head>

<body>
  <header>

  </header>