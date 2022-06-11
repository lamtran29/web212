-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 01:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web212`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Chăm sóc da'),
(2, 'Chăm sóc cơ thể'),
(3, 'Chăm sóc tóc'),
(4, 'Chăm sóc môi'),
(5, '55555555');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`) VALUES
(101, 'PHAN NGỌC YẾN NHI'),
(102, 'NGUYỄN TRẦN MINH HUỆ '),
(103, 'LÊ HOÀNG NAM'),
(104, 'LÊ THỊ TẾT'),
(105, 'LÊ THỊ NGỌC THANH'),
(106, 'NGUYỄN THỊ THÚY LOAN'),
(107, 'NGUYỄN THỊ KIM HOÀNG'),
(108, 'NGUYỄN THỊ KIM YẾN'),
(109, 'HUỲNH VĂN ẢNH'),
(110, 'NGUYỄN TẤN DƯƠNG'),
(111, 'LÊ VẠN PHƯỚC'),
(112, 'NGUYỄN THANH TÀI'),
(113, 'LÊ NGỌC LỜI'),
(114, 'LÊ NGUYỄN HÙNG PHONG'),
(115, 'NGUYỄN THANH YẾN VY'),
(116, 'HUỲNH VĂN CHÍNH'),
(117, 'PHẠM MỸ XƯƠNG'),
(118, 'VĂN CÔNG ĐỂ'),
(119, 'HUỲNH THỊ THANH GIẶP'),
(120, 'HUỲNH CÔNG LIÊM'),
(121, 'ĐĂNG NGỌC THANH TÂM'),
(122, 'CAO THỊ NGUYỆT'),
(123, 'PHẠM THỊ ÁNH LOAN'),
(124, 'ĐẶNG LỆ HÀ'),
(125, 'GIANG HÙNG ĐẠT'),
(126, 'PHAN THỊ HỒNG PHƯỢNG'),
(127, 'NGUYỄN HOÀNG GIANG'),
(128, 'ĐẶNG QUỐC TOÀN'),
(129, ' HỒ THỊ CẢNH'),
(130, 'TRƯƠNG THỊ AN'),
(131, 'ĐỖ THỊ THÚY KIỀU'),
(132, 'NGUYỄN THANH QUỐC HƯNG'),
(133, 'HUỲNH THỊ ÚT'),
(134, 'NGUYỄN HOÀ̀NG KHÁNH DUY'),
(135, 'NGUYỄN THỊ BẢY'),
(136, 'HUỲNH NGỌC HƯNG'),
(137, 'TRƯƠNG HOÀNG THÁI'),
(138, 'NGUYỄN THỊ BÍCH DU'),
(139, 'LÊ VÕ TUẤN AN'),
(140, 'PHẠM VĂN HỌC'),
(141, 'VÕ THỊ PHƯƠNG NAM'),
(142, 'LÊ NGỌ̣C THƯƠNG'),
(143, 'HUỲNH TẤN KHƯƠNG'),
(144, 'VÕ THỊ HOÀNG'),
(145, 'NGUYỄN VÕ HOÀNG PHÚC'),
(146, 'NGUYỄN THỊ THANH'),
(147, 'NGUYỄN THỊ TÁM'),
(148, 'NGUYỄN VĂM MƯỜI'),
(149, 'VÕ NGUYỄN BẢO NGỌC'),
(150, 'VÕ VĂN TRƯỜNG');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `intro` varchar(1000) DEFAULT NULL,
  `huongdansudung` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `quantity`, `price`, `avatar`, `category_id`, `intro`, `huongdansudung`) VALUES
(1111, 'DUNG DỊCH CHẤM MỤN BÍ ĐAO 5ml', 10, 95000, '/products/1111.png', 1, 'Dung dịch chấm mụn từ bí đao kết hợp với tinh chất rau má, tràm trà và 2% axit salicylic giúp loại bỏ mụn trứng cá, giảm mụn sưng viêm nhanh chóng, làm mờ vết thâm, vết đỏ trên da và ngăn ngừa mụn trở lại.', 'Làm sạch da. Chấm một lớp mỏng dung dịch lên những điểm mụn từ 1-3 lần mỗi ngày. Sử dụng kết hợp với tinh chất bí đao để đạt hiệu quả tốt nhất.'),
(1121, 'GEL BÍ ĐAO RỬA MẶT 140ml', 10, 175000, '/products/1121.png', 1, 'Sản phẩm chứa các thành phần tự nhiên gồm bí đao, rau má, tràm trà, bổ sung thêm Vitamin B3, B5, Betaine. Gel rửa mặt bí đao có pH 5.5 giúp làm sạch sâu bụi bẩn và dầu thừa, làm giảm việc hình thành mụn ẩn mà vẫn giữ được độ ẩm mịn tự nhiên và không gây khô da sau khi sử dụng.', 'Lấy một lượng vừa đủ mát-xa nhẹ nhàng trên da ướt. Rửa sạch lại với nước. Dùng buổi sáng và tối. '),
(1122, 'GEL BÍ ĐAO RỬA MẶT 310ml', 10, 295000, '/products/1122.png', 1, 'Sản phẩm chứa các thành phần tự nhiên gồm bí đao, rau má, tràm trà, bổ sung thêm Vitamin B3, B5, Betaine. Gel rửa mặt bí đao có pH 5.5 giúp làm sạch sâu bụi bẩn và dầu thừa, làm giảm việc hình thành mụn ẩn mà vẫn giữ được độ ẩm mịn tự nhiên và không gây khô da sau khi sử dụng.', 'Lấy một lượng vừa đủ mát-xa nhẹ nhàng trên da ướt. Rửa sạch lại với nước. Dùng buổi sáng và tối. '),
(1131, 'MẶT NẠ BÍ ĐAO WINTER MELON 30ml', 10, 115000, '/products/1131.png', 1, 'Sản phẩm gồm thành phần chính là bí đao thanh mát, bổ sung thêm rau má và tinh dầu tràm trà giúp giảm nhờn, làm thông thoáng lỗ chân lông, cải thiện nhanh tình trạng mụn, làm dịu vết đỏ, mang lại làn da sạch mụn và mịn màng.', 'Thoa đều một lượng vừa đủ trên da sạch, tránh vùng mắt, để 20 phút rồi rửa sạch với nước. Dùng 4-5 lần một tuần để đạt hiệu quả tốt nhất.'),
(1132, 'MẶT NẠ BÍ ĐAO WINTER MELON 100ml', 10, 295000, '/products/1132.png', 1, 'Sản phẩm gồm thành phần chính là bí đao thanh mát, bổ sung thêm rau má và tinh dầu tràm trà giúp giảm nhờn, làm thông thoáng lỗ chân lông, cải thiện nhanh tình trạng mụn, làm dịu vết đỏ, mang lại làn da sạch mụn và mịn màng.', 'Thoa đều một lượng vừa đủ trên da sạch, tránh vùng mắt, để 20 phút rồi rửa sạch với nước. Dùng 4-5 lần một tuần để đạt hiệu quả tốt nhất.'),
(1141, 'NƯỚC BÍ ĐAO CÂN BẰNG DA 140ml', 10, 175000, '/products/1141.png', 1, 'Sản phẩm chứa các thành phần tự nhiên gồm bí đao, chiết xuất rau má và tinh dầu tràm trà. Nước bí đao với công thức không chứa cồn có tác dụng cân bằng pH, giảm dầu nhờn, làm sạch lỗ chân lông, cải thiện rõ rệt tình trạng mụn ẩn. Ngoài ra nước bí đao còn được bổ sung thêm Vitamin B3, HA và chiết xuất cam thảo cung cấp độ ẩm giúp da luôn mịn màng và giảm thiểu các vết đỏ trên da.', 'Sau khi rửa mặt, lấy một lượng nước cân bằng vào lòng bàn tay, thoa đều lên da và vỗ nhẹ nhàng để sản phẩm thẩm thấu vào da. Có thể dùng kèm bông tẩy trang, lau nhẹ trên da theo hướng từ trong ra ngoài và từ dưới lên trên. Dùng buổi sáng và tối. Tránh tiếp xúc với mắt.'),
(1142, 'NƯỚC BÍ ĐAO CÂN BẰNG DA 310ml', 10, 295000, '/products/1142.png', 1, 'Sản phẩm chứa các thành phần tự nhiên gồm bí đao, chiết xuất rau má và tinh dầu tràm trà. Nước bí đao với công thức không chứa cồn có tác dụng cân bằng pH, giảm dầu nhờn, làm sạch lỗ chân lông, cải thiện rõ rệt tình trạng mụn ẩn. Ngoài ra nước bí đao còn được bổ sung thêm Vitamin B3, HA và chiết xuất cam thảo cung cấp độ ẩm giúp da luôn mịn màng và giảm thiểu các vết đỏ trên da.', 'Sau khi rửa mặt, lấy một lượng nước cân bằng vào lòng bàn tay, thoa đều lên da và vỗ nhẹ nhàng để sản phẩm thẩm thấu vào da. Có thể dùng kèm bông tẩy trang, lau nhẹ trên da theo hướng từ trong ra ngoài và từ dưới lên trên. Dùng buổi sáng và tối. Tránh tiếp xúc với mắt.'),
(1151, 'NƯỚC TẨY TRANG BÍ ĐAO 140ml', 10, 125000, '/products/1151.png', 1, 'Làn da dầu và mụn rất nhạy cảm nên cần được thiết kế một loại nước tẩy trang phù hợp. Với công nghệ Micellar, nước tẩy trang bí đao giúp làm sạch hiệu quả lớp trang điểm, bụi bẩn và dầu thừa, mang lại làn da sạch hoàn toàn và dịu nhẹ.', 'Thấm đều sản phẩm lên bông tẩy trang, nhẹ nhàng lau khắp mặt để làm sạch lớp trang điểm và bụi bẩn. Dịu nhẹ cho vùng môi và mắt.'),
(1152, 'NƯỚC TẨY TRANG BÍ ĐAO 500ml', 10, 275000, '/products/1152.png', 1, 'Làn da dầu và mụn rất nhạy cảm nên cần được thiết kế một loại nước tẩy trang phù hợp. Với công nghệ Micellar, nước tẩy trang bí đao giúp làm sạch hiệu quả lớp trang điểm, bụi bẩn và dầu thừa, mang lại làn da sạch hoàn toàn và dịu nhẹ.', 'Thấm đều sản phẩm lên bông tẩy trang, nhẹ nhàng lau khắp mặt để làm sạch lớp trang điểm và bụi bẩn. Dịu nhẹ cho vùng môi và mắt.'),
(1161, 'THẠCH BÍ ĐAO WINTER MELON 30ml', 10, 195000, '/products/1161.png', 1, 'Với sự kết hợp giữa chiết xuất bí đao thanh mát, 5α-AVOCUTA® được chưng cất phân tử từ dầu quả bơ và TECA™ trích ly từ rau má, thạch dưỡng bí đao với kết cấu mỏng nhẹ tan nhanh vào da giúp mang lại độ ẩm cân bằng, giảm lượng dầu thừa và cải thiện tình trạng mụn', 'Sản phẩm sử dụng sau bước tinh chất. Bạn thoa đều một lượng vừa đủ lên da mặt. Dùng 2 lần mỗi ngày, sáng và tối để đạt hiệu quả tốt nhất.'),
(1162, 'THẠCH BÍ ĐAO WINTER MELON 100ml', 10, 385000, '/products/1162.png', 1, 'Với sự kết hợp giữa chiết xuất bí đao thanh mát, 5α-AVOCUTA® được chưng cất phân tử từ dầu quả bơ và TECA™ trích ly từ rau má, thạch dưỡng bí đao với kết cấu mỏng nhẹ tan nhanh vào da giúp mang lại độ ẩm cân bằng, giảm lượng dầu thừa và cải thiện tình trạng mụn', 'Sản phẩm sử dụng sau bước tinh chất. Bạn thoa đều một lượng vừa đủ lên da mặt. Dùng 2 lần mỗi ngày, sáng và tối để đạt hiệu quả tốt nhất.'),
(1171, 'TINH CHẤT BÍ ĐAO 70ML', 10, 265000, '/products/1171.png', 1, 'Với các thành phần chủ đạo là bí đao thanh mát, bổ sung thêm 7% Niacinamide (Vitamin B3), TECA từ rau má và tinh dầu tràm trà, tinh chất bí đao sẽ phục hồi mạnh mẽ tình trạng mụn, kiểm soát bã nhờn, làm thông thoáng lỗ chân lông giúp giảm tình trạng mụn ẩn, cải thiện bề mặt da và làm mờ vết thâm.', 'Lấy vài giọt tinh chất vào lòng bàn tay, xoa đều và mát-xa lên da mặt sạch, tránh vùng mắt. Sử dụng sáng và tối.'),
(2111, 'GEL TẮM BÍ ĐAO WINTER MELON 310ml', 10, 245000, '/products/2111.png', 2, 'Giúp da sạch mịn màng và giảm mụn lưng. Tinh dầu sả chanh giảm mùi cơ thể, tạo cảm giác sảng khoái, thư giãn. Sản phẩm dạng gel trong tạo bọt nhẹ nhàng và không gây khô da sau khi sử dụng.', 'Lấy sản phẩm vào lòng bàn tay hoặc miếng bọt biển, mát-xa nhẹ nhàng trên da ướt để tạo bọt. Tắm sạch lại với nước.'),
(2211, 'BƠ DƯỠNG THỂ CÀ PHÊ ĐẮK LẮK 200ml', 10, 195000, '/products/2211.png', 2, 'Dầu cà phê Đắk Lắk rất giàu cafein, kết hợp với dầu mù u và bơ cacao, tất cả hòa quyện nên một thể bơ sánh mịn giúp dưỡng ẩm, làm mềm và chống oxi hóa, mang lại làn da cơ thể luôn mượt mà, tươi mới rạng rỡ.', 'Thoa đều lên cơ thể, mát-xa nhẹ nhàng theo chuyển động tròn đến khi sản phẩm thẩm thấu.'),
(2221, 'DAK LAK COFFEE BODY POLISH 200ml', 10, 115000, '/products/2221.png', 2, 'Sản phẩm là sự kết hợp giữa hạt cà phê Đắk Lắk nguyên chất xay nhuyễn, hòa quyện cùng bơ cacao Tiền Giang giúp loại bỏ tế bào chết trên cơ thể hiệu quả, làm đều màu da, mang lại năng lượng, giúp da trở nên mềm mại và rạng rỡ.', 'Thoa một lượng sản phẩm lên da ướt. Mát-xa nhẹ nhàng từ cổ đến chân, sau đó tắm sạch lại với nước. Dùng 2-3 lần một tuần để đạt kết quả tốt nhất.'),
(2311, 'GEL TẮM KHUYNH DIỆP & BẠC HÀ 500ml', 10, 165000, '/products/2311.png', 2, 'Vận dụng liệu pháp mùi hương từ tinh dầu khuynh diệp, bạc hà, kết hợp với vitamin B5 và hoạt chất dưỡng ẩm Betaine, Gel tắm sẽ làm sạch nhẹ nhàng và giữ cho làn da cơ thể luôn mềm mại, đồng thời giúp thư giãn, giải tỏa căng thẳng và mang lại một tinh thần thông suốt.', 'Lấy sản phẩm vào lòng bàn tay hoặc miếng bọt biển. Mát-xa nhẹ nhàng trên da ướt để tạo bọt. Tắm sạch lại với nước.'),
(2321, 'NƯỚC RỬA TAY KHÔ 140ml', 10, 75000, '/products/2321.png', 2, 'Nước rửa tay dạng xịt tiện lợi, sạch khuẩn 99,9%, không gây khô da.', 'Xịt dung dịch vào lòng bàn tay, giữa các ngón tay rồi xoa đều đến khi khô. Không cần rửa lại với nước. Dùng khi cần để làm sạch khuẩn nhanh, sau khi tiếp xúc với động vật, sau khi đi vệ sinh. Có thể xịt lên vật dụng cá nhân để khử trùng.'),
(2331, 'SỮA DƯỠNG THỂ  140ml', 10, 95000, '/products/2331.png', 2, 'Với cấu trúc mềm mịn, thẩm thấu nhanh và không nhờn rít, sữa dưỡng thể giúp nuôi dưỡng, cấp ẩm, đồng thời giúp thư giãn và mang lại làn da tươi mới.', 'Thoa sản phẩm lên cơ thể và mát - xa nhẹ nhàng cho đến khi dưỡng chất thẩm thấu'),
(2341, 'XÀ PHÒNG RỬA TAY 45g', 10, 36000, '/products/2341.png', 2, 'Với dầu dừa, tinh dầu khuynh diệp, bạc hà và vitamin E, xà phòng rửa tay tạo bọt nhẹ nhàng giúp làm sạch vi khuẩn, bảo vệ đôi tay luôn sạch sẽ, thơm tho.', ' Dùng để rửa tay'),
(3111, 'SA-CHI SERUM PHỤC HỒI TÓC 70ml', 10, 125000, '/products/3111.png', 3, 'Với dầu sa-chi, vitamin E, tinh dầu Hương Nhu và Phospholipid, serum có tác dụng phục hồi tóc hư tổn, bảo vệ mái tóc khỏi nhiệt và tia UV. Tóc luôn trong trạng thái chắc khỏe và tràn đầy sức sống.', 'Lấy một lượng vừa đủ xoa đều vào lòng bàn tay, thoa từ chân tóc đến ngọn tóc và mát-xa nhẹ nhàng. Sản phẩm dùng trên tóc ẩm hoặc tóc khô đều được.'),
(3211, 'NƯỚC DƯỠNG TÓC TINH DẦU BƯỞI 140ml', 10, 145000, '/products/3211.png', 3, 'Phiên bản nâng cấp tăng gấp đôi lượng dầu dưỡng. Với tinh dầu bưởi nguyên chất từ vỏ bưởi, kết hợp với hoạt chất Xylishine và Vitamin B5, nước dưỡng tóc dầu bưởi giúp tóc giảm gãy rụng và khô xơ, cung cấp dưỡng chất giúp tóc luôn suôn mượt, mềm mại.', 'Lắc đều trước khi sử dụng, xịt sản phẩm lên chân tóc và mái tóc, tránh vùng mắt. Mát-xa nhẹ nhàng để dưỡng chất thấm sâu. Dùng mỗi ngày để đạt hiệu quả tốt nhất.'),
(3221, 'DẦU GỘI BƯỞI POMELO 310ml', 10, 225000, '/products/3221.png', 3, 'Từ tinh dầu vỏ bưởi Việt Nam truyền thống kết hợp với vitamin B5, hoạt chất dưỡng ẩm Xylishine™ cùng công thức dịu nhẹ không chứa sulfate, dầu gội bưởi giúp làm sạch tóc và giảm gãy rụng, mang lại mái tóc đen dày, chắc khoẻ và mượt mà', 'Thoa sản phẩm lên tóc ướt và tạo bọt, mát-xa nhẹ nhàng từ gốc đến ngọn, sau đó gội sạch. Sử dụng hằng ngày để có kết quả tốt nhất. Tránh tiếp xúc với mắt.'),
(3231, 'DẦU XẢ BƯỞI POMELO 310ml', 10, 165000, '/products/3231.png', 3, 'Sự kết hợp hài hoà giữa tinh dầu bưởi Việt Nam truyền thống, vitamin B5 và hoạt chất dưỡng ẩm Xylishine™ đã tạo nên dầu xả bưởi giàu dưỡng chất giúp giảm gãy rụng và làm mềm từng sợi tóc, mang lại mái tóc mượt mà và nhẹ nhàng sau khi xả', 'Thoa sản phẩm lên tóc ướt, mát-xa nhẹ nhàng lên thân tóc, sau đó xả sạch lại với nước. Sử dụng hằng ngày để có kết quả tốt nhất. Tránh tiếp xúc với mắt.'),
(4111, 'SON DƯỠNG DẦU DỪA BẾN TRE 5g', 10, 32000, '/products/4111.png', 4, 'Giúp đôi môi mềm mượt, căng mọng, chống khô môi, nứt nẻ do thời tiết.', 'Thoa sản phẩm trực tiếp lên môi, có thể dùng như một lớp lót trước khi thoa son màu để tránh gây khô môi. Dùng mỗi ngày để đạt kết quả tốt nhất.'),
(4121, 'CÀ PHÊ ĐẮK LẮK LÀM SẠCH DA CHẾT MÔI 5g', 0, 75000, '/products/4121.png', 4, 'Những hạt cà phê li ti được rang xay bằng tay hòa quyện vào dầu mắc-ca và bơ hạt mỡ, sẽ nhẹ nhàng làm bong những tế bào da chết ở môi, đem lại làn môi mềm và mịn màng.', 'Làm ẩm môi. Thoa sản phẩm trực tiếp lên môi bằng chuyển động trượt qua lại trong 30 giây, lớp tế bào chết sẽ nhẹ nhàng bong ra. Lau đi bằng khăn giấy hoặc khăn ấm. Sử dụng 3-4 lần một tuần để đạt kết quả tốt nhất.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('customer','admin') DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone`, `password`, `role`) VALUES
(2147483647, 'ntn', 'thuyngocnguyen01@gmail.com', '0937785461', '123456', 'customer');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `after_insert_user` AFTER INSERT ON `user` FOR EACH ROW IF new.role ="customer" 
THEN 
  INSERT INTO customer VALUES(new.user_id, new.user_name); 
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `_comment`
--

CREATE TABLE `_comment` (
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cmt_time` datetime DEFAULT NULL,
  `cmt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_comment`
--

INSERT INTO `_comment` (`product_id`, `customer_id`, `cmt_time`, `cmt`) VALUES
(1111, 101, '2020-07-12 04:57:30', 'mọi người nên dùng thử, tôi thấy rất hiệu quả rẻ mà chất lượng ok lắm'),
(1111, 126, '2020-06-22 08:51:13', 'người việt ủng hộ hàng việt'),
(1121, 102, '2019-02-26 16:37:32', 'sản phẩm có mùi thơm nhẹ nhàng dễ chịu'),
(1121, 127, '2021-02-15 03:20:30', 'bao bì đẹp lắm'),
(1122, 103, '2021-08-08 23:50:08', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(1122, 128, '2020-01-17 03:12:41', 'sản phẩm xài khá tốt'),
(1131, 104, '2021-04-23 02:27:38', 'bao bì đẹp lắm'),
(1131, 129, '2021-02-14 05:55:57', 'sản phẩm có mùi thơm nhẹ nhàng dễ chịu'),
(1132, 105, '2019-06-24 20:35:09', 'sản phẩm có mùi thơm nhẹ nhàng dễ chịu'),
(1132, 130, '2020-01-26 13:40:09', 'sản phẩm xài khá tốt'),
(1141, 106, '2019-09-09 05:42:52', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(1141, 131, '2020-07-24 03:08:12', 'tôi thích bao bì của sản phẩm này nhìn xinh lắm'),
(1142, 107, '2021-12-23 23:15:15', 'sản phẩm này lành tính không bị kích ứng'),
(1142, 132, '2021-11-23 08:32:28', 'người việt ủng hộ hàng việt'),
(1151, 108, '2020-02-21 06:56:53', 'tôi thích bao bì của sản phẩm này nhìn xinh lắm'),
(1151, 133, '2020-03-24 06:59:01', 'người việt ủng hộ hàng việt'),
(1152, 109, '2020-07-25 23:36:37', 'người việt ủng hộ hàng việt'),
(1152, 134, '2021-06-03 03:02:16', 'sản phẩm thiên nhiên nên mẹ tôi rất thích'),
(1161, 110, '2021-11-11 03:16:49', 'sản phẩm này lành tính không bị kích ứng'),
(1161, 135, '2021-05-08 06:25:41', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(1162, 111, '2020-07-18 09:49:32', 'bao bì đẹp lắm'),
(1162, 136, '2019-02-14 00:43:01', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(1171, 112, '2019-05-04 21:34:14', 'mọi người nên dùng thử, tôi thấy rất hiệu quả rẻ mà chất lượng ok lắm'),
(1171, 137, '2020-10-15 00:43:48', 'tôi thích bao bì của sản phẩm này nhìn xinh lắm'),
(2111, 113, '2021-09-04 20:28:18', 'sản phẩm xài khá tốt'),
(2111, 138, '2021-07-04 09:31:29', 'sản phẩm có mùi thơm nhẹ nhàng dễ chịu'),
(2211, 114, '2019-12-21 17:14:13', 'tôi thích cách nhãn hàng bảo vệ môi trường bằng cách không dùng seal nilon'),
(2211, 139, '2019-05-03 08:39:14', 'sản phẩm thiên nhiên nên mẹ tôi rất thích'),
(2221, 115, '2021-12-14 04:32:55', 'sản phẩm thiên nhiên nên mẹ tôi rất thích'),
(2221, 140, '2020-11-11 21:43:44', 'người việt ủng hộ hàng việt'),
(2311, 116, '2020-04-04 05:57:24', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(2311, 141, '2019-06-08 13:36:11', 'đóng gói rất chắc chắn'),
(2321, 117, '2021-12-16 15:19:01', 'người việt ủng hộ hàng việt'),
(2321, 142, '2021-06-04 12:19:23', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(2331, 118, '2020-06-04 15:00:22', 'sản phẩm thiên nhiên nên mẹ tôi rất thích'),
(2331, 143, '2021-04-26 19:04:47', 'sản phẩm xài khá tốt'),
(2341, 119, '2019-01-09 11:25:56', 'đóng gói rất chắc chắn'),
(2341, 144, '2020-03-04 23:52:26', 'sản phẩm xài khá tốt'),
(3111, 120, '2021-11-08 02:56:21', 'tôi thích cách nhãn hàng bảo vệ môi trường bằng cách không dùng seal nilon'),
(3111, 145, '2019-12-19 21:08:02', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(3211, 121, '2021-10-26 23:46:51', 'sản phẩm thiên nhiên nên mẹ tôi rất thích'),
(3211, 146, '2020-11-28 03:32:22', 'người việt ủng hộ hàng việt'),
(3221, 122, '2021-05-08 02:35:44', 'bao bì đẹp lắm'),
(3221, 147, '2021-11-20 22:19:24', 'sản phẩm này lành tính không bị kích ứng'),
(3231, 123, '2019-06-20 12:21:30', 'tôi thích cách nhãn hàng bảo vệ môi trường bằng cách không dùng seal nilon'),
(3231, 148, '2020-09-04 15:19:51', 'sản phẩm có mùi thơm nhẹ nhàng dễ chịu'),
(4111, 124, '2019-09-17 06:17:42', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(4111, 149, '2021-03-18 05:21:46', 'sản phẩm có mùi thơm nhẹ nhàng dễ chịu'),
(4121, 125, '2019-03-21 06:35:00', 'sản phẩm thiên nhiên nên mẹ tôi rất thích'),
(4121, 150, '2021-03-06 23:41:34', 'tôi thích bao bì của sản phẩm này nhìn xinh lắm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `_comment`
--
ALTER TABLE `_comment`
  ADD PRIMARY KEY (`product_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderr`
--
ALTER TABLE `orderr`
  ADD CONSTRAINT `orderr_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orderr` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `_comment`
--
ALTER TABLE `_comment`
  ADD CONSTRAINT `_comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_comment_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
