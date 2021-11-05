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
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: #E4F9F5;
        }

        .btn-logout {
          border: 1px solid #40514E;
          background: #30E3CA;
          box-shadow: 3px 3px 2px #40514E;
          font-weight: 500;
        }


        .btn-logout:hover {
          background: #fff;
          color: #40514E;
        }

        .btn-logout:active {
          background: rgb(245, 245, 245);
          border: 1px solid #40514E;
        }

        .footer {
          width: 100%;
        }
    </style>
    <title> - Pembayaran SPP</title>
  </head>
  <body>
    
    {{-- Navbar --}}
    <div class="row">
        <div class="col-4">
            <div class="navbar navbar-light" style="background: #30E3CA; border-radius: 0px 0px 100px 0px; box-shadow: 5px 7px 0px 1px #40514E">
                <div class="container justify-content-center">
                  <a class="navbar-brand pb-2 pt-2" href="#">
                    <img src="{{ asset('image/logo_tb.jpg')}}" alt="" width="40" height="40" class="">
                    <span class="h4 ms-3 text-center" style="font-weight: 600">SPP's - APP</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="col-8">
          <nav class="navbar">
            <div class="container pt-2 pb-2">
              <div class="btn btn-outline-dark pt-2 pb-2 ps-5 pe-5 rounded-pill btn-logout" style="margin-left: auto">Logout</div>
            </div>
          </nav>
        </div>
    </div>

    {{-- Main --}}
    <div class="container mt-5 mb-5">
      
      @yield('main')
      
    </div>


    {{-- Footer --}}
  <footer class="footer position-absolute bottom-0 start-50 translate-middle-x" style="background: #23AD9A; border-radius: 60px 60px 0px 0px ">
    <div class="container text-white">
      <div class="row pt-5 pb-5 ">
        <div class="col-lg-2" style="font-family: poppins">
          <img src="{{ asset('image/logo_tb.jpg') }}" alt="" style="width: 95px; height: 95px" />
      </div>
      <div class="col-lg-3 mt-3">
          <p style="font-size: 20px; ">
              <b>
                  YAYASAN SETYA BHAKTI <br />
                  SMK TARUNA BHAKTI
              </b>
          </p>
          <p style="font-size: 13px; font-weight: 400">
              Jalan Pekapuran Kel. Curug <br />
              Kec. Cimanggis , Kota Depok <br />
              Provinsi Jawa Barat <br />
              Kode Pos : 16953<br />
              Telepon : (021) 874 4810
          </p>
      </div>
      <div class="col-lg-3 mt-3">
          <p style="font-size: 20px"><b>Admission Information</b></p>
          <br />
          <p style="font-size: 13px; font-weight: 400">
              Email : <a class="text-white link-email"
                  href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfrtXDBTmXvRjBmgJVHHJSbRTpLwSxXtCMfZcnbzmglgHtJHJdDwfWdvzzCLGZzlRLstnV"
                  target="_blank">taruna@smktarunabhakti.net</a> <br />
              Format: name, address, phone number, <br />
              majors, and description
          </p>
      </div>
      <div class="col-lg-4 mt-3">
          <iframe class="shadow-lg iframe-maps"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.9758774687684!2d106.86757171434212!3d-6.3841757642214585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb7eb989aead%3A0xab7c10f23f712046!2sSMK%20Taruna%20Bhakti!5e1!3m2!1sid!2sid!4v1633323181916!5m2!1sid!2sid"
              style="border-radius: 5px" allowfullscreen="" loading="lazy">
          </iframe>
      </div>
      <hr class="mt-4" style="height: 2.5px" />
                <section class="pt-5 pb-5">
                    <div class="text-center" style="margin-bottom: -15%">
                        <p style="font-size: 13px; font-weight: 500">
                            Copyright SMK Taruna Bhakti <br />
                            Developed by Software Engineering SMK Taruna Bhakti
                        </p>
                    </div>
                </section>
      </div>
    </div>
  </footer>

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