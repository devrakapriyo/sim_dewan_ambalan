<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Aktivitas</title>
</head>
<script type="text/javascript" src="{{URL::asset('tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'textarea', height:250 });</script>
@section('admin.konten')
<body>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('sukses') }}
</div>
@endif
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('aktivitas')}}">Aktivitas</a></li>
	<li><a href="{{URL::asset('dataaktivitas')}}">Data Aktivitas</a></li>
	<li><a href="{{URL::asset('galeriaktivitas')}}">Galeri Aktivitas</a></li>
</ol>
<div class="card">
	<div class="card-content red darken-1 white-text">
		<span class="card-title">Aktivitas Ambalan</span>
	</div>
	<div class="card-action">
		<div class="row">
			<form method="post" action="{{URL::asset('aktivitas')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="input-field col s12">
			        <input name="judul" id="first_name" type="text" class="validate" required>
			        <label for="first_name">Judul :</label>
		        </div>
		        <div class="input-field col s12">
					<textarea name="aktivitas" required></textarea>
		        </div>
		        <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Simpan
				    <i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</div>
</body>
@stop
</html>