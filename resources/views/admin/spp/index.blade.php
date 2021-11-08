@extends('template.appadmin')
@section('main')
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="card-title text-white float-left">Data SPP</h4>
        <a href="{{ route('data-spp.create') }}" class="btn btn-sm btn-circle btn-success float-right"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="basic-datatables" class="display table table-hover" >
                <thead>
                    <tr>
                        <th>Bulan</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Bulan</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($spp as $p)
                        <tr>
                            <td>{{$p->bulan}}</td>
                            <td>{{$p->nominal}}</td>
                            <td>
                                <a href="{{ route('data-spp.edit' , $p->id) }}" class="btn btn-sm btn-circle btn-primary float-left mr-2"><i class="fas fa-edit"></i></a>
                                <form method="post" action="{{ route('data-spp.destroy' , $p->id)  }}" id="delete{{ $p->id }}">
                                    
                                    @csrf
                                    @method('delete')
                                    
                                    <button type="submit" class="btn btn-sm btn-circle btn-danger float-left" onclick="deleteData({{ $p->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>	
                                
                                </form>			
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection