<?php if(isset($_SESSION['Auth'])): ?>
<?php else : header('location: index.php'); ?>
<?php endif; ?>

<?php 

$utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']);


if (!empty($_POST['mail'])) {
$req=App::getInstance()->getTable('User')->update($_SESSION['Id'],[
 	'mail' => $_POST['mail'],
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

			<button onclick="formImage()" id="buttonFormImage">Modifier mon image</button>
			<form action="" method="post" name="formulaire" id="formImage" class="formImageHidden">
				<?php foreach (App::getInstance()->getTable('Image')->all() as $image) : ?>
					<input name="image" type="image" value="<?= $image->images ?>" id="profil1" src="img/imageProfil/<?= $image->images ?>.png" width="50">
				<?php endforeach ?>
			</form>
		</div>

		<div class="col-md-9">
			<h1 id="pseudo">Bienvenue <?= $utilisateurs->name  ?></h1>
			<h6><span id="infoProfil">Date d'inscription :</span> <?= $utilisateurs->date_inscription_fr  ?></h6>
		</div>

	

		<div class="col-md-9" id="profilInfoPerso">
			<h6><span id="infoProfil">Vous êtes :</span> <?= $utilisateurs->membre_rang  ?></h6><br>
			<h6><span id="infoProfil">Date de naissance :</span> <?= $utilisateurs->date_naissance_fr  ?></h6><br>
			<h6><span id="infoProfil">Adresse mail :</span> <?= $utilisateurs->mail  ?></h6>
			<button onclick="formMail()" id="buttonFormMail">Modifier</button>

			<form action="" method="post" name="formulaire" id="formMail" class="formMailHidden">
				<input type="email" required="required" name="mail" placeholder="Nouvelle adresse Mail" onblur="verifMail(this)" data-errormessage='{"valueMissing": "Veuillez entrer une adresse mail valid"' style="float: left; width: 70%;">
				<button type="submit" id="buttonFormMail">Valider</button>
			</form>
		</div>
	</div>


	<div class="col-md-12">
		

		
	</div>

</div>
<!-- Mettre en page les sessions -->
<!-- Un endroit pour mettre une photo de profil -->
<!-- Un endroit pour mettre serveur, niveau & classe du joueur -->

