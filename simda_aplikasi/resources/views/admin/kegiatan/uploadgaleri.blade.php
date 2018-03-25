<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Upload Aktivitas</title>
</head>
@section('admin.konten')
<body>
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('aktivitas')}}">Aktivitas</a></li>
	<li><a href="{{URL::asset('dataaktivitas')}}">Data Aktivitas</a></li>
	<li><a href="{{URL::asset('galeriaktivitas')}}">Galeri Aktivitas</a></li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('sukses') }}
</div>
@elseif(Session::has('hapus'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('hapus') }}
</div>
@endif
<div class="row">
		<div class="card">
			<div class="card-content red darken-1 white-text">
				<span class="card-title">Upload Foto "{{$data->judul}}"</span>
			</div>
			<div class="card-action">
			<form method="post" action="{{URL::asset('galeri')}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$data->id_aktivitas}}">
				<table>
					<tr>
						<td>
							<label>Judul :</label>
							<input type="text" readonly value="{{$data->judul}}">
						</td>
					</tr>
					<tr>
						<td>
							<label>Aktivitas :</label><br>
							<span>{!!$data->aktivitas!!}</span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="file-field input-field">
						      <div class="btn blue lighten-1">
						        <span>Foto</span>
						        <input name="foto" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text" name="foto" required>
						      </div>
						    </div>
						</td>
					</tr>
					<tr>
						<td>
							<button class="btn green darken-1 white-text"><i class="material-icons right">send</i>Upload</button>
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		<div class="card">
			<div class="card-content">
				<blockquote>
					<span><b>Galeri foto "{{$data->judul}}" </b></span><div class="chip" title="Jumlah foto '{{$data->judul}}'">{{$jml}}</div>
				</blockquote>
				<div class="row"></div>
				@forelse($foto as $foto)
				<div class="col s2">
					<div style="width:150px; height:20px;" class="grey lighten-2"><a href="{{URL::asset('hapusgaleri')}}/{{$foto->id}}"><i class="tiny material-icons red-text right" title="Hapus foto ini?">close</i></a></div>
					<img src="{{URL::asset('gambar')}}/{{$foto->foto}}" style="width:150px; height:100px;">
				</div>
				@empty
					<span>Maaf, belum ada foto yang di upload...</span>
				@endforelse
				<div class="row"></div>
			</div>
		</div>
</div>
</body>
@stop
</html>