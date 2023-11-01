<?php
require 'penghubung.php';

if(isset($_POST['register'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $memastikan = $_POST["memastikan"];

    if($password == $memastikan){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $result  = mysqli_query($conn,"SELECT username from login WHERE username = '$username' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('username sudah ada !!!');
            document.location.href='regis.php';
            </script>";
        }else{
            $sql = "INSERT INTO login VALUES ('$username','$password')";
            $result_query = mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn) > 0){
                echo "<script> alert( 'Registrasi Berhasil!!');
            document.location.href='login.php';
            </script>";
            }else{
                echo "<script> alert( 'Registrasi gagal!!');
                document.location.href='regis.php';
                </script>";
            }
        }
    }else{
        echo "<script> alert('password tidak sama !!!');
        document.location.href='regis.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regis.css">
    <title>Registrasi</title>
</head>


<body>
    <div class="form">
        <div class="form-container">
            <h1>Registrasi</h1><hr>
            
            <form action="" method="POST">
                <ul class="pengisian-regis">
                    <li>
                    <h2>Buat username</h2>
                    <input type="text" name="username" placeholder="Username" class="textfield">
                    </li>
                    <li>
                    <h2>Buat Password </h2>
                    <input type="password" name="password" placeholder="Password" class="textfield">
                    </li>
                    <li>
                    <h2>Masukkan ulang Password</h2>
                    <input type="password" name="memastikan" id="memastikan" placeholder="Confirm Password" autocomplete="off" class="textfield" required> <br>
                    </li>
                </ul>
                <table class="tabel-registrasi">
                    <tr>
                        <td>
                        <button type="submit" name="register" class="regis-btn">Register</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>