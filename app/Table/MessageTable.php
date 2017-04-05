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
		return $this->query(" SELECT forumMessage.id,
								 	 forumMessage.message,
									 forumSujet.titre as sujet
								FROM forumMessage
								LEFT JOIN forumSujet
									ON sujet_id = forumSujet.id
								WHERE forumSujet.id = ?
								ORDER BY forumMessage.id DESC
							", [$category_id], $one);
	}

}