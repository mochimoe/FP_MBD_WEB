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
          <td>Nama Pengarang</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pengarangs as $pengarang)
        <tr>
            <td>{{$pengarang->id}}</td>
            <td>{{$pengarang->nama_pengarang}}</td>
            <td><a href="{{ route('pengarangs.edit',$pengarang->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('pengarangs.destroy', $pengarang->id)}}" method="post">
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