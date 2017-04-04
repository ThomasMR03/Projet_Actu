<?php
	$app = App::getInstance();
	$message = $app->getTable('sujet')->find($_GET['id']);
	if ($message===false) {
		$app->notFound();
	$lastMessage = $app->getTable('message')->lastByMessage($_GET['id']);
	}
	$app->titre = $message->titre;
?>


<div class="col-md-8">
	<h1 id="grostitre_article"><?= $message->titre; ?></h1>
	<?php foreach ($lastMessage as $last) : ?>
	<p><?= $last->message; ?></p>
	<?php endforeach; ?>
</div>
<div class="col-md-4">
	
</div>
