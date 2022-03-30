@extends('template.appadmin')
@section('main')
<div class="container" >
<div class="row ">
    <div class="col-md-12 ">
        <div class="card" >
            <div class="card-header bg-primary">
                <h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Edit Data Petugas</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive " style="overflow-x: hidden">
                    <form action="{{ url('/admin/data-petugas', $edit->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="row mb-3">
                            <label for="namapetugas" class="col-sm-2 col-form-label"> <b><h2>Nama</h2></b> </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{$edit->name}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label"> <b><h2>Email</h2></b></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{$edit->email}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label"> <b><h2>Password</h2></b></label>
                            <div class="col-sm-10">
                                <span><small><i style="color:red;">* kosongkan jika tidak ingin diubah</i></small></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Baru">
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