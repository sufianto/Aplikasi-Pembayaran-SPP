@extends('template.app')
@section('main')

<div class="container mt-5" >
<div class="row ">
    <div class="col-md-12 ">
        <div class="card" >
            <div class="card-header" style="background-color: #45aaf2; font-size: 30px;">
                <h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Pembayaran spp</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive " style="overflow-x: hidden">
                    <form action="" method="POST">
                      @csrf
                        <div class="row mb-3">
                            <label for="inputNIPD" class="col-sm-2 col-form-label"><h3 class="fw-bold">NISN Siswa</h3></label>
                            <div class="col-sm-10">
                              <select name="inputNIPD" id="inputNIPD" class="form-control shadow-sm" style="border: 1px solid #4b6584">
                                @foreach ($siswa as $p)
                                  <option value="{{$p->nisn}}">{{$p->nisn}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputtanggal" class="col-sm-2 col-form-label"><h3 class="fw-bold">SPP Bulan</h3></label>
                            <div class="col-sm-10">
                              <select name="inputbulan" id="inputbulan" class="form-control shadow-sm" style="border: 1px solid #4b6584">
                                <option value="">Pilih Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputjumlah" class="col-sm-2 col-form-label"><h3 class="fw-bold">Jumlah Bayar</h3></label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control shadow-sm" style="border: 1px solid #4b6584" id="inputjumlah">
                            </div>
                          </div>
                        
                       
                        
                        <button type="submit" class="btn text-light mt-5 rounded-pill" style="background: #45aaf2; width: 20%; border-radius: 100px">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
