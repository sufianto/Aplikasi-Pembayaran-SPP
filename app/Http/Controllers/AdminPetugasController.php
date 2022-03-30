<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Alert;

use App\Models\User;

class AdminPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas=User::where('level', 'petugas')->get();
        return view('admin.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $petugas = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'petugas',
        ]);

        if ($petugas) {
            return redirect()->route('data-petugas.index')->with(['success' => 'Data Berhasil Disimpan']);
        }
        else {
            return redirect()->route('data-petugas.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'edit' => User::find($id),
        ];
      
        return view('admin.petugas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if($update = User::find($id)) :         
               $stat = $update->update([
                  'name' => $req->name,
                  'email' => $req->email,
                  'password' => Hash::make($req->password),
               ]);
               if($stat) :
                      Alert::success('Berhasil!', 'Data Berhasil di Edit');
                   else :
                     Alert::error('Terjadi Kesalahan!', 'Data Gagal di Edit');
                     return back();
                  endif;
            endif;
            
            return redirect('admin/data-petugas/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(User::findOrFail($id)->delete()) :
            Alert::success('Berhasil!', 'Data Berhasil Dihapus');
        else :
            Alert::error('Berhasil!', 'Data Gagal Dihapus');
        endif;
      
        return back();
    }
}
