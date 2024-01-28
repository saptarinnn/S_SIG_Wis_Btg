<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assetsoft/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assetsoft/img/favicon.png">
  <title>
    SIG | Sign In 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assetsoft/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assetsoft/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assetsoft/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assetsoft/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body>
<?= $this->include('atribut/navbar') ?>
  <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
  <header>
    <div class="page-header min-vh-95">
      <div>
        <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="../welcome.jpg" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="text-center">
                <h3 class="text-gradient text-info">Log In</h3>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                    </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/login/process">
                    <?=csrf_field(); ?>
                  <div class="row mt-3">
                </div>
              </div>
              <form id="contact-form" method="post" autocomplete="off">
                <div class="card-body pb-2">
                  <div class="row">
                    <div class="col-md-6">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id">
                      <div class="input-group mb-4">
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                      <div class="input-group">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Login</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
  <?= $this->include('atribut/footer') ?>
  <!--   Core JS Files   -->
  <script src="../assetsoft/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assetsoft/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assetsoft/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assetsoft/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assetsoft/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>
</body>

</html>