<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin | Data Alam</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assetsadmin/images/favicon.ico" />
      <link rel="stylesheet" href="../assetsadmin/css/core/libs.min.css" />
      <link rel="stylesheet" href="../assetsadmin/vendor/aos/dist/aos.css" />
      <link rel="stylesheet" href="../assetsadmin/css/hope-ui.min.css?v=2.0.0" />
      <link rel="stylesheet" href="../assetsadmin/css/custom.min.css?v=2.0.0" />
      <link rel="stylesheet" href="../assetsadmin/css/dark.min.css"/>
      <link rel="stylesheet" href="../assetsadmin/css/customizer.min.css" />
      <link rel="stylesheet" href="../assetsadmin/css/rtl.min.css"/>
  </head>
  

  <body>
    
  <?= $this->include('admin/adminsidebar') ?>
  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p> Silahkan edit data pada form dibawah ini ! </p>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h4>Periksa isian form anda kembali! </h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>

        <?php endif; ?>
        <form method="post" action="<?= base_url('dataalam/saveEdit/' . $dataalam->antrian) ?>">
        <?= csrf_field(); ?>
         
        <div class="mb-3">
                <label for ="antrian" class="form-label">Antrian</label>
                <input type="text" class="form-control" value="<?= $dataalam->antrian ?>" id="antrian" 
                name="antrian" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="jenis" class="form-label">Jenis Wisata </label>
                <input type="text" class="form-control" value="<?= $dataalam->jenis ?>" id="jenis" 
                name="jenis" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="nama" class="form-label">Nama </label>
                <input type="text" class="form-control" value="<?= $dataalam->nama ?>" id="nama" 
                name="nama" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="alamat" class="form-label">Alamat </label>
                <input type="text" class="form-control" value="<?= $dataalam->alamat ?>" id="alamat" 
                name="alamat" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="longlang" class="form-label">Titik Lokasi</label>
                <input type="text" class="form-control" value="<?= $dataalam->longlang ?>" id="longlang" 
                name="longlang" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="info" class="form-label">Info</label>
                <input type="text" class="form-control" value="<?= $dataalam->info ?>" id="info" 
                name="info" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="nama" class="form-label">Foto</label>
                <input type="text" class="form-control" value="<?= $dataalam->foto ?>" id="foto" 
                name="foto" aria-describedby="">
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php include 'adminfooter.php'?>
        <!-- Jquery dan Bootstrap JS -->
        <script src="<?= base_url('js/jquery.min.js')?>"></script>
      <script src="<?= base_url('js/bootstrap.min.js')?>"></script> 
    </body>
</html> 