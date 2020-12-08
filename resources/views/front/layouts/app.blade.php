<!DOCTYPE html>

<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Favicons -->
    <link rel="icon" href="/front/img/icon.png" sizes="16x16" type="image/png">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/front/css/inc/plugins.css">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/front/css/style.css">
    @yield('css')
</head>

<body>
    
    @include('front.layouts.header')
    
    <!-- main content -->
    
    @yield('content')
    
    <footer class="site_footer text-center bg_blue_grad text-white">
        <div class="container">
            <p>Menova Tech © 2020 All Rights Reserved.</p>
        </div>
    </footer>
    <script src="/front/js/jQuery-plugins.js"></script>
    <script src="/front/js/scripts.js"></script>
    
    @yield('js')
</body>

</html>