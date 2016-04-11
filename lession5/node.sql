-- phpMyAdmin SQL Dump
-- version 4.5.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 08:47 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE `node` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'node id',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'node title',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'node content',
  `status` tinyint(4) NOT NULL COMMENT 'node status:1=enable;0=disable',
  `created` int(10) UNSIGNED NOT NULL COMMENT 'node created timestamp',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'node modified timestamp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Store node data';

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`id`, `title`, `content`, `status`, `created`, `modified`) VALUES
(1, 'Triều Tiên gọi tổng thống Hàn Quốc là ''người phụ nữ xấu xa''', 'Hãng thông tấn quốc gia Triều Tiên KCNA hôm nay dẫn thông báo từ Ủy ban Tái thống nhất Hòa bình Triều Tiên (CPRK) cho biết việc Tổng thống Hàn Quốc Park Geun-hye luôn muốn Bình Nhưỡng từ bỏ chương trình hạt nhân cho thấy bà là "người ngu dốt nhất, không biết cách thế giới vận động".\n\n"Người phụ nữ xấu xa không ai sánh bằng này đẩy quan hệ Triều Tiên - Hàn Quốc đến bế tắc toàn diện và làm gia tăng nguy cơ chiến tranh", thông báo viết, chỉ trích sự tồn tại và hành vi của bà.\n\nCPRK chỉ trích tổng thống Hàn Quốc sau khi bà tham dự hội nghị thượng đỉnh an ninh hạt nhân do Tổng thống Mỹ Barack Obama tổ chức tuần trước ở Washington, lên án chương trình hạt nhân của Triều Tiên. Triều Tiên trước đó đăng video mô phỏng tấn công phủ tổng thống Nhà Xanh ở Seoul bằng tên lửa.\n\n"Bà ấy sẽ không thể trốn thoát được, kể cả ở Mỹ", người phát ngôn CPRK cảnh báo. Phiên bản tiếng Triều Tiên của thông báo còn cáo buộc bà Park bán lợi ích quốc gia của Hàn Quốc cho các lực lượng nước ngoài.\n\nThông báo khiến chính phủ Hàn Quốc tức tối. "Chính phủ cảnh báo mạnh mẽ Triều Tiên, yêu cầu lập tức chấm dứt lăng mạ lãnh đạo của chúng tôi bằng những từ ngữ thô tục... và đe dọa", Park Soo-jin. phó phát ngôn viên Bộ Thống nhất Hàn Quốc, nói. Hàn Quốc sẽ triển khai mọi nỗ lực để triển khai các lệnh trừng phạt nghiêm ngặt hơn, ràng buộc với Triều Tiên nhằm giải trừ vũ khí nước này.\n\nCăng thẳng trên bán đảo Triều Tiên đang ở mức cao sau khi Bình Nhưỡng thử hạt nhận lần 4 ngày 6/1. Triều Tiên còn nhiều lần dọa tấn công Mỹ và Hàn Quốc, đồng thời phóng hàng loạt tên lửa tầm ngắn, tầm trung ra biển Nhật Bản để đáp trả việc hai nước tổ chức tập trận chung quy mô lớn hồi đầu tháng 3.\n\nBình Nhưỡng coi hai cuộc tập trận là mối đe dọa trực tiếp nhằm vào nhà lãnh đạo Kim Jong-un trong khi Seoul và Washington khẳng định hoạt động trên chỉ mang tính phòng vệ.', 1, 1460104089, '2016-04-11 01:46:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `node`
--
ALTER TABLE `node`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'node id', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
