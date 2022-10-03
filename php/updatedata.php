<?php
include  'connect.php';
$id=$_POST['id'];

$sname=$_POST['name'];
$smanzil=$_POST['manzil'];
$sclass=$_POST['class'];
$stelefon=$_POST['telefon'];
//var_dump($id);
$sql="UPDATE  talaba SET name='{$sname}' ,manzil='{$smanzil}',class='{$sclass}',telefon='{$stelefon}' where id='{$id}'";
$result=mysqli_query($connect,$sql);
if($result){
    header("Location: index.php");

}

mysqli_close($connect);