-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 12:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pramuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensipeserta`
--

CREATE TABLE IF NOT EXISTS `absensipeserta` (
`id` int(2) NOT NULL,
  `nis` int(8) NOT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id` int(2) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nama`, `agenda`, `created_at`, `updated_at`) VALUES
(1, 'Raka Priyo Rachmanda', 'Perkemahan Bantara sebentar lagi akan dilaksanakan pada tanggal 27 Febuari 2016', '2016-03-06 08:58:51', '2016-03-06 01:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE IF NOT EXISTS `aktivitas` (
`id_aktivitas` int(2) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `aktivitas` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id_aktivitas`, `judul`, `aktivitas`, `created_at`, `updated_at`) VALUES
(1, 'Ayooo ikuti perkemahan Laksana', '<p><span style="color: rgba(0, 0, 0, 0.870588); font-family: Roboto, sans-serif; font-size: 15px; line-height: 22.5px;">Contoh jadwal kegiatan Kemah Pelantikan Bantara ini merupakan contoh susunan acara dalam kegiatan perkemahan pelantikan SKU Bantara bagi pramuka penegak. Di mana dalam pelaksanaan sebuah kegiatan, termasuk kemah pelantikan Pramuka Bantara, jadwal menjadi perangkat kegiatan yang sangat penting karena menyangkut kelancaran pelaksanaan kegiatan. Jadwal tersebut menjadi acuan bagi pelaksana kegiatan dalam melaksanakan kegiatan. Pun menjadi pedoman bagi peserta didik perkemahan sehingga dapat mengatur waktu dan mempersiapkan segala sesuatu terkait kegiatan yang akan diikutinya. Dalam penyusunan jadwal kegiatan perlu memperhatikan berbagai aspek mulai dari jenis dan tujuan kegiatan, waktu dan tempat pelaksanaan kegiatan, hingga kondisi fisik dan psikis peserta. Pun dalam menyusun jadwal kegiatan kemah pelantikan Penegak Bantara. Kemah Pelantikan Pramuka Penegak Bantara sendiri merupakan sebuah perkemahan yang maksudkan untuk menyelesaikan uji SKU Penegak Bantara sekaligus melakukan pelantikan. Penyelesaian SKU sendiri biasanya dapat dilakukan di pangkalan masing-masing dan sisanya (nomor-nomor kecakapan yang belum selesai) dapat diselesaikan di perkemahan. Di samping kedua kegiatan tersebut, dalam jadwal perkemahan pelantikan Penegak bantara perlu dimasukkan berbagai kegiatan lainnya sehingga menarik dan menantang bagi peserta didik.</span></p>', '2016-02-09 15:15:17', '2016-02-09 08:15:17'),
(2, 'LTUB Sambangi SMK Wikrama Bogor', '<p style="font-family: Verdana, Arial, Tahoma; text-align: justify; margin: 4px; line-height: 20px; font-size: 12px; padding-right: 10px; padding-left: 5px;">Lomba Tata Upacara Bendera (LTUB) 2015 Kota Bogor resmi dimulai sejak 21 September. Setiap sekolah yang menjadi peserta diwajibkan menghelat LTUB di sekolahnya masing-masing, tak terkecuali SMK Wikrama. Tak heran, dalam rangka menyambut kedatangan pihak penyelenggara dan juri, SMK Wikrama mempersiapkan segala hal yang diperlukan jauh-jauh hari. Lomba yang diselenggarakan oleh Dinas Pendidikan Kota Bogor ini berhasil menarik minat 64 sekolah untuk berpartisipasi sebagai peserta. Hebatnya lagi, seperti tahun-tahun sebelumnya, tahun ini Dinas Pendidikan Kota Bogor berhasil menggandeng kembali Purnapaskibra Indonesia (PpI), TNI, dan Polri sebagai juri lomba. Berdasarkan hasil undian peserta, SMK Wikrama mendapat nomor undian 2C, artinya lomba digelar pada hari kedua. Walaupun dibagi dalam dua hari, peserta LTUB bisa sedikit bernapas lega, setelah panitia penyelenggara menerapkan sistem juri datang ke setiap sekolah peserta.</p>\r\n<p style="font-family: Verdana, Arial, Tahoma; text-align: justify; margin: 4px; line-height: 20px; font-size: 12px; padding-right: 10px; padding-left: 5px;">SMK Wikrama yang telah melakukan persiapan matang berhasil menghimpun 200 peserta didik dan 20 guru yang akan dilibatkan sebagai petugas dan peserta LTUB tahun ini. Selain mengejar prestasi lomba, keikutsertaan SMK Wikrama bertujuan untuk memberi pengetahuan kepada seluruh warga sekolah tentang bagaimana semestinya upacara berlangsung.</p>\r\n<p style="font-family: Verdana, Arial, Tahoma; text-align: justify; margin: 4px; line-height: 20px; font-size: 12px; padding-right: 10px; padding-left: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &rdquo;LTUB sangat baik untuk mengetahui sejauh mana keterampilan upaca bendera di sekolah yang sesuai dengan aturan&rdquo; Tutur Nurjalil, S.Pd., pembina OSIS SMK Wikrama.</p>\r\n<p style="font-family: Verdana, Arial, Tahoma; text-align: justify; margin: 4px; line-height: 20px; font-size: 12px; padding-right: 10px; padding-left: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lebiah lanjut ia menambahkan bahwa lomba-lomba seperti ini memang sudah sepantasnya diikuti oleh seluruh sekolah karena dapat memberikan banyak pembelajaran dan pelatihan, terutama pelatihan mental.</p>\r\n<p style="font-family: Verdana, Arial, Tahoma; text-align: justify; margin: 4px; line-height: 20px; font-size: 12px; padding-right: 10px; padding-left: 5px;">Aerwin-Tim Pengajar Bahasa Indonesia</p>', '2016-03-05 08:13:59', '2016-03-05 08:13:59');

-- --------------------------------------------------------

--
-- Stand-in structure for view `alfa`
--
CREATE TABLE IF NOT EXISTS `alfa` (
`nama` varchar(50)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`jk` varchar(20)
,`alfa` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `ambalan`
--

CREATE TABLE IF NOT EXISTS `ambalan` (
`id_ambalan` int(5) NOT NULL,
  `ambalan` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ambalan`
--

INSERT INTO `ambalan` (`id_ambalan`, `ambalan`, `created_at`, `updated_at`) VALUES
(1, 'Merah 1', '2016-03-04 15:10:45', '0000-00-00 00:00:00'),
(2, 'Merah 2', '2016-03-04 15:11:19', '0000-00-00 00:00:00'),
(3, 'Merah 3', '2016-03-04 15:11:19', '0000-00-00 00:00:00'),
(4, 'Merah 4', '2016-03-04 15:13:12', '0000-00-00 00:00:00'),
(5, 'Merah 5', '2016-03-04 15:13:12', '0000-00-00 00:00:00'),
(6, 'Merah 6', '2016-03-04 15:13:12', '0000-00-00 00:00:00'),
(7, 'Merah 7', '2016-03-04 15:13:12', '0000-00-00 00:00:00'),
(8, 'Merah 8', '2016-03-04 15:13:12', '0000-00-00 00:00:00'),
(9, 'Merah 9', '2016-03-04 15:13:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(2) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artikel` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `admin` varchar(60) NOT NULL,
  `foto_admin` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `artikel`, `gambar`, `admin`, `foto_admin`, `waktu`, `created_at`, `updated_at`) VALUES
(3, 'Menemukan makanan di hutan', '<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Jika anda berpetualang di hutan belantara kemudian tersesat, resiko seperti ini harus dimengerti terutama bagi petualang pemula. Oleh karena itu&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" title="Manajemen Pendakian" href="http://www.pecintaalam.net/manajemen-pendakian/">sebelum menjelajah</a>&nbsp;anda harus membekali diri dengan pengetahuan dasar bagaimana cara bertahan hidup di hutan.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Pengetahuan ini dinamakan Teknik Survival atau Bertahan Hidup. Untuk bertahan hidup ada beberapa kondisi minimum yang harus dimiliki oleh seorang&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/gunung-gunung-di-indonesia-ketinggian-diatas-3-000-mdpl/">petualang</a>, terutama dalam hal mencari dan menemukan makan dan minum di hutan belantara.<br />Anda dilarang asal-asalan memilih calon sumber makanan jika berada di hutan. Karena calon sumber makanan itu harus lolos seleksi dahulu supaya tidak mengakibatkan beberapa hal yang membahayakan, misal: keracunan, gatal-gatal, alergi, infeksi, mual, mencret bahkan yang fatal dapat mengakibatkan kematian.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Menemukan Makanan di Hutan</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Berikut beberapa pedoman penting kita menemukan calon sumber makanan kita di hutan:</p>\r\n<ol>\r\n<li>Pilih tumbuhan yang dimakan monyet/kera.</li>\r\n<li>Secara genetik primata ini yang paling menyerupai manusia, otomatis makanan yang mereka makan akan lebih mudah diterima oleh pencernaan kita.</li>\r\n<li>Anda dapat mencari atau berburu hewan</li>\r\n<li>Misal: Ayam hutan, burung, jangkrik, serangga, kelelawar, katak, tikus, cacing dll</li>\r\n<li>Hindari tumbuhan berbulu.</li>\r\n<li>Tumbuhan berbulu, tidak bisa dicerna oleh organ pencernaan manusia. Kalau tetap nekat memakannya, Anda bisa mengalami iritasi organ pencernaan.</li>\r\n<li>Hindari Tumbuhan yang mengandung banyak getah.</li>\r\n<li>Tumbuhan bergetah biasanya gatal dan menyebabkan keracunan.</li>\r\n<li>Hindari tumbuhan yang berbau tidak sedap atau menyebabkan pusing</li>\r\n<li>Carilah umbi dari tanaman</li>\r\n<li>Misal: bengkoang, talas, kentang, dll</li>\r\n<li>Carilah Batang yang dapat dimakan.</li>\r\n<li>Misal: tebu, rebung, batang pisang, dll</li>\r\n<li>Carilah Daun yang dapat dimakan</li>\r\n<li>Misal: selada air, daun paku, daun singkong, daun pakis, dll</li>\r\n<li>Jika terpaksa carilah Jamur.</li>\r\n<li>Hindari yang berwarna mencolok, baunya menyengat, mengeluarkan getah, tumbuh di kotoran hewan dan berbintik-bintik kontras.</li>\r\n</ol>\r\n<p><span style="color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; line-height: 24px;">Setelah anda menyeleksi calon makanan itu, sebelum anda makan sebaiknya anda rebus terlebih dahulu sampai matang.</span></p>', 'jamur.jpg', 'Raka Priyo Rachmanda', 'WIN_20151120_21_14_05_Pro.jpg', '0000-00-00 00:00:00', '2015-12-26 08:18:39', '2015-12-26 01:18:39'),
(4, 'Tips mendaki bagi pemula', '<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Tips pendaki pemula sangat layak untuk disimak jika anda merencanakan untuk mendaki atau berpetualang dalam waktu dekat.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Bersyukurlah, Indonesia memiliki banyak gunung-gunung yang kecantikannya sudah tersohor. Selain memacu adrenalin, keindahan di puncak gunung dan&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/karimunjawa/" target="_blank">bentangan panorama</a>di sekitarnya jadi daya tarik tiada dua. Oleh sebab itu, tak sedikit&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/menjadi-backpacker-pemula/" target="_blank">penikmat alam</a>&nbsp;yang menghabiskan waktu liburan untuk naik gunung.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Bagi Anda yang akan memulai petualangan mendaki gunung, baca dulu tips pendaki pemula :</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">1. Pelajari lokasi gunung yang akan didaki</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Satu persiapan penting sebelum mendaki gunung adalah mempelajari medan dan lokasi gunung tujuan Anda. Sebab, tiap-tiap gunung punya jalur pendakian yang berbeda-beda.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Di Gunung Kerinci misalnya, mayoritas medan pendakian di sana adalah pasir dan lumpur. Di Gunung Rinjani, Anda harus jalan menanjak dengan medan perjalanan yang hampir 45 derajat.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Anda bisa&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/" target="_blank">mempelajari lokasi pendakian</a>&nbsp;dari berbagai sumber di internet, situs seperti<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://travel.detik.com/" target="_blank">detikTravel</a>&nbsp;atau bertanya dengan pendaki yang sudah mencobanya. Dengan mengetahui medan perjalanan, Anda dapat mempersiapkan logistik dan stamina dengan tepat.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">2. Berolahraga sebelum naik gunung</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Jangan anggap enteng perjalanan mendaki gunung. Dibutuhkan stamina yang fit dan kondisi badan yang baik bagi traveler untuk bisa mencapai puncaknya.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Ada baiknya Anda berolahraga beberapa minggu sebelum hari pendakian, seperti jogging. Jalur pendakian yang menanjak, udara yang dingin, dan oksigen yang menipis akan jadi halangan terberat. Lakukanlah olahraga dengan rutin dan teratur, jangan lupa juga untuk menyeimbangkan waktu istirahat Anda.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">3. Sediakan peralatan dengan cermat dan tepat</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Peralatan yang umum dibawa para pendaki adalah tas carrier, sepatu hiking, jaket, pisau lipat, jas hujan, alat masak portabel, senter, peluit, kompas, dan perlengkapan obat P3K. Kalau Anda berkemping di gunung, jangan lupa untuk membawa&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/matras-tidur/" target="_blank">matras</a>,&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/memilih-tenda/" target="_blank">tenda</a>, dan sleeping bag.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Tas carrier harus disesuaikan dengan durasi perjalanan. Jika perjalanan panjang, Anda bisa membawa tas carrier dengan ukuran 80 liter. Pilih alat masak portabel agar ringan dan mudah pengoperasiannya.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Soal sleeping bag, ada bermacam-macam jenis, sesuaikan dengan temperatur gunung atau lokasi yang akan dijelajahi. Hal ini membuat Anda lebih hangat saat kemping di gunung.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">4. Ketahui perbekalan dan logistik</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Perbekalan makanan memegang peran penting dalam pendakian gunung. Siapkan perbekalan makanan secukupnya, sehingga Anda tidak akan kekurangan makanan atau sia-sia membuang makanan yang tidak termakan.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Bawalah makanan seperti beras, mie instan, atau kornet yang bisa menjadi menu makan Anda. Selain itu, siapkan juga biskuit, cokelat dan roti yang bakal mengisi tenaga sembari Anda berjalan mendaki. Dan tidak ketinggalan cadangan air, jika sewaktu-waktu terjadi keadaan darurat.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">5. Mendaftar di pos perijinan terlebih dulu</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Biasanya, beberapa gunung memiliki tempat perizinan yang mengharuskan para pendaki mengisi data diri dan lama perjanan. Jangan acuhkan tempat tersebut, karena para petugas di sanalah yang nantinya akan membantu Anda.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: #ffa300; background: transparent;" href="http://www.pecintaalam.net/gunung-gunung-di-indonesia-ketinggian-diatas-3-000-mdpl/" target="_blank">Beberapa gunung yang populer&nbsp;</a>dan mengharuskan pendakinya untuk membuat izin mendaki adalah, Gunung Kerinci, Gunung Gede-Pangrango, Gunung Argopuro, dan Gunung Semeru. Dengan mendaftarkan diri di pos, maka anda sudah memiliki itikad yang baik dalam menjalankan penjelajahan anda.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">6. Jaga handphone dan kamera dengan baik</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Sebelum naik gunung, ada baiknya Anda mematikan handphone serta kamera dan menaruhnya di dalam plastik untuk melindungi dari rembesan air. Selain itu, masukanlah handphone Anda ke dalam syal yang digulung atau ke dalam jaket yang tebal. Hal tersebut berfungsi untuk menjaga handphone tetap hangat dan tidak boros baterai. Ya, udara dingin di gunung dapat membuat baterai handphone cepat terkuras.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Sebelum naik gunung, kabari orang tua atau kerabat terdekat. Ini bertujuan agar mereka dapat membantu tim SAR atau pihak keamanan setempat, jika Anda hilang atau tersesat dalam pendakian.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">7. Berdoa dan bertindaklah dengan sopan</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Biasakan, untuk berdoa terlebih dulu sebelum memulai pendakian gunung. Mintalah bantuan dan pertolongan kepada Tuhan agar menjaga Anda selama perjalanan.</p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Saat mendaki, ingatkan diri sendiri dan sesama teman untuk tetap bertindak sopan. Usahakanlah satu tim Anda untuk tidak terlalu bertingkah berlebihan atau berbicara yang kasar.</p>\r\n<h2 style="margin: 0px; padding: 0px 0px 5px; border: 0px; outline: 0px; font-size: 24px; vertical-align: baseline; color: #111111; line-height: 1em; font-weight: normal; letter-spacing: -1px; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">8. Ingat Prinsip Pecinta Alam</h2>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Prinsip yang harus dipegang teguh.&nbsp;<em style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Take nothing but picture, Leave nothing but footprint, Kill nothing but time.</em></p>\r\n<p style="margin: 0px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; line-height: 24px; color: #555e58; font-family: ''Open Sans'', Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Tidak mengambil sesuatu kecuali foto, tidak meninggalkan sesuatu kecuali jejak kaki, tidak membunuh sesuatu kecuali waktu. Ini adalah prinsip agar pendaki gunung selalu menjaga keharmonisan dan kelestarian alam.</p>', 'pendaki.jpg', 'Raka Priyo Rachmanda', 'WIN_20151120_21_14_05_Pro.jpg', '0000-00-00 00:00:00', '2015-12-26 08:19:11', '2015-12-26 01:19:11'),
(5, 'Pramuka, Media Pendidikan Di Alam Terbuka', '<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;"><em>Anggaran Dasar Gerakan Pramuka &nbsp;menargetkan bahwa upaya dan usaha untuk mencapai tujuan Gerakan Pramuka adalah diarahkan pada pembinaan watak, mental, emosional, jasmani, bakat, serta peningkatan iman dan takwa kepada Tuhan Yang Maha Esa.</em></p>\r\n<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;">Kepramukaan ialah proses pendidikan luar lingkungan sekolah dan di luar keluarga dalam bentuk kegiatan menarik, menyenangkan, sehat, teratur, terarah, praktis, yang dilakukan di alam terbuka dengan prinsip dasar kepramukaan dan metode kepramukaan, yang sasaran akhirnya pembentukan watak.</p>\r\n<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;">Melihat uraian di atas, jelas bahwa kegiatan kepramukaan adalah kegiatan menarik yang dilakukan di alam terbuka. Kegiatan ini merupakan salah satu ciri khas pelaksanaan kegiatan Pramuka yang membedakan kegiatan tersebut dengan kegiatan di luar kepramukaan. Bagaimana tidak, saat ini ada sebagian gugus depan yang melaksanakan kegiatan kepramukaan terpaku dilaksanakan di lingkungan sekolah, bahkan untuk kegiatan berkemah pun dilaksanakan di sekolah, dengan menggunakan ruang belajar sebagai arena kegiatan. Padahal, kegiatan berkemah merupakan kegiatan yang sangat digemari para peserta didik, apalagi menjelang liburan bahkan pada saat liburan sebagai agenda kegiatan yang telah disiapkan oleh peserta didik, di sela-sela acara keluarga ataupun acara lainnya. Sebenarnya, kegiatan perkemahan merupakan kegiatan di alam terbuka yang kebanyakan dilakukan di hutan, pegunungan, pantai, ataupun tempat lain yang layak dipergunakan untuk berkemah.</p>\r\n<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;">Dalam kegiatan kepramukaan, berkemah merupakan salah satu syarat yang tercantum dalam SKU. Hal ini menjadi keharusan bagi peserta didik untuk melakukan perkemahan agar bisa menempuh SKU tersebut. Dengan kata lain, peserta didik harus bisa bersatu dengan alam, di mana dalam acara perkemahan tersebut peserta didik bisa melaksanakan kegiatan berupa penjelajahan, mendaki gunung, serta mempelajari atau mengambil gambar/foto flora dan fauna yang ada di sekitar perkemahan.</p>\r\n<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;">Maka, jika kegiatan perkemahan dilaksanakan di sekolah rasanya kurang mencapai sasaran yang telah ditetapkan kecuali untuk golongan siaga. Karena, dengan melakukan kegiatan perkemahan di alam terbuka, seperti bumi perkemahan, hutan, dll. peserta didik akan diberikan tantangan oleh keadaan alam sekitarnya. Hambatan dan rintangan tidak ada yang tidak bisa dikerjakan, semua kesulitan harus bisa diselesaikan.</p>\r\n<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;">Selain itu, kegiatan kepramukaan yang selalu dilaksanakan di lingkungan sekolah merupakan suatu kejenuhan bagi peserta didik sehingga lama-lama peserta didik akan merasa bosan dan malas mengikuti kegiatan latihan, karena setiap saat baik latihan pramuka maupun belajar tempatnya selalu begitu saja, atau di tempat itu-itu saja tidak ada variasi. Jadi, tidak salah apabila kita membuat rencana latihan dengan menggunakan alam terbuka sebagai media latihan. Karena sudah jelas disebutkan bahwa kepramukaan adalah kegiatan yang dilaksanakan di luar sekolah ataupun lingkungan keluarga yang dilaksanakan di alam terbuka. Dengan demikian, kegiatan kepramukaan khususnya kegiatan perkemahan dilakukan di luar lingkungan sekolah, dalam arti di alam terbuka sebagai tujuan untuk mendidik dan membina peserta didik agar mereka bisa&nbsp;<em>survive</em>/bertahan di alam dengan segala macam rintangan, hambatan, dan alakadarnya yang ada pada dirinya. Dengan melakukan kegiatan di alam terbuka, peserta didik diharapkan terhindar dari kejenuhan akan rutinitas kehidupan sehari-hari.</p>\r\n<p style="border: 0px; font-family: Puritan, Arial, Helvetica, sans-serif; font-size: 16px; margin: 0px 0px 1.5em; outline: 0px; padding: 0px; vertical-align: baseline; color: #333333; line-height: 24px;">Dengan kegiatan di alam terbuka, peserta didik bisa bersatu dengan alam, dan alam terbuka akan memberikan banyak pelajaran bagi peserta didik. Oleh karena itu, sangat tepat kalau salah satu media yang efektif membentuk kepribadian seorang Pramuka adalah alam semesta. Dia bisa hidup dan bertahan dengan alam karena alam akan bersahabat dengan kita apabila kita mau melestarikan dan menjaganya dari usikan-usikan tangan jahil yang tidak bertanggung jawab.</p>', 'DSC_0211.JPG', 'Raka Priyo Rachmanda', 'WIN_20151120_21_14_05_Pro.jpg', '0000-00-00 00:00:00', '2016-01-01 01:36:32', '2016-01-01 01:36:32'),
(7, 'Pramuka membentuk jiwa berani', '<p>Pramuka merupakan organisasi untuk membentuk karakter dan kepribadian yang baik, dengan pramuka kita bisa hidup dengan mandiri</p>', 'DSC_0461.JPG', 'Raka Priyo Rachmanda', 'WIN_20151120_21_14_05_Pro.jpg', '0000-00-00 00:00:00', '2016-10-30 14:18:02', '2016-01-06 01:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
`id` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `forum` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `nama`, `foto`, `forum`, `created_at`, `updated_at`) VALUES
(6, 'Raka Priyo Rachmanda', 'WIN_20151120_21_14_02_Pro.jpg', 'Salam Pramukaaaa', '2016-02-11 01:33:38', '2016-02-11 01:33:38'),
(7, 'Firliani Fauziah', '100_5100.JPG', 'Salam pramuka', '2016-03-08 23:25:29', '2016-03-08 23:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id` int(2) NOT NULL,
  `id_aktivitas` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `id_aktivitas`, `foto`, `created_at`, `updated_at`) VALUES
(2, 1, 'DSC_0204.JPG', '2016-10-30 14:12:42', '2016-02-10 07:11:53'),
(7, 2, 'ltub.jpg', '2016-03-05 08:15:24', '2016-03-05 08:15:24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hadir`
--
CREATE TABLE IF NOT EXISTS `hadir` (
`nama` varchar(50)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`jk` varchar(20)
,`hadir` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
`id` int(2) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `nama`, `informasi`, `created_at`, `updated_at`, `remember_token`) VALUES
(2, 'Raka Priyo Rachmanda', 'Pada tanggal 8 Maret 2016 akan diadakan pelantikan Bantara', '2015-12-13 14:42:12', '2016-03-06 01:58:29', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `izin`
--
CREATE TABLE IF NOT EXISTS `izin` (
`nama` varchar(50)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`jk` varchar(20)
,`izin` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `jugit`
--

CREATE TABLE IF NOT EXISTS `jugit` (
`id` int(2) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kaspeserta`
--

CREATE TABLE IF NOT EXISTS `kaspeserta` (
`id` int(2) NOT NULL,
  `nis` int(8) NOT NULL,
  `tgl_kas` date NOT NULL,
  `kas` int(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`id` int(2) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kegiatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'HUT Ambalan Merah Putih', '<p>Apa saja sih dalam merayakan HUT Ambalan, ayo kita cari tau yuk...</p>\r\n<p>Pada tanggal 4 Meret pada setiap tahunnya ambalan kami sering merayakan dengan berbagai macam kegiatan seperti lomba, penanaman pohon, kerja bakhti, dan lain lain, terus apa saja mata lomba yang di ikut sertakan yuk kita cari tau</p>\r\n<p>1. Tarik tambang</p>\r\n<p>2. Balap karung</p>\r\n<p>3. Futsal</p>\r\n<p>4. Poster</p>\r\n<p>5. Cerdas cermat</p>\r\n<p>6. Hafidz qur''an</p>\r\n<p>7. Puisi</p>', '2016-04-25 02:15:16', '2016-03-05 05:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanbantara`
--

CREATE TABLE IF NOT EXISTS `kegiatanbantara` (
`id` int(2) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kegiatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kegiatanbantara`
--

INSERT INTO `kegiatanbantara` (`id`, `judul`, `kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Apa sih perkemahan Bantara itu?', '<p><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: 14.6667px; line-height: 18px; text-align: justify;">Kemah Pelantikan&nbsp;Pramuka&nbsp;</span><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: 14.6667px; line-height: 18px; text-align: justify;">Penegak Bantara sendiri merupakan sebuah perkemahan yang maksudkan untuk menyelesaikan uji sku Bantara</span><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: 14.6667px; line-height: 18px; text-align: justify;">&nbsp;sekaligus melakukan pelantikan. </span></p>\r\n<p><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: 14.6667px; line-height: 18px; text-align: justify;">Penyelesaian SKU sendiri biasanya dapat dilakukan di pangkalan masing-masing dan sisanya (nomor-nomor kecakapan yang belum selesai) dapat diselesaikan di perkemahan. </span></p>\r\n<p><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: 14.6667px; line-height: 18px; text-align: justify;">Di samping kedua kegiatan tersebut, dalam jadwal perkemahan pelantikan Penegak bantara perlu dimasukkan berbagai kegiatan lainnya sehingga menarik dan menantang bagi peserta didik.</span></p>\r\n<p>&nbsp;</p>', '2016-03-04 16:42:44', '2016-03-04 09:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanpta`
--

CREATE TABLE IF NOT EXISTS `kegiatanpta` (
`id` int(2) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kegiatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kegiatanpta`
--

INSERT INTO `kegiatanpta` (`id`, `judul`, `kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Apa Sih Makna Dari Penerimaan Tamu Ambalan ?', '<div class="separator" style="outline: 0px; transition: all 0.5s ease; padding: 0px; border: 0px; vertical-align: baseline; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px; clear: both; text-align: left; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: initial;">\r\n<p>Banyak ade ade yang ragu jika masuk pramuka, mereka cenderung menilai bahwa pramuka itu kejam, jorok, judes, over act, dan tidak manusiawi. Kenapa bisa demikian? ada beberapa sebab kenapa pramuka selalu dinilia demikian diantaranya sebagai berikut:</p>\r\n<ol>\r\n<li>Kegiatan pramuka yang identik dengan militer.</li>\r\n<li>Pramuka identik dengan panas - panasan.</li>\r\n<li>Pramuka selalu ada gertakan apalagi dalam proses kegiatam perkemahan</li>\r\n<li>Sistem pendidikan dan pengembangannya dianggap kuno. Bayangkan dari mulai ditemukan sampai saat ini sandi morse tidak lepas menjadi materi pokok anggotanya.</li>\r\n</ol>\r\n</div>\r\n<div class="separator" style="outline: 0px; transition: all 0.5s ease; padding: 0px; border: 0px; vertical-align: baseline; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px; clear: both; text-align: left; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: initial;"><span style="color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;">Nah dengan sebagain alasan tersebut seharusnya para civitas baik dewan ambalan maupun para pembina harus kreatif dalam menyusun materi yang akan diberikan kepada anak didiknya maupun ade ade didiknya. Hal ini supaya pramuka bisa berjalan dan menyesuaikan dengan perkembangan kurikulum dan juga kemajuan teknologi.</span><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><span style="color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;">Sebenarnya sistem pengajaran di pramuka SMK WIKRAMA Kota Bogor&nbsp;sudah dirombak secara bertahap termasuk pada angkatan saya (angkatan 18) pada tahun 2013. Saat itu kami merombak sistem kedisiplinan yang diatur dan dilaksanakan oleh seluruh anggota pramuka yang tugas pokoknya diberikan kepada juru adat (judat) dan dituangkan dalam buku pedoman kedisiplinan pramuka, kami pun merombak silabus pengajaran yang setiap pertemuan diselipkan pendidikan yang berbasis pada kreativitas entah itu yang bersifat teoritis mapun praktek.</span><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><span style="color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;">Namun akhir akhir ini pramuka benar benar berubah 180 derajat, sistem kedisiplinan tidak lagi dipakai sebagai acuan pokok dalam mendidik semua anggotanya, malahan ada kabar bahwa juru adatpun sudah ditiadakan dalam struktur kepengurusan dewan ambalan, benar benar memprihatinkan..wajah pendidikan di negara kita ini.</span><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><span style="color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;">Tidak jauh dari itu mereka yang notabene siswa baru (salam tahap orientasi peserta didik) MOPD selalu dihadapkan dengan adanya kegiatan penerimaan tamu ambalan yang merupakan hajat besar setiap Dewan Ambalan termasuk di SMK WIKRAMA Kota Bogor. Mereka tamu ambalan (siswa baru) dibebankan dengan diberikannya permainan peralatan dengan kata - kata yang cukup sulit untuk dipecahakan. Akhirnya mereka mengeluh dengan berbagai alasan baik kepada pembina, orang tua maupun mengadukan secara langsung kepada kepala sekolah, sungguh tindakan ini menyedihkan mereka sebagai siswa baru yang seharusnya tanggap dalam setiap persoalan cenderung mengambil keputusan secara sepihak yang dapat mengakibatkan terkekangnya program kerja dewan ambalan..</span><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><span style="color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;">Mereka tidak pandai dalam menterjemahkan arti pilosofis dan kerja keras dalam setiap kehidupan. Penerimaan tamu ambalan adalah langkah awal dalam melatih kedesiplinan, kepemimpinan dan kerja keras. Mereka dilatih bukan lagi sebagai anak - anak yang cengeng dan arogansi tapi didik menjadi pemuda dan pemudi yang tanggap, tangkas, disiplin, kreatif dan kritis terhadap setiap permasalahan.</span><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><br style="outline: 0px; transition: all 0.5s ease; color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;" /><span style="color: #626262; font-family: ''Roboto Slab'', Arial, sans-serif; font-size: 12px; line-height: 20px;">Mudah - mudahan dengan semakin berkembangya kemajuan dalam segala hal. Ambalan Merah Putih&nbsp;bisa maju dalam segala hal. Maju dalam intelektualnya, maju dalam kedisiplinananya dan maju dalam setiap kegiatan dikancah kwaran, kwarcab maupun dikanca kwarnas. Kita tahu bahwa pangkalan SMK WIKRAMA Kota Bogor adalah kegiatan belajar mengajar&nbsp;yang banyak menghasilkan pemimpin yang tangguh dan disegani.</span></div>', '2016-02-15 09:48:38', '2016-02-15 02:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ket` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_30_141346_web', 1),
('2015_10_30_142533_komentar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembinaan`
--

CREATE TABLE IF NOT EXISTS `pembinaan` (
`id` int(2) NOT NULL,
  `nis` int(8) NOT NULL,
  `pembinaan` varchar(300) NOT NULL,
  `tgl_pembinaan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id` int(2) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Raka Priyo Rachmanda', 'Diingatkan pada hari selasa 12 Januari 2016 untuk mengumpulkan tugas.', '2016-01-05 12:20:15', '2016-01-05 05:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`id` int(2) NOT NULL,
  `nis` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `rombel` varchar(20) NOT NULL,
  `rayon` varchar(20) NOT NULL,
  `sangga` varchar(20) NOT NULL,
  `ambalan` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `q_absensi`
--
CREATE TABLE IF NOT EXISTS `q_absensi` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`keterangan` varchar(1)
,`tgl_absen` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_banyak_pembinaan`
--
CREATE TABLE IF NOT EXISTS `q_banyak_pembinaan` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`pembinaan` varchar(300)
,`tgl_pembinaan` timestamp
,`banyak_pembinaan` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_data_absensi`
--
CREATE TABLE IF NOT EXISTS `q_data_absensi` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`keterangan` varchar(1)
,`tgl_absen` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_galeriaktivitas`
--
CREATE TABLE IF NOT EXISTS `q_galeriaktivitas` (
`id_aktivitas` int(2)
,`judul` varchar(200)
,`aktivitas` text
,`created_at` timestamp
,`updated_at` timestamp
,`id` int(2)
,`foto` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_kas`
--
CREATE TABLE IF NOT EXISTS `q_kas` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`kas` int(8)
,`tgl_kas` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_pembinaan`
--
CREATE TABLE IF NOT EXISTS `q_pembinaan` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`pembinaan` varchar(300)
,`tgl_pembinaan` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_peserta`
--
CREATE TABLE IF NOT EXISTS `q_peserta` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`keterangan` varchar(1)
,`tgl_absen` date
,`kas` int(8)
,`tgl_kas` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_totalkas`
--
CREATE TABLE IF NOT EXISTS `q_totalkas` (
`id` int(2)
,`nis` int(2)
,`nama` varchar(50)
,`agama` varchar(30)
,`jk` varchar(20)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`foto` varchar(255)
,`rombel` varchar(20)
,`rayon` varchar(20)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`alamat` varchar(150)
,`created_at` timestamp
,`updated_at` timestamp
,`kas` int(8)
,`tgl_kas` date
,`total` decimal(32,0)
);
-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_komentar`
--

CREATE TABLE IF NOT EXISTS `rekomendasi_komentar` (
`id` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `date` date NOT NULL,
  `admin` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rekomendasi_komentar`
--

INSERT INTO `rekomendasi_komentar` (`id`, `nama`, `email`, `komentar`, `date`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Raka Priyo Rachmanda', 'raka.priyo@gmail.com', 'Salam pramuka', '0000-00-00', 'Admin Utama', '2015-12-13 07:10:30', '2015-12-13 07:10:30'),
(2, 'Firliani Fauziah', 'Firlianif@gmail.com', 'Salam Pramuka', '0000-00-00', 'Raka Priyo Rachmanda', '2015-12-13 14:35:51', '2015-12-13 14:35:51'),
(3, 'Rafa Fauzan', 'fauzan.rafa@gmail.com', '<p>Salam pramuka...</p>', '0000-00-00', 'Raka Priyo Rachmanda', '2016-01-03 15:02:23', '2016-01-03 15:02:23'),
(5, 'Iqbal Agung Gunawan', 'iagunggunawan@gmail.com', 'Webnya udah bagus, cuma saran aja navigationnya dibuat transparan pada saat masih diatas. Jadi Slider & kegantengannya ga ketutup :v\r\ndan yang terakhir ini website dibuat oleh orang cobul (Raka Benda)', '0000-00-00', 'Raka Priyo Rachmanda', '2016-02-11 08:34:38', '2016-02-11 08:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_pasus`
--

CREATE TABLE IF NOT EXISTS `rekomendasi_pasus` (
`id` int(2) NOT NULL,
  `nis` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `rombel` varchar(10) NOT NULL,
  `rayon` varchar(30) NOT NULL,
  `sangga` varchar(50) NOT NULL,
  `ambalan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rekomendasi_pasus`
--

INSERT INTO `rekomendasi_pasus` (`id`, `nis`, `nama`, `agama`, `jk`, `tempat_lahir`, `tgl_lahir`, `hobi`, `pengalaman`, `foto`, `rombel`, `rayon`, `sangga`, `ambalan`, `alamat`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 11505050, 'Pasus', 'Islam', 'Laki-laki', 'jakarta', '1997-10-02', 'Bermain', 'Penggalang', 'WIN_20151120_21_13_57_Pro.jpg', 'RPL XII', 'Cicurug', 'Pencoba', 'Merah', 'Benda', '2015-12-24 08:41:24', '2015-12-24 08:41:24', ''),
(2, 11505050, 'Pasus', 'Islam', 'Perempuan', 'Bogor', '2000-04-14', 'Pramuka', 'Penggalang', 'DSC_0621.JPG', 'APK XI-2', 'Cisarua 6', 'Pencoba', 'Putih', 'Cisarua', '2016-01-06 08:01:03', '2016-01-06 08:01:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `reportbug`
--

CREATE TABLE IF NOT EXISTS `reportbug` (
`id` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pengirim` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `sakit`
--
CREATE TABLE IF NOT EXISTS `sakit` (
`nama` varchar(50)
,`sangga` varchar(20)
,`ambalan` varchar(20)
,`jk` varchar(20)
,`sakit` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `sangga`
--

CREATE TABLE IF NOT EXISTS `sangga` (
`id_sangga` int(5) NOT NULL,
  `sangga` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nis` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sangga`
--

INSERT INTO `sangga` (`id_sangga`, `sangga`, `status`, `created_at`, `updated_at`, `nis`) VALUES
(1, 'Pencoba 1 Putra', 'Sudah', '2016-03-26 14:08:40', '0000-00-00 00:00:00', '11304069'),
(2, 'Pencoba 1 Putri', 'Sudah', '2016-04-10 05:08:27', '0000-00-00 00:00:00', '11404338'),
(3, 'Pencoba 2 Putra', 'Ada', '2016-04-10 05:08:49', '0000-00-00 00:00:00', ''),
(4, 'Pencoba 2 Putri', 'Ada', '2016-04-10 05:08:44', '0000-00-00 00:00:00', ''),
(5, 'Pencoba 3 Putra', 'Ada', '2016-04-10 05:08:39', '0000-00-00 00:00:00', ''),
(6, 'Pencoba 3 Putri', 'Ada', '2016-04-10 05:08:34', '0000-00-00 00:00:00', ''),
(7, 'Pencoba 4 Putra', 'Ada', '2016-03-26 14:34:59', '0000-00-00 00:00:00', ''),
(8, 'Pencoba 4 Putri', 'Ada', '2016-03-26 14:34:59', '0000-00-00 00:00:00', ''),
(9, 'Pencoba 5 Putra', 'Ada', '2016-03-26 14:34:59', '0000-00-00 00:00:00', ''),
(10, 'Pencoba 5 Putri', 'Ada', '2016-03-26 14:34:59', '0000-00-00 00:00:00', ''),
(11, 'Pencoba 6 Putra', 'Ada', '2016-03-26 14:34:59', '0000-00-00 00:00:00', ''),
(12, 'Pencoba 6 Putri', 'Ada', '2016-03-26 14:34:59', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `nomer_induk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `favorit` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `sangga` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ambalan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rombel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rayon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nomer_induk`, `nama`, `password`, `favorit`, `foto`, `jk`, `tempat_lahir`, `ttl`, `agama`, `alamat`, `sangga`, `ambalan`, `rombel`, `rayon`, `jabatan`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, '12345678', 'Admin', '$2y$10$jJWaYnLKNhpEVybgRE9cJe9GZsbyw5awpZfuELoHLiQHf4/WS6qMG', '0', 'user.png', 'Laki-laki', 'Bogor', '1999-11-23', 'Islam', 'Bogor', '-', '-', '-', '-', 'Admin', 'Raka Priyo Rachmanda', 'NGjCYNBy6C4N62NDwoHR9flyqxyqOIkV15nRChN0nk2QP0NsuU76V0FGQRxN', '2016-01-06 10:11:44', '2016-04-24 19:13:43'),
(8, '11304069', 'Raka Priyo Rachmanda', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', '0', 'user.png', 'Laki-laki', 'Jakarta', '1997-10-02', 'Islam', 'Benda', 'Pencoba 1 Putra', 'Merah 1', 'RPL XI-2', 'Cicurug 6', 'Juru kegiatan', 'Admin', 'YEvccsFm3OXnUhcLjCrD6XKy3PEkD9Mq7aFGoNcIqtzP1t4fcArXSKcbgDMa', '2016-01-07 04:46:05', '2016-11-19 07:53:41'),
(9, '11404338', 'Firliani Fauziah', '$2y$10$wfD/xwlXWgBzhT4jmFg5VOQhLrq8NUYDHQLD6SElhzZoAf2LOyvym', '0', 'user.png', 'Perempuan', 'Bogor', '1999-01-23', 'Islam', 'Cibedug', 'Pencoba 1 Putri', 'Putih 1', 'RPL XI-2', 'Cibedug 3', 'Juru lapangan', 'Admin', 'TIPd1z3C1ZCVtoM9qfto6FOgJMMTOaBvUeo8oAUK0KX8vj6VArUr1xkYweQT', '2016-02-01 03:56:34', '2016-11-19 07:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE IF NOT EXISTS `web` (
`id` int(2) NOT NULL,
  `foto_slide_satu` varchar(255) NOT NULL,
  `foto_slide_dua` varchar(255) NOT NULL,
  `foto_slide_tiga` varchar(255) NOT NULL,
  `foto_slide_empat` varchar(255) NOT NULL,
  `judul_slide_satu` varchar(50) NOT NULL,
  `judul_slide_dua` varchar(50) NOT NULL,
  `judul_slide_tiga` varchar(50) NOT NULL,
  `judul_slide_empat` varchar(50) NOT NULL,
  `kalimat_slide_satu` varchar(70) NOT NULL,
  `kalimat_slide_dua` varchar(70) NOT NULL,
  `kalimat_slide_tiga` varchar(70) NOT NULL,
  `kalimat_slide_empat` varchar(70) NOT NULL,
  `foto_mabigus` varchar(255) NOT NULL,
  `nama_mabigus` varchar(60) NOT NULL,
  `foto_pembina_putra` varchar(255) NOT NULL,
  `nama_pembina_putra` varchar(60) NOT NULL,
  `foto_pembina_putri` varchar(255) NOT NULL,
  `nama_pembina_putri` varchar(60) NOT NULL,
  `foto_pembina_latih` varchar(255) NOT NULL,
  `nama_pembina_latih` varchar(60) NOT NULL,
  `kalimat_pembina_putra` text NOT NULL,
  `kalimat_pembina_putri` text NOT NULL,
  `foto_pradana_putra` varchar(255) NOT NULL,
  `nama_pradana_putra` varchar(60) NOT NULL,
  `foto_pradana_putri` varchar(255) NOT NULL,
  `nama_pradana_putri` varchar(60) NOT NULL,
  `foto_judat_putra` varchar(255) NOT NULL,
  `nama_judat_putra` varchar(60) NOT NULL,
  `foto_judat_putri` varchar(255) NOT NULL,
  `nama_judat_putri` varchar(60) NOT NULL,
  `foto_juang_putra` varchar(255) NOT NULL,
  `nama_juang_putra` varchar(60) NOT NULL,
  `foto_juang_putri` varchar(255) NOT NULL,
  `nama_juang_putri` varchar(60) NOT NULL,
  `foto_krani_putra` varchar(255) NOT NULL,
  `nama_krani_putra` varchar(60) NOT NULL,
  `foto_krani_putri` varchar(255) NOT NULL,
  `nama_krani_putri` varchar(60) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `foto_slide_satu`, `foto_slide_dua`, `foto_slide_tiga`, `foto_slide_empat`, `judul_slide_satu`, `judul_slide_dua`, `judul_slide_tiga`, `judul_slide_empat`, `kalimat_slide_satu`, `kalimat_slide_dua`, `kalimat_slide_tiga`, `kalimat_slide_empat`, `foto_mabigus`, `nama_mabigus`, `foto_pembina_putra`, `nama_pembina_putra`, `foto_pembina_putri`, `nama_pembina_putri`, `foto_pembina_latih`, `nama_pembina_latih`, `kalimat_pembina_putra`, `kalimat_pembina_putri`, `foto_pradana_putra`, `nama_pradana_putra`, `foto_pradana_putri`, `nama_pradana_putri`, `foto_judat_putra`, `nama_judat_putra`, `foto_judat_putri`, `nama_judat_putri`, `foto_juang_putra`, `nama_juang_putra`, `foto_juang_putri`, `nama_juang_putri`, `foto_krani_putra`, `nama_krani_putra`, `foto_krani_putri`, `nama_krani_putri`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DSC_0197.JPG', 'DSC_0204.JPG', 'DSC_0466.JPG', 'DSC_0447.JPG', 'Leadership & Management', 'Kegiatan Pramuka Kamis', 'Kebersamaan', 'Pramuka berprestasi', 'SMK Wikrama membentuk jiwa kepemimpinan para peserta dengan pramuka', 'Menjadikan anggota penegak yang disiplin.', 'Membangunkan rasa kekeluargaan diantara perbedaan.', 'Prestasi ambalan yang kami raih', 'photo.jpg', 'Iin Mulyani S, Si.', 'IMG_0569.JPG', 'Cecep Erik Kurniawan S, Ag.', 'photo.jpg', 'Nunuk Mujiana S, Pd.', 'photo.jpg', 'Reza Sukma', 'Salam pramuka...', 'Salam.', 'avatar_2x.png', 'Irwan Maulana', 'avatar_2x.png', 'Gita', 'Dicky Darmawan.jpg', 'Dicky Darmawan', 'Fani Maharani.jpg', 'Fani Maharani', 'Hendy Alfarisi.jpg', 'Hendi Alafarisi', 'Devi Haryani.jpg', 'Devi Hariyani', 'Deri Hamdani.jpg', 'Deri Hamdani', 'photo.jpg', 'Rida', '', '2016-03-07 10:23:32', '2016-03-07 03:23:32');

-- --------------------------------------------------------

--
-- Structure for view `alfa`
--
DROP TABLE IF EXISTS `alfa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alfa` AS select `q_absensi`.`nama` AS `nama`,`q_absensi`.`sangga` AS `sangga`,`q_absensi`.`ambalan` AS `ambalan`,`q_absensi`.`jk` AS `jk`,count(`q_absensi`.`keterangan`) AS `alfa` from `q_absensi` where (`q_absensi`.`keterangan` = 'A') group by `q_absensi`.`nama`;

-- --------------------------------------------------------

--
-- Structure for view `hadir`
--
DROP TABLE IF EXISTS `hadir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hadir` AS select `q_absensi`.`nama` AS `nama`,`q_absensi`.`sangga` AS `sangga`,`q_absensi`.`ambalan` AS `ambalan`,`q_absensi`.`jk` AS `jk`,count(`q_absensi`.`keterangan`) AS `hadir` from `q_absensi` where (`q_absensi`.`keterangan` = 'H') group by `q_absensi`.`nama`;

-- --------------------------------------------------------

--
-- Structure for view `izin`
--
DROP TABLE IF EXISTS `izin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `izin` AS select `q_absensi`.`nama` AS `nama`,`q_absensi`.`sangga` AS `sangga`,`q_absensi`.`ambalan` AS `ambalan`,`q_absensi`.`jk` AS `jk`,count(`q_absensi`.`keterangan`) AS `izin` from `q_absensi` where (`q_absensi`.`keterangan` = 'I') group by `q_absensi`.`nama`;

-- --------------------------------------------------------

--
-- Structure for view `q_absensi`
--
DROP TABLE IF EXISTS `q_absensi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_absensi` AS select `peserta`.`id` AS `id`,`peserta`.`nis` AS `nis`,`peserta`.`nama` AS `nama`,`peserta`.`agama` AS `agama`,`peserta`.`jk` AS `jk`,`peserta`.`tempat_lahir` AS `tempat_lahir`,`peserta`.`tgl_lahir` AS `tgl_lahir`,`peserta`.`foto` AS `foto`,`peserta`.`rombel` AS `rombel`,`peserta`.`rayon` AS `rayon`,`peserta`.`sangga` AS `sangga`,`peserta`.`ambalan` AS `ambalan`,`peserta`.`alamat` AS `alamat`,`peserta`.`created_at` AS `created_at`,`peserta`.`updated_at` AS `updated_at`,`absensipeserta`.`keterangan` AS `keterangan`,`absensipeserta`.`tgl_absen` AS `tgl_absen` from (`peserta` join `absensipeserta` on((`absensipeserta`.`nis` = `peserta`.`nis`)));

-- --------------------------------------------------------

--
-- Structure for view `q_banyak_pembinaan`
--
DROP TABLE IF EXISTS `q_banyak_pembinaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_banyak_pembinaan` AS select `q_pembinaan`.`id` AS `id`,`q_pembinaan`.`nis` AS `nis`,`q_pembinaan`.`nama` AS `nama`,`q_pembinaan`.`agama` AS `agama`,`q_pembinaan`.`jk` AS `jk`,`q_pembinaan`.`tempat_lahir` AS `tempat_lahir`,`q_pembinaan`.`tgl_lahir` AS `tgl_lahir`,`q_pembinaan`.`foto` AS `foto`,`q_pembinaan`.`rombel` AS `rombel`,`q_pembinaan`.`rayon` AS `rayon`,`q_pembinaan`.`sangga` AS `sangga`,`q_pembinaan`.`ambalan` AS `ambalan`,`q_pembinaan`.`alamat` AS `alamat`,`q_pembinaan`.`created_at` AS `created_at`,`q_pembinaan`.`updated_at` AS `updated_at`,`q_pembinaan`.`pembinaan` AS `pembinaan`,`q_pembinaan`.`tgl_pembinaan` AS `tgl_pembinaan`,count(`q_pembinaan`.`pembinaan`) AS `banyak_pembinaan` from `q_pembinaan` group by `q_pembinaan`.`nama`;

-- --------------------------------------------------------

--
-- Structure for view `q_data_absensi`
--
DROP TABLE IF EXISTS `q_data_absensi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_data_absensi` AS select `q_absensi`.`id` AS `id`,`q_absensi`.`nis` AS `nis`,`q_absensi`.`nama` AS `nama`,`q_absensi`.`agama` AS `agama`,`q_absensi`.`jk` AS `jk`,`q_absensi`.`tempat_lahir` AS `tempat_lahir`,`q_absensi`.`tgl_lahir` AS `tgl_lahir`,`q_absensi`.`foto` AS `foto`,`q_absensi`.`rombel` AS `rombel`,`q_absensi`.`rayon` AS `rayon`,`q_absensi`.`sangga` AS `sangga`,`q_absensi`.`ambalan` AS `ambalan`,`q_absensi`.`alamat` AS `alamat`,`q_absensi`.`created_at` AS `created_at`,`q_absensi`.`updated_at` AS `updated_at`,`q_absensi`.`keterangan` AS `keterangan`,`q_absensi`.`tgl_absen` AS `tgl_absen` from `q_absensi` group by `q_absensi`.`nama`;

-- --------------------------------------------------------

--
-- Structure for view `q_galeriaktivitas`
--
DROP TABLE IF EXISTS `q_galeriaktivitas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_galeriaktivitas` AS select `aktivitas`.`id_aktivitas` AS `id_aktivitas`,`aktivitas`.`judul` AS `judul`,`aktivitas`.`aktivitas` AS `aktivitas`,`aktivitas`.`created_at` AS `created_at`,`aktivitas`.`updated_at` AS `updated_at`,`galeri`.`id` AS `id`,`galeri`.`foto` AS `foto` from (`aktivitas` join `galeri` on((`galeri`.`id_aktivitas` = `aktivitas`.`id_aktivitas`)));

-- --------------------------------------------------------

--
-- Structure for view `q_kas`
--
DROP TABLE IF EXISTS `q_kas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_kas` AS select `peserta`.`id` AS `id`,`peserta`.`nis` AS `nis`,`peserta`.`nama` AS `nama`,`peserta`.`agama` AS `agama`,`peserta`.`jk` AS `jk`,`peserta`.`tempat_lahir` AS `tempat_lahir`,`peserta`.`tgl_lahir` AS `tgl_lahir`,`peserta`.`foto` AS `foto`,`peserta`.`rombel` AS `rombel`,`peserta`.`rayon` AS `rayon`,`peserta`.`sangga` AS `sangga`,`peserta`.`ambalan` AS `ambalan`,`peserta`.`alamat` AS `alamat`,`peserta`.`created_at` AS `created_at`,`peserta`.`updated_at` AS `updated_at`,`kaspeserta`.`kas` AS `kas`,`kaspeserta`.`tgl_kas` AS `tgl_kas` from (`peserta` join `kaspeserta` on((`kaspeserta`.`nis` = `peserta`.`nis`)));

-- --------------------------------------------------------

--
-- Structure for view `q_pembinaan`
--
DROP TABLE IF EXISTS `q_pembinaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_pembinaan` AS select `peserta`.`id` AS `id`,`peserta`.`nis` AS `nis`,`peserta`.`nama` AS `nama`,`peserta`.`agama` AS `agama`,`peserta`.`jk` AS `jk`,`peserta`.`tempat_lahir` AS `tempat_lahir`,`peserta`.`tgl_lahir` AS `tgl_lahir`,`peserta`.`foto` AS `foto`,`peserta`.`rombel` AS `rombel`,`peserta`.`rayon` AS `rayon`,`peserta`.`sangga` AS `sangga`,`peserta`.`ambalan` AS `ambalan`,`peserta`.`alamat` AS `alamat`,`peserta`.`created_at` AS `created_at`,`peserta`.`updated_at` AS `updated_at`,`pembinaan`.`pembinaan` AS `pembinaan`,`pembinaan`.`tgl_pembinaan` AS `tgl_pembinaan` from (`peserta` join `pembinaan` on((`pembinaan`.`nis` = `peserta`.`nis`)));

-- --------------------------------------------------------

--
-- Structure for view `q_peserta`
--
DROP TABLE IF EXISTS `q_peserta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_peserta` AS select `peserta`.`id` AS `id`,`peserta`.`nis` AS `nis`,`peserta`.`nama` AS `nama`,`peserta`.`agama` AS `agama`,`peserta`.`jk` AS `jk`,`peserta`.`tempat_lahir` AS `tempat_lahir`,`peserta`.`tgl_lahir` AS `tgl_lahir`,`peserta`.`foto` AS `foto`,`peserta`.`rombel` AS `rombel`,`peserta`.`rayon` AS `rayon`,`peserta`.`sangga` AS `sangga`,`peserta`.`ambalan` AS `ambalan`,`peserta`.`alamat` AS `alamat`,`peserta`.`created_at` AS `created_at`,`peserta`.`updated_at` AS `updated_at`,`absensipeserta`.`keterangan` AS `keterangan`,`absensipeserta`.`tgl_absen` AS `tgl_absen`,`kaspeserta`.`kas` AS `kas`,`kaspeserta`.`tgl_kas` AS `tgl_kas` from ((`peserta` join `absensipeserta` on((`absensipeserta`.`nis` = `peserta`.`nis`))) join `kaspeserta` on((`kaspeserta`.`nis` = `peserta`.`nis`)));

-- --------------------------------------------------------

--
-- Structure for view `q_totalkas`
--
DROP TABLE IF EXISTS `q_totalkas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_totalkas` AS select `q_kas`.`id` AS `id`,`q_kas`.`nis` AS `nis`,`q_kas`.`nama` AS `nama`,`q_kas`.`agama` AS `agama`,`q_kas`.`jk` AS `jk`,`q_kas`.`tempat_lahir` AS `tempat_lahir`,`q_kas`.`tgl_lahir` AS `tgl_lahir`,`q_kas`.`foto` AS `foto`,`q_kas`.`rombel` AS `rombel`,`q_kas`.`rayon` AS `rayon`,`q_kas`.`sangga` AS `sangga`,`q_kas`.`ambalan` AS `ambalan`,`q_kas`.`alamat` AS `alamat`,`q_kas`.`created_at` AS `created_at`,`q_kas`.`updated_at` AS `updated_at`,`q_kas`.`kas` AS `kas`,`q_kas`.`tgl_kas` AS `tgl_kas`,sum(`q_kas`.`kas`) AS `total` from `q_kas` group by `q_kas`.`nama`;

-- --------------------------------------------------------

--
-- Structure for view `sakit`
--
DROP TABLE IF EXISTS `sakit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sakit` AS select `q_absensi`.`nama` AS `nama`,`q_absensi`.`sangga` AS `sangga`,`q_absensi`.`ambalan` AS `ambalan`,`q_absensi`.`jk` AS `jk`,count(`q_absensi`.`keterangan`) AS `sakit` from `q_absensi` where (`q_absensi`.`keterangan` = 'S') group by `q_absensi`.`nama`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensipeserta`
--
ALTER TABLE `absensipeserta`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
 ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `ambalan`
--
ALTER TABLE `ambalan`
 ADD PRIMARY KEY (`id_ambalan`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jugit`
--
ALTER TABLE `jugit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaspeserta`
--
ALTER TABLE `kaspeserta`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatanbantara`
--
ALTER TABLE `kegiatanbantara`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatanpta`
--
ALTER TABLE `kegiatanpta`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pembinaan`
--
ALTER TABLE `pembinaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi_komentar`
--
ALTER TABLE `rekomendasi_komentar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi_pasus`
--
ALTER TABLE `rekomendasi_pasus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportbug`
--
ALTER TABLE `reportbug`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sangga`
--
ALTER TABLE `sangga`
 ADD PRIMARY KEY (`id_sangga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensipeserta`
--
ALTER TABLE `absensipeserta`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
MODIFY `id_aktivitas` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ambalan`
--
ALTER TABLE `ambalan`
MODIFY `id_ambalan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jugit`
--
ALTER TABLE `jugit`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kaspeserta`
--
ALTER TABLE `kaspeserta`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kegiatanbantara`
--
ALTER TABLE `kegiatanbantara`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kegiatanpta`
--
ALTER TABLE `kegiatanpta`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembinaan`
--
ALTER TABLE `pembinaan`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekomendasi_komentar`
--
ALTER TABLE `rekomendasi_komentar`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rekomendasi_pasus`
--
ALTER TABLE `rekomendasi_pasus`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reportbug`
--
ALTER TABLE `reportbug`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sangga`
--
ALTER TABLE `sangga`
MODIFY `id_sangga` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
