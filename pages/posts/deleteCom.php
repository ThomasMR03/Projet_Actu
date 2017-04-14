<?php App::getInstance()->getTable('commentaire')->delete($_POST['id']);

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
?>