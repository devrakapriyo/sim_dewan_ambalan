<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Galeri Aktivitas</title>
</head>
@section('admin.konten')
<body>
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('aktivitas')}}">Aktivitas</a></li>
	<li><a href="{{URL::asset('dataaktivitas')}}">Data Aktivitas</a></li>
	<li><a href="{{URL::asset('galeriaktivitas')}}">Galeri Aktivitas</a></li>
</ol>
<div class="row">
	<div class="card">
		<div class="card-content red darken-2 white-text">
			<span class="card-title">Galeri Aktivitas</span>
		</div>
		<div class="card-action">
			<table>
				<thead>
					<tr>
						<th>Judul</th>
						<th>Aktivitas</th>
						<th>Upload foto</th>
					</tr>
				</thead>
				<tbody>
					@forelse($data as $data)
					<tr>
						<td>{{$data->judul}}</td>
						<td>{!! substr($data->aktivitas, 0, 300) !!}</td>
						<td><a href="{{URL::asset('uploadgaleri')}}/{{$data->id_aktivitas}}"><i class="material-icons blue-text" title="Upload foto aktivitas '{{$data->judul}}'">send</i></a></td>
					</tr>
					@empty
					<tr>
						<td>Maaf, tidak ada data</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
@stop
</html>