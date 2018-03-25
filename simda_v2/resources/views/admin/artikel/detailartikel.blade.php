<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Detail Artikel</title>
</head>
<script type="text/javascript" src="{{URL::asset('tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'textarea', height:250 });</script>
@section('admin.konten')
<body>
<p class="font-besar blue-text text-lighten-1">Detail artikel</p>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('sukses') }}
</div>
@endif
<div class="col s12 m4 l3">
<img src="{{URL::asset('gambar')}}/{{$data->gambar}}" class="foto-rekomendasi-pasus">
</div>
<div class="col s12 m8 l9">
<form method="post" action="{{URL::asset('baruiartikel')}}" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="id" value="{{$data->id}}">
	<input type="hidden" name="admin" value="{{Auth::User()->nama}}">
	<input type="hidden" name="foto_admin" value="{{Auth::User()->foto}}">
	<label for="first_name">Judul artikel :</label>
    <input name="judul" value="{{$data->judul}}" id="first_name" type="text" class="validate" required>
	<textarea name="artikel">{{$data->artikel}}</textarea>
	<div class="file-field input-field">
		    <div class="btn green lighten-1 lighten-1">
		      <span>Gambar</span>
		      <input name="gambar" type="file" required>
		    </div>
		    <div class="file-path-wrapper">
		      <input class="file-path validate" type="text" value="{{$data->gambar}}">
		    </div>
		  </div>
	<button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Barui
		<i class="material-icons right">loop</i>
	</button>
	<a href="{{URL::asset('hapusartikel')}}/{{$data->id}}" class="btn waves-effect waves-light red lighten-1" type="submit" name="action">Hapus
		<i class="material-icons right">close</i>
	</a>
	<a href="{{URL::asset('dataartikel')}}" class="btn waves-effect waves-light orange lighten-1" type="submit" name="action">Kembali
		<i class="material-icons right">undo</i>
	</a>
</form>
</div>
</body>
@stop
</html>