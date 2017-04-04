

<div id="titre_admin">
	<h1>Panel Administrateur</h1>
	<?php if(isset($_SESSION['Auth'])): ?>
        <h4 id="hello_admin">Bonjour <?= $_SESSION['Auth']; ?></h4>
        <p id="hello_admin">Soyez le bienvenue sur votre espace d'administration !</p>
        <?php else : ?>
        <h4 id="hello_admin"> Vous êtes déconnecter.</h4>
        <?php endif; ?>
</div>

<table class="table">
	<thead>
		<tr>
			<td>DESC DE L'ACTION</td>
			<td>ACTION</td>
		</tr>
	</thead>
	<tbody>
		<tr>
		<td>Ajouter un nouvel article</td>
		<td>
		<a href="admin.php?p=posts.add" id="btn_admin" class="btn btn-primary">Ajouter un article</a>
		</td>
		</tr>

		<tr>
			<td>Editer votre article ou supprimer le.</td>
			<td>
				<a href="admin.php?p=posts.edit" id="btn_admin" class="btn btn-danger">Modifier les articles</a>
			</td>
		</tr>
		<tr>
		<td>Ajouter une nouvelle catégorie</td>
		<td>
		<a href="admin.php?p=category.add" id="btn_admin" class="btn btn-primary">Ajouter une catégorie</a>
		</td>
		</tr>

		<tr>
			<td>Editer votre catégorie ou supprimer la.</td>
			<td>
				<a href="admin.php?p=category.edit" id="btn_admin" class="btn btn-danger">Modifier les catégories</a>
			</td>
		</tr>

		<tr>
			<td>Liste de tout les utilisateurs</td>
			<td>
				<a href="admin.php?p=users.index" id="btn_admin" class="btn btn-danger">Liste des utilisateurs</a>
			</td>
		</tr>
	</tbody>
</table>