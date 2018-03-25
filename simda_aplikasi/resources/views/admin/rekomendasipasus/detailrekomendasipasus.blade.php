<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('sukses') }}
</div>
@endif
<div class="card">
	<div class="card-content red lighten-1 white-text">
		<span class="card-title">Detail anggota Pasus</span>
	</div>
	<div class="action">
		<form method="post" action="{{URL::asset('rekomendasipasus')}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="foto" value="{{$data->foto}}">
			<input type="hidden" name="id" value="{{$data->id}}">
			<div class="col s12 m4 l3">
				<img src="{{URL::asset('foto')}}/{{$data->foto}}" class="foto-rekomendasi-pasus">
			</div>
			<div class="col s12 m8 l9">
				<div class="row">
					<div class="input-field col s12">
				        <input name="nis" value="{{$data->nis}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				        <input name="nama" value="{{$data->nama}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				        <input name="agama" value="{{$data->agama}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				        <input name="jk" value="{{$data->jk}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s6">
				        <input name="tempat_lahir" value="{{$data->tempat_lahir}}" id="last_name input_text" type="text" class="validate" readonly>
				        <label for="last_name input_text" class="red-text text-darken-2">Tempat Tgl-bln-thn lahir</label>
				   	</div>
				    <div class="input-field col s6">
				        <input type="text" name="tgl_lahir" value="{{$data->tgl_lahir}}" readonly>
				    </div>
				    <div class="input-field col s12">
				        <input name="hobi" id="last_name input_text" type="text" class="validate" length="50" value="{{$data->hobi}}" readonly>
				        <label for="last_name input_text">Hobi</label>
				    </div>
				    <div class="input-field col s12">
				        <input name="pengalaman" value="{{$data->pengalaman}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				       	<input name="rombel" value="{{$data->rombel}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				        <input name="rayon" value="{{$data->rayon}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				       	<input name="sangga" value="{{$data->sangga}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				       	<input name="ambalan" value="{{$data->ambalan}}" id="first_name input_text" type="text" class="validate" readonly>
				    </div>
				    <div class="input-field col s12">
				        <textarea name="alamat" id="textarea1" class="materialize-textarea" readonly>{{$data->alamat}}</textarea>
				        <label for="textarea1">Alamat</label>
				    </div>
				</div>
				<div class="row">
				@if($data->rekomendasi == "")
					<a href="{{URL::asset('rekomendasipasus')}}" class="btn waves-effect waves-light orange lighten-1" type="submit" name="action">Kembali
						<i class="material-icons right">undo</i>
					</a>
					<a href="{{URL::asset('tolakpasus')}}/{{$data->id}}" class="btn waves-effect waves-light red lighten-1" type="submit" name="action">Tolak
						<i class="material-icons right">close</i>
					</a>
					<button class="btn waves-effect waves-light green darken-1" type="submit" name="action">Konfirmasi
						<i class="material-icons right">send</i>
					</button>
				@elseif($data->rekomendasi == "Rekomendasi")
					<a href="{{URL::asset('rekomendasipasus')}}" class="btn waves-effect waves-light orange lighten-1" type="submit" name="action">Kembali
						<i class="material-icons right">undo</i>
					</a>
					<button class="btn waves-effect waves-light green darken-1" type="submit" name="action">Konfirmasi
						<i class="material-icons right">send</i>
					</button>
				@endif
				</div>
			</div>
		</form>
	</div>
</div>
</body>
@stop
</html>