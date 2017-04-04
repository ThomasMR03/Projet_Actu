<?php
namespace App\Entity;
use Core\Entity\Entity;

/**
*
*/
class SujetEntity extends Entity
{
	public function getUrl()
	{
		return 'index.php?p=forum.single&id='.$this->id;
	}

}