<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Tambahkan Data Produk</h3>
                <form action="proses_product.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Apakah Anda yakin ingin menambahkan data produk ini?');">
                    <table class="table">
                        <tr>
                            <td>
                                Merek
                            </td>
                            <td>
                                <input type="text" name="item_brand" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Produk
                            </td>
                            <td>
                                <input type="text" name="item_name" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Harga
                            </td>
                            <td>
                                <input type="number" name="item_price" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gambar
                            </td>
                            <td>
                                <input type="file" name="item_image" id="item_image" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
