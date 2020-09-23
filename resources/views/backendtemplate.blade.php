<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Backend @yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  {{-- Summernote CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

  {{-- JQ --}}
  <script type="text/javascript" src="{{asset('frontend_template/vendor/jquery/jquery.min.js')}}"></script>

  {{-- Summernote JS --}}
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  @yield('script')
</body>
</html>