<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<div class="card">
	<div class="card-content cyan darken-2 white-text">
		<div class="card-title">Detail rekomendasi komentar</div>
	</div>
	<div class="card-action">
		<form method="post" action="{{URL::asset('rekomendasikomentar')}}">
	    	<input type="hidden" name="_token" value="{{csrf_token()}}">
	    	<input type="hidden" name="admin" value="{{Auth::User()->nama}}">
	    	<input type="hidden" name="id" value="{{$data->id}}">
	    	<div class="input-field col s12">
				<input name="nama" value="{{$data->nama}}" id="first_name input_text" type="text" class="validate" readonly>
				<label class="red-text text-lighten-2">Nama pengirim :</label>
			</div>
			<div class="input-field col s12">
				<input name="email" value="{{$data->email}}" id="first_name input_text" type="text" class="validate" readonly>
				<label class="red-text text-lighten-2">Email pengirim :</label>
			</div>
			<div class="input-field col s12">
				<textarea name="komentar" id="textarea1" class="materialize-textarea" readonly>{{$data->komentar}}</textarea>
				<label class="red-text text-lighten-2">Alamat :</label>
			</div>
			<a href="{{URL::asset('rekomendasi')}}" class="waves-effect waves-light btn orange lighten-1 white-text"><i class="material-icons right">undo</i>Kembali</a>
			<a href="{{URL::asset('abaikanrekomendasi')}}/{{$data->id}}" class="waves-effect waves-light btn red lighten-1 white-text"><i class="material-icons right">close</i>Abaikan</a>
			<button class="btn waves-effect waves-light green lighten-1 white-text" type="submit" name="action">Rekomendasi
			    <i class="material-icons right">send</i>
			</button>
	    </form>
	</div>
</div>
</body>
@stop
</html>