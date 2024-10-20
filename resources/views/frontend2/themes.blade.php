<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" class="notranslate" translate="no">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google" content="notranslate">
  <title>Website Resmi Desa Cikedokan </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="keywords" content="Desa Cikedokan, portal desa, Desa Cerdas, desa digital, sid, sistem informasi desa, sistem informasi Desa Cikedokan, web, blog, informasi, website, Desa , kecamatan, kabupaten, indonesia, kampung, Cikedokan, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Barat, kadus, kades, kawil, camat, lurah, statistik, kependudukan, ektp, e-ktp, blt, dana desa, bantuan, layanan mandiri, Desa  online, Cikedokansidepe,desa digital" />
  <meta property="og:site_name" content="Desa Cikedokan" />
  <meta property="og:type" content="article" />
  <meta name="description" content="Website Desa Cikedokan" />

  <link rel="shortcut icon" href="https://cikedokan.sidepe.com/desa/logo/logo_bekasi__sid__x5fgqNL.png" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://cikedokan.sidepe.com/rss.xml" />

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2/themes/sederhana/assets/bootswatch/flatly/bootstrap.min.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/bootstrap/css/font-awesome.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/bootstrap/css/dataTables.bootstrap.min.css')}}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/bootstrap/css/select2.min.css') }}">

  <!-- Bootstrap Date time Picker -->
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/bootstrap/css/bootstrap-datetimepicker.min.css') }}">

  <!-- OpenStreetMap Css -->
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/css/leaflet.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/css/leaflet.pm.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend2/themes/sederhana/assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2/themes/sederhana/assets/css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2/themes/sederhana/assets/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2/themes/sederhana/assets/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2/themes/sederhana/assets/lightbox/css/lightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2//assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend2/assets/bootstrap/css/ionicons.min.css') }}">

  <!-- Quicksand Google Fonts -->
  <link rel="stylesheet" href="https://cikedokan.sidepe.com//assets/css/font.css">

  <!-- OpenStreetMap Js-->
  <script src="{{ asset('assets/frontend2/assets/js/leaflet.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/js/turf.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/js/leaflet.pm.min.js')}}"></script>

  <!-- jQuery -->
  <script src="{{ asset('assets/frontend2/themes/sederhana/assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/js/axios.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend2/themes/sederhana/assets/lightbox/js/lightbox-plus-jquery.min.js')}}"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/moment.min.js')}}"></script>

  <!-- Select2 -->
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/select2.full.min.js')}}"></script>

  <!-- DataTables -->
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/dataTables.bootstrap.min.js')}}"></script>

  <!-- bootstrap Date time picker -->
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/id.js')}}"></script>

  <!-- bootstrap Date picker -->
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/bootstrap/js/bootstrap-datepicker.id.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/js/validasi.js')}}"></script>
  <script src="{{ asset('assets/frontend2/assets/js/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('assets/frontend2/themes/sederhana/assets/js/script.js')}}"></script>
  <script src="{{ asset('assets/frontend2/themes/sederhana/assets/js/owl.carousel.min.js')}}"></script>
  <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
  </script>


</head>

<body class="skin-purle">
  <div class="wrapper">

    <!-- Navbar inlcude -->
    @include('frontend2.layout.navbar')

    <!-- Content -->
    @yield('content')

    <!-- include footer -->
    @include('frontend2.layout.footer')

    @yield('script')
</body>
</html>