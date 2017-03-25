-- phpMyAdmin SQL Dump
-- version 4.7.0-rc1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 24, 2017 lúc 11:46 AM
-- Phiên bản máy phục vụ: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- Phiên bản PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CHUCVU`
--

CREATE TABLE `CHUCVU` (
  `MACV` int(11) NOT NULL,
  `TENCV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LUONG`
--

CREATE TABLE `LUONG` (
  `BACLUONG` int(11) NOT NULL,
  `LUONGCOBAN` int(11) NOT NULL,
  `HESOLUONGPHUCAP` int(11) NOT NULL,
  `HESOLUONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `NHANVIEN`
--

CREATE TABLE `NHANVIEN` (
  `MANV` int(11) NOT NULL,
  `HOTEN` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` int(11) NOT NULL,
  `DANTOC` int(11) NOT NULL,
  `SODIENTHOAI` int(11) NOT NULL,
  `MACV` int(11) NOT NULL,
  `MATDHV` int(11) NOT NULL,
  `MAPB` int(11) NOT NULL,
  `BACLUONG` int(11) NOT NULL,
  `QUEQUAN` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PHONGBAN`
--

CREATE TABLE `PHONGBAN` (
  `MAPB` int(11) NOT NULL,
  `TENPB` int(50) NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDTPHONGBAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `THOIGIANCONGTAC`
--

CREATE TABLE `THOIGIANCONGTAC` (
  `MANV` int(11) NOT NULL,
  `MACV` int(11) NOT NULL,
  `NGAYNHAMCHUC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TRINHDOHOCVAN`
--

CREATE TABLE `TRINHDOHOCVAN` (
  `MATDHV` int(11) NOT NULL,
  `TENTRINHDO` int(11) NOT NULL,
  `CHUYENNGANH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `CHUCVU`
--
ALTER TABLE `CHUCVU`
  ADD PRIMARY KEY (`MACV`);

--
-- Chỉ mục cho bảng `LUONG`
--
ALTER TABLE `LUONG`
  ADD PRIMARY KEY (`BACLUONG`);

--
-- Chỉ mục cho bảng `NHANVIEN`
--
ALTER TABLE `NHANVIEN`
  ADD PRIMARY KEY (`MANV`);

--
-- Chỉ mục cho bảng `PHONGBAN`
--
ALTER TABLE `PHONGBAN`
  ADD PRIMARY KEY (`MAPB`);

--
-- Chỉ mục cho bảng `THOIGIANCONGTAC`
--
ALTER TABLE `THOIGIANCONGTAC`
  ADD PRIMARY KEY (`MANV`,`MACV`);

--
-- Chỉ mục cho bảng `TRINHDOHOCVAN`
--
ALTER TABLE `TRINHDOHOCVAN`
  ADD PRIMARY KEY (`MATDHV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
