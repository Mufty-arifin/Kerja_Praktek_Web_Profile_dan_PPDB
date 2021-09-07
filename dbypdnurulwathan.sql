-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2021 pada 15.59
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbypdnurulwathan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(8) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` blob NOT NULL,
  `tgl_berita` date DEFAULT NULL,
  `id_user` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'Bikin Terenyuh, Surat Ibu yang Anaknya Sudah Tiada untuk Guru tk', 'bikin-terenyuh-surat-ibu-yang-anaknya-sudah-tiada-untuk-guru-tk', '<p>Perasaan <strong>ibu</strong>&nbsp;mana yang nggak hancur ketika mendapati si kecil harus pergi untuk selama-lamanya. Ini pula yang dialami seorang ibu, sebut aja namanya Jennifer. Bahkan ketika tiba musim anak masuk sekolah pertama kali Jennifer menulis sebuah surat yang dia tujukan untuk guru TK.</p>\r\n\r\n<p>Dalam suratnya, Jennifer menulis bahwa putranya nggak akan hadir di hari pertama masuk sekolah. Putra Jennifer juga nggak akan menggantung tasnya di gantungan di ruang kelas. Di hari pertama anak masuk sekolah, Jennifer juga nggak akan mengantarkan putranya ke bus lalu menangis haru seiring menghilangnya bus di tepi jalan.</p>\r\n\r\n<blockquote>\r\n<p>Nggak cuma itu, Jennifer juga memastikan dirinya akan menangis tersedu-sedu ketika duduk dan menghadap komputer kemudian melihat foto teman-temannya ketika mengantar si kecil di hari pertamanya sekolah. Tangis Jennifer bukan karena dia tak suka dengan pemandangan itu tapi ada kesedihan di dalam hatinya.<br />\r\n<br />\r\n&quot;Anda tahu, anak saya nggak akan hadir di hari pertama masuk sekolah dan selamanya. Ya, dia sudah tiada. Melihat foto teman-teman mengantar si kecil di hari pertama masuk sekolah membuat lubuk hati terdalam saya seperti dicabik dan rasa sakitnya mungkin nggak akan pernah Anda rasaka, Bu Guru,&quot; kata Jennifer dikutip dari Today.</p>\r\n</blockquote>\r\n', 0x6576656e745f312e6a7067, '2021-06-14', 6),
(9, 'Dukung Potensi Akademik dan Sosial Anak, Sinar Mas Renovasi PAUD Kasih Bunda', 'dukung-potensi-akademik-dan-sosial-anak-sinar-mas-renovasi-paud-kasih-bunda', '<p><strong>KOMPAS.com</strong>&nbsp;- Managing Director&nbsp;<a href=\"https://www.kompas.com/tag/sinar-mas\" target=\"_self\">Sinar Mas</a>&nbsp;Saleh Husin mengatakan,&nbsp;<a href=\"https://www.kompas.com/tag/pendidikan\" target=\"_self\">pendidikan</a>&nbsp;usia dini adalah landasan bagi berkembangnya potensi akademik dan sosial anak.</p>\r\n\r\n<p>Atas dasar itu, Sinar Mas melakukan pembangunan ulang atau renovasi bangunan&nbsp;<a href=\"https://www.kompas.com/tag/pendidikan\" target=\"_self\">Pendidikan</a>&nbsp;Anak Usia Dini (<a href=\"https://www.kompas.com/tag/paud\" target=\"_self\">PAUD</a>)&nbsp;<a href=\"https://www.kompas.com/tag/kasih\" target=\"_self\">Kasih</a>&nbsp;<a href=\"https://www.kompas.com/tag/bunda\" target=\"_self\">Bunda</a>.</p>\r\n\r\n<p>&ldquo;Pembangunan tersebut bertujuan melengkapi upaya para guru dalam memberikan pendidikan, sekaligus menyeluruh kepada anak-anak usia dini,&rdquo; kata Saleh dalam keterangan tertulis yang Kompas.com terima, Senin (14/6/2021).</p>\r\n\r\n<p>Sebab, lanjut dia, pendidikan anak usia dini merupakan fundamen pengembangan sumber daya manusia (SDM) bermula.</p>\r\n\r\n<p>&ldquo;Hal ini sebagaimana termaktub dalam Sustainable Development Goals 2030, yakni pendidikan anak usia dini yang bermutu,&rdquo; ujarnya, saat peresmian&nbsp;<a href=\"https://www.kompas.com/tag/PAUD\" target=\"_self\">PAUD&nbsp;</a>Kasih Bunda di Komplek Sekretariat Negara, Kota Tangerang, Kamis (10/6/2021).</p>\r\n', 0x612e6a7067, '2021-06-15', 6),
(15, 'Antisipasi Virus Corona, PAUD /TK/SD/SMP di Karo Serentak Diliburkan', 'antisipasi-virus-corona-paud-tksdsmp-di-karo-serentak-diliburkan', '<p>topmetro.news &ndash; Menyikapi merebaknya ancaman Virus Corona terhadap kehidupan manusia di lingkungan sosialnya, akhirnya Pemkab Karo melalui Dinas Pendidikan Nasional meliburkan anak sekolah selam 14 hari, terhitung 20 Maret &ndash; 2 April 2020. Bahkan akan diberlakukan razia pelajar.<br />\r\n<br />\r\nPutusan libur itu berdasarkan Surat Pemberitahuan Pembelajaran Mandiri di Rumah Nomor: 420/961/Sek 1/2020 tertanggal 19 Maret 2020. Hal ini menyahuti ancaman Virus Corona dan ancaman kesehatam murid sekolah.</p>\r\n\r\n<p>Demikian dikatakan Kadis Pendidikan Nasional Dr Drs Eddi Surianta MPd, Kamis (19/3/2020), di Kabanjahe.<br />\r\n&nbsp;<br />\r\nBelajar Mandiri<br />\r\nMenurutnya, dengan terbitnya surat Pemberitahuan Pembelajaran Mandiri di Rumah, pada 19 Maret 2020, besok seluruh sekolah masih masuk. Sehingga pihak sekolah diminta membuat surat edaran kepada orangtua siswa, terkait dengan pembelajaran mandiri di rumah.<br />\r\n<br />\r\nAda pun poin-poin dalam surat pemberi tahuan itu masing-masing, pertama untuk pencegahan penyebaran Covid-19 di lingkungan Dinas Pendidikan Kabupaten Karo, disepakati untuk belajar mandiri di rumah masing-masing bagi siswa PAUD/SD/SMP negeri/swasta mulai 20 Maret &ndash; 3 April 2020.<br />\r\n<br />\r\nKedua, setiap guru memberikan tugas mandiri kepada siswa sesuai dengan program semester Tahun Pembelajaran 2019/2020. Tugas tersebut diperiksa oleh guru pada saat masuk sekolah untuk menentukan ketuntasan belajar siswa.<br />\r\n<br />\r\nKetiga, sekolah membantu siswa menyediakan bahan refrensi pembelajaran mandiri melalui peminjaman buku perpustakaan. Serta pembimbingan penggunaan situs rumah belajar online.<br />\r\n<br />\r\nSelanjutnya poin keempat, kepala sekolah menginformasikan kepada seluruh orangtua/wali siswa agar mengawasi pembelajaran siswa di rumah. Serta mengurangi aktifitas di luar rumah dan tidak berpergian ke luar kota. Dan atau menghindari kontak fisik dengan orang lain (bersalaman, cium tangan, atau berpelukan).<br />\r\n<br />\r\nKelima, kepala sekolah melaporkan keterlaksanaan pembelajaran mandiri di sekolahnya masing-masing kepada pengawas sekolah pembinan secara online. Lalu pengawas sekolah pembina menyampaikan laporan secara tertulis kepada Kepala Dinas Pendidikan Kabupaten Karo.<br />\r\n<br />\r\nSurat Pemberitahuan Pembelajaran Mandiri di Rumah ini wajib dilaksanakan untuk dipatuhi. Terbitnya surat pemberitahuan ini, mempedomani Surat Edaran Mendiknas dan Kebudayaan RI No. 3 Tahun 2020 tertanggal 9 Maret 2020.<br />\r\n<br />\r\n&ldquo;Jadi besok seluruh guru harus datang ke sekolah membawa bahan tugas siswa selama 14 hari dan menyerahkannya ke siswa. Setelah penyerahan surat edaran belajar di rumah dan penyerahan tugas kepada siswa, baru boleh pulang.&rdquo; kata Eddi Surianta.<br />\r\n<br />\r\nRazia Pelajar<br />\r\nTerpisah, Bupati Karo Terkelin Brahmana SH MH mendukung penuh kebijakan Dinas Pendidikan, untuk mengantisipasi keresahan dan kecemasan masyarakat terhadap anaknya bersekolah.<br />\r\n<br />\r\nNamun, kata Terkelin selama libur sekolah, diharapkan orangtua mengawasi anak-anaknya tidak kemana-mana atau berkeliaran ke warnet dan tempat lain di wilayah Karo.<br />\r\n<br />\r\n&ldquo;Untuk mengntisipasi ini, Satpol Pol PP akan saya tugaskan setiap hari melakukan razia untuk mencari siswa-siswi yang berkeliaran selama diliburkan. Hal ini sebagai langkah pencegahan,&rdquo; ucap bupati.<br />\r\n<br />\r\nreporter | FP Pinem</p>\r\n\r\n<p>Sumber:&nbsp;<a href=\"https://topmetro.new/\">https://topmetro.new</a></p>\r\n', 0x68312e6a7067, '2021-06-16', 6),
(16, 'Adaptasi Kebiasaan Baru, Pembelajaran PAUD Perlu Peran Orang Tua & Guru', 'adaptasi-kebiasaan-baru-pembelajaran-paud-perlu-peran-orang-tua-guru', '<p><strong>Suara.com -&nbsp;</strong><a href=\"https://www.suara.com/tag/pendidikan-anak-usia-dini\">Pendidikan anak usia dini</a>&nbsp;(<a href=\"https://www.suara.com/tag/paud\">PAUD</a>) mengalami perubahan di masa adaptasi kebiasaan baru, akibat pandemim COVID-19.</p>\r\n\r\n<p>Dibutuhkan peran orang tua yang lebih besar, juga kerja sama dengan guru agar anak mendapatkan manfaat maksimal melalui pendidikan jarak jauh.</p>\r\n\r\n<p>&quot;Saat pandemi, pihak pengajar mendampingi orang tua menjalankan peran guru di rumah,&quot; kata Pengajar TPA Khadijah Islamic Day Care Zilmi Tri Rahma Yunita dalam diskusi daring tentang inovasi dan kreasi PAUD dalam menyukseskan pembelajaran sehat di era adaptasi kebiasaan baru yang digelar Geliat Universitas Airlangga (Unair) bersama UNICEF, baru-baru ini.</p>\r\n\r\n<p>Zilmi mengatakan sejak awal Maret, pihaknya sempat kebingungan ketika pandemi mulai masuk ke Indonesia.</p>\r\n\r\n<p>Bahkan, penitipan anak sudah tidak bisa dilakukan, sehingga pihaknya pun mencari pembelajaran terbaik yang aman bagi anak untuk dilaksanakan.</p>\r\n\r\n<p>Menurutnya, saat pandemi, pembelajaran yang terbaik adalah pihak pengajar mendampingi orang tua menjalankan peran guru di rumah.</p>\r\n\r\n<p>Ia melanjutkan pihaknya juga memberikan stimulus perkembangan melalui tugas yang sudah tersusun, termasuk bekerja sama dengan orang tua untuk memaksimalkan perkembangan selama belajar di rumah.</p>\r\n\r\n<p>Kegiatan belajar pun dilakukan melalui aplikasi zoom sebanyak 3-4 kali dalam sepekan dengan durasi 30-40 menit tiap sesi.</p>\r\n\r\n<p>&quot;Kami juga memahami orang tua yang bekerja. Makanya kami juga sediakan jam belajar malam hari,&quot; katanya.</p>\r\n\r\n<p>Selain itu, katanya, pihaknya juga membuat story telling, senam, serta dancing bagi peserta didik untuk terus mengembangkan motorik anak.</p>\r\n\r\n<p>Bahkan, daring mengaji juga dilakukan, sehingga tidak hanya pelafalan saja, tapi juga ada hasil karya yang dibuat oleh anak-anak.</p>\r\n\r\n<p>&quot;Tugas juga dilakukan melalui keterangan tulisan dan video. Mengasah motorik dengan menggunting, mengasah kemandirian dan empati dengan pekerjaan rumah sederhana, seperti melipat pakaian dan membuat kemampuan seni dengan membuat layang-layang,&quot; ujarnya.</p>\r\n\r\n<p>Ketua Badan Kerja Sama dan Manajemen Pengembangan (BKMP) Universitas Airlangga (Unair) Dr Eko Supeno mengatakan dengan adanya kreasi dan inovasi yang dilakukan pengelola&nbsp;<a href=\"https://www.suara.com/tag/paud\">PAUD</a>&nbsp;bisa membuat anak-anak lebih waspada. Mereka juga memiliki perilaku yang peduli dalam situasi pandemi saat ini.</p>\r\n\r\n<p>&quot;Kita masih saja melihat ada yang melanggar dan abai terhadap protokol kesehatan di jalan-jalan. Langkah kreatif Bunda PAUD akan menjadi pencerahan buat anak-anak,&quot; katanya.</p>\r\n\r\n<p>Child Survival and Development (CSD) Specialist UNICEF dr. Armunanto, M. PH mengatakan, era kebiasaan baru harus benar-benar dijalani dengan penerapan protokol kesehatan yang ketat. Selain itu, kata dia, pihaknya menyadari kalau berkerumun itu menjadi kebiasaan lama masyarakat.</p>\r\n\r\n<p>&quot;Tapi harus diubah kebiasaan itu, kalau tidak situasi pandemi ini tidak kunjung reda. Penerapan 3M dengan memakai masker, menjaga jarak dan mencuci tangan harus benar-benar dilakukan,&quot; katanya.</p>\r\n\r\n<p>Ia menambahkan kondisi itu pun harus dilakukan pada proses pembelajaran untuk anak-anak, termasuk adanya kreasi dan inovasi untuk terus menarik dalam pembelajaran.</p>\r\n\r\n<p>&quot;Dengan kebiasaan baru tersebut, iman dan imun kita bisa tercapai, sehingga kita tetap sehat dan bugar,&quot; katanya. [ANTARA]</p>\r\n', 0x6576656e745f332e6a7067, '2021-06-17', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(8) NOT NULL,
  `nip_guru` varchar(15) DEFAULT NULL,
  `nama_guru` varchar(25) DEFAULT NULL,
  `jk_guru` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `mapel_guru` varchar(35) DEFAULT NULL,
  `foto_guru` blob NOT NULL,
  `id_user` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip_guru`, `nama_guru`, `jk_guru`, `tempat_lahir`, `tgl_lahir`, `mapel_guru`, `foto_guru`, `id_user`) VALUES
(10, '5520117053', 'Mufty', 'Laki-laki', 'cianjur', '2021-06-19', 'B Inggris', 0x6d756674792e6a7067, 0),
(12, '5520117059', 'jhon', 'Laki-laki', 'jakartaaa', '2021-06-03', 'B Sunda', 0x77656c636f6d652e706e67, 0),
(13, '5520117054', 'Arifin', 'Laki-laki', 'Bogor', '2021-07-10', 'Matematika', 0x7465616d5f322e6a7067, 0),
(19, '5520117058', 'komarudin', 'Laki-laki', 'Bogor', '2021-06-03', 'B Sunda', 0x7465616d5f32332e6a7067, 1),
(21, '123', 'Siti Azkah', 'Laki-laki', 'cianjur', '2021-08-28', 'guru tk', 0x536974695f417a6b61682e706e67, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(8) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `slug_kegiatan` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `isi_kegiatan` text NOT NULL,
  `foto_kegiatan` blob NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `slug_kegiatan`, `tanggal`, `isi_kegiatan`, `foto_kegiatan`, `id_user`) VALUES
(1, 'Ini Kegiatan TK Nurul Wathan Selama Bulan Ramadhan', 'ini-kegiatan-tk-nurul-wathan-selama-bulan-ramadhan', '2021-06-17', '<p>TK Nurul Wathan&nbsp;memanfaatkan momen bulan Ramadhan untuk menanamkan nilai agama dan moral (NAM) kepada para anak didik dengan mengisi kegiatan-kegiatan yang dapat meningkatkan keimanan kepada Allah.</p>\r\n\r\n<p>Anak didik dilatih untuk berpuasa, praktek wudhu, shalat berjamaah, pengenalan Ramadhan, keutamaan serta aktivitasnya, mendengarkan dongeng Islami serta berbuka puasa bersama.</p>\r\n\r\n<p>Hal ini dimaksudkan untuk menanamkan nilai-nilai agama dan moral kepada para siswa dengan tujuan mengenal pencipta dan mengamalkan akhlak mulia dan terpuji dalam kehidupan sehari-hari.</p>\r\n\r\n<p>Untuk menghindari kebosanan siswa karena harus menahan lapar dan haus, guru mengajar anak dengan metode menarik seperti bernyanyi dan bercerita.</p>\r\n\r\n<p>Kegiatan tersebut dinamakan dengan Sanlat TK Nurul Wathan yang berlangsung selama bulan Ramadhan di sekolah.</p>\r\n\r\n<p>Kegiatan ini disambut positif para orangtua siswa karena dinilai bermanfaat bagi anak untuk meningkatkan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa. Para siswa pun sangat senang dan antusias mengikuti kegiatan tersebut.</p>\r\n', 0x6b6567696174616e5f73686f6c61742e706e67, 6),
(2, 'Serunya Cooking Class Anak-Anak DI TK Nurul Wathan', 'serunya-cooking-class-anak-anak-di-tk-nurul-wathan', '2021-06-17', '<p>Ada pemandangan yang menarik ketika anak-anak di sekolah Taman Kanak-Kanak (TK) Nurul Wathan sedang mengikuti kegiatan masak memasak atau&nbsp;<em>Cooking Class Make A Sandwich&nbsp;</em>untuk anak-anak pada hari Rabu, (18/10). Anak-anak Nurul Wathan tampak asyik membuat makanan praktis Sandwich dengan aneka bentuk yang dikreasikan. Mereka dibimbing oleh para guru tentang tata cara membuat sandwich di meja masing-masing.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sandwich adalah makanan yang praktis untuk dibuat dengan bahan-bahan yang mudah didapat seperti roti, telur, timun, tomat, saos dan mayonaise. Dengan bahan-bahan yang tersedia anak-anak TK Nurul Wathan sangat bersemangat menyusun sandwichnya masing-masing sambil melihat guru pembimbing mereka mempraktekkan bagaimana menyusun sandwich yang baik.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bertempat di pendopo TK Nurul Wathan, setiap anak bergabung dengan kelompoknya masing-masing. Setiap kelompok menghias meja tempat mereka bekerja dengan atribut kelasnya masing-masing, mereka memakai hiasan kepala sesuai dengan ciri khas kelompoknya masing-masing.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agar lebih seru pembuatan sandwich ini dinilai oleh para guru sesuai dengan kreasi masing-masing kelompok. Ada kelompok yang membuat sandwichnya seperti bentuk wajah yang lucu, ada yang berbentuk tokoh kartun seperti&nbsp;<em>spongebob</em>.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kegembiraan anak-anak TK Nurul Wathan dalam acara&nbsp;<em>Cooking Class</em>&nbsp;ini mendapat respon khusus dari Kepala Yayasan Pendidikan dan Dakwah&nbsp;Nurul Wathan Cianjur, H. Dudun Abdullah&nbsp;karena melalui kegiatan ini setiap anak didik dikenalkan dengan proses membuat dan mengolah makanan yang praktis disamping itu mereka juga dididik untuk berkreasi dan saling bekerjasama.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Serunya acara&nbsp;<em>Cooking Class</em>&nbsp;ini terlihat di wajah anak-anak dan para guru. Kegembiraan mereka semakin bertambah ketika makanan yang mereka kreasikan telah selesai dan siap untuk dimakan bersama-sama. Bila suatu kegiatan telah dipenuhi dengan atmosfir kebahagiaan maka acara tersebut pun akan terasa bermakna.</p>\r\n', 0x6b6567696174616e5f6d656d6173616b312e6a7067, 6),
(3, 'Kegiatan Pembelajaran di Luar Kelas', 'kegiatan-pembelajaran-di-luar-kelas', '2021-06-17', '<p>Kegiatan pembelajaran di luar kelas salah satunya dengan bercocok tanam, anak-anak TK Nurul Wathan sangat antusias menyambut kegiatan ini karena berkaitan dengan alam luar karena&nbsp;mereka sangat senang sekali bermain dengan lumpur.</p>\r\n\r\n<p>Kegiatan pembelajaran diluar kelas ini bertujuan&nbsp;untuk merangsang motorik halus dan motoric kasar, kognitif, sosial emosi, dan bahasa anak.&nbsp;Selain untuk mengenalkan anak terhadap lingkungan hidup lain, kegiatan belajar diluar kelas juga bisa menjadi sebuah hiburan atau refreshing bagi anak maupun guru. Setelah satu semester anak hanya duduk di dalam kelas, kegiatan belajar diluar kelas dapat menjadi semangat baru untuk anak kembali bersekolah lagi.&nbsp;</p>\r\n', 0x6b6567696174616e5f626572636f636f6b74616e616d312e6a7067, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id_user`, `nama_user`, `username`, `password`) VALUES
(6, 'mufty', 'mufty', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_sa`
--

CREATE TABLE `tbl_pembayaran_sa` (
  `id_pembayaran_sa` int(8) NOT NULL,
  `id_pendaftaran_sa` int(8) NOT NULL,
  `nik` int(15) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `total_bayar` int(8) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `status_bayar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran_sa`
--

INSERT INTO `tbl_pembayaran_sa` (`id_pembayaran_sa`, `id_pendaftaran_sa`, `nik`, `nama`, `total_bayar`, `tgl_pembayaran`, `status_bayar`) VALUES
(1, 0, 123, 'Maimunah', 1000000, '2021-08-17', 'Lunas'),
(2, 0, 123, 'Ahmad', 800000, '2021-08-17', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_tk`
--

CREATE TABLE `tbl_pembayaran_tk` (
  `id_pembayaran_tk` int(8) NOT NULL,
  `id_pendaftaran_tk` int(8) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `total_bayar` int(8) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran_tk`
--

INSERT INTO `tbl_pembayaran_tk` (`id_pembayaran_tk`, `id_pendaftaran_tk`, `nik`, `nama`, `total_bayar`, `tgl_pembayaran`, `status_bayar`) VALUES
(1, 0, 12345, 'Muhammad Mufty Arifin', 1000000, '2021-08-17', 'Lunas'),
(2, 0, 2147483647, 'Muhammad Mufty Arifin', 1000000, '2021-08-18', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran_sa`
--

CREATE TABLE `tbl_pendaftaran_sa` (
  `id_pendaftaran_sa` int(8) NOT NULL,
  `nik` int(20) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenjang_sekolah` varchar(10) DEFAULT NULL,
  `jumlah_saudara` varchar(2) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `nama_ayah` varchar(25) DEFAULT NULL,
  `nama_ibu` varchar(25) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `biaya` double NOT NULL,
  `tgl_pendaftaran_sa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendaftaran_sa`
--

INSERT INTO `tbl_pendaftaran_sa` (`id_pendaftaran_sa`, `nik`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `jenjang_sekolah`, `jumlah_saudara`, `status`, `nama_ayah`, `nama_ibu`, `tlp`, `biaya`, `tgl_pendaftaran_sa`) VALUES
(1, 12345, 'Muhammad Mufty Arifin', 'cianjur', 'laki-laki', 'cianjur', '2021-08-31', 'SMP', '5', 'Anak Angkat', 'cecep', 'Selena Gomes', '081386046078', 1000000, '2021-08-13'),
(2, 12345, 'Muhammad Mufty Arifin', 'cianjur', 'laki-laki', 'cianjur', '2021-08-31', 'SMP', '5', 'Anak Angkat', 'cecep', 'Selena Gomes', '081386046078', 1000000, '2021-08-13'),
(3, 12345, 'Muhammad Mufty Arifin', 'cianjur', 'laki-laki', 'cianjur', '2021-08-31', 'SMP', '5', 'Anak Angkat', 'cecep', 'Selena Gomes', '081386046078', 1000000, '2021-08-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran_tk`
--

CREATE TABLE `tbl_pendaftaran_tk` (
  `id_pendaftaran_tk` int(8) NOT NULL,
  `no_id_tk` varchar(6) NOT NULL,
  `nik` int(20) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jumlah_saudara` varchar(5) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `nama_ayah` varchar(25) DEFAULT NULL,
  `nama_ibu` varchar(25) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendaftaran_tk`
--

INSERT INTO `tbl_pendaftaran_tk` (`id_pendaftaran_tk`, `no_id_tk`, `nik`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `jumlah_saudara`, `status`, `nama_ayah`, `nama_ibu`, `tlp`, `biaya`) VALUES
(1, '', 12345, 'Muhammad Mufty Arifin', 'cianjur', 'laki-laki', 'cianjur', '2021-08-17', '5', 'Anak Kandung', 'cecep', 'maimunah', '081386046078', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(8) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text,
  `tgl_pengumuman` date NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl_pengumuman`, `id_user`) VALUES
(3, 'Pengumuman Pembelajaran', 'Diberitahukan kepada murid TKA/TPA/TQA Nurul Wathan,bahwa pembelajaran akan dilaksanakan pada tanggal 01 januari 2021', '2021-06-16', 0),
(8, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2016-2017', 'Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 Maret 2017 sampai dengan tanggal 7 Maret 207.', '2021-06-15', 0),
(12, 'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2016-2017', 'Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2016-2017, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB. Yang bertempat di M-Sekolah. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2021-06-16', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip_guru` (`nip_guru`);

--
-- Indeks untuk tabel `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_pembayaran_sa`
--
ALTER TABLE `tbl_pembayaran_sa`
  ADD PRIMARY KEY (`id_pembayaran_sa`);

--
-- Indeks untuk tabel `tbl_pembayaran_tk`
--
ALTER TABLE `tbl_pembayaran_tk`
  ADD PRIMARY KEY (`id_pembayaran_tk`);

--
-- Indeks untuk tabel `tbl_pendaftaran_sa`
--
ALTER TABLE `tbl_pendaftaran_sa`
  ADD PRIMARY KEY (`id_pendaftaran_sa`);

--
-- Indeks untuk tabel `tbl_pendaftaran_tk`
--
ALTER TABLE `tbl_pendaftaran_tk`
  ADD PRIMARY KEY (`id_pendaftaran_tk`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_sa`
--
ALTER TABLE `tbl_pembayaran_sa`
  MODIFY `id_pembayaran_sa` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_tk`
--
ALTER TABLE `tbl_pembayaran_tk`
  MODIFY `id_pembayaran_tk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendaftaran_sa`
--
ALTER TABLE `tbl_pendaftaran_sa`
  MODIFY `id_pendaftaran_sa` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendaftaran_tk`
--
ALTER TABLE `tbl_pendaftaran_tk`
  MODIFY `id_pendaftaran_tk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
