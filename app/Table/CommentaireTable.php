<?php
namespace App\Table;

use Core\Table\Table;

/**
* 
*/
class CommentaireTable extends Table
{

	public function lastByCommentaire($category_id, $one=false)
	{
		return $this->query(" SELECT *
								FROM commentaires
								LEFT JOIN articles
									ON articles_id = articles.id
								WHERE articles.id = ?
								ORDER BY commentaires.id DESC
							", [$category_id], $one);
	}
}