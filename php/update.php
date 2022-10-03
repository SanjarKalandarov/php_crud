<?php include 'header.php';
include "connect.php";?>
<div id="main-content">
    <h2>Malumotlarni tahrirlash</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
 <?php
 if(isset($_POST['showbtn'])){
     $id=$_POST['id'];


     $sql="SELECT * FROM `talaba` where id={$id}";
     $rusult=mysqli_query($connect,$sql);
     var_dump(mysqli_num_rows($rusult));
     if(mysqli_num_rows($rusult)>0){


         while($row=mysqli_fetch_assoc($rusult)){

//var_dump($row);
 ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['id'];?>" />
            <input type="text" name="name" value="<?php echo $row['name'];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="manzil" value="<?php echo $row['manzil'];?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
    <?php
    $sql="Select * from studentclass";
    $result=mysqli_query($connect,$sql) or die('Hatolik yuuz  berdi');
    if(mysqli_num_rows($result)>0){
        echo '<select name="class">';
        while($row1=mysqli_fetch_assoc($result)){
            if($row['class']===$row1['cid']){
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
            <input type="text" name="phone" value="<?php echo $row['telefon'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php }}}?>
</div>
