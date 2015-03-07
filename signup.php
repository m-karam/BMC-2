<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "functions.php";
$connection = connect($config);
$user_credentials_exists ="";
if(is_logged_in()):
	header("Location: index.php");
else:
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$users_existed = signUp_existed($connection);
		if ($users_existed) {
			$user_credentials_exists = "This username or email address is already taken, Please choose another one";
			require "views/header.php";
?>
<div id="signing">
<h1>Create a new account</h1>
	<p><?php echo $user_credentials_exists;?></p>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Full name" required>
		<input type="text" name="username" placeholder="Username" required>
		<input type="email" name="email" placeholder="E-mail Address" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" value="Sign Up" required>
	</form>
	<p>Already have an account? <a href="signin.php">Log in</a> now</p>
</div>
<?php 
require "views/footer.php";
}
else{
	if(signUp_creator($connection)){
		send_email_confirmation($_POST['email']);
	}
}
}
endif;
?>
