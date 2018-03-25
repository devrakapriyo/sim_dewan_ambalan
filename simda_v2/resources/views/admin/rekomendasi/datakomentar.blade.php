<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('rekomendasi')}}">Rekomendasi Komentar</a></li>
	<li><a href="{{URL::asset('datakomentar')}}">Data Komentar</a></li>
</ol>
@if(Session::has('hapus'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('hapus') }}
</div>
@elseif(Session::has('data'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('data') }}
</div>
@endif
<div class="card">
	<div class="card-content red darken-1">
		<span class="card-title white-text">Rekomendasi komentar</span>
	</div>
	<div class="card-action">
		<table class="bordered highlight responsive-table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Komentar</th>
					<th>Hapus</th>
				</tr>
			</thead>
			<tbody>
				@forelse($data as $data)
				<tr>
					<td>{{$data->nama}}</td>
					<td>{{$data->email}}</td>
					<td>{!!$data->komentar!!}</td>
					<td>
						<a href="{{URL::asset('hapuskomentar')}}/{{$data->id}}"><i class="material-icons red-text text-darken-1" title="Anda yakin komentar {{$data->nama}} di hapus?">close</i></a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="4">Maaf, tidak data komentar</td>
				</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">{!! $page->render() !!}</td>
					<td colspan="2"><a href="{{URL::asset('truncatekomentar')}}" class="btn red white-text right"><i class="material-icons right">delete</i>Truncate</a></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
</body>
@stop
</html>