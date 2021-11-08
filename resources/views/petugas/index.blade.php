@extends('template.app')
@section('main')

@if(Auth::check() && Auth::user()->level == 'petugas')



    <style>
        .ani {
            transition: 500ms;
        }

        .ani:hover {
            -ms-transform: scale(0.98);
            -webkit-transform: scale(0.98);
            transform: scale(0.98);
            transition: 300ms;
            filter: brightness(95%);
        }

        .ani:active {
            transition: 300ms;
            filter: brightness(80%);
        }

        /* .row-petugas {
            display: flex;
        }

        @media (max-width: 768px) {
            .row-petugas {
                flex-direction: column;
                align-items: center;
            }

        } */

        .card-petugas {
            text-decoration: none;
            color: black;
        }

        .card-petugas:hover {
            text-decoration: none;
            color: black;
        }

        @media (max-width: 303px) {
            span.fw-bold {
                font-size: small;
            }
        }
        @media (max-width: 293px) {
            span.fw-bold {
                font-size: smaller;
            }

        }

        /* @media (max-width: 768px) {
            img.gambar {
                width: 50%;
            }
        } */

        .dua {
            display: none;
        }

        @media (max-width: 500px) {
            .dua {
                display: block;
            }

            .satu {
                display: none;
            }

            img.gambar {
                width: 50%;
            }
        }

    </style>

    <section class="mt-5 mb-5">
        <div class="container mb-4 text-center">
            <span class="mb-4 fw-bold px-5 py-2 text-white" style="background: #45aaf2; border-radius: 50px;">{{Auth::user()->name}}</span>
        </div>
        <div class="row d-flex justify-content-center  flex-wrap" data-aos="zoom-in" data-aos-delay="100">
            
            <div class="ani bg-light col-md-4 col-lg-4 col-10 mb-4 shadow m-4 satu" style="width: 35%; border-radius:10px;">
                <a class="card-petugas" href="/petugas/pembayaran">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body" style="width: 100%">
                                <h5 class="card-title mt-4 fw-bold pb-2">Pembayaran</h5>
                                <p class="card-text pb-3" style="font-size: 12px">Pembayaran adalah sebuah dokumen yang
                                    dijadikan
                                    sebagai
                                    alat tagihan pembayaran
                                    antara penjual dengan pembeli.</p>
                            </div>
                        </div>
                        <div class="col-6 pe-4 mt-5 mb-4">
                            <img src="{{ asset('image/pembayaran.png') }}" class="card-img-top gambar" alt="...">
                        </div>
                    </div>
                </a>
            </div>
            
            {{-- max-width 550px --}}
            <div class="ani bg-light col-md-4 col-lg-4 col-10 mb-4 shadow m-4 dua" style="width: 35%; border-radius:10px;">
                <a class="card-petugas" href="/petugas/pembayaran">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body" style="width: 100%">
                                <h5 class="card-title mt-4 fw-bold pb-2">Pembayaran</h5>
                                <p class="card-text pb-3" style="font-size: 12px">Pembayaran adalah sebuah dokumen yang
                                    dijadikan
                                    sebagai
                                    alat tagihan pembayaran
                                    antara penjual dengan pembeli.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center pe-4 mb-4">
                            <img src="{{ asset('image/pembayaran.png') }}" class="card-img-top gambar" alt="...">
                        </div>
                    </div>
                </a>
            </div>

            <div class="ani bg-light col-md-4 col-lg-4 col-10 mb-4 shadow m-4 satu" style="width: 35%; border-radius:10px;">
                <a class="card-petugas" href="/petugas/historypembayaran">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body" style="width: 100%">
                                <h5 class="card-title mt-4 fw-bold pb-2">Riwayat</h5>
                                <p class="card-text pb-3" style="font-size: 12px">Riwayat adalah catatan dari sebuah laporan
                                    atau kejadian yang sudah terjadi.
    
                                </p>
                            </div>
                        </div>
                        <div class="col-6 pe-4 mt-5 mb-4">
                            <img src="{{ asset('image/riwayat.png') }}" class="card-img-top gambar" alt="...">
                        </div>
                    </div>
                </a>
            </div>

            {{-- max-width 550px --}}
            <div class="ani bg-light col-md-4 col-lg-4 col-10 mb-4 shadow m-4 dua" style="width: 35%; border-radius:10px;">
                <a class="card-petugas" href="/petugas/historypembayaran">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body" style="width: 100%">
                                <h5 class="card-title mt-4 fw-bold pb-2">Riwayat</h5>
                                <p class="card-text pb-3" style="font-size: 12px">Riwayat adalah catatan dari sebuah laporan
                                    atau kejadian yang sudah terjadi.
    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center pe-4 mb-4">
                            <img src="{{ asset('image/riwayat.png') }}" class="card-img-top gambar" alt="...">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endif
@endsection
