-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:21 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060730_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `ten_donvi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `namsinh` date NOT NULL,
  `nghenghiep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`ten_donvi`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
('M1', 'Nguyễn Sỹ Nam', 1, '0000-00-00', 'Sinh Viên', '0000-00-00', '0000-00-00', 'Hà Nội'),
('M2', 'Lê Đức Huấn', 1, '0000-00-00', 'Sinh Viên', '0000-00-00', '0000-00-00', 'Hà Nội'),
('M3', 'Nguyễn Bảo Khánh', 0, '0000-00-00', 'Sinh Viên', '0000-00-00', '0000-00-00', 'Thái Bình');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`ten_donvi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
