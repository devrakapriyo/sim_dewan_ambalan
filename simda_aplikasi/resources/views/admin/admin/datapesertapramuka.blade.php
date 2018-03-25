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
		<li><a href="{{URL::asset('admin')}}">Daftar Admin</a></li>
		<li><a href="{{URL::asset('dataadmin')}}">Data Admin</a></li>
		<li><a href="{{URL::asset('datapesertapramuka')}}">Data Peserta</a></li>
		<li><a href="{{URL::asset('dataabsen')}}">Absensi Peserta</a></li>
		<li><a href="{{URL::asset('datakas')}}">Kas peserta</a></li>
	</ol>
	@if(Session::has('hapus'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('hapus') }}
		</div>
	@elseif(Session::has('truncate'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons red-text">done</i>
			{{ Session::get('truncate') }}
		</div>
	@elseif(Session::has('hak'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons red-text">close</i>
			{{ Session::get('hak') }}
		</div>
	@endif
	<div class="card">
		<div class="card-content blue lighten-1 white-text">
			<span class="card-title">Data peserta</span>
		</div>
		<div class="card-action">
			<table class="highlight responsive-table">
				@if(Auth::User()->jabatan == "Admin")
				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Jenis kelamin</th>
						<th>Sangga</th>
						<th>Ambalan</th>
						<th>Hapus</th>
					</tr>
					<tr>
						
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
						<td><a class="blue-text" href="{{URL::asset('hapuspeserta')}}/{{$data->id}}"><i class="material-icons red-text">delete</i></a></td>
					</tr>
				@empty
					<tr>
						<td colspan="6" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2" class="left-align">
							<a href="{{URL::asset('truncatepeserta')}}" class="waves-effect waves-light btn red darken-1 white-text"><i class="material-icons right">delete</i>Kosongkan data</a>
						</td>
						<td colspan="4">{!! $page->render() !!}</td>
					</tr>
				</tfoot>
				@else
				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Jenis kelamin</th>
						<th>Sangga</th>
						<th>Ambalan</th>
					</tr>
					<tr>
						
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
					</tr>
				@empty
					<tr>
						<td colspan="6" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				@endif
			</table>
			<div class="col s12">
				<div class="card blue-grey lighten-5">
					<div class="card-content">
						<ul><b>Jumlah Keseluruhan Peserta</b></ul>
						<li>Jumlah Peserta Ambalan Merah : {{$peserta}} Orang</li>
						<li>Jumlah Peserta Ambalan Putih : {{$peserti}} Orang</li>
						<li>Jumlah keseluruhan : {{$jumlah}} Orang</li>
					</div>
				</div>
			</div>
			<div class="row"></div>
		</div>
	</div>
</div>
</body>
@stop
</html>