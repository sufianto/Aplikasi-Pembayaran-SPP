<!DOCTYPE html>
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
        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden
        }

        #waveone {
            width: 500px;
            height: 650px;
            left: 0px;
            bottom: -258px;
            position: absolute;

        }

        .wavetwo {
            top: -10px;
            right: -110px;
            position: absolute;
        }

    </style>
</head>

<body>

    <div class="limiter">


        <div class="container-login100">

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title font-weight-bold">
                    <h2>SPP's</h2>
                </span>

                <div class="wrap-input100 validate-input" data-validate="Username is Required">
                    <input class="input100 bg-transparent" type="text" name="username" placeholder="Username"
                        style="border: 2px solid black" value="{{ old('username') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100 bg-transparent" type="password" name="password" placeholder="Password"
                        style="border: 2px solid black">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" style="border-radius: 17px;">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div id="waveone">
        <img src="{{ asset('Template-Login/images/Group 10.png') }}" alt="wave">
    </div>

    <div class="wavetwo">
        <img src="{{ asset('Template-Login/images/group12.svg') }}" alt="wavetwo">
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

</body>

</html>
