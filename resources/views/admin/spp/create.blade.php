@extends('template.appadmin')
@section('main')
<div class="container" >
<div class="row ">
    <div class="col-md-12 ">
        <div class="card" >
            <div class="card-header bg-primary">
                <h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Tambah Data SPP</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive " style="overflow-x: hidden">
                    <form method="post" action="{{url('admin/data-spp/')}}">
                      @csrf
                      <div class="container">
                        <div class="row">
                          <label for="bulan" class="col-sm-2 col-form-label"> <b><h2>Bulan</h2></b></label>
                          <div class="form-group col-sm-10">
                            <select class="form-control" id="bulan" name="bulan">
                              <option value="" disabled selected>Pilih Bulan</option>
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
                        <div class="row">
                            <label for="nominal" class="col-sm-2 col-form-label"> <b><h2>Nominal</h2></b></label>
                            <div class="form-group col-sm-10">
                              <input type="number" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" value="{{ old('nominal') }}">
                              <span class="text-danger">@error('nominal') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection