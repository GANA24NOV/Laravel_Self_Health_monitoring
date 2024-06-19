<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bbideal;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;

class BbidealController extends Controller
{
    public function index()
    {
        $bbideals = Bbideal::all();
        return view('bbideals.bbideals', compact('bbideals'));
    }

    public function create()
    {
        return view('bbideals.bbideals-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlahbb' => 'required',
            'jenis_kelamin' => 'required',
            'jumlahideal' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_bbideals';
        $gambar->move($tujuan_upload, $nama_gambar);

        Bbideal::create([
            'jumlahbb' => $request->jumlahbb,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jumlahideal' => $request->jumlahideal,
            'kategori' => $request->kategori,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/bbideal');
    }

    public function edit($id)
    {
        $bbideal = Bbideal::findOrFail($id);
        return view('bbideals.bbideals-edit', compact('bbideal'));
    }
    public function update(Request $request, $id_bbideals)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $bbideal = Bbideal::find($id_bbideals);

        if($request->hasFile('gambar')){

            File::delete('img_bbideals/'.$bbideal->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_bbideals';
            $gambar->move($tujuan_upload, $nama_gambar);
            $bbideal->gambar = $nama_gambar;
        }

        $bbideal->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/bbideal');
    }

    public function delete($id_bbideals)
    {
        $bbideal = bbideal::find($id_bbideals);
        return view('bbideals.bbideals-hapus', compact('bbideal'));
    }

    public function destroy($id_bbideals)
    {
        $bbideal = bbideal::find($id_bbideals);
        File::delete('img_bbideals'.$bbideal->gambar);
        $bbideal->delete();
        return redirect('/bbideal');
    }
    public function cetak()
    {
        $bbideal = Bbideal::all();
        $pdf = Pdf::loadview('bbideals.bbideals-cetak', compact('bbideal'));
        return $pdf->download('laporan-beratbadan.pdf');
    }

}
