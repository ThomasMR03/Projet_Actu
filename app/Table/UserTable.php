<?php
namespace App\Table;

use Core\Table\Table;

/**
* 
*/
class UserTable extends Table
{

	public function register()
	{
		return $this->query(" INSERT users.id,
									 users.name
									 users.password
									 users.mail
									 users.date_inscription
									 users.date_de_naissance
							  FROM   users");
	}

	public function find($id)
	{
		return $this->query("SELECT users.id,
									 users.name,
									 users.password,
									 users.mail,
									 DATE_FORMAT(date_inscription, '%d/%m/%Y') as date_inscription_fr,
									 DATE_FORMAT(date_de_naissance, '%d/%m/%Y') as date_naissance_fr,
									 users.membre_rang,
									 users.image
									 FROM users WHERE id = ?",[$id], true);
	}
}