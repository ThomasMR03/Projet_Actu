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
									 users.date_de_naissance
							  FROM   users");
	}

}