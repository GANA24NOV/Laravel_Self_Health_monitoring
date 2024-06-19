@extends('layouts.app')

@section('title')
Makanan Sehat  | Novita Admin
@endsection

@section('content')
<h3>Input Makanan sehat</h3>
<div class="form-login" style="width: 100%;">

  <form action="{{ url('/mknsehat/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nama_makanan">Nama Makanan</label>
    <input class="input" type="text" name="nama_makanan" id="nama_makanan" placeholder="nama_makanan" value="{{ old('nama_makanan') }}" />
    @error('nama_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_makanan">jenis_makanan</label>
    <input class="input" type="text" name="jenis_makanan" id="jenis_makanan" placeholder="jenis_makanan" value="{{ old('jenis_makanan') }}" />
    @error('jenis_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jumlah_makanan">Jumlah Makanan</label>
    <input class="input" type="text" name="jumlah_makanan" id="jumlah_makanan" placeholder="jumlah_makanan" value="{{ old('jumlah_makanan') }}" />
    @error('jumlah_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kalori_makanan">kalori_makanan</label>
    <textarea class="input" name="kalori_makanan" id="kalori_makanan" placeholder="kalori_makanan">{{ old('kalori_makanan') }}</textarea>
    @error('kalori_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="bahan_makanan">bahan_makanan</label>
    <textarea class="input" name="bahan_makanan" id="bahan_makanan" placeholder="bahan_makanan">{{ old('bahan_makanan') }}</textarea>
    @error('bahan_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" id="gambar" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 20px;">
      Simpan
    </button>
  </form>
</div>
@endsection
