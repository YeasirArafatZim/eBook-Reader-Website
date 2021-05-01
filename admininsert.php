<?php
if(isset($_POST['logout'])){
  session_start();
  session_unset();
  header("Location:adminlogin.php");
}
 ?>

<?php
session_start();
if(isset($_SESSION['user'])){
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-
    fit=no">
    <link rel= "stylesheet" type="text/css" href="css/style.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <style>
    body {
      background-image: url("images/insert.jpg");
      background-color: #cccccc;
    }
    </style>
  </head>


  <body>
    <?php
    $con = new mysqli('localhost', 'root', '', 'ebooks');
    if(isset($_POST["sub"]))
     {
       $stmt = $con->prepare("INSERT INTO bookshelf (Category, ImageName, PdfName, BookName) VALUES (?, ?, ?, ?)");
       $stmt->bind_param("ssss", $category, $imgN, $pdfN, $BName);
        $category = $_POST['category'];
        $imgN = $_FILES['image']['name'];
        $pdfN = $_FILES['pdf']['name'];
        $BName = $_POST['bookname'];
        $stmt -> execute();
        $file1 = $_FILES['image'];
        $file2 = $_FILES['pdf'];
        move_uploaded_file($file1['tmp_name'],"images/BookImage/" . $file1['name']);
        move_uploaded_file($file2['tmp_name'],"images/Book/" . $file2['name']);
     }


     ?>
<div class="row" style="text-align:center;padding-left:44%">
    <h2 style="font-weight:bold; color:white;">Insert a Book </h2>
    <form method="post">
    <input type = "submit" class="btn btn-primary-success" style="background-color:darkred; color:white;margin-left:500%;margin-top:5px;" name="logout" value="Logout">
  </form>
</div>
<div>
    <form action="" enctype= "multipart/form-data" method="post">
        <div>
          <h4 style="color:white;padding-top:8%; text-align:center; font-weight:bold;">Select a Category</h4>

            <select name="category" class="form-control" style="width:30% ; margin-left:35%;">
               <option> -- Select -- </option>
                <option value="Computers & Tech"> Computers & Tech </option>
                <option value="Comics"> Comics </option>
                <option value="History"> History </option>
                <option value="Horror"> Horror </option>
                <option value="Science & Math"> Science & Math </option>
                <option value="Kids"> Kids </option>

            </select>

          </div>
          <div>
            <h4 style="color:white;padding-top:18px; text-align:center;font-weight:bold;">Insert an image</h4>
            <input type = "file" name = "image" style="color:white;padding-left:42%">
          </div>
          <div>
            <h4 style="color:white;padding-top:18px; text-align:center;font-weight:bold;">Insert a PDF Book</h4>
            <input type = "file" name = "pdf"  style="color:white;padding-left:42%" >
          </div>
          <div style="color:white;padding-left:40%;padding-top:18px;">
            <input type = "text" name = "bookname" placeholder="Give a book name" class="form-control" style="width:30%">
        </div>
        <div>
          <input type = "submit" class="btn btn-primary-success" style="background-color:darkgreen; color:white;margin-left:46%;margin-top:10px;" name="sub" value="Submit">
        </div>

    </form>
</div>
  </body>

<?php } ?>
