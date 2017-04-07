<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['titre'] && $_POST['contenu'] && $_POST['auteur'] && $_POST['category_id'] && $_POST['date_creation'] && $_POST['img'])) {
			$req = $app->getTable('post')->create(
				["titre"=>$_POST['titre'], 
				"contenu"=>$_POST['contenu'],
				"auteur"=>$_POST['auteur'],
				"date_creation"=>$_POST['date_creation'],
				"category_id"=>$_POST['category_id'],
				"img"=>$_POST['img']
				]);
			if ($req) {
				////message Flash
				header('location: admin.php?p=posts.edit');
				?>
				<div class="alert alert-success">Bien enregistré</div>
				<?php
			}
		}
	}
?>

<div class="col-md-4">
	
</div>
<div class="col-md-4"  id="zoneAdmin">
<h2  class="description" style="text-align: center; border-bottom:6px solid  rgb(199,211,29); padding-bottom: 20px; margin-bottom: 20px;">Ajouter un article</h2>
<form method="post">
	<input type="hidden" name="id" value="">
	<input class="form-control" type="text" name="titre" value="" placeholder="Nouveau Titre" style="margin-bottom: 20px;">
	<input type="URL" name="img" placeholder="URL de l'image"  style="margin-bottom: 20px;">
	<input type="text" name="auteur" value="<?= $_SESSION['Auth']?>">
	<textarea class="form-control" name="contenu" placeholder="Contenu Articles" ></textarea>
	<div class="radio">
	<p style="text-align: center; border-bottom:6px solid  rgb(199,211,29); padding-bottom: 20px; margin-bottom: 20px; font-size: 20px; margin-top: 30px;">Choississez une catégorie :</p>
          <label>
            <input type="radio" name="category_id" id="optionsRadios1" value="1"> Infos <br>
            <input type="radio" name="category_id" id="optionsRadios2" value="2"> Fake News <br>
            <input type="radio" name="category_id" id="optionsRadios3" value="3"> Nouveautés
          </label>
        </div>
    <input type="date" name="date_creation" style="color: black; margin-bottom: 20px;"><br>
	<input class="btn btn-warning" type="submit" name="" style="margin-bottom: 80px;">
</form>
<a href="admin.php"  id="buttonAction">Retour vers la page Admin</a>
</div>
<div class="col-md-4">
	
</div>

