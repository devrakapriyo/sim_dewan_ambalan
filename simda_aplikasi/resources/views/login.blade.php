<!DOCTYPE html>
<html>
<head>
	<title>Login | Admin Ambalan</title>
	<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('attribute.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('materialize/js/materialize.min.js')}}"></script>
</head>

<link href="{{URL::asset('font.css')}}" rel="stylesheet">
<link href="{{URL::asset('style.css')}}" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{URL::asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<body class="light-blue lighten-5">
<form method="post" action="{{URL::asset('login')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row">
		<div class="col s12">
			<div class="col s3"><p></p></div>
			<div class="col s6">
				@if(Session::has('gagal'))
				<div class="chip" title="Klick jika ingin di hilangkan">
						<i class="material-icons green-text">close</i>
						{{ Session::get('gagal') }}
				</div>
				@endif
				<div class="card">
					<div class="card-content">
						<span class="card-title grey-text">LOGIN</span>
					</div>
					<div class="card-action">
						<div class="input-field col s12">
				          	<input name="nomer_induk" placeholder="Nomer induk" id="first_name" type="text" class="validate">
				        </div>
				        <div class="input-field col s12">
				          	<input name="password" placeholder="Password" id="first_name" type="password" class="validate">
				        </div>
						<button class="btn waves-effect waves-light cyan darken-1" type="submit" name="action">Login
						    <i class="material-icons right">lock</i>
						</button>
					</div>
				</div>
			</div>
			<div class="col s3"><p></p></div>
		</div>
	</div>
</form>
</body>
</html>