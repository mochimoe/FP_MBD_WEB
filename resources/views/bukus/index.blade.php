@extends('layouts.app')

@section('title')
    Data Buku
@endsection

@section('sectcss')
style="padding-top : 5%"
    
@endsection

@section('content')
<div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
      @elseif(session()->get('delete'))
      <div class="alert alert-danger">
        {{ session()->get('delete') }}  
      </div><br />
    
    @endif
    
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Judul</td>
            <td>ID Pengarang</td>
            <td>ID Penerbit</td>
            <td>ID Rak</td>
            <td>Tanggal Terbit</td>
            <td>Stok</td>
          </tr>
      </thead>
      <tbody>
          @foreach($bukus as $buku)
          <tr>
              <td>{{$buku->id}}</td>
              <td>{{$buku->judul}}</td>
              <td>{{$buku->id_pengarang}}</td>
              <td>{{$buku->id_penerbit}}</td>
              <td>{{$buku->id_rak}}</td>
              <td>{{$buku->tanggal_terbit}}</td>
              <td>{{$buku->stok}}</td>
              <td>
                  <form action="{{ route('bukus.destroy', $buku->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>

<div class="container py3">


</div>

@endsection