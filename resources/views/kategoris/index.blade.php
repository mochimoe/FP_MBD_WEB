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
          <td>Jenis</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($kategoris as $kategori)
        <tr>
            <td>{{$kategori->id}}</td>
            <td>{{$kategori->jenis}}</td>
            <td><a href="{{ route('kategoris.edit',$kategori->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('kategoris.destroy', $kategori->id)}}" method="post">
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