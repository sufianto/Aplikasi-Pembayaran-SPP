@extends('template.app')
@section('main')

<div class="container" >
<div class="row ">
    <div class="col-md-12 ">
        <div class="card" >
            <div class="card-header" style="background-color: #23AD9A; font-size: 30px;">
                <h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Pembayaran spp</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive " style="overflow-x: hidden">
                    <form>
                        <div class="row mb-3">
                            <label for="inputNIPD" class="col-sm-2 col-form-label"> <b><h2>NIPD</h2></b> </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputNIPD">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputtanggal" class="col-sm-2 col-form-label"> <b><h2>Tanggal Bayar</h2></b></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputtanggal">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputjumlah" class="col-sm-2 col-form-label"> <b><h2>Jumlah Bayar</h2></b></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputjumlah">
                            </div>
                          </div>
                        
                       
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
