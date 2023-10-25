<?php
include 'penghubung.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="Styling2.css">
<script src="index.js"></script>
</head>
<body >
     <!-- Navbar -->
    <div class="Navbar">
        <ul class="Info">
            <li class="Isi"><a href="#home" class="setting">Home</a></li>
            <li class="Isi"><a href="About me.html" class="setting"> About me</a></li>
            <li class="ujung"><button onclick="teranggelap()">Dark/Light Mode</button></li>
            <li><?php
date_default_timezone_set('Asia/Jakarta');
$currentDateTime = new DateTime();
$currentTimezone = new DateTimeZone('Asia/Makassar');
$currentDateTime->setTimezone($currentTimezone);
$hari = $currentDateTime->format('l');
$tanggal = $currentDateTime->format('d F Y');
$zonaWaktu = $currentDateTime->format('T');
echo "Day: $hari<br>";
echo "Date: $tanggal<br>";
echo date("h:i:s:a")," $zonaWaktu";
?>
</li>
        </ul>
        </div>
        <!-- Navbar end -->
     

    <!-- Main -->
    <div class="Pembuka">
        <img src="welcome.jpg" width="100%">
    </div>
    <section id="home">
    <div class="tengah">
    <div>
        <h1 class="setting2">Toko Buku Ricky</h1>
        <h1 class="setting2">Diskon setiap Jumat</h1>
        <table class="diskon">
            <tr>
                <td>
                    <img src="diskon.jpeg">
                </td>
                <td>
                    <h2 class="tulisan1"> Diskon berikutnya ada pada tanggal <?php echo date('d-m-y',strtotime('next friday'));?></p></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="cheap.jpeg">
                </td>
                <td>
                    <h2 class="tulisan1">Harga bukunya murah meriah</h2>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <h2 class="setting2">Tekan gambar dibawah ini untuk masuk ke menu CRUD</h2>
        <h2 class="setting2"></h2>
    </div>
    <div><table class="tabel">
        <tr>
            <td class="genre"><a href="CRUD.php"><img src="Manga.jpeg"></a> 
            <h2 class="setting2">Book Store</h2>
            </td>
        </tr>
    </table>
    </div>
</div>
<div class="container">
        <h1 class="awalan">Quick Search Buku</h1>
        <form  action="index.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <p>Masukkan gambar buku : <input type="file" name="file"> </p>
            </div>
            <div class="input-group">
            <label for="judulbuku">Nama Buku :</label>
                <input type="text" id="judulbuku" name="judulbuku" required>
                </div>
            <div class="input-group">
                <label for="harga">Harga Buku:</label>
                <input type="number" id="harga" name="harga" min="0" max="99999999" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Submit" class="Tombol">
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
        $img = $_FILES["file"]["name"];
        $Nama = $_FILES["file"]["name"];
        $judulbuku = $_POST["judulbuku"];
        $harga = $_POST["harga"];
        move_uploaded_file($Nama,"image/". $img);
        echo "<h2>Showing Result</h2>";
        echo "<a href='image/$img'><img src='image/$img' alt='Uploaded Image'></a>";    
        echo "<hr/>";
        echo "<p>Judul Buku: $judulbuku</p>";
        echo "<p>Harga Buku: $harga</p>";
    } else {
        echo "Invalid";
    }
?>
</section>
    <!-- Main end -->
</body>
<footer>
    <div class="bawah">
        <ul >
            <table border="5">
                <tr>
            <td>
            <li class="Medsos"><h2 class="Tulisan_Medsos">Instagram</h2></li>
        </td>
        <td>
            <li class="Medsos"><h2 class="Tulisan_Medsos">Facebook</h2></li>
        </td>
        <td>
            <li class="Medsos"><h2 class="Tulisan_Medsos">Twitter</h2></li>
        </td>
        </tr>
        </table>
        </ul>
    </div>
</footer>
</html>