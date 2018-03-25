<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Informasi</title>
</head>
@section('admin.konten')
<body>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('sukses') }}
</div>
@elseif(Session::has('agenda'))
<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('agenda') }}
</div>
@elseif(Session::has('pesan'))
<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('pesan') }}
</div>
@endif
<div class="card">
	<div class="card-content blue lighten-3">
		<span class="card-title">Informasi, agenda dan pesan</span>
	</div>
	<div class="card-action">
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a class="active" href="#informasi" title="Informasi">Informasi</a></li>
		        <li class="tab col s3"><a href="#agenda" title="Agenda">Agenda</a></li>
		        <li class="tab col s3"><a href="#pesan" title="Pesan">Pesan</a></li>		 
		      </ul>
		    </div>
		    <div class="row"></div>
		    <div id="informasi" class="col s12">
		    	<form method="post" action="{{URL::asset('perbaruiinformasi')}}">
		    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    		<input type="hidden" name="nama" value="{{Auth::User()->nama}}">
		    		<input type="hidden" name="id" value="{{$informasi->id}}">
		    		<div class="input-field col s12">
			          	<textarea name="informasi" id="textarea1" class="materialize-textarea" length="100" required>{{$informasi->informasi}}</textarea>
			        </div>
			        <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Perbarui
					    <i class="material-icons right">loop</i>
					</button>
		    	</form>
		    </div>
		    <div id="agenda" class="col s12">
		    	<form method="post" action="{{URL::asset('perbaruiagenda')}}">
		    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    		<input type="hidden" name="nama" value="{{Auth::User()->nama}}">
		    		<input type="hidden" name="id" value="{{$agenda->id}}">
		    		<div class="input-field col s12">
			          	<textarea name="agenda" id="textarea1" class="materialize-textarea" length="80" required>{{ $agenda->agenda }}</textarea>
			        </div>
			        <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Perbarui
					    <i class="material-icons right">loop</i>
					</button>
		    	</form>
		    </div>
		    <div id="pesan" class="col s12">
		    	<form method="post" action="{{URL::asset('perbaruipesan')}}">
		    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    		<input type="hidden" name="nama" value="{{Auth::User()->nama}}">
		    		<input type="hidden" name="id" value="{{$pesan->id}}">
		    		<div class="input-field col s12">
			          	<textarea name="pesan" id="textarea1" class="materialize-textarea" length="80" required>{{ $pesan->pesan }}</textarea>
			        </div>
			        <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Perbarui
					    <i class="material-icons right">loop</i>
					</button>
		    	</form>
		    </div>
		</div>
	</div>
</div>
</body>
@stop
</html>