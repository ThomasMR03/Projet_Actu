<?php
$date = date("d-m-Y");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= App::getInstance()->titre; ?></title>
                <!-- Bootstrap & materialize core CSS -->
      <link rel="stylesheet" type="text/css" href="frameworks/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     <!--  <link rel="stylesheet" type="text/css" href="frameworks/materialize.min.css"> -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
<div class="header"> <!-- Div pour entete --> </div>

<div id="nav">
  <div class="container">
    <a class="col-md-1" href="index.php">Accueil</a>
    <a class="col-md-1" href="index.php?p=forum">Forum</a>
    <a class="col-md-2" href="admin.php"><span class="glyphicon glyphicon-lock"></span> Panel Admin</a>
    <div class="col-md-5"></div>
    <?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <p class="col-md-2">Bonjour <?= $_SESSION['Auth']; ?></p>
        <?php else : ?>
          <a href="index.php?p=utilisateurs">S'inscrire</a>
        <p class="col-md-2"> Visiteur</p>
        <?php endif; ?>
    <a class="col-md-1" href="index.php?p=<?=$connect ?>"><?= $connect ?></a>
  </div>
</div>


  <div class="container">
      <div class="starter-template">
        <?= $content; ?>
      </div>

  </div><!-- /.container -->
</body>
                <!-- SCRIPTS LOADS -->
<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
     <script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->
</html>
