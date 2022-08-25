<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Snotes</title>
    <link rel="icon" type="image/png"  href="{{ asset('img/favicon2.png') }}">
    <link rel="shortcut icon" type="image/png"  href="{{ asset('img/favicon2.png') }}">
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @yield('js')
    @yield('css')
</head>
<body>

<!-- Top container -->

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->

<div class="w3-bar w3-black w3-large" style="z-index:4">
<div class="w3-content" style="max-width:1400px">
  <a href="/" style="color:#9ab;"><span class="w3-bar-item w3-left">Anasayfa</span></a>
  <a href="/hakkimda" style="color:#9ab;"><span class="w3-bar-item w3-left">Hakkımda</span></a>
  <a href="/iletisim" style="color:#9ab;"><span class="w3-bar-item w3-left">İletişim</span></a>
  <div class="w3-dropdown-hover">
  <button class="w3-btn" style="color:#9ab;" >Kategoriler</button>
  <div class="w3-dropdown-content w3-white w3-card-4">
  @foreach($categories as $category)
    <a style="color:black" href="{{ url('category', ['id' => $category->id]) }}">{{ $category->category }}</a>
  @endforeach
  </div>
</div>
  <a href="/" style="color:#9ab;"><span class="w3-bar-item w3-right">Snotes</span></a>
</div>
</div>
<div class="w3-container">
<div class="w3-content" style="max-width:1400px"><div>
<main class="py-4">
    @yield('content')
</main>
</div>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom" style="background-color:#2c3440;width:100%;position:fixed;
   bottom:0;
   left:0; height:50px; ">
     <div class="container">
     <p class="navbar-text">© 2022 Copyright: Snotes.com</p>
     </div>
</div>
</div>

<!-- Footer -->

</body>
</html>
