<?php include 'header.php';
include 'connect.php';?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php
    $id=$_GET['id'];

    $sql="SELECT*from talaba where id={$id}";
$rusult=mysqli_query($connect,$sql);
if(mysqli_num_rows($rusult)>0)
{
    while($row=mysqli_fetch_assoc($rusult)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
          <input type="text" name="name" value="<?php echo $row['name'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="manzil" value="<?php echo $row['manzil'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>

              <?php
              include "connect.php";


              $sql="Select*from studentclass";
              $result=mysqli_query($connect,$sql) or die('Hatolik yuuz  berdi');
    if(mysqli_num_rows($result)>0){
        echo '<select name="class">';
        while($row1=mysqli_fetch_assoc($result)){
            if($row['class']==$row1['cid']){
                $select="Selected";
            }
            else {
                $select="";
            }
            echo "<option {$select} value='{$row1["cid"]}'>{$row1["cname"]} </option>";
        }
          echo '</select>';
    }
              ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="telefon" value="<?php echo $row['telefon'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php
    }
} ?>
    ?>
</div>
</div>
</body>
</html>
