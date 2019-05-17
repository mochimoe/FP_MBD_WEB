@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Judul</td>
          <td>Nama Pengarang</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($views as $view)
        <tr>
            <td>{{$view->id}}</td>
            <td>{{$view->nama_anggota}}</td>
            <td>{{$view->tanggal_pinjam}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection