<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "penjualan_kue";
$conn = mysqli_connect($host, $user, $pass, $db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
         display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #ffa12c;
            margin: 0;
        }

        .container {
            width: 100%;
            display: flex;
            max-width: 850px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Mengatasi shadow di luar border-radius */
        }

        .login {
            width: 400px;
            align-items: center;
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        h1 {
            margin: 20px 0;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
            color: #333;
        }

        hr {
            border-top: 2px solid #ffa12c;
        }

        p {
            text-align: center;
            margin: 10px;
            color: #333;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            margin: 5px 0;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        button {
            border: none;
            outline: none;
            padding: 10px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            background: #ffa12c;
            transition: background 0.3s ease;
        }

        button:hover {
            background: rgba(214, 86, 64, 1);
        }

        @media (max-width: 880px) {
            .container {
                width: 100%;
                max-width: 750px;
                margin-left: 20px;
                margin-right: 20px;
            }

            .login {
                width: 100%;
                padding: 20px;
            }

            button {
                width: 100%;
            }
        }

    </style>
</head>
<body>
    <h1>login<h1>
    <form action="process_login.php" method="POST">
    <form action="#" method="post" onsubmit="return redirectToLogin()">
            <label for="nama_depan">Nama Depan:</label>
            <input type="text" id="nama_depan" name="nama_depan" required>

            <label for="nama_belakang">Nama Belakang:</label>
            <input type="text" id="nama_belakang" name="nama_belakang" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="kata_sandi">Kata Sandi:</label>
            <input type="password" id="kata_sandi" name="kata_sandi" required>

            <button type="submit">login</button>
    </form>
</body>
</html>

