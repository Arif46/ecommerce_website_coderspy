@extends('layouts.login')
@php
    $logo = App\GeneralSetting::first();
@endphp

@section('content')


<main class="login-body" data-vide-bg="{{url('public/uploads/admin_bg.mp4')}}">

    <!-- Login Admin -->
<form class="form-default" role="form" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="login-form">
        <!-- logo-login -->
        <div class="logo-login">
        <img src="{{asset('public/')}}/{{@$logo->admin_logo}}" alt="">
        </div>
        <h2>Login Here</h2>
        <div class="form-input">
            <label for="name">Email</label>
            <input class="form-control form-control-sm {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" type="email" name="email" placeholder="Email">
            <span class="focus-border"></span>
            @if ($errors->has('email'))
                <span class="invalid-feedback invalid-select" role="alert">
                    <strong style="color: red;">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-input">
            <label for="name">Password</label>
            <input class="form-control form-control-sm {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
            <span class="focus-border"></span>
            @if ($errors->has('password'))
                <span class="invalid-feedback invalid-select" role="alert">
                    <strong style="color: red;">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="login">
        </div>
        <!-- Forget Password -->
        <a href="{{ route('password.request') }}" class="forget">Forget Password</a>
    </div>
</form>
    <!-- /end login form -->

</main>





@endsection

@section('script')
    <script type="text/javascript">
        function autoFill(){
            $('#email').val('admin@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection
