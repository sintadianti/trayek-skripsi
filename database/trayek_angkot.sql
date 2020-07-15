-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2020 pada 00.46
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trayek_angkot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkot`
--

CREATE TABLE `angkot` (
  `id_trayek` int(11) NOT NULL,
  `trayek` varchar(255) NOT NULL,
  `jalur_angkot` varchar(255) NOT NULL,
  `warna_angkot` varchar(255) NOT NULL,
  `ongkos1` varchar(255) NOT NULL,
  `titik_awal` varchar(255) NOT NULL,
  `titik_akhir` varchar(255) NOT NULL,
  `jalur_masuk` text NOT NULL,
  `jalur_keluar` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `angkot`
--

INSERT INTO `angkot` (`id_trayek`, `trayek`, `jalur_angkot`, `warna_angkot`, `ongkos1`, `titik_awal`, `titik_akhir`, `jalur_masuk`, `jalur_keluar`, `gambar`) VALUES
(1, '01 (Jalur Masuk)', 'Sukaregang - Terminal Guntur', 'Hijau', 'Rp. 5000,-', 'Simpang Lima', 'Terminal Guntur', 'Sukaregang - Jln. A. Yani - Jln. Bratayudha - Sukadana - Jln. Pasundan - Jln. Papandayan - Maktal Jln. Cimanuk - Bunderan Jayaraga - Jln. Merdeka - Jln. Guntur Melati - Jln. Guntur Sari - Terminal Guntur', 'Terminal Guntur - Jln. Guntur Melati - Jln. Guntur Indah - Jln. Merdeka - Bunderan Jayaraga - Jln. Guntur (IBC) - Sukaregang', 'img_5f0695eb480db.jpg'),
(3, '02 (Jalur Masuk)', 'Sukadana - Terminal Guntur', 'Coklat', 'Rp. 5000,-', 'Sukadana', 'Terminal Guntur', 'Sukadana - Jln. Bratayudha - Jln. A. Yani - Sukaregang - Jln. Guntur - Jln. Perintis Kemerdekaan - Jln. Guntur Melati - Terminal Guntur', 'Terminal Guntur - Jln. Merdeka - Jln. Cimanuk - Jln. Papandayan - Jln. Kiansantang - Jln. Siliwangi - Jln. Muhammadiyah - Jln. Ranggalawe - Jln. Cikuray - Jln. Pasundan - Sukadana', 'img_5f09df195c353.jpg'),
(6, '03 (Jalur Masuk)', 'RSU - Terminal', 'Biru', 'Rp. 5.000,-', 'RSU', 'Terminal Guntur', 'RSU - Maktal - Jln. Papandayan - Jln. Kiansantang - Jln. Dewi Sartika - Jln. A. Yani/Apotik Sari - Jln. Cimanuk - Maktal - Jln. Pembangunan/RSU - Simpang Lima - Jln. Rancabogo - Jln. Cendana - Jln. Guntur Sari - Terminal Guntur', 'Terminal Guntur - Jln. Guntur Melati - Jln. Guntur Indah - Jln. Merdeka - Jln. Pembangunan - Simpang Lima - Jln. Pembangunan/Pemda - RSU', 'img_5f09df47b5832.jpg'),
(11, '08', 'byb', 'Kuning', 'Rp. 5.000,-', 'bayongbong', 'Terminal Guntur', 'Byb', 'Terminal', 'img_5f068d4b10ea4.jpg'),
(12, '12', 'Karang Pawitn', 'merah', 'Rp. 5.000,-', 'Karpaw', 'Terminal Guntur', 'Karpaw', 'Terminal', 'img_5f068e9b11c5b.jpg'),
(13, '01 (Jalur Keluar)', 'Terminal - Sukaregang', 'hijau', 'Rp. 5.000,-', 'Sukaregang', 'Terminal Guntur', 'Sukaregang', 'Terminal', 'img_5f0695d641c10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasos`
--

CREATE TABLE `fasos` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `longtitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasos`
--

INSERT INTO `fasos` (`id`, `nama_tempat`, `deskripsi`, `longtitude`, `latitude`) VALUES
(11, 'Alun - Alun Garut', 'tempat berkumpul', '-7.216068', '107.901197'),
(12, 'SMA 11', 'Sekolah SMA', '-7.216748', '107.901925'),
(13, 'SDN Kartika Garut', 'Sekolah Dasar', '-7.216740', '107.903477'),
(14, 'Pasar Ciawi Tali', 'Pasar garut', '-7.198372', '107.904329'),
(15, 'Ramayana Garut', 'Pusat perbelanjaan', '-7.210995', '107.901721'),
(16, 'Stasiun Kereta Api Garut', 'Stasiun Kereta Api ', '-7.213489', '107.904706');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(11) NOT NULL,
  `id_trayek` int(11) NOT NULL,
  `longtud` varchar(30) NOT NULL,
  `latud` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `id_trayek`, `longtud`, `latud`) VALUES
(143, 1, '-7.22421', '107.91836'),
(144, 1, '-7.22334', '107.91806'),
(145, 1, '-7.22269', '107.91771'),
(146, 1, '-7.22124', '107.91702'),
(147, 1, '-7.22072', '107.91675'),
(148, 1, '-7.22057', '107.91660'),
(149, 1, '-7.22050', '107.91645'),
(150, 1, '-7.22051', '107.91629'),
(151, 1, '-7.22062', '107.91598'),
(152, 1, '-7.22061', '107.91583'),
(153, 1, '-7.22021', '107.91554'),
(154, 1, '-7.21985', '107.91539'),
(155, 1, '-7.21876', '107.91544'),
(156, 1, '-7.21843', '107.91542'),
(157, 1, '-7.21796', '107.91534'),
(158, 1, '-7.21710', '107.91513'),
(159, 1, '-7.21590', '107.91488'),
(160, 1, '-7.21590', '107.91295'),
(161, 1, '-7.21588', '107.91028'),
(162, 1, '-7.21591', '107.90892'),
(163, 1, '-7.21620', '107.90887'),
(164, 1, '-7.21673', '107.90871'),
(165, 1, '-7.21702', '107.90877'),
(166, 1, '-7.21728', '107.90895'),
(167, 1, '-7.21770', '107.90935'),
(168, 1, '-7.21851', '107.91004'),
(169, 1, '-7.21886', '107.91034'),
(170, 1, '-7.21949', '107.91065'),
(171, 1, '-7.22018', '107.91075'),
(172, 1, '-7.22126', '107.91081'),
(173, 1, '-7.22306', '107.91086'),
(174, 1, '-7.22382', '107.91093'),
(175, 1, '-7.22600', '107.91105'),
(176, 1, '-7.22691', '107.91115'),
(177, 1, '-7.22735', '107.91120'),
(178, 1, '-7.22827', '107.91128'),
(179, 1, '-7.22848', '107.91123'),
(180, 1, '-7.22873', '107.91096'),
(181, 1, '-7.22906', '107.91005'),
(182, 1, '-7.22912', '107.90974'),
(183, 1, '-7.22917', '107.90921'),
(184, 1, '-7.22923', '107.90852'),
(185, 1, '-7.22921', '107.90825'),
(186, 1, '-7.22904', '107.90776'),
(187, 1, '-7.22894', '107.90735'),
(188, 1, '-7.22887', '107.90685'),
(189, 1, '-7.22882', '107.90664'),
(190, 1, '-7.22867', '107.90645'),
(191, 1, '-7.22824', '107.90614'),
(192, 1, '-7.22785', '107.90592'),
(193, 1, '-7.22718', '107.90582'),
(194, 1, '-7.22669', '107.90577'),
(195, 1, '-7.22603', '107.90569'),
(196, 1, '-7.22536', '107.90559'),
(197, 1, '-7.22482', '107.90551'),
(198, 1, '-7.22410', '107.90542'),
(199, 1, '-7.22343', '107.90528'),
(200, 1, '-7.22310', '107.90518'),
(201, 1, '-7.22228', '107.90486'),
(202, 1, '-7.22193', '107.90471'),
(203, 1, '-7.22147', '107.90448'),
(204, 1, '-7.22118', '107.90434'),
(205, 1, '-7.22101', '107.90433'),
(206, 1, '-7.22044', '107.90441'),
(207, 1, '-7.22041', '107.90368'),
(208, 1, '-7.22014', '107.90244'),
(209, 1, '-7.21986', '107.90152'),
(210, 1, '-7.21964', '107.90055'),
(211, 1, '-7.21966', '107.90030'),
(212, 1, '-7.21834', '107.89988'),
(213, 1, '-7.21780', '107.89974'),
(214, 1, '-7.21711', '107.89950'),
(215, 1, '-7.21666', '107.89936'),
(216, 1, '-7.21538', '107.89931'),
(217, 1, '-7.21437', '107.89924'),
(218, 1, '-7.21349', '107.89919'),
(219, 1, '-7.21235', '107.89911'),
(220, 1, '-7.21172', '107.89904'),
(221, 1, '-7.21073', '107.89890'),
(222, 1, '-7.21022', '107.89892'),
(223, 1, '-7.20908', '107.89914'),
(224, 1, '-7.20865', '107.89907'),
(225, 1, '-7.20833', '107.89944'),
(226, 1, '-7.20787', '107.90016'),
(227, 1, '-7.20698', '107.90158'),
(228, 1, '-7.20670', '107.90199'),
(229, 1, '-7.20661', '107.90216'),
(230, 1, '-7.20623', '107.90259'),
(231, 1, '-7.20604', '107.90276'),
(232, 1, '-7.20566', '107.90314'),
(233, 1, '-7.20535', '107.90344'),
(234, 1, '-7.20526', '107.90351'),
(235, 1, '-7.20504', '107.90356'),
(236, 1, '-7.20455', '107.90353'),
(237, 1, '-7.20398', '107.90346'),
(238, 1, '-7.20361', '107.90343'),
(239, 1, '-7.20306', '107.90350'),
(240, 1, '-7.20285', '107.90350'),
(241, 1, '-7.20265', '107.90343'),
(242, 1, '-7.20232', '107.90329'),
(243, 1, '-7.20210', '107.90321'),
(244, 1, '-7.20178', '107.90311'),
(245, 1, '-7.20149', '107.90302'),
(246, 1, '-7.20117', '107.90292'),
(247, 1, '-7.20082', '107.90282'),
(248, 1, '-7.20063', '107.90279'),
(249, 1, '-7.20052', '107.90280'),
(250, 1, '-7.20020', '107.90285'),
(251, 1, '-7.19936', '107.90301'),
(252, 1, '-7.19872', '107.90312'),
(253, 1, '-7.19874', '107.90361'),
(254, 1, '-7.19880', '107.90423'),
(255, 1, '-7.19896', '107.90488'),
(256, 1, '-7.19904', '107.90536'),
(257, 1, '-7.19909', '107.90564'),
(258, 1, '-7.19944', '107.90561'),
(259, 1, '-7.19948', '107.90596'),
(260, 1, '-7.19957', '107.90658'),
(261, 1, '-7.20009', '107.90652'),
(262, 1, '-7.20001', '107.90621'),
(263, 1, '-7.20017', '107.90621'),
(264, 1, '-7.20029', '107.90626'),
(351, 3, '-7.22883', '107.90668'),
(352, 3, '-7.22895', '107.90749'),
(353, 3, '-7.22920', '107.90821'),
(354, 3, '-7.22922', '107.90853'),
(355, 3, '-7.22912', '107.90977'),
(356, 3, '-7.22875', '107.91092'),
(357, 3, '-7.22850', '107.91124'),
(358, 3, '-7.22819', '107.91127'),
(359, 3, '-7.22678', '107.91113'),
(360, 3, '-7.22624', '107.91107'),
(361, 3, '-7.22489', '107.91099'),
(362, 3, '-7.22441', '107.91096'),
(363, 3, '-7.22366', '107.91093'),
(364, 3, '-7.22303', '107.91086'),
(365, 3, '-7.22199', '107.91084'),
(366, 3, '-7.22051', '107.91077'),
(367, 3, '-7.21998', '107.91072'),
(368, 3, '-7.21949', '107.91065'),
(369, 3, '-7.21887', '107.91034'),
(370, 3, '-7.21774', '107.90938'),
(371, 3, '-7.21725', '107.90893'),
(372, 3, '-7.21701', '107.90876'),
(373, 3, '-7.21672', '107.90871'),
(374, 3, '-7.21641', '107.90881'),
(375, 3, '-7.21586', '107.90893'),
(376, 3, '-7.21589', '107.91489'),
(377, 3, '-7.21553', '107.91473'),
(378, 3, '-7.21536', '107.91460'),
(379, 3, '-7.21467', '107.91390'),
(380, 3, '-7.21389', '107.91298'),
(381, 3, '-7.21361', '107.91261'),
(382, 3, '-7.21280', '107.91089'),
(383, 3, '-7.21264', '107.91029'),
(384, 3, '-7.21247', '107.90991'),
(385, 3, '-7.21218', '107.90929'),
(386, 3, '-7.21192', '107.90868'),
(387, 3, '-7.21185', '107.90847'),
(388, 3, '-7.21152', '107.90689'),
(389, 3, '-7.21144', '107.90637'),
(390, 3, '-7.21145', '107.90617'),
(391, 3, '-7.21149', '107.90590'),
(392, 3, '-7.21154', '107.90490'),
(393, 3, '-7.21160', '107.90323'),
(394, 3, '-7.21161', '107.90230'),
(395, 3, '-7.21173', '107.90224'),
(396, 3, '-7.21176', '107.90213'),
(397, 3, '-7.21167', '107.90202'),
(398, 3, '-7.21154', '107.90204'),
(399, 3, '-7.21148', '107.90215'),
(400, 3, '-7.21057', '107.90220'),
(401, 3, '-7.20903', '107.90226'),
(402, 3, '-7.20870', '107.90233'),
(403, 3, '-7.20801', '107.90266'),
(404, 3, '-7.20743', '107.90288'),
(405, 3, '-7.20719', '107.90291'),
(406, 3, '-7.20716', '107.90286'),
(407, 3, '-7.20710', '107.90281'),
(408, 3, '-7.20703', '107.90282'),
(409, 3, '-7.20697', '107.90288'),
(410, 3, '-7.20698', '107.90297'),
(411, 3, '-7.20704', '107.90302'),
(412, 3, '-7.20687', '107.90344'),
(413, 3, '-7.20674', '107.90381'),
(414, 3, '-7.20657', '107.90455'),
(415, 3, '-7.20647', '107.90481'),
(416, 3, '-7.20638', '107.90494'),
(417, 3, '-7.20628', '107.90509'),
(418, 3, '-7.20613', '107.90527'),
(419, 3, '-7.20598', '107.90534'),
(420, 3, '-7.20586', '107.90538'),
(421, 3, '-7.20510', '107.90538'),
(422, 3, '-7.20413', '107.90533'),
(423, 3, '-7.20365', '107.90526'),
(424, 3, '-7.20282', '107.90524'),
(425, 3, '-7.20129', '107.90534'),
(426, 3, '-7.20047', '107.90545'),
(427, 3, '-7.19987', '107.90555'),
(428, 3, '-7.20001', '107.90621'),
(429, 3, '-7.20016', '107.90621'),
(430, 3, '-7.20028', '107.90626'),
(431, 6, '-7.21992', '107.89814'),
(432, 6, '-7.21953', '107.89994'),
(433, 6, '-7.21942', '107.90022'),
(434, 6, '-7.21966', '107.90030'),
(435, 6, '-7.21963', '107.90042'),
(436, 6, '-7.21984', '107.90146'),
(437, 6, '-7.21855', '107.90158'),
(438, 6, '-7.21679', '107.90174'),
(439, 6, '-7.21678', '107.90191'),
(440, 6, '-7.21577', '107.90199'),
(441, 6, '-7.21571', '107.89932'),
(442, 6, '-7.21676', '107.89938'),
(443, 6, '-7.21772', '107.89973'),
(444, 6, '-7.21802', '107.89977'),
(445, 6, '-7.21956', '107.90024'),
(446, 6, '-7.21967', '107.89978');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `longtud` int(11) NOT NULL,
  `latud` int(11) NOT NULL,
  `zoom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'sinaaa a', 'sintadianti', '321'),
(2, 'siti', 'sitiii', '333'),
(13, 'ty0', 'tyo', '$2y$10$9zTuFZtPt3wKS5VBBTQ7E.fMGp9Aglj6CkDan0NwzIMDALNYz1Gl.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angkot`
--
ALTER TABLE `angkot`
  ADD PRIMARY KEY (`id_trayek`);

--
-- Indeks untuk tabel `fasos`
--
ALTER TABLE `fasos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trayek` (`id_trayek`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `angkot`
--
ALTER TABLE `angkot`
  MODIFY `id_trayek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `fasos`
--
ALTER TABLE `fasos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=447;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_trayek`) REFERENCES `angkot` (`id_trayek`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
