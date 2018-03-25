<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('admin')}}">Daftar Admin</a></li>
	<li><a href="{{URL::asset('dataadmin')}}">Data Admin</a></li>
	<li><a href="{{URL::asset('datapesertapramuka')}}">Data Peserta</a></li>
	<li><a href="{{URL::asset('dataabsen')}}">Absensi Peserta</a></li>
	<li><a href="{{URL::asset('datakas')}}">Kas peserta</a></li>
</ol>
<div class="card">
	<div class="card-content">
		<span class="card-title blue-text text-darken-1">Detail data admin</span>
	</div>
	<div class="card-action">
		<div class="col s12 m4 l3">
			<img class="responsive-img materialboxed foto-detailadmin" src="{{URL::asset('foto')}}/{{$data->foto}}">
		</div>
		<div class="col s12 m8 l9">
			<div class="input-field col s12">
				<input value="{{$data->nomer_induk}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Nomer induk :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->nama}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Nama lengkap :</label>
			</div>
			<div class="input-field col s4">
				<input value="{{$data->tempat_lahir}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Tempat / tgl lahir :</label>
			</div>
			<div class="input-field col s8">
				<input value="{{$data->ttl}}" id="first_name input_text" type="text" readonly class="validate">
			</div>
			<div class="input-field col s12">
				<input value="{{$data->jk}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Jenis kelamin :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->agama}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Agama :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->sangga}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Sangga :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->ambalan}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Ambalan :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->rombel}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Rombel :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->rayon}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Rayon :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->jabatan}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Jabatan :</label>
			</div>
			<div class="input-field col s12">
				<input value="{{$data->admin}}" id="first_name input_text" type="text" readonly class="validate">
				<label>Admin yang mendaftarkan :</label>
			</div>
			<div class="input-field col s12">
	          	<textarea id="textarea1" class="materialize-textarea" readonly>{{strip_tags($data->alamat)}}</textarea>
	          	<label for="textarea1">Alamat</label>
	        </div>
		</div>
	</div>
</div>
<a href="{{URL::asset('dataadmin')}}" class="waves-effect waves-light btn orange lighten-1"><i class="material-icons right">undo</i>kembali</a>
</body>
@stop
</html>