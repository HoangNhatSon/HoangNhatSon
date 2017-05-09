-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 04:08 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `button`
--

DROP TABLE IF EXISTS `button`;
CREATE TABLE IF NOT EXISTS `button` (
  `button_id` int(11) NOT NULL,
  `button_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_content` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`button_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `button`
--

INSERT INTO `button` (`button_id`, `button_name`, `button_content`) VALUES
(1, 'viewmenu', 'Xem danh sách hải sản của chúng tôi'),
(2, 'viewchef', 'Xem danh sách đầu bếp của chúng tôi');

-- --------------------------------------------------------

--
-- Table structure for table `chimuc`
--

DROP TABLE IF EXISTS `chimuc`;
CREATE TABLE IF NOT EXISTS `chimuc` (
  `chimuc_id` int(11) NOT NULL,
  `chimuc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chimuc_content` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`chimuc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chimuc`
--

INSERT INTO `chimuc` (`chimuc_id`, `chimuc_name`, `chimuc_content`) VALUES
(1, 'chimuc1_md9', 'Tôm hùm Bình Ba (Khánh Hòa)'),
(2, 'chimuc2_md9', 'Cua Năm Căn Cà Mau'),
(3, 'chimuc3_md9', 'Ghẹ (Phan Rang)'),
(4, 'chimuc4_md9', '"Mực nháy” Cửa Lò (Nghệ An)'),
(5, 'chimuc5_md9', 'Cá ngừ đại dương (Phú Yên)'),
(6, 'chimuc6_md9', 'Mực một nắng Phan Thiết (Bình Thuận)'),
(7, 'chimuc1_md16', 'MÓN TRÁNG MIỆNG'),
(8, 'chimuc2_md16', 'BỮA TỐI'),
(9, 'chimuc3_md16', 'THỰC PHẨM'),
(10, 'chimuc4_md16', 'ĂN TRƯA'),
(11, 'chimuc5_md16', 'KHÁCH MỚI'),
(12, 'tag1_md17', 'MÓN TRÁNG MIỆNG'),
(13, 'tag2_md17', 'THỰC PHẨM'),
(14, 'tag3_md17', 'TƯƠI'),
(15, 'tag4_md17', 'SỨC KHỎE'),
(16, 'tag5_md17', 'BỮA TRƯA'),
(17, 'tag6_md17', 'RAU'),
(18, 'tag7_md17', 'CÔNG THỨC'),
(19, 'tag8_md17', 'THỨC ĂN NHANH'),
(20, 'tag9_md17', 'NƯỚC CHẤM'),
(21, 'tag10_md17', 'MÓN CHAY');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL,
  `content_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_noidung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_name`, `content_noidung`) VALUES
(1, 'content_md3', 'Hải sản là một nguồn quan trọng cung cấp protein trong khẩu phần ăn trên khắp thế giới, đặc biệt là ở các vùng ven biển. Hải sản là nguồn thực phẩm quan trọng của con người. Hải sản không những có hương vị thơm ngon mà còn có giá trị dinh dưỡng cao. Nhiều loại hải sản được dùng làm thực phẩm và được chế biến làm nhiều món ăn, có mùi vị thơm ngon, màu sắc hấp dẫn.'),
(2, 'content_2_md9', 'Đến với chúng tôi, bạn sẽ được thưởng thức các món ăn hải sản ngon và tuyệt với nhất, phù hợp với tất cả các thành viên trong gia đình bạn , hứa hẹn gia đình bạn sẽ có một buổi tối tuyệt với.'),
(3, 'content', 'Quán ngon hơn và giá ổn hơn Gành hào nhiều, chế biến rất nhanh và ngon, pv dễ thương và buồn cười :v :v kg gian ổn nếu đi cặp đôi, ngồi gió thổi phà phà vào mặt lát lạnh luôn. Sẽ quay lại dài dài khi xuống VT. Lựa hải sản sẽ qua bên kia đường nhé, cơm, lẩu nc uống thì gọi bên này. Đặc biết soda chanh đg ở đây cho nguyên chén đg và nguyên chén chanh!! Siu thích <3'),
(4, 'hoten', 'David Huynh'),
(5, 'title_md4', 'Hải sản từ khắp mọi miền đất nước được chúng tôi mua ngay khi mới bắt, vận chuyển trong ngày , đảm bảo sự tươi ngon và đáng tin cậy.'),
(6, 'content_md6', 'Sau đây là danh sách một số món hải sản tươi sống, các bạn vui long xem tên món ăn và giá ở phía bên dưới. cám ơn quý khách đã tham quan trang web của chúng tôi. Chúc qúy khách ăn ngon miệng và gặp một ngày may mắn.'),
(7, 'content_1_md7', 'Tiết trời Sài Gòn đang ngày càng thay<br>đổi. Những cái nóng gắt vội vàng đi<br>nhường chỗ cho những cơn mưa. Sự thay đổi về thời tiết khiến con người .'),
(8, 'content_2_md7', 'Cá Kìm hay còn gọi là cá Lìm Kìm. Có thân dài khoảng 10cm, hình trụ dài. Cá Kìm tuy không được xem là một loài cá quan trọng trong lĩnh vực đánh '),
(9, 'content_3_md7', 'Hòa chung với không khí đón ngày Quốc Khánh 2/9, ai ai cũng rôm rả lên kế hoạch cho ngày nghỉ lễ, phải không nào? Đi đâu, làm gì, ăn gì, uống gì? '),
(10, 'content_4_md7', 'Để chế biến những món ăn từ thịt thì  <br> chúng ta có vô số món ăn được biến tấu. <br> Tuy nhiên, những món ăn từ cá bao giờ  <br> cũng hạn chế sự đa dạng về '),
(11, 'content_md11', 'Đầu bếp chúng tôi có tay nghề xuất sắc , được tuyển chọn kĩ lưỡng,<br>nhằm phục vụ tối nhất cho khách hàng .'),
(12, 'content1_module12', 'Sau đây là một số món ăn  có công thức đặc biệt,đẹp ,ngon ,giầu chất dinh dương dành cho mọi lứa tuổi .chúc quý khách  có một bữa ăn ngon miệng .'),
(13, 'content_ngaythang_md12', 'Ngày 9 tháng 5 năm 2017'),
(14, 'content2_md12', 'Với những ai đã có kinh nghiệm du lịch Vũng Tàu, hầu như đều có rất nhiều trải nghiệm đáng nhớ về việc khám phá thế giới ẩm thực, đạc biệt là món ăn trên, nay chúng tôi đã phục vụ nó ngay tai đây.'),
(15, 'content3_md12', 'Tiết canh tôm hùm Vũng Tàu xưa nay khá nổi tiếng và có một số địa điểm ăn uống ở Vũng Tàu . Nay cũng được giới thiệu với các bạn.'),
(16, 'content4_md12', 'Loài trùng biển này được các nhà khoa học cho biết chứa tới 17 nguyên tố vi lượng, tám loại axít amin không thể thay thế ..'),
(17, 'conten1_md5', 'Món ăn tại đây khá ngon hợp với tôi.'),
(18, 'conten2_md5', 'Món ăn ở đây rất mới lạ , ngon và hấp dẫn'),
(19, 'conten3_md5', 'Thái dộ nhân viên khá tốt , tôi hài lòng'),
(20, 'content_md14', 'Với nhiều món ăn từ hải sản hấp dẫn, chúng tôi hi vọng quý khách sẽ có sự lựa chọn tốt nhất cho bản thân mình .'),
(21, 'content_md8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto <br>doeiusmod tempor incidition ulla mco laboris nisi ut aliquip ex ea commo <br>condorico consectetur adipiscing elitut aliquip.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_name`, `footer_content`) VALUES
(1, 'linkhttp_1', 'http://nhahangthanglong.com/hoptac'),
(2, 'linkhttp_2', 'http://nhahangthanglong.com/chamsockhanhhang'),
(3, 'link.com', 'http://nhahangthanglong.com'),
(4, 'phone', '+387648592568'),
(5, 'title_1', 'TWITTER FEED'),
(6, 'title_2', 'INSTAGRAM FEED'),
(7, 'tag_1', '#Antoan'),
(8, 'tag_2', '#Tincay #Thomngon'),
(9, 'content_1', 'Bạn muốn hợp tác với chúng tôi , hãy liên hệ :'),
(10, 'content_2', 'Chúng tôi luôn luôn lắng nghe khách hàng của mình, nếu bạn muốn góp ý hay thắc mắc, bạn liên hệ theo link :'),
(11, 'content_3', 'Nhà hàng chúng tôi rất hân hạnh được<br>làm việc với các bạn.'),
(12, 'content_end', '2016. All Rights Reserved'),
(13, 'address', '55/Trần Văn Hớn/Quận 3');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_data` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_name`, `image_data`) VALUES
(1, 'image1_md3', 'image1_md3.jpg'),
(2, 'image2_md3', 'image2_md3.jpg'),
(3, 'image_md4', 'image_md4.jpg'),
(4, 'image_md14', 'image_md14.jpg'),
(5, 'image1_md7', 'image1_md7.jpg'),
(6, 'image2_md7.', 'image2_md7.png'),
(7, 'image3_md7.', 'image3_md7.jpg'),
(8, 'image4_md7.', 'image4_md7.jpg'),
(9, 'image_md9', 'image_md9.jpg'),
(10, 'image_md11', 'image_md11.jpg'),
(11, 'image1_md12', 'image1_md12.jpg'),
(12, 'image2_md12', 'image2_md12.jpg'),
(13, 'image3_md12', 'image3_md12.jpg'),
(14, 'image-md18', 'image_md18.jpg'),
(15, 'image1_md19', 'image1_md19.jpg'),
(16, 'image2_md19', 'image2_md19.jpg'),
(17, 'image3_md19', 'image3_md19.jpg'),
(18, 'image4_md19', 'image4_md19.jpg'),
(19, 'image5_md19', 'image5_md19.jpg'),
(20, 'image6_md19', 'image6_md19.jpg'),
(21, 'image7_md19', 'image7_md19.jpg'),
(22, 'image8_md19', 'image8_md19.jpg'),
(23, 'image9_md19', 'image9_md19.jpg'),
(27, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_noidung`) VALUES
(1, '1', 'TRANG CHỦ'),
(2, '2', 'TRANG'),
(3, '3', 'CÁC YẾU TỐ'),
(4, '4', 'DANH MỤC'),
(5, '5', 'BLOG'),
(6, '6', 'CỬA TIỆM\r\n'),
(7, '1.1', 'THÔNG TIN'),
(8, '1.2', 'BLOG-TRANG CHỦ'),
(9, '2.1', 'DỊCH VỤ'),
(10, '2.2', 'TRANG LIÊN HỆ'),
(11, '3.1', 'CỔ ĐIỂN'),
(12, '3.2', 'BIỂU ĐỒ'),
(13, '4.1', 'TIÊU CHUẨN'),
(14, '4.2', 'BỘ SƯU TẬP'),
(15, '5.1', 'BLOG ĐƠN'),
(16, '5.2', 'TIÊU CHUẨN'),
(17, '6.1', 'MENU MÓN ĂN'),
(18, '6.2', 'CHI NHÁNH');

-- --------------------------------------------------------

--
-- Table structure for table `pabulum`
--

DROP TABLE IF EXISTS `pabulum`;
CREATE TABLE IF NOT EXISTS `pabulum` (
  `pabulum_id` int(11) NOT NULL,
  `pabulum_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pabulum_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pabulum_introduce` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pabulum_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pabulum_tags` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pabulum_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pabulum_reviews` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`pabulum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pabulum`
--

INSERT INTO `pabulum` (`pabulum_id`, `pabulum_name`, `pabulum_price`, `pabulum_introduce`, `pabulum_category`, `pabulum_tags`, `pabulum_description`, `pabulum_reviews`) VALUES
(1, 'Tôm rim chua ngọt ', '120.000 đ', 'Món ăn ngon miệng,kích thích vị giác , thích hợp mớ đầu bữa ăn.', 'Food', 'Ăn trưa', 'Món ăn bổ dưỡng kết hợp vị chua ngọt ,giàu dinh dưỡng,món ăn thích hợp với nhiều đối tượng.', 'Món ăn ngon, hợp khẩu vị.'),
(2, 'Tôm hấp tỏi', '130.000 đ', 'Món ăn hấp dẫn từ tôm sú, với cách chế biến đặc biệt, mang đến trải nghiệm rất riêng.', 'Food', 'Ăn trưa,tối', 'Món ăn giàu canxi,mang đậm vị truyền thống.', 'Món ăn khá ngon.'),
(3, 'Mực om xì dầu    ', '120.000 đ', 'Món ăn ngon miệng,kích thích vị giác , thích hợp mớ đầu bữa ăn.', 'Food', 'Ăn trưa', 'Món ăn mới lạ, đem đến cảm giác ngon miệng khi ăn.', 'Món ăn mói lạ,hấp dẫn.'),
(4, 'Mực hấp bia', '140.000 đ', 'Món ăn được nấu chung với bia, ngon và sảng khoái hơn', 'Food', 'Ăn trưa', 'Mực dược hấp chung với bia, cảm giác ngon miệng, thích hợp cho đấng mày râu.', 'Món ăn thích hợp khi ăn với nhiều người.'),
(5, 'Ốc mỡ sốt me                 ', '150.000 đ', 'Cảm giác chua, béo ngậy đặc trưng.', 'Food', 'Ăn trưa', 'Món ăn hấp dẫn, kết hợp vị chua của me và béo của ốc.', 'Món ăn vừa miệng.'),
(6, 'Ngao nhồi thịt', '130.000 đ', 'Ngao là món ăn bổ dưỡng , mang lại hơi hướng của biển đặc trưng.', 'Food', 'Ăn trưa', 'Ngao kết hợp với thịt là một sự kết hợp hài hòa, đem lại cảm giác ngon miệng .', 'Ngao ngon, thơm.'),
(7, 'Bánh canh ghẹ   ', '100.000 đ', 'bánh canh ghệ là một món ăn rất bổ dưỡng và giàu canxi. ', 'Food', 'Ăn trưa', 'Ăn bánh canh ghệ rất ngon, nước của bánh canh rất ngọt,có hương thơm rất đặc biệt, ghệ ăn kết hợp với bột tập ăn thì khỏi chê.', 'Bánh canh đúng vị.'),
(8, 'Cua sốt me                  ', '220.000 đ', 'nhìn màu của cua khi sốt me rất đẹp có sự hấp dấn từ cái nhìn đầu tiên.', 'Food', 'Ăn trưa', 'Món măn mang vị chua chua ngọt ngọt,có hương thơm rất đặc biệt', 'Ăn thây đổi cũng được.'),
(9, 'Bạch tuột tẩm bột chiên', '120.000 đ', 'màu vang khi chiên nhìn trông nhất đẹp và đầy sự hấn dẫn khi ăn', 'Food', 'Ăn trưa', 'Món ăn có hương thơm từ các vị có sẵn trong bột, khi ăn bột chiên rất ròn và bạch tuột an rất giòn.', '');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `slideshow_id` int(11) NOT NULL,
  `slideshow_name` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slideshow_content` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`slideshow_id`, `slideshow_name`, `slideshow_content`) VALUES
(1, 'title1_page1', 'TƯƠI VÀ THƠM NGON'),
(2, 'title2_page1', 'HẤP DẪN'),
(3, 'content_page1', 'Với nguyên liêu tươi và thơm ngon, chúng tôi tin sẽ mang đến cho các bạn nhiều bữa ăn <br> hấp dẫn nhất có thể .'),
(4, 'title1_page2', 'ĐỘC ĐÁO VÀ KHÁC BIỆT'),
(5, 'title2_page2', 'TIÊU CHÍ'),
(6, 'content_page2', 'Với mong muốn luôn làm mới mình, chúng tôi luôn đưa ra những món ăn ngon và bổ dưỡng, khác lạ, đem lại sự tươi mới trong ẩm thực.'),
(7, 'title1_page3', 'LẮNG NGHE VÀ THẤU HIỂU'),
(8, 'title2_page3', 'KHÁCH HÀNG'),
(9, 'content_page3', 'Đối với chúng tôi, khách hàng là thượng đế, là kim chỉ nam kinh doanh của chúng tôi.'),
(10, 'image_1', 'slideshow1.jpg'),
(11, 'image_2', 'slideshow2.jpg'),
(12, 'image_3', 'slideshow3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

DROP TABLE IF EXISTS `title`;
CREATE TABLE IF NOT EXISTS `title` (
  `title_id` int(11) NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_id`, `title_name`, `title_content`) VALUES
(1, 'title_1', 'TƯƠI VÀ NGON'),
(2, 'title_2', 'CÂU CHUYỆN CỦA CHÚNG TÔI'),
(3, 'title_3', 'THÀNH PHẦN'),
(4, 'title_4', 'CÁC MÓN HẢI SẢN NGON'),
(5, 'title_5', 'MENU CỦA CHÚNG TÔI'),
(6, 'title_6', 'Sau đây là danh sách một số món hải sản tươi sống, các bạn vui long xem tên món ăn và giá ở phía bên dưới. cám ơn quý khách đã tham quan trang web của chúng tôi. Chúc qúy khách ăn ngon miệng và gặp một ngày may mắn.'),
(7, 'title_1_md7', 'Mực một nắng chiên nước mắm'),
(8, 'title_2_md7', 'Cá kìm ninh thuận hấp rượu'),
(9, 'title_3_md7', 'Mực 1 nắng sốt me'),
(10, 'title_4_md7', 'Cá bớp nấu lá lốt'),
(11, 'title_md11', 'Đầu bếp của <br> chúng tôi'),
(12, 'title_md12', 'CÔNG THỨC ĐẶC BIỆT'),
(13, 'title_1_md12', 'Cháo hàu long sơn'),
(14, 'title_2_md12', 'Tiết canh tôm hùm'),
(15, 'title_3_md12', 'Sá sùng'),
(16, 'title_md14', 'NHÀ HÀNG VỚI NHIỀU MÓN ĂN\r\n'),
(17, 'title_md16_md17', 'Danh mục sán phẩm'),
(18, 'title_md17', 'THẺ SẢN PHẨM'),
(19, 'title1_md18', 'CỬA HÀNG'),
(20, 'title2_md18', 'NHỮNG MÓN ĂN GỢI Ý'),
(21, 'title1_md19', 'MÔ TẢ'),
(22, 'title2_md19', 'NHẬN XÉT'),
(23, 'title_md8', 'RESERVATIONS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
