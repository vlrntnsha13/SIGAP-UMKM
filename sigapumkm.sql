-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 03:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigapumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(3) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `nohp_admin` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `nohp_admin`, `password`) VALUES
('A01', 'admin1', 'admin1@gmail.com', '812345678', '123');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` char(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl_terbit` date NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id_admin` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tgl_terbit`, `penulis`, `link`, `id_admin`) VALUES
('BR01', 'Pengusaha UMKM Dapat Bebas Bea Masuk dan Pajak, In', '\"Pemerintah melalui Direktorat Jenderal Bea dan Cukai (DJBC) telah meluncurkan fasilitas terbaru bernama Kemudahan Impor Tujuan Ekspor untuk Industri kecil dan menengah (KITE IKM) dengan tujuan meningkatkan ekspor. Fasilitas yang membebaskan bea masuk dan pajak-pajak terutang ini diharapkan dapat menarik minat para pelaku usaha IKM.\r\n\r\nSelepas peluncuran fasilitas KITE IKM di Desa Tumang, Boyolali, Jawa Tengah, Direktur Jenderal Bea Cukai, Heru Pambudi menjelaskan prosedur untuk mendapatkan fasilitas tersebut.\r\n\r\n\"\"Untuk mendapatkan fasilitas, badan usaha yang tergolong dalam IKM harus mengajukan permohonan dengan memenuhi beberapa kriteria,\"\" ungkap Heru dalam keterangan resminya di Jakarta, Senin (30/1/2017).\r\n\r\nDia menambahkan, kriteria yang diperlukan bagi IKM untuk memperoleh fasilitas ini, antara lain pertama, memiliki kegiatan IKM yang dibuktikan dengan izin usaha industri.\r\n\r\nKedua, IKM juga harus bersedia untuk mengoperasikan modul kepabeanan yang diciptakan khusus untuk fasilitas KITE IKM, dan sudah memiliki lokasi usaha paling kurang dua tahun.\r\n\r\nKetiga, para pelaku usaha juga harus menyerahkan dokumen di antaranya Nomor Pokok Wajib Pajak (NPWP), Surat Pemberitahuan (SPT) Pajak, surat rencana produksi, serta surat pernyataan yang disahkan oleh notaris.\r\n\r\n\"\"Permohonan tersebut dapat diajukan di kantor-kantor Bea Cukai. Petugas kami akan menindaklanjuti permohonan tersebut dengan waktu paling lama 14 hari kerja sejak berkas permohonan diterima lengkap,\"\" tutur Heru.\r\n\r\nFasilitas yang diberikan pemerintah ini diharapkan dapat dimanfaatkan sebaik-baiknya oleh para pelaku usaha IKM.\r\n\r\n\"\"Dengan adanya fasilitas ini diharapkan IKM dapat semakin bergairah dalam memasarkan produknya ke luar negeri. Selain itu, tenaga kerja yang terserap juga diharapkan dapat semakin meningkat,\"\" tutur Heru.\"\r\n', '0000-00-00', 'Fiki Ariyanti', 'Liputan6.com', 'A01'),
('BR02', 'Aplikasi Ini Bantu UMKM Rambah Bisnis Online', '\"Indonesia memiliki banyak pengusaha di sektor mikro, kecil dan menengah (UMKM). Tercatat, ada sekitar 57,3 juta pengusaha di sektor UMKM di Indonesia. Namun ternyata hanya 9 persen dari UMKM tersebut yang memiliki kemampuan e-commerce.\r\n\r\nHal inilah yang membuat Glen Chandra dan Ahmad Fikri Ardian membuat aplikasi bernama Osman. Aplikasi ini membantuk para pengusaha untuk mengembangkan bisnis online alias e-commerce.\r\n\r\nCo-Founder aplikasi Osman Glen Chandra mengatakan, ide mengembangkan aplikasi ini berawal dari banyaknya masalah pelaku UMKM yang terkendala dengan pengembangan usaha di media online. Sehingga Osman menjadi pihak yang membantu UMKM di industri e-commerce.\r\n\r\n\"\"Dengan sama-sama kita bisa lakukan. Seperti gotong royong semua UMKM bisa terhubung dan masalah itu bisa diselesaikan dengan aplikasi Osman,\"\" katanya seperti dikutip Minggu (31/12/2017).\r\n\r\nIcal panggilan Chandra mengatakan ada tiga fitur utama di aplikasi Osman. Pertama fitur manajemen penjualan dimana penjual bisa komunikasi ecara otomatis (chatbot) dan manual. Kedua fitur manajemen produk yang mengatur tata kelola produk.\r\n\r\n\"\"Ketiga laporan pendapatan, penjual bisa mengetahui laporan pendapatan dari penjualan online maupun offline,\"\" katanya.\r\n\r\nIa mengatakan sebagai bentuk perkenalan Osman memberikan program lifetime membership untuk UMKM. Osman juga kerjasama dengan PCP Express perusahaan logistik yang pengalaman dengan layanan door to door.\r\n\r\n\"\"Enaknya di Osman barangnya dijemput logistik dan pengiriman oleh logistik. Fokus UMKM hanya di produk, biar inovasi saja yangdipikirkan. Hebatnya lagi kita pasang harga Rp 100 ribu untuk 10 ribu UMKM yang bayarnya seumur hidup,\"\" ujarnya.\"\r\n', '0000-00-00', 'Yanuar H', 'Liputan6.com', 'A01');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` char(3) NOT NULL,
  `nama_gal` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `id_usaha` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` char(5) NOT NULL,
  `nama_kat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
('KAT01', 'Baju'),
('KAT02', 'Otomotif');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` char(5) NOT NULL,
  `nama_kec` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
('KEC01', 'Bambang Lipuro'),
('KEC02', 'Banguntapan'),
('KEC03', 'Bantul'),
('KEC04', 'Dlingo'),
('KEC05', 'Imogiri'),
('KEC06', 'Jetis'),
('KEC07', 'Kasihan'),
('KEC08', 'Kretek'),
('KEC09', 'Pajangan'),
('KEC10', 'Pandak'),
('KEC11', 'Piyungan'),
('KEC12', 'Pleret'),
('KEC13', 'Pundong'),
('KEC14', 'Sanden'),
('KEC15', 'Sedayu'),
('KEC16', 'Sewon'),
('KEC17', 'Srandakan'),
('KEC18', 'Gedangsari'),
('KEC19', 'Girisubo'),
('KEC20', 'Karangmojo'),
('KEC21', 'Ngawen'),
('KEC22', 'Nglipar'),
('KEC23', 'Paliyan'),
('KEC24', 'Panggang'),
('KEC25', 'Patuk'),
('KEC26', 'Playen'),
('KEC27', 'Ponjong'),
('KEC28', 'Purwosari'),
('KEC29', 'Rongkop'),
('KEC30', 'Saptosari'),
('KEC31', 'Semanu'),
('KEC32', 'Semin'),
('KEC33', 'Tanjungsari'),
('KEC34', 'Tepus'),
('KEC35', 'Wonosari'),
('KEC36', 'Galur'),
('KEC37', 'Girimulyo'),
('KEC38', 'Kalibawang'),
('KEC39', 'Kokap'),
('KEC40', 'Lendah'),
('KEC41', 'Nanggulan'),
('KEC42', 'Panjatan'),
('KEC43', 'Pangasih'),
('KEC44', 'Samigaluh'),
('KEC45', 'Sentolo'),
('KEC46', 'Temon'),
('KEC47', 'Wates'),
('KEC48', 'Berbah'),
('KEC49', 'Cangkringan'),
('KEC50', 'Depok'),
('KEC51', 'Gamping'),
('KEC52', 'Godean'),
('KEC53', 'Kalasan'),
('KEC54', 'Minggir'),
('KEC55', 'Mlati'),
('KEC56', 'Moyudan'),
('KEC57', 'Ngaglik'),
('KEC58', 'Ngemplak'),
('KEC59', 'Pakem'),
('KEC60', 'Prambanan'),
('KEC61', 'Sayegan'),
('KEC62', 'Sleman'),
('KEC63', 'Tempel'),
('KEC64', 'Turi'),
('KEC65', 'Danurejan'),
('KEC66', 'Gedongtengen'),
('KEC67', 'Gondokusuman'),
('KEC68', 'Gondomanan'),
('KEC69', 'Jetis Kota'),
('KEC70', 'Kotagede'),
('KEC71', 'Kraton'),
('KEC72', 'Mantrijeron'),
('KEC73', 'Mergangsan'),
('KEC74', 'Ngampilan'),
('KEC75', 'Pakualam'),
('KEC76', 'Tegalrejo'),
('KEC77', 'Umbulharjo'),
('KEC78', 'Wirobrajan');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kel` char(6) NOT NULL,
  `nama_kel` varchar(30) NOT NULL,
  `id_kec` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `nama_kel`, `id_kec`) VALUES
('KEL001', 'Mulyodadi', 'KEC01'),
('KEL002', 'Sidomulyo', 'KEC01'),
('KEL003', 'Sumbermulyo', 'KEC01'),
('KEL004', 'Banguntapan', 'KEC02'),
('KEL005', 'Baturetno', 'KEC02'),
('KEL006', 'Jagalan', 'KEC02'),
('KEL007', 'Jambidan', 'KEC02'),
('KEL008', 'Potorono', 'KEC02'),
('KEL009', 'Singosaren', 'KEC02'),
('KEL010', 'Tamanan', 'KEC02'),
('KEL011', 'Wirokerten', 'KEC02'),
('KEL012', 'Bantul', 'KEC03'),
('KEL013', 'Palbapang', 'KEC03'),
('KEL014', 'Ringinharjo', 'KEC02'),
('KEL015', 'Sabdodadi', 'KEC03'),
('KEL016', 'Trirenggo', 'KEC03'),
('KEL017', 'Dlingo', 'KEC04'),
('KEL018', 'Jatimulyo', 'KEC04'),
('KEL019', 'Mangunan', 'KEC04'),
('KEL020', 'Muntuk', 'KEC04'),
('KEL021', 'Temuwuh', 'KEC04'),
('KEL022', 'Terong', 'KEC04'),
('KEL023', 'Girirejo', 'KEC04'),
('KEL024', 'Imogiri', 'KEC02'),
('KEL025', 'Karangtalun', 'KEC05'),
('KEL026', 'Karang Tengah', 'KEC05'),
('KEL027', 'Kebon Agung', 'KEC05'),
('KEL028', 'Selopamioro', 'KEC05'),
('KEL029', 'Sriharjo', 'KEC05'),
('KEL030', 'Wukisari', 'KEC05'),
('KEL031', 'Canden', 'KEC06'),
('KEL032', 'Patalan', 'KEC06'),
('KEL033', 'Sumber Agung', 'KEC06'),
('KEL034', 'Trimolyo', 'KEC06'),
('KEL035', 'Bangunjiwo', 'KEC07'),
('KEL036', 'Ngestiharjo', 'KEC07'),
('KEL037', 'Tamantirto', 'KEC07'),
('KEL038', 'Tirtonirmolo', 'KEC07'),
('KEL039', 'Donotirto', 'KEC08'),
('KEL040', 'Parangtritis', 'KEC08'),
('KEL041', 'Canden', 'KEC08'),
('KEL042', 'Patalan', 'KEC08'),
('KEL043', 'Sumber Agung', 'KEC08'),
('KEL044', 'Trimolyo', 'KEC09'),
('KEL045', 'Bangunjiwo', 'KEC09'),
('KEL046', 'Ngestiharjo', 'KEC09'),
('KEL047', 'Tamantirto', 'KEC10'),
('KEL048', 'Tirtonirmolo', 'KEC10'),
('KEL049', 'Donotirto', 'KEC10'),
('KEL050', 'Parangtritis', 'KEC10'),
('KEL051', 'Canden', 'KEC11'),
('KEL052', 'Patalan', 'KEC11'),
('KEL053', 'Sumber Agung', 'KEC11'),
('KEL054', 'Trimolyo', 'KEC12'),
('KEL055', 'Bangunjiwo', 'KEC12'),
('KEL056', 'Ngestiharjo', 'KEC12'),
('KEL057', 'Tamantirto', 'KEC12'),
('KEL058', 'Tirtonirmolo', 'KEC12'),
('KEL059', 'Donotirto', 'KEC13'),
('KEL060', 'Parangtritis', 'KEC13'),
('KEL061', 'Srihardono', 'KEC13'),
('KEL062', 'Gadingharjo', 'KEC14'),
('KEL063', 'Gadingsari', 'KEC14'),
('KEL064', 'Murtigading', 'KEC14'),
('KEL065', 'Srigading', 'KEC14'),
('KEL066', 'Argodadi', 'KEC15'),
('KEL067', 'Argomulyo', 'KEC15'),
('KEL068', 'Argorejo', 'KEC15'),
('KEL069', 'Argosari', 'KEC15'),
('KEL070', 'Bangunharjo', 'KEC16'),
('KEL071', 'Panggungharjo', 'KEC16'),
('KEL072', 'Pendowoharjo', 'KEC16'),
('KEL073', 'Timbulharjo', 'KEC16'),
('KEL074', 'Poncosari', 'KEC17'),
('KEL075', 'Trimurti', 'KEC17'),
('KEL076', 'Hargo Mulyo', 'KEC18'),
('KEL077', 'Mertelu', 'KEC18'),
('KEL078', 'Ngalang', 'KEC18'),
('KEL079', 'Sampang', 'KEC18'),
('KEL080', 'Serut', 'KEC18'),
('KEL081', 'Tegalrejo', 'KEC18'),
('KEL082', 'Watu Gajah', 'KEC18'),
('KEL083', 'Balong', 'KEC19'),
('KEL084', 'Jepitu', 'KEC19'),
('KEL085', 'Jerukwudel', 'KEC19'),
('KEL086', 'Karangawen', 'KEC19'),
('KEL087', 'Nglindur', 'KEC19'),
('KEL088', 'Pucung', 'KEC19'),
('KEL089', 'Songbayu', 'KEC19'),
('KEL090', 'Tileng', 'KEC19'),
('KEL091', 'Bejiharjo', 'KEC20'),
('KEL092', 'Bendungan', 'KEC20'),
('KEL093', 'Gedang Rejo', 'KEC20'),
('KEL094', 'Jati Ayu', 'KEC20'),
('KEL095', 'Karangmojo', 'KEC20'),
('KEL096', 'Kelor', 'KEC20'),
('KEL097', 'Ngawis', 'KEC20'),
('KEL098', 'Ngipak', 'KEC20'),
('KEL099', 'Wiladeg', 'KEC20'),
('KEL100', 'Beji', 'KEC21'),
('KEL101', 'Jurang Jero', 'KEC21'),
('KEL102', 'Kampung', 'KEC21'),
('KEL103', 'Sambirejo', 'KEC21'),
('KEL104', 'Tanep', 'KEC21'),
('KEL105', 'Watu Sigar', 'KEC21'),
('KEL106', 'Katongan', 'KEC22'),
('KEL107', 'Kedung Keris', 'KEC22'),
('KEL108', 'Kedungpoh', 'KEC22'),
('KEL109', 'Natah', 'KEC22'),
('KEL110', 'Nglipar', 'KEC22'),
('KEL111', 'Pengkol', 'KEC22'),
('KEL112', 'Pilang Rejo', 'KEC22'),
('KEL113', 'Giring', 'KEC23'),
('KEL114', 'Grogol', 'KEC23'),
('KEL115', 'Karang Asem', 'KEC23'),
('KEL116', 'Karang Duwet', 'KEC23'),
('KEL117', 'Mulusan', 'KEC23'),
('KEL118', 'Pampang', 'KEC23'),
('KEL119', 'Sodo', 'KEC23'),
('KEL120', 'Giriharjo', 'KEC24'),
('KEL121', 'Girikarto', 'KEC24'),
('KEL122', 'Girimulyo', 'KEC24'),
('KEL123', 'Girisekar', 'KEC24'),
('KEL124', 'Girisuko', 'KEC24'),
('KEL125', 'Giriwunggu', 'KEC24'),
('KEL126', 'Beji', 'KEC25'),
('KEL127', 'Bunder', 'KEC25'),
('KEL128', 'Nglanggeran', 'KEC25'),
('KEL129', 'Nglegi', 'KEC25'),
('KEL130', 'Ngoro Oro', 'KEC25'),
('KEL131', 'Patuk', 'KEC25'),
('KEL132', 'Pengkok', 'KEC25'),
('KEL133', 'Putat', 'KEC25'),
('KEL134', 'Salam', 'KEC25'),
('KEL135', 'Semoyo', 'KEC25'),
('KEL136', 'Terbah', 'KEC25'),
('KEL137', 'Banaran', 'KEC26'),
('KEL138', 'Bandung', 'KEC26'),
('KEL139', 'Banyusoco', 'KEC26'),
('KEL140', 'Bleberan', 'KEC26'),
('KEL141', 'Dengok', 'KEC26'),
('KEL142', 'Gading', 'KEC26'),
('KEL143', 'Getas', 'KEC26'),
('KEL144', 'Logandeng', 'KEC26'),
('KEL145', 'Ngawu', 'KEC26'),
('KEL146', 'Ngleri', 'KEC26'),
('KEL147', 'Ngunut', 'KEC26'),
('KEL148', 'Playen', 'KEC26'),
('KEL149', 'Plembutan', 'KEC26'),
('KEL150', 'Bedoyo', 'KEC27'),
('KEL151', 'Genjahan', 'KEC27'),
('KEL152', 'Gombng', 'KEC27'),
('KEL153', 'Karang Asem', 'KEC27'),
('KEL154', 'Kenteng', 'KEC27'),
('KEL155', 'Ponjong', 'KEC27'),
('KEL156', 'Sawahan', 'KEC27'),
('KEL157', 'Sidorejo', 'KEC27'),
('KEL158', 'Sumber Giri', 'KEC27'),
('KEL159', 'Tambakromo', 'KEC27'),
('KEL160', 'Umbulrejo', 'KEC27'),
('KEL161', 'Giriasih', 'KEC28'),
('KEL162', 'Giricahyo', 'KEC28'),
('KEL163', 'Girijati', 'KEC28'),
('KEL164', 'Giripurwo', 'KEC28'),
('KEL165', 'Giritirto', 'KEC28'),
('KEL166', 'Bohol', 'KEC29'),
('KEL167', 'Botodayakan', 'KEC29'),
('KEL168', 'Karangwuni', 'KEC29'),
('KEL169', 'Melikan', 'KEC29'),
('KEL170', 'Petir', 'KEC29'),
('KEL171', 'Pringombo', 'KEC29'),
('KEL172', 'Pucanganom', 'KEC29'),
('KEL173', 'Semugih', 'KEC29'),
('KEL174', 'Jetis ', 'KEC30'),
('KEL175', 'Kanigoro ', 'KEC30'),
('KEL176', 'Kepekk', 'KEC30'),
('KEL177', 'Krambilsawit', 'KEC30'),
('KEL178', 'Monggol', 'KEC30'),
('KEL179', 'Ngloro (Nglora)', 'KEC30'),
('KEL180', 'Planjan', 'KEC30'),
('KEL181', 'Candirejo', 'KEC31'),
('KEL182', 'Dadapayu', 'KEC31'),
('KEL183', 'Ngeposari', 'KEC31'),
('KEL184', 'Pacarejo', 'KEC31'),
('KEL185', 'Semanu', 'KEC31'),
('KEL186', 'Bendung', 'KEC32'),
('KEL187', 'Bulurejo', 'KEC32'),
('KEL188', 'Candirejo', 'KEC32'),
('KEL189', 'Kalitekuk', 'KEC32'),
('KEL190', 'Karangsari', 'KEC32'),
('KEL191', 'Kemejing', 'KEC32'),
('KEL192', 'Pundungsari', 'KEC32'),
('KEL193', 'RejosariSemin', 'KEC32'),
('KEL194', 'Sumberejo', 'KEC32'),
('KEL195', 'Banjarejo', 'KEC33'),
('KEL196', 'Hargosari', 'KEC33'),
('KEL197', 'Kemadang', 'KEC33'),
('KEL198', 'Kemiri', 'KEC33'),
('KEL199', 'Ngestirejo', 'KEC33'),
('KEL200', 'Giripanggung', 'KEC34'),
('KEL201', 'Purwodadi', 'KEC34'),
('KEL202', 'Sidoharjo', 'KEC34'),
('KEL203', 'Sumberwungu', 'KEC34'),
('KEL204', 'Tepus', 'KEC34'),
('KEL205', 'Baleharjo', 'KEC35'),
('KEL206', 'Duwet', 'KEC35'),
('KEL207', 'Gari', 'KEC35'),
('KEL208', 'Karangrejek', 'KEC35'),
('KEL209', 'Karangtengah', 'KEC35'),
('KEL210', 'Kepekk', 'KEC35'),
('KEL211', 'Mulo', 'KEC35'),
('KEL212', 'Piyaman', 'KEC35'),
('KEL213', 'Pulutan', 'KEC35'),
('KEL214', 'Selang', 'KEC35'),
('KEL215', 'Siraman', 'KEC35'),
('KEL216', 'Wareng', 'KEC35'),
('KEL217', 'Wonosari', 'KEC35'),
('KEL218', 'Wunung', 'KEC35'),
('KEL219', 'Banaran', 'KEC36'),
('KEL220', 'Brosot', 'KEC36'),
('KEL221', 'Karangsewu', 'KEC36'),
('KEL222', 'Kranggan', 'KEC36'),
('KEL223', 'Nomporejo', 'KEC36'),
('KEL224', 'Pandowan', 'KEC36'),
('KEL225', 'Tirtorahayu', 'KEC36'),
('KEL226', 'Giripurwo', 'KEC37'),
('KEL227', 'Jatimulyo', 'KEC37'),
('KEL228', 'Pendoworejo', 'KEC37'),
('KEL229', 'Purwosari', 'KEC37'),
('KEL230', 'Banjararum', 'KEC38'),
('KEL231', 'Banjarasri', 'KEC38'),
('KEL232', 'Banjarharjo', 'KEC38'),
('KEL233', 'Banjaroyo', 'KEC38'),
('KEL234', 'Hargomulyo', 'KEC39'),
('KEL235', 'Hargorejo', 'KEC39'),
('KEL236', 'Hargotirto', 'KEC39'),
('KEL237', 'Hargowilis', 'KEC39'),
('KEL238', 'Kalirejo', 'KEC39'),
('KEL239', 'Bumirejo', 'KEC40'),
('KEL240', 'Gulurejo', 'KEC40'),
('KEL241', 'Jatirejo', 'KEC40'),
('KEL242', 'Ngentakrejo', 'KEC40'),
('KEL243', 'Sidorejo', 'KEC40'),
('KEL244', 'Wahyuharjo', 'KEC40'),
('KEL245', 'Banyuroto', 'KEC41'),
('KEL246', 'Donomulyo', 'KEC41'),
('KEL247', 'Jatisarono', 'KEC41'),
('KEL248', 'Kembang', 'KEC41'),
('KEL249', 'Tanjungharjo', 'KEC41'),
('KEL250', 'Wijimulyo', 'KEC41'),
('KEL251', 'Bojong', 'KEC42'),
('KEL252', 'Bugel', 'KEC42'),
('KEL253', 'Cerme', 'KEC42'),
('KEL254', 'Depok', 'KEC42'),
('KEL255', 'Garongan', 'KEC42'),
('KEL256', 'Gotakan', 'KEC42'),
('KEL257', 'Kanoman', 'KEC42'),
('KEL258', 'Krembangan', 'KEC42'),
('KEL259', 'Panjatan', 'KEC42'),
('KEL260', 'Pleret', 'KEC42'),
('KEL261', 'Tayuban', 'KEC42'),
('KEL262', 'Karangasri', 'KEC43'),
('KEL263', 'Kedungssari', 'KEC43'),
('KEL264', 'Margosari', 'KEC43'),
('KEL265', 'Pengasih', 'KEC43'),
('KEL266', 'Sendangsari', 'KEC43'),
('KEL267', 'Sidomullyo', 'KEC43'),
('KEL268', 'Tawangsari', 'KEC43'),
('KEL269', 'Banjarsari', 'KEC44'),
('KEL270', 'Gerbosari', 'KEC44'),
('KEL271', 'Kebonharjo', 'KEC44'),
('KEL272', 'Ngargosari', 'KEC44'),
('KEL273', 'Pagerharjo', 'KEC44'),
('KEL274', 'Purwoharjo', 'KEC44'),
('KEL275', 'Sidoharjo', 'KEC44'),
('KEL276', 'Banguncipto', 'KEC45'),
('KEL277', 'Demangrejo', 'KEC45'),
('KEL278', 'Kaliagung', 'KEC45'),
('KEL279', 'Salamrejo', 'KEC45'),
('KEL280', 'Sentolo', 'KEC45'),
('KEL281', 'Srikayangan', 'KEC45'),
('KEL282', 'Sukoreno', 'KEC45'),
('KEL283', 'Tuksono', 'KEC45'),
('KEL284', 'Demen', 'KEC46'),
('KEL285', 'Glagah', 'KEC46'),
('KEL286', 'Jangkaran', 'KEC46'),
('KEL287', 'Janten', 'KEC46'),
('KEL288', 'Kalidengen', 'KEC46'),
('KEL289', 'Kaligintung', 'KEC46'),
('KEL290', 'Karangwuluh', 'KEC46'),
('KEL291', 'Kebonrejo', 'KEC46'),
('KEL292', 'Kedundang', 'KEC46'),
('KEL293', 'Kulur', 'KEC46'),
('KEL294', 'Palihan', 'KEC46'),
('KEL295', 'Plumbon', 'KEC46'),
('KEL296', 'Sindutan', 'KEC46'),
('KEL297', 'Temon Kulon', 'KEC46'),
('KEL298', 'Temon Wetan', 'KEC46'),
('KEL299', 'Bendungan', 'KEC47'),
('KEL300', 'Giripeni', 'KEC47'),
('KEL301', 'Karangwuni', 'KEC47'),
('KEL302', 'Kulwaru', 'KEC47'),
('KEL303', 'Ngestiharjo', 'KEC47'),
('KEL304', 'Sogan', 'KEC47'),
('KEL305', 'Triharjo', 'KEC47'),
('KEL306', 'Wates', 'KEC47'),
('KEL307', 'Jogotirto', 'KEC48'),
('KEL308', 'Kalitirto', 'KEC48'),
('KEL309', 'Sendangtirto', 'KEC48'),
('KEL310', 'Tegaltirto', 'KEC48'),
('KEL311', 'Argomulyo', 'KEC49'),
('KEL312', 'Glagaharjo', 'KEC49'),
('KEL313', 'Kepuharjo', 'KEC49'),
('KEL314', 'Umbulharjo', 'KEC49'),
('KEL315', 'Wukirsari', 'KEC49'),
('KEL316', 'Caturtunggal', 'KEC50'),
('KEL317', 'Condongcatur', 'KEC50'),
('KEL318', 'Maguwoharjo', 'KEC50'),
('KEL319', 'Ambarketawang', 'KEC51'),
('KEL320', 'Balecatur', 'KEC51'),
('KEL321', 'Banyuraden', 'KEC51'),
('KEL322', 'Nogotirto', 'KEC51'),
('KEL323', 'Trihanggo', 'KEC51'),
('KEL324', 'Sidoagung', 'KEC52'),
('KEL325', 'Sidoarum', 'KEC52'),
('KEL326', 'Sidokarto', 'KEC52'),
('KEL327', 'Sidoluhur', 'KEC52'),
('KEL328', 'Sidomoyo', 'KEC52'),
('KEL329', 'Sidomulyo', 'KEC52'),
('KEL330', 'Sidorejo', 'KEC52'),
('KEL331', 'Purwomartani', 'KEC53'),
('KEL332', 'Selomartani', 'KEC53'),
('KEL333', 'Tamanmartani', 'KEC53'),
('KEL334', 'Tirtomartani', 'KEC53'),
('KEL335', 'Sendangagung', 'KEC54'),
('KEL336', 'Sendangarum', 'KEC54'),
('KEL337', 'Sendangmulyo', 'KEC54'),
('KEL338', 'Sendangrejo', 'KEC54'),
('KEL339', 'Sendangsari', 'KEC54'),
('KEL340', 'Sendangadi', 'KEC55'),
('KEL341', 'Sinduadi', 'KEC55'),
('KEL342', 'Sumberadi', 'KEC55'),
('KEL343', 'Tirtoadi', 'KEC55'),
('KEL344', 'Tlogoadi', 'KEC55'),
('KEL345', 'Sumberagung', 'KEC56'),
('KEL346', 'Sumberahayu', 'KEC56'),
('KEL347', 'Sumberarum', 'KEC56'),
('KEL348', 'Sumbersari', 'KEC56'),
('KEL349', 'Donoharjo', 'KEC57'),
('KEL350', 'Minomartani', 'KEC57'),
('KEL351', 'Sardonoharjo', 'KEC57'),
('KEL352', 'Sariharjo', 'KEC57'),
('KEL353', 'Sinduharjo', 'KEC57'),
('KEL354', 'Sukoharjo', 'KEC57'),
('KEL355', 'Bimomartani', 'KEC58'),
('KEL356', 'Sindumartani', 'KEC58'),
('KEL357', 'Umbulmartani', 'KEC58'),
('KEL358', 'Wedomartani', 'KEC58'),
('KEL359', 'Widodomartani', 'KEC58'),
('KEL360', 'Candibinangun', 'KEC59'),
('KEL361', 'Hargobinangun', 'KEC59'),
('KEL362', 'Harjobinangun', 'KEC59'),
('KEL363', 'Pakembinangun', 'KEC59'),
('KEL364', 'Purwobinangun', 'KEC59'),
('KEL365', 'Bokoharjo ', 'KEC60'),
('KEL366', 'Gayamharjo', 'KEC60'),
('KEL367', 'Madurejo', 'KEC60'),
('KEL368', 'Sambirejo', 'KEC60'),
('KEL369', 'Sumberharjo', 'KEC60'),
('KEL370', 'Wukirharjo', 'KEC60'),
('KEL371', 'Margoagung', 'KEC61'),
('KEL372', 'Margodadi', 'KEC61'),
('KEL373', 'Margokaton', 'KEC61'),
('KEL374', 'Margoluwih', 'KEC61'),
('KEL375', 'Margomulyo', 'KEC61'),
('KEL376', 'Caturharjo', 'KEC62'),
('KEL377', 'Pandowoharjo', 'KEC62'),
('KEL378', 'Tridadi', 'KEC62'),
('KEL379', 'Triharjo', 'KEC62'),
('KEL380', 'Trimulyo', 'KEC62'),
('KEL381', 'Banyurejo', 'KEC63'),
('KEL382', 'Lumbungrejo', 'KEC63'),
('KEL383', 'Margorejo', 'KEC63'),
('KEL384', 'Merdikorejo', 'KEC63'),
('KEL385', 'Mororejo', 'KEC63'),
('KEL386', 'Pondokrejo', 'KEC63'),
('KEL387', 'Sumberrejo', 'KEC63'),
('KEL388', 'Tambakrejo', 'KEC63'),
('KEL389', 'Bangunkerto', 'KEC64'),
('KEL390', 'Donokerto', 'KEC64'),
('KEL391', 'Girikerto', 'KEC64'),
('KEL392', 'Wonokerto', 'KEC64'),
('KEL393', 'Bausasran', 'KEC65'),
('KEL394', 'Suryatmajan', 'KEC65'),
('KEL395', 'Tegalpanggung', 'KEC65'),
('KEL396', 'Pringgokusuman', 'KEC66'),
('KEL397', 'Sosromenduran', 'KEC66'),
('KEL398', 'Baciro', 'KEC67'),
('KEL399', 'Demangan', 'KEC67'),
('KEL400', 'Klitren', 'KEC67'),
('KEL401', 'Kotabaru', 'KEC67'),
('KEL402', 'Terban', 'KEC67'),
('KEL403', 'Ngupasan', 'KEC68'),
('KEL404', 'Prawirodirjan', 'KEC68'),
('KEL405', 'Bumijo', 'KEC69'),
('KEL406', 'Cokrodiningratan', 'KEC69'),
('KEL407', 'Gowongan', 'KEC69'),
('KEL408', 'Prenggan', 'KEC70'),
('KEL409', 'Purbayan', 'KEC70'),
('KEL410', 'Rejowinangun', 'KEC70'),
('KEL411', 'Kadipaten', 'KEC71'),
('KEL412', 'Panembahan ', 'KEC71'),
('KEL413', 'Patehan', 'KEC71'),
('KEL414', 'Gedongkiwo', 'KEC72'),
('KEL415', 'Mantrijeron', 'KEC72'),
('KEL416', 'Suryodiningratan', 'KEC72'),
('KEL417', 'Brontokusuman', 'KEC73'),
('KEL418', 'Keparakan', 'KEC73'),
('KEL419', 'Wirogunan ', 'KEC73'),
('KEL420', 'Ngampilan ', 'KEC74'),
('KEL421', 'Notoprajan', 'KEC74'),
('KEL422', 'Gunungketur', 'KEC75'),
('KEL423', 'Purwokinanti', 'KEC75'),
('KEL424', 'Bener', 'KEC76'),
('KEL425', 'Karangwaru', 'KEC76'),
('KEL426', 'Kricak', 'KEC76'),
('KEL427', 'Tegalrejo', 'KEC76'),
('KEL428', 'Giwangan', 'KEC77'),
('KEL429', 'Muja muju', 'KEC77'),
('KEL430', 'Pandeyan', 'KEC77'),
('KEL431', 'Semaki', 'KEC77'),
('KEL432', 'Sorosutan', 'KEC77'),
('KEL433', 'Tahunan', 'KEC77'),
('KEL434', 'Warungboto', 'KEC77'),
('KEL435', 'Pakuncen', 'KEC78'),
('KEL436', 'Patangpuluhan', 'KEC78'),
('KEL437', 'Wirobrajan', 'KEC78');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` char(3) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `email_member` varchar(30) NOT NULL,
  `nohp_member` varchar(20) NOT NULL,
  `alamat_member` text NOT NULL,
  `password` varchar(12) NOT NULL,
  `id_admin` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `email_member`, `nohp_member`, `alamat_member`, `password`, `id_admin`) VALUES
('M01', 'Member1', 'member1@gmail.com', '08132132213', 'Jl.Mangga no 11', 'member1', 'A01'),
('M02', 'Member 2', 'member2@gmail.com', '081234566788', 'JL rambutan', 'member2', 'A01');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` char(4) NOT NULL,
  `nama_ush` varchar(30) NOT NULL,
  `alamat_ush` text NOT NULL,
  `ket_ush` text NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `id_member` char(3) NOT NULL,
  `id_admin` char(3) NOT NULL,
  `id_kel` char(6) NOT NULL,
  `id_kec` char(5) NOT NULL,
  `id_kat` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `nama_ush`, `alamat_ush`, `ket_ush`, `longitude`, `latitude`, `id_member`, `id_admin`, `id_kel`, `id_kec`, `id_kat`) VALUES
('US01', 'Putra Insan Keramik & Craft', 'Kasongan, Kajen, Jl. Kasongan, RT. 01, Bangunjiwo, Kajen, Bangunjiwo, Daerah Istimewa Yogyakarta, Bantul, Daerah Istimewa Yogyakarta 55184', 'Usaha gerabah dengan produk souvenir, pot guci', '1103336036', '-78458961', 'M01', 'A01', 'KEL035', 'KEC07', 'KAT01'),
('US02', 'Moodglory Store', 'Cobongan, Ngestiharjo, Kasihan, Bantul Regency, Special Region of Yogyakarta 55184', 'Usaha Fashion sablonan dengan produk baju, titebas, souvenis, dll', '1103451622', '-77942558', 'M01', 'A01', 'KEL036', 'KEC07', 'KAT02'),
('US03', 'Kripik Belut Mitra Ibu Tini', 'Jl. Godean No.7, Jetis, Sidoagung, Jetis, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55293', 'Usaha Kuliner dengan produk makanan berupa kripik olahan dari belut', '1102980445', '-77583983', 'M01', 'A01', 'KEL324', 'KEC52', 'KAT02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `admin_berita` (`id_admin`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `usaha_galeri` (`id_usaha`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kel`),
  ADD KEY `kel_kec` (`id_kec`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `admin_member` (`id_admin`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`),
  ADD KEY `member_usaha` (`id_member`),
  ADD KEY `admin_usaha` (`id_admin`),
  ADD KEY `kelurahan_usaha` (`id_kel`),
  ADD KEY `kecamatan_usaha` (`id_kec`),
  ADD KEY `kategori_usaha` (`id_kat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `admin_berita` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `usaha_galeri` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id_usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kel_kec` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`) ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `admin_member` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `Kategori_usaha` FOREIGN KEY (`id_kat`) REFERENCES `kategori` (`id_kat`),
  ADD CONSTRAINT `admin_usaha` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kecamatan_usaha` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelurahan_usaha` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_usaha` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
