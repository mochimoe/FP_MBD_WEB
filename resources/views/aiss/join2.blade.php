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
          <td>Dendaa</td>
        </tr>
    </thead>
    <tbody>
        @foreach($joins as $join)
        <tr>>
            <td>{{$join->nama_anggota}}</td>
            <td>{{$join->dendaa}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection