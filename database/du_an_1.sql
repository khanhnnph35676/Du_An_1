-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2023 lúc 04:54 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `chat_luong` text NOT NULL,
  `dung_voi_mo_ta` text NOT NULL,
  `so_sao` int(11) NOT NULL,
  `thoi_gian_danh_gia` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_gia`
--

INSERT INTO `danh_gia` (`id`, `id_kh`, `id_sp`, `chat_luong`, `dung_voi_mo_ta`, `so_sao`, `thoi_gian_danh_gia`) VALUES
(1, 1, 1, 'Kém', 'Chất liệu đúng với mô tả không', 3, '2023-11-07 22:48:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danhmuc`) VALUES
(1, 'TẤT CẢ SẢN PHẨM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `luot_thich` int(11) DEFAULT NULL,
  `so_luong` int(11) NOT NULL,
  `noi_dung_sp` text NOT NULL,
  `gia_sp` double(10,2) NOT NULL,
  `id_danhgia` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_sp`, `hinh_anh`, `luot_thich`, `so_luong`, `noi_dung_sp`, `gia_sp`, `id_danhgia`, `id_danhmuc`) VALUES
(1, 'Nội thất phong khách ND01', '', 27, 30, 'Nội dung của sản phẩm', 0.00, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan_admin`
--

CREATE TABLE `tai_khoan_admin` (
  `id` int(11) NOT NULL,
  `ten_taikhoan` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `id_vai_tro` int(11) NOT NULL,
  `mat_khau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan_admin`
--

INSERT INTO `tai_khoan_admin` (`id`, `ten_taikhoan`, `hinh_anh`, `id_vai_tro`, `mat_khau`) VALUES
(1, 'khanhnnph35676@fpt.edu.vn', '', 1, '0ee4e53da3001c757821d5d2de6d408e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan_kh`
--

CREATE TABLE `tai_khoan_kh` (
  `id` int(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_danhgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan_kh`
--

INSERT INTO `tai_khoan_kh` (`id`, `ten_kh`, `mat_khau`, `hinh_anh`, `sdt`, `dia_chi`, `email`, `id_danhgia`) VALUES
(1, 'khanhtr1308', 'khanhn227', '', '0961746082', 'Hà Nội', 'khanhtr1308@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vai_tro`
--

CREATE TABLE `vai_tro` (
  `id` int(11) NOT NULL,
  `vai_tro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vai_tro`
--

INSERT INTO `vai_tro` (`id`, `vai_tro`) VALUES
(1, 'Quản lý'),
(2, 'Người viết bài'),
(3, 'Quản lý sản phẩm'),
(4, 'Quản lý giá thành'),
(5, 'Quản lý bình luận'),
(6, 'Đăng bài viết'),
(7, 'Đăng sản phẩm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_danh_gia_vs_khach_hang` (`id_kh`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_gio_hang_vs_khach_hang` (`id_kh`),
  ADD KEY `lk_gio_hang_vs_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`id_danhmuc`),
  ADD KEY `lk_sp_danhgia` (`id_danhgia`);

--
-- Chỉ mục cho bảng `tai_khoan_admin`
--
ALTER TABLE `tai_khoan_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_tk_vt` (`id_vai_tro`);

--
-- Chỉ mục cho bảng `tai_khoan_kh`
--
ALTER TABLE `tai_khoan_kh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_kh_dg` (`id_danhgia`);

--
-- Chỉ mục cho bảng `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tai_khoan_admin`
--
ALTER TABLE `tai_khoan_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tai_khoan_kh`
--
ALTER TABLE `tai_khoan_kh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vai_tro`
--
ALTER TABLE `vai_tro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `lk_gio_hang_vs_khach_hang` FOREIGN KEY (`id_kh`) REFERENCES `tai_khoan_kh` (`id`),
  ADD CONSTRAINT `lk_gio_hang_vs_sp` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danh_muc` (`id`),
  ADD CONSTRAINT `lk_sp_danhgia` FOREIGN KEY (`id_danhgia`) REFERENCES `danh_gia` (`id`);

--
-- Các ràng buộc cho bảng `tai_khoan_admin`
--
ALTER TABLE `tai_khoan_admin`
  ADD CONSTRAINT `lk_tk_vt` FOREIGN KEY (`id_vai_tro`) REFERENCES `vai_tro` (`id`);

--
-- Các ràng buộc cho bảng `tai_khoan_kh`
--
ALTER TABLE `tai_khoan_kh`
  ADD CONSTRAINT `lk_kh_dg` FOREIGN KEY (`id_danhgia`) REFERENCES `danh_gia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
