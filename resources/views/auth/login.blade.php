<x-auth-layout>
    <x-slot name="content">

        <body class="log_in_page">
            <div id="log-in" class="site-form log-in-form">
                <div id="log-in-head">
                    <h1>ورود</h1>
                    <div id="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="form-output">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">ایمیل</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="password">رمز عبور</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="remember">
                            <div class="checkbox">
                                <label for="remember_me">
                                    <input id="remember_me" type="checkbox" name="remember">
                                    مرا به خاطر بسپار
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="forgot">رمز عبور من را فراموش کرده ام</a>
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary full-width" value="ورود">
                        <x-validation-error />
                        <div class="or"></div>
                        <p>آیا حساب کاربری ندارید؟ <a href="{{ route('register') }}">ثبت نام کنید!</a> </p>
                    </form>
                </div>
            </div>
        </body>
    </x-slot>
</x-auth-layout>