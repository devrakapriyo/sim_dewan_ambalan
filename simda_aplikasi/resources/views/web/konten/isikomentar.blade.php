<table class="table-komentar">
@forelse($komentar as $komentar)
  <tr>
    <td>
      <div class="komentar white gray-text">
      <div class="nama-komentar"><span class="black-text">{{$komentar->nama}}</span> | <span class="blue-text">{{$komentar->created_at}}</span></div>
        <div class="isi-pesan">
        {{strip_tags($komentar->komentar)}}
        </div>
      </div>
    </td>
  </tr>
@empty
  <tr>
    <td colspan="center-align">
      <div class="valign-wrapper">
        <h5 class="valign">Maaf, tidak ada pesan...</h5>
      </div>
    </td>
  </tr>
@endforelse
</table>