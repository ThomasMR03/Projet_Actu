<?php
	$app = App::getInstance();
	$message = $app->getTable('sujet')->find($_GET['id']);
	if ($message===false) {
		$app->notFound();
	}
	$app->titre = $message->titre;
?>
<div class="col-md-8">
	<h1 id="grostitre_article"><?= $message->titre; ?></h1>
	<p><?= $message->message; ?></p>
</div>
<div class="col-md-4">
	
</div>
