<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- Fonts Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
            background-color: #e4f9f5;
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <title> SPP's Login </title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-2"></div>
              <div class="col-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div>
                        <label class="fw-bolder fs-5" for="email">Email</label>
        
                        <input type="email" class="form-control" aria-describedby="emailHelp">
                    </div>
        
                    <div>
                        <label for="password" :value="__('Password')">Password</label>
        
                        <input type="password" class="form-control">
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
              </div>
              <div class="col-2"></div>
          </div>
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>









