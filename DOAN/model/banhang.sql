-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 13, 2023 lúc 01:28 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', '123'),
('admin2', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES
(10, 29, 15, '2023-02-20', '  đẹp\r\n'),
(11, 29, 15, '2023-02-20', ''),
(12, 29, 27, '2023-03-01', '  aaa'),
(13, 29, 27, '2023-03-01', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) CHARACTER SET utf8 NOT NULL,
  `size` varchar(20) CHARACTER SET utf8 NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(86, 29, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(88, 28, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(90, 29, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(92, 29, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(96, 28, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(98, 29, 1, 'Màu Đen', 'Vừa', 850000, 0),
(100, 28, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(102, 7, 1, 'Màu Trắng', 'Lớn', 650000, 0),
(102, 8, 2, 'Màu Trắng', 'Lớn', 1000000, 0),
(102, 29, 1, 'Màu Đen', 'Nhỏ', 850000, 0),
(104, 2, 1, 'Màu Trắng', 'Lớn', 350000, 0),
(106, 2, 1, 'Màu Trắng', 'Lớn', 350000, 0),
(108, 3, 1, 'Màu Trắng', 'Lớn', 350000, 0),
(110, 7, 1, 'Màu Trắng', 'Lớn', 650000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthdtam`
--

CREATE TABLE `cthdtam` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(5) NOT NULL,
  `tenhh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(30) NOT NULL,
  `giamgia` int(30) NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` int(3) NOT NULL,
  `soluotxem` int(30) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluongton` int(5) NOT NULL,
  `mausac` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `maloai`, `soluotxem`, `ngaylap`, `mota`, `size`, `soluongton`, `mausac`) VALUES
(1, 'Có Em', 300000, 0, 'favicon.png', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 40, 'Màu Trắng'),
(2, 'Pretty Clouds2', 350000, 0, '2.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Trắng'),
(3, 'Proud of you', 350000, 0, '3.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Hồng'),
(4, 'Rạng rỡ', 1350000, 0, '4.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Hồng'),
(5, 'Be Merry', 1350000, 0, '5.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Xanh Navy'),
(6, 'Be Merry', 850000, 0, '6.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Xanh Navy'),
(7, 'A Thousand years', 650000, 0, '7.png', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Be Đậm'),
(8, 'Back to December', 1000000, 0, '8.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Be Đậm'),
(9, 'Trái tim mùa thu', 650000, 0, '9.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Xanh Navy'),
(10, 'Luxury vase 22', 650000, 0, '10.png', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Xanh Navy'),
(11, 'Nắng ấm', 1400000, 0, '11.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Đen'),
(12, 'Thương một người', 1400000, 0, '12.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa ', 50, 'Màu Đen'),
(13, 'Pink baby', 1400000, 0, '13.png', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Trắng'),
(14, 'Tình Yêu Vĩnh Cửu 2', 1600000, 0, '14.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Trắng'),
(15, 'A Thousand roses', 2200000, 0, '15.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Trắng'),
(16, 'Luxury vase 22', 1500000, 0, '16.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Kem'),
(17, 'Luxury vase 21', 1800000, 0, '17.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Kem'),
(18, 'Luxury vase 23', 1800000, 0, '18.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Hồng Đậm'),
(19, 'Premium vase 5', 5000000, 0, '19.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Hồng Đậm'),
(20, 'Premium vase 2', 3000000, 0, '20.jpg', 2, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Hồng Đậm'),
(21, 'Only rose 22', 750000, 600000, '21.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Đen'),
(22, 'Bó Hoa Tú Cầu', 432000, 400000, '22.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Đen'),
(23, 'Ánh Sáng', 900000, 850000, '23.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Đen'),
(24, 'Only rose 9', 900000, 850000, '24.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Kem'),
(25, 'Only rose 81', 900000, 820000, '25.jpg', 1, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Kem'),
(26, 'Only rose 12', 900000, 850000, '26.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Đen'),
(27, 'Congrats mini size 5', 900000, 850000, '27.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Nhỏ', 50, 'Màu Hồng'),
(28, 'Only rose 11', 900000, 850000, '28.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Hồng'),
(29, 'Only rose 6', 900000, 850000, '29.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Vừa', 50, 'Màu Đen'),
(30, 'Only rose 14', 900000, 850000, '30.jpg', 3, 50, '2022-12-10', 'Mỗi bông hoa tượng trưng cho những tính cách khác nhau ', 'Lớn', 50, 'Màu Đen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(108, 27, '2023-03-06', 350000),
(109, 27, '2023-03-06', 0),
(110, 27, '2023-03-06', 650000),
(111, 27, '2023-03-06', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadontam`
--

CREATE TABLE `hoadontam` (
  `masohd` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachangtam`
--

CREATE TABLE `khachangtam` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachangtam`
--

INSERT INTO `khachangtam` (`id`, `tenkh`, `email`, `diachi`, `sodienthoai`) VALUES
(55, 'Nguyễn Văn A', 'lekimphu123a@gmail.com', 'Củ chi', 51321),
(56, 'Nguyễn Văn A', 'lekimphu123a@gmail.com', 'Củ chi', 51321),
(57, 'Nguyễn Văn A', 'lekimphu123a@gmail.com', 'Củ chi', 51321),
(58, 'Nguyễn Văn A', 'lekimphu123a@gmail.com', 'Củ chi', 51321),
(59, 'Nguyễn Văn A', 'lekimphu123a@gmail.com', 'Củ chi', 51321),
(60, 'Nguyễn Văn A', 'lekimphu123a@gmail.com', 'Củ chi', 51321);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(12) NOT NULL,
  `vaitro` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `password`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(27, 'Lê Kim Phú', 'lekimphu1', 'e10adc3949ba59abbe56e057f20f883e', 'lekimphu1234a@gmail.com', 'hcm', 938625098, NULL),
(28, 'Lê Kim Phú', 'lekimphu123', '202cb962ac59075b964b07152d234b70', 'lekimphu123a@gmail.com', '05', 938625098, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Hoa xịn', 3),
(2, 'Hoa đẹp', 3),
(3, 'Hoa tươi', 5),
(6, 'Túi xách LS', 5),
(7, 'Túi xách mini', 5),
(8, 'Túi vải', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `idmau` int(11) NOT NULL,
  `mau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`idmau`, `mau`) VALUES
(1, 'Hồng'),
(2, 'Trắng'),
(3, 'Xanh Navy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `size`) VALUES
(1, 'Lớn'),
(2, 'Vừa'),
(3, 'Nhỏ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `mahh` (`mahh`,`makh`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`masohd`,`mahh`,`mausac`,`size`);

--
-- Chỉ mục cho bảng `cthdtam`
--
ALTER TABLE `cthdtam`
  ADD PRIMARY KEY (`masohd`,`mahh`,`mausac`,`size`) USING BTREE;

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `hoadontam`
--
ALTER TABLE `hoadontam`
  ADD PRIMARY KEY (`masohd`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `khachangtam`
--
ALTER TABLE `khachangtam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`idmau`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `hoadontam`
--
ALTER TABLE `hoadontam`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachangtam`
--
ALTER TABLE `khachangtam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
