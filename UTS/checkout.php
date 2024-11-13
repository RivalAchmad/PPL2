<html>
    <head>
        <title>Detail Produk</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="section3">
            <div class="checkout">
                <img src="steak.jpg" alt="Steak">
                <form action="hitung.php" method="GET">
                    Nama<br>
                    <input type="text" name="nama" value="<?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?>" readonly/><br/>
                    Harga<br>
                    <input type="text" name="harga" value="<?php echo isset($_GET['harga']) ? $_GET['harga'] : ''; ?>" readonly/><br/>
                    Deskripsi<br>
                    <input type="text" name="deskripsi" value="<?php echo isset($_GET['deskripsi']) ? $_GET['deskripsi'] : ''; ?>" readonly/><br/>
                    jumlah      : <input type = "text" name = "jumlah" required/><br>
                    <a class="tombol2 tombol-beli2" href="produk.php">Kembali</a>
                    <button type="submit">BAYAR</button>
                </form>
            </div>
        </div>
    </body>
</html>