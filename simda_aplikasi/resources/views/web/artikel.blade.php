<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title>Artikel | Merah Putih Jaya</title>
</head>
@section('web.konten')
<body>
<img src="{{URL::asset('gambar/header.png')}}" style="width:100%; height:30px;">
  
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

        <div class="card">
          <div class="card-content red darken-1 white-text center-align">ARTIKEL TERBARU</div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="{{URL::asset('gambar')}}/{{$artikel->gambar}}">
          </div>
          <div class="card-content">
            <input type="hidden" value="{{$ubah = substr($artikel->artikel, 0, 600)}}">
            <p>
              <span class="font-sedang grey-text text-darken-1">{{$artikel->judul}}</span>
              <br>
              <span class="font-kecil blue-text text-darken-2">Post | {{$artikel->created_at}}</span>
              <br>
              <span class="grey-text text-darken-4">{{strip_tags($ubah)}}</span>
          	<p>
            <a href="{{URL::asset('bacaartikel')}}/{{Crypt::encrypt($artikel->id)}}">Baca lebih lanjut...</a></p>
          </div>
        </div>
      </div>

      <div class="col s12 m8 l9">
        <div class="row kotak-luar">
          @foreach($data as $data)
          <div class="col s4 kotak-dalam">
            <div class="card">
              <div class="card-image">
                <img src="{{URL::asset('gambar')}}/{{$data->gambar}}">
              </div>
              <div class="card-content">
                <input type="hidden" value="{{$ubah = substr($data->artikel, 0, 500)}}">
                <p>
                  <span class="font-sedang grey-text text-darken-1">{{$data->judul}}</span>
                  <br>
                  <span class="font-kecil blue-text text-darken-2">Post | {{$data->created_at}}</span>
                  <br>
                  <span class="grey-text text-darken-4">{{strip_tags($ubah)}}</span>
                <p>
                <a href="{{URL::asset('bacaartikel')}}/{{Crypt::encrypt($data->id)}}">Baca lebih lanjut...</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">
          {!! $page->render() !!}
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
var elem = document.querySelector('.kotak-luar');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.kotak-dalam',
  columnWidth: '.kotak-dalam',
  percentPosition: true
});
</script>
@stop
</html>