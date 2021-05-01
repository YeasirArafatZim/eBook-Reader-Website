
<?php

    $con = mysqli_connect("localhost","root","","ebooks");
   if(isset($_POST["signup"]))
    {

      if(!empty($_POST['FN']) && !empty($_POST['LN']) && !empty($_POST['Nuserid']) && !empty($_POST['Npass']))
      {

        $Fn = mysqli_escape_string($con,$_POST["FN"]);
        $Ln = mysqli_escape_string($con,$_POST["LN"]);
        $userid = mysqli_escape_string($con,$_POST["Nuserid"]);
        $pass = mysqli_escape_string($con,$_POST["Npass"]);
        $pass2 = mysqli_escape_string($con,$_POST["Cpass"]);
        $gen = $_POST['gender'];
        if($pass==$pass2)
        {

            $pass = md5($pass);
            $sql = "INSERT INTO usertable (First_Name,Last_Name,User_ID,Password,Gender) VALUES('$Fn','$Ln','$userid','$pass','$gen')";
            mysqli_query($con,$sql);
            session_start();
            $_SESSION['message'] = "Registration Complete Sign in";
            header("location:index.php");
        }
        else
        {
              session_start();
              $_SESSION['message'] = "Password do not match";
              header("location:index.php");


        }
      }
      else
      {
        session_start();
        $_SESSION['message'] = "Fill up all the fields";
        header("location:index.php");
      }

    }

    if(isset($_POST['signin']))
    {
      $user = $_POST['id'];
      $pass = md5($_POST['password']);
      $sql= "select * from usertable where User_ID='$user' AND Password = '$pass'" ;
      $result = mysqli_query($con,$sql) or die ("Failed to query database".mysql_error());
      $row = mysqli_fetch_array($result);
      if($row['User_ID'] == $user && $row['Password'] == $pass)
      {
         session_start();
         $_SESSION['id'] = $user;
          header("location:home.php");
      }
      else{
        session_start();
        $_SESSION['message'] = "Wrong User ID or Password";
        header("location:index.php");
      }
    }

 ?>
