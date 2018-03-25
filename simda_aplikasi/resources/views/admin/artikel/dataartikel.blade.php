<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data Artikel</title>
</head>
@section('admin.konten')
<body>
@if(Session::has('hapus'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('hapus') }}
</div>
@endif
<div class="card">
	<div class="card-content deep-purple darken-1 white-text">
		<span class="card-title">Data artikel</span>
	</div>
	<div class="card-action">
		<table>
			<thead>
				<tr>
					<th>Judul</th>
					<th>gambar</th>
					<th>Admin</th>
					<th>Waktu</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			@forelse($data as $data)
				<tr>
					<td>{{$data->judul}}</td>
					<td><img src="{{URL::asset('gambar')}}/{{$data->gambar}}" class="foto-artikel"></td>
					<td>{{$data->admin}}</td>
					<td>{{$data->created_at}}</td>
					<td><a href="{{URL::asset('detailartikel')}}/{{$data->id}}" class="blue-text text-darken-2">Detail</a></td>
				</tr>
			@empty
				<tr>
					<td colspan="5" class="center-align red-text text-lighten-1">Maaf, tidak ada artikel yang dapat di tampilkan</td>
				</tr>
			@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5">{{$page->render()}}</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<a href="{{URL::asset('kontenartikel')}}" class="btn waves-effect waves-light orange lighten-1" type="submit" name="action">Kembali
	<i class="material-icons right">undo</i>
</a>
</body>
@stop
</html>