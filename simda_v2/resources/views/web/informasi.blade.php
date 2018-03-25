<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title></title>
</head>
@section('web.konten')
<body>
	<img src="{{URL::asset('gambar/header.png')}}" style="width:100%; height:30px;">
  	<div class="col s12">
    <div class="row">
      <div class="col s12 m4 l3">

        <div class="card">
        <div class="grey-text text-darken-2 center-align judul-slide-informasi">AMBALAN MERAH PUTIH 02.448 - <span class="red-text">02.449</span></div>
          <div class="card-image">
            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="{{URL::asset('gambar/satu.JPG')}}"> <!-- random image -->
                </li>
                <li>
                  <img src="{{URL::asset('gambar/dua.JPG')}}"> <!-- random image -->
                </li>
                <li>
                  <img src="{{URL::asset('gambar/tiga.JPG')}}"> <!-- random image -->
                </li>
                <li>
                  <img src="{{URL::asset('gambar/empat.JPG')}}"> <!-- random image -->
                </li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <p>Kami adalah organisasi Pramuka Ambalan Merah Putih 02.448 - <span class="red-text text-darken-2">02.449</span> dari pangkalan SMK WIKRAMA Kota Bogor.</p>
          </div>
        </div>

        <div class="card">
          <div class="card-content green darken-1 white-text center-align">PENGUMUMAN TERBARU</div>
        </div>

        <div class="card blue-grey lighten-4">
          <div class="card-content">
            <img src="{{URL::asset('gambar/Hendy Alfarisi.JPG')}}" alt="" class="circle foto-post-informasi">
            <span class="title nama-post-informasi">Hendy Alfarisi</span>
            <p class="blue-text waktu-post-informasi">Post | 2 Oktober 2015</p>
          </div>
          <div class="card-content">
            <p>Kami adalah organisasi Pramuka Ambalan Merah Putih 02.448 - <span class="red-text text-darken-2">02.449</span> dari pangkalan SMK WIKRAMA Kota Bogor.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m8 l9">
        <div class="row">

          <div class="col s4">
            <div class="card blue-grey lighten-5">
              <div class="card-content">
                <div class="card-content">
                  <img src="{{URL::asset('gambar/Hendy Alfarisi.JPG')}}" alt="" class="circle foto-post-informasi">
                  <span class="title nama-post-informasi">Hendy Alfarisi</span>
                  <p class="blue-text waktu-post-informasi">Post | 2 Oktober 2015</p>
                </div>
              </div>
              <div class="card-content">
                <p>Kami adalah organisasi Pramuka Ambalan Merah Putih 02.448 - <span class="red-text text-darken-2">02.449</span> dari pangkalan SMK WIKRAMA Kota Bogor.</p>
              </div>
            </div>
          </div>

          <div class="col s4">
            <div class="card blue-grey lighten-5">
              <div class="card-content">
                <div class="card-content">
                  <img src="{{URL::asset('gambar/Hendy Alfarisi.JPG')}}" alt="" class="circle foto-post-informasi">
                  <span class="title nama-post-informasi">Hendy Alfarisi</span>
                  <p class="blue-text waktu-post-informasi">Post | 2 Oktober 2015</p>
                </div>
              </div>
              <div class="card-content">
                <p>Kami adalah organisasi Pramuka Ambalan Merah Putih 02.448 - <span class="red-text text-darken-2">02.449</span> dari pangkalan SMK WIKRAMA Kota Bogor.</p>
              </div>
            </div>
          </div>

          <div class="col s4">
            <div class="card blue-grey lighten-5">
              <div class="card-content">
                <div class="card-content">
                  <img src="{{URL::asset('gambar/Hendy Alfarisi.JPG')}}" alt="" class="circle foto-post-informasi">
                  <span class="title nama-post-informasi">Hendy Alfarisi</span>
                  <p class="blue-text waktu-post-informasi">Post | 2 Oktober 2015</p>
                </div>
              </div>
              <div class="card-content">
                <p>Kami adalah organisasi Pramuka Ambalan Merah Putih 02.448 - <span class="red-text text-darken-2">02.449</span> dari pangkalan SMK WIKRAMA Kota Bogor.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  	</div>
</body>
@stop
</html>