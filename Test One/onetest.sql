-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 15, 2023 lúc 08:56 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onetest`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoatdong`
--

CREATE TABLE `hoatdong` (
  `MaHD` int(11) NOT NULL,
  `TenHD` varchar(255) NOT NULL,
  `MoTaHD` varchar(255) NOT NULL,
  `NgayGioBD` datetime NOT NULL,
  `NgayGioKT` datetime NOT NULL,
  `SLToiThieuYC` int(11) NOT NULL,
  `SLToiDaYC` int(11) NOT NULL,
  `ThoiHanDK` date NOT NULL,
  `TrangThai` varchar(255) NOT NULL,
  `MaTV` int(11) NOT NULL,
  `LyDoHuyHD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoatdong`
--

INSERT INTO `hoatdong` (`MaHD`, `TenHD`, `MoTaHD`, `NgayGioBD`, `NgayGioKT`, `SLToiThieuYC`, `SLToiDaYC`, `ThoiHanDK`, `TrangThai`, `MaTV`, `LyDoHuyHD`) VALUES
(1, 'Mùa hè xanhhhhh 222', 'Mô tả Mùa hè xanhhhhhh2222', '2023-02-10 08:43:08', '2023-02-14 08:43:08', 10, 20, '2023-02-09', 'Đang mời đăng kí', 1, 'hiiiiiiiii'),
(2, 'Tình nguyện mùa đông', 'Mô tả tình nguyện mùa đông', '2023-02-02 08:53:11', '2023-02-16 08:53:11', 10, 20, '2023-02-01', 'Đang mời đăng kí', 3, NULL),
(3, 'Tình nguyện mùa hè :))', 'Mô tả tình nguyện hè', '2023-02-04 08:53:11', '2023-02-14 08:53:11', 10, 20, '2023-02-02', 'Đang mời đăng kí', 3, NULL),
(5, 'cdsc', 'dscsdsddsc', '2023-01-31 17:30:00', '2023-02-06 17:30:00', 10, 20, '2023-02-15', '', 1, ''),
(6, 'cdsc', 'dscsdsddsc', '2023-01-31 17:30:00', '2023-02-06 17:30:00', 10, 20, '2023-02-15', '', 1, ''),
(7, 'cdsc', 'dscsdsddsc', '2023-01-31 17:30:00', '2023-02-06 17:30:00', 10, 20, '2023-02-15', '', 1, ''),
(8, 'cdsc', 'dscsdsddsc', '2023-01-31 17:30:00', '2023-02-06 17:30:00', 10, 20, '2023-02-15', '', 1, ''),
(9, 'cdsc', 'dscsdsddsc', '2023-01-31 17:30:00', '2023-02-06 17:30:00', 10, 20, '2023-02-15', '', 1, ''),
(10, 'cdsc', 'dscsdsddsc', '2023-01-31 17:30:00', '2023-02-06 17:30:00', 10, 20, '2023-02-15', '', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thamgia`
--

CREATE TABLE `thamgia` (
  `MaTV` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `NgayGioDangKy` datetime NOT NULL,
  `DiemTruongDoan` int(11) NOT NULL,
  `DiemTieuChi1` int(11) NOT NULL,
  `DiemTieuChi2` int(11) NOT NULL,
  `DiemTieuChi3` int(11) NOT NULL,
  `NhanXetKhac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thamgia`
--

INSERT INTO `thamgia` (`MaTV`, `MaHD`, `NgayGioDangKy`, `DiemTruongDoan`, `DiemTieuChi1`, `DiemTieuChi2`, `DiemTieuChi3`, `NhanXetKhac`) VALUES
(1, 1, '2023-02-14 09:01:00', 9, 9, 9, 9, 'nhận xét 1'),
(2, 1, '2023-02-14 09:02:04', 8, 8, 9, 7, 'nhận xét hai'),
(3, 2, '2023-02-14 09:02:40', 6, 8, 9, 8, 'nhận xét ba');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTV` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChiEmail` varchar(255) NOT NULL,
  `SoDienThoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChiEmail`, `SoDienThoai`) VALUES
(1, 'Nguyễn Văn Mạnh', 1, '2001-08-29', 'nguyenvanmanh2001it1@gmail.com', '0971404372'),
(2, 'Nguyễn Phước Đại Toàn', 1, '2002-02-02', 'daitoandut@gmail.com', '0123632145'),
(3, 'Lê Phi Duy', 1, '2002-01-01', 'lephiduy@gmail.com', '0123645632');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaTV` (`MaTV`);

--
-- Chỉ mục cho bảng `thamgia`
--
ALTER TABLE `thamgia`
  ADD KEY `MaTV` (`MaTV`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD CONSTRAINT `hoatdong_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

--
-- Các ràng buộc cho bảng `thamgia`
--
ALTER TABLE `thamgia`
  ADD CONSTRAINT `thamgia_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`),
  ADD CONSTRAINT `thamgia_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoatdong` (`MaHD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
