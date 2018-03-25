<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data Aktivitas</title>
</head>
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
<div class="row">
	<div class="card">
		<div class="card-content red darken-2 white-text">
			<span class="card-title">Data Aktivitas</span>
		</div>
		<div class="card-action">
			<table>
				<thead>
					<tr>
						<th rowspan="2">Judul</th>
						<th rowspan="2">Aktivitas</th>
						<th colspan="2">Aksi</th>
					</tr>
					<tr>
						<th>Edit</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
					@forelse($data as $data)
					<tr>
						<td>{{$data->judul}}</td>
						<td>{!! substr($data->aktivitas, 0, 300) !!}</td>
						<td><a href="{{URL::asset('editaktivitas')}}/{{$data->id_aktivitas}}"><i class="material-icons green-text">edit</i></a></td>
						<td><a href="{{URL::asset('hapusaktivitas')}}/{{$data->id_aktivitas}}"><i class="material-icons red-text">delete</i></a></td>
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