<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <x-layouts.backend.navbar></x-layouts.backend.navbar>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <x-layouts.backend.sidebar></x-layouts.backend.sidebar>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @if (session('status'))
            <div class="col-lg-12"><br>
                <div class="alert  alert-success" id="alert" style="color:darkgreen">
                    <strong><i class="fa fa-info-circle"></i> Muvaffaqiyatli:</strong>
                      <em>{{ session('status') }}</em>
                      {{-- <button type="button" id="alertClose"class="btn btn-sm cookie-btn okbtn" data-dismiss="alert" aria-label="Close"><i class="fas fa-times" style="color:darkgreen;"></i></button> --}}
                </div>
            </div>
        @endif
       
        {{ $slot }}

      </div>

    </section>


  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <div class="flex">

        <!-- Profile Image -->
        <div class="card card-primary">
          <div class="card-body box-profile">
            <div class="text-center mb-2">
              <img class="profile-user-img mb-2 bg-white img-fluid img-circle"
                   src="{{ auth()->user()->photo == null ? asset('backend/dist/img/user.jpg') : asset('storage/' . auth()->user()->photo) }}"
                   alt="User profile picture">
                   <a href="{{ route('user.photo', auth()->user()->id) }}" type="submit" class="text-primary" style="font-size:14px"><i class="fas fa-camera"></i> Profil rasmini belgilash</a>
            </div>

            <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

            <h3 class="profile-username text-center">{{ auth()->user()->surname }}</h3>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b class="mb-1">Email</b><br><a>{{ auth()->user()->email }}</a>
              </li>
              <li class="list-group-item">
                <b class="mb-1">Telefon</b><br><a>{{ auth()->user()->phone }}</a>
              </li>
            </ul>

          </div>
        </div>

        <div class="card card-primary">
          <div class="card-body box-profile">
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <a href="{{ route('user.settings') }}" class="text-white"><b class="mb-1 mr-2"><i class="fa fa-cog"></i></b> Sozlamalar</a>
              </li>
              <li class="list-group-item">
                <form action="{{ route('logout') }}" method="POST" style="margin-left:-10px;">
                  @csrf
                  <b class="mb-1"><button class="btn text-white"><i class="fa fa-sign-out-alt mr-2"></i>Chiqish</button></b>
                </form>
              </li>
            </ul>

          </div>
        </div>

      </div>
  </aside>

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>

<script src="{{ asset('backend') }}/plugins/flot/jquery.flot.js"></script>
<script src="{{ asset('backend') }}/plugins/flot/plugins/jquery.flot.pie.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('backend') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('backend') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend') }}/dist/js/pages/dashboard2.js"></script>

<script type="text/javascript">
  setTimeout(function () {
      // Closing the alert
      $('#alert').alert('close');
  }, 4000);
</script>

<script>
  $(function () {
    /*
     * DONUT CHART
     * -----------
     */
@if ($consumers->count() != 0)

    var donutData = [
      {
        label: 'Faol',
        data : {{ (100 / $consumers->count()) * $consumers_active->count() }},
        color: '#28a745'
      },
      {
        label: 'Passiv',
        data : {{ (100 / $consumers->count()) * $consumers_passive->count() }},
        color: 'rgb(216, 158, 12)'
      },
      {
        label: 'Nofaol',
        data : {{ (100 / $consumers->count()) * $consumers_noactive->count() }},
        color: '#dc3545'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })

    @endif
    
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

</body>
</html>
