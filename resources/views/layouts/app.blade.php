<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'OptimizeSchools')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('meta_description','Helping schools cut costs with smarter technology')">
  <meta name="theme-color" content="#0d3b66">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/optimizeschools.css') }}">
  @stack('styles')
</head>
<body>

  <!-- Fixed header (125px) -->
  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <div class="logo" aria-hidden="true">OS</div>
        <a href="{{ url('/') }}" class="brand-name" style="text-decoration:none;color:inherit;">
          OptimizeSchools
        </a>
      </div>

      <nav class="navlinks" aria-label="Primary Navigation">
        <a href="#home" aria-current="page">Home</a>
        <a href="#services">Services</a>
        <a href="#results">Results</a>
        <a href="#about">About</a>
        <a href="#resources">Resources</a>
        <a class="btn" href="#contact">Book a Call</a>
      </nav>
    </div>
  </header>

  <!-- Content starts below fixed header -->
  <main class="page">
    @yield('content')
  </main>

  <footer>
    <div class="container grid" style="grid-template-columns:1fr 1fr 1fr">
      <div>
        <strong>OptimizeSchools</strong><br>
        <span class="muted">Helping Schools Cut Costs with Smarter Technology</span>
      </div>
      <div class="muted">
        <div>Email: <a href="mailto:hello@optimizeschools.com">hello@optimizeschools.com</a></div>
        <div>Phone: <a href="tel:+0000000000">+000 000 0000</a></div>
        <div>Location: Global</div>
      </div>
      <div class="muted">
        <a href="{{ route('services.index') }}">Services</a> •
        <a href="{{ route('cases.index') }}">Results</a> •
        <a href="{{ route('resources.index') }}">Resources</a> •
        <a href="{{ route('contact') }}">Contact</a>
        <div style="margin-top:10px">© {{ date('Y') }} OptimizeSchools. All rights reserved.</div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('js/optimizeschools.js') }}" defer></script>
  @stack('scripts')
</body>
</html>
