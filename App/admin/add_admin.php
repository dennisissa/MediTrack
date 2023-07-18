<?php
include("menu.php");
?>

<div class="main">
  <div class="wrapper">
    <h1>Add <span>Admin</span></h1>
    <br><br>

    <?php
    if (isset($_SESSION['add'])) //checking whether session is set or not
    {
      echo $_SESSION['add']; //display session message
      unset($_SESSION['add']); //remove session message
    }
    ?>

    <br><br>

    <form class="" action="" method="POST">
      <table class="box">
        <tr>
          <td>Full Name:<br><br></td>
          <td><input type="text" name="name" placeholder="Enter Full Name"></td>
        </tr>
        <tr>
          <td>User Name:<br><br></td>
          <td><input type="text" name="username" placeholder="Enter Username"></td>
        </tr>
        <tr>
          <td>Password:<br><br></td>
          <td><input type="password" name="password" placeholder="Enter Password"></td>
        </tr>
        <tr>
          <td colspan="2">
          <input type="submit" name="submit"value="Add Admin"class="btn-up">
        </td>
        </tr>

      </table>

    </form>

  </div>

</div>

<?php
if (isset($_POST['submit']))
{
  //where to pull data from
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];

  //sql query to save info
$sql="insert into admin set
name='$name',
username='$username',
password='$password'
";

  //execute and save query to db
  $res=mysqli_query($conn,$sql)or die(mysqli_error());
  //test for $res
  if ($res==TRUE) {
    $_SESSION['add']="Admin added successfully";
    header("location:".SITEURL.'admin/manage_admin.php');
  }
  else {
    $_SESSION['add']="Failed to add Admin";
    header("location:".SITEURL.'admin/add_admin.php');

  }
}
?>
