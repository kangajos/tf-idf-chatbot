@extends('layout/layout')
@section('content')
<div id="page">
{{--    @include('partials/header_content')--}}
    <div class="header header-fixed header-logo-app">
        <a href="#" class="header-title ultrabold"><span class="color-highlight">APP</span> CHAT-BOT</a>
        <a href="#" class="header-icon header-icon-1" data-menu="menu-1"><i class="fas fa-bars"></i></a>
{{--        <a href="#" class="header-icon header-icon-2" data-menu="menu-2"><i class="fas fa-cog"></i></a>--}}
        <a href="#" class="header-icon header-icon-3" data-toggle-theme><i class="fas fa-moon"></i></a>
    </div>
    <div id="menu-1" class="menu menu-box-left" data-menu-width="250" data-menu-effect="menu-over" data-menu-select="page-home" style="width: 250px; opacity: 1; display: block;"><a href="#" class="nav-title color-theme"><span class="color-highlight">CHAT</span>BOT</a>
        <span class="nav-text color-theme opacity-50">STT-PLN</span>

        <div class="nav nav-medium">
            <div class="divider"></div>

            <a id="page-components" href="{{url("web/chat")}}">
                <i class="fa fa-envelope color-blue2-dark"></i><span>PESAN</span><i class="fa fa-angle-right"></i>
            </a>
            <a id="page-components" href="{{url("login")}}">
                <i class="fa fa-power-off color-blue2-dark"></i><span>KELUAR</span><i class="fa fa-angle-right"></i>
            </a>

            <div class="divider top-15"></div>
            <p>Copyright <span class="copyright-year"></span> - Enabled. All rights Reserved.</p>
        </div>
    </div>

    <div class="page-content">
        <div class="cover-slider owl-carousel bg-black">
            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <h1 class="center-text bottom-30"><i class="fa fa-4x fa-smile color-highlight "></i></h1>
                    <h1 class="center-text color-white bolder fa-2x">Selamat Datang</h1>
                    <h6 class="center-text color-white bottom-20">Silahkan Ajukan Pertanyaaan Di Sini.</h6>

                    <a href="{{url('')}}/web/chat" class="button button-s bg-highlight button-round-huge button-center-small shadow-large">Klik Disini</a>
                </div>
                <div class="caption-overlay bg-black opacity-50"></div>
                <div class="caption-bg bg-2"></div>
            </div>         

            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <h1 class="center-text bottom-30"><i class="fa fa-4x fa-smile color-highlight "></i></h1>
                    <h1 class="center-text color-white bolder fa-2x">Selamat Datang</h1>
                    <h6 class="center-text color-white bottom-20">Silahkan Ajukan Pertanyaaan Di Sini.</h6>

                    <a href="{{url('')}}/web/chat" class="button button-s bg-highlight button-round-huge button-center-small shadow-large">Klik Disini</a>
                </div>
                <div class="caption-overlay bg-black opacity-50"></div>
                <div class="caption-bg bg-8"></div>
            </div>

            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <h1 class="center-text bottom-30"><i class="fa fa-4x fa-smile color-highlight "></i></h1>
                    <h1 class="center-text color-white bolder fa-2x">Selamat Datang</h1>
                    <h6 class="center-text color-white bottom-20">Silahkan Ajukan Pertanyaaan Di Sini.</h6>

                    <a href="{{url("")}}/web/chat" class="button button-s bg-highlight button-round-huge button-center-small shadow-large">Klik Disini</a>
                </div>
                <div class="caption-overlay bg-black opacity-50"></div>
                <div class="caption-bg bg-6"></div>
            </div>
        </div>

        <div class="divider divider-margins"></div>
        
{{--        @include('partials/template_footer_text')--}}
        <div class="footer">
            <a href="#" class="footer-title"><span class="color-highlight">APP </span>Chat-Bot</a>
            <p class="footer-text">-</p>
            <div class="footer-socials">
                <a href="#" class="round-tiny shadow-medium bg-facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="round-tiny shadow-medium bg-twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="round-tiny shadow-medium bg-phone"><i class="fa fa-phone"></i></a>
                <a href="#" data-menu="menu-share" class="round-tiny shadow-medium bg-red2-dark"><i class="fa fa-share-alt"></i></a>
                <a href="#" class="back-to-top round-tiny shadow-medium bg-dark1-light"><i class="fa fa-angle-up"></i></a>
            </div>
            <p class="footer-copyright">Copyright © Enabled <span id="copyright-year">2019</span>. All Rights Reserved.</p>
        </div>
    </div>
{{--    @include('partials/template_footer_id') --}}
    
    <div class="menu-hider"></div>
</div>

@endsection
