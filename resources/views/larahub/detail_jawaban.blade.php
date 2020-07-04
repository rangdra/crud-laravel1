@extends('adminlte.master')
@section('halaman', 'Detail QnA')
@section('content')
<div class="card">
  <h1>Pertanyaan</h1> <br>
  <p>judul: {{$pertanyaan->judul}}</p>
  <p>isi: {{$pertanyaan->isi}}</p>
  <p>tanggal dibuat: {{$pertanyaan->tanggal_dibuat}}</p>
  <p>tanggal diperbarui: {{$pertanyaan->tanggal_diperbarui}}</p>

<h2>Jawaban</h2> <br>
 @foreach($jawabans as $jwb)
   <p>{{ $jwb->isi}} <br> {{$jwb->tanggal_dibuat}}, {{$jwb->tanggal_diperbarui}}</p>
 @endforeach

</div>
@endsection