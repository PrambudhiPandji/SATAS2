<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MANLAB SATAS</title>
    <link rel="icon" type="image/x-icon" href="/image/logosatas.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/styles_login.css" rel="stylesheet" />
</head>

<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="#"><img
                            src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                            alt=""></a></div>
                <div class="contact">
                    <!-- <form action="">
                        <h2>Login</h2>
                        <input type="text" placeholder="Username">
                        <input type="text" placeholder="Password">
                        <button class="submit bg-warning">Login</button>
                    </form> -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="items-center">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                            <button class="submit bg-warning">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="right">
                <div class="right-inductor">
                    <img src="image/logosatas.png" alt="" width="10">
                </div>
                <div class="right-text">
                    <h5>Manajemen Laboratorium</h5>
                    <h2>SMAN 1 TASIKMALAYA</h2>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
