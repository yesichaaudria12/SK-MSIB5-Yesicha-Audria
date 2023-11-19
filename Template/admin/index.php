<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Elekronikn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  display: flex;
  justify-content: center;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#">Profile</a></li>
</ul>

<!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ms-auto">
        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        <a class="nav-link active text-white" aria-current="page" href="../product/index.php">Profile</a>
    </div> -->
</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * from `product`;");
                ?>
                <center><h1><b>Data Produk Toko Elekronik:</b></h1> </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?tambah=Produk" onclick="myFunction()"> + Tambah Produk </a> 
                <table id="tabledata" class="display">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Merek</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?php echo $data["item_id"] ?> </td>
                            <td> <?php echo $data["item_brand"] ?> </td>
                            <td> <?php echo $data["item_name"] ?></td>
                            <td> <?php echo $data["item_price"] ?></td>
                            <td> <img src="<?php echo $data["item_image"] ?>" width="100px"> </td>
                            <td> <a href="proses_hapus.php?item_id=<?php echo $data["item_id"] ?>" class="label label-danger"> Hapus </a> &nbsp; <a href="edit.php?item_id=<?php echo $data["item_id"] ?>" class="label label-warning"> Ubah </a></td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
                $('#tabledata').DataTable();
            });
    </script>
</body>
</html>