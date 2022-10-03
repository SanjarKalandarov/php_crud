<?php include 'header.php';
include "connect.php";?>


<div id="main-content">
    <h2>Ma'lumotlarni o'chirish</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
    if(isset($_POST['deletebtn'])){
        $id=$_POST['id'];
        $sql="DELETE FROM talaba where id={$id}";
        $result=mysqli_query($connect,$sql);
        if($result){
            header('Location:index.php');
        }else{
            echo 'hatolik yuz berdii';
        }
    }
    ?>
</div>
