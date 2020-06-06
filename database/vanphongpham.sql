-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 05:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanphongpham`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_active` tinyint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `ad_email`, `ad_password`, `ad_name`, `ad_phone`, `ad_active`, `created_at`, `updated_at`) VALUES
(1, 'luutiencnc89@gmail.com', '3aaf6f74eeda1072a01bccb77a01e5c4', 'Lưu Tiến', '0942005988', 1, '2020-05-28 19:39:02', '2020-05-28 19:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_hot` tinyint(4) NOT NULL DEFAULT 0,
  `a_active` tinyint(4) NOT NULL DEFAULT 1,
  `a_menu_id` int(11) NOT NULL DEFAULT 0,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `a_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_hot`, `a_active`, `a_menu_id`, `a_view`, `a_description`, `a_avatar`, `a_content`, `created_at`, `updated_at`) VALUES
(1, 'Miễn phí rèn chữ đẹp cho các bạn học sinh', 'mien-phi-ren-chu-dep-cho-cac-ban-hoc-sinh', 1, 1, 0, 0, '<p>Trong thời đại c&ocirc;ng nghệ th&ocirc;ng tin ph&aacute;t triển, việc sử dụng chữ viết tay đ&atilde; phần n&agrave;o giảm đi nhưng kh&ocirc;ng phải v&igrave; vậy m&agrave; ch&uacute;ng ta c&oacute; thể xem nhẹ việc luyện chữ viết cho học sinh. Lớp luyện viết chữ đẹp miễn ph&iacute; của Văn ph&ograve;ng phẩm Hồng H&agrave; hứa hẹn l&agrave; một địa chỉ tin cậy cho học sinh v&agrave; c&aacute;c phụ huynh trong dịp h&egrave; n&agrave;y.</p>', 'uploads/article/1591150722_mien-phi-ren-chu-dep-cho-hoc-sinh-1466494249.jpg', '<p>Đối với học sinh tiểu học, việc r&egrave;n luyện chữ viết c&oacute; tầm quan trọng đặc biệt. R&egrave;n chữ viết ch&iacute;nh l&agrave; r&egrave;n luyện t&iacute;nh ki&ecirc;n tr&igrave;, cẩn thận cho c&aacute;c em học sinh, gi&uacute;p c&aacute;c em học sinh th&ecirc;m qu&yacute; trọng v&agrave; giữ g&igrave;n vẻ đẹp con chữ Việt.</p>\r\n\r\n<p>V&agrave; một t&iacute;n hiệu đ&aacute;ng mừng trong thời điểm hiện nay, c&aacute;c trung t&acirc;m luyện viết chữ đẹp ng&agrave;y c&agrave;ng được nh&acirc;n rộng. Đặc biệt hơn l&agrave; một số trung t&acirc;m, lớp học luyện chữ miễn ph&iacute; cũng được c&aacute;c tập thể, c&aacute; nh&acirc;n mở ra nhằm động vi&ecirc;n, tạo hứng th&uacute; cho c&aacute;c em học sinh r&egrave;n luyện chữ viết. Hoạt động n&agrave;y đ&atilde; nhận được sự ủng hộ của đ&ocirc;ng đảo c&aacute;c bậc phụ huynh v&agrave; học sinh. Kh&ocirc;ng chỉ đưa con em m&igrave;nh tới lớp luyện chữ m&agrave; c&aacute;c mẹ, c&aacute;c chị c&ograve;n trực tiếp luyện chữ để c&oacute; cơ sở r&egrave;n chữ cho con m&igrave;nh.</p>\r\n\r\n<p>Địa chỉ lớp luyện chữ đẹp miễn ph&iacute; do Văn ph&ograve;ng phẩm Hồng H&agrave; tổ chức l&agrave; một v&iacute; dụ. V&agrave;o c&aacute;c ng&agrave;y thứ 7 v&agrave; chủ nhật h&agrave;ng tuần từ th&aacute;ng 6 đến hết th&aacute;ng 8/2016, c&aacute;c em học sinh tiểu học c&oacute; thể đến trụ sở C&ocirc;ng ty CP Văn ph&ograve;ng phẩm Hồng H&agrave; số 25 L&yacute; Thường Kiệt, H&agrave; Nội để luyện chữ đẹp ho&agrave;n to&agrave;n miễn ph&iacute; với sự hướng dẫn của gi&aacute;o vi&ecirc;n chuy&ecirc;n luyện chữ đẹp tại c&aacute;c trường tiểu học.</p>\r\n\r\n<p>Lớp luyện viết chữ đẹp miễn ph&iacute; tại trụ sở Văn ph&ograve;ng phẩm Hồng H&agrave; l&agrave; địa chỉ luyện chữ đẹp gi&agrave;u t&iacute;nh nh&acirc;n văn v&agrave; l&agrave; một s&acirc;n chơi th&uacute; vị cho học sinh tiểu học trong dịp nghỉ h&egrave;.</p>', '2020-06-02 19:18:42', '2020-06-03 04:11:56'),
(2, 'Tìm hiểu 3 loại giấy Paper One', 'tim-hieu-3-loai-giay-paper-one', 1, 1, 0, 0, '<p><a href=\"https://vanphongpham247.vn/san-pham/giay-a4-paper-one/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>Giấy PaperOne</strong></a>&nbsp;l&agrave; một loạt giấy nh&agrave; v&agrave; văn ph&ograve;ng chất lượng cao được l&agrave;m từ 100% sợi t&aacute;i tạo v&agrave; được thiết kế cho c&aacute;c nhiệm vụ in ấn v&agrave; sao ch&eacute;p đ&ograve;i hỏi khắt khe nhất</p>', 'uploads/article/1591150885_Giấy-PaperOne-300x200.jpg', '<p><a href=\"https://vanphongpham247.vn/san-pham/giay-a4-paper-one/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>Giấy PaperOne</strong></a>&nbsp;l&agrave; một loạt giấy nh&agrave; v&agrave; văn ph&ograve;ng chất lượng cao được l&agrave;m từ 100% sợi t&aacute;i tạo v&agrave; được thiết kế cho c&aacute;c nhiệm vụ in ấn v&agrave; sao ch&eacute;p đ&ograve;i hỏi khắt khe nhất. Với độ mờ vượt trội, giấy PaperOne c&oacute; cả khả năng in đa hướng v&agrave; hai mặt, v&agrave; c&oacute; sẵn trong một loạt c&aacute;c k&iacute;ch cỡ cắt, cũng như cuộn v&agrave; tấm folio. C&aacute;c sản phẩm của giấy PaperOne được chứng nhận PEFC, đảm bảo rằng ch&uacute;ng c&oacute; nguồn gốc từ c&aacute;c nguồn hợp ph&aacute;p, c&oacute; thể truy nguy&ecirc;n v&agrave; bền vững với m&ocirc;i trường.<strong>&nbsp;Giấy Paper One&nbsp;</strong>c&oacute; A4 &ndash; A3 định lượng 70 &ndash; 80 gsm</p>\r\n\r\n<p><strong>1. Giấy PaperOne Copier</strong></p>\r\n\r\n<p><img alt=\"\" height=\"413\" sizes=\"(max-width: 1024px) 100vw, 1024px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Gi%E1%BA%A5y-PaperOne-Copier-1024x413.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Copier-1024x413.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Copier-300x121.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Copier-768x309.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Copier-600x242.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Copier.jpg 1261w\" title=\"Giấy PaperOne Copier\" width=\"1024\" /></p>\r\n\r\n<p>Giấy PaperOne Copier</p>\r\n\r\n<p>Được sản xuất cho m&aacute;y in laser v&agrave; m&aacute;y photocopy để sao ch&eacute;p tốc độ cao , giấy PaperOne Copier cung cấp độ mịn v&agrave; hiệu suất ổn định để đảm bảo mỗi bản in đều đạt được chất lượng cao v&agrave; kh&ocirc;ng gặp sự cố sản xuất. Đồ họa v&agrave; văn bản sẽ xuất hiện sắc n&eacute;t v&agrave; dễ đọc, ngay cả với những người d&ugrave;ng kh&oacute; t&iacute;nh nhất. Với C&ocirc;ng nghệ in ProDigiTM HD,&nbsp;<strong>giấy PaperOne Copier&nbsp;</strong>cũng gi&uacute;p bảo quản trống m&aacute;y in với độ m&agrave;i m&ograve;n bề mặt &iacute;t hơn so với giấy th&ocirc;ng thường.</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; 2. Giấy PaperOne Digital</strong></p>\r\n\r\n<p><img alt=\"\" height=\"397\" sizes=\"(max-width: 1024px) 100vw, 1024px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Gi%E1%BA%A5y-PaperOne-Digital-1024x397.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Digital-1024x397.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Digital-300x116.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Digital-768x298.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Digital-600x233.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-Digital.jpg 1207w\" title=\"Giấy PaperOne Digital\" width=\"1024\" /></p>\r\n\r\n<p>Giấy PaperOne Digital</p>\r\n\r\n<p>Được thiết kế cho m&agrave;u kỹ thuật số &ndash; in laser &amp; in phun</p>\r\n\r\n<p>Nếu bạn l&agrave; người d&ugrave;ng s&agrave;nh điệu đang t&igrave;m c&aacute;ch sản xuất c&aacute;c t&agrave;i liệu c&oacute; t&aacute;c động cao bằng m&aacute;y in phun hoặc m&aacute;y in laser mới nhất,&nbsp;<strong>giấy PaperOne Digital&nbsp;</strong>l&agrave; loại giấy chất lượng cao m&agrave; bạn muốn tr&igrave;nh b&agrave;y bất kỳ t&aacute;c phẩm chất lượng cao n&agrave;o. Với độ mịn được th&ecirc;m v&agrave;o v&agrave; độ trắng v&ocirc; song, n&oacute; vượt trội so với c&aacute;c loại giấy tờ kh&aacute;c khi g&acirc;y ấn tượng với người đọc bằng bất kỳ văn bản hoặc đồ họa c&oacute; độ ph&acirc;n giải cao. Được trao quyền bởi C&ocirc;ng nghệ in HD ProDigiTM, n&oacute; cũng hoạt động ho&agrave;n hảo với m&aacute;y in phun hoặc m&aacute;y in laser mới nhất.</p>\r\n\r\n<p><strong>Giấy PaperOne ALL PURPOSE</strong></p>\r\n\r\n<p><img alt=\"\" height=\"512\" sizes=\"(max-width: 1024px) 100vw, 1024px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Gi%E1%BA%A5y-PaperOne-ALL-PURPOSE-1024x512.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-ALL-PURPOSE-1024x512.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-ALL-PURPOSE-300x150.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-ALL-PURPOSE-768x384.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-ALL-PURPOSE-600x300.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Giấy-PaperOne-ALL-PURPOSE.jpg 1065w\" title=\"Giấy PaperOne ALL PURPOSE  Được sản xuất hoàn thiện cho các máy in gia đình và máy in, máy Photocopy văn phòng hiện đại. Giấy PaperOne All Purpose là loại giấy cho gia đình và văn phòng chất lượng cao cho tất cả các loại máy in và máy Photocopy. Nó là một loại giấy linh hoạt có khả năng chuyển đổi từ máy này sang máy khác với kết quả in tuyệt vời. Nó có độ trắng và độ dày siêu cao tạo ra các tài liệu đẳng cấp thế giới với các bản in sắc nét và rõ ràng.\" width=\"1024\" /></p>\r\n\r\n<p><strong>Giấy PaperOne All Purpose</strong>&nbsp;Được sản xuất ho&agrave;n thiện cho c&aacute;c m&aacute;y in gia đ&igrave;nh v&agrave; m&aacute;y in, m&aacute;y Photocopy văn ph&ograve;ng hiện đại. Giấy PaperOne All Purpose l&agrave; loại giấy cho gia đ&igrave;nh v&agrave; văn ph&ograve;ng chất lượng cao cho tất cả c&aacute;c loại m&aacute;y in v&agrave; m&aacute;y Photocopy. N&oacute; l&agrave; một loại giấy linh hoạt c&oacute; khả năng chuyển đổi từ m&aacute;y n&agrave;y sang m&aacute;y kh&aacute;c với kết quả in tuyệt vời. N&oacute; c&oacute; độ trắng v&agrave; độ d&agrave;y si&ecirc;u cao tạo ra c&aacute;c t&agrave;i liệu đẳng cấp thế giới với c&aacute;c bản in sắc n&eacute;t v&agrave; r&otilde; r&agrave;ng.</p>', '2020-06-02 19:21:25', '2020-06-02 19:24:15'),
(3, 'Giới thiệu các loại Decal', 'gioi-thieu-cac-loai-decal', 1, 1, 0, 0, '<p><strong>Việc lựa chọn chất liệu Decal đang l&agrave; sự lựa chọn của nhiều người. Ch&uacute;ng tỗi xin giới thiệu 8 loại giấy Decal phổ biến nhất hiện nay bạn tạo ra ấn phẩm tem nh&atilde;n cho sản phẩm của m&igrave;nh thật ấn tượng.</strong></p>', 'uploads/article/1591150957_cac-loai-giay-decal-a4-300x200.jpg', '<p><strong>&nbsp; &nbsp;1.Decal giấy th&ocirc;ng thường khamit</strong></p>\r\n\r\n<p>L&agrave; loại giấy c&oacute; đế trắng, gi&aacute; cả hợp l&yacute; ph&ugrave; hợp cho việc in tem nh&atilde;n số lượng lớn, thường sử dụng trong những sản phẩm d&aacute;n l&ecirc;n t&uacute;i đựng sản phẩm, hoặc những trai nhựa.</p>\r\n\r\n<p><img alt=\"\" height=\"850\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-gi%E1%BA%A5y-khami-300x300.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-300x300.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-150x150.jpg 150w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-768x768.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-1024x1024.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-600x600.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-100x100.jpg 100w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami-80x80.jpg 80w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-khami.jpg 1200w\" title=\"Decal giấy khamit\" width=\"850\" /></p>\r\n\r\n<p>Decal giấy khamit</p>\r\n\r\n<p><strong>&nbsp; &nbsp;2.Decal giấy Amazon</strong></p>\r\n\r\n<p>L&agrave; loại&nbsp;<a href=\"https://vanphongpham247.vn/san-pham/giay-decal-amazon/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>Decal giấy Amazon&nbsp;</strong></a>c&oacute; đế v&agrave;ng chấm đỏ, hoặc chấm xanh, hoặc chấm ghi. Loại decal n&agrave;y thường c&oacute; nhiều keo hơn loại decal Khamit, n&ecirc;n hay được sử dụng trong việc d&aacute;n c&aacute;c chai lọ thủy tinh, gi&uacute;p b&aacute;m chắc hơn, để đảm bảo được những th&ocirc;ng tin ghi tr&ecirc;n sản phẩm kh&ocirc;ng bị rơi ra qua qu&aacute; tr&igrave;nh vận chuyển v&agrave; sử dụng.</p>\r\n\r\n<p><img alt=\"\" height=\"638\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-gi%E1%BA%A5y-amazon--300x225.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-amazon--300x225.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-amazon--768x576.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-amazon--1024x768.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-amazon--600x450.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-giấy-amazon-.jpg 1600w\" title=\"Decal giấy amazon \" width=\"850\" /></p>\r\n\r\n<p>Decal giấy amazon&nbsp;</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; 3.Decal thiếc</strong></p>\r\n\r\n<p>Decal thiếc n&agrave;y c&oacute; nhiều loại kh&aacute;c nhau, t&ugrave;y v&agrave;o sở th&iacute;ch v&agrave; t&iacute;nh hữu dụng của n&oacute; m&agrave; được c&aacute;c kh&aacute;ch h&agrave;ng lựa chọn ph&ugrave; hợp như: decal thiếc b&oacute;ng (decal gương), decal thiếc mờ. Hai loại n&agrave;y thường được sử dụng trong việc in c&aacute;c th&ocirc;ng số kỹ thuật của m&aacute;y t&iacute;nh, đồ điện tử, &hellip; , loại n&agrave;y thường phải c&aacute;n một lớp m&agrave;ng l&ecirc;n để tr&aacute;nh mất th&ocirc;ng tin sau một thời gian in l&ecirc;n, v&igrave; rất dễ bị bong ch&oacute;c.</p>\r\n\r\n<p><img alt=\"\" height=\"660\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-thi%E1%BA%BFc-b%C3%B3ng-300x233.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-thiếc-bóng-300x233.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-thiếc-bóng.jpg 500w\" title=\"Decal thiếc bóng\" width=\"850\" /></p>\r\n\r\n<p>Decal thiếc b&oacute;ng</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; 4. Decal 7 m&agrave;u</strong></p>\r\n\r\n<p>L&agrave; loại decal c&oacute; m&agrave;u sắc giống cầu vồng, đặc biệt khi nghi&ecirc;ng decal sẽ thấy rất r&otilde; n&eacute;t những m&agrave;u sắc, n&oacute; thường được sử dụng trong việc in tem bảo h&agrave;nh m&aacute;y.</p>\r\n\r\n<p><img alt=\"\" height=\"463\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-7-m%C3%A0u-300x163.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-7-màu-300x163.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-7-màu-768x418.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-7-màu-600x327.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-7-màu.jpg 880w\" title=\"Decal 7 màu\" width=\"850\" /></p>\r\n\r\n<p>Decal 7 m&agrave;u</p>\r\n\r\n<p><strong>5. Decal vỡ</strong></p>\r\n\r\n<p>L&agrave; loại&nbsp;<strong>Decal vỡ</strong>&nbsp;thường được sử dụng để in tem bảo h&agrave;nh cho dịch vụ sửa chữa hoặc đổi trả n&agrave;o đ&oacute; m&agrave; c&oacute; ng&agrave;y th&aacute;ng. Loại n&agrave;y sau khi in một thời gian rất dễ bị vỡ nếu t&aacute;c động mạnh v&agrave; b&oacute;c ra l&agrave; c&oacute; th&ecirc; bị vỡ ngay.</p>\r\n\r\n<p><img alt=\"\" height=\"447\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-v%E1%BB%A1-300x158.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-vỡ-300x158.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-vỡ-768x404.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-vỡ-1024x539.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-vỡ-600x316.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-vỡ.jpg 1234w\" title=\"Decal vỡ\" width=\"850\" /></p>\r\n\r\n<p>Decal vỡ</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp;6. Decal trong b&oacute;ng k&iacute;nh&nbsp;</strong></p>\r\n\r\n<p><a href=\"https://vanphongpham247.vn/san-pham/giay-in-decal-trong-decal-bong-kinh/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>Decal trong b&oacute;ng k&iacute;nh&nbsp;</strong></a>c&oacute; 2 loại decal: Decal trong v&agrave; Decal&nbsp; mờ, Loại Decal mờ nhưng đục hơn chất liệu decal trong, L&agrave; loại decal khi b&oacute;c ra trong suốt, c&oacute; thể nh&igrave;n xuy&ecirc;n thấu. Thường được sử dụng trong c&aacute;c việc in logo, m&agrave; kh&aacute;ch h&agrave;ng muốn lộ h&igrave;nh ảnh sản phẩm r&otilde; n&eacute;t hoặc m&agrave;u sắc b&ecirc;n trong sản phẩm.</p>\r\n\r\n<p><img alt=\"\" height=\"585\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-B%C3%B3ng-k%C3%ADnh1-300x206.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-Bóng-kính1-300x206.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-Bóng-kính1.jpg 401w\" title=\"Decal trong bóng kính\" width=\"850\" /></p>\r\n\r\n<p>Decal trong b&oacute;ng k&iacute;nh</p>\r\n\r\n<p><strong>&nbsp; &nbsp;7.Decal photo paper</strong></p>\r\n\r\n<p>Tem nh&atilde;n kh&ocirc;ng chỉ c&oacute; thể sử dụng in tr&ecirc;n chất liệu&nbsp;<a href=\"https://vanphongpham247.vn/san-pham/decan-anh-a4/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>Decal photo paper&nbsp;</strong></a>c&oacute; thể b&oacute;c được m&agrave; đ&ocirc;i khi để tiết kiệm chi ph&iacute; bạn c&oacute; thể sử dụng chất liệu giấy th&ocirc;ng thường c&oacute; độ b&oacute;ng để n&oacute;i l&ecirc;n c&ocirc;ng dụng, chức năng v&agrave; những t&aacute;c dụng phụ đối với một số đối tượng của sản phẩm, bạn c&oacute; thể để tem nh&atilde;n n&agrave;y trong hộp sản phẩm.</p>\r\n\r\n<p><img alt=\"\" height=\"595\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-photo-paper-300x210.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-photo-paper-300x210.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-photo-paper-600x420.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-photo-paper.jpg 640w\" title=\"Decal photo paper\" width=\"850\" /></p>\r\n\r\n<p>Decal photo paper</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp;8.Decal da b&ograve;</strong></p>\r\n\r\n<p><a href=\"https://vanphongpham247.vn/san-pham/decal-da-bo/\" rel=\"noopener noreferrer\" target=\"_blank\">Giấy in Decal da b&ograve;</a>&nbsp;bề mặt in m&agrave;u n&acirc;u, chất giấy kraft hơi nh&aacute;m tạo sự độc đ&aacute;o lạ mắt cho bản in sinh động hơn. Nhờ bề mặt kraft n&ecirc;n thẩm thấu mực nhanh hơn c&aacute;c loại giấy thường đạt 80% chất lượng in.</p>\r\n\r\n<p><img alt=\"\" height=\"850\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-da-b%C3%B2-300x300.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-da-bò-300x300.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-da-bò-150x150.jpg 150w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-da-bò-100x100.jpg 100w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-da-bò-80x80.jpg 80w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Decal-da-bò.jpg 500w\" title=\"Decal da bò\" width=\"850\" /></p>\r\n\r\n<p>Decal da b&ograve;</p>\r\n\r\n<h4><strong>Để mua giấy c&aacute;c sản phẩm Decal tại H&agrave; Nội qu&yacute; kh&aacute;ch li&ecirc;n hệ theo:</strong></h4>\r\n\r\n<h1><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TEL &ndash;&nbsp;0243.7965566</strong></h1>\r\n\r\n<h1><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SĐT :0973.836.669</strong></h1>', '2020-06-02 19:22:37', '2020-06-02 19:24:19'),
(4, 'Kích thước các khổ giấy', 'kich-thuoc-cac-kho-giay', 1, 1, 0, 0, '<p>Thuờng xuy&ecirc;n xử dụng giấy để in hoặc Photo nhưng c&oacute; lẽ chưa chắc bạn đ&atilde; thuộc hết k&iacute;ch thước c&aacute;c khổ giấy v&agrave; giấy bạn đang sử dụng thuộc khổ bao nhi&ecirc;u v&agrave; k&iacute;ch thước bao nhi&ecirc;u.</p>', 'uploads/article/1591151343_paper-sizes-300x200.png', '<h3>K&iacute;ch thước c&aacute;c loại khổ giấy hiện nay</h3>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" height=\"313\" sizes=\"(max-width: 443px) 100vw, 443px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/08/paper-sizes-1-300x212.png\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/08/paper-sizes-1-300x212.png 300w, https://vanphongpham247.vn/wp-content/uploads/2018/08/paper-sizes-1.png 600w\" width=\"443\" /></p>\r\n\r\n			<p>&ndash; Thuờng xuy&ecirc;n xử dụng giấy để in hoặc Photo nhưng c&oacute; lẽ chưa chắc bạn đ&atilde; thuộc hết k&iacute;ch thước c&aacute;c khổ giấy v&agrave; giấy bạn đang sử dụng thuộc khổ bao nhi&ecirc;u v&agrave; k&iacute;ch thước bao nhi&ecirc;u.</p>\r\n\r\n			<p>&ndash; B&agrave;i viết tổng hợp&nbsp;<strong>k&iacute;ch thuớc c&aacute;c khổ giấy</strong>&nbsp;đang c&oacute; mặt hiện nay hi vọng sẽ c&oacute; l&uacute;c gi&uacute;p &iacute;ch đuợc qu&yacute; độc giả.</p>\r\n\r\n			<p><strong>&ndash; K&iacute;ch thuớc khổ giấy A3 A4</strong>&nbsp;l&agrave; đuợc sử dụng nhiều v&agrave; th&ocirc;ng dụng nhất.</p>\r\n\r\n			<p>&ndash; Bạn sẽ kh&ocirc;ng c&ograve;n phải thắc mắc k&iacute;ch thước khổ giấy A0 A1 A3 A4 B0 B1 B4 C0 C1 &hellip; l&agrave; bao nhi&ecirc;u nữa.</p>\r\n\r\n			<p>Bảng:&nbsp;<strong><em>K&iacute;ch thước khổ giấy c&aacute;c loại hiện nay</em></strong></p>\r\n\r\n			<table border=\"1\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td>&nbsp;<strong>Khổ A</strong></td>\r\n						<td>&nbsp;<strong>K&iacute;ch thuớc ( Mm)</strong></td>\r\n						<td>&nbsp;<strong>Khổ B</strong></td>\r\n						<td>&nbsp;<strong>K&iacute;ch thuớc ( Mm)</strong></td>\r\n						<td>&nbsp;<strong>Khổ C</strong></td>\r\n						<td>&nbsp;<strong>K&iacute;ch thuớc ( Mm)</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A0</td>\r\n						<td>841&times;1189</td>\r\n						<td>&nbsp;B0</td>\r\n						<td>1000&times;1414</td>\r\n						<td>&nbsp;C0</td>\r\n						<td>917&times;1297</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A1</td>\r\n						<td>594&times;841</td>\r\n						<td>&nbsp; B1</td>\r\n						<td>707&times;1000</td>\r\n						<td>&nbsp;C1</td>\r\n						<td>648&times;917</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A2</td>\r\n						<td>420&times;594</td>\r\n						<td>&nbsp;B2</td>\r\n						<td>500&times;707</td>\r\n						<td>&nbsp;C2</td>\r\n						<td>458&times;648</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A3</td>\r\n						<td>297&times;420</td>\r\n						<td>&nbsp;B3</td>\r\n						<td>353&times;500</td>\r\n						<td>&nbsp;C3</td>\r\n						<td>324&times;458</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A4</td>\r\n						<td>210&times;297</td>\r\n						<td>&nbsp;B4</td>\r\n						<td>250&times;353</td>\r\n						<td>&nbsp;C4</td>\r\n						<td>229&times;324</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A5</td>\r\n						<td>148&times;210</td>\r\n						<td>&nbsp;B5</td>\r\n						<td>176&times;250</td>\r\n						<td>&nbsp;C5</td>\r\n						<td>162&times;229</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A6</td>\r\n						<td>105&times;148</td>\r\n						<td>&nbsp;B6</td>\r\n						<td>125&times;176</td>\r\n						<td>&nbsp;C6</td>\r\n						<td>114&times;162</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A7</td>\r\n						<td>74&times;105</td>\r\n						<td>&nbsp;B7</td>\r\n						<td>88&times;125</td>\r\n						<td>&nbsp;C7</td>\r\n						<td>81&times;114</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A8</td>\r\n						<td>52&times;74</td>\r\n						<td>&nbsp;B8</td>\r\n						<td>52&times;88</td>\r\n						<td>&nbsp;C8</td>\r\n						<td>57&times;81</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A9</td>\r\n						<td>37&times;52</td>\r\n						<td>&nbsp;B9</td>\r\n						<td>44&times;62</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A10</td>\r\n						<td>26&times;37</td>\r\n						<td>&nbsp;B10</td>\r\n						<td>31&times;44</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A11</td>\r\n						<td>18&times;26</td>\r\n						<td>&nbsp;B11</td>\r\n						<td>22X31</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A12</td>\r\n						<td>13&times;18</td>\r\n						<td>&nbsp; B12</td>\r\n						<td>15&times;22</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;A13</td>\r\n						<td>9&times;13</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p>H&atilde;y gh&eacute; thăm Website:&nbsp;<a href=\"https://vanphongpham247.vn/\">https://vanphongpham247.vn</a>&nbsp;thường xuy&ecirc;n hơn để cập nhật mẹo vặt v&agrave; những th&ocirc;ng tin hữu &iacute;ch nhất m&agrave; bạn chưa từng để &yacute; đến.</p>\r\n\r\n			<p><strong>Hotline 0973836669</strong>&nbsp;<a href=\"https://cic24h.vn/dich-vu-may-in-dv-may-tinh\"><strong>Dịch vụ sửa m&aacute;y in</strong></a>&nbsp;tại nh&agrave; H&agrave; Nội Uy t&iacute;n chất lượng Số 1 hiện nay. Lưu lại sẽ c&oacute; l&uacute;c bạn cần đến.</p>\r\n\r\n			<p>Tag:&nbsp;<strong>K&iacute;ch thước khổ giấy A3</strong>,&nbsp;<strong>K&iacute;ch thước khổ giấy A4</strong>,&nbsp;<strong>K&iacute;ch thước khổ giấy A0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2020-06-02 19:24:12', '2020-06-02 19:29:03'),
(5, 'Tìm hiểu giấy in Decal trong bóng kính', 'tim-hieu-giay-in-decal-trong-bong-kinh', 0, 1, 0, 0, '<p><strong>Decal trong suốt (Decal b&oacute;ng k&iacute;nh) l&agrave; loại&nbsp;<a href=\"https://vanphongpham247.vn/san-pham/giay-decal-amazon/\">decal in ảnh,</a>&nbsp;c&oacute; thể in m&agrave;u l&ecirc;n v&agrave; d&aacute;n l&ecirc;n trang tr&iacute; sản phẩm. Thường ứng dụng trong việc trang tr&iacute; c&aacute;c sản phẩm cần t&iacute;nh thẩm mỹ cao như d&ugrave;ng trong việc d&aacute;n l&ecirc;n chai lọ thủy t&iacute;nh, cửa k&iacute;nh&hellip;</strong></p>', 'uploads/article/1591165629_Decal-Bóng-kính1-4-300x200.jpg', '<p><strong>Gi&acirc;́y in Decal Trong (Decal b&oacute;ng k&iacute;nh)</strong></p>\r\n\r\n<p><strong>Decal b&oacute;ng k&iacute;nh l&agrave; g&igrave;?</strong></p>\r\n\r\n<p><img alt=\"\" height=\"679\" sizes=\"(max-width: 902px) 100vw, 902px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-B%C3%B3ng-k%C3%ADnh-1.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính-1.jpg 902w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính-1-300x226.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính-1-768x578.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính-1-600x452.jpg 600w\" title=\"Giấy in Decal Trong\" width=\"902\" /></p>\r\n\r\n<p>Decal trong suốt (Decal b&oacute;ng k&iacute;nh) l&agrave; loại&nbsp;<a href=\"https://vanphongpham247.vn/san-pham/giay-decal-amazon/\">decal in ảnh,</a>&nbsp;c&oacute; thể in m&agrave;u l&ecirc;n v&agrave; d&aacute;n l&ecirc;n trang tr&iacute; sản phẩm. Thường ứng dụng trong việc trang tr&iacute; c&aacute;c sản phẩm cần t&iacute;nh thẩm mỹ cao như d&ugrave;ng trong việc d&aacute;n l&ecirc;n chai lọ thủy t&iacute;nh, cửa k&iacute;nh&hellip;</p>\r\n\r\n<p>Decal trong suốt c&oacute; độ mỏng, dẻo dai h&agrave;ng đầu trong c&aacute;c loại chất liệu decal.</p>\r\n\r\n<p>Decal trong suốt c&oacute; thể d&aacute;n l&ecirc;n c&aacute;c bề mặt cong cũng như bề mặt phẳng.</p>\r\n\r\n<p>Decal b&oacute;ng k&iacute;nh c&oacute; rất nhiều loại v&agrave; c&aacute;c khổ A4 &ndash; A0</p>\r\n\r\n<p>Thay v&igrave; in ấn trực tiếp l&ecirc;n bề mặt chất liệu như: k&iacute;nh, nhựa, sứ,&hellip; sử dụng decal trong d&aacute;n gi&uacute;p giảm gi&aacute; th&agrave;nh thực hiện, c&oacute; thể thay mới hoặc gỡ bỏ khi kh&ocirc;ng c&ograve;n sử dụng. In decal trong suốt gi&uacute;p đặt in mọi h&igrave;nh ảnh, đặc biệt l&agrave; những h&igrave;nh c&oacute; thiết kế chi tiết m&agrave; khu&ocirc;n in.</p>\r\n\r\n<p><img alt=\"\" height=\"680\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-B%C3%B3ng-k%C3%ADnh2-2-300x240.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính2-2-300x240.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính2-2.jpg 500w\" title=\"Decal trong bóng kính\" width=\"850\" /></p>\r\n\r\n<p><strong>Decal b&oacute;ng k&iacute;nh ứng dụng v&agrave;o đ&acirc;u?</strong></p>\r\n\r\n<p>Bạn c&oacute; thể sử dụng Decal b&oacute;ng k&iacute;nh v&agrave;o bề mặt trong suốt như mặt k&iacute;nh, chai lọ thủy tinh, hay ng&agrave;y tr&ecirc;n mũ bảo hiểm&hellip; D&aacute;n l&ecirc;n bề mặt cửa k&iacute;nh, trang tr&iacute; cửa ra v&agrave;o tại c&aacute;c shop b&aacute;n h&agrave;ng tạo sự thu h&uacute;t mặt tiền của c&aacute;c shop, v&agrave; d&ugrave;ng trang tr&iacute; cho cả nh&agrave; ở.</p>\r\n\r\n<p>&ndash; Trước ti&ecirc;n cần n&oacute;i tới quy c&aacute;ch của sản phẩm với trọng lượng nhẹ, bề mặt mỏng v&agrave; trong c&oacute; bo g&oacute;c, c&oacute; m&agrave;ng mỏng để d&aacute;n l&ecirc;n bề mặt rất tiện &iacute;ch, t&iacute;nh thẩm mỹ cao, hơn nữa c&ograve;n tiết kiệm chi ph&iacute;.</p>\r\n\r\n<p>&ndash;&nbsp;Decal trong suốt d&aacute;n k&iacute;nh&nbsp;&ndash; D&aacute;n l&ecirc;n mặt k&iacute;nh thủy tinh, c&oacute; thể d&ugrave;ng tem k&iacute;nh rất ph&ugrave; hợp.</p>\r\n\r\n<p>&ndash; D&aacute;n trang tr&iacute; l&ecirc;n c&aacute;c vật phẩm qu&agrave; tặng như tr&ecirc;n c&aacute;c cốc ly thủy tinh, ly sứ.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"\" height=\"567\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-B%C3%B3ng-k%C3%ADnh5-300x200.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính5-300x200.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính5.jpg 600w\" title=\"Decal trong bóng kính\" width=\"850\" /></p>\r\n\r\n<p>&ndash; D&aacute;n trang tr&iacute; chai lọ thủy tinh, l&agrave;m tem nh&atilde;n tr&agrave; sữa một trong những ứng dụng th&ocirc;ng dụng nhất của&nbsp;decal trong suốt khổ A4</p>\r\n\r\n<p><strong>Decal trong</strong>&nbsp;l&agrave; chất liệu nhựa trong suốt kh&ocirc;ng thấm nước được ứng dụng phổ biến để in d&aacute;n l&ecirc;n phale,k&iacute;nh,ly thủy tinh&hellip; c&oacute; độ b&aacute;n d&iacute;nh tốt tr&ecirc;n mọi vật liệu nh&igrave;n xuy&ecirc;n qua vật tư in,sử dụng mực&nbsp;<strong>pigment UV</strong>&nbsp;để in bằng&nbsp;<strong>m&aacute;y in phun m&agrave;u EPSON T60-T50-1390-</strong><strong>1430.</strong></p>\r\n\r\n<p><img alt=\"\" height=\"638\" sizes=\"(max-width: 850px) 100vw, 850px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-B%C3%B3ng-k%C3%ADnh3-300x225.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính3-300x225.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính3-600x450.jpg 600w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Decal-Bóng-kính3.jpg 705w\" title=\"Decal trong bóng kính\" width=\"850\" /></p>\r\n\r\n<p><strong>Mua&nbsp;</strong><strong>Decal b&oacute;ng k&iacute;nh ở đ&acirc;u?</strong></p>\r\n\r\n<p><strong>B&ecirc;n ngo&agrave;i thị trường c&oacute; rất nhiều địa chỉ b&aacute;n&nbsp;</strong><strong>Decal b&oacute;ng k&iacute;nh</strong>&nbsp;bạn lưu &yacute; rằng c&oacute; rất nhiều loại decal với chất lượng kh&aacute;c nhau được b&aacute;n tr&ecirc;n thị trường, nếu như kh&ocirc;ng may bạn mua phải loại decal k&eacute;m chất lượng th&igrave; sẽ dẫn tới th&ocirc;ng tin h&igrave;nh ảnh in kh&ocirc;ng được như mong muốn v&agrave; khi d&iacute;nh sẽ bị bong tr&oacute;c như thế lại v&ocirc; t&igrave;nh từ l&agrave;m đẹp lại th&agrave;nh l&agrave;m xấu kh&ocirc;ng gian, sản phẩm của bạn v&agrave; bạn lại phải tốn tiền đi t&igrave;m mua sản phẩm kh&aacute;c.</p>\r\n\r\n<p>Để bạn mua decal giấy trong suốt c&oacute; chất lượng tốt, đảm bảo nhất cho bạn, gi&aacute; decal trong suốt tốt nhất th&igrave; đơn vị uy t&iacute;n C&ocirc;ng ty TNHH CMC Kinh Bắc l&agrave; đơn vị cung cấp&nbsp;<strong>Decal b&oacute;ng k&iacute;nh&nbsp;</strong>chất lượng uy t&iacute;n tại H&agrave; Nội, giao h&agrave;ng nhanh ch&oacute;ng v&agrave; miễn ph&iacute; cho kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<h4><strong>Để mua giấy decal trong suốt tại H&agrave; Nội qu&yacute; kh&aacute;ch li&ecirc;n hệ theo:</strong></h4>\r\n\r\n<h1><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TEL &ndash;&nbsp;0243.7965566</strong></h1>\r\n\r\n<h1><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SĐT :0973.836.669</strong></h1>', '2020-06-02 23:27:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_parent_id` tinyint(4) NOT NULL DEFAULT 0,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_avatar`, `c_slug`, `c_description`, `c_parent_id`, `c_status`, `meta_keywords`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'GIẤY IN - BÌA MÀU', NULL, 'giay-in-bia-mau', NULL, 0, 1, 'giấy in, giay in, giấy photo, giay photo, giấy than, giay than, giấy note, giay note', 'HD Tân Phát chuyên cung cấp các loại giấy in, giấy photo, giấy than rẻ nhất Hà Nội', '2020-05-28 02:00:37', NULL),
(2, 'VĂN PHÒNG PHẨM', NULL, 'van-phong-pham', NULL, 0, 1, 'văn phòng phẩm, văn phòng phẩm giá rẻ, văn phòng phẩm hà nội', 'Văn phòng phẩm giá rẻ tại hà nội, giao hàng nhanh chóng và chính xác của văn phòng phẩm Vanphongpham89', '2020-05-28 02:03:55', NULL),
(3, 'DICH VỤ - MÁY VĂN PHÒNG', NULL, 'dich-vu-may-van-phong', NULL, 0, 1, 'Dịch vụ văn phòng, đổ mực in, sửa máy in, Máy văn phòng , thiết bị văn phòng phẩm', 'Văn phòng phẩm Kinh Bắc cung cấp các dịch vụ máy văn phòng Đổ mực Máy in, sửa chữa Máy in - Máy tính - Máy Photo. Liên hê: 0912.939.247 - XEM THÊM!', '2020-05-28 02:05:56', NULL),
(4, 'GIẤY IN ẢNH - DECAL', NULL, 'giay-in-anh-decal', NULL, 0, 1, 'giấy in ảnh giá rẻ, giấy in ảnh A0, giấy in ảnh Decal, giấy in ảnh đẹp..', 'Giấy Decal In Ảnh A4 A3 chuyên dùng ✅In ảnh ✅In nhãn Tem - Logo ✅Trang trí. KINH BẮC tự hào là nơi mua sắm Tin cậy - Uy Tín - Giá Tốt', '2020-05-28 02:07:27', NULL),
(5, 'Sản phẩm Giấy', NULL, 'san-pham-giay', NULL, 1, 1, 'giấy in, giay in, giấy photo, giay photo, giấy than, giay than, giấy note, giay note', 'Giấy in, giấy văn phòng, giấy photocopy Văn phòng phẩm KINH BẮC giá rẻ nhất. Nhà phân phối giấy cho các công ty, cửa hàng văn phòng phẩm tại Hà Nội.', '2020-05-28 02:09:21', NULL),
(6, 'Bìa', NULL, 'bia', NULL, 1, 1, 'Bìa mica , bìa bóng kính các loại , bìa màu', 'Giấy in, giấy văn phòng, giấy photocopy Văn phòng phẩm 89 giá rẻ nhất. Nhà phân phối giấy cho các công ty, cửa hàng văn phòng phẩm tại Hà Nội.', '2020-05-28 02:15:21', NULL),
(7, 'Các loại Bút', NULL, 'cac-loai-but', NULL, 2, 1, 'Bút bi, but bi, bút dạ, but da, bút chì, but chi, bút xóa, but xoa, bút nhớ dòng, but nho dong', 'Vanphongpham89.com cung cấp các loại bút giá rẻ tại Hà Nội - Hotline: 0987.676.796', '2020-05-28 02:16:51', NULL),
(8, 'Dụng cụ văn phòng', NULL, 'dung-cu-van-phong', NULL, 2, 1, NULL, NULL, '2020-05-28 02:22:10', NULL),
(9, 'Băng dính - Keo dán', NULL, 'bang-dinh-keo-dan', NULL, 2, 1, 'băng dính, bang dinh, dao văn phòng, dao van phong, kéo văn phòng, keo van phong, cắt băng dính, cat bang dinh', 'Vanphongpham.com cung cấp các loại băng dính, dao, kéo văn phòng chất lượng tốt tại Hà Nội', '2020-05-28 02:23:26', NULL),
(10, 'Bìa còng - Bìa hồ sơ', NULL, 'bia-cong-bia-ho-so', NULL, 2, 1, 'sổ bìa cứng, so bia cung, sổ da, so da, sổ bìa da, so bia da, sổ lò xo, so lo xo', 'Vanphongpham.com chuyên các loại sổ, sổ bìa cứng, sổ bìa da, sổ lò xo chất lượng tốt nhất Hà Nội', '2020-05-28 02:25:15', NULL),
(11, 'Sổ ghi chép - Vở học sinh', NULL, 'so-ghi-chep-vo-hoc-sinh', NULL, 2, 1, 'Sổ bìa cứng, so bia cung, sổ card, so card, phiếu thu, phieu thu, phiếu chi, phieu chi, sổ bìa da, so bia da', 'Vanphongpham.com chuyên các loại sổ bìa cứng, bìa da, phiếu thu, phiếu chi giá rẻ', '2020-05-28 02:26:46', NULL),
(14, 'Dich vụ văn phòng', NULL, 'dich-vu-van-phong', NULL, 3, 1, '<p>sửa m&aacute;y văn ph&ograve;ng, đổ mực m&aacute;y in, sửa chữa m&aacute;y in - m&aacute;y t&iacute;nh - m&aacute;y photo</p>', '<p>Văn ph&ograve;ng phẩm Kinh Bắc chuy&ecirc;n cung cấp dịch vụ sửa m&aacute;y văn ph&ograve;ng, đổ mực m&aacute;y in, sửa chữa m&aacute;y in - m&aacute;y t&iacute;nh - m&aacute;y photo - XEM NGAY!</p>', '2020-05-28 02:29:45', '2020-05-28 21:34:11'),
(15, 'Máy văn phòng', NULL, 'may-van-phong', NULL, 3, 1, 'sửa máy văn phòng, đổ mực máy in, sửa chữa máy in - máy tính - máy photo', 'Vanphongpham.com chuyên cung cấp dịch vụ sửa máy văn phòng, đổ mực máy in, sửa chữa máy in - máy tính - máy photo - XEM NGAY!', '2020-05-28 02:30:40', NULL),
(16, 'Giấy in ảnh', NULL, 'giay-in-anh', NULL, 4, 1, '<p>giấy in ảnh</p>', '<p>Vanphongpham.com chuy&ecirc;n cung cấp c&aacute;c loại giấy in ảnh chất lượng cao</p>', '2020-05-28 02:32:17', '2020-05-28 21:40:57'),
(17, 'Giấy in ảnh A0', NULL, 'giay-in-anh-a0', NULL, 4, 1, '<p>giấy in ảnh A0</p>', '<p>Vanphongpham.com chuy&ecirc;n cung cấp c&aacute;c loại giấy in ảnh chất lượng cao</p>', '2020-05-28 02:33:05', '2020-05-28 21:39:42'),
(18, 'Giấy Decal', NULL, 'giay-decal', NULL, 4, 1, '<p>giấy Decal gi&aacute; rẻ, giấy in ảnh</p>', '<p>Vanphongpham.com chuy&ecirc;n cung cấp c&aacute;c loại giấy in ảnh chất lượng cao</p>', '2020-05-28 02:34:31', '2020-05-28 21:40:06'),
(19, 'Gíây in - Giấy photo', NULL, 'giay-in-giay-photo', NULL, 5, 1, 'giấy in, giay in, giấy photo, giay photo', 'Chuyên cung cấp Giấy in, giấy photo giá rẻ tại Hà Nội - Hotline: 0987.676.796', '2020-05-28 02:35:42', NULL),
(20, 'Giấy photocopy màu', NULL, 'giay-photocopy-mau', NULL, 5, 1, 'giấy in, giay in, giấy photo, giay photo', 'Chuyên cung cấp Giấy in, giấy photo giá rẻ tại Hà Nội - Hotline: 0987.676.796', '2020-05-28 02:38:44', NULL),
(21, 'Giấy Note - Giấy phân trang màu', NULL, 'giay-note-giay-phan-trang-mau', NULL, 5, 1, 'giấy note, giay note, giấy nhớ, giay nho, giấy giao việc, giay giao viec, giay nhan viec', 'Vanphongpham.com chuyên các loại giấy Notes, giấy nhắn, giấy giao việc giá rẻ tại Hà Nội', '2020-05-28 02:39:53', NULL),
(22, 'Gíây Than', NULL, 'giay-than', NULL, 5, 1, 'giấy than, giay than, giấy than màu xanh, giay than mau xanh, giấy than màu đen, giay than mau den', 'Vanphongpham.com chuyên cung cấp giấy than các loại xuất xứ Mỹ, Malaysia giá rẻ và chất lượng', '2020-05-28 02:40:51', NULL),
(23, 'Gíây in liên tục', NULL, 'giay-in-lien-tuc', NULL, 5, 1, 'giấy in, giay in, giấy photo, giay photo', 'Chuyên cung cấp Giấy in, giấy photo giá rẻ tại Hà Nội - Hotline: 0987.676.796', '2020-05-28 02:42:22', NULL),
(24, 'Bìa Mica mờ', NULL, 'bia-mica-mo', NULL, 6, 1, 'Bìa mica, bìa bóng kính các loại , bìa màu', 'Bìa mica - bìa bóng kính các loại', '2020-05-28 02:44:22', NULL),
(25, 'Bìa Mica bóng kính', NULL, 'bia-mica-bong-kinh', NULL, 6, 1, NULL, NULL, '2020-05-28 02:44:42', NULL),
(26, 'Bìa màu', NULL, 'bia-mau', NULL, 6, 1, NULL, NULL, '2020-05-28 02:44:56', NULL),
(27, 'Bút bi', NULL, 'but-bi', NULL, 7, 1, 'bút bi, but bi, bút bi thiên long, but bi thien long, bút bi bến nghé, but bi ben nghe', 'Vanphongpham.com chuyên cung cấp bút bi các loại giá rẻ tại Hà Nội. Hotline: 0987.676.796', '2020-05-28 02:45:25', NULL),
(28, 'Bút chì', NULL, 'but-chi', NULL, 7, 1, 'Vanphongpham.com chuyên bút chì, bút chì kim các loại với nhiều mẫu mã hấp dẫn', 'bút chì, but chi, bút chì kim, but chi kim', '2020-05-28 02:46:07', NULL),
(29, 'Bút dạ', NULL, 'but-da', NULL, 7, 1, 'Vanphongpham.com cung cấp bút dạ bạng, dạ dầu, dạ kính Thiên Long, Pilot, Zebra', 'bút dạ bảng, but da bang, bút dạ dầu, but da dau, bút dạ kính, but da kinh', '2020-05-28 02:47:21', NULL),
(30, 'Bút xóa', NULL, 'but-xoa', NULL, 7, 1, 'vanphongpham.com cung cấp bút xóa, băng phủ các loại với giá thành hấp dẫn', 'bút xóa, but xoa, băng phủ, bang phu', '2020-05-28 02:48:12', NULL),
(31, 'Bấm ghim - Ghim - Kẹp sắt', NULL, 'bam-ghim-ghim-kep-sat', NULL, 8, 1, 'ghim, dập ghim, dap ghim, đục lỗ, duc lo, ghim cài, ghim cai, nhổ ghim, nho ghim', 'vanphongpham.com cung cấp văn phòng phẩm ghim, dập ghim, đục lỗ giá rẻ. Hotline: 0987.676.796', '2020-05-28 02:49:41', NULL),
(32, 'Máy đục lỗ giấy', NULL, 'may-duc-lo-giay', NULL, 8, 1, 'dập ghim, dap ghim, máy dập ghim, may dap ghim, đục lỗ, duc lo', 'vanphongpham.com cung cấp ghim, dập ghim, máy dập ghim, đục lỗ các loại với chất lượng rất tốt', '2020-05-28 02:59:35', NULL),
(33, 'Kéo - Dao dọc giấy', NULL, 'keo-dao-doc-giay', NULL, 8, 1, 'băng dính, bang dinh, dao văn phòng, dao van phong, kéo văn phòng, keo van phong, cắt băng dính, cat bang dinh', 'vanphongpham.com cung cấp các loại băng dính, dao, kéo văn phòng chất lượng tốt tại Hà Nội', '2020-05-28 03:00:36', NULL),
(34, 'Khay đựng tài liệu - Hộp đựng bút', NULL, 'khay-dung-tai-lieu-hop-dung-but', NULL, 8, 1, 'khay cắm bút, khay cam but, cặp hồ sơ, cap ho so, lò xo gáy xoắn, lo xo gay xoan, cặp nhiều ngăn', 'vanphongpham.com chuyên các loại Khay cắm bút và cặp hồ sơ, tài liệu giá rẻ tại Hà Nội - Hotline: 0987.676.796', '2020-05-28 03:01:48', NULL),
(35, 'Bảng từ - Bảng Flipchart', NULL, 'bang-tu-bang-flipchart', NULL, 8, 1, NULL, NULL, '2020-05-28 03:02:38', NULL),
(36, 'Dấu liền mực - Mực dấu', NULL, 'dau-lien-muc-muc-dau', NULL, 8, 1, 'mực dấu, muc dau, mực dấu chức danh, mực dấu công ty, muc dau chuc danh, muc dau cong ty', 'vanphongpham.com cung cấp mực dấu các loại với giá cả hấp dẫn', '2020-05-28 03:03:22', NULL),
(37, 'Bao đựng thẻ - Dây đeo thẻ', NULL, 'bao-dung-the-day-deo-the', NULL, 8, 1, NULL, NULL, '2020-05-28 03:04:03', NULL),
(38, 'Máy tính số', NULL, 'may-tinh-so', NULL, 8, 1, 'Máy tính số, may tinh so, máy tính casio, may tinh casio', 'vanphonpham.com chuyên cung cấp máy tính casio chính hãng chất lượng cao', '2020-05-28 03:05:06', NULL),
(39, 'Băng dính trong', NULL, 'bang-dinh-trong', NULL, 9, 1, 'băng dính, bang dinh, băng dính màng, bang dinh mang, băng keo, bang keo, băng dính hai mặt, bang dinh hai mat', 'vanphongpham.com chuyên cung cấp băng dính, băng keo các loại với chất lượng rất tốt', '2020-05-28 03:06:01', NULL),
(40, 'Băng dính si', NULL, 'bang-dinh-si', NULL, 9, 1, 'băng dính, bang dinh, băng dính màng, bang dinh mang, băng keo, bang keo, băng dính hai mặt, bang dinh hai mat', 'HD Tân Phát chuyên cung cấp băng dính, băng keo các loại với chất lượng rất tốt', '2020-05-28 03:06:46', NULL),
(41, 'Keo dán', NULL, 'keo-dan', NULL, 9, 1, 'băng dính, bang dinh, băng dính màng, bang dinh mang, băng keo, bang keo, băng dính hai mặt, bang dinh hai mat', 'băng dính, bang dinh, băng dính màng, bang dinh mang, băng keo, bang keo, băng dính hai mặt, bang dinh hai mat', '2020-05-28 03:07:32', NULL),
(42, 'Bìa còng - File càng cua', NULL, 'bia-cong-file-cang-cua', NULL, 10, 1, NULL, NULL, '2020-05-28 03:08:22', NULL),
(43, 'Bìa hồ sơ', NULL, 'bia-ho-so', NULL, 10, 1, NULL, 'Chuyên in folder – kẹp file – bìa hồ sơ chất lượng. In rõ nét chuẩn màu, phục vụ cho xây dựng hình ảnh thương hiệu. Nhận in folder mọi số lượng', '2020-05-28 03:09:03', NULL),
(44, 'Cặp bìa - Trình ký', NULL, 'cap-bia-trinh-ky', NULL, 10, 1, NULL, NULL, '2020-05-28 03:09:50', NULL),
(45, 'Sổ bìa da', NULL, 'so-bia-da', NULL, 11, 1, 'sổ bìa cứng, so bia cung, sổ da, so da, sổ bìa da, so bia da, sổ lò xo, so lo xo', 'HD Tân Phát chuyên các loại sổ, sổ bìa cứng, sổ bìa da, sổ lò xo chất lượng tốt nhất Hà Nội', '2020-05-28 03:11:00', NULL),
(46, 'Sổ lò xo', NULL, 'so-lo-xo', NULL, 11, 1, 'sổ lò xo, so lo xo, văn phòng phẩm, van phong pham, văn phòng phẩm giá rẻ, van phong pham gia re', 'Văn phòng phẩm giá rẻ hdtanphat.com bán buôn các loại sổ lò xo chất lượng tốt tại hà nội', '2020-05-28 03:11:32', NULL),
(47, 'Sổ bìa cứng', NULL, 'so-bia-cung', NULL, 11, 1, NULL, NULL, '2020-05-28 03:12:02', NULL),
(48, 'Vở các loại', NULL, 'vo-cac-loai', NULL, 11, 1, NULL, NULL, '2020-05-28 03:12:20', NULL),
(49, 'Sửa chữa máy văn phòng', NULL, 'sua-chua-may-van-phong', NULL, 14, 1, NULL, NULL, '2020-05-28 03:13:03', NULL),
(50, 'Đổ mực in', NULL, 'do-muc-in', NULL, 14, 1, NULL, NULL, '2020-05-28 03:13:16', '2020-05-28 21:38:02'),
(51, 'Máy in', NULL, 'may-in', NULL, 15, 1, NULL, NULL, '2020-06-01 03:12:49', NULL),
(52, 'Máy Photo', NULL, 'may-photo', NULL, 15, 1, NULL, NULL, '2020-06-01 03:13:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_phone` char(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_reply` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `c_title`, `c_name`, `c_phone`, `c_email`, `c_content`, `c_reply`, `created_at`, `updated_at`) VALUES
(1, 'Hỏi về bút bi Thiên Long', 'Lưu Tiến HN', '942005988', 'luutiencnc89@gmail.com', 'Mua sp trên 1000 cái thì giá như nào?', 0, '2020-06-01 02:20:36', '2020-06-01 02:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `cuppons`
--

CREATE TABLE `cuppons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_stock` int(11) NOT NULL DEFAULT 0,
  `cp_condition` tinyint(4) NOT NULL DEFAULT 0,
  `cp_number` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuppons`
--

INSERT INTO `cuppons` (`id`, `cp_name`, `cp_slug`, `cp_code`, `cp_stock`, `cp_condition`, `cp_number`, `created_at`, `updated_at`) VALUES
(1, 'Giảm giá ngày 1.6', 'giam-gia-ngay-16', 'MA1.6', 47, 0, 5, '2020-05-31 20:57:02', NULL),
(2, 'GIẢM GIÁ THÁNG 6', 'giam-gia-thang-6', 'VPPT6', 55, 0, 5, '2020-06-02 00:44:54', NULL),
(3, 'Mã 01', 'ma-01', 'g5000', 55, 1, 5000, '2020-06-02 01:03:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_05_28_083759_create_categories_table', 2),
(6, '2020_05_28_101459_create_products_table', 3),
(7, '2020_05_29_023104_create_admins_table', 4),
(9, '2020_06_01_034222_create_cuppons_table', 5),
(10, '2020_06_01_040005_create_user_cuppon_table', 6),
(11, '2020_06_01_041447_create_transactions_table', 7),
(12, '2020_06_01_041737_create_orders_table', 8),
(13, '2020_06_01_085453_create_ratings_table', 9),
(14, '2020_06_01_090620_create_contacts_table', 10),
(15, '2020_06_03_020951_create_articles_table', 11),
(16, '2020_06_03_064256_create_slides_table', 12),
(17, '2020_06_03_081616_create_register_cutomers_table', 13),
(18, '2020_06_03_114019_create_products_image_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `od_transaction_id` int(11) NOT NULL DEFAULT 0,
  `od_product_id` int(11) NOT NULL DEFAULT 0,
  `od_sale` int(11) DEFAULT 0,
  `od_qty` tinyint(4) NOT NULL DEFAULT 0,
  `od_price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `od_transaction_id`, `od_product_id`, `od_sale`, `od_qty`, `od_price`, `created_at`, `updated_at`) VALUES
(1, 3, 3, NULL, 22, 66000, '2020-05-31 21:30:08', NULL),
(2, 4, 31, 3, 3, 3395, '2020-05-31 21:37:32', NULL),
(3, 5, 2, 5, 1, 114000, '2020-05-31 21:51:38', NULL),
(5, 6, 2, 5, 1, 114000, '2020-05-31 23:00:31', NULL),
(6, 7, 29, NULL, 1, 35000, '2020-06-01 02:27:49', NULL),
(7, 8, 19, 3, 1, 116400, '2020-06-01 02:29:02', NULL),
(8, 8, 24, NULL, 1, 130000, '2020-06-01 02:29:02', NULL),
(9, 8, 20, NULL, 1, 150000, '2020-06-01 02:29:02', NULL),
(10, 8, 22, NULL, 1, 165000, '2020-06-01 02:29:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_statics`
--

CREATE TABLE `page_statics` (
  `id` int(10) UNSIGNED NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `ps_slug` varchar(255) NOT NULL,
  `ps_avatar` varchar(255) DEFAULT NULL,
  `ps_active` tinyint(4) DEFAULT NULL,
  `ps_sort` tinyint(4) NOT NULL,
  `ps_content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_statics`
--

INSERT INTO `page_statics` (`id`, `ps_name`, `ps_slug`, `ps_avatar`, `ps_active`, `ps_sort`, `ps_content`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'gioi-thieu', NULL, 1, 1, '<h2>VĂN PH&Ograve;NG PHẨM KINH BẮC</h2>\r\n\r\n<p><strong>Văn ph&ograve;ng phẩm l&agrave; những vật dụng cần thiết để phục vụ c&aacute;c c&ocirc;ng việc trong văn ph&ograve;ng, gi&uacute;p c&aacute;c c&ocirc;ng việc văn ph&ograve;ng được thực hiện một c&aacute;ch dễ d&agrave;ng v&agrave; đơn giản hơn. Đ&acirc;y l&agrave; những vật dụng m&agrave; bất kỳ văn ph&ograve;ng doanh nghiệp n&agrave;o cũng c&oacute; từ c&aacute;c doanh nghiệp nhỏ mới được th&agrave;nh lập cho đến c&aacute;c doanh nghiệp, tập đo&agrave;n lớn đa quốc gia.</strong></p>\r\n\r\n<h2><strong>Những t&aacute;c dụng to lớn của đồ d&ugrave;ng văn ph&ograve;ng phẩm</strong></h2>\r\n\r\n<p>Trong thời đại c&ocirc;ng nghệ đang ph&aacute;t triển với tốc độ vũ b&atilde;o ng&agrave;y nay, nhiều thiết bị c&ocirc;ng nghệ đ&atilde; trở th&agrave;nh những trợ thủ đắc lực trong c&ocirc;ng việc cũng như cuộc sống hằng ng&agrave;y. C&aacute;c doanh nghiệp cũng kh&ocirc;ng ngừng cập nhật c&ocirc;ng nghệ để đảm bảo c&aacute;c c&ocirc;ng việc được thực hiện trơn tru v&agrave; dễ d&agrave;ng hơn, gi&uacute;p tăng năng suất v&agrave; hiệu quả l&agrave;m việc của nh&acirc;n vi&ecirc;n. D&ugrave; vậy, những đồ d&ugrave;ng&nbsp;<strong>văn ph&ograve;ng phẩm</strong>&nbsp;truyền thống vẫn giữ vững vị tr&iacute; kh&ocirc;ng k&eacute;m phần quan trọng của ch&uacute;ng, những văn ph&ograve;ng phẩm như b&uacute;t viết, tập vở, giấy in, kẹp, ghim,&hellip; vẫn l&agrave; những m&oacute;n đồ kh&ocirc;ng thể thay thế được v&agrave; lu&ocirc;n c&oacute; mặt tại c&aacute;c ph&ograve;ng ban của bất kỳ doanh nghiệp lớn nhỏ n&agrave;o.</p>\r\n\r\n<p><img alt=\"\" height=\"400\" sizes=\"(max-width: 1024px) 100vw, 1024px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINH-BAC.png\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINH-BAC.png 1024w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINH-BAC-300x117.png 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINH-BAC-768x300.png 768w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINH-BAC-600x234.png 600w\" width=\"1024\" /></p>\r\n\r\n<p><em><strong>Văn ph&ograve;ng phẩm</strong>&nbsp;l&agrave; những đồ d&ugrave;ng thiết yếu của văn ph&ograve;ng doanh nghiệp</em></p>\r\n\r\n<p><strong>Văn ph&ograve;ng phẩm</strong>&nbsp;đảm bảo những c&ocirc;ng việc nhỏ nhặt nhất được thực hiện một c&aacute;ch dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng. Khi cần ghi ch&eacute;p nhanh, chắc chắn việc với tay lấy ngay một tờ giấy v&agrave; c&acirc;y viết sẽ dễ d&agrave;ng, nhanh ch&oacute;ng v&agrave; trực quan hơn việc thao t&aacute;c tr&ecirc;n smartphone rất nhiều, chiếc kẹp giấy, dập ghim, sổ tay, b&igrave;a hồ sơ&hellip; đều c&oacute; những chức năng cơ bản của n&oacute; m&agrave; c&aacute;c thiết bị c&ocirc;ng nghệ kh&ocirc;ng thể thay thế được.</p>\r\n\r\n<p>Việc trang bị đầy đủ c&aacute;c thiết bị v&agrave; vật dụng văn ph&ograve;ng phẩm tại c&aacute;c ph&ograve;ng ban c&ocirc;ng ty l&agrave; điều thiết yếu v&agrave; được khuyến c&aacute;o thực hiện điều đặn v&agrave; đầy đủ, để đảm bảo kh&ocirc;ng c&oacute; c&ocirc;ng việc n&agrave;o bị gi&aacute;n đoạn kể cả những c&ocirc;ng việc đơn giản nhất. Việc trang bị văn ph&ograve;ng phẩm đầy đủ v&agrave; đồng bộ c&ograve;n tạo ra một m&ocirc;i trường l&agrave;m việc chuy&ecirc;n nghiệp, năng động v&agrave; đầy hiệu quả. Nh&acirc;n vi&ecirc;n sẽ giải quyết c&aacute;c c&ocirc;ng việc của m&igrave;nh nhanh ch&oacute;ng v&agrave; tốt hơn, qua đ&oacute; gi&aacute;n tiếp tăng năng suất hoạt động của cả một doanh nghiệp.</p>\r\n\r\n<h2><strong>Lựa chọn văn ph&ograve;ng phẩm hợp l&yacute;</strong></h2>\r\n\r\n<p>Sau khi đ&atilde; thấy được những t&aacute;c dụng to lớn của việc trang bị đầy đủ&nbsp;<strong>văn ph&ograve;ng phẩm</strong>&nbsp;cho c&ocirc;ng việc của doanh nghiệp như: cơ quan, c&ocirc;ng ty,&nbsp;si&ecirc;u thị điện m&aacute;y, doanh nghiệp&hellip; cũng như trong cuộc sống hằng ng&agrave;y, điều tiếp theo cần lưu t&acirc;m đ&oacute; l&agrave; l&agrave;m c&aacute;ch n&agrave;o để mua sắm đồ d&ugrave;ng văn ph&ograve;ng phẩm một c&aacute;ch hợp l&yacute; nhất, vừa đảm bảo trang bị đầy đủ văn ph&ograve;ng phẩm cho c&aacute;c ph&ograve;ng ban, vừa đảm bảo đồ d&ugrave;ng văn ph&ograve;ng phẩm c&oacute; chất lượng tốt m&agrave; vẫn tiết kiệm được chi ph&iacute; của doanh nghiệp.</p>\r\n\r\n<p>Để trả lời c&acirc;u hỏi n&agrave;y, lời khuy&ecirc;n l&agrave; h&atilde;y lựa chọn một đơn vị cung cấp văn ph&ograve;ng phẩm uy t&iacute;n, chuy&ecirc;n cung cấp những đồ d&ugrave;ng văn ph&ograve;ng phẩm đến từ c&aacute;c thương hiệu nổi tiếng tr&ecirc;n thị trường như&nbsp;Thi&ecirc;n Long, Hồng H&agrave;, Bến Ngh&eacute;,&hellip; Việc bỏ ra một số tiền để mua được những đồ d&ugrave;ng chất lượng xứng đ&aacute;ng về l&acirc;u d&agrave;i vẫn tiết kiệm chi ph&iacute; nhiều hơn việc mua những đồ d&ugrave;ng kh&ocirc;ng c&oacute; t&ecirc;n tuổi tr&ocirc;i nổi tr&ecirc;n thị trường văn ph&ograve;ng phẩm đang v&ocirc; c&ugrave;ng nhộn nhịp ng&agrave;y nay.</p>\r\n\r\n<p><img alt=\"\" height=\"363\" sizes=\"(max-width: 768px) 100vw, 768px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINHBAC.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINHBAC.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINHBAC-300x142.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2019/07/Van-phong-pham-KINHBAC-600x284.jpg 600w\" width=\"768\" /></p>\r\n\r\n<p><em><strong>Văn ph&ograve;ng phẩm</strong>&nbsp;Kinh Bắc đảm bảo chất lượng</em></p>\r\n\r\n<p>Tại&nbsp;<strong><em>Văn ph&ograve;ng phẩm Kinh Bắc&nbsp;</em></strong>, ch&uacute;ng t&ocirc;i mang đến cho bạn những sản phẩm văn ph&ograve;ng phẩm c&oacute; chất lượng đảm bảo nhất với mức gi&aacute; hợp l&yacute; nhất. Gi&uacute;p tiết kiệm chi ph&iacute; mua sắm văn ph&ograve;ng phẩm cho doanh nghiệp của bạn.</p>\r\n\r\n<p><strong><em>Văn ph&ograve;ng phẩm Kinh Bắc&nbsp;</em></strong>&ndash; Nh&agrave; cung cấp văn ph&ograve;ng phẩm uy t&iacute;n, phục vụ tối đa nhu cầu của doanh nghiệp v&agrave; ng&agrave;nh in ấn. Văn ph&ograve;ng phẩm b&aacute;n tr&ecirc;n&nbsp;<strong><em>Kinh Bắc</em></strong>&nbsp;chất lượng, đa dạng, gi&aacute; cả phải chăng v&agrave; c&oacute; nhiều khuyến m&atilde;i bất ngờ. Kh&aacute;ch h&agrave;ng c&oacute; thể mua h&agrave;ng trực tiếp tại showroom hoặc order tr&ecirc;n&nbsp;<a href=\"https://vanphongpham247.vn/\">https://vanphongpham247.vn&nbsp;</a>để được giao h&agrave;ng tận nơi.</p>', '2020-06-04 02:27:33', '2020-06-04 02:28:38'),
(2, 'Hướng dẫn thanh toán', 'huong-dan-thanh-toan', NULL, 1, 2, '<p>Bước 1:</p>\r\n\r\n<p>Click v&agrave;o sản phẩm cần mua &ndash; nhấn v&agrave;o &ldquo;&nbsp;Mua h&agrave;ng&rdquo;</p>\r\n\r\n<p><img alt=\"\" height=\"432\" sizes=\"(max-width: 1188px) 100vw, 1188px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1.jpg 1188w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1-300x109.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1-768x279.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1-1024x372.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1-600x218.jpg 600w\" width=\"1188\" /></p>\r\n\r\n<p>Bước 2:</p>\r\n\r\n<p>Kiểm tra th&ocirc;ng tin giỏ h&agrave;ng về Số Lượng v&agrave; Tổng Tiền</p>\r\n\r\n<p><img alt=\"\" height=\"630\" sizes=\"(max-width: 1268px) 100vw, 1268px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2020/04/2.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2020/04/2.jpg 1268w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-300x149.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-768x382.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-1024x509.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2020/04/2-600x298.jpg 600w\" width=\"1268\" /></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; H&igrave;nh ảnh 1</p>\r\n\r\n<p>Chọn v&agrave;o &ldquo;Thanh to&aacute;n&rdquo;</p>\r\n\r\n<p>Bước 3:</p>\r\n\r\n<h5>Nhập Th&ocirc;ng Tin Thanh To&aacute;n Người Mua H&agrave;ng, H&igrave;nh Thức Thanh To&aacute;n V&agrave; Đặt H&agrave;ng</h5>\r\n\r\n<p><img alt=\"\" height=\"694\" sizes=\"(max-width: 1294px) 100vw, 1294px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2020/04/3.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2020/04/3.jpg 1294w, https://vanphongpham247.vn/wp-content/uploads/2020/04/3-300x161.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2020/04/3-768x412.jpg 768w, https://vanphongpham247.vn/wp-content/uploads/2020/04/3-1024x549.jpg 1024w, https://vanphongpham247.vn/wp-content/uploads/2020/04/3-600x322.jpg 600w\" width=\"1294\" /></p>\r\n\r\n<p>Sau khi th&agrave;nh c&ocirc;ng Kinh Bắc sẽ gọi lại cho bạn để tư vấn v&agrave; chốt đơn.&nbsp;<br />\r\nĐối với c&aacute;c kh&aacute;ch Chuyển khoản trực tiếp v&agrave;o t&agrave;i khoản ng&acirc;n h&agrave;ng của ch&uacute;ng t&ocirc;i. Vui l&ograve;ng sử dụng ID đơn đặt h&agrave;ng của bạn l&agrave;m tham chiếu thanh to&aacute;n.</p>\r\n\r\n<p><strong>Chủ t&agrave;i khoản: Nguyễn Văn Huynh</strong><br />\r\n<strong>STK: 103866957132<br />\r\nChi nh&aacute;nh: VietinBank chi nh&aacute;nh Nam Thăng Long</strong></p>', '2020-06-04 02:29:55', '2020-06-04 02:29:58'),
(3, 'Chính sách đổi trả', 'chinh-sach-doi-tra', NULL, 1, 3, '<p>VĂN PH&Ograve;NG PHẨM&nbsp;<strong>KINH BẮC</strong>&nbsp;thực hiện đổi h&agrave;ng/trả lại tiền cho qu&yacute; kh&aacute;ch, nhưng kh&ocirc;ng ho&agrave;n lại ph&iacute; vận chuyển hoặc lệ ph&iacute; giao h&agrave;ng.</p>\r\n\r\n<p>Trừ những trường hợp sau:<br />\r\nKh&ocirc;ng đ&uacute;ng chủng loại, mẫu m&atilde; như qu&yacute; kh&aacute;ch đặt h&agrave;ng.<br />\r\nKh&ocirc;ng đủ số lượng, kh&ocirc;ng đủ bộ như trong đơn h&agrave;ng.<br />\r\nT&igrave;nh trạng b&ecirc;n ngo&agrave;i bị ảnh hưởng như bong tr&oacute;c, bể vỡ xảy ra trong qu&aacute; tr&igrave;nh vận chuyển,&hellip;<br />\r\nKh&ocirc;ng đạt chất lượng như: qu&aacute; hạn sử dụng, hết bảo h&agrave;nh, kh&ocirc;ng vận h&agrave;nh được, hỏng h&oacute;c kh&aacute;ch quan trong phạm vi bảo h&agrave;nh của nh&agrave; cung cấp, nh&agrave; sản xuất,&hellip;<br />\r\nQu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra h&agrave;ng h&oacute;a v&agrave; k&yacute; nhận t&igrave;nh trạng với Nh&acirc;n vi&ecirc;n giao h&agrave;ng ngay khi nhận được h&agrave;ng. Khi ph&aacute;t hiện một trong c&aacute;c trường hợp tr&ecirc;n, qu&yacute; kh&aacute;ch c&oacute; thể trao đổi trực tiếp với Nh&acirc;n vi&ecirc;n giao h&agrave;ng hoặc phản hồi cho ch&uacute;ng t&ocirc;i trong v&ograve;ng 24h theo đường d&acirc;y n&oacute;ng.</p>\r\n\r\n<h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Hotline: 0912.939.247 &ndash; 0973.836.669</strong></h4>\r\n\r\n<p><strong>Văn ph&ograve;ng phẩm Kinh Bắc : &nbsp;Số 6, Ng&otilde; 89, L&ecirc; Đức Thọ, Mỹ Đ&igrave;nh 2, Nam Từ Li&ecirc;m, H&agrave; Nội&nbsp;</strong></p>', '2020-06-04 02:30:38', '2020-06-04 02:30:40'),
(4, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', NULL, 1, 4, '<h4>C&aacute;ch 1: Giao h&agrave;ng trực tiếp tại cửa h&agrave;ng</h4>\r\n\r\n<h4>H&atilde;y trực tiếp đến địa chỉ cửa h&agrave;ng Kinh Bắc để lựa chọn sản phẩm, thanh to&aacute;n v&agrave; nhận sản phẩm trực tiếp tại cửa h&agrave;ng.</h4>\r\n\r\n<h4>C&aacute;ch 2: Giao h&agrave;ng miễn ph&iacute; cho đơn h&agrave;ng 500.000đ ở khu vực H&agrave; Nội</h4>\r\n\r\n<h4>Nếu bạn kh&ocirc;ng muốn trực tiếp đến cửa h&agrave;ng. Kinh Bắc sẵn s&agrave;ng giao h&agrave;ng miễn ph&iacute; cho đơn h&agrave;ng 500.000đ ở khu vực H&agrave; Nội.</h4>\r\n\r\n<h4>&nbsp;Xin vui l&ograve;ng gọi số hotline&nbsp;<a href=\"tel:0912939247\">&nbsp;0912.939.247</a>&nbsp;để đặt h&agrave;ng v&agrave; nhận sản phẩm tại địa chỉ bạn mong muốn.</h4>\r\n\r\n<h4>C&aacute;ch 3: Sử dụng h&igrave;nh thức Giao h&agrave;ng thu tiền &ndash; COD (Cash on Delivery)</h4>\r\n\r\n<h4>Đối với c&aacute;c bạn ở xa H&agrave; Nội, muốn sử dụng h&igrave;nh thức COD (thanh to&aacute;n khi nhận h&agrave;ng), c&aacute;c bạn vui l&ograve;ng li&ecirc;n hệ với Kinh Bắc để được hướng dẫn.&nbsp;Đ&acirc;y l&agrave; h&igrave;nh thức thanh to&aacute;n COD (Cash on Delivery) &ndash; C&aacute;c bạn sẽ thanh to&aacute;n trực tiếp cho b&ecirc;n chuyển ph&aacute;t sau khi đ&atilde; nhận được h&agrave;ng. Với h&igrave;nh thức n&agrave;y, để đảm bảo đơn h&agrave;ng được x&aacute;c nhận, c&aacute;c bạn vui l&ograve;ng chuyển khoản trước 500.000đ gửi Kinh Bắc để x&aacute;c nhận việc mua h&agrave;ng. Ch&uacute;ng t&ocirc;i sẽ gửi h&agrave;ng đi ngay trong ng&agrave;y sau khi nhận được thanh to&aacute;n tạm ứng. Khi nhận h&agrave;ng c&aacute;c bạn thanh to&aacute;n nốt số tiền c&ograve;n lại.</h4>', '2020-06-04 02:30:59', '2020-06-04 02:31:23'),
(5, 'Chính sách thanh toán', 'chinh-sach-thanh-toan', NULL, 1, 5, '<p>C&aacute;ch 1: Thanh to&aacute;n trực tiếp tại cửa h&agrave;ng</p>\r\n\r\n<p><strong>Đ&acirc;y l&agrave; c&aacute;ch thanh to&aacute;n đơn giản nhất nếu bạn c&oacute; điều kiện qua trực tiếp kho h&agrave;ng Kinh Bắc. H&atilde;y trực tiếp đến cửa h&agrave;ng của Kinh Bắc để lựa chọn sản phẩm v&agrave; thanh to&aacute;n trực tiếp tại cửa h&agrave;ng. Kinh Bắc chấp nhận thanh to&aacute;n c&aacute;c loại thẻ Visa, Master, ATM&hellip;. của c&aacute;c ng&acirc;n h&agrave;ng trong v&agrave; ngo&agrave;i nước.</strong></p>\r\n\r\n<p>C&aacute;ch 2: Thanh to&aacute;n chuyển khoản trực tiếp v&agrave;o t&agrave;i khoản của&nbsp;<strong>Kinh Bắc</strong></p>\r\n\r\n<p>Nếu bạn ở xa hoặc bạn kh&ocirc;ng c&oacute; thời gian đến cửa h&agrave;ng, c&aacute;c bạn c&oacute; thể chọn h&igrave;nh thức thanh to&aacute;n chuyển khoản đến t&agrave;i khoản của&nbsp;<strong>Kinh Bắc</strong>.<br />\r\n<strong>Chủ t&agrave;i khoản: Nguyễn Văn Huynh<br />\r\nSTK: 103866957132<br />\r\nChi nh&aacute;nh: VietinBank chi nh&aacute;nh Nam Thăng Long</strong></p>\r\n\r\n<p>Sau khi c&aacute;c bạn chuyển khoản vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để th&ocirc;ng b&aacute;o th&ocirc;ng tin chuyển h&agrave;ng. Sau khi nhận được tiền, nh&acirc;n vi&ecirc;n&nbsp;<strong>Kinh Bắc&nbsp;</strong>sẽ trực tiếp đi giao h&agrave;ng nếu địa chỉ của c&aacute;c bạn tại H&agrave; Nội hoặc nh&acirc;n vi&ecirc;n chuyển ph&aacute;t sẽ giao h&agrave;ng tới địa chỉ c&aacute;c bạn đ&atilde; đăng k&yacute; trong v&ograve;ng từ 2 &ndash; 4 ng&agrave;y l&agrave;m việc.</p>\r\n\r\n<p>C&aacute;ch 3: Thanh to&aacute;n trực tiếp khi nhận h&agrave;ng</p>\r\n\r\n<p><strong>Đ&acirc;y&nbsp;l&agrave; h&igrave;nh thức thanh to&aacute;n COD (Cash on Delivery). C&aacute;c bạn sẽ thanh to&aacute;n trực tiếp cho b&ecirc;n chuyển ph&aacute;t sau khi đ&atilde; nhận được h&agrave;ng. Với h&igrave;nh thức n&agrave;y, để đảm bảo đơn h&agrave;ng được x&aacute;c nhận, c&aacute;c bạn vui l&ograve;ng chuyển khoản trước&nbsp;500.000đ gửi Kinh Bắc để x&aacute;c nhận việc mua h&agrave;ng. Ch&uacute;ng t&ocirc;i sẽ gửi h&agrave;ng đi ngay trong ng&agrave;y sau khi nhận được thanh to&aacute;n tạm ứng. Khi nhận h&agrave;ng c&aacute;c bạn thanh to&aacute;n nốt số tiền c&ograve;n lại.</strong></p>', '2020-06-04 02:31:20', '2020-06-04 02:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(11) NOT NULL,
  `pro_brand_id` int(11) DEFAULT NULL,
  `pro_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_status` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_sale` int(11) NOT NULL DEFAULT 0,
  `pro_number` int(11) DEFAULT 0,
  `pro_pay` int(11) DEFAULT 0,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_brand_id`, `pro_desc`, `pro_content`, `pro_price`, `pro_image`, `pro_status`, `pro_hot`, `pro_sale`, `pro_number`, `pro_pay`, `meta_desc`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'GIẤY DOUBLE A A4 ĐL 80GSM', 'giay-double-a-a4-dl-80gsm', 19, NULL, '<p><strong>Giấy Doube A A4 80Gsm</strong>&nbsp;l&agrave; loại giấy trắng đẹp nhất tr&ecirc;n thị trường</p>\r\n\r\n<p>Độ sắc n&eacute;t cao, in 2 mặt kh&ocirc;ng bị kẹt giấy</p>\r\n\r\n<p>Cho ph&eacute;p in, photocopy ra những văn bản, h&igrave;nh ảnh đẹp</p>', '<p><strong>Giấy in Double A A4</strong>&nbsp;<strong>&nbsp;định lượng 80 gsm</strong>, l&agrave; loại giấy trắng đẹp nhất tr&ecirc;n thị trường được sản xuất từ Th&aacute;i Lan với nguy&ecirc;n liệu từ thi&ecirc;n nhi&ecirc;n, th&acirc;n thiện m&ocirc;i trường.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://vanphongpham89.com/5471d032-1c96-4012-83b4-7b6ff730ce78\" width=\"800\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Giấy Double A A4 ĐL 80gsm</p>\r\n\r\n<p><strong>Giấy in Double A</strong>&nbsp;c&oacute; độ trắng, dai, bề mặt mịn đ&uacute;ng ti&ecirc;u chuẩn, độ sắc n&eacute;t cao, in 2 mặt kh&ocirc;ng bị kẹt giấy, cho ph&eacute;p in, photocopy ra những văn bản. Sản phẩm giấy c&oacute; định lượng giấy 80gsm, bền dai sẽ hạn chế tối đa t&igrave;nh trạng kẹt giấy v&agrave; bảo đảm cho m&aacute;y hoạt động trơn tru. h&igrave;nh ảnh đẹp. Th&iacute;ch hợp với tất cả c&aacute;c loại M&aacute;y in phun, M&aacute;y in Laser, M&aacute;y Fax laser, M&aacute;y Photocopy. In đảo 2 mặt kh&ocirc;ng bị kẹt giấy.</p>\r\n\r\n<p><strong>Giấy in Double 80gsm&nbsp;</strong>c&oacute; độ trắng, dai, bề mặt mịn đ&uacute;ng ti&ecirc;u chuẩn, giấy Double A l&agrave; thương hiệu được tin d&ugrave;ng trong c&aacute;c doanh nghiệp lớn nhỏ.&nbsp;<strong>Giấy in Double A</strong>&nbsp;l&agrave; khổ giấy được d&ugrave;ng nhiều trong hoạt động in t&agrave;i liệu hội họp, học tập, đơn từ, hợp đồng. Bạn cũng c&oacute; thể sử dụng để vẽ sơ đồ hoặc ph&aacute;c thảo c&aacute;c thiết kế một c&aacute;ch tiện lợi.</p>\r\n\r\n<p>&nbsp;<strong>Giấy in Double&nbsp;</strong>c&oacute; định lượng giấy&nbsp;<strong>80gsm</strong>, bền dai sẽ hạn chế tối đa t&igrave;nh trạng kẹt giấy v&agrave; tiết kiệm lượng giấy in. Đặc biệt, đ&oacute;ng g&oacute;i sản phẩm 500 tờ / Ram v&agrave; 5 ram / th&ugrave;ng<strong>. Giấy in Double A</strong>&nbsp;in kh&aacute; r&otilde; n&eacute;t, gi&uacute;p m&agrave;u mực bền l&acirc;u tiện cho việc lưu trữ.</p>', '84000', 'uploads/product/1590662756_Giấy-Double-A-A4-ĐL-80gsm-1.jpg', 1, 1, 0, 500, 0, 'Giấy in Double A A4 ĐL 80 gsm có độ trắng, dai, bề mặt mịn đúng tiêu chuẩn, độ sắc nét cao, in 2 mặt không bị kẹt giấy, cho phép in, photocopy văn bản', 'giấy in, giấy văn phòng, giấy photo chất lượng', '2020-05-28 03:45:56', '2020-05-28 03:48:40'),
(2, 'GIẤY PAPER ONE A3 ĐL 70GSM', 'giay-paper-one-a3-dl-70gsm', 19, NULL, '<p><strong>&ndash; K&iacute;ch thước: 297 x 420mm</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;Định lượng: 70gsm</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;Đ&oacute;ng g&oacute;i: 500 tờ/Ream, 5 ream/th&ugrave;ng</strong></p>\r\n\r\n<p><strong>&ndash; Chất lượng: &nbsp;đẹp, trắng, mịn, l&aacute;ng</strong></p>', '<p><strong>Giấy Paper One A3 ĐL 70gsm</strong>&nbsp;l&agrave; loại giấy trắng đẹp, th&iacute;ch hợp với tất cả c&aacute;c loại M&aacute;y in Laser, M&aacute;y Fax laser, M&aacute;y Photocopy. In đảo 2 mặt kh&ocirc;ng lo kẹt giấy.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://vanphongpham89.com/8dcdfaa1-85b5-4a65-aa5d-f4f8fa6b14b3\" width=\"640\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Giấy Paper One A3 ĐL 70gsm</p>\r\n\r\n<p><strong>Giấy Paper One A3 &ndash; 70gsm</strong>&nbsp;lu&ocirc;n đảm bảo chất lượng cũng như độ ổn định. C&ocirc;ng nghệ sản xuấn hiện đại l&agrave;m giấy tr&ocirc;ng mỏng nhưng thực tế giấy đ&atilde; được n&eacute;n chặt hơn, l&agrave;m bề mặt của giấy nhẵn, đều hơn, gi&uacute;p bạn c&oacute; thể in ấn hoặc photocopy cả hai mặt m&agrave; kh&ocirc;ng bị nhăn, cong giấy hay mực bị lem, thấm ngược, kh&ocirc;ng tạo ra bụi giấy, gi&uacute;p mực kh&ocirc; nhanh hơn, kh&ocirc;ng bị nh&ograve;e, tạo n&ecirc;n văn bản sắc n&eacute;t với m&agrave;u đen đậm hơn. Giấy th&iacute;ch hợp cho nhiều loại m&aacute;y văn ph&ograve;ng.</p>', '120000', 'uploads/product/1590663070_Giấy-Paper-One-A3-ĐL-70gsm-2.jpg', 1, 1, 5, 553, 2, 'Giấy Paper One A3 ĐL 70gsm là loại giấy trắng đẹp, thích hợp với tất cả các loại Máy in Laser, Máy Fax laser, Máy Photocopy. In đảo 2 mặt không lo kẹt giấy.', NULL, '2020-05-28 03:51:10', NULL),
(3, 'GIẤY DOUBLE A A4 ĐL 70/90', 'giay-double-a-a4-dl-7090', 19, NULL, '<p>Giấy Doube A A4 70Gsm l&agrave; loại giấy trắng đẹp nhất tr&ecirc;n thị trường</p>\r\n\r\n<p>Độ sắc n&eacute;t cao, in 2 mặt kh&ocirc;ng bị kẹt giấy</p>\r\n\r\n<p>Cho ph&eacute;p in, photocopy ra những văn bản, h&igrave;nh ảnh đẹp</p>', '<p><strong>Giấy in Double A A4</strong>&nbsp;<strong>&nbsp;định lượng 70 gsm</strong>, l&agrave; loại giấy trắng đẹp nhất tr&ecirc;n thị trường được sản xuất từ Th&aacute;i Lan với nguy&ecirc;n liệu từ thi&ecirc;n nhi&ecirc;n, th&acirc;n thiện m&ocirc;i trường.</p>\r\n\r\n<p><strong>Giấy in Double A</strong>&nbsp;c&oacute; độ trắng, dai, bề mặt mịn đ&uacute;ng ti&ecirc;u chuẩn, độ sắc n&eacute;t cao, in 2 mặt kh&ocirc;ng bị kẹt giấy, cho ph&eacute;p in, photocopy ra những văn bản, h&igrave;nh ảnh đẹp. Th&iacute;ch hợp với tất cả c&aacute;c loại M&aacute;y in phun, M&aacute;y in Laser, M&aacute;y Fax laser, M&aacute;y Photocopy. In đảo 2 mặt kh&ocirc;ng bị kẹt giấy.</p>\r\n\r\n<p><img alt=\"\" height=\"390\" sizes=\"(max-width: 640px) 100vw, 640px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Gi%E1%BA%A5y-Double-A-A4-%C4%90L-7090-1.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/09/Giấy-Double-A-A4-ĐL-7090-1.jpg 640w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Giấy-Double-A-A4-ĐL-7090-1-300x183.jpg 300w, https://vanphongpham247.vn/wp-content/uploads/2018/09/Giấy-Double-A-A4-ĐL-7090-1-600x366.jpg 600w\" width=\"640\" /></p>\r\n\r\n<p>Giấy Double A A4 ĐL 7090</p>\r\n\r\n<p><strong>Giấy in Double A A4</strong>&nbsp;c&oacute; độ trắng, dai, bề mặt mịn đ&uacute;ng ti&ecirc;u chuẩn, giấy Double A l&agrave; thương hiệu được tin d&ugrave;ng trong c&aacute;c doanh nghiệp lớn nhỏ.</p>\r\n\r\n<p><strong>Giấy in Double A A4</strong>&nbsp;được d&ugrave;ng để in ấn với c&aacute;c d&ograve;ng m&aacute;y in v&agrave; m&aacute;y photocopy hỗ trợ khổ giấy A3. Sản phẩm giấy c&oacute; định lượng giấy 70gsm, bền dai sẽ hạn chế tối đa t&igrave;nh trạng kẹt giấy v&agrave; tiết kiệm lượng giấy in. Đặc biệt, đ&oacute;ng g&oacute;i sản phẩm 500 tờ / Ram v&agrave; 5 ram / th&ugrave;ng<strong>. Giấy in Double A</strong>&nbsp;in kh&aacute; r&otilde; n&eacute;t, gi&uacute;p m&agrave;u mực bền l&acirc;u tiện cho việc lưu trữ.</p>', '66000', 'uploads/product/1590663195_Giấy-Double-A-A4-ĐL-7090.jpg', 1, 1, 0, 456, 2, 'vanphongpham.com cung cấp sản phẩm chất lượng giá tốt nhất phân phối Giấy Double A A4 70 giá gốc giá sỉ khi cần nguồn hàng mua bán giá rẻ nhất.', NULL, '2020-05-28 03:53:15', NULL),
(4, 'GIẤY IN DOUBLE A A5 ĐL70 GSM', 'giay-in-double-a-a5-dl70-gsm', 19, NULL, '<p>Giấy Doube A A5 70Gsm l&agrave; loại giấy trắng đẹp nhất tr&ecirc;n thị trường</p>\r\n\r\n<p>Độ sắc n&eacute;t cao, in 2 mặt kh&ocirc;ng bị kẹt giấy</p>\r\n\r\n<p>Cho ph&eacute;p in, photocopy ra những văn bản, h&igrave;nh ảnh đẹp</p>', '<p><strong>Giấy in Double A A5</strong>&nbsp;<strong>&nbsp;định lượng 70 gsm</strong>, l&agrave; loại giấy trắng đẹp nhất tr&ecirc;n thị trường được sản xuất từ Th&aacute;i Lan với nguy&ecirc;n liệu từ thi&ecirc;n nhi&ecirc;n, th&acirc;n thiện m&ocirc;i trường.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://vanphongpham89.com/43a9b216-c83e-4f47-9ab6-e8ef2daf7032\" width=\"1512\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Giấy in Double A A5 ĐL70 gsm</p>\r\n\r\n<p><strong>Giấy in Double A</strong>&nbsp;c&oacute; độ trắng, dai, bề mặt mịn đ&uacute;ng ti&ecirc;u chuẩn, độ sắc n&eacute;t cao, in 2 mặt kh&ocirc;ng bị kẹt giấy, cho ph&eacute;p in, photocopy ra những văn bản, h&igrave;nh ảnh đẹp. Th&iacute;ch hợp với tất cả c&aacute;c loại M&aacute;y in phun, M&aacute;y in Laser, M&aacute;y Fax laser, M&aacute;y Photocopy. In đảo 2 mặt kh&ocirc;ng bị kẹt giấy.</p>\r\n\r\n<p><strong>Giấy in Double A A5</strong>&nbsp;c&oacute; độ trắng, dai, bề mặt mịn đ&uacute;ng ti&ecirc;u chuẩn, giấy Double A l&agrave; thương hiệu được tin d&ugrave;ng trong c&aacute;c doanh nghiệp lớn nhỏ.</p>\r\n\r\n<p><strong>Giấy in Double A A5</strong>&nbsp;được d&ugrave;ng để in ấn với c&aacute;c d&ograve;ng m&aacute;y in v&agrave; m&aacute;y photocopy. Sản phẩm giấy c&oacute; định lượng giấy 70gsm, bền dai sẽ hạn chế tối đa t&igrave;nh trạng kẹt giấy v&agrave; tiết kiệm lượng giấy in. Đặc biệt, đ&oacute;ng g&oacute;i sản phẩm 500 tờ / Ram v&agrave; 5 ram / th&ugrave;ng<strong>. Giấy in Double A</strong>&nbsp;in kh&aacute; r&otilde; n&eacute;t, gi&uacute;p m&agrave;u mực bền l&acirc;u tiện cho việc lưu trữ.</p>\r\n\r\n<p>Giấy in Double A A5 ĐL70 gsm</p>', '40000', 'uploads/product/1590663320_Giấy-in-Double-A-A5-ĐL70-gsm-2.jpg', 1, 1, 0, 500, 0, 'Văn phòng phẩm KINH BẮC cung cấp sản phẩm chất lượng giá tốt nhất phân phối Giấy Double A A5 70 giá gốc giá sỉ khi cần nguồn hàng mua bán giá rẻ nhất.', NULL, '2020-05-28 03:55:20', NULL),
(5, 'GIẤY MÀU PAPERLINE A4 ĐL80', 'giay-mau-paperline-a4-dl80', 20, NULL, '<p><strong>Chất lượng</strong>&nbsp;:Giấy in cao cấp, đẹp, trắng, mịn, l&aacute;ng</p>\r\n\r\n<p><strong>Định lượng</strong>&nbsp;: 80gsm</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i tại</strong>&nbsp;: &nbsp;500 tờ/ram &ndash; 5ram/th&ugrave;ng.</p>', '<p><strong>Giấy m&agrave;u Paperline A4 ĐL 80</strong>&nbsp;sở hữu bề mặt giấy đẹp, mịn, c&oacute; thể in hai mặt m&agrave; kh&ocirc;ng bị nhăn hay lem mực, cho c&aacute;c bản in, copy s&aacute;ng, sạch, có độ sắc n&eacute;t cao bản in đẹp</p>\r\n\r\n<p><img alt=\"\" height=\"352\" sizes=\"(max-width: 498px) 100vw, 498px\" src=\"https://vanphongpham247.vn/wp-content/uploads/2018/11/Gi%E1%BA%A5y-m%C3%A0u-Paperline-%C4%90L80.jpg\" srcset=\"https://vanphongpham247.vn/wp-content/uploads/2018/11/Giấy-màu-Paperline-ĐL80.jpg 498w, https://vanphongpham247.vn/wp-content/uploads/2018/11/Giấy-màu-Paperline-ĐL80-300x212.jpg 300w\" width=\"498\" /></p>\r\n\r\n<p>Giấy m&agrave;u Paperline ĐL80</p>\r\n\r\n<p><strong>Giấy m&agrave;u Paperline</strong>&nbsp;ph&ugrave; hợp với tất cả c&aacute;c loại m&aacute;y in phun, m&aacute;y in Laser, m&aacute;y Fax laser, m&aacute;y Photocopy,&hellip; Giấy c&oacute; nhiều m&agrave;u sắc kh&aacute;c nhau cho bản in độc đ&aacute;o. Sản phẩm bao gồm 500 tờ tiện dụng.</p>\r\n\r\n<p>C&oacute; 4 m&agrave;u cho bạn lựa chọn:</p>\r\n\r\n<p><strong>Giấy m&agrave;u Paperline Xanh</strong></p>\r\n\r\n<p><strong>Giấy m&agrave;u Paperline Hồng</strong></p>\r\n\r\n<p><strong>Giấy m&agrave;u Paperline V&agrave;ng</strong></p>\r\n\r\n<p><strong>Giấy m&agrave;u Paperline Xanh Cốm</strong></p>\r\n\r\n<p>Giấy photo m&agrave;u Paperline A4 ĐL80 một loại giấy cao cấp được biết đến với chất lượng cao, kiểu d&aacute;ng vượt trội v&agrave; th&acirc;n thiện với m&ocirc;i trường, rất được thị trường ưa chuộng</p>', '95000', 'uploads/product/1590663431_Giấy-màu-Paperline-ĐL80-1.jpg', 1, 1, 0, 500, 0, 'Giấy màu Paperline A4 ĐL 80 sở hữu bề mặt giấy đẹp, mịn, có thể in hai mặt cho các bản in, copy sáng, sạch, có độ sắc nét cao bản in đẹp - XEM NGAY!', NULL, '2020-05-28 03:57:11', NULL),
(6, 'GIẤY IN MÀU A3 PGRAND', 'giay-in-mau-a3-pgrand', 20, NULL, '<p>GIẤY IN M&Agrave;U A3 PGRAND</p>', '<p>GIẤY IN M&Agrave;U A3 PGRAND</p>', NULL, 'uploads/product/1590663586_giấy-photo-màu-summer.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 03:59:46', NULL),
(7, 'GIẤY IN MÀU PGRAND A4 ĐL80', 'giay-in-mau-pgrand-a4-dl80', 20, NULL, '<p>GIẤY IN M&Agrave;U PGRAND A4 ĐL80</p>', '<p>GIẤY IN M&Agrave;U PGRAND A4 ĐL80</p>', NULL, 'uploads/product/1590663633_giay-a4-mau-pgrand.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:00:33', NULL),
(8, 'GIẤY PHOTO MÀU A4 80GSM', 'giay-photo-mau-a4-80gsm', 20, NULL, '<p>GIẤY PHOTO M&Agrave;U A4 80GSM</p>', '<p>GIẤY PHOTO M&Agrave;U A4 80GSM</p>', NULL, 'uploads/product/1590663682_Paperline-Ivory.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:01:22', NULL),
(9, 'GIẤY PHÂN TRANG 5 MÀU PRONOTI NILON', 'giay-phan-trang-5-mau-pronoti-nilon', 21, NULL, '<p><strong>- T&ecirc;n sản phẩm</strong>&nbsp;: Giấy ph&acirc;n trang 5 m&agrave;u Pronoti Nilon</p>\r\n\r\n<p><strong>- Đơn vị t&iacute;nh</strong>&nbsp;: Tập</p>\r\n\r\n<p><strong>- Đ&oacute;ng g&oacute;i</strong>&nbsp;: 5 m&agrave;u/tập</p>', '<p><strong>Giấy ph&acirc;n trang 5 m&agrave;u Pronoti (Nilon)</strong>&nbsp;l&agrave;&nbsp;được tin d&ugrave;ng trong m&ocirc;i trường văn ph&ograve;ng. Loại giấy tiện dụng v&agrave; chất lượng n&agrave;y sẽ gi&uacute;p bạn chủ động vạch định kế hoạch v&agrave; quản l&yacute; c&ocirc;ng việc một c&aacute;ch hiệu quả hơn.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://vanphongpham89.com/fc5cd6e6-c568-471f-90a1-75db16c3564e\" width=\"1472\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Giấy ph&acirc;n trang 5 m&agrave;u Pronoti (Nilon)</p>\r\n\r\n<p>Đặc t&iacute;nh của&nbsp;<strong>Giấy</strong><strong>&nbsp;Note</strong><strong>&nbsp;trang 5 m&agrave;u&nbsp;</strong>l&agrave; ph&acirc;n trang sổ s&aacute;ch bằng c&aacute;c m&agrave;u kh&aacute;c nhau, dễ nhận biết, gi&uacute;p c&aacute;c bạn quản l&yacute; v&agrave; dễ d&agrave;ng t&igrave;m kiếm th&ocirc;ng tin. Ngay cả trong những l&uacute;c bận rộn nhất cũng thật dễ d&agrave;ng để ghi ch&uacute; c&aacute;c th&ocirc;ng tin. Thiết kế nhỏ gọn, tiện lợi cho việc mang theo mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Giấy ph&acirc;n trang 5 m&agrave;u Pronoti Nilon</p>\r\n\r\n<p><strong>Giấy ph&acirc;n trang Pronoti</strong>&nbsp;gồm nhiều tờ h&igrave;nh mũi t&ecirc;n trong 1 xấp, ph&acirc;n th&agrave;nh 5 m&agrave;u nổi bật, c&oacute; thể th&aacute;o d&aacute;n v&agrave; gỡ ra dễ d&agrave;ng nhờ lớp keo mỏng. Chất lượng Giấy đẹp, l&aacute;ng mịn, thấm mực tốt nhưng kh&ocirc;ng bị lem nh&ograve;e. Keo d&iacute;nh bền l&acirc;u nhưng dễ di dời.</p>', '11500', 'uploads/product/1590663898_Giấy-phân-trang-5-màu-Pronoti-Nhựa-2.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:04:58', NULL),
(10, 'GIẤY NOTE SIGN HERE', 'giay-note-sign-here', 21, NULL, '<p>+ Giấy tốt, bền, hạn chế phai m&agrave;u.</p>\r\n\r\n<p>+ Keo d&aacute;n chất lượng, d&iacute;nh l&acirc;u tr&ecirc;n đa số c&aacute;c bề mặt.</p>\r\n\r\n<p>&ndash; Thiết kế: M&agrave;u sắc bắt mắt, bản nhỏ, tiện dụng, d&ugrave;ng để đ&aacute;nh dấu trang, ghi ch&uacute;, nhắc nhớ; th&iacute;ch hợp sử dụng trong m&ocirc;i trường học tập, văn ph&ograve;ng, c&ocirc;ng sở.</p>', '<p>+ Giấy tốt, bền, hạn chế phai m&agrave;u.</p>\r\n\r\n<p>+ Keo d&aacute;n chất lượng, d&iacute;nh l&acirc;u tr&ecirc;n đa số c&aacute;c bề mặt.</p>\r\n\r\n<p>&ndash; Thiết kế: M&agrave;u sắc bắt mắt, bản nhỏ, tiện dụng, d&ugrave;ng để đ&aacute;nh dấu trang, ghi ch&uacute;, nhắc nhớ; th&iacute;ch hợp sử dụng trong m&ocirc;i trường học tập, văn ph&ograve;ng, c&ocirc;ng sở.</p>', NULL, 'uploads/product/1590663936_Giấy-Note-Sign-Here-1.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:05:36', NULL),
(11, 'GIẤY NOTE 4 MÀU PRONOTI', 'giay-note-4-mau-pronoti', 21, NULL, '<p><strong>Giấy Note Pronoti 4 m&agrave;u&nbsp;</strong><br />\r\nM&agrave;u sắc: Hồng. V&agrave;ng, xanh dương, xanh l&aacute;<br />\r\nĐơn vị t&iacute;nh: Tập<br />\r\nGiấy đẹp, độ d&iacute;nh cao v&agrave; sử dụng được nhiều lần<br />\r\nXuất sứ: Pronoti</p>', '<p><strong>Giấy Note Pronoti 4 m&agrave;u&nbsp;</strong><br />\r\nM&agrave;u sắc: Hồng. V&agrave;ng, xanh dương, xanh l&aacute;<br />\r\nĐơn vị t&iacute;nh: Tập<br />\r\nGiấy đẹp, độ d&iacute;nh cao v&agrave; sử dụng được nhiều lần<br />\r\nXuất sứ: Pronoti</p>', NULL, 'uploads/product/1590663974_Giấy-Note-4-màu-Pronoti-1.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:06:14', NULL),
(12, 'GIẤY PHÂN TRANG 5 MÀU PRONOTI', 'giay-phan-trang-5-mau-pronoti', 21, NULL, '<p><strong>T&ecirc;n sản phẩm</strong>&nbsp;: Giấy ph&acirc;n trang 5 m&agrave;u Pronoti</p>\r\n\r\n<p><strong>Đơn vị t&iacute;nh</strong>&nbsp;: Tập</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i</strong>&nbsp;: 5 m&agrave;u/tập</p>', '<p><strong>T&ecirc;n sản phẩm</strong>&nbsp;: Giấy ph&acirc;n trang 5 m&agrave;u Pronoti</p>\r\n\r\n<p><strong>Đơn vị t&iacute;nh</strong>&nbsp;: Tập</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i</strong>&nbsp;: 5 m&agrave;u/tập</p>', NULL, 'uploads/product/1590664029_Giấy-phân-trang-5-màu-Pronoti-Nhựa-2.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:07:09', NULL),
(13, 'GIẤY THAN HORSE A4', 'giay-than-horse-a4', 22, NULL, '<p><strong>Loại giấy:&nbsp;</strong>Giấy than</p>\r\n\r\n<p><strong>Khổ giấy:&nbsp;</strong>A4</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i:&nbsp;</strong>100 tờ/xấp</p>', '<p><strong>Giấy than Horse A4</strong>&nbsp;h&agrave;ng nhập khẩu chất lượng cao, c&oacute; m&agrave;u xanh, n&eacute;t mực r&otilde;, kh&ocirc;ng nh&ograve;e khi sử dụng, chất lượng vượt trội v&agrave; gi&aacute; kh&aacute; tốt.&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://vanphongpham89.com/2894cd28-2856-44ad-a765-2c2538971596\" width=\"1496\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Giấy than Horse</p>\r\n\r\n<p>Sản phẩm&nbsp;nổi trội với độ bền dai, kh&ocirc;ng g&acirc;y lem mực v&agrave; c&oacute; thể sử dụng được nhiều lần, đặc biệt hơn l&agrave; với k&iacute;ch thước A4 ti&ecirc;u chuẩn th&igrave; bạn c&oacute; thể sử dụng giấy than với nhiều loại tập chứng từ.&nbsp;</p>\r\n\r\n<p><strong>Giấy than Horse A4</strong>&nbsp;được phủ một lớp chất nhuộm ở một mặt, d&ugrave;ng đặt l&oacute;t giữa c&aacute;c tờ giấy, khi viết tạo ra được nhiều bản sao. Loại giấy n&agrave;y kh&ocirc;ng c&oacute; m&ugrave;i kh&oacute; chịu v&agrave; rất dễ sử dụng. Hơn nữa, đ&oacute;ng g&oacute;i 100 tờ/hộp gi&uacute;p bạn tiết kiệm một phần n&agrave;o đ&oacute; chi ph&iacute; văn ph&ograve;ng phẩm h&agrave;ng th&aacute;ng.</p>', '150000', 'uploads/product/1590664122_Giấy-than-Horse-4.jpg', 1, 1, 5, 500, 0, NULL, NULL, '2020-05-28 04:08:42', NULL),
(14, 'GIẤY THAN KOKUSAI A4', 'giay-than-kokusai-a4', 22, NULL, '<p><strong>Loại giấy:&nbsp;</strong>Giấy than</p>\r\n\r\n<p><strong>Khổ giấy:&nbsp;</strong>A4</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i:&nbsp;</strong>100 tờ/xấp</p>', '<p><strong>Loại giấy:&nbsp;</strong>Giấy than</p>\r\n\r\n<p><strong>Khổ giấy:&nbsp;</strong>A4</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i:&nbsp;</strong>100 tờ/xấp</p>', '200000', 'uploads/product/1590664169_Giấy-than-KOKUSAI-2.jpg', 1, 1, 3, 500, 0, NULL, NULL, '2020-05-28 04:09:29', NULL),
(15, 'GIẤY THAN G-STAR A4', 'giay-than-g-star-a4', 22, NULL, '<p><strong>Loại giấy:&nbsp;</strong>Giấy than</p>\r\n\r\n<p><strong>Khổ giấy:&nbsp;</strong>A4</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i:&nbsp;</strong>100 tờ/xấp</p>', '<p><strong>Loại giấy:&nbsp;</strong>Giấy than</p>\r\n\r\n<p><strong>Khổ giấy:&nbsp;</strong>A4</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i:&nbsp;</strong>100 tờ/xấp</p>', NULL, 'uploads/product/1590664210_GIAY-THAN-G-STAR-14.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:10:10', NULL),
(16, 'GIẤY IN LIÊN TỤC A4 2 LIÊN', 'giay-in-lien-tuc-a4-2-lien', 23, NULL, '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 02 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless Oji Th&aacute;i Lan</p>\r\n\r\n<p><strong>&ndash; Định lượng :</strong>&nbsp;56, 50, 56 GSM</p>', '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 02 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless Oji Th&aacute;i Lan</p>\r\n\r\n<p><strong>&ndash; Định lượng :</strong>&nbsp;56, 50, 56 GSM</p>', '80000', 'uploads/product/1590664292_Giấy-in-liên-tục-A4-2-liên.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:11:32', NULL),
(17, 'GIẤY IN LIÊN TỤC A5 2 LIÊN', 'giay-in-lien-tuc-a5-2-lien', 23, NULL, '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 02 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless</p>', '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 02 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless</p>', NULL, 'uploads/product/1590664330_Giấy-in-liên-tục-A5-2-liên-6.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-05-28 04:12:10', NULL),
(18, 'GIẤY IN LIÊN TỤC A4 4 LIÊN', 'giay-in-lien-tuc-a4-4-lien', 23, NULL, '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 04 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless</p>\r\n\r\n<p><strong>&ndash; Định lượng :</strong>&nbsp;56, 50, 56 GSM</p>', '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 04 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless</p>\r\n\r\n<p><strong>&ndash; Định lượng :</strong>&nbsp;56, 50, 56 GSM</p>', '120000', 'uploads/product/1590664376_Giấy-in-liên-tục-A4-4-liên.jpg', 1, 1, 3, 333, 0, NULL, NULL, '2020-05-28 04:12:56', NULL),
(19, 'GIẤY IN LIÊN TỤC A4 3 LIÊN', 'giay-in-lien-tuc-a4-3-lien', 23, NULL, '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 03 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless</p>\r\n\r\n<p><strong>&ndash; Định lượng :</strong>&nbsp;56, 50, 56 GSM</p>', '<p><strong>&ndash; H&igrave;nh thức:</strong>&nbsp;In li&ecirc;n tục, đục lỗ 2 b&ecirc;n</p>\r\n\r\n<p><strong>&ndash; Quy c&aacute;ch:</strong>&nbsp;01 bộ x 03 li&ecirc;n</p>\r\n\r\n<p><strong>&nbsp;&ndash; Số m&agrave;u in:</strong>&nbsp;1 m&agrave;u mực</p>\r\n\r\n<p><strong>&ndash; Loại giấy :</strong>&nbsp;In tr&ecirc;n giấy Carbonless</p>\r\n\r\n<p><strong>&ndash; Định lượng :</strong>&nbsp;56, 50, 56 GSM</p>', '120000', 'uploads/product/1590664417_Giấy-in-liên-tục-A4-3-liên.gif', 1, 1, 3, 332, 1, NULL, NULL, '2020-06-03 22:34:20', '2020-06-03 22:34:20'),
(20, 'BÌA MICA MỜ A4', 'bia-mica-mo-a4', 24, NULL, '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh mờ</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :50tờ/tập</p>\r\n\r\n<p><strong>Đặc t&iacute;nh&nbsp;</strong>: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, đ&oacute;ng g&aacute;y xoắn t&agrave;i liệu</p>', '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh mờ</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :50tờ/tập</p>\r\n\r\n<p><strong>Đặc t&iacute;nh&nbsp;</strong>: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, đ&oacute;ng g&aacute;y xoắn t&agrave;i liệu</p>', '150000', 'uploads/product/1590664523_Bìa-mica-mờ-A4.jpg', 1, 1, 0, 344, 1, NULL, NULL, '2020-05-28 04:15:23', NULL),
(21, 'BÌA MICA MỜ A3', 'bia-mica-mo-a3', 24, NULL, '<p><strong><em><u>B&igrave;a Mica mờ A3&nbsp;:</u></em></strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; K&iacute;ch thước: 297 x 420mm</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đ&oacute;ng g&oacute;i: 50 tờ/tập</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Độ d&agrave;y: 17mm/tập</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xuất xứ: Trung Quốc</strong></p>', '<p><strong><em><u>B&igrave;a Mica mờ A3&nbsp;:</u></em></strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; K&iacute;ch thước: 297 x 420mm</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đ&oacute;ng g&oacute;i: 50 tờ/tập</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Độ d&agrave;y: 17mm/tập</strong></p>\r\n\r\n<p><strong>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xuất xứ: Trung Quốc</strong></p>', '200000', 'uploads/product/1590664575_bia-mica-m-a3-bia-mica-mo-a3.jpg', 1, 1, 0, 333, 0, NULL, NULL, '2020-05-28 04:16:15', NULL),
(22, 'BÌA MICA A4 DÀY', 'bia-mica-a4-day', 25, NULL, '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh loại mỏng, trong suốt.</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :100 tờ/ram</p>\r\n\r\n<p><strong>Đặc t&iacute;nh</strong>&nbsp;: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, t&agrave;i liệu hay hồ sơ</p>', '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh loại mỏng, trong suốt.</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :100 tờ/ram</p>\r\n\r\n<p><strong>Đặc t&iacute;nh</strong>&nbsp;: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, t&agrave;i liệu hay hồ sơ</p>', '165000', 'uploads/product/1590664650_Bìa-mica-A4-dày.jpg', 1, 1, 0, 554, 1, NULL, NULL, '2020-05-28 04:17:30', NULL),
(23, 'BÌA MICA A4 TRUNG', 'bia-mica-a4-trung', 25, NULL, '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh loại mỏng, trong suốt.</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :100 tờ/ram</p>\r\n\r\n<p><strong>Đặc t&iacute;nh</strong>&nbsp;: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, t&agrave;i liệu hay hồ sơ</p>', '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh loại mỏng, trong suốt.</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :100 tờ/ram</p>\r\n\r\n<p><strong>Đặc t&iacute;nh</strong>&nbsp;: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, t&agrave;i liệu hay hồ sơ</p>', NULL, 'uploads/product/1590664689_Bìa-mica-trung-A4-1.jpg', 1, 1, 3, 555, 0, NULL, NULL, '2020-05-28 04:18:09', NULL),
(24, 'BÌA MICA A3 TRUNG', 'bia-mica-a3-trung', 25, NULL, '<p>B&Igrave;A MICA A3 TRUNG</p>', '<p>B&Igrave;A MICA A3 TRUNG</p>', '130000', 'uploads/product/1590664741_MIKA.jpg', 1, 1, 0, 554, 1, NULL, NULL, '2020-05-28 04:19:01', NULL),
(25, 'BÌA MICA A4 DÀY - 01', 'bia-mica-a4-day-01', 25, NULL, '<p>B&Igrave;A MICA A4 D&Agrave;Y</p>', '<h1>B&Igrave;A MICA A4 D&Agrave;Y</h1>', '250000', 'uploads/product/1590664813_Bia-Mica-A3-1.jpg', 1, 1, 0, 444, 0, NULL, NULL, '2020-05-28 04:20:13', NULL),
(26, 'BÌA MICA MỎNG A4', 'bia-mica-mong-a4', 25, NULL, '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh loại mỏng, trong suốt.</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :100 tờ/ram, độ d&agrave;y : 1.2mm</p>\r\n\r\n<p><strong>Đặc t&iacute;nh</strong>&nbsp;: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, t&agrave;i liệu hay hồ sơ&nbsp;</p>', '<p><strong>Đặc điểm :</strong></p>\r\n\r\n<p>&ndash; B&igrave;a b&oacute;ng k&iacute;nh loại mỏng, trong suốt.</p>\r\n\r\n<p>&ndash; K&iacute;ch thước : khổ A4 (210x297mm)</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i :100 tờ/ram, độ d&agrave;y : 1.2mm</p>\r\n\r\n<p><strong>Đặc t&iacute;nh</strong>&nbsp;: d&ugrave;ng l&agrave;m b&igrave;a đ&oacute;ng quyển, t&agrave;i liệu hay hồ sơ&nbsp;</p>', NULL, 'uploads/product/1590664855_Bìa-mica-mỏng.jpg', 1, 1, 0, 444, 0, NULL, NULL, '2020-05-28 04:20:55', NULL),
(27, 'BÌA MÀU XANH CỐM A4 T&T', 'bia-mau-xanh-com-a4-tt', 26, NULL, '<p><strong>M&agrave;u sắc : Xanh Cốm</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : Tập</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '<p><strong>M&agrave;u sắc : Xanh Cốm</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : Tập</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '35000', 'uploads/product/1590718884_Bìa-màu-Xanh-Cốm-A4-TT-300x300.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-05-28 19:21:24', NULL),
(28, 'BÌA MÀU XANH BIỂN A4 T&T', 'bia-mau-xanh-bien-a4-tt', 26, NULL, '<p><strong>M&agrave;u sắc : Xanh Biển</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : Tập</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '<p><strong>M&agrave;u sắc : Xanh Biển</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : Tập</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '35000', 'uploads/product/1590718937_Bìa-màu-Xanh-Biển-A4-TT-1.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-05-28 19:22:17', NULL),
(29, 'BÌA MÀU VÀNG A4 T&T', 'bia-mau-vang-a4-tt', 26, NULL, '<p><strong>M&agrave;u sắc : V&agrave;ng</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : tập.</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '<p><strong>M&agrave;u sắc : V&agrave;ng</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : tập.</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '35000', 'uploads/product/1590718997_Bìa-màu-Vàng-A4-TT-1.jpg', 1, 1, 0, 554, 1, NULL, NULL, '2020-05-28 19:23:17', NULL),
(30, 'BÌA MÀU TRẮNG A4 T&T', 'bia-mau-trang-a4-tt', 26, NULL, '<p><strong>M&agrave;u sắc : Trắng</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : tập.</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '<p><strong>M&agrave;u sắc : Trắng</strong></p>\r\n\r\n<p><strong>&ndash; Đơn vị : tập.</strong></p>\r\n\r\n<p><strong>&ndash; Đ&oacute;ng g&oacute;i: 100 tờ / tập</strong></p>\r\n\r\n<p><strong>+ Chất liệu: giấy m&agrave;u.</strong></p>\r\n\r\n<p><strong>+ K&iacute;ch thước : A4 (210 x 297 mm)</strong></p>', '35000', 'uploads/product/1590719041_Bìa-màu-Trắng-A4-TT-1.jpg', 1, 1, 0, 400, 0, NULL, NULL, '2020-05-28 19:24:01', NULL),
(31, 'BÚT BI THIÊN LONG TL-089', 'but-bi-thien-long-tl-089', 27, NULL, '<p><strong>B&uacute;t bi Thi&ecirc;n Long TL-089</strong></p>\r\n\r\n<p>Thiết kế dạng bấm tiện dụng</p>\r\n\r\n<p>Vỏ bằng nhựa chắc chắn, dễ cầm</p>\r\n\r\n<p>Đầu bi 0.5mm, độ trơn nhẵn tốt</p>\r\n\r\n<p>Hộp 20 c&acirc;y b&uacute;t tiện lợi</p>', '<p><strong>B&uacute;t bi Thi&ecirc;n Long TL-089</strong></p>\r\n\r\n<p>Thiết kế dạng bấm tiện dụng</p>\r\n\r\n<p>Vỏ bằng nhựa chắc chắn, dễ cầm</p>\r\n\r\n<p>Đầu bi 0.5mm, độ trơn nhẵn tốt</p>\r\n\r\n<p>Hộp 20 c&acirc;y b&uacute;t tiện lợi</p>', '3500', 'uploads/product/1590719157_Bút-bi-Thiên-Long-TL-089-1.jpg', 1, 1, 3, 552, 1, NULL, NULL, '2020-05-28 19:25:57', NULL),
(32, 'BÚT BI THIÊN LONG TL-025', 'but-bi-thien-long-tl-025', 27, NULL, '<p>- Thương hiệu : Thi&ecirc;n Long</p>\r\n\r\n<p>-&nbsp;Đường k&iacute;nh vi&ecirc;n bi :&nbsp;0.8 mm</p>\r\n\r\n<p>- Đ&oacute;ng g&oacute;i :&nbsp;20 c&acirc;y / hộp</p>\r\n\r\n<p>- Trọng lượng : 9g</p>', '<p>- Thương hiệu : Thi&ecirc;n Long</p>\r\n\r\n<p>-&nbsp;Đường k&iacute;nh vi&ecirc;n bi :&nbsp;0.8 mm</p>\r\n\r\n<p>- Đ&oacute;ng g&oacute;i :&nbsp;20 c&acirc;y / hộp</p>\r\n\r\n<p>- Trọng lượng : 9g</p>', '3500', 'uploads/product/1590731851_Bút-bi-Thiên-Long-TL-025-1-300x300 (1).jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-05-28 22:57:31', NULL),
(33, 'Bút chì kim Steadtler', 'but-chi-kim-steadtler', 28, NULL, '<p>B&uacute;t ch&igrave; kim Steadtler 77705 0.5mmm - 77705 / chiếc</p>', '<p>B&uacute;t ch&igrave; kim Steadtler 77705 0.5mmm - 77705 / chiếc</p>', '20000', 'uploads/product/1591005176_but-chi-kim-steadtler.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 02:52:56', NULL),
(34, 'Bút chì kim Pentel A255', 'but-chi-kim-pentel-a255', 28, NULL, '<p>B&uacute;t ch&igrave; kim Pentel A255 0.5mm hộp 12 chiếc - A10 / chiếc</p>', '<p>B&uacute;t ch&igrave; kim Pentel A255 0.5mm hộp 12 chiếc - A10 / chiếc</p>', '8000', 'uploads/product/1591005257_but-chi-kim-pentel-a255.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 02:54:17', NULL),
(35, 'Bút dạ kính Zebra 2 đầu', 'but-da-kinh-zebra-2-dau', 29, NULL, '<p>B&uacute;t dạ k&iacute;nh Zebra 2 đầu nhỏ hộp 10 chiếc - 4 m&agrave;u / chiếc</p>', '<p>B&uacute;t dạ k&iacute;nh Zebra 2 đầu nhỏ hộp 10 chiếc - 4 m&agrave;u / chiếc</p>', '3000', 'uploads/product/1591005331_but-da-kinh-zebra-2-dau.jpg', 1, 1, 0, 500, 0, NULL, NULL, '2020-06-01 02:55:31', NULL),
(36, 'Bút dạ kính Thiên Long PM-04', 'but-da-kinh-thien-long-pm-04', 29, NULL, '<p>B&uacute;t dạ k&iacute;nh Thi&ecirc;n Long PM-04 chuy&ecirc;n ghi mặt đĩa CD - 3 m&agrave;u / chiếc</p>', '<p>B&uacute;t dạ k&iacute;nh Thi&ecirc;n Long PM-04 chuy&ecirc;n ghi mặt đĩa CD - 3 m&agrave;u / chiếc</p>', '7500', 'uploads/product/1591005375_but-da-kinh-thien-long-pm-04.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 02:56:15', NULL),
(37, 'Bút dạ dầu Thiên Long PM-09', 'but-da-dau-thien-long-pm-09', 29, NULL, '<p>B&uacute;t dạ dầu Thi&ecirc;n long PM-09 hộp 12 chiếc - 3 m&agrave;u / chiếc</p>', '<p>B&uacute;t dạ dầu Thi&ecirc;n long PM-09 hộp 12 chiếc - 3 m&agrave;u / chiếc</p>', '7500', 'uploads/product/1591005422_but-da-dau-thien-long-pm-09.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 02:57:02', NULL),
(38, 'Bút dạ dầu Pilot 2 đầu to', 'but-da-dau-pilot-2-dau-to', 29, NULL, '<p>B&uacute;t dạ dầu Pilot 2 đầu to h&agrave;ng NEW hộp 12 chiếc - 3 m&agrave;u / chiếc</p>', '<p>B&uacute;t dạ dầu Pilot 2 đầu to h&agrave;ng NEW hộp 12 chiếc - 3 m&agrave;u / chiếc</p>', '3500', 'uploads/product/1591005462_but-da-dau-pilot-2-dau-to.jpg', 1, 1, 0, 333, 0, NULL, NULL, '2020-06-01 02:57:42', NULL),
(39, 'Bút xóa Gingko', 'but-xoa-gingko', 30, NULL, '<p>B&uacute;t x&oacute;a th&acirc;n tr&ograve;n , đầu sắt Gingko - K310 / chiếc</p>', '<p><a href=\"https://www.hdtanphat.com/\">Văn ph&ograve;ng phẩm</a>&nbsp;|&nbsp;<a href=\"https://www.hdtanphat.com/\">van phong pham gia re</a>&nbsp;HD T&acirc;n Ph&aacute;t chuy&ecirc;n cung cấp c&aacute;c loại b&uacute;t x&oacute;a Gingko.&nbsp;<a href=\"https://www.hdtanphat.com/but-xoa-bang-phu\">B&uacute;t x&oacute;a Gingko</a>. Đến với HD T&acirc;n Ph&aacute;t, qu&yacute; kh&aacute;ch sẽ lựa chọn cho m&igrave;nh được c&aacute;c sản phẩm ưng &yacute; v&agrave; ph&ugrave; hợp nhất với nhu cầu của m&igrave;nh.</p>', '13500', 'uploads/product/1591005595_hdtanphat.com_but-xoa-gingko.jpeg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 02:59:55', NULL),
(40, 'Bút xóa Thiên Long CP05', 'but-xoa-thien-long-cp05', 30, NULL, '<p>B&uacute;t x&oacute;a th&acirc;n tr&ograve;n, đầu sắt Thi&ecirc;n Long CP05 - CP05 / chiếc</p>', '<p>B&uacute;t x&oacute;a th&acirc;n tr&ograve;n, đầu sắt Thi&ecirc;n Long CP05 - CP05 / chiếc</p>', '12000', 'uploads/product/1591005642_hdtanphat.com_but-xoa-thien-long-cp05.jpeg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 03:00:42', NULL),
(41, 'Mực Fax', 'muc-fax', 50, NULL, '<p>Mực Fax Panasonic KX-MB 2085 M&atilde; hộp mực: Hộp Mực m&aacute;y Fax KX-FAT411 Black Toner Cartridge - D&ugrave;ng cho m&aacute;y fax Panasonic KX-MB2025, KX-MB2085, KX-MB2030, KX-MB2061</p>', '<p>Mực Fax Panasonic KX-MB 2085 M&atilde; hộp mực: Hộp Mực m&aacute;y Fax KX-FAT411 Black Toner Cartridge - D&ugrave;ng cho m&aacute;y fax Panasonic KX-MB2025, KX-MB2085, KX-MB2030, KX-MB2061</p>', NULL, 'uploads/product/1591005964_muc-fax-kx-mb.gif', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 03:06:04', NULL),
(42, 'Mực Ricoh G7', 'muc-ricoh-g7', 50, NULL, '<p>Mực Ricoh G7 d&ugrave;ng cho MP6001/MP 6500 g&oacute;i 900g M&atilde; mực: RICOH - G7 - Loại mực: Photocopy đen trắng. - D&ugrave;ng cho m&aacute;y Photo : Mực g&oacute;i d&ugrave;ng cho m&aacute;y Ricoh Aficio : 550\\ 650\\ 551\\ 551P\\ 700\\ 850\\ 1055\\ 1050\\ 1060\\ 1075\\ 1085\\ 1105\\ 2051\\ 2051SP\\ 2060\\ 2075\\ 2090\\ 2105.MP MP5500/ MP 6001/MP6500/...</p>', '<p>Mực Ricoh G7 d&ugrave;ng cho MP6001/MP 6500 g&oacute;i 900g M&atilde; mực: RICOH - G7 - Loại mực: Photocopy đen trắng. - D&ugrave;ng cho m&aacute;y Photo : Mực g&oacute;i d&ugrave;ng cho m&aacute;y Ricoh Aficio : 550\\ 650\\ 551\\ 551P\\ 700\\ 850\\ 1055\\ 1050\\ 1060\\ 1075\\ 1085\\ 1105\\ 2051\\ 2051SP\\ 2060\\ 2075\\ 2090\\ 2105.MP MP5500/ MP 6001/MP6500/...</p>', NULL, 'uploads/product/1591006037_muc-ricon.jpg', 1, 1, 0, 555, 0, NULL, NULL, '2020-06-01 03:07:17', NULL),
(43, 'Sửa chữa máy In', 'sua-chua-may-in', 49, NULL, '<p>Li&ecirc;n hệ 0942 005 988</p>', '<p>Li&ecirc;n hệ 0942 005 988</p>', NULL, 'uploads/product/1591006290_Konica bizhub 458e-558e-658e.jpg', 1, 1, 0, NULL, 0, NULL, NULL, '2020-06-01 03:11:30', NULL),
(44, 'Sửa chữa máy Photo', 'sua-chua-may-photo', 49, NULL, '<p>Li&ecirc;n hệ 0942 005 988</p>', '<p>Li&ecirc;n hệ 0942 005 988</p>', NULL, 'uploads/product/1591006332_Fuji Xerox DocuPrint DP 2065.jpg', 1, 1, 0, NULL, 0, NULL, NULL, '2020-06-01 03:12:12', NULL),
(45, 'Máy photocopy đa chức năng Fuji Xerox WorkCentre 5225A/5230A', 'may-photocopy-da-chuc-nang-fuji-xerox-workcentre-5225a5230a', 52, NULL, '<p>M&aacute;y photocopy đen trắng đa chức năng, m&aacute;y văn ph&ograve;ng Fuji Xerox WorkCentre 5225/5230 c&oacute; tốc độ sao chụp 25-30 bản/ph&uacute;t, đặc biệt t&iacute;nh năng scan m&agrave;u với tốc độ cao...</p>', '<p>M&aacute;y photocopy đen trắng đa chức năng, m&aacute;y văn ph&ograve;ng Fuji Xerox WorkCentre 5225/5230 c&oacute; tốc độ sao chụp 25-30 bản/ph&uacute;t, đặc biệt t&iacute;nh năng scan m&agrave;u với tốc độ cao...</p>', NULL, 'uploads/product/1591006492_fuji-xerox-workcentre-5225-5230.png', 1, 1, 5, 50, 0, NULL, NULL, '2020-06-01 03:14:52', NULL),
(46, 'Máy photocopy đa chức năng Fuji Xerox DocuCentre-IV 3060', 'may-photocopy-da-chuc-nang-fuji-xerox-docucentre-iv-3060', 52, NULL, '<p>M&aacute;y photo Fuji Xerox DocuCentre-IV 3060, m&aacute;y văn ph&ograve;ng ch&iacute;nh h&atilde;ng tại H&agrave; Nội. Fuji Xerox DocuCentre-IV 3060 với c&aacute;c t&iacute;nh năng nổi bật gi&uacute;p giảm thiểu c&ocirc;ng việc nhưng đem lại hiệu quả cao trong khoảng thời gian ngắn nhất với nổ lực thấp nhất</p>', '<p>M&aacute;y photo Fuji Xerox DocuCentre-IV 3060, m&aacute;y văn ph&ograve;ng ch&iacute;nh h&atilde;ng tại H&agrave; Nội. Fuji Xerox DocuCentre-IV 3060 với c&aacute;c t&iacute;nh năng nổi bật gi&uacute;p giảm thiểu c&ocirc;ng việc nhưng đem lại hiệu quả cao trong khoảng thời gian ngắn nhất với nổ lực thấp nhất</p>', NULL, 'uploads/product/1591006524_fuji-xerox-workcentre-5225-5230.png', 1, 1, 0, 55, 0, NULL, NULL, '2020-06-01 03:15:24', NULL),
(47, 'Máy in laser Fuji Xerox DocuPrint DP 2065', 'may-in-laser-fuji-xerox-docuprint-dp-2065', 51, NULL, '<p>M&aacute;y in laser Fuji Xerox DocuPrint DP 2065 kinh tế tiết kiệm, vật tư sẵn h&agrave;ng</p>', '<p>M&aacute;y in laser Fuji Xerox DocuPrint DP 2065 kinh tế tiết kiệm, vật tư sẵn h&agrave;ng</p>', NULL, 'uploads/product/1591006666_Fuji Xerox DocuPrint DP 2065 (1).jpg', 1, 1, 0, 55, 0, NULL, NULL, '2020-06-01 03:17:46', NULL),
(48, 'Máy in laser Fuji Xerox Phaser 3155/3160/3160N', 'may-in-laser-fuji-xerox-phaser-315531603160n', 51, NULL, '<p>M&aacute;y in laser Fuji Xerox Phaser 3155/3160/3160N l&agrave; d&ograve;ng m&aacute;y in laser A4 cho độ ph&acirc;n giải cao 1200x1200 dpi, khay giấy chứa được 250 tờ</p>', '<p>M&aacute;y in laser Fuji Xerox Phaser 3155/3160/3160N l&agrave; d&ograve;ng m&aacute;y in laser A4 cho độ ph&acirc;n giải cao 1200x1200 dpi, khay giấy chứa được 250 tờ</p>', NULL, 'uploads/product/1591006705_may-in-fuji-xerox-phaser-3155-3160-3160n.jpg', 1, 1, 0, 55, 0, NULL, NULL, '2020-06-01 03:18:25', NULL),
(49, 'Giấy in A4 Samsung C&T ĐL70gsm', 'giay-in-a4-samsung-ct-dl70gsm', 16, NULL, '<p>K&iacute;ch thước: 210x297mm, Định lượng: 70gsm</p>\r\n\r\n<p>Đ&oacute;ng g&oacute;i: 500 tờ/tập, 5 tập/th&ugrave;ng</p>\r\n\r\n<p>Xuất xứ: Trung Quốc</p>\r\n\r\n<p>Giấy trắng, đẹp, l&aacute;ng mịn, th&acirc;n thiện với m&ocirc;i trường</p>\r\n\r\n<p>Kh&ocirc;ng bị kẹt giấy, cho chất lượng in sắc n&eacute;t, th&iacute;ch hợp cho tất cả c&aacute;c loại m&aacute;y in v&agrave; m&aacute;y photocopy hiện đại</p>\r\n\r\n<p>B&aacute;n lẻ: 56.000đ/tập</p>\r\n\r\n<p>Mua cả th&ugrave;ng: 54.000đ/tập</p>', '<p>K&iacute;ch thước: 210x297mm, Định lượng: 70gsm</p>\r\n\r\n<p>Đ&oacute;ng g&oacute;i: 500 tờ/tập, 5 tập/th&ugrave;ng</p>\r\n\r\n<p>Xuất xứ: Trung Quốc</p>\r\n\r\n<p>Giấy trắng, đẹp, l&aacute;ng mịn, th&acirc;n thiện với m&ocirc;i trường</p>\r\n\r\n<p>Kh&ocirc;ng bị kẹt giấy, cho chất lượng in sắc n&eacute;t, th&iacute;ch hợp cho tất cả c&aacute;c loại m&aacute;y in v&agrave; m&aacute;y photocopy hiện đại</p>\r\n\r\n<p>B&aacute;n lẻ: 56.000đ/tập</p>\r\n\r\n<p>Mua cả th&ugrave;ng: 54.000đ/tập</p>', '58500', 'uploads/product/1591006958_giay-in-anh-de-can.jpg', 1, 1, 3, 555, 0, NULL, NULL, '2020-06-01 03:22:38', NULL),
(50, 'Giấy in Pagi đỏ ĐL 70 gsm', 'giay-in-pagi-do-dl-70-gsm', 16, NULL, '<p>Giấy in Pagi đỏ ĐL 70 gsm</p>', '<p>Giấy in Pagi đỏ ĐL 70 gsm</p>', '60000', 'uploads/product/1591007028_pagi-do.jpg', 1, 1, 0, 55, 0, NULL, NULL, '2020-06-01 03:23:48', NULL),
(51, 'Giấy đề can UNC A4', 'giay-de-can-unc-a4', 18, NULL, '<p>Giấy đề can UNC A4</p>', '<p>Giấy đề can UNC A4</p>', '180000', 'uploads/product/1591007187_2056nhan-dan-decan-asp1.jpg', 1, 1, 0, 55, 0, NULL, NULL, '2020-06-03 22:17:01', '2020-06-03 22:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `products_image`
--

CREATE TABLE `products_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pi_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pi_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pi_product_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_image`
--

INSERT INTO `products_image` (`id`, `pi_name`, `pi_slug`, `pi_product_id`, `created_at`, `updated_at`) VALUES
(2, 'but-da-dau-thien-long-pm-09.jpg', '1591246419_but-da-dau-thien-long-pm-09jpg.jpg', 51, '2020-06-03 21:53:39', NULL),
(3, 'but-da-kinh-thien-long-pm-04.jpg', '1591246419_but-da-kinh-thien-long-pm-04jpg.jpg', 51, '2020-06-03 21:53:39', NULL),
(4, 'but-da-kinh-zebra-2-dau.jpg', '1591246419_but-da-kinh-zebra-2-daujpg.jpg', 51, '2020-06-03 21:53:39', NULL),
(5, 'but-da-dau-pilot-2-dau-to.jpg', '1591248860_but-da-dau-pilot-2-dau-tojpg.jpg', 19, '2020-06-03 22:34:20', NULL),
(6, 'but-da-dau-thien-long-pm-09.jpg', '1591248860_but-da-dau-thien-long-pm-09jpg.jpg', 19, '2020-06-03 22:34:20', NULL),
(7, 'but-da-kinh-thien-long-pm-04.jpg', '1591248861_but-da-kinh-thien-long-pm-04jpg.jpg', 19, '2020-06-03 22:34:21', NULL),
(8, 'but-da-kinh-zebra-2-dau.jpg', '1591248861_but-da-kinh-zebra-2-daujpg.jpg', 19, '2020-06-03 22:34:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_user_id` int(11) NOT NULL DEFAULT 0,
  `r_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_product_id` int(11) NOT NULL DEFAULT 0,
  `r_type` tinyint(4) NOT NULL DEFAULT 0,
  `r_status` tinyint(4) NOT NULL DEFAULT 0,
  `r_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `r_user_id`, `r_name`, `r_email`, `r_product_id`, `r_type`, `r_status`, `r_content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lưu Tiến HN', 'luutiencnc89@gmail.com', 31, 5, 1, 'Sản phẩm bên bạn rất bền, đẹp. Nhân viên tư vấn chu đáo', '2020-06-01 01:57:45', '2020-06-01 02:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `register_cutomers`
--

CREATE TABLE `register_cutomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_cutomers`
--

INSERT INTO `register_cutomers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'abc@gmail.com', '2020-06-03 01:31:45', NULL),
(2, 'luutienmqihn@gmail.com', '2020-06-04 02:50:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `address_1`, `address_2`, `address_3`, `hotline`, `email`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/setting/1591263703_vpp-hong-ngoc-logo-white.jpg', 'Số 14 Pháo Đài Láng, Láng Thượng, Đống Đa, HN', NULL, NULL, 942005988, 'luutiencnc89@gmail.com', '<p>Văn ph&ograve;ng phẩm 89 &ndash; Nh&agrave; cung cấp văn ph&ograve;ng phẩm uy t&iacute;n, phục vụ tối đa nhu cầu của doanh nghiệp v&agrave; ng&agrave;nh in ấn. Văn ph&ograve;ng phẩm b&aacute;n tr&ecirc;n Kinh Bắc chất lượng, đa dạng, gi&aacute; cả phải chăng v&agrave; c&oacute; nhiều khuyến m&atilde;i bất ngờ.</p>', 1, '2020-06-04 02:12:17', '2020-06-04 02:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sd_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_target` tinyint(4) NOT NULL DEFAULT 1,
  `sd_active` tinyint(4) NOT NULL DEFAULT 1,
  `sd_sort` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `sd_title`, `sd_link`, `sd_image`, `sd_target`, `sd_active`, `sd_sort`, `created_at`, `updated_at`) VALUES
(1, 'Slide 1', NULL, 'uploads/slide/1591168892_kinh-doanh-van-phong-pham-1.jpg', 1, 1, 1, '2020-06-02 23:51:37', '2020-06-03 00:21:32'),
(2, 'Slide 2', NULL, 'uploads/slide/1591168900_van-phong-pham-quan-9.jpg', 1, 1, 2, '2020-06-02 23:54:41', '2020-06-03 00:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tst_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tst_user_id` int(11) NOT NULL DEFAULT 0,
  `tst_total_money` int(11) NOT NULL DEFAULT 0,
  `tst_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_status` tinyint(4) NOT NULL DEFAULT 1,
  `tst_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 la thanh toan tien mat, 0 la chuyen khoan',
  `tst_code_cuppon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tst_code`, `tst_user_id`, `tst_total_money`, `tst_name`, `tst_email`, `tst_phone`, `tst_address`, `tst_note`, `tst_status`, `tst_type`, `tst_code_cuppon`, `created_at`, `updated_at`) VALUES
(3, 'DH-Lưu Tiến HN-01062020', 1, 1452000, 'Lưu Tiến HN', 'luutiencnc89@gmail.com', '942005988', 'PHÁO ĐÀI LÁNG', NULL, 2, 0, NULL, '2020-05-31 21:30:08', '2020-06-04 00:41:39'),
(4, 'DH-VINH-01062020', 0, 10185, 'VINH', 'vinh@gmail.com', '0123456789', 'PHÁO ĐÀI LÁNG', NULL, 2, 1, NULL, '2020-05-31 21:37:32', '2020-05-31 22:13:40'),
(5, 'DH-Lưu Tiến HN-01062020', 1, 100050, 'Lưu Tiến HN', 'luutiencnc89@gmail.com', '942005988', 'HÀ ĐÔNG', NULL, 2, 0, 'MA1.6', '2020-05-31 21:51:38', '2020-06-04 00:41:34'),
(6, 'DH-Lưu Tiến HN-01062020', 1, 108300, 'Lưu Tiến HN', 'luutiencnc89@gmail.com', '942005988', 'PHÁO ĐÀI LÁNG', NULL, 2, 0, 'MA1.6', '2020-05-31 23:00:30', '2020-06-04 00:41:30'),
(7, 'DH-Lưu Tiến HN-01062020', 0, 35000, 'Lưu Tiến HN', 'luutiencnc89@gmail.com', '942005988', 'Hà Nội', NULL, 2, 0, NULL, '2020-06-01 02:27:49', '2020-06-01 02:29:19'),
(8, 'DH-Lưu Tiến HN-01062020', 0, 561400, 'Lưu Tiến HN', 'luutiencnc89@gmail.com', '942005988', 'HÀ ĐÔNG', NULL, 2, 1, NULL, '2020-06-01 02:29:02', '2020-06-01 02:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lưu Tiến', 'luutiencnc89@gmail.com', NULL, 942005988, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2020-05-29 19:30:27', '2020-06-02 22:56:38'),
(2, 'HOÀNG MINH', 'hoangminh@gmail.com', NULL, 866488453, '12357ae9dd10b849fa1fd8a09a79c867', NULL, '2020-05-29 19:37:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_cuppon`
--

CREATE TABLE `user_cuppon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uc_user_id` int(11) DEFAULT NULL,
  `uc_cuppon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_cuppon`
--

INSERT INTO `user_cuppon` (`id`, `uc_user_id`, `uc_cuppon_code`, `created_at`, `updated_at`) VALUES
(7, 1, 'MA1.6', '2020-05-31 23:00:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_slug_index` (`a_slug`),
  ADD KEY `articles_a_hot_index` (`a_hot`),
  ADD KEY `articles_a_active_index` (`a_active`),
  ADD KEY `articles_a_menu_id_index` (`a_menu_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_slug_unique` (`c_slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuppons`
--
ALTER TABLE `cuppons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_statics`
--
ALTER TABLE `page_statics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_image`
--
ALTER TABLE `products_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_r_user_id_index` (`r_user_id`);

--
-- Indexes for table `register_cutomers`
--
ALTER TABLE `register_cutomers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_cutomers_email_unique` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_address_1_unique` (`address_1`),
  ADD UNIQUE KEY `settings_hotline_unique` (`hotline`),
  ADD UNIQUE KEY `settings_email_unique` (`email`),
  ADD UNIQUE KEY `settings_address_2_unique` (`address_2`),
  ADD UNIQUE KEY `settings_address_3_unique` (`address_3`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tst_user_id_index` (`tst_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cuppon`
--
ALTER TABLE `user_cuppon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cuppons`
--
ALTER TABLE `cuppons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `page_statics`
--
ALTER TABLE `page_statics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products_image`
--
ALTER TABLE `products_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_cutomers`
--
ALTER TABLE `register_cutomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_cuppon`
--
ALTER TABLE `user_cuppon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
