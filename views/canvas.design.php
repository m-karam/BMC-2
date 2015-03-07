<form action="" method="post">
<?php foreach($theCanvasContents as $theContents):?>
	<header class="canvasHeader">
		<label for="canvasName">Canvas name</label>
		<input id="canvasName" placeholder="Canvas name" type="text" name="canvasName" value="<?php
			if(!empty($theContents['name'])) echo $theContents['name'];
		?>">
		<input type="submit" value="submit">
		<input type="reset" value="reset">
	</header>
	<div id="canvas">
		<div id="upper">
			<div class="narrow">
				<h3>Key Partners</h3>
				<textarea name="KeyPartners"><?php
				if(!empty($theContents['KeyPartners'])) echo $theContents['KeyPartners'];
				?></textarea>
			</div>
			<div class="narrow">
				<div class="box">
					<h3>Key Activities</h3>
					<textarea  name="KeyActivities"><?php
				if(!empty($theContents['KeyActivities'])) echo $theContents['KeyActivities'];
				?></textarea>
				</div>
				<div class="box">
					<h3>Key Resources</h3>
					<textarea name="KeyResources"><?php
				if(!empty($theContents['KeyResources'])) echo $theContents['KeyResources'];
				?></textarea>
				</div>
			</div>
			<div class="narrow">
				<h3>Value Proposition</h3>
				<textarea name="ValueProposition"><?php
				if(!empty($theContents['ValueProposition'])) echo $theContents['ValueProposition'];
				?></textarea>
			</div>
			<div class="narrow">
				<div class="box">
					<h3>Customer Relationships</h3>
					<textarea name="CustomerRelationships"><?php
				if(!empty($theContents['CustomerRelationships'])) echo $theContents['CustomerRelationships'];
				?></textarea>
				</div>
				<div class="box">
					<h3>Channels</h3>
					<textarea name="Channels"><?php
				if(!empty($theContents['Channels'])) echo $theContents['Channels'];
				?></textarea>
				</div>
			</div>
			<div class="narrow">
				<h3>Customer Segments</h3>
				<textarea name="CustomerSegments"><?php
				if(!empty($theContents['CustomerSegments'])) echo $theContents['CustomerSegments'];
				?></textarea>
			</div>
		</div>
		<div id="lower">
			<div class="small">
				<h3>Cost Structure</h3>
				<textarea name="CostStructure"><?php
				if(!empty($theContents['CostStructure'])) echo $theContents['CostStructure'];
				?></textarea>
			</div>
			<div class="small">
				<h3>Revenue Streams</h3>
				<textarea name="RevenueStreams"><?php
				if(!empty($theContents['RevenueStreams'])) echo $theContents['RevenueStreams'];
				?></textarea>
			</div>
		</div>
	</div>
<?php endforeach;?>
</form>