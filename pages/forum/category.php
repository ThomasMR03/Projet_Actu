<?php
$app = App::getInstance();


$sujet = $app->getTable('sujet')->find($_GET['id']);
if ($sujet===false){
	$app->notFound();
}
$sujets = $app->getTable('sujet')->lastBySujet($_GET['id']);
$categories = $app->getTable('category')->all();
?>

<h1 id="grostitre_cat"><?= $categorie->titre;  ?></h1>

<div class="row">
	<div class="col-md-8">
	<table class="table">

	<thead>
		<tr>
			<td>SUJETS</td>
			<td>MESSAGES</td>
			<td>AUTEUR</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($sujets as $post) : ?>
		<tr">
			<td><a href=""> <?= $post->titre;?> </a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-2">
	
	</div>
</div>
