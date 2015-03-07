<?php require "header.php";?>
<div id="panel">
<h2>Build Your Business</h2>
	<a href="canvas.php" class="create">New canvas</a>
	<h2>Your Canvases</h2>
	<table class="canvasList">
		<tr>
			<td>No.</td>
			<td class="middle">Canvas</td>
		</tr>
				<tr>
			<td>1</td>
			<td class="middle">Khotot canvas</td>
		</tr>
		<?php /*
		if($canvasQuery):
			foreach ($canvasQuery as $canvas) :?>
			<tr>
				<td><?php echo $canvas['id']; ?></td>
				<td><?php echo $canvas['name']; ?></td>
			</tr>
		<?php endif;*/?>
	</table>
</div>
<?php require "footer.php";?>