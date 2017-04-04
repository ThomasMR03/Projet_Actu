<?php
	$app = App::getInstance();
	$post = $app->getTable('post')->find($_GET['id']);
	if ($post===false) {
		$app->notFound();
	}
	$app->titre = $post->titre;
?>
<div class="col-md-8">
	<h1 id="grostitre_article"><?= $post->titre; ?></h1>
	<img src="<?=$post->img?>">
	<p><?= $post->category; ?></p>
	<p><?= $post->contenu; ?></p>
</div>
<div class="col-md-4">
	
</div>
