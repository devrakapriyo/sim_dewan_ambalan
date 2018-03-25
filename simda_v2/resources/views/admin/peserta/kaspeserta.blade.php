<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Kas peserta</title>
</head>
@section('admin.konten')
<body>
<div class="row">
@if(Auth::User()->jabatan != "Admin")
	<div class="col s12">
		@if(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('sukses') }}
		</div>
		@endif
		<ol class="breadcrumb white">
		  <li><a href="{{URL::asset('inputpeserta')}}">Daftar peserta</a></li>
		  <li><a href="{{URL::asset('datapeserta')}}">Data peserta</a></li>
		  <li><a href="{{URL::asset('absensipeserta')}}">Absensi peserta</a></li>
		  <li><a href="{{URL::asset('kaspeserta')}}">Kas peserta</a></li>
		</ol>
		<div class="card">
			<div class="card-content blue lighten-1">
				<span class="card-title">Kas peserta {{Auth::User()->sangga}}</span>
			</div>
			<div class="card-action">
				<form method="post" action="kaspeserta">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<table class="highlight responsive-table">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Jenis kelamin</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Kas peserta Rp.</th>
						</tr>
					</thead>
					<tbody>
					@if($hari == "Tuesday")
						@if($waktu != $validasi)
						@foreach($data as $data)
							<tr>
								<input type="hidden" name="id[]" value="{{$data->id}}">
								<td><input type="hidden" name="nis[]" value="{{$data->nis}}">{{$data->nis}}</td>
								<td><input type="hidden" name="nama" value="{{$data->nama}}">{{$data->nama}}</td>
								<td><input type="hidden" name="jk" value="{{$data->jk}}">{{$data->jk}}</td>
								<td><input type="hidden" name="sangga" value="{{$data->sangga}}">{{$data->sangga}}</td>
								<td><input type="hidden" name="ambalan" value="{{$data->ambalan}}">{{$data->ambalan}}</td>
								<td><input type="text" name="kas[]" value="1000"></td>
							</tr>
						@endforeach
						@else
						<tr>
							<td colspan="6" class="center-align">Maaf, anda telah melakukan pembayaran</td>
						</tr>
						@endif
					@else
					<tr>
						<td colspan="9" class="center-align">
							Maaf, hak akses pengabsenan menunggu hingga selasa depan
							<div class="progress">
							    <div class="indeterminate"></div>
							</div>
						</td>
					</tr>
					@endif
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4">{{$page->render()}}</td>
							<td colspan="5" class="right-align">
							<a target="_blank" href="{{URL::asset('formatkas')}}" class="btn waves-effect waves-light green white-text" type="submit" name="action">Download format kas
							    <i class="material-icons right">loop</i>
							</a>
							<button class="btn waves-effect waves-light blue" type="submit" name="action">Simpan
							    <i class="material-icons right">send</i>
							</button>
						</td>
						</tr>
					</tfoot>
				</table>
				</form>
			</div>
		</div>
		<div class="card">
		<div class="card-content">
			<div class="col s6">
				<ul><b>Keterangan peserta {{Auth::User()->sangga}}</b></ul>
				<li>Jumlah peserta sangga {{Auth::User()->sangga}} = {{$jumlah}} orang</li>
				<li>Total kas {{Auth::User()->sangga}} = Rp. {{number_format($kas, 0, ",", ".")}}</li>
			</div>
			<div class="col s6">
				<ul><b>Total kas peserta {{Auth::User()->sangga}}</b></ul>
				@foreach($kaspeserta as $kaspeserta)
				<li>{{$kaspeserta->nama}} = <span class="green-text text-darken-2" title="Total kas {{$kaspeserta->nama}} sebesar Rp. {{$kaspeserta->total}}">Rp.{{number_format($kaspeserta->total, 0, ",", ".")}}</span></li>
				@endforeach
			</div>
			<div class="row"></div>
		</div>
	</div>
	</div>
@else
<div class="card">
	<div class="card-content">Maaf, anda tidak memilik hak akses</div>
</div>
@endif
</div>
</body>
@stop
</html>