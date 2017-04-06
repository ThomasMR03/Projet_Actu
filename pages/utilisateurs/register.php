<?php

if ($_POST) {
if (isset($_POST['name'], $_POST['password'], $_POST['date_de_naissance']))
 {
 	$req=App::getInstance()->getTable('User')->create([

 	'name' => $_POST['name'],
 	'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
 	'date_de_naissance' => $_POST['date_de_naissance']]);
 	if ($req) {
				header('location: index.php?p=Login');
				?>
				<?php

 	}
 }
 } ?>
 	




<div class="row" style="width: 99%;">
<div class="col-md-4"></div>

<div class="col-md-4" id="inscription">
 <h2>Inscription</h2>
 <form action="" method="post">
 	<h3>Pseudonyme</h3>
 	<input type="text" name="name" placeholder="Votre Pseudo"><br>
 	<h3>Mot de passe</h3>
 	<input type="text" name="password" placeholder="Votre mot de passe"><br>
 	<h3>Date de naissance</h3>
 	<input type="date" name="date_de_naissance" placeholder="Date de naissance"><br>
 	<button type="submit">Valider</button>
 </form>
 </div>

 </div>