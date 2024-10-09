<?php  
	include 'db.php';
	$did = $_GET["id"];
	$query = "DELETE FROM users WHERE id=$did";
	$result = mysqli_query($con, $query);
	if($result){
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header("Location: users.php");
	}else{
		echo "<script type='text/javascript'>alert('Failure Deleting!')</script>";
		header("Location: users.php");
	}
?>