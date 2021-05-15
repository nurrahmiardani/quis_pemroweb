<?php 
session_start();
if (!isset($_SESSION['log'])) {
    header('location: login2.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">



<head>
    <title>Home </title>
    <style>
    * {
    font-family: sans-serif;
    }

    .menu {
        margin-top: -1.4%;
        position: fixed;
        z-index: 99999999999;
    }

    .menu ul {
        display: inline-flex;
        margin: 50px;
    }

    .menu ul li {
        list-style: none;
        font-size: 20px;
        margin: 0 70px;
        font-weight: 500;
        color: #000000;
        cursor: pointer;
    }

    .logo img {
        margin-top: -10%;
        margin-left: -75%;
        width: 150%;
    }

    .logout {
        color: #000000;
        border: 2px solid transparent;
        padding: 6px 15px;
        height: 25px;
        border-radius: 30px;
        background-color: #97CF6E;
        box-shadow: 0px 0px 20px #b9b9b9;
    
    }

    .logout a{
        text-decoration: none;
        color : black;
    }


    .logout:hover {
        color: #ffffff;
        transition: color.6s;
    }

    .tugas p {
        color: #97CF6E;
        font-size: 44px;
        margin-top: 50px;
        text-align: center;
    }

    .bawah {
    
        
        margin-left: 7%;
        font-size: 20px;
    }

   
    .gambar {
        margin-top: -28%;
        margin-left: 52%;
        width: 40%;
    }


    </style>
</head>

<body>
    <div class="menu">
        <ul>
            <li class="logo"><img src="Logo.png"></li>
            <li class="tugas">HOME</li>
            <li>TENTANG</li>
            <li>PROFIL</li>
            <li class="logout"><a href="logout.php" onclick='return confirm("yakin")'>LOGOUT</a></li>
        </ul>
    </div> <br><br><br>
    <div class="tugas">
        <p>AIFARM</p><br><br>
    </div>
    <div class="bawah">
        <h3>Selamat Datang di Aifarm</h3>
        <p>Aifarm adalah perusahaan rantai pemasok produk segar<br> lokal di Indonesia. Kami adalah bagian dari pelopor dalam<br> memecahkan salah satu masalah rantai pasokan terberat<br> dengan memanfaatkan teknologi inovatif. Kami<br> mendapatkan
            produk segar dari petani dan<br> mengirimkannya ke pedagang dalam waktu 12 jam.
        </p>
        
    </div>
    <img src="TANI 1.png" class="gambar">
</body>

</html>