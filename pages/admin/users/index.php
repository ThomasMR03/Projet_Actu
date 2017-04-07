<?php 

$utilisateurs = App::getInstance()->getTable('User')->all()

 ?>


<div class="row" style="width: 99%">
<div class="col-md-2"></div>

<div class="col-md-8" id="zoneAdmin">
 <h2 style=" border-bottom:6px solid  rgb(199,211,29); padding-bottom: 10px;">Liste de tout les utilisateurs</h2>

 <table class="table">
	<thead>
		<tr>
			<th class="description" style="text-align: center;">Pseudo</th>
			<th class="description" style="text-align: center;">Age</th>
			<th class="description" style="text-align: center;">Date de Naissance</th>
			<th class="description" style="text-align: center;">Rang</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($utilisateurs as $utilisateur): ?>
			<tr>
				<td><?= $utilisateur->name ?></td>
				<td><?= $utilisateur->age ?></td>
				<td><?= $utilisateur->date_de_naissance ?></td>
				<td><?= $utilisateur->membre_rang ?></td>
				<td>
					<form action="admin.php?p=users.delete" method="post">
						<button class="btn btn-danger" type="submit" value="<?=$utilisateur->id?>" name="id">DELETE</button>
					</form>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>