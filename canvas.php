<?php
require "functions.php";
$connection = connect($config);
if(!is_logged_in()){
header("Location: signin.php");
}
else{
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$theCanvas = new canvas;
		$theCanvas -> name = $_POST['canvasName'];
		$theCanvas -> KeyPartners = $_POST['KeyPartners'];
		$theCanvas -> KeyActivities = $_POST['KeyActivities'];
		$theCanvas -> KeyResources = $_POST['KeyResources'];
		$theCanvas -> ValueProposition = $_POST['ValueProposition'];
		$theCanvas -> CustomerRelationships = $_POST['CustomerRelationships'];
		$theCanvas -> Channels = $_POST['Channels'];
		$theCanvas -> CustomerSegments = $_POST['CustomerSegments'];
		$theCanvas -> CostStructure = $_POST['CostStructure'];
		$theCanvas -> RevenueStreams = $_POST['RevenueStreams'];
		$theCanvas -> user_id = get_the_id($connection);

		$addNewCanvas = insert(
			"INSERT INTO `canvases`
			(name, KeyPartners, KeyActivities, KeyResources, ValueProposition, CustomerRelationships, Channels, CustomerSegments, CostStructure, RevenueStreams, user_id)
			VALUES
			(:name, :KeyPartners, :KeyActivities, :KeyResources, :ValueProposition, :CustomerRelationships, :Channels, :CustomerSegments, :CostStructure, :RevenueStreams, :user_id)"
			,array(
				'name' =>$theCanvas -> name,
				'KeyPartners' => $theCanvas -> KeyPartners,
				'KeyActivities' =>$theCanvas -> KeyActivities,
				'KeyResources' =>$theCanvas -> KeyResources,
				'ValueProposition'=>$theCanvas -> ValueProposition,
				'CustomerRelationships'=>$theCanvas -> CustomerRelationships,
				'Channels'=>$theCanvas -> Channels,
				'CustomerSegments'=>$theCanvas -> CustomerSegments,
				'CostStructure'=>$theCanvas -> CostStructure,
				'RevenueStreams'=>$theCanvas -> RevenueStreams,
				'user_id'=>$theCanvas -> user_id
				),$connection);
		if ($addNewCanvas) {
			require "views/header.php";?>
			<div id="sucessedCanvas">
				<h2>Your canvas is added successfully</h2>
				<a href="viewcanvas.php?id=<?php echo "2";?>">View</a> Edit
			</div>
			<?php
		}
	}
	else{
		require "views/header.php";
		require "views/canvas.view.php";
		require "views/footer.php";
	}
}
?>