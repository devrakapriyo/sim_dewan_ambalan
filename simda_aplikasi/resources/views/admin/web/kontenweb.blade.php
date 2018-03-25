<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboard | Kontenweb</title>
</head>
@section('admin.konten')
<body>
<div class="card">
	<div class="card-content red lighten-1 white-text">
		<span class="card-title">Selamat datang, {{Auth::User()->nama}}</span>
		<p>Silahkan anda meperbarui konten konten di website pramuka</p>
	</div>
</div>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
		<i class="material-icons green-text">done</i>
		{{ Session::get('sukses') }}
</div>
@endif
<div class="card">
	<div class="card-content blue-grey darken-2">
		<span class="card-title white-text">Slider website</span>
	</div>
	<div class="card-action">
		<div class="row">
			<div class="col s12">
				 <ul class="tabs">
				   	<li class="tab col s3"><a class="active" href="#slide1">Slide home satu</a></li>
				   	<li class="tab col s3"><a href="#slide2">Slide home dua</a></li>
				   	<li class="tab col s3"><a href="#slide3">Slide home tiga</a></li>
				   	<li class="tab col s3"><a href="#slide4">Slide home empat</a></li>
				 </ul>
			</div>
			<div class="row"></div>
			<div id="slide1" class="col s12">
				<form method="post" action="{{URL::asset('slidesatu')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s5">
					 	<img class="materialboxed" width="365" src="{{URL::asset('gambar')}}/{{$slide->foto_slide_satu}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_slide_satu" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s7">
						<div class="input-field col s12">
				          	<input name="judul_slide_satu" value="{{$slide->judul_slide_satu}}" id="first_name" type="text" class="validate" length="50">
				          	<label for="first_name" class="blue-text text-lighten-1">Judul slide satu :</label>
				        </div>
				        <div class="input-field col s12">
				          	<input name="kalimat_slide_satu" value="{{$slide->kalimat_slide_satu}}" id="first_name" type="text" class="validate" length="70">
				          	<label for="first_name" class="red-text text-lighten-1">Kalimat slide satu :</label>
				        </div>
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</div>
				</form>
			</div>

			<div id="slide2" class="col s12">
				<form method="post" action="{{URL::asset('slidedua')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s5">
					 	<img class="materialboxed" width="365" src="{{URL::asset('gambar')}}/{{$slide->foto_slide_dua}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_slide_dua" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s7">
						<div class="input-field col s12">
				          	<input name="judul_slide_dua" value="{{$slide->judul_slide_dua}}" id="first_name" type="text" class="validate" length="35">
				          	<label for="first_name" class="blue-text text-lighten-1">Judul slide dua :</label>
				        </div>
				        <div class="input-field col s12">
				          	<input name="kalimat_slide_dua" value="{{$slide->kalimat_slide_dua}}" id="first_name" type="text" class="validate" length="65">
				          	<label for="first_name" class="red-text text-lighten-1">Kalimat slide dua :</label>
				        </div>
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</div>
				</form>
			</div>

			<div id="slide3" class="col s12">
				<form method="post" action="{{URL::asset('slidetiga')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s5">
					 	<img class="materialboxed" width="365" src="{{URL::asset('gambar')}}/{{$slide->foto_slide_tiga}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_slide_tiga" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s7">
						<div class="input-field col s12">
				          	<input name="judul_slide_tiga" value="{{$slide->judul_slide_tiga}}" id="first_name" type="text" class="validate" length="35">
				          	<label for="first_name" class="blue-text text-lighten-1">Judul slide tiga :</label>
				        </div>
				        <div class="input-field col s12">
				          	<input name="kalimat_slide_tiga" value="{{$slide->kalimat_slide_tiga}}" id="first_name" type="text" class="validate" length="65">
				          	<label for="first_name" class="red-text text-lighten-1">Kalimat slide tiga :</label>
				        </div>
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</div>
				</form>
			</div>

			<div id="slide4" class="col s12">
				<form method="post" action="{{URL::asset('slideempat')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s5">
					 	<img class="materialboxed" width="365" src="{{URL::asset('gambar')}}/{{$slide->foto_slide_empat}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_slide_empat" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s7">
						<div class="input-field col s12">
				          	<input name="judul_slide_empat" value="{{$slide->judul_slide_empat}}" id="first_name" type="text" class="validate" length="35">
				          	<label for="first_name" class="blue-text text-lighten-1">Judul slide empat :</label>
				        </div>
				        <div class="input-field col s12">
				          	<input name="kalimat_slide_empat" value="{{$slide->kalimat_slide_empat}}" id="first_name" type="text" class="validate" length="65">
				          	<label for="first_name" class="red-text text-lighten-1">Kalimat slide empat :</label>
				        </div>
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="card">
		<div class="card-content blue darken-1 white-text">
			<span class="card-title">Mabigus dan pembina</span>
		</div>
		<div class="card-action">
			<div class="col s12">
				<ul class="tabs">
				   	<li class="tab col s3"><a class="active" href="#mabigus">Mabigus</a></li>
				   	<li class="tab col s3"><a href="#pembinaputra">Pembina putra</a></li>
				   	<li class="tab col s3"><a href="#pembinaputri">Pembina putri</a></li>
				   	<li class="tab col s3"><a href="#pembinalatih">Pembina latih</a></li>
				</ul>
			</div>
			<div class="row"></div>
			<div id="mabigus">
				<form method="post" action="{{URL::asset('baruimabigus')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s12 m4 l3">
						<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_mabigus}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_mabigus" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s12 m8 l9">
						<div class="input-field col s12">
				          	<input name="nama_mabigus" value="{{$slide->nama_mabigus}}" id="first_name" type="text" class="validate" length="60">
				          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap mabigus :</label>
				        </div>
				        <div class="input-field col s12">
				        	<button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
				        </div>
					</div>
				</form>
			</div>

			<div id="pembinaputra">
				<form method="post" action="{{URL::asset('baruipembinaputra')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s12 m4 l3">
						<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_pembina_putra}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_pembina_putra" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s12 m8 l9">
						<div class="input-field col s12">
				          	<input name="nama_pembina_putra" value="{{$slide->nama_pembina_putra}}" id="first_name" type="text" class="validate" length="60">
				          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
				        </div>
				        <div class="input-field col s12">
				        	<textarea name="kalimat_pembina_putra" id="textarea1" class="materialize-textarea" length="100">{{$slide->kalimat_pembina_putra}}</textarea>
				        	<label for="first_name" class="blue-text text-lighten-1">Salam perkenalanan pembina putra :</label>
				        </div>
				        <div class="input-field col s12">
				        	<button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
				        </div>
					</div>
				</form>
			</div>

			<div id="pembinaputri">
				<form method="post" action="{{URL::asset('baruipembinaputri')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s12 m4 l3">
						<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_pembina_putri}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_pembina_putri" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s12 m8 l9">
						<div class="input-field col s12">
				          	<input name="nama_pembina_putri" value="{{$slide->nama_pembina_putri}}" id="first_name" type="text" class="validate" length="60">
				          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
				        </div>
				        <div class="input-field col s12">
				        	<textarea name="kalimat_pembina_putri" id="textarea1" class="materialize-textarea" length="100">{{$slide->kalimat_pembina_putri}}</textarea>
				        	<label for="first_name" class="blue-text text-lighten-1">Salam perkenalanan pembina putri :</label>
				        </div>
				        <div class="input-field col s12">
				        	<button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
				        </div>
					</div>
				</form>
			</div>

			<div id="pembinalatih">
				<form method="post" action="{{URL::asset('baruipembinalatih')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$slide->id}}">
					<div class="col s12 m4 l3">
						<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_pembina_latih}}">
						<div class="file-field input-field">
					      <div class="btn green">
					        <span>Foto</span>
					        <input name="foto_pembina_latih" type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="col s12 m8 l9">
						<div class="input-field col s12">
				          	<input name="nama_pembina_latih" value="{{$slide->nama_pembina_latih}}" id="first_name" type="text" class="validate" length="60">
				          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
				        </div>
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
						    <i class="material-icons right">loop</i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="card">
		<div class="card-content red lighten-1 white-text">
			<span class="card-title">Anggota Dewan Ambalan Merah Putih</span>
		</div>
		<div class="card-action">
			<div class="col s12">
				<ul class="tabs">
				   	<li class="tab col s3"><a class="active" href="#pradana">Pradana</a></li>
				   	<li class="tab col s3"><a href="#judat">Judat</a></li>
				   	<li class="tab col s3"><a href="#juang">Juang</a></li>
				   	<li class="tab col s3"><a href="#krani">Krani</a></li>
				   	<li class="tab col s3"><a href="#sekbid">Sekbid</a></li>
				</ul>
			</div>
			<div class="row"></div>
			<div id="pradana">
				<div class="row">
					<p class="font-besar">Pradana putra</p>
					<form method="post" action="{{URL::asset('baruipradanaputra')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_pradana_putra}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_pradana_putra" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_pradana_putra" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_pradana_putra}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>

				<div class="row">
					<p class="font-besar">Pradana putri</p>
					<form method="post" action="{{URL::asset('baruipradanaputri')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_pradana_putri}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_pradana_putri" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_pradana_putri" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_pradana_putri}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>
			</div>

			<div id="judat">
				<div class="row">
					<p class="font-besar">Judat putra</p>
					<form method="post" action="{{URL::asset('baruijudatputra')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_judat_putra}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_judat_putra" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_judat_putra" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_judat_putra}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>

				<div class="row">
					<p class="font-besar">Judat putri</p>
					<form method="post" action="{{URL::asset('baruijudatputri')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_judat_putri}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_judat_putri" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_judat_putri" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_judat_putri}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>
			</div>

			<div id="juang">
				<div class="row">
					<p class="font-besar">Juang putra</p>
					<form method="post" action="{{URL::asset('baruijuangputra')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_juang_putra}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_juang_putra" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_juang_putra" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_juang_putra}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>

				<div class="row">
					<p class="font-besar">Juang putri</p>
					<form method="post" action="{{URL::asset('baruijuangputri')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_juang_putri}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_juang_putri" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_juang_putri" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_juang_putri}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>
			</div>

			<div id="krani">
				<div class="row">
					<p class="font-besar">Krani putra</p>
					<form method="post" action="{{URL::asset('baruikraniputra')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_krani_putra}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_krani_putra" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_krani_putra" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_krani_putra}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>

				<div class="row">
					<p class="font-besar">Krani putri</p>
					<form method="post" action="{{URL::asset('baruikraniputri')}}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{$slide->id}}">
						<div class="col s12 m4 l3">
							<img class="materialboxed" width="200" src="{{URL::asset('gambar')}}/{{$slide->foto_krani_putri}}">
							<div class="file-field input-field">
						      <div class="btn green">
						        <span>Foto</span>
						        <input name="foto_krani_putri" type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
						</div>
						<div class="col s12 m8 l9">
							<div class="input-field col s12">
					          	<input name="nama_krani_putri" id="first_name" type="text" class="validate" length="60" value="{{$slide->nama_krani_putri}}">
					          	<label for="first_name" class="blue-text text-lighten-1">Nama lengkap :</label>
					        </div>
					        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							    <i class="material-icons right">loop</i>
							</button>
						</div>
					</form>
				</div>
			</div>

			<div id="sekbid">
				<form method="post" action="{{URL::asset('jugit')}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Juru kegiatan</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="nama" value="" id="first_name input_text" type="text">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Teknik kepramukaan</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="tekpram" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Juru lapangan</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="jurlap" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Pembinaan</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="pembinaan" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Kerohanian</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="kerohanian" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Peralatan</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="peralatan" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Humas</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="humas" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>

				<form method="post" action="">
					<div class="col s3">
						<p class="blue-text text-lighten-2">Kesakaan</p>
						@for($a = 0; $a <= 10; $a++)
				           	<input name="kesakaan" value="" id="first_name input_text" type="text" length="60">
				        @endfor
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Perbarui
							<i class="material-icons right">loop</i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
@stop
</html>