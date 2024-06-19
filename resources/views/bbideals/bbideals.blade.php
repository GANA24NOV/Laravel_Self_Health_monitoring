@extends('layouts.app')

@section('title')
Berat Badan | Novita Admin
@endsection

@section('content')
<h3>Berat badan </h3>
<button type="button" class="btn btn-tambah">
  <a href="/bbideal/tambah">Tambah Data</a>
</button>
<button type="button" class="btn btn-tambah">
  <a href="/bbideal/cetak">cetak Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col" style="width: 20%">gambar</th>
        <th scope="col" style="width: 15%">jumlahbb</th>
        <th scope="col" style="width: 30%">jenis_kelamin</th>
        <th scope="col" style="width: 30%">jumlahideal</th>
        <th scope="col" style="width: 30%">kategori</th>
        <th scope="col" style="width: 20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($bbideals as $bbideal)
    <tr>
      <td><img src="{{ asset('img_bbideals/' . $bbideal->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $bbideal->jumlahbb }}</td>
      <td>{{ $bbideal->jenis_kelamin }}</td>
      <td>{{ $bbideal->jumlahideal }}</td>
      <td>{{ $bbideal->kategori }}</td>
      <td>
        <a class='btn-edit' href="/bbideal/edit/{{ $bbideal->id_bbideals }}">Edit</a>
        |
        <a class='btn-delete' href="/bbideal/hapus/{{ $bbideal->id_bbideals }}">Hapus</a>
      </td>

    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
