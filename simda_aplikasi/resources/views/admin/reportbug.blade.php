<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Report Bug</title>
</head>
<script type="text/javascript" src="{{URL::asset('tinymce/tinymce.min.js')}}"></script>
<script>
tinymce.init({ selector:'textarea', height:250 });</script>
@section('admin.konten')
<body>
	
	@if(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('sukses') }}
		</div>
	@endif
	<div class="card">
		<div class="card-content red white-text">
			<div class="card-title">Report bug program</div>
		</div>
		<div class="card-action">
			<form method="post" action="{{URL::asset('reportbug')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="input-field col s12">
					<label id="for="textarea1"">Keterangan :</label>
					<textarea name="keterangan" class="materialize-textarea" length="150" required></textarea>
					<p class="red-text text-darken-2">*) Gunakan laporan bug program sesuai fakta yang terjadi...</p>
				</div>
				<div class="input-field col s12">
					<label>Gambar :</label>
					<div class="file-field input-field">
						<div class="btn light-blue accent-1">
						<span>Foto</span>
						<input name="gambar" type="file" required>
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" name="gambar" required>
						</div>
					</div>
				</div>
				<button class="btn waves-effect waves-light blue" type="submit" name="action">Kirim
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</body>
@stop
</html>