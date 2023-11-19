<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page About Us</title>
    <link rel="stylesheet" type="text/css" href="css/style_about.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        section {
            text-align: center;
            margin: 20px;
        }

        .feedback-form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .feedback-form h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        textarea,
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type] body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        section {
            text-align: center;
            margin: 20px;
        }

        .feedback-form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .feedback-form h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        textarea,
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <h1>Welcome to our about us</h1><br>
        <p style="text-align: justify;">
        Selamat datang di toko kami,
        Dengan berbagai pilihan produk, mulai dari smartphone kelas atas hingga pilihan terjangkau yang tetap menawarkan performa yang handal, kami yakin Anda akan menemukan apa yang Anda cari. Produk unggulan kami mencakup fitur-fitur terbaru seperti kamera mutakhir, tampilan berkualitas tinggi, daya tahan baterai yang luar biasa, dan inovasi terkini dalam dunia teknologi seluler.</p>
        <p style="text-align: justify;">
        Kami berkomitmen untuk memberikan nilai tambah kepada pelanggan kami. Dapatkan diskon eksklusif, penawaran bundel, dan promo spesial lainnya yang akan membuat setiap pembelian Anda menjadi lebih hemat.
        <br>
        Setelah pembelian, layanan purna jual kami akan memberikan dukungan teknis dan bantuan apapun yang Anda butuhkan. Kami peduli terhadap pengalaman pengguna Anda dari awal hingga akhir.</p>
        <p style="text-align: justify;">
        Selamat berbelanja di toko kami! Temukan dan rasakan inovasi terbaru dalam dunia handphone hanya di sini.</p><br>

    </section>

    <div class="feedback-form">
        <h2>Beri Saran dan Rating</h2>
        <form id="feedbackForm" action="index.php" method="post" onsubmit="return showPopup()">
            <label for="feedback">Saran Anda:</label><br>
            <textarea id="feedback" name="feedback" rows="2" cols="50"></textarea><br>

            <label for="rating">Rating:</label><br>
            <input type="number" id="rating" name="rating" min="1" max="5"><br><br>

            <input type="submit" value="Kirim">
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        function showPopup() {
            alert("Terimakasih atas saran dan rating Anda!");
            return true;
        }
    </script>
</body>

<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">&copy; Copyrights 2023. Design By<a href="#" class="color-second"> Yesicha Audria </a></p>
</div>

</html>