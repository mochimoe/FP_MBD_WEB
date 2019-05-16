@extends('layouts.app')

@section('title')
    Baca Buku - Tambah Petugas
@endsection

@section('css')
    <style>

    .signup-content {
    background: #fff;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    -ms-border-radius: 10px;
    padding: 50px 85px; }

    .container-form {
    width: 660px;
    position: relative;
    margin: 0 auto; }

    .form-group {
    overflow: hidden;
    margin-bottom: 20px; }
  
  .form-input {
    width: 100%;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    padding: 17px 20px;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: 500;
    color: #222; }
    .form-input::-webkit-input-placeholder {
      color: #999; }
    .form-input::-moz-placeholder {
      color: #999; }
    .form-input:-ms-input-placeholder {
      color: #999; }
    .form-input:-moz-placeholder {
      color: #999; }
    .form-input::-webkit-input-placeholder {
      font-weight: 500; }
    .form-input::-moz-placeholder {
      font-weight: 500; }
    .form-input:-ms-input-placeholder {
      font-weight: 500; }
    .form-input:-moz-placeholder {
      font-weight: 500; }
    .form-input:focus {
      border: 1px solid transparent;
      -webkit-border-image-source: -webkit-linear-gradient(to right, #9face6, #74ebd5);
      -moz-border-image-source: -moz-linear-gradient(to right, #9face6, #74ebd5);
      -o-border-image-source: -o-linear-gradient(to right, #9face6, #74ebd5);
      border-image-source: linear-gradient(to right, #9face6, #74ebd5);
      -webkit-border-image-slice: 1;
      border-image-slice: 1;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      -o-border-radius: 5px;
      -ms-border-radius: 5px;
      background-origin: border-box;
      background-clip: content-box, border-box; }
      .form-input:focus::-webkit-input-placeholder {
        color: #222; }
      .form-input:focus::-moz-placeholder {
        color: #222; }
      .form-input:focus:-ms-input-placeholder {
        color: #222; }
      .form-input:focus:-moz-placeholder {
        color: #222; }
  
  .form-submit {
    width: 100%;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    padding: 17px 20px;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    border: none;
    background-image: -moz-linear-gradient(to left, #74ebd5, #9face6);
    background-image: -ms-linear-gradient(to left, #74ebd5, #9face6);
    background-image: -o-linear-gradient(to left, #74ebd5, #9face6);
    background-image: -webkit-linear-gradient(to left, #74ebd5, #9face6);
    background-image: linear-gradient(to left, #74ebd5, #9face6); }

    h2 {
    line-height: 1.66;
    margin: 0;
    padding: 0;
    font-weight: 900;
    color: #222;
    font-family: 'Montserrat';
    font-size: 24px;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 40px; }

    .main {
    font-size: 14px;
    line-height: 1.8;
    color: #222;
    font-weight: 400;
    font-family: 'Montserrat';
    /* background-image: url("https://st2.depositphotos.com/3800275/11991/i/950/depositphotos_119912962-stock-photo-books-on-grunge-wooden-table.jpg"); */
    background-repeat: no-repeat;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-position: center center;
    padding: 115px 0; }
    
    </style>
@endsection


@section('content')

<div class="main">

  <section class="signup" >
      <!-- <img src="images/signup-bg.jpg" alt=""> -->
      <div class="container-form">
          @if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div><br/>
@endif
          <div class="signup-content">
              <form method="POST" action="{{ route('petugass.store') }}" id="signup-form" class="signup-form">
                  @csrf
                  <h2 class="form-title">TAMBAHKAN PETUGAS</h2>
                  <div class="form-group">
                      <input type="text" class="form-input" name="nama" id="name" placeholder="Nama"/>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-input" name="alamat" id="name" placeholder="Alamat"/>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-input" name="jenis_kelamin" id="name" placeholder="Jenis Kelamin"/>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-input" name="no_hp" id="name" placeholder="Nomor Handphone"/>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-input" name="tanggal_lahir" id="name" placeholder="Tanggal Lahir"/>
                  </div>
                  
                  <div class="form-group">
                      <input type="submit" name="submit" id="submit" class="form-submit" value="TAMBAHKAN PETUGAS"/>
                  </div>
              </form>
          </div>
      </div>
  </section>

</div>
@endsection