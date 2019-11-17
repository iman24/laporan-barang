<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/asset/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/asset/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/asset/plugins/sweetalert2/sweetalert2.min.css">
 
  <!-- Google Font: Source Sans Pro -->
 <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li></ul>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  
    SEARCH FORM ->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/asset/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/asset/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/asset/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Laporan Stock</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
        
        <?php
        if ($access == 1)
        echo 'admin';
        else
        echo 'kasir';
        
        ?>
        
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="/dashboard" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview menu-open">
          <a href="/dashboard/tambah" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Tambah Barang
              
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Laporan Stock
              
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


<!-- Main content -->
<section class="content">
  <div class="row mb-3">
    <div class="col-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-barang">
        Tambah data barang
      </button>
    </div>
  </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" width="100%" class="table table-bordered table-striped">
                <thead>
                <tr>
                    
                  <th>Kode Barang</th>
                  <th>Nama Barang</th> 
                <th>Aksi</th>
                 </tr>
                </thead>

                <tbody>
                           
                </tbody>
                <tfoot>
                <tr>
                    
                  <th>Kode barang</th>
                  <th>Nama Barang</th>
                  <th>Aksi</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>


  <!-- Modal tambah barang-->
  <div class="modal fade" id="tambah-barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

          <form id="formtambahbarang">
              <div class="form-group">
                <label for="formGroupExampleInput">Kode Barang</label>
                <input type="number" class="form-control" id="kodebarang" placeholder="masukkan kode barang">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nama barang</label>
                <input type="text" class="form-control" id="namabarang" placeholder="masukkan nama barang">
              </div>
            </div>



            <div class="modal-footer">
              <input type="reset" class="btn btn-success" value="Reset">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="button" onclick="tambah_barang()" class="btn btn-primary" data-dismiss="modal">Simpan data</button>
            </div>
          </form> <!--form-->
        </div>
      </div>
    </div>
  </div>


<!-- Modal edit barang-->
<div class="modal fade" id="edit-barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

          <form id="formeditbarang">
              <div class="form-group">
                <label for="formGroupExampleInput">Kode Barang</label>
                <input type="number" class="form-control" id="edit-kode-barang" placeholder="masukkan kode barang">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nama barang</label>
                <input type="text" class="form-control" id="edit-nama-barang" placeholder="masukkan nama barang">
              </div>
            </div>



            <div class="modal-footer">
              <input type="reset" class="btn btn-success" value="Reset">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="button" onclick="edit_barang()" class="btn btn-primary" data-dismiss="modal">Update data</button>
            </div>
          </form> <!--form-->
        </div>
      </div>
    </div>
  </div>





  </div>
      <footer class="main-footer">
                        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                        All rights reserved.
                        <div class="float-right d-none d-sm-inline-block">
                          <b>Version</b> 3.0.0-rc.5
                        </div>
                      </footer>
                    
              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
              </aside>
              <!-- /.control-sidebar -->
            </div>
                      
            <!-- ./wrapper -->
            
            <!-- jQuery -->
            <script src="/asset/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="/asset/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
              $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="/asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="/asset/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
           <!-- <script src="/asset/plugins/sparklines/sparkline.js"></script>-->
            <!-- JQVMap -->
            <script src="/asset/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="/asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="/asset/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="/asset/plugins/moment/moment.min.js"></script>
            <script src="/asset/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="/asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="/asset/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="/asset/dist/js/adminlte.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="/asset/dist/js/pages/dashboard.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="/asset/dist/js/demo.js"></script>
            <!-- DataTables -->
            <script src="/asset/plugins/datatables/jquery.dataTables.js"></script>
            <script src="/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
            <script src="/asset/plugins/sweetalert2/sweetalert2.min.js"></script>
            
            



        <script>
                    
                  
          // $(function() {
          //   $('#example1').DataTable({
          //     "columnDefs": [
          //   { "width": "5%", "targets": 0 },
          //   { "width": "10%", "targets": 1 }
          
          // ]
          //   });
          
          // });

          function data_init(){
                  $.getJSON("/dashboard/tambah", function(result){
                    var table;
                    table = $("#example1").DataTable();
                    $.each(result, function(i, field){
                      // $("div").append(field + " ");
                  //     data += `<tr>
                  //     <td>`+ i+1 +`</td>
                  //   <td>`+ field.kode_barang +`</td>
                  //   <td>`+ field.nama_barang +`</td>
                  //   <td><button data-toggle="modal" data-target="#edit-barang" data-edit="`+ field.kode_barang+`" class="btn btn-primary edit-barang">Edit</button> <button onclick="konfirmasi_hapus(`+ field.kode_barang+`)" id="hapus" data-kode="`+ field.kode_barang +`" class="btn btn-danger hapus-barang">Hapus</button></td>
                  // </tr>`;
                  
                  table.row.add([ result[i].kode_barang, result[i].nama_barang, `<button data-toggle="modal" data-target="#edit-barang" data-edit="`+ result[i].kode_barang+`" class="btn btn-primary edit-barang">Edit</button> <button onclick="konfirmasi_hapus(`+ result[i].kode_barang+`)" id="hapus" data-kode="`+ result[i].kode_barang +`" class="btn btn-danger hapus-barang">Hapus</button></td>`]);
                    });
                  console.log("receive: ajax data");
                  table.draw();
                  
                  //$("#data-barang").html(data);

                  });
                  console.log('end ajax');
                }



          function konfirmasi_hapus(id){
            
            Swal.fire({
            title: 'Anda yakin?',
            text: "Tindakan ini tidak dapat diurungkan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Dihapus!',
                'Barang dengan id'+ id +' berhasil dihapus',
                'success'
              )
              $.get("/dashboard/hapus_barang/"+id,
              function(result){
                if(result == "success"){
                  Swal.fire(
                          'Berhasil!',
                          'data berhasil di hapus!',
                          'success'
                        )
                }else if(result == "failed"){
                  Swal.fire(
                          'Gagal!',
                          'data ggal di hapus',
                          'error'
                        )

                }
                data_init();
              }
              )
            }
          })
          }


          data_init();



    


    

    function tambah_barang(){
      var kode = $("#kodebarang").val();
      var nama = $("#namabarang").val();

      if (kode == '' || nama == ''){
      Swal.fire({
        title: 'Upsss',
        text: 'Data tidak boleh kosong!',
        type: 'error'
      }).then(function(){
       data_init();
      });
      return false;
    }

    $.post("/dashboard/tambah_barang", {"kode-barang": kode, "nama-barang": nama},
    function(result){
  
      if(result == 'success'){
        Swal.fire({
          title: 'Mantapp!',
          text: 'Data berhasil disimpan!',
          type: 'success'
        })
      }else if(result == 'exist'){
        Swal.fire({
          title: 'Oopppsss!',
          text: 'kode barang sudah ada!',
          type: 'warning'
        })
      }else if(result == 'failed'){
        Swal.fire({
          title: 'Upsss!',
          text: 'Data gagal disimpan!',
          type: 'error'
        })
      }
      data_init();
    }
    );
  }


        </script>





  </body>
</html>