<form action="" method="post">
	<header class="canvasHeader">
		<label for="canvasName">Canvas name</label>
		<input id="canvasName" placeholder="Canvas name" type="text" name="canvasName" value="<?php if(!empty($contents[0]['name'])) echo $contents[0]['name'];?>" disabled>
	</header>
	<div id="canvas">
		<div id="upper">
			<div class="narrow">
				<h3>Key Partners</h3>
				<textarea disabled name="KeyPartners"><?php if(!empty($contents[0]['KeyPartners'])) echo $contents[0]['KeyPartners'];?></textarea>
			</div>
			<div class="narrow">
				<div class="box">
					<h3>Key Activities</h3>
					<textarea disabled name="KeyActivities"><?php if(!empty($contents[0]['KeyActivities'])) echo $contents[0]['KeyActivities'];?></textarea>
				</div>
				<div class="box">
					<h3>Key Resources</h3>
					<textarea disabled name="KeyResources"><?php if(!empty($contents[0]['KeyResources'])) echo $contents[0]['KeyResources'];?></textarea>
				</div>
			</div>
			<div class="narrow">
				<h3>Value Proposition</h3>
				<textarea disabled name="ValueProposition"><?php if(!empty($contents[0]['ValueProposition'])) echo $contents[0]['ValueProposition'];?></textarea>
			</div>
			<div class="narrow">
				<div class="box">
					<h3>Customer Relationships</h3>
					<textarea disabled name="CustomerRelationships"><?php if(!empty($contents[0]['CustomerRelationships'])) echo $contents[0]['CustomerRelationships'];?></textarea>
				</div>
				<div class="box">
					<h3>Channels</h3>
					<textarea disabled name="Channels"><?php if(!empty($contents[0]['Channels'])) echo $contents[0]['Channels'];?></textarea>
				</div>
			</div>
			<div class="narrow">
				<h3>Customer Segments</h3>
				<textarea disabled name="CustomerSegments"><?php if(!empty($contents[0]['CustomerSegments'])) echo $contents[0]['CustomerSegments'];?></textarea>
			</div>
		</div>
		<div id="lower">
			<div class="small">
				<h3>Cost Structure</h3>
				<textarea disabled name="CostStructure"><?php if(!empty($contents[0]['CostStructure'])) echo $contents[0]['CostStructure'];?></textarea>
			</div>
			<div class="small">
				<h3>Revenue Streams</h3>
				<textarea disabled name="RevenueStreams"><?php if(!empty($contents[0]['RevenueStreams'])) echo $contents[0]['RevenueStreams'];?></textarea>
			</div>
		</div>
	</div>
</form>