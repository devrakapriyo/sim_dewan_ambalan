<div class="card">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s3"><a class="active font-kecil" href="#test9">P. Latih Putra</a></li>
      <li class="tab col s3"><a class="font-kecil" href="#test10">P. Latih Putri</a></li>
    </ul>
  </div>
  <div id="test9" class="col s12">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="{{URL::asset('gambar')}}/{{$web->foto_pembina_putra}}">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Pembina latih<i class="material-icons right">more_vert</i></span>
        <p><a href="#">{{$web->nama_pembina_putra}}</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">Pembina latih<i class="material-icons right">close</i></span>
        <p>{{$web->kalimat_pembina_putra}}</p>
      </div>
    </div>
  </div>
  <div id="test10" class="col s12">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="{{URL::asset('gambar')}}/{{$web->foto_pembina_putri}}">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Pembina latih<i class="material-icons right">more_vert</i></span>
        <p><a href="#">{{$web->nama_pembina_putri}}</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">Pembina latih<i class="material-icons right">close</i></span>
        <p>{{$web->kalimat_pembina_putri}}</p>
      </div>
    </div>
  </div>
</div>