-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Des 2022 pada 04.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangkit_indonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artikel` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `artikel`, `tanggal`, `gambar`, `id_kategori`) VALUES
(1, 'Cinta Tanah Air dan Bela Negara Harus Terus Ditanamkan', '<p style=\"text-align: justify;\"><span style=\"font-size: 20px;\">Gubernur Sulawesi Selatan, H. Syahrul Yasin Limpo mengatakan bela negara saat ini sangatlah penting terutama di era globalisasi dan digital. Ini dilakukan untuk membekali rakyat tentang bagaimana berbangsa dan bernegara.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\">Ia menyebutkan bela negara adalah suatu kewajiban yang diatur dalam filosif bernegara dimanapun. Ini menjadi penting dilakukan sehingga tidak akan terpengaruh paham dari luar.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><blockquote style=\"text-align: justify;\" class=\"blockquote\"><span style=\"font-size: 20px;\">\"Kalau tidak dilakukan maka apa yang kita pahami mengenaii Pancasila, Bhineka Tunggal Ika bisa saja terprovokasi dan memecah belah negara. Olehnya itu hari ini komitmen terhadap bela negara tentu saja harus direspon oleh kita semua.\"Kata Syahrul, saat membuka Simposium dalam rangka HUT TNI ke-71 Tahun 2016 di Hotel Clarion Makassar, Selasa (4/10/2016).</span></blockquote><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\">Mengenai koordinasi, mengantisipasi paham yang masuk, Syahrul menjelaskan ini menjadi satu tantangan bukan cuma di Sulsel atau Indonesia, tapi di seluruh&nbsp; dunia. Oleh karena itu memahami ancaman tersebut hanya dengan cara menyamakan cara pandang, tentang wawasan kebangsaan, yang hadir pada anak-anak kita, pada siapapun termasuk para pejabat.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><blockquote style=\"text-align: justify;\" class=\"blockquote\"><span style=\"font-size: 20px;\">\"Cinta tanah air menjadi kunci, pancasila harus jadi hal yang masuk dalam pikiran, dalam lanhgkah dan hati semua anak bangsa. Kalau ini hadir, tentu saja ancama digital, Internet akan bisa kita minimalisir,\"paparnya.</span></blockquote><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\">Pangdam VII Wirabuana Mayjen TNI Agus, S.B mengucapkan terima kasih pada masyarakat Sulsel yang komitmen pada bela negara dan cinta tanah air. Ini menjadi kekuatan dasar yang menjadi pondasi bagi keamanan, ketertiban, dan kesejahteraan masyarakat dan bangsa Indonesia.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\">Sementara mengenai HUT TNI, Agus mengatakan tidak akan melakukan upacara yang mewah dan besar. \"Kami akan menggali kearifan lokal, serta menggali nilai budaya bangsa, nilai masyarakat sulawesi sebagai kekayaan lokal yang akan menjadi kekuatan nasional dalam mempertahankan NKRI,\"paparnya.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 20px;\"><br></span></p><h6 style=\"text-align: justify;\"><span style=\"font-size: 20px;\">Selasa, 4 Oktober 2016 (Srf/Er)</span></h6>', '2022-08-28', 'gambar cinta tanah air 1.png', 1),
(2, 'Pembinaan Bela Negara Penting Untuk Bangun Daya Tangkal Bangsa', '<p style=\"text-align: justify;\"><b>Jakarta</b> – Kepala Pusat Pendidikan dan Pelatihan Bela Negara Badan Pendikan dan Pelatihan Kementerian Pertahanan (Kapusdiklat Bela Negara Badiklat Kemhan) Brigjen TNI Kartiko Wardani, M. Tr (Han) mengatakan, Pembinaan Kesadaran Bela Negara penting untuk membentuk karakter bangsa terutama generasi muda yang memiliki jiwa nasionalisme, cinta tanah air, semangat kebangsaan, dan memiliki jiwa patriotisme, semangat militansi serta rela berkorban dan pantang menyerah.</p><blockquote style=\"text-align: justify;\" class=\"blockquote\"><p>“Kalau ini dibangun, bangsa ini akan memiliki daya tangkal dan ketahanan yang tangguh dalam menghadapi berbagai tantangan ancaman. Kita ingin bangun generasi muda bangsa Indonesia yang berkarakter Indonesia dan berkarakter Pancasila”,&nbsp;ungkap Kapusdiklat Bela Negara Badiklat Kemhan saat hadir menjadi narasumber wawancara Podcast Kemhan, Kamis (17/6) di Studio Podcast Kemhan, Jakarta.</p></blockquote><p style=\"text-align: justify; \">Lebih lanjut Kapusdiklat Bela Negara Badiklat Kemhan mengatakan, Bela Negara adalah tekat sikap prilaku dan tindakan warga negara baik secara perorangan maupun kolektif dalam menjaga kedaulatan negara, keutuhan wilayah, serta keselamatan terhadap bangsa yang dijiwai oleh kecintaaan kepada NKRI yang berdasarkan Pancasila dan UUD 1945 dalam menjamin kelangsungan hidup bangsa dan negara dari berbagai ancaman – ancaman.</p><p style=\"text-align: justify;\">Tantangan kedepan semakin sulit, ancaman, gangguan dan hambatan pasti ada di depan mata. Ancaman meliputi ancaman militer, non militer dan ancaman hibrida, yang bisa berasal dari dalam dan luar negeri yang dapat mengancam atau membahayakan kedaulatan negara, keutuhan wilayah dan keselamatan bangsa.</p><p style=\"text-align: justify;\">Dalam kesempatan wawancara tersebut, Kapusdiklat Bela Negara Badiklat Kemhan lebih lanjut menjelaskan terkait tugas Pusdiklat Bela Negara Badiklat Kemhan yang merupakan unsur pelaksana tugas atau Sub Satker dari Badiklat Kemhan, yakni merencanakan, melaksanakan, mengevaluasi dan melaporkan serta meningkatkan mutu terkait pembentukan kader bela negara.</p><p style=\"text-align: justify;\">Dijelaskan bahwa pembentukan Kader Bela Negara, merupakan amanat Undang Undang Dasar 1945 Pasal 27 Ayat 3, disebutkan bahwa setiap warga negara berhak dan wajib ikut serta dalam upaya pembelaan negara. Juga amanat UU Nomor 3 Tahun 2002 Tentang Pertahanan Negara dan juga UU Nomor 23 Tahun 2019 tentang Pengelolaan Sumber Daya Nasional Untuk Pertahanan Negara.</p><p style=\"text-align: justify;\">Pusdiklat Bela Negara Badiklat Kemhan diresmikan oleh Menhan pada tanggal 28 Februari 2017, berlokasi di Desa Cibodas Kecamatan Rumpin, Kabupaten Bogor. Sejak 2017 sampai dengan 2021, Pusdiklat Bela Negara Badiklat Kemhan telah mendidik sebanyak 15.000 Kader Bela Negara dari berbagai lingkup pendidikan, pemukiman, dan masyarakat.<i><b>(Biro Humas Setjen Kemhan)</b></i><br></p>', '2022-08-29', 'Cinta Tanah Air 2.jpg', 1),
(3, 'Tutur Singkat “WAWASAN KEBANGSAAN DAN BELA NEGARA” Oleh Bati Tuud Koramil 07/Gatak', '<p style=\"text-align: justify;\">Adalah Pelda Agus Marjoko Bati Tuud Koramil 07/Gatak bertugas mewakili Danramil 07/Gatak dalam kegiatan Binkamtibmas sebagai bagian Pemateri Pembinaan Ketrentraman, Keamanan dan Ketertiban Masyarakat (Kamtibmas) &amp; Masalah Sosial Bersama : Muspika Gatak Bersatu (Camat dan Kaplsek Gatak) dengan Kepala Desa dan Perangkat Desa serta Masyarakat Desa Krajan Kecamatan Gatak pada Selasa - 10 Maret 2020 bertempat di Balai Desa Krajan Kecamatan Gatak, memberikan materi pada pokok inti diantaranya dapat menyadarkan serta menyemangati makna dan arti petingnya : “WAWASAN KEBANGSAAN DAN BELA NEGARA”.</p><p style=\"text-align: justify;\">Bahwa materi tersebut adalah turut serta mempertegas serta mencerahkan Pengertian Bela Negara, yakni ; Bela negara ialah tekad, sikap dan perilaku warga negara yang dilakukan secara teratur, menyeluruh dan terpadu serta dijiwai oleh kecintaan kepada NKRI berdasarkan Pancasila dan UUD 1945 dalam menjamin kelangsungan hidup Bangsa dan Negara.</p><p style=\"text-align: justify; \"><span style=\"font-size: 1rem;\">Serta, bahwa materi tersebut selaras dengan Dasar hukum undang-undang tentang upaya bela negara yaitu:</span><br></p><blockquote style=\"text-align: justify; \" class=\"blockquote\">Pasal 27 ayat (3) UUD 1945 menyatakan bahwa semua waraga negara berhak dan wajib ikut serta dalam upaya pembelaan negara.</blockquote><blockquote style=\"text-align: justify; \" class=\"blockquote\">Pasal 30 ayat (1) UUD 1945 menyatakan bahwa tiap-tiap warga negara berhak dan wajib ikut serta dalam usaha pertahanan dan keamanan negara.</blockquote><p style=\"text-align: justify; \">Dan lagi, bahwa : materi wawasan kebangsaan yang mengurai serta mencerahkan maksud cara pandang bangsa Indonesia mengenai diri dan lingkungannya, mengutamakan kesatuan dan persatuan wilayah dalam penyelenggaraan kehidupan bermasyarakat, berbangsa dan bernegara. Kesatuan atau integrasi nasional bersifat kultural dan tidak hanya bernuansa struktural mengandung satu kesatuan ideologi, kesatuan politik, kesatuan sosial budaya, kesatuan ekonomi, dan kesatuan pertahanan dan keamanan : adalah sangat pas dan selaras Tema acara ini, yakni : Pembinaan Keamanan dan Ketertiban Masyarakat (Kamtibmas) &amp; Masalah Sosial.</p>', '2022-08-25', 'Wawasan Kebangsaan 1.jpeg', 2),
(4, 'Bangun Wawasan Kebangsaan Bela Negara Dengan ILMCI', '<div style=\"text-align: justify; \"><b>Temanggung</b> - Kodim 0706/Temanggung menyelenggarakan Sosialisasi Wawasan Kebangsaan Bela Negara \"I Love My Country Indonesia\" (ILMCI) pada Kamis (21/10/2021) di Pendopo Pengayoman, Kabupaten Temanggung dengan tema Membangun Indonesia Baru, Cerdas Anak Bangsa dalam Kerangka NKRI.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Hadir dalam sosialisasi tersebut, Bupati Temanggung yang diwakili oleh Staf Ahli Bupati Bidang Ekonomi dan Pembangunan Hery Kardono, Perwakilan dari Kodim 0706/Temanggung Aris Setyanto, Kepala Dinas Pendidikan, Kepemudaan dan Olahraga (Dindikpora) Kabupaten Temanggung Agus Sujarwo, Perwakilan Kodam IV/Diponegoro Ahmad Alwi, serta diikuti oleh perwakilan guru se-Kabupaten Temanggung.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Sofyan Tjandra, narasumber kegiatan yang merupakan CEO dari ILMCI yang juga Staf Khusus Sekretariat Jenderal Dewan Ketahanan Nasional Bidang Teknologi, Informasi, dan Aplikasi menyampaikan bahwa guru berperan penting untuk kemajuan siswa-siswi di Indonesia, terutama di Kabupaten Temanggung.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Para guru juga dibekali dengan materi-materi yang berkaitan dengan cara mengajar dengan inovasi agar para siswa-siswi dapat menerima materi pembelajaran dan juga mengenalkan aplikasi yang edukatif untuk membantu guru dalam mengajar.</div><div style=\"text-align: justify;\"><br></div><blockquote style=\"text-align: justify;\" class=\"blockquote\">\"Para guru diharapkan bisa mengaplikasikan pola pikir yang baru dalam mengajar yaitu, Mimpi Besar, Positive Mindset, Emotional Intellegence, Smile dan Fasilitator,\" ungkapnya.</blockquote><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Kepala Dindikpora Agus Sujarwo, mengapresiasi setinggi-tingginya terhadap tim ILMCI atas dilaksanakannya kegiatan tersebut.</div><div style=\"text-align: justify;\"><br></div><blockquote style=\"text-align: justify;\" class=\"blockquote\">\"Diharapkan agar guru dan anak-anak didik bisa membangun kembali karakter bangsa sesuai dengan program dari Kementerian Pendidikan, yaitu membangun profil pelajar Pancasila\" ungkapnya.</blockquote><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Sementara, Staf Ahli Bupati Bidang Ekonomi dan Pembangunan Hery Kardono mengucapkan terimakasih dan mengapresiasi sosialisasi yang dilakukan oleh Kodim 0706 dan Tim ILMCI.</div><div style=\"text-align: justify;\"><br></div><blockquote style=\"text-align: justify;\" class=\"blockquote\">“Wawasan kebangsaan ini memang dibutuhkan bagi semuanya, tak terkecuali anak-anak muda dan pelajar yang selama ini kelihatannya kita sudah kehilangan kecintaan dengan NKRI, mudah-mudahan dengan adanya I Love My Country Indonesia ini, Pemkab Temanggung menyambut baik dan bisa segera diimplementasikan di sekolah-sekolah”, ujarnya.</blockquote><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify; \">Ia berharap, siswa-siswi di Kabupaten Temanggung agar dapat menerima implementasi dari kegiatan sosialisasi I Love My Country Indonesia dan mendapatkan manfaat yang baik, dan untuk para guru harapannya dapat menyikapi sosialisasi ini dengan positif, serta bisa mengaplikasikan semua yang sudah didapatkan dari sosialisasi tersebut. (fn;ekp)</div>', '2022-08-30', 'wawasan kebangsaan 2.png', 2),
(5, 'Aksi Rela Berkorban Pemuda terhadap Bangsa dan Negara    Konten ini telah tayang di Kompasiana.com d', '<div style=\"text-align: justify; \">Cuma manusia pengecut atau curang yang tiada ingin melakukan pekerjaan yang berat, tetapi bermanfaat buat masyarakat sekarang dan dihari kemudian itu.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Sebuah pengantar kalimat dari Tan Malaka yang menyadarkan kita untuk memiliki sikap rela berkorban. Ketika para pahlawan telah gugur demi kemerdekaan indonesia, akankah sikap rela berkorban juga ikut hilang begitu saja?</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Era globalisasi saat ini telah menggerus sikap rela berkorban di kalangan generasi muda bangsa. Kemudahan akses teknologi dan informasi cenderung membuat generasi muda menjadi kurang menghargai proses.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div><div style=\"text-align: justify;\">Inilah era dimana generasi muda lebih cenderung mengutamakan kesenangan semata, konsumtif, dan materialistis, namun tidak diimbangi dengan kemauan dan kerja keras untuk mencapainya. Maka sudah saatnya generasi muda untuk kembali memaknai mengenai sikap rela berkorban.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Secara pengertian, rela berkorban adalah sikap yang mencerminkan adanya kesediaan dan keikhlasan memberikan sesuatu yang dimiliki untuk orang lain, walaupun akan menimbulkan penderitaan bagi diri sendiri. Jika kita sedikit menilik ke belakang, maka sikap rela berkorban ini sudah melekat pada kebanyakan pemuda bangsa.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Sebut saja organisasi budi utomo yang merupakan cikal bakal para pemuda yang bersatu untuk memperjuangkan kemerdekaan Indonesia. Semangat pantang menyerah dan rela berkorban adalah bagian dari karakter yang melekat kuat pada Bangsa Indonesia dalam perjuangan merebut kemerdekaan.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Sikap rela berkorban erat kaitannya dengan sila ketiga pancasila \"Persatuan Indonesia\". Rela berkorban merupakan salah satu dari tujuh pengamalan sila ketiga pancasila. Maka dari itu, sudah menjadi kewajiban para genarasi bangsa untuk mengamalkan sikap rela berkorban dalam kehidupan sehari-hari. Rela berkorban tentu tidak bisa tumbuh dengan sendirinya. Sikap ini perlu dipupuk secara perlahan.</div><div style=\"text-align: justify;\"><br></div><div><div style=\"text-align: justify;\">Langkah pertama yang bisa dilakukan generasi muda sebagai wujud dari sikap rela berkorban adalah belajar dengan sungguh-sungguh.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Tentunya dengan belajar dapat meningkatkan intelektualitas dan taraf hidup masyarakat Indonesia. Di era industri 4.0, generasi muda Indonesia harus memiliki keunggulan kompetitif maupun keunggulan komparatif agar mampu memenangkan, atau setidaknya mampu bertahan dalam persaingan global.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Tentunya hal ini juga harus dibarengi dengan pendidikan karakter yang baik pula untuk membekali generasi muda agar terbentuk keseimbangan antara akal dengan hati yang sama kuatnya.&nbsp;&nbsp;</div><div style=\"text-align: justify;\"><br></div><div><div style=\"text-align: justify; \">Langkah pertama yang bisa dilakukan generasi muda sebagai wujud dari sikap rela berkorban adalah belajar dengan sungguh-sungguh.&nbsp;</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \">Tentunya dengan belajar dapat meningkatkan intelektualitas dan taraf hidup masyarakat Indonesia. Di era industri 4.0, generasi muda Indonesia harus memiliki keunggulan kompetitif maupun keunggulan komparatif agar mampu memenangkan, atau setidaknya mampu bertahan dalam persaingan global.&nbsp;</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \">Tentunya hal ini juga harus dibarengi dengan pendidikan karakter yang baik pula untuk membekali generasi muda agar terbentuk keseimbangan antara akal dengan hati yang sama kuatnya.&nbsp;&nbsp;</div><div><div style=\"text-align: justify; \">Itulah beberapa contoh dari sekian banyak wujud sikap rela berkorban bagi bangsa dan negara. Dengan begitu, kita sebagai generasi muda bangsa haruslah sadar bahwa rela berkorban adalah sikap yang mesti terus diwujudkan secara nyata dalam kehidupan sehari-hari. Masa depan bangsa Indonesia adalah tanggung jawab kita bersama.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \">Untuk hari bela negara yang akan diperingati setiap tanggal 19 Desember. Saya teringat sebait lagu dari band superman is dead yang berjudul jadilah legenda dengan lirik berikut</div><div style=\"text-align: justify; \"><br></div><blockquote style=\"text-align: justify; \" class=\"blockquote\">\"untuk Indonesia teruslah bertahan walau dihancurkan disakiti kau tetap berdiri disini, untuk Indonesia jadilah legenda kita bisa dan percaya\"</blockquote><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \">Bait lagu ini menjadi doa sekaligus harapan saya akan cita-cita bangsa Indonesia ke depannya agar menjadi bangsa yang berdikari dan sejahtera. Dan kita sebagai generasi muda semoga bisa legenda bagi bangsa Indonesia dengan mengukir sejarah dan pencapaian masing-masing. Selamat Hari Bela Negara!&nbsp; Semoga kedaulatanmu abadi sepanjang masa.</div><div style=\"text-align: justify; \"><br></div></div></div></div></div>', '2022-08-30', 'Rela berkorban 1.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Cinta Tanah Air'),
(2, 'Wawasan Kebangsaan'),
(3, 'Rela Berkorban Untuk Bangsa dan Negara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'administrator', 'admin', '$2y$10$wu8NHf1oUCavmM0sF6A8yuVBz8PmaxM5D61uYv/wCBEzQdYYh41wK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
