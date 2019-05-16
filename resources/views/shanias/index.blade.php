@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/shanias.css')}}">
@endsection
        

@section('content')
<section class = pricing>
        <div class="container">
              <div class="row">
                  <!--View 1 -->
                  <div class="col-lg-6">
                    <div class="card mb-5 mb-lg-2">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Daftar anggota yang melakukan peminjaman</h5>
                        <hr>
                        <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalView1" role="button" aria-expanded="false" aria-controls="modalView1">
                            Tampilkan
                        </a>
                        <div class="modal" id="modalView1">
                          <div class="modal-dialog">
                            <div class = "modal-content">
                                <div class="card card-body">
                                    <div class="modal-header">
                                      <h5 class="card-title text-muted text-uppercase text-center">Daftar Anggota yang Melakukan Peminjaman</h5>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="card-title text-muted text-uppercase text-center">
                                                  <td>Nama Anggota</td>
                                                  <td>Nama Petugas yang mengurus</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($view1s as $view1)
                                                <tr>
                                                    <td>{{$view1->nama_anggota}}</td>
                                                    <td>{{$view1->nama}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- View 2 -->
                  <div class="col-lg-6">
                      <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                          <h5 class="card-title text-muted text-uppercase text-center">Daftar stok buku tiap kategori di rak</h5>
                          <hr>
                          <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalView2" role="button" aria-expanded="false" aria-controls="modalView1">
                              Tampilkan
                          </a>
                          <div class="modal" id="modalView2">
                            <div class="modal-dialog">
                              <div class = "modal-content">
                                  <div class="card card-body">
                                      <div class="modal-header">
                                        <h5 class="card-title text-muted text-uppercase text-center">Daftar kapasitas rak untuk tiap kategori di rak</h5>
                                      </div>
                                      <div class="modal-body">
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr class="card-title text-muted text-uppercase text-center">
                                                    <td>Kategori Buku</td>
                                                    <td>Kapasitas Rak</td>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($view2s as $view2)
                                                  <tr>
                                                      <td>{{$view2->jenis}}</td>
                                                      <td>{{$view2->kap}}</td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                            </table>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

          </div>
               
          </div>
          <div class="container">
            <div class="row">
                    <!-- Join 1 -->
                    <div class="col-lg-6">
                        <div class="card mb-5 mb-lg-0">
                          <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Daftar nama petugas serta id transaksi peminjaman yang diurusnya</h5>
                            <hr>
                            <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalJoin2" role="button" aria-expanded="false" aria-controls="modalJoin2">
                                Tampilkan
                            </a>
                            <div class="modal" id="modalJoin2">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                    <div class="card card-body">
                                        <div class="modal-header">
                                          <h5 class="card-title text-muted text-uppercase text-center">Daftar nama petugas serta id transaksi peminjaman yang diurusnya</h5>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="card-title text-muted text-uppercase text-center">
                                                      <td>Nama Petugas</td>
                                                      <td>ID Transaksi</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($join2s as $join2)
                                                    <tr>
                                                        <td>{{$join2->nama}}</td>
                                                        <td>{{$join2->id}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Join 2 -->
                    <div class="col-lg-6">
                        <div class="card mb-5 mb-lg-10">
                          <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Daftar nama penerbit beserta kategori bku yang ditulisnya</h5>
                            <hr>
                            <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalJoin1" role="button" aria-expanded="false" aria-controls="modalJoin1">
                                Tampilkan
                            </a>
                            <div class="modal" id="modalJoin1">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                    <div class="card card-body">
                                        <div class="modal-header">
                                          <h5 class="card-title text-muted text-uppercase text-center">Daftar nama penerbit beserta kategori bku yang ditulisnya</h5>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="card-title text-muted text-uppercase text-center">
                                                      <td>Kode Penerbit</td>
                                                      <td>Nama Penerbit</td>
                                                      <td>Kategori Buku</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($join1s as $join1)
                                                    <tr>
                                                        <td>{{$join1->id_pengarang}}</td>
                                                        <td>{{$join1->nama_pengarang}}</td>
                                                        <td>{{$join1->jenis}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
            </div>
          </div>
      </div>

          <div class="congtainer">
            <div class="row">
              <div class="col-lg-6">
                <h6 class="card-title text-muted text-uppercase text-center"> Soal 3</h6>
                  <select class="form-control">
                      <option value="one">One</option>
                      <option value="two">Two</option>
                      <option value="three">Three</option>
                      <option value="four">Four</option>
                      <option value="five">Five</option>
                  </select>
              </div>
            </div>
          </div>


</section>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
@endsection
    
