<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title></title>
</head>
@section('web.konten')
<body>
	<div class="col s12">
    <div class="row">
      <div class="col s12 m4 l3">

        <div class="card">
          <div class="card-image">
            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_satu}}"> <!-- random image -->
                </li>
                <li>
                  <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_dua}}"> <!-- random image -->
                </li>
                <li>
                  <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_tiga}}"> <!-- random image -->
                </li>
                <li>
                  <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_empat}}"> <!-- random image -->
                </li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <p>Mari baca artikel tentang kepramukaan mulai dari teknik, materi, dan lain-lain. Dijamin kalau tidak baca nyesel.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m8 l9">
        <div class="col s12 m8 l9">
          <div class="card">
            <div class="card-content light-blue darken-3 white-text">
              <span class="card-title">{{$data->judul}}</span>
              <p class="white-text font-kecil">{{$data->admin}} | {{$data->created_at}}</p>
            </div>
            <div class="card-action">
              <div class="row">
                {!! $data->artikel !!}
              </div>
              <div class="row">
                <p><a href="{{URL::asset('artikel')}}" class="blue-text text-lighten-1">Kembali...</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l3">
        <p>Artikel terbaru</p>
          @foreach($artikel as $artikel)
          <a href="{{URL::asset('bacaartikel')}}/{{Crypt::encrypt($artikel->id)}}">
          <ul class="collection">
            <li class="collection-item avatar">
              <img src="{{URL::asset('gambar')}}/{{$artikel->gambar}}" alt="" class="circle">
              <span class="title grey-text text-darken-1">{{$artikel->judul}}</span>
            </li>
          </ul>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>
@stop
</html>