<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title>Dashboad | Admin</title>
</head>
@section('admin.konten')
<body>
<!-- <div class="row"></div>
<div class="row"> -->
	<!-- <nav class="white">
	    <div class="nav-wrapper">
	      <ul class="right hide-on-med-and-down">
	        <li><a href="sass.html"><i class="material-icons grey-text text-darken-1">search</i></a></li>
	        <li><a href="badges.html"><i class="material-icons grey-text text-darken-1">view_module</i></a></li>
	        <li><a href="collapsible.html"><i class="material-icons grey-text text-darken-1">refresh</i></a></li>
	        <li><a href="mobile.html"><i class="material-icons red-text text-darken-2" title="Anda yakin ingin keluar?">settings_power</i></a></li>
	      </ul>
	    </div>
	</nav> -->
<!-- </div> -->
<div class="row">
	@if(Auth::User()->jabatan != "Admin" && Auth::User()->jabatan != "Pembina" && Auth::User()->jabatan != "Mabigus" )
	<div class="col s12 m4 l4">
		<a href="{{URL::asset('absensipeserta')}}">
		<div class="card">
      		<div class="card-content white-text amber lighten-2">
        		<span class="card-title"><i class="material-icons right medium">assignment</i>{{$peserta}} Orang</span>
        		<p>Absensi {{Auth::User()->sangga}}</p>
      		</div>
      		<div class="card-action">
      		</div>
    	</div>
    	</a>
	</div>
	<div class="col s12 m4 l4">
		<a href="{{URL::asset('rekomendasi')}}">
		<div class="card">
      		<div class="card-content white-text cyan lighten-2">
        		<span class="card-title"><i class="material-icons right medium">comment</i>{{$komentar}} Komentar</span>
        		<p>Rekomendasi komentar</p>
      		</div>
      		<div class="card-action">
      		</div>
    	</div>
    	</a>
	</div>
	<div class="col s12 m4 l4">
		<a href="{{URL::asset('dataadmin')}}">
		<div class="card">
      		<div class="card-content white-text green">
        		<span class="card-title"><i class="material-icons right medium">person_pin</i>{{$anggota}} Orang</span>
        		<p>Admin yang terdaftar</p>
      		</div>
      		<div class="card-action">
      		</div>
    	</div>
    	</a>
	</div>
	@else
	<div class="col s12 m4 l4">
		<a href="{{URL::asset('datapesertapramuka')}}">
		<div class="card">
      		<div class="card-content white-text amber lighten-2">
        		<span class="card-title"><i class="material-icons right medium">assignment</i>{{$jmlpeserta}} Orang</span>
        		<p>Jumlah peserta</p>
      		</div>
      		<div class="card-action">
      		</div>
    	</div>
    	</a>
	</div>
	<div class="col s12 m4 l4">
		<a href="{{URL::asset('rekomendasi')}}">
		<div class="card">
      		<div class="card-content white-text cyan lighten-2">
        		<span class="card-title"><i class="material-icons right medium">comment</i>{{$komentar}} Komentar</span>
        		<p>Rekomendasi komentar</p>
      		</div>
      		<div class="card-action">
      		</div>
    	</div>
    	</a>
	</div>
	<div class="col s12 m4 l4">
		<a href="{{URL::asset('dataadmin')}}">
		<div class="card">
      		<div class="card-content white-text green">
        		<span class="card-title"><i class="material-icons right medium">person_pin</i>{{$anggota}} Orang</span>
        		<p>Admin yang terdaftar</p>
      		</div>
      		<div class="card-action">
      		</div>
    	</div>
    	</a>
	</div>
	@endif
	<div class="col s12 m6 l6">
		@if(Auth::User()->jabatan != "Admin" || Auth::User()->jabatan == "Pembina" || Auth::User()->jabatan == "Mabigus")
		<div class="card">
			<div class="card-content">
				<span class="card-title grey-text text-darken-2">Data sangga {{Auth::User()->sangga}}</span>
				<div class="collection">
				    <a href="#!" class="collection-item">Jumlah peserta<span class="badge">{{$peserta}} orang</span></a>
				    <a href="#!" class="collection-item">Jumlah kehadiran
				    	<div class="chip blue white-text right" title="Hadir" style="margin-top:-3px; margin-left: 3px;">{{$hadir}}</div>
				    	<div class="chip red white-text right" title="Sakit" style="margin-top:-3px; margin-left: 3px;">{{$sakit}}</div>
				    	<div class="chip green white-text right" title="Izin" style="margin-top:-3px; margin-left: 3px;">{{$izin}}</div>
				    	<div class="chip grey lighten-2 white-text right" title="Alfa" style="margin-top:-3px; margin-left: 3px;">{{$alfa}}</div>
				    </a>
				    <a href="#!" class="collection-item">Jumlah uang kas<span class="green lughten-2 white-text badge">Rp. {{number_format($kas, 0, ",", ".")}}</span></a>
				    <a href="#!" class="collection-item">Jumlah pembinaan<span class="badge">{{$pembinaan}}</span></a>
				</div>
			</div>
			@else
			<div class="card">
			<div class="card-content">
				<span class="card-title grey-text text-darken-2">Data peserta</span>
				<div class="collection">
				    <a href="#!" class="collection-item">Jumlah anggota<span class="badge">{{$anggota}} orang</span></a>
				    <a href="#!" class="collection-item">Jumlah peserta<span class="badge">{{$pesertaadmin}} orang</span></a>
				    <a href="#!" class="collection-item">Jumlah kehadiran
				    	<div class="chip blue white-text right" title="Hadir" style="margin-top:-3px; margin-left: 3px;">{{$hadiradmin}}</div>
				    	<div class="chip red white-text right" title="Sakit" style="margin-top:-3px; margin-left: 3px;">{{$sakitadmin}}</div>
				    	<div class="chip green white-text right" title="Izin" style="margin-top:-3px; margin-left: 3px;">{{$izinadmin}}</div>
				    	<div class="chip grey lighten-2 white-text right" title="Alfa" style="margin-top:-3px; margin-left: 3px;">{{$alfaadmin}}</div>
				    </a>
				    <a href="#!" class="collection-item">Jumlah uang kas<span class="green lughten-2 white-text badge">Rp. {{number_format($kasadmin, 0, ",", ".")}}</span></a>
				    <a href="#!" class="collection-item">Jumlah pembinaan<span class="badge">{{$pembinaanadmin}}</span></a>
				</div>
			</div>
			@endif
		</div>
	</div>
	<div class="col s12 m6 l6">
		@if(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
		  <i class="material-icons green-text">done</i>
		  {{ Session::get('sukses') }}
		</div>
		@elseif(Session::has('hapus'))
		<div class="chip" title="Klick jika ingin di hilangkan">
		  <i class="material-icons green-text">done</i>
		  {{ Session::get('hapus') }}
		</div>
		@endif
		<div class="card">
			<div class="card-content">
				<span class="card-title grey-text text-darken-2">Forum<i class="material-icons right green-text">forum</i></span>
				<form method="post" action="{{URL::asset('forum')}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="nama" value="{{Auth::User()->nama}}">
					<input type="hidden" name="foto" value="{{Auth::User()->foto}}">
					<div class="input-field col s12">
			          <input type="text" name="forum" required>
			        </div>
			        <button class="btn waves-effect waves-light green" type="submit" name="action">Kirim
					    <i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<!-- <span class="grey-text text-darken-2 font-besar">Forum admin</span>
		<div class="kotak-forum"> -->
		<div class="card">
			<div class="card-content blue white-text">
				<span class="card-title">Forum admin</span>
			</div>
			<div style="height: 300px; overflow: auto;" class="card-action grey lighten-5">
				@if(Auth::User()->jabatan == "Admin" || Auth::User()->jabatan == "Pembina" || Auth::User()->jabatan == "Mabigus")
					@foreach($data as $data)
					<ul class="collection">
						<li class="collection-item avatar">
						  <img onmousedown="return false" oncontexmenu="return false" onselectstart="return false" src="{{URL::asset('foto')}}/{{$data->foto}}" alt="" class="circle">
						  <span class="title">{{$data->nama}}</span>
						  <a href="{{URL::asset('hapusforum')}}/{{$data->id}}"><i class="material-icons right red-text text-darken-1" title="Hapus komentar anda?">close</i></a>
						  <p><span class="font-kecil blue-text">{{$data->created_at}}</span> <br>
						     "{{$data->forum}}"
						  </p>
						</li>
					</ul>
					@endforeach	
				@else
					@foreach($data as $data)
					<ul class="collection">
						@if(Auth::User()->nama == $data->nama)
						<li class="collection-item avatar blue lighten-4">
						  <img onmousedown="return false" oncontexmenu="return false" onselectstart="return false" src="{{URL::asset('foto')}}/{{$data->foto}}" alt="" class="circle">
						  <span class="title">{{$data->nama}}</span>
						  <a href="{{URL::asset('hapusforum')}}/{{$data->id}}"><i class="material-icons right red-text text-darken-1" title="Hapus komentar anda?">close</i></a>
						  <p><span class="font-kecil blue-text">{{$data->created_at}}</span> <br>
						     "{{$data->forum}}"
						  </p>
						</li>
						@else
						<li class="collection-item avatar blue lighten-1 white-text">
						  <img onmousedown="return false" oncontexmenu="return false" onselectstart="return false" src="{{URL::asset('foto')}}/{{$data->foto}}" alt="" class="circle">
						  <span class="title">{{$data->nama}}</span>
						  <p><span class="font-kecil white-text">{{$data->created_at}}</span> <br>
						     "{{$data->forum}}"
						  </p>
						</li>
						@endif
					</ul>
					@endforeach	
				@endif
			</div>
		</div>
		<!-- </div>
		<span class="red-text text-lighten-1">*) Ket. gunakan forum ini untuk keperluan tugas</span>
	</div> -->
</div>
</body>
@stop
</html>