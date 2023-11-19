<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from product where `item_id` = '$_GET[item_id]'");

header("Location:index.php");

?>