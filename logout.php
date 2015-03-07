<?php
require "functions.php";
session_start();
if (is_logged_in()){	
	if (isset($_COOKIE['a_canvas_username']) || isset($_COOKIE['a_canvas_password'])) {
	    unset($_COOKIE['a_canvas_username']);
	    unset($_COOKIE['a_canvas_password']);
	    setcookie('a_canvas_username', null, -1, '/');
	    setcookie('a_canvas_username', null, -1, '/');
	    return true;
	}
	else {
	    return false;
	}
if (isset($_SESSION['a_canvas_username']) || isset($_SESSION['a_canvas_password'])) {
	    unset($_SESSION['a_canvas_username']);
	    unset($_SESSION['a_canvas_password']);
	    setcookie('a_canvas_username', null, -1, '/');
	    setcookie('a_canvas_username', null, -1, '/');
	    die("<script>location.href = 'index.php'</script>");
	}
	else {
	    return false;
	}

}
session_destroy();
?>