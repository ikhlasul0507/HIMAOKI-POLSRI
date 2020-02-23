-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2019 pada 09.59
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himaoki_laptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `photo_admin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `email_admin`, `password`, `photo_admin`) VALUES
(5, 'Amal', 'Laki-laki', 'amal@gmail.com', 'amal', 'Selamat_Datang.png'),
(6, 'okti', 'Perempuan', 'okti@gmail.com', 'okti', 'baju_adat_papua_pria_2.JPG'),
(7, 'ibnu', 'Laki-laki', 'ibnu@gmail.com', 'ibnu', 'a22eebb632457f9150f5fecbce8b68d21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(500) NOT NULL,
  `tgl_berita` varchar(11) NOT NULL,
  `isi_berita` varchar(5000) NOT NULL,
  `photo_berita` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `tgl_berita`, `isi_berita`, `photo_berita`) VALUES
(2, 'Lukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta Dibatalkan', '2019-10-10', 'Lukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta DibatalkanLukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta DibatalkanLukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta DibatalkanLukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta DibatalkanLukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta DibatalkanLukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta DibatalkanLukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta Dibatalkan', '1532646265142.jpg'),
(3, 'Lukman Disebut Tetap Pilih Haris Hasanudin Meski KASN Minta Dibatalkan', '2019-10-15', 'Nanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak sayaNanti akan diumumkan secara resmi dan hanya saya dan kakak saya', '15326462651421.jpg'),
(4, 'Suara.com - Analis Media Sosial Drone Emprit, Ismail Fahmi, angkat bicara ketika ditany', '2019-10-15', 'Awalnya, presenter Indonesia Lawyers Club (ILC) TV One Karni Ilyas mengungkit sejumlah partai yang menggunakan jasa pelaku buzzer pada kontestasi Pemilu 2019 kemarin.\r\n\r\nKemudian, Karni Ilyas menanyakan bayaran yang diterima para pelaku buzzer tersebut, terutama yang digunakan parpol ketika Pemilu 2019.\r\n\r\n"Itu kalau (buzzer) yang dibayar itu, per akun atau per tweet dibayar berapa?" ujar Karni Ilyas dalam acara ILC TV One bertajuk "Siapa yang Bermain Buzzer?" yang ditayangkan Selasa (8/10/2019).\r\n\r\nMulanya, Ismail menjawab tidak tahu. "Wah kalau (bayaran) itu saya enggak tahu," jawab Ismail singkat. Namun, Karni Ilyas kemudian mencecar dengan menyebutkan angka.\r\n\r\n"Sebagai analis sudah menganalisa sampai ke sana, katanya 3 juta (rupiah), koordinator gajinya 9 juta (rupiah) atau berapa?" tanya Karni Ilyas.\r\n\r\nMenjawab pertanyaan itu, Ismail mengaku memang ada penelitian yang menunjukkan hal tersebut. Tapi, dia mengaku tidak pernah melihat proposal atau struk sehingga tak bisa menggunakan sumber sendiri.\r\n\r\n"Itu kalau saya bilang penelitian ada yang menunjukkan itu tapi saya sendiri tidak pernah melihat proposal atau struk jadi saya tidak bisa menggunakan sumber saya sendiri," kata Ismail.\r\n\r\nMana yang lebih banyak pakai buzzer?\r\n\r\nIsmail menjelaskan tidak semua partai politik pada Pemilu 2019. Menurut dia, ada sejumlah partai senior yang memilih menggunakan cara lain. Justru, partai itu meraup suara lebih banyak.\r\n\r\n"Tidak semua Bang Karni, ada beberapa partai yang sudah tua dan mereka nggak peduli dengan sosial media. Mereka pakai cara lain. Dan, terbukti mereka mendapatkan suara lebih banyak ketimbang mereka yang menggunakan media sosial," ujar Ismail Fahmi.\r\n\r\nLantas, Karni Ilyas pun meminta informasi soal kubu mana dalam Pilpres 2019 kemarin yang paling banyak menggunakan buzzer. Seperti diketahui, kubu 01 adalah Joko Widodo dan Maruf Amin, kubu 02 adalah Prabowo Subianto dan Sandiaga Uno.\r\n\r\n"Waktu pemilu kemarin, antara kubu 01 dan kubu 02, mana yang lebih banyak buzzer-nya?" tanya Karni Ilyas seperti dikutip Suara.\r\n\r\nDitanya seperti itu, Ismail mesem-mesem. Dia menjawab sambil tersenyum. Menurut dia, kedua kubu memiliki buzzer yang sama banyaknya.\r\n\r\n"Saya nggak bisa bilang yang mana gitu. Saya bilang dua-duanya ini memiliki buzzer yang sama banyak," terang Ismail Fahmi.\r\n\r\nMeski bilang buzzer kedua kubu itu sama banyak, Ismail menyinggung massa emak-emak dari kubu o2 dan menyebut jumlahnya sangat banyak.\r\n\r\n"(Kubu) 02 itu besar sekali, emak-emak itu diajak. Mereka ikut mengamplifikasi, dalam hal itu mereka bisa jadi buzzer kan?" tuturnya.\r\n\r\nMeski tidak membangun opini, Ismail menyontohkan ada banyak buzzer emak-emak yang me-retweet kicauan influencer kubu 02 dalam suatu waktu. Dan, imbuhnya, itu tidak dibayar alias sukarela.\r\n\r\n"Mereka tidak membangun opini tapi misalkan top influencer mereka mengatakan pernyataan tiba-tiba mendapat retweet yang sangat tinggi, mereka membantu juga dan itu enggak dibayar karena suka rela," kata Ismail Fahmi.\r\n\r\nPun Ismail tidak menutup mata terhadap kubu 01. Menurut dia, jumlah buzzer di kubu 01 tersebut juga cukup banyak. Maklum, tim relawan dari kubu itu menyebar di segala penjuru.\r\n\r\n"Kemudian 01, timnya kan banyak saya lihat di dalam peta itu tersebar di banyak kelompok dan mereka membangun juga narasinya sendiri-sendiri," ungkap Ismail Fahmi.', 'baju_adat_papua_pria_21.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(9) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama`, `email`, `handphone`, `saran`) VALUES
(1, 'Jorge', 'collier.lorena@example.com', '(065)606-7896x6364', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 6.2; Trident/3.1)'),
(2, 'Jovani', 'adah03@example.net', '(413)027-6471x5231', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows CE; Trident/3.1)'),
(3, 'Kristopher', 'rfarrell@example.com', '167-225-5989x355', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows 98; Trident/4.1)'),
(4, 'Roger', 'adell.kovacek@example.org', '(713)162-2943', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Trident/5.1)'),
(5, 'Joshuah', 'ebert.graciela@example.org', '1-369-290-7977x614', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 98; Win 9x 4.90; Trident/3.1)'),
(6, 'Garry', 'bianka.cassin@example.net', '1-199-994-1500x7013', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 6.2; Trident/3.0)'),
(7, 'Harrison', 'verda.feil@example.com', '+91(8)6999620003', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; Trident/4.1)'),
(8, 'Braxton', 'brandt.barton@example.org', '1-052-546-9844', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 98; Trident/5.1)'),
(9, 'Haleigh', 'larry73@example.com', '01642413258', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 4.0; Trident/3.0)'),
(10, 'Linwood', 'lucy.block@example.net', '1-325-182-8741', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/4.1)'),
(11, 'Khalil', 'terdman@example.org', '770.926.3108', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.1)'),
(12, 'Lonny', 'dratke@example.org', '1-144-560-7710x48744', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.0; Trident/4.0)'),
(13, 'Pedro', 'filomena08@example.org', '821-690-8452', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; Trident/3.1)'),
(14, 'Cleve', 'savanah11@example.org', '(395)900-4909x96315', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.2; Trident/5.0)'),
(15, 'Jasen', 'horace.hansen@example.org', '(063)465-4487x8088', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)'),
(16, 'Marcelo', 'rluettgen@example.org', '864-324-1784x3046', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows 95; Trident/3.1)'),
(17, 'Javier', 'amparo80@example.net', '1-446-285-3960x59485', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows 95; Trident/4.0)'),
(18, 'Orland', 'leilani.bernhard@example.net', '(709)335-5147', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/3.0)'),
(19, 'Grover', 'okuneva.shana@example.com', '962-760-6348x278', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.2; Trident/5.1)'),
(20, 'Lorenza', 'orn.francisca@example.com', '525-884-2449x9671', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/3.1)'),
(21, 'Arturo', 'isaiah59@example.org', '1-737-134-9201x1447', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90; Trident/4.1)'),
(22, 'Alex', 'jjenkins@example.net', '637-459-4616x19144', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.01; Trident/5.1)'),
(23, 'Ethel', 'garnet70@example.net', '06632851469', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.2; Trident/5.1)'),
(24, 'Christop', 'mschiller@example.net', '(604)607-3490', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)'),
(25, 'Jensen', 'eliane75@example.net', '(003)444-0617', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0)'),
(26, 'Blaze', 'gina.stamm@example.net', '892-967-4112x19605', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 6.2; Trident/4.0)'),
(27, 'Maxwell', 'leffler.kristy@example.net', '834-261-4771', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/5.0)'),
(28, 'Constantin', 'talia50@example.net', '502-372-2272x0800', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.1)'),
(29, 'Diego', 'lois35@example.net', '291-053-6143x358', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows 98; Win 9x 4.90; Trident/5.1)'),
(30, 'Trent', 'maeve.stroman@example.com', '382-346-4934x816', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 98; Win 9x 4.90; Trident/3.0)'),
(31, 'Fern', 'morar.clemens@example.org', '+30(7)0285725982', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.0; Trident/5.1)'),
(32, 'Cooper', 'walker.fermin@example.net', '(668)752-5113', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.2; Trident/5.0)'),
(33, 'Buster', 'mcronin@example.net', '617-668-0772x24875', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows CE; Trident/5.1)'),
(34, 'Rene', 'kling.alexandre@example.com', '(905)908-8217x6092', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows CE; Trident/3.1)'),
(35, 'Bernard', 'dahlia01@example.com', '946-751-9076x2170', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows CE; Trident/5.0)'),
(36, 'Cruz', 'pat.koss@example.com', '704.420.5529x881', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/5.1)'),
(37, 'Wiley', 'zita06@example.com', '+18(4)5391944888', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/5.1)'),
(38, 'Terry', 'axel.ratke@example.net', '972-657-7822', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.1; Trident/3.1)'),
(39, 'Myrl', 'kailey.halvorson@example.org', '(537)364-6905', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.01; Trident/5.0)'),
(40, 'Lennie', 'qgulgowski@example.com', '495.302.4686', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.01; Trident/5.1)'),
(41, 'Payton', 'katrine.hessel@example.net', '1-344-946-6851x4600', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.2; Trident/5.1)'),
(42, 'Immanuel', 'lou90@example.com', '(244)043-2817x578', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 95; Trident/3.1)'),
(43, 'Otto', 'bstiedemann@example.net', '(305)905-8189', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 5.01; Trident/5.1)'),
(44, 'Devante', 'alvis79@example.org', '858-773-8025x216', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.01; Trident/5.1)'),
(45, 'Josiah', 'otto.murray@example.org', '690.464.7301x833', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 6.1; Trident/5.0)'),
(46, 'Braxton', 'jakubowski.tyree@example.com', '600-641-5796x619', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.2; Trident/5.0)'),
(47, 'Paul', 'roxane11@example.com', '03152094137', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.01; Trident/4.1)'),
(48, 'Oswald', 'pablo56@example.org', '1-076-406-0123x9442', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.2; Trident/3.1)'),
(49, 'Ludwig', 'block.bonnie@example.net', '040-173-9212x35357', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 98; Win 9x 4.90; Trident/3.0)'),
(50, 'Gaetano', 'hrippin@example.com', '(061)703-8530', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows 98; Win 9x 4.90; Trident/4.1)'),
(51, 'Kyle', 'hayden71@example.net', '(357)567-1558x75862', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/3.1)'),
(52, 'Dayne', 'delores34@example.net', '04985056105', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.2; Trident/3.0)'),
(53, 'Franco', 'yost.jeremy@example.org', '303-222-1665x3560', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 4.0; Trident/3.1)'),
(54, 'Tyson', 'leta.harris@example.net', '09690711198', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 98; Win 9x 4.90; Trident/3.0)'),
(55, 'Jermey', 'ikautzer@example.org', '(768)108-4266x173', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows CE; Trident/4.0)'),
(56, 'Jaquan', 'francesco93@example.com', '145-408-6382x580', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows 98; Win 9x 4.90; Trident/4.1)'),
(57, 'Cleve', 'zzboncak@example.com', '(048)178-0310x9800', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.1; Trident/3.1)'),
(58, 'Raleigh', 'kreiger.emmalee@example.com', '(001)476-7721', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0)'),
(59, 'Rickie', 'amina.cassin@example.com', '09465696276', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/3.1)'),
(60, 'Cody', 'maddison22@example.org', '(779)660-9139x409', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 5.01; Trident/3.1)'),
(61, 'Bernie', 'lon.rutherford@example.net', '1-399-642-1878', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 5.01; Trident/4.1)'),
(62, 'Jack', 'nicolas.lesly@example.com', '(263)869-0251', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)'),
(63, 'Vincent', 'buckridge.agustina@example.net', '633.283.9042x4880', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.2; Trident/5.0)'),
(64, 'Ignacio', 'lysanne81@example.com', '1-903-996-3827x69138', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows 95; Trident/3.0)'),
(65, 'Brian', 'sydni61@example.com', '+27(0)2798188972', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.2; Trident/5.0)'),
(66, 'Kelley', 'fkuvalis@example.org', '04245739302', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.01; Trident/5.1)'),
(67, 'Maximillian', 'maggio.mallory@example.com', '(251)181-5572x10151', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.2; Trident/4.1)'),
(68, 'Merl', 'gbotsford@example.net', '+88(2)8433753775', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows 98; Trident/4.0)'),
(69, 'Darius', 'aurelie92@example.net', '303.387.3828x1014', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.2; Trident/5.0)'),
(70, 'Angelo', 'rauer@example.net', '1-703-434-7015', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90; Trident/3.1)'),
(71, 'Kaleb', 'vivian.flatley@example.net', '1-909-502-6752x2684', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 4.0; Trident/4.1)'),
(72, 'Raymond', 'tristian.dooley@example.org', '1-911-152-9494', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.1)'),
(73, 'Javier', 'evan.quigley@example.net', '804.269.9875x505', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 4.0; Trident/5.1)'),
(74, 'Fausto', 'jace61@example.com', '1-223-043-8213', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.01; Trident/4.0)'),
(75, 'Vidal', 'aleen.ratke@example.net', '664-193-2771', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows CE; Trident/4.1)'),
(76, 'Blaze', 'lulu71@example.net', '867.665.4354x893', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 4.0; Trident/3.0)'),
(77, 'Rickey', 'kari79@example.org', '1-664-940-0439x85180', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows 98; Win 9x 4.90; Trident/3.0)'),
(78, 'Webster', 'mosciski.randall@example.com', '(271)446-3619x1020', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows 98; Win 9x 4.90; Trident/3.0)'),
(79, 'Nathen', 'rturcotte@example.net', '060.388.4538x40462', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/3.0)'),
(80, 'Cody', 'ullrich.donavon@example.com', '269.830.4013x9683', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/3.1)'),
(81, 'Bart', 'padberg.michele@example.org', '007-924-3741', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 4.0; Trident/5.0)'),
(82, 'Walker', 'jhauck@example.com', '427-343-0697x862', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows 98; Trident/5.0)'),
(83, 'Maxine', 'lora.hackett@example.com', '1-565-007-5209', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 5.0; Trident/4.1)'),
(84, 'Columbus', 'harris.darrin@example.net', '02593404776', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows 98; Win 9x 4.90; Trident/5.1)'),
(85, 'Vidal', 'nader.maryjane@example.org', '368.612.7431x7053', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.0; Trident/5.1)'),
(86, 'Glen', 'smante@example.com', '140-516-2306', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 4.0; Trident/4.0)'),
(87, 'Gilbert', 'rchristiansen@example.net', '1-468-388-7359', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.01; Trident/3.1)'),
(88, 'Manley', 'breitenberg.sid@example.org', '(862)315-4525x842', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 5.01; Trident/3.0)'),
(89, 'Griffin', 'grady.homenick@example.org', '257-575-7907x9610', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows 98; Trident/4.0)'),
(90, 'Glen', 'natalie66@example.com', '320-334-4360', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; Trident/4.0)'),
(91, 'Waino', 'lilyan96@example.org', '126-358-8088x4401', 'Mozilla/5.0 (compatible; MSIE 7.0; Windows CE; Trident/5.0)'),
(92, 'Griffin', 'ocie.gibson@example.org', '(309)512-5976x6393', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.2; Trident/4.0)'),
(93, 'Jamison', 'gislason.troy@example.org', '1-234-448-5839x67871', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows 95; Trident/3.1)'),
(94, 'Donnie', 'kendra.greenfelder@example.net', '1-635-842-4177x4206', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.2; Trident/3.1)'),
(95, 'Myron', 'lambert18@example.com', '040.922.9614x02997', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 5.01; Trident/5.1)'),
(96, 'Clyde', 'domenico40@example.org', '02263653339', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 6.0; Trident/5.0)'),
(101, 'amal', 'wawansvx@gmail.com', '1212', 'asasas'),
(102, 'Ikhlasul Amal', 'ikhlasul0507@gmail.com', '122', 'Jjh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengurus`
--

CREATE TABLE `tbl_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `no_urut` int(5) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `jabatan_pengurus` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengurus`
--

INSERT INTO `tbl_pengurus` (`id_pengurus`, `no_urut`, `nama_pengurus`, `jabatan_pengurus`, `photo`) VALUES
(6, 1, 'Ikhlasul Amal', 'Ketua Umum', 'Screenshot_20170408-175122.png'),
(10, 2, 'Ibnu Rojudin', 'Wakil Ketua Umum', 'IMG-20190404-WA0060.jpg'),
(16, 3, 'Rita Novalia', 'Sekretaris', 'IMG-20190313-WA0013.jpg'),
(17, 4, 'Sherli Apriani', 'Wakil Sekretaris 1', 'IMG-20190313-WA00131.jpg'),
(18, 5, 'Erin', 'Wakil Sekretaris 2', 'IMG-20190313-WA00132.jpg'),
(19, 7, 'Iga Suci Kurnia Putri', 'Bendahara', 'IMG-20190313-WA00133.jpg'),
(20, 8, 'Riski Amelia', 'Wakil Bendahara', 'IMG-20190313-WA00134.jpg'),
(21, 9, 'Vixto Aldo', 'Ketua Divisi PSDM', 'logo.jpg'),
(22, 10, 'Adiriansyah', 'Ketua Divisi Pengabdian Masyarakat', 'IMG-20190313-WA00135.jpg'),
(23, 11, 'Arnes Agista Nanda', 'Ketua Infokom Dan Media Sosial', 'IMG-20190313-WA00136.jpg'),
(24, 12, 'Andito', 'Ketua Sarana Prasarana', 'IMG-20190313-WA00137.jpg'),
(25, 13, 'Rima Melati', 'Ketua Divisi Dana Usaha', 'logo1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(128) NOT NULL,
  `handphone_peserta` varchar(128) NOT NULL,
  `alamat_peserta` varchar(128) NOT NULL,
  `jurusan_peserta` varchar(50) NOT NULL,
  `sekolah_peserta` varchar(50) NOT NULL,
  `paket_peserta` varchar(20) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `absen_pagi` int(1) NOT NULL,
  `absen_siang` int(1) DEFAULT NULL,
  `makan_siang` int(1) DEFAULT '0',
  `status` int(20) DEFAULT '0',
  `nilai` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `nama_peserta`, `handphone_peserta`, `alamat_peserta`, `jurusan_peserta`, `sekolah_peserta`, `paket_peserta`, `bukti`, `bayar`, `absen_pagi`, `absen_siang`, `makan_siang`, `status`, `nilai`) VALUES
(21, 'RISKI AMALIA', '987654321', 'CELIKAH', 'ips', 'SMK N 1 KAYUAGUNG', 'ips', 'WIN_20191029_14_54_06_Pro.jpg', '1', 1, 1, 0, 1, 89),
(22, 'Ikhlasul Amal', '231', 'asdsad', 'ipa', 'qwqe', 'ipa', 'foto.jpg', 'selesai', 1, 1, 1, 1, 90),
(23, 'HEeru', '1212', 'sukarame tanjung lubuk oki', 'ipa', 'sma 1tanjung lubuk', 'ipa', 'ktp.jpg', 'selesai', 0, NULL, 0, 1, 32),
(24, 'MAYA OKTARINA', '111', 'Pulau Gemantung Ilir', 'ipa', 'sma 1tanjung lubuk', 'ipa', 'amal.png', 'selesai', 1, 1, 1, 1, 90),
(32, 'ihsanuddin', '12345', 'kota bumi', 'ipa', 'sma 1tanjung lubuk', 'ipa', 'agnes7.png', 'selesai', 1, 1, 1, 1, 80),
(36, 'iKROM', '081367073783', 'kota bumi', 'ipa', 'sma 1tanjung lubuk', 'ipa', 'amal4.png', 'selesai', 1, 1, 1, 1, 77),
(41, 'ihsanuddin', '082278591608', 'kota bumi', 'ipa', 'sma 1tanjung lubuk', 'ipa', 'agnes12.png', 'selesai', 1, 1, 1, 1, 12),
(42, 'Amal', '123456', 'Kota bumi', 'ipa', 'Sma', 'ipa', 'IMG-20191224-WA0062.jpg', 'selesai', 1, 0, 0, 1, 80),
(43, 'Bastari Nari', '0880', 'Sukarami', 'ipa', 'SMA 1 Tanjung Lubuk', 'ipa', 'amal5.png', 'selesai', 1, 1, 1, 1, 90),
(44, 'Okti Permata Sari', '12345678', 'Batang Hari', 'ipa', 'Sma 6 oku', 'ipa', 'IMG-20191224-WA00621.jpg', 'selesai', 1, 1, 1, 1, 100),
(45, 'Yuni Wulandari', '0852', 'Kayu agung', 'ipa', 'Sma 2 kayu agung', 'ipa', 'IMG-20191225-WA0013.jpg', 'selesai', 1, 1, 1, 1, 888);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tata_cara`
--

CREATE TABLE `tbl_tata_cara` (
  `id_tata_cara` int(11) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `no_rekening` varchar(128) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `pukul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tata_cara`
--

INSERT INTO `tbl_tata_cara` (`id_tata_cara`, `nama_rekening`, `no_rekening`, `nama_bank`, `waktu`, `lokasi`, `pukul`) VALUES
(3, 'Ikhlasul Amal', '34213123123', 'BRI', 'Minggu, 05 Juli 2020', 'Gedung GOR Kayu Agung', '08.00 Wib - Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_token`
--

CREATE TABLE `tbl_token` (
  `id_token` int(11) NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_token`
--

INSERT INTO `tbl_token` (`id_token`, `token`) VALUES
(25, 'polsri'),
(26, 'himaoki'),
(28, 'umpn'),
(29, '2020'),
(30, 'tryout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `handphone_peserta` (`handphone_peserta`);

--
-- Indexes for table `tbl_tata_cara`
--
ALTER TABLE `tbl_tata_cara`
  ADD PRIMARY KEY (`id_tata_cara`);

--
-- Indexes for table `tbl_token`
--
ALTER TABLE `tbl_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_tata_cara`
--
ALTER TABLE `tbl_tata_cara`
  MODIFY `id_tata_cara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_token`
--
ALTER TABLE `tbl_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
