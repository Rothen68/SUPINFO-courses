<?php
require_once(__DIR__.'/classes/manager/PdoCommentManager.class.php');
require_once(__DIR__.'/classes/entities/User.class.php');

session_start();

if(!isset($_SESSION['user']))
{
	header('Location: ./login.php');
}
else
{	

	$CM = new PdoCommentManager();
	$CM->addComment($_POST['content'], $_GET['id'], $_SESSION['user']);

	echo json_encode(array('date' => date('d/m/Y H:i:s', time()), 'author'=> $_SESSION['user']->firstname. ' '.$_SESSION['user']->lastname, 'body' => $_POST['content']));
}

?>