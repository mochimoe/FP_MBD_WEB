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
          <td>Nama Anggota</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($procs as $proc)
        <tr>
            <td>{{$proc->nama_anggota}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection