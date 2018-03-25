<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Kegiatan</title>
</head>
<script type="text/javascript" src="{{URL::asset('tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'textarea', height:250 });</script>
@section('admin.konten')
<body>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
	<i class="material-icons green-text">done</i>
	{{ Session::get('sukses') }}
</div>
@endif
<div class="card">
	<div class="card-content green lighten-2 white-text">
		<span class="card-title">Kegiatan PTA</span>
	</div>
	<div class="card-action">
		<div class="row">
			<form method="post" action="{{URL::asset('baruikegiatanpta')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$data->id}}">
				<div class="input-field col s12">
			        <input name="judul" value="{{$data->judul}}" id="first_name" type="text" class="validate">
			        <label for="first_name">Judul :</label>
		        </div>
		        <div class="input-field col s12">
					<textarea name="kegiatan">{{$data->kegiatan}}</textarea>
		        </div>
		        <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
				    <i class="material-icons right">loop</i>
				</button>
			</form>
		</div>
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a class="active" href="#satu">Satu</a></li>
		        <li class="tab col s3"><a href="#dua">Dua</a></li>
		        <li class="tab col s3"><a href="#tiga">Tiga</a></li>
		        <li class="tab col s3"><a href="#empat">Empat</a></li>
		        <li class="tab col s3"><a href="#lima">Lima</a></li>
		        <li class="tab col s3"><a href="#enam">Enam</a></li>
		      </ul>
		    </div>
		    <div id="satu" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$data->satu}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruisatu')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$data->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="satu">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$data->satu}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="dua" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$data->dua}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruidua')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$data->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="dua">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$data->dua}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="tiga" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$data->tiga}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruitiga')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$data->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="tiga">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$data->tiga}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="empat" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$data->empat}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruiempat')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$data->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="empat">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$data->empat}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="lima" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$data->lima}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruilima')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$data->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="lima">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$data->lima}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="enam" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$data->enam}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruienam')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$data->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="enam">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$data->enam}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-content green darken-2 white-text">
		<span class="card-title">Kegiatan Bantara</span>
	</div>
	<div class="card-action">
		<div class="row">
			<form method="post" action="{{URL::asset('baruikegiatanbantara')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$bantara->id}}">
				<div class="input-field col s12">
			        <input name="judulbantara" value="{{$bantara->judul}}" id="first_name" type="text" class="validate">
			        <label for="first_name">Judul :</label>
		        </div>
		        <div class="input-field col s12">
					<textarea name="kegiatanbantara">{{$bantara->kegiatan}}</textarea>
		        </div>
		        <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
				    <i class="material-icons right">loop</i>
				</button>
			</form>
		</div>
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a class="active" href="#satubantara">Satu</a></li>
		        <li class="tab col s3"><a href="#duabantara">Dua</a></li>
		        <li class="tab col s3"><a href="#tigabantara">Tiga</a></li>
		        <li class="tab col s3"><a href="#empatbantara">Empat</a></li>
		        <li class="tab col s3"><a href="#limabantara">Lima</a></li>
		        <li class="tab col s3"><a href="#enambantara">Enam</a></li>
		      </ul>
		    </div>
		    <div id="satubantara" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$bantara->satu}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruisatubantara')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$bantara->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="satubantara">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$bantara->satu}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="duabantara" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$bantara->dua}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruiduabantara')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$bantara->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="duabantara">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$bantara->dua}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="tigabantara" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$bantara->tiga}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruitigabantara')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$bantara->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="tigabantara">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$bantara->tiga}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="empatbantara" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$bantara->empat}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruiempatbantara')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$bantara->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="empatbantara">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$bantara->empat}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="limabantara" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$bantara->lima}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruilimabantara')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$bantara->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="limabantara">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$bantara->lima}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="enambantara" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$bantara->enam}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruienambantara')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$bantara->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="enambantara">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$bantara->enam}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-content red lighten-1 white-text">
		<span class="card-title">Kegiatan Pramuka</span>
	</div>
	<div class="card-action">
		<div class="row">
			<form method="post" action="{{URL::asset('baruikegiatan')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$kegiatan->id}}">
				<div class="input-field col s12">
			        <input name="judul" value="{{$kegiatan->judul}}" id="first_name" type="text" class="validate">
			        <label for="first_name">Judul :</label>
		        </div>
		        <div class="input-field col s12">
					<textarea name="kegiatan">{{$kegiatan->kegiatan}}</textarea>
		        </div>
		        <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
				    <i class="material-icons right">loop</i>
				</button>
			</form>
		</div>
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a class="active" href="#satukegiatan">Satu</a></li>
		        <li class="tab col s3"><a href="#duakegiatan">Dua</a></li>
		        <li class="tab col s3"><a href="#tigakegiatan">Tiga</a></li>
		        <li class="tab col s3"><a href="#empatkegiatan">Empat</a></li>
		        <li class="tab col s3"><a href="#limakegiatan">Lima</a></li>
		        <li class="tab col s3"><a href="#enamkegiatan">Enam</a></li>
		      </ul>
		    </div>
		    <div id="satukegiatan" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$kegiatan->satu}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruisatukegiatan')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$kegiatan->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="satukegiatan">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$kegiatan->satu}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="duakegiatan" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$kegiatan->dua}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruiduakegiatan')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$kegiatan->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="duakegiatan">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$kegiatan->dua}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="tigakegiatan" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$kegiatan->tiga}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruitigakegiatan')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$kegiatan->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="tigakegiatan">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$kegiatan->tiga}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="empatkegiatan" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$kegiatan->empat}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruiempatkegiatan')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$kegiatan->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="empatkegiatan">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$kegiatan->empat}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="limakegiatan" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$kegiatan->lima}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruilimakegiatan')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$kegiatan->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="limakegiatan">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$kegiatan->lima}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		    <div id="enamkegiatan" class="col s12">
		    	<div class="col s12 m4 l3">
		    		<img src="{{URL::asset('gambar')}}/{{$kegiatan->enam}}" class="foto-rekomendasi-pasus">
		    	</div>
		    	<div class="col s12 m8 l9">
		    		<form method="post" action="{{URL::asset('baruienamkegiatan')}}" enctype="multipart/form-data">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<input type="hidden" name="id" value="{{$kegiatan->id}}">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file" name="enamkegiatan">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" value="{{$kegiatan->enam}}">
					      </div>
					    </div>
					    <button class="btn waves-effect waves-light blue lighten-1" style="margin-top:10px; margin-left:10px;" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>
</body>
@stop
</html>