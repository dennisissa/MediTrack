<?php include('menu.php');?>
<div class="main">
  <div class="wrapper">
    <h1>Update <span>Admin</span></h1>
    <br><br>

    <?php
      $id=$_GET['id'];
      $sql="select * from admin where id=$id";
      $res=mysqli_query($conn,$sql);

      if ($res==true)
      {
        $count=mysqli_num_rows($res);
        if($count==1)
        {
          $row=mysqli_fetch_assoc($res);
          $name=$row['name'];
          $username=$row['username'];
        }
        else
        {
          header('location:'.SITEURL.'admin/manage_admin.php');
        }
      }
    ?>


    <form class="" action="" method="post">
      <table class=box>

        <tr>
          <td>Full Name:<br><br></td>
          <td>
          <input type="text" name="name" value="<?php echo $name; ?>">
        </td>
        </tr>
        <tr>
          <td>Username:<br><br></td>
          <td>
          <input type="text" name="username" value="<?php echo $username; ?>">
        </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update Admin"class="btn-up">
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
  $name=$_POST['name'];
  $username=$_POST['username'];

  $sql="update admin set
  name='$name',
  username='$username'
  where id='$id'
  ";

  $res=mysqli_query($conn,$sql);

  if ($res==true)
  {
    $_SESSION['update']="Updated successfully";
    header('location:'.SITEURL.'admin/manage_admin.php');
  }
  else
  {
    $_SESSION['update']="Failed to update";
    header('location:'.SITEURL.'admin/manage_admin.php');
  }
}
?>
