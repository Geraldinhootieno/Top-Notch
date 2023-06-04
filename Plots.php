<?php
  $db = mysqli_connect("localhost", "root", "", "images");
  $msg = "";
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
  	$Text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$target = "Plot/".basename($image);

  	$sql = "INSERT INTO Plots (image, Text) VALUES ('$image', '$Text')";
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM Plots");
?>

<html>
<head>
	<title>Top-Norch Deals</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="Stylesheet" href="Style.css" type=text/css>
	<body background= "download1.jpg">
	<div class="menu-bar">
      <label class="logo"><img src="Logo.jpg" width="40%" length="40%"></label>
	<ul>
		<li class="active"><a href="#">Busines Proposals</a></li>
		<li><a href="#">Busines Articles</a></li>
		<li><a href="#">Services <i class="fas fa-caret-down"></i></a>
		<div class="sub-menu-1">
	<ul>
		<li><a href="Deals.php">Motor Vehicles Sales</a></li>
		<li><a href="#">Motor Cycle Sales</a></li>
        <li><a href="#">Insurance Services</a></li>
        <li><a href="Plots.php">House sales</a></li>
        <li><a href="Plots.php">Plots for sale</a></li>
	
	</ul>
</div></li>
		<li><a href="#">Blogs</a></li>
	</ul>
</div>
<style type="text/css">
#content{
	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 35%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
	</style>
	</head>
	<body>
		<br><br>
	<h2 align="center"><u>PLOTS FOR SALE</u></h2>
		<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='Plot/".$row['Image']."' >";
      	echo "<p>".$row['Text']."</p>";
      echo "</div>";
    }
    ?>
<form method="POST" action="Plots.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>

		<br><br>
	 
		<br><br>

<footer class="footer">
  <div class="container1">
    <div class="row1">
      <div class="footer-col">
        <h4>Other Services</h4>
        <ul>
          <li><a href="#">Digital Marketing</a></li>
          <li><a href="#">Business Proposal</a></li>
          <li><a href="#">Business Plan</a></li>
          <li><a href="#">Business website</a></li>
          <li><a href="#">Business Newsletters</a></li>
          <li><a href="#">Blogs</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Sales $ Marketing deals</h4>
        <ul>
          <li><a href="Deals.php">Motor Vehicles Sales</a></li>
           <li><a href="#">Motor Cycle Sales</a></li>
            <li><a href="Plots.php">House sales</a></li>
            <li><a href="Plots.php">Plots for sale</a></li>
            <li><a href="#">Insurance Services</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <ul>
          <li><a href="#">Location:</a></li>
          <li><a href="#">Mezz floor-Maa Towers Mai Mahiu Road</a></li>
          <li><a href="#">Call Us: </a></li>
          <li><a href="tel: +254 703-359-140"> +254 703-359-140</a></li>
          <li><a href="tel: 010 592 5200">010592 5200</a></li>
          <li><a href="#">Email US:</a></li>
          <li><a href=mailto: topnotchagency3@gmail.com> topnotchagency3@gmail.com</a></li>
          <li><a href="#">P.O BOX 60-20500</a></li>
          <li><a href="#">Mezzanine Floor</a></li>
          <li><a href="#">Maa Towers - Narok</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Follow us</h4>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100076232707195"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>

	</body>
</html>