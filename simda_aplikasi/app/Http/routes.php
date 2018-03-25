<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'RouteController@index');
Route::get('kegiatan', 'RouteController@kegiatan');
Route::get('artikel', 'RouteController@artikel');
Route::get('aktivitasambalan', 'RouteController@aktivitasambalan');
Route::get('lihataktivitas/{id}', 'RouteController@lihataktivitas');
Route::get('detailaktivitas/{id}', 'RouteController@detailaktivitas');
Route::get('admin-ambalan', 'RouteController@login');

Route::get('dashboard', 'RouteController@dashboard');
Route::get('ubahbiodata', 'RouteController@ubahbiodata');
Route::get('admin', 'RouteController@admin');
Route::get('dataadmin', 'RouteController@dataadmin');
Route::get('detailadmin/{id}', 'RouteController@detailadmin');
Route::get('rekomendasi', 'RouteController@rekomendasi');
Route::get('detailrekomendasi/{id}', 'RouteController@detailrekomendasi');
Route::get('datakomentar', 'RouteController@datakomentar');
Route::get('kontenweb', 'RouteController@kontenweb');
Route::get('informasi', 'RouteController@informasi');
Route::get('aktivitas', 'RouteController@aktivitas');
Route::get('galeriaktivitas', 'RouteController@galeriaktivitas');
Route::get('uploadgaleri/{id}', 'RouteController@uploadgaleri');
Route::get('dataaktivitas', 'RouteController@dataaktivitas');
Route::get('editaktivitas/{id}', 'RouteController@editaktivitas');
// Route::get('rekomendasipasus', 'RouteController@rekomendasipasus');
// Route::get('detailrekomendasipasus/{id}', 'RouteController@detailrekomendasipasus');
Route::get('kontenkegiatan', 'RouteController@kontenkegiatan');
Route::get('kontenartikel', 'RouteController@kontenartikel');
Route::get('dataartikel', 'RouteController@dataartikel');
Route::get('detailartikel/{id}', 'RouteController@detailartikel');
Route::get('bacaartikel/{id}', 'RouteController@bacaartikel');
Route::get('inputpeserta', 'RouteController@peserta');
Route::get('absensipeserta', 'RouteController@absensipeserta');
Route::get('detailpeserta/{id}', 'RouteController@detailpeserta');
Route::get('datapeserta', 'RouteController@datapeserta');
Route::get('editpeserta/{id}', 'RouteController@editpeserta');
Route::get('kaspeserta', 'RouteController@kaspeserta');
Route::get('krani', 'RouteController@krani');
Route::get('juang', 'RouteController@juang');
Route::get('pembinaan', 'RouteController@pembinaan');
Route::get('datapembinaan', 'RouteController@datapembinaan');
Route::get('detailpembinaan/{id}', 'RouteController@detailpembinaan');
Route::get('formatabsen', 'RouteController@formatabsen');
Route::get('formatkas', 'RouteController@formatkas');
Route::get('datapesertapramuka', 'RouteController@datapesertapramuka');
Route::get('datakas', 'RouteController@datakas');
Route::get('dataabsen', 'RouteController@dataabsen');
Route::get('reportbug', 'RouteController@reportbug');
Route::get('databug', 'RouteController@databug');
Route::get('kehadiran', 'RouteController@kehadiran');
Route::get('datakehadiran/{id}', 'RouteController@datakehadiran');

Route::post('baruiadmin', 'AdminController@baruiadmin');
Route::post('baruipassword', 'AdminController@baruipassword');
Route::post('perbaruiinformasi', 'AdminController@perbaruiinformasi');
Route::post('perbaruiagenda', 'AdminController@perbaruiagenda');
Route::post('perbaruipesan', 'AdminController@perbaruipesan');
Route::post('slidesatu', 'AdminController@slidesatu');
Route::post('slidedua', 'AdminController@slidedua');
Route::post('slidetiga', 'AdminController@slidetiga');
Route::post('slideempat', 'AdminController@slideempat');
Route::post('baruimabigus', 'AdminController@baruimabigus');
Route::post('baruipembinaputra', 'AdminController@baruipembinaputra');
Route::post('baruipembinaputri', 'AdminController@baruipembinaputri');
Route::post('baruipembinalatih', 'AdminController@baruipembinalatih');
Route::post('baruipradanaputra', 'AdminController@baruipradanaputra');
Route::post('baruipradanaputri', 'AdminController@baruipradanaputri');
Route::post('baruijudatputra', 'AdminController@baruijudatputra');
Route::post('baruijudatputri', 'AdminController@baruijudatputri');
Route::post('baruijuangputra', 'AdminController@baruijuangputra');
Route::post('baruijuangputri', 'AdminController@baruijuangputri');
Route::post('baruikraniputra', 'AdminController@baruikraniputra');
Route::post('baruikraniputri', 'AdminController@baruikraniputri');
Route::post('aktivitas', 'AdminController@aktivitas');
Route::post('galeri', 'AdminController@galeri');
Route::post('perbaruiaktivitas', 'AdminController@perbaruiaktivitas');
// Route::post('rekomendasipasus', 'AdminController@rekomendasipasus');
Route::post('jugit', 'AdminController@jugit');
Route::post('baruikegiatanpta', 'AdminController@baruikegiatanpta');
Route::post('baruisatu', 'AdminController@baruisatu');
Route::post('baruidua', 'AdminController@baruidua');
Route::post('baruitiga', 'AdminController@baruitiga');
Route::post('baruiempat', 'AdminController@baruiempat');
Route::post('baruilima', 'AdminController@baruilima');
Route::post('baruienam', 'AdminController@baruienam');
Route::post('baruitujuh', 'AdminController@baruitujuh');
Route::post('baruidelapan', 'AdminController@baruidelapan');
Route::post('baruisembilan', 'AdminController@baruisembilan');
Route::post('baruisepuluh', 'AdminController@baruisepuluh');
Route::post('baruikegiatanbantara', 'AdminController@baruikegiatanbantara');
Route::post('baruisatubantara', 'AdminController@baruisatubantara');
Route::post('baruiduabantara', 'AdminController@baruiduabantara');
Route::post('baruitigabantara', 'AdminController@baruitigabantara');
Route::post('baruiempatbantara', 'AdminController@baruiempatbantara');
Route::post('baruilimabantara', 'AdminController@baruilimabantara');
Route::post('baruienambantara', 'AdminController@baruienambantara');
Route::post('baruitujuhbantara', 'AdminController@baruitujuhbantara');
Route::post('baruidelapanbantara', 'AdminController@baruidelapanbantara');
Route::post('baruisembilanbantara', 'AdminController@baruisembilanbantara');
Route::post('baruisepuluhbantara', 'AdminController@baruisepuluhbantara');
Route::post('baruikegiatan', 'AdminController@baruikegiatan');
Route::post('baruisatukegiatan', 'AdminController@baruisatukegiatan');
Route::post('baruiduakegiatan', 'AdminController@baruiduakegiatan');
Route::post('baruitigakegiatan', 'AdminController@baruitigakegiatan');
Route::post('baruiempatkegiatan', 'AdminController@baruiempatkegiatan');
Route::post('baruilimakegiatan', 'AdminController@baruilimakegiatan');
Route::post('baruienamkegiatan', 'AdminController@baruienamkegiatan');
Route::post('baruitujuhkegiatan', 'AdminController@baruitujuhkegiatan');
Route::post('baruidelapankegiatan', 'AdminController@baruidelapankegiatan');
Route::post('baruisembilankegiatan', 'AdminController@baruisembilankegiatan');
Route::post('baruisepuluhkegiatan', 'AdminController@baruisepuluhkegiatan');
Route::post('artikel', 'AdminController@artikel');
Route::post('baruiartikel', 'AdminController@baruiartikel');
Route::post('baruipeserta', 'AdminController@baruipeserta');
Route::post('baruibug', 'AdminController@baruibug');

Route::post('komentar', 'AdminController@komentar');
Route::post('forum', 'AdminController@forum');
Route::post('admin', 'AdminController@admin');
Route::post('rekomendasikomentar', 'AdminController@rekomendasikomentar');
Route::post('favorit', 'AdminController@favorit');
Route::post('absensipeserta', 'AdminController@absensipeserta');
Route::post('kaspeserta', 'AdminController@kaspeserta');
Route::post('inputpeserta', 'AdminController@inputpeserta');
Route::post('pembinaan', 'AdminController@pembinaan');
Route::post('reportbug', 'AdminController@reportbug');

Route::get('hapusadmin/{id}', 'AdminController@hapusadmin');
Route::get('abaikanrekomendasi/{id}', 'AdminController@abaikanrekomendasi');
Route::get('hapusrekomendasi/{id}', 'AdminController@hapusrekomendasi');
// Route::get('tolakpasus/{id}', 'AdminController@tolakpasus');
Route::get('hapusartikel/{id}', 'AdminController@hapusartikel');
Route::get('hapusforum/{id}', 'AdminController@hapusforum');
Route::get('hapuspeserta/{id}', 'AdminController@hapuspeserta');
Route::get('truncatepeserta', 'AdminController@truncatepeserta');
Route::get('truncatekas', 'AdminController@truncatekas');
Route::get('truncateabsen', 'AdminController@truncateabsen');
Route::get('hapusaktivitas/{id}', 'AdminController@hapusaktivitas');
Route::get('hapusgaleri/{id}', 'AdminController@hapusgaleri');
Route::get('hapuskomentar/{id}', 'AdminController@hapuskomentar');
Route::get('truncatekomentar', 'AdminController@truncatekomentar');
Route::get('hapuspembinaan/{id}', 'AdminController@hapuspembinaan');
Route::get('hapusdetailpembinaan/{id}', 'AdminController@hapusdetailpembinaan');
Route::get('truncatepembinaan', 'AdminController@truncatepembinaan');

Route::get('downlaodabsensi', 'RouteController@downlaodabsensi');

Route::post('login', 'AdminController@login');
Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('/');
});