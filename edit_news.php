
<?php require('db.php'); ?>
<?php include"includes/header.php"; ?>
<?php
	include('db.php');
	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from `news` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>News</h2>
      <div class="fakeimg" style="height:auto;">
	  <form method="POST" action="editnews.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	 			<?php
	$result = "SELECT * FROM news WHERE id ='$id'";
	$query	= mysqli_query($con,$result);
	while($row = mysqli_fetch_array($query))
	{
	?>
	Headline:<input type="text" name="headline" required STYLE="text-transform:uppercase" value="<?php echo $row['headline']; ?>"><br><br>
	News Category:<select name="type" STYLE="text-transform:uppercase" value="<?php echo $row['type']; ?>"><br><br>
	<option><?php echo $row['type']; ?></option>
	<option>Politics</option>
	<option>Nature</option>
	<option>Sports</option>
	<option>Education</option>
	<option>Entertainment</option>
	</select>
			<br>
			<label>Picture:</label><input type="file" name="photo" accept="image/*" value="<?php echo $row['photo']; ?>">
			<img src="<?php echo $row['photo']; ?>" width = "150" height = "150"><br><br>
		   News Details:<textarea name="content" col="250" width="350" required STYLE="text-transform:uppercase"> <?php echo $row['content']; ?></textarea><br>
		    Date:<input type="date" name="date" required STYLE="text-transform:uppercase" value="<?php echo $row['date']; ?>"><br>
		   <input type="submit" name="save">&nbsp;&nbsp;&nbsp;
		   <input type="reset" name="">
	  </form>
<?php	
}?>
	  </div>
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
