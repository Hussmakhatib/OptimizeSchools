<!-- resources/views/layouts/app.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'OptimizeSchools')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('meta_description','Helping schools cut costs with smarter technology')">
  <meta name="theme-color" content="#0d3b66">
  <link rel="stylesheet" href="{{ asset('css/optimizeschools.css') }}">
  <link rel="icon" href="data:,">
  @stack('styles')
</head>
<body>
  <script src="{{ asset('js/optimizeschools.js') }}" defer></script>
  @stack('scripts')
  <header>
    <div class="container nav" aria-label="Primary">
      <div class="brand">
        <div class="logo" aria-hidden="true">OS</div>
        <a href="{{ url('/') }}" style="text-decoration:none;color:inherit;"><span>OptimizeSchools</span></a>
      </div>
      <nav class="list" style="grid-template-columns:auto auto auto auto auto; gap:12px;" aria-label="Top navigation">
        <a href="{{ route('services.index') }}">Services</a>
        <a href="{{ route('cases.index') }}">Results</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('resources.index') }}">Resources</a>
        <a class="btn" href="{{ route('contact') }}">Book a Free Consultation</a>
      </nav>
    </div>
  </header>

  <main>
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
</body>
</html>
