<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <div>
      <nav>
        <a href="/blog">Home</a>
        <a href="">Blog</a>
      </nav>
    </div>
    <br>
    @yield('content')
    <br>
    <div class="footer">
      <footer>
        Copyright : Laravel
      </footer>
    </div>
  </body>
</html>
