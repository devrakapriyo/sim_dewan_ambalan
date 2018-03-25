<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('attribute.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('materialize/js/materialize.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('.collapsible').collapsible({
		      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		    });
		});
	</script>
</head>

<link href="{{URL::asset('font.css')}}" rel="stylesheet">
<link href="{{URL::asset('style.css')}}" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{URL::asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<body class="grey lighten-4">
<div class="navbar-fixed">
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a href="{{URL::asset('/')}}" id="logo-container" class="brand-logo left blue-text batas-kiri"><img src="{{URL::asset('gambar/logo.jpg')}}" class="logo"></a>
    </div>
</nav>
</div>
<div class="row">
	<div class="col s12 m4 l3">
		<ul class="collection">
		  <li class="collection-item avatar">
		      <img onmousedown="return false" oncontexmenu="return false" onselectstart="return false" src="{{URL::asset('foto')}}/{{Auth::User()->foto}}" alt="" class="circle">
		      <a href="{{URL::asset('ubahbiodata')}}" title="Klick untuk memperbarui biodata {{Auth::User()->nama}}"><span class="title blue-grey-text text-darken-2">{{Auth::User()->nama}}</span></a>
		      <p class="blue-text">{{Auth::User()->jabatan}} <br>
		        <span class="green-text">
		          <i class="material-icons right green-text">notifications</i>Online
		        </span>
		      </p>
		    </li>
		</ul>
		<ul class="collapsible collection with-header" data-collapsible="accordion">
		  	<li class="collection-header white-text blue-grey darken-3"><h5>Menu</h5></li>
		  	@if(Auth::User()->jabatan == "Juru kegiatan")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenkegiatan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right deep-purple-text text-lighten-1">web</i>Kegiatan</a>
		  	<a href="{{URL::asset('aktivitas')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text text-darken-1">toc</i>Aktivitas Ambalan</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Admin")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('rekomendasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right red-text">share</i>Rekomendasi komentar</a>
		  	<a href="{{URL::asset('kontenweb')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right teal-text text-lighten-3">panorama</i>Konten web</a>
		  	<a href="{{URL::asset('aktivitas')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text text-darken-1">toc</i>Aktivitas Ambalan</a>
		  	<a href="{{URL::asset('datapembinaan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Pembinaan</a>
		  	<a href="{{URL::asset('juang')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Keuangan Kas Ambalan</a>
		  	<a href="{{URL::asset('krani')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Krani</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Mabigus")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('rekomendasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right red-text">share</i>Rekomendasi komentar</a>
		  	<a href="{{URL::asset('kontenweb')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right teal-text text-lighten-3">panorama</i>Konten web</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('datapembinaan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Pembinaan</a>
		  	<a href="{{URL::asset('juang')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Keuangan Kas Ambalan</a>
		  	<a href="{{URL::asset('krani')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Krani</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Pembina")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('rekomendasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right red-text">share</i>Rekomendasi komentar</a>
		  	<a href="{{URL::asset('kontenweb')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right teal-text text-lighten-3">panorama</i>Konten web</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('datapembinaan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Pembinaan</a>
		  	<a href="{{URL::asset('juang')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Keuangan Kas Ambalan</a>
		  	<a href="{{URL::asset('krani')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Krani</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Pradana")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Judat")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('pembinaan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Pembinaan</a>
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Juang")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('juang')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Keuangan Kas Ambalan</a>
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Krani")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('krani')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Krani</a>
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Juang")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Teknik kepramukaan")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenkegiatan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right deep-purple-text text-lighten-1">web</i>Kegiatan</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Juru lapangan")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('aktivitas')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text text-darken-1">toc</i>Aktivitas Ambalan</a>
		  	<a href="{{URL::asset('kontenkegiatan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right deep-purple-text text-lighten-1">web</i>Kegiatan</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Pembinaan")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<a href="{{URL::asset('pembinaan')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Data Pembinaan</a>
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Kerohanian")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Peralatan")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Humas")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">call</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@elseif(Auth::User()->jabatan == "Kesakaan")
		  	<a href="{{URL::asset('dashboard')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-1">dashboard</i>Dashboard Admin</a>
		  	<a href="{{URL::asset('admin')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right cyan-text text-darken-2">assignment_ind</i>Admin</a>
		  	<a href="{{URL::asset('inputpeserta')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">supervisor_account</i>Peserta {{Auth::User()->sangga}}</a>
		  	<a href="{{URL::asset('informasi')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right blue-grey-text text-darken-2">mail</i>Informasi</a>
		  	<a href="{{URL::asset('kontenartikel')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right pink-text text-darken-1">speaker_notes</i>Artikel</a>
		  	<!-- <a href="{{URL::asset('rekomendasipasus')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right orange-text">verified_user</i>Penerimaan anggota pasus</a> -->
		  	<a href="{{URL::asset('#password')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right green-text text-darken-1">loop</i>Perbarui password</a>
		  	<a href="{{URL::asset('reportbug')}}" class="collection-item grey-text text-darken-2 modal-trigger"><i class="material-icons right red-text text-darken-3">documen</i>Error program</a>
		  	<a href="{{URL::asset('logout')}}" class="collection-item grey-text text-darken-2"><i class="material-icons right grey-text text-darken-5">settings_power</i>Logout</a>
		  	@endif
		</ul>
	</div>
	<form method="post" action="{{URL::asset('baruipassword')}}">
	<div id="password" class="modal">
	    <div class="modal-content">
	      	<h4>Password</h4>
	      	<input type="hidden" name="id" value="{{Auth::User()->id}}">
	      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	      		<div class="input-field col s12">
				    <input name="password" value="" id="first_name input_text" type="text" class="validate" length="10">
					<label class="red-text text-lighten-2">Perbarui password anda</label>
				</div>
	    </div>
	    <div class="modal-footer">
	      <button class="modal-action modal-close waves-effect waves-green btn green white-text">Perbarui</button>
	    </div>
	</div>
	</form>
	<div class="col s12 m8 l9">
		@yield('admin.konten')
	</div>
</div>
</body>
<footer>
	<div class="row center-align red-text text-darken-2">Copyright 2016 &copy ambalanmerahputih.com | Developer by Raka Priyo Rachmanda</div>
</footer>
</html>