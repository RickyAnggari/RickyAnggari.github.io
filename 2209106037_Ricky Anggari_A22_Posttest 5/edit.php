<?php
include 'penghubung.php';

if (isset($_POST['edit'])) {
    $id_buku = $_POST['ID_Buku'];
    $Judul_Buku = $_POST['Judul_Buku'];
    $Chapter = $_POST['Chapter'];
    $Harga_Buku = $_POST['Harga_Buku'];

    $query = "UPDATE toko_buku SET Judul_Buku = '$Judul_Buku', Chapter = '$Chapter', Harga_Buku = '$Harga_Buku' WHERE ID_Buku = $id_buku";

    if (mysqli_query($conn, $query)) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
        </script>";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM toko_buku WHERE ID_Buku = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    // Handle jika ID tidak ditemukan
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <html lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="edit.css">
        <title>Document</title>
</head>
<body>
    <section class="add-data">
        <div >
            <h1 class="atas">Edit Data</h1><hr><br>
            <form action="" method="POST" name="edit" enctype="multipart/form-data">
                <table  class="pengisian-tabel">
                    <tr class="te-er">
                        <td class="pengisian"> 
                            <label for="ID_BUKU">ID</label>
                            <input type="password" name="ID_Buku" class="textfield" value="<?php echo $row['ID_Buku']; ?>">
                        </td>
                        <td class="pengisian">
                            <label for="Judul_Buku">Judul_Buku</label>
                            <input type="text" name="Judul_Buku" class="textfield" value="<?php echo $row['Judul_Buku']; ?>">
                        </td>
                        <td class="pengisian">
                            <label for="Chapter">Chapter</label>
                            <input type="number" name="Chapter" class="textfield" value="<?php echo $row['Chapter']; ?>">
                        </td>
                        <td class="pengisian">
                            <label for="Harga_Buku">Harga_Buku</label>
                            <input type="number" name="Harga_Buku" class="textfield" value="<?php echo $row['Harga_Buku']; ?>">
                        </td>
                        <td class="tombol-pengisian">
                            <button name="edit" class="tombol-kirim"><h1>Submit</h1></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>
