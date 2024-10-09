<?php require('db.php'); ?>
<?php /*

$nquery=mysqli_query($con,"select * from `news` where type = 'Politics' ORDER BY id desc"); ?>

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
			<?php
		}
		*/
		?>