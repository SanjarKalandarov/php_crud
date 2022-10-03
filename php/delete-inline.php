<?php
include 'connect.php';
$id=$_GET['id'];
$sql="DELETE  FROM `talaba`  where `id`={$id}";
$result=mysqli_query($connect,$sql);
if($result){
    
    header('Location:index.php');
} else {
    echo "hatolik yuz berdi";
}
   mysqli_close(($connect));