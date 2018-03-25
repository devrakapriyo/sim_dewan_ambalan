<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title>Kegiatan | Merah Putih Jaya</title>
</head>
@section('web.konten')
<body>
	<img src="{{URL::asset('gambar/header.png')}}" style="width:100%; height:30px;">
  	<div class="row">
  		<div class="col s12">
		    <div class="col hide-on-small-only m3 l2">
		      <ul class="section table-of-contents">
		        <li><a href="#introduction">PTA</a></li>
		        <li><a href="#structure">Bantara</a></li>
		        <li><a href="#initialization">Kegiatan</a></li>
		      </ul>
		    </div>
		    <div class="col s12 m9 l10">
		    	<div class="card">
		    		<div class="card-content">
		    			<div id="introduction" class="section scrollspy">
		    				<blockquote>
					        	<span class="font-besar">{{$pta->judul}}</span>
					        </blockquote>
					        {!! $pta->kegiatan !!}
					    </div>

					    <div id="structure" class="section scrollspy">
					    	<blockquote>
					        	<span class="font-besar">{{$bantara->judul}}</span>
					        </blockquote>
					        {!! $bantara->kegiatan !!}
					    </div>

					    <div id="initialization" class="section scrollspy">
					    	<blockquote>
					        	<span class="font-besar">{{$kegiatan->judul}}</span>
					        </blockquote>
					        {!! $kegiatan->kegiatan !!}
					    </div>	
		    		</div>
		    	</div>
		    </div>
  		</div>
	</div>
</body>
@stop
</html>