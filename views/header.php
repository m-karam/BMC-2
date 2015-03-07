<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "functions.php";
$path = pathinfo(relativeURL ());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>BMC</title>
<link rel="stylesheet" type="text/css" href="views/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="views/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery('#canvas textarea').on('focus',function(){
			jQuery(this).addClass('sticky');
		})
	});
</script>
</head>
<body>
	<header class="header">
		<a href="<?php echo $path['dirname']; ?>">
		<img src="views/images/logo.svg" alt="Business Model Canvas">
		<span>Business Model Canvas</span>
		</a>
		<?php if (!is_logged_in()): ?>
		<ul>
			<li><a href="index.php#signing">Register</a></li>
			<li><a href="#">About</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="signin.php">Sign in</a></li>
		</ul>
		<?php else: 
		$logged_username = is_logged_in();
		?>
		<ul>
		<span>Hello <strong><?php echo $logged_username;?></strong>, How are things?</span>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
		<?php endif ?>
	</header>