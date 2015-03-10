<?php
require "functions.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (is_logged_in()){	
	if (isset($_COOKIE['a_canvas_username']) || isset($_COOKIE['a_canvas_password'])) {
	unset($_COOKIE['a_canvas_username']);
	unset($_COOKIE['a_canvas_password']);
	setcookie('a_canvas_username', null, 1, '/');
	setcookie('a_canvas_username', null, 1, '/');
	echo "successfully";
	}
	else {
	    echo "False";
	}
if (isset($_SESSION['a_canvas_username']) || isset($_SESSION['a_canvas_password'])) {
	    unset($_SESSION['a_canvas_username']);
	    unset($_SESSION['a_canvas_password']);
	    setcookie('a_canvas_username', null, -1, '/');
	    setcookie('a_canvas_username', null, -1, '/');
	    die("<script>location.href = 'index.php'</script>");
	}
	else {
	    echo "False";
	}

}
session_destroy();
?>