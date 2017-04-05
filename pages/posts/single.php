<?php

	if ($_POST) {
		if (!empty($_POST['commentaire'] && $_POST['articles_id'])) {
			$req = $app->getTable('commentaire')->create(
				["commentaire"=>$_POST['commentaire'],
				"articles_id"=>$_POST['articles_id']
				]);
			if ($req) {
				////message Flash
				header('location: index.php')
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
?>

<div class="col-md-1"></div>
<div class="col-md-7" id="grosArticle">
	<h1 id="grostitre_article"><?= $post->titre; ?></h1>
	<img src="img/news.jpg">
	<div class="texteGrosArticle">
	<p style="text-align: center; color: darkgrey;"><?= $post->category; ?></p>
	<p><?= $post->contenu; ?></p>
	<br><br>
	<h6 style="color: grey;">Article posté par <?= $post->auteur ?> </h6>
	</div>
	

</div>

<div class="col-md-1"></div>
	<div class="col-md-2" id="colonneGauche">
		<h3 class="actu">Articles récents</h3>
		<?php foreach (App::getInstance()->getTable('post')->lastRecent() as $post) : ?>
			<div class="fondRecent">
				<h5><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h5>
				<div class="imageArticleRecent"><img src="img/news.jpg"></div>
				<p>Article posté par <?= $post->auteur ?> <br> Le <?= $post->date_creation_fr ?></p>
			</div>
		<?php endforeach; ?>
	</div>

	<?php foreach ($lastCom as $last) : ?>
		<h4>Commentaire(s) :</h4>
	<p><?= $last->commentaire ?></p>
	<?php endforeach; ?>

<div class="col-md-8">
<h2 id="add_article">Ajouter un commentaire</h2>
<form method="post" action="">
	<textarea class="form-control" name="commentaire" placeholder="Ajouter votre commentaire" ></textarea>
	<input type="radio" name="articles_id" id="optionsRadios1" value="<?= $_GET['id'] ?>"> 
	<input class="btn btn-warning" type="submit" name="">
</form>
</div>