<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        $data_tentang = Tentang::all();
        return view('admin.tentang.tentang', ['data_tentang' => $data_tentang]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $tentang = new Tentang;
        $tentang->nama_organisasi = $request->nama_organisasi;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->email = $request->email;
        $tentang->no_telp = $request->no_telp;
        $tentang->save();

        return redirect('/admin/tentang')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tentang = Tentang::find($id);
        return view('admin.tentang.editTentang',[
            'tentang' => $tentang,
        ]);
    }

    public function update(Request $request,$id)
    {
        $tentang = Tentang::find($id);
        $tentang->update($request->all());
        $tentang->save();

        return redirect('/admin/tentang')->with('success','Data berhasil diupdate');
    }


    public function delete($id)
    {
        $tentang = Tentang::find($id);
        $tentang->delete();
        return redirect('/admin/tentang');
    }
}
