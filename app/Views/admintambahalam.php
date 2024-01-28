<!doctype html>
<html lang="en">
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin | Home</title>
      
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
    <?php $actual_link = "$_SERVER[REQUEST_URI]"; ?>
    <?= $this->include('admin/adminsidebar') ?>
            <div class="container">
             <?php if (!empty(session()->getFlashdata('error'))):?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

    <div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        
        <div class="card">
   
            <div class="row content">
                <div class="col-md-10 mb-10">
                    <h3 class="signin-text mb-3"> TAMBAH DATA ALAM</h3>
                <form method="post" action="<?= base_url(); ?>/admintambahalam/process">
                    <?=csrf_field(); ?>
                

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Wisata</label>
                        <input type="text" class="form-control" id="jenis" name ="jenis">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Wisata</label>
                        <input type="text" class="form-control" id="nama" name ="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name ="alamat">
                    </div>

                        

                    <div class="mb-3">
                        <label for="longlang" class="form-label">Long & Lang</label>
                        <input type="text" class="form-control" id="longlang" name ="longlang">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">foto</label>
                        <input type="file" class="form-control" id="info" name ="info">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Informasi Wisata</label>
                        <input type="text" class="form-control" id="info" name ="info">
                    </div>
                   
                        
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Daftar</label>
                        </div>
                    </form>
                

                   
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>




<?= $this->section('script') ?>
<script>
    

    let map = L.map('map', {
        attributionControl: false,
    }).setView([0.1372358, 117.4548496], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    let popup = L.popup();
    var marker = L.marker([0.1372358, 117.4548496]).addTo(map);
    var loc = document.querySelector("[name=sek_lokasi]");
    map.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        } else {
            marker.setLatLng(e.latlng);
        }
        loc.value = lat + "," + lng;
    });
</script>
<?= $this->endSection() ?>

