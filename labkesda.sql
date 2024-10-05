-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 12:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labkesda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Nur Fauzan', 'nurfauzan@gmail.com', 'Bagus'),
(2, 'Siti Saidah', 'sitisaidah@gmail.com', 'Good'),
(3, 'Ojan', 'ojan@gmail.com', 'Sae'),
(4, 'Ucup', 'ucup@gmail.com', 'good'),
(5, 'cuk', 'ojan@gmail.com', 'cuk');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_jumlahtotal`
--

CREATE TABLE `hasil_jumlahtotal` (
  `id` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(40) DEFAULT NULL,
  `satuan` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kadar_normal`
--

CREATE TABLE `hasil_kadar_normal` (
  `id` int(11) NOT NULL,
  `id_subkategori` int(11) DEFAULT NULL,
  `kadar_normal` varchar(35) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_kadar_normal`
--

INSERT INTO `hasil_kadar_normal` (`id`, `id_subkategori`, `kadar_normal`) VALUES
(1, 1, '45mg'),
(2, 2, '90mg');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pemeriksaan`
--

CREATE TABLE `hasil_pemeriksaan` (
  `id` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `no_kwitansi` varchar(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur_pasien` int(11) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `doc_hasil` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_pemeriksaan`
--

INSERT INTO `hasil_pemeriksaan` (`id`, `tgl_periksa`, `no_kwitansi`, `nama_pasien`, `umur_pasien`, `no_telepon`, `alamat_pasien`, `doc_hasil`) VALUES
(1, '2019-05-28', '00001', 'Ucup Dayat', 32, '082232169xxx', 'Perum Kenanga', ''),
(2, '2019-06-30', '00002', 'Icun ', 28, '082295392xxx', 'Ciulur', 'assets/hasil/1TI05704.pdf'),
(3, '2019-06-30', '00003', 'Kokom', 24, '081321098xxx', 'Asabri', 'assets/hasil/7-32-1-PB.pdf'),
(4, '2019-06-30', '00004', 'Kintamani', 21, '087873096xxx', 'Cimalaka', 'assets/hasil/22-80-1-PB1.pdf'),
(5, '2019-06-30', '00005', 'Kinkin', 22, '083456776xxx', 'Citimun', 'assets/hasil/33-1-155-1-10-20180504.pdf'),
(6, '2019-07-01', '00006', 'Cucun', 23, '088392748xxx', 'Bangbayang', 'assets/hasil/64-Article_Text-75-1-10-20180531.pdf'),
(7, '2019-07-17', '00008', 'Kozenk', 22, '082121299074', 'Perum Jatihurip Blok 9 No. 101', 'assets/hasil/@2_PedomanPenulisanSkripsi2018_FINAL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_tarif`
--

CREATE TABLE `hasil_tarif` (
  `id` int(11) NOT NULL,
  `jenis_layanan` varchar(50) DEFAULT NULL,
  `jenis_pemeriksaan` varchar(50) DEFAULT NULL,
  `tarif` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_tarif`
--

INSERT INTO `hasil_tarif` (`id`, `jenis_layanan`, `jenis_pemeriksaan`, `tarif`) VALUES
(1, 'Kimia Klinik', 'Glukosa Darah', '15000'),
(2, 'Kimia Klinik', 'Cholesterol Total', '20000'),
(3, 'Kimia Klinik', 'HDL Cholesterol', '26000'),
(4, 'Kimia Klinik', 'LDL Cholesterol (hitung)', '5000'),
(5, 'Kimia Klinik', 'LDL Cholesterol (kit)', '50000'),
(6, 'Kimia Klinik', 'Trigliserida', '30000'),
(7, 'Kimia Klinik', 'Asam Urat', '25000'),
(8, 'Kimia Klinik', 'Kreatinin', '25000'),
(9, 'Kimia Klinik', 'Ureum', '30000'),
(10, 'Kimia Klinik', 'Bilirubin (total, direct, indirect)', '27000'),
(11, 'Kimia Klinik', 'SGOT', '28000'),
(12, 'Kimia Klinik', 'SGPT', '28000');

-- --------------------------------------------------------

--
-- Table structure for table `profil_landasan_hukum`
--

CREATE TABLE `profil_landasan_hukum` (
  `id` int(11) NOT NULL,
  `landasan_hukum` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_landasan_hukum`
--

INSERT INTO `profil_landasan_hukum` (`id`, `landasan_hukum`) VALUES
(1, '<ol>\r\n	<li>Keputusan Menteri kesehatan RI Nomor 364/Menkes/SK/III/2003 tentang Laboratorium Kesehatan</li>\r\n	<li>Undang - undang Nomor 23 Tahun 1992 tentang Kesehatan</li>\r\n	<li>Keputusan Menteri Kesehatan RI Nomor 1267/Menkes/SK/XII/2004 tentang Standar Pelayanan Laboratorium Kesehatan Kabupaten/Kota</li>\r\n	<li>Keputusan Menteri Kesehatan RI Nomor 1575/Menkes/PER/XI/2005 tentang Organisasi dan Tata kerja Departemen Kesehatan</li>\r\n	<li>Keputusan Menteri Kesehatan RI Nomor 298/Menkes/SK/III/2008 tentang pedoman akreditasi Laboratorium Kesehatan</li>\r\n	<li>Keputusan Menteri Kesehatan RI Nomor 492/Menkes/PER/IV/2010 tentang syarat-syarat dan pengawasan kualitas air minum</li>\r\n	<li>Keputusan Menteri Perindustrian dan Perdagangan RI Nomor 65/MPP/Kep./2004 tentang persyaratan teknis depot air minum dan perdagangannya</li>\r\n	<li>Peraturan Menteri Kesehatan RI Nomor 033/Menkes/PER/2012 tentang bahan tambahan pangan</li>\r\n	<li>Peraturan Menteri Kesehatan RI Nomor 712/Menkes/PER/1986 tentang persyaratan kesehatan jasa boga</li>\r\n	<li>Peraturan Menteri Kesehatan Nomor 32 tahun 2017 tentang standar bahan baku mutu kesehatan lingkungan dan persyaratan kesehatan air minum untuk keperluan higiene, sanitasi, kolam renang, solus per aqua dan pemandian umum</li>\r\n	<li>Peraturan Daerah Nomor 46 tahun 2001 tentang pembentukan unit pelaksana teknis Dinas Laboratorium Kesehatan pada Dinas Kesehatan Kabupaten Sumedang</li>\r\n	<li>Peraturan Bupati Sumedang Nomor 80 tahun 2017 tentang tarif pelayanan pada Unit Pelaksana Teknis Daerah yang menerapkan pola keuangan Badan Layanan Umum Daerah</li>\r\n	<li>Keputusan Bupati Sumedang Nomor 443.5/Kep.93-DINKES/2010 tentang penetapan Unit Pelaksana Teknis Dinas Laboratorium Kesehatan Daerah pada Dinas Kesehatan Kabupaten Sumedang sebagai laboratorium penguji kualitas air</li>\r\n	<li>Keputusan Bupati Sumedang Nomor 440/Kep.390-DINKES/2016 tentang Unit Pelaksana Teknis Dinas Pusat Kesehatan Masyarakat dan Unit Pelaksana Teknis Dinas Laboratorium Kesehatan Daerah pada Dinas Kesehatan Kabupaten Sumedang sebagai unit kerja yang menerpakan pola pengelolaan keuangan Badan Layanan Umum Daerah dengan status Badan Layanan Umum Daerah penuh</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profil_latarbelakang`
--

CREATE TABLE `profil_latarbelakang` (
  `id` int(11) NOT NULL,
  `latar_belakang` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_latarbelakang`
--

INSERT INTO `profil_latarbelakang` (`id`, `latar_belakang`) VALUES
(1, '<p style=\"text-align:justify\">Pelayanan Laboratorium merupakan bagian integral dari pelayanan kesehatan yang diperlukan untuk menunjang upaya peningkatan kesehatan, pencegahan, dan pengobatan, serta pemulihan kesehatan.</p>\r\n\r\n<p style=\"text-align:justify\">Laboratorium Kesehatan Dinas Kesehatan Kabupaten Sumedang yang berperan dalam pelayanan pembangunan kesehatan sebagai Upaya Kesehatan Masyarakat (UKM) dan upaya Kesehatan Perorangan (UKP) : berupa pencegahan dan pemberantasan penyakit, penyediaan dan pengelolaan air bersih dan penyehatan lingkungan pemulihan serta kegiatan lain yang ada di wilayah Kabupaten Sumedang.</p>\r\n\r\n<p style=\"text-align:justify\">Laboratorium Kesehatan Kabupaten Sumedang, berdasarkan standar pelayanan Laboratorium Kesehatan Kabupaten/ Kota, dalam pelaksanaan otda maka Pemerintah Kabupaten/ Kota diharapkan mempunyai Laboratorium Kesehatan yang mampu melakukan pemeriksaan spesimen laboratorium lingkungan serta pemeriksaan spesimen laboratorium klinik.</p>\r\n\r\n<p style=\"text-align:justify\">Pendirian Laboratorium Kesehatan Sumedang dimaksudkan agar mampu melakukan pemeriksaan kimia lingkungan, toksikologi, mikrobiologi, imunologi dan patologi untuk menunjang diagnosa penyakit dalam upaya meningkatkan kesehatan masyarakat dan sebagai laboratorium rujukan di wilayah Kabupaten Sumedang.</p>\r\n\r\n<p style=\"text-align:justify\">Dalam mewujudkan Visi dan Misi Laboratorium Kesehatan Kabupaten Sumedang melakukan pelayanan yang berbasis pelayanan prima yang merupakan tujuan dari pelayanan Laboratorium Kesehatan kepada masyarakat, agar masyarakat mendapatkan kepuasan dengan cara menyajikan hasil pemeriksaan secara kuantitatif yaitu dapat melayani pemeriksaan yang diminta, juga harus meningkatkan mutu pemeriksaan Laboratirium dalam arti kualitatif yaitu dapat memberikan hasil pemeriksaan yang bermutu sehingga dapat dipercaya.</p>\r\n\r\n<p style=\"text-align:justify\">Untuk mewujudkan pelayanan prima kepada masyarakat perlu adanya pengenalan jenis pemeriksaan yang dapat dilayani oleh Laboratorium Kesehatan, baik itu Laboratorium lingkungan atau Laboratorium klinik, dengan cara leaflet, banner, atau monitoring dan juga memberikan pelayanan <em>home service</em> kepada masyarakat di wilayah Kabupaten Sumedang.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sarana_bangunan`
--

CREATE TABLE `profil_sarana_bangunan` (
  `id` int(11) NOT NULL,
  `bangunan` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_sarana_bangunan`
--

INSERT INTO `profil_sarana_bangunan` (`id`, `bangunan`) VALUES
(1, 'Ruang Pendaftaran'),
(2, 'Ruang tunggu pasien'),
(3, 'Ruang pengambilan sampel darah'),
(4, 'Ruang pengambilan sampel dahak'),
(5, 'Ruang pemeriksaan patologi klinik'),
(6, 'Ruang pemeriksaan kimia air dan makanan'),
(7, 'Ruang pemeriksaan mikrobiologi dan parasitologi'),
(8, 'Ruang Kepala UPT'),
(9, 'Ruang Tata Usaha, Keuangan dan Administrasi'),
(10, 'Gudang alat'),
(11, 'Gudang reagen'),
(12, 'Pantry'),
(13, 'Ruang sterilisasi dan pembuatan media'),
(14, 'Toilet pasien dan karyawan yang terpisah'),
(15, 'Mushola'),
(16, 'Ruang ganti');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sarana_desc`
--

CREATE TABLE `profil_sarana_desc` (
  `id` int(11) NOT NULL,
  `desc_bangunan` text,
  `desc_peralatan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_sarana_desc`
--

INSERT INTO `profil_sarana_desc` (`id`, `desc_bangunan`, `desc_peralatan`) VALUES
(1, 'Bangunan UPT Laboratorium Kesehatan Daerah Kabupaten Sumedang mempunyai 2(dua) lantai dengan luas 80m persegi, beralamat di jalan Cipadung No. 35 Sumedang Tlp (0261) 201613', 'Ada beberapa peralatan Laboratorium Kesehatan Kabupaten Sumedang, antara lain:');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sarana_peralatan`
--

CREATE TABLE `profil_sarana_peralatan` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_sarana_peralatan`
--

INSERT INTO `profil_sarana_peralatan` (`id`, `nama_barang`, `jumlah`, `ket`) VALUES
(1, 'Autoclave', 2, '-'),
(2, 'Bilik hitung', 9, '-'),
(3, 'Buret', 5, '-'),
(4, 'Bunsen (lampu spirtus)', 3, '-'),
(5, 'Blender kaca', 2, '-'),
(6, 'Centrifuge', 3, '-'),
(7, 'Centrifuge hematocrit', 1, '-'),
(8, 'Cooling box', 1, '-'),
(9, 'Cawan penguap / cawan isat', 6, '-'),
(10, 'Cawan timbang / gelas arloji', 10, '-'),
(11, 'Corong gelas', 10, '-'),
(12, 'Desikator / eksikator', 1, '-'),
(13, 'Diff counter', 1, '-'),
(14, 'Erlenmeyer', 50, '-'),
(15, 'Fotometer kimia air', 1, '-'),
(16, 'Fotometer kimia klinik', 1, '-'),
(17, 'Gelas kimia', 20, '-'),
(18, 'Hematologi analyzer', 1, '-'),
(19, 'Inkubator', 3, '-'),
(20, 'Lemari es', 3, '-'),
(21, 'Laminator flow cabinet', 1, '-'),
(22, 'Labu ukur', 20, '-'),
(23, 'Lemari peralatan', 2, '-'),
(24, 'Mikroskop binokuler', 2, '-'),
(25, 'Mat pipet', 90, '-'),
(26, 'Mikropipet', 10, '-'),
(27, 'Oven', 1, '-'),
(28, 'pH meter', 1, '-'),
(29, 'Pipet BSE', 100, '-'),
(30, 'Petridish / cawan petri', 20, '-'),
(31, 'Rotator', 1, '-'),
(32, 'Timbangan elektronik', 2, '-'),
(33, 'TDS meter', 1, '-'),
(34, 'Turbidimeter', 1, '-'),
(35, 'Tabung reaksi', 1000, '-'),
(36, 'Tabung durham', 400, '-'),
(37, 'Tabung nesler', 40, '-'),
(38, 'Tabung inhofteng', 1, '-'),
(39, 'Urine analyzer', 1, '-'),
(40, 'Gelas ukur', 35, '-'),
(41, 'Vol pipet', 20, '-'),
(42, 'Waterbath', 1, '-'),
(43, 'Komputer', 1, '-'),
(44, 'Laptop', 1, '-'),
(45, 'Kulkas', 1, '-'),
(46, 'Pendingin ruangan', 1, '-'),
(47, 'Kursi putar', 5, '-'),
(48, 'Alat Pemadam Kebakaran Ringan (APAR)', 2, '-'),
(49, 'Spektrophotometer kimia air', 1, '-'),
(50, 'Axiom mikroskop binokular', 1, '-'),
(51, 'Kubota, sentrifuge', 1, '-'),
(52, 'Photometer 5010', 1, '-'),
(53, 'SFRI Hematologi analyzer H 18 Light', 1, '-'),
(54, 'SFRI Semi Automatic Analyzer BSA 3000', 1, '-'),
(55, 'Vortex mixer', 1, '-'),
(56, 'Eppendorf pippete reference 5 ul', 1, '-'),
(57, 'Eppendorf pippete 1000 ul', 1, '-'),
(58, 'Eppendorf pippete 10 ul', 1, '-'),
(59, 'Eppendorf pippete 10-100 ul', 1, '-'),
(60, 'Eppendorf pippete 100-1000 ul', 1, '-'),
(61, 'Eppendorf pippete 20 ul', 2, '-'),
(62, 'Eppendorf pippete 25 ul', 2, '-'),
(63, 'Sphygmomanometer desk model', 5, '-'),
(64, 'Rak tabung multipurpose', 10, '-'),
(65, 'Cover glass', 30, '-'),
(66, 'Empty rack for 10 ul long tips', 1, '-'),
(67, 'Expell 100 ul', 1, '-'),
(68, 'Centrifuge tubes 15 ul', 2, '-'),
(69, 'Pippete stand for 5 capp pippete', 10, '-'),
(70, 'Micropippete 50 ul', 1, '-'),
(71, 'Micropippete 100 ul', 1, '-'),
(72, 'Micropippete 200 ul', 1, '-'),
(73, 'Micropippete 1000 ul', 1, '-'),
(74, 'Tip kuning', 1000, '-'),
(75, 'Tip biru', 1000, '-'),
(76, 'Tip putih', 500, '-'),
(77, 'Tabung sentrifuge', NULL, '-'),
(78, 'Spignomanometer', 5, '-'),
(79, 'Balon hisap', 10, '-'),
(80, 'Botol coklat 350 ml tutup logam', 200, '-'),
(81, 'Botol dispenser (2,25-25ml)', 2, '-'),
(82, 'Buret 10 ml', 2, '-'),
(83, 'Buret 25 ml', 2, '-'),
(84, 'Keranjang alumunium bundar', 2, '-'),
(85, 'Pipet pasteur', 10, 'Box'),
(86, 'Pipet tetes plastik', 100, '-'),
(87, 'Pot urine plastik', 500, '-'),
(88, 'Stopwatch', 3, '-'),
(89, 'Spatula', 5, '-'),
(90, 'Statif buret', 5, '-'),
(91, 'Tabung durham', 1000, '-'),
(92, 'Stopwatch digital', 3, '-'),
(93, 'Tabung reaksi 1,5 x 7,5 cm (100 pcs)', 3, 'Box'),
(94, 'Tabung reaksi 1,5 x 15 cm (50 pcs)', 3, 'Box'),
(95, 'Tang krusibel, SS 30 cm', 5, '-'),
(96, 'Termometer ruangan', 5, '-'),
(97, 'Timer', 5, '-'),
(98, 'Tourniquet', 5, '-'),
(99, 'Vol pipet ml', 5, '-'),
(100, 'Vol pipet 5 ml', 5, '-'),
(101, 'Keranjang alumunium untuk sterilisasi', 2, '-'),
(102, 'Hot plate', 1, '-'),
(103, 'Syringe 10 ml', 3, '-'),
(104, 'Syringe 5 ml', 20, '-'),
(105, 'Syring 3 ml', 20, '-'),
(106, 'Tube plh', 15, '-'),
(107, 'Vortex mixer', 1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `profil_struktur_org`
--

CREATE TABLE `profil_struktur_org` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(65) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_struktur_org`
--

INSERT INTO `profil_struktur_org` (`id`, `nama`, `jabatan`, `nip`, `foto`) VALUES
(1, 'Hj. Susi Gantini, S.Si', 'Kepala UPT Laboratorium Kesehatan Daerah', '19750705 200501 2 010', 'default.jpg'),
(2, 'Yayat Rohayati, SKM', 'Kepala Sub Bagian Tata Usaha', '19711208 199403 2 002', 'default.jpg'),
(3, 'Ratna', 'Keuangan', '19720825 200701 2 002', 'default.jpg'),
(4, 'Sunarya', 'Umum dan Kepegawaian', '19640605 200901 1 001', 'default.jpg'),
(5, 'Yayat Rohayati, SKM', 'Sistem Informasi dan Perencanaan', '19711208 199403 2 002', 'default.jpg'),
(6, 'Kusnaeti, AMd. Kes.', 'Koordinator Pelayanan Laboratorium Kesehatan Masyarakat', '19700504 199702 2 003', 'kusnaeti.jpg'),
(7, 'Zaenudin Arief G., AMd.AK', 'Pelaksana Laboratorium Kesehatan Masyarakat', '-', 'default.jpg'),
(8, 'Meila Rodyana, S.Si', 'Pelaksana Laboratorium Kesehatan Masyarakat', '-', 'default.jpg'),
(9, 'Anita Puspitasari, S.ST', 'Koordinator Mutu', '19760821 200501 2 006', 'default.jpg'),
(10, 'Irna Tsamrotul P., AMAK', 'Koordinator Pelayanan Laboratorium Klinik', '19810911 200801 2 003', 'default.jpg'),
(11, 'Irna Tsamrotul P., AMAK', 'Pelaksana Laboratorium Klinik', '19810911 200801 2 003', 'default.jpg'),
(12, 'Anita Puspitasari, S.ST', 'Pelaksana Laboratorium Klinik', '19760821 200501 2 006', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_visimisi`
--

CREATE TABLE `profil_visimisi` (
  `id` int(11) NOT NULL,
  `visimisi` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_visimisi`
--

INSERT INTO `profil_visimisi` (`id`, `visimisi`) VALUES
(1, '<h4><strong>VISI</strong></h4>\r\n\r\n<p><strong>&quot;TERWUJUDNYA SUMEDANG YANG SEJAHTERA, AGAMIS, MAJU, PROFESIONAL DAN KREATIF (SIMPATI) TAHUN 2023&quot;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>MISI</strong></h4>\r\n\r\n<ol>\r\n	<li>Memenuhi layanan dasar Masyarakat secara mudah dan terjangkau</li>\r\n	<li>Akselerasi akses Laboratorium Kesehatan Daerah kepada Masyarakat</li>\r\n	<li>Peningkatan sumber daya manusia melalui pendidikan dan pelatihan</li>\r\n	<li>Peningkatan sarana dan prasarana penunjang Laboratorium Kesehatan</li>\r\n	<li>Melaksanakan pelayanan yang berkualitas</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>FALSAFAH</strong></h4>\r\n\r\n<ol>\r\n	<li>Cepat, Tepat dan Akurat</li>\r\n	<li>Sapa, Senyum dan Santun</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>MOTTO</strong></h4>\r\n\r\n<p><strong>&quot;KEPUASAN PELANGGAN TUJUAN KAMI&quot;</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Nur Fauzan', 'nurfauzan2106@gmail.com', 'aing1.jpg', '$2y$10$6bjp1mRIsssr3HVhr1.6leEJ2VnTnD4xEyN.Oo96hJfabtlBhSxdG', 1, 1, 1557858173),
(22, 'Fauzan', 'kozenk1997@gmail.com', 'default1.jpg', '$2y$10$rAO6vGq6Bw6p25E1opZJbOHZa/QWYC5p1aNkLujW5uG3iYLMg2T96', 2, 1, 1558352058);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 4),
(9, 1, 6),
(12, 2, 6),
(13, 2, 7),
(14, 2, 5),
(16, 1, 5),
(17, 1, 3),
(18, NULL, NULL),
(19, 11, 7),
(20, 1, 7),
(21, 15, 7),
(22, 15, 6),
(23, 1, 17),
(24, 15, 17),
(27, 1, 19),
(28, 1, 20),
(30, 1, 9),
(31, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Profil LABKESDA'),
(6, 'Pemeriksaan'),
(7, 'Arsip'),
(8, 'Kontak');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-tachometer', 1),
(2, 1, 'Peran', 'admin/role', 'fa fa-user-md', 1),
(3, 1, 'List User', 'admin/listuser', 'fa fa-users', 1),
(4, 2, 'Profil Saya', 'user', 'fa fa-user', 1),
(5, 3, 'Kelola Menu', 'menu', 'fa fa-folder', 1),
(6, 3, 'Kelola Submenu', 'menu/submenu', 'fa fa-folder-open', 1),
(7, 5, 'Latar Belakang', 'profil', 'fa fa-simplybuilt', 1),
(8, 5, 'Landasan Hukum', 'profil/landasanhukum', 'fa fa-briefcase', 1),
(9, 5, 'Sarana & Prasarana', 'profil/sarana', 'fa fa-building', 1),
(10, 5, 'Struktur Organisasi', 'profil/strukturorg', 'fa fa-sitemap', 1),
(11, 5, 'Visi & Misi', 'profil/visimisi', 'fa fa-book', 1),
(12, 6, 'Input Hasil', 'pemeriksaan', 'fa fa-pencil', 1),
(15, 7, 'Hasil Pemeriksaan', 'pemeriksaan/arsip_pemeriksaan', 'fa fa-archive', 1),
(16, 6, 'Tarif Pemeriksaan', 'pemeriksaan/tarif', 'fa fa-dollar', 1),
(18, 7, 'Jumlah Pemeriksaan', 'arsip/rincian_total', 'fa fa-th-list', 1),
(19, 8, 'Bukutamu', 'kontak/bukutamu', 'fa fa-book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(8, 'ojan@gmail.com', '5a748a146faa12ddd1276003cc49d515fa74f59238faf42928da6602593b921d', 1557948496),
(12, 'ojanojan@gmail.com', 'a29bbc2fd2bef68d1de1caf3479faa00dce270e7a054072ac0864a83b2a4a038', 1558351615),
(13, 'kozenk@gmail.com', '536f6acb9a51b8157f0a227eabc717185729c3fe6d19bb368c28f4fe1bf5878e', 1558351703),
(15, 'kozenk1997@gmail.com', 'b9755c6fb181b20f03bb10eceb234b50784b2ec7de70c03051f3b55e4ff8a6d5', 1558352664),
(16, 'kozenk1997@gmail.com', 'b83aa8ede99b998659c5cbeaedfac0d539000c9f3e0bf31b31318b36304fa2c2', 1558361414),
(17, 'kozenk1997@gmail.com', '9a8e8c8af079495ddf9120c2739a22f68d90702916535c39fd6023e767221a57', 1558601409),
(18, 'ojanojan@gmail.com', 'cc72d2251f35898d111bf7859b498e53916e58ffc8955afdf528ac8ef655b7c9', 1558687137),
(19, 'ojanojan@gmail.com', 'cc94fe54ef1254bdcb73689b0f105f74753bb81abd37a076222f987bbdfe2e6c', 1558687199),
(20, 'ojan@gmail.com', 'd7615e5022d637a7a22532d81abef78d681edc46d135a9b15774f01a59a6b089', 1558687228),
(21, 'kozenk1997@gmail.com', 'afa8bd0109b50eb78525fa77c4d4da4b81a275c61edd0f1d2ba515f5956f5a06', 1558888209),
(22, 'nurfauzan2106@gmail.com', 'e2656a944da6e09500860521d78efb9664b88a0d97bd1f506c3e6c86b2a711ab', 1558897978),
(23, 'a2.1000015@mhs.stmik-sumedang.ac.id', 'df86f0edd2e2a800dd188a8b5abcd5e4ff2b769d5f2ba8ee77221d040207df12', 1561531879),
(24, 'aardi4220@gmail.com', '586bc4e092d492e1347e11ec1bef1f18a5204fb613909680fcc58cac63f88b41', 1561531933);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_jumlahtotal`
--
ALTER TABLE `hasil_jumlahtotal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_kadar_normal`
--
ALTER TABLE `hasil_kadar_normal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_pemeriksaan`
--
ALTER TABLE `hasil_pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_tarif`
--
ALTER TABLE `hasil_tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_landasan_hukum`
--
ALTER TABLE `profil_landasan_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_latarbelakang`
--
ALTER TABLE `profil_latarbelakang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sarana_bangunan`
--
ALTER TABLE `profil_sarana_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sarana_desc`
--
ALTER TABLE `profil_sarana_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sarana_peralatan`
--
ALTER TABLE `profil_sarana_peralatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_struktur_org`
--
ALTER TABLE `profil_struktur_org`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_visimisi`
--
ALTER TABLE `profil_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasil_jumlahtotal`
--
ALTER TABLE `hasil_jumlahtotal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_kadar_normal`
--
ALTER TABLE `hasil_kadar_normal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasil_pemeriksaan`
--
ALTER TABLE `hasil_pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hasil_tarif`
--
ALTER TABLE `hasil_tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profil_landasan_hukum`
--
ALTER TABLE `profil_landasan_hukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil_latarbelakang`
--
ALTER TABLE `profil_latarbelakang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil_sarana_bangunan`
--
ALTER TABLE `profil_sarana_bangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profil_sarana_desc`
--
ALTER TABLE `profil_sarana_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil_sarana_peralatan`
--
ALTER TABLE `profil_sarana_peralatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `profil_struktur_org`
--
ALTER TABLE `profil_struktur_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profil_visimisi`
--
ALTER TABLE `profil_visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
