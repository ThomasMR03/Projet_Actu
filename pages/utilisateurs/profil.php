<?php if(isset($_SESSION['Auth'])): ?>
<?php else : header('location: index.php'); ?>
<?php endif; ?>




<div class="row" style="width: 99%;">

	<div class="col-md-2"></div>


	<div class="col-md-8" id="pagePerso">
		<div class="row">

		<div class="col-md-3" id="imageProfil">
			<img src="img/profil.png">
		</div>

		<div class="col-md-9">
			<h1 id="pseudo">Bienvenue <?= $_SESSION['Auth']  ?></h1>
		</div>


		<div class="col-md-12">
			<h6>Vous êtes : <?= $_SESSION['Rang']  ?></h6>
			<h6>Date de naissance : <?= $_SESSION['Age']  ?></h6>
		</div>
	</div>

</div>
<!-- Mettre en page les sessions -->
<!-- Un endroit pour mettre une photo de profil -->
<!-- Un endroit pour mettre serveur, niveau & classe du joueur -->