@extends('layouts.app')
@section('title')
    Tria - Function 2
@endsection

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
                <td>Tanggal</td>
                <td>Banyak Peminjam</td>
                <td></td>
              </tr>
          </thead>
          <tbody>
              @foreach($funcs as $func)
              <tr>
                  <td>{{$func->tanggal}}</td>
                  <td>{{$func->banyak_peminjam}}</td>
                  <td></td>
              </tr>
              @endforeach
          </tbody>
        </table>
      <div>

</div>

@endsection