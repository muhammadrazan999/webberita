<?php
 include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
     <link href="gaya/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="gaya/body.css">
    <style>
    	.jumbotron{
	          background-image: url('gambar/kampus2.png');
	          background-size:cover;
	          width:100%;
	          height:60%;
	          background-repeat:no-repeat;
	         text-align:center;
	          
            }
         .jumbotron h1,p,h3,h5{
         	color:white;
             font-weight:bold;
         }
         body{
         	background-color:#e4f5ff;
         }
    .jumbotron btn{
	border-radius:45px;
	padding-right:45px;
	padding-left:45px;
	}
	footer{
		margin-bottom:45vh;
	}
	.info-meta{
		color:white;
		}
         
         

    </style>
  </head>
  <body>
  	<!-- jumbotron -->
<div style="margin-top:20px;" class="jumbotron bg-primary"> 
  <div class="container" >
 <br><br> <h1 class="display-4">Selamat Datang</h1>
 <p class="lead">di Portal berita<br> Universitas Muhammadiyah Bandung</p>
<div class="garis"></div>
<br>
 	<br>
 <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">Daftar</a>
 <br>
 	<br>
 </div>
</div>
<!-- penutup jumbotron -->
<br><br>
<div style="height:50vh;" id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img style="margin-top:20px;" src="gambar/ridwan-kamil.png" class="d-block w-100 h-80" alt="...">
      <div style="margin-top:-20px;" class="carousel-caption d-none d-md-block">
      	<h5>Pesan Kesan Pak Ridwan Kamil</h5>
        <p style="color:#094f6e;">" Semangat Meraih Masa Depan Yang Gemilang"</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img style="margin-top:20px;" src="gambar/kampus2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tampilan Kampus</h5>
       <p style="color:#094f6e;">Tampilan Depan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="gambar/kampus3.png" class="d-block w-100" alt="...">
       <div class="ada">
       </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>tampilan sudut</h5>
       <p style="color:#094f6e;">Tampilan sudut kampus</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/kampus1.png" class="d-block w-100" alt="...">
  
      <div class="carousel-caption d-none d-md-block">
        <h5>Universitas Muhammadiyah Bandung</h5>
      <p style="color:#094f6e;">tampilan depan lagi</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	<!-- content -->
		<div style="margin-bottom:150px;" class="bg-dark"> 
		<div class="container">
		<h3>Berita Terbaru</h3>
		<div class="garis"></div>
		<!-- konten 1 -->
			<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-md-9">
              <div class="panel panel-default">
               <div class="panel-body">
                  <h5>Pemilihan Ketua Himpunan Prodi Informatika</h5>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 22, 2022 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> diposting oleh UMBandung</li>
                            <li class="pull-right">Kategori : Kemahasiswaan</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object " src = "gambar/kampusbulat.png" width="100%" >
                       </a>
                       <div class = "media-body">
                       	<br><br>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                         </p>
                       </div>
                        <p style="text-align:right;">
                            <a href="berita-1.php">
                                <button class="btn btn-primary">Selebihnya..</button>
                            </a>
                        </p>
                    </div>
                    <hr>
                    <h5>Menjelang UAS Mahasiswa Dibebankan Melunasi <br>biaya administrasi guys</h5>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 22, 2022 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> diposting oleh UMBandung</li>
                            <li class="pull-right">Kategori : Kemahasiswaan</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object" src = "gambar/ig1.png" width="100%" >
                       </a>
                       
                       <div class = "media-body">
                       	<br><br>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p> 
                            
                       </div>
                        <p style="text-align:right;">
                            <button class="btn btn-primary">Selebihnya..</button>
                        </p>
                    </div>
               </div>
            </div>
         </div>  
        <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading"><h4 class="text-center">Berita Terakhir</h4></div>
               <div class="panel-body">
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="" alt="" /></a>                
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 22, 2022 </a></li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4>
                            <a href=""><font size="5px">ketua angkatan prodi Informatika<br> menyelenggarakan meet</font></a>
                        </h4>
                    </div>
                    
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="images/technology.jpg" alt="" /></a>                           
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 22, 2022</li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4 class="entry-title">
                            <a href=""><font size="5px">Ospek Jurusan Yang Sekedar Hanya Wacana</font></a>
                        </h4>
                    </div><!--recent-->
                </div>
            </div>      
        </div>          
    </div>          
</div>
			<!-- berita 2 -->
		</div>
		<br>
		<div class="container">
		<h3>Artikel Terbaru</h3>
		<div class="garis"></div>
		<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-md-9">
              <div class="panel panel-default">
               <div class="panel-body">
                  <h5>BEM UMBandung Resmi di Lantik</h5>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 22, 2022 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> diposting oleh UMBandung</li>
                            <li class="pull-right">Kategori : Karya Mahasiswa</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object " src = "gambar/art1.png" width="100%" >
                       </a>
                       <div class = "media-body">
                       	<br><br>
                          <p>BEM UMBandung Periode 2021-2022 Resmi Dilantik Admin  Mahasiswa BANDUNGMU.COM – Bertempat di auditorium utama, kepengurusan Badan Eksekutif Mahasiswa (BEM) Universitas Muhammadiyah Bandung (UMBandung) periode 2021-2022 resmi dilantik pada Kamis (18/11/2021) siang. Presiden mahasiswa (presma) atau Ketua BEM periode 2021-2022 Yudi Yudhiana mengatakan banyak program.....
                         </p>
                       </div>
                        <p style="text-align:right;">
                            <a href="artikel-1.php">
                                <button class="btn btn-primary">Selebihnya..</button>
                            </a>
                        </p>
                    </div>
                    <hr>
                    <h5>Webinar Memperingati Hari Pangan Sedunia</h5>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 22, 2022 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> diposting oleh UMBandung</li>
                            <li class="pull-right">Kategori : Prestasi Mahasiswa</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object" src = "gambar/art2.png" width="100%" >
                       </a>
                       
                       <div class = "media-body">
                       	<br><br>
                          <p>Peringati Hari Pangan Sedunia. UMB Bekerjasama Dengan Universitas Lain Adakan Webinar Akbar
 Admin  Penelitian
Hari Pangan Sedunia diperingati setiap tanggal 16 Oktober di setiap tahunnya. Untuk tahun ini, Universitas Muhammadiyah Bandung bekerja sama dengan Universitas Al-Azhar Indonesia dan Universitas Ahmad Dahlan melaksanakan webinar akbar berjudul World Food Day dengan tema "Menuju Pangan Berkelanjutan : Tantangan dan Inovasi" yang dilaksanakan pada sabtu kemarin tepatnya tanggal 6 November 2021....
                          </p> 
                            
                       </div>
                        <p style="text-align:right;">
                            <button class="btn btn-primary">Selebihnya..</button>
                        </p>
                    </div>
               </div>
            </div>
         </div>  
        <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading"><h4 class="text-center">Berita Terakhir</h4></div>
               <div class="panel-body">
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="" alt="" /></a>                
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 22, 2022 </a></li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4>
                            <a href="artikel-1.php"><font size="5px">BEM UMBandung Resmi di Lantik</font></a>
                        </h4>
                    </div>
                    
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="images/technology.jpg" alt="" /></a>                           
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 22, 2022</li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4 class="entry-title">
                            <a href="artikel-2.php"><font size="5px">Webinar Memperingati Hari Pangan Sedunia</font></a>
                        </h4>
                    </div><!--recent-->
                </div>
            </div>      
        </div>          
    </div>          
</div>
		
		<!-- artikel 1 -->
		<!-- artikel 2 -->
		</div>
		<div>
	

<!-- footer -->
<div id="pantat" class="container bg-dark fixed-bottom">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">kelompok 11 - kelompok 11 &copy; 2022</span>
    </div>

    <div id="pantat2" >
      <a class="text-muted" href="#"><ion-icon name="logo-youtube"></ion-icon></a>
      <a class="text-muted" href="#"><ion-icon name="logo-github"></ion-icon></a>
      </div>
  </footer>
  </div>
 </body>
</html>







