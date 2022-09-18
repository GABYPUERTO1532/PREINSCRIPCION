<?php include "../../controller/structures.php"?>
<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

  <main>
  
    <div class="container">
      <h1>Info Estudiante</h1>
      <ul>
        <?php
          foreach ($stu_info as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Info Madre</h1>
      <ul>
        <?php
          foreach ($moth_info as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Info Padre</h1>
      <ul>
        <?php
          foreach ($fath_info as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Info Acudiente</h1>
      <ul>
        <?php
          foreach ($acu_info as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Otra informacion</h1>
      <ul>
        <?php
          foreach ($oth_info as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Informacion educativa 1</h1>
      <ul>
        <?php
          foreach ($edu_inf_1 as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Informacion educativa 2</h1>
      <ul>
        <?php
          foreach ($edu_inf_2 as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Informacion educativa 3</h1>
      <ul>
        <?php
          foreach ($edu_inf_3 as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Informacion educativa 4</h1>
      <ul>
        <?php
          foreach ($edu_inf_4 as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Informacion educativa 5</h1>
      <ul>
        <?php
          foreach ($edu_inf_5 as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

    <div class="container">
      <h1>Informacion educativa 6</h1>
      <ul>
        <?php
          foreach ($edu_inf_6 as $info){
            echo("<li>$info</li>");
          }
        ?>
      </ul>
    </div>

  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
