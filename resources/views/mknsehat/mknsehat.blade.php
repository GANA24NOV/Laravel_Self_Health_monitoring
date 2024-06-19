@extends('layouts.app')

@section('title')
Makanan Sehat | Novita Admin
@endsection

@section('content')
<h3>Berat badan </h3>
<button type="button" class="btn btn-tambah">
  <a href="/mknsehat/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col" style="width: 20%">gambar</th>
        <th scope="col" style="width: 15%">nama_makanan</th>
        <th scope="col" style="width: 30%">jenis_makanan</th>
        <th scope="col" style="width: 30%">jumlah_makanan</th>
        <th scope="col" style="width: 30%">kalori_makanan</th>
        <th scope="col" style="width: 30%">bahan_makanan</th>
        <th scope="col" style="width: 20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($mknsehats as $mknsehat)
    <tr>
      <td><img src="{{ asset('img_mknsehat/' . $mknsehat->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $mknsehat->nama_makanan }}</td>
      <td>{{ $mknsehat->jenis_makanan }}</td>
      <td>{{ $mknsehat->jumlah_makanan }}</td>
      <td>{{ $mknsehat->kalori_makanan }}</td>
      <td>{{ $mknsehat->bahan_makanan }}</td>
      <td>
        <a class='btn-edit' href="/mknsehat/edit/{{ $mknsehat->id_mknsehat }}">Edit</a>
        |
        <a class='btn-delete' href="/mknsehat/hapus/{{ $mknsehat->id_mknsehat }}">Hapus</a>
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
