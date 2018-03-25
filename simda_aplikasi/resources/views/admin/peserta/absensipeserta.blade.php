<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Absensi peserta</title>
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
				<span class="card-title white-text">Data absensi peserta {{Auth::User()->sangga}}</span>
			</div>
			<div class="card-action">
				<form method="post" action="{{URL::asset('absensipeserta')}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="status" value="S">
				<table class="highlight responsive-table">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Jenis kelamin</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Absensi</th>
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
								<td>
									<select name="keterangan[]">
										<option value="H">Hadir</option>
										<option value="S">Sakit</option>
										<option value="I">Izin</option>
										<option value="A">Alfa</option>
									</select>
								</td>
							</tr>
						@endforeach
						@else
						<tr>
							<td colspan="6" class="center-align">Maaf, anda telah melakukan pengabsenan</td>
						</tr>
						@endif
					@else
					<tr>
						<td colspan="6" class="center-align">
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
							<td colspan="3">{{$page->render()}}</td>
							<td colspan="3" class="right-align">
							<a target="_blank" href="{{URL::asset('formatabsen')}}" class="btn waves-effect waves-light green white-text" type="submit" name="action">Download absensi
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
	<div class="card ">
		<div class="card-content">
			<ul><b>Keterangan peserta {{Auth::User()->sangga}}</b></ul>
			<li>Jumlah peserta sangga {{Auth::User()->sangga}} = {{$jumlah}} orang</li>
			<li>Jumlah hadir sangga {{Auth::User()->sangga}} = {{$h}} orang</li>
			<li>Jumlah sakit sangga {{Auth::User()->sangga}} = {{$s}} orang</li>
			<li>Jumlah izin sangga {{Auth::User()->sangga}} = {{$i}} orang</li>
			<li>Jumlah alfa sangga {{Auth::User()->sangga}} = {{$a}} orang</li>

			<div class="row"></div>
			<div class="col s3">
				<ul><b>Keterangan hadir peserta {{Auth::User()->sangga}}</b></ul>
				@forelse($hadir as $hadir)
				<li>Nama : {{$hadir->nama}} = <span title="{{$hadir->nama}} {{$hadir->hadir}} kali Pertemuan hadir">{{$hadir->hadir}}</span></li>
				@empty
				<li>Tidak ada yang hadir</li>
				@endforelse
			</div>
			<div class="col s3">
				<ul><b>Keterangan sakit peserta {{Auth::User()->sangga}}</b></ul>
				@forelse($sakit as $sakit)
				<li>Nama : {{$sakit->nama}} = <span title="{{$sakit->nama}} {{$sakit->sakit}} kali Pertemuan sakit">{{$sakit->sakit}}</span></li>
				@empty
				<li>Tidak ada yang sakit</li>
				@endforelse
			</div>
			<div class="col s3">
				<ul><b>Keterangan izin peserta {{Auth::User()->sangga}}</b></ul>
				@forelse($izin as $izin)
				<li>Nama : {{$izin->nama}} = <span title="{{$izin->nama}} {{$izin->izin}} kali Pertemuan izin">{{$izin->izin}}</span></li>
				@empty
				<li>Tidak ada yang izin</li>
				@endforelse
			</div>
			<div class="col s3">
				<ul><b>Keterangan alfa peserta {{Auth::User()->sangga}}</b></ul>
				@forelse($alfa as $alfa)
				<li>Nama : {{$alfa->nama}} = <span title="{{$alfa->nama}} {{$alfa->alfa}} kali Pertemuan alfa">{{$alfa->alfa}}</span></li>
				@empty
				<li>Tidak ada yang alfa</li>
				@endforelse
			</div>
		</div>
		<div class="row"></div>
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