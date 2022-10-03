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
</body>
</html>
