<?php
$date = date('Y-m-d');

if (!empty($_POST)) {
if (isset($_POST['name'], $_POST['password'], $_POST['date_de_naissance'], $_POST['mail'], $_POST['date_inscription'])){
	if(empty($_POST['name']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['name'])){
			echo "Votre pseudo n'est pas valide (alpha_numerique)"; //Echo pour pseudo non valide
		}else{
 	$req=App::getInstance()->getTable('User')->create([

 	'name' => $_POST['name'],
 	'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
 	'mail' => $_POST['mail'],
 	'date_inscription' => $_POST['date_inscription'],
 	'date_de_naissance' => $_POST['date_de_naissance']]);
 	if ($req) {
				header('location: index.php?p=Login');
				}
		}
 	}
 }
?>
 	




<div class="row" style="width: 99%;">
<div class="col-md-4"></div>

<div class="col-md-4" id="inscription">
 <h2>Inscription</h2>
 <form action="" method="post">
 	<h3>Pseudonyme & Mail</h3>
 	<input type="text" name="name" placeholder="Votre Pseudo"><br>
 	<input type="text" name="mail" placeholder="Votre Mail">
 	<h3>Mot de passe</h3>
 	<input type="text" name="password" placeholder="Votre mot de passe"><br>
 	<h3>Date de naissance</h3>
 	<input type="date" name="date_de_naissance"><br>
 	<input type="hidden" name="date_inscription" value="<?= $date ?>">
 	<button type="submit">Valider</button>
 </form>
 </div>

 </div>