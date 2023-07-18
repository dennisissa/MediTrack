<?php
include("menu.php");
?>

  <div class="main">
    <div class="wrapper">
<h1>DASH<span>BOARD</span></h1>
<br><br>

<?php
if(isset($_SESSION['login']))
{
  echo $_SESSION['login'];
  unset ($_SESSION['login']);
}
if(isset($_SESSION['nologin']))

{
  echo $_SESSION['nologin'];
  unset ($_SESSION['nologin']);
}

 ?>
 <br><br>
      <div class="columns">
        <?php
        $sql="select * from admin";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res)
        ?>
        <h1 class="number"><?php echo $count; ?></h1>
        <br/>
        Admins
      </div>
      
      <div class="columns">
        <?php
        $sql="select * from prescription";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res)
        ?>
        <h1 class="number"><?php echo $count; ?></h1>
        <br/>
        Prescriptions
      </div>

      <div class="columns">
        <?php
        $sql="select * from users where isDoc=1";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res)
        ?>
        <h1 class="number"><?php echo $count; ?></h1>
        <br/>
        Doctors
      </div>
      <div class="columns">
        <?php
        $sql="select * from users where isDoc=0";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res)
        ?>
        <h1 class="number"><?php echo $count; ?></h1>
        <br/>
        Patients
      </div>

      


<div class="clearfix"></div>

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
