<?php
$host = "localhost"; // Ganti dengan host database Anda
$dbname = "penjualan_kue"; // Ganti dengan nama database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Kue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url('images/kiki.jpg'); /* Ganti dengan path gambar latar belakang Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang judul */
        }

        button {
            background-color: #34db34;
            color: #fff;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
        }

        #dynamic-content {
            margin: 20px;
        }

        /* Menambahkan gaya untuk setiap menu */
        #Pendaftaran {
            background-image: url('images/aku.jpeg'); /* Ganti dengan path gambar latar belakang Pendaftaran */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #fff;
        }

        #login {
            background-image: url('path/to/your/login-background.jpg'); /* Ganti dengan path gambar latar belakang Login */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #fff;
        }

        #katalog_kue {
            background-image: url('path/to/your/katalog_kue-background.jpg'); /* Ganti dengan path gambar latar belakang Katalog Kue */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #333;
        }

        #keranjang {
            background-image: url('path/to/your/keranjang-background.jpg'); /* Ganti dengan path gambar latar belakang Keranjang */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #fff;
        }

        #checkout {
            background-image: url('path/to/your/checkout-background.jpg'); /* Ganti dengan path gambar latar belakang Checkout */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #333;
        }

        #pembayaran {
            background-image: url('path/to/your/pembayaran-background.jpg'); /* Ganti dengan path gambar latar belakang Pembayaran */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #fff;
        }

        #laporan_transaksi {
            background-image: url('path/to/your/laporan_transaksi-background.jpg'); /* Ganti dengan path gambar latar belakang Laporan Transaksi */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #333;
        }

        #logout {
            background-image: url('path/to/your/logout-background.jpg'); /* Ganti dengan path gambar latar belakang Logout */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            color: #fff;
        }
    </style>
       
    <script>
        function loadContent(menu) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("dynamic-content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", menu + ".html", true);
            xhttp.send();
        }
    </script>
</head>
<body>

<h1>Menu Utama</h1>

<button onclick="loadContent('Pendaftaran')">Pendaftaran</button>
<button onclick="loadContent('login')">Login</button>
<button onclick="loadContent('katalog_kue')">Katalog Kue</button>
<button onclick="loadContent('keranjang')">Keranjang</button>
<button onclick="loadContent('checkout')">Checkout</button>
<button onclick="loadContent('laporan_transaksi')">Laporan Transaksi</button>
<button onclick="loadContent('logout')">Logout</button>

<div id="dynamic-content"></div>

</body>
</html>