@extends('layouts.app')
@section('title')
    Tria - View 1
@endsection

@section('content')
<!-- <style>
  .uper {
    padding-top: 10%;
  }
</style> -->

	<style type="text/css">
		body, html {
	height: 100%;
	font-family: sans-serif;
}

		
		.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  padding-top: 10%;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  
}
.wrap-table100 {
  width: 1170px;
}

.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}
	</style>


<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID Anggota</th>
								<th class="column2">Nama Anggota</th>
								<th class="column2">Tanggal Pinjam</th>

							</tr>
						</thead>
						<tbody>
							@foreach($views as $view)
								<tr>
									<td class="column1">{{$view->id}}</td>
									<td class="column2">{{$view->nama_anggota}}</td>
									<td class="column1">{{$view->tanggal_pinjam}}</td>
								</tr>
							@endforeach
								</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection