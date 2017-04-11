
<!-- NAVBAR MOBILE UNIQUEMENT ! -->
<nav id="mobileNav" class="row" style="padding-top:10px;">
  <img src="img/logoNav.png" height="40" style="margin-top: -8px; margin-left: 5px;">
  <img onclick="navMobile()" id="mobileButton" src="img/menu.png">
</nav>

<div  id="navmobile" class="hidden">
    <div class="row">
    <?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <p class="col-xs-12 col-sm-12 liens" style="font-size: 1em; background-color:rgb(199,211,29);padding-top: 10px; padding-bottom: 10px;">Bonjour <?= $_SESSION['Auth']; ?></p>
        <?php else : ?>
          <p class="col-xs-12 col-sm-12 liens"  style="font-size: 1em; background-color:rgb(199,211,29);padding-top: 10px; padding-bottom: 10px;"> Vous n'êtes pas connécté</p>
          <a href="index.php?p=utilisateurs" class="col-xs-12 col-sm-12 liens" style="padding: 0;">Inscription</a>  
        <?php endif; ?>
      <a href="index.php?p=<?=$connect ?>" class="col-xs-12 col-sm-12 liens"  style="padding: 0; border: none;"><?= $connect ?></a>
    <img src="img/roublard.png" width="90%;" style="margin:10px;">
       

      <a href="index.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 liensNav">Accueil</a>
    </div>
</div>


