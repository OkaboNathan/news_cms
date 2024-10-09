<?php
include('db.php');
		//image upload
		$fileinfo=PATHINFO($_FILES["photo"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;
		//end of image upload
$id=$_GET['id'];
$type = $_POST['type'];
$date = $_POST['date'];
$headline = $_POST['headline'];
$content = $_POST['content'];
$instructor = "UPDATE `news` SET type='$type', date='$date', headline='$headline', content='$content', photo='$location' WHERE id='$id'";
	$res = mysqli_query($con,$instructor);
	if (!$res){
			echo "<script>
                alert(\"Failure Updating. Wrong Data\");
                window.location = 'allnews.php';
            </script>";
		}else{
			echo "<script>
                alert(\"Successful Editing\");
                window.location = 'allnews.php';
            </script>";
		}
?>
