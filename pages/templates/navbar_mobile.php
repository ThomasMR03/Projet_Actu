
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


