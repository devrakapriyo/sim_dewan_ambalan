<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{URL::asset('font.css')}}" rel="stylesheet">
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{URL::asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="top grey lighten-4">
<script type="text/javascript" src="{{URL::asset('ajax.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('attribute.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('materialize/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('masonry.js')}}"></script>
@include('web.konten.menu')
<div class="row">
  @yield('web.konten')
</div>
</body>
<footer class="page-footer grey lighten-4 .other-class">
  <div class="row">
    <div class="grid-example col s12 m6">
      @include('web.konten.komentar')
    </div>
    <div class="grid-example col s12 m6">
      <div class="kotak-komentar grey lighten-2">
        <div class="judul-komentar white">
          <span class="judul red-text">Pesan</span>
          <!-- <div class="chip blue lighten-3 white-text">{{$jumlah}}</div> -->
        </div>
        <div class="isi-komentar">
          @include('web.konten.isikomentar')
        </div>
      </div>
      <div class="blue-text">SMK WIKRAMA Kota Bogor</div>
      <div class="gray-text">Jln. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor, Indonesia 16720</div>
      <br>
      <div class="chip">
        www.smkwikrama.net
      </div>
      <div class="chip">
        ambalanmerahputih@gmail.com
      </div>
      <div class="chip">
        (0251) 824-2411
      </div>
    </div>
  </div>
  <div class="footer-copyright red darken-3 white-text">
    <div class="container">
    Copyright &copy 2015 ambalanmerahputih.com | Raka Priyo Rachmanda
    </div>
  </div>
</footer>
</html>