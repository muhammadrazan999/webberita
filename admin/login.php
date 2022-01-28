<?php
 session_start();
 include '../php/connect.php';
?>
<!doctype html>
	<html>
		<head>
			<title>Admin Panel - RazorX</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Jekyll v4.1.1">
			<link rel="stylesheet" type="text/css" href="gaya/login.css">
			<link rel="stylesheet" type="text/css" href="gaya/login2.css">
			<link href="../gaya/bootstrap.min.css" rel="stylesheet">
		
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" >
<style>
	ion-icon{
		color:#00FF00;
		font-size:43px;
		}
	.juddul-login{
		 background-color:#00FF00;
		}
		/*css in buat loginnya*/
		.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>	
	</head>
	<body class="text-center">
		<!-- ini manggil header.phpnya-->
	    <?php 
	      include 'header.php';
	
 for($i=10;$i<=15;$i++){
 	echo '<br>';
 }

	     ?>
		<!-- konten login nya -->
			<form class="form-signin" action="" method="POST">
        <img class="mb-4" src="../gambar/razorx.png" alt="" width="60%" height="60%">
        <h1 class="h3 mb-3 font-weight-normal">Mohon Login Terlebih Dahulu</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="username.." required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password.." required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Ingat Akun Ini
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Masuk</button>
        <p class="mt-5 mb-3 text-muted">© Razan (uchiha obITo) 2022</p>
    </form>
	<!-- ini adalah footernya -->
     <?php
     /*membuat set ketika tombol tersubmit*/
     if(isset($_POST['submit'])){
     	//menampung data username
       $Username = $_POST['username'];
       //menampung data password
       $Password = $_POST['password'];
       //melakukan check menurut variabel koneksi dan tabel serta kolom                
       $cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '".$Username."' ");
       //jika baris ditemukan lebih dari 0 artinya ada maka
      if(mysqli_num_rows($cek) > 0){
      	//membuat variabel mewakili object dari setiap colom dari tabel
        $tembak = mysqli_fetch_object($cek);
        //jika password sesuai maka
         if(MD5($Password) == $tembak->password){
         	//mengisi setiap sesi 
         	$_SESSION['status'] = true;
              // sesi mengenai id
             $_SESSION['id'] = $tembak->id;
             //sesi mengenai username
             $_SESSION['uname'] = $tembak->username;
             $tytyd =='<script>window.location = "index.php"</script>';
             echo $tytyd;
         }
         else{
         	
             echo "password salah";
          }
       }else{      
         
          echo "username tidak ditemukan";
       }                   
       //cek apakah post berhasil
     }
  
     ?>
     	<? include 'foot.php'; ?>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
			
		
		
	</html>