@extends('layouts.app')

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
          <td>ID Buku</td>
          <td>ID Kategori</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($mempunyais as $mem)
        <tr>
            <td>{{$mem->id}}</td>
            <td>{{$mem->id_buku}}</td>
            <td>{{$mem->id_katagori}}</td>
            <td><a href="{{ route('mempunyais.edit',$mem->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('mempunyais.destroy', $mem->id)}}" method="post">
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