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

  <body class="  ">
  <?= $this->include('admin/adminsidebar') ?>
 

  <div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
          <div class="card-header d-flex justify-content-between flex-wrap">
            <div class="header-title">
                <h4 class="card-title mb-0">Data Wisata Kota Bontang</h4>
            </div>
            <div class="">
              <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                <i class="btn-inner">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                </i>
                <span>New Role</span>
              </a>
              <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Yakin Hapus?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="text-start mt-2">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Hapus</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
           
                      <div class="col-sm-12">
                           
                            <div class="card-body">
                              
                              <div class="table-responsive">
                                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                          <th>
                                            <div class="text-left">
                                              <h5 class="text-info">Jenis</h5>
                                            </div>
                                          </th>
                                          <th>
                                            <div class="text-left">
                                              <h5 class="text-info">Nama</h5>
                                            </div>
                                          </th>
                                          <th>
                                            <div class="text-left">
                                              <h5 class="text-info">Lokasi</h5>
                                            </div>
                                          </th>
                                          <th>
                                            <div class="text-left">
                                              <h5 class="text-info">Info</h5>
                                            </div>
                                          </th>
                                          <th>
                                            <div class="text-left">
                                              <h5 class="text-info">Aksi</h5>
                                            </div>
                                          </th>
                                          <th>
                                            <div class="text-left">
                                              <h5 class="text-info">Foto</h5>
                                            </div>
                                          </th>
                                        </tr>
                                    </thead>
                                   
                                  </table>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                      </div>
                      <div class="btn-download">
                          <a class="btn btn-success px-3 py-2" href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/" target="_blank" >
                              <svg class="icon-24"  width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.4" d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z" fill="currentColor"></path>
                                  <path d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z" fill="currentColor"></path>
                              </svg>
                          </a>
                      </div>
                </div>
          </div>
      </div>
    </div>
    </div>
         
            
            
  

  
     
    <?= $this->include('admin/adminfooter') ?>

    <!-- Library Bundle Script -->
    <script src="../assetsadmin/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="../assetsadmin/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="../assetsadmin/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="../assetsadmin/js/charts/vectore-chart.js"></script>
    <script src="../assetsadmin/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="../assetsadmin/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="../assetsadmin/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="../assetsadmin/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="../assetsadmin/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="../assetsadmin/vendor/aos/dist/aos.js"></script>
    
    <!-- App Script -->
    <script src="../assetsadmin/js/hope-ui.js" defer></script>
    
  </body>
</html>