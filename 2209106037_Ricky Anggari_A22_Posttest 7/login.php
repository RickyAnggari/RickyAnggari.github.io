<?php
session_start();
require 'penghubung.php'; 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result  = mysqli_query($conn,"SELECT * from login WHERE username = '$username' ");
    if(mysqli_num_rows($result) > 0){
        $row  = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['username']=$username;
            $_SESSION['login'] =true;
            header("location:index.php");
            exit;   
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <?php echo isset($row); ?> 
    <div class="formulir">
        <div class="proses">
            <h1>Login</h1><hr>
            <?php
            if(isset($error)){
                echo "Salah!! </p>";
            }?>
            <form action="" method="post">
                <ul class="pengisian">
                    <li class="dalam-pengisian"><h1> Masukkan username </h1>
                    <input type="text" name="username" placeholder="Username" class="textfield">
                    </li>
                    <li><h1>Masukkan Password</h1>
                    <input type="password" name="password" placeholder="Password" class="textfield">
                    </li>
                    <li><h3>Silahkan masuk jika sudah menginput</h3>
                    <button type="submit" name="login" class="login">Masuk</button><br>
                    </li>
                </ul>
                <h2>Silahkan register terlebih dahulu jika belum buat akun </h2> 
                <table border="1" class="tabel-regis">
                    <tr class="trow-regis">
                    <td class="tede-regis">
                    <a href=regis.php><h1 class="tombol-regis" >Registrasi</h1></a>
                    </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>