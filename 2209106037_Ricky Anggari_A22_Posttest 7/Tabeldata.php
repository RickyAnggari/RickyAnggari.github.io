<?php
require 'penghubung.php';
$query="SELECT * FROM login";
$sql =mysqli_query($conn,$query);
$result = mysqli_query($conn, "SELECT * FROM login");
$login = [];
while ($row = mysqli_fetch_assoc($result)){
    $login[] = $row;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Tabeldata.css">
</head>
<body>
    <h1 class="diatas">Data User</h1>
<div class="luaran">
<table border="1" class="tabel-inti">
    <tr >
        <td class="dalam-tabel">
        <h1>Nomor</h1>
        </td>
        <td class="dalam-tabel">
            <h1>Username</h1>
        </td>
        <td class="dalam-tabel">
            <h1 class="tulisan-kolom">Password</h1>
        <td class="dalam-tabel">
            <h1>Menu</h1>
        </td>
    </tr>
    </div>
    <?php
    $i = 1;

    foreach ($login as $DataUser) :
    ?>
        <tr style="font-size: 20px;text-align: center">
            <td><?php echo $i ?></td>
            <td><?php echo $DataUser['username']?></td>
            <td><?php echo $DataUser['password'] ?></td>
            <td class="action">
                <a href="hapususer.php?username=<?php echo $DataUser['username'] ?>"><button>Hapus</button></a>
                    </td>
        </tr>
        <?php $i++;
    endforeach;
    ?>
</table>
</body>
</html>