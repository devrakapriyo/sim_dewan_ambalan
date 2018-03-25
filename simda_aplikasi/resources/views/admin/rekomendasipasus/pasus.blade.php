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
		@if(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
				<i class="material-icons green-text">done</i>
				{{ Session::get('sukses') }}
		</div>
		@endif
		<div class="card">
			<div class="card-content">
				<span class="card-title blue-text">Data anggota pasus</span>
			</div>
			<div class="card-action">
				<table class="highlight responsive-table">
					<thead>
						<tr>
							<th>Nis</th>
							<th>Nama</th>
							<th>Jenis kelamin</th>
							<th>Tempat, tgl lahir</th>
							<th>Rombel</th>
							<th>Rayon</th>
							<th>Sangga</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						@forelse($data as $data)
						@if($data->rekomendasi == "Rekomendasi")
						<tr>
							<td class="blue lighten-5">{{$data->nis}}</td>
							<td class="blue lighten-5">{{$data->nama}}</td>
							<td class="blue lighten-5">{{$data->jk}}</td>
							<td class="blue lighten-5">{{$data->tempat_lahir}}, {{$data->tgl_lahir}}</td>
							<td class="blue lighten-5">{{$data->rombel}}</td>
							<td class="blue lighten-5">{{$data->rayon}}</td>
							<td class="blue lighten-5">{{$data->sangga}}</td>
							<td class="blue lighten-5"><a class="grey-text text-darken-1" title="Detail data {{$data->nama}}">Detail</a></td>
						</tr>
						@elseif($data->rekomendasi == "")
						<tr>
							<td>{{$data->nis}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->jk}}</td>
							<td>{{$data->tempat_lahir}}, {{$data->tgl_lahir}}</td>
							<td>{{$data->rombel}}</td>
							<td>{{$data->rayon}}</td>
							<td>{{$data->sangga}}</td>
							<td><a href="detailrekomendasipasus/{{$data->id}}" class="blue-text text-lighten-1" title="Detail data {{$data->nama}}">Detail</a></td>
						</tr>
						@endif
						@empty
						<tr>
							<td colspan="10" class="center-align red-text">Maaf, data tidak tersedia</td>
						</tr>
						@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="10">{{$pagepasus->render()}}</td>
						</tr>
					</tfoot>
				</table>
				<br>
				<a href="{{URL::asset('downlaodabsensi')}}" class="blue-text text-darken-2">Download absensi anggota pasus</a>
			</div>
		</div>
	</div>
</div>
</body>
@stop
</html>