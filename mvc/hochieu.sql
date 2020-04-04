-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2020 lúc 07:34 AM
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
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `name`, `email`, `password`) VALUES
(1, 'tuấn', 'tâm', 'tam', 'tamdeptrai123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congdan`
--

CREATE TABLE `congdan` (
  `id_congdan` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dantoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongiao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghenghiep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutru`
--

CREATE TABLE `luutru` (
  `id_luutru` int(10) UNSIGNED NOT NULL,
  `id_hochieu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatky`
--

CREATE TABLE `nhatky` (
  `id_nhatky` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `id_hochieu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `congdan`
--
ALTER TABLE `congdan`
  ADD PRIMARY KEY (`id_congdan`);

--
-- Chỉ mục cho bảng `hochieu`
--
ALTER TABLE `hochieu`
  ADD PRIMARY KEY (`id_hochieu`),
  ADD KEY `id_congdan` (`id_congdan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `luutru`
--
ALTER TABLE `luutru`
  ADD PRIMARY KEY (`id_luutru`),
  ADD KEY `id_hochieu` (`id_hochieu`);

--
-- Chỉ mục cho bảng `nhatky`
--
ALTER TABLE `nhatky`
  ADD PRIMARY KEY (`id_nhatky`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_hochieu` (`id_hochieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `congdan`
--
ALTER TABLE `congdan`
  MODIFY `id_congdan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hochieu`
--
ALTER TABLE `hochieu`
  MODIFY `id_hochieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `luutru`
--
ALTER TABLE `luutru`
  MODIFY `id_luutru` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhatky`
--
ALTER TABLE `nhatky`
  MODIFY `id_nhatky` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hochieu`
--
ALTER TABLE `hochieu`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `fk_congdan` FOREIGN KEY (`id_congdan`) REFERENCES `congdan` (`id_congdan`);

--
-- Các ràng buộc cho bảng `luutru`
--
ALTER TABLE `luutru`
  ADD CONSTRAINT `fk_hochieu` FOREIGN KEY (`id_hochieu`) REFERENCES `hochieu` (`id_hochieu`);

--
-- Các ràng buộc cho bảng `nhatky`
--
ALTER TABLE `nhatky`
  ADD CONSTRAINT `fk_admin2` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `fk_hochieu2` FOREIGN KEY (`id_hochieu`) REFERENCES `hochieu` (`id_hochieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
