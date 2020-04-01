-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2020 lúc 09:26 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hochieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hochieu`
--

CREATE TABLE `hochieu` (
  `id_hochieu` int(10) UNSIGNED NOT NULL,
  `id_congdan` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dantoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongiao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `dc_thuong_tru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanhuyen_thuongtru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dc_tam_tru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanhuyen_tamtru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten_cha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_cha` date NOT NULL,
  `sdt_cha` int(11) NOT NULL,
  `hoten_me` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_me` date NOT NULL,
  `sdt_me` int(11) NOT NULL,
  `hansudung` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hochieu`
--
ALTER TABLE `hochieu`
  ADD PRIMARY KEY (`id_hochieu`),
  ADD KEY `id_congdan` (`id_congdan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hochieu`
--
ALTER TABLE `hochieu`
  MODIFY `id_hochieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hochieu`
--
ALTER TABLE `hochieu`
  ADD CONSTRAINT `fk_luutru` FOREIGN KEY (`id_hochieu`) REFERENCES `luutru` (`id_hochieu`),
  ADD CONSTRAINT `fk_nhatky` FOREIGN KEY (`id_hochieu`) REFERENCES `nhatky` (`id_hochieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
