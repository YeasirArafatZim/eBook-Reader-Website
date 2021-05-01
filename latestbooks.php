<?php
session_start();
if(isset($_SESSION['id'])){
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-
    fit=no">
    <link rel= "stylesheet" type="text/css" href="css/style1.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <style>
    body{

        background-image: url("images/bookshelf.jpeg");

    }
    </style>

  </head>


  <body>
    <div class="col-md-12" id="catagory" style="background-color:#006400;">
      <h3 style="padding-top:9px;">Latest Books</h3>
    </div>
    <?php
    $connection =mysqli_connect('localhost','root');
    mysqli_select_db($connection,'ebooks');
       $q = "Select * from bookshelf where Book_ID = (select MAX(Book_ID) from bookshelf)";
       $command1 = mysqli_query($connection,$q);
       $n =mysqli_fetch_array($command1);
       $v = 7;
       $book = $n['Book_ID'];
        $query = "Select BookName,PdfName,ImageName from bookshelf where Book_ID = '" . $book . "'" ;
        $command= mysqli_query($connection,$query);
        while($row =mysqli_fetch_array($command))
        {
    ?>
        <div class="col-md-4" id="book" style="float:left;width:337px;padding-top:4px;padding-bottom:27px;">

          <a href="images/Book/<?php echo $row['PdfName']; ?>" target="" type="application/pdf">
            <img src="images/BookImage/<?php echo $row['ImageName'] ; ?>" style="height:250px;width:200px;">
          </a>
        </div>
      <?php
      if($v == 0){
        break;
      }
      $v--;
      $book--;
      $query = "Select BookName,PdfName,ImageName from bookshelf where Book_ID = '" . $book . "'" ;
      $command= mysqli_query($connection,$query);
    }
      ?>
  </body>

<?php } ?>
