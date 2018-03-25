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
use Crypt;

use App\User;
use App\web;
use App\forum;
use App\komentar;
use App\informasi;
use App\agenda;
use App\pesan;
use App\peserta;
use App\q_absensi;
use App\hadir;
use App\sakit;
use App\izin;
use App\alfa;
use App\aktivitas;
use App\galeri;
use App\q_aktivitas;
use App\q_totalkas;
use App\absensipeserta;
use App\kaspeserta;
use App\rekomendasikomentar;
use App\rekomendasipasus;
use App\jugit;
use App\kegiatanpta;
use App\kegiatanbantara;
use App\kegiatan;
use App\artikel;
use App\pembinaan;
use App\q_pembinaan;
use App\q_banyak_pembinaan;
use App\q_detail_peserta;
use App\reportbug;
use App\q_galeriaktivitas;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        $tahun = date('Y');
        $web = DB::table('web')->first();
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $pesan = DB::table('pesan')->first();
        $agenda = DB::table('agenda')->first();
        $informasi = DB::table('informasi')->orderBy('id', 'desc')->first();
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        $aktivitas = DB::table('q_galeriaktivitas')->orderBy('id_aktivitas', 'desc')->first();
        $dataaktivitas = DB::table('q_galeriaktivitas')->orderBy('id_aktivitas', 'desc')->groupBy('id_aktivitas')->take('6')->get();
        return View('web.home')
            ->with('tahun', $tahun)
            ->with('komentar', $komentar)
            ->with('web', $web)
            ->with('jumlah', $jumlah)
            ->with('pesan', $pesan)
            ->with('agenda', $agenda)
            ->with('informasi', $informasi)
            ->with('aktivitas', $aktivitas)
            ->with('dataaktivitas', $dataaktivitas);
    }
    
    public function Kegiatan(){
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $pta = DB::table('kegiatanpta')->first();
        $bantara = DB::table('kegiatanbantara')->first();
        $kegiatan = DB::table('kegiatan')->first();
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        return View('web.Kegiatan')
            ->with('komentar', $komentar)
            ->with('pta', $pta)
            ->with('bantara', $bantara)
            ->with('jumlah', $jumlah)
            ->with('kegiatan', $kegiatan);
    }

    public function aktivitasambalan(){
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        $data = DB::table('q_galeriaktivitas')->orderBy('id_aktivitas', 'desc')->groupBy('id_aktivitas')->paginate('3');
        $aktivitas = DB::table('q_galeriaktivitas')->orderBy('id_aktivitas', 'desc')->first();
        $jml = DB::table('q_galeriaktivitas')->count('id_aktivitas');
        $slide = DB::table('q_galeriaktivitas')->groupBy('id_aktivitas')->orderBy('id_aktivitas', 'desc')->take(4)->get();
        $page = DB::table('q_galeriaktivitas')->orderBy('id_aktivitas', 'desc')->groupBy('id_aktivitas')->paginate('3');
        $page->setPath('aktivitasambalan');
        return View('web.aktivitas')
            ->with('komentar', $komentar)
            ->with('jumlah', $jumlah)
            ->with('data', $data)
            ->with('aktivitas', $aktivitas)
            ->with('jml', $jml)
            ->with('slide', $slide)
            ->with('page', $page);
    }

    public function detailaktivitas($id){
        $kode = Crypt::decrypt($id);
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        $data = DB::table('q_galeriaktivitas')->orderBy('id_aktivitas', 'desc')->groupBy('id_aktivitas')->get();
        $aktivitas = DB::table('q_galeriaktivitas')->where('id_aktivitas', '=', $kode)->first();
        return View('web.detailaktivitas')
            ->with('komentar', $komentar)
            ->with('jumlah', $jumlah)
            ->with('data', $data)
            ->with('aktivitas', $aktivitas);
    }

    public function lihataktivitas($id){
        $kode = Crypt::decrypt($id);
        $judul = DB::table('q_galeriaktivitas')->where('id_aktivitas', '=', $kode)->first();
        $foto = DB::table('q_galeriaktivitas')->where('id_aktivitas', '=', $kode)->get();
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        $jml = DB::table('q_galeriaktivitas')->where('id_aktivitas', '=', $kode)->count('id_aktivitas');
        return View('web.lihataktivitas')
            ->with('judul', $judul)
            ->with('foto', $foto)
            ->with('komentar', $komentar)
            ->with('jumlah', $jumlah)
            ->with('jml', $jml);
    }

    public function artikel(){
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $web = DB::table('web')->first();
        $artikel = DB::table('artikel')->orderBy('id', 'desc')->first();
        $data = DB::table('artikel')->orderBy('id', 'desc')->paginate('10');
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        $page = artikel::paginate('10');
        $page->setPath('artikel');
        return View('web.artikel')
            ->with('komentar', $komentar)
            ->with('web', $web)
            ->with('artikel', $artikel)
            ->with('jumlah', $jumlah)
            ->with('data', $data)
            ->with('page', $page);
    }

    public function bacaartikel($id){
        $kode = Crypt::decrypt($id);
        $data = artikel::find($kode);
        $web = DB::table('web')->first();
        $komentar = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->get();
        $artikel = DB::table('artikel')->take(4)->orderBy('id', 'desc')->get();
        $jumlah = DB::table('rekomendasi_komentar')->count('id');
        return View('web.detailartikel')
            ->with('data', $data)
            ->with('web', $web)
            ->with('komentar', $komentar)
            ->with('artikel', $artikel)
            ->with('jumlah', $jumlah);
    }

    public function login(){
        return View('login');
    }

    public function dashboard(){
        $date = date_default_timezone_set("Asia/Bangkok");
        $nama = forum::lists('nama');
        $date = date("h:i:sa");
        $data = DB::table('forum')->orderBy('id', 'desc')->get();
        $peserta = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $pesertaadmin = DB::table('peserta')->count();
        $jmlpeserta = DB::table('peserta')->count();
        $komentar = DB::table('komentar')->count();
        $anggota = DB::table('users')->count();
        $hadir = DB::table('hadir')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $sakit = DB::table('sakit')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $alfa = DB::table('alfa')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $izin = DB::table('izin')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $kas = DB::table('q_totalkas')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->sum('total');
        $pembinaan = DB::table('q_pembinaan')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $hadiradmin = DB::table('hadir')->count();
        $sakitadmin = DB::table('sakit')->count();
        $alfaadmin = DB::table('alfa')->count();
        $izinadmin = DB::table('izin')->count();
        $kasadmin = DB::table('q_totalkas')->sum('total');
        $pembinaanadmin = DB::table('q_pembinaan')->count();
        return View('admin.home')
            ->with('date', $date)
            ->with('nama', $nama)
            ->with('data', $data)
            ->with('peserta', $peserta)
            ->with('pesertaadmin', $pesertaadmin)
            ->with('jmlpeserta', $jmlpeserta)
            ->with('komentar', $komentar)
            ->with('anggota', $anggota)
            ->with('hadir', $hadir)
            ->with('sakit', $sakit)
            ->with('alfa', $alfa)
            ->with('izin', $izin)
            ->with('kas', $kas)
            ->with('pembinaan', $pembinaan)
            ->with('hadiradmin', $hadiradmin)
            ->with('sakitadmin', $sakitadmin)
            ->with('alfaadmin', $alfaadmin)
            ->with('izinadmin', $izinadmin)
            ->with('kasadmin', $kasadmin)
            ->with('pembinaanadmin', $pembinaanadmin);
    }

    public function ubahbiodata(){
        return View('admin.ubahbiodata');
    }

    public function admin(){
        $sangga = DB::table('sangga')->get();
        return View('admin.admin.admin')
            ->with('sangga', $sangga);
    }

    public function dataadmin(){
        $data = DB::table('users')->orderBy('nama', 'asc')->paginate('10');
        $page = User::paginate('10');
        $page->setPath('dataadmin');
        return View('admin.admin.dataadmin')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function detailadmin($id){
        $data = User::find($id);
        return View('admin.admin.detailadmin')
            ->with('data', $data);
    }

    public function peserta(){
        return View('admin.peserta.peserta');
    }

    public function absensipeserta(){
        $validasis = DB::table('q_absensi')->whereSanggaAndAmbalanAndJk(Auth::User()->sangga,  Auth::User()->ambalan, Auth::User()->jk)->first();
        if($validasis == NULL){
            $validasi = "0";
        } else {
            $validasi = $validasis->tgl_absen;
        }
        $hari = date('l');
        $waktu = date('Y-m-d');
        $data = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga,  Auth::User()->ambalan)->paginate('5');
        $keterangan = q_absensi::lists('tgl_absen');
        $page = peserta::paginate('5');
        $page->setPath('datapeserta');
        $jumlah = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $h = DB::table('q_absensi')->whereKeteranganAndSanggaAndAmbalan('H', Auth::User()->sangga, Auth::User()->ambalan)->count();
        $s = DB::table('q_absensi')->whereKeteranganAndSanggaAndAmbalan('S', Auth::User()->sangga, Auth::User()->ambalan)->count();
        $a = DB::table('q_absensi')->whereKeteranganAndSanggaAndAmbalan('A', Auth::User()->sangga, Auth::User()->ambalan)->count();
        $i = DB::table('q_absensi')->whereKeteranganAndSanggaAndAmbalan('i', Auth::User()->sangga, Auth::User()->ambalan)->count();
        $hadir = DB::table('hadir')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        $sakit = DB::table('sakit')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        $alfa = DB::table('alfa')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        $izin = DB::table('izin')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        return View('admin.peserta.absensipeserta')
            ->with('validasi', $validasi)
            ->with('hari', $hari)
            ->with('waktu', $waktu)
            ->with('data', $data)
            ->with('keterangan', $keterangan)
            ->with('page', $page)
            ->with('jumlah', $jumlah)
            ->with('h', $h)
            ->with('s', $s)
            ->with('a', $a)
            ->with('i', $i)
            ->with('hadir', $hadir)
            ->with('sakit', $sakit)
            ->with('alfa', $alfa)
            ->with('izin', $izin);
    }

    public function formatabsen(){
        $data = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        $ket = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->first();
        return View('admin.peserta.formatabsen')
            ->with('data', $data)
            ->with('ket', $ket);
    }

    public function krani(){
        $lhadir = DB::table('hadir')->where('jk', '=', 'Laki-laki')->groupBy()->orderBy('nama', 'desc')->paginate('10');
        $lsakit = DB::table('sakit')->where('jk', '=', 'Laki-laki')->orderBy('nama', 'desc')->paginate('10');
        $lalfa = DB::table('alfa')->where('jk', '=', 'Laki-laki')->orderBy('nama', 'desc')->paginate('10');
        $lizin = DB::table('izin')->where('jk', '=', 'Laki-laki')->orderBy('nama', 'desc')->paginate('10');
        $lthadir = DB::table('hadir')->where('jk', '=', 'Laki-laki')->sum('hadir');
        $ltsakit = DB::table('sakit')->where('jk', '=', 'Laki-laki')->sum('sakit');
        $ltalfa = DB::table('alfa')->where('jk', '=', 'Laki-laki')->sum('alfa');
        $ltizin = DB::table('izin')->where('jk', '=', 'Laki-laki')->sum('izin');
        $lpagehadir = DB::table('hadir')->where('jk', '=', 'Laki-laki')->paginate('10');
        $lpagehadir->setPath('krani');
        $lpagesakit = DB::table('sakit')->where('jk', '=', 'Laki-laki')->paginate('10');
        $lpagesakit->setPath('krani');
        $lpageizin = DB::table('izin')->where('jk', '=', 'Laki-laki')->paginate('10');
        $lpageizin->setPath('krani');
        $lpagealfa = DB::table('alfa')->where('jk', '=', 'Laki-laki')->paginate('10');
        $lpagealfa->setPath('krani');
        $phadir = DB::table('hadir')->where('jk', '=', 'Perempuan')->groupBy()->orderBy('nama', 'desc')->paginate('10');
        $psakit = DB::table('sakit')->where('jk', '=', 'Perempuan')->orderBy('nama', 'desc')->paginate('10');
        $palfa = DB::table('alfa')->where('jk', '=', 'Perempuan')->orderBy('nama', 'desc')->paginate('10');
        $pizin = DB::table('izin')->where('jk', '=', 'Perempuan')->orderBy('nama', 'desc')->paginate('10');
        $pthadir = DB::table('hadir')->where('jk', '=', 'Perempuan')->sum('hadir');
        $ptsakit = DB::table('sakit')->where('jk', '=', 'Perempuan')->sum('sakit');
        $ptalfa = DB::table('alfa')->where('jk', '=', 'Perempuan')->sum('alfa');
        $ptizin = DB::table('izin')->where('jk', '=', 'Perempuan')->sum('izin');
        $ppagehadir = DB::table('hadir')->where('jk', '=', 'Perempuan')->paginate('10');
        $ppagehadir->setPath('krani');
        $ppagesakit = DB::table('sakit')->where('jk', '=', 'Perempuan')->paginate('10');
        $ppagesakit->setPath('krani');
        $ppageizin = DB::table('izin')->where('jk', '=', 'Perempuan')->paginate('10');
        $ppageizin->setPath('krani');
        $ppagealfa = DB::table('alfa')->where('jk', '=', 'Perempuan')->paginate('10');
        $ppagealfa->setPath('krani');
        return View('admin.peserta.krani')
            ->with('lhadir', $lhadir)
            ->with('lsakit', $lsakit)
            ->with('lalfa', $lalfa)
            ->with('lizin', $lizin)
            ->with('lthadir', $lthadir)
            ->with('ltsakit', $ltsakit)
            ->with('ltalfa', $ltalfa)
            ->with('ltizin', $ltizin)
            ->with('lpagehadir', $lpagehadir)
            ->with('lpagesakit', $lpagesakit)
            ->with('lpageizin', $lpageizin)
            ->with('lpagealfa', $lpagealfa)
            ->with('phadir', $phadir)
            ->with('psakit', $psakit)
            ->with('palfa', $palfa)
            ->with('pizin', $pizin)
            ->with('pthadir', $pthadir)
            ->with('ptsakit', $ptsakit)
            ->with('ptalfa', $ptalfa)
            ->with('ptizin', $ptizin)
            ->with('ppagehadir', $ppagehadir)
            ->with('ppagesakit', $ppagesakit)
            ->with('ppageizin', $ppageizin)
            ->with('ppagealfa', $ppagealfa);
    }

    public function juang(){
        $total = DB::table('q_totalkas')->sum('total');
        $ltotal = DB::table('q_totalkas')->where('jk', '=', 'Laki-laki')->sum('total');
        $ptotal = DB::table('q_totalkas')->where('jk', '=', 'Perempuan')->sum('total');
        $putra = DB::table('peserta')->where('jk', '=', 'Laki-laki')->count();
        $putri = DB::table('peserta')->where('jk', '=', 'Perempuan')->count();
        $rajin = DB::table('q_totalkas')->orderBy('total', 'desc')->take(5)->get();
        $kurang = DB::table('q_totalkas')->orderBy('total', 'asc')->take(5)->get();
        return View('admin.peserta.juang')
            ->with('total', $total)
            ->with('ltotal', $ltotal)
            ->with('ptotal', $ptotal)
            ->with('putra', $putra)
            ->with('putri', $putri)
            ->with('rajin', $rajin)
            ->with('kurang', $kurang);
    }

    public function detailpeserta($id){
        $data = peserta::find($id);
        $h = q_absensi::find($id)->whereKeteranganAndId('H', $id)->count();
        $s = q_absensi::find($id)->whereKeteranganAndId('S', $id)->count();
        $a = q_absensi::find($id)->whereKeteranganAndId('A', $id)->count();
        $i = q_absensi::find($id)->whereKeteranganAndId('i', $id)->count();
        $kas = q_detail_peserta::find($id)->where('id', '=', $id)->sum('kas');
        return View('admin.peserta.detailpeserta')
            ->with('data', $data)
            ->with('h', $h)
            ->with('s', $s)
            ->with('a', $a)
            ->with('i', $i)
            ->with('kas', $kas);
    }

    public function datapeserta(){
        $data = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->paginate('5');
        $peserta = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $page = peserta::paginate('5');
        $page->setPath('datapeserta');
        return View('admin.peserta.datapeserta')
            ->with('data', $data)
            ->with('peserta', $peserta)
            ->with('page', $page);
    }

    public function editpeserta($id){
        $data = peserta::find($id);
        return View('admin.peserta.editpeserta')
            ->with('data', $data);
    }

    public function kaspeserta(){
        $validasis = DB::table('q_kas')->whereSanggaAndAmbalanAndJk(Auth::User()->sangga,  Auth::User()->ambalan, Auth::User()->jk)->first();
        if($validasis == NULL){
            $validasi = "0";
        } else {
            $validasi = $validasis->tgl_kas;
        }
        $waktu = date('Y-m-d');
        $data = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga,  Auth::User()->ambalan)->paginate('5');
        $page = peserta::paginate('5');
        $page->setPath('kaspeserta');
        $jumlah = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->count();
        $kas = DB::table('q_kas')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->sum('kas');
        $kaspeserta = DB::table('q_totalkas')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        $hari = date('l');
        return View('admin.peserta.kaspeserta')
            ->with('validasi', $validasi)
            ->with('waktu', $waktu)
            ->with('data', $data)
            ->with('page', $page)
            ->with('jumlah', $jumlah)
            ->with('kas', $kas)
            ->with('kaspeserta', $kaspeserta)
            ->with('hari', $hari);
    }

    public function formatkas(){
        $data = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->get();
        $ket = DB::table('peserta')->whereSanggaAndAmbalan(Auth::User()->sangga, Auth::User()->ambalan)->first();
        return View('admin.peserta.formatkas')
            ->with('data', $data)
            ->with('ket', $ket);
    }

    public function rekomendasi(){
        $data = komentar::paginate('10');
        $page = komentar::paginate('10');
        $page->setPath('rekomendasi');
        return View('admin.rekomendasi.rekomendasi')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function detailrekomendasi($id){
        $data = komentar::find($id);
        return View('admin.rekomendasi.detailrekomendasi')
            ->with('data', $data);
    }

    public function datakomentar(){
        $data = DB::table('rekomendasi_komentar')->orderBy('id', 'desc')->paginate('10');
        $page = DB::table('rekomendasi_komentar')->paginate('10');
        $page->setPath('datakomentar');
        return View('admin.rekomendasi.datakomentar')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function kontenweb(){
        $slide = DB::table('web')->first();
        $jugit = DB::table('users')->where('jabatan', '=', 'Juru Kegiatan')->get();
        $tekpram = DB::table('users')->where('jabatan', '=', 'Teknik Kepramukaan')->get();
        $jurlap = DB::table('users')->where('jabatan', '=', 'Juru Lapangan')->get();
        $pembinaan = DB::table('users')->where('jabatan', '=', 'Pembinaan')->get();
        $kerohanian = DB::table('users')->where('jabatan', '=', 'Kerohanian')->get();
        $peralatan = DB::table('users')->where('jabatan', '=', 'Peralatan')->get();
        $humas = DB::table('users')->where('jabatan', '=', 'Humas')->get();
        $kesakaan = DB::table('users')->where('jabatan', '=', 'Kesakaan')->get();
        $datajugit = DB::table('jugit')->first();
        return View('admin.web.kontenweb')
            ->with('slide', $slide)
            ->with('jugit', $jugit)
            ->with('tekpram', $tekpram)
            ->with('jurlap', $jurlap)
            ->with('pembinaan', $pembinaan)
            ->with('kerohanian', $kerohanian)
            ->with('peralatan', $peralatan)
            ->with('humas', $humas)
            ->with('kesakaan', $kesakaan)
            ->with('datajugit', $datajugit);
    }

    public function informasi(){
        $informasi = DB::table('informasi')->first();
        $agenda = DB::table('agenda')->first();
        $pesan = DB::table('pesan')->first();
        return View('admin.web.informasi')
            ->with('informasi', $informasi)
            ->with('agenda', $agenda)
            ->with('pesan', $pesan);
    }

    public function aktivitas(){
        return View('admin.kegiatan.aktivitas');
    }

    public function dataaktivitas(){
        $data = aktivitas::all();
        $page = aktivitas::paginate('5');
        $page->setPath('dataaktivitas');
        return View('admin.kegiatan.dataaktivitas')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function editaktivitas($id){
        $edit = aktivitas::where('id_aktivitas', '=', $id)->first();
        return View('admin.kegiatan.editaktivitas')
            ->with('edit', $edit);
    }

    public function galeriaktivitas(){
        $data = aktivitas::all();
        $page = aktivitas::paginate('5');
        $page->setPath('dataaktivitas');
        return View('admin.Kegiatan.galeri')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function uploadgaleri($id){
        $data = aktivitas::where('id_aktivitas', '=', $id)->first();
        $foto = DB::table('q_galeriaktivitas')->where('id_aktivitas', '=', $id)->get();
        $jml = DB::table('q_galeriaktivitas')->where('id_aktivitas', '=', $id)->count('id_aktivitas');
        return View('admin.Kegiatan.uploadgaleri')
            ->with('data', $data)
            ->with('foto', $foto)
            ->with('jml', $jml);
    }
    // public function rekomendasipasus(){
    //     $data = DB::table('pasus')->orderBy('nama', 'asc')->get();
    //     $pagepasus = pasus::paginate('10');
    //     $pagepasus->setPath('rekomendasipasus');
    //     return View('admin.rekomendasipasus.pasus')
    //         ->with('data', $data)
    //         ->with('pagepasus', $pagepasus);
    // }

    // public function detailrekomendasipasus($id){
    //     $data = pasus::find($id);
    //     return View('admin.rekomendasipasus.detailrekomendasipasus')
    //         ->with('data', $data);
    // }

    public function kontenkegiatan(){
        $data = DB::table('kegiatanpta')->first();
        $bantara = DB::table('kegiatanbantara')->first();
        $kegiatan = DB::table('kegiatan')->first();
        return View('admin.kegiatan.kegiatan')
            ->with('data', $data)
            ->with('bantara', $bantara)
            ->with('kegiatan', $kegiatan);
    }

    public function kontenartikel(){
        return View('admin.artikel.artikel');
    }

    public function dataartikel(){
        $data = DB::table('artikel')->orderBy('id', 'desc')->paginate('10');
        $page = artikel::paginate('10');
        $page->setPath('dataartikel');
        return View('admin.artikel.dataartikel')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function detailartikel($id){
        $data = artikel::find($id);
        return View('admin.artikel.detailartikel')
            ->with('data', $data);
    }

    public function pembinaan(){
        return View('admin.peserta.pembinaan');
    }

    public function datapembinaan(){
        $ldata = DB::table('q_banyak_pembinaan')->where('jk', '=', 'Laki-laki')->orderBy('banyak_pembinaan', 'desc')->paginate('10');
        $lpage = q_banyak_pembinaan::paginate('10');
        $lpage->setPath('datapembinaan');
        $pdata = DB::table('q_banyak_pembinaan')->where('jk', '=', 'Perempuan')->orderBy('banyak_pembinaan', 'desc')->paginate('10');
        $ppage = q_banyak_pembinaan::paginate('10');
        $ppage->setPath('datapembinaan');
        return View('admin.peserta.datapembinaan')
            ->with('ldata', $ldata)
            ->with('lpage', $lpage)
            ->with('pdata', $pdata)
            ->with('ppage', $ppage);
    }

    public function detailpembinaan($id){
        $nama = q_pembinaan::where('nis', '=', $id)->first();
        $data = pembinaan::where('nis', '=', $id)->get();
        return View('admin.peserta.detailpembinaan')
            ->with('data', $data)
            ->with('nama', $nama);
    }

    public function datapesertapramuka(){
        $data = DB::table('peserta')->paginate('10');
        $peserta = DB::table('peserta')->where('jk', '=', 'Laki-laki')->count();
        $peserti = DB::table('peserta')->where('jk', '=', 'Perempuan')->count();
        $jumlah = $peserta + $peserti;
        $page = peserta::paginate('10');
        $page->setPath('datapeserta');
        return View('admin.admin.datapesertapramuka')
            ->with('data', $data)
            ->with('peserta', $peserta)
            ->with('peserti', $peserti)
            ->with('jumlah', $jumlah)
            ->with('page', $page);
    }

    public function datakas(){
        $data = DB::table('q_totalkas')->paginate('10');
        $rajin = DB::table('q_totalkas')->orderBy('total', 'desc')->take(5)->get();
        $kurang = DB::table('q_totalkas')->orderBy('total', 'asc')->take(5)->get();
        $jumlah = DB::table('q_totalkas')->sum('total');
        $page = peserta::paginate('10');
        $page->setPath('datapeserta');
        return View('admin.admin.datakas')
            ->with('data', $data)
            ->with('rajin', $rajin)
            ->with('jumlah', $jumlah)
            ->with('kurang', $kurang)
            ->with('page', $page);
    }

    public function dataabsen(){
        $data = DB::table('q_data_absensi')->paginate('10');
        $hadir = DB::table('hadir')->orderBy('hadir', 'desc')->take(5)->get();
        $jhadir = DB::table('hadir')->sum('hadir');
        $alfa = DB::table('alfa')->orderBy('alfa', 'desc')->take(5)->get();
        $jalfa = DB::table('alfa')->sum('alfa');
        $sakit = DB::table('sakit')->orderBy('sakit', 'desc')->take(5)->get();
        $jsakit = DB::table('sakit')->sum('sakit');
        $izin = DB::table('izin')->orderBy('izin', 'desc')->take(5)->get();
        $jizin = DB::table('izin')->sum('izin');
        $page = peserta::paginate('10');
        $page->setPath('datapeserta');
        return View('admin.admin.dataabsen')
            ->with('data', $data)
            ->with('hadir', $hadir)
            ->with('jhadir', $jhadir)
            ->with('alfa', $alfa)
            ->with('jalfa', $jalfa)
            ->with('sakit', $sakit)
            ->with('jsakit', $jsakit)
            ->with('izin', $izin)
            ->with('jizin', $jizin)
            ->with('page', $page);
    }

    public function reportbug(){
        return View('admin.reportbug');
    }

    public function databug(){
        $data = DB::table('reportbug')->orderBy('created_at', 'desc')->paginate('10');
        $page = DB::table('reportbug')->paginate('10');
        $page->setPath('databug');
        return View('admin.databug')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function kehadiran(){
        $hari = date('l');
        $tgl = date('d-m-Y');
        $sangga = DB::table('sangga')->get();
        return View('admin.khusus.kehadiran')
            ->with('sangga', $sangga)
            ->with('hari', $hari)
            ->with('tgl', $tgl);
    }

    public function datakehadiran($id){
        $hari = date('l');
        $data = DB::table('peserta')->where('sangga', '=', $id)->get();
        return View('admin.khusus.datakehadiran')
            ->with('hari', $hari)
            ->with('data', $data);
    }

    // public function downlaodabsensi(){
    //     $data = rekomendasipasus::all();
    //     return View('admin.downlaodabsensi')
    //         ->with('data', $data);
    // }
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
