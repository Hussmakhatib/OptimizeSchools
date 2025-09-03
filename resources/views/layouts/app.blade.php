<!-- resources/views/layouts/app.blade.php -->
<!doctype html>
<html lang="en">
<header class="site-header">
  <div class="container header-inner">
    <div class="brand">
      <div class="logo" aria-hidden="true">OS</div>
      <a href="{{ url('/') }}" class="brand-name" style="text-decoration:none;color:inherit;">OptimizeSchools</a>
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
</body>
</html>
