<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data absen</title>
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
			<span class="card-title">Data kehadiran peserta</span>
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
						<td>{{$data->tgl_absen}}</td>
					</tr>
				@empty
					<tr>
						<td colspan="6" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3" class="left-align">
							<a href="{{URL::asset('truncateabsen')}}" class="waves-effect waves-light btn red darken-1 white-text"><i class="material-icons right">delete</i>Kosongkan data</a>
						</td>
						<td colspan="3">{!! $page->render() !!}</td>
					</tr>
				</tfoot>
			</table>
			<div class="col s12">
				<ul><b>Partisipasi pembayaran kas</b></ul>
				<div class="row">
					<div class="card blue-grey lighten-5">
					<div class="card-content">
						<ul><b>Keterangan Data Kehadiran Peserta</b></ul>
						<div class="row">
							<div class="col s6">
								<li><b>Peserta yang sering Hadir :</b></li>
								@forelse($hadir as $hadir)
								<p>{{$hadir->nama}} : "{{$hadir->hadir}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
							</div>
							<div class="col s6">
								<li><b>Peserta yang sering Alfa :</b></li>
								@forelse($alfa as $alfa)
								<p>{{$alfa->nama}} : "{{$alfa->alfa}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
							</div>
							<div class="col s6">
								<li><b>Peserta yang sering Sakit :</b></li>
								@forelse($sakit as $sakit)
								<p>{{$sakit->nama}} : "{{$sakit->sakit}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
							</div>
							<div class="col s6">
								<li><b>Peserta yang sering Izin :</b></li>
								@forelse($izin as $izin)
								<p>{{$izin->nama}} : "{{$izin->izin}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
							</div>
						</div>
					</div>
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
						<td>{{$data->tgl_absen}}</td>
						
					</tr>
				@empty
					<tr>
						<td colspan="6" class="center-align">Maaf, sepertinya peserta belum terdaftar</td>
					</tr>
				@endforelse
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6">{!! $page->render() !!}</td>
					</tr>
				</tfoot>
			</table>
			<div class="col s12">
				<div class="card blue-grey lighten-5">
					<div class="card-content">
						<ul><b>Keterangan Data Kehadiran Peserta</b></ul>
						<div class="row">
							<div class="col s6">
								<li><b>Peserta yang sering Hadir :</b></li>
								@forelse($hadir as $hadir)
								<p>{{$hadir->nama}} : "{{$hadir->hadir}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
								<p class="green-text">Jumlah kehadiran : {{$jhadir}}</p>
							</div>
							<div class="col s6">
								<li><b>Peserta yang sering Alfa :</b></li>
								@forelse($alfa as $alfa)
								<p>{{$alfa->nama}} : "{{$alfa->alfa}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
								<p class="red-text">Jumlah alfa : {{$jalfa}}</p>
							</div>
							<div class="col s6">
								<li><b>Peserta yang sering Sakit :</b></li>
								@forelse($sakit as $sakit)
								<p>{{$sakit->nama}} : "{{$sakit->sakit}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
								<p class="orange-text">Jumlah sakit : {{$jsakit}}</p>
							</div>
							<div class="col s6">
								<li><b>Peserta yang sering Izin :</b></li>
								@forelse($izin as $izin)
								<p>{{$izin->nama}} : "{{$izin->izin}} kali"</p>
								@empty
								<p>Data alfa tidak ada</p>
								@endforelse
								<p class="grey-text">Jumlah izin : {{$jizin}}</p>
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