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
      <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     <!--  <link rel="stylesheet" type="text/css" href="frameworks/materialize.min.css"> -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>


<!-- NAVBAR MOBILE UNIQUEMENT ! -->
<div id="mobileNav" class="row" style="padding-top:10px;">
  <div class="col-xs-2"></div>
  <img onclick="navMobile()" id="mobileButton" src="img/menu.png" class="col-xs-2">
  <?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <div class="col-xs-5"><p class="mobileTxt">Bonjour <?= $_SESSION['Auth']; ?></p></div>
        <?php else : ?>
          <div class="col-xs-3"><p class="mobileTxt"> Visiteur</p></div>
          <div class="col-xs-3"><a href="index.php?p=utilisateurs" class="mobileTxt">Inscription</a></div>     
        <?php endif; ?>
    <div class="col-xs-1"><a href="index.php?p=<?=$connect ?>" class="mobileTxt"><?= $connect ?></a></div>
</div>

<div  id="navmobile" class="hidden">
  <div class="container">
    <div class="row">
      <a href="index.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 liens">Accueil</a>
    </div>
  </div>
</div>

<!-- NAVBAR PC UNIQUEMENT ! -->
<div id="nav">
  <div class="container" style="width: 100%;">
    <div class="col-md-1"></div>
    <div class="col-md-1 accueil"><a href="index.php">Accueil</a></div>
     <div class="col-md-1"></div>
    <div class="col-md-3"></div>
   <?php if(isset($_SESSION['Auth']) & $_SESSION['Rang'] == 'admin'): ?> <!-- Si connecté Admin affiche Panel Admin, sinon affiche rien -->
       <div class="col-md-2 admin-panel"><a href="admin.php"><span class="glyphicon glyphicon-lock"></span> Panel Admin</a></div>
   <?php else : ?>
       <div class="col-md-2"></div>
   <?php endif; ?>
    <?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <div class="col-md-2 pseudo"><p>Bonjour <?= $_SESSION['Auth']; ?></p></div>
        <?php else : ?>
          <div class="col-md-1 pseudo"><p> Visiteur</p></div>
          <div class="col-md-2 inscription"><a href="index.php?p=utilisateurs">Inscription</a></div>     
        <?php endif; ?>
    <div class="col-md-1 login"><a href="index.php?p=<?=$connect ?>"> <?= $connect ?></a></div>
  </div>
</div>
<div class="header"> <!-- Div pour entete --> </div>




  <div class="container" style="margin: 0; padding: 0; width: 100%;">
      <div class="starter-template">
        <?= $content; ?>
      </div>

  </div><!-- /.container -->



<footer></footer>

<script type="text/javascript" src="js/script.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
                <!-- SCRIPTS LOADS -->
<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
     <script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->
</html>
