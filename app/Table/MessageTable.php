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
								 	 forumMessage.titre,
								FROM forumMessage
								WHERE forumMessage = ?
								ORDER BY forumMessage.id DESC
							", [$category_id], $one);
	}

}