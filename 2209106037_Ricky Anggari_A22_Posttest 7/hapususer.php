<?php
require "penghubung.php";
$username = $_GET['username'];
$result = mysqli_query($conn,"DELETE FROM login WHERE username = '$username'");
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