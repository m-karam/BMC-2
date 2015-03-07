<?php
require "functions.php";
$connection = connect($config);
if(!is_logged_in()){
header("Location: signin.php");
}
else{
	if (isset($_GET['id'])) {
		$contents = viewCanvas('id', $_GET['id'], $connection, '*');
		require "views/header.php";
		require "views/canvas.content.php";
		require "views/footer.php";
	}
else{
	echo "Not selected";
}
}
?>