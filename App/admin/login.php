<?php include("constants.php");?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/admin.css">
  </head>
  <body>
    <div class="login">
      <h1 class="text-center">Login <span>Page</span></h1>
      <br><br>

      <?php
      if(isset($_SESSION['login']))
      {
        echo $_SESSION['login'];
        unset ($_SESSION['login']);
      }
       ?>
       <br>

<div class="box">

      <form class="text-center" action="" method="post">
        <br>Username: <br><br>
        <input type="text" name="username"class="text-center"placeholder="Enter Username"><br><br>
        <br>Password: <br><br>
        <input type="password" name="password"class="text-center"placeholder="Enter Password"><br><br>

        <input type="submit" name="submit" value="Login" class="btn-up">
        <br><br>
      </form>

    </div>
  </div>
  </body>
</html>


<?php
  if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from admin where username='$username' and password='$password'";

    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);

    if($count==1)
    {
      $_SESSION[ 'login']="Login successful";
      $_SESSION['user']="$username";

      header('location:'.SITEURL.'admin/');
    }
    else
    {
      $_SESSION['login']="Login not successful";
      header('location:'.SITEURL.'admin/login.php');

    }
  }
?>
