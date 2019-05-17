@extends('layouts.app')

@section('title')
  Bintang - view 2
@section('content')

@section('content')
<style>
  .uper {
    padding-top: 10%;
  }
</style>
<div class="container">
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
                <td>Tanggal Pinjam</td>
                <td></td>
              </tr>
          </thead>
          <tbody>
              @foreach($views as $view)
              <tr>
                  <td>{{$view->judul}}</td>
                  <td>{{$view->tanggal_pinjam}}</td>
                  <td></td>
              </tr>
              @endforeach
          </tbody>
        </table>
      <div>

</div>

@endsection