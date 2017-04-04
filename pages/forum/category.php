<?php
$app = App::getInstance();


$categorie = $app->getTable('category')->find($_GET['id']);
if ($categorie===false){
	$app->notFound();
}
$articles = $app->getTable('post')->lastByCategory($_GET['id']);
$categories = $app->getTable('category')->all();
?>

<h1 id="grostitre_cat"><?= $categorie->titre;  ?></h1>

<div class="row">
	<div class="col-md-8">
	<table class="table">

	<thead>
		<tr>
			<td>LAST ARTICLE</td>
			<td>EXTRAIT</td>
			<td>DATE / TIME</td>
			<td>AUTEUR</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($articles as $post) : ?>
		<tr">
			<td><a href="<?= $post->Url; ?>"> <?= $post->titre;?> </a></td>
			<td><?=$post->Extrait;?></td>
			<td><?= $post->date_creation;?></td>
			<td><?= $post->auteur;?></td>
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
