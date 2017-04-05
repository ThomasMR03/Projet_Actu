<?php
namespace App\Table;

use Core\Table\Table;

/**
* 
*/
class MessageTable extends Table
{

	public function lastByMessage($category_id, $one=false)
	{
		return $this->query(" SELECT messages.id,
								 	 messages.message,
								 	 messages.sujet_id,
									 sujets.titre as sujet
								FROM messages
								LEFT JOIN sujets
									ON sujet_id = sujets.id
								WHERE sujets.id = ?
								ORDER BY messages.id DESC
							", [$category_id], $one);
	}
}