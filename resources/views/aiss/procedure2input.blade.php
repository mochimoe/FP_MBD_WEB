@extends('layouts.app')
@section('title')
    Tria - Procedure 2
@endsection

@section('content')
<style>
  .uper {
    padding-top: 10%;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Masukkan ID pengembalian!
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('aiss.procedure2output') }}">
          <div class="form-group">
              @csrf
              <label for="patternama">Pattern nama :</label>
              <input type="text" class="form-control" name="patternama"/>
          </div>
          <button type="submit" class="btn btn-primary">Cari</button>
      </form>
  </div>
</div>
@endsection