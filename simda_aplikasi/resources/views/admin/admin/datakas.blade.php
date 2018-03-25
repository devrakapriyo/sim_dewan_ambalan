<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data kas</title>
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
	@if(Session::has('truncate'))
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
			<span class="card-title">Data peserta sangga {{Auth::User()->sangga}}</span>
		</div>
		<div class="card-action">
			@if(Auth::User()->jabatan == "Admin")
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Jenis kelamin</th>
						<th>Sangga</th>
						<th>Ambalan</th>
						<th>Tgl Kas</th>
						<th>Total kas</th>
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
						<td>{{$data->tgl_kas}}</td>
						<td>Rp. {{number_format($data->total, 0, ",", ".")}}</td>
					</tr>
				@empty
					<tr>
						<td colspan="7" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2" class="left-align">
							<a href="{{URL::asset('truncatekas')}}" class="waves-effect waves-light btn red darken-1 white-text"><i class="material-icons right">delete</i>Kosongkan data</a>
						</td>
						<td colspan="5">{!! $page->render() !!}</td>
					</tr>
				</tfoot>
			</table>
			<div class="col s12">
				<ul><b>Partisipasi pembayaran kas</b></ul>
				<div class="row">
					<div class="col s6">
						<li><b>Rajin berpartisipasi :</b></li>
						@foreach($rajin as $rajin)
						<p>{{$rajin->nama}}</p>
						@endforeach
					</div>
					<div class="col s6">
						<li><b>Kurang berpartisipasi :</b></li>
						@foreach($kurang as $kurang)
						<p>{{$kurang->nama}}</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="row"></div>
			@else
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Jenis kelamin</th>
						<th>Sangga</th>
						<th>Ambalan</th>
						<th>Tgl Kas</th>
						<th>Total kas</th>
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
						<td>{{$data->tgl_kas}}</td>
						<td>Rp. {{number_format($data->total, 0, ",", ".")}}</td>
					</tr>
				@empty
					<tr>
						<td colspan="7" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				<tfoot>
					<tr>
						<td colspan="7">{!! $page->render() !!}</td>
					</tr>
				</tfoot>
			</table>
			<div class="col s12">
				<div class="card blue-grey lighten-5">
					<div class="card-content">
						<ul><b>Partisipasi pembayaran kas</b></ul>
						<div class="row">
							<div class="col s4">
								<li><b>Rajin berpartisipasi :</b></li>
								@foreach($rajin as $rajin)
								<p>{{$rajin->nama}} : Rp. {{number_format($rajin->total, 0, ",", ".")}}</p>
								@endforeach
							</div>
							<div class="col s4">
								<li><b>Kurang berpartisipasi :</b></li>
								@foreach($kurang as $kurang)
								<p>{{$kurang->nama}} : Rp. {{number_format($kurang->total, 0, ",", ".")}}</p>
								@endforeach
							</div>
							<div class="col s4">
								<li><b>Jumlah kas ambalan :</b></li>
								<p class="green-text">Total = Rp. {{number_format($jumlah, 0, ",", ".")}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row"></div>
			@endif
		</div>
	</div>
</div>
</body>
@stop
</html>