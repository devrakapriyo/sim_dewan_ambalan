    <div class="row">
      <div class="col s4">
        <div class="card light-blue darken-2">
          <div class="card-content white-text">
            <span class="card-title white-text"><i class="material-icons right">today</i>Informasi</span>
            <p class="white-text text-darken-1">{!!$informasi->informasi!!}</p>
          </div>
          <div class="card-action white-text">
          {{$informasi->nama}}
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card cyan darken-1">
          <div class="card-content">
            <span class="card-title white-text"><i class="material-icons right">view_agenda</i>Agenda</span>
            <p class="white-text text-darken-1">{!!$agenda->agenda!!}</p>
          </div>
          <div class="card-action white-text">
          {{$agenda->nama}}
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card cyan darken-2">
          <div class="card-content">
            <span class="card-title white-text"><i class="material-icons right">mail</i>Pesan</span>
            <p class="white-text text-darken-1">{!!$pesan->pesan!!}</p>
          </div>
          <div class="card-action white-text">
          {{$pesan->nama}}
          </div>
        </div>
      </div>
    </div>