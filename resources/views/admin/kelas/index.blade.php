@extends('template.appadmin')
@section('main')
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="card-title text-white float-left">Data Kelas</h4>
        <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-circle btn-success float-right"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="basic-datatables" class="display table table-hover" >
                <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Total Siswa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Total Siswa</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($kelas as $kelas)
                        <tr><td>{{ $kelas->nama_kelas }}</td>
                        <td>{{ $kelas->kompetensi_keahlian }}</td>
                        <td>{{ $kelas->total_siswa }}</td>
                        <td>
                        <form action="{{ route('kelas.destroy',$kelas->id) }}" method="post" onsubmit="return confirm('Hapus Data?')">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('kelas.edit',$kelas->id) }}" class="btn btn-sm btn-circle btn-primary"><i class="fas fa-edit"></i></a>
                        <button type="submit"  class="btn btn-sm btn-circle btn-danger"><i class="fas fa-trash"></i></button>
                        </form>  
                        </td></tr>
                    @empty
                        
                    @endforelse
                    {{-- <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>
                            <a href="" class="btn btn-sm btn-circle btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-circle btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection