@extends('template.appadmin')
@section('main')
<div class="container" >
<div class="row ">
    <div class="col-md-12 ">
        <div class="card" >
            <div class="card-header bg-primary">
                <h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Tambah Data Kelas</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive " style="overflow-x: hidden">
                    <form action="{{ route('kelas.update',$kelas->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="row mb-3">
                            <label for="namakelas" class="col-sm-2 col-form-label"> <b><h2>Nama Kelas</h2></b> </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="namakelas" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="Kompetensi keahlian" class="col-sm-2 col-form-label"> <b><h2>Kompetensi keahlian</h2></b></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="Kompetensi keahlian" value="{{ $kelas->kompetensi_keahlian }}" name="kompetensi_keahlian" required>
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