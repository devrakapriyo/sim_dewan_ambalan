<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Redirect;
use Auth;
use Hash;
use DB;

use App\User;
use App\forum;
use App\komentar;
use App\rekomendasikomentar;
use App\rekomendasipasus;
use App\informasi;
use App\agenda;
use App\pesan;
use App\web;
use App\peserta;
use App\absensipeserta;
use App\kaspeserta;
use App\jugit;
use App\kegiatanpta;
use App\kegiatanbantara;
use App\kegiatan;
use App\artikel;
use App\pembinaan;
use App\aktivitas;
use App\galeri;
use App\reportbug;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::attempt(['nomer_induk' => Input::get('nomer_induk'), 'password' => Input::get('password')])){
            $auth = Auth::User()->id;
            return Redirect::to('dashboard')
                ->with('auth', $auth);
        }else{
            return Redirect::back()
                ->with('gagal', 'Maaf username dan password anda tidak cocok');
        }
    }

    public function komentar(){
        $simpan = new komentar;
        $simpan->nama = Input::get('nama');
        $simpan->email = Input::get('email');
        $simpan->komentar = Input::get('komentar');
        $simpan->ket = "belum";
        $simpan->save();

        return Redirect::back();
    }

    public function baruiadmin(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'nomer_induk' => Input::get('nomer_induk'),
                    'nama' => Input::get('nama'),
                    'jk' => Input::get('jk'),
                    'tempat_lahir' => Input::get('tempat_lahir'),
                    'ttl' => Input::get('ttl'),
                    'agama' => Input::get('agama'),
                    'rombel' => Input::get('rombel'),
                    'alamat' => Input::get('alamat'),
                    'sangga' => Input::get('sangga'),
                    'rayon' => Input::get('rayon'),
                    'ambalan' => Input::get('ambalan')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'nomer_induk' => Input::get('nomer_induk'),
                    'nama' => Input::get('nama'),
                    'jk' => Input::get('jk'),
                    'tempat_lahir' => Input::get('tempat_lahir'),
                    'ttl' => Input::get('ttl'),
                    'agama' => Input::get('agama'),
                    'rombel' => Input::get('rombel'),
                    'alamat' => Input::get('alamat'),
                    'sangga' => Input::get('sangga'),
                    'rayon' => Input::get('rayon'),
                    'ambalan' => Input::get('ambalan'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'foto';
                $file->move($path,$file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruipassword(){
        $barui = User::where('id', '=', Input::get('id'))
            ->update([
                'password' => Hash::make(Input::get('password'))
            ]);

        return Redirect::to('dashboard');
    }

    public function forum(){
        $simpan = new forum;
        $simpan->nama = Input::get('nama');
        $simpan->foto = Input::get('foto');
        $simpan->forum = Input::get('forum');
        $simpan->save();

        return Redirect::back();
    }

    public function admin()
    {
        if(Input::file('foto') == null ){
            $simpan = new User();
            date_default_timezone_set("Asia/Jakarta");
            $simpan->nomer_induk = Input::get('nomer_induk');
            $simpan->nama = Input::get('nama');
            $simpan->favorit = "0";
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->jk = Input::get('jk');
            $simpan->tempat_lahir = Input::get('tempat_lahir');
            $simpan->ttl = Input::get('ttl');
            $simpan->agama = Input::get('agama');
            $simpan->alamat = Input::get('alamat');
            $simpan->rombel = Input::get('rombel');
            $simpan->rayon = Input::get('rayon');
            $simpan->sangga = Input::get('sangga');
            $simpan->ambalan = Input::get('ambalan');
            $simpan->jabatan = Input::get('jabatan');
            $simpan->admin = Input::get('admin');
            $simpan->foto = "user.png";
            $simpan->save();
        }else{
            $simpan = new User();
            date_default_timezone_set("Asia/Jakarta");
            $simpan->nomer_induk = Input::get('nomer_induk');
            $simpan->nama = Input::get('nama');
            $simpan->favorit = "0";
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->jk = Input::get('jk');
            $simpan->tempat_lahir = Input::get('tempat_lahir');
            $simpan->ttl = Input::get('ttl');
            $simpan->agama = Input::get('agama');
            $simpan->alamat = Input::get('alamat');
            $simpan->rombel = Input::get('rombel');
            $simpan->rayon = Input::get('rayon');
            $simpan->sangga = Input::get('sangga');
            $simpan->ambalan = Input::get('ambalan');
            $simpan->jabatan = Input::get('jabatan');
            $simpan->admin = Input::get('admin');
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'foto';
            $file->move($path,$file->getClientOriginalName());
        }

        $barui = DB::table('sangga')->where('sangga', Input::get('sangga'))
            ->update([
                'status' => "Sudah",
                'nis' => Input::get('nomer_induk')
            ]);

        return Redirect::back()
            ->with('sukses', 'Data terdaftar');
    }

    public function inputpeserta()
    {
        if(Input::file('foto') == null){
            $simpan = new peserta();
            date_default_timezone_set("Asia/Jakarta");
            $simpan->nis = Input::get('nis');
            $simpan->nama = Input::get('nama');
            $simpan->jk = Input::get('jk');
            $simpan->tempat_lahir = Input::get('tempat_lahir');
            $simpan->tgl_lahir = Input::get('tgl_lahir');
            $simpan->agama = Input::get('agama');
            $simpan->alamat = Input::get('alamat');
            $simpan->rombel = Input::get('rombel');
            $simpan->rayon = Input::get('rayon');
            $simpan->sangga = Auth::User()->sangga;
            $simpan->ambalan = Auth::User()->ambalan;
            $simpan->foto = "user.png";
            $simpan->save();
        }else{
            $simpan = new peserta();
            date_default_timezone_set("Asia/Jakarta");
            $simpan->nis = Input::get('nis');
            $simpan->nama = Input::get('nama');
            $simpan->jk = Input::get('jk');
            $simpan->tempat_lahir = Input::get('tempat_lahir');
            $simpan->tgl_lahir = Input::get('tgl_lahir');
            $simpan->agama = Input::get('agama');
            $simpan->alamat = Input::get('alamat');
            $simpan->rombel = Input::get('rombel');
            $simpan->rayon = Input::get('rayon');
            $simpan->sangga = Auth::User()->sangga;
            $simpan->ambalan = Auth::User()->ambalan;
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'foto';
            $file->move($path,$file->getClientOriginalName());
        }

        return Redirect::back()
            ->with('sukses', 'Data terdaftar');
    }

    public function absensipeserta(){
        $jumlah = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $date = date('Y-m-d');
        for($data = 0; $data < $jumlah; $data++){
            $simpan = new absensipeserta;
            $simpan->nis = Input::get('nis')[$data];
            $simpan->tgl_absen = $date;
            $simpan->keterangan = Input::get('keterangan')[$data];
            $simpan->save();
        }

        

        return Redirect::back()
            ->with('sukses', 'Absensi telah tersimpan');
    }

    public function kaspeserta(){
        $jumlah = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $date = date('Y-m-d');
        for($data = 0; $data < $jumlah; $data++){
            $simpan = new kaspeserta;
            $simpan->nis = Input::get('nis')[$data];
            $simpan->tgl_kas = $date;
            $simpan->kas = Input::get('kas')[$data];
            $simpan->save();
        }

        

        return Redirect::back()
            ->with('sukses', 'Kas telah tersimpan');
    }

    public function baruipeserta(){
        if(Input::file('foto') == null){
        $update = peserta::where('id', '=', Input::get('id'))
            ->update([
                'nis' => Input::get('nis'),
                'nama' => Input::get('nama'),
                'agama' => Input::get('agama'),
                'jk' => Input::get('jk'),
                'tempat_lahir' => Input::get('tempat_lahir'),
                'tgl_lahir' => Input::get('tgl_lahir'),
                'rombel' => Input::get('rombel'),
                'rayon' => Input::get('rayon'),
                'alamat' => Input::get('alamat')
            ]);
        }else{
        $update = peserta::where('id', '=', Input::get('id'))
            ->update([
                'nis' => Input::get('nis'),
                'nama' => Input::get('nama'),
                'agama' => Input::get('agama'),
                'jk' => Input::get('jk'),
                'tempat_lahir' => Input::get('tempat_lahir'),
                'tgl_lahir' => Input::get('tgl_lahir'),
                'rombel' => Input::get('rombel'),
                'rayon' => Input::get('rayon'),
                'alamat' => Input::get('alamat'),
                'foto' => Input::file('foto')->getClientOriginalName()
            ]);

            $file = Input::file('foto');
            $path = 'foto';
            $file->move($path,$file->getClientOriginalName());
        }

        return Redirect::back()
            ->with('sukses', 'Data telah di perbarui');
    }

    public function hapuspeserta($id){
        $hapus = peserta::find($id)->delete();
        return Redirect::back()
            ->with('hapus', 'Peserta telah terhapus');
    }

    public function hapusadmin($id){
        $hapus = User::find($id)->delete();
        return Redirect::back()
            ->with('berhasil', 'Data telah terhapus');
    }

    public function abaikanrekomendasi($id){
        $hapus = komentar::find($id)->delete();
        return Redirect::to('rekomendasi')
            ->with('abaikan', 'Komentar di abaikan');
    }

    public function hapusrekomendasi($id){
        $hapus = komentar::find($id)->delete();
        return Redirect::to('rekomendasi')
            ->with('hapus', 'Komentar telah di hapus');
    }

    public function rekomendasikomentar(){
        date_default_timezone_set("Asia/Jakarta");
        $simpan = new rekomendasikomentar;
        $simpan->nama = Input::get('nama');
        $simpan->email = Input::get('email');
        $simpan->komentar = Input::get('komentar');
        $simpan->admin = Input::get('admin');
        $simpan->date = date("l jS \of F Y h:i:s A");
        $simpan->save();

        $update = komentar::where('id', '=', Input::get('id'))
            ->update([
                'ket' => "rekomendasi"
            ]);

        return Redirect::to('rekomendasi')
            ->with('rekomendasi', 'Komentar di rekomendasi');
    }

    public function hapuskomentar($id){
        $hapus = rekomendasikomentar::find($id)->delete();
        return Redirect::back()
            ->with('hapus', 'Komentar telah dihapus');
    }

    public function truncatekomentar(){
        if(Auth::User()->jabatan == "Admin"){
        $data = DB::table('rekomendasi_komentar')->truncate();
        return Redirect::back()
            ->with('data', 'Data komentar telah terhapus');
        }else{
            return Redirect::back();
        }
    }

    public function perbaruiinformasi(){
        $barui = informasi::where('id', '=', Input::get('id'))
            ->update([
                'nama' => Input::get('nama'),
                'informasi' => Input::get('informasi')
            ]);

        return Redirect::back()
            ->with('sukses', 'Informasi berhasil terkirim');
    }

    public function perbaruiagenda(){
        $update = agenda::where('id', '=', Input::get('id'))
            ->update([
                'agenda' => Input::get('agenda'),
                'nama' => Input::get('nama')
            ]);

        return Redirect::to('informasi')
            ->with('agenda', 'Agenda berhasil terkirim');
    }

    public function perbaruipesan(){
        $update = pesan::where('id', '=', Input::get('id'))
            ->update([
                'pesan' => Input::get('pesan'),
                'nama' => Input::get('nama')
            ]);

        return Redirect::to('informasi')
            ->with('pesan', 'Pesan berhasil terkirim');
    }

    public function slidesatu(){
        if(Input::file('foto_slide_satu') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_satu' => Input::get('judul_slide_satu'),
                    'kalimat_slide_satu' => Input::get('kalimat_slide_satu')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_satu' => Input::get('judul_slide_satu'),
                    'kalimat_slide_satu' => Input::get('kalimat_slide_satu'),
                    'foto_slide_satu' => Input::file('foto_slide_satu')->getClientOriginalName()
                ]);

                $file = Input::file('foto_slide_satu');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function slidedua(){
        if(Input::file('foto_slide_dua') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_dua' => Input::get('judul_slide_dua'),
                    'kalimat_slide_dua' => Input::get('kalimat_slide_dua')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_dua' => Input::get('judul_slide_dua'),
                    'kalimat_slide_dua' => Input::get('kalimat_slide_dua'),
                    'foto_slide_dua' => Input::file('foto_slide_dua')->getClientOriginalName()
                ]);

                $file = Input::file('foto_slide_dua');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function slidetiga(){
        if(Input::file('foto_slide_tiga') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_tiga' => Input::get('judul_slide_tiga'),
                    'kalimat_slide_tiga' => Input::get('kalimat_slide_tiga')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_tiga' => Input::get('judul_slide_tiga'),
                    'kalimat_slide_tiga' => Input::get('kalimat_slide_tiga'),
                    'foto_slide_tiga' => Input::file('foto_slide_tiga')->getClientOriginalName()
                ]);

                $file = Input::file('foto_slide_tiga');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function slideempat(){
        if(Input::file('foto_slide_empat') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_empat' => Input::get('judul_slide_empat'),
                    'kalimat_slide_empat' => Input::get('kalimat_slide_dempat')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'judul_slide_empat' => Input::get('judul_slide_empat'),
                    'kalimat_slide_empat' => Input::get('kalimat_slide_empat'),
                    'foto_slide_empat' => Input::file('foto_slide_empat')->getClientOriginalName()
                ]);

                $file = Input::file('foto_slide_empat');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruimabigus(){
        if(Input::file('foto_mabigus') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_mabigus' => Input::get('nama_mabigus')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_mabigus' => Input::get('nama_mabigus'),
                    'foto_mabigus' => Input::file('foto_mabigus')->getClientOriginalName()
                ]);

                $file = Input::file('foto_mabigus');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruipembinaputra(){
        if(Input::file('foto_pembina_putra') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pembina_putra' => Input::get('nama_pembina_putra'),
                    'kalimat_pembina_putra' => Input::get('kalimat_pembina_putra')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pembina_putra' => Input::get('nama_pembina_putra'),
                    'kalimat_pembina_putra' => Input::get('kalimat_pembina_putra'),
                    'foto_pembina_putra' => Input::file('foto_pembina_putra')->getClientOriginalName()
                ]);

                $file = Input::file('foto_pembina_putra');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruipembinaputri(){
        if(Input::file('foto_pembina_putri') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pembina_putri' => Input::get('nama_pembina_putri'),
                    'kalimat_pembina_putri' => Input::get('kalimat_pembina_putri')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pembina_putri' => Input::get('nama_pembina_putri'),
                    'kalimat_pembina_putri' => Input::get('kalimat_pembina_putri'),
                    'foto_pembina_putri' => Input::file('foto_pembina_putri')->getClientOriginalName()
                ]);

                $file = Input::file('foto_pembina_putri');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruipembinalatih(){
        if(Input::file('foto_pembina_latih') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pembina_latih' => Input::get('nama_pembina_latih')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pembina_latih' => Input::get('nama_pembina_latih'),
                    'foto_pembina_latih' => Input::file('foto_pembina_latih')->getClientOriginalName()
                ]);

                $file = Input::file('foto_pembina_latih');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruipradanaputra(){
        if(Input::file('foto_pradana_putra') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pradana_putra' => Input::get('nama_pradana_putra')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pradana_putra' => Input::get('nama_pradana_putra'),
                    'foto_pradana_putra' => Input::file('foto_pradana_putra')->getClientOriginalName()
                ]);

                $file = Input::file('foto_pradana_putra');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruipradanaputri(){
        if(Input::file('foto_pradana_putri') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pradana_putri' => Input::get('nama_pradana_putri')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_pradana_putri' => Input::get('nama_pradana_putri'),
                    'foto_pradana_putri' => Input::file('foto_pradana_putri')->getClientOriginalName()
                ]);

                $file = Input::file('foto_pradana_putri');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruijudatputra(){
        if(Input::file('foto_judat_putra') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_judat_putra' => Input::get('nama_judat_putra')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_judat_putra' => Input::get('nama_judat_putra'),
                    'foto_judat_putra' => Input::file('foto_judat_putra')->getClientOriginalName()
                ]);

                $file = Input::file('foto_judat_putra');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruijudatputri(){
        if(Input::file('foto_judat_putri') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_judat_putri' => Input::get('nama_judat_putri')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_judat_putri' => Input::get('nama_judat_putri'),
                    'foto_judat_putri' => Input::file('foto_judat_putri')->getClientOriginalName()
                ]);

                $file = Input::file('foto_judat_putri');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruijuangputra(){
        if(Input::file('foto_juang_putra') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_juang_putra' => Input::get('nama_juang_putra')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_juang_putra' => Input::get('nama_juang_putra'),
                    'foto_juang_putra' => Input::file('foto_juang_putra')->getClientOriginalName()
                ]);

                $file = Input::file('foto_juang_putra');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruijuangputri(){
        if(Input::file('foto_juang_putri') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_juang_putri' => Input::get('nama_juang_putri')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_juang_putri' => Input::get('nama_juang_putri'),
                    'foto_juang_putri' => Input::file('foto_juang_putri')->getClientOriginalName()
                ]);

                $file = Input::file('foto_juang_putri');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruikraniputra(){
        if(Input::file('foto_krani_putra') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_krani_putra' => Input::get('nama_krani_putra')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_krani_putra' => Input::get('nama_krani_putra'),
                    'foto_krani_putra' => Input::file('foto_krani_putra')->getClientOriginalName()
                ]);

                $file = Input::file('foto_krani_putra');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruikraniputri(){
        if(Input::file('foto_krani_putri') == null){
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_krani_putri' => Input::get('nama_krani_putri')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = web::where('id', '=', Input::get('id'))
                ->update([
                    'nama_krani_putri' => Input::get('nama_krani_putri'),
                    'foto_krani_putri' => Input::file('foto_krani_putri')->getClientOriginalName()
                ]);

                $file = Input::file('foto_krani_putri');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function rekomendasipasus(){
        $simpan = new rekomendasipasus;
        $simpan->nis = Input::get('nis');
        $simpan->nama = Input::get('nama');
        $simpan->agama = Input::get('agama');
        $simpan->jk = Input::get('jk');
        $simpan->tempat_lahir = Input::get('tempat_lahir');
        $simpan->tgl_lahir = Input::get('tgl_lahir');
        $simpan->hobi = Input::get('hobi');
        $simpan->pengalaman = Input::get('pengalaman');
        $simpan->rombel = Input::get('rombel');
        $simpan->rayon = Input::get('rayon');
        $simpan->sangga = Input::get('sangga');
        $simpan->ambalan = Input::get('ambalan');
        $simpan->alamat = Input::get('alamat');
        $simpan->foto = Input::get('foto');
        $simpan->save();

        $barui = pasus::where('id', '=', Input::get('id'))
            ->update([
                'rekomendasi' => "Rekomendasi"
            ]);

        return Redirect::back()
            ->with('sukses', 'Data telah di rekomendasi');
    }

    public function tolakpasus($id){
        $hapus = pasus::find($id)->delete();
        return Redirect::to('rekomendasipasus')
            ->with('sukses', 'Data tidak direkomendasi');
    }

    public function aktivitas(){
        $simpan = new aktivitas;
        $simpan->judul = Input::get('judul');
        $simpan->aktivitas = Input::get('aktivitas');
        $simpan->save();

        return Redirect::back()
            ->with('sukses', 'Data telah tersimpan');
    }

    public function perbaruiaktivitas(){
        $barui = aktivitas::where('id_aktivitas', '=', Input::get('id'))
            ->update([
                'judul' => Input::get('judul'),
                'aktivitas' => Input::get('aktivitas')
            ]);

        return Redirect::to('dataaktivitas')
            ->with('sukses', 'Data telah di perbarui');
    }

    public function hapusaktivitas($id){
        $hapus = aktivitas::where('id_aktivitas', '=', $id)->delete();
        $hapusg = galeri::where('id_aktivitas', '=', $id)->delete();
        return Redirect::back()
            ->with('hapus', $hapus)
            ->with('hapusg', $hapusg);
    }

    public function galeri(){
        $simpan = new galeri;
        $simpan->id_aktivitas = Input::get('id');
        $simpan->foto = Input::file('foto')->getClientOriginalName();
        $simpan->save();

        $file = Input::file('foto');
        $path = 'gambar';
        $file->move($path, $file->getClientOriginalName());

        return Redirect::back()
            ->with('sukses', 'Foto telah di upload');
    }

    public function hapusgaleri($id){
        $hapus = galeri::find($id)->delete();
        return Redirect::back()
            ->with('hapus', 'Foto telah terhapus');
    }

    public function jugit(){
        $barui = jugit::where('id', '=', Input::get('id'))
            ->update([
                'nama' => Input::get('nama')
            ]);

        return Redirect::back()
            ->with('sukses', 'Date telah diberbarui');
    }

    public function baruikegiatanpta(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'judul' => Input::get('judul'),
                'kegiatan' => Input::get('kegiatan')
            ]);

        return Redirect::back()
            ->with('sukses', 'Data telah diperbarui');
    }

    public function baruisatu(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'satu' => Input::file('satu')->getClientOriginalName()
            ]);

            $file = Input::file('satu');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruidua(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'dua' => Input::file('dua')->getClientOriginalName()
            ]);

            $file = Input::file('dua');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruitiga(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'tiga' => Input::file('tiga')->getClientOriginalName()
            ]);

            $file = Input::file('tiga');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruiempat(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'empat' => Input::file('empat')->getClientOriginalName()
            ]);

            $file = Input::file('empat');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruilima(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'lima' => Input::file('lima')->getClientOriginalName()
            ]);

            $file = Input::file('lima');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruienam(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'enam' => Input::file('enam')->getClientOriginalName()
            ]);

            $file = Input::file('enam');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruitujuh(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'tujuh' => Input::file('tujuh')->getClientOriginalName()
            ]);

            $file = Input::file('tujuh');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruidelapan(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'delapan' => Input::file('delapan')->getClientOriginalName()
            ]);

            $file = Input::file('delapan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruisembilan(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'sembilan' => Input::file('sembilan')->getClientOriginalName()
            ]);

            $file = Input::file('sembilan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruisepuluh(){
        $barui = kegiatanpta::where('id', '=', Input::get('id'))
            ->update([
                'sepuluh' => Input::file('sepuluh')->getClientOriginalName()
            ]);

            $file = Input::file('sepuluh');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruikegiatanbantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'judul' => Input::get('judulbantara'),
                'kegiatan' => Input::get('kegiatanbantara')
            ]);

        return Redirect::back()
            ->with('sukses', 'Data telah diperbarui');
    }

    public function baruisatubantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'satu' => Input::file('satubantara')->getClientOriginalName()
            ]);

            $file = Input::file('satubantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruiduabantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'dua' => Input::file('duabantara')->getClientOriginalName()
            ]);

            $file = Input::file('duabantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruitigabantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'tiga' => Input::file('tigabantara')->getClientOriginalName()
            ]);

            $file = Input::file('tigabantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruiempatbantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'empat' => Input::file('empatbantara')->getClientOriginalName()
            ]);

            $file = Input::file('empatbantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruilimabantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'lima' => Input::file('limabantara')->getClientOriginalName()
            ]);

            $file = Input::file('limabantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruienambantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'enam' => Input::file('enambantara')->getClientOriginalName()
            ]);

            $file = Input::file('enambantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruitujuhbantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'tujuh' => Input::file('tujuhbantara')->getClientOriginalName()
            ]);

            $file = Input::file('tujuhbantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruidelapanbantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'delapan' => Input::file('delapanbantara')->getClientOriginalName()
            ]);

            $file = Input::file('delapanbantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruisembilanbantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'sembilan' => Input::file('sembilanbantara')->getClientOriginalName()
            ]);

            $file = Input::file('sembilanbantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruisepuluhbantara(){
        $barui = kegiatanbantara::where('id', '=', Input::get('id'))
            ->update([
                'sepuluh' => Input::file('sepuluhbantara')->getClientOriginalName()
            ]);

            $file = Input::file('sepuluhbantara');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruikegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'judul' => Input::get('judul'),
                'kegiatan' => Input::get('kegiatan')
            ]);

        return Redirect::back()
            ->with('sukses', 'Data telah diperbarui');
    }

    public function baruisatukegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'satu' => Input::file('satukegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('satukegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruiduakegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'dua' => Input::file('duakegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('duakegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruitigakegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'tiga' => Input::file('tigakegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('tigakegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruiempatkegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'empat' => Input::file('empatkegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('empatkegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruilimakegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'lima' => Input::file('limakegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('limakegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruienamkegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'enam' => Input::file('enamkegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('enamkegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruitujuhkegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'tujuh' => Input::file('tujuhkegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('tujuhkegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruidelapankegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'delapan' => Input::file('delapankegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('delapankegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruisembilankegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'sembilan' => Input::file('sembilankegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('sembilankegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function baruisepuluhkegiatan(){
        $barui = kegiatan::where('id', '=', Input::get('id'))
            ->update([
                'sepuluh' => Input::file('sepuluhkegiatan')->getClientOriginalName()
            ]);

            $file = Input::file('sepuluhkegiatan');
            $path = 'gambar';
            $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function artikel(){
        date_default_timezone_set("Asia/Jakarta");
        $simpan = new artikel;
        $simpan->judul = Input::get('judul');
        $simpan->artikel = Input::get('artikel');
        $simpan->admin = Input::get('admin');
        $simpan->foto_admin = Input::get('foto_admin');
        $simpan->waktu = date("l jS \of F Y h:i:s A");
        $simpan->gambar = Input::file('gambar')->getClientOriginalName();
        $simpan->save();

        $file = Input::file('gambar');
        $path = 'gambar';
        $file->move($path,$file->getClientOriginalName());

        return Redirect::back()
            ->with('sukses', 'Artikel telah terkirim');
    }

    public function baruiartikel(){
        if(Input::file('gambar') == null){
            $barui = artikel::where('id', '=', Input::get('id'))
                ->update([
                    'judul' => Input::get('judul'),
                    'artikel' => Input::get('artikel'),
                    'admin' => Input::get('admin'),
                    'foto_admin' => Input::get('foto_admin'),
                    'waktu' => Input::get('waktu')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = artikel::where('id', '=', Input::get('id'))
                ->update([
                    'judul' => Input::get('judul'),
                    'artikel' => Input::get('artikel'),
                    'admin' => Input::get('admin'),
                    'foto_admin' => Input::get('foto_admin'),
                    'waktu' => Input::get('waktu'),
                    'gambar' => Input::file('gambar')->getClientOriginalName()
                ]);

                $file = Input::file('gambar');
                $path = 'gambar';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Artikel telah di perbarui');
        }
    }

    public function hapusartikel($id){
        $hapus = artikel::find($id)->delete();
        return Redirect::to('dataartikel')
            ->with('hapus', 'Artikel telah terhapus');
    }

    public function favorit(){
        $tambah = 1;
        $tambah++;
        $barui = web::where('id', '=', Input::get('id'))
            ->update([
                'favorit' => $tambah
            ]);

        return Redirect::back();
    }

    public function hapusforum($id){
        $hapus = forum::find($id)->delete();
        return Redirect::back()
            ->with('hapus', 'Posting telah di hapus');
    }

    public function pembinaan(){
        $date = date('Y-m-d');
        for($data = 0; $data < count(Input::get('nis')); $data++){
            $simpan = new pembinaan;
            $simpan->nis = Input::get('nis')[$data];
            $simpan->tgl_pembinaan = $date;
            $simpan->pembinaan = Input::get('pembinaan')[$data];
            $simpan->save();
        }   
        return Redirect::back()
            ->with('sukses', 'Data pembinaan telah tersimpan');
    }

    public function hapusdetailpembinaan($id){
        $hapus = pembinaan::where('id', '=', $id)->delete();
        return Redirect::back()
            ->with('hapus', 'Keterangan pembinaan telah dihapus');
    }

    public function hapuspembinaan($id){
        $hapus = pembinaan::where('nis', '=', $id)->delete();
        return Redirect::back()
            ->with('hapus', 'Data telah terhapus');
    }

    public function truncatepembinaan(){
        if(Auth::User()->jabatan == "Admin"){
        $hapus = DB::table('pembinaan')->truncate();
        return Redirect::back()
            ->with('sukses', 'Data pembinaan telah dikosongkan');
        }else{
            return Redirect::back();
        }
    }

    public function truncatepeserta(){
        if(Auth::User()->jabatan == "Admin"){
            $hapus = DB::table('peserta')->truncate();
            return Redirect::back()
                ->with('truncate', 'Semua data peserta telah terhapus');
        }else{
            return Redirect::back()
                ->with('hak', 'Maaf, anda tidak memiliki hak akses');
        }
    }

    public function truncatekas(){
        if(Auth::User()->jabatan == "Admin"){
        $hapus = DB::table('kaspeserta')->truncate();
        return Redirect::back()
            ->with('truncate', 'Semua data kas peserta telah terhapus');
        }else{
            return Redirect::back()
                ->with('hak', 'Maaf, anda tidak memiliki hak akses');
        }
    }

    public function truncateabsen(){
        if(Auth::User()->jabatan == "Admin"){
        $hapus = DB::table('absensipeserta')->truncate();
        return Redirect::back()
            ->with('truncate', 'Semua data kas peserta telah terhapus');
        }else{
            return Redirect::back()
                ->with('hak', 'Maaf, anda tidak memiliki hak akses');
        }
    }

    public function reportbug(){
        $simpan = new reportbug;
        $simpan->keterangan = Input::get('keterangan');
        $simpan->gambar = Input::file('gambar')->getClientOriginalName();
        $simpan->pengirim = Auth::User()->nama;
        $simpan->status = "Belum";
        $simpan->save();

        $file = Input::file('gambar');
        $path = 'bug';
        $file->move($path,$file->getClientOriginalName());

        return Redirect::back()
            ->with('sukses', 'Report telah terkirim');
    }

    public function baruibug(){
        $update = reportbug::where('id', '=', Input::get('id'))
            ->update([
                'status' => "Sudah"
            ]);

        return Redirect::back()
            ->with('sukses', 'Program telah diperbaiki');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
