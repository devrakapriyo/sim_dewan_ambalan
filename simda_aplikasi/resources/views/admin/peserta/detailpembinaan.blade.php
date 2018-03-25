<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<div class="row">
	<div class="col s12">
		<ol class="breadcrumb white">
		  <li><a href="{{URL::asset('pembinaan')}}">Input Data Pembinaan</a></li>
		  <li><a href="{{URL::asset('datapembinaan')}}">Data Pembinaan</a></li>
		</ol>
		@if(Session::has('hapus'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('hapus') }}
		</div>
		@endif
		<div class="card">
			<div class="card-content red darken-1 white-text">
				<span class="card-title">Datail pembinaan peserta {{$nama->nama}}</span>
			</div>
			<div class="card-action">
				<div class="col s12 m4 l3">
					<img class="responsive-img materialboxed foto-detailadmin" src="{{URL::asset('foto')}}/{{$nama->foto}}">
					<ul><b>Biodata peserta</b></ul>
					<li>NIS : {{$nama->nis}}</li>
					<li>Nama : {{$nama->nama}}</li>
					<li>Jenis kelamin : {{$nama->jk}}</li>
					<li>Sangga : {{$nama->sangga}}</li>
					<li>Ambalan : {{$nama->ambalan}}</li>
					<li>Rayon : {{$nama->rayon}}</li>
				</div>
				<div class="col s12 m8 l9">
				<table class="bordered highlight responsive-table">
					<thead>
						<tr>
							<th>Pembinaan</th>
							<th>Tanggal pembinaan</th>
							<th>Hapus ket</th>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $data)
						<tr>
							<td>{{$data->pembinaan}}</td>
							<td>{{substr($data->created_at, 0, 10)}}</td>
							<td><a href="{{URL::asset('hapusdetailpembinaan')}}/{{$data->id}}" class="red-text"><i class="material-icons center">delete</i></a></td>
						</tr>
					@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4">
								<a href="{{URL::asset('datapembinaan')}}" class="btn yellow darken-2 white-text"><i class="material-icons right">undo</i>Kembali</a>
							</td>
						</tr>
					</tfoot>
				</table>
				</div>
				<div class="row"></div>
			</div>
		</div>
	</div>
</div>
</body>
@stop
</html>