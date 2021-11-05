@extends('template.app')
@section('main')
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

    </style>

    <section class="mt-5 mb-5">
        <div class="row d-flex justify-content-center  flex-wrap" data-aos="zoom-in" data-aos-delay="100">

            <div class="ani bg-light col-md-4 col-lg-4 col-10 mb-4 shadow m-4" style="width: 35%; border-radius:10px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body" style="width: 100%">
                            <h5 class="card-title mt-4 fw-bold pb-2">Pembayaran</h5>
                            <p class="card-text pb-3" style="font-size: 12px">Pembayaran adalah sebuah dokumen yang
                                dijadikan
                                sebagai
                                alat tagihan pembayaran
                                antara penjual dengan pembeli.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-4 mt-5 mb-4">
                        <img src="{{ asset('image/pembayaran.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>

            <div class="ani bg-light col-md-4 col-lg-4 col-10 mb-4 shadow m-4" style="width: 35%; border-radius:10px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body" style="width: 100%">
                            <h5 class="card-title mt-4 fw-bold pb-2">Riwayat</h5>
                            <p class="card-text pb-3" style="font-size: 12px">Riwayat adalah catatan dari sebuah laporan
                                atau kejadian yang sudah terjadi.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-4 mt-5 mb-4">
                        <img src="{{ asset('image/riwayat.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
