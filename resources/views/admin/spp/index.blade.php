@extends('template.appadmin')
@section('main')
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="card-title text-white float-left">Data SPP</h4>
        <a href="" class="btn btn-sm btn-circle btn-success float-right"><i class="fas fa-plus"></i></a>
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
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>
                            <a href="" class="btn btn-sm btn-circle btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-circle btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>
                            <a href="" class="btn btn-sm btn-circle btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-circle btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection