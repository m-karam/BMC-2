<?php
require_once "canvas.class.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'config.php';
function connect($config){
	try {
		$conn = new PDO('mysql:host='.$config['DB_HOST'].';dbname='.$config['DB_NAME'], $config['DB_USERNAME'], $config['DB_PASSWORD']);
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
		
	} 
	catch (Exception $e) {
		return false;
	}
}
function query($query, $bindings, $connection){
	$statement = $connection->prepare($query);
	$statement->execute($bindings);
	$result = $statement->fetchAll();
	return $result ? $result : false;
}
function is_logged_in(){
	$username = false;
	if(isset($_COOKIE['a_canvas_username']) && isset($_COOKIE['a_canvas_password']))
	{$username = $_COOKIE['a_canvas_username'];}
	elseif (isset($_SESSION['a_canvas_username']) && isset($_SESSION['a_canvas_password'])) {
	$username = $_SESSION['a_canvas_username'];
	}
	return $username;
}
function login_validator($connection){
	if ($connection){
		$users_query = query("SELECT * FROM `users` WHERE username = :username",
			array(
				'username' => $_POST['username']
			), $connection);
		if ($users_query) {
			if(password_verify($_POST['password'] ,$users_query[0]['password']))
				{$validated = $users_query;}
			else {$validated = false;}
		}
		else{
			$validated = false;
		}
	}
	return $validated;
}
function insert($query, $bindings, $connection){
		$statement = $connection->prepare($query);
		return $statement->execute($bindings);
}
function signUp_creator($connection){
	if ($connection) {
		insert("INSERT INTO `users` (name, username, password, email)
					VALUES (:name, :username, :password, :email)",
					array(
				'name' => $_POST['name'],
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'email' => $_POST['email']
					),
					$connection
					);
	}
}
function signUp_existed($connection){
	if ($connection){
		$users_query = query("SELECT username, email FROM `users` WHERE username = :username || email = :email",
			array(
				'username' => $_POST['username'],
				'email' => $_POST['email']
			), $connection);
		if($users_query)
		{
			$user_credentials_exists = array("username" =>$users_query[0]['username'], "email" =>$users_query[0]['email']);
			return $user_credentials_exists;
		}
		else{
			return false;
		}
	}

}
function relativeURL () {
	$dir = str_replace('\\', '/', __DIR__);
    return substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
}
function send_email_confirmation($email){
	echo "Thank you for registration";
}
function get_the_id($connection){
	if (isset($_SESSION['a_canvas_username'])) {
			$theId = query("SELECT id FROM USERS WHERE username = :username", 
				array(
					"username" =>$_SESSION['a_canvas_username']
					)
				, $connection);
			if ($theId) {
				 	return (int) $theId[0]['id'];
			}
		}	
}
function viewCanvas($param, $value, $connection, $what){
	return query("SELECT $what FROM `canvases` WHERE $param =:value",
	array('value'=>$value)
	,$connection);
}
?>