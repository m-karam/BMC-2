<?php
require_once "functions.php";
if (!is_logged_in()) {
	require "views/index.view.php";
}
else{
	/*$connection = connect($config);
	$userQuery = query("SELECT * FROM users WHERE username = :username",
		array("username"=> $_SESSION['a_canvas_username'])
		,$connection);
	$canvasUserId = $userQuery[0]['id'];
	$canvasQuery = query("SELECT * FROM canvases WHERE user_id = :id",
		array("user_id"=> $canvasUserId),
		$connection);*/
	require "views/panel.view.php";
}
?>