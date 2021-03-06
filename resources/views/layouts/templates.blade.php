<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/templates/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/templates/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/templates/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/templates/dist/css/adminlte.min.css">
  <!-- DatePicker -->
  <link rel="stylesheet" href="/templates/date/air-datepicker/dist/css/datepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start
            <div class="media">
              <img src="/templates/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start
            <div class="media">
              <img src="/templates/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start
            <div class="media">
              <img src="/templates/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
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
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="/templates/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/templates/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Adhy Syahputra</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url ('/dashboard')}}" class="nav-link {{Request::is('/','dashboard')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- <li class="nav-item has-treeview {{Request::is('pengguna','karyawan','kriteria','nilaikriteria','penilaian','pengguna/create','karyawan/create','kriteria/create','nilaikriteria/create','penilaian/create')?'menu-open':''}}">
            <a href="#" class="nav-link {{Request::is('pengguna','karyawan','kriteria','nilaikriteria','penilaian','pengguna/create','karyawan/create','kriteria/create','nilaikriteria/create','penilaian/create')?'active':''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url ('/pengguna')}}" class="nav-link {{Request::is('pengguna','pengguna/create')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('/karyawan')}}" class="nav-link {{Request::is('karyawan','karyawan/create')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('/kriteria')}}" class="nav-link {{Request::is('kriteria','kriteria/create')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('/nilaikriteria')}}" class="nav-link {{Request::is('nilaikriteria','nilaikriteria/create')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('/penilaian')}}" class="nav-link {{Request::is('penilaian','penilaian/create')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penilaian</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item">
            <a href="{{ url ('/perhitungan')}}" class="nav-link {{Request::is('perhitungan','perhitungan/hasil')?'active':''}}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Perhitungan
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="{{ url ('/rekap')}}" class="nav-link {{Request::is('perhitungan/rekap')?'active':''}}">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Rekap Hasil
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{ url ('/category')}}" class="nav-link {{Request::is('perhitungan/rekap')?'active':''}}">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Category
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
    @yield('konten')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/templates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/templates/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/templates/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/templates/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/templates/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/templates/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/templates/dist/js/demo.js"></script>
<!-- DatePicker -->
<script src="/templates/date/air-datepicker/dist/js/datepicker.js"></script>
<script src="/templates/date/air-datepicker/dist/js/i18n/datepicker.en.js"></script>

<script type="text/javascript">
  $('body').on('change', '.absensi', function() {
  let id = $(this).val();

  // console.log(absensi);
  $.ajax({
    url: '/getnilainamanilaikriteria/'+id,
    dataType: 'JSON',
    type: 'GET',
    success: (function(data) {
      // console.log(data);
      $('.nilaiabsensi').val(data[0]['nilai']);
    })
  })
  
})
</script>

<script type="text/javascript">
  $('body').on('change', '.kedisiplinan', function() {
  let id = $(this).val();

  // console.log(absensi);
  $.ajax({
    url: '/getnilainamanilaikriteria/'+id,
    dataType: 'JSON',
    type: 'GET',
    success: (function(data) {
      // console.log(data);
      $('.nilaikedisiplinan').val(data[0]['nilai']);
    })
  })
  
})
</script>

<script type="text/javascript">
  $('body').on('change', '.loyalitas', function() {
  let id = $(this).val();

  // console.log(absensi);
  $.ajax({
    url: '/getnilainamanilaikriteria/'+id,
    dataType: 'JSON',
    type: 'GET',
    success: (function(data) {
      // console.log(data);
      $('.nilailoyalitas').val(data[0]['nilai']);
    })
  })
  
})
</script>

<script type="text/javascript">
  $('body').on('change', '.pelayanan', function() {
  let id = $(this).val();

  // console.log(absensi);
  $.ajax({
    url: '/getnilainamanilaikriteria/'+id,
    dataType: 'JSON',
    type: 'GET',
    success: (function(data) {
      // console.log(data);
      $('.nilaipelayanan').val(data[0]['nilai']);
    })
  })
  
})
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

</body>
</html>
