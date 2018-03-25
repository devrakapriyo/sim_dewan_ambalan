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
		<div class="col s12 m4 l3">
	        <div class="card">
	          <div class="card-image">
	            <div class="slider">
	              <ul class="slides">
	              	@foreach($slide as $slide)
	                <li>
	                  <img src="{{URL::asset('gambar')}}/{{$slide->foto}}">
	                </li>
	                @endforeach
	              </ul>
	            </div>
	          </div>
	          <div class="card-content">
	            <p>Yuk kita lihat dan baca kegiatan ambalan yang pernah kita lakukan.</p>
	          </div>
	        </div>
        </div>
	    <div class="col s12 m8 l9">
	      	<div class="row kotak-luar">
	      		@foreach($data as $data)
	      		<div class="col s12 kotak-dalam">
	      			<div class="card">
		              <div class="card-content">
		              	<div class="col s2">
		              		<img class="materialboxed" src="{{URL::asset('gambar')}}/{{$data->foto}}" width="120" height="120">
		              		<a class="blue-text text-darken-2" target="_blank" href="{{URL::asset('lihataktivitas')}}/{{Crypt::encrypt($data->id_aktivitas)}}">lihat semua foto</a>
		              	</div>
		              	<div class="col s10">
		              		<p style="align:right;">
			                  <span class="font-sedang grey-text text-darken-1">{{$data->judul}}</span>
			                  <br>
			                  <span class="font-kecil blue-text text-darken-2">Post | {{$data->created_at}}</span>
			                  <br>
			                  <span class="grey-text text-darken-4">{!!$data->aktivitas!!}</span>
			                <p>
		              	</div>
		              	<div class="row"></div>
		              </div>
		            </div>
	      		</div>
	      		@endforeach
	      	</div>
	      	<div class="row">
		    	{!!$page->render()!!}
		    </div>
	    </div>
    </div>
</body>
@stop
</html>