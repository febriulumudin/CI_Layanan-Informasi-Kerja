-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2021 pada 06.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traimp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `keterangan` text NOT NULL,
  `nama_file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `keterangan`, `nama_file`) VALUES
(2, 'gambar 1', 0x313630323732343932315b554e5345545d2e6a7067),
(3, 'gambar 2', 0x313630323732343936366b697373706e672d6970686f6e652d382d6970686f6e652d372d706c75732d6970686f6e652d362d706c75732d6970686f6e652d36732d6170702d6d6f636b75702d736d61727470686f6e652d35616534383563393239613662312e343334333330393331353234393235383937313730362e706e67),
(4, 'aa', 0x3136303639313838313057494e5f32303230313032315f30395f34315f34385f50726f2e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int(25) NOT NULL,
  `id_user` int(25) NOT NULL,
  `judul_keahlian` varchar(255) DEFAULT NULL,
  `thunm` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `bidang_usaha_video` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `keahlian_kursus` text DEFAULT NULL,
  `judul_transkrip` varchar(255) DEFAULT NULL,
  `transkrip` text DEFAULT NULL,
  `file_materi` varchar(255) DEFAULT NULL,
  `harga_kursus` int(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `id_user`, `judul_keahlian`, `thunm`, `video`, `bidang_usaha_video`, `deskripsi`, `keahlian_kursus`, `judul_transkrip`, `transkrip`, `file_materi`, `harga_kursus`, `created_at`, `updated_at`) VALUES
(1, 1, 'HTML Learning', 'learning html.jpg', 'Tutorial HTML.mp4', 'Web Programing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquam fugiat quam aspernatur unde temporibus vitae id eius ut atque incidunt iste, deleniti libero adipisci expedita laudantium reiciendis repellendus. Alias nobis, consequatur quae, dicta minima odio ad possimus eaque provident, eos aspernatur quod beatae tenetur est. Tenetur exercitationem nostrum quaerat ut? Illum nesciunt qui officia vero tempora cupiditate magnam itaque possimus numquam, ad ipsam voluptate. Doloremque minima illum iure beatae vero. Fugiat, labore! Laboriosam porro velit sequi est totam quidem, vel saepe molestias fuga nemo pariatur praesentium consequuntur aliquam voluptatem ea quia reiciendis ratione? Officia repudiandae quia distinctio cum et Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquam fugiat quam aspernatur unde temporibus vitae id eius ut atque incidunt iste, deleniti libero adipisci expedita laudantium reiciendis repellendus. Alias nobis, consequatur quae, dicta minima odio ad possimus eaque provident, eos aspernatur quod beatae tenetur est.', 'HTML, Web Design, Front-End Development', 'What is HTML?', 'HTML ada di sekitar kita. Ini digunakan di situs web, di aplikasi, di perangkat lunak lain, kapan pun teknologi web digunakan. HTML menyediakan saluran untuk konten, kata, gambar, video dan audio, bentuk, pengalaman interaktif. Itu adalah fondasi yang kokoh di mana segala sesuatu dibangun. Manusia berbicara dalam bahasa manusia dengan jutaan kata dan segala macam nuansa. Butuh waktu bertahun-tahun untuk menguasai bahasa manusia. Komputer juga berbicara bahasa. Bahasa pemrograman jauh lebih logis dan konsisten. Internet adalah tempat di mana bahasa manusia bertemu dengan bahasa komputer. Situs web diprogram dan dibaca, ditonton, atau didengarkan. Konten online dikonsumsi oleh orang-orang dan dikonsumsi oleh komputer lain. Kecerdasan buatan adalah tentang mencoba membuat komputer secara cerdas memahami apa yang manusia lakukan. Bagaimana jika di web, kami memiliki cara untuk memastikan bahwa semua komputer yang terlibat memahami komunikasi manusia itu', NULL, 100000, '2020-12-21', '2020-12-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(25) NOT NULL,
  `id_perusahaan` varchar(25) NOT NULL,
  `judul_lowongan` varchar(255) DEFAULT NULL,
  `pengalaman` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `lulusan` varchar(255) DEFAULT NULL,
  `persyaratan` text DEFAULT NULL,
  `gaji` int(255) DEFAULT NULL,
  `status_lowongan` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `id_perusahaan`, `judul_lowongan`, `pengalaman`, `jurusan`, `lulusan`, `persyaratan`, `gaji`, `status_lowongan`, `created_at`, `updated_at`) VALUES
(1, '2', 'IT Join', 'Minimal 0 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 5000000, 't', '2020-10-21', '2020-10-21'),
(2, '2', 'TI Develope', 'Minimal 1 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 4500000, 'y', '2020-10-21', '2020-10-21'),
(3, '2', 'TI Design', 'Minimal 1 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 4500000, 'y', '2020-10-22', '2020-10-22'),
(4, '3', 'Multimedia Fire', 'Minimal 1 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 4800000, 'y', '2020-10-23', '2020-10-23'),
(5, '1', 'Jaringan Komputer Lanjut', 'Minimal 1 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 5000000, 'y', '2020-10-23', '2020-10-23'),
(6, '1', 'Pemrograman Web Lanjut', 'Minimal 1 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 5000000, 'y', '2020-10-24', '2020-10-24'),
(7, '3', 'IT Security Cracker', 'Minimal 1 Tahun', 'Teknik Informatika', 'S1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quis? Veniam iure recusandae illum fugit nemo similique? Atque aliquam, quia cum voluptatum corporis sed id quas ratione rem sunt? Placeat?', 4500000, 'y', '2020-10-25', '2020-10-25'),
(8, '4', 'Tutor / Private Teacher', 'Minimal 1 Tahun ', 'Pendidikan Guru', 'S1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cumque porro neque. Veritatis repudiandae possimus quaerat harum quisquam, corporis cupiditate perspiciatis voluptatum beatae blanditiis. Maxime nobis minima aliquam ut? Exercitationem?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cumque porro neque. Veritatis repudiandae possimus quaerat harum quisquam, corporis cupiditate perspiciatis voluptatum beatae blanditiis. Maxime nobis minima aliquam ut? Exercitationem?', 6000000, 'y', '2020-10-25', '2020-10-25'),
(9, '4', 'IOS Developer', 'Minimal 2 Tahun', 'Mutlimedia', 'S1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cumque porro neque. Veritatis repudiandae possimus quaerat harum quisquam, corporis cupiditate perspiciatis voluptatum beatae blanditiis. Maxime nobis minima aliquam ut? Exercitationem?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cumque porro neque. Veritatis repudiandae possimus quaerat harum quisquam, corporis cupiditate perspiciatis voluptatum beatae blanditiis. Maxime nobis minima aliquam ut? Exercitationem?', 9000000, 'y', '2020-10-26', '2020-10-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(20) NOT NULL,
  `email_per` varchar(255) NOT NULL,
  `password_per` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jumlah_pegawai` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `bidang_usaha` varchar(255) DEFAULT NULL,
  `hari_aktif` varchar(255) DEFAULT NULL,
  `jam_kerja` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `logo_perusahaan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `email_per`, `password_per`, `nama_perusahaan`, `alamat`, `jumlah_pegawai`, `telepon`, `tentang`, `bidang_usaha`, `hari_aktif`, `jam_kerja`, `visi`, `misi`, `logo_perusahaan`) VALUES
(1, 'itsbycom@gmail.com', '123', 'IT Surabaya Computer', 'Surabaya', '30', '08882551', 'IT Surabaya Computer adalah perusahaan yang bergerak dibidang elektronik computer seperti laptop, lcd, cpu, mouse, keyboard, print dan lainnya', 'Elektronik', 'Senin-Jumat', '00.00 - 00.00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus sunt, voluptas consectetur, quia aperiam earum commodi beatae molestias voluptatem neque soluta dicta a quibusdam.', 'logo1.jpg'),
(2, 'bayuit@gmail.com', '123', 'Bayu IT Surabaya', 'Surabaya', '50', '085447', 'Bayu IT Surabaya adalah perusahaan yang bergerak dibidang elektronik computer seperti laptop, lcd, cpu, mouse, keyboard, print dan lainnya', 'Elektronik', 'Senin - Sabtu', '00.00 - 00.00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'logo2.png'),
(3, 'EmailPerusahaan@Email.co', 'pass', 'Coway Company', 'Malang', '30', '08765432123', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptatibus maxime porro rem vero perspiciatis natus ipsam repellendus officia perferendis nihil fugit, consectetur quidem cumque sunt nobis, assumenda consequuntur? Voluptatem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptatibus maxime porro rem vero perspiciatis natus ipsam repellendus officia perferendis nihil fugit, consectetur quidem cumque sunt nobis, assumenda consequuntur? Voluptatem.', 'IT', 'Senin-Jumat', '08.00 - 16.00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus sunt, voluptas consectetur, quia aperiam earum commodi beatae molestias voluptatem neque soluta dicta a quibusdam.', 'logo3.jpg'),
(4, 'superprof@gmail.com', '123', 'Superprof Company', 'Waru, Sidoarjo', '50 <', '087777777777', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero minima quod sequi iusto at quas impedit quo voluptates, qui delectus commodi, similique ab odio neque obcaecati et? Harum, quibusdam soluta? Neque quae ex accusamus, error excepturi molestias voluptas voluptatem fuga enim modi delectus voluptatum? Dolorum sequi minima quibusdam neque hic? Voluptate, et minus eius est perspiciatis, corporis obcaecati a, doloribus quae aliquam dolor deserunt maxime sed repellendus tenetur ad explicabo magni vero blanditiis ducimus perferendis eveniet doloremque laudantium rerum. Quisquam, reprehenderit dignissimos! Reprehenderit a, atque, quaerat rerum natus minima ad, impedit eveniet aspernatur alias nisi consequuntur autem. Asperiores, hic nesciunt?\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Vero minima quod sequi iusto at quas impedit quo voluptates, qui delectus commodi, similique ab odio neque obcaecati et? Harum, quibusdam soluta? Neque quae ex accusamus, error excepturi molestias voluptas voluptatem fuga enim modi delectus voluptatum? Dolorum sequi minima quibusdam neque hic? Voluptate, et minus eius est perspiciatis, corporis obcaecati a, doloribus quae aliquam dolor deserunt maxime sed repellendus tenetur ad explicabo magni vero blanditiis ducimus perferendis eveniet doloremque laudantium rerum. Quisquam, reprehenderit dignissimos! Reprehenderit a, atque, quaerat rerum natus minima ad, impedit eveniet aspernatur alias nisi consequuntur autem. Asperiores, hic nesciunt?', 'Guru / Tutor', 'Senin-Sabtu', '08.00 - 16.00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus sunt, voluptas consectetur, quia aperiam earum commodi beatae molestias voluptatem neque soluta dicta a quibusdam.', 'logo4.png'),
(5, 'juniorprof@gmail.com', '123', 'JuniorProf ', 'Malang, Jawa Timur', '90', '08512000000', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero minima quod sequi iusto at quas impedit quo voluptates, qui delectus commodi, similique ab odio neque obcaecati et? Harum, quibusdam soluta? Neque quae ex accusamus, error excepturi molestias voluptas voluptatem fuga enim modi delectus voluptatum? Dolorum sequi minima quibusdam neque hic? Voluptate, et minus eius est perspiciatis, corporis obcaecati a, doloribus quae aliquam dolor deserunt maxime sed repellendus tenetur ad explicabo magni vero blanditiis ducimus perferendis eveniet doloremque laudantium rerum. Quisquam, reprehenderit dignissimos! Reprehenderit a, atque, quaerat rerum natus minima ad, impedit eveniet aspernatur alias nisi consequuntur autem. Asperiores, hic nesciunt?\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Vero minima quod sequi iusto at quas impedit quo voluptates, qui delectus commodi, similique ab odio neque obcaecati et? Harum, quibusdam soluta? Neque quae ex accusamus, error excepturi molestias voluptas voluptatem fuga enim modi delectus voluptatum? Dolorum sequi minima quibusdam neque hic? Voluptate, et minus eius est perspiciatis, corporis obcaecati a, doloribus quae aliquam dolor deserunt maxime sed repellendus tenetur ad explicabo magni vero blanditiis ducimus perferendis eveniet doloremque laudantium rerum. Quisquam, reprehenderit dignissimos! Reprehenderit a, atque, quaerat rerum natus minima ad, impedit eveniet aspernatur alias nisi consequuntur autem. Asperiores, hic nesciunt?', 'Guru / Tutor', 'Senin-Sabtu', '07.00 - 15.00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus sunt, voluptas consectetur, quia aperiam earum commodi beatae molestias voluptatem neque soluta dicta a quibusdam.', 'logo4.png'),
(6, 'Megabank@yahoo.com', '123', 'Bank Mega Tbk', 'Jakarta', '120', '0261 44454', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, temporibus aliquid non delectus neque accusantium molestiae unde eius adipisci, nemo quam sit voluptatum impedit magnam modi eligendi quasi est exercitationem!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, temporibus aliquid non delectus neque accusantium molestiae unde eius adipisci, nemo quam sit voluptatum impedit magnam modi eligendi quasi est exercitationem!', 'Keuangan', 'Senin-Minggu', '07.00 - 16.00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum sit quia amet iusto repellendus voluptatibus eligendi saepe ipsum impedit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus sunt, voluptas consectetur, quia aperiam earum commodi beatae molestias voluptatem neque soluta dicta a quibusdam.', 'logo5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `level` int(3) NOT NULL,
  `jen_kel` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_pernikahan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `gaji` int(25) DEFAULT NULL,
  `status_pekerjaan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `password`, `notelp`, `level`, `jen_kel`, `tempat_lahir`, `tgl_lahir`, `status_pernikahan`, `alamat`, `gaji`, `status_pekerjaan`, `foto`) VALUES
(1, 'Hendrik', 'Rohmawan', 'hendrikrohmawan@gmail.com', '123', '08512345678', 2, 'L', 'Sidoarjo', '1999-06-15', 'Menikah', 'Sidoarjo', 5000000, 'Mahasiswa Universitas Negeri Surabaya', 'profil1.png'),
(2, 'Admin', 'Linker', 'admin', 'admin', '0890000000', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profil2.png'),
(3, 'Bayu', 'Laksana', 'bayulaksana@gmail.com', '123', '089568888', 2, 'L', 'Surabaya', '2020-10-10', 'Lajang', 'Surabaya', 0, 'Mahasiswa Universitas Negeri Surabaya', 'profil3.png'),
(4, 'Febri', 'Ulumudin', 'febriulumudin@gmail.com', '123', '0815424475584', 2, 'L', 'Ponorogo', '1999-05-15', 'Lajang', 'Ponorogo', NULL, 'Mahasiswa Universitas Negeri Surabaya', 'profil4.png'),
(5, 'dodik', 'dermawan', 'dodikdermawan@unesa.ac.id', '123', '087876', 2, 'P', 'Suarabaya', '0000-00-00', 'Lajang', 'SURABAYA', 10000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kemampuan`
--

CREATE TABLE `user_kemampuan` (
  `id_kemampuan` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `jenis_kemampuan` varchar(255) DEFAULT NULL,
  `aplikasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_kemampuan`
--

INSERT INTO `user_kemampuan` (`id_kemampuan`, `id_user`, `jenis_kemampuan`, `aplikasi`) VALUES
(1, 1, 'Komputerisasi', 'Microsoft Office Word, Excel, Zuma, Access & Outlook'),
(2, 1, 'Desain Grafis Website', 'Microsoft Office Word, Excel, Zuma, Access & Outlook'),
(3, 1, 'Jaringan Server', 'Microsoft Office Word, Excel, Zuma, Access & Outlook');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pendidikan`
--

CREATE TABLE `user_pendidikan` (
  `id_pendidikan` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `tingkat_jenjang` varchar(255) DEFAULT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `dari_tahun` int(255) DEFAULT NULL,
  `sampai_tahun` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_pendidikan`
--

INSERT INTO `user_pendidikan` (`id_pendidikan`, `id_user`, `tingkat_jenjang`, `nama_tempat`, `dari_tahun`, `sampai_tahun`) VALUES
(1, 1, 'SD', 'SDN 1 Ketintang', 2003, 2009),
(2, 1, 'SMP', 'SMPN 2 Ketintang, Surabaya', 2009, 2012),
(3, 1, 'SMA', 'SMKN 2 Ketintang, Surabaya', 2012, 2015),
(4, 1, 'PERGURUAN TINGGI', 'Universitas Negeri Surabaya', 2015, 2019),
(7, 3, 'SD', NULL, NULL, NULL),
(8, 3, 'SMP', NULL, NULL, NULL),
(9, 3, 'SMA', NULL, NULL, NULL),
(10, 3, 'PERGURUAN TINGGI', NULL, NULL, NULL),
(11, 4, 'SD', NULL, NULL, NULL),
(12, 4, 'SMP', NULL, NULL, NULL),
(13, 4, 'SMA', NULL, NULL, NULL),
(14, 4, 'PERGURUAN TINGGI', NULL, NULL, NULL),
(15, 5, 'SD', NULL, NULL, NULL),
(16, 5, 'SMP', NULL, NULL, NULL),
(17, 5, 'SMA', NULL, NULL, NULL),
(18, 5, 'PERGURUAN TINGGI', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pengalaman_kerja`
--

CREATE TABLE `user_pengalaman_kerja` (
  `id_pengalaman` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_per` varchar(255) DEFAULT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `dari_tahun` int(255) DEFAULT NULL,
  `sampai_tahun` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_pengalaman_kerja`
--

INSERT INTO `user_pengalaman_kerja` (`id_pengalaman`, `id_user`, `nama_per`, `bagian`, `dari_tahun`, `sampai_tahun`) VALUES
(1, 1, 'PT Suryajana', 'Staf Management', 2018, 2019),
(2, 1, 'PT Suryajana', 'Staf Administrasi', 2019, 2020),
(3, 1, 'PT Suryajana', 'Direktor Utama', 2020, 2023),
(4, 1, 'PT Suryajana ', 'Asisten Manager', 2023, 2025);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_kemampuan`
--
ALTER TABLE `user_kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`);

--
-- Indeks untuk tabel `user_pendidikan`
--
ALTER TABLE `user_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `user_pengalaman_kerja`
--
ALTER TABLE `user_pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_kemampuan`
--
ALTER TABLE `user_kemampuan`
  MODIFY `id_kemampuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_pendidikan`
--
ALTER TABLE `user_pendidikan`
  MODIFY `id_pendidikan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_pengalaman_kerja`
--
ALTER TABLE `user_pengalaman_kerja`
  MODIFY `id_pengalaman` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
