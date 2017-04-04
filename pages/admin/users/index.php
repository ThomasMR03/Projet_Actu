<?php 

$utilisateurs = App::getInstance()->getTable('User')->all()

 ?>

 <h2>Liste de tout les utilisateurs</h2>

 <table class="table table-bordered">
	<thead>
		<tr>
			<th>Pseudo</th>
			<th>Age</th>
			<th>Date de Naissance</th>
			<th>Rang</th>
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