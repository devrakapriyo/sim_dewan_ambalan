<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<div class="card">
	<div class="card-content blue light-1">
		<span class="card-title white-text">Data keseluruhan absensi peserta</span>
	</div>
	<div class="card-action">
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a class="active" href="#absenputra" title="Absen ambalan merah">Merah</a></li>
		        <li class="tab col s3"><a href="#absenputri" title="Absen ambalan putih">Putih</a></li>		 
		      </ul>
		    </div>
		    <div id="absenputra" class="col s12">
		    <div class="col s12">
			<ul><b>Data hadir keseluruhan peserta ambalan Merah</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah hadir</th>
						</tr>
					</thead>
					<tbody>
					@forelse($lhadir as $lhadir)
						<tr>
							<td>{{$lhadir->nama}}</td>
							<td>{{$lhadir->sangga}}</td>
							<td>{{$lhadir->ambalan}}</td>
							<td>{{$lhadir->hadir}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data hadir tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total hadir : {{$lthadir}}</td>
							<td colspan="2">{!!$lpagehadir->render()!!}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="col s12">
			<ul><b>Data sakit keseluruhan peserta ambalan Merah</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah sakit</th>
						</tr>
					</thead>
					<tbody>
					@forelse($lsakit as $lsakit)
						<tr>
							<td>{{$lsakit->nama}}</td>
							<td>{{$lsakit->sangga}}</td>
							<td>{{$lsakit->ambalan}}</td>
							<td>{{$lsakit->sakit}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data sakit tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total sakit : {{$ltsakit}}</td>
							<td colspan="2">{{$lpagesakit->render()}}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="col s12">
			<ul><b>Data izin keseluruhan peserta ambalan Merah</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah izin</th>
						</tr>
					</thead>
					<tbody>
					@forelse($lizin as $lizin)
						<tr>
							<td>{{$lizin->nama}}</td>
							<td>{{$lizin->sangga}}</td>
							<td>{{$lizin->ambalan}}</td>
							<td>{{$lizin->izin}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data izin tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total izin : {{$ltizin}}</td>
							<td colspan="2">{{$lpageizin->render()}}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="col s12">
			<ul><b>Data alfa keseluruhan peserta ambalan Merah</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah alfa</th>
						</tr>
					</thead>
					<tbody>
					@forelse($lalfa as $lalfa)
						<tr>
							<td>{{$lalfa->nama}}</td>
							<td>{{$lalfa->sangga}}</td>
							<td>{{$lalfa->ambalan}}</td>
							<td>{{$lalfa->alfa}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data alfa tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total alfa : {{$ltalfa}}</td>
							<td colspan="2">{!!$lpagealfa->render()!!}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			</div>
			<div id="absenputri" class="col s12">
			<div class="col s12">
				<ul><b>Data hadir keseluruhan peserta ambalan Putih</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah hadir</th>
						</tr>
					</thead>
					<tbody>
					@forelse($phadir as $phadir)
						<tr>
							<td>{{$phadir->nama}}</td>
							<td>{{$phadir->sangga}}</td>
							<td>{{$phadir->ambalan}}</td>
							<td>{{$phadir->hadir}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data hadir tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total hadir : {{$pthadir}}</td>
							<td colspan="2">{!!$ppagehadir->render()!!}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="col s12">
			<ul><b>Data sakit keseluruhan peserta ambalan Putih</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah sakit</th>
						</tr>
					</thead>
					<tbody>
					@forelse($psakit as $psakit)
						<tr>
							<td>{{$psakit->nama}}</td>
							<td>{{$psakit->sangga}}</td>
							<td>{{$psakit->ambalan}}</td>
							<td>{{$psakit->sakit}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data sakit tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total sakit : {{$ptsakit}}</td>
							<td colspan="2">{!!$ppagesakit->render()!!}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="col s12">
			<ul><b>Data izin keseluruhan peserta ambalan Putih</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah izin</th>
						</tr>
					</thead>
					<tbody>
					@forelse($pizin as $pizin)
						<tr>
							<td>{{$pizin->nama}}</td>
							<td>{{$pizin->sangga}}</td>
							<td>{{$pizin->ambalan}}</td>
							<td>{{$pizin->izin}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data izin tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total izin : {{$ptizin}}</td>
							<td colspan="2">{!!$ppageizin->render()!!}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="col s12">
			<ul><b>Data alfa keseluruhan peserta ambalan Putih</b></ul>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Sangga</th>
							<th>Ambalan</th>
							<th>Jumlah alfa</th>
						</tr>
					</thead>
					<tbody>
					@forelse($palfa as $palfa)
						<tr>
							<td>{{$palfa->nama}}</td>
							<td>{{$palfa->sangga}}</td>
							<td>{{$palfa->ambalan}}</td>
							<td>{{$palfa->alfa}} pertemuan</td>
						</tr>
					@empty
						<tr>
							<td colspan="4">Data alfa tidak ada</td>
						</tr>
					@endforelse
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total alfa : {{$ptalfa}}</td>
							<td colspan="2">{!!$ppagealfa->render()!!}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			</div>
		</div>
	</div>	
</div>
</body>
@stop
</html>