<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="tentangkami.php">Tentang Kami</a>
         <?php
            session_start();
            if (isset($_SESSION["username"])) {
                echo "<a>" . $_SESSION["username"] . "</a>";
                }
        ?>
    </div>
        <div class="sections">
            <?php
                $productName = 'Mainan helicopter';
                $productImage = 'helikopter.jpg';
                $productPrice = 'RP 250.000';
                $productDescription = 'Mainan RC Helikopter Yang Dapat Terbang Ini Menggunakan Sensor Dibagian Bawah Helikopter, Ketika Helikopter Akan Turun. Letakkan Tangan Dibagian Bawah Helikopter, Maka Helikopter Akan Bergerak Keatas Kembali. Bisa Juga Menggunakan Remote Dengan Menekan Tombol Up.';

                echo "<img src='$productImage' alt='$productName' style='width: 300px;'>";
                echo "<h2>$productName</h2>";
                echo "<p>Harga: $productPrice</p>";
                echo "<p>$productDescription</p>";
            ?>
        </div>
    </div>
</body>
</html>
