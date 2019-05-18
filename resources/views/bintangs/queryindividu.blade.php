@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/shanias.css')}}">
@endsection
        

@section('content')

<section class = pricing>
        <br><br><br><br><br><br>
        <div class="container">
              <div class="row">
                  <!--View 1 -->
                  <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-2">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Daftar Buku dan Banyak Dipinjam<br></h5>
                        <hr>
                        <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalView1" role="button" aria-expanded="false" aria-controls="modalView1">
                            Tampilkan
                        </a>
                        <div class="modal" id="modalView1">
                          <div class="modal-dialog">
                            <div class = "modal-content">
                                <div class="card card-body">
                                    <div class="modal-header">
                                      <h5 class="card-title text-muted text-uppercase text-center">Daftar Buku dan Banyak Dipinjam</h5>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="card-title text-muted text-uppercase text-center">
                                                  <td>Judul Buku</td>
                                                  <td>Banyak Dipinjam</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($view1s as $view1)
                                                <tr>
                                                    <td>{{$view1->judul}}</td>
                                                    <td>{{$view1->banyak_dipinjam}}</td>
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
                  <div class="col-lg-4">
                      <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                          <h5 class="card-title text-muted text-uppercase text-center">Daftar Pengarang dan Kategori Buku</h5>
                          <hr>
                          <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalView2" role="button" aria-expanded="false" aria-controls="modalView1">
                              Tampilkan
                          </a>
                          <div class="modal" id="modalView2">
                            <div class="modal-dialog">
                              <div class = "modal-content">
                                  <div class="card card-body">
                                      <div class="modal-header">
                                        <h5 class="card-title text-muted text-uppercase text-center">Daftar Pengarang dan Kategori Buku</h5>
                                      </div>
                                      <div class="modal-body">
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr class="card-title text-muted text-uppercase text-center">
                                                    <td>Judul</td>
                                                    <td>Pengarang</td>
                                                    <td>Jenis</td>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($view2s as $view2)
                                                  <tr>
                                                      <td>{{$view2->judul}}</td>
                                                        <td>{{$view2->nama_pengarang}}</td>
                                                        <td>{{$view2->jenis}}</td>
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
                    <!-- Join 1 -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                          <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Daftar Buku dan Peminjam</h5>
                            <hr>
                            <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalJoin2" role="button" aria-expanded="false" aria-controls="modalJoin2">
                                Tampilkan
                            </a>
                            <div class="modal" id="modalJoin2">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                    <div class="card card-body">
                                        <div class="modal-header">
                                          <h5 class="card-title text-muted text-uppercase text-center">Daftar Buku dan Peminjam</h5>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="card-title text-muted text-uppercase text-center">
                                                      <td>Nama Peminjam</td>
                                                      <td>Buku yang Dipinjam</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($join2s as $join2)
                                                    <tr>
                                                        <td>{{$join2->nama}}</td>
                                                        <td>{{$join2->judul}}</td>
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
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-10">
                          <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Daftar judul dan Waktu Peminjaman</h5>
                            <hr>
                            <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalJoin1" role="button" aria-expanded="false" aria-controls="modalJoin1">
                                Tampilkan
                            </a>
                            <div class="modal" id="modalJoin1">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                    <div class="card card-body">
                                        <div class="modal-header">
                                          <h5 class="card-title text-muted text-uppercase text-center">Daftar judul dan Waktu Peminjaman</h5>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="card-title text-muted text-uppercase text-center">
                                                      <td>Judul</td>
                                                      <td>Tanggal Pinjam</td>
                                                      <td>Tanggal Pengembalian</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($join1s as $join1)
                                                    <tr>
                                                        <td>{{$join1->judul}}</td>
                <td>{{$join1->tanggal_pinjam}}</td>
                  <td>{{$join1->tanggal_pengembalian}}</td>
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
                      <!-- Trigger 1 -->
                      <div class="col-lg-4">
                          <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                              <h5 class="card-title text-muted text-uppercase text-center">Log Peminjaman dan Pengembalian</h5>
                              <hr>
                              <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalTrigger1" role="button" aria-expanded="false" aria-controls="modalTrigger1">
                                  Tampilkan
                              </a>
                              <div class="modal" id="modalTrigger1">
                                <div class="modal-dialog">
                                  <div class = "modal-content">
                                      <div class="card card-body">
                                          <div class="modal-header">
                                            <h5 class="card-title text-muted text-uppercase text-center">Log Peminjaman dan Pengembalian</h5>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-striped">
                                                  <thead>
                                                      <tr class="card-title text-muted text-uppercase text-center">
                                                        <td>No.</td>
                                                        <td>Tanggal</td>
                                                        <td>ID Buku</td>
                                                        <td>Aktifitas</td>
                                                              </tr>
                                                  </thead>
                                                  <tbody>
                                                  @foreach($trigger1s as $trigger1)
                                                    <tr>
                                                        <td>{{$trigger1->id}}</td>
                                                        <td>{{$trigger1->tanggal}}</td>
                                                        <td>{{$trigger1->id_buku}}</td>
                                                        <td>{{$trigger1->aktifitas}}</td>
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
                        <!-- Trigger 2 -->
                       <div class="col-lg-4">
                          <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                              <h5 class="card-title text-muted text-uppercase text-center">Prosedur Daftar Terlambat</h5>
                              <hr>
                              <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalTrigger2" role="button" aria-expanded="false" aria-controls="modalTrigger2">
                                  Tampilkan
                              </a>
                              <div class="modal" id="modalTrigger2">
                                <div class="modal-dialog">
                                  <div class = "modal-content">
                                      <div class="card card-body">
                                          <div class="modal-header">
                                            <h5 class="card-title text-muted text-uppercase text-center">Daftar Peminjam yang Terlambat</h5>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-striped">
                                                  <thead>
                                                      <tr class="card-tgitle text-muted text-uppercase text-center">
                                                        <td>ID Anggota</td>
                                                        <td>Nama</td>
                                                        <td>Banyak Terlambat</td>
                                                  
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                  @foreach($proc2s as $proc2)
                                                    <tr>
                                                        <td>{{$proc2->id}}</td>
                                                        <td>{{$proc2->nama_anggota}}</td>
                                                        <td>{{$proc2->banyak_terlambat}}</td>
                                                  
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

          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h6 class="card-title text-uppercase text-center">Cek Umur</h6>
                <form method="post" action="{{url('bintangs/queryindividu')}}">
                    <div class="form-group">
                        @csrf
                      <h6 class="card-title text-left">ID Anggota :</h6>
                        
                            <input type="text" class="form-control" name="param1_fungsi1"/>

                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                </form>
                  <div class="container">
                      @if(!empty($func1))
                          <h4>Nama: {{ $func1->nama }}</h4>
                          <h4>Umur: {{ $func1->umur }}</h4>
                      @endif
                  </div>
              </div>
              <div class="col-lg-6">
                  <h6 class="card-title text-uppercase text-center">Cek jumlah buku yang dipinjam oleh Anggota</h6>
                  <form method="post" action="{{url('bintangs/queryindividu')}}">
                      <div class="form-group">
                          @csrf
                          <h6 class="card-title text-left">ID Anggota :</h6>
                          <input type="text" class="form-control" name="param1_fungsi2"/> 
                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                  </form>
                    <div class="container">
                        @if(!empty($func2))
                        nama: {{ $func2->nama }}
                                    Jumlah buku yang dipinjam: {{ $func2->res }}
                        @endif
                      </div>
                </div>
                <div class="col-lg-6">
                  <h6 class="card-title text-uppercase text-center">Prosedur Hitung Denda</h6>
                  <form method="post" action="{{url('bintangs/queryindividu')}}">
                      <div class="form-group">
                          @csrf
                          <h6 class="card-title text-left">ID Pengembalian :</h6>
                          <input type="text" class="form-control" name="param1_prosedur1"/> 
                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                  </form>
                    <div class="container">
                        @if(!empty($proc1))
                        nama: {{ $func2->nama }}
                                    Jumlah buku yang dipinjam: {{ $func2->res }}
                        @endif
                      </div>
                </div>
            </div>
          </div>
          </div>
          <br><br><br><br><br><br>
</section>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
@endsection
    
