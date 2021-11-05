@extends('template.app')
@section('main')
    <style>
        .ani {
            transition: 500ms;
        }

        .ani:hover {
            -ms-transform: scale(1.05);
            /* IE 9 */
            -webkit-transform: scale(1.05);
            /* Safari 3-8 */
            transform: scale(1.05);
            transition: 500ms;
        }

    </style>

    <section class="mt-5 mb-5">
        <div class="row d-flex justify-content-center  flex-wrap" data-aos="zoom-in" data-aos-delay="100">

            <div class="ani bg-light col-lg-4 mb-4 shadow" style="width: 35%; border-radius:10px;margin-right:3%;">
                <div class="row">
                    <div class="col-lg-6 ps-4">
                        <div class="card-body">
                            <h5 class="card-title mt-4 fw-bold pb-2">Pembayaran</h5>
                            <p class="card-text pb-3" style="font-size: 14px">Pembayaran adalah sebuah dokumen yang
                                dijadikan
                                sebagai
                                alat tagihan pembayaran
                                antara penjual dengan pembeli.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-4 mt-5">
                        <img src="{{ asset('image/pembayaran.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>

            <div class="ani bg-light col-lg-4 mb-4 shadow" style="width: 35%; border-radius:10px;margin-left:3%">
                <div class="row">
                    <div class="col-lg-6 ps-4">
                        <div class="card-body">
                            <h5 class="card-title mt-4 fw-bold pb-2">Riwayat</h5>
                            <p class="card-text pb-3" style="font-size: 14px">Riwayat adalah catatan dari sebuah laporan
                                atau kejadian yang sudah terjadi.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-4 mt-5">
                        <img src="{{ asset('image/riwayat.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
