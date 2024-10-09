<?php require('db.php'); ?>
<?php include"includes/header.php"; ?>
<?php $nquery=mysqli_query($con,"select * from `news` ORDER BY id desc"); ?>


<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>All news News</h2>
      <div class="fakeimg" style="height:auto;">
		<table id="example" class="display nowrap" width="100%">
				<thead>
					<table id="example" class="display nowrap" width="100%">
				<thead>
				<tr>
				<th>Image</th>
				<th>Headline</th>
				<th>News Category</th>
				<th>Content</th>
				<th>Date of Publication</th>
				<th>OPERATION</th>
			</tr>
		</thead>
		<tbody>
	  <?php
		while ($row = mysqli_fetch_array($nquery))
		{
			echo "<tr>";?>
			<td><img src="<?php echo $row['photo']; ?>" width="40" height="40"></td>
			<?php
			echo "<td>".$row['photo']."</td>";
			echo "<td>".$row['headline']."</td>";
			echo "<td>".$row['type']."</td>";
			echo "<td>".$row['date']."</td>";
			?>
			<td><a href="delnews.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to Delete ')" >Delete</a>||
			<a href="edit_news.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to Update Data ')" >Update</a>
			</td>
			<?php
		}?>
		<tfoot></tfoot>
		</tbody>
	</table>
	
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
