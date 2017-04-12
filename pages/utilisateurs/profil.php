<?php if(isset($_SESSION['Auth'])): ?>
<?php else : header('location: index.php'); ?>
<?php endif; ?>

<?php 

$utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']);



/*var_dump($utilisateurs)*/
 ?>



<div class="row" style="width: 99%;">

	<div class="col-md-2"></div>


	<div class="col-md-8" id="pagePerso">
		<div class="row">

		<div class="col-md-3" id="imageProfilPerso">
			<img src="img/imageProfil/<?= $utilisateurs->image ?>.png">
		</div>

		<div class="col-md-9">
			<h1 id="pseudo">Bienvenue <?= $utilisateurs->name  ?></h1>
			<h6>Date d'inscription : <?= $utilisateurs->date_inscription  ?></h6>
		</div>


		<div class="col-md-12">
			<h6>Vous êtes : <?= $utilisateurs->membre_rang  ?></h6>
			<h6>Date de naissance : <?= $utilisateurs->date_de_naissance  ?></h6>
			<h6>Adresse mail : <?= $utilisateurs->mail  ?></h6>
		</div>
	</div>

</div>
<!-- Mettre en page les sessions -->
<!-- Un endroit pour mettre une photo de profil -->
<!-- Un endroit pour mettre serveur, niveau & classe du joueur -->

