@extends('layouts.app')

@section('title')
Hapus bbideal | Novita Admin
@endsection

@section('content')
<h3>Hapus bbideals</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/bbideal/destroy/' . $bbideal->id_bbideals ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/bbideal">
      No
    </a>
  </button>
</div>
@endsection
