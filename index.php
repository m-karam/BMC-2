<?php
require_once "functions.php";
if (!is_logged_in()) {
	require "views/index.view.php";
}
else{
	$connection = connect($config);
	require "views/panel.view.php";
}
?>