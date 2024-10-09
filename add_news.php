<?php
	require('db.php');
	    if (isset($_POST['submit'])){
		//image upload
		$fileinfo=PATHINFO($_FILES["photo"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;
		//
		$type = stripslashes($_POST['type']);
		$type = mysqli_real_escape_string($con,$type);
		$date = stripslashes($_POST['date']);
		$date = mysqli_real_escape_string($con,$date);
		$headline = stripslashes($_POST['headline']);
		$headline = mysqli_real_escape_string($con,$headline);
		//
		$content = stripslashes($_POST['content']);
		$content = mysqli_real_escape_string($con,$content);
        $query = "INSERT into `news` (type, date,content,headline,photo) VALUES ('$type','$date','$content','$headline','$location')";
        $result = mysqli_query($con,$query);
		        if($result){
					echo "<script>
					alert(\"Successful Submission\");
					window.location = 'allnews.php';
					</script>";
		}else{
					echo "<script>
					alert(\"Submisssion failed. Data already exist\");
					window.location = 'newnews.php';
					</script>";
		}
	}
?>