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
                    <form>
                      <div class="container">
                        <div class="row">
                          <label for="bulan" class="col-sm-2 col-form-label"> <b><h2>Bulan</h2></b></label>
                          <div class="form-group col-sm-10">
                            <select class="form-control" id="bulan">
                              <option>Januari</option>
                              <option>Februari</option>
                              <option>Maret</option>
                              <option>April</option>
                              <option>Mei</option>
                              <option>Juni</option>
                              <option>Juli</option>
                              <option>Agustus</option>
                              <option>September</option>
                              <option>Oktober</option>
                              <option>November</option>
                              <option>Desember</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="walikelas" class="col-sm-2 col-form-label"> <b><h2>Nominal</h2></b></label>
                            <div class="form-group col-sm-10">
                              <input type="number" class="form-control" id="walikelas">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection