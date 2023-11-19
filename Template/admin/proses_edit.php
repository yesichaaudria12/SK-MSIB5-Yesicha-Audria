<?php 
include 'koneksi.php';

// get variable from form input
$item_id = $_POST["item_id"];
$item_brand = $_POST["item_brand"];
$item_name = $_POST["item_name"];
$item_price = $_POST["item_price"];

// Inisialisasi variabel target_file
$target_file = "";

if ($_FILES["item_image"]["size"] != 0) {   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "../../assets/products/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["item_image"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file " . htmlspecialchars(basename($_FILES["item_image"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

// Mengganti $item_image menjadi $target_file pada query SQL
$result = mysqli_query($conn, "UPDATE `product` SET `item_id` = '$item_id', `item_brand` = '$item_brand', `item_name` = '$item_name', `item_price` = '$item_price', `item_image` = '$target_file' WHERE `item_id` = '$_GET[item_id]'");

// Pindahkan atau hapus echo berikut jika diperlukan


header("Location: index.php");
?>
