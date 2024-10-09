  <div class="rightcolumn">
    <div class="card">
      <div class="fakeimg" style="height:auto;">
	  <h1><b>Updates</b></h1>
	  <b>
	  
	  <?php $nquery=mysqli_query($con,"select * from `news` ORDER BY id desc LIMIT 5"); ?>
	  <?php
		while ($row = mysqli_fetch_array($nquery)){?>
	<h1>
	
	</h1>
	   </p>
      <div class="fakeimg" style="height:auto;">
	  </div>
	  
	  
	  
	  
	    <marquee height="100"direction="up"><?php echo "<td>".$row['headline']."</td>";?></marquee>
		   
		   
		     <?php
		}?> 
</b>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	  </div>
    </div>
  </div>
