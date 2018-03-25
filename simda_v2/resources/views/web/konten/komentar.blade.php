      <div class="card">
        <div class="card-content">
          <span class="card-title black-text">Kontak kami</span>
          <p>Berikan komentar & pesan anda, untuk kemajuan amabalan kami</p>
        </div>
        <div class="card-action">
          <form method="POST" action="{{URL::asset('komentar')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="input-field col s12">
              <i class="material-icons prefix left green-text">person_pin</i>
              <input name="nama" id="icon_prefix" type="text" class="validate nama">
              <label for="icon_prefix">Nama lengkap</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix left blue-text">email</i>
              <input name="email" id="icon_prefix" type="email" class="validate email">
              <label for="icon_prefix">Email</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix left gray-text">message</i>
              <textarea name="komentar" id="icon_prefix2" class="materialize-textarea komentar"></textarea>
              <label for="icon_prefix2">Komentar</label>
            </div>
            <button class="btn waves-effect waves-light blue save" type="submit" name="action" onclick="Materialize.toast('Pesan terkirim', 4000)">Kirim
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>