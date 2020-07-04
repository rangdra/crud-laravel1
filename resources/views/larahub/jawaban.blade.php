@extends('adminlte.master')
@section('halaman', 'Daftar Jawaban')
@section('content')

<div class="card" style="width: 18rem;">
  <div class="card-header bg-primary">
    <h3>Daftar jawaban</h3>
  </div>
  <ul class="list-group list-group-flush">
  @foreach($jawaban as $jwb)
    <li class="list-group-item h5">{{ $jwb->isi}}</li>
    @endforeach
  </ul>
</div>
@endsection