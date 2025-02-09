-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 11, 2023 lúc 09:00 PM
-- Phiên bản máy phục vụ: 10.3.39-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `seeding1_dcmm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance`
--

CREATE TABLE `attendance` (
  `id` int(100) NOT NULL,
  `momo_reward` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time_turn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `min` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `max` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sum_fake` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance_his`
--

CREATE TABLE `attendance_his` (
  `id` int(100) NOT NULL,
  `momo_reward` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance_list`
--

CREATE TABLE `attendance_list` (
  `id` int(100) NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `block_list`
--

CREATE TABLE `block_list` (
  `id` int(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen_tien`
--

CREATE TABLE `chuyen_tien` (
  `id` int(11) NOT NULL,
  `type_gd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `momo_id` varchar(255) DEFAULT NULL,
  `tranId` varchar(11) NOT NULL,
  `partnerId` varchar(11) NOT NULL,
  `partnerName` text NOT NULL,
  `amount` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `time` mediumtext NOT NULL,
  `date_time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `balance` int(11) DEFAULT 0,
  `ownerNumber` varchar(255) DEFAULT NULL,
  `ownerName` varchar(255) DEFAULT NULL,
  `data` mediumtext NOT NULL,
  `type` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code`
--

CREATE TABLE `code` (
  `id` int(100) NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `zalopay_reward` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `limit_import` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `entered` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code_bank`
--

CREATE TABLE `code_bank` (
  `id` int(100) NOT NULL,
  `bankcode` varchar(100) DEFAULT NULL,
  `bcbankcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `code_bank`
--

INSERT INTO `code_bank` (`id`, `bankcode`, `bcbankcode`, `name`, `fullname`) VALUES
(1, 'VPB', 'ZPVPB', 'VPBank', 'Ngân hàng TMCP Việt Nam Thịnh Vượng'),
(2, 'GPB', 'ZPGPB', 'GPBank', 'Ngân hàng TM TNHH MTV Dầu Khí Toàn Cầu'),
(4, 'LPB', 'ZPLPB', 'LienVietPostBank', 'Ngân hàng TMCP Bưu Điện Liên Việt'),
(5, 'SGCB', 'ZPSGCB', 'TMCP Sài Gòn', 'Ngân hàng TMCP Sài Gòn'),
(6, 'HLB', 'ZPHLB', 'Hong Leong Bank', 'Ngân hàng TNHH MTV Hongleong Việt Nam'),
(8, 'OJB', 'ZPOCEB', 'Ocean Bank', 'Ngân hàng TMCP Đại Dương'),
(9, 'NAB', 'ZPNAB', 'Nam A Bank', 'Ngân hàng TMCP Nam Á'),
(11, 'ACB', 'ZPACB', 'ACB', 'Ngân hàng TMCP Á Châu'),
(12, 'SHBVN', 'ZPSHBVN', 'Shinhan Bank', 'Ngân hàng TNHH MTV Shinhan Việt Nam'),
(13, 'VAB', 'ZPVAB', 'Viet A Bank', 'Ngân hàng TMCP Việt Á'),
(14, 'VCCB', 'ZPVCCB', 'Ngân hàng Bản Việt', 'Ngân hàng TMCP Bản Việt'),
(15, 'VB', 'ZPVB', 'Vietbank', 'Ngân hàng TMCP Việt Nam Thương Tín'),
(16, 'PBVN', 'ZPPBVN', 'VID Public', 'Ngân hàng TNHH MTV Public Việt Nam'),
(18, 'MSB', 'ZPMRTB', 'Maritime Bank', 'Ngân hàng TMCP Hàng Hải Việt nam'),
(19, 'HDB', 'ZPHDB', 'HDBank', 'Ngân hàng TMCP Phát Triển Thành Phố Hồ Chí Minh'),
(20, 'PVCB', 'ZPPVCB', 'PVComBank', 'Ngân hàng TMCP Đại Chúng Việt Nam'),
(21, 'VIB', 'ZPVIB', 'VIBank', 'Ngân hàng TMCP Quốc tế Việt Nam'),
(23, 'OCB', 'ZPOCB', 'OCB', 'Ngân hàng TMCP Phương Đông'),
(25, 'WOO', 'ZPWOO', 'Woori Bank', 'Ngân hàng Wooribank'),
(27, 'SHB', 'ZPSHB', 'SHB', 'Ngân hàng TMCP Sài Gòn Hà Nội'),
(28, 'VRB', 'ZPVRB', 'NH Liên Doanh Việt Nga', 'Ngân hàng Liên doanh Việt Nga'),
(29, 'CIMB', 'ZPCIMB', 'CIMB', 'Ngân hàng TNHH MTV CIMB'),
(30, 'KLB', 'ZPKLB', 'Kien Long Bank', 'Ngân hàng TMCP Kiên Long'),
(31, 'BVB', 'ZPBVB', 'Bao Viet Bank', 'Ngân hàng TMCP Bảo Việt'),
(32, 'NCB', 'ZPNVB', 'NCB', 'Ngân hàng TMCP Quốc Dân'),
(34, 'EIB', 'ZPEIB', 'Eximbank', 'Ngân hàng TMCP Xuất nhập khẩu Việt Nam'),
(35, 'SEAB', 'ZPSEAB', 'SeABank', 'Ngân hàng TMCP Đông Nam Á'),
(36, 'PGB', 'ZPPGB', 'PGBank', 'Ngân hàng TMCP Xăng Dầu Petrolimex'),
(37, 'BAB', 'ZPBAB', 'Bac A Bank', 'Ngân hàng TMCP Bắc Á'),
(38, 'DAB', 'ZPDAB', 'Dong A Bank', 'Ngân hàng TMCP Đông Á'),
(39, 'ABB', 'ZPABB', 'ABBank', 'Ngân hàng TMCP An Bình'),
(40, 'IVB', 'ZPIVB', 'Indovina Bank', 'Ngân hàng TNHH Indovina'),
(41, 'SGB', 'ZPSGB', 'SaigonBank', 'Ngân hàng TMCP Sài Gòn Công Thương'),
(42, 'COOPB', 'ZPCOOPB', 'Co-op Bank', 'NH Hợp Tác Xã Việt Nam'),
(43, 'IBK', 'ZPIBK', 'Industrial Bank of Korea', 'Industrial Bank of Korea'),
(44, 'MB', 'ZPMB', 'MBBank', 'Ngân hàng TMCP Quân Đội'),
(45, 'VCB', 'ZPVCB', 'Vietcombank', 'Ngân hàng TMCP Ngoại Thương Việt Nam'),
(46, 'BIDV', 'ZPBIDV', 'BIDV', 'Ngân hàng TMCP Đầu tư và Phát triển Việt Nam(*)'),
(47, 'TPB', 'ZPTPB', 'TPBank', 'Ngân hàng TMCP Tiên Phong'),
(48, 'VARB', 'ZPAGB', 'Agribank', 'Ngân hàng Nông Nghiệp và Phát triển Nông Thôn Việt Nam'),
(49, 'TCB', 'ZPTCB', 'Techcombank', 'Ngân hàng TMCP Kỹ thương Việt Nam'),
(50, 'VTB', 'ZPCTG', 'Vietinbank', 'Ngân hàng TMCP Công Thương Việt Nam'),
(51, 'SCB', 'ZPSTB', 'Sacombank', 'Ngân hàng TMCP Sài Gòn Thương Tín');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code_his`
--

CREATE TABLE `code_his` (
  `id` int(100) NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `zalopay_reward` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `day` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `day_miss_his`
--

CREATE TABLE `day_miss_his` (
  `id` int(100) NOT NULL,
  `day` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sum_play` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `bonus` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `day_miss_up`
--

CREATE TABLE `day_miss_up` (
  `id` int(100) NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sum_bonus` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `day_miss_up`
--

INSERT INTO `day_miss_up` (`id`, `type`, `top1`, `top2`, `top3`, `top4`, `top5`, `sum_bonus`) VALUES
(1, 'Ngưỡng Mốc', '1000000', '5000000', '18000000', '37000000', '49000000', '1235000'),
(2, 'Thưởng Mốc', '200000', '10000', '50000', '80000', '150000', '24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `game_code` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `result` varchar(100) DEFAULT NULL,
  `ratio` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `type_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `game`
--

INSERT INTO `game` (`id`, `name`, `game_code`, `content`, `result`, `ratio`, `description`, `type`, `type_code`) VALUES
(1, 'Chẵn Lẻ', 'CL', '11|10', '2-4-6-8|1-3-5-7', '2.45|2.45', 'KHÔNG CẦN GHI NỘI DUNG VD: &lt;br&gt;Bạn đặt Chẵn 50.000. Hãy chuyển số tiền: 50010 (10 là MÃ) VD: Bạn đặt Lẻ 50.000. Hãy chuyển số tiền: 50011 (11 là MÃ)', 'Số Cuối', '1END'),
(2, 'Chẵn Lẻ 2', 'CL2', 'C2|L2', '0-2-4-6-8|1-3-5-7-9', '1.9|1.9', 'Với nội dung : C2 hoặc L2 (nếu đuôi mã giao dịch có các số sau)', 'Số Cuối', '1END'),
(3, 'Tài Xỉu', 'TX', 'X|T', '1-2-3-4|5-6-7-8', '2.45|2.45', 'Với nội dung : T hoặc X (nếu đuôi mã giao dịch có các số sau)', 'Số Cuối', '1END'),
(4, 'Tài Xỉu 2', 'TX2', 'X2|T2', '0-1-2-3-4|5-6-7-8-9', '1.9|1.9', 'Với nội dung : T2 hoặc L2 (nếu đuôi mã giao dịch có các số sau)', 'Số Cuối', '1END'),
(5, '1 Phần 3', '1P3', 'N0|N1|N2|N3', '0|1-2-3|4-5-6|7-8-9', '3|3|3|3', 'Với nội dung : N1 hoặc N2 hoặc N3 (nếu đuôi mã giao dịch có các số sau)', 'Số Cuối', '1END'),
(6, 'Hiệu 2 Số', 'H2S', 'H3|H3|H3|H3', '3|5|7|9', '3|3|3|3', 'Với nội dung : H3 (nếu hiệu 2 số cuối mã giao dịch có các số sau)', 'Hiệu 2 Số', 'H2END'),
(7, 'Lô', 'LO', 'LO', '01-03-12-19-23-24-30-33-39-48-54-55-60-61-71-77-81-82-83-67-88-76-64-79-29-99', '3', 'Với nội dung : LO (nếu 2 số cuối mã giao dịch có các số sau)', '2 Số Cuối', '2END');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `account` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `phone_result` varchar(20) DEFAULT NULL,
  `trans_id` varchar(30) DEFAULT NULL,
  `sign` varchar(30) DEFAULT NULL,
  `balance_snapshot` varchar(30) DEFAULT NULL,
  `trans_amount` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `trans_time` varchar(30) DEFAULT NULL,
  `app_trans_id` varchar(30) DEFAULT NULL,
  `game` varchar(30) DEFAULT NULL,
  `amount_game` varchar(30) DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL,
  `status_text` varchar(30) DEFAULT NULL,
  `bonus` varchar(30) DEFAULT NULL,
  `msg_bonus` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `revenue`
--

CREATE TABLE `revenue` (
  `id` int(11) NOT NULL,
  `his_month` varchar(100) DEFAULT NULL,
  `send_month` varchar(100) DEFAULT NULL,
  `win_month` varchar(100) DEFAULT NULL,
  `loss_month` varchar(100) DEFAULT NULL,
  `diff` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(20) UNSIGNED NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status_chuyen` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci DEFAULT NULL,
  `time_start` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time_end` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `theme` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '1',
  `color_web` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `noti_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `top_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gif_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dmiss_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `des_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'on',
  `type_reward` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT 'option',
  `nameweb` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `favion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `logo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `keyword` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `reward_top` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `limit_trans` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `limit_send` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT '1000000',
  `limit_view` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `limit_gd` int(100) NOT NULL DEFAULT 200,
  `limit_monney_day` int(100) NOT NULL DEFAULT 50000000,
  `limit_monney_month` int(100) NOT NULL DEFAULT 100000000,
  `content` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `video` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `box_tele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `box_zalo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `token_tele` varchar(100) DEFAULT NULL,
  `chat_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `event` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `status`, `status_chuyen`, `time_start`, `time_end`, `theme`, `color_web`, `noti_status`, `top_status`, `gif_status`, `dmiss_status`, `des_status`, `type_reward`, `nameweb`, `url`, `favion`, `logo`, `description`, `keyword`, `reward_top`, `limit_trans`, `limit_send`, `limit_view`, `limit_gd`, `limit_monney_day`, `limit_monney_month`, `content`, `video`, `tele`, `box_tele`, `box_zalo`, `token_tele`, `chat_id`, `event`) VALUES
(1, 'on', 'off', '09:00', '17:00', '2', '#87a5d7', 'on', 'on', NULL, 'on', 'on', 'option', '', '', '/templates/img/logo.png', 'https://simg.zalopay.com.vn/zlp-website/assets/logo1_ff390716a5.svg', 'Chẵn Lẻ Zalopay Online - Hệ thống trò chơi Chẵn lẻ MoMo giao dịch hoàn toàn tự động 24/7', 'CLZLP, chanleZaloPay 1k, chanleZaloPay 5k, chanle, chan le ZaloPay, chẵn lẻ ZaloPay 1k, chanleZaloPay, Soicoder', '66000/44000/33000/22000/11000', '15', '1000000', '', 500, 200000000, 100000000, 'Soicoder,Mì xào nè,Bắp rang bơ nè,115 đây,Hoàn tiền mua áo sơ mi,Đổi tiền,Mua thẻ cào,Ê lì xì nè,Trả tiền ăn', '', 'stool', 'https://t.me/S', 'https://zalo.me/g', '', '', '<h5 style=\"text-align:center\"><span style=\"color:#e74c3c\"><strong>CH&Agrave;O MỪNG BẠN ĐẾN VỚI HỆ THỐNG GAME ZaloPay UY T&Iacute;N SỐ 1 VN</strong></span></h5>\r\n\r\n<h6 style=\"text-align:center\">&nbsp;</h6>\r\n\r\n<div>Kết quả dựa v&agrave;o M&atilde; giao dịch v&iacute; ZaloPay</div>\r\n\r\n<div>Trả thưởng nhanh-Minh bạch-Xanh ch&iacute;n</div>\r\n\r\n<div><strong>⚠️ Một số lưu &yacute; của ch&uacute;ng t&ocirc;i,người chơi mới vui l&ograve;ng đọc qua trước khi chơi nh&eacute;!</strong></div>\r\n\r\n<div class=\"alert alert-warning\">Hiện nay khi th&agrave;nh vi&ecirc;n mới tham gia nh&oacute;m chat<strong>Telegram</strong>hoặc<strong>Zalo</strong>sẽ c&oacute; một số đối tượng lừa đảo l&agrave; admin hỗ trợ lỗi+cho số chơi kh&ocirc;ng hiện tr&ecirc;n web.Mọi trường hợp đ&oacute; đều l&agrave; lừa đảo.Ch&uacute;ng t&ocirc;i sẽ chỉ hỗ trợ những đơn chuyển v&agrave;o số hiện tr&ecirc;n website.H&atilde;y cảnh gi&aacute;c v&agrave; l&agrave; người chơi th&ocirc;ng th&aacute;i!</div>\r\n\r\n<ol>\r\n	<li>Mỗi số ZaloPay tr&ecirc;n web nhận tối đa 100M/th&aacute;ng.V&igrave; vậy,<strong>Vui l&ograve;ng F5 để reload web hoặc đợi web tự l&agrave;m mới danh s&aacute;ch số mỗi lần chơi,ph&ograve;ng trường hợp đổi số điện thoại khi hết hạn mức giao dịch.</strong>Chơi nhầm số tắt vui l&ograve;ng b&aacute;o admin trong v&ograve;ng 24h vẫn trả thưởng b&igrave;nh thường.</li>\r\n	<li>Nếu bạn chiến thắng m&agrave; tiền thưởng chưa về,h&atilde;y sử dụng chức năng &quot;TRA CỨU GIAO DỊCH&quot;.Trường hợp tra m&atilde; giao dịch b&aacute;o<strong>&quot; TẠM GIỮ &quot;</strong>hoặc<strong>&quot; KH&Ocirc;NG T&Igrave;M THẤY KẾT QUẢ &quot;</strong>vui l&ograve;ng li&ecirc;n hệ admin ở phần HỖ TRỢ để được xử l&yacute; nhanh nhất.</li>\r\n	<li><strong>LƯU &Yacute;: NỘI DUNG CHƠI Đ&Atilde; ĐƯỢC THAY ĐỔI TH&Agrave;NH <strong>SĐT + ND</strong> ( SĐT V&Agrave; ND C&Aacute;CH NHAU BẰNG PH&Iacute;M C&Aacute;CH ) !</strong></li>\r\n	<li><strong>Sai Nội Dung Hoặc Sai Min Max Chỉ&nbsp;Được Hoặc Lại 50% Số Tiền</strong></li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_new` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `token` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `token_2fa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status_2fa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `2fa_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time_2fa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `password_new`, `token`, `token_2fa`, `status_2fa`, `2fa_code`, `time_2fa`, `time`) VALUES
(4, 'administrator', 'admin@test.com', 'MklLbmg4RHhDYkgwdHJGaTJPMmZ6dz09', '', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxLCJyb2xlIjoiYWRtaW4iLCJleHAiOjE2OTE3NjIwMzl9.eRdn4JXDtouzZDSWPUc-IVoJTaSEhzxa92EuFNpDkPk', 'WEVQ DRKW PJNV KPWJ', 'on', '873102', NULL, '20:54:01 11/08/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_zalopay`
--

CREATE TABLE `user_zalopay` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `zalo_id` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sum_play` int(100) DEFAULT NULL,
  `sum_receive` int(100) DEFAULT NULL,
  `time_create` varchar(100) DEFAULT NULL,
  `time_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `zalopays`
--

CREATE TABLE `zalopays` (
  `id` int(11) NOT NULL,
  `session_id` varchar(500) DEFAULT NULL,
  `mappuser` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `reward` varchar(100) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `zalo_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `profile_level` varchar(100) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `imei` varchar(100) DEFAULT NULL,
  `deviceid` varchar(100) DEFAULT NULL,
  `SECUREID` varchar(100) DEFAULT NULL,
  `salt` varchar(100) DEFAULT NULL,
  `token` varchar(500) DEFAULT NULL,
  `public_key` varchar(1000) DEFAULT NULL,
  `access_token` varchar(500) DEFAULT NULL,
  `maccesstoken` varchar(500) DEFAULT NULL,
  `balance` varchar(20) DEFAULT NULL,
  `time_login` varchar(20) DEFAULT NULL,
  `errorDesc` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `min` varchar(100) DEFAULT NULL,
  `max` varchar(100) DEFAULT NULL,
  `total_day` int(20) DEFAULT 0,
  `total_month` int(20) DEFAULT 0,
  `ex_day` int(20) DEFAULT 0,
  `receive_day` int(20) DEFAULT 0,
  `ex_mon` int(20) DEFAULT 0,
  `receive_mon` int(20) NOT NULL DEFAULT 0,
  `limit_day` int(20) NOT NULL DEFAULT 0,
  `limit_month` int(20) NOT NULL DEFAULT 0,
  `limit_send` varchar(100) DEFAULT '3000000',
  `money_send` varchar(100) DEFAULT '3000000',
  `pay` text DEFAULT NULL,
  `auto` varchar(5) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attendance_his`
--
ALTER TABLE `attendance_his`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attendance_list`
--
ALTER TABLE `attendance_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `block_list`
--
ALTER TABLE `block_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyen_tien`
--
ALTER TABLE `chuyen_tien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code_bank`
--
ALTER TABLE `code_bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code_his`
--
ALTER TABLE `code_his`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `day_miss_his`
--
ALTER TABLE `day_miss_his`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `day_miss_up`
--
ALTER TABLE `day_miss_up`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_zalopay`
--
ALTER TABLE `user_zalopay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `zalopays`
--
ALTER TABLE `zalopays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `attendance_his`
--
ALTER TABLE `attendance_his`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `attendance_list`
--
ALTER TABLE `attendance_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `block_list`
--
ALTER TABLE `block_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chuyen_tien`
--
ALTER TABLE `chuyen_tien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `code`
--
ALTER TABLE `code`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `code_bank`
--
ALTER TABLE `code_bank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `code_his`
--
ALTER TABLE `code_his`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `day_miss_his`
--
ALTER TABLE `day_miss_his`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `day_miss_up`
--
ALTER TABLE `day_miss_up`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446649;

--
-- AUTO_INCREMENT cho bảng `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user_zalopay`
--
ALTER TABLE `user_zalopay`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `zalopays`
--
ALTER TABLE `zalopays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
