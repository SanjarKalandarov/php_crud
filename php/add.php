
<div class="container">

    <form class="post-form" action="./savedate.php" method="post">
        <div class="form-group">
            <label>Nomi</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label>Manzili</label>
            <input type="text" class="form-control"  name="manzil" />
        </div>
        <div class="form-group">
            <label>Guruh</label>
            <select name="class" class="form-control"  >
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
            <input type="text" class="form-control"  name="telefon" />
        </div>
<!--        <input class="submit" class="form-control"  type="submit" value=Saqlash"  />-->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>


