<?php if(isset($_SESSION['Auth'])): ?>
<?php else : header('location: index.php'); ?>
<?php endif; ?>

<?php 

$utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']);


if (!empty($_POST['mail'])) {
$req=App::getInstance()->getTable('User')->update($_SESSION['Id'],[
 	'mail' => $_POST['image'],
]); 
}

if (!empty($_POST['image'])) {
$req=App::getInstance()->getTable('User')->update($_SESSION['Id'],[
 	'image' => $_POST['image'],
]);
if ($req) {
				header('location: index.php?p=utilisateurs.profil');
				}
} 	


/*var_dump($images)*/
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
			<h6>Date d'inscription : <?= $utilisateurs->date_inscription_fr  ?></h6>
		</div>


		<div class="col-md-12">
			<h6>Vous êtes : <?= $utilisateurs->membre_rang  ?></h6>
			<h6>Date de naissance : <?= $utilisateurs->date_naissance_fr  ?></h6>
			<h6>Adresse mail : <?= $utilisateurs->mail  ?></h6>
		</div>
	</div>


	<div class="col-md-12">
		<form action="" method="post" name="formulaire">
			<h6>Changer mon adresse mail</h6>
			<input type="email" required="required" name="mail" placeholder="Votre Mail" onblur="verifMail(this)" data-errormessage='{"valueMissing": "Veuillez entrer une adresse mail valid"' class="form-control">
			<button type="submit">Valider</button>
		</form>

		<form action="" method="post" name="formulaire">
			<h6>Changer mon image de profil</h6>
			<input name="image" type="image" value="profil1" id="profil1" src="img/imageProfil/profil1.png" width="50">
			<input name="image" type="image" value="profil2" id="profil2" src="img/imageProfil/profil2.png" width="50">
			<input name="image" type="image" value="profil3" id="profil3" src="img/imageProfil/profil3.png" width="50">
			<input name="image" type="image" value="profil4" id="profil4" src="img/imageProfil/profil4.png" width="50">
			<input name="image" type="image" value="profil5" id="profil5" src="img/imageProfil/profil5.png" width="50">
			<input name="image" type="image" value="profil6" id="profil6" src="img/imageProfil/profil6.png" width="50">
			<input name="image" type="image" value="profil7" id="profil7" src="img/imageProfil/profil7.png" width="50">
		</form>
	</div>

</div>
<!-- Mettre en page les sessions -->
<!-- Un endroit pour mettre une photo de profil -->
<!-- Un endroit pour mettre serveur, niveau & classe du joueur -->

