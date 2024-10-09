
<?php require('db.php'); ?>
<?php include"includes/header.php"; ?>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>News</h2>
      <div class="fakeimg" style="height:auto;">
	  

<form action="add_news.php" method="post" enctype="multipart/form-data">
               <div class="row">
			   Headline:
			   <input type="text" name = "headline"><br><br>
                    <div class="form-group  col-lg-3">
                        <label for="">News Category</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Select News Category</option>
                            <option value="Education">Education</option>
                            <option value="Politics">Politics</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Nature">Nature</option>
                            <option value="Sports">Sports</option>
                        </select>
                    </div><br><br>
					<label>News Content</label><br>
<textarea name="content" rows="4" cols="50"></textarea><br><br>
 <label>Picture:</label><input type="file" name="photo" accept="image/*"><br><br><br><br>
<input type="date" name="date" placeholder="Date" required /><br><br>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit">
                    </div>
               </div>
            </form>
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
