<?php

namespace App\Http\Controllers;

use App\Models\Mknsehat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MknsehatController extends Controller
{
    public function index()
    {
        $mknsehats = Mknsehat::all();
        return view('mknsehat.mknsehat', compact('mknsehat'));
    }

    public function create()
    {
        return view('mknsehat.mknsehat-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'jenis_makanan' => 'required',
            'jumlah_makanan' => 'required',
            'kalori_makanan' => 'required',
            'bahan_makanan' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_mknsehat';
        $gambar->move($tujuan_upload, $nama_gambar);

        Mknsehat::create([
            'nama_makanan' => $request->nama_makanan,
            'jenis_makanan' => $request->jenis_makanan,
            'jumlah_makanan' => $request->jumlah_makanan,
            'kalori_makanan' => $request->kalori_makanan,
            'bahan_makanan' => $request->bahan_makanan,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/mknsehat');
    }

    public function edit($id)
    {
        $mknsehat = Mknsehat::findOrFail($id);
        return view('mknsehat.mknsehat-edit', compact('mknsehat'));
    }
    public function update(Request $request, $id_mknsehats)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);
        $mknsehat = Mknsehat::find($id_mknsehats);
        if($request->hasFile('gambar')){
            File::delete('img_mknsehat/'.$mknsehat->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_mknsehat';
            $gambar->move($tujuan_upload, $nama_gambar);
            $mknsehat->gambar = $nama_gambar;
        }
        $mknsehat->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/mknsehat');
    }
    public function delete($id_mknsehats)
    {
        $mknsehat = mknsehat::find($id_mknsehats);
        return view('mknsehat.mknsehat-hapus', compact('mknsehat'));
    }
    public function destroy($id_mknsehats)
    {
        $mknsehat = mknsehat::find($id_mknsehats);
        File::delete('img_mknsehat'.$mknsehat->gambar);
        $mknsehat->delete();
        return redirect('/mknsehat');
}
}