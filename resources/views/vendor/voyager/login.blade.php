@extends('voyager::auth.master')

@section('content')
        <div class="login-container" style="margin-top: -250px; position: absolute; align-content: center;">
            <?php
                $admin_logo_img = Voyager::setting('admin.icon_image', '');
                if ($admin_logo_img == ""){
                    $admin_logo_img = Voyager::setting('.icon_image', '');
                }
            ?>
            @if($admin_logo_img == '')
                <img src="{{ voyager_asset('images/logo-icon.png') }}" alt="logo" style="width: 50%; height: 50%; margin-left: 25%;">
            @else
                <img src="{{ Voyager::image($admin_logo_img) }}" alt="logo" style="width: 50%; height: 50%; margin-left: 25%;">
            @endif
            <p>Inicio de sesión:</p>

            <form action="{{ route('admin.postlogin') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group form-group-default" id="emailGroup">
                    <label>Correo electronico</label>
                    <div class="controls">
                        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                    </div>
                </div>

                <div class="form-group form-group-default" id="passwordGroup">
                    <label>Contraseña</label>
                    <div class="controls">
                        <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
                    </div>
                </div>

                <div class="form-group" id="rememberMeGroup">
                    <div class="controls">
                        <input type="checkbox" name="remember" id="remember" value="1"><label for="remember" class="remember-me-text">{{ __('voyager::generic.remember_me') }}</label>
                    </div>
                </div>

                <div class="login-register-buttons">
					<button type="submit" class="btn btn-block login-button">
						<span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
						<span class="signin">{{ __('voyager::generic.login') }}</span>
					</button>
					<br>
					<a href="{{ route('register') }}" class="btn btn-block login-button">Registarse</a>
				</div>
            </form>

            <div style="clear:both"></div>

            @if(!$errors->isEmpty())
                <div class="alert alert-red">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $err)
                            @if ($err == "auth.failed")
                                <li>Estas credenciales no coinciden con nuestros registros</li>
                            @else
                                <li>{{ $err }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif

			@if(!empty($error))
                <div class="alert alert-red">
                    <ul class="list-unstyled">
                        <li>{{ $error }}</li>
                    </ul>
                </div>
            @endif

        </div> <!-- .login-container -->
@endsection

@section('pre_css')
<style>
 .login-register-buttons{
	display: flex;
	justify-content: space-between;
 }
</style>
@endsection

@section('post_js')
    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });

    </script>
@endsection
