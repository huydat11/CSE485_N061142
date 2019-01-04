-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2019 lúc 07:53 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `id_nhac` int(11) NOT NULL,
  `tenbaihat` varchar(200) NOT NULL,
  `casi` varchar(100) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `theloai` varchar(100) NOT NULL,
  `duongdan` varchar(300) NOT NULL,
  `link` varchar(200) NOT NULL,
  `loibaihat` mediumtext NOT NULL,
  `nguoidang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`id_nhac`, `tenbaihat`, `casi`, `tacgia`, `theloai`, `duongdan`, `link`, `loibaihat`, `nguoidang`) VALUES
(1, 'Anh Sai Rồi', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', '../mp3/anhsairoi.mp3', 'http://localhost/BTL_WEB/sources/php/index.php', 'Nếu ngày mai, Em rời xa Anh.Anh không biết sống thế nào đây? Con tim Anh nhói đau từng cơn.Anh biết, hạt mưa không ngừng rơi khi thấy ngủ... Xin thời gian, hãy trở lại đi.Anh không muốn mất Em người ơi! Con tim Anh nhói đau từng cơn.Anh khóc, vì Anh biết mình sai, tất cả là vì tại Anh... Anh sai rồi, Anh sai rồi. Xin Em một lần, hãy nói ', 'admin'),
(2, 'Lạ Lùng', 'Vũ', 'Quang Hải', ' POP', '../mp3/lalung.mp3', '', 'Kìa màn đêm hiu hắt mang tên Em Quay về trong ký ức của Anh qua thời gian Chiều lặng im nghe gió đung đưa cây như là bao nỗi nhớ cuốn Anh trôi về đâu Này gió đừng hát và mang nỗi nhớ chạy đi Quên âu lo quên hết suy tư một đời Mưa trong Anh sẽ vơi nhưng đôi môi đang vấn vương Chỉ tình cờ nhìn Em rồi mang theo những cơn đau thét gào Lạ lùng Em tới Hãy tới bên Anh trong chiều đông xa vắng mà sao giờ đây nhìn lại chẳng còn thấy Em Lạ lùng Em với gió hát lên câu ca làm Anh thao thức mà bao say mê nồng nàn giờ đã phai mau Kìa nắng ngập tràn nhưng giấc mơ lại vừa bay đi Gạt hết cuộc đời lẻ loi thôi mình Anh lại ngồi nhớ Em Kìa màn đêm hiu hắt mang tên Em Quay về trong kí ức của Anh qua thời gian Chiều lặng im nghe gió đung đưa cây như là bao nỗi nhớ cuốn Anh trôi về đâu Này gió đừng hát và mang nỗi nhớ chạy đi Quên âu lo quên hết suy tư một đời Mưa trong Anh sẽ vơi nhưng đôi môi đang vấn vương Chỉ tình cờ nhìn Em rồi mang theo những cơn đau thét gào Lạ lùng Em tới Hãy tới bên Anh trong chiều đông xa vắng mà sao giờ đây nhìn lại chẳng còn thấy Em Lạ lùng Em với gió hát lên câu ca làm Anh thao thức mà bao say mê nồng nàn giờ đã phai mau Kìa nắng ngập tràn nhưng giấc mơ lại vừa bay đi Gạt hết cuộc đời lẻ loi thôi mình Anh lại ngồi nhớ Em', 'admin'),
(4, 'Buồn Của Anh', 'ĐẠT G', 'Quang Hải', 'POP', '../mp3/buoncuaanh.mp3', '', 'Hai tay anh ôm xương rồng rất đau \r\nĐôi vai anh mang nỗi buồn rất lâu \r\nChân anh lang thang kiếm em ở khắp chốn \r\nNước mắt trào, biết em giờ ở nơi đâu? \r\nĐôi khi cô đơn giết anh từng cơn, em hỡi \r\nBao nhiêu nước mắt để đổi bình yên bên em, \r\nSao bao lâu quen tối nay mình anh lê bước \r\nAnh ước gì cánh tay mình đừng buông ra . \r\n\r\nĐK: \r\nChạy theo em ở phương trời xa lắm em ơi, người ơi, tình ơi! \r\nChạy đi đâu để có niềm vui vùi chôn nỗi buồn. \r\nHạ sang thu còn chưa kịp thay lá kia sao lòng em vội thay, \r\nAnh ở lại để ôm một mình nhớ thương \r\nNgày không em lòng anh thừa đông, giá băng theo chiều tan màu mưa, \r\nMột lần xa vòng tay của em là bao bão lòng \r\nNhìn vào mắt của em giờ đây, khoé mi anh lệ tuôn thầm cay. \r\nAnh rất buồn, nhưng không biết phải làm sao ? \r\n\r\nĐôi khi cô đơn, giết anh từng cơn. Em hỡi! \r\nBao nhiêu nước mắt để đổi bình yên bên em \r\nSao bao lâu quên tối nay mình anh lê bước \r\nAnh ước gì cánh tay mình đừng buông ra . \r\n\r\nĐK: \r\nChạy theo em ở phương trời xa lắm em ơi, người ơi, tình ơi \r\nChạy đi đâu để có niềm vui vùi chôn nỗi buồn. \r\nHạ sang thu còn chưa kịp thay lá-kia sao lòng em vội thay, \r\nAnh ở lại để ôm một mình nhớ thương \r\nNgày không em lòng anh thừa đông, giá băng theo chiều tan màu mưa, \r\nMột lần xa vòng tay của em là bao bão lòng \r\nNhìn vào mắt của em giờ đây, khoé mi anh lệ tuôn thầm cay \r\nAnh rất buồn nhưng không biết phải làm sao ?﻿', 'admin'),
(5, 'Chiều Hôm Ấy', 'Jaykii', 'Huy Đạt', 'Việt Nam', '../mp3/chieuhomay.mp3', '', 'Chiều hôm ấy em nói với anh  Rằng mình không nên gặp nhau nữa người ơi  Em đâu biết anh đau thế nào  Khoảng lặng phủ kín căn phòng ấy  Tim anh như thắt lại  Và mong đó chỉ là mơ  Vì anh còn yêu em rất nhiều  Giọt buồn làm nhòe đi dòng kẻ mắt  Hòa cùng cơn mưa là những nỗi buồn kia  Em khóc cho cuộc tình chúng mình  Cớ sao con yêu nhau mà mình  Không thể đến được với nhau  Vì anh đã sai hay bởi vì  Bên em có ai kia  Chẳng ai có thể hiểu nổi được trái tim  Khi đã lỡ yêu rồi  Chỉ biết trách bản thân đã mù quáng  Trót yêu một người vô tâm  Từng lời hứa như vết dao lạnh lùng  Cắt thật sâu trái tim này  Vì muốn thấy em hạnh phúc nên  Anh sẽ lùi về sau  Thời gian qua chúng ta liệu sống tốt hơn  Hay cứ mãi dối lừa  Nhìn người mình thương ướt nhòe mi cay  Khiến tim này càng thêm đau  Người từng khiến anh thay đổi là em  Đã mãi xa rồi...  Thôi giấc mơ khép lại  Ký ức kia gửi theo  Gió bay…/', 'huydat11'),
(6, 'Suýt Nữa Thì', 'Andiez', 'Vũ', 'Việt Nam', '../mp3/suytnuathi.mp3', '', 'Suýt nữa thì , anh có thể nói muôn vàn lời muốn nói  Suýt nữa thì , có thể đèo em qua từng hàng phố quen  Dòng lưu bút năm xưa viết vội , “hãy còn nhớ nhau đến những ngày sau”  Tình yêu đầu tiên anh giữ , vẫn vẹn ngày nơi con tim này !  Anh còn nhớ , mỗi lúc tan trường ngại ngùng theo em ', 'admin'),
(13, 'Suýt Nữa Thì', 'Andiez', 'Vũ', 'Việt Nam', '../mp3/suytnuathi.mp3', '', 'Suýt nữa thì , anh có thể nói muôn vàn lời muốn nói  Suýt nữa thì , có thể đèo em qua từng hàng phố quen  Dòng lưu bút năm xưa viết vội , “hãy còn nhớ nhau đến những ngày sau”  Tình yêu đầu tiên anh giữ , vẫn vẹn ngày nơi con tim này !  Anh còn nhớ , mỗi lúc tan trường ngại ngùng theo em ', 'huydat11'),
(14, 'Anh Đang Ở Đâu Đấy Anh', 'Hương Giang Idol', 'Trịnh Đình Quang', 'Việt Nam', '../mp3/anhdangodaudayanh.mp3', '', 'Em, anh, cô ta, chuyện chúng mình  Giờ đây phải làm sao yên vui như ban đầu  Nhớ, đau, còn người vui nơi khác  Hỏi phải chăng người ta chẳng đếm được ra mình là người thứ ba   ĐK:  Anh đang ở đâu đấy anh  Có hay về em này  Anh chắc đang bận với nơi có tiếng yêu mới  Nên anh đâu nào để ý   Anh đang ở đâu, có trở về không  Hay lạc nhau đến muôn đời  Ngày nhìn anh ra đi  Mưa ngoài trời trắng xóa như nỗi buồn trong em   Verse 2:  Đếm, mong, con tim sao yếu mềm  Vì anh đã vội quên yêu thương lúc ban đầu  Mắt, môi, chuyện buồn em che giấu  Thấy nhưng em lờ đi, chẳng nói một câu đâu phải chẳng biết được   ĐK:  Anh đang ở đâu đấy anh  Có hay về em này  Anh chắc đang bận với nơi có tiếng yêu mới  Nên anh đâu nào để ý   Anh đang ở đâu, có trở về không  Hay lạc nhau đến muôn đời  Ngày nhìn anh ra đi  Mưa ngoài trời trắng xóa như nỗi buồn trong em ', 'admin'),
(15, 'Buồn Không Em', 'Đạt G', 'Sơn Tùng', 'POP', '../mp3/buonkhongem.mp3', '', 'Còn buồn không em,sao đêm về lặng im một mình  Chuyện buồn qua chưa?  Đừng khóc nữa nước mắt không thừa  Vài giọt tuôn rơi cũng đủ làm tan nát bầu trời  Không nói nên lời cứ im lặng âm thầm ôm đau   Giờ ngủ chưa em,mắt đã thâm bờ môi khô rồi  Chuyện cũ chưa qua, lòng em đau như cắt ai ngờ  Đừng gọi tên nhau những đêm mưa bão tố như vậy  Đâu biết xa là nhớ nhau nhiều   Em ơi bình yên là ở cạnh bên anh hay là ở nơi đâu  Niềm vui em trao hết ai còn phần anh nước mắt  Đêm nay môi mắt không có còn cho nhau như những phút ban đầu  Lạnh câm còn hơn gió đông kia đang thay mùa   Ngoài trời mưa đổ bao nhiêu hạt mưa lòng anh khóc thay để bớt đau lòng  Em ơi, nước mắt không nhiều không giống như mưa ngoài kia  Em hãy ở lại, anh xin em hãy ở lại  Cho anh bình yên một chút để thấy mặt trời ', 'admin'),
(16, 'Chạm Đáy Nỗi Đau', 'Sơn Tùng', 'Quốc Thiên', 'Việt Nam', '../mp3/chamdaynoidau.mp3', '', 'Luôn bên em là tôi... lâu nay không chút thay đổi...  Thế nhưng bây giờ em muốn chia tay vì: Tôi vẫn còn trẻ con  Babe! Kajima! Stay here with me! Kajima!  Hụt hẫng...  Gạt nước mắt nhớ ngày buồn nhất...   Không muốn ai thay mình chăm sóc em những ngày tới!  Thoáng nghĩ đã đau lòng nhưng trách ai đây ngoài tôi...  Em bước đi nhẹ nhàng... (Em đang xa tôi nhẹ nhàng)  Nhưng trong anh bão tố! (Giấu hết bão tố trong tim) ', 'admin'),
(17, 'Con Trai Cưng', 'Đạt G', 'Châu Khải Phong', 'Rap', '../mp3/contraicung.mp3', '', 'Con trai cưng của mẹ,  Thích ăn diện lấy le  Bạn bè gọi có mặt riêng ba mẹ nói là nó không nghe,  Con trai cưng của mẹ, chơi hết đời tuổi trẻ  Hơn 20 tuổi đầu nhưng khi ở nhà vẫn là em bé,  Vì nó là, con trai cưng của mẹ nó,  Con trai cưng của mẹ nó,  Con trai cưng chưa bao giờ nhấc ngón tay từ khi bả đẻ nó,  Con trai cưng của mẹ nó, con trai cưng của mẹ nó, (S  Ở ngoài kia phong bão tố về nhà luôn có mẹ chở mẹ che, ', 'admin'),
(18, 'Đừng Như Thói Quen', 'Jaykii', 'Huy Đạt', 'POP', '../mp3/dungnhuthoiquen.mp3', '', 'Em từng là duy nhất  Là cả khoảng trời trong anh  Nhưng đến bây giờ anh vẫn như vậy  Chỉ là cần một khoảng trống  Yêu chậm lại một chút  Để biết ta cần nhau hơn  Anh cũng rất sợ ta phải xa nhau  Nhưng tình yêu không như lúc trước  Đừng để thời gian bên nhau là thói quen  Là ở cạnh bên nhưng rất xa xôi  Từng ngày cảm giác trong tim cứ thế phai đi  Lạc nhau ta đâu có hay  Đừng để yêu thương kia giờ là nỗi đau  Cô đơn về nơi căn phòng ấy  Dành tất cả thanh xuân để thương một người  Giờ chỉ còn là giấc mơ...  Anh từng là thế giới  Là cả khoảng trời trong em  Nhưng đến bây giờ lúc em cần  Anh như không quan tâm  Chỉ cần dành một phút  Để hỏi em về ngày hôm nay  Sao đến bây giờ em phải mong chờ  Một điều giản đơn đến thế  Đừng để thời gian bên nhau là thói quen  Là ở cạnh bên nhưng rất xa xôi  Từng ngày cảm giác trong tim cứ thế phai đi', 'admin'),
(19, 'Tận Cùng Của Nỗi Nhớ', 'Đạt G', 'Sơn Tùng', 'Rap', '../mp3/tancungcuanoinho.mp3', '', 'Anh chơi vơi, nơi góc phố quen mình từng,  Từng là tất cả.  Hôm ấy mây xanh ngát trời.  Cố giữ lấy chút ấm áp từ tay em  Nhưng biết sao được  Hôm nay mình chia tay.  Những tấm hình kỷ niệm của chúng mình  Vẫn đây mà  Vậy cớ sao em vội xa?  Những món quà cùng lời chúc, yêu anh thiết tha…  Chỉ mỗi anh là nhớ em của ngày hôm qua.   ĐK 1:  Tận cùng của nỗi nhớ  Em có biết là gì ko?  Là ngày dài cứ trôi  Anh chỉ nghĩ về mình em thôi.  Tận cùng của tan vỡ  Em có biết là gì không?  Là ngày em vẫn trông rất xinh đẹp  Hẹn anh ở nơi phố quen,  Rồi chia tay. ', 'huydat11'),
(20, 'Thằng Điên', 'Mr SiRo', 'Vũ', 'Rap', '../mp3/thangdien.mp3', '', 'Còn buồn không em,sao đêm về lặng im một mình  Chuyện buồn qua chưa?  Đừng khóc nữa nước mắt không thừa  Vài giọt tuôn rơi cũng đủ làm tan nát bầu trời  Không nói nên lời cứ im lặng âm thầm ôm đau   Giờ ngủ chưa em,mắt đã thâm bờ môi khô rồi  Chuyện cũ chưa qua, lòng em đau như cắt ai ngờ  Đừng gọi tên nhau những đêm mưa bão tố như vậy  Đâu biết xa là nhớ nhau nhiều   Em ơi bình yên là ở cạnh bên anh hay là ở nơi đâu  Niềm vui em trao hết ai còn phần anh nước mắt  Đêm nay môi mắt không có còn cho nhau như những phút ban đầu  Lạnh câm còn hơn gió đông kia đang thay mùa   Ngoài trời mưa đổ bao nhiêu hạt mưa lòng anh khóc thay để bớt đau lòng  Em ơi, nước mắt không nhiều không giống như mưa ngoài kia  Em hãy ở lại, anh xin em hãy ở lại  Cho anh bình yên một chút để thấy mặt trời ', 'huydat11'),
(21, 'Thằng Hề Khóc', 'Dương 565', 'Huy Đạt', 'POP', '../mp3/thanghekhoc.mp3', '', 'Mày khùng quá, trái đất này còn rất nhìu người con gái sao mày lại không tìm kiếm một người khác đi, mày buồn hoài. Nhưng rất khó có thể quên đi cảm giác ban đầu thiêng liêng và hạnh phúc, vì khi yêu ai cũng sẽ giành tất cả tình cảm của mình cho một người duy nhất, tao cũng dzậy, anh yêu em để rồi em và một người đã nói anh như một thằng hề. Rất là buồn   Anh nhớ em nhớ rất nhiều người con gái anh đã yêu yêu em không gì sánh so đâu. Nước mắt rơi bởi em trao tình yêu đó chỉ cho người anh em xem như là khắc ghê không, giọt nước mắt tuôn rơi rơi ước trên cuộc tình trái tim anh đơn phương yêu em vậy sao. Vì sao trái đất này với cơn đau xa dời chỉ có em mới khiến tim anh hết đau, chỉ em thôi nước mắt anh không ngừng rơi. Em bây giờ ', 'huydat11'),
(22, 'Thương', 'Quốc Thiên', 'Sơn Tùng', 'Việt Nam', '../mp3/thuong.mp3', '', 'Suýt nữa thì , anh có thể nói muôn vàn lời muốn nói  Suýt nữa thì , có thể đèo em qua từng hàng phố quen  Dòng lưu bút năm xưa viết vội , “hãy còn nhớ nhau đến những ngày sau”  Tình yêu đầu tiên anh giữ , vẫn vẹn ngày nơi con tim này !  Anh còn nhớ , mỗi lúc tan trường ngại ngùng theo em ', 'huydat11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachcasi`
--

CREATE TABLE `danhsachcasi` (
  `id_casi` int(11) NOT NULL,
  `casi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhsachcasi`
--

INSERT INTO `danhsachcasi` (`id_casi`, `casi`) VALUES
(1, 'Sơn Tùng MTP'),
(2, 'Đông Nhi'),
(3, 'Đạt G'),
(4, 'Châu Khải Phong'),
(5, 'Jayki'),
(6, 'Trung Quân Idol'),
(7, 'Vũ'),
(8, 'Dương 565'),
(9, 'Mr SiRo'),
(10, 'Quốc Thiên'),
(11, 'Bùi Anh Tuấn'),
(12, 'Hà Anh Tuấn'),
(13, 'Ngọc Anh'),
(14, 'Anh Quân Idol');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloainhac`
--

CREATE TABLE `theloainhac` (
  `id_theloai` int(11) NOT NULL,
  `theloai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `theloainhac`
--

INSERT INTO `theloainhac` (`id_theloai`, `theloai`) VALUES
(1, 'POP'),
(2, 'VIỆT NAM'),
(4, 'Hàn Quốc'),
(5, 'Âu Mỹ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `quyen`) VALUES
(9, 'admin123', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(14, 'huydat11', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(16, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(17, 'huydat111', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(18, 'huydat33', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(19, 'huydat1111', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(20, 'huydat29', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(22, 'nghia1', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(23, 'nghia2', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(24, 'nghia3', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(25, 'nghia4', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(26, 'nghia5', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id_nhac`);

--
-- Chỉ mục cho bảng `danhsachcasi`
--
ALTER TABLE `danhsachcasi`
  ADD PRIMARY KEY (`id_casi`);

--
-- Chỉ mục cho bảng `theloainhac`
--
ALTER TABLE `theloainhac`
  ADD PRIMARY KEY (`id_theloai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id_nhac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `danhsachcasi`
--
ALTER TABLE `danhsachcasi`
  MODIFY `id_casi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `theloainhac`
--
ALTER TABLE `theloainhac`
  MODIFY `id_theloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
