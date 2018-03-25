<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title></title>
</head>
@section('web.konten')
<body>
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content blue lighten-1 white-text">
				<span>Foto Aktivitas "{{$judul->judul}}"</span>
				<div class="chip right white grey-text lighten-2 text-darken-1">Jumlah Foto : {{$jml}}</div>
			</div>
			<div class="card-content">
				@forelse($foto as $foto)
				<div class="col s2">
					<img class="materialboxed" src="{{URL::asset('gambar')}}/{{$foto->foto}}" width="200px" height="150px" data-caption="{{$foto->judul}}">
				</div>
				@empty
					<span>Maaf, belum ada foto yang di upload...</span>
				@endforelse
			</div>
			<div class="row"></div>
		</div>
	</div>
</div>
</body>
@stop
</html>