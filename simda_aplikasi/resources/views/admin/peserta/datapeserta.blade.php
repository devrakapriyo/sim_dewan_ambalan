<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data peserta</title>
</head>
@section('admin.konten')
<body>
<div class="col s12">
	<ol class="breadcrumb white">
		 <li><a href="{{URL::asset('inputpeserta')}}">Daftar peserta</a></li>
		 <li><a href="{{URL::asset('datapeserta')}}">Data peserta</a></li>
		 <li><a href="{{URL::asset('absensipeserta')}}">Absensi peserta</a></li>
		 <li><a href="{{URL::asset('kaspeserta')}}">Kas peserta</a></li>
	</ol>
	@if(Session::has('hapus'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('hapus') }}
		</div>
	@endif
	<div class="card">
		<div class="card-content blue lighten-1 white-text">
			<span class="card-title">Data peserta sangga {{Auth::User()->sangga}}</span>
		</div>
		<div class="card-action">
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th rowspan="2">NIS</th>
						<th rowspan="2">Nama</th>
						<th rowspan="2">Jenis kelamin</th>
						<th rowspan="2">Sangga</th>
						<th rowspan="2">Ambalan</th>
						<th colspan="3" class="center-align">Aksi</th>
					</tr>
					<tr>
						<th class="">Detail</th>
						<th class="center-align">Edit</th>
						<th class="center-align">Hapus</th>
					</tr>
				</thead>
				<tbody>
				@forelse($data as $data)
					<tr>
						<td>{{$data->nis}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->jk}}</td>
						<td>{{$data->sangga}}</td>
						<td>{{$data->ambalan}}</td>
						<td><a class="blue-text darken-1" href="{{URL::asset('detailpeserta')}}/{{$data->id}}" title="Lihat detail data {{$data->nama}}">Detail</a></td>
						<td class="center-align"><a class="blue-text" href="{{URL::asset('editpeserta')}}/{{$data->id}}"><i class="material-icons">edit</i></a></td>
						<td class="center-align"><a class="blue-text" href="{{URL::asset('hapuspeserta')}}/{{$data->id}}"><i class="material-icons red-text">delete</i></a></td>
					</tr>
				@empty
					<tr>
						<td colspan="8" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4">{{$page->render()}}</td>
						<td colspan="4" class="right-align red-text">Jumlah peserta {{Auth::User()->sangga}} : {{$peserta}} Orang</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
</body>
@stop
</html>