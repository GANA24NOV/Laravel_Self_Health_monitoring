@extends('layouts.app')

@section('title')
Edit Makanan Sehat | Novita Admin
@endsection

@section('content')
<h3>Edit Makanan sehat</h3>
<div class="form-login">
  <form action="{{ url('/mknsehat/update/' . $mknsehat->id_mknsehat) }}" method="post" enctype="multipart/form-data">
  
    @csrf
    @method('put')
    <label for="nama_makanan">nama Makanan</label>
    <input class="input" type="text" name="nama_makanan" id="nama_makanan" placeholder="nama_makanan"
      value="{{ old('nama_makanan', $mknsehat->nama_makanan) }}" />
    @error('nama_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_makanan">Jenis Makanan/label>
    <input class="input" type="text" name="jenis_makanan" id="price" placeholder="jenis_makanan"
      value="{{ old('jenis_makanan', $mknsehat->jenis_makanan) }}" />
    @error('jenis_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jumlah_makanan">Jumlah Makanan</label>
    <input class="input" type="text" name="jumlah_makanan" id="price" placeholder="jumlah_makanan"
      value="{{ old('jumlah_makanan', $mknsehat->jumlah_makanan) }}" />
    @error('jumlah_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kalori_makanan">kalori_makanan</label>
    <textarea class="input" name="kalori_makanan" id="kalori_makanan"
      placeholder="kalori_makanan">{{ old('kalori_makanan', $mknsehat->kalori_makanan) }}</textarea>
    @error('kalori_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="bahan_makanan">bahan_makanan</label>
    <textarea class="input" name="bahan_makanan" id="bahan_makanan"
      placeholder="bahan_makanan">{{ old('bahan_makanan', $mknsehat->bahan_makanan) }}</textarea>
    @error('bahan_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="gambar">gambar</label>
    <img src="{{ asset('img_mknsehat/' . $mknsehat->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="gambar" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
