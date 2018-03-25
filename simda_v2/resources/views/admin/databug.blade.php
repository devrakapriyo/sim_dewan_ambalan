<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Data bug program</title>
</head>
@section('admin.konten')
<body>
@if(Session::has('sukses'))
	<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('sukses') }}
	</div>
@endif
@if(Auth::User()->jabatan == "Admin")
<div class="card">
	<div class="card-content red white-text">
		<div class="card-title">Data laporan bug program</div>
	</div>
	<div class="card-action">
		<table class="highlight responsive-table">
			<thead>
				<tr>
					<th>Keterangan</th>
					<th>Gambar</th>
					<th>Pengirim</th>
					<th>Tgl kirim</th>
					<th>Status</th>
					<th>Perbarui</th>
				</tr>
			</thead>
			<tbody>
				@forelse($data as $data)
				<tr>
					@if($data->status == "Belum")
					<form method="post" action="{{URL::asset('baruibug')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="hidden" name="id" value="{{$data->id}}">
						<td class="red lighten-1 white-text">{{$data->keterangan}}</td>
						<td class="red lighten-1 white-text"><img src="{{URL::asset('bug')}}/{{$data->gambar}}" width="50" height="50" class="materialboxed"></td>
						<td class="red lighten-1 white-text">{{$data->pengirim}}</td>
						<td class="red lighten-1 white-text">{{$data->created_at}}</td>
						<td class="red lighten-1 white-text">
							{{$data->status}}
						</td>
						<td class="red lighten-1 white-text">
							<button class="btn white blue-text">BARUI</button>
						</td>
					</form>
					@else
					<td class="blue lighten-1 white-text">{{$data->keterangan}}</td>
					<td class="blue lighten-1 white-text"><img src="{{URL::asset('bug')}}/{{$data->gambar}}" width="50" height="50" class="materialboxed"></td>
					<td class="blue lighten-1 white-text">{{$data->pengirim}}</td>
					<td class="blue lighten-1 white-text">{{$data->created_at}}</td>
					<td class="blue lighten-1 white-text">
						{{$data->status}}
					</td>
					<td class="blue lighten-1 white-text">
						FIXED
					</td>
					@endif
				</tr>
				@empty
				<tr>
					<td colspan="6" class="center-align">Belum ada laporan bug program...</td>
				</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td>{{$page->render()}}</td>
				</tr>
			</tfoot>
		</table>
		<p class="red-text">*) Warna merah program belum diperbaiki</p>
		<p class="blue-text">*) Warna biru program sudah diperbaiki</p>
	</div>
</div>
@else
<div class="card">
	<div class="card-content">Maaf, anda tidak memiliki hak akses</div>
</div>
@endif
</body>
@stop
</html>