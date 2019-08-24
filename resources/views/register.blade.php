@extends('layout/layout')
@section('content')
<div id="page">           
@if (Session::has('alert'))
    <li>{!! session('alert') !!}</li>
@endif
	<div class="page-content">	   
        
        <div data-height="cover" class="caption bottom-0">
            <div class="caption-center">

                <div class="left-50 right-50 top-50">
                    <h1 class="center-text uppercase ultrabold fa-3x">Register</h1>
                    <p class="center-text color-highlight font-11 under-heading bottom-30">
                        Belum memiliki akun? Register disini.
                    </p>
                    <form action="{{url("")}}/register/post_register" method="post">
                        {!! csrf_field() !!}
                        <div class="input-style has-icon input-style-1 input-required">
                            <i class="input-icon fa fa-user font-11"></i>
                            <span>Username</span>
                            <em>(required)</em>
                            <input type="name" name="username" placeholder="Username">
                        </div> 
                        <div class="input-style has-icon input-style-1 input-required">
                            <i class="input-icon fa fa-at"></i>
                            <span>Email</span>
                            <em>(required)</em>
                            <input type="email" name="email" placeholder="Email">
                        </div>         
                        <div class="input-style has-icon input-style-1 input-required">
                            <i class="input-icon fa fa-lock font-11"></i>
                            <span>Password</span>
                            <em>(required)</em>
                            <input type="password" name="password" placeholder="Choose a Password">
                        </div>          
                        <div class="input-style has-icon input-style-1 input-required">
                            <i class="input-icon fa fa-lock font-11"></i>
                            <span>Password</span>
                            <em>(required)</em>
                            <input type="password" name="re_password" placeholder="Confirm your Password">
                        </div>         
                        <div class="top-20 bottom-20">
                            <a href="{{url("")}}/login" class="center-text font-14 color-gray2-dark">Anda sudah memiliki akun? <b>Klik Disini</b></a>
                        </div>
                        <div class="clear"></div>
                        <button href="#" class="button button-full button-m shadow-large button-round-small bg-green1-dark top-10 bottom-0" style="width: 100%">REgister</button>
                    </form>
                </div>

                    
            </div>
        </div>
    </div>
</div>
@endsection