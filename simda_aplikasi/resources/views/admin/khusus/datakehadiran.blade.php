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
					@if($hari != "Tuesday")
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
						<td colspan="6" class="center-align">
							Maaf, hak akses pengabsenan menunggu hingga selasa depan
							<div class="progress">
							    <div class="indeterminate"></div>
							</div>
						</td>
					</tr>
					@endif
					</tbody>
				</table>
				</form>
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