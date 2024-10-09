<?php include("auth.php");?>
<?php require('db.php'); ?>
<?php include"includes/header.php";?>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Command Hierarchy</h2>
      <div class="fakeimg" style="height:auto;">
	  <p>Content</p>
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
