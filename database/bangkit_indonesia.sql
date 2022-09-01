-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 08:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
-- Table structure for table `artikel`
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
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `artikel`, `tanggal`, `gambar`, `id_kategori`) VALUES
(16, 'Cinta Tanah Air dan Bela Negara Harus Terus Ditanamkan', 'Gubernur Sulawesi Selatan, H. Syahrul Yasin Limpo mengatakan bela negara saat ini sangatlah penting terutama di era globalisasi dan digital. Ini dilakukan untuk membekali rakyat tentang bagaimana berbangsa dan bernegara.\r\n\r\nIa menyebutkan bela negara adalah suatu kewajiban yang diatur dalam filosif bernegara dimanapun. Ini menjadi penting dilakukan sehingga tidak akan terpengaruh paham dari luar.\r\n\r\n\"Kalau tidak dilakukan maka apa yang kita pahami mengenaii Pancasila, Bhineka Tunggal Ika bisa saja terprovokasi dan memecah belah negara. Olehnya itu hari ini komitmen terhadap bela negara tentu saja harus direspon oleh kita semua.\"Kata Syahrul, saat membuka Simposium dalam rangka HUT TNI ke-71 Tahun 2016 di Hotel Clarion Makassar, Selasa (4/10/2016).\r\n\r\nMengenai koordinasi, mengantisipasi paham yang masuk, Syahrul menjelaskan ini menjadi satu tantangan bukan cuma di Sulsel atau Indonesia, tapi di seluruh  dunia. Oleh karena itu memahami ancaman tersebut hanya dengan cara menyamakan cara pandang, tentang wawasan kebangsaan, yang hadir pada anak-anak kita, pada siapapun termasuk para pejabat.\r\n\r\n\"Cinta tanah air menjadi kunci, pancasila harus jadi hal yang masuk dalam pikiran, dalam lanhgkah dan hati semua anak bangsa. Kalau ini hadir, tentu saja ancama digital, Internet akan bisa kita minimalisir,\"paparnya.\r\n\r\nPangdam VII Wirabuana Mayjen TNI Agus, S.B mengucapkan terima kasih pada masyarakat Sulsel yang komitmen pada bela negara dan cinta tanah air. Ini menjadi kekuatan dasar yang menjadi pondasi bagi keamanan, ketertiban, dan kesejahteraan masyarakat dan bangsa Indonesia.\r\n\r\nSementara mengenai HUT TNI, Agus mengatakan tidak akan melakukan upacara yang mewah dan besar. \"Kami akan menggali kearifan lokal, serta menggali nilai budaya bangsa, nilai masyarakat sulawesi sebagai kekayaan lokal yang akan menjadi kekuatan nasional dalam mempertahankan NKRI,\"paparnya.\r\n\r\nSumber : https://sulselprov.go.id/welcome/post/cinta-tanah-air-dan-bela-negara-harus-terus-ditanamkan', '2022-08-28', 'gambar cinta tanah air 1.png', 1),
(17, 'Pembinaan Bela Negara Penting Untuk Bangun Daya Tangkal Bangsa', 'Jakarta – Kepala Pusat Pendidikan dan Pelatihan Bela Negara Badan Pendikan dan Pelatihan Kementerian Pertahanan (Kapusdiklat Bela Negara Badiklat Kemhan) Brigjen TNI Kartiko Wardani, M. Tr (Han) mengatakan, Pembinaan Kesadaran Bela Negara penting untuk membentuk karakter bangsa terutama generasi muda yang memiliki jiwa nasionalisme, cinta tanah air, semangat kebangsaan, dan memiliki jiwa patriotisme, semangat militansi serta rela berkorban dan pantang menyerah.\r\n\r\n“Kalau ini dibangun, bangsa ini akan memiliki daya tangkal dan ketahanan yang tangguh dalam menghadapi berbagai tantangan ancaman. Kita ingin bangun generasi muda bangsa Indonesia yang berkarakter Indonesia dan berkarakter Pancasila”, ungkap Kapusdiklat Bela Negara Badiklat Kemhan saat hadir menjadi narasumber wawancara Podcast Kemhan, Kamis (17/6) di Studio Podcast Kemhan, Jakarta.\r\n\r\nLebih lanjut Kapusdiklat Bela Negara Badiklat Kemhan mengatakan, Bela Negara adalah tekat sikap prilaku dan tindakan warga negara baik secara perorangan maupun kolektif dalam menjaga kedaulatan negara, keutuhan wilayah, serta keselamatan terhadap bangsa yang dijiwai oleh kecintaaan kepada NKRI yang berdasarkan Pancasila dan UUD 1945 dalam menjamin kelangsungan hidup bangsa dan negara dari berbagai ancaman – ancaman.\r\n\r\nTantangan kedepan semakin sulit, ancaman, gangguan dan hambatan pasti ada di depan mata. Ancaman meliputi ancaman militer, non militer dan ancaman hibrida, yang bisa berasal dari dalam dan luar negeri yang dapat mengancam atau membahayakan kedaulatan negara, keutuhan wilayah dan keselamatan bangsa.\r\n\r\nDalam kesempatan wawancara tersebut, Kapusdiklat Bela Negara Badiklat Kemhan lebih lanjut menjelaskan terkait tugas Pusdiklat Bela Negara Badiklat Kemhan yang merupakan unsur pelaksana tugas atau Sub Satker dari Badiklat Kemhan, yakni merencanakan, melaksanakan, mengevaluasi dan melaporkan serta meningkatkan mutu terkait pembentukan kader bela negara.\r\n\r\nDijelaskan bahwa pembentukan Kader Bela Negara, merupakan amanat Undang Undang Dasar 1945 Pasal 27 Ayat 3, disebutkan bahwa setiap warga negara berhak dan wajib ikut serta dalam upaya pembelaan negara. Juga amanat UU Nomor 3 Tahun 2002 Tentang Pertahanan Negara dan juga UU Nomor 23 Tahun 2019 tentang Pengelolaan Sumber Daya Nasional Untuk Pertahanan Negara.\r\n\r\nPusdiklat Bela Negara Badiklat Kemhan diresmikan oleh Menhan pada tanggal 28 Februari 2017, berlokasi di Desa Cibodas Kecamatan Rumpin, Kabupaten Bogor. Sejak 2017 sampai dengan 2021, Pusdiklat Bela Negara Badiklat Kemhan telah mendidik sebanyak 15.000 Kader Bela Negara dari berbagai lingkup pendidikan, pemukiman, dan masyarakat.(Biro Humas Setjen Kemhan)\r\n', '2022-08-29', 'Cinta Tanah Air 2.jpg', 1),
(18, 'Tutur Singkat “WAWASAN KEBANGSAAN DAN BELA NEGARA” Oleh Bati Tuud Koramil 07/Gatak', 'Bahwa materi tersebut adalah turut serta mempertegas serta mencerahkan Pengertian Bela Negara, yakni ; Bela negara ialah tekad, sikap dan perilaku warga negara yang dilakukan secara teratur, menyeluruh dan terpadu serta dijiwai oleh kecintaan kepada NKRI berdasarkan Pancasila dan UUD 1945 dalam menjamin kelangsungan hidup Bangsa dan Negara.\r\n\r\n        Serta, bahwa materi tersebut selaras dengan Dasar hukum undang-undang tentang upaya bela negara yaitu:\r\nPasal 27 ayat (3) UUD 1945 menyatakan bahwa semua waraga negara berhak dan wajib ikut serta dalam upaya pembelaan negara.\r\nPasal 30 ayat (1) UUD 1945 menyatakan bahwa tiap-tiap warga negara berhak dan wajib ikut serta dalam usaha pertahanan dan keamanan negara.\r\n\r\n        Dan lagi, bahwa : materi wawasan kebangsaan yang mengurai serta mencerahkan maksud cara pandang bangsa Indonesia mengenai diri dan lingkungannya, mengutamakan kesatuan dan persatuan wilayah dalam penyelenggaraan kehidupan bermasyarakat, berbangsa dan bernegara. Kesatuan atau integrasi nasional bersifat kultural dan tidak hanya bernuansa struktural mengandung satu kesatuan ideologi, kesatuan politik, kesatuan sosial budaya, kesatuan ekonomi, dan kesatuan pertahanan dan keamanan : adalah sangat pas dan selaras Tema acara ini, yakni : Pembinaan Keamanan dan Ketertiban Masyarakat (Kamtibmas) & Masalah Sosial.\r\n\r\nSumber : https://gatak.sukoharjokab.go.id/index.php/berita/tutur-singkat-wawasan-kebangsaan-dan-bela-negara-oleh-bati-tuud-koramil-07gatak', '2022-08-25', 'Wawasan Kebangsaan 1.jpeg', 2),
(19, 'Bangun Wawasan Kebangsaan Bela Negara Dengan ILMCI', '\r\n\r\nTemanggung - Kodim 0706/Temanggung menyelenggarakan Sosialisasi Wawasan Kebangsaan Bela Negara \"I Love My Country Indonesia\" (ILMCI) pada Kamis (21/10/2021) di Pendopo Pengayoman, Kabupaten Temanggung dengan tema Membangun Indonesia Baru, Cerdas Anak Bangsa dalam Kerangka NKRI.\r\n\r\nHadir dalam sosialisasi tersebut, Bupati Temanggung yang diwakili oleh Staf Ahli Bupati Bidang Ekonomi dan Pembangunan Hery Kardono, Perwakilan dari Kodim 0706/Temanggung Aris Setyanto, Kepala Dinas Pendidikan, Kepemudaan dan Olahraga (Dindikpora) Kabupaten Temanggung Agus Sujarwo, Perwakilan Kodam IV/Diponegoro Ahmad Alwi, serta diikuti oleh perwakilan guru se-Kabupaten Temanggung. \r\n\r\nSofyan Tjandra, narasumber kegiatan yang merupakan CEO dari ILMCI yang juga Staf Khusus Sekretariat Jenderal Dewan Ketahanan Nasional Bidang Teknologi, Informasi, dan Aplikasi menyampaikan bahwa guru berperan penting untuk kemajuan siswa-siswi di Indonesia, terutama di Kabupaten Temanggung. \r\n\r\nPara guru juga dibekali dengan materi-materi yang berkaitan dengan cara mengajar dengan inovasi agar para siswa-siswi dapat menerima materi pembelajaran dan juga mengenalkan aplikasi yang edukatif untuk membantu guru dalam mengajar.\r\n\r\n\"Para guru diharapkan bisa mengaplikasikan pola pikir yang baru dalam mengajar yaitu, Mimpi Besar, Positive Mindset, Emotional Intellegence, Smile dan Fasilitator,\" ungkapnya.\r\n\r\nKepala Dindikpora Agus Sujarwo, mengapresiasi setinggi-tingginya terhadap tim ILMCI atas dilaksanakannya kegiatan tersebut.\r\n\r\n\"Diharapkan agar guru dan anak-anak didik bisa membangun kembali karakter bangsa sesuai dengan program dari Kementerian Pendidikan, yaitu membangun profil pelajar Pancasila\" ungkapnya.\r\n\r\nSementara, Staf Ahli Bupati Bidang Ekonomi dan Pembangunan Hery Kardono mengucapkan terimakasih dan mengapresiasi sosialisasi yang dilakukan oleh Kodim 0706 dan Tim ILMCI.\r\n\r\n“Wawasan kebangsaan ini memang dibutuhkan bagi semuanya, tak terkecuali anak-anak muda dan pelajar yang selama ini kelihatannya kita sudah kehilangan kecintaan dengan NKRI, mudah-mudahan dengan adanya I Love My Country Indonesia ini, Pemkab Temanggung menyambut baik dan bisa segera diimplementasikan di sekolah-sekolah”, ujarnya.\r\n \r\nIa berharap, siswa-siswi di Kabupaten Temanggung agar dapat menerima implementasi dari kegiatan sosialisasi I Love My Country Indonesia dan mendapatkan manfaat yang baik, dan untuk para guru harapannya dapat menyikapi sosialisasi ini dengan positif, serta bisa mengaplikasikan semua yang sudah didapatkan dari sosialisasi tersebut. (fn;ekp)\r\n\r\nSumber: https://temanggungkab.go.id/articles/bangun-wawasan-kebangsaan-bela-negara-dengan-ilmci-1641781201', '2022-08-30', 'wawasan kebangsaan 2.png', 2),
(20, 'Aksi Rela Berkorban Pemuda terhadap Bangsa dan Negara    Konten ini telah tayang di Kompasiana.com d', 'Cuma manusia pengecut atau curang yang tiada ingin melakukan pekerjaan yang berat, tetapi bermanfaat buat masyarakat sekarang dan dihari kemudian itu. \r\nSebuah pengantar kalimat dari Tan Malaka yang menyadarkan kita untuk memiliki sikap rela berkorban. Ketika para pahlawan telah gugur demi kemerdekaan indonesia, akankah sikap rela berkorban juga ikut hilang begitu saja?\r\nEra globalisasi saat ini telah menggerus sikap rela berkorban di kalangan generasi muda bangsa. Kemudahan akses teknologi dan informasi cenderung membuat generasi muda menjadi kurang menghargai proses. \r\nInilah era dimana generasi muda lebih cenderung mengutamakan kesenangan semata, konsumtif, dan materialistis, namun tidak diimbangi dengan kemauan dan kerja keras untuk mencapainya. Maka sudah saatnya generasi muda untuk kembali memaknai mengenai sikap rela berkorban.\r\nSecara pengertian, rela berkorban adalah sikap yang mencerminkan adanya kesediaan dan keikhlasan memberikan sesuatu yang dimiliki untuk orang lain, walaupun akan menimbulkan penderitaan bagi diri sendiri. Jika kita sedikit menilik ke belakang, maka sikap rela berkorban ini sudah melekat pada kebanyakan pemuda bangsa. \r\nSebut saja organisasi budi utomo yang merupakan cikal bakal para pemuda yang bersatu untuk memperjuangkan kemerdekaan Indonesia. Semangat pantang menyerah dan rela berkorban adalah bagian dari karakter yang melekat kuat pada Bangsa Indonesia dalam perjuangan merebut kemerdekaan.\r\nSikap rela berkorban erat kaitannya dengan sila ketiga pancasila \"Persatuan Indonesia\". Rela berkorban merupakan salah satu dari tujuh pengamalan sila ketiga pancasila. Maka dari itu, sudah menjadi kewajiban para genarasi bangsa untuk mengamalkan sikap rela berkorban dalam kehidupan sehari-hari. Rela berkorban tentu tidak bisa tumbuh dengan sendirinya. Sikap ini perlu dipupuk secara perlahan.\r\nLangkah pertama yang bisa dilakukan generasi muda sebagai wujud dari sikap rela berkorban adalah belajar dengan sungguh-sungguh. \r\nTentunya dengan belajar dapat meningkatkan intelektualitas dan taraf hidup masyarakat Indonesia. Di era industri 4.0, generasi muda Indonesia harus memiliki keunggulan kompetitif maupun keunggulan komparatif agar mampu memenangkan, atau setidaknya mampu bertahan dalam persaingan global. \r\nTentunya hal ini juga harus dibarengi dengan pendidikan karakter yang baik pula untuk membekali generasi muda agar terbentuk keseimbangan antara akal dengan hati yang sama kuatnya.  \r\nKonten ini telah tayang di Kompasiana.com dengan judul \"Aksi Rela Berkorban Pemuda terhadap Bangsa dan Negara\", \r\n\r\nKreator: Imawan Mashuri\r\nKlik untuk baca:\r\nhttps://www.kompasiana.com/k1_imawanmashuri1990/61b8c6ff06310e0197107602/aksi-rela-berkorban-pemuda-terhadap-bangsa-dan-negara', '2022-08-30', 'Rela berkorban 1.jpg', 10),
(21, 'Tingkatkan Semangat Rela Berkorban untuk Bangsa dan Negara', 'Pangkalpinang – Aparatur harus rela berkorban untuk bangsa dan negara. Cara yang dapat dilakukan, bersedia mengorbankan waktu, tenaga dan pikiran demi kemajuan bangsa dan negara. Siap membela bangsa dan negara dari berbagai macam ancaman, berpartisipasi aktif dalam pembangunan masyarakat, bangsa dan negara.\r\n\r\nDemikian dikatakan Yan Megawandi Sekda Provinsi Kepulauan Bangka Belitung saat bertindak sebagai pembina upacara peringatan Hari Bela Negara, di Halaman Kantor Gubernur Kepulauan Bangka Belitung, Selasa (19/12/2017). Ia menambahkan, tak kalah penting gemar membantu sesama warga negara yang mengalami kesulitan.\r\n\r\n“Yakin dan percaya pengorbanan untuk bangsa dan negara tidak sia-sia. Nilai bela negara yang terakhir harus diwujudkan pada hari peringatan bela negara ini, dimana nilai bela negara yang terakhir yaitu adalah memiliki kemampuan awal bela negara. Indiktornya, kita harus memiliki kecerdaasan emosional dan spiritual serta intelejensia,” jelasnya.\r\n\r\nLebih jauh Sekda mengajak untuk senantiasa memelihara jiwa dan raga. Senantiasa bersyukur dan berdoa atas kenikmatan yang telah diberikan Tuhan Yang Maha Esa dan gemar berolahraga dan senantiasa menjaga kesehatan. Semangat bela negara menjadi kekuatan maha dasyat apabila diikat dalam tali persatuan Indonesia.\r\n\r\nSejarah sudah membuktikkan dengan persatuan Indonesia, semua tantangan dan ancaman bangsa bisa dilalui bersama. Ia menegaskan, para pejuang pembela negara bisa membangun kekuatan menghadapi penjajah hanya dengan kebersamaan dan gotong royong.\r\n\r\nSemua elemen bangsa hendaknya membangun kebersamaan dan persatuan dalam menghadapi tantangan-tantangan bangsa ke depan. Sekda mengatakan, walaupun berbeda-beda dari latar belakang profesi, suku, agama maupun golongan, tetapi tetap bisa satu mengatasi berbagai persoalan kebangsaan. Jalin kerja sama antar daerah untuk mewujudkan kemajuan bersama.\r\n\r\n“Mari kita perkokoh persatuan dalam kemajemukan. Kemajemukan bangsa bukanlah halangan untuk mewujudkan semangat bela negara. Bhinneka Tunggal Ika justru akan bisa memperkuat kecintaan kita pada bangsa dan negara,” tegasnya.\r\n\r\nSumber:  https://kesbangpol.babelprov.go.id/content/tingkatkan-semangat-rela-berkorban-untuk-bangsa-dan-negara', '2022-08-30', 'Rela berkorban 2.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Cinta Tanah Air'),
(2, 'Wawasan Kebangsaan'),
(10, 'Rela Berkorban Untuk Bangsa dan Negara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
