<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Daftar peserta</title>
</head>
@section('admin.konten')
<style type="text/css">
	

</style>
<body>
<div class="row">
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
		<div class="card hoverable">
			<div class="card-content blue lighten-1 white-text">
				<span class="card-title">Daftar Peserta sangga {{Auth::User()->sangga}}</span>
			</div>
			<div class="card-action">
			@if(Auth::User()->jabatan != "Admin")
				<form method="post" action="{{URL::asset('inputpeserta')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="jk" value="{{Auth::User()->jk}}">
					<div class="row">
						<div class="input-field col s12">
				          	<input name="nis" placeholder="NIS" id="first_name input_text" type="text" class="validate" length="8" required></div>
				        <div class="input-field col s12">
				           	<input name="nama" placeholder="Nama" id="first_name input_text" type="text" class="validate" length="50" required>
				        </div>
				        <div class="input-field col s12">
				        	<select name="agama" required>
						      <option disabled selected>Agama</option>
						      <option value="Islam">Islam</option>
						      <option value="Kristen protestan">Kristen protestan</option>
						      <option value="Kristen katolik">Kristen katolik</option>
						      <option value="Budha">Budha</option>
						      <option value="Hindu">Hindu</option>
						      <option value="Konghuchu">Konghuchu</option>
						    </select>
				        </div>
				        <div class="input-field col s6">
				          <input name="tempat_lahir" placeholder="Tempat lahir" id="last_name input_text" type="text" class="validate" length="50" required>
				          <label for="last_name input_text" class="red-text text-darken-2">Tempat Tgl-bln-thn lahir</label>
				        </div>
				        <div class="input-field col s6">
				          <input type="date" name="tgl_lahir" required>
				        </div>
				        <div class="input-field col s12">
				        	<select name="rombel" required>
						      <option disabled selected>Rombel</option>
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
				        </div>
				        <div class="input-field col s12">
				        	<select name="rayon" required>
						      <option disabled selected>Rayon</option>
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
				        </div>
				        <!-- <div class="input-field col s12">
				        	<select name="sangga">
						      <option disabled selected>Sangga</option>
						      <option value="Pencoba">Pencoba</option>
						      <option value="Pendobrak">Pendobrak</option>
						      <option value="Penegak">Penegak</option>
						      <option value="Pelaksana">Pelaksana</option>
						      <option value="Perintis">Perintis</option>
						    </select>
				        </div>
				        <div class="input-field col s12">
				        	<select name="ambalan">
						      <option disabled selected>Ambalan</option>
						      <option value="Merah">Merah</option>
						      <option value="Putih">Putih</option>
						    </select>
				        </div> -->
				        <div class="input-field col s12">
				        	<div class="file-field input-field">
						      <div class="btn light-blue accent-1">
						        <span>Foto</span>
						        <input name="foto" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text" name="foto" placeholder="Masukan foto pelajars formal">
						      </div>
						    </div>
				        </div>
				        <div class="input-field col s12">
				          <textarea name="alamat" id="textarea1" class="materialize-textarea" length="150" required></textarea>
				          <label for="textarea1">Alamat</label>
				        </div>
					</div>
				    <div class="row">
						<button class="btn waves-effect waves-light green darken-1" type="submit" name="action">SIMPAN
						    <i class="material-icons right">send</i>
						</button>
				    </div>
				</form>
			@else
			<div class="card">
				<div class="card-content">Maaf, anda sebagai admin tidak berhak menginput peserta</div>
			</div>
			@endif
			</div>
		</div>
	</div>
</div>
</body>
@stop
</html>