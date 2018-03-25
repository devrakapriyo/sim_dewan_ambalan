<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Artikel</title>
</head>
<script type="text/javascript" src="{{URL::asset('tinymce/tinymce.min.js')}}"></script>
<script>
tinymce.init({ selector:'.textarea', height:250 });</script>
@section('admin.konten')
<body>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('sukses') }}
</div>
@endif
<div class="card">
	<div class="card-content purple darken-4 white-text">
		<span class="card-title">Artikel Pramuka</span>
	</div>
	<div class="card-action">
		<form method="post" action="{{URL::asset('artikel')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="admin" value="{{Auth::User()->nama}}">
		<input type="hidden" name="foto_admin" value="{{Auth::User()->foto}}">
			<input type="text" name="judul" placeholder="Judul artikel pramuka..." required>
			<textarea name="artikel" class="textarea"></textarea>
			<div class="file-field input-field">
		      <div class="btn orange lighten-1">
		        <span>Gambar</span>
		        <input name="gambar" type="file" required>
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div>
			<button class="btn waves-effect waves-light green lighten-1" type="submit" name="action">Kirim
			    <i class="material-icons right">send</i>
			</button>
			<a href="{{URL::asset('dataartikel')}}" class="btn waves-effect waves-light red lighten-1 white-text" name="action">Lihat data artikel
			    <i class="material-icons right">search</i>
			</a>
		</form>
	</div>
</div>
</body>
@stop
</html>