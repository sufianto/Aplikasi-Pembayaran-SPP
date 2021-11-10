<!doctype html>
<html lang="en">
  <head>
    <title>SPP's Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('Template-Login/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Template-Login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Template-Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Template-Login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Template-Login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Template-Login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Template-Login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Template-Login/css/main.css') }}">
    <!--===============================================================================================-->

    {{-- Fonts Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        /* @font-face {
                font-family: 'Poppins';
                src: 
                    url(../../../public/font/Poppins/Poppins-Black.ttf), 
                    url(../../../public/font/Poppins/Poppins-BlackItalic.ttf),
                    url(../../../public/font/Poppins/Poppins-Bold.ttf),
                    url(../../../public/font/Poppins/Poppins-BoldItalic.ttf),
                    url(../../../public/font/Poppins/Poppins-ExtraBold.ttf),
                    url(../../../public/font/Poppins/Poppins-ExtraBolditalic.ttf),
                    url(../../../public/font/Poppins/Poppins-ExtraLightItalic.ttf),
                    url(../../../public/font/Poppins/Poppins-ExtraLight.ttf),
                    url(../../../public/font/Poppins/Poppins-Italic.ttf),
                    url(../../../public/font/Poppins/Poppins-Light.ttf),
                    url(../../../public/font/Poppins/Poppins-LightItalic.ttf),
                    url(../../../public/font/Poppins/Poppins-Medium.ttf),
                    url(../../../public/font/Poppins/Poppins-MediumItalic.ttf),
                    url(../../../public/font/Poppins/Poppins-Regular.ttf),
                    url(../../../public/font/Poppins/Poppins-SemiBoldItalic.ttf),
                    url(../../../public/font/Poppins/Poppins-SemiBold.ttf),
                    url(../../../public/font/Poppins/Poppins-Thin.ttf),
                    url(../../../public/font/Poppins/Poppins-ThinItalic.ttf);
            } */

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        @media (max-width: 992px) {
            .kiri {
                display: none
            }
        }
    </style>
  </head>
  <body>      
    <div class="row">

        {{-- Selamat Datang --}}
        <div class="col-lg-6">
            <div class="limiter kiri">
                <div class="container-login100">
                    <div class="login100-form-title text-white">
                        <h1>Selamat Datang di</h1>
                        <h2 class="mt-2">Aplikasi SPP's</h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form Login --}}
        <div class="col-lg-6">
            <div class="limiter">
                <div class="container-login100 bg-white">
                    <div class="container">

                        <form class="validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login100-form-title">
                            <h2 class="mb-5">Sign in</h2>
                            <div class="wrap-input100 validate-input" data-validate="Username is Required">
                                <input class="input100 bg-transparent" type="text" name="username" placeholder="Username"
                                    style="box-shadow: 1px 1px  #2d98da" value="{{ old('username') }}">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100 bg-transparent" type="password" name="password" placeholder="Password"
                            style="box-shadow: 1px 1px  #2d98da">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn text-white mt-5" type="submit" style="border-radius: 17px; width: 50%;">
                                {{ __('Log in') }}
                            </button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--===============================================================================================-->
    <script src="{{ asset('Template-Login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Template-Login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('Template-Login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Template-Login/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Template-Login/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('Template-Login/js/main.js') }}"></script>
    @include('sweetalert::alert')
    
  </body>
</html>









