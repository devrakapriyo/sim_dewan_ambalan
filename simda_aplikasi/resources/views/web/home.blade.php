<!DOCTYPE html>
<html>
@extends('web.index')
<head>
	<title>Home | Merah Putih Jaya</title>
</head>
@section('web.konten')
<body>
@include('web.konten.slider')
  <div class="container">
    <div class="col s12 batas-slider">
      @include('web.konten.menuIcon')
    </div>
  </div>

  <div class="col s12">
    <div class="col s12">
      <div class="kotak-salam white-text blue">Satyaku kudarmakan Darmaku kubaktikan. Salam Pramuka...</div>
    </div>
  </div>

  <div class="col s12">
    <div class="col s12 m4 l3">
      @include('web.konten.visimisi')
    </div>
    <div class="col s12 m8 l9">
      <div class="">
        @include('web.konten.anggota')
      </div>
    </div>
  </div>

  <div class="col s12">
    <div class="col s12">
      <div class="kotak-kegiatan white-text red">Kegiatan dan informasi Ambalan Merah Putih</div>
    </div>
    @include('web.konten.informasi')
  </div>

  <div class="col s12">
      <div class="col s12 m8 l9">
        <!-- @include('web.konten.sandiambalan') -->
        <div class="card">
          <div class="card-content">
            <div class="card-title red-text">
              Aktivitas Ambalan
              <i class="material-icons blue-text right">subject</i>
            </div>
            <blockquote><div class="font-sedang grey-text">" {{$aktivitas->judul}} "</div></blockquote>
            <span class="blue-text font-kecil">AKTIVITAS BARU | POST {{substr($aktivitas->created_at, 0, 10)}}</span>
            {!!$aktivitas->aktivitas!!} <a target="_blank" href="{{URL::asset('lihataktivitas')}}/{{Crypt::encrypt($aktivitas->id_aktivitas)}}">LIHAT FOTO AKTIVITAS "{{$aktivitas->judul}}"</a>
          </div>
          <div class="card-action">
          <blockquote><div class="font-sedang grey-text">Aktivitas Utama Ambalan</div></blockquote>
          <div class="row"></div>
          @foreach($dataaktivitas as $dataaktivitas)
            <div class="col s2">
              <img src="{{URL::asset('gambar')}}/{{$dataaktivitas->foto}}" width="100" height="100">
              <p style="font-size: 10px; color: #333;">{{$dataaktivitas->judul}}</p>
            </div>
          @endforeach
          <div class="col s12 center"><a class="black-text" href="{{URL::asset('aktivitasambalan')}}">---Lihat Semua---</a></div>
          <div class="row"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m4 l3">
        @include('web.konten.pembinalatih')
        <div class="row"></div>
        <div class="row">
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><i class="material-icons">turned_in</i>Sandi ambalan</div>
            <div class="collapsible-body">
              <div class="center-align">
              <b class="font-kecil">Oleh Rusnam Anailuj Pembina Gudep 02.448 – 02.449</b>
              <p class="font-kecil">KAMI BERASAL DARI DAMAI
              TERLAHIR DENGAN ALAM KEHIDUPAN
              YANG SATYANYA SELALU DIKENANG

              DI SINI KAMI LAHIR
              DI SINI KAMI BERDIRI
              MENJADI JATI DIRI PENEGAK SEJATI

              MERAH PUTIH AMBALANKAMI
              KAMI TERBALUT DALAM KESUCIAN
              KAMI TERLAHIR PENUH KEBERANIAN

              PRAMUKA ITU MANUSIAWI
              MENJADIKAN KESATRIA SEJATI TANPA PUTUS ASA
              BERKATA DAN BEKERJA BUKANLAH HAMPA
              SEMUANYA ADALAH DARI HATI DAN JIWA

              TA, CI, PA, PA, RE, RA, HE, DI, BER, SU
              SEPULUH PENGGALAN ARTI YANG BERMAKNA
              KAMI PUN MELANGKAH KARENANYA

              DASADARMA DAN TRISATYA
              SABDA KESATRIA TUNAS KELAPA
              PINTAR, CERDAS DAN BERKEPRIBADIAN LUHUR

              KITA RANGKUL ANGAN-ANGAN
              GAPAI PRESTASI YANG PENUH BERARTI
              BERSATULAH BERSATU TINGGI RENDAH JADI SATU
              TERUS DAN KOBARKAN “AYO MENANAM ...” 
              UNTUK AMBALANKU</p>
              <p>MERAH PUTIH JAYA</p>
              </div>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">view_column</i>Tri satya</div>
            <div class="collapsible-body">
              <ul style="margin-left: 5px;" class="font-kecil">
                <li class="center"><b>Demi kehormatanku aku berjanji akan bersungguh-sungguh</b></li>
                <li>1. Menjalankan kewajibanku terhadap Tuhan dan Negara Kesatuaan Republik Indonesia.</li>
                <li>2. Menolong sesama hidup dan mempersiapkan diri membangun masyarakat.</li>
                <li>3. Menepati Dasa Dharma.</li>
              </ul>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">toc</i>Dasa darma</div>
            <div class="collapsible-body">
              <ul style="margin-left: 5px;" class="font-kecil">
                <li>1. Takwa kepada tuhan yang maha esa</li>
                <li>2. Cinta alam dan kasih sayang sesama manusia</li>
                <li>3. Patriot yang sopan dan kesatria</li>
                <li>4. Patuh dan bermusyawarah</li>
                <li>5. Rela menolong dan tabah</li>
                <li>6. Rajin terampil dan gembira</li>
                <li>7. Hemat cermat dan bersahaja</li>
                <li>8. Disiplin berani dan setia</li>
                <li>9. Bertanggung jawan dan dapat dipercaya</li>
                <li>10. Suci dan pikiran perkataan dan perbuatan</li>
              </ul>
            </div>
          </li>
        </ul>
        </div>
      </div>
  </div>
</body>
@stop
</html>