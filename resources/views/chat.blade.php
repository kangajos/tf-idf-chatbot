@extends('layout/layout')
@section('content')
    <div id="page">
        {{--        @include('partials/header_content2')--}}

        <div class="header header-fixed header-logo-app">
            <a href="#" class="header-title">Chat</a>
            <a href="#" class="header-icon header-icon-1" data-back-button><i class="fas fa-arrow-left"></i></a>
            {{--            <a href="#" class="header-icon header-icon-2" data-menu="menu-1"><i class="fas fa-bars"></i></a>--}}
            {{--            <a href="#" class="header-icon header-icon-3" data-menu="menu-2"><i class="fas fa-cog"></i></a>--}}
            {{--            <a href="#" class="header-icon header-icon-4" data-toggle-theme><i class="fas fa-moon"></i></a>--}}
        </div>

        <div class="page-content header-clear-medium shadow-none">
            {{--        <a href="{{url('/web/chat')}}" id="reload_pages">Periksa Balasan</a>--}}
            <div class="content chat-bot">
                <div class="speech-bubble speech-left bg-highlight">
                    Selamata Datang {{strtoupper(Session::get('username'))}}, silahkan ajukan pertanyaanMu sekarang ...
                </div>
                {{--            @foreach($chat as $val)--}}
                {{--            <div class="speech-bubble speech-right color-black">--}}
                {{--                {{$val->pertanyaan}}--}}
                {{--            </div>	--}}
                {{--            <div class="clear"></div>--}}
                {{--            <div class="speech-bubble speech-left bg-highlight">--}}
                {{--                {{$val->hasil_faq}}--}}
                {{--            </div>	--}}
                {{--            <div class="clear"></div>--}}
                {{--            <em class="speech-read">Delivered & Read - {{$val->tgl}}</em>--}}
                {{--            @endforeach--}}
            </div>
            <form action="#" id="formChat" method="post">
                {!! csrf_field() !!}
                <div class="speach-input">
                    <input type="hidden" name="email" value="{{Session::get('email')}}">
                    <input type="text" placeholder="Enter your Question" name="pertanyaan"
                           onkeypress="return noenter()">
                    <a href="#" id="post_chat" class="bg-highlight" type="submit"><i class="fa fa-arrow-up"></i></a>
                </div>
            </form>


        </div>
    </div>
@endsection