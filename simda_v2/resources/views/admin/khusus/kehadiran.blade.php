<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Kehadiran</title>
</head>
@section('admin.konten')
<body>
<div class="row">
	<div class="card">
		<div class="card-content red">
			<div class="card-title white-text">Absensi Peserta Ambalan</div>
		</div>
		<div class="card-action">
			<div class="row">{{$hari}}, {{$tgl}}</div>
			<!-- <div class="row">
				<form>
					<div class="col s10">
						<input type="text" name="cari">
					</div>
					<div class="col s2">
						<button class="btn blue white-text">Cari</button>
					</div>
				</form>
			</div> -->
			<div class="ktk-kehadiran">
				@if($hari == "Tuesday")
				@foreach($sangga as $sangga)
				<ul class="collection">
					<li class="collection-item dismissable"><div>{{$sangga->sangga}}<a href="{{URL::asset('datakehadiran')}}/{{$sangga->sangga}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
				</ul>
				@endforeach
				@else
					<div class="row">
						Maaf, hak akses pengabsenan menunggu hingga selasa depan
						<div class="progress">
							<div class="indeterminate"></div>
						</div>
					</div>
				@endif
			</div>
	</div>
</div>
</body>
@stop
</html>