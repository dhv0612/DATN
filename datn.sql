-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2021 lúc 09:15 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_dang_tuyen_dung`
--

CREATE TABLE `bai_dang_tuyen_dung` (
  `Ma_bai_dang` int(255) NOT NULL,
  `Tieu_de` varchar(255) NOT NULL,
  `Yeu_cau` text NOT NULL,
  `Ma_dia_diem` int(255) NOT NULL,
  `Mo_ta_cong_viec` text NOT NULL,
  `Muc_luong` varchar(255) NOT NULL,
  `Dia_diem_lam_viec` text NOT NULL,
  `Ngay_dang` date NOT NULL,
  `Han_ung_tuyen` date NOT NULL,
  `Thong_tin_khac` text DEFAULT NULL,
  `Ma_nha_tuyen_dung` int(255) NOT NULL,
  `Ma_nganh_nghe` int(255) NOT NULL,
  `Tieu_de_SEO` varchar(255) DEFAULT NULL,
  `Mo_ta_SEO` text DEFAULT NULL,
  `Hinh_anh_SEO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bai_dang_tuyen_dung`
--

INSERT INTO `bai_dang_tuyen_dung` (`Ma_bai_dang`, `Tieu_de`, `Yeu_cau`, `Ma_dia_diem`, `Mo_ta_cong_viec`, `Muc_luong`, `Dia_diem_lam_viec`, `Ngay_dang`, `Han_ung_tuyen`, `Thong_tin_khac`, `Ma_nha_tuyen_dung`, `Ma_nganh_nghe`, `Tieu_de_SEO`, `Mo_ta_SEO`, `Hinh_anh_SEO`) VALUES
(1, 'PHP - Developer', '<p>- Tốt nghiệp đại hoc</p>', 1, '<p>Cần có Nhân viên bảo trì  để hoạt động trong <u>môi trường bán lẻ</u> sang trọng <br> Tìm kiếm những cá nhân năng động, những người luôn <b>mong muố</b>n đạt được những <b>tiêu chuẩn cao nhất</b>.</p>', '12000000', '68 Nguyễn Huệ, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh', '2021-04-09', '2025-10-30', NULL, 1, 1, 'MeU-Solution tuyển Developer', 'Môi trường năng động, hòa nhập với người mới', ''),
(2, 'PHP - Senior', '<p>- Tốt nghiệp đại hoc</p><p><b>- Hòa đồng</b></p><p><br></p>', 1, '<p>Cần có Nhân viên bảo trì  để hoạt động trong môi trường bán lẻ sang trọng <br> Tìm kiếm những cá nhân năng động, những người luôn mong muốn đạt được những tiêu chuẩn cao nhất.</p>', '15000000', '117-119 Đường Lý Chính Thắng Quận 3 TP.HCM', '2021-04-11', '2025-11-16', NULL, 2, 1, 'Lampart tuyển dụng Senior', 'Môi trường năng động, hòa nhập với người mới', '19042021100013-1920 x 1080.png'),
(9, 'Python', '<p><b>Học giỏi</b></p><p><u>Biết điều</u></p>', 1, '<span style=\"font-family: Impact;\">Làm bài tập về nhà</span><br><span style=\"font-family: &quot;Segoe UI Symbol&quot;;\">Không đánh nhau</span>', '21000000', '450 Lê Văn Việt Quận 9', '2021-04-19', '2025-09-29', NULL, 2, 1, NULL, NULL, '19042021105913-vegito.png'),
(84, 'huhu', '1', 1, '1', '123', '450 Lê Văn Việt Quận 9', '2021-05-01', '2025-10-27', '1', 2, 1, NULL, NULL, NULL),
(85, 'PHP tester', 'A', 1, 'B', '15000000', '450 Lê Văn Việt Quận 9', '2021-05-01', '2025-09-09', 'C', 2, 1, NULL, NULL, '01052021032613-1920 x 1080.png'),
(86, 'hihi', '<p><img src=\"https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg\" style=\"width: 1080px;\">\r\n                                                        </p>', 1, '<b>dsf</b>', '12345', '450 Lê Văn Việt Quận 9', '2021-05-15', '2021-10-27', '<u>dsda</u>', 2, 1, '123', '123', NULL),
(87, 'hihi', '<p><img src=\"https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg\" style=\"width: 1080px;\">\r\n                                                        </p>', 1, '<b>dsf</b>', '12345', '450 Lê Văn Việt Quận 9', '2021-05-15', '2021-12-27', '<u>dsda</u>', 2, 1, '123', '123', NULL),
(88, 'python tester', '<font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">a</font>', 1, '<b>v</b>', '10000000', 'd', '2021-06-15', '2021-09-29', '<u>d</u>', 3, 1, '123', '123', NULL),
(89, 'a', '1', 1, '1', '123', 'a', '2021-07-02', '2021-08-27', '1', 2, 1, '123', '123', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_kiem_tra`
--

CREATE TABLE `bai_kiem_tra` (
  `Ma_bai_kiem_tra` int(255) NOT NULL,
  `Ten_bai_kiem_tra` varchar(255) NOT NULL,
  `Thoi_gian_lam` int(255) NOT NULL,
  `So_cau` int(255) NOT NULL,
  `Diem_toi_thieu` double NOT NULL,
  `Ma_nha_tuyen_dung` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bai_kiem_tra`
--

INSERT INTO `bai_kiem_tra` (`Ma_bai_kiem_tra`, `Ten_bai_kiem_tra`, `Thoi_gian_lam`, `So_cau`, `Diem_toi_thieu`, `Ma_nha_tuyen_dung`) VALUES
(1, 'PHP - Intership', 1, 5, 6, 2),
(5, 'Senior Java', 90, 30, 5, 1),
(6, 'Test', 90, 50, 5, 2),
(7, 'test - TMA', 10, 5, 7, 3),
(8, 'dhv', 12, 21, 3, 2),
(9, 'shtprecruitment', 12, 12, 1, 2),
(10, 'a', 12, 12, 1, 2),
(11, 'd', 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `Ma_cau_hoi` int(255) NOT NULL,
  `Ma_bai_kiem_tra` int(255) NOT NULL,
  `Ten_cau_hoi` text NOT NULL,
  `Lua_chon_a` varchar(255) NOT NULL,
  `Lua_chon_b` varchar(255) NOT NULL,
  `Lua_chon_c` varchar(255) DEFAULT NULL,
  `Lua_chon_d` varchar(255) DEFAULT NULL,
  `Dap_an` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cau_hoi`
--

INSERT INTO `cau_hoi` (`Ma_cau_hoi`, `Ma_bai_kiem_tra`, `Ten_cau_hoi`, `Lua_chon_a`, `Lua_chon_b`, `Lua_chon_c`, `Lua_chon_d`, `Dap_an`) VALUES
(36, 1, '<b>Ký&nbsp;</b>hiệu nào được sử dụng trong&nbsp;<b>PHP\r\n                                                </b>', '$$', '$', '@', '#', 'B'),
(37, 1, '<u>                                                Hàm</u> nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'A'),
(38, 1, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(39, 1, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(40, 1, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(41, 1, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(42, 1, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(52, 1, 'Ký hiệu nào được dùng khi sử dụng biến trong PHP', '$$', '$', '@', '#', 'A'),
(53, 1, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(54, 1, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(55, 1, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(56, 1, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(57, 1, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(58, 1, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(59, 1, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(60, 5, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(61, 5, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(62, 5, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(63, 5, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(64, 5, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(65, 5, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(66, 5, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(67, 5, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(68, 1, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(69, 1, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(70, 1, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(71, 1, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(73, 1, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(74, 1, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(75, 1, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(76, 1, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(77, 1, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(78, 1, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(79, 1, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(80, 1, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(81, 1, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(82, 1, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(83, 1, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(84, 1, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(85, 1, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(86, 1, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(87, 1, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(88, 1, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(89, 1, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(90, 1, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(91, 1, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(92, 6, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(93, 6, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(94, 6, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(95, 6, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(96, 6, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(97, 6, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(98, 6, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(99, 6, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(100, 1, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(101, 1, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(102, 1, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(103, 1, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(104, 1, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(105, 1, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(106, 1, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(107, 1, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A'),
(108, 7, 'Để đếm số dòng dữ liệu trong bảng ta dùng hàm', 'mysql_num_rows();', 'mysql_select_db()', 'mysql_fetch_array()', 'mysql_count_row()', 'A'),
(109, 7, 'Hàm nào sau đây dùng để khai báo hằng số', 'const', 'constants', 'define', 'def', 'B'),
(110, 7, 'Đáp án nào sau đây không được xác định trước bởi PHP (Magic constants)', ' __LINE__', '__FILE__', '__DATE__', '__METHOD__', 'C'),
(111, 7, 'Đâu không phải là phép toán được dùng so sánh trong PHP', '===', '>=', '!=', '<=>', 'A'),
(112, 7, 'Cho: a.=\"a\";a .= \"b\"; a.=\"c\"; Giá trị a là:', '\"c\"', '\"a\"', '\"abc\"', 'Lỗi', 'D'),
(113, 7, 'a=4;for(b = 0; b<=a; b++)$c++; Giá trị của c ? :', '0', '4', '5', 'Lỗi ', 'D'),
(114, 7, 'PHP dựa vào Syntax của ngôn ngữ nào?', 'C', 'Java', 'HTML', 'Ruby', 'C'),
(115, 7, 'Kiểu nào sau đây là kiểu số nguyên trong PHP?', 'Kiểu int', 'Kiểu Null', 'Kiểu chuỗi', 'Kiểu số thực', 'A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_kiem_tra`
--

CREATE TABLE `chi_tiet_kiem_tra` (
  `Ma_ung_vien` int(11) NOT NULL,
  `Ma_bai_kiem_tra` int(11) NOT NULL,
  `So_diem` int(11) DEFAULT NULL,
  `Ngay_lam_bai` date DEFAULT NULL,
  `Trang_thai` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_kiem_tra`
--

INSERT INTO `chi_tiet_kiem_tra` (`Ma_ung_vien`, `Ma_bai_kiem_tra`, `So_diem`, `Ngay_lam_bai`, `Trang_thai`) VALUES
(1, 1, 0, '2021-05-23', 1),
(4, 1, NULL, '2021-07-08', 0),
(10, 1, 4, '2021-06-24', 1),
(1, 6, 3, '2021-05-07', 1),
(4, 6, 1, '2021-07-10', 1),
(10, 6, 0, '2021-06-24', 0),
(1, 7, NULL, '2021-06-15', 1),
(4, 9, NULL, NULL, 0),
(4, 10, NULL, NULL, 0),
(4, 11, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_tra_loi`
--

CREATE TABLE `chi_tiet_tra_loi` (
  `Ma_ung_vien` int(255) NOT NULL,
  `Ma_cau_hoi` int(255) NOT NULL,
  `Cau_tra_loi` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_tra_loi`
--

INSERT INTO `chi_tiet_tra_loi` (`Ma_ung_vien`, `Ma_cau_hoi`, `Cau_tra_loi`) VALUES
(1, 39, 'C'),
(1, 40, 'C'),
(1, 53, 'B'),
(1, 59, 'C'),
(10, 59, 'A'),
(1, 68, 'D'),
(10, 71, 'A'),
(1, 75, 'B'),
(1, 78, 'A'),
(10, 79, 'D'),
(1, 81, 'A'),
(1, 90, 'B'),
(4, 92, 'B'),
(4, 93, 'B'),
(4, 94, 'A'),
(4, 95, 'B'),
(4, 96, 'A'),
(4, 97, 'D'),
(4, 98, 'B'),
(4, 99, 'A'),
(10, 100, 'B'),
(1, 103, 'A'),
(10, 104, 'C');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_ung_cu`
--

CREATE TABLE `chi_tiet_ung_cu` (
  `Ma_ung_vien` int(255) NOT NULL,
  `Ma_bai_dang` int(255) NOT NULL,
  `Trang_thai` tinyint(1) NOT NULL,
  `File_CV` varchar(255) DEFAULT NULL,
  `Kiem_tra` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_ung_cu`
--

INSERT INTO `chi_tiet_ung_cu` (`Ma_ung_vien`, `Ma_bai_dang`, `Trang_thai`, `File_CV`, `Kiem_tra`) VALUES
(1, 2, 1, NULL, 1),
(1, 9, 1, '17-04-2021--02-16-45-DinhHoangVu - Intern.pdf', 0),
(1, 85, 1, '17-04-2021--02-16-45-DinhHoangVu - Intern.pdf', 1),
(1, 88, 1, NULL, 1),
(4, 84, 1, NULL, 0),
(4, 85, 1, '17-04-2021--02-16-45-DinhHoangVu - Intern.pdf', 0),
(4, 89, 1, NULL, 1),
(10, 85, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_diem`
--

CREATE TABLE `dia_diem` (
  `Ma_dia_diem` int(255) NOT NULL,
  `Ten_dia_diem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dia_diem`
--

INSERT INTO `dia_diem` (`Ma_dia_diem`, `Ten_dia_diem`) VALUES
(1, 'TP. Hồ Chí Minh'),
(2, 'TP. Hà Nội'),
(3, 'TP. Đà Nẵng'),
(4, 'Tỉnh Đồng Nai'),
(5, 'Tỉnh Bình Dương'),
(6, 'Tỉnh Đăk Lăk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_van`
--

CREATE TABLE `hoc_van` (
  `Ma_hoc_van` int(255) NOT NULL,
  `Ten_hoc_van` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoc_van`
--

INSERT INTO `hoc_van` (`Ma_hoc_van`, `Ten_hoc_van`) VALUES
(1, 'Phổ thông'),
(2, 'Đang là sinh viên'),
(3, 'Trung cấp'),
(4, 'Cao đẳng'),
(5, 'Cử nhân'),
(6, 'Thạc sĩ'),
(7, 'Tiến sĩ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mang_xa_hoi`
--

CREATE TABLE `mang_xa_hoi` (
  `Nguoi_dung` int(255) NOT NULL,
  `Ma_ung_vien_mxh` varchar(255) NOT NULL,
  `Mang_xa_hoi` varchar(255) NOT NULL,
  `Ma_ung_vien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mang_xa_hoi`
--

INSERT INTO `mang_xa_hoi` (`Nguoi_dung`, `Ma_ung_vien_mxh`, `Mang_xa_hoi`, `Ma_ung_vien`) VALUES
(3, '1648728335319672', 'Facebook', 4),
(5, '915078145973090', 'Facebook', 5),
(9, '214154420513242', 'Facebook', 8),
(10, '1192898141181054', 'Facebook', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh_nghe`
--

CREATE TABLE `nganh_nghe` (
  `Ma_nganh_nghe` int(255) NOT NULL,
  `Ten_nganh_nghe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganh_nghe`
--

INSERT INTO `nganh_nghe` (`Ma_nganh_nghe`, `Ten_nganh_nghe`) VALUES
(1, 'IT'),
(2, 'Marketting');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_quan_tri`
--

CREATE TABLE `nguoi_quan_tri` (
  `Ma_nguoi_quan_tri` int(255) NOT NULL,
  `Ten_nguoi_quan_tri` varchar(255) NOT NULL,
  `Tai_khoan` varchar(255) NOT NULL,
  `Mat_khau` varchar(255) NOT NULL,
  `So_dien_thoai` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoi_quan_tri`
--

INSERT INTO `nguoi_quan_tri` (`Ma_nguoi_quan_tri`, `Ten_nguoi_quan_tri`, `Tai_khoan`, `Mat_khau`, `So_dien_thoai`, `Email`) VALUES
(1, 'Dhv0612', 'dhv0612', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'dhv0612@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_tuyen_dung`
--

CREATE TABLE `nha_tuyen_dung` (
  `Ma_nha_tuyen_dung` int(255) NOT NULL,
  `Ten_cong_ty` varchar(255) NOT NULL,
  `Trang_web` text DEFAULT NULL,
  `Dia_chi` text NOT NULL,
  `So_dien_thoai` varchar(255) NOT NULL,
  `So_fax` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Hinh_anh` varchar(255) DEFAULT NULL,
  `Tai_khoan` varchar(255) NOT NULL,
  `Mat_khau` varchar(255) NOT NULL,
  `Kinh_do` varchar(255) NOT NULL DEFAULT '10.84557',
  `Vi_do` varchar(255) NOT NULL DEFAULT '106.79458',
  `Han_dang_bai` date DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nha_tuyen_dung`
--

INSERT INTO `nha_tuyen_dung` (`Ma_nha_tuyen_dung`, `Ten_cong_ty`, `Trang_web`, `Dia_chi`, `So_dien_thoai`, `So_fax`, `Email`, `Hinh_anh`, `Tai_khoan`, `Mat_khau`, `Kinh_do`, `Vi_do`, `Han_dang_bai`, `token`) VALUES
(1, 'MeU Solutions', 'https://meu-solutions.com/', 'Tầng 17 Vincom Center, số 72 Le Thanh Ton , Quận 1, TPHCM\r\n', '0123456789', '+84 123 456 789', 'dhvv0612@gmail.com', 'MeUSolution.png', 'meu-solution', 'e10adc3949ba59abbe56e057f20f883e', '10.84557', '106.79458', NULL, '8MCOPAPq4I53jh8X'),
(2, 'Lampart', NULL, '117-119 Ly chinh Thang Quan 9 TPHCM', '0123456789', '+84132456789', 'dhv0612@gmail.com', 'lampart.png', 'lampart', '202cb962ac59075b964b07152d234b70', '10.80126134092203', '106.7155485963485', '2022-09-03', 'dBpQs9bKvxKjiChP'),
(3, 'TMA Solution', NULL, 'Quận Hà Đông Hà Nội', '0123456789', '+84123456789', 'tmasolution@gmail.com', NULL, 'tmasolution', 'e10adc3949ba59abbe56e057f20f883e', '10.84557', '106.79458', NULL, ''),
(4, 'a', 'a', 'a', 'a', NULL, 'dhv0612@gmail.com', '03-07-2021--11-32-17-1280x720.png', 'a', '202cb962ac59075b964b07152d234b70', '10.84557', '106.79458', NULL, NULL),
(5, 'b', 'b', 'b', 'b', NULL, 'dhv0612@gmail.com', '03-07-2021--02-43-16-1920 x 1080.png', 'b', '92eb5ffee6ae2fec3ad71c777531578f', '10.84557', '106.79458', NULL, NULL),
(6, 'a', 'a', 'a', 'a', NULL, 'dhv0612@gmail.com', '03-07-2021--02-44-13-1920 x 1080.png', 'ab', '0cc175b9c0f1b6a831c399e269772661', '10.84557', '106.79458', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoi_han_dang_bai`
--

CREATE TABLE `thoi_han_dang_bai` (
  `Ma_thoi_han` int(255) NOT NULL,
  `Thoi_han` varchar(255) NOT NULL,
  `So_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoi_han_dang_bai`
--

INSERT INTO `thoi_han_dang_bai` (`Ma_thoi_han`, `Thoi_han`, `So_tien`) VALUES
(1, '1 tháng', 500000),
(2, '6 tháng', 2700000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_kiem_tra`
--

CREATE TABLE `thong_tin_kiem_tra` (
  `Ma_bai_dang` int(11) NOT NULL,
  `Ma_bai_kiem_tra` int(11) NOT NULL,
  `Trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_kiem_tra`
--

INSERT INTO `thong_tin_kiem_tra` (`Ma_bai_dang`, `Ma_bai_kiem_tra`, `Trang_thai`) VALUES
(2, 9, 0),
(2, 10, 0),
(2, 11, 0),
(9, 9, 0),
(9, 10, 0),
(9, 11, 0),
(84, 9, 0),
(84, 10, 0),
(84, 11, 0),
(85, 1, 1),
(85, 6, 0),
(85, 9, 0),
(85, 10, 0),
(85, 11, 0),
(86, 1, 0),
(86, 6, 0),
(86, 9, 0),
(86, 10, 0),
(86, 11, 0),
(87, 1, 0),
(87, 6, 0),
(87, 9, 0),
(87, 10, 0),
(87, 11, 0),
(88, 7, 1),
(89, 1, 1),
(89, 6, 1),
(89, 8, 0),
(89, 9, 0),
(89, 10, 0),
(89, 11, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_thanh_toan`
--

CREATE TABLE `thong_tin_thanh_toan` (
  `Ma_thanh_toan` int(255) NOT NULL,
  `Ma_nha_tuyen_dung` int(255) NOT NULL,
  `Ma_thoi_han` int(11) NOT NULL,
  `Ngay_thanh_toan` date NOT NULL,
  `Han_dang_bai` date DEFAULT NULL,
  `Trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_thanh_toan`
--

INSERT INTO `thong_tin_thanh_toan` (`Ma_thanh_toan`, `Ma_nha_tuyen_dung`, `Ma_thoi_han`, `Ngay_thanh_toan`, `Han_dang_bai`, `Trang_thai`) VALUES
(52, 2, 1, '2021-05-09', '2021-06-08', 1),
(53, 2, 2, '2021-05-09', '2021-12-07', 1),
(54, 2, 1, '2021-05-15', '2022-01-06', 1),
(55, 2, 1, '2021-05-18', '2022-02-05', 1),
(56, 2, 1, '2021-05-19', '2022-03-04', 1),
(57, 2, 1, '2021-05-19', NULL, 0),
(58, 2, 1, '2021-05-21', NULL, 0),
(59, 2, 2, '2021-05-23', '2022-09-03', 1),
(60, 2, 2, '2021-05-26', NULL, 0),
(61, 2, 2, '2021-05-27', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ung_cu_vien`
--

CREATE TABLE `ung_cu_vien` (
  `Ma_ung_vien` int(255) NOT NULL,
  `Ten_ung_vien` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `So_dien_thoai` varchar(255) DEFAULT NULL,
  `Dia_chi` text DEFAULT NULL,
  `Hinh_anh` varchar(255) DEFAULT NULL,
  `Ngay_sinh` date DEFAULT NULL,
  `Gioi_tinh` tinyint(1) DEFAULT NULL,
  `Tai_khoan` varchar(255) DEFAULT NULL,
  `Mat_khau` varchar(255) DEFAULT NULL,
  `File_CV` varchar(255) DEFAULT NULL,
  `Ma_hoc_van` int(255) DEFAULT NULL,
  `Trang_thai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ung_cu_vien`
--

INSERT INTO `ung_cu_vien` (`Ma_ung_vien`, `Ten_ung_vien`, `Email`, `So_dien_thoai`, `Dia_chi`, `Hinh_anh`, `Ngay_sinh`, `Gioi_tinh`, `Tai_khoan`, `Mat_khau`, `File_CV`, `Ma_hoc_van`, `Trang_thai`) VALUES
(1, 'Đinh Hoàng ', 'dhv061@gmail.com', '0974963361', '450 Lê Văn Việt Quận 9 TPHCM', '1920 x 1080.png', '1999-12-06', 1, 'dhv0612', 'e10adc3949ba59abbe56e057f20f883e', '17-04-2021--12-00-44-DinhHoangVu - Intern.pdf', 2, 1),
(2, 'Đinh Hoàng Vũ', '', NULL, NULL, NULL, NULL, NULL, '1', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL),
(4, 'Hoàng Vũ', 'dhv0612@gmail.com', '', NULL, NULL, NULL, NULL, '', '', '16-04-2021--01-47-52-DinhHoangVu - Intern.pdf', NULL, 0),
(5, 'Đinh Hoàng Vũ', 'dhvv0612@gmail.com', NULL, NULL, NULL, NULL, NULL, 'hehe', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL),
(8, 'hehe', 'hihi@gmail.com', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0),
(9, 'Nghĩa Lê', NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0),
(10, 'dinh', 'dhv0612@gmail.com', NULL, NULL, NULL, NULL, NULL, '123', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_dang_tuyen_dung`
--
ALTER TABLE `bai_dang_tuyen_dung`
  ADD PRIMARY KEY (`Ma_bai_dang`),
  ADD KEY `Ma_nganh_nghe` (`Ma_nganh_nghe`),
  ADD KEY `Ma_nha_tuyen_dung` (`Ma_nha_tuyen_dung`),
  ADD KEY `Ma_dia_diem` (`Ma_dia_diem`);

--
-- Chỉ mục cho bảng `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  ADD PRIMARY KEY (`Ma_bai_kiem_tra`),
  ADD KEY `Ma_nha_tuyen_dung` (`Ma_nha_tuyen_dung`);

--
-- Chỉ mục cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`Ma_cau_hoi`),
  ADD KEY `Ma_bai_kiem_tra` (`Ma_bai_kiem_tra`);

--
-- Chỉ mục cho bảng `chi_tiet_kiem_tra`
--
ALTER TABLE `chi_tiet_kiem_tra`
  ADD PRIMARY KEY (`Ma_bai_kiem_tra`,`Ma_ung_vien`),
  ADD KEY `Ma_ung_vien` (`Ma_ung_vien`);

--
-- Chỉ mục cho bảng `chi_tiet_tra_loi`
--
ALTER TABLE `chi_tiet_tra_loi`
  ADD PRIMARY KEY (`Ma_cau_hoi`,`Ma_ung_vien`),
  ADD KEY `Ma_ung_vien` (`Ma_ung_vien`);

--
-- Chỉ mục cho bảng `chi_tiet_ung_cu`
--
ALTER TABLE `chi_tiet_ung_cu`
  ADD PRIMARY KEY (`Ma_ung_vien`,`Ma_bai_dang`),
  ADD KEY `Ma_bai_dang` (`Ma_bai_dang`);

--
-- Chỉ mục cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  ADD PRIMARY KEY (`Ma_dia_diem`);

--
-- Chỉ mục cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  ADD PRIMARY KEY (`Ma_hoc_van`);

--
-- Chỉ mục cho bảng `mang_xa_hoi`
--
ALTER TABLE `mang_xa_hoi`
  ADD PRIMARY KEY (`Nguoi_dung`),
  ADD KEY `Ma_ung_vien` (`Ma_ung_vien`);

--
-- Chỉ mục cho bảng `nganh_nghe`
--
ALTER TABLE `nganh_nghe`
  ADD PRIMARY KEY (`Ma_nganh_nghe`);

--
-- Chỉ mục cho bảng `nguoi_quan_tri`
--
ALTER TABLE `nguoi_quan_tri`
  ADD PRIMARY KEY (`Ma_nguoi_quan_tri`);

--
-- Chỉ mục cho bảng `nha_tuyen_dung`
--
ALTER TABLE `nha_tuyen_dung`
  ADD PRIMARY KEY (`Ma_nha_tuyen_dung`);

--
-- Chỉ mục cho bảng `thoi_han_dang_bai`
--
ALTER TABLE `thoi_han_dang_bai`
  ADD PRIMARY KEY (`Ma_thoi_han`);

--
-- Chỉ mục cho bảng `thong_tin_kiem_tra`
--
ALTER TABLE `thong_tin_kiem_tra`
  ADD PRIMARY KEY (`Ma_bai_dang`,`Ma_bai_kiem_tra`),
  ADD KEY `Ma_bai_kiem_tra` (`Ma_bai_kiem_tra`);

--
-- Chỉ mục cho bảng `thong_tin_thanh_toan`
--
ALTER TABLE `thong_tin_thanh_toan`
  ADD PRIMARY KEY (`Ma_thanh_toan`),
  ADD KEY `Ma_nha_tuyen_dung` (`Ma_nha_tuyen_dung`),
  ADD KEY `Ma_thoi_han` (`Ma_thoi_han`);

--
-- Chỉ mục cho bảng `ung_cu_vien`
--
ALTER TABLE `ung_cu_vien`
  ADD PRIMARY KEY (`Ma_ung_vien`),
  ADD KEY `Ma_hoc_van` (`Ma_hoc_van`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_dang_tuyen_dung`
--
ALTER TABLE `bai_dang_tuyen_dung`
  MODIFY `Ma_bai_dang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  MODIFY `Ma_bai_kiem_tra` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `Ma_cau_hoi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  MODIFY `Ma_dia_diem` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  MODIFY `Ma_hoc_van` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `mang_xa_hoi`
--
ALTER TABLE `mang_xa_hoi`
  MODIFY `Nguoi_dung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nganh_nghe`
--
ALTER TABLE `nganh_nghe`
  MODIFY `Ma_nganh_nghe` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguoi_quan_tri`
--
ALTER TABLE `nguoi_quan_tri`
  MODIFY `Ma_nguoi_quan_tri` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nha_tuyen_dung`
--
ALTER TABLE `nha_tuyen_dung`
  MODIFY `Ma_nha_tuyen_dung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thoi_han_dang_bai`
--
ALTER TABLE `thoi_han_dang_bai`
  MODIFY `Ma_thoi_han` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thong_tin_thanh_toan`
--
ALTER TABLE `thong_tin_thanh_toan`
  MODIFY `Ma_thanh_toan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `ung_cu_vien`
--
ALTER TABLE `ung_cu_vien`
  MODIFY `Ma_ung_vien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_dang_tuyen_dung`
--
ALTER TABLE `bai_dang_tuyen_dung`
  ADD CONSTRAINT `bai_dang_tuyen_dung_ibfk_1` FOREIGN KEY (`Ma_nganh_nghe`) REFERENCES `nganh_nghe` (`Ma_nganh_nghe`),
  ADD CONSTRAINT `bai_dang_tuyen_dung_ibfk_2` FOREIGN KEY (`Ma_nha_tuyen_dung`) REFERENCES `nha_tuyen_dung` (`Ma_nha_tuyen_dung`),
  ADD CONSTRAINT `bai_dang_tuyen_dung_ibfk_3` FOREIGN KEY (`Ma_dia_diem`) REFERENCES `dia_diem` (`Ma_dia_diem`);

--
-- Các ràng buộc cho bảng `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  ADD CONSTRAINT `bai_kiem_tra_ibfk_1` FOREIGN KEY (`Ma_nha_tuyen_dung`) REFERENCES `nha_tuyen_dung` (`Ma_nha_tuyen_dung`);

--
-- Các ràng buộc cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD CONSTRAINT `cau_hoi_ibfk_1` FOREIGN KEY (`Ma_bai_kiem_tra`) REFERENCES `bai_kiem_tra` (`Ma_bai_kiem_tra`);

--
-- Các ràng buộc cho bảng `chi_tiet_kiem_tra`
--
ALTER TABLE `chi_tiet_kiem_tra`
  ADD CONSTRAINT `chi_tiet_kiem_tra_ibfk_1` FOREIGN KEY (`Ma_bai_kiem_tra`) REFERENCES `bai_kiem_tra` (`Ma_bai_kiem_tra`),
  ADD CONSTRAINT `chi_tiet_kiem_tra_ibfk_2` FOREIGN KEY (`Ma_ung_vien`) REFERENCES `ung_cu_vien` (`Ma_ung_vien`);

--
-- Các ràng buộc cho bảng `chi_tiet_tra_loi`
--
ALTER TABLE `chi_tiet_tra_loi`
  ADD CONSTRAINT `chi_tiet_tra_loi_ibfk_1` FOREIGN KEY (`Ma_cau_hoi`) REFERENCES `cau_hoi` (`Ma_cau_hoi`),
  ADD CONSTRAINT `chi_tiet_tra_loi_ibfk_2` FOREIGN KEY (`Ma_ung_vien`) REFERENCES `ung_cu_vien` (`Ma_ung_vien`);

--
-- Các ràng buộc cho bảng `chi_tiet_ung_cu`
--
ALTER TABLE `chi_tiet_ung_cu`
  ADD CONSTRAINT `chi_tiet_ung_cu_ibfk_1` FOREIGN KEY (`Ma_bai_dang`) REFERENCES `bai_dang_tuyen_dung` (`Ma_bai_dang`),
  ADD CONSTRAINT `chi_tiet_ung_cu_ibfk_2` FOREIGN KEY (`Ma_ung_vien`) REFERENCES `ung_cu_vien` (`Ma_ung_vien`);

--
-- Các ràng buộc cho bảng `mang_xa_hoi`
--
ALTER TABLE `mang_xa_hoi`
  ADD CONSTRAINT `mang_xa_hoi_ibfk_1` FOREIGN KEY (`Ma_ung_vien`) REFERENCES `ung_cu_vien` (`Ma_ung_vien`);

--
-- Các ràng buộc cho bảng `thong_tin_kiem_tra`
--
ALTER TABLE `thong_tin_kiem_tra`
  ADD CONSTRAINT `thong_tin_kiem_tra_ibfk_1` FOREIGN KEY (`Ma_bai_dang`) REFERENCES `bai_dang_tuyen_dung` (`Ma_bai_dang`),
  ADD CONSTRAINT `thong_tin_kiem_tra_ibfk_2` FOREIGN KEY (`Ma_bai_kiem_tra`) REFERENCES `bai_kiem_tra` (`Ma_bai_kiem_tra`);

--
-- Các ràng buộc cho bảng `thong_tin_thanh_toan`
--
ALTER TABLE `thong_tin_thanh_toan`
  ADD CONSTRAINT `thong_tin_thanh_toan_ibfk_1` FOREIGN KEY (`Ma_nha_tuyen_dung`) REFERENCES `nha_tuyen_dung` (`Ma_nha_tuyen_dung`),
  ADD CONSTRAINT `thong_tin_thanh_toan_ibfk_2` FOREIGN KEY (`Ma_thoi_han`) REFERENCES `thoi_han_dang_bai` (`Ma_thoi_han`);

--
-- Các ràng buộc cho bảng `ung_cu_vien`
--
ALTER TABLE `ung_cu_vien`
  ADD CONSTRAINT `ung_cu_vien_ibfk_1` FOREIGN KEY (`Ma_hoc_van`) REFERENCES `hoc_van` (`Ma_hoc_van`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
