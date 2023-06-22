-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 18.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umuslim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` date NOT NULL,
  `level` enum('sadmin','admin','user','client') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `last_login`, `level`) VALUES
(4, 'anang', '2326af735beba37279d41c7f0ab62e73', '0000-00-00', 'admin'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-06-08', 'user'),
(6, 'anang', '2326af735beba37279d41c7f0ab62e73', '0000-00-00', 'client');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_peg` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_peg` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `hp` varchar(16) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `st_kawin` enum('Sudah','Belum') NOT NULL,
  `st_peg` enum('Tetap','Tidak Tetap') NOT NULL,
  `jabatan` enum('Ketua','Wak.ketua','Sekretaris','Staf','Bendahara') NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `gaji` double NOT NULL,
  `tunjangan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_peg`, `nik`, `nama_peg`, `jenis_kelamin`, `hp`, `desa`, `kec`, `kab`, `st_kawin`, `st_peg`, `jabatan`, `bagian`, `gaji`, `tunjangan`) VALUES
(1, '1111122222', 'Ramadan Ananda Herawan', 'L', '081122334455', 'Paya Cut', 'Peusangan ', 'Bireuen ', 'Belum', 'Tetap', 'Bendahara', 'Biro Keuangan', 1000000, 500000),
(2, '1111133333', 'Anang Kurniawan', 'L', '08987654321', 'Ulee Jalan', 'Peusangan Selatan', 'Bireuen', 'Belum', 'Tetap', 'Staf', 'Humas', 2000000, 1000000),
(3, '11111444444', 'Randa Mah Bengi', 'L', '08123456789', 'Uring', 'Bukit', 'Bener Meriah', 'Belum', 'Tetap', 'Sekretaris', 'Biro Akademik', 300000, 150000),
(4, '1111155555', 'Rizki Kusiara', 'L', '08123459876', 'Blang Gelee', 'Bebesen', 'Aceh Tengah', 'Sudah', 'Tidak Tetap', 'Wak.ketua', 'Biro umum', 4000000, 200000),
(5, '1111166666', 'Perempuan', 'P', '08987612345', 'Pulo Iboih', 'Jangka', 'Bireuen', 'Sudah', 'Tidak Tetap', 'Ketua', 'Rektorat', 5000000, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Informatika'),
(2, 'Teknik'),
(3, 'Bahasa Inggris'),
(4, 'Bahasa Indonesia'),
(5, 'Agribisnis'),
(6, 'Sistem Informasi'),
(7, 'Pertanian'),
(8, 'Geografi'),
(9, 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `nik` int(16) NOT NULL,
  `suku` varchar(100) NOT NULL,
  `tpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Katolik','Kristen','Budha','Hindu','Konghucu') NOT NULL,
  `tinggi` int(3) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `rt` int(25) NOT NULL,
  `rw` int(25) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `telepon` int(10) NOT NULL,
  `hp` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('Kawin','Belum Kawin') NOT NULL,
  `pendidikan_terakhir` enum('SMA','SMK','MA','D1','D2','D3','S1') NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_sekolah` int(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tempat_ijazah` varchar(100) NOT NULL,
  `tgl_ijazah` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nik_ayah` int(16) NOT NULL,
  `hubungan_ayah` enum('Ayah Kandung','Ayah Tiri') NOT NULL,
  `tpt_lahir_ayah` varchar(100) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `status_ayah` enum('Masih Hidup','Almarhum') NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `no_hp_ayah` int(12) NOT NULL,
  `telepon_ayah` int(10) NOT NULL,
  `alamat_rumah_ayah` varchar(100) NOT NULL,
  `alamat_kantor_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nik_ibu` int(16) NOT NULL,
  `hubungan_ibu` enum('IBU KANDUNG','IBU TIRI') NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `status_ibu` enum('MASIH HIDUP','ALMARHUM') NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `no_hp_ibu` int(12) NOT NULL,
  `telepon_ibu` int(10) NOT NULL,
  `alamat_rumah_ibu` varchar(50) NOT NULL,
  `alamat_kantor_ibu` varchar(50) NOT NULL,
  `id_prodi_1` int(11) NOT NULL,
  `id_prodi_2` int(11) NOT NULL,
  `kelas` enum('REGULAR','LANJUTAN','PINDAHAN','NON REGULAR') NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `transkrip_nilai` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `k_kip` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id_registrasi`, `namaLengkap`, `nik`, `suku`, `tpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `tinggi`, `jalan`, `dusun`, `rt`, `rw`, `kecamatan`, `kelurahan`, `kode_pos`, `telepon`, `hp`, `email`, `status`, `pendidikan_terakhir`, `nisn`, `nama_sekolah`, `jurusan`, `no_ijazah`, `tempat_ijazah`, `tgl_ijazah`, `nama_ayah`, `nik_ayah`, `hubungan_ayah`, `tpt_lahir_ayah`, `tgl_lahir_ayah`, `status_ayah`, `pekerjaan_ayah`, `no_hp_ayah`, `telepon_ayah`, `alamat_rumah_ayah`, `alamat_kantor_ayah`, `nama_ibu`, `nik_ibu`, `hubungan_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `status_ibu`, `pekerjaan_ibu`, `no_hp_ibu`, `telepon_ibu`, `alamat_rumah_ibu`, `alamat_kantor_ibu`, `id_prodi_1`, `id_prodi_2`, `kelas`, `ijazah`, `foto`, `transkrip_nilai`, `kk`, `k_kip`, `username`, `password`, `level`) VALUES
(28, 'Anang Kurniawan', 0, '', '', '0000-00-00', 'Laki-Laki', '', 0, '              ', '', 0, 0, '', '', 24253, 2147483647, 0, 'anangkurniawan2727@gmail.com', '', 'SMA', 0, 0, '', '', '', '0000-00-00', '', 0, 'Ayah Tiri', '', '0000-00-00', 'Almarhum', '', 0, 0, 'Jalan simpang Tanjong dusun TM ALI', 'Jalan simpang Tanjong dusun TM ALI', '', 0, 'IBU TIRI', '', '0000-00-00', '', '', 0, 0, '              ', '              ', 1, 1, '', '', '', '', '', '', 'anang', 'anang', 'client');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emaill` varchar(20) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_peg`);

--
-- Indeks untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
