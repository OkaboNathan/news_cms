
<?php include"includes/header.php"; ?>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
	  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
<form action="news1.php" method="post" enctype="multipart/form-data">
    <label for="fname">First Name</label>
    <input type="text" id="firstname" name="firstname" required placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" required placeholder="Your last name..">
	<br>
	<label for="lname">Email</label><br>
    <input type="email" id="lastname" name="email" required placeholder="mycomment@yahoo..">

<br>
    <label for="country">Country</label><br>
    <select id="country" name="country">
      <option value="Uganda">Uganda</option>
      <option value="East Africa">East Afica</option>
      <option value="Others">Others</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" required placeholder="Write something.." style="height:200px"></textarea><br>
    <input type="submit" name="submit" id="submit">
  </form>
</div>

      <div class="fakeimg" style="height:auto;">
	  
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
