<?php
session_start();
if(isset($_SESSION['id'])){
header("location:home.php");
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

      <title>
            Log In
      </title>

  </head>
<body>

      <div class ="row">
        <div class="col-md-7 col-sm-6 hidden-xs">
          <img src ="images/login1.jpg" >
          </div>

          <div class="col-md-5 col-sm-6" style="background-color:white;">
              <div class="container">
                <h1 style="font-weight:bold; text-align: center; padding-top:20px;">
                      Ebook
                </h1>
                <h4>Sign in with your Ebook ID</h4>
                <form action="log1.php" method="post">
                  <div class= "row justify-content-around" style=" padding-bottom: 10px;">
                       <input type="text" name="id" placeholder="User ID" class="form-control" style="width:40%">
                       <input type = "password" name="password" placeholder="Password" class="form-control" style="width:40%">
                  </div>
                  <div style="padding-left: 12px;">
                  <input type="submit" name="signin" value="Sign in" class="btn btn-primary-success" style="background-color:#808080; color:white;">
                </div>
                </form>

                <div>
                    <img src="images/line.jpg" style="width:90%;height:90%; padding-left:80px;padding-top:30px">
                </div>


                <?php
                    
                    if(isset($_SESSION['message'])){
                    echo "<div id = 'error_msg'>" . $_SESSION['message'] . "</div>";
                    unset($_SESSION['message']);
                    }
                 ?>


                  <h4 style="padding-top: 35px;">Create a New Account</h4>
                  <form action="log1.php" method="post">
                  <div class= "row justify-content-around">
                       <input type="text" name="FN" placeholder="First Name" class="form-control" style="width:40%">
                       <input type = "text" name="LN" placeholder="Last Name" class="form-control" style="width:40%">
                  </div>

                  <div style="padding:12px;">
                       <input type="text" name="Nuserid" placeholder="User ID" class="form-control" >
                  </div>
                  <div style="padding-left:12px;">
                      <input type = "password" name="Npass" placeholder="Password" class="form-control" style="width:98%">
                  </div>
                  <div style="padding:12px;">
                       <input type = "password" name = "Cpass" placeholder="Confirm Password" class = "form-control" >
                  </div>

                      <p style="padding-left:12px; margin-bottom:0px">Gender</p>
                  <div class= "row " style="padding-left:12px;">
                    <div class="col-md-6">
                      <input type="radio" name="gender" value="Male"><label style="padding-left:5px"> Male</label></div>
                      <div>
                      <input type="radio" name="gender" value="Female"><label style="padding-left:5px"> Female</label>
                    </div>
                  </div>
                  <div style="padding-left:12px;">
                  <input type="submit" name="signup" value="Sign Up" class="btn btn-primary-success" style="background-color:#808080; color:white;">
                </div>
                </form>

          </div>
      </div>
    </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
