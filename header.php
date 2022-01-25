<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="header.css">
    <!-- Bootstrap CSS -->
    <link href="gaya/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Portal Berita - UMBandung</title>
    <style>
    	*{
    	font-family: 'Kaushan Script', cursive;
    }
    #pantat{
    	border:1px solid;
        border-radius:35px;
        margin-bottom:-25px;
        height:-20%;
        text-align:left;
        
    }
    #pantat2{
    	text-align:right;
    }
    	ion-icon {
           color:#6610f2;
           font-size:32px;
            }
            .dropdown-divider{
            	color:#6610f2;
                font-size:10px;
            }
            @media only screen and (min-width: 768px){
	     div a{
		 font-size:30px;
		}
	   #judul{
		font-size:50px;
		}
		ion-icon {
           color:#6610f2 ;
           font-size:42px;
            }
            .tobi{
            	font-size:60px;
            }
		
	}
    </style>
  </head>
  <body id="page-top">
  	<div class="container">
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top" id="mainNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="page-top" id="judul">UM Bandung</a>
    <img src="gambar/umb.png" width="25%" >
    <button class="navbar-toggler navbar-toggler-right" style="color:#6610f2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color:#6610f2"><ion-icon class="tobi" name="menu-outline"></ion-icon></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari.." aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><ion-icon name="search-outline"></ion-icon></button>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><ion-icon name="home-outline"></ion-icon>Beranda</a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="berita.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <ion-icon name="newspaper-outline"></ion-icon> Berita
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Kemahasiswaan</a></li>
            <li><a class="dropdown-item" href="#">Beasiswa</a></li>
            <li><a class="dropdown-item" href="#">Pendaftaran</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">kelompok 11 ©2021 copyright</a></li>
          </ul>
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="artikel.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <ion-icon name="clipboard-outline"></ion-icon> Artikel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Karya Mahasiswa</a></li>
            <li><a class="dropdown-item" href="#">Prestasi Mahasiswa</a></li>
            <li><a class="dropdown-item" href="#">Dosen Tergeulis :)</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">kelompok 11 ©2021 copyright</a></li>
          </ul>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li class="nav-item">
          <a class="nav-link" href="struktur.php"><ion-icon name="people"></ion-icon>Struktural</a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li class="nav-item"><a class="nav-link"  href="tentang.php"> <ion-icon name="school"></ion-icon>Tentang Kampus</a></li>
        <li><hr class="dropdown-divider"></li>
           <li class="nav-item"><a class="nav-link"  href="tentang.php"> <ion-icon name="logo-whatsapp"></ion-icon>Team IT</a></li>
           <li><hr class="dropdown-divider"></li>
           <li class="nav-item"><a class="nav-link"  href="https://wa.me/+6287822002484"><ion-icon name="log-in-outline"></ion-icon>Admin-Login</a></li>
      </ul>
    </div>
  </div>
  <div>
</nav>

     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>