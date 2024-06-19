@extends('layouts.app')

@section('title')
Tambah berat badan | Novita Admin
@endsection

@section('content')
<h3>Input berat badan</h3>
<div class="form-login" style="width: 100%;">

  <form action="{{ url('/bbideal/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="jumlahbb">Berat Badan</label>
    <input class="input" type="text" name="jumlahbb" id="jumlahbb" placeholder="Jumlah Berat Badan" value="{{ old('jumlahbb') }}" />
    @error('jumlahbb')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input class="input" type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ old('jenis_kelamin') }}" />
    @error('jenis_kelamin')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jumlahideal">Jumlah Ideal</label>
    <input class="input" type="text" name="jumlahideal" id="jumlahideal" placeholder="Jumlah Ideal" value="{{ old('jumlahideal') }}" />
    @error('jumlahideal')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kategori">Kategori</label>
    <textarea class="input" name="kategori" id="kategori" placeholder="Kategori">{{ old('kategori') }}</textarea>
    @error('kategori')
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
