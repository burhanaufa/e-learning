<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>E-learning SMA 1 Semarang</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('inc.header')
        @include('inc.sidebar')
        <main class="py-4">
                @include('inc.mesagges')
                @yield('content')
            </main>
</div>
<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
@include('inc.footer')
</html>
