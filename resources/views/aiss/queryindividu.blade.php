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
                        <h5 class="card-title text-muted text-uppercase text-center">Daftar Anggota dan Daftar Pinjam<br></h5>
                        <hr>
                        <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalView1" role="button" aria-expanded="false" aria-controls="modalView1">
                            Tampilkan
                        </a>
                        <div class="modal" id="modalView1">
                          <div class="modal-dialog">
                            <div class = "modal-content">
                                <div class="card card-body">
                                    <div class="modal-header">
                                      <h5 class="card-title text-muted text-uppercase text-center">Daftar Anggota dan Tanggal Pinjam</h5>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="card-title text-muted text-uppercase text-center">
                                                  <td>ID Anggota</td>
                                                  <td>Nama Anggota</td>
                                                  <td>Tanggal Pinjam</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($view1s as $view1)
                                                <tr>
                                                    <td>{{$view1->id}}</td>
                                                    <td>{{$view1->nama_anggota}}</td>
                                                    <td>{{$view1->tanggal_pinjam}}</td>
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
                          <h5 class="card-title text-muted text-uppercase text-center">Daftar Buku dan Kapasitas Rak</h5>
                          <hr>
                          <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalView2" role="button" aria-expanded="false" aria-controls="modalView1">
                              Tampilkan
                          </a>
                          <div class="modal" id="modalView2">
                            <div class="modal-dialog">
                              <div class = "modal-content">
                                  <div class="card card-body">
                                      <div class="modal-header">
                                        <h5 class="card-title text-muted text-uppercase text-center">Daftar Buku dan Kapasitas Rak</h5>
                                      </div>
                                      <div class="modal-body">
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr class="card-title text-muted text-uppercase text-center">
                                                    <td>ID Buku</td>
                                                    <td>Judul</td>
                                                    <td>ID Rak</td>
                                                    <td>Ukuran Rak</td>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($view2s as $view2)
                                                  <tr>
                                                      <td>{{$view2->id_buku}}</td>
                                                        <td>{{$view2->judul}}</td>
                                                        <td>{{$view2->id}}</td>
                                                        <td>{{$view2->kapasitas_rak}}</td>
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
                                                      <td>ID</td>
                                                      <td>Nama Anggota</td>
                                                      <td>Judul</td>
                                                      <td>Jenis</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($join1s as $join1)
                                                    <tr>
                                                        <td>{{$join1->id}}</td>
                                                        <td>{{$join1->nama_anggota}}</td>
                                                        <td>{{$join1->judul}}</td>
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
                      <!-- Join 2 -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-10">
                          <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Daftar Denda Anggota</h5>
                            <hr>
                            <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalJoin1" role="button" aria-expanded="false" aria-controls="modalJoin1">
                                Tampilkan
                            </a>
                            <div class="modal" id="modalJoin1">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                    <div class="card card-body">
                                        <div class="modal-header">
                                          <h5 class="card-title text-muted text-uppercase text-center">Daftar Denda Anggota</h5>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="card-title text-muted text-uppercase text-center">
                                                      <td>Nama Anggota</td>
                                                      <td>Denda</td>
                                                                                                      </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($join2s as $join2)
                                                    <tr>
                                                        <td>{{$join2->nama_anggota}}</td>
                <td>{{$join2->dendaa}}</td>
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
                              <h5 class="card-title text-muted text-uppercase text-center">Log Anggota</h5>
                              <hr>
                              <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalTrigger1" role="button" aria-expanded="false" aria-controls="modalTrigger1">
                                  Tampilkan
                              </a>
                              <div class="modal" id="modalTrigger1">
                                <div class="modal-dialog">
                                  <div class = "modal-content">
                                      <div class="card card-body">
                                          <div class="modal-header">
                                            <h5 class="card-title text-muted text-uppercase text-center">Log Anggota</h5>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-striped">
                                                  <thead>
                                                      <tr class="card-title text-muted text-uppercase text-center">
                                                        <td>ID</td>
                                                        <td>nama</td>
                                                        <td>Tanggal Lahir</td>
                                                        <td>Tanggal Daftar</td>
                                                        <td>Kelamin</td>
                                                        <td>Alamat</td>
                                                        <td>HP</td>
                                                        <td>tgl</td>
                                                        <td>status</td>
                                                              </tr>
                                                  </thead>
                                                  <tbody>
                                                  @foreach($trigger1s as $trigger1)
                                                    <tr>
                                                        <td>{{$trigger1->l_id}}</td>
                                                        <td>{{$trigger1->l_nama}}</td>
                                                        <td>{{$trigger1->l_lahir}}</td>
                                                        <td>{{$trigger1->l_daftar}}</td>
                                                        <td>{{$trigger1->l_kelamin}}</td>
                                                        <td>{{$trigger1->l_alamat}}</td>
                                                        <td>{{$trigger1->l_hp}}</td>
                                                        <td>{{$trigger1->l_tgl}}</td>
                                                        <td>{{$trigger1->l_status}}</td>
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
                              <h5 class="card-title text-muted text-uppercase text-center">Log Stok Buku</h5>
                              <hr>
                              <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalTrigger2" role="button" aria-expanded="false" aria-controls="modalTrigger2">
                                  Tampilkan
                              </a>
                              <div class="modal" id="modalTrigger2">
                                <div class="modal-dialog">
                                  <div class = "modal-content">
                                      <div class="card card-body">
                                          <div class="modal-header">
                                            <h5 class="card-title text-muted text-uppercase text-center">Log Stok Buku</h5>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-striped">
                                                  <thead>
                                                      <tr class="card-tgitle text-muted text-uppercase text-center">
                                                        <td>ID Buku</td>
                                                        <td>Judul</td>
                                                        <td>Stok lama</td>
                                                        <td>Stok Baru</td>
                                                        <td>Waktu Ubah</td>
                                                  
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                  @foreach($trigger2s as $proc2)
                                                    <tr>
                                                        <td>{{$proc2->l_idbuku}}</td>
                                                        <td>{{$proc2->l_judul}}</td>
                                                        <td>{{$proc2->stok_lama}}</td>
                                                        <td>{{$proc2->stok_baru}}</td>
                                                        <td>{{$proc2->waktu_ubah}}</td>
                                                  
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
                <h6 class="card-title text-uppercase text-center">Fugnsi Banyak Anggota yang Mengembalikan pada Tangal Tertentu</h6>
                <form method="post" action="{{url('aiss/queryindividu')}}">
                    <div class="form-group">
                        @csrf
                      <h6 class="card-title text-left">Tanggal :</h6>
                        
                            <input type="text" class="form-control" name="param1_fungsi1"/>

                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                </form>
                  <div class="container">
                      @if(!empty($func1))
                          <h4>Tanggal: {{ $func1[0] }}</h4>
                          <h4>Banyak Anggota: {{ $func1[1] }}</h4>
                                          @endif
                  </div>
              </div>
              <div class="col-lg-6">
                  <h6 class="card-title text-uppercase text-center">Fungsi 2</h6>
                  <form method="post" action="{{url('aiss/queryindividu')}}">
                      <div class="form-group">
                          @csrf
                          <h6 class="card-title text-left">Fugnsi Banyak Anggota yang Meminjam pada Tangal Tertentu :</h6>
                          <input type="text" class="form-control" name="param1_fungsi2"/> 
                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                  </form>
                    <div class="container">
                        @if(!empty($func2))
                        Tanggal: {{ $func2[0] }}
                                    Banyak Peminjam: {{ $func2[1] }}
                        @endif
                      </div>
                </div>
                <div class="col-lg-6">
                  <h6 class="card-title text-uppercase text-center">Prosedur Mengubah Stok</h6>
                  <form method="post" action="{{url('aiss/queryindividu')}}">
                      <div class="form-group">
                          @csrf
                          <h6 class="card-title text-left">Id Buku :</h6>
                          <input type="text" class="form-control" name="param1_prosedur1"/> 
                          <h6 class="card-title text-left">Stok Baru :</h6>
                          <input type="text" class="form-control" name="param2_prosedur1"/> 
                      
                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                  </form>
                    <div class="container">
        
                      </div>
                </div>
                <div class="col-lg-6">
                <h6 class="card-title text-uppercase text-center">Prosedur Mengecek nama</h6>
                <form method="post" action="{{url('aiss/queryindividu')}}">
                    <div class="form-group">
                        @csrf
                      <h6 class="card-title text-left">Nama :</h6>
                        
                            <input type="text" class="form-control" name="param1_prosedur2"/>

                      </div>
                      <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                </form>
                  <div class="container">
                  
                  </div>
              </div>
            </div>
          </div>
          </div>
          <br><br><br><br><br><br>
</section>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
@endsection
    
