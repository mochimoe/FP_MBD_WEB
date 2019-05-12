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
          <td>ID</td>
          <td>Nama Penerbit</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($penerbits as $penerbit)
        <tr>
            <td>{{$penerbit->id}}</td>
            <td>{{$penerbit->nama_penerbit}}</td>
            <td><a href="{{ route('penerbits.edit',$penerbit->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('penerbits.destroy', $penerbit->id)}}" method="post">
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