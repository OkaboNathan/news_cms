
<?php require('db.php');?>
<?php
$id=$_GET['id'];
$nquery=mysqli_query($con,"select * from `news` where id='$id'");
while ($row =mysqli_fetch_array($nquery)){
$name=$row['name'];
}		
$SQL="DELETE FROM news WHERE id='$id' LIMIT 1";
$result= mysqli_query($con,$SQL);
if($result){
	header("Location: allnews.php");
	}else{
	header("Location: allnews.php");	
	}
?>