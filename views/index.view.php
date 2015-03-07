<?php require "views/header.php";?>
	<div id="landing">
		<div id="landing-text">
			<h3>Build Your Business Model Canvas</h3>
			<p>For Free</p>
			<a href="#signing">Sign up Now!</a>
		</div>
		<div id="landing-image">
			<img src="views/images/can.png" alt="Canvas" width="250">
		</div>
	</div>
	<div id="signing">
		<h1>Create a new account</h1>
			<form action="signup.php" method="post">
				<input type="text" name="name" placeholder="Full name" required>
				<input type="text" name="username" placeholder="Username" required>
				<input type="email" name="email" placeholder="E-mail Address" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" value="Sign Up" required>
			</form>
			<p>Already have an account? <a href="signin.php">Log in</a> now</p>
</div>
<?php require "views/footer.php";?>