<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-top: 5px;
        }

        form {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <?php
        include 'koneksi.php';
        $item_id = $_GET['item_id'];
        $product = mysqli_query($conn, "SELECT * FROM product WHERE item_id = $item_id");

        while ($p = mysqli_fetch_array($product)) {
            $item_id = $p["item_id"];
            $item_brand = $p["item_brand"];
            $item_name = $p["item_name"];
            $item_price = $p["item_price"];
            // Add the image file name column (assuming you have a column named 'gambar' in your database)
            $item_image = $p["item_image"];
        }
    ?>
    <form action="proses_edit.php?item_id=<?php echo $item_id ?>" method="post" enctype="multipart/form-data">
        <table class="table">
            <h1>EDIT CUSTOMER</h1>
            <tr>
                <td>Item ID</td>
                <td>:</td>
                <td><input type="number" id="item_id" name="item_id" value="<?php echo $item_id ?>" readonly></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td>:</td>
                <td><input type="text" id="item_brand" name="item_brand" value="<?php echo $item_brand ?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" id="item_name" name="item_name" value="<?php echo $item_name ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" id="item_price" name="item_price" value="<?php echo $item_price ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><img src="<?php echo $item_image; ?>" width="100"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td>
                    <input type="file" id="item_image" name="item_image">
                    <!-- Display the current image -->
                </td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>
</html>