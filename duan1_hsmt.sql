-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2023 lúc 01:06 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_hsmt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `id` int(10) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `img5` varchar(200) NOT NULL,
  `img_main` varchar(200) NOT NULL,
  `id_prd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img_main`, `id_prd`) VALUES
(1, 'thanh_cua_surimi_1', 'thanh_cua_surimi_2', 'thanh_cua_surimi_3', 'thanh_cua_surimi_4', 'thanh_cua_surimi_5', 'Thanh_cua', 1),
(2, 'cua_dong_xay_1', 'cua_dong_xay_2', 'cua_dong_xay_3', 'cua_dong_xay_4', 'cua_dong_xay_5', 'cua_dong_xay', 2),
(3, 'thit_cang_ghe_1', 'thit_cang_ghe_2', 'thit_cang_ghe_3', 'thit_cang_ghe_4', 'thit_cang_ghe_5\r\n', 'thit_cang_ghe', 3),
(4, 'cua_ca_mau_1', 'cua_ca_mau_2', 'cua_ca_mau_3', 'cua_ca_mau_4', 'cua_ca_mau_5', 'cua_ca_mau', 4),
(5, 'cua_gach_ca_mau_1', 'cua_gach_ca_mau_2', 'cua_gach_ca_mau_3', 'cua_gach_ca_mau_4', 'cua_gach_ca_mau_5', 'cua_gach_ca_mau', 5),
(6, 'ghe_mat_trang_1', 'ghe_mat_trang_2', 'ghe_mat_trang_3', 'ghe_mat_trang_4', 'ghe_mat_trang_5', 'ghe_mat_trang', 6),
(7, 'cua_dong_1', 'cua_dong_2', 'cua_dong_3', 'cua_dong_4', 'cua_dong_5', 'cua_dong', 7),
(8, 'cang_cua_dong_1', 'cang_cua_dong_2', 'cang_cua_dong_3', 'cang_cua_dong_4', 'cang_cua_dong_5', 'cang_cua_dong', 8),
(9, 'ba_khia_1', 'ba_khia_2', 'ba_khia_3', 'ba_khia_4', 'ba_khia_5', 'ba_khia', 9),
(10, 'cua_nam_can_1', 'cua_nam_can_2', 'cua_nam_can_3', 'cua_nam_can_4', 'cua_nam_can_5', 'cua_nam_can', 10),
(11, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_ca_sac', 21),
(12, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_ca_linh', 22),
(13, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_thai', 23),
(14, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_ba_khia', 24),
(15, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_tep', 25),
(16, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'banh_pia', 26),
(17, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_ruoi', 27),
(18, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'banh_tet', 28),
(19, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'mam_cong', 29),
(20, 'ct1', 'ct2', 'ct3', 'ct4', 'ct5', 'banh_da_lon', 30),
(21, 'DP_1', 'DP_1', 'DP_1', 'DP_1', 'DP_1', 'kho_muc', 11),
(22, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_trung', 12),
(23, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'cha_muc', 13),
(24, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_ong', 14),
(25, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_la', 15),
(26, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_xe_soi', 16),
(27, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_ghim', 17),
(28, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_la_cau', 18),
(29, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'muc_bau_baby', 19),
(30, 'DP_1', 'DP_2', 'DP_3', 'DP_4', 'DP_5', 'bach_tuoc', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(10) NOT NULL,
  `name_catalog` varchar(200) NOT NULL,
  `qty_catalog` int(5) NOT NULL,
  `status_catalog` int(1) NOT NULL DEFAULT 1,
  `img_catalog` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name_catalog`, `qty_catalog`, `status_catalog`, `img_catalog`) VALUES
(1, 'Bán chạy nhất', 100, 1, 'ban_chay\r\n'),
(2, 'Đặc sản Miền Tây', 100, 1, 'dac_san_mien_tay'),
(3, 'Khô Miền Tây', 100, 1, 'kho_mien_tay\r\n'),
(4, 'Cá', 100, 1, 'ca'),
(5, 'Ngao, Sò, Ốc', 100, 1, 'Ngao_so_oc'),
(6, 'Cua, Ghẹ', 100, 1, 'cua'),
(7, 'Mực', 100, 1, 'muc'),
(8, 'Gia vị, sốt', 100, 1, 'gia_vi'),
(9, 'Tôm', 100, 1, 'tom');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_prd` int(10) NOT NULL,
  `text` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_package`
--

CREATE TABLE `detail_package` (
  `id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` double(10,0) NOT NULL,
  `note` varchar(255) NOT NULL,
  `total` double(15,0) NOT NULL,
  `id_DH` int(10) NOT NULL,
  `id_trans` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product`
--

CREATE TABLE `detail_product` (
  `id_DP` int(10) NOT NULL,
  `name_prd` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `sale` double(10,0) NOT NULL,
  `production` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `net_weight` double(10,0) NOT NULL,
  `id_prd` int(10) NOT NULL,
  `id_album` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_product`
--

INSERT INTO `detail_product` (`id_DP`, `name_prd`, `status`, `sale`, `production`, `type`, `text`, `net_weight`, `id_prd`, `id_album`) VALUES
(1, 'Thanh cua surimi', 1, 10, 'Cà Mau', 'Gói', '18 tháng kể từ NSX, bảo quản nhiệt độ tốt nhất từ -18 độ C.\r\n\r\nHướng dẫn sử dụng : Rã đông ăn liền với muối tiêu xanh, tương hay mayonaise. Xé sợi ăn mì, xào miến hay làm nhiều món sushi.', 200, 1, 1),
(2, 'Cua đồng xây', 1, 15, 'Cà Mau', 'Túi ', ' 06 tháng kể từ NSX, đông lạnh -18 độ C  Món ngon : nấu canh rau đay, nấu canh mùng tơi, cua đồng nấu canh mướp và ngon nhất là riêu cua.', 500, 2, 2),
(3, 'Thịt càng ghẹ', 1, 10, 'Cà Mau', 'Túi', ' 6 tháng kể từ NSX. Bảo quản nhiệt độ tốt nhất từ -18 độ C\r\n\r\nMón ngon : xào miến, cháy tỏi, bánh canh cua, nấu mì,...', 250, 3, 3),
(4, 'Cua Cà Mau', 1, 30, 'Cà Mau', 'Con', '01 đổi 01 nếu sản phẩm kém chất lượng theo chính sách đổi trả\r\n\r\nMón ngon: Hấp bia, hấp nước dừa, nướng than, sốt me, sốt trứng muối, miến cua,...', 400, 4, 4),
(5, 'Cua gạch Cà Mau', 1, 11, 'Cà Mau', 'Con', 'sốt trứng muối, sốt ớt Singapore, sốt me, nấu lẩu tomyum, hấp thái, miến cua,..', 400, 5, 5),
(6, 'Ghẹ mặt trăng', 1, 0, 'Sóc Trăng', 'Con', 'sốt trứng muối, sốt ớt Singapore, sốt me, nấu lẩu tomyum, hấp thái, miến cua,..', 300, 6, 3),
(7, 'Cua đồng', 1, 15, 'Tiền Giang', 'Con', 'Cua đồng phân bố rộng ở vùng nước ngọt, trong khoảng đồng bằng, trung du, miền núi, hể với ao hồ, sông suối là với cua.', 500, 7, 7),
(8, 'Càng cua đồng', 1, 20, 'Cà Mau', 'Con', ' Các món ăn từ con cua thơm ngon à bổ dưỡng. Cua sống rất tốt cho mắt à thúc đẩy hệ thống miễn dịch, giúp cho trái tim khỏe mạnh.', 10, 8, 8),
(9, 'Ba khía', 1, 17, 'Cà Mau', 'Con', 'BA KHÍA CÀ MAU\r\nLOẠI MUỐI NGUYÊN CON CHƯA TRỘN\r\nCó nhiều cách chế biến mắm ba khía: mắm ba khía Cà Mau trộn chua ngọt (chanh hoặc tắc), Mắm ba khía trộn me, Mắm ba khía trộn khế chua…', 350, 9, 9),
(10, 'Cua năm căn', 1, 0, 'Cà Mau', 'Con', 'Cua Năm Căn - Cà Mau cùng với các đặc sản: mật ong U Minh, tôm khô Rạch Gốc, khô bổi U Minh, mắm cá lóc Thới Bình, cá chình cá bống tượng Tân Thành,...', 450, 10, 10),
(11, 'Mắm cá sặc', 1, 5, 'Bến Tre', 'Hủ', 'Mắm cá sặc là loại mắm được làm từ những con cá sặc sống tự nhiên trong nước ngọt.', 500, 21, 11),
(12, 'Mắm cá linh', 1, 7, 'Bến Tre', 'Hủ', 'Mắm cá linh nguyên con là loại mắm được làm từ những con cá linh được thiên nhiên ban tặng vùng đất miền miền tây Nam Bộ', 500, 22, 12),
(13, 'Mắm thái', 1, 0, 'Bến Tre', 'Hủ ', 'Mắm thái Miền Tây là loại mắm được làm từ đu đủ thái sợi trộn với mắm cá lóc thái sợi miếng vừa ăn, người vùng miền tây Nam ', 500, 23, 13),
(14, 'Mắm ba khía', 1, 10, 'Vĩnh long', 'Hủ ', 'Mắm ba khía là loại mắm được làm chủ yếu từ con ba khía (một loài họ cua có càng to, đặc trưng ở vùng Nam bộ, sống tập trung ở vùng nước lợ, mặn, trải từ Cần Thơ đến Sóc Trăng', 500, 24, 14),
(15, 'Mắm tép', 1, 10, 'Sóc Trăng', 'Hủ ', 'Mắm miền tây ngon nức tiếng ngoài mắm cá linh, mắm cá sặc…thì không thể không kể đến mắm tép.', 300, 25, 15),
(16, 'Bánh pía', 1, 0, 'Sóc Trăng', 'Túi ', 'Bánh pía kim sa mè đen túi 400g là một trong những dòng sản phẩm bánh pía không sầu riêng bán chạy nhất hiện nay, với thành phần chính là lá dứa và trứng muối tan chay ...', 400, 26, 16),
(17, 'Mắm rươi', 1, 22, 'Trà Vinh', 'chay ', 'Hương vị nước mắm rươi rất riêng, hậu ngọt, lại có màu tự nhiên như màu mật ong nên rất bắt mắt.', 700, 27, 17),
(18, 'Bánh tét', 1, 23, 'Cần thơ', 'đòn ', 'Bánh tét Trà Cuôn – Trà Vinh, một trong hai loại bánh tét nổi tiếng nhứt miền nam gói tại Trà Vinh', 750, 28, 18),
(19, 'Mắm còng', 1, 0, 'Gò Công', 'Hủ 350g', 'Trong số các địa phương miền Tây, xứ Gò Công(Tiền Giang) có bí quyết làm món mắm còng thượng hảo hạng.', 350, 29, 19),
(20, 'Bánh da lợn', 1, 0, 'Miền Tây', 'Đòn', 'Đặc trưng của bánh da lợn là gồm nhiều lớp xếp chồng lên nhau với màu sắc đan xen vô cùng bắt mắt. ', 20, 30, 20),
(21, 'Khô mực', 1, 21, 'Cà Mau', 'Con', 'Nổi tiếng thơm dai ngon ngọt, tiếng thơm Khô mực Cà Mau đồn xa khắp đây đó. Và cũng vì độ nổi tiếng này mà trên thị trường đã xuất hiện sản phẩm Khô mực Cà Mau theo kiểu “treo đầu dê bán thịt chó”.', 500, 11, 21),
(22, 'Mực trứng', 1, 15, 'Cà mau', 'Con', 'Mực trứng là một món ăn khó bỏ qua khi nhắc đến hải sản miền biển. Có vị ngọt từ mực, thơm béo từ trứng là hương vị bạn khi ăn một lần khó có thể quên được.', 150, 12, 22),
(23, 'Chả mực', 1, 12, 'Sóc Trăng', '1 gói 250g', 'Chả mực được làm từ những con mực tươi ngon của Sóc Trăng. Chúng tôi cam kết chả mực được làm 100% từ mực tươi nguyên chất, không pha trộn bất kì chất độc hại, an toàn vệ sinh thực phẩm.', 250, 13, 23),
(24, 'Mực ống', 1, 6, 'Đồng Tháp', '1 túi 700g', 'Mực ống Lý Sơn là loại hải sản có thân cuộn tròn (hình ống), hơi dài, mình mỏng thường dùng làm nguyên liệu cho nhiều món ăn ngon Món ngon: mực ống xào', 700, 14, 24),
(25, 'Mực lá', 1, 0, 'An giang', 'Con', 'Mực lá câu với tên gọi khoa học Sepioteuthis lessoniana là một loài mực ống phổ biến ở các vùng biển nhiệt đới.', 600, 15, 25),
(26, 'Mực Xé Sợi', 1, 20, 'Cần Thơ', 'Hộp 300g', 'Mực xé sợi thơm ngon, hấp dẫn, tiện dụng cho mọi nhà. Nhanh tay gọi cho chúng tôi để được giao hàng tận nơi trên toàn quốc.', 300, 16, 26),
(27, 'Mực ghim', 1, 0, 'Kiên Giang', 'Con', 'Gọi là mực ghim là bởi hình dáng của chúng thường cuộn tròn như một cây ghim. Toàn thân mực có màu trắng đỏ đặc trưng. Khi trưởng thành, một con mực này có thể có kích cỡ từ 10 - 12 cm. Kích cỡ này nhỏ hơn khá nhiều so với mực nang.', 1000, 17, 27),
(28, 'Mực lá câu', 1, 0, 'Kiên Giang', 'Con', 'Mực lá câu với tên gọi khoa học Sepioteuthis lessoniana là một loài mực ống phổ biến ở các vùng biển nhiệt đới. ', 600, 18, 28),
(29, 'Mực bầu baby', 1, 0, 'Cà Mau', 'Con', 'Nguồn gốc xuất xứMực bầu baby được người dân xứ biển gọi tên là mực cóc; mực nút. Mực bầu baby thuộc họ mực nang kích thước nhỏ, cỡ khoảng 2 - 7 cm/ con', 350, 19, 29),
(30, 'Bạch tuộc', 1, 30, 'Cà Mau', 'Con', 'Bạch tuộc là món ăn ngon, hấp dẫn nhiều người bởi cái giòn dai sần sật thú vị và mang đậm hương vị của Miền Tây.', 150, 20, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package`
--

CREATE TABLE `package` (
  `id` int(10) NOT NULL,
  `id_prd` int(10) NOT NULL,
  `time` date NOT NULL,
  `id_User` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `id_catalog` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double(10,0) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `id_catalog`, `name`, `price`, `qty`) VALUES
(1, 6, 'Thanh cua surimi', 300000, 150),
(2, 6, 'Cua đồng xây', 100000, 150),
(3, 6, 'Thịt càng ghẹ', 145000, 150),
(4, 6, 'Cua Cà Mau', 190000, 150),
(5, 6, 'Cua gạch Cà Mau', 260000, 150),
(6, 6, 'Ghẹ mặt trăng', 140000, 150),
(7, 6, 'Cua đồng', 90000, 150),
(8, 6, 'Càng cua đồng', 50000, 150),
(9, 6, 'Ba khía', 150000, 150),
(10, 6, 'Cua năm căn', 240000, 150),
(11, 3, 'Khô mực', 190000, 150),
(12, 7, 'Mực trứng', 161000, 150),
(13, 7, 'Chả mực', 200000, 150),
(14, 7, 'Mực ống', 240000, 150),
(15, 7, 'Mực lá', 180000, 150),
(16, 7, 'Mực xé sợi', 30000, 150),
(17, 7, 'Mực ghim', 260000, 150),
(18, 7, 'Mực lá câu', 210000, 150),
(19, 7, 'Mực bầu baby', 250000, 150),
(20, 7, 'Bạch tuộc', 140000, 150),
(21, 2, 'Mắm cá sặc', 75000, 200),
(22, 2, 'Mắm cá linh', 85000, 150),
(23, 2, 'Mắm thái', 250000, 200),
(24, 2, 'Mắm ba khía', 140000, 200),
(25, 2, 'Mắm tép', 60000, 200),
(26, 2, 'Bánh pía', 60000, 200),
(27, 2, 'Mắm rươi', 55000, 200),
(28, 2, 'Bánh tét', 195000, 200),
(29, 2, 'Mắm còng', 75000, 200),
(30, 2, 'Bánh da lợn', 5000, 200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trans_unit`
--

CREATE TABLE `trans_unit` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role_user` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_album` (`id_prd`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `comment_product` (`id_prd`),
  ADD KEY `comment_user` (`id_user`);

--
-- Chỉ mục cho bảng `detail_package`
--
ALTER TABLE `detail_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail package_package` (`id_DH`),
  ADD KEY `detail package_trans` (`id_trans`);

--
-- Chỉ mục cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`id_DP`),
  ADD KEY `detail product_product` (`id_prd`),
  ADD KEY `detail product_album` (`id_album`);

--
-- Chỉ mục cho bảng `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_product` (`id_prd`),
  ADD KEY `package_user` (`id_User`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_catalog` (`id_catalog`);

--
-- Chỉ mục cho bảng `trans_unit`
--
ALTER TABLE `trans_unit`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detail_package`
--
ALTER TABLE `detail_package`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `id_DP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `trans_unit`
--
ALTER TABLE `trans_unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `product_album` FOREIGN KEY (`id_prd`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_product` FOREIGN KEY (`id_prd`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `detail_package`
--
ALTER TABLE `detail_package`
  ADD CONSTRAINT `detail package_package` FOREIGN KEY (`id_DH`) REFERENCES `package` (`id`),
  ADD CONSTRAINT `detail package_trans` FOREIGN KEY (`id_trans`) REFERENCES `trans_unit` (`id`);

--
-- Các ràng buộc cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD CONSTRAINT `detail product_album` FOREIGN KEY (`id_album`) REFERENCES `album` (`id`),
  ADD CONSTRAINT `detail product_product` FOREIGN KEY (`id_prd`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_product` FOREIGN KEY (`id_prd`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `package_user` FOREIGN KEY (`id_User`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id_catalog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
