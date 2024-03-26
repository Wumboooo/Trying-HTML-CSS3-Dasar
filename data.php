
<?php $students = [
    ["nama" => "Leo Alexander", "NIM" => "043","jurusan" => "Teknik Informatika","email" => "leoalexander@gmail.com", "gambar" => "gambar_mahasiswa1.jpeg"],
    ["nama" => "Adit Sopo", "NIM" => "021","jurusan" => "Teknik Pertambangan","email" => "aditsopo@gmail.com", "gambar" => "gambar_mahasiswa2.jpeg"],
    ["nama" => "Jaka Tunggir", "NIM" => "092","jurusan" => "Teknik Industri","email" => "jakatunggir@gmail.com", "gambar" => "gambar_mahasiswa3.jpeg"],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
            <h1 class="judul">My Website</h1>
            <ul>
                <li><a href="index.html">Home</a></li>|
                <li><a href="#">About</a></li>|
                <li><a href="#">Products</a></li>|
                <li><a href="#">Services</a></li>|
                <li><a href="#">Contact</a></li>|
                <li><a href="data.php">Data</a></li>
            </ul>
        </div>
        <div class="container-content cf">
            <div class="content1">
                <h2>Judul Artikel</h2>
                <p class="penulis">ditulis oleh <a href="#">Leo Alexander</a> pada 9 Februari 2023</p>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tombol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Query database untuk mendapatkan data mahasiswa
                                // Simpan data dalam variabel $mahasiswa
                                $i = 1;
                                foreach ($students as $s) {
                                    echo "<tr>";
                                    echo "<td>" . $i++ . "</td>";
                                    echo "<td>" . $s["nama"] . "</td>";
                                    echo "<td><button>Lihat Data</button></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="footer">
            <p class="copyright">Copyright 2023, leoalexander.</p>
        </div>
    </div>
</body>
</html>


