<!DOCTYPE html>
<html>
<head>
<title>Uganda News Center</title>
<link rel="icon" href="img/flag.jfif" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/design.css">
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

</head>
<body>
<div class="header">
<div class ="logo" size="20%">
</div>
  <h1>UGANDA NEWS CENTRE</h1>
   <h2>Accurate, Timely & Informative</h2>
  
</div>
<br>
  
<div class="topnav">
  <div id="navbar">
  <a href="index.php">Home</a>
  <a href="education.php">Education</a>
  <a href="politics.php">Politics</a>
  <a href="entertainment.php">Entertainment</a>
  <a href="nature.php">Nature</a>
   <a href="sports.php">Sports</a>
     <a href="contact.php">Contact</a>
	  <a href="newnews.php">Add News</a>
<a href="about.php">About Us</a>


  </div>

</div>
