
<?php
include 'header.php';
include 'connect.php';
?>
<div id="main-content">
    <h2>Barcha malumotlar</h2>


    <?php
    $sql="SELECT*FROM talaba inner join  studentclass on talaba.class=studentclass.cid";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){
        ?>
        <table cellpadding="7px">
            <thead>
            <th>Id</th>
            <th>Nomi</th>
            <th>Manzil</th>
            <th>Class</th>
            <th>Telefon</th>
            <th>Amallar</th>
            </thead>
            <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){


                ?>
                <tr>
                    <td> <?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['manzil'] ?></td>
                    <td><?php echo $row['cname'] ?></td>
                    <td><?php echo $row['telefon'] ?></td>
                    <td>
                        <a href='edit.php?id=<?php echo $row['id'];?>'>Edit</a>
                        <a href='delete-inline.php?id=<?php echo $row['id'];?>' class="show_confirm">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }
    else {
        echo "<h1> Malumot mavjud emas</h1>";
    }
    mysqli_close($connect);
    ?>
</div>
</div>



<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
<!--    Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include "add.php";?>
            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
<!--                <button type="submit" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
