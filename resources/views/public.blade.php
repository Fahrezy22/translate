<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KAMUS | Bugis - Indonesia</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('template/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="{{asset('template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Translate</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Kamus Bahasa Daerah Bugis</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
              <div class="d-flex justify-content-center">
                  <div class="col-4">
                      <div class="card">
                          <div class="card-header">
                              <h4>Masukan Kata </h4>
                          </div>
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="indo" class="label-control"></label>
                                  <select name="indo" id="indo" class="form-control select2">
                                      <option value="" selected></option>
                                      @foreach ($data as $d)
                                          <option value="{{$d->indonesia}}">{{$d->indonesia}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4>Hasil terjemahan</h4>
                  </div>
                  <div class="card-body">
                      <table class="table" style="border: none">
                          <thead>
                              <tr>
                                  <th>Indonesia</th>
                                  <th>Bugis</th>
                                  <th>Jenis</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td ><input id="translateIndo" type="text" style="border: none" readonly></td>
                                  <td ><input id="translateDaerah" type="text" style="border: none" readonly></td>
                                  <td ><input id="translateJenis" type="text" style="border: none" readonly></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('template/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template/dist/js/demo.js')}}"></script>

<script>
  $(function () {
    
    $('#indo').select2()
  })
  $(document).ready(function() {
        $("#indo").change(function () {
            var indo = $('#indo').val();
            $.ajax({
                url: '{{route('sentence.search')}}',
                data: {
                    'indo': indo
                },
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#translateIndo').val(data[0].indonesia);
                    $('#translateDaerah').val(data[0].daerah);
                    $('#translateJenis').val(data[0].type);
                },
            });
        });
    });
</script>
</body>
</html>