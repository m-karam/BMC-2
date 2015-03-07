<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
else return;
require "functions.php";
$not_valid ="";
$connection = connect($config);
if(is_logged_in()):
header("Location: index.php");
else:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$validated = login_validator($connection);
	if($validated)
	{
		foreach ($validated as $users) 
		{
				if (isset($_POST['remember'])) 
				{
					setcookie("a_canvas_username", $users['username'], time()+946080000, 'http://localhost');
					setcookie("a_canvas_password", $users['password'], time()+946080000, '/','http://localhost');
					$_SESSION["a_canvas_username"] = $users['username'];
					$_SESSION["a_canvas_password"] = $users['password'];
					die("<script>location.href = 'index.php'</script>");
				}
				else
				{
					$_SESSION['a_canvas_username'] = $users['username'];
					$_SESSION['a_canvas_password'] = $users['password'];
					die("<script>location.href = 'index.php'</script>");
				}
		}
	}
	else
	{
		$not_valid = "Username or password is incorrect";
	}
}
require "views/header.php";
endif;
?>
<div id="signing">
<h1>Login to your account</h1><?php echo $not_valid; ?>
	<form action="" method="post">
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="checkbox" id="remember" name="remember"><label for="remember">Remember me for next login</label><br>
		<input type="submit" value="Sign In" required>
	</form>
</div>
<?php require "views/footer.php";?>