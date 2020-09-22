<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Backend @yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>

  <script type="text/javascript" src="{{asset('frontend_template/vendor/jquery/jquery.min.js')}}"></script>

  @yield('script')
  
</body>
</html>