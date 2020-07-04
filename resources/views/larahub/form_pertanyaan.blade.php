@extends('adminlte.master')
@section('halaman', 'Create Pertanyaan')
@section('content')
<div class="card ml-3 mt-3">
 <form action="{{ url('/pertanyaan') }}" method="POST">
   @csrf
   <label for="">Judul Pertanyaan</label>
   <input type="text" class="form-control" name="judul">
   <label for="">Pertanyaan baru</label>
   <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
   <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
   <input hidden name="tanggal_diperbarui" value="{{ \Carbon\Carbon::now() }}">
   <br>
   <button class="btn btn-primary" type="submit">Create</button>
 </form>

</div>
@endsection