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
@if(Session::has('abaikan'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('abaikan') }}
</div>
@elseif(Session::has('rekomendasi'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('rekomendasi') }}
</div>
@elseif(Session::has('hapus'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('hapus') }}
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
					<th>Keterangan</th>
					<th class="center-align" colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
			@forelse($data as $data)
			@if($data->ket == "belum")
				<tr>
					<td class="">{{$data->nama}}</td>
					<td class="">{{$data->email}}</td>
					<td class="">{{$data->komentar}}</td>
					<td class="">{{$data->ket}}</td>
					<td class="">
						<a class="waves-effect waves-light btn green white-text" href="{{URL::asset('detailrekomendasi')}}/{{$data->id}}">Detail</a> |
					</td>
					<td class="">
						<a class="waves-effect waves-light btn green white-text disabled">Hapus</a>
					</td>
				</tr>
			@elseif($data->ket == "rekomendasi")
				<tr title="Komentar telah di rekomendasi">
					<td class="light-blue lighten-2 white-text">{{$data->nama}}</td>
					<td class="light-blue lighten-2 white-text">{{$data->email}}</td>
					<td class="light-blue lighten-2 white-text">{{$data->komentar}}</td>
					<td class="light-blue lighten-2 white-text">{{$data->ket}}</td>
					<td class="light-blue lighten-2 white-text">
						<a class="waves-effect waves-light btn green white-text disabled">Detail</a> |
					</td>
					<td class="light-blue lighten-2">
						<a class="waves-effect waves-light btn red lighten-1 white-text" href="{{URL::asset('hapusrekomendasi')}}/{{$data->id}}">Hapus</a>
					</td>
				</tr>
			@endif
			@empty
				<tr>
					<td colspan="6" class="center-align">Maaf, tidak ada komentar yang terinput</td>
				</tr>
			@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6">{{ $page->render() }}</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
</body>
@stop
</html>