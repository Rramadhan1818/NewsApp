-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2019 pada 11.41
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori_berita`, `slug_berita`, `judul`, `isi`, `status_berita`, `jenis_berita`, `gambar`, `tanggal`) VALUES
(2, 3, 4, '2-perpustakaan-berjalan-kini-hadir', 'Perpustakaan berjalan kini hadir', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>&nbsp;Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadirPerpustakaan berjalan kini hadir</strong></p>\r\n<p>&nbsp;Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadirPerpustakaan berjalan kini hadir</p>\r\n<p>&nbsp;Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadirPerpustakaan berjalan kini hadir</p>\r\n<p>&nbsp;Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadirPerpustakaan berjalan kini hadir</p>\r\n<p>&nbsp;Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadir Perpustakaan berjalan kini hadirPerpustakaan berjalan kini hadir</p>\r\n</body>\r\n</html>', 'publish', 'berita', 'FB_IMG_15309171872531246.jpg', '2018-10-30 05:21:59'),
(3, 3, 4, '3-berita-smekda-media-makin-di-gemari', 'Berita Smekda media makin di gemari!', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari! Berita Smekda media makin di gemari!</p>\r\n</body>\r\n</html>', 'publish', 'profile', 'IMG_20180707_090812_006.jpg', '2018-10-30 02:48:28'),
(4, 3, 4, '4-hp-terbaru-kini-telah-rilis', 'Hp terbaru kini telah rilis!', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!</p>\r\n<p>Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!</p>\r\n<p>Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!</p>\r\n<p>Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!</p>\r\n<p>Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis! Hp terbaru kini telah rilis!</p>\r\n</body>\r\n</html>', 'publish', 'berita', 'morning_monday!.jpg', '2018-10-30 03:23:05'),
(5, 3, 2, '5-designer-mulai-bersatu', 'designer mulai bersatu..', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&nbsp;designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; vdesigner mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..&nbsp; designer mulai bersatu.. designer mulai bersatu.. designer mulai bersatu.. v v v v v v v v designer mulai bersatu..</p>\r\n</body>\r\n</html>', 'publish', 'berita', 'IMG-20180703-WA0005.jpg', '2018-10-30 03:24:02'),
(6, 3, 1, '6-profesional-enterprenership', 'Profesional enterprenership ', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp;</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp;</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp;</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp;</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership</p>\r\n<p>Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; v Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership&nbsp; Profesional enterprenership</p>\r\n</body>\r\n</html>', 'publish', 'berita', 'leader.jpg', '2018-10-30 03:24:51'),
(7, 3, 1, '7-juara-1-lks-smk-web-design-dari-smekda', 'Juara 1 LKS smk web design dari smekda!', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>alhamdulillah selamat kepada yang berhasil menang</p>\r\n<p>alhamdulillah selamat kepada yang berhasil menang</p>\r\n</body>\r\n</html>', 'publish', 'berita', 'FB_IMG_151528125511975841.jpg', '2018-10-30 06:26:20'),
(8, 3, 4, '8-expo-revolusi-industri-40', 'Expo Revolusi Industri 4.0', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Menteri Perindustrian, Airlangga Hartarto, mengatakan krisis yang menimpa RI pada 1998 dengan 2018 ini jelas berbeda. Itu karena, kata dia, Indonesia kini merupakan salah satu negara dengan mencatatkan pertumbuhan sektor manufaktur terbesar di dunia.</p>\r\n<p>\"Krisis Indonesia 2018 dan 98 itu berbeda. Kita sekarang ini credit ratingnya tinggi, investmentnya tinggi,\" tutur dia di Aula Badan Kebijakan Fiskal (BKF) di Komplek Kementerian Keuangan (Kemenkeu) Senin, (24/9/2018).</p>\r\n<p>Airlangga melanjutkan, salah satu industri dengan pertumbuhan investasi RI yang tinggi ialah sektor manufaktur. Menurut dia, sektor ini berpotensi untuk digenjot oleh pemerintah.</p>\r\n<p>\"Tahun 90 sektor manufaktur kita itu ranking 19 dan 2016-2017 ini kita ranking 9. Artinya kita jadi salah tiga negara di Asia yang masuk 10 besar manufaktur di dunia. Itu salah satunya dilihat dari sektor food and beverages, yakni makanan dan minuman (mamin),\" ujar dia.</p>\r\n<p>Tak hanya industri mamin, sektor manufaktur juga diwakili kontribusinya oleh industri kosmetik. Kata Airlangga, pertumbuhan minat pada industri ini juga tercatat tinggi permintaanya.</p>\r\n<p>\"Sektor kosmetik juga, untuk colouring dan skincare itu 25 persen, tertinggi di ASEAN. Jadi makin banyak masyarakat Indonesia yang ingin tampil cantik. Sektor kosmetik pria pun juga double digit,\" ujar dia.</p>\r\n<p>Oleh karena itu, Airlangga menilai, sektor manufaktur sangat diandalkan dalam mensokong Indonesia memenuhi kebutuhan untuk revolusi industri 4.0 ke depan.</p>\r\n<p>\"Jadi kalau kita lihat sektor manufaktur, itu sektor terbesar dibanding sektor lain. Kontribusinya terhadap ekonomi indonesia juga terbesar di sektor manufaktur. Ini merupakan sektor yang jadi andalan dalam perkembangan industri 4.0,\" kata dia.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>', 'publish', 'berita', 'expo.jpg', '2018-10-31 03:17:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_kategori_dokumen` int(11) NOT NULL,
  `slug_dokumen` varchar(255) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text,
  `gambar` varchar(255) NOT NULL,
  `status_dokumen` varchar(20) NOT NULL,
  `jenis_dokumen` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_kategori_dokumen`, `slug_dokumen`, `judul`, `isi`, `gambar`, `status_dokumen`, `jenis_dokumen`, `id_user`, `tanggal`) VALUES
(1, 1, '1-hasil-penelitian-awal', 'Hasil penelitian awal', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>aiyaiaa</p>\r\n</body>\r\n</html>', 'Information-Technology.pdf', 'publish', 'internal', 3, '2018-10-30 11:22:54'),
(2, 2, '2-sehat-berawal-dari-kita', 'Sehat Berawal dari kita', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Sehat Berawal dari kita</p>\r\n</body>\r\n</html>', 'T1_672006261_Full_text.pdf', 'publish', 'internal', 3, '2018-10-30 11:14:36'),
(4, 2, '3-expo-jabar-hari-ini', 'Expo jabar hari ini!', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!</p>\r\n<p>Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!Expo jabar hari ini!</p>\r\n</body>\r\n</html>', 'BPK.docx', 'publish', 'external', 3, '2018-10-30 21:56:35'),
(5, 2, '5-sidiq-ganteng', 'sidiq ganteng', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>sidiq ganteng sidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq gantengsidiq ganteng</p>\r\n</body>\r\n</html>', 'Tugas_HAM.docx', 'publish', 'external', 3, '2018-10-30 23:23:46'),
(6, 1, '6-compony-profile', 'compony profile', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>copeny profile dari perusahaan ini</p>\r\n</body>\r\n</html>', 'Rezky_Ramadhan-DATA_BASE.docx', 'publish', 'external', 3, '2018-10-31 14:22:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text,
  `posisi` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_user`, `judul`, `keterangan`, `posisi`, `website`, `gambar`, `tanggal`) VALUES
(2, 3, 'Diskon 70% pada tanggl 11/21', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Diskon 70% pada tanggl 11 Diskon 70% pada tanggl 11</p>\r\n</body>\r\n</html>', 'galeri', 'http://codeigniter.com', 'Screenshot_(11).png', '2018-11-05 14:44:17'),
(10, 3, 'wkw', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'homepage', '', 'expo_(2).jpg', '2018-12-26 06:45:48'),
(11, 3, 'jajajan', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>wkwk</p>\r\n</body>\r\n</html>', 'homepage', '', 'expo_(2)1.jpg', '2018-12-28 02:19:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `slug_kategori_berita` varchar(200) NOT NULL,
  `nama_kategori_berita` varchar(200) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `slug_kategori_berita`, `nama_kategori_berita`, `urutan`, `keterangan`) VALUES
(1, 'kejuaraan', 'Kejuaraan', 1, 'Kejuaraan'),
(2, 'ekstrakulikuler', 'Ekstrakulikuler', 2, 'Ekstrakulikuler'),
(4, 'lainnya-dan-lagi', 'lainnya dan lagi', 3, 'tapi bhong:v');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_dokumen`
--

CREATE TABLE `kategori_dokumen` (
  `id_kategori_dokumen` int(11) NOT NULL,
  `slug_kategori_dokumen` varchar(200) NOT NULL,
  `nama_kategori_dokumen` varchar(200) NOT NULL,
  `keterangan` text,
  `urutan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_dokumen`
--

INSERT INTO `kategori_dokumen` (`id_kategori_dokumen`, `slug_kategori_dokumen`, `nama_kategori_dokumen`, `keterangan`, `urutan`, `tanggal`) VALUES
(1, 'penelitian-langsung', 'Penelitian langsung1', 'Penelitian langsung', 1, '2018-10-30 09:27:59'),
(2, 'hukum-company', 'Hukum company', 'Hukum company', 2, '2018-10-30 09:30:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(100) NOT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `google_map` text,
  `metatext` text,
  `logo` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `website`, `email`, `alamat`, `telepon`, `keywords`, `description`, `google_map`, `metatext`, `logo`, `icon`) VALUES
(1, 'Smekda Media Web', 'School of busines management and technical ', 'http://smekdamedia.com', 'rezkyshawn8@gmail.com', 'Jln.ibrahim singadilaga gg.smp 3 Purwakarta <br> Purwarkart-Jawa Barat', '03817260288', 'SMKN 2 Purwakarta', 'sekolah bisnis management dan teknik terbaiki di purwakarta', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.794314500878!2d107.44012941432538!3d-6.547635395264234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e5975014a5d%3A0x87f7a97e7f9f961!2sSekolah+Menengah+Kejuruan+Negeri+2+Purwakarta!5e0!3m2!1sid!2sid!4v1545991855135\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'iutittiiu', 'smkn2.png', 'cari.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `status`, `jurusan`) VALUES
(1, 'Rezky Ramadhan', 'Pelajar', 'Rpl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `site`
--

CREATE TABLE `site` (
  `id_site` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_site` varchar(100) NOT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `site`
--

INSERT INTO `site` (`id_site`, `id_user`, `nama_site`, `contact_person`, `alamat`, `telepon`, `hp`, `email`, `kota`, `keterangan`, `tanggal`) VALUES
(3, 0, 'raihan', 'siddiq', 'temanggung', '084817620388', '084817620388', 'prakasa123@gmail.com', 'temanggung', 'tidak ada', '2018-09-05 13:02:22'),
(14, 0, 'Ira siti nurhalisa lope', ';3', 'wanayasa', '089482347234', '09680786', 'irasn@gmail.com', 'subang', 'lol', '2018-09-10 16:06:42'),
(15, 0, 'sidpur', 'kvklv', 'mulyamekar', '87586', '574', 'r@ggmail', 'hoho``', 'kvklv', '2018-09-10 07:09:35'),
(18, 0, 'Ramadhani', 'Ramadhani', 'Ramadhani', '099999999999', '088888888888', 'irasn@gmail.com', 'kota', 'Ramadhani', '2018-10-28 09:23:16'),
(22, 0, 'yoooo', 'yoooo', 'yoooo', '0709980980980', '90809809', 'yoooo@hhi', 'yoooo', 'yoooo', '2018-10-28 09:23:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_site` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `id_site`, `level`, `gambar`, `id_admin`, `tanggal`) VALUES
(2, 'ramadhan', 'rezkyshawn8@gmail.com', 'ramadhan', '616e13e30c00b8b53502746f3d778b1813ca339e', 3, 'admin', '', 0, '2018-10-29 03:44:11'),
(3, 'admin', '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, 'admin', '', 0, '2018-09-13 07:12:14'),
(6, 'wkwkwkwk', 'wkwkwkwk21@gmail.com', 'wkwkwkwk', '6fbda87099f944dc2e155bb75fe629188059a142', 3, 'admin', '', 0, '2018-10-29 01:54:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text,
  `posisi` varchar(20) NOT NULL,
  `video` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul`, `keterangan`, `posisi`, `video`, `id_user`, `tanggal`) VALUES
(2, 'rekayasa', 'berikut', 'homepage', '1IaUJuYvE3o', 3, '2018-12-28 10:09:22'),
(3, 'tutor', 'mentor', 'homepage', '7UkEzzjAHys', 3, '2018-12-28 10:08:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD UNIQUE KEY `slug_berita` (`slug_berita`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD UNIQUE KEY `gambar` (`gambar`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`),
  ADD UNIQUE KEY `slug_kategori_berita` (`slug_kategori_berita`);

--
-- Indeks untuk tabel `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  ADD PRIMARY KEY (`id_kategori_dokumen`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id_site`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD UNIQUE KEY `video` (`video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  MODIFY `id_kategori_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `site`
--
ALTER TABLE `site`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
