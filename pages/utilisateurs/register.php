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
 	


 <h2>Inscription :</h2>

 <form action="" method="post">
 	<input type="text" name="name" placeholder="Votre Pseudo">
 	<input type="text" name="password" placeholder="Votre mot de passe">
 	<input type="date" name="date_de_naissance" placeholder="Date de naissance">
 	<input class="btn btn-danger" type="submit">
 </form>