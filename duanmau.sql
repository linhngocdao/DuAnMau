-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2023 lúc 04:50 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_giohang`
--

CREATE TABLE `chitiet_giohang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_giohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_giohang`
--

INSERT INTO `chitiet_giohang` (`id`, `name`, `img`, `price`, `qty`, `id_giohang`) VALUES
(19, 'Áo sơ mi họa tiết', 'áo sơ mi.jpg', 125000, 2, 20),
(20, 'Áo sơ mi họa tiết', 'áo sơ mi.jpg', 125000, 1, 21),
(21, 'Áo sơ mi họa tiết', 'áo sơ mi.jpg', 125000, 2, 22),
(22, 'linh', 'quần jean.jpg', 200000, 2, 22),
(23, 'abc', 'quần nam.jpg', 124324, 1, 22),
(24, 'Quần đen', 'quần jean.jpg', 199000, 1, 23),
(25, 'Áo sơ mi họa tiết', 'áo sơ mi.jpg', 125000, 4, 23),
(26, 'Áo sơ mi họa tiết', 'áo sơ mi.jpg', 125000, 1, 24),
(27, 'Áo sơ mi họa tiết', 'áo sơ mi.jpg', 125000, 1, 25),
(28, 'Quần jean nam', 'quần jean.jpg', 345643, 2, 25),
(29, 'Quần jean nam', 'quần jean.jpg', 246000, 4, 26),
(30, 'áo sơ mi nam', 'áo sơ mi.jpg', 124555, 1, 26),
(31, 'Quần jean nam', 'quần jean.jpg', 246000, 1, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(35, 'Quần '),
(36, 'Áo'),
(38, 'Giày'),
(40, 'Dép'),
(42, 'linh'),
(43, 'Trang ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `tonggia` int(11) NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Đang xử lí'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `hovaten`, `sodienthoai`, `diachi`, `ghichu`, `tonggia`, `trangthai`) VALUES
(21, 'Đào Ngọc Lin', 866907649, 'Minh Tiến - Đoan Hùng - Phú Thọ', 'dsadsad', 125000, 'Đang xử lí'),
(22, 'Đỗ Thị Hòa ', 336603117, 'Đoan Hùng - Phú Thọ', 'Nhận hàng vào buổi sáng', 774324, 'Đang xử lí'),
(23, 'Đào Ngọc Huy', 866907649, 'Minh Tiến - Đoan Hùng - Phú Thọ', 'Cần nhanh', 699000, 'Đang xử lí'),
(24, 'Đào Ngọc Huy', 866907649, 'Minh Tiến - Đoan Hùng - Phú Thọ', 'kdsajdsad', 125000, 'Gửi hàng thành công'),
(25, 'admin', 866907649, 'Phú Thọ', 'Cần giao sản phẩm nhanh', 816286, 'Đang gửi'),
(26, 'Đào Ngọc Lin', 866907649, 'Minh Tiến - Đoan Hùng - Phú Thọ', 'sàdsafdsadsadsa', 1108555, 'Đang gửi'),
(27, 'Đào Ngọc Linh', 866907649, 'Minh Tiến - Đoan Hùng - Phú Thọ', 'fdsafd', 246000, 'Đang xử lí'),
(28, 'Đào Ngọc Linh', 866907649, 'Minh Tiến - Đoan Hùng - Phú Thọ', 'fdsafd', 0, 'Đang xử lí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `name`, `email`, `number`, `content`) VALUES
(9, 'acb', 'daongoclinh22@gmail.com', 2147483647, 'acb'),
(11, 'Đào Ngọc Linh', 'hiep@gmail.com', 866907649, 'sản phẩm bên bạn quá là tệ'),
(16, 'Đào Ngọc Trung', 'daongoctrung@gmail.com', 978125532, 'Chào bạn, shop bạn làm ăn chất lượng rất là tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(16, 'áo sơ mi nam', 124555, 'áo sơ mi.jpg', 'Sản phẩm siêu xịn', 104, 36),
(17, 'Quần jean nam', 246000, 'quần jean.jpg', 'Sản phẩm co dãn hiệu quả ', 30, 35),
(18, 'Áo polo', 13243455, 'áo năm.jpg', 'Sản phẩm tốt', 2, 38),
(19, 'abc', 124324, 'quần nam.jpg', 'dsfdsfdasf', 3, 36),
(25, 'cac', 32132132, 'áo sơ mi.jpg', 'dàdsfdsfdsfd', 54, 40),
(29, 'linh', 200000, 'quần jean.jpg', 'cacccccc', 19, 42),
(30, 'đào ngọc linh', 13333, 'áo năm.jpg', 'dsadsad', 26, 40),
(31, 'Quần đen', 199000, 'quần jean.jpg', 'Sản phẩm co giãn tốt', 103, 35),
(32, 'Quần jean nam', 345643, 'quần jean.jpg', 'Sản phẩm đẹp', 90, 35),
(37, 'Áo sơ mi họa tiết', 125000, 'áo sơ mi.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit perspiciatis eveniet dolorem temporibus, perferendis ullam beatae odit a! Rerum excepturi nesciunt dicta ad, repellendus vitae assumenda facere aliquam possimus et?', 97, 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `taikhoan`, `matkhau`, `hovaten`, `role`) VALUES
(1, 'admin', 'admin', 'Đào Ngọc Linh', 1),
(2, 'admin2', 'admin2', 'Linh', 0),
(5, 'dev', '123', 'Linhdev', 0),
(6, 'sdadsa', '123', 'dsadsa', 0),
(7, 'huy', 'huy', 'Đào NGọc huy', 0),
(9, 'a', 'a', 'admin', 0),
(12, 'test1', 'test1', 'test1', 1),
(16, 'huydao', '123', 'Đào Ngọc Huy', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taikhoan` (`taikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
