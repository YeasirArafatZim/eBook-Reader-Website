<?php
if(isset($_POST['logout'])){
  session_start();
  session_unset();
  session_destroy();
  header("Location:index.php");
}
 ?>

<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link href="css/style1.css" rel="stylesheet" type="text/css">


	<title>Home</title>
</head>
<body>
<div class="row">
	<div class="col-md-11" style="background-color:#006400;">

		<h4 style="color:white;padding-top:.5%;text-align:center;padding-left:10px">Welcome to Our E-Book Website</h4>
  </div>
  <form method="post">
  <div class="col-md-1" style="background-color:#006400;padding-top:6px;padding-bottom:6px;">

    <input type = "submit" class="btn btn-primary-success" style="background-color:#0C3A00; color:white;" name="logout" value="Logout">
  </div>
</form>
	</div>
</div>
	<div class="col-md-12" style="background-color:#EEDFCC">
		<div class="col-md-4" id="logo">
			<img src="images\1.png">
		</div>
		<div class="col-md-8" style="padding-top:3%;padding-left:20%">
			<form action="search.php" method="post">
				<input class="searchbar" type="text" name="search" placeholder="       Search your desired books">
				<input class="searchbtn" type="submit" name="submit" value="Search">
			</form>

		</div>
	</div>
	<div class="col-md-12" id="options" style="background-color:#008080;height:10%">
		<ul>
      <li id="lists"><a href="home.php">Home</a></li>
			<li id="lists"><a href="categories.php">Categories</a></li>
			<li id="lists"><a href="latestbooks.php">Latest Books</a></li>
			<li id="lists"><a href="aboutus.html">About Us</a></li>
		</ul>
	</div>
	<div class="col-md-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

			    <div class="item active">
					<img src="images/slide1.jpg" alt="Los Angeles" style="width:100%; height:10%;">
					<div class="carousel-caption" id="tagline">
					    <h2>A few clicks is all it takes</h2>
					</div>
			    </div>
			    <div class="item">
					<img src="images/slide2.jpg" alt="Chicago" style="width:100%;">
					<div class="carousel-caption" id="tagline">
					    <h2>All the best for a whole lot less.</h2>
					</div>
			    </div>

			    <div class="item">
					<img src="images/slide3.jpg" alt="New York" style="width:100%;">
					<div class="carousel-caption" >
					    <h2>Find it and love it.</h2>
					</div>
			    </div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="col-md-12" id="catagory">
		<h3>Select a Category</h3>
	</div>
	<div class="col-md-12" id="catagories1">
    <a href="computer&Tech.php">
    <div class="col-md-4" id="comics">
			<h3 id="tag">Computers & Tech</h3>
				<img src="images/comp1.jpeg">
			</a>
		</div>
    	<a href="comics.php">
		<div class="col-md-4" id="comics">
			<h3 id="tag">Comics</h3>

				<img src="images/comics.png">
			</a>
		</div>
    <a href="history.php">
		<div class="col-md-4" id="comics">
			<h3 id="tag">History</h3>
				<img src="images/history.jpg">
			</a>
		</div>
	</div>
	<div class="col-md-12" id="catagories1">
    <a href="horror.php">
		<div class="col-md-4" id="comics">
			<h3 id="tag">Horror</h3>
				<img src="images/horror.jpg">
			</a>
		</div>
    <a href="science&math.php">
		<div class="col-md-4" id="comics">
			<h3 id="tag">Science & Math</h3>
				<img src="images/science.jpg">
			</a>
		</div>
  	<a href="kids.php">
		<div class="col-md-4" id="comics">
			<h3 id="tag">Kids</h3>
				<img src="images/kids.jpg">
			</a>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12" id="bottompart">
		<center style="color:white;font-size:40px">Contacts</center>
		<div id="info">
			<img src="images/add.png" align="left" style="padding-top:10px;">
			<h3 style="color:white;font-size:20px;margin-left:6% ;">Happy Homes Mosjid, Tejgaon Industrial Area, Dhaka</h3>
		</div>
		<div id="info">
			<img src="images/call.png" align="left" style="padding-top:10px;">
			<h3 style="color:white;font-size:20px;margin-left:6%">+880-1758069883 , +880-1521404605</h3>
		</div>
		<div id="info">
			<img src="images/email.png" align="left" style="padding-top:10px; padding-bottom: 15px;">
			<h3 style="color:white;font-size:20px;margin-left:6%;">yeasirarafatzim@gmail.com</h3>
		</div>

	</div>
  <div class="col-md-12" style="color:white; background-color:#181810; text-align:center; width:100%;">
      <h4>Created by: Md. Yeasir Arafat Zim | © copyright 2019 | privacy policy</h4>
  </div>



</body>
</html>
<?php } ?>
