@extends('layouts.login')

@section('content')


<main class="login-body" data-vide-bg="{{url('public/uploads/admin_bg.mp4')}}">

    <!-- Login Admin -->
    
    <div class="login-form">
        <!-- logo-login -->
        <div class="logo-login">
            <img src="{{url('public/website/img/logo-login.png')}}" alt="">
        </div>
        <h2>Login Here</h2>
        <div class="form-input">
            <label for="name">Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-input">
            <label for="name">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="login">
        </div>
        <!-- Forget Password -->
        <a href="#" class="forget">Forget Password</a>
    </div>
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
