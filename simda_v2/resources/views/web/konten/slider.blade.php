<SCRIPT type="text/javascript">
if (typeof document.onselectstart!="undefined") {
document.onselectstart=new Function ("return false");
}
else{
document.onmousedown=new Function ("return false");
document.onmouseup=new Function ("return true");
}
</SCRIPT>
<div class="slider">
    <ul class="slides">
      <li>
        <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_satu}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>{{$web->judul_slide_satu}}</h3>
          <h5 class="light white-text">{{$web->kalimat_slide_satu}}</h5>
        </div>
      </li>
      <li>
        <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_dua}}"> <!-- random image -->
        <div class="caption left-align">
          <h3>{{$web->judul_slide_dua}}</h3>
          <h5 class="light white-text">{{$web->kalimat_slide_dua}}</h5>
        </div>
      </li>
      <li>
        <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_tiga}}"> <!-- random image -->
        <div class="caption right-align">
          <h3>{{$web->judul_slide_tiga}}</h3>
          <h5 class="light white-text">{{$web->kalimat_slide_tiga}}</h5>
        </div>
      </li>
      <li>
        <img src="{{URL::asset('gambar')}}/{{$web->foto_slide_empat}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>{{$web->judul_slide_empat}}</h3>
          <h5 class="light white-text">{{$web->kalimat_slide_empat}}</h5>
        </div>
      </li>
    </ul>
  </div>