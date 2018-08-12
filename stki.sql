-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2018 at 10:36 PM
-- Server version: 10.1.29-MariaDB-6
-- PHP Version: 7.2.5-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stki`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `propinsi` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `telp_kantor` varchar(15) DEFAULT NULL,
  `alamat_rumah` varchar(100) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tahun_masuk` varchar(4) DEFAULT NULL,
  `thn_lulus` varchar(10) DEFAULT NULL,
  `fakultas` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `ners` enum('0','1') DEFAULT NULL,
  `organisasi_mahasiswa` varchar(10) DEFAULT NULL,
  `sekolah_lagi` varchar(50) DEFAULT NULL,
  `lokasi_sekolah` varchar(100) DEFAULT NULL,
  `alasan_sekolah` varchar(100) DEFAULT NULL,
  `target_kerja` varchar(100) DEFAULT NULL,
  `ipk` varchar(5) DEFAULT NULL,
  `tempat_kerja` varchar(100) DEFAULT NULL,
  `jenis_instansi` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `thn_kerja` varchar(20) DEFAULT NULL,
  `proses_kerja` varchar(100) DEFAULT NULL,
  `referensi_kerja` varchar(100) DEFAULT NULL,
  `harapan_belajar` varchar(100) DEFAULT NULL,
  `rate_kerja` varchar(100) DEFAULT NULL,
  `pertimbangan_kerja` varchar(100) DEFAULT NULL,
  `pendapatan` varchar(100) DEFAULT NULL,
  `hubungan_kerja` varchar(100) DEFAULT NULL,
  `kebutuhan_kerja` varchar(100) DEFAULT NULL,
  `ganti_pekerjaan` varchar(100) DEFAULT NULL,
  `ingin_kerja` varchar(100) DEFAULT NULL,
  `relevan_kerja` varchar(50) DEFAULT NULL,
  `saran` text,
  `pengalaman_kelas` varchar(5) DEFAULT NULL,
  `pengalaman_lab` varchar(5) DEFAULT NULL,
  `pengalaman_masyarakat` varchar(5) DEFAULT NULL,
  `pengalaman_magang` varchar(5) DEFAULT NULL,
  `pengalaman_organisasi` varchar(5) DEFAULT NULL,
  `pengalaman_kampus` varchar(5) DEFAULT NULL,
  `belajar_mandiri` varchar(5) DEFAULT NULL,
  `mampu_bersaing` varchar(5) DEFAULT NULL,
  `pengetahuan_umum` varchar(5) DEFAULT NULL,
  `bhs_inggris` varchar(5) DEFAULT NULL,
  `komputer` varchar(5) DEFAULT NULL,
  `penelitian` varchar(5) DEFAULT NULL,
  `kerjasama_tim` varchar(5) DEFAULT NULL,
  `lisan` varchar(5) DEFAULT NULL,
  `tertulis` varchar(5) DEFAULT NULL,
  `pemberdayaan` varchar(5) DEFAULT NULL,
  `teoritis` varchar(5) DEFAULT NULL,
  `praktis` varchar(5) DEFAULT NULL,
  `organisasi` varchar(5) DEFAULT NULL,
  `leadership` varchar(5) DEFAULT NULL,
  `p_pengetahuan_umum` varchar(5) DEFAULT NULL,
  `p_bhs_inggris` varchar(5) DEFAULT NULL,
  `p_komputer` varchar(5) DEFAULT NULL,
  `p_penelitian` varchar(5) DEFAULT NULL,
  `p_kerjasama_tim` varchar(5) DEFAULT NULL,
  `p_lisan` varchar(5) DEFAULT NULL,
  `p_tertulis` varchar(5) DEFAULT NULL,
  `p_masyarakat` varchar(5) DEFAULT NULL,
  `p_teoritis` varchar(5) DEFAULT NULL,
  `p_praktis` varchar(5) DEFAULT NULL,
  `p_organisasi` varchar(5) DEFAULT NULL,
  `p_leadership` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `jenis_kelamin`, `asal_sekolah`, `kabupaten`, `propinsi`, `tempat_lahir`, `tgl_lahir`, `alamat_kantor`, `telp_kantor`, `alamat_rumah`, `no_hp`, `email`, `tahun_masuk`, `thn_lulus`, `fakultas`, `prodi`, `ners`, `organisasi_mahasiswa`, `sekolah_lagi`, `lokasi_sekolah`, `alasan_sekolah`, `target_kerja`, `ipk`, `tempat_kerja`, `jenis_instansi`, `jabatan`, `thn_kerja`, `proses_kerja`, `referensi_kerja`, `harapan_belajar`, `rate_kerja`, `pertimbangan_kerja`, `pendapatan`, `hubungan_kerja`, `kebutuhan_kerja`, `ganti_pekerjaan`, `ingin_kerja`, `relevan_kerja`, `saran`, `pengalaman_kelas`, `pengalaman_lab`, `pengalaman_masyarakat`, `pengalaman_magang`, `pengalaman_organisasi`, `pengalaman_kampus`, `belajar_mandiri`, `mampu_bersaing`, `pengetahuan_umum`, `bhs_inggris`, `komputer`, `penelitian`, `kerjasama_tim`, `lisan`, `tertulis`, `pemberdayaan`, `teoritis`, `praktis`, `organisasi`, `leadership`, `p_pengetahuan_umum`, `p_bhs_inggris`, `p_komputer`, `p_penelitian`, `p_kerjasama_tim`, `p_lisan`, `p_tertulis`, `p_masyarakat`, `p_teoritis`, `p_praktis`, `p_organisasi`, `p_leadership`) VALUES
(45, 'hjv', 'L', 'bu', 'Bulukumba', 'rge', '3g3', '2016-04-09', 'JALAN JAMBU', 'rgd', 'JALAN JAMBUUUU', '8668', 'detmefsm@gmeds.vom', '1997', '9 dan 2001', 'Hukum', 'Hukum', '0', '0', '1', 'dimana', 'Perlu untuk bekerja', 'Pemerintah (Daerah)', '4.0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aef', 'Swasta (Jasa)', 'Pasif (Ditawari Pekerjaan)', '2016-04-09', 'Pengumuman di Kampus', 'Sangat sesuai dengan harapan', 'Puas', 'Sesuai dengan harapan', 'Sesuai Bidang Keilmuan', '>Rp. 1.000.000-Rp. 3.000.000', 'Tidak', 'Tinggi', '2 Kali', 'Tidak', 'Ya', 'adwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
