<?php
include 'penghubung.php';

if (isset($_POST['add'])) {
    $id_buku = $_POST['ID_Buku']; // Corrected field names
    $Judul_Buku = $_POST['Judul_Buku']; // Corrected field names
    $Chapter = $_POST['Chapter']; // Updated to 'chapter'
    $Harga_Buku = $_POST['Harga_Buku']; // Corrected field names
    $img = $_FILES["Gambar"]["name"];
    $Gambar = $_FILES["Gambar"]["name"];
    move_uploaded_file($Gambar,"image/". $img);
    echo "<a href='image/$img'><img src='image/$img' alt='Uploaded Image'></a>";    
    $duplicate = mysqli_query($conn, "SELECT * FROM toko_buku WHERE ID_Buku = '$id_buku'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "
        <script>
            alert('ID Buku sudah ada! Data Gagal Ditambahkan.');
        </script>";
    } else {
        $query = "INSERT INTO toko_buku (id_buku, Judul_Buku, Chapter, Harga_Buku,Gambar) VALUES ('$id_buku', '$Judul_Buku', '$Chapter', '$Harga_Buku','$Gambar')";
        if (mysqli_query($conn, $query)) {
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Ditambahkan!');
            </script>";
        }
        if (mysqli_query($conn, $query)) {
          
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <section class="add-data">
        <div >
            <h1 class="atas">Tambah Data</h1><hr><br>
            <form action="" method="POST" name="tambah" enctype="multipart/form-data">
                <table  class="pengisian-tabel">
                    <tr class="te-er">
                <td class="pengisian"> 
                <label for="id">ID</label>
                <input type="password" name="ID_Buku" class="textfield">
                </td>
                <td class="pengisian">
                <label for="judul">Judul_Buku</label>
                <input type="text" name="Judul_Buku" class="textfield">
                </td>
                <td class="pengisian">
                <label for="chapter">Chapter</label>
                <input type="number" name="Chapter" class="textfield">
                </td>
                <td class="pengisian">
                <label for="harga">Harga_Buku</label>
                <input type="number" name="Harga_Buku" class="textfield">
                </td>
                <td class="pengisian">
                <label for="gambar">Gambar : </label>
                <input type="file" name="Gambar" class="textfield">
                </td>
                <td class="tombol-pengisian">
                <button name="add" class="tombol-kirim"><h1>Submit</h1></button>
                </td>
                </tr>
                </table>
            </form>
        </div>
    </section>
</table>
</body>
</html>