@extends('layout/layout')
@section('content')
<div id="page">   
@if (Session::has('alert'))
    <li>{!! session::get('alert') !!}</li>
@endif
	<div class="page-content">	   
        
        <div data-height="cover" class="caption bottom-0">
            <div class="caption-center">

                <div class="left-50 right-50 top-50">
                <form action="{{url("")}}/login/post_login" method="post">
                    {!! csrf_field() !!}
                    <h1 class="center-text uppercase ultrabold fa-3x">CHAT BOT</h1>
                    <p class="center-text font-11 under-heading bottom-30 color-highlight">
                        Let's get you logged in
                    </p>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-user font-11"></i>
                        <span>Username</span>
                        <em>(required)</em>
                        <input type="name" name="username" placeholder="Username">
                    </div> 
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-lock font-11"></i>
                        <span>Password</span>
                        <em>(required)</em>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <p>Anda belum memiliki akun?
                    	<a href="{{url("")}}/register"><b>Klik Disini</b></a>
                	</p>         
                    <div class="clear"></div>
                    <button class="button button-full button-m shadow-large button-round-small bg-green1-dark top-30 bottom-0" style="width: 100%">LOGIN</button>
                </form>
                </div>

                    
            </div>
        </div>
    </div>
</div>
@endsection