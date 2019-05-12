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
          <td>Kapasitas Rak</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($raks as $rak)
        <tr>
            <td>{{$rak->id}}</td>
            <td>{{$rak->kapasitas_rak}}</td>
            <td></td>
            <td>
                <form action="{{ route('raks.destroy', $rak->id)}}" method="post">
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