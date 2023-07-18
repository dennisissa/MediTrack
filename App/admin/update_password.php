<?php include('menu.php');?>

<div class="main">
  <div class="wrapper">
    <h1>Change <span>Password</span></h1>
    <br><br>

    <?php

      if (isset($_GET['id']))
      {
        $id=$_GET['id'];
      }
    ?>

    <form class="" action="" method="post">
      <table class=box>

        <tr>
          <td>Current Password:</td>
          <td>
          <input type="password" name="current" placeholder="Current Password">
        </td>
        </tr>
        <tr>
          <td>New Password:</td>
          <td>
          <input type="password" name="new" placeholder="New Password">
        </td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td>
          <input type="password" name="confirm" placeholder="Confirm Password">
        </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Change Password"class="btn-up">
          </td>
        </tr>

      </table>

    </form>
  </div>
</div>

<?php

if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $current=$_POST['current'];
  $new=$_POST['new'];
  $confirm=$_POST['confirm'];

  $sql="select * from admin where id='$id' and password='$current'";

  $res=mysqli_query($conn,$sql);

  if($res==true)
  {
    $count=mysqli_num_rows($res);

    if($count==1)
    {
      if ($new==$confirm)
      {
         $sql2="update admin set
         password='$new'
         where id='$id'
         ";

         $res2=mysqli_query($conn,$sql2);
         if($res2==true)
         {
           $_SESSION['changepwd']="Password changed";
           header('location:'.SITEURL.'admin/index.php');

         }
         else
         {
           $_SESSION['changepwd']="Password not changed";
           header('location:'.SITEURL.'admin/index.php');

         }
      }
      else
      {
        $_SESSION['nomatch']="New passwords do not match";
        header('location:'.SITEURL.'admin/index.php');

      }
    }
    else
    {
      $_SESSION['notfound']="That is not the current password";
      header('location:'.SITEURL.'admin/index.php');
    }
  }
}

?>
