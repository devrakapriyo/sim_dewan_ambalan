<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Admin</title>
</head>
@section('admin.konten')
<body>
	<div class="row">
		@if(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('sukses') }}
		</div>
		@endif
		<ol class="breadcrumb white">
		  <li><a href="{{URL::asset('admin')}}">Daftar Admin</a></li>
		  <li><a href="{{URL::asset('dataadmin')}}">Data Admin</a></li>
		  <li><a href="{{URL::asset('datapesertapramuka')}}">Data Peserta</a></li>
		  <li><a href="{{URL::asset('dataabsen')}}">Absensi Peserta</a></li>
		  <li><a href="{{URL::asset('datakas')}}">Kas peserta</a></li>
		</ol>
		@if(Auth::User()->jabatan == "Juru kegiatan" || Auth::User()->jabatan == "Pembina" || Auth::User()->jabatan == "Mabigus")
		<div class="card hoverable">
			<div class="card-content green lighten-2 white-text">
				<span class="card-title">Tambah admin baru</span>
			</div>
			<div class="card-action">
				<form method="post" action="{{URL::asset('admin')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="admin" value="{{Auth::User()->nama}}">
					<input type="hidden" name="favorit" value="1">
					<div class="row">
						<div class="input-field col s12">
				          	<input name="nomer_induk" placeholder="Nomer induk" id="first_name input_text" type="number" class="validate" length="10" required>
				        </div>
				        <div class="input-field col s12">
				           	<input name="nama" placeholder="Nama" id="first_name input_text" type="text" class="validate" length="100" required>
				        </div>
				        <div class="input-field col s12">
				           	<input name="password" placeholder="Password" id="first_name input_text" type="password" class="validate" length="60" required>
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
				        <div class="input-field col s12">
				        	<select name="jk" required>
						      <option disabled selected>Jenis kelamin</option>
						      <option value="Laki-laki">Laki-laki</option>
						      <option value="Perempuan">Perempuan</option>
						    </select>
				        </div>
				        <div class="input-field col s6">
				          <input name="tempat_lahir" placeholder="Tempat lahir" id="last_name input_text" type="text" class="validate" length="50" required>
				          <label for="last_name input_text" class="red-text text-darken-2">Tempat Tgl-bln-thn lahir</label>
				        </div>
				        <div class="input-field col s6">
				          <input type="date" name="ttl" required>
				        </div>
				        <div class="input-field col s12">
				          <select name="jabatan" required>
						      <option disabled selected>Jabatan</option>
						      <option value="Admin">Admin</option>
						      <option value="Mabigus">Mabigus</option>
						      <option value="Pembina">Pembina</option>
						      <option value="Pradana">Pradana</option>
						      <option value="Judat">Judat</option>
						      <option value="Juang">Juang</option>
						      <option value="Krani">Krani</option>
						      <option value="Juru kegiatan">Juru kegiatan</option>
						      <option value="Teknik kepramukaan">Teknik kepramukaan</option>
						      <option value="Juru lapangan">Juru lapangan</option>
						      <option value="Pembinaan">Pembinaan</option>
						      <option value="Kerohanian">Kerohanian</option>
						      <option value="Peralatan">Peralatan</option>
						      <option value="Humas">Humas</option>
						      <option value="Kesakaan">Kesakaan</option>
						    </select>
				        </div>
				        <div class="input-field col s12">
				        	<select name="rombel" required>
						      <option disabled selected>Rombel</option>
						      <option value="-">---</option>
						      <option value="RPL XI-1">RPL XI-1</option>
						      <option value="RPL XI-2">RPL XI-2</option>
						      <option value="RPL XI-3">RPL XI-3</option>
						      <option value="RPL XI-4">RPL XI-4</option>
						      <option value="TKJ XI-1">TKJ XI-1</option>
						      <option value="TKJ XI-2">TKJ XI-2</option>
						      <option value="TKJ XI-3">TKJ XI-3</option>
						      <option value="TKJ XI-4">TKJ XI-4</option>
						      <option value="APK XI-1">APK XI-1</option>
						      <option value="APK XI-2">APK XI-2</option>
						      <option value="APK XI-3">APK XI-3</option>
						      <option value="APK XI-4">APK XI-4</option>
						      <option value="MMD XI-1">MMD XI-1</option>
						      <option value="MMD XI-2">MMD XI-2</option>
						      <option value="MMD XI-3">MMD XI-3</option>
						      <option value="MMD XI-4">MMD XI-4</option>
						      <option value="Pemasaran XI-1">Pemasaran XI-1</option>
						      <option value="Pemasaran XI-2">Pemasaran XI-2</option>
						      <option value="Pemasaran XI-3">Pemasaran XI-3</option>
						      <option value="Pemasaran XI-4">Pemasaran XI-4</option>
						    </select>
				        </div>
				        <div class="input-field col s12">
				        	<select name="rayon" required>
						      <option disabled selected>Rayon</option>
						      <option value="-">---</option>
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
				        <div class="input-field col s12">
				        	<select name="sangga" required>
						      <option disabled selected>Sangga</option>
						      <option value="-">---</option>
						      @foreach($sangga as $sangga)
						      	@if($sangga->status == "Ada")
						      	<option value="{{$sangga->sangga}}">{{$sangga->sangga}}</option>
						      	@else
						      	@endif
						      @endforeach
						     <!--  
								 (NULL, 'Pencoba 3 Putra', 'Ada', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', ''), (NULL, 'Pencoba 3 Putri', 'Ada', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '')
						     <option value="Pencoba 1">Pencoba 1</option>
						      <option value="Pencoba 2">Pencoba 2</option>
						      <option value="Pencoba 3">Pencoba 3</option>
						      <option value="Pencoba 4">Pencoba 4</option>
						      <option value="Pencoba 5">Pencoba 5</option>
						      <option value="Pendobrak 1">Pendobrak 1</option>
						      <option value="Pendobrak 2">Pendobrak 2</option>
						      <option value="Pendobrak 3">Pendobrak 3</option>
						      <option value="Pendobrak 4">Pendobrak 4</option>
						      <option value="Pendobrak 5">Pendobrak 5</option>
						      <option value="Penegak 1">Penegak 1</option>
						      <option value="Penegak 2">Penegak 2</option>
						      <option value="Penegak 3">Penegak 3</option>
						      <option value="Penegak 4">Penegak 4</option>
						      <option value="Penegak 5">Penegak 5</option>
						      <option value="Pelaksana 1">Pelaksana 1</option>
						      <option value="Pelaksana 2">Pelaksana 2</option>
						      <option value="Pelaksana 3">Pelaksana 3</option>
						      <option value="Pelaksana 4">Pelaksana 4</option>
						      <option value="Pelaksana 5">Pelaksana 5</option>
						      <option value="Perintis 1">Perintis 1</option>
						      <option value="Perintis 2">Perintis 2</option>
						      <option value="Perintis 3">Perintis 3</option>
						      <option value="Perintis 4">Perintis 4</option>
						      <option value="Perintis 5">Perintis 5</option> -->
						    </select>
				        </div>
				        <div class="input-field col s12">
				        	<select name="ambalan" required>
						      <option disabled selected>Ambalan</option>
						      <option value="-">---</option>
						      <option value="Merah 1">Merah 1</option>
						      <option value="Merah 2">Merah 2</option>
						      <option value="Merah 3">Merah 3</option>
						      <option value="Merah 4">Merah 4</option>
						      <option value="Merah 5">Merah 5</option>
						      <option value="Merah 6">Merah 6</option>
						      <option value="Merah 7">Merah 7</option>
						      <option value="Merah 8">Merah 8</option>
						      <option value="Merah 9">Merah 9</option>
						      <option value="Putih 1">Putih 1</option>
						      <option value="Putih 2">Putih 2</option>
						      <option value="Putih 3">Putih 3</option>
						      <option value="Putih 4">Putih 4</option>
						      <option value="Putih 5">Putih 5</option>
						      <option value="Putih 6">Putih 6</option>
						      <option value="Putih 7">Putih 7</option>
						      <option value="Putih 8">Putih 8</option>
						      <option value="Putih 9">Putih 9</option>
						    </select>
				        </div>
				        <div class="input-field col s12">
				        	<div class="file-field input-field">
						      <div class="btn light-blue accent-1">
						        <span>Foto</span>
						        <input name="foto" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text" name="foto">
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
			</div>
		</div>
		@else
		<div class="card">
			<div class="card-content">Maaf, anda tidak dapat mengakses...</div>
		</div>
		@endif
  </div>
</body>
@stop
</html>