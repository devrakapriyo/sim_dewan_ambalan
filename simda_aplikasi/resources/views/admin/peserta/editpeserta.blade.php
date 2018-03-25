<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('inputpeserta')}}">Daftar peserta</a></li>
	<li><a href="{{URL::asset('datapeserta')}}">Data peserta</a></li>
	<li><a href="{{URL::asset('absensipeserta')}}">Absensi peserta</a></li>
	<li><a href="{{URL::asset('kaspeserta')}}">Kas peserta</a></li>
</ol>
@if(Session::has('sukses'))
	<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('sukses') }}
	</div>
@endif
<div class="card">
	<div class="card-content light-blue darken-1 white-text">
		<span class="card-title">Barui data peserta "{{$data->nama}}"</span>
	</div>
	<div class="card-action">
		<div class="col s12 m4 l3">
			<img class="responsive-img materialboxed foto-detailadmin" src="{{URL::asset('foto')}}/{{$data->foto}}">
		</div>
		<div class="col s12 m8 l9">
		<form method="post" action="{{URL::asset('baruipeserta')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$data->id}}">
		<table class="bordered highlight responsive-table">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="{{$data->nis}}"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="{{$data->nama}}"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<select name="agama">
						 <option selected value="{{$data->agama}}">{{$data->agama}}</option>
						 <option value="Islam">Islam</option>
						 <option value="Kristen protestan">Kristen protestan</option>
						 <option value="Kristen katolik">Kristen katolik</option>
						 <option value="Budha">Budha</option>
						 <option value="Hindu">Hindu</option>
						 <option value="Konghuchu">Konghuchu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="agama">
						 <option selected value="{{$data->jk}}">{{$data->jk}}</option>
						 <option value="Laki-laki">Laki-laki</option>
						 <option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tempat, tgl lahir</td>
				<td>:</td>
				<td>
					<div class="col s6">
						<input type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}">
					</div>
					<div class="col s6">
						<input type="date" name="tgl_lahir" value="{{$data->tgl_lahir}}">
					</div>
				</td>
			</tr>
			<tr>
				<td>Rombel</td>
				<td>:</td>
				<td>
					<select name="rombel">
						<option selected value="{{$data->rombel}}">{{$data->rombel}}</option>
						<option value="RPL XI-1">RPL X-1</option>
						<option value="RPL XI-2">RPL X-2</option>
						<option value="RPL XI-3">RPL X-3</option>
						<option value="RPL XI-4">RPL X-4</option>
						<option value="TKJ XI-1">TKJ X-1</option>
						<option value="TKJ XI-2">TKJ X-2</option>
						<option value="TKJ XI-3">TKJ X-3</option>
						<option value="TKJ XI-4">TKJ X-4</option>
						<option value="APK XI-1">APK X-1</option>
						<option value="APK XI-2">APK X-2</option>
						<option value="APK XI-3">APK X-3</option>
						<option value="APK XI-4">APK X-4</option>
						<option value="MMD XI-1">MMD X-1</option>
						<option value="MMD XI-2">MMD X-2</option>
						<option value="MMD XI-3">MMD X-3</option>
						<option value="MMD XI-4">MMD X-4</option>
						<option value="Pemasaran XI-1">Pemasaran X-1</option>
						<option value="Pemasaran XI-2">Pemasaran X-2</option>
						<option value="Pemasaran XI-3">Pemasaran X-3</option>
						<option value="Pemasaran XI-4">Pemasaran X-4</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Rayon</td>
				<td>:</td>
				<td>
					<select name="rayon">
						<option selected value="{{$data->rayon}}">{{$data->rayon}}</option>
						<option value="Cicurug 1">Cicurug 1</option>
						<option value="Cicurug 2">Cicurug 2</option>
						<option value="Cicurug 3">Cicurug 3</option>
						<option value="Cicurug 4">Cicurug 4</option>
						<option value="Cicurug 5">Cicurug 5</option>
						<option value="Cicurug 6">Cicurug 6</option>
						<option value="Cibedug 1">Cibedug 1</option>
						<option value="Cibedug 2">Cibedug 2</option>
						<option value="Cibedug 3">Cibedug 3</option>
						<option value="Cisarua 1">Cisarua 1</option>
						<option value="Cisarua 2">Cisarua 2</option>
						<option value="Cisarua 3">Cisarua 3</option>
						<option value="Cisarua 4">Cisarua 4</option>
						<option value="Cisarua 5">Cisarua 5</option>
						<option value="Cisarua 6">Cisarua 6</option>
						<option value="Ciawi 1">Ciawi 1</option>
						<option value="Ciawi 2">Ciawi 2</option>
						<option value="Ciawi 3">Ciawi 3</option>
						<option value="Tajur 1">Tajur 1</option>
						<option value="Tajur 2">Tajur 2</option>
						<option value="Tajur 3">Tajur 3</option>
						<option value="Sukasari 1">Sukasari 1</option>
						<option value="Sukasari 2">Sukasari 2</option>
						<option value="Sukasari 3">Sukasari 3</option>
						<option value="Wikrama 1">Wikrama 1</option>
						<option value="Wikrama 2">Wikrama 2</option>
						<option value="Wikrama 3">Wikrama 3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Sangga</td>
				<td>:</td>
				<td>{{$data->sangga}}</td>
			</tr>
			<tr>
				<td>Ambalan</td>
				<td>:</td>
				<td>{{$data->ambalan}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" class="materialize-textarea">{{$data->alamat}}</textarea>
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td>
					<div class="file-field input-field">
				      <div class="btn green">
				        <span>File</span>
				        <input type="file" name="foto">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text" value="{{$data->foto}}">
				      </div>
				    </div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a href="{{URL::asset('datapeserta')}}" class="waves-effect waves-light btn red lighten-1 white-text"><i class="material-icons right">undo</i>Kembali</a>
					<button class="waves-effect waves-light btn blue lighten-1 white-text"><i class="material-icons right">loop</i>barui</button>
				</td>
			</tr>
		</table>
		</form>
		</div>
	</div>
</div>
</body>
@stop
</html>