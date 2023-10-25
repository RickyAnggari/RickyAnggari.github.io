<?php
require 'penghubung.php';
$query="SELECT * FROM toko_buku";
$sql =mysqli_query($conn,$query);
$result = mysqli_query($conn, "SELECT * FROM toko_buku");
$toko_buku = [];
while ($row = mysqli_fetch_assoc($result)){
    $toko_buku[] = $row;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="CRUD.css">
</head>
<body>
<div class="navbar-kedua">
        <ul class="Info">
            <li class="Isi"><a href="index.php" class="setting">Back</a></li>
                </ul>
        </div>     

<div class="atasnya">
<h1 class="tulisan-utama">Book Store</h1>
<h1 class="tulisan-utama">harap admin menginput buku baru sebelum <?php echo date('d-m-y',strtotime('next week'));?></p></h1>
<h1 class="tulisan-utama"> pada jam <?php echo date('h:i:s:a') ?></p></h1>
<h1 class="tulisan-utama">Jika telat menginput maka akan di kick</h1>
</div>
<div class="menu-tambah" >
    <button class="tombol-tambah"><a href="tambah.php"><h1 class="tulisan-tambah">Tambah</h1></a></button>
    <button class="tombol-tambah"><a href="buku.php"><h1 class="tulisan-tambah">Halaman Berikutnya</h1></a></button>
</div>
<div class="luaran">
<table border="1" class="tabel-inti">
    <tr >
        <td class="dalam-tabel">
            <h1>Nomor Urutan</h1>
        </td>
        <td class="dalam-tabel">
            <h1>ID Buku</h1>
        </td>
        <td  class="dalam-tabel">
        <h1>Judul Buku</h1>
        </td>
        <td  class="dalam-tabel">
          <h1>Chapter</h1>
        </td>
        <td  class="dalam-tabel">
        <h1>Harga Buku</h1>
        </td>
        <td class="dalam-tabel">
            <h1>Gambar</h1>
        </td>
        <td class="dalam-tabel">
        <h1>Pilihan Menu</h1>
        </td>
    </tr>
    </div>
    <?php
    $i = 1;

    foreach ($toko_buku as $Pendataan) :
    ?>
        <tr style="font-size: 20px;text-align: center">
            <td><?php echo $i ?></td>
            <td><?php echo $Pendataan['ID_Buku']?></td>
            <td><?php echo $Pendataan['Judul_Buku'] ?></td>
            <td><?php echo $Pendataan['Chapter'] ?></td>
            <td><?php echo $Pendataan['Harga_Buku'] ?></td>
            <td><a href="#"><img src="<?php echo $Pendataan['Gambar'];?>"></a></td>
            <td class="action">
                <a href="edit.php?id=<?php echo $Pendataan['ID_Buku'] ?>"><button>Edit</button></a>
                <a href="hapus.php?ID_Buku=<?php echo $Pendataan['ID_Buku'] ?>"><button>Hapus</button></a>
                    </td>
            <td>
            </td>
        </tr>
        <?php $i++;
    endforeach;
    ?>
</table>

</body>
</html>
