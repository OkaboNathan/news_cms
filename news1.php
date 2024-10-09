<?php
	require('db.php');
	    if (isset($_POST['submit'])){
		$firstname = stripslashes($_POST['firstname']);
		$firstname = mysqli_real_escape_string($con,$firstname);
		$lastname = stripslashes($_POST['lastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);
		$country = stripslashes($_POST['country']);
		$country = mysqli_real_escape_string($con,$country);
		//
		$subject = stripslashes($_POST['subject']);
		$subject = mysqli_real_escape_string($con,$subject);
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($con,$email);
        $query = "INSERT into `contact` (firstname, lastname,country,subject,email) VALUES ('$firstname','$lastname','$country','$subject','$email')";
        $result = mysqli_query($con,$query);
		        if($result){
					echo "<script>
					alert(\"Successful Submission\");
					window.location = 'contact.php';
					</script>";
		}else{
					echo "<script>
					alert(\"Submisssion failed. Check the Entires and Try Again\");
					window.location = 'contact.php';
					</script>";
		}
	}
?>