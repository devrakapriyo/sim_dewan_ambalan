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
		<ol class="breadcrumb white">
		  <li><a href="{{URL::asset('pembinaan')}}">Input Data Pembinaan</a></li>
		  <li><a href="{{URL::asset('datapembinaan')}}">Data Pembinaan</a></li>
		</ol>
		@if(Session::has('hapus'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('hapus') }}
		</div>
		@elseif(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('sukses') }}
		</div>
		@endif
		<div class="card">
			<div class="card-content red darken-1 white-text">
				<span class="card-title">Data peserta yang terkena pembinaan</span>
			</div>
			<div class="card-action">
				<div class="row">
				    <div class="col s12">
				      <ul class="tabs">
				        <li class="tab col s3"><a class="active" href="#pembinaanputra" title="Data pembinaan ambalan merah">Merah</a></li>
				        <li class="tab col s3"><a href="#pembinaanputri" title="Data pembinaan ambalan merah">Putih</a></li>		 
				      </ul>
				    </div>
				    <div id="pembinaanputra" class="col s12">
				    	<table>
							<thead>
								<tr>
									<th>NIS</th>
									<th>Nama</th>
									<th>Sangga</th>
									<th>Ambalan</th>
									<th>Rayon</th>
									<th>Rombel</th>
									<th class="center-align">Banyak Pembinaan</th>
									<th>Foto</th>
									<th>Detail pembinaan</th>
									<th>Hapus pembinaan</th>
								</tr>
							</thead>
							<tbody>
							@forelse($ldata as $ldata)
								<tr>
									<td>{{$ldata->nis}}</td>
									<td>{{$ldata->nama}}</td>
									<td>{{$ldata->sangga}}</td>
									<td>{{$ldata->ambalan}}</td>
									<td>{{$ldata->rayon}}</td>
									<td>{{$ldata->rombel}}</td>
									<td class="center-align" title="{{$ldata->banyak_pembinaan}} kali masuk pembinaan">{{$ldata->banyak_pembinaan}}</td>
									<td><img src="{{URL::asset('foto')}}/{{$ldata->foto}}" class="materialboxed foto-pembinaan"></td>
									<td><a href="{{URL::asset('detailpembinaan')}}/{{$ldata->nis}}" class="blue-text">Detail</a></td>
									<td><a href="{{URL::asset('hapuspembinaan')}}/{{$ldata->nis}}"><i class="material-icons center red-text" title="Hapus data pembinaan {{$ldata->nama}}">delete</i></a></td>
								</tr>
							@empty
								<tr>
									<td colspan="10" class="center-align red-text">Maaf, data tidak ada</td>
								</tr>
							@endforelse
							</tbody>
							<tfoot>
								<tr>
									<td colspan="10">{!! $lpage->render() !!}</td>
								</tr>
							</tfoot>
						</table>
				    </div>
				    <div id="pembinaanputri" class="col s12">
				    	<table>
							<thead>
								<tr>
									<th>NIS</th>
									<th>Nama</th>
									<th>Sangga</th>
									<th>Ambalan</th>
									<th>Rayon</th>
									<th>Rombel</th>
									<th class="center-align">Banyak Pembinaan</th>
									<th>Foto</th>
									<th>Detail pembinaan</th>
									<th>Hapus pembinaan</th>
								</tr>
							</thead>
							<tbody>
							@forelse($pdata as $pdata)
								<tr>
									<td>{{$pdata->nis}}</td>
									<td>{{$pdata->nama}}</td>
									<td>{{$pdata->sangga}}</td>
									<td>{{$pdata->ambalan}}</td>
									<td>{{$pdata->rayon}}</td>
									<td>{{$pdata->rombel}}</td>
									<td class="center-align" title="{{$pdata->banyak_pembinaan}} kali masuk pembinaan">{{$pdata->banyak_pembinaan}}</td>
									<td><img src="{{URL::asset('foto')}}/{{$pdata->foto}}" class="materialboxed foto-pembinaan"></td>
									<td><a href="{{URL::asset('detailpembinaan')}}/{{$pdata->nis}}" class="blue-text">Detail</a></td>
									<td><a href="{{URL::asset('hapuspembinaan')}}/{{$pdata->nis}}"><i class="material-icons center red-text" title="Hapus data pembinaan {{$pdata->nama}}">delete</i></a></td>
								</tr>
							@empty
								<tr>
									<td colspan="10" class="center-align red-text">Maaf, data tidak ada</td>
								</tr>
							@endforelse
							</tbody>
							<tfoot>
								<tr>
									<td colspan="10">{!! $lpage->render() !!}</td>
								</tr>
							</tfoot>
						</table>
				    </div>
				</div>
			</div>
		</div>
		@if(Auth::User()->jabatan != "Admin")
		<a href="{{URL::asset('truncatepembinaan')}}" class="btn red white-text"><i class="material-icons right">delete</i>
		TRUNCATE</a>
		@endif
	</div>
</div>
</body>
@stop
</html>