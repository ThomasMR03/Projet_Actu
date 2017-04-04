<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['id'] && $_POST['titre'] && $_POST['contenu'])) {
			$res = $app->getTable('post')->update(
				$_POST['id'], 
				["titre"=>$_POST['titre'], 
				"contenu"=>$_POST['contenu']
				]);
			if ($res) {
				?>
				<div class="alert alert-success">Bien enregistré</div> 
				<?php
			}
		}
	}
	$post = $app->getTable('post')->find($_GET['id']);
	if ($post===false) {
		$app->notFound();
	}
	$app->titre = $post->titre;
?>
<div class="col-md-4">
	
</div>
<div class="col-md-4">
<h2 id="modif_article">Modifier votre article</h2>
<form method="post" action="admin.php?p=posts.single&id=<?= $post->id; ?>">
	<input type="hidden" name="id" value="<?= $post->id; ?>">
	<input class="form-control" type="text" name="titre" value="<?= $post->titre; ?>">
	<textarea class="form-control" name="contenu" ><?= $post->contenu; ?></textarea>
	<input type="URL" name="img">
	<input class="btn btn-warning" type="submit" name=""> </br>
	<a href="admin.php">Retour vers la page Admin</a>
</form>
</div>
<div class="col-md-4">
	
</div>

