<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>E-learning SMA 1 Semarang</title>

  <!-- Font Awesome Icons -->\
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('inc.header')
    @include('inc.sidebar')
    <div class="content-wrapper mh-100vh">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          @include('inc.mesagges')
          @yield('content')
        </div><!-- /.container-fluid -->
      </div>
    </div>
    <!-- <main class="py-4">

    </main> -->
  </div>
  <!-- REQUIRED SCRIPTS -->
  <script src="{!! asset('custom/js/custom.js') !!}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
@include('inc.footer')

</html>
