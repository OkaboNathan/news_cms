<?php require('db.php'); ?>
<?php include"includes/header.php"; ?>
<head>
<style>
img {
  max-width: 100%;
  height: auto%;
}
</style>
</head>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
	  <p>
<?php $nquery=mysqli_query($con,"select * from `news` where type = 'Entertainment' ORDER BY id desc"); ?>
	  <?php
		while ($row = mysqli_fetch_array($nquery)){?>
	<h1>
	<?php echo "<td>".$row['headline']."</td>";?>
	</h1>
	   </p>
      <div class="fakeimg" style="height:auto;">
	  <img src="<?php echo $row['photo']; ?>" width="1500" height="600"></td><br><br>
	<?php echo "<td>".$row['content']."</td>";?><br><br>
	  </div>
	  <?php
		}?> 
    </div> 	
  </div>
<?php include"includes/facebook.php"; ?>
</div>
</div>
<?php include"includes/footer.php"; ?>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
