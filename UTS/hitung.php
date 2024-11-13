<html>
    <head>
        <title>Bayar</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="section3">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    $jumlah = $_GET["jumlah"];
                    $harga = $_GET["harga"];

                    $total = $jumlah * $harga;
                    echo "harganya adalah ".$total;
                }
            ?>
        </div>
    </body>
</html>
