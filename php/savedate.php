<?php
include  'connect.php';
$sname=$_POST['name'];
$smanzil=$_POST['manzil'];
$sclass=$_POST['class'];
$stelefon=$_POST['telefon'];

$sql="INSERT INTO  talaba(`name`,`manzil`,`class`,`telefon`) values 
      ('{$sname}','{$smanzil}','{$sclass}','{$stelefon}')";
$result=mysqli_query($connect,$sql);
if($result){
    header("Location: index.php");
}
mysqli_close($connect);