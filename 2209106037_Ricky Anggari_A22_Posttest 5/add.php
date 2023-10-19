<?php
require 'penghubung.php';

if (isset($_POST['add'])) {
    $id_buku = $_POST['id_buku'];
    $Judul_Buku = $_POST['Judul_Buku'];
    $Tahun_Terbit = $_POST['Tahun_Terbit'];
    $Harga_Buku = $_POST['Harga_Buku'];

    // Cek apakah username sudah ada di tabel 'datakaryawan'
    $duplicate = mysqli_query($conn, "SELECT * FROM datakaryawan WHERE username = '$user'");
    
    if (mysqli_num_rows($duplicate) > 0){
        echo "<script>alert('Username Sudah Ada'); </script>";
    } else {
        $formattedDate = date('Y-m-d', strtotime($tanggal));
        $query = "INSERT INTO datakaryawan VALUES ('', '$user', '$pass', '$id_buku', '$Judul_Buku', '$Tahun_Terbit', '$formattedDate', '$Harga_Buku')";
        if (mysqli_query($conn, $query)) {
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php'
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Ditambahkan!');
            </script>";
        }
    }
}
?>