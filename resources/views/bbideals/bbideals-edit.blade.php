@extends('layouts.app')

@section('title')
Edit bbideal | Novita Admin
@endsection

@section('content')
<h3>Edit bbideals</h3>
<div class="form-login">
  <form action="{{ url('/bbideal/update/' . $bbideal->id_bbideals) }}" method="post" enctype="multipart/form-data">
  
    @csrf
    @method('put')
    <label for="jumlahbb">berat badan</label>
    <input class="input" type="text" name="jumlahbb" id="jumlahbb" placeholder="jumlahbb"
      value="{{ old('jumlahbb', $bbideal->jumlahbb) }}" />
    @error('jumlahbb')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_kelamin">Jenis kelamin</label>
    <input class="input" type="text" name="jenis_kelamin" id="price" placeholder="jenis_kelamin"
      value="{{ old('jenis_kelamin', $bbideal->jenis_kelamin) }}" />
    @error('jenis_kelamin')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jumlahideal">Jenis kelamin</label>
    <input class="input" type="text" name="jumlahideal" id="price" placeholder="jumlahideal"
      value="{{ old('jumlahideal', $bbideal->jumlahideal) }}" />
    @error('jumlahideal')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kategori">Kategori</label>
    <textarea class="input" name="kategori" id="kategori"
      placeholder="kategori">{{ old('Kategori', $bbideal->kategori) }}</textarea>
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="gambar">gambar</label>
    <img src="{{ asset('img_bbideals/' . $bbideal->gambar) }}" alt="" width="200px">
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
