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
                        <h5 class="card-title text-muted text-uppercase text-center">Daftar anggota yang melakukan peminjaman<br></h5>
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
                  <div class="col-lg-4">
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
                    <!-- Join 1 -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                          <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Daftar nama petugas serta transaksi peminjaman</h5>
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
                    <div class="col-lg-4">
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
                      <!-- Trigger 1 -->
                      <div class="col-lg-4">
                          <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                              <h5 class="card-title text-muted text-uppercase text-center">Log penambahan denda keterlambatan</h5>
                              <hr>
                              <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalTrigger1" role="button" aria-expanded="false" aria-controls="modalTrigger1">
                                  Tampilkan
                              </a>
                              <div class="modal" id="modalTrigger1">
                                <div class="modal-dialog">
                                  <div class = "modal-content">
                                      <div class="card card-body">
                                          <div class="modal-header">
                                            <h5 class="card-title text-muted text-uppercase text-center">Log penambahan denda keterlambatan</h5>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-striped">
                                                  <thead>
                                                      <tr class="card-title text-muted text-uppercase text-center">
                                                        <td>No.</td>
                                                        <td>ID Pinjam</td>
                                                        <td>Waktu</td>
                                                        <td>Denda Sebelum</td>
                                                        <td>Denda Sesudah</td>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach($trigger1s as $trigger1)
                                                      <tr>
                                                          <td>{{$trigger1->id}}</td>
                                                          <td>{{$trigger->id_pinjam}}</td>
                                                          <td>{{$trigger1->waktu}}</td>
                                                          <td>{{$trigger1->denda_sebelum}}</td>
                                                          <td>{{$trigger1->denda_sesudah}}</td>
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
                              <h5 class="card-title text-muted text-uppercase text-center">Daftar rak yang kapasitasnya telah diubah</h5>
                              <hr>
                              <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" href="#modalTrigger2" role="button" aria-expanded="false" aria-controls="modalTrigger2">
                                  Tampilkan
                              </a>
                              <div class="modal" id="modalTrigger2">
                                <div class="modal-dialog">
                                  <div class = "modal-content">
                                      <div class="card card-body">
                                          <div class="modal-header">
                                            <h5 class="card-title text-muted text-uppercase text-center">Daftar rak yang kapasitasnya telah diubah</h5>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-striped">
                                                  <thead>
                                                      <tr class="card-title text-muted text-uppercase text-center">
                                                        <td>No.</td>
                                                        <td>ID Rak</td>
                                                        <td>Waktu</td>
                                                        <td>Kapasitas Sebelum</td>
                                                        <td>Kapasitas Sesudah</td>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach($trigger2s as $trigger2)
                                                      <tr>
                                                          <td>{{$trigger2->id}}</td>
                                                          <td>{{$trigger2->id_rak}}</td>
                                                          <td>{{$trigger2->waktu}}</td>
                                                          <td>{{$trigger2->kapasitas_sebelum}}</td>
                                                          <td>{{$trigger2->kapasitas_sesudah}}</td>
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
                <h6 class="card-title text-uppercase text-center">Cek kapasitas rak untuk menampung buku</h6>
                <form method="post" action="{{url('shanias')}}">
                    <div class="form-group">
                        @csrf
                      <h6 class="card-title text-left">ID Rak :</h6>
                        <select class="form-control" name="id_rak">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                          </select>
                      </div>
                </form>
                  <div class="container">
                    <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                      @if(!empty(request()->all()))
                          {{ request()->name }}
                      @endif
                  </div>
              </div>
              <div class="col-lg-6">
                  <h6 class="card-title text-uppercase text-center">Cek jumlah buku yang dipinjam di tiap kategori</h6>
                  <form method="post" action="{{url('shanias')}}">
                      <div class="form-group">
                          @csrf
                          <h6 class="card-title text-left">Kategori :</h6>
                            <select class="form-control">
                                <option value="novel">Novel</option>
                                <option value="cerpen">Cerpen</option>
                                <option value="Sci-fi">Sci-fi</option>
                                <option value="Horor">Horor</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Romance">Romance</option>
                                <option value="Fanfiction">Fanfiction</option>
                                <option value="Humor">Humor</option>
                                <option value="Misteri">Misteri</option>
                                <option value="Historical fiction">Historical Fiction</option>
                                <option value="Resep Masakan">Resep Masakan</option>
                                <option value="Terjemahan">Terjemahan</option>
                                <option value="Motivasi">Motivasi</option>
                                <option value="Komputer">Komputer</option>
                                <option value="Biografi">Biografi</option>
                                <option value="Pengembangan Diri">Pengembangan Diri</option>
                                <option value="Komik">Komik</option>
                                <option value="Religi">Religi</option>
                                <option value="Ensiklopedi">Ensiklopedi</option>
                                <option value="Antalogi">Antalogi</option>
                                <option value="Kamus">Kamus</option>
                                <option value="Ilmiah">Ilmiah</option>
                                <option value="Anak - Anak">Anak-Anak</option>
                                <option value="Dongeng">Dongeng</option>
                                <option value="Fotografi">Fotografi</option>
                                <option value="Novelet">Novelet</option>
                                <option value="Tafsir">Tafsir</option>
                                <option value="Panduan">Panduan</option>
                                <option value="Jurnal">Jurnal</option>
                                <option value="Karya Ilmiah">Karya Ilmiah</option>
                            </select>
                      </div>
                  </form>
                    <div class="container">
                        <button type="submit" class="btn btn-secondary md-lg-5" style="padding: 10px 24px;">Cek</button>
                        @if(!empty(request()->all()))
                          {{ request()->id_rak }}
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
    
