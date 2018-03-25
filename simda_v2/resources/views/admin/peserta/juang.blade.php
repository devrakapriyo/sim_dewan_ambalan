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
		<div class="card">
			<div class="card-content green darken-1 white-text">
				<span class="card-title">Data keuangan Ambalan</span>
			</div>
			<div class="card-action">
				<div class="col s5">
					<ul><b>Total Keseluruhan Keuangan Ambalan</b></ul>
					<li>Total keuangan Ambalan Merah : Rp.{{$ltotal}},-</li>
					<li>Total keuangan Ambalan Putih : Rp.{{$ptotal}},-</li>
					<li>Total : Rp.{{$total}},-</li>
				</div>
				<div class="col s4">
					<ul><b>Jumlah Peserta Ambalan</b></ul>
					<li>Jumlah Ambalan Merah : {{$putra}} Orang</li>
					<li>Jumlah Ambalan Putih : {{$putri}} Orang</li>
				</div>
				<div class="col s3">
					<ul><b>Keterangan kas</b></ul>
					<li>rajin berpartisipasi :
					@foreach($rajin as $rajin)
						<p>{{$rajin->nama}}</p>
					@endforeach
					</li>
					<li>kurang berpartisipasi :
					@foreach($kurang as $kurang)
						<p>{{$kurang->nama}}</p>
					@endforeach
					</li>
				</div>
				<div class="row"></div>
			</div>
		</div>
	</div>
</div>
</body>
@stop
</html>