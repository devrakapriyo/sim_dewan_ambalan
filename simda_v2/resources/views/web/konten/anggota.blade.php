  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a href="#test1">Ketua</a></li>
            <li class="tab col s3"><a href="#test2">Pradana</a></li>
            <li class="tab col s3"><a href="#test3">Krani</a></li>
            <li class="tab col s3"><a href="#test4">Judat</a></li>
            <li class="tab col s3"><a href="#test5">Juang</a></li>
          </ul>
        </div>
        <div id="test1">
          <div class="col s12">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_mabigus}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_mabigus}}</span>
                <p class="blue-text">Mabigus SMK WIKRAMA Bogor</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$web->id}}">
                  <a href="{{URL::asset('favorit')}}" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s4">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_pembina_putra}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka Cecep Erik Kurniawan S, Ag.">
                <span class="font-sedang"><b>{{$web->nama_pembina_putra}}</b></span>
                <p class="blue-text font-kecil">Pembina SMK WIKRAMA Bogor</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s4">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_pembina_putri}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka Reza Sukma">
                <span class="font-sedang"><b>{{$web->nama_pembina_putri}}</b></span>
                <p class="blue-text font-kecil">Pembina SMK WIKRAMA Bogor</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s4">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_pembina_latih}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka Reza Sukma">
                <span class="font-sedang"><b>{{$web->nama_pembina_latih}}</b></span>
                <p class="blue-text font-kecil">Pembina Latih SMK WIKRAMA Bogor</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
        </div>

        <div id="test2">
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_pradana_putra}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_pradana_putra}}</span>
                <p class="blue-text">Pradana Putra</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_pradana_putri}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_pradana_putri}}</span>
                <p class="blue-text">Pradana Putri</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
        </div>

        <div id="test3">
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_krani_putra}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_krani_putra}}</span>
                <p class="blue-text">Krani Putra</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_krani_putri}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_krani_putri}}</span>
                <p class="blue-text">Krani Putri</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
        </div>

        <div id="test4">
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_judat_putra}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_judat_putra}}</span>
                <p class="blue-text">Judat Putra</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_judat_putri}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_judat_putri}}</span>
                <p class="blue-text">Judat Putri</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
        </div>

        <div id="test5">
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_juang_putra}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_juang_putra}}</span>
                <p class="blue-text">Juang Putra</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
          <div class="col s6">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="{{URL::asset('gambar')}}/{{$web->foto_juang_putri}}" alt="" class="materialboxed responsive-img circle" data-caption="Ka mabigus Iin Mulyani S, Si.">
                <span class="title">{{$web->nama_juang_putri}}</span>
                <p class="blue-text">Juang Putri</p>
                <!-- <form method="post" action="{{URL::asset('favorit')}}">
                  <a href="" class="secondary-content" title="Beri favorit"><i class="material-icons yellow-text">grade</i></a>
                </form> -->
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="data-anggota center-align"><u><a href="{{URL::asset('anggotada')}}" class="red-text text-darken-1">Data anggota Dewan Ambalan {{$tahun}}</a></u></div> -->
      </div>
    </div>
  </div>