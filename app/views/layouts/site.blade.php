<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyCallCloud</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" href="{{ asset('css/site.css') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png') }}">
  <link rel="shortcut icon" href="{{ asset('ico/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".nav-collapse" data-offset="100">

  <div id="top"></div>
  
  <header>
    @section('header')
      <nav class="navbar navbar-fixed-top">
        <div class="container">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo-50.png') }}" />
          </a>
          <?php
          $homepage = URL::current().'/' === asset('');
          ?>
          <div class="nav-collapse collapse">
            <ul class="nav navbar-nav pull-right">
              <li{{ $homepage ? ' class="active"' : '' }}>
                <a href="{{ !$homepage ? route('home') : '' }}#about">About</a>
              </li>
              <li>
                <a href="{{ !$homepage ? route('home') : '' }}#services">Services</a>
              </li>
              <li>
                <a href="{{ !$homepage ? route('home') : '' }}#team">Team</a>
              </li>
              <li>
                <a href="{{ !$homepage ? route('home') : '' }}#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @show
  </header>
  
  <section data-role="main">
    @yield('content')
  </section>

  <footer>
    @section('footer')
      <footer>
        <div class="container">
          
          <p class="text-center lead">
            MyCallCloud
          </p>

          <p class="pull-left">
            Copyright &copy; {{ date('Y') }} MyCallCloud
          </p>

          <p class="pull-right">
            <a href="{{ !$homepage ? route('home') : '' }}#about">About</a>
            |
            <a href="{{ !$homepage ? route('home') : '' }}#services">Services</a>
            |
            <a href="{{ !$homepage ? route('home') : '' }}#team">Team</a>
            {{--|
            <a href="{{ !$homepage ? route('home') : '' }}#blog">Blog</a>--}}
            |
            <a href="{{ !$homepage ? route('home') : '' }}#contact">Contact</a>
          </p>

        </div>
      </footer>
    @show
  </footer>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script src="{{ asset('js/site.js') }}"></script>
  @yield('scripts')
</body>
</html>
