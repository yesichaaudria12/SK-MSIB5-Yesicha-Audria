<?php
$item_brand = $_POST['item_brand'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

// Handle uploaded file
$item_image = $_FILES['item_image']['name'];  // Get the name of the uploaded file
$target_dir = "../../assets/products/";  // Specify the directory where you want to store the uploaded file
$target_file = $target_dir . basename($item_image);  // Specify the path of the uploaded file on the server

// Move the uploaded file to the specified directory
move_uploaded_file($_FILES['item_image']['tmp_name'], $target_file);

include 'koneksi.php';
mysqli_query($conn, "INSERT INTO `product`(`item_brand`, `item_name`, `item_price`, `item_image`)
VALUES('$item_brand', '$item_name', '$item_price', '$target_file');");

header("Location: index.php");
?>
