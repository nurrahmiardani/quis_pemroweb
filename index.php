<?php 
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $cek_user = mysqli_query($conn, "SELECT * FROM datauser WHERE username = '$username'");
        $row = mysqli_num_rows($cek_user);
        session_start();
        if (isset($_COOKIE['log'])) {
            if ($_COOKIE['log']== $username) {
                $_SESSION['log'] = true;
            }
        }

        if ($row === 1) {
           $fetch_pass = mysqli_fetch_assoc($cek_user);
           $cek_pass = $fetch_pass['password'];
       
           if ($cek_pass <> $password) {
               echo "<script>alert('password salah');
                </script>";
           } else {
               echo "<script>alert('login berhasil');
               document.location.href = 'history.php'</script>";
               $_SESSION['log'] = true;
               if (isset($_POST['remember'])) {
                   setcookie('log',$username,time()+60*60*24);
               } 
           }
        } else {
            echo "
                <script>
                    alert('username salah');
                </script>
            ";
        }
    }
?>




<html>

<head>
    <title>Login Pembelii</title>
    <link rel="shortcut icon" href="Logo1.png">
    <link rel="stylesheet" href="./loginstyle.css">
    <style>

        .registration h4{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="text">
        <h1>PERNAH TERHUBUNG DENGAN KAMI??</h1>
        <p>Silahkan masuk kembali untuk pengalaman yang lebih baik</p>
    </div>
    </div>
    <div class="registration">
        <form action="" method ="POST">
            <p>Username</p>
            <input type="text" class="Profil" name="username" placeholder="Masukkan username anda" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan password yang akan digunakan"  class="Profil" required>  <br><br><br>
            <input type="checkbox" name="remember" id=""><h4>remember me</h4><br><br><br>
            <button type="submit" name = "submit">Masuk</button>
        </form>
            
        
    </div>
    <div class="acc">
        <img src="Aq.png"></div>
</body>


</html>

