<?php
include("menu.php");
?>

  <div class="main">
    <div class="wrapper">
<h1>Manage <span>Admin</span></h1>

<br/><br/>

<?php
  if (isset($_SESSION['add']))
  {
    echo $_SESSION['add']; //display session message
    unset($_SESSION['add']); //remove session message
  }

  if (isset($_SESSION['delete']))
  {
    echo $_SESSION['delete']; //display session message
    unset($_SESSION['delete']); //remove session message
  }

  if (isset($_SESSION['update']))
  {
    echo $_SESSION['update']; //display session message
    unset($_SESSION['update']); //remove session message
  }
  if (isset($_SESSION['notfound']))
  {
    echo $_SESSION['notfound']; //display session message
    unset($_SESSION['notfound']); //remove session message
  }
  if (isset($_SESSION['nomatch']))
  {
    echo $_SESSION['nomatch']; //display session message
    unset($_SESSION['nomatch']); //remove session message
  }
  if (isset($_SESSION['changepwd']))
  {
    echo $_SESSION['changepwd']; //display session message
    unset($_SESSION['changepwd']); //remove session message
  }
?>

<br><br>

<a href="add_admin.php"class="btn-main">Add <span>Admin</span></a>
<br/><br/><br/>


<table class="tbl">
  <tr>
    <th>No.</th>
    <th>Full name</th>
    <th>Username</th>
    <th>Actions</th>
  </tr>

  <?php

  $sql="select * from admin";
  $res=mysqli_query($conn,$sql);

  if($res==TRUE)
  {
    $count=mysqli_num_rows($res);
    $sn=1;

    if($count>0)
    {
      while($rows=mysqli_fetch_assoc($res))
      {
        $id=$rows['id'];
        $name=$rows['name'];
        $username=$rows['username'];
        ?>

        <tr>
          <td><?php echo $sn++; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $username; ?></td>
          <td>
            <a href="<?php echo SITEURL; ?>admin/update_password.php?id=<?php echo $id;?>"class="btn-up">Change Password</a>
            <a href="<?php echo SITEURL; ?>admin/update_admin.php?id=<?php echo $id;?>"class="btn-up">Update Admin</a>
            <a href="<?php echo SITEURL; ?>admin/delete_admin.php?id=<?php echo $id;?>"class="btn-del">Delete Admin</a>
        </td>
        <tr>
        <?php
      }
    }
    else
    {

    }
  }

  ?>

</table>

</div>
</div>

  <div class="footer">
    <div class="wrapper">
    <p>Dennis Issa Onyango x Jane Mwangi</p>

    </div>
  </div>
</div>

  </body>
</html>
