<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data admin</title>
</head>
@section('admin.konten')
<body>
<div class="row">
	<div class="col s12">
		@if(Session::has('berhasil'))
		<div class="chip" title="Klick jika ingin di hilangkan">
				<i class="material-icons green-text">done</i>
				{{ Session::get('berhasil') }}
		</div>
		@endif
		<ol class="breadcrumb white">
		  <li><a href="{{URL::asset('admin')}}">Daftar Admin</a></li>
		  <li><a href="{{URL::asset('dataadmin')}}">Data Admin</a></li>
		  <li><a href="{{URL::asset('datapesertapramuka')}}">Data Peserta</a></li>
		  <li><a href="{{URL::asset('dataabsen')}}">Absensi Peserta</a></li>
		  <li><a href="{{URL::asset('datakas')}}">Kas peserta</a></li>
		</ol>
		<div class="card">
			<div class="card-content cyan lighten-3">
				<span class="card-title white-text">Data anggota admin</span>
			</div>
			<div class="card-action">
			@if(Auth::User()->jabatan == "Admin")
				<table class="highlight responsive-table">
					<thead>
						<tr>
							<th rowspan="2">Nomer induk</th>
							<th rowspan="2">Nama</th>
							<th rowspan="2">Jenis kelamin</th>
							<th rowspan="2">Agama</th>
							<th rowspan="2">Rayon</th>
							<th rowspan="2">Sangga</th>
							<th rowspan="2">Jabatan</th>
							<th colspan="2" class="center-align">Aksi</th>
						</tr>
						<tr>
							<th>Detail</th>
							<th>Hapus</th>
						</tr>
					</thead>
					@forelse($data as $data)
					<tbody>
						<tr>
							<td>{{$data->nomer_induk}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->jk}}</td>
							<td>{{$data->agama}}</td>
							<td>{{$data->rayon}}</td>
							<td>{{$data->sangga}}</td>
							<td>{{$data->jabatan}}</td>
							<td>
								<a href="{{URL::asset('detailadmin')}}/{{$data->id}}" class="grey-text text-darken-1" title="Detail admin {{$data->nama}}"><i class="material-icons">subject</i></a>
							</td>
							<td>
								<a href="{{URL::asset('hapusadmin')}}/{{$data->id}}" class="grey-text text-darken-1" title="Hapus data admin {{$data->nama}}"><i class="material-icons">delete</i></a>
							</td>
						</tr>
					</tbody>
					@empty
					<tbody>
						<tr>
							<td colspan="8" class="center-align grey-text">Maaf, tidak ada admin yang terdaftar.</td>
						</tr>
					</tbody>
					@endforelse
					<tfoot>
		                <tr>
		                    <td colspan="8">{!! $page->render() !!}</td>
		                </tr>
		            </tfoot>
				</table>
			@else
				<table class="highlight responsive-table">
					<thead>
						<tr>
							<th>Nomer induk</th>
							<th>Nama</th>
							<th>Jenis kelamin</th>
							<th>Agama</th>
							<th>Rayon</th>
							<th>Sangga</th>
							<th>Jabatan</th>
							<th>Detail</th>
						</tr>
					</thead>
					@forelse($data as $data)
					<tbody>
						<tr>
							<td>{{$data->nomer_induk}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->jk}}</td>
							<td>{{$data->agama}}</td>
							<td>{{$data->rayon}}</td>
							<td>{{$data->sangga}}</td>
							<td>{{$data->jabatan}}</td>
							<td>
								<a href="{{URL::asset('detailadmin')}}/{{$data->id}}" class="grey-text text-darken-1" title="Detail admin {{$data->nama}}"><i class="material-icons">subject</i></a>
							</td>
						</tr>
					</tbody>
					@empty
					<tbody>
						<tr>
							<td colspan="7" class="center-align grey-text">Maaf, tidak ada admin yang terdaftar.</td>
						</tr>
					</tbody>
					@endforelse
					<tfoot>
		                <tr>
		                    <td colspan="7">{!! $page->render() !!}</td>
		                </tr>
		            </tfoot>
				</table>
			@endif
			</div>
	</div>
</div>
</body>
@stop
</html>