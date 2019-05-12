@extends('layouts.app')

@section('title')
    Data Anggota
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
          <td>Nama Anggota</td>
          <td>Tanggal Lahir</td>
          <td>Tanggal Daftar</td>
          <td>Jenis Kelamin</td>
          <td>Alamat</td>
          <td>No. Hp</td>
          <td>Status Keanggotaan</td>
        </tr>
    </thead>
    <tbody>
        @foreach($anggotas as $anggota)
        <tr>
            <td>{{$anggota->id}}</td>
            <td>{{$anggota->nama_anggota}}</td>
            <td>{{$anggota->tgl_lahir}}</td>
            <td>{{$anggota->tgl_daftar}}</td>
            <td>{{$anggota->kelamin}}</td>
            <td>{{$anggota->alamat}}</td>
            <td>{{$anggota->no_hp}}</td>
            <td>{{$anggota->status}}</td>
            <td>
                <form action="{{ route('anggotas.destroy', $anggota->id)}}" method="post">
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
@endsection