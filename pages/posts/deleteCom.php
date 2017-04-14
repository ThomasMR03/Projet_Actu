<?php App::getInstance()->getTable('commentaire')->delete($_POST['id']);
header('location: index.php') ?>