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
		return $this->query(" SELECT sujets.titre,
								COUNT(category_id)
								as sujet
								FROM sujets
								LEFT JOIN categories
								ON category_id = categories.id
								WHERE categories.id = ?
							", [$id]);
	}

	public function totalMessageSujet($id)
	{
		return $this->query(" SELECT
								COUNT(sujet_id)
								as message
								FROM messages
								LEFT JOIN sujets
								ON sujet_id = sujets.id
								WHERE sujets.id = ?
							", [$id]);
	}

	public function find($id)
	{
		return $this->query(" SELECT messages.id,
								  	messages.message,
								 	messages.sujet_id,
									sujets.titre
								FROM messages
								LEFT JOIN sujets
									ON sujet_id = sujets.id
								WHERE sujets.id = ?
							", [$id], true);
	}

	public function lastBySujet($category_id, $one=false)
	{
		return $this->query(" SELECT sujets.id,
								 	 sujets.titre,
									 categories.titre as sujet
								FROM sujets
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE categories.id = ?
								ORDER BY sujets.id DESC
							", [$category_id], $one);
	}
}