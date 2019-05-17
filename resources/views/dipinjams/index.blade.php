@extends('layouts.app')

@section('title')
    Data Dipinjam
@endsection

@section('sectcss')
style="padding-top : 5%"
    
@endsection

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
          <td>ID Pinjam</td>
          <td>ID Buku</td>
          <td>Dibuat</td>
          <td>Diubah</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($dipinjams as $dipinjam)
        <tr>
            <td>{{$dipinjam->id_pinjam}}</td>
            <td>{{$dipinjam->id_buku}}</td>
            <td>{{$dipinjam->created_at}}</td>
            <td>{{$dipinjam->updated_at}}</td>
            <td></td>
            <td>
                <td><a href="{{ route('dipinjams.edit',$dipinjams->id_pinjam)}}" class="btn btn-primary">Edit</a></td>
                <form action="{{ route('dipinjams.destroy', $dipinjams->id_pinjam)}}" method="post">
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