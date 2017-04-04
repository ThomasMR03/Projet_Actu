<div class="row">
	<div class="col-md-9">
<table class="table">
	<thead>
		<tr>
			<td>FORUM</td>
			<td>SUJETS</td>
			<td>MESSAGES</td>
			<td>DERNIERS MESSAGES</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach (App::getInstance()->getTable('category')->all() as $categorie) {
		  foreach (App::getInstance()->getTable('post')->nombre($categorie->id) as $category) :
			?>
		<tr>
			<td><a id="categorie_titre" href="<?= $categorie->Url; ?>"><?= $categorie->titre; ?></a></td>
			<td><?= $category->category ?></td>
		<?php endforeach; }?>
		</tr>
	</tbody>
</table>
</div>
<div class="col-md-1">
	
</div>
	<div class="col-md-2" id="categorie">
	<h4>Les catégories :</h4>
		<ul>
			<?php foreach (App::getInstance()->getTable('category')->all() as $categorie) : ?>

				<li><a id="categorie_titre" href="<?= $categorie->Url; ?>"><?= $categorie->titre; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
</div>