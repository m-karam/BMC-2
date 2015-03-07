<?php require "header.php";?>
<div id="panel">
<h2>Build Your Business</h2>
<div id="panelCanvases">
<?php
$userId=get_the_id($connection);
$canvasesList = viewCanvas('user_id', $userId, $connection, 'id, name');
if($canvasesList)
	{
		foreach ($canvasesList as $key) {
			echo '<a href="view.php?id='.$key['id'].'" class="canLink">'.$key['name'].'</a>';
		}
	}
	else{
		echo "You don't have canvases yet.";
	}
?>

<a href="canvas.php" class="create">+</a>
</div>
</div>
<?php require "footer.php";?>