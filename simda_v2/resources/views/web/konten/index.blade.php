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
  @yield('content')
</body>
</html>