<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Biodata</title>
</head>
<body>
@section('admin.konten')
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('sukses') }}
</div>
@endif
<div class="card hoverable">
	<div class="card-content light-blue darken-3 white-text">
		<span class="card-title">UBAH BIODATA {{Auth::User()->nama}}</span>
	</div>
	<div class="card-action">
		<form method="post" action="{{URL::asset('baruiadmin')}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{Auth::User()->id}}">
			<div class="row">
				<div class="col s3">
					<img src="{{URL::asset('foto')}}/{{Auth::User()->foto}}" class="responsive-img materialboxed foto-ubahbiodata">
				</div>
				<div class="col s9">
					<div class="input-field col s12">
					    <input name="nomer_induk" value="{{Auth::User()->nomer_induk}}" id="first_name input_text" type="text" class="validate" length="10" required>
						<label class="red-text text-lighten-2">Nomer induk :</label>
					</div>
					<div class="input-field col s12">
					    <input name="nama" value="{{Auth::User()->nama}}" id="first_name input_text" type="text" class="validate" length="100" required>
						<label class="red-text text-lighten-2">Nama lengkap	:</label>
					</div>
					<div class="input-field col s12">
					   	<select name="jk" required>
							<option selected value="Laki-laki">{{Auth::User()->jk}}</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<label class="red-text text-lighten-2">Jenis kelamin :</label>
					</div>
					<div class="input-field col s6">
					    <input name="tempat_lahir" value="{{Auth::User()->tempat_lahir}}" id="first_name input_text" type="text" class="validate" length="100" required>
						<label class="red-text text-lighten-2">Tempat/ tgl lahir :</label>
					</div>
					<div class="input-field col s6">
					    <input name="ttl" value="{{Auth::User()->ttl}}" id="first_name input_text" type="date" class="validate" length="100" required>
					</div>
					<div class="input-field col s12">
					   	<select name="agama" required>
							<option selected value="{{Auth::User()->agama}}">{{Auth::User()->agama}}</option>
						    <option value="Islam">Islam</option>
						    <option value="Kristen protestan">Kristen protestan</option>
						    <option value="Kristen katolik">Kristen katolik</option>
						    <option value="Budha">Budha</option>
						    <option value="Hindu">Hindu</option>
						    <option value="Konghuchu">Konghuchu</option>
						</select>
						<label class="red-text text-lighten-2">Agama :</label>
					</div>
					<div class="input-field col s12">
				        <select name="rombel" required>
						    <option selected value="{{Auth::User()->rombel}}">{{Auth::User()->rombel}}</option>
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
						<label class="red-text text-lighten-2">Rombel :</label>
				    </div>
					<div class="input-field col s12">
					   	<select name="sangga" required>
							<option selected value="{{Auth::User()->sangga}}">{{Auth::User()->sangga}}</option>
							<option value="-">---</option>
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
						      <option value="Perintis 5">Perintis 5</option>
						</select>
						<label class="red-text text-lighten-2">Sangga :</label>
					</div>
					<div class="input-field col s12">
					   	<select name="ambalan" required>
							<option selected value="{{Auth::User()->ambalan}}">{{Auth::User()->ambalan}}</option>
							<option value="-">---</option>
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
						    <option value="Perintis 5">Perintis 5</option>
						</select>
						<label class="red-text text-lighten-2">Ambalan :</label>
					</div>
					<div class="input-field col s12">
				        <select name="rayon" required>
						    <option selected value="{{Auth::User()->rayon}}">{{Auth::User()->rayon}}</option>
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
						<label class="red-text text-lighten-2">Rayon :</label>
				    </div>
					<div class="input-field col s12">
				     	<div class="file-field input-field">
						  <div class="btn light-blue accent-1">
						    <span>Foto</span>
						    <input name="foto" type="file" value="{{Auth::User()->foto}}">
						  </div>
						  <div class="file-path-wrapper">
						    <input class="file-path validate" type="text" name="foto" value="{{Auth::User()->foto}}">
						  </div>
						</div>
				    </div>
					<div class="input-field col s12">
					  	<textarea name="alamat" id="textarea1" class="materialize-textarea" length="150" required>{{Auth::User()->alamat}}</textarea>
					  	<label class="red-text text-lighten-2">Alamat :</label>
					</div>
				</div>
			</div>
			<a href="{{URL::asset('dashboard')}}" class="btn waves-effect waves-light orange darken-2 white-text" type="submit" name="action">Kembali
				<i class="material-icons right">undo</i>
			</a>
			<button class="btn waves-effect waves-light green darken-2 white-text" type="submit" name="action">Perbarui
				<i class="material-icons right">send</i>
			</button>
		</form>
	</div>
</div>
@stop
</body>
</html>