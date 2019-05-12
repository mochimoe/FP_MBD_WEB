@extends('layouts.app')

@section('content')

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID Rak</td>
          <td>Kapasitas Rak</td>
        </tr>
    </thead>
    <tbody>
        @foreach($raks as $rak)
        <tr>
            <td>{{$rak->id}}</td>
            <td>{{$rak->kapasitas_rak}}</td>
            
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