<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <title>ADMIN LOGIN BOT</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url("template")}}/styles/style.css">
    <link rel="stylesheet" type="text/css" href="{{url("template")}}/styles/framework.css">
    <link rel="stylesheet" type="text/css" href="{{url("template")}}/fonts/css/fontawesome-all.min.css">
</head>

<body class="theme-light" data-highlight="blue2">

<div id="page-preloader">
    <div class="loader-main">
        <div class="preload-spinner border-highlight"></div>
    </div>
</div>


<div id="page">
    <div class="header header-fixed header-logo-app header-transparent">
        <a href="index.html" class="header-title color-white">Halama Login Admin</a>
        {{--        <a href="#" class="header-icon header-icon-1 color-white" data-back-button><i class="fas fa-arrow-left"></i></a>--}}
        {{--        <a href="#" class="header-icon header-icon-2 color-white" data-menu="menu-1"><i class="fas fa-bars"></i></a>--}}
        {{--        <a href="#" class="header-icon header-icon-3 color-white" data-menu="menu-2"><i class="fas fa-cog"></i></a>--}}
        {{--        <a href="#" class="header-icon header-icon-4 color-white" data-toggle-theme><i class="fas fa-moon"></i></a>--}}
    </div>

    <div class="page-content-black"></div>

    <div class="page-content">
        <div class="cover-wrapper cover-no-buttons">
            <div data-height="cover" class="caption bottom-0">
                <div class="caption-center">
                    <form action="{{route("login_post")}}" method="post">
                        {{csrf_field()}}
                        <div class="left-50 right-50">
                            <h1 class="color-white center-text uppercase ultrabold fa-4x">ADMIN CHAT BOT</h1>
                            {{--                        <p class="color-highlight center-text font-12 under-heading bottom-30 top-5">--}}
                            {{--                            Let's get you in your account--}}
                            {{--                        </p>--}}
                            <div class="input-style input-light has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-user font-11"></i>
                                <span>Username</span>
                                <input type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="input-style input-light has-icon input-style-1 input-required bottom-30">
                                <i class="input-icon fa fa-lock font-11"></i>
                                <span>Password</span>
                                <em>(required)</em>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="one-half">
                                {{--                            <a href="pageapp-register.html" class="font-11 color-white opacity-50">Create Account</a>--}}
                            </div>
                            <div class="one-half last-column">
                                {{--                            <a href="pageapp-forgot.html" class="text-right font-11 color-white opacity-50">Fogot Credentials</a>--}}
                            </div>
                            <button class="back-button button button-full button-m shadow-large button-round-small bg-highlight top-30 bottom-0" type="submit">LOGIN</button>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="caption-overlay bg-black opacity-95"></div>
            <div class="caption-bg" style="background-image:url({{url('template/images/pictures/22t.jpg')}})"></div>
        </div>
    </div>

    <div class="menu-hider"></div>
</div>


<script type="text/javascript" src="{{url("template")}}/scripts/jquery.js"></script>
<script type="text/javascript" src="{{url("template")}}/scripts/plugins.js" async></script>
<script type="text/javascript" src="{{url("template")}}/scripts/custom.js" async></script>
</body>

