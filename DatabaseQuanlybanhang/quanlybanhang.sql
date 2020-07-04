-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 06:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSHH` varchar(5) NOT NULL,
  `SoLuong` tinyint(4) NOT NULL,
  `GiaDatHang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`) VALUES
('1', 'B01', 6, 10),
('1', 'B02', 1, 10),
('1', 'B08', 1, 25000),
('2', 'B003', 1, 15000),
('2', 'B01', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSKH` varchar(5) DEFAULT NULL,
  `MSNV` varchar(5) DEFAULT NULL,
  `NgayDH` datetime NOT NULL,
  `TrangThai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `TrangThai`) VALUES
('1', 'ZH4pK', 'nv002', '2020-06-28 11:05:24', 'DaDuyet'),
('2', 'L6py8', 'nv002', '2020-07-03 06:45:02', 'DaDuyet');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MSHH` varchar(5) NOT NULL,
  `TenHH` varchar(50) DEFAULT NULL,
  `IP` varchar(50) NOT NULL,
  `SoLuong` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MSHH`, `TenHH`, `IP`, `SoLuong`) VALUES
('B003', 'Bánh Quy Kem 1', '::1', 1),
('B01', 'Bánh Bông Lan', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` varchar(5) NOT NULL,
  `TenHH` varchar(50) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` tinyint(4) NOT NULL,
  `MaNhom` varchar(5) DEFAULT NULL,
  `Hinh` varchar(50) NOT NULL,
  `MoTaHH` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia`, `SoLuongHang`, `MaNhom`, `Hinh`, `MoTaHH`) VALUES
('B001', 'Bánh Kem', 100000, 50, '0005', 'pexels-photo-4686817.jpeg', 'Bánh kem dâu'),
('B002', 'Bánh Kem 02', 50000, 30, '0005', 'pexels-photo-434243.jpeg', 'Bánh kem loại 2'),
('B003', 'Bánh Quy Kem 1', 15000, 100, '00002', 'pexels-photo-4552977.jpeg', 'Bánh quy kem loại 1, thơm ngon.'),
('B004', 'Bánh mì ngọt 1', 5000, 60, '0124', 'download (1).jpg', 'Bánh mì ngọt loại 1.'),
('B006', 'Bánh Chocolate ', 10000, 100, '00004', 'brownie-dessert-cake-sweet-45202.jpeg', 'Bánh chocolate loại 1'),
('B007', 'Bánh Chocolate 2', 50000, 100, '00004', 'pexels-photo-132694.jpeg', 'Bánh Chocolate loại 2'),
('B01', 'Bánh Bông Lan', 10, 50, '00001', 'banhbonglan.jpg', 'Đây là bánh bông lan'),
('B02', 'Bánh bông cúc', 10, 10, 'Chọn ', 'banhbongcuc.jpg', 'Đây là bánh bông cúc'),
('B05', 'Bánh Mì', 0, 30, '00003', 'banhmi-2678-1585830175.png', 'Đây là bánh mì, hình không phải bánh mì nhưng này là bán bánh mì'),
('B06', 'Bánh Mì Tươi', 1, 50, '00003', 'recipe19711-636283930080207292.jpg', 'Bánh mì tươi có hình'),
('B07', 'Bánh Dorayaki', 10000, 100, 'Chọn ', 'dorayaki.jpg', 'Đây là bánh dorayaki. Bánh mì'),
('B08', 'Bánh Tét', 25000, 127, '7', 'banhtet.jpg', 'Đây là bánh Tét truyền thống của người Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(5) NOT NULL,
  `HoTenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `DiaChi`, `SoDienThoai`) VALUES
('40bQE', 'Ngô Minh Trung', 'Kiến Thành', '0986775750'),
('L6py8', 'Ngô Trung', 'Kiến Thành', '0986775750');

-- --------------------------------------------------------

--
-- Table structure for table `khachhangdangnhap`
--

CREATE TABLE `khachhangdangnhap` (
  `usernamekh` varchar(50) NOT NULL,
  `passwordkh` varchar(50) NOT NULL,
  `MSKH` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhangdangnhap`
--

INSERT INTO `khachhangdangnhap` (`usernamekh`, `passwordkh`, `MSKH`) VALUES
('ngominhtrung', 'bea18eb2b6743eef10d0698ed22b9eab', '40bQE'),
('ngotrung', '3731a8cca88f6c26bc10a6ae1854ec7c', 'L6py8');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(5) NOT NULL,
  `HoTenNV` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
('nv001', 'My Admin', 'admin', NULL, '0986775750'),
('nv002', 'Ngô Minh Trung', 'Quản lý', 'Kiến Thành', '0986775750');

-- --------------------------------------------------------

--
-- Table structure for table `nhanviendangnhap`
--

CREATE TABLE `nhanviendangnhap` (
  `usernamenv` varchar(50) NOT NULL,
  `passwordnv` varchar(50) NOT NULL,
  `MSNV` varchar(5) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanviendangnhap`
--

INSERT INTO `nhanviendangnhap` (`usernamenv`, `passwordnv`, `MSNV`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'nv001', 'admin'),
('ngominhtrung', 'bea18eb2b6743eef10d0698ed22b9eab', 'nv002', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `MaNhom` varchar(5) NOT NULL,
  `TenNhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`) VALUES
('00001', 'Bánh ngọt'),
('00002', 'Bánh quy kem'),
('00003', 'Bánh mì'),
('00004', 'Bánh Chocolate'),
('0005', 'Bánh Kem'),
('0124', 'Bánh mì ngọt'),
('7', 'Bánh truyền thống');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MSHH`,`IP`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `khachhangdangnhap`
--
ALTER TABLE `khachhangdangnhap`
  ADD PRIMARY KEY (`usernamekh`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `nhanviendangnhap`
--
ALTER TABLE `nhanviendangnhap`
  ADD PRIMARY KEY (`usernamenv`),
  ADD KEY `MSNV` (`MSNV`);

--
-- Indexes for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`MaNhom`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `khachhangdangnhap`
--
ALTER TABLE `khachhangdangnhap`
  ADD CONSTRAINT `khachhangdangnhap_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Constraints for table `nhanviendangnhap`
--
ALTER TABLE `nhanviendangnhap`
  ADD CONSTRAINT `nhanviendangnhap_ibfk_1` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
