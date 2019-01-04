<?php
require('connect.php');
$id_nhac=$_GET['id'];
$sql="delete from baihat where id_nhac='$id_nhac' ";
$query=mysqli_query($con,$sql);
header('location:quanlynhac.php');

?>
