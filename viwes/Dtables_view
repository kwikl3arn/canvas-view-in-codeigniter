<?php
 for($i=0;$i<count($mm);$i++)
 {
 $dataP[]=array("label"=>$mm[$i]['animal_breed'], "y"=>$mm[$i]['animal']);
 }
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "NUmber of animals"
	},
	subtitles: [{
		text: "DEC 2018"
	}],
	data: [{
		type: "doughnut",
		yValueFormatString: "#,##0",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataP, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="<?php echo base_url()?>Assets/canvasjs.min.js"></script>
</body>
</html>   
