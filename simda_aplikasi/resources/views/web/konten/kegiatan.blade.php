<!DOCTYPE html>
<html>
<head>
	<title>Ambalan | Merah Putih Jaya</title>
	<link href="{{URL::asset('font.css')}}" rel="stylesheet">
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{URL::asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="top">
<script type="text/javascript" src="{{URL::asset('ajax.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('map.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('attribute.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('materialize/js/materialize.min.js')}}"></script>
@include('web.menu')
<div class="row">
  <img src="{{URL::asset('gambar/slide.jpg')}}" class="slide-kegiatan">
  <div class="container">
    <div class="col s12 batas-slider">
      @include('web.menuIcon')
    </div>
  </div>

  <div class="col s12">
    <div class="col s12">
      <div class="kotak-salam white-text blue">Satyaku kudarmakan Darmaku kubaktikan. Salam Pramuka...</div>
    </div>
  </div>

  <div class="col s12">
    <div class="col s12 m4 l3">
      <div class="col hide-on-small-only m3 l2">
      <ul class="section table-of-contents">
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#structure">Structure</a></li>
        <li><a href="#initialization">Intialization</a></li>
      </ul>
    </div>
    </div>
    <div class="col s12 m8 l9">
      <div class="col s12">
        <div class="card section scrollspy" id="introduction">
          <div class="card-content">
            <span class="card-tittle">Kegiatan</span>
            <p>
              I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.
            </p>
          </div>
          <div class="card-action"></div>
        </div>

        <div class="card section scrollspy" id="structure">
          <div class="card-content">
            <span class="card-tittle">Kegiatan</span>
            <p>
              I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.
            </p>
          </div>
          <div class="card-action"></div>
        </div>

        <div class="card section scrollspy" id="initialization">
          <div class="card-content">
            <span class="card-tittle">Kegiatan</span>
            <p>
              I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.
            </p>
          </div>
          <div class="card-action"></div>
        </div>
      </div>
    </div>
  </div>

</div>
</body>
<footer class="page-footer grey lighten-3 .other-class">
  <div class="row">
    <div class="grid-example col s12 m6">
      @include('web.komentar')
    </div>
    <div class="grid-example col s12 m6">
      
      <div class="blue-text">SMK WIKRAMA Kota Bogor</div>
      <div class="gray-text">Jln. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor, Indonesia 16720</div>
      <br>
      <div class="chip">
        <i class="material-icons green-text">language</i>
        www.smkwikrama.net
      </div>
      <div class="chip">
        <i class="material-icons blue-text">question_answer</i>
        ambalanmerahputih@gmail.com
      </div>
      <div class="chip">
        <i class="material-icons red-text">contacts</i>
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