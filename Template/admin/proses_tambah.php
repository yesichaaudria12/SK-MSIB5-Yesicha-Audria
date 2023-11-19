<?php
include 'koneksi.php';

// get variable from form input
$item_id = $_POST["item_id"];
$item_brand = $_POST["item_brand"];
$item_name = $_POST["item_name"];
$item_price = $_POST["item_price"];
$item_image = $_POST["item_image"];

// Inisialisasi variabel target_file
$target_file = "";

// Upload Proses
if($_FILES["item_image"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "../../assets/products/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["item_image"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file ". htmlspecialchars(basename($_FILES["item_image"]["name"])). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}


$result = mysqli_query($conn, "INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES ('$item_id', '$item_brand', '$item_name', '$item_price', '$item_image');");

header("Location:index.php");
