<html>
    <head>
        <title>Product</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
            <div class="sections">
                <?php
                    echo "<h1>Selamat Datang</h1>";
                ?>

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
                <h2>Produk Kami</h2>
                <div class="section3">
                    <div class="list-product">
                        <img src="steak.jpg" alt="Steak">
                        <h4>Steak</h4>
                        <h5>RP 80.000</h5>
                        <a class="tombol tombol-detail" href="detail.php">Detail</a>
                        <a class="tombol tombol-beli" href="checkout.php?harga=80000&nama=Steak&deskripsi=Steak dengan daging premium yang sangat lezat">Beli</a>
                    </div>
                    <div class="list-product">
                        <img src="burger.jpg" alt="Burger">
                        <h4>Burger</h4>
                        <h5>RP 30.000</h5>
                        <a class="tombol tombol-detail" href="detail.php">Detail</a>
                        <a class="tombol tombol-beli" href="checkout.php?harga=30000&nama=Burger&deskripsi=Burger daging sapi dengan saos yang lumer di mulut">Beli</a>
                    </div>
                    <div class="list-product">
                        <img src="chips.jpg" alt="Chips">
                        <h4>Chips</h4>
                        <h5>RP 20.000</h5>
                        <a class="tombol tombol-detail" href="detail.php">Detail</a>
                        <a class="tombol tombol-beli" href="checkout.php?harga=20000&nama=Chips&deskripsi=Chips kentang yang sangat gurih dan renyah">Beli</a>
                    </div>
                    <div class="list-product">
                        <img src="pizza.jpg" alt="Pizza">
                        <h4>Pizza</h4>
                        <h5>RP 50.000</h5>
                        <a class="tombol tombol-detail" href="detail.php">Detail</a>
                        <a class="tombol tombol-beli" href="checkout.php?harga=50000&nama=Pizza&deskripsi=Pizza buatan tangan Italia asli">Beli</a>
                    </div>
                </div>
            </div>
        
        <footer>
            If you use a fixed header or footer, make sure there is room for it! I put a <span class="section2">margin-bottom</span> on the <span class="section2">body</span>.
        </footer>
    </body>
</html>
