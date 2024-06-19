@extends('layouts.app')

@section('title')
Hapus data Makanan sehat | Novita Admin
@endsection

@section('content')
<h3>Hapus Makanan</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/mknsehat/destroy/' . $bbideal->id_mknsehat ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/mknsehat">
      No
    </a>
  </button>
</div>
@endsection
