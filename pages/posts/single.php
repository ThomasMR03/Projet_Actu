<?php

	if ($_POST) {
		if (!empty($_POST['commentaire'] && $_POST['articles_id'] && $_POST['auteurCommentaire'])) {
			$req = $app->getTable('commentaire')->create(
				["commentaire"=>htmlspecialchars($_POST['commentaire']),
				"articles_id"=>htmlspecialchars($_POST['articles_id']),
				"users_id"=>htmlspecialchars($_POST['users_id']),
				"auteurCommentaire"=>htmlspecialchars($_POST['auteurCommentaire'])
				]);
			if ($req) {
				////message Flash
				?>
				<div class="alert alert-success">Bien enregistré</div>
				<?php
			}
		}
	}
	$app = App::getInstance();
	$post = $app->getTable('post')->find($_GET['id']);
	if ($post===false) {
		$app->notFound();
	}
	$lastCom = $app->getTable('commentaire')->lastByCommentaire($_GET['id']);
	$app->titre = $post->titre;

	$utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']);
?>

<div class="col-md-1"></div>
<div class="col-md-7" id="grosArticle">
	<h1 id="grostitre_article"><?= $post->titre; ?></h1>
	<img src="img/<?=$post->img?>">
	<div class="texteGrosArticle">
	<p><?= $post->contenu; ?></p>
	<br><br>
	<h6 style="color: grey;">Article posté par <?= $post->auteur ?> </h6>
	</div>
	
	<div class="commentaire">
	<div id="scroll"></div>
	<h4>Commentaire(s) :</h4>

	<div id="commentaire">
	<?php foreach ($lastCom as $last) : ?>
	<span>
	<div class="commentairePersonne">
	<div class="col-md-1" id="imageProfilPerso" style="margin-right: 10px;">
	<img src="img/imageProfil/<?= $last->image ?>.png">
	</div>
	<h5><?= $last->auteurCommentaire ?></h5>
	<p><?= $last->commentaire ?></p>
	</div>
	</span>
	<?php endforeach; ?>
	</div>
	</div>





<?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche form commentaire, sinon affiche Redirection -->
        <div class="commentaireTexte">
			<h2>Ajouter un commentaire</h2>
				<form method="post" action="index.php?p=<?php echo $_GET['p'] ?>&id=<?= $_GET['id'] ?>">
					<input type="hidden" name="auteurCommentaire" value="<?= $_SESSION['Auth']?>">
					<textarea class="form-control" name="commentaire" placeholder="Ajouter votre commentaire" ></textarea>
					<input type="hidden" name="articles_id" value="<?= $_GET['id'] ?>">
					<input type="hidden" name="users_id" value="<?= $_SESSION['Id'] ?>">
					<input class="btn btn-warning" type="submit" name="" style="margin-top: 20px;">
				</form>
		</div>
        <?php else : ?>
          	<p style="color: white">Je vous invite à vous connecter, si vous voulez poster un commentaire. <a href="index.php?p=Login">>> Connexion <<</a></p>
        <?php endif; ?>
</div>

<div class="col-md-1"></div>
	<div class="col-md-2" id="colonneGauche">
		<h3 class="actu">Articles récents</h3>
		<?php foreach (App::getInstance()->getTable('post')->lastRecent() as $post) : ?>
			<div class="fondRecent">
				<h5><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h5>
				<div class="imageArticleRecent"><img src="img/<?=$post->img?>"></div>
				<p>Article posté par <?= $post->auteur ?> <br> Le <?= $post->date_creation_fr ?></p>
			</div>
		<?php endforeach; ?>
	</div>

	

