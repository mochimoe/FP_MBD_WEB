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
          <td>ID buku</td>
          <td>judul</td>
          <td>ID rak</td>
          <td>kapasitas</td>
        </tr>
    </thead>
    <tbody>
        @foreach($views as $view)
        <tr>
            <td>{{$view->id_buku}}</td>
            <td>{{$view->judul}}</td>
            <td>{{$view->id}}</td>
            <td>{{$view->kapasitas_rak}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection