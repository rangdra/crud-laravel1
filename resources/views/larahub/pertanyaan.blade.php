@extends('adminlte.master')
@section('halaman', 'Daftar Pertanyaan')
@section('content')
<div class="card">
<a href="{{ url('/pertanyaan/create') }}">
 <button class="btn btn-primary">New Question</button>
</a>
<table class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Isi Pertanyaan</th>
      <th>Detail Jawaban</th>
      <th>Form Jawaban</th>
      <th>Detail QnA</th>
      <th>Actions</th>
    </thead>
    <tbody>
      @foreach($pertanyaan as $tanya)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $tanya->isi }}</td>
          <td>
            <a href="{{ url('/jawaban/'.$tanya->id)}}">
              <button class="btn btn-success">Lihat jawaban</button>
            </a>
          </td>
          <td>
            <form action="{{ url('/jawaban/'.$tanya->id) }}" method="post">
              @csrf
              <input type="text" name="isi">
              <input hidden name="pertanyaan_id" value="{{ $tanya->id }}">
              <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
              <input hidden name="tanggal_diperbarui" value="{{ \Carbon\Carbon::now() }}">
              <button type="submit" class="btn btn-success">submit jawaban</button>
            </form>
          </td>
          <td>
          <a href="{{ url('/pertanyaan/'.$tanya->id)}}">
            <button class="btn btn-success">Detail QnA</button>
          </a>
          </td>
          <td>
            <a href="{{ url('/pertanyaan/'.$tanya->id).'/edit'}}">
              <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
            </a> |
            <form method="POST" action="{{ url('/pertanyaan/'.$tanya->id) }}" style="display: inline">
              @csrf
              {{ method_field('delete') }}
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
            
          </td>
            
         </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection