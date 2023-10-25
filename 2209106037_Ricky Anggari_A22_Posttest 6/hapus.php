<?php
require "penghubung.php";
$ID_Buku = $_GET['ID_Buku'];
$result = mysqli_query($conn,"DELETE FROM toko_buku WHERE ID_Buku = '$ID_Buku'");
if ($result) {
    echo "
    <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'index.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Hapus!');
        document.location.href = 'index.php'
    </script>";
}

?>