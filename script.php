<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- Stampare una stringa verde se la variabile password passata in GET è
    uguale a “Boolean”, altrimenti stampare una stringa rossa. -->


    <?php

      $password = (!empty($_GET['password'])) ? $_GET['password'] : NULL;

      //valore default

      $color = 'red';

      $message = 'ACCESS Negato!!';

      // Se la password è valida i valori vengono modificati

      if($password == 'Boolean') {

        $color = 'green';
        $message = 'ACCESS Consentito!';

      }
    ?>

        <p class="<?php echo $class; ?>"><?php echo $message; ?></p>
  </body>
</html>
