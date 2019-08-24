<!DOCTYPE HTML>
<html lang="en">
@include('partials/header')
    
<body class="theme-light" data-highlight="blue2">
    
<div id="page-preloader">
    <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
</div>
<div class="bg-highlight" id="reading-progress-bar"></div>

@yield('content')

@include('partials/footer')
</body>
</html>