<?php
// error_reporting(0);
$x = isset($_GET['x']) ? base64_decode($_GET['x']) : 'home';
date_default_timezone_set('Asia/Jakarta');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eclips Eats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Asset/<?= $x ?>.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php 
    include "Pages/koneksi.php"; 
    session_start();
    ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" >
      <div class="container-fluid">
        <img src=" Asset/bg/Logo.png" alt="logo" width="100px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?p=index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=menu&x=<?=base64_encode('filter')?>">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=reservasi&x=<?=base64_encode('reser')?>">Reservasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=aboutus&x=<?=base64_encode('aboutus')?>">About Us</a>
            </li>
            <?php

            if($_SESSION){
              echo "
              <li class='nav-item'>
              <button id='teksnav'>
                <a class='nav-link'>", $_SESSION['nama'] ,"</a>
              </button>
            </li>
              <li class='nav-item'><button id='teksnav'>
                <a class='nav-link' href='logout.php'>Log Out</a>
              </button>
            </li>";
            }else{
              echo "
              </li>
              <li class='nav-item'><button id='teksnav'>
                <a class='nav-link' href='login.php'>Log in</a>
              </button>
            </li>
              ";
            }

            ?>
          </ul>
        </div>
      </div>
    </nav>

    <?php
    $pages_dir = 'Pages';
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
            include $pages_dir . '/' . $p . '.php';
        } else {
            header("Location: index.php?p=error-404");
            exit;
        }
    } else {
        include $pages_dir . '/index.php';
    }
    ?>
<?php
  $halaman= $_GET['p'];
  if ($halaman!= 'menu') {
    echo '
  
      <!--footer section-->
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <section class="footer">
        <div class="box-container">
          <div class="box">
            <h3>Eclips Eats <i class="fa fa-cutlery"></i></h3>
            <p>Memberikan Kualitas Premium dan Pelayanan Terbaik.</p>      
          </div>
  
          <div class="box">
            <h3>Info Kontak</h3>
            <a href="#" class="links"><i class="fas fa-phone"></i>088267093579</a>
            <a href="#" class="links"><i class="fas fa-phone"></i>088267093579</a>
            <a href="#" class="links"><i class="fas fa-envelope"></i>elicpseats@gmail.com</a>
            <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>Jalan Bangau</a>
          </div>
  
          <div class="box">
            <h3>Tautan Langsung</h3>
            <a href="#" class="links"><i class="fas fa-arrow-right"></i>Beranda</a>
            <a href="menu.html" class="links"><i class="fas fa-arrow-right"></i>Menu</a>
            <a href="reservasi.html" class="links"><i class="fas fa-arrow-right"></i>Reservasi</a>
            <a href="aboutus.html" class="links"><i class="fas fa-arrow-right"></i>About Us</a>
          </div>
        </div>
        <div class="credit">karya by <span>kelompok 1</span>pemerograman web 1</div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     ';} ?> 
  </body>
</html>