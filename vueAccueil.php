<?php require_once'connection.php'?>
<?php require_once 'accesDonnees.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vos restaurants préférés</h1>

      <?php foreach ($tabRestaurants as $row){
          echo '<h2>'.$row['nom'].'</h2>';
          ?>

        <div>
        <?php
        echo $row['adresse'].'</br>';
        echo $row['cp'].'</br>';
        echo $row['ville'].'</br>';
        echo $row['telephone'].'</br>';
        ?>
        </div>
          <?php
          echo $row['description'];
          ?>
          <div>
              <?php

              ?>

          </div>
   <?php } ?>'
</body>
</html>
