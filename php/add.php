<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Yangi ma'lumot qo'shish</h2>
    <form class="post-form" action="./savedate.php" method="post">
        <div class="form-group">
            <label>Nomi</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Manzili</label>
            <input type="text" name="manzil" />
        </div>
        <div class="form-group">
            <label>Guruh</label>
            <select name="class">
                <option value="" selected disabled>Guruh  tanlang</option>
                <?php
                include "connect.php";
                $sql="Select*from studentclass";
                $result=mysqli_query($connect,$sql) or die('Hatolik yuuz  berdi');

                while($row=mysqli_fetch_assoc($result)){
                ?>

                    <option value="<?php echo  $row['cid']; ?>"><?php echo  $row['cname'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Telefon</label>
            <input type="text" name="telefon" />
        </div>
        <input class="submit" type="submit" value=Saqlash"  />
    </form>
</div>
</div>
</body>
</html>
