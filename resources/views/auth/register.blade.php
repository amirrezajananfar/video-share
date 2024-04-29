<x-auth-layout>
    <x-slot name="content">

        <body class="sing-up-page">
            <div id="log-in" class="site-form log-in-form">
                <div id="log-in-head">
                    <h1>ثبت نام</h1>
                    <div id="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="form-output">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">نام و نام خانوادگی</label>
                            <input id="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">ایمیل</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="password">رمز عبور</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="password_confirmation">تأیید رمز عبور</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary full-width" value="ثبت نام">
                        <x-validation-error />
                        <div class="or"></div>
                        <p>آیا یک حساب کاربری دارید؟ <a href="{{ route('login') }}"> ورود!</a> </p>
                    </form>
                </div>
            </div>
        </body>
    </x-slot>
</x-auth-layout>