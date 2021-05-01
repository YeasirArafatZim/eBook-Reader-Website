<?php
    $con = mysqli_connect("localhost","root","","ebooks");
    if(isset($_POST['submit']))
    {
      $user = $_POST['id'];
      $pass = md5($_POST['password']);
      $sql= "select * from admin where id='$user' AND password = '$pass'" ;
      $result = mysqli_query($con,$sql) or die ("Failed to query database".mysql_error());
      $row = mysqli_fetch_array($result);
      if($row['id'] == $user && $row['password'] == $pass)
      {
          session_start();
          $_SESSION['user'] = $user;
          header("location:admininsert.php");
      }
      else{
        $_SESSION['mess'] = "Invalid User_ID and Password";
      }
    }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <link rel= "stylesheet" type="text/css" href="css/style.css" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-
    fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <style>
body {
  background-image: url("images/admin.jpg");
  background-color: #cccccc;
}
</style>

      <title>
            Log In
      </title>

  </head>
<body>
  <h4 style="text-align:center;padding-top:17%; font-weight:bold;">Admin Login</h4>
  <form method="post">
    <div class= "row justify-content-around" style=" padding-bottom: 20px;padding-top:30px;">
         <input type="text" name="id" placeholder="User ID" class="form-control" style="width:40%">
    </div>
    <div class= "row justify-content-around" style=" padding-bottom: 10px;">
         <input type = "password" name="password" placeholder="Password" class="form-control" style="width:40%">
    </div>
    <?php
        if(isset($_SESSION['mess'])){
        echo "<div id = 'error_msg' style='width:300px;'>" . $_SESSION['mess'] . "</div>";
        unset($_SESSION['mess']);
        }
     ?>
    <div style="padding-left: 47%;padding-top:20px;">
    <input type="submit" name="submit" value="Sign in" class="btn btn-primary-success" style="background-color:black; color:white;width:100px;">
  </div>
  </form>
</body>
