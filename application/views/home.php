<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>SI PAMDES Desa Saragih</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/landing/css/style.css" />
   </head>
   <body>
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Header Section -->
      <div class="Header" id="Home">
         <nav class="navbar fixed-top">
            <div class="container">
               <a class="navbar-brand" href="<?php echo base_url('home');?>">SI Pamdes Desa Saragih</a>
               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav">
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('home');?>">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('register');?>">Daftar</a>
                     </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('hitung_air');?>">Hitung Penggunaan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Tentang Sistem</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('auth_pelanggan/login');?>">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2><b><i>Sistem Informasi PAMDES di Desa Saragih</i></b></h2>
                        </div>
                        <p>Selamat datang di aplikasi Sistem Informasi PAMDES Desa Saragih <br>Pemerintah Desa Saragih</p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>asset/img/wing.png');"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2><b>Informasi</b></h2>
               <p></p>
               <p></p>
               <div class="subHeading">
                  Berikut informasi lebih lengkap tentang website<br>Sistem Informasi PAMDES Desa Saragih merupakan sistem yang di buat untuk mengelola data PAMDES dan menyediakan informasi mengenai data pemakaian air dan data tagihan air </div>
            </div>

            <script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             
               </div>
            </div>
         </div>
      </div>
      <!-- Team Section -->
      <!-- Footer Section -->
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>asset/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>asset/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>asset/landing/js/script.js"></script>
   </body>
</html>