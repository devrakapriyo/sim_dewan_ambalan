<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title>Aktivitas | Merah Putih Jaya</title>
</head>
@section('web.konten')
<body>
	<img src="{{URL::asset('gambar/header.png')}}" style="width:100%; height:30px;">
  	<div class="row">
  		<div class="col s12">
		    <div class="col col s12 m4 l3">
		    	<blockquote>
		    	<span class="font-sedang grey-text">
		    		Berita kegiatan ambalan
		    	</span>
		    	</blockquote>
		    	@foreach($data as $data)
					<div class="ktk-menu white">
						<img src="{{URL::asset('gambar')}}/{{$data->foto}}" width="80" height="80" style="float: left; margin-right: 5px;" class="materialboxed">
						<a href="{{URL::asset('detailaktivitas')}}/{{Crypt::encrypt($data->id_aktivitas)}}" class="judul-menu">{{$data->judul}}</a>
					</div>
				@endforeach
		    </div>
		    <div class="col s12 m8 l9">
				<div class="card">
					<div class="card-content">
						<blockquote>
							<span><b>"{{$aktivitas->judul}}" </b></span>
						</blockquote>
						<div class="row"></div>
						<span>{!!$aktivitas->aktivitas!!}</span>
						<div class="row"></div>
						<p class="center-align"><a target="_blank" href="{{URL::asset('lihataktivitas')}}/{{Crypt::encrypt($aktivitas->id_aktivitas)}}">LIHAT FOTO AKTIVITAS "{{$aktivitas->judul}}"</a></p>
						<div class="row"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@stop
</html>