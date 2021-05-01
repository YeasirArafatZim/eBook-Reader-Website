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


	<title>Categories</title>
</head>
<div class="col-md-12" id="catagory">
  <h3 style="background-color:#008080">Select a Category</h3>
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

<div class="col-md-12" id="catagory">
  <h3 style="background-color:#008080">So many books, so little time</h3>
</div>
</head>

<?php } ?>
