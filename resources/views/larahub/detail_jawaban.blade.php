@extends('adminlte.master')
@section('halaman', 'Detail QnA')
@section('content')

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header bg-secondary">
        <h5 class="card-title">Pertanyaan</h5>
      </div>
      <div class="card-body">
        <p class="card-text">Judul: {{$pertanyaan->judul}}</p>
        <p class="card-text">Isi: {{$pertanyaan->isi}}</p>
        <p class="card-text">Tanggal dibuat: {{$pertanyaan->tanggal_dibuat}}</p>
        <p class="card-text">Tanggal Update: {{$pertanyaan->tanggal_diperbarui}}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header bg-secondary">
        <h5 class="card-title">Jawaban</h5>
      </div>
      <div class="card-body">
        @foreach($jawabans as $jwb)
          <p class="card-text">Jawab: {{ $jwb->isi}} <br> {{$jwb->tanggal_dibuat}}, {{$jwb->tanggal_diperbarui}}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection