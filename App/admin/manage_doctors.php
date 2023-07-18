<?php
include("menu.php");
?>

  <div class="main">
    <div class="wrapper">
<h1>Manage <span>Doctors</span></h1>

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



<table class="tbl">
  <tr>
    <th>No.</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Number</th>
  </tr>

  <?php

  $sql="select * from users where isDoc=1";
  $res=mysqli_query($conn,$sql);

  if($res==TRUE)
  {
    $count=mysqli_num_rows($res);
    $sn=1;

    if($count>0)
    {
      while($rows=mysqli_fetch_assoc($res))
      {
        $firstName=$rows['firstName'];
        $lastName=$rows['lastName'];
        $email=$rows['email'];
        $phone=$rows['phone'];
        ?>

        <tr>
          <td><?php echo $sn++; ?></td>
          <td><?php echo $firstName; ?></td>
          <td><?php echo $lastName; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $phone; ?></td>
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
