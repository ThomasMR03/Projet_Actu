<?php
namespace App\Table;

use Core\Table\Table;
/**
*
*/
class SujetTable extends Table
{

	public function nombreSujet($id)
	{
		return $this->query(" SELECT forumSujet.titre,
								COUNT(category_id)
								as sujet
								FROM forumSujet
								LEFT JOIN categories
								ON category_id = categories.id
								WHERE categories.id = ?
							", [$id]);
	}

		public function find($id)
	{
		return $this->query(" SELECT forumSujet.id,
								 forumSujet.titre,
									categories.titre as sujet
								FROM forumSujet
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE forumSujet.id = ?
							", [$id], true);
	}

	public function lastBySujet($category_id, $one=false)
	{
		return $this->query(" SELECT forumSujet.id,
								 forumSujet.titre,
									categories.titre as sujet
								FROM forumSujet
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE categories.id = ?
								ORDER BY forumSujet.id DESC
							", [$category_id], $one);
	}
}