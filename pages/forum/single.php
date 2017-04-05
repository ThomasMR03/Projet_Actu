<?php
	$app = App::getInstance();
	$message = $app->getTable('sujet')->find($_GET['id']);
	if ($message===false) {
		$app->notFound();
	}
	$lastMessage = $app->getTable('message')->lastByMessage($_GET['id']);
	$app->titre = $message->titre;
?>


<div class="col-md-8">
	<h1 id="grostitre_article"><?= $message->titre; ?></h1>
	<a href="index.php?p=forum.addMessage">Nouveau Message</a>
	<?php foreach ($lastMessage as $last) : ?>
	<div>
	<p><?= $last->message; ?></p>
	</div>
	<?php endforeach; ?>
	<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['message'] && $_POST['sujet_id'])) {
			$req = $app->getTable('message')->create(
				["message"=>$_POST['message'],
				"sujet_id"=>$_POST['sujet_id']
				]);
			if ($req) {
				////message Flash
				header('location: index.php?p=forum')
				?>
				<div class="alert alert-success">Bien enregistré</div>
				<?php
			}
		}
	}
?>

<div class="col-md-4">
	
</div>
<div class="col-md-4">
<h2 id="add_article">Ajouter un message</h2>
<form method="post">
	<input type="hidden" name="id" value="">
	<input type="hidden" name="sujet_id" value="<?= $message->sujet_id ?>">
	<textarea class="form-control" name="message" placeholder="Contenu Messages" ></textarea>
	<input class="btn btn-warning" type="submit" name="">
</form>
</div>
<div class="col-md-4">
	
</div>
</div>
<div class="col-md-4">
	
</div>
