<?php
$app = App::getInstance();


$categorie = $app->getTable('category')->find($_GET['id']);
if ($categorie===false){
	$app->notFound();
}
$sujet = $app->getTable('sujet')->lastBySujet($_GET['id']);
$categories = $app->getTable('category')->all();
?>

<h1 id="grostitre_cat"><?= $categorie->titre;  ?></h1>

<div class="row">
	<div class="col-md-8">
	<table class="table">

	<thead>
		<tr>
			<td>SUJET</td>
			<td>MESSAGES</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($sujet as $post) : ?>
		<tr">
			<td><a href="<?= $post->Url; ?>"> <?= $post->titre;?> </a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-2" id="categorie">
	<h4>Les catégories :</h4>
		<ul>
		<?php foreach ($categories as $categorie) : ?>
			<li><a id="categorie_titre" href="<?= $categorie->Url; ?>"><?= $categorie->titre; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
