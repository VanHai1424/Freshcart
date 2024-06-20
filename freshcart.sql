-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 03:25 PM
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
-- Cơ sở dữ liệu: `freshcart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `img`) VALUES
(12, 'Fruits', '1.webp'),
(13, 'Vegetables', '2.webp'),
(14, 'Juices', '3.webp'),
(15, 'Tea', '4.webp'),
(16, 'Bread', '5.webp'),
(17, 'Meats', '6.webp'),
(18, 'Coffee', '4.webp'),
(19, 'Noodles', 'mi_tom.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pay_method` tinyint(2) NOT NULL COMMENT '1. Thanh toan khi nhan hang\r\n2. Chuyen khoan',
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1. Dang cho duyet\r\n2. Da xac nhan\r\n3. Dang van chuyen\r\n4. Hoan thanh',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `name`, `tel`, `address`, `pay_method`, `total`, `date`, `status`, `id_user`) VALUES
(32, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 1, 609000, '2023-12-09', 4, 8),
(33, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 1, 309000, '2023-12-09', 4, 8),
(34, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 2, 70000, '2023-12-09', 4, 8),
(35, 'Văn Hải 1', '0912313131', 'Thôn Thụy Khuê', 1, 747000, '2023-12-09', 4, 10),
(38, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 1, 30000, '2023-12-09', 4, 9),
(39, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 1, 45000, '2023-12-09', 4, 9),
(40, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 2, 647000, '2023-12-09', 4, 9),
(42, 'Văn Hải', '+8496933096', 'Thôn Thụy Khuê', 1, 1197000, '2023-12-09', 4, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `quantity`, `price`, `id_product`, `id_order`) VALUES
(16, 4, 600000, 27, 32),
(17, 1, 9000, 28, 32),
(18, 1, 9000, 28, 33),
(19, 2, 300000, 27, 33),
(20, 2, 6000, 21, 34),
(21, 1, 5000, 9, 34),
(22, 1, 23000, 20, 34),
(23, 1, 36000, 19, 34),
(24, 1, 150000, 27, 35),
(25, 3, 597000, 26, 35),
(29, 1, 30000, 14, 38),
(30, 1, 45000, 16, 39),
(34, 4, 600000, 27, 42),
(35, 3, 597000, 26, 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `desc` text NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `quantity`, `desc`, `id_category`) VALUES
(9, 'Ớt Chuông', 'ot_chuong.png', 5000, 12, 'Hình Dáng:\r\n\r\nQuả ớt chuông thường có hình dáng giống như một chiếc chuông với phần đỉnh là mũi nhọn và phần dưới mở ra như miệng chuông.\r\nCó nhiều biến thể hình dáng, từ tròn đến hình thon dài.\r\nMàu Sắc:\r\n\r\nMàu của quả ớt chuông đa dạng, bao gồm đỏ, xanh, vàng, cam, hoặc thậm chí là tím. Mỗi màu sắc có thể đại diện cho mức độ chín khác nhau.\r\nHương Vị:\r\n\r\nỚt chuông không chứa nhiều capsaicin, chất gây cay của ớt, nên hương vị của chúng thường không cay nồng như các loại ớt khác.\r\nThường có hương vị ngọt và hơi giống với hạt giống của loại ớt cay hơn.\r\nSử Dụng:\r\n\r\nỚt chuông thường được sử dụng trong nấu ăn, salad, và các món ăn chế biến.\r\nVới hình dáng và màu sắc đa dạng, chúng cũng thường được sử dụng để trang trí và tạo điểm nhấn trong các bữa ăn.', 13),
(10, 'Nho', 'nho.png', 10000, 50, 'Hình Dáng:\r\n\r\nNhỏ, tròn hoặc oval, phù hợp để ăn trực tiếp hoặc sử dụng trong nấu ăn.\r\nVỏ mỏng, mịn, có thể ăn được.\r\nMàu Sắc:\r\n\r\nMàu sắc thay đổi từ xanh đến đen, tùy thuộc vào loại.\r\nCó những loại nho có màu sắc độc đáo khi chín, như đỏ, vàng, hoặc tím.\r\nHương Vị:\r\n\r\nHương vị ngọt tự nhiên, có đôi khi có chút acid.\r\nMùi thơm tinh tế, mang lại cảm giác mát mẻ khi ăn.\r\nSử Dụng:\r\n\r\nĂn trực tiếp, làm nước ép, sử dụng trong nấu ăn hoặc làm mứt.\r\nThường được sử dụng trong sản xuất rượu vang.', 12),
(11, 'Dưa Chuột', 'dua_chuot.png', 15000, 32, 'Hình Dáng:\r\n\r\nDưa chuột thường có hình dáng dài, tròn hoặc hình ovan, có thể cong hoặc thẳng tùy thuộc vào loại.\r\nBề mặt của dưa chuột có thể mượt hoặc có gai nhỏ.\r\nMàu Sắc:\r\n\r\nMàu của dưa chuột thay đổi từ xanh đậm đến xanh nhạt, tùy thuộc vào loại và mức độ chín.\r\nCó thể có các vẻ màu vạch hay vẻ mờ trên vỏ.\r\nHương Vị:\r\n\r\nDưa chuột thường có hương vị nhẹ, giòn, và mát mẻ.\r\nNước dưa chuột thường có vị ngọt tự nhiên và có khả năng giải khát.\r\nSử Dụng:\r\n\r\nĂn trực tiếp, thường được thêm vào các món salad hoặc ăn kèm.\r\nDưa chuột cũng được sử dụng để làm pickles (cải muối) và thường xuất hiện trong một số món ăn nhẹ và món chua ngọt.\r\n', 12),
(12, 'Dâu Tây', 'dau_tay.png', 40000, 23, 'Hình Dáng:\r\n\r\nDâu tây thường có hình dáng tròn, nhỏ đến trung bình, với một phần trên phẳng và một phần dưới hình nón.\r\nBề mặt của dâu tây thường mịn và có những hạt nhỏ phủ lên vỏ.\r\nMàu Sắc:\r\n\r\nMàu sắc chủ yếu là đỏ tươi, nhưng có thể có các biến thể màu khác như hồng, cam, hay đỏ đậm.\r\nCác mảnh lá thường xanh tươi và có lông mịn.\r\nHương Vị:\r\n\r\nHương vị của dâu tây thường ngọt tự nhiên, có thể có chút chua đặc trưng của loại quả này.\r\nMùi thơm của dâu tây có thể rất phôi pha và quyến rũ.\r\nSử Dụng:\r\n\r\nDâu tây thường được ăn trực tiếp, thường được thêm vào các món tráng miệng, salad, hoặc làm thành nước ép.\r\nCũng thường được sử dụng trong nấu ăn, làm mứt, và làm nguyên liệu trong nhiều sản phẩm thực phẩm.', 12),
(13, 'Kiwi', 'kiwi.png', 25000, 66, 'Hình Dáng:\r\n\r\nQuả kiwi có hình dáng hòn non, hình tròn hoặc hình ovan, với bề mặt nhiều lông mịn như lông vịt.\r\nVỏ của kiwi có thể màu nâu hoặc nâu nhạt, tùy thuộc vào loại và mức độ chín.\r\nMàu Sắc:\r\n\r\nPhần nội dung của kiwi thường màu xanh lá cây hoặc màu vàng, phụ thuộc vào loại.\r\nMột số loại kiwi có thể có các vết màu đỏ hoặc đen ở bên trong.\r\nHương Vị:\r\n\r\nKiwi có hương vị tươi mới, ngọt, và có độ chua nhẹ.\r\nNước của kiwi thường mát mẻ và có thể tạo cảm giác mát lạnh khi ăn.\r\nSử Dụng:\r\n\r\nKiwi thường được ăn trực tiếp bằng cách cắt đôi và spoon hoặc bằng cách bóc vỏ và cắt thành từng lát.\r\nThường được sử dụng trong các món tráng miệng, salad hoặc làm thành nước ép.\r\nCũng là một nguồn vitamin C tốt và chất xơ.', 12),
(14, 'Bánh Mì Thường', 'banh_mi_nhat.png', 30000, 44, 'Hình Dáng:\r\n\r\nBánh mì nhạt thường có vẻ ngoại hình phẳng và không có nhiều đường nổi, kích thước thường đồng đều.\r\nMàu Sắc:\r\n\r\nMàu sắc của bánh mì nhạt có thể là một màu vàng nhạt hoặc trắng, thiếu đi sự hấp dẫn của màu nâu vàng tự nhiên của bánh mì tươi mới.\r\nHương Vị:\r\n\r\nBánh mì nhạt thường thiếu đi hương vị thơm ngon và độ giòn giữa vỏ bánh và miếng bên trong.\r\nTexture (Độ Cao Su):\r\n\r\nVỏ bánh mì có thể trở nên nhạt nhòa và không giữ được độ giòn.\r\nBên trong bánh có thể có cảm giác khô và thiếu độ mềm mại.\r\nSử Dụng:\r\n\r\nBánh mì nhạt thường không thích hợp cho một trải nghiệm ẩm thực tốt, đặc biệt là khi ăn kèm với các loại nhân hoặc chế biến món sandwich.', 16),
(15, 'Bánh Mì Gối', 'banh_mi_goi.png', 35000, 34, 'Hình Dáng:\r\n\r\nBánh mì gối thường có hình dạng hộp hoặc chữ nhật, với vỏ bánh mịn và bề mặt mềm mại.\r\nMàu Sắc:\r\n\r\nMàu sắc của bánh mì gối thường là một màu vàng nhạt hoặc trắng, tùy thuộc vào các nguyên liệu và phương pháp làm bánh.\r\nHương Vị:\r\n\r\nBánh mì gối thường có hương vị nhẹ nhàng, không quá mạnh mẽ, phù hợp để kết hợp với nhiều loại nhân khác nhau.\r\nSử Dụng:\r\n\r\nBánh mì gối thường được sử dụng để làm bánh mì sandwich, với nhiều loại nhân khác nhau như thịt, cá, rau sống, và sốt.\r\nCũng có thể ăn kèm với đồ chảy như súp hoặc được chế biến thành các món ăn nhẹ như bánh mì trứng ốp.', 16),
(16, 'Nước Ép Dâu Tây', 'nuoc_ep_dau.png', 45000, 27, 'Màu Sắc:\r\n\r\nNước ép dâu tây thường có màu đỏ tươi và sáng, phản ánh đặc trưng của dâu tây chín.\r\nHương Vị:\r\n\r\nHương vị của nước ép dâu tây thường rất ngọt và thơm, mang lại cảm giác ngon ngọt và tươi mới.\r\nCó thể có chút chua nhẹ, tùy thuộc vào lượng đường thêm vào hoặc độ chín của dâu tây.\r\nTexture (Độ Cao Su):\r\n\r\nNước ép dâu tây thường có độ mịn màng, không có cặn hoặc hạt lớn, tạo cảm giác mát mẻ khi uống.\r\nSử Dụng:\r\n\r\nNước ép dâu tây thường uống trực tiếp, làm nước giải khát hoặc có thể sử dụng trong việc tạo nước ép pha chế và làm đá lạnh.\r\nCó thể kết hợp với nước soda, nước tonic, hoặc rượu để tạo ra các đồ uống phức tạp và thơm ngon.', 14),
(17, 'Nước Ép Lê', 'nuoc_ep_le.png', 18000, 55, 'Màu Sắc:\r\n\r\nNước ép lê thường có màu trắng đục hoặc màu vàng nhạt, tùy thuộc vào loại lê sử dụng và quá trình chế biến.\r\nHương Vị:\r\n\r\nHương vị của nước ép lê thường ngọt tự nhiên và mát mẻ.\r\nCó thể có chút acid nhẹ, tùy thuộc vào loại lê và độ chín của chúng.\r\nTexture (Độ Cao Su):\r\n\r\nNước ép lê thường có độ mịn, không có cặn lớn, và tạo cảm giác mát mẻ và sảng khoái khi uống.\r\nSử Dụng:\r\n\r\nNước ép lê thường uống trực tiếp, làm nước giải khát, hoặc có thể sử dụng làm nguyên liệu trong các đồ uống phức tạp khác như sinh tố, cocktail hoặc đồ uống pha chế.', 14),
(18, 'Nước Ép Táo', 'nuoc_ep_tao.png', 22000, 65, 'Màu Sắc:\r\n\r\nNước ép táo thường có màu vàng hoặc màu vàng nhạt, phản ánh màu sắc tự nhiên của táo.\r\nHương Vị:\r\n\r\nHương vị của nước ép táo thường ngọt, tươi mới và thơm ngon.\r\nCó thể có chút chua nhẹ, tùy thuộc vào loại táo sử dụng.\r\nTexture (Độ Cao Su):\r\n\r\nNước ép táo thường có độ mịn, không có cặn lớn, tạo cảm giác mát mẻ và nhẹ nhàng khi uống.\r\nSử Dụng:\r\n\r\nNước ép táo thường uống trực tiếp, làm nước giải khát hoặc sử dụng trong việc tạo nước ép pha chế.\r\nCó thể được kết hợp với nước soda, nước tonic hoặc rượu để tạo ra các đồ uống sáng tạo.', 14),
(19, 'Bông cải trắng', 'bong_cai_trang.png', 36000, 55, 'Hình Dáng:\r\n\r\nBông cải trắng thường có hình dạng giống như một đốt hoa lớn, được bao phủ bởi các lá lá nhỏ và mịn.\r\nMàu Sắc:\r\n\r\nMàu sắc chủ yếu của bông cải trắng là trắng hoặc trắng nhạt, tạo ra hình ảnh nhẹ nhàng và tinh tế.\r\nHương Vị:\r\n\r\nBông cải trắng thường có hương vị đặc trưng của các loại rau củ xanh, với độ tươi mới và một chút độ giòn.\r\nTexture (Độ Cao Su):\r\n\r\nTexture của bông cải trắng thường giữ nguyên độ giòn và mịn màng, đặc biệt là sau khi được nấu chín mềm.\r\nSử Dụng:\r\n\r\nBông cải trắng thường được chế biến trong nhiều món ăn như xào, hấp, luộc, nướng, hoặc sử dụng trong các món salad.', 13),
(20, 'Đậu', 'dau.png', 23000, 120, 'Hình Dáng:\r\n\r\nĐậu đỗ thường có hình dạng hạt, nhỏ, tròn hoặc hình oval, tùy thuộc vào loại.\r\nCó thể mọc đơn hoặc theo cụm.\r\nMàu Sắc:\r\n\r\nMàu của đậu đỗ thường là màu xanh hoặc màu nâu tùy thuộc vào giai đoạn chín của hạt.\r\nHương Vị:\r\n\r\nĐậu đỗ có hương vị thơm ngon, đặc trưng của loại đậu, có thể nhạt hoặc ngon hơn tùy thuộc vào cách chế biến.\r\nTexture (Độ Cao Su):\r\n\r\nTexture của đậu đỗ thường mềm mại và có độ giòn, đặc biệt sau khi nấu chín.\r\nSử Dụng:\r\n\r\nĐậu đỗ thường được sử dụng trong nấu ăn, làm mỡ, chả, xào, hấp, hoặc được thêm vào các món canh, salad.', 13),
(21, 'Bắp Cải', 'bap_cai.png', 3000, 43, 'Hình Dáng:\r\n\r\nBắp cải có hình dáng giống như một đồng cỏ nhỏ, với những lá xếp lớp thành một đầu nhỏ ở phía trên.\r\nMàu Sắc:\r\n\r\nMàu sắc chủ yếu của bắp cải thường là xanh, nhưng có thể có các biến thể màu khác như trắng, đỏ, hoặc tím tùy thuộc vào loại.\r\nHương Vị:\r\n\r\nBắp cải thường có hương vị nhẹ, tươi mới, đặc trưng của các loại rau xanh.\r\nTexture (Độ Cao Su):\r\n\r\nTexture của bắp cải thường mềm mại và giữ nguyên độ giòn, đặc biệt là sau khi nấu chín.\r\nSử Dụng:\r\n\r\nBắp cải thường được sử dụng trong nấu ăn, xào, hấp, xà lách, và thậm chí làm các món chả, canh.', 13),
(23, 'Thịt Heo', 'thit_heo.png', 99000, 14, 'Hình Dạng:\r\n\r\nThịt heo có nhiều phần khác nhau, bao gồm thịt cắt thành từng miếng như lườn, giò, vai, và thịt được bán trong dạng đầy đủ hoặc đùi heo.\r\nMàu Sắc:\r\n\r\nMàu của thịt heo thường là hồng hoặc đỏ nhạt, tùy thuộc vào loại thịt và phương pháp chế biến.\r\nHương Vị:\r\n\r\nThịt heo thường có hương vị đặc trưng, ngon và đậm đà, có thể thay đổi tùy thuộc vào phương pháp chế biến và gia vị sử dụng.\r\nTexture (Độ Cao Su):\r\n\r\nTexture của thịt heo phụ thuộc vào phần của thịt và cách nấu nướng. Các phần như giò heo có thể có độ giòn, trong khi những miếng thịt cắt từ lườn thường mềm mại.\r\nSử Dụng:\r\n\r\nThịt heo có thể được chế biến bằng nhiều cách, bao gồm nướng, xào, hấp, luộc, và chiên. Nó cũng là một nguyên liệu phổ biến trong nhiều món ăn trên khắp thế giới.', 17),
(24, 'Thịt Băm', 'thit_bam.png', 70000, 52, 'Hình Dạng:\r\n\r\nThịt băm là thịt được xay nhuyễn thành hạt nhỏ hoặc nhuyễn hơn, thường có dạng hỗn hợp từ nhiều phần của động vật như lưng, vai, giò, và phần béo.\r\nMàu Sắc:\r\n\r\nMàu sắc của thịt băm thường phụ thuộc vào nguồn gốc và loại thịt, nhưng thường là màu đỏ hồng nhạt.\r\nHương Vị:\r\n\r\nHương vị của thịt băm thường đậm đà và ngon miệng, có thể được điều chỉnh bằng cách thêm gia vị và mùi thơm khác.\r\nTexture (Độ Cao Su):\r\n\r\nTexture của thịt băm thường mềm mại và nhuyễn, làm cho nó dễ dàng kết hợp với nhiều món ăn khác nhau.\r\nSử Dụng:\r\n\r\nThịt băm là nguyên liệu đa dạng và có thể được sử dụng trong nhiều món ăn như hamburber, bánh mì sandwich, mì spaghetti, bánh bao, hay một loạt các món nhân.', 17),
(25, 'Coffee Peru', 'coffee_peru.png', 299000, 25, 'Nguyên Gốc:\r\n\r\nCà phê Peru thường xuất phát từ các vùng cao nguyên của Peru, nơi có điều kiện địa lý và khí hậu thích hợp cho việc trồng cà phê.\r\nLoại Cà Phê:\r\n\r\nPeru sản xuất nhiều loại cà phê khác nhau, nhưng một số loại phổ biến bao gồm cà phê Arabica, có hương vị tinh tế và axit nhẹ.\r\nHương Vị:\r\n\r\nCà phê Peru thường mang đến hương vị độc đáo, có thể có các tầng hương phức tạp như hoa quả, hạt cacao, đường mật, và một chút axit nhẹ.\r\nPhương Pháp Chế Biến:\r\n\r\nCà phê Peru thường được chế biến bằng các phương pháp như chế biến ướt (washed) hoặc chế biến khô (natural), tùy thuộc vào vùng và truyền thống của từng hộ nông dân.\r\nChất Dinh Dưỡng:\r\n\r\nCà phê Peru giống như các loại cà phê khác, cung cấp caffeine và một số chất chống oxy hóa có lợi cho sức khỏe.', 18),
(26, 'Green Tea', 'green_tea.png', 199000, 42, 'Nguyên Gốc:\r\n\r\nTrà xanh được sản xuất từ lá trà Camellia sinensis chưa trải qua quá trình oxy hóa, giữ nguyên màu xanh tinh tế và nhiều chất dinh dưỡng.\r\nPhương Pháp Chế Biến:\r\n\r\nLá trà xanh được xử lý bằng các phương pháp như hấp, nung hoặc làm sấy để ngăn chặn quá trình oxy hóa, giữ nguyên các chất dinh dưỡng.\r\nHương Vị:\r\n\r\nTrà xanh thường có hương vị tươi mới, nhẹ nhàng và có thể có các tầng hương như hoa, trái cây, hoặc thậm chí là thảo mộc, tùy thuộc vào loại trà và cách chế biến.\r\nCaffeine:\r\n\r\nTrà xanh chứa lượng caffeine nhẹ, ít hơn so với trà đen, nhưng vẫn đủ để tạo cảm giác tỉnh táo.\r\nChất Dinh Dưỡng:\r\n\r\nTrà xanh là nguồn chất chống ô nhiễm môi trường và chất chống ô nhiễm tự do, cũng như các polyphenol như catechin có lợi cho sức khỏe.', 15),
(27, 'Black Tea', 'black_tea.png', 150000, 52, 'Nguyên Gốc:\r\n\r\nTrà đen cũng được làm từ lá trà Camellia sinensis, tuy nhiên, lá trà này trải qua quá trình oxy hóa hoàn toàn, tạo ra màu đen đặc trưng.\r\nPhương Pháp Chế Biến:\r\n\r\nLá trà đen được nghiền và oxy hóa để kích thích sự tác động của enzyme và tạo ra màu sắc và hương vị đặc trưng.\r\nHương Vị:\r\n\r\nTrà đen thường có hương vị đậm, mạnh, và có thể có các tầng hương như gỗ, trái cây, hay hoa, tùy thuộc vào loại trà và nơi sản xuất.\r\nCaffeine:\r\n\r\nTrà đen chứa một lượng caffeine đáng kể, giúp cung cấp năng lượng và tạo cảm giác tỉnh táo.\r\nChất Dinh Dưỡng:\r\n\r\nTrà đen chứa các chất chống ô nhiễm môi trường và polyphenol, tuy nhiên, nó thường ít hơn so với trà xanh.\r\nSử Dụng:\r\n\r\nTrà đen thường uống nóng và có thể được phục vụ với hoặc không có đường, sữa, hoặc mật ong.\r\nNó cũng được sử dụng rộng rãi trong nấu ăn và làm các loại đồ uống khác.', 15),
(28, 'Mì Tôm Thanh Long', 'mi_tom_tl.png', 9000, 123, 'Hình dạng: \r\nMì tôm thanh long có hình dạng tương tự như mì tôm truyền thống, với mì mảnh như sợi và gói gia vị đi kèm.\r\n\r\nMàu sắc: \r\nMì tôm thanh long có màu sắc tương đối giống mì tôm truyền thống, thường là màu vàng nhạt cho mì và màu đỏ hồng cho gói gia vị. Phần thanh long tươi sẽ mang màu hồng của vỏ và phần thịt trắng bên trong.\r\n\r\nHương vị: \r\nMì tôm thanh long kết hợp hương vị của mì tôm truyền thống với hương ngọt tự nhiên và một chút hương thơm từ thanh long. Hương vị của mì tôm thanh long thường là hòa quyện giữa mì đậm đà và hương ngọt nhẹ từ thanh long.\r\n\r\nSử dụng: \r\nMì tôm thanh long có thể được sử dụng như một món ăn nhẹ hoặc một phần trong bữa ăn chính. Bạn có thể thưởng thức mì tôm thanh long như một bữa trưa nhanh, một bữa ăn nhẹ trong buổi tối hoặc trong các dịp tiệc nhỏ. Đối với những người yêu thích hương vị mới lạ và thú vị, mì tôm thanh long có thể là một lựa chọn thú vị để khám phá.', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `id_user`, `id_product`, `content`, `date`) VALUES
(8, 8, 28, 'Ngon', '2023-12-07'),
(9, 8, 28, 'Dep', '2023-12-07'),
(10, 8, 27, 'Ngon', '2023-12-07'),
(11, 9, 27, 'Ngon qua', '2023-12-07'),
(12, 8, 28, 'Ngon qua', '2023-12-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(2) NOT NULL COMMENT '0. Admin\r\n1. User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `role`) VALUES
(8, 'vanhai123', '123', 'daovanhai1424@gmail.com', 1),
(9, 'vanhai', '123', 'daovanhai1424@gmail.com', 0),
(10, 'vanhai1', '123', 'daovanhai1424@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_details_product` (`id_product`),
  ADD KEY `fk_order_details_order` (`id_order`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`id_category`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_review_user` (`id_user`),
  ADD KEY `fk_review_product` (`id_product`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_order_details_order` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `fk_order_details_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
