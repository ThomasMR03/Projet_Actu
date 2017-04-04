<div class="row">
	<div class="col-md-12">
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
</div>