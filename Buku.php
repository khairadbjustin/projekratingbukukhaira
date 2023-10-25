<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultan Buku</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #aaf0d1; /* Warna hijau pastel */
        }

        .container {
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        }

        .container:hover {
            transform: scale(1.05);
        }

        .book-image {
            width: 100px;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Konsultan Buku</h1>
        <img class="book-image" src="th.jpeg" alt="Buku">
        <form method="post">
            <label for="jumlahBuku">Berapa buku yang ingin Anda beli?</label>
            <br>
            <input type="number" id="jumlahBuku" name="jumlahBuku" min="1" required>
            <br>
            <input type="submit" value="Konsultasikan Buku Saya">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlahBuku = $_POST["jumlahBuku"];

            if ($jumlahBuku >= 1 && $jumlahBuku <= 5) {
                echo "<div class='message'>Anda membutuhkan inspirasi! Coba buku-buku motivasi.</div>";
            } elseif ($jumlahBuku >= 6 && $jumlahBuku <= 10) {
                echo "<div class='message'>Anda suka petualangan! Baca buku-buku petualangan terbaik.</div>";
            } elseif ($jumlahBuku >= 11 && $jumlahBuku <= 20) {
                echo "<div class='message'>Anda adalah pembaca berat! Jangan lewatkan novel-novel bestseller.</div>";
            } else {
                echo "<div class='message'>Wow, Anda adalah pecinta buku sejati! Kunjungi perpustakaan terdekat untuk koleksi yang lebih luas.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
