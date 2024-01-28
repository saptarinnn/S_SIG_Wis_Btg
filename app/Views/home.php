<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>SIG | Home</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">       
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">                      
        <link href="biru/css/bootstrap.min.css" rel="stylesheet">
        <link href="biru/css/bootstrap-icons.css" rel="stylesheet">
        <link href="biru/css/templatemo-topic-listing.css" rel="stylesheet">   
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets6/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../logo.png">
       
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../assets6/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../assets6/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="../assets6/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    </head>
  
    <body>
    <main>
        
    <?= $this->include('atribut/navbar') ?>

  
    <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('welcome.jpg');">
      <span class="mask bg-gradient-dark opacity-7"></span>
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-lg-15 text-left mx-auto my-auto">
            <h1 class="text-white">Pemetaan Lokasi Wisata Kota Bontang</h1>
            <h5 class="text-info text-gradient">Sistem Informasi Geografis</h5>
            <h6 class="text-white mb-2 mt-5">Find us on</h6>
            <div class="d-flex justify-content-left">
              <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header>



            
<section class=" bg-gradient-info pt-6 pb-7 featured-section" id="count-stats">
    <div class="row">
      <div class=" col-lg-9 z-index-1 border-radius-xl mt-n4 mx-auto py-5">
        <?= $this->include('atribut/peta') ?>
      </div>
    </div>
</section>



            <?= $this->include('atribut/jeniswisata') ?>

            
            <?= $this->include('atribut/galery') ?>


            <?= $this->include('atribut/bontang') ?>





        </main>

        <?= $this->include('atribut/footer') ?>


     
   
       




        <!-- JAVASCRIPT FILES -->
        <script src="biru/js/jquery.min.js"></script>
        <script src="biru/js/bootstrap.bundle.min.js"></script>
        <script src="biru/js/jquery.sticky.js"></script>
        <script src="biru/js/click-scroll.js"></script>
        <script src="biru/js/custom.js"></script>

    </body>
</html>

