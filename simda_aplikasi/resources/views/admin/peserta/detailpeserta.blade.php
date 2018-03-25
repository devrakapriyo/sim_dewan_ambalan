<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Detail peserta</title>
</head>
@section('admin.konten')
<body>
<ol class="breadcrumb white">
	<li><a href="{{URL::asset('inputpeserta')}}">Daftar peserta</a></li>
	<li><a href="{{URL::asset('datapeserta')}}">Data peserta</a></li>
	<li><a href="{{URL::asset('absensipeserta')}}">Absensi peserta</a></li>
	<li><a href="{{URL::asset('kaspeserta')}}">Kas peserta</a></li>
</ol>
<div class="card">
	<div class="card-content light-blue darken-1 white-text">
		<span class="card-title">Detail data peserta</span>
	</div>
	<div class="card-action">
		<div class="col s12 m4 l3">
			<img class="responsive-img materialboxed foto-detailadmin" src="{{URL::asset('foto')}}/{{$data->foto}}">
		</div>
		<div class="col s12 m8 l9">
		<table class="bordered highlight responsive-table">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td>{{$data->nis}}</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$data->nama}}</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>{{$data->agama}}</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>{{$data->jk}}</td>
			</tr>
			<tr>
				<td>Tempat, tgl lahir</td>
				<td>:</td>
				<td>{{$data->tempat_lahir}}, {{$data->tgl_lahir}}</td>
			</tr>
			<tr>
				<td>Rombel</td>
				<td>:</td>
				<td>{{$data->rombel}}</td>
			</tr>
			<tr>
				<td>Rayon</td>
				<td>:</td>
				<td>{{$data->rayon}}</td>
			</tr>
			<tr>
				<td>Sangga</td>
				<td>:</td>
				<td>{{$data->sangga}}</td>
			</tr>
			<tr>
				<td>Ambalan</td>
				<td>:</td>
				<td>{{$data->ambalan}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{$data->alamat}}</td>
			</tr>
			<tr>
				<td>Jumlah hadir</td>
				<td>:</td>
				<td>{{$h}}</td>
			</tr>
			<tr>
				<td>Jumlah sakit</td>
				<td>:</td>
				<td>
					@if($s >= "3")
					<span class="yellow-text text-darken-3">{{$s}} Batas sakit hampir mendakati ketentuan</span>
					@elseif($s >= "6")
					<span class="red-text text-darken-1">{{$s}} Batas sakit sudah melawati batas</span>
					@else
					{{$s}}
					@endif
				</td>
			</tr>
			<tr>
				<td>Jumlah alfa</td>
				<td>:</td>
				<td>
					@if($a >= "3")
					<span class="yellow-text text-darken-3">{{$a}} Batas alfa hampir mendakati ketentuan</span>
					@elseif($a >= "6")
					<span class="red-text text-darken-1">{{$a}} Batas alfa sudah melawati batas</span>
					@else
					{{$a}}
					@endif
				</td>
			</tr>
			<tr>
				<td>Jumlah izin</td>
				<td>:</td>
				<td>
					@if($i >= "3")
					<span class="yellow-text text-darken-3">{{$i}} Batas izin hampir mendakati ketentuan</span>
					@elseif($i >= "6")
					<span class="red-text text-darken-1">{{$i}} Batas izin sudah melawati batas</span>
					@else
					{{$i}}
					@endif
				</td>
			</tr>
			<tr>
				<td>Jumlah uang kas</td>
				<td>:</td>
				<td>
					Rp. {{number_format($kas, 0, ",", ".")}}
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a href="{{URL::asset('datapeserta')}}" class="waves-effect waves-light btn red lighten-1 white-text"><i class="material-icons right">undo</i>Kembali</a>
				</td>
			</tr>
		</table>
		</div>
	</div>
</div>
</body>
@stop
</html>