<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Spp;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Pembayaran;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas=User::all();
        return view('petugas.index', compact('petugas'));
    }

    public function pembayaran()
    {
        return view('petugas.pembayaran', [ 'siswa' => Siswa::all() ]);
    }

    public function history()
    {
        $pembayaran=Pembayaran::all();
        return view('petugas.history', compact('pembayaran'));
    }

    public function bayar(Request $request)
    {
        $this->validate($request, [
            'nisn'     => 'required',
            'jumlah_bayar'     => 'required'
        ]);
    
        //upload foto
    
        $petugas = User::create([
            'nisn'     => $request->nisn,
            'jumlah_bayar'     => $request->jumlah_bayar,
        ]);
     if($petugas){
            //redirect dengan pesan sukses
            return redirect()->route('petugas.history')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('petugas.history')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
