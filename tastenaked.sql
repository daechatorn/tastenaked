-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2017 at 09:10 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tastenaked`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `articleId` int(11) NOT NULL AUTO_INCREMENT,
  `articleName` varchar(255) NOT NULL,
  `articleType` varchar(255) NOT NULL,
  `shortDescription` text NOT NULL,
  `articleDetail` text NOT NULL,
  `articleImagePath` varchar(255) NOT NULL,
  `articleDate` varchar(255) NOT NULL,
  `isHilight` varchar(10) NOT NULL,
  `articleStatus` varchar(10) NOT NULL,
  `articleView` int(11) NOT NULL,
  PRIMARY KEY (`articleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `articleName`, `articleType`, `shortDescription`, `articleDetail`, `articleImagePath`, `articleDate`, `isHilight`, `articleStatus`, `articleView`) VALUES
(1, 'เบิร์นแคลง่ายๆแค่ทำตามคลิป จัดหนักฉบับสายเบิร์น', 'workout', '<p>ใกล้จะสิ้นปีแล้ว เตรียมร่างกาย เตรียมหุ่นให้พร้อมสำหรับปีหน้ากันค่ะ</p>', '<p>&nbsp;</p>\r\n<p>ใกล้จะสิ้นปีแล้ว เตรียมร่างกาย เตรียมหุ่นให้พร้อมสำหรับปีหน้ากันค่ะ หากเป็นการออกกำลังกายสไตล์ฟิตเนส หนักๆ ใช้แมชชีนมากๆพราวก็ไม่ถนัดเหมือนกัน มาม่ะ เปิด<span style="color: #e42e54;"><strong>คลิปออกกำลังกาย</strong></span>ดีๆ แล้วทำตามกันดีกว่า แต่ละคลิปเลือกดูมาให้แล้วค่ะว่าดี นอกจากดีแล้ว ยังบอกแคลอรี่ที่เบิร์นได้อีกด้วยนะคะ ถ้าเรา<strong><span style="color: #e42e54;">ไม่อู้</span></strong>&nbsp;ได้ประสิทธิภาพแน่นอนค่ะ ! มีตั้งแต่เบาๆ ยันหนักๆเลย เลือกตามที่ชอบโลดดดด</p>\r\n<p><img class="wp-more-tag mce-wp-more" title="Read more..." src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" data-wp-more="more" data-wp-more-text="" data-mce-placeholder="1" /></p>\r\n<p>&nbsp;</p>\r\n<p>มีเวลาสักสองสามนาทีไหม หากเธอไม่ยุ่งอะไร จะพามาเบิร์น 50 แคลใน 3 &nbsp;นาทีค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dcb2BuW0bMow%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/cb2BuW0bMow?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>150 แคลอรี่ใน 8 นาที ! &nbsp;ทำสองรอบก็ 300 แคลแล้วค่า</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DRjfGL2bLaaE%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/RjfGL2bLaaE?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>100 แคลอรี่ใน 5 นาที มีเวลาน้อยก็เบิร์นได้ค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D5OTgv_vAZ8Y%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/5OTgv_vAZ8Y?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>100 แคล 6 นาที ช่วงนี้เป็นช่วงของ 100 แคลค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Ds23EMAo0upY%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/s23EMAo0upY?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>1000 แคลอรี่ใน &nbsp;2 ชั่วโมง ! &nbsp;อันนี้สายโหดค่ะ ใครไม่แกร่งจริงแนะนำให้ข้ามไปค่ะ 55555555</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DPBHBhvv-Lhg%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/PBHBhvv-Lhg?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>500 แคลอรี่ใน 30 นาที อันนี้ก็ค่อนข้างหนักนะคะ แต่เบิร์นได้ดีจริง</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DLIwvel9Lzxc%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/LIwvel9Lzxc?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>35 นาที 350 แคลค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DoegRlg9V4q8%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/oegRlg9V4q8?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>อันนี้เป็น HIIT นะคะ จะค่อนข้างหนัก สำหรับคนที่ไม่ค่อยได้ออกกำลังกาย ไม่แนะนำค่ะ เหนื่อยเกินไป</p>\r\n<p>600-700 แคลใน 40 นาทีเลยค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DpWJ3wwI9Uto%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/pWJ3wwI9Uto?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>ฟัง &nbsp;2 &nbsp;เพลงก็ลดไปได้ 100 แคล</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D4_KhMBLVX1I%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/4_KhMBLVX1I?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>300 แคล 32 นาที</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DqWy_aOlB45Y%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/qWy_aOlB45Y?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>300 แคลอีกแล้วค่า 30 นาทีค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="%5Bembed%5Dhttps%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D-sICMHs301M%5B%2Fembed%5D" data-wpview-type="embed"><iframe src="https://www.youtube.com/embed/-sICMHs301M?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p>ก็ประมาณนี้นะคะ จัดเต็ม<strong><span style="color: #ff2176;">สายเบิร์น</span></strong>กันไปวันนี้ ทำสักวันละคลิปก็ผอมแล้วค่ะ &nbsp;:) แต่ต้องทำน้าา อ่านเฉยๆไม่ผอม ดูเฉยๆก็ไม่ได้ เปิดแล้วลุกขึ้นมายืดเส้นยืดสายกันด้วยนะคะ ทีนี้ใครทำแล้ว ก็<span style="color: #ff2176;"><strong>มีความสุขกับการกินกัน</strong></span>ได้เลยค่ะ แต่ต้องมีขอบเขตน้าาา เน้นโปรตีนมากๆ ไขมันดีๆ คาร์บเชิงซ้อนที่ดี ส่วนมื้อ Cheat ก็.. ก็ออกกำลังกายให้ได้ตามเป้าแล้วก็ไปกินกันเนาะ</p>\r\n<p><img class="alignnone size-full wp-image-130" src="http://taste-naked.com/wp-content/uploads/2016/12/Screen-Shot-2559-12-21-at-6.05.51-PM.png" alt="screen-shot-2559-12-21-at-6-05-51-pm" width="1904" height="1272" /></p>\r\n<h2><span style="color: #ff2176;">สุดท้ายยย เหมือนเดิม ..</span></h2>\r\n<p>สำหรับใครที่มีคำถามอะไร อยากได้คำปรึกษา คำแนะนำเกี่ยวกับออกกำลังกาย สามารถสอบถามได้ใต้โพสลิงก์นี้ ในเพจ Taste &amp; Naked เลยนะคะ เดี๋ยวพราวจะไล่ตอบให้ค่า ถ้าเป็นคำถามเกี่ยวกับการทานอาหาร ออกกำลังกายอยากให้ถามในเพจเนอะ เวลาตอบจะได้ให้คนอื่นอ่านเป็นความรู้ได้ด้วยค่า : ) ยังไงต้องขอฝากด้วยนะคะ สำหรับใครที่ชอบแพลนนี้ อยากได้อะไร ฝากคอมเม้น ฝากไอเดียไว้ได้เลย จะพยายามทำคอนเท้นท์ดีๆออกมาให้ทุกคนค่า !</p>\r\n<p>&nbsp;</p>', 'article_main-1.jpg', '2016-12-21', 'true', 'open', 1),
(2, 'Weekly Challenge ! stay sexy at your home [ for beginner ]', 'workout', '<p>มาค่ะ แพลนการออกกำลังกายสำหรับมือใหม่ ทำได้ง่ายๆแม้ที่บ้าน ลองสักวีคนึง คุมอาหารดีๆด้วย รับรองว่าเห็นผลแน่นอนค่ะ ! ส่องกระจกดู before &amp; after ได้เลย งานกระชับ งานฟิตก็มาาาา</p>', '<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Weekly Challenge ! stay sexy at&nbsp;your home [ for beginner ]</span></h1>\r\n<p>มาค่ะ แพลนการออกกำลังกายสำหรับมือใหม่ ทำได้ง่ายๆแม้ที่บ้าน ลองสักวีคนึง&nbsp;<span style="color: #e42e54;"><strong>คุมอาหารดีๆด้วย</strong></span>&nbsp;รับรองว่าเห็นผลแน่นอนค่ะ ! ส่องกระจกดู before &amp; after ได้เลย งานกระชับ งานฟิตก็มาาาา<br />ปล.เดี๋ยวแพลนอาหารจะตามมาาาา เอาออกกำลังกายไปก่อนนะคะทู้กคนน ทำไม่ทันจริมๆ คืออยากปล่อยแล้ว</p>\r\n<p><img class="wp-more-tag mce-wp-more" title="Read more..." src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" data-wp-more="more" data-wp-more-text="" data-mce-placeholder="1" /></p>\r\n<p>แพลนนี้เหมาะสำหรับ<span style="color: #e42e54;"><strong>มือใหม่&nbsp;</strong></span>คนที่ไม่ได้เข้ายิม อยู่หอ เน้นใช้ชีวิตง่ายๆแต่ฟิตได้สบายๆที่ห้องค่ะ :)<br />พราวจะเน้นไปที่การออกกำลังกาย&nbsp;<span style="color: #e42e54;"><strong>Full body</strong></span>&nbsp;ก่อนนะคะสำหรับแพลนนี้ &nbsp;ท่าง่ายๆทั้งนั้น เพราะว่ามือใหม่ที่หัดเล่น อาจจะยังโฟกัสกล้ามเนื้อในแต่ละส่วนไม่ได้มาก มาลองเริ่มบอดี้เวทให้ร่างกาย ให้กล้ามเนื้อชิน ตอบสนองกับการเวทได้ก่อนค่ะ พราวเพิ่ม elbow plank ปิดท้ายในทุกๆวันที่มีเวทเทรนนิ่ง เพราะท่านี้เป็นการฝึกความแข็งแรงของแกนกลางลำตัว (core) แล้วก็ได้ทุกส่วนในร่างกายเลยค่ะ</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #e42e54;">**Weekly Challenge นี้ ทำจบวีคนึง สามารถซ้ำได้อีก 3-4 วีคแล้วแต่เราเลยนะคะ จบวันที่ 7 จะเริ่ม Day 1 ใหม่เลยก็ได้ หรือใครยังไม่ไหว จะพักก่อนสัก 2-3 วัน แล้วเริ่มก็ได้ค่ะ**</span></strong></p>\r\n<p>ปล.แพลนนี้ตอนแรกพราวทำให้เพื่อนสนิทที่อยากฟิตหุ่นค่ะ เห็นเพื่อนรักตัวเองก็ดีใจ อิ้_อิ้ พยายามออกแบบให้ง่ายๆ ชนิดที่ว่ามีเวลานิดเดียวก็ทำได้ เน้นไปที่การมีวินัย มีวันพักให้จะได้รู้สึกสบายๆ ขอมาแชร์เพื่อให้ทุกคนฟิตไปด้วยกันนะคะ</p>\r\n<p><span style="color: #e42e54;">จริงๆจะใช้รูปตัวเองถ่าย แต่ละท่าด้วย แต่คือช่วงนี้ไม่ว่างจริงๆ แล้วก็อยากรีบปล่อยแพลนนี้ออกมาก่อน ครั้งหน้าเดี๋ยวพราวจะถ่ายตัวเองในแต่ละท่ามานะคะ :)</span></p>\r\n<p><span style="color: #e42e54;">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</span></p>\r\n<p><img class="alignnone wp-image-83" src="http://taste-naked.com/wp-content/uploads/2016/11/13886429_1309212495755749_5946691716372131743_n.jpg" alt="13886429_1309212495755749_5946691716372131743_n" width="226" height="339" /></p>\r\n<p>หุ่นอย่างในรูป พราวก็ไม่ได้ไปยิมค่ะ เล่นบอดี้เวทอยู่บ้านนี่ล่ะ ไม่ได้เป๊ะเท่าในแพลน แต่อาศัยพยายาม stay active มากๆ ถ้าช่วงไหนเล่นกล้ามหน้าท้องจะชัดกว่านี้ แขนก็จะมีเนื้อกว่านี้ ดูแข็งแรงกว่านี้ค่ะ</p>\r\n<p>&nbsp;</p>\r\n<h2><span style="color: #e42e54;"><strong>เริ่มกันดีกว่า &nbsp;!!!</strong></span></h2>\r\n<p>reps = จำนวนครั้งที่ทำแต่ละท่า<br />พยายามมีช่วงพัก ในแต่ละท่าไม่เกิน 30 วินาทีนะคะ เพื่อให้อัตราการเต้นหัวใจยังคงที่ แตะระดับ fat burning ได้<br />ซึ่งไล่ตั้งแต่ท่าที่ 1 ไปยังท่าสุดท้าย พักสัก 1 นาที จิบน้ำเบาๆ ก่อนจะเริ่มรอบใหม่ค่ะ แต่ละเซตท่าออกกำลังกาย ควรทำวนสัก 3-4 รอบนะคะ :))</p>\r\n<p><span style="color: #e42e54;">*ควรวอร์มอัพร่างกายก่อน 10-15 นาทีในการมาเล่น และ cool down and stretching ทุกครั้งหลังจากเสร็จด้วยนะคะ จะลดอาการบาดเจ็บและเพิ่มประสิทธิภาพในการทำงานของกล้ามเนื้อได้ดีขึ้นค่ะ* &nbsp;</span></p>\r\n<h2><span style="color: #e42e54;">Weekly Challenge ! stay sexy at&nbsp;your home [ for beginner ]&nbsp;</span></h2>\r\n<h4>Day 1 - Full Body - Weight Training<br />Day 2 - Light Cardio<br />Day 3 - Full Body - Weight Training 2 ค่ะ<br />Day 4 - Rest Day and stay active<br />Day 5 - Full Body - Weight Training 3<br />Day 6 - Cardio<br />Day 7 - Full Rest !!!</h4>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 1</span></h1>\r\n<p>Full Body - Weight Training<br />วันแรกก็เปิดด้วยเล่นเวทกันเลย แต่สบายค่ะ เน้น Body weight เนอะ ไม่ต้องหาอุปกรณ์มาก ใช้น้ำหนักตัวเรานี่แหละ</p>\r\n<p>&nbsp;</p>\r\n<p>1.Squat 15 reps ขึ้นช้า ลงช้า<br />2.Wall sit 20 secs ดูฟอร์มให้ดีๆนะคะ<br />3.Lunges 30 reps สลับกันซ้ายขวาไปเรื่อยๆค่ะ<br />4.Push up knees 10 reps<br />5.Crunch 15 reps อย่าลืมโฟกัสที่ท้อง ระวังปวดคอ ปวดหลังค่ะ<br />6.elbow plank 30 secs</p>\r\n<p><strong>ทำซ้ำ 3-4 รอบค่ะ</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>1.Squat 15 reps ขึ้นช้า ลงช้า</p>\r\n<p><img class="alignnone wp-image-84" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-1.jpg" alt="day1-1" width="560" height="312" /><br />2.Wall sit 20 secs ดูฟอร์มให้ดีๆนะคะ</p>\r\n<p><img class="alignnone wp-image-85" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-2.jpg" alt="day1-2" width="560" height="375" /><br />3.Lunges 30 reps สลับกันซ้ายขวาไปเรื่อยๆค่ะ</p>\r\n<p><img class="alignnone wp-image-86" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-3.jpg" alt="day1-3" width="561" height="284" /><br />4.Push up knees 10 reps</p>\r\n<p><img class="alignnone wp-image-87" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-4.jpg" alt="day1-4" width="560" height="560" /><br />5.Crunch Variation 15 reps อย่าลืมโฟกัสที่ท้อง ระวังปวดคอ ปวดหลังค่ะ</p>\r\n<p><img class="alignnone wp-image-88" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-5.jpg" alt="day1-5" width="560" height="661" /><br />6.elbow plank 30 secs ระวังปวดหลังนะคะท่านี้ พยายามทำให้หลังตรง ก้นไม่แอ่น เกร็งหน้าท้องมากๆค่ะ</p>\r\n<p><img class="alignnone wp-image-89" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-6.jpg" alt="day1-6" width="560" height="315" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 2</span></h1>\r\n<p><span style="color: #e42e54;">Stay active !! and Light Cardio</span>&nbsp;สั้นๆสัก 10-20 นาที<br />วันนี้พักจากการเวทค่ะ เพราะกล้ามเนื้อน่าจะล้า บาดเจ็บอยู่จากเมื่อวาน อย่าลืมทานโปรตีนเยอะๆตลอดการฝึกด้วยนะคะ จะช่วยซ่อมแซมส่วนที่สึกหรอ ดีต่อกล้ามเนื้อค่ะ<br />ส่วน Light Cardio ที่จะให้ทำวันนี้ลองเป็นเต้นแอโรบิค เต้นสนุกๆ เผาผลาญไขมันอยู่หน้าบ้าน ด้วยคลิปเต้นดูใน youtube ก็ได้นะคะ<br />แนะนำอะไรประมาณนี้ค่ะ</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DXTH5saFBDqA" data-wpview-type="embedURL"><iframe src="https://www.youtube.com/embed/XTH5saFBDqA?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<div class="wpview wpview-wrap" data-wpview-text="https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DjszPZiqEheI" data-wpview-type="embedURL"><iframe src="https://www.youtube.com/embed/jszPZiqEheI?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<div class="wpview wpview-wrap" data-wpview-text="https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Df6wm2g682JM" data-wpview-type="embedURL"><iframe src="https://www.youtube.com/embed/f6wm2g682JM?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 3</span></h1>\r\n<p>กลับมาเวทกันต่อกับโปรแกรม Full Body - Weight Training 2 ค่ะ<br />1.Step ups with chair ข้างละ 15 reps *ทำทีละข้าง<br />2.Glute bridges 25 reps<br />3.Mountain Climber ข้างละ 15 reps *ทำทีละข้าง<br />4.Russian Twist 25 reps<br />5.Bicep curls ข้างละ 15 reps น้ำหนักตามที่ยกไหวหรือหาเวทได้ค่ะ ดูตามความเหมาะสมนะคะ<br />6.elbow plank 30 secs</p>\r\n<p><strong>ทำซ้ำ 3-4 รอบค่ะ</strong></p>\r\n<p>1.Step ups with chair ข้างละ 15 reps *ทำทีละข้าง ใช้เก้าอี้ที่เรามีทำได้เลยค่ะ</p>\r\n<p><img class="alignnone wp-image-90" src="http://taste-naked.com/wp-content/uploads/2016/11/day3-1.jpg" alt="day3-1" width="499" height="354" /><br />2.Glute bridges 25 reps เกร็งกล้ามเนื้อก้นดีๆนะคะ</p>\r\n<p><img class="alignnone wp-image-91" src="http://taste-naked.com/wp-content/uploads/2016/11/day3-2.png" alt="day3-2" width="561" height="345" /><br />3.Mountain Climber ข้างละ 15 reps *ทำทีละข้าง เกร็งกล้ามเนื้อก้นดีๆค่ะ*</p>\r\n<p><img class="alignnone wp-image-92" src="http://taste-naked.com/wp-content/uploads/2016/11/day3-3.jpg" alt="day3-3" width="561" height="371" /><br />4.Russian Twist 25 reps หาลูกบอล หรืออะไรมาจับไว้นะคะ ท่านี้ได้เอวดีเลย</p>\r\n<p><img class="alignnone wp-image-93" src="http://taste-naked.com/wp-content/uploads/2016/11/day3-4.jpg" alt="day3-4" width="558" height="313" /><br />5.Bicep curls ข้างละ 15 reps น้ำหนักตามที่ยกไหวหรือหาเวทได้ค่ะ ดูตามความเหมาะสมนะคะ ใช้ขวดน้ำได้เลยค่า</p>\r\n<p><img class="alignnone wp-image-94" src="http://taste-naked.com/wp-content/uploads/2016/11/day3-5.jpg" alt="day3-5" width="580" height="348" /><br />6.elbow plank 30 secs *ระวังปวดหลังนะคะท่านี้ พยายามทำให้หลังตรง ก้นไม่แอ่น เกร็งหน้าท้องมากๆค่ะ</p>\r\n<p><img class="alignnone wp-image-89" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-6.jpg" alt="day1-6" width="528" height="297" /></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 4</span></h1>\r\n<p><span style="color: #e42e54;">Rest Day and stay active</span><br />พักผ่อนกันค่ะ :) เหนื่อยมาสามวัน วันนี้ก็พักให้ร่างกายฟื้นฟูนะคะ<br />แต่อย่าลืมที่จะ stay active เดินเยอะๆ ขยับร่างกาย ไม่ก็ลุกมายืดเส้นยืดสายค่ะ</p>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 5</span></h1>\r\n<p>กลับมาเวทอีกแล้ว เวทครั้งสุดท้ายของอาทิตย์นี้แล้วค่ะ<strong><span style="color: #e42e54;">&nbsp;Full Body - Weight Training 3</span></strong><br />วันนี้จะหนักกว่าวันอื่นนิดนึงนะคะ แต่ไม่ยากค่ะ ทำได้แน่นอน</p>\r\n<p>1.Jump Squat 15 reps<br />2.Side Lunges 30 reps สลับซ้ายขวา<br />3.Donkey Kick ข้างละ 15 reps<br />4.Tricep Dips 10 reps<br />5.Lateral Raise 10 reps<br />6.Up right row 15 reps<br />7.elbow plank 30 secs<br /><span style="color: #333333;"><strong>ทำซ้ำ 3-4 รอบค่ะ</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p>1.Jump Squat 15 reps</p>\r\n<p><img class="alignnone wp-image-95" src="http://taste-naked.com/wp-content/uploads/2016/11/day5-1.jpg" alt="day5-1" width="557" height="557" /><br />2.Side Lunges 30 reps สลับซ้ายขวา</p>\r\n<p><img class="alignnone wp-image-96" src="http://taste-naked.com/wp-content/uploads/2016/11/day5-2.jpg" alt="day5-2" width="552" height="331" /><br />3.Donkey Kick ข้างละ 15 reps</p>\r\n<p><img class="alignnone wp-image-97" src="http://taste-naked.com/wp-content/uploads/2016/11/day5-3.jpg" alt="day5-3" width="544" height="544" /><br />4.Tricep Dips 10 reps</p>\r\n<p><img class="alignnone wp-image-98" src="http://taste-naked.com/wp-content/uploads/2016/11/day5-4.jpg" alt="day5-4" width="561" height="602" /><br />5.Lateral Raise 10 reps *ใช้ขวดน้ำได้สำหรับคนไม่มีดัมเบลค่ะ*</p>\r\n<p><img class="alignnone wp-image-99" src="http://taste-naked.com/wp-content/uploads/2016/11/day5-5.jpg" alt="day5-5" width="545" height="407" /><br />6.Up right row 15 reps&nbsp;*ใช้ขวดน้ำได้สำหรับคนไม่มีดัมเบลค่ะ*</p>\r\n<p><img class="alignnone wp-image-100" src="http://taste-naked.com/wp-content/uploads/2016/11/day5-6.jpg" alt="day5-6" width="553" height="553" /><br />7.elbow plank 30 secs *ระวังปวดหลังนะคะท่านี้ พยายามทำให้หลังตรง ก้นไม่แอ่น เกร็งหน้าท้องมากๆค่ะ</p>\r\n<p><img class="alignnone wp-image-89" src="http://taste-naked.com/wp-content/uploads/2016/11/day1-6.jpg" alt="day1-6" width="546" height="307" /></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 6</span></h1>\r\n<p>ออกกำลังกายกันอย่างต่อเนื่อง&nbsp;<strong><span style="color: #e42e54;">Cardio</span></strong>&nbsp;สิคะ !!<br />จะวิ่ง จะว่ายน้ำ จะเล่นกีฬา ตีแบด อะไรก็ได้ค่ะ ขอสัก 30 นาทีขึ้นไป<br />ให้หัวใจแตะระดับ<span style="color: #e42e54;">&nbsp;HR fat-burning หรือ cardio นะคะ (สัก 120bpm ขึ้น)</span><br />แต่ถ้าใครไม่ได้ออกไปไหน พราวก็ยังแนะนำการเต้นออกกำลังกายสนุกๆ หรือคลิปคาร์ดิโอแบบนี้เลยค่ะ !</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DqWy_aOlB45Y" data-wpview-type="embedURL"><iframe src="https://www.youtube.com/embed/qWy_aOlB45Y?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<p>&nbsp;</p>\r\n<div class="wpview wpview-wrap" data-wpview-text="https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DfcN37TxBE_s" data-wpview-type="embedURL"><iframe src="https://www.youtube.com/embed/fcN37TxBE_s?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<div class="wpview wpview-wrap" data-wpview-text="https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D2rzhohF5w3c" data-wpview-type="embedURL"><iframe src="https://www.youtube.com/embed/2rzhohF5w3c?feature=oembed" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h1><span style="color: #e42e54;">Day 7</span></h1>\r\n<p><strong><span style="color: #e42e54;">พักแบบสุดๆ</span></strong><br />วันนี้พักไปเลยค่ะ ทำให้ร่างกาย&nbsp;<span style="color: #e42e54;">recovery</span>&nbsp;จากที่ออกกำลังกายมาทั้งสัปดาห์ ทานอาหารที่มีประโยชน์ ฟื้นฟูร่างกายกันนะคะ พักจิต พักใจ หรือใครอยากทานอาหารอร่อยๆวันนี้ก็จัดไปเลย แต่อย่าแบบ Cheat Day ทั้งวันนะคะ Cheat meal ก็พอแล้วค่ะ :))</p>\r\n<p>&nbsp;</p>\r\n<p><img class="alignnone wp-image-113" src="http://taste-naked.com/wp-content/uploads/2016/11/Capture.jpg" alt="capture" width="577" height="362" /></p>\r\n<p>&nbsp;</p>\r\n<p>มาถึงวันที่ 7 แล้วเป็นยังไงกันบ้างเอ่ยยย ? ใครพักวันนึงแล้วยังอยากฟิตต่อ&nbsp;<strong><span style="color: #e42e54;">เริ่มวันที่ 1 ใหม่ได้เลยนะคะ :)</span><br /></strong>ใครอยากพัก หรือรู้สึกร่างกายยังไม่ไหว พักสัก 1-3 วันแล้วค่อยเริ่มใหม่ได้ค่ะ ใครเจ็บป่วยอย่าพึ่งฝืนเน้อ ออกกำลังกายต้องให้ทั้งร่างกายและจิตใจพร้อมนะคะ</p>\r\n<p>&nbsp;</p>\r\n<h2><span style="color: #e42e54;"><strong>ที่สำคัญ</strong>...&nbsp;</span></h2>\r\n<p>อย่าลืมทานอาหารดีๆ มีประโยชน์ ปริมาณที่เหมาะสมกับร่างกายด้วยค่ะ ถ้าออกกำลังกายแล้วทานน้อยเกินไป เดี๋ยวจะไม่ไหวกันนะคะ &lt;3 หรือถ้าออกกำลังกายแล้วยังไม่ดูแลอาหาร ทานแต่ของมัน ทอด JunkFood น้ำอัดลม แบบนี้ก็จะไม่ค่อยเห็นผลเน้ออออ สู้ๆ ! ทำได้ค่ะ</p>\r\n<p>&nbsp;</p>\r\n<h2><span style="color: #e42e54;">สุดท้ายยย ฝากไว้</span></h2>\r\n<p>สำหรับใครที่มีคำถามอะไร อยากได้คำปรึกษา คำแนะนำเกี่ยวกับออกกำลังกาย สามารถสอบถามได้ใต้โพสลิงก์นี้ ในเพจ Taste &amp; Naked เลยนะคะ เดี๋ยวพราวจะไล่ตอบให้ค่า ถ้าเป็นคำถามเกี่ยวกับการทานอาหาร ออกกำลังกายอยากให้ถามในเพจเนอะ เวลาตอบจะได้ให้คนอื่นอ่านเป็นความรู้ได้ด้วยค่า : ) ยังไงต้องขอฝากด้วยนะคะ สำหรับใครที่ชอบแพลนนี้ อยากได้อะไร ฝากคอมเม้น ฝากไอเดียไว้ได้เลย จะพยายามทำคอนเท้นท์ดีๆออกมาให้ทุกคนค่า !</p>', 'article_main-2.jpg', '2016-11-05', 'false', 'open', 2),
(3, 'เรียนทุกวันก็ฟิต ใช้ชีวิตชิคๆ แบบสาวมหาลัย', 'lifestyle', '<p>สวัสดีค่า! ไหนใครยังเป็นนักศึกษา นักเรียน บ้างเอ่ยยย ? ขอบอกว่าบล็อคนี้ห้ามพลาดเลยค่ะ</p>', '<p>&nbsp;</p>\r\n<p>สวัสดีค่า ! ไหนใครยังเป็นนักศึกษา นักเรียน บ้างเอ่ยยย ? ขอบอกว่าบล็อคนี้ห้ามพลาดเลยค่ะ เราจะได้มาใช้ชีวิตฟิตๆชิคๆในรั้วมหาลัยกัน แต่...สำหรับพี่ๆคนไหนที่ทำงานแล้ว ก็ไม่เป็นไรนะคะ อ่านได้เหมือนกัน เพราะเทคนิคของพราวในบล็อคนี้ สามารถ adapt ใช้กับชีวิตประจำวันทุกคนได้เลยค่ะ</p>\r\n<p><img class="wp-more-tag mce-wp-more" title="Read more..." src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" data-wp-more="more" data-wp-more-text="" data-mce-placeholder="1" /></p>\r\n<h3><span style="color: #ff0062;"><strong>1.เก็บก้าวเดินเยอะเยอะ</strong></span></h3>\r\n<p><img class="alignnone wp-image-50" src="http://taste-naked.com/wp-content/uploads/2016/09/01.jpg" alt="01" width="500" height="335" /></p>\r\n<p>ในบริเวณมหาลัยเนี่ย เป็นที่ๆเหมาะสมแก่การ<span style="color: #eb0052;"><strong>เก็บก้าวเดิน</strong></span>ที่สุดค่ะ ! เพราะอะไรน่ะหรอ ? เพราะว่าในมหาลัยเนี่ยเป็นเขตปลอดภัยจากสิ่งอันตรายตามท้องถนนค่ะ ในประเทศไทยเราต้องบอกว่าการเดินบนทางปกติค่อนข้างอันตรายเนอะ ไหนจะรถมอไซค์ ไหนจะหมา ไหนจะถ้าเป็นที่เปลี่ยวๆยามค่ำๆ ต้องมากลัวโจร กลัวมิจฉาชีพอีก<br />แต่ปัญหานี้จะหมดไปเมื่อเรามาเดินในรั้วมหาลัยค่ะ ส่วนใหญ่ทุกมหาลัยก็จะเป็นบริเวณกว้าง ๆ เนอะ มีทางเท้าให้เดิน รถยนต์ รถมอไซค์ก็ไม่มาก ปลอดภัยหายห่วง ที่สำคัญบางมหาลัยยังมีทำทางร่มไว้ให้นักศึกษาเดินอีกด้วยค่ะ ไม่ต้องกลัวแดดเลย</p>\r\n<p>&nbsp;</p>\r\n<p><img class="alignnone wp-image-52" src="http://taste-naked.com/wp-content/uploads/2016/09/Row-res-7.jpg" alt="row-res-7" width="500" height="337" /></p>\r\n<p>&nbsp;</p>\r\n<p>ไม่ว่าจะเรียนตึกหน้ามหาลัย แล้วอีกวิชาเรียนหลังมหาลัย หรือจะออกไปกินข้าวบริเวณนอกมหาลัย ไกลแค่ไหนพราวก็บ่ยั่นค่ะ ! เดินเท่านั้น&nbsp;<span style="color: #eb0052;"><strong>การเดินเนี่ยเป็นสิ่งที่ทำให้ร่างกาย Active ได้ง่ายที่สุดเลยค่ะ</strong></span>&nbsp;นั่งเรียนมาหลายชั่วโมง ยืดเส้นยืดสาย ขยับขากันหน่อยให้ร่างกายได้เผาผลาญค่ะ พราวใช้นาฬิกาวัดก้าว เดินวนไปมาใน ม. เรียนตึกนู้น ไปตึกนี้ ไปกินข้าวตึกนั้น วันๆนึงเดินได้ถึง 3 กิโลขึ้นเลยนะคะ เผาผลาญเพิ่มอีกหลักร้อยแคลเลยค่า</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style="color: #ff0062;">2.&nbsp;เดินขึ้นบันได</span></strong></h3>\r\n<p><img class="alignnone wp-image-53" src="http://taste-naked.com/wp-content/uploads/2016/09/02.jpg" alt="02" width="500" height="466" /></p>\r\n<p>&nbsp;</p>\r\n<p>อันนี้ต้องใช้ความ Strong ของขากันแล้วล่ะค่ะ เดินนี่เป็นอะไรที่ basic แต่ถ้าขึ้นบันไดไปเรียนนี่ต้อง&nbsp;<strong><span style="color: #eb0052;">&ldquo;คนจริง&rdquo;</span></strong>&nbsp;เท่านั้น พราวเคยฟิตมากๆ ขนาดเรียนชั้น 6 แต่ก็เดินขึ้นบันไดทุกวันค่ะ ช่วงแรกๆจะเหนื่อยมากกกกก ปวดขามาก แต่พอเราทำจนชิน สักพักก็จะรู้สึกสบายๆแล้วค่ะ ไม่ต้องมานั่งรอลิฟท์ ขึ้นลิฟท์เบียดกับคนอื่น มาเบิร์นกันดีกว่า นอกจากจะได้เผาผลาญพลังงานแล้ว ยังทำให้กล้ามเนื้อต้นขากระชับ แข็งแรงขึ้นอีกด้วยนะคะ</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style="color: #ff0062;">3. กินง่ายๆใน Canteen</span></strong></h3>\r\n<p>ถ้าไม่ขยันหรือไม่มีเวลาทำข้าวกล่องมากิน อยากกินอาหารกับเพื่อนๆ ในศูนย์อาหารมหาลัย เราก็ทำได้ค่ะ คือพอใช้ชีวิตถึงจุดนึงแล้วเราจะรู้สึกว่า เออ&nbsp;<span style="color: #eb0052;"><strong>ทำอะไรง่ายๆเนี่ยแหละ เราทำได้ตลอด</strong></span>&nbsp;พราวเคยทำข้าวมากินค่ะ แต่ก็แบบ ตอนเช้ารีบๆ ไม่ไหวจีจี ลดมาเหลือเอาข้าวกล้องมาเอง แต่ตอนนี้ .. วินัยหายหดค่ะ ! ไม่เอาอะไรมาทั้งนั้น มาพึ่งในแคนทีนเนี่ยละ ง่ายดี (ใครยังมีวินัยอยู่ก็อย่าพึ่งเลิกเน้อออ มีวินัยแบบนั้นยังไงก็ดีกว่าค่ะ ) เพียงแค่เราเลือกอาหารให้เป็นก็พอ</p>\r\n<p>&nbsp;</p>\r\n<p><img class="alignnone wp-image-54" src="http://taste-naked.com/wp-content/uploads/2016/09/Row-res-1.jpg" alt="row-res-1" width="500" height="357" /></p>\r\n<p>&nbsp;</p>\r\n<p>อันนี้เป็นข้าวสวย โปะไก่ย่าง กับไก่ต้มข้าวมันไก่ ลอกหนังค่ะ เมนูประจำของพราวเลย โหลดโปรตีนกันเต็มๆกับคุณไก่ ข้าวมันเราไม่เอา ข้าวสวยร้อนๆพอแล้ว ราดน้ำจิ้มแต่พอมีรสชาติ ไม่ต้องชุ่มมากค่ะ ไม่งั้นบวมโซเดียมกันแน่ๆ พราวกินสองไก่แบบนี้ ต้องมีทั้งน้ำจิ้มข้าวมันไก่ และน้ำจิ้มแจ่วค่ะ</p>\r\n<p>หรือวันไหนอยากจัดข้าวแกง ก็เน้นเลือกไปที่เมนูแกงๆค่ะ แกงไม่กะทิจะดีมาก ต้มยำ ต้มข่า ต้มจืด แกงส้ม ทั้งหลาย หรือถ้าอยากจัดแกงกะทิ บอกเขา ขอเนื้อๆ น้ำนิดเดียวพอ ประหยัดแคลไปได้อีกเยอะค่ะ ! ถ้าอยากทานเมนูผัด ลองส่องๆก่อน ว่าร้านเนี้ยะ เมนูไหนที่ดูไม่มัน ไม่ผัดจนเยิ้มบ้าง แต่ละร้านไม่เหมือนกันเนอะคะ ที่สำคัญ งดของทอด ปลาทอด ไส้กรอกทอด ไก่ทอด อะไรเนี่ย ไม่เอานะคะ ไข่ดาวไข่เจียวก็ไม่ดี หาไข่ต้มดีกว่าค่ะ</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3><span style="color: #ff0062;"><strong>4.น้ำเปล่า Is real</strong></span></h3>\r\n<p>&nbsp;</p>\r\n<p>อันนี้สำคัญมากกกกก ก ไก่ล้านตัว คือหลายๆคนที่เป็นนักศึกษาเนี่ย พราวสังเกตุแล้วค่ะว่าจะติดพวกทานน้ำหวานมาก ทานข้าวก็ต้องคู่น้ำหวาน หิวๆกระหายน้ำก็ชานมไข่มุก ใครมีพฤติกรรมแบบนี้ ลด ละ เลิก มายืดอกพกน้ำเปล่ากันดีกว่าค่ะ เติมความสดชื่นให้ร่างกาย ร้อนๆก็หยิบมาดื่ม บางทีนั่งเรียนอยู่แล้วหัวตื้อๆ หยิบน้ำเปล่ามาจิบจะช่วยให้สมองปลอดโปร่งขึ้นได้นิดนึงด้วยนะคะ ทำให้ติดเป็นนิสัยเลยค่ะ น้ำเปล่าเนี่ยดีต่อสุขภาพมากๆเลยนะคะ ควรทานให้ได้วันนึง 2 ลิตรขึ้นไปค่ะ<br />ปล.<span style="color: #eb0052;"><strong>ชานมไข่มุกแก้วนึง พลังงานสูงมากกก</strong></span>&nbsp;ไขมัน คาร์โบไฮเดรต น้ำตาลพรึ่บมากค่ะ 300-400++ เอาไปทานข้าวดีกว่านะคะ</p>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style="color: #ff0062;">5.Happy with your friends</span></strong></h3>\r\n<p>เป็นสาวมหาลัยทั้งที ชีวิตต้องมีความสุขสิคะ !&nbsp;<em>*ขออนุญาติเพื่อนๆที่นำภาพมาใส่ด้วยค่ะ 55555555*</em><br />การมีความสุขเนี่ยเป็นอีกคียเวิดของชีวิตแบบเฮลตี้เลยนะคะ จะเม้ามอย จะชวนกันส่องผู้ ชวนกันไปหาอะไรกิน ชอปปิ้ง แต่งตัวแต่งหน้า หรือจะคุยเรื่องเรียนกันก็ทำให้มันมีความสุขเข้าไว้ พราวใกล้จะเรียนจบแล้วยังคิดเลยค่ะว่าแบบ ถ้าเรียนจบไป ก็คงไม่ได้ใช้ชีวิตแฮปปี้ๆแบบนี้กับกลุ่มเพื่อนละ ต้องไปมีสังคมใหม่ๆ ดังนั้น&nbsp;<span style="color: #eb0052;"><strong>ใช้ชีวิตช่วงนี้ให้คุ้มค่ะ !</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><img class="alignnone wp-image-57" src="http://taste-naked.com/wp-content/uploads/2016/09/14051794_549814615210407_6294348809576312523_n.jpg" alt="14051794_549814615210407_6294348809576312523_n" width="500" height="336" /></p>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style="color: #ff0062;">6.พักผ่อนให้เพียงพอ</span></strong></h3>\r\n<p>ก็รู้ว่าชีวิตมันหนัก เรียนเยอะ กิจกรรมแยะ แต่ต้องไม่ลืมพักผ่อนนะคะ&nbsp;<span class="_47e3" title="อีโมติคอน smile"><span class="_7oe">:)&nbsp;</span></span>นอนครบ 8 ชั่วโมงอาจจะทำได้ยากในช่วงนี้ แต่ขั้นต่ำอยากให้ได้สัก 6 ชั่วโมงค่ะ สมองจะได้ปลอดโปร่งๆ ไม่ป่วย ไม่โทรมนะคะ</p>\r\n<h3>&nbsp;</h3>\r\n<h3><span style="color: #ff0062;">แค่นี้เราก็มีความสุขในชีวิตมหาลัย ชิคชิค แถมฟิตได้อีกด้วยแล้วค่ะ เย้ !</span></h3>\r\n<p>&nbsp;</p>', 'article_main-3.jpg', '2017-01-03', 'true', 'open', 10);
INSERT INTO `article` (`articleId`, `articleName`, `articleType`, `shortDescription`, `articleDetail`, `articleImagePath`, `articleDate`, `isHilight`, `articleStatus`, `articleView`) VALUES
(4, 'เรียนทุกวันก็ฟิต ใช้ชีวิตชิคๆ แบบสาวมหาลัย 2', 'lifestyle', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    สวัสดีค่า! ไหนใครยังเป็นนักศึกษา นักเรียน บ้างเอ่ยยย ? ขอบอกว่าบล็อคนี้ห้ามพลาดเลยค่ะ เราจะได้มาใช้ชีวิตฟิตๆชิคๆในรั้วมหาลัยกัน แต่…สำหรับพี่ๆคนไหนที่ทำงานแล้ว ก็ไม่เป็นไรนะคะ อ่านได้เหมือนกัน เพราะเทคนิคของพราวในบล็อคนี้ สามารถ adapt ใช้กับชีวิตประจำวันทุกคนได้เลยค่ะ                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    บริเวณมหาลัยเนี่ย เป็นที่ๆเหมาะสมแก่การเก็บก้าวเดินที่สุดค่ะ ! เพราะอะไรน่ะหรอ ? เพราะว่าในมหาลัยเนี่ยเป็นเขตปลอดภัยจากสิ่งอันตรายตามท้องถนนค่ะ ในประเทศไทยเราต้องบอกว่าการเดินบนทางปกติค่อนข้างอันตรายเนอะ ไหนจะรถมอไซค์ ไหนจะหมา ไหนจะถ้าเป็นที่เปลี่ยวๆยามค่ำๆ ต้องมากลัวโจร กลัวมิจฉาชีพอีก\r\nแต่ปัญหานี้จะหมดไปเมื่อเรามาเดินในรั้วมหาลัยค่ะ ส่วนใหญ่ทุกมหาลัยก็จะเป็นบริเวณกว้าง ๆ เนอะ มีทางเท้าให้เดิน รถยนต์ รถมอไซค์ก็ไม่มาก ปลอดภัยหายห่วง ที่สำคัญบางมหาลัยยังมีทำทางร่มไว้ให้นักศึกษาเดินอีกด้วยค่ะ ไม่ต้องกลัวแดดเลย\r\nบริเวณมหาลัยเนี่ย เป็นที่ๆเหมาะสมแก่การเก็บก้าวเดินที่สุดค่ะ ! เพราะอะไรน่ะหรอ ? เพราะว่าในมหาลัยเนี่ยเป็นเขตปลอดภัยจากสิ่งอันตรายตามท้องถนนค่ะ ในประเทศไทยเราต้องบอกว่าการเดินบนทางปกติค่อนข้างอันตรายเนอะ ไหนจะรถมอไซค์ ไหนจะหมา ไหนจะถ้าเป็นที่เปลี่ยวๆยามค่ำๆ ต้องมากลัวโจร กลัวมิจฉาชีพอีก\r\nแต่ปัญหานี้จะหมดไปเมื่อเรามาเดินในรั้วมหาลัยค่ะ ส่วนใหญ่ทุกมหาลัยก็จะเป็นบริเวณกว้าง ๆ เนอะ มีทางเท้าให้เดิน รถยนต์ รถมอไซค์ก็ไม่มาก ปลอดภัยหายห่วง ที่สำคัญบางมหาลัยยังมีทำทางร่มไว้ให้นักศึกษาเดินอีกด้วยค่ะ ไม่ต้องกลัวแดดเลย\r\nไม่ว่าจะเรียนตึกหน้ามหาลัย แล้วอีกวิชาเรียนหลังมหาลัย หรือจะออกไปกินข้าวบริเวณนอกมหาลัย ไกลแค่ไหนพราวก็บ่ยั่นค่ะ ! เดินเท่านั้น การเดินเนี่ยเป็นสิ่งที่ทำให้ร่างกาย Active ได้ง่ายที่สุดเลยค่ะ นั่งเรียนมาหลายชั่วโมง ยืดเส้นยืดสาย ขยับขากันหน่อยให้ร่างกายได้เผาผลาญค่ะ พราวใช้นาฬิกาวัดก้าว เดินวนไปมาใน ม. เรียนตึกนู้น ไปตึกนี้ ไปกินข้าวตึกนั้น วันๆนึงเดินได้ถึง 3 กิโลขึ้นเลยนะคะ เผาผลาญเพิ่มอีกหลักร้อยแคลเลยค่า                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'article_main-4.jpg', '2017-01-03', 'false', 'close', 7),
(5, 'Fiber Gleen – ขับถ่ายง่าย ท้องไม่ป่อง เติมไฟเบอร์ให้ร่างกาย', 'nutrition', '<p>ก่อนอื่นต้องขอบอกก่อนว่าไฟเบอร์ไม่ใช่ยาลดน้ำหนัก ไม่ทำให้ผอม ไม่ทำให้หุ่นดีและไม่ใช่ยาถ่ายใดๆทั้งสิ้นนะคะ</p>', '<p>&nbsp;</p>\r\n<p>สวัสดีค่า วันนี้พราวมีผลิตภัณฑ์อาหารเสริม ไฟเบอร์มาแนะนำค่ะ ก่อนอื่นต้องขอบอกก่อนว่าไฟเบอร์ไม่ใช่ยาลดน้ำหนัก ไม่ทำให้ผอม ไม่ทำให้หุ่นดีและไม่ใช่ยาถ่ายใดๆทั้งสิ้นนะคะ ต้องพูดไว้ก่อนเลยอันนี้เดี๋ยวจะเข้าใจผิดกัน&nbsp; ผลิตภัณฑ์ตัวนี้เป็นของทาง iWish A product by SLC ค่ะ มีชื่อว่า&nbsp;<span style="color: #99cc00;"><strong>&ldquo;Fiber Gleen&rdquo;</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #99cc00;"><strong><img class="wp-more-tag mce-wp-more" title="Read more..." src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" data-wp-more="more" data-wp-more-text="" data-mce-placeholder="1" /></strong></span><img class="alignnone wp-image-137" src="http://taste-naked.com/wp-content/uploads/2016/12/DSCF1261.jpg" alt="dscf1261" width="653" height="437" /></p>\r\n<p>หลายคนอาจจะสงสัยว่าแล้วจะทานไปทำไมในเมื่อไม่ใช่ยาลดน้ำหนัก ทานไปก็ไม่ผอม ยาถ่ายก็ไม่ใช่</p>\r\n<p>ก่อนอื่นเราต้องเข้าใจกันก่อนค่ะว่าไฟเบอร์นั้น คือ<span style="color: #99cc00;"><strong>เส้นใยอาหาร</strong></span>&nbsp;เป็นหนึ่งในสิ่งที่เราต้องการในชีวิตประจำวันค่ะ</p>\r\n<p>ซึ่งเส้นใยอาหารนั้น มีหน้าที่ในการช่วยในเรื่องของระบบทางเดินอาหารและการขับถ่ายค่ะ โดยปกติคนเราทานอาหารก็มักจะได้ไฟเบอร์จากผัก จากผลไม้บ้าง แต่ในชีวิตประจำวันของเราก็ไม่ได้ทานผักผลไม้มากขนาดนั้น ยิ่งคนเมืองสมัยนี้ ทานอาหารตามสั่ง ก็ไม่ค่อยมีผัก จะได้ทานผักจริงจังก็คงต้องสั่งผัดผักหรือสลัดกันค่ะ ซึ่งแน่นอนว่าพอเราไม่ค่อยได้ทานผักผลไม้ ไฟเบอร์ก็ไม่พอเนอะ หลายๆคนก็เลยอาจจะมีปัญหาท้องผูก ขับถ่ายไม่ดีบ้าง&nbsp; ซึ่งพราวก็เป็นหนึ่งในคนที่ไม่ค่อยได้ทานผักค่ะ ฮือออ แล้วก็มีปัญหาเรื่องขับถ่ายด้วย หลายๆวันถ่ายทีบ้าง ถ่ายทีก็แข็งมากบ้าง แล้วแต่ช่วงนั้นทานอาหารอะไร ไฟเบอร์เยอะมั้ย ดังนั้น .. ก็เลยมีตัวช่วยนิดหน่อยค่ะ</p>\r\n<p><img class="alignnone wp-image-138" src="http://taste-naked.com/wp-content/uploads/2016/12/DSCF0703.jpg" alt="dscf0703" width="642" height="430" /></p>\r\n<p>สำหรับส่วนประกอบ</p>\r\n<p>ก็จะมีหลักเป็น อินูลินค่ะ (Inulin) หรือเส้นใยอาหารนั่นเอง นอกจากนั้นก็ยังมีส่วนประกอบอื่นๆเช่น วิตามิน , ไกลซีน&nbsp; , Wheat grass , Zinc และอื่นๆอีกมากค่ะ คือส่วนประกอบเป็นสิบชนิดในปริมาณอย่างละเล็กน้อย แต่พราวขอเลือกหยิบตัวที่คนน่าจะรู้จักกันเนอะ&nbsp; เอาเป็นว่าเราจะข้ามกันไปค่ะ</p>\r\n<p>ในตัว&nbsp;<strong><span style="color: #99cc00;">Fiber Gleen</span></strong>&nbsp;ก็จะมีเส้นใยชนิดละลายน้ำ ที่ช่วยเพิ่มกากใย เพิ่มประสิทธิภาพการขับถ่าย และมีคุณสมบัติเป็น Prebiotic ช่วยเพิ่มปริมาณจุลินทรีย์ชนิดที่ดีให้ร่างกายค่ะ นอกจากนั้น ก็ยังมีไกลซีนที่เป็นกรดอะมิโนที่ช่วยการทำงานของระบบประสาท มี Psyllium seed husk&nbsp; (เมล็ดของเทียนเกล็ดหอย) ที่ช่วยเกี่ยวกับทำให้ระบบช่องท้องเราทำงานได้ดีค่ะ</p>\r\n<p>คืออย่างที่บอกส่วนประกอบเยอะมากกสำหรับไฟเบอร์ตัวนี้ เอาเป็นว่าโดยรวมคือช่วยเกี่ยวกับระบบขับถ่าย ระบบทางเดินอาหารค่ะ</p>\r\n<p>ซึ่ง<span style="color: #99cc00;"><strong>รสชาติ</strong></span>ของเจ้าตัวนี้ ไม่แย่ค่ะ&nbsp; อร่อยเลยล่ะ สดชื่นมากก จะออกเป็นกลิ่นแอปเปิ้ล มีรสชาติหวาน&nbsp; แต่ความหวานไม่ได้มาจากน้ำตาลนะคะ ตอนแรกแอบกลัวๆเหมือนกัน ว่ากินไฟเบอร์หวานขนาดนี้ น้ำตาลพุ่งแน่นอน แต่เปล่าค่ะ เค้าใช้ชูคราโรสเป็นสารให้ความหวานแทนน้ำตาลค่ะ</p>\r\n<p><img class="alignnone wp-image-139" src="http://taste-naked.com/wp-content/uploads/2016/12/SLC1.jpg" alt="slc1" width="537" height="911" /></p>\r\n<p>จากที่พราวได้ทดลองทานมาสองอาทิตย์ ก็โอเคเลยค่ะ ตอนแรกกลัวมากว่าทานแล้ววันถัดมาจะปวดท้องหนักมั้ย หรือจะรู้สึกปวดแบบมากๆๆเหมือนท้องเสียรึเปล่า ปรากฏว่าไม่ค่ะ คือมันส่งผลแค่พราวสามารถถ่ายได้ทุกวัน โดยที่รู้สึกปวด รู้สึกอยากขับถ่าย แล้วก็ขับถ่ายได้คล่องไม่ท้องผูกค่ะ&nbsp; คือแอบดีใจที่มันทำให้ระบบขับถ่ายเราค่อนข้างปกติ ไม่มีปัญหา พอถ่ายคล่องได้ก็สบายดีค่ะ ท้องไม่ผูก ไม่ป่องๆ แล้วก็ไม่อึดอัด&nbsp; ปกติพราวถ่ายสองสามวันครั้ง พอไม่ได้ถ่ายก็จะอืดค่ะ ไม่สบายตัว จัดว่าโอเคเลยค่ะตัวนี้&nbsp; เพราะ<span style="color: #99cc00;"><strong>นอกจากไฟเบอร์แล้ว ยังได้ประโยชน์จากสารอาหารอื่นๆ</strong></span>ที่เขาใส่มาด้วย ถึงจะไม่ได้แบบเยอะมาก แต่เราก็รู้สึกว่ามันได้ประโยชน์ ดีต่อใจค่ะ :)</p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #99cc00;"><strong>Fiber Gleen</strong></span><br />iWish A Product by slc</p>\r\n<p>รายละเอียดสินค้า &nbsp;<a href="http://www.iwish.co.th/product_inside.php?product_id=5">http://www.iwish.co.th/product_inside.php?product_id=5</a></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'article_main-5.jpg', '2016-12-23', 'true', 'open', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bmiinformation`
--

CREATE TABLE IF NOT EXISTS `bmiinformation` (
  `bmiId` int(11) NOT NULL AUTO_INCREMENT,
  `bmiName` varchar(255) NOT NULL,
  `bmiDescription` text NOT NULL,
  `bmiImagePath` varchar(255) NOT NULL,
  `bmiRange` varchar(255) NOT NULL,
  PRIMARY KEY (`bmiId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bmiinformation`
--

INSERT INTO `bmiinformation` (`bmiId`, `bmiName`, `bmiDescription`, `bmiImagePath`, `bmiRange`) VALUES
(1, 'BMI LESS THAN STANDARD', '<p>สำหรับผู้ที่ <strong>BMI น้อยกว่าเกณฑ์</strong> คือมีน้ำหนักน้อยเกินไป <br />ซึ่งอาจจะเกิดจากนักกีฬาที่ออกกำลังกายมากหรือผู้ที่ได้รับสารอาหารไม่เพียงพอ <br />วิธีแก้ไขต้องรับประทานอาหารที่มีคุณภาพ และมีปริมาณพลังงานเพียงพอ <br />และออกกำลังกายอย่างเหมาะสมโดยเน้นสร้างกล้ามเนื้อ</p>\r\n<p>สาเหตุของการมีน้ำหนักต่ำกว่าเกณฑ์มาตรฐานอาจมาจากระบบการเผาผลาญในร่างกายทำงานผิดปกติ <br />หรือมีสาเหตุมาจากพันธุกรรม หากคุณเป็นคนหนึ่งที่มีน้ำหนักน้อยกว่าเกณฑ์มาตรฐาน และต้องการที่จะเพิ่มน้ำหนัก <br />คุณจำเป็นที่จะต้องปรับเปลี่ยนพฤติกรรมในชีวิตประจำวัน <br />บางคนอาจคิดว่าจะไม่สามารถเพิ่มน้ำหนักได้เพราะเป็นเรื่องของพันธุกรรม<br /> จึงหยุดที่จะรับประทานอาหารและออกกำลังกายเพื่อเพิ่มน้ำหนัก ซึ่งนั่นไม่ใช่เรื่องที่ถูกต้อง</p>', 'bmi_main-1.jpg', '< 18.50'),
(2, 'BMI ON STANDARD', '<p>สำหรับผู้ที่มีค่า BMI อยู่ระหว่าง 18.50 - 23.0 คุณมีน้ำหนักปกติ<br />และมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย เบาหวานหรือความดัน<br />ควรออกกำลังกายเพิ่มความแข็งแรง<br />และทานอาหารที่มีประโยชน์</p>', 'bmi_main-2.jpg', '>= 18.50 AND < 23'),
(3, 'BMI MORE THAN STANDARD', '<p>คุณเริ่มมีน้ำหนักเกินเกณฑ์มาตรฐาน&nbsp;<br />เมื่อ BMI &gt; 23 ควรควบคุมอาหารและออกกำลังกายอย่างจริงจัง<br />เพื่อลดน้ำหนัก รักษาสุขภาพ&nbsp;<br />ไม่เช่นนั้นจะเสี่ยงต่อโรคอ้วน เบาหวาน ความดัน</p>', 'bmi_main-3.jpg', '>= 23');

-- --------------------------------------------------------

--
-- Table structure for table `centralcontent`
--

CREATE TABLE IF NOT EXISTS `centralcontent` (
  `centralContentId` int(11) NOT NULL AUTO_INCREMENT,
  `centralContentPage` varchar(255) NOT NULL,
  `centralContentSection` varchar(255) NOT NULL,
  `centralContentText` text NOT NULL,
  PRIMARY KEY (`centralContentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `centralcontent`
--

INSERT INTO `centralcontent` (`centralContentId`, `centralContentPage`, `centralContentSection`, `centralContentText`) VALUES
(1, 'HOME', 'PLAN4U', '<p>เลือกแพลนออกกำลังกายท่ีเหมาะสำหรับตัวคุณ<br />เราออกแบบให้ไม่ว่าจะเป็นมื้ออาหาร การออกกำลังกาย :)<br />หรือหากยังไม่ทราบดัชนีมวลกายที่เหมาะสำหรับตัวเอง&nbsp;ก็คำนวณได้เลยค่ะ !</p>'),
(3, 'WORKOUT', 'WEIGHTTRAINING', '<p>เวทเทรนนิ่ง (Weight Training)<br />เป็นการออกกำลังกายประเภทเสริมสร้างกล้ามเนื้อ<br />ช่วยเพิ่มอัตราการเผาผลาญ<br />ทำให้รูปร่างสวย กระชับ ได้รูป<br />เรามีท่าเวทเทรนนิ่งมากกว่า 30 ท่า<br />ให้คุณได้ลองเลือกทำค่ะ&nbsp;</p>'),
(4, 'WORKOUT', 'CARDIO', '<p>ออกกำลังกายกันเป็นโปรแกรม<br />กระตุ้นหัวใจกันด้วย Weight Traninng x Cardio<br />เพิ่มความแข็งแรงให้กับกล้ามเนื้อ<br />พร้อมกับเผาผลาญไขมันแบบสุดๆ !<br />ง่ายๆแค่ทำตามคลิปของเราค่ะ&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `centralmediacontent`
--

CREATE TABLE IF NOT EXISTS `centralmediacontent` (
  `centralMediaId` int(11) NOT NULL AUTO_INCREMENT,
  `centralMediaPage` varchar(255) NOT NULL,
  `centralMediaSection` varchar(255) NOT NULL,
  `centralMediaType` varchar(255) NOT NULL,
  `centralMediaPath` varchar(255) NOT NULL,
  PRIMARY KEY (`centralMediaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `centralmediacontent`
--

INSERT INTO `centralmediacontent` (`centralMediaId`, `centralMediaPage`, `centralMediaSection`, `centralMediaType`, `centralMediaPath`) VALUES
(1, 'HOME', 'HEAD', 'VDO', 'GS3TDpJTLW8'),
(2, 'HOME', 'FOOTER', 'VDO', 'MWYpI8kJEBw'),
(3, 'FOODIE', 'HEAD', 'VDO', 'DCuRsn8_LMI'),
(4, 'WORKOUT', 'HEAD', 'VDO', 'MWYpI8kJEBw'),
(5, 'HOME', 'HEAD', 'IMAGE', 'centralcontent_main-5.jpg'),
(6, 'PLAN4U', 'HEAD', 'IMAGE', 'centralcontent_main-6.jpg'),
(7, 'WORKOUT', 'HEAD', 'IMAGE', 'centralcontent_main-7.jpg'),
(8, 'HOME', 'MENU', 'IMAGE', 'centralcontent_main-8.jpg'),
(9, 'FOODIE', 'MENU', 'IMAGE', 'centralcontent_main-9.jpg'),
(10, 'FOODIE', 'MENU', 'IMAGE', 'centralcontent_main-10.jpg'),
(11, 'FOODIE', 'MENU', 'IMAGE', 'centralcontent_main-11.jpg'),
(12, 'FOODIE', 'MENU', 'IMAGE', 'centralcontent_main-12.jpg'),
(13, 'ARTICLE', 'MENU', 'IMAGE', 'centralcontent_main-13.jpg'),
(14, 'ARTICLE', 'MENU', 'IMAGE', 'centralcontent_main-14.jpg'),
(15, 'ARTICLE', 'MENU', 'IMAGE', 'centralcontent_main-15.jpg'),
(16, 'ARTICLE', 'MENU', 'IMAGE', 'centralcontent_main-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foodie`
--

CREATE TABLE IF NOT EXISTS `foodie` (
  `foodieId` int(11) NOT NULL AUTO_INCREMENT,
  `foodieName` varchar(255) NOT NULL,
  `foodieType` varchar(255) NOT NULL,
  `shortDescription` text NOT NULL,
  `foodieDescription` text NOT NULL,
  `ingredient` text NOT NULL,
  `procedures` text NOT NULL,
  `foodieImagePath` text NOT NULL,
  `foodieVdoPath` varchar(255) NOT NULL,
  `isRecommend` varchar(10) NOT NULL,
  `foodieStatus` varchar(10) NOT NULL,
  `foodieView` int(11) NOT NULL,
  PRIMARY KEY (`foodieId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `foodie`
--

INSERT INTO `foodie` (`foodieId`, `foodieName`, `foodieType`, `shortDescription`, `foodieDescription`, `ingredient`, `procedures`, `foodieImagePath`, `foodieVdoPath`, `isRecommend`, `foodieStatus`, `foodieView`) VALUES
(1, 'กุ้งมะนาวแสนหวานนนน', 'savory', '<h6>กุ้งมะนาวสุดแซบบบบบ</h6>', '<p>KCAL - 1100 KCAL <br />ETC - Delivering fast and excellent results <br />ETC - Satisfied clients thanks to our experienceeeee</p>', '<p>&bull; กุ้งขาว (แกะเปลือกผ่าหลัง) &bull; รากผักชีสับละเอียด 3 ช้อนโต๊ะ &bull; กระเทียมสับละเอียด 3 ช้อนโต๊ะ &bull; พริกขี้หนูสับละเอียด 2 ช้อนโต๊ะ &bull; น้ำมะนาว 3 ช้อนโต๊ะ &bull; น้ำปลา 3 ช้อนโต๊ะ &bull; น้ำตาลทราย 1 ช้อนชาาาาาาาา &bull; ก้านคะน้าและแครอท แช่น้ำเย็นจัดดดดด</p>', '<p>&bull; 1. ลวกกุ้ง โดยตั้งน้ำให้เดือดจัด ใส่กุ้งลงไปลวก พอกุ้งเริ่มเปลี่ยนสี หรือประมาณ 5-10 วินาที ให้รีบตักขึ้นทันที จะสุกพอดีและกุ้งไม่หด (ในน้ำลวกกุ้งใส่ใบโหระพาไปนิดจะหอมมากค่ะ ^^) &bull; 2. ทำน้ำจิ้ม โดยนำน้ำมะนาว น้ำปลา และน้ำตาลทราย คนผสมให้น้ำตาลละลาย จากนั้นชิมรส ถ้าจัดเกินไปจะเติมน้ำซุปจากการลวกกุ้งนิดหน่อยก็ได้ค่ะเมื่อได้รสที่ชอบแล้ว ใส่กระเทียมรากผักชี และพริกขี้หนูสับตามลงไป เสิร์ฟคู่กับก้านคะน้า และแครรอทแช่เย็นนนนนน</p>', 'foodie_main-1.jpg', 'kROoQ46RcAA', 'false', 'close', 13),
(2, 'หมูมะนาว', 'savory', '                                                    หมูมะนาวสุดแซบ                                                ', '                                                    KCAL - 1100 KCAL <br>ETC - Delivering fast and excellent results <br>ETC - Satisfied clients thanks to our experience                                                ', '                                                    • หมูแดง (แกะเปลือกผ่าหลัง)\r\n• รากผักชีสับละเอียด 3 ช้อนโต๊ะ\r\n• กระเทียมสับละเอียด 3 ช้อนโต๊ะ\r\n• พริกขี้หนูสับละเอียด 2 ช้อนโต๊ะ\r\n• น้ำมะนาว 3 ช้อนโต๊ะ\r\n• น้ำปลา 3 ช้อนโต๊ะ\r\n• น้ำตาลทราย 1 ช้อนชา\r\n• ก้านคะน้าและแครอท แช่น้ำเย็นจัด\r\n                                                ', '                                                    • 1. ลวกหมู โดยตั้งน้ำให้เดือดจัด ใส่กุ้งลงไปลวก พอกุ้งเริ่มเปลี่ยนสี หรือประมาณ 5-10 วินาที ให้รีบตักขึ้นทันที จะสุกพอดีและกุ้งไม่หด (ในน้ำลวกกุ้งใส่ใบโหระพาไปนิดจะหอมมากค่ะ ^^)\r\n• 2. ทำน้ำจิ้ม โดยนำน้ำมะนาว น้ำปลา และน้ำตาลทราย คนผสมให้น้ำตาลละลาย จากนั้นชิมรส ถ้าจัดเกินไปจะเติมน้ำซุปจากการลวกกุ้งนิดหน่อยก็ได้ค่ะเมื่อได้รสที่ชอบแล้ว ใส่กระเทียมรากผักชี และพริกขี้หนูสับตามลงไป เสิร์ฟคู่กับก้านคะน้า และแครรอทแช่เย็น                                                ', 'http://www.clipmass.com/upload/news/109/108935_full.jpg', 'oW7hl-MMQgY', 'false', 'close', 3),
(3, 'ทองหยอด', 'savory', '                                                                                                                                                                                                                                                                    ทองหยอดแสนหวาน                                                                                                                                                                                                                                                ', '                                                                                                                                                                                                                                                                    KCAL - 1100 KCAL <br>ETC - Delivering fast and excellent results <br>ETC - Satisfied clients thanks to our experience                                                                                                                                                                                                                                                ', '                                                                                                                                                                                                                                                                    • ทองหยอด (แกะเปลือกผ่าหลัง)\r\n• รากผักชีสับละเอียด 3 ช้อนโต๊ะ\r\n• กระเทียมสับละเอียด 3 ช้อนโต๊ะ\r\n• พริกขี้หนูสับละเอียด 2 ช้อนโต๊ะ\r\n• น้ำมะนาว 3 ช้อนโต๊ะ\r\n• น้ำปลา 3 ช้อนโต๊ะ\r\n• น้ำตาลทราย 1 ช้อนชา\r\n• ก้านคะน้าและแครอท แช่น้ำเย็นจัด\r\n                                                                                                                                                                                                                                                ', '                                                                                                                                                                                                                                                                    • 1.ลวกทองหยอด โดยตั้งน้ำให้เดือดจัด ใส่กุ้งลงไปลวก พอกุ้งเริ่มเปลี่ยนสี หรือประมาณ 5-10 วินาที ให้รีบตักขึ้นทันที จะสุกพอดีและกุ้งไม่หด (ในน้ำลวกกุ้งใส่ใบโหระพาไปนิดจะหอมมากค่ะ ^^)\r\n• 2. ทำน้ำจิ้ม โดยนำน้ำมะนาว น้ำปลา และน้ำตาลทราย คนผสมให้น้ำตาลละลาย จากนั้นชิมรส ถ้าจัดเกินไปจะเติมน้ำซุปจากการลวกกุ้งนิดหน่อยก็ได้ค่ะเมื่อได้รสที่ชอบแล้ว ใส่กระเทียมรากผักชี และพริกขี้หนูสับตามลงไป เสิร์ฟคู่กับก้านคะน้า และแครรอทแช่เย็น                                                                                                                                                                                                                                                ', 'foodie_main-3.jpg', 'Y9Kya5OIq1k', 'false', 'close', 0),
(4, 'แซนวิส', 'dessert', '<p>แซนวิสแสนหวาน</p>', '<p>KCAL - 1100 KCAL <br />ETC - Delivering fast and excellent results <br />ETC - Satisfied clients thanks to our experience</p>', '<p>&bull; แซนวิส (แกะเปลือกผ่าหลัง) &bull; รากผักชีสับละเอียด 3 ช้อนโต๊ะ &bull; กระเทียมสับละเอียด 3 ช้อนโต๊ะ &bull; พริกขี้หนูสับละเอียด 2 ช้อนโต๊ะ &bull; น้ำมะนาว 3 ช้อนโต๊ะ &bull; น้ำปลา 3 ช้อนโต๊ะ &bull; น้ำตาลทราย 1 ช้อนชา &bull; ก้านคะน้าและแครอท แช่น้ำเย็นจัด</p>', '<p>&bull; 1.ลวกแซนวิส โดยตั้งน้ำให้เดือดจัด ใส่กุ้งลงไปลวก พอกุ้งเริ่มเปลี่ยนสี หรือประมาณ 5-10 วินาที ให้รีบตักขึ้นทันที จะสุกพอดีและกุ้งไม่หด (ในน้ำลวกกุ้งใส่ใบโหระพาไปนิดจะหอมมากค่ะ ^^) &bull; 2. ทำน้ำจิ้ม โดยนำน้ำมะนาว น้ำปลา และน้ำตาลทราย คนผสมให้น้ำตาลละลาย จากนั้นชิมรส ถ้าจัดเกินไปจะเติมน้ำซุปจากการลวกกุ้งนิดหน่อยก็ได้ค่ะเมื่อได้รสที่ชอบแล้ว ใส่กระเทียมรากผักชี และพริกขี้หนูสับตามลงไป เสิร์ฟคู่กับก้านคะน้า และแครรอทแช่เย็น</p>', 'foodie_main-4.jpg', 'FQ_d_RX-0rM', 'false', 'close', 2),
(5, 'น้ำส้ม', 'drink', 'น้ำส้มแสนหวาน', 'KCAL - 1100 KCAL <br>ETC - Delivering fast and excellent results <br>ETC - Satisfied clients thanks to our experience', '• น้ำส้ม (แกะเปลือกผ่าหลัง)\r\n• รากผักชีสับละเอียด 3 ช้อนโต๊ะ\r\n• กระเทียมสับละเอียด 3 ช้อนโต๊ะ\r\n• พริกขี้หนูสับละเอียด 2 ช้อนโต๊ะ\r\n• น้ำมะนาว 3 ช้อนโต๊ะ\r\n• น้ำปลา 3 ช้อนโต๊ะ\r\n• น้ำตาลทราย 1 ช้อนชา\r\n• ก้านคะน้าและแครอท แช่น้ำเย็นจัด\r\n', '• 1. โดยตั้งน้ำให้เดือดจัด ใส่กุ้งลงไปลวก พอกุ้งเริ่มเปลี่ยนสี หรือประมาณ 5-10 วินาที ให้รีบตักขึ้นทันที จะสุกพอดีและกุ้งไม่หด (ในน้ำลวกกุ้งใส่ใบโหระพาไปนิดจะหอมมากค่ะ ^^)\r\n• 2. ทำน้ำจิ้ม โดยนำน้ำมะนาว น้ำปลา และน้ำตาลทราย คนผสมให้น้ำตาลละลาย จากนั้นชิมรส ถ้าจัดเกินไปจะเติมน้ำซุปจากการลวกกุ้งนิดหน่อยก็ได้ค่ะเมื่อได้รสที่ชอบแล้ว ใส่กระเทียมรากผักชี และพริกขี้หนูสับตามลงไป เสิร์ฟคู่กับก้านคะน้า และแครรอทแช่เย็น', 'http://www.innovacion.gob.sv/inventa/images/stories/MayoAYB2015/jugo_naranja.jpg', 'QJNwJAkAxKg', 'false', 'close', 0),
(6, 'แกงไตปลา', 'savory', '                                                    แกงไตปลา แกงไตปลา แกงไตปลา                                                ', '                                                    แกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลาแกงไตปลา                                                ', '                                                    • กุ้งขาว (แกะเปลือกผ่าหลัง) • รากผักชีสับละเอียด 3 ช้อนโต๊ะ • กระเทียมสับละเอียด 3 ช้อนโต๊ะ • พริกขี้หนูสับละเอียด 2 ช้อนโต๊ะ • น้ำมะนาว 3 ช้อนโต๊ะ • น้ำปลา 3 ช้อนโต๊ะ • น้ำตาลทราย 1 ช้อนชาาาาาาาา • ก้านคะน้าและแครอท แช่น้ำเย็นจัดดดดด                                                 ', '                                                    • 1. ลวกกุ้ง โดยตั้งน้ำให้เดือดจัด ใส่กุ้งลงไปลวก พอกุ้งเริ่มเปลี่ยนสี หรือประมาณ 5-10 วินาที ให้รีบตักขึ้นทันที จะสุกพอดีและกุ้งไม่หด (ในน้ำลวกกุ้งใส่ใบโหระพาไปนิดจะหอมมากค่ะ ^^) • 2. ทำน้ำจิ้ม โดยนำน้ำมะนาว น้ำปลา และน้ำตาลทราย คนผสมให้น้ำตาลละลาย จากนั้นชิมรส ถ้าจัดเกินไปจะเติมน้ำซุปจากการลวกกุ้งนิดหน่อยก็ได้ค่ะเมื่อได้รสที่ชอบแล้ว ใส่กระเทียมรากผักชี และพริกขี้หนูสับตามลงไป เสิร์ฟคู่กับก้านคะน้า และแครรอทแช่เย็นนนนนน                                                 ', 'foodie_main-6.jpg', 'Cn6gPZC5LjE', 'false', 'close', 0),
(7, 'สเต็กไก่', 'savory', 'สเต็กไก่ สเต็กไก่ สเต็กไก่ ', 'สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ ', 'สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ ', 'สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ สเต็กไก่ ', 'foodie_main-7.JPG', 'S5qsHY25ok4', 'false', 'close', 0),
(8, 'น้ำมะนาว', 'drink', 'น้ำมะนาว น้ำมะนาว น้ำมะนาว ', 'น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว ', 'น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว ', 'น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว น้ำมะนาว ', 'foodie_main-8.jpg', '7cN1JZIdf1Y', 'false', 'close', 0),
(9, 'ขนมเทียนไส้เค็ม', 'savory', '<p>Short description ขนมเทียน</p>', '<p>description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน</p>', '<p>ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน</p>', '<p>การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน</p>', 'foodie_main-9.jpg', 'KWOjqpBjbm8', 'false', 'close', 10),
(10, 'ขนมเทียนไส้เค็ม2', 'savory', '<p>Short description ขนมเทียน</p>', '<p>description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน</p>', '<p>ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน</p>', '<p>การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน</p>', 'foodie_main-10.jpg', 'KWOjqpBjbm8', 'false', 'close', 7),
(11, 'ขนมเทียนไส้เค็ม3', 'savory', '                                                    Short description ขนมเทียน                                                ', '                                                    description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน                                                 ', '                                                    ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน                                                 ', '                                                    การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน                                                 ', 'foodie_main-11.jpg', 'KWOjqpBjbm8', 'false', 'close', 1),
(12, 'ขนมเทียนไส้เค็ม4', 'savory', '                                                    Short description ขนมเทียน                                                ', '                                                    description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน description ขนมเทียน                                                 ', '                                                    ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน ส่วนผสม ขนมเทียน                                                 ', '                                                    การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน การทำ ขนมเทียน                                                 ', 'foodie_main-12.jpg', 'KWOjqpBjbm8', 'false', 'close', 0),
(13, 'banana', 'savory', '<p>11</p>', '<p>11</p>', '<p>11</p>', '<p>11</p>', 'foodie_main-16.jpg', '11', 'false', 'close', 10),
(14, 'test', 'dessert', '<p>Test Description</p>', '<p>Test Description</p>', '<p>Test Description</p>', '<p>Test Description</p>', 'foodie_main-14.jpg', '', 'false', 'close', 6),
(15, 'FOOD test', 'dessert', '<p>111</p>', '<p>111</p>', '<p>111</p>', '<p>111</p>', 'foodie_main-15.jpg', '', 'false', 'close', 1),
(16, '3 Ingredient banana pancake', 'dessert', '<p>บาน่น่า</p>', '<p>บานาน่า</p>', '<p>กล้วย</p>', '<p>กล้วย</p>', 'foodie_main-16.jpg', 'KWOjqpBjbm8', 'false', 'close', 2),
(17, 'กก', 'savory', '<p>xx</p>', '<p>xx</p>', '<p>xx</p>', '<p>xx</p>', '', 'xx', 'false', 'close', 1),
(18, 'กก', 'savory', '<p>กก</p>', '<p>ก</p>', '<p>กก</p>', '<p>กก</p>', 'foodie_main-18.jpg', '', 'false', 'close', 5),
(19, 'test01', 'savory', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', 'foodie_main-19.jpg', 'test', 'false', 'close', 2),
(20, 'BananaPancake', 'dessert', '<p>ทดสอบ</p>', '<p>ทดสอบ</p>', '<p>ทดสอบ</p>', '<p>ทดสอบ</p>', 'foodie_main-20.jpg', 'g3MFZZBikoQ', 'false', 'close', 15),
(21, 'Banana Pancake', 'dessert', '<p>3 Ingredient Banana Oatmeal Pancake<br />แพนเค้กกล้วยหอมไข่ ไร้แป้ง<br />อร่อยจนลืมไปเลยค่ะว่าเป็นเมนูเฮลตี้ ! &nbsp;240 แคลอรี่</p>', '<p>3 Ingredient Banana Oatmeal Pancake<br />แพนเค้กกล้วยหอมไข่ ไร้แป้ง<br />อีกเมนูทำง่ายเหมาะสำหรับทุกวัน ทุกเพศ ทุกวัย<br />อร่อยจนลืมไปเลยค่ะว่าเป็นเมนูเฮลตี้ !</p>\r\n<p>240 KCAL&nbsp;</p>', '<p>1.กล้วยหอมงอม 1 ลูก<br />2.ไข่ไก่ 1 ฟอง<br />3.แป้งข้าวโอ๊ต 2 ช้อนโต๊ะ</p>', '<p>1.บดกล้วยให้เนื้อเนียนเข้ากัน<br />2.ตอกไข่ลงไป ผสมให้เข้ากัน<br />3.ใส่ข้าวโอ๊ตลงไป ผสมให้เข้ากันก่อนจะนำไปทอดไฟอ่อน<br />4.ทอดให้สุก ขึ้นฟองอากาศทีละด้าน ก่อนจะพลิก รอสุกสองด้าน ตักเสิร์ฟ</p>', 'foodie_main-21.jpg', 'bV555idmKag', 'true', 'open', 21),
(22, 'Whole wheat crepe with mix fruit', 'dessert', '<p>Whole wheat crepe with mix fruit</p>', '<p>Whole wheat crepe with mix fruit</p>', '<p>1.ไข่ 2 ฟอง<br />2.แป้งโฮลวีท 1 ช้อนโต๊ะ<br />3.วนิลา 1 ช้อนชา<br />4.ผงฟู 1 ช้อนชา</p>\r\n<p>&nbsp;</p>', '<p>1.ผสมส่วนผสมทั้งหมดให้เข้ากันหรือจะปั่นรวมก็ได้ รอ 5-10 นาที<br />2.ตั้งกระทะ ใช้ไฟอ่อนที่สุด ทาเนยหรือน้ำมันบางๆ<br />3.ทอดเครปทีละแผ่น เทส่วนผสมลงตรงกลาง ค่อยๆกลิ้งกระทะเกลี่ยให้เครปเต็มแผ่น<br />4.รอจนสุก กลับด้าน แล้วตักขึ้นพักไว้ ทอดจนครบ<br />5.นำเสิร์ฟในรูปแบบที่ชอบ ทานคู่ผลไม้หรือน้ำผึ้งจะอร่อยมากๆ</p>', 'foodie_main-22.jpg', 'LuDeANBbwPU', 'false', 'close', 12),
(23, 'Whole wheat crepe with mix fruit', 'dessert', '<p>Whole wheat crepe with mix fruit<br />เครปโฮลวีตไข่ ทานคู่กับผลไม้และน้ำผึ้ง<br />คนที่ชอบทานเครปต้องไม่พลาดเมนูนี้ค่ะ 80 แคลอรี่ต่อแผ่นเท่านั้น</p>\r\n<div>&nbsp;</div>', '<p>Whole wheat crepe with mix fruit<br />เครปโฮลวีตไข่ ทานคู่กับผลไม้และน้ำผึ้ง<br />คนที่ชอบทานเครปต้องไม่พลาดเมนูนี้ค่ะ 80 แคลอรี่ต่อแผ่นเท่านั้น</p>\r\n<div>&nbsp;</div>', '<p>1.ไข่ 2 ฟอง</p>\r\n<p>2.แป้งโฮลวีท 1 ช้อนโต๊ะ</p>\r\n<p>3.วนิลา 1 ช้อนชา</p>\r\n<p>4.ผงฟู 1 ช้อนชา</p>\r\n<div>&nbsp;</div>', '<p>1.ผสมส่วนผสมทั้งหมดให้เข้ากันหรือจะปั่นรวมก็ได้ รอ 5-10 นาที</p>\r\n<p>2.ตั้งกระทะ ใช้ไฟอ่อนที่สุด ทาเนยหรือน้ำมันบางๆ</p>\r\n<p>3.ทอดเครปทีละแผ่น เทส่วนผสมลงตรงกลาง ค่อยๆกลิ้งกระทะเกลี่ยให้เครปเต็มแผ่น</p>\r\n<p>4.รอจนสุก กลับด้าน แล้วตักขึ้นพักไว้ ทอดจนครบ</p>\r\n<p>5.นำเสิร์ฟในรูปแบบที่ชอบ ทานคู่ผลไม้หรือน้ำผึ้งจะอร่อยมากๆ</p>', 'foodie_main-23.jpg', 'LuDeANBbwPU', 'true', 'open', 7),
(24, 'ลาบไก่', 'savory', '<p>ลาบไก่ เมนูสุดแซ่บที่พร้อมจะเสริ์ฟโปรตีนให้คุณ</p>', '<p>ลาบไก่ เมนูสุดแซ่บที่พร้อมจะเสริ์ฟโปรตีนให้คุณ</p>', '<p>1.อกไก่สับ 100 กรัม<br /><br />2.ข้าวคั่ว 2 ช้อนโต๊ะ<br /><br />3.หอมแดง ต้นหอม มะกรูดซอย<br /><br />4.พริกป่น<br /><br />5.มะนาว 1 ลูก</p>', '<p>1.รวนไก่ด้วยน้ำร้อนในหม้อพอคลุกขลิก จนสุก<br /><br />2.เทน้ำออก แล้วปรุงรสด้วยมะนาว พริกป่น ข้าวคั่ว <br />หากรู้สึกจืดเกินไป สามารถเติมน้ำตาลหรือน้ำปลาในปริมาณเล็กน้อยได้<br /><br />3.ใส่ผักเครื่องลาบ หอมแดง ต้นหอม มะกรูดซอย<br /><br />4.พร้อมเสิร์ฟ</p>', 'foodie_main-24.jpg', 'qIyuLTtDlag', 'false', 'open', 6),
(25, 'Skinny Blueberry Parfaits ', 'dessert', '<p>บลูเบอรี่ชีสพายที่ไหนจะแค่ 150 แคล!<br />แถมยังถ้วยใหญ่ โปรตีนสูง<br />ได้ประโยชน์จากกรีกโยเกิร์ตและบลูเบอรี่อีกด้วยนะ</p>', '<p>บลูเบอรี่ชีสพายที่ไหนจะแค่ 150 แคล!<br />แถมยังถ้วยใหญ่ โปรตีนสูง<br />ได้ประโยชน์จากกรีกโยเกิร์ตและบลูเบอรี่อีกด้วยนะ</p>', '<p>วัตถุดิบ</p>\r\n<p>1.แครกเกอร์โฮลวีท</p>\r\n<p>2.โยเกิร์ตบลูเบอรี่</p>\r\n<p>3.กรีกโยเกิร์ตรสธรรมชาติ</p>\r\n<p>4.แยมบลูเบอรี่ชนิดไม่ผสมน้ำตาล</p>\r\n<p>5.บลูเบอรี่สด</p>', '<p>1.นำแครกเกอร์โฮลวีทมาใส่ถุง ทุบๆให้ละเอียด</p>\r\n<p>2.ตักฐานแครกเกอร์ลงถ้วย ตามด้วยแยมบลูเบอรี่ โยเกิร์ตแต่ละชนิด ในปริมาณตามชอบ</p>\r\n<p>3.โรยหน้าด้วยแครกเกอร์โฮลวีทที่เหลือ ก่อนจะตกแต่งด้วยบลูเบอรี่</p>', 'foodie_main-25.jpg', 'BxSchr_B91c', 'false', 'open', 3),
(26, 'Savory Oatmeal with cheese n eggs', 'savory', '<p>ข้าวโอ๊ตนุ่มๆ เสริ์ฟร้อนๆคู่กับเชสดาร์ชีส<br />เพิ่มพลังงานและโปรตีนด้วยไข่สดๆ<br />เหมาะกับการทานทั้งมื้อเช้า หรือจะเบาๆมื้อเย็นก็ได้ ในพลังงาน &nbsp;240 แคลอรี่</p>', '<p>ข้าวโอ๊ตนุ่มๆ เสริ์ฟร้อนๆคู่กับเชสดาร์ชีส<br />เพิ่มพลังงานและโปรตีนด้วยไข่สดๆ<br />เหมาะกับการทานทั้งมื้อเช้า หรือจะเบาๆมื้อเย็นก็ได้ ในพลังงาน &nbsp;240 แคลอรี่</p>', '<p>1.ข้าวโอ๊ต 1/2 ถ้วยตวง</p>\r\n<p>2.ไข่ 1 ฟอง</p>\r\n<p>3.เชสดาร์ชีส 2 ช้อนโต๊ะ</p>\r\n<p>4.พริกไทยป่น</p>\r\n<p>5.เกลือป่น</p>\r\n<p>6.ต้นหอม</p>', '<p>1.ตั้งกระทะไฟอ่อนๆ ทาน้ำมันบางๆก่อนจะตอกไข่ลงไป รอจนไข่แดงเกือบสุก ยกออก</p>\r\n<p>2.กะทะใบเดิม เติมน้ำลงไปประมาณ 1 &frac12; ถ้วยตวง รอน้ำเดือด เทข้าวโอ๊ตลงไป</p>\r\n<p>3.ปรุงด้วยเกลือกับพริกไท เคี่ยวไฟอ่อน-กลาง จนข้าวโอ๊ตสุก นิ่ม</p>\r\n<p>4.เทข้าวโอ๊ตใส่ชาม โรยเชสดาร์ชีสสับลงไป ตามด้วยไข่&nbsp;</p>\r\n<p>5.โรยเชสดาร์ชีสและต้นหอมตกแต่ง ตามด้วยพริกไทยก่อนเสิร์ฟอีกครั้ง</p>', 'foodie_main-26.jpg', 'rbB2uDOuW10', 'false', 'open', 1),
(27, 'Tuna Melted Club Sandwich', 'savory', '<p>แซนวิชคู่ ไส้ตู้มๆ ได้โปรตีนสูงจากทูน่า<br />หอมอร่อยด้วยชีส กับขนมปังกริลล์กำลังดี<br />แคลอรี่เพียงแค่ 180 ทานสักคู่ก็ยังสบายๆค่ะ<br /><br /></p>', '<p>แซนวิชคู่ ไส้ตู้มๆ ได้โปรตีนสูงจากทูน่า<br />หอมอร่อยด้วยชีส กับขนมปังกริลล์กำลังดี<br />แคลอรี่เพียงแค่ 180 ทานสักคู่ก็ยังสบายๆค่ะ</p>', '<p>1.ทูน่าในน้ำแร่ 1 กระป๋อง</p>\r\n<p>2.หอมใหญ่สับ 2 ช้อนโต๊ะ</p>\r\n<p>3.แครอทสับ 2 ช้อนโต๊ะ</p>\r\n<p>4.เกลือ</p>\r\n<p>5.พริกไทย</p>\r\n<p>6.น้ำสลัดไขมันต่ำที่ชอบ 1 ช้อนโต๊ะ</p>\r\n<p>7.เชสดาร์ชีสแผ่น ไขมันต่ำ</p>\r\n<p>8.ขนมปังโฮลวีท 2 แผ่น</p>\r\n<p>9.มะเขือเทศ</p>', '<p>1.ผสมทูน่า หอมใหญ่สับ แครอท เกลือ พริกไทยและน้ำสลัดที่ชอบเข้าด้วยกัน คลุกไว้</p>\r\n<p>2.ปิ้งขนมปังโฮลวีทในกระทะ วางเชสดาร์ชีสลงไป ปิ้งให้ละลายติดกับขนมปัง</p>\r\n<p>3.ยกขึ้นพัก วางมะเขือเทศหั่นแว่นบนขนมปัง ตามด้วยสลัดทูน่าที่ผสมไว้</p>\r\n<p>4.ปิดท้ายด้วยขนมปังอีกแผ่น ก่อนหั่นเสิร์ฟ</p>\r\n<p>&nbsp;</p>', 'foodie_main-27.jpg', '2YAKUJa-XdQ', 'false', 'open', 1),
(28, 'Matcha overnight oatmeal', 'dessert', '<p>Matcha overnight oatmeal</p>', '<p>Matcha overnight oatmeal</p>', '<p>1.ข้าวโอ๊ตแบบ Quick oats 45 กรัม</p>\r\n<p>2.นมไขมันต่ำ 250 มิลลิลิตร</p>\r\n<p>3.Chia seed 1/2 ช้อนโต๊ะ</p>\r\n<p>4.ผงชาเขียวมัชฉะ 1/2 ช้อนชา</p>\r\n<p>5.ส่วนผสมอื่นๆตามชอบ เช่น เม็ดมะม่วงหิมพานต์ บลูเบอรี่</p>', '<p>1.นำส่วนผสมทุกอย่าง เทลงชามผสมให้เข้ากัน</p>\r\n<p>2.ปิดฝา หรือใช้พลาสติกคลุมด้านบน นำไปแช่เย็น 1คืน</p>\r\n<p>&nbsp;</p>', 'foodie_main-28.jpg', 'jT1tlJPJ_Ek', 'false', 'close', 0),
(29, 'Salad Spring rolls', 'savory', '<p>Salad Spring rolls&nbsp;<br />สลัดโรลสุดอร่อย ที่ทำให้การทานสลัดเป็นเรื่องง่าย<br />กับพลังงานเบาๆไม่ถึง 300 แคลอรี่</p>', '<p>Salad Spring rolls&nbsp;<br />สลัดโรลสุดอร่อย ที่ทำให้การทานสลัดเป็นเรื่องง่าย<br />กับพลังงานเบาๆไม่ถึง 300 แคลอรี่</p>', '<p>1.ใบเมี่ยงญวน&nbsp;</p>\r\n<p>2.ผักไฮโดรโปนิกส์</p>\r\n<p>3.แครอท</p>\r\n<p>4.หมูยอ ทูน่าหรืออกไก่</p>\r\n<p>5.น้ำจิ้มซีฟู๊ด</p>\r\n<p>6.มายองเนสไขมันต่ำ</p>', '<p>1.หั่นผัก แครอทและส่วนของโปรตีนให้เป็นชิ้นเรียบร้อย</p>\r\n<p>2.นำใบเมี่ยงญวนมาแช่น้ำจนนิ่ม ใช้เวลาไม่นาน</p>\r\n<p>3.วางแผ่นเมี่ยงญวนลงไป ตามด้วยผักและส่วนผสมอื่นๆ</p>\r\n<p>4.ม้วนห่อให้เป็นโรล และหั่นเป็นชิ้นพอดีคำ</p>\r\n<p>5.ผสมน้ำจิ้มซีฟู๊ดกับมายองเนส ในอัตราส่วน 1:1&nbsp;</p>\r\n<p>6.จัดใส่จานเสริฟ์ พร้อมทาน</p>', 'foodie_main-29.jpg', '5g8nJwhLBJw', 'true', 'open', 3),
(30, 'Raw Fit Truffle', 'dessert', '<p>ทรัฟเฟิลบอลอร่อยๆ แถมยังสุขภาพดี<br />ส่งต่อรสชาติช็อคโกแลตอร่อยแบบเฮลตี้<br />กับทรัฟเฟิลบอล 35 แคลอรี่ แถมไม่ต้องผ่านความร้อนด้วยค่ะ</p>', '<p>Raw Fit Truffle<br />ทรัฟเฟิลบอลอร่อยๆ แถมยังสุขภาพดี<br />ส่งต่อรสชาติช็อคโกแลตอร่อยแบบเฮลตี้<br />กับทรัฟเฟิลบอล 35 แคลอรี่ แถมไม่ต้องผ่านความร้อนด้วยค่ะ</p>', '<p>1.ข้าวโอ๊ต 3/4 ถ้วยตวง</p>\r\n<p>2.กล้วยหอม 2 ลูก</p>\r\n<p>3.ผงโกโก้ 2 ช้อนโต๊ะ</p>', '<p>1.ปั่นส่วนผสมทั้งหมดลงในเครื่องปั่นอาหาร</p>\r\n<p>2.นำมาปั้นเป็นก้อนกลม และคลุกผงโกโก้อีกนิดหน่อย</p>\r\n<p>3.แช่ตู้เย็น และสามารถทานได้เลย</p>', 'foodie_main-30.jpg', 'g3MFZZBikoQ', 'false', 'open', 4),
(31, 'ไข่กะทะ', 'savory', '<p>ไข่กะทะแบบโปรตีนสูง ๆ<br />แคลอรี่ 230 แต่ได้ทั้งไข่ ทั้งหมูสันในสับ<br />และเพิ่มรสชาติความอร่อยด้วยถั่วขาวในซอสมะเขือเทศ</p>', '<p>ไข่กะทะแบบโปรตีนสูง ๆ<br />แคลอรี่ 230 แต่ได้ทั้งไข่ ทั้งหมูสันในสับ<br />และเพิ่มรสชาติความอร่อยด้วยถั่วขาวในซอสมะเขือเทศ</p>', '<p>1.ไข่ขาว 3/4 ถ้วยตวง</p>\r\n<p>2.น้ำเปล่า 1 ถ้วยตวง</p>\r\n<p>3.หมูสับ ต้นหอม ขิง พริกไท ตามชอบ</p>\r\n<p>&nbsp;</p>', '<p>1.ต้มน้ำให้เดือด&nbsp;</p>\r\n<p>2.เทไข่ขาวลงไป ลดไฟลงอ่อน ระวังไหม้ที่ก้น ค่อยๆคน</p>\r\n<p>3.พอไข่ขาวสุก ตักเสิร์ฟ โรยหมูสับ ต้นหอม ขิง พริกไท หรือจะเหยาะซีอิ๊วก็ตามชอบ</p>', 'foodie_main-31.jpg', '6IZunUY9WEU', 'false', 'open', 0),
(32, 'อกไก่ผัดพริกแกง', 'savory', '<p>อกไก่ผัดพริกแกงจานโตกับแคลอรี่เพียงแค่ 270<br />คออาหารไทยต้องชอบค่ะ รสชาติจัดจ้าน ถึงใจ&nbsp;<br />แถมยังได้โปรตีนสูงอีกด้วยนะคะ :)</p>', '<p>อกไก่ผัดพริกแกงจานโตกับแคลอรี่เพียงแค่ 270<br />คออาหารไทยต้องชอบค่ะ รสชาติจัดจ้าน ถึงใจ&nbsp;<br />แถมยังได้โปรตีนสูงอีกด้วยนะคะ :)</p>', '<p>วัตถุดิบ</p>\r\n<p>1.อกไก่หั่น 100กรัม</p>\r\n<p>2.พริกแกง</p>\r\n<p>3.นมสด 3 ช้อนโต๊ะ</p>\r\n<p>4.ใบมะกรูด</p>', '<p>1.ตั้งกะทะ ใส่น้ำมันนิดหนึ่งหรือไม่ใส่ก็ได้ แล้วนำพริกแกงลงไปผัดจนพอหอม</p>\r\n<p>2.ใส่อกไก่หั่นไปจนเกือบสุกดี เติมนมสดลงไป ผัดต่อจนนมสดเริ่มงวด</p>\r\n<p>3.ใส่ใบมะกรูดที่หั่นไว้ลงไป ตักเสริ์ฟพร้อมข้าวกล้อง</p>', 'foodie_main-32.jpg', 'HbzKMK4JlJE', 'true', 'open', 7);
INSERT INTO `foodie` (`foodieId`, `foodieName`, `foodieType`, `shortDescription`, `foodieDescription`, `ingredient`, `procedures`, `foodieImagePath`, `foodieVdoPath`, `isRecommend`, `foodieStatus`, `foodieView`) VALUES
(33, 'โจ๊กไข่ขาว', 'savory', '<p>สุดยอดโปรตีนจากแหล่งที่ดีที่สุดอย่างไข่ขาว<br />ถ้วยละแค่ &nbsp;80 แคลอรี่ แต่โปรตีนสูงเกือบ 20 กรัม<br />ใครอยากหุ่นดี สุขภาพดี ถ้วยนี้ตอบโจทย์ที่สุดเลยค่ะ</p>', '<p>สุดยอดโปรตีนจากแหล่งที่ดีที่สุดอย่างไข่ขาว<br />ถ้วยละแค่ &nbsp;80 แคลอรี่ แต่โปรตีนสูงเกือบ 20 กรัม<br />ใครอยากหุ่นดี สุขภาพดี ถ้วยนี้ตอบโจทย์ที่สุดเลยค่ะ</p>', '<p>1.ไข่ขาว 3/4 ถ้วยตวง</p>\r\n<p>2.น้ำเปล่า 1 ถ้วยตวง</p>\r\n<p>3.หมูสับ ต้นหอม ขิง พริกไท ตามชอบ</p>', '<p>1.ต้มน้ำให้เดือด&nbsp;</p>\r\n<p>2.เทไข่ขาวลงไป ลดไฟลงอ่อน ระวังไหม้ที่ก้น ค่อยๆคน</p>\r\n<p>3.พอไข่ขาวสุก ตักเสิร์ฟ โรยหมูสับ ต้นหอม ขิง พริกไท หรือจะเหยาะซีอิ๊วก็ตามชอบ</p>', 'foodie_main-33.jpg', 'RCcrGUhicgc', 'false', 'open', 0),
(34, 'ต้มยำอกไก่น้ำใส', 'savory', '<p>ต้มยำทำเองไม่ต้องกลัวโซเดียมสูง<br />ใช้อกไก่เป็นโปรตีน ไขมันต่ำ<br />ราดข้าวกล้องทานร้อนๆ อร่อยได้ใน 150 แคลอรี่</p>', '<p>ต้มยำทำเองไม่ต้องกลัวโซเดียมสูง<br />ใช้อกไก่เป็นโปรตีน ไขมันต่ำ<br />ราดข้าวกล้องทานร้อนๆ อร่อยได้ใน 150 แคลอรี่</p>', '<p>1.อกไก่หั่น&nbsp; 100 กรัม</p>\r\n<p>2.ข่า</p>\r\n<p>3.ตะไคร้</p>\r\n<p>4.ใบมะกรูด</p>\r\n<p>5.พริกแห้ง/พริกสด</p>\r\n<p>6.มะนาว</p>\r\n<p>8.เกลือ</p>\r\n<p>9.น้ำเปล่า/น้ำซุป</p>\r\n<p>10.เห็ดนางฟ้า</p>', '<p>1.ต้มน้ำเปล่า หรือน้ำซุปให้เดือด</p>\r\n<p>2.ใส่ข่า ตะไคร้ ใบมะกรูดและพริกลงไป ปรุงรสด้วยเกลือนิดหน่อย หรืออาจเติมน้ำตาลหากชอบ</p>\r\n<p>3.ใส่ไก่ลงไปต้มจนเกือบสุก ตามด้วยเห็ด</p>\r\n<p>4.ชิมรสชาติอีกครั้ง ก่อนจะยกขึ้นและบีบมะนาว</p>\r\n<p>5.ตกแต่ง พร้อมเสิร์ฟ</p>', 'foodie_main-34.jpg', 'PzVTUq8Oyug', 'false', 'open', 0),
(35, 'สปาเกตตี้ผัดพริกแห้งโหระพา', 'savory', '<p>เส้นโฮลวีตหนึบๆคู่กับไส้กรอกไขมันต่ำ<br />ได้รสอร่อยโดยไม่ต้องปรุงจัดมาก<br />หอมพริกไทยดำ พริกแห้งและใบโหระพา</p>', '<p>เส้นโฮลวีตหนึบๆคู่กับไส้กรอกไขมันต่ำ<br />ได้รสอร่อยโดยไม่ต้องปรุงจัดมาก<br />หอมพริกไทยดำ พริกแห้งและใบโหระพา</p>', '<p>1.ไส้กรอกไขมันต่ำ 1-2 แท่ง</p>\r\n<p>2.เส้นสปาเกตตี้โฮลวีต ปริมาณตามชอบ</p>\r\n<p>3.ใบโหระพา</p>\r\n<p>4.กระเทียมสับ</p>\r\n<p>5.หอมใหญ่สับ</p>\r\n<p>6.พริกแห้ง หั่นแฉลบ</p>\r\n<p>7.พริกไทยดำ</p>\r\n<p>8.เกลือป่น</p>\r\n<p>&nbsp;</p>', '<p>1.ต้มเส้นสปาเกตตี้ตามวิธีข้างซอง จนสุกดี น็อคน้ำเย็นพักไว้</p>\r\n<p>2.ตั้งกะทะ เติมน้ำมันมะกอกได้เล็กน้อย ผัดหอมใหญ่สับ พริกแห้งให้พอหอม</p>\r\n<p>3.ใส่ไส้กรอกลงไปผัด ตามด้วยเส้นสปาเกตตี้</p>\r\n<p>4.ปรุงรสชาติตามเครื่องปรุงต่างๆ ชิมรสจนชอบ</p>\r\n<p>5.ใส่ใบโหระพาลงไปผัด ผัดพอเข้ากัน พร้อมเสริ์ฟ</p>', 'foodie_main-35.jpg', 'pshsnkIU2kE', 'false', 'open', 1),
(36, 'หมูมะนาว', 'savory', '<p>งานแซ่บต้องมา ! ของโปรดใครบ้างคะสำหรับหมูมะนาว<br />ทำเองไม่ต้องใส่เค็ม เน้นเปรี้ยวเผ็ด อร่อยสุดๆ&nbsp;</p>', '<p>งานแซ่บต้องมา ! ของโปรดใครบ้างคะสำหรับหมูมะนาว<br />ทำเองไม่ต้องใส่เค็ม เน้นเปรี้ยวเผ็ด อร่อยสุดๆ&nbsp;</p>', '<p>1.สันในหมูหั่นชิ้น 100 กรัม</p>\r\n<p>2.ก้านคะน้าสด</p>\r\n<p>3.พริกสด กระเทียม</p>\r\n<p>4.กะหล่ำปลี</p>\r\n<p>5.น้ำจิ้มซีฟู๊ด ปริมาณ รสชาติตามชอบ</p>\r\n<p>&nbsp;</p>', '<p>1.หากทำน้ำจิ้มซีฟู๊ดเอง ใช้กระเทียม รากผักชี พริกสด มะนาว น้ำตาล น้ำปลา ปั่นให้เข้ากันในรสชาติตามชอบ&nbsp;</p>\r\n<p>2.ลวกหมูสันในจนสุกพอดี&nbsp;</p>\r\n<p>3.วางกะหล่ำลงไป ตามด้วยหมู ราดน้ำจิ้ม</p>\r\n<p>4.ตกแต่งหน้าด้วยกระเทียม พริกสด พร้อมเสิร์ฟ</p>', 'foodie_main-36.jpg', 'U-gwaXFC5_M', 'false', 'open', 1),
(37, 'test', 'savory', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', 'foodie_main-37.png', 'test', 'false', 'close', 4);

-- --------------------------------------------------------

--
-- Table structure for table `foodieimage`
--

CREATE TABLE IF NOT EXISTS `foodieimage` (
  `foodieImageId` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(255) NOT NULL,
  `foodieId` int(11) NOT NULL,
  PRIMARY KEY (`foodieImageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `foodieimage`
--

INSERT INTO `foodieimage` (`foodieImageId`, `imagePath`, `foodieId`) VALUES
(1, 'foodie_other-1-0.jpg', 1),
(2, 'foodie_other-1-1.jpg', 1),
(3, 'foodie_other-1-2.jpg', 1),
(4, 'foodie_other-1-3.jpg', 1),
(5, 'http://oonanziioo.eu5.org/wp-content/uploads/2014/11/1406791123_369790.jpg', 2),
(6, 'http://www.naibann.com/wp-content/uploads/2016/02/moo-ma-nao-recipe-2.jpg', 2),
(7, 'http://www.diary-of-us.com/tools/immagini/user/13/Chef_XXV/DSC06452(1).JPG', 2),
(8, 'http://f.ptcdn.info/574/001/000/1359083554-Tongyibsma-o.jpg', 3),
(9, 'http://kanombanthongyord.com/wp-content/uploads/2013/01/IMG_1727ab-1020x679.jpg', 3),
(10, 'http://igetweb.com/www/bankanom/gallery/1060910.jpg', 3),
(11, 'http://cdn.superwebsite.com/farm/userfiles/3/38/000016219/562e53a690693742e92ae90b09ef2361.jpg', 4),
(12, 'https://i.ytimg.com/vi/8vouowBkTRs/maxresdefault.jpg', 4),
(13, 'https://i.ytimg.com/vi/Os7HO99LELY/maxresdefault.jpg', 4),
(14, 'http://1.bp.blogspot.com/-vOlL9uYxUFM/UF2H4XRZGRI/AAAAAAAAABU/spTJnr8yatw/s1600/orange-juice.jpeg', 5),
(15, 'http://puechkaset.com/wp-content/uploads/2015/03/%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%AA%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%B1%E0%B9%89%E0%B8%99.jpg', 5),
(16, 'http://waymagazine.org/wp-content/uploads/2014/02/orange-juice.jpg', 5),
(17, 'foodie_other-1-4.jpg', 1),
(18, 'foodie_other-6-0.jpeg', 6),
(19, 'foodie_other-6-1.jpg', 6),
(20, 'foodie_other-7-0.jpg', 7),
(21, 'foodie_other-8-0.jpg', 8),
(22, 'foodie_other-9-0.jpg', 9),
(23, 'foodie_other-9-1.jpg', 9),
(24, 'foodie_other-9-2.jpg', 9),
(25, 'foodie_other-10-0.jpg', 10),
(26, 'foodie_other-10-1.jpg', 10),
(27, 'foodie_other-10-2.jpg', 10),
(28, 'foodie_other-11-0.jpg', 11),
(29, 'foodie_other-11-1.jpg', 11),
(30, 'foodie_other-11-2.jpg', 11),
(31, 'foodie_other-12-0.jpg', 12),
(32, 'foodie_other-12-1.jpg', 12),
(33, 'foodie_other-12-2.jpg', 12),
(34, 'foodie_other-14-0.jpg', 14),
(35, 'foodie_other-15-0.jpg', 15),
(36, 'foodie_other-16-0.png', 16),
(37, 'foodie_other-17-0.jpg', 17),
(38, 'foodie_other-19-0.jpg', 19),
(39, 'foodie_other-20-0.jpg', 20),
(40, 'foodie_other-21-0.jpg', 21),
(41, 'foodie_other-21-1.jpg', 21),
(42, 'foodie_other-21-2.jpg', 21),
(43, 'foodie_other-22-0.jpg', 22),
(44, 'foodie_other-23-0.jpg', 23),
(45, 'foodie_other-23-1.jpg', 23),
(46, 'foodie_other-24-0.jpg', 24),
(47, 'foodie_other-24-1.jpg', 24),
(48, 'foodie_other-24-2.jpg', 24),
(49, 'foodie_other-25-0.jpg', 25),
(50, 'foodie_other-25-1.jpg', 25),
(51, 'foodie_other-26-0.jpg', 26),
(52, 'foodie_other-26-1.jpg', 26),
(53, 'foodie_other-26-2.jpg', 26),
(54, 'foodie_other-27-0.jpg', 27),
(55, 'foodie_other-27-1.jpg', 27),
(56, 'foodie_other-28-0.jpg', 28),
(57, 'foodie_other-28-1.jpg', 28),
(58, 'foodie_other-29-0.jpg', 29),
(59, 'foodie_other-29-1.jpg', 29),
(60, 'foodie_other-30-0.jpg', 30),
(61, 'foodie_other-30-1.jpg', 30),
(62, 'foodie_other-31-0.jpg', 31),
(63, 'foodie_other-31-1.jpg', 31),
(64, 'foodie_other-32-0.jpg', 32),
(65, 'foodie_other-32-1.jpg', 32),
(66, 'foodie_other-33-0.jpg', 33),
(67, 'foodie_other-33-1.jpg', 33),
(68, 'foodie_other-34-0.jpg', 34),
(69, 'foodie_other-34-1.jpg', 34),
(70, 'foodie_other-35-0.jpg', 35),
(71, 'foodie_other-36-0.jpg', 36),
(72, 'foodie_other-37-0.jpg', 37),
(73, 'foodie_other-32-2.jpg', 32),
(74, 'foodie_other-32-3.jpg', 32),
(75, 'foodie_other-32-4.jpg', 32),
(76, 'foodie_other-32-5.jpg', 32),
(77, 'foodie_other-32-6.jpg', 32),
(78, 'foodie_other-30-2.jpg', 30),
(79, 'foodie_other-35-1.jpg', 35),
(80, 'foodie_other-34-2.jpg', 34);

-- --------------------------------------------------------

--
-- Table structure for table `plan4utable`
--

CREATE TABLE IF NOT EXISTS `plan4utable` (
  `tableId` int(11) NOT NULL AUTO_INCREMENT,
  `bmiId` int(11) NOT NULL,
  `planId` int(11) NOT NULL,
  `tableDescription` varchar(255) NOT NULL,
  `plan4uStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`tableId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `plan4utable`
--

INSERT INTO `plan4utable` (`tableId`, `bmiId`, `planId`, `tableDescription`, `plan4uStatus`) VALUES
(1, 1, 1, '<p>แพลนสำหรับคนที่มีน้ำหนักตัวน้อยกว่าเกณฑ์ปกติ<br />จะเน้นการทานอาหารที่ให้พลังงานสูง ทานสารอาหารให้ครบถ้วน<br />ออกกำลังกายเน้น Total body และมี &nbsp;light run &nbsp;โดยการ jogging</p>', 'open'),
(2, 2, 1, '<p>แพลนการทานอาหาร ออกกำลังกายสำหรับคนที่มีน้ำหนักเกณฑ์ปกติ</p>\r\n<p>สำหรับผู้ที่มีค่า BMI อยู่ระหว่าง 18.50 - 23.0 คุณมีน้ำหนักปกติ<br />และมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย เบาหวานหรือความดัน<br />ควรออกกำลังกายเพิ่มความแข็งแรง</p>', 'open'),
(3, 3, 1, '<p>คุณเริ่มมีน้ำหนักเกินเกณฑ์มาตรฐาน&nbsp;<br />เมื่อ BMI &gt; 23 ควรควบคุมอาหารและออกกำลังกายอย่างจริงจัง<br />เพื่อลดน้ำหนัก รักษาสุขภาพ&nbsp;<br />ไม่เช่นนั้นจะเสี่ยงต่อโรคอ้วน เบาหวาน ความดัน<br />ควรทานอาหารและออกกำลังกายตามแพลนนี้ค่ะ&nbsp;</p>', 'open'),
(4, 1, 2, 'less than plan 2', 'open'),
(5, 2, 2, '<p>แพลนการทานอาหาร ออกกำลังกายสำหรับคนที่มีน้ำหนักเกณฑ์ปกติ</p>\r\n<p>สำหรับผู้ที่มีค่า BMI อยู่ระหว่าง 18.50 - 23.0 คุณมีน้ำหนักปกติ<br />และมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย เบาหวานหรือความดัน<br />ควรออกกำลังกายเพิ่มความแข็งแรง</p>', 'open'),
(6, 3, 2, '<p>คุณเริ่มมีน้ำหนักเกินเกณฑ์มาตรฐาน&nbsp;<br />เมื่อ BMI &gt; 23 ควรควบคุมอาหารและออกกำลังกายอย่างจริงจัง<br />เพื่อลดน้ำหนัก รักษาสุขภาพ&nbsp;<br />ไม่เช่นนั้นจะเสี่ยงต่อโรคอ้วน เบาหวาน ความดัน<br />ควรทานอาหารและออกกำลังกายตามแพลนนี้ค่ะ&nbsp;</p>', 'open'),
(7, 1, 3, 'test', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `plan4utabledetail`
--

CREATE TABLE IF NOT EXISTS `plan4utabledetail` (
  `tableId` int(11) NOT NULL,
  `foodieId` int(11) DEFAULT NULL,
  `workoutId` int(11) DEFAULT NULL,
  `itemType` varchar(255) NOT NULL,
  `itemDay` varchar(255) NOT NULL,
  `isFood` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan4utabledetail`
--

INSERT INTO `plan4utabledetail` (`tableId`, `foodieId`, `workoutId`, `itemType`, `itemDay`, `isFood`) VALUES
(1, 32, NULL, 'Breakfast', 'Sunday', 'true'),
(1, 23, NULL, 'Breakfast', 'Monday', 'true'),
(1, 33, NULL, 'Breakfast', 'Tuesday', 'true'),
(1, 21, NULL, 'Breakfast', 'Wednesday', 'true'),
(1, 31, NULL, 'Breakfast', 'Thursday', 'true'),
(1, 32, NULL, 'Breakfast', 'Friday', 'true'),
(1, 27, NULL, 'Breakfast', 'Saturday', 'true'),
(1, 21, NULL, 'Snack', 'Sunday', 'true'),
(1, 30, NULL, 'Snack', 'Monday', 'true'),
(1, 25, NULL, 'Snack', 'Tuesday', 'true'),
(1, 23, NULL, 'Snack', 'Wednesday', 'true'),
(1, 21, NULL, 'Snack', 'Thursday', 'true'),
(1, 29, NULL, 'Snack', 'Friday', 'true'),
(1, 23, NULL, 'Snack', 'Saturday', 'true'),
(1, 23, NULL, 'Lunch', 'Sunday', 'true'),
(1, 35, NULL, 'Lunch', 'Monday', 'true'),
(1, 36, NULL, 'Lunch', 'Tuesday', 'true'),
(1, 26, NULL, 'Lunch', 'Wednesday', 'true'),
(1, 27, NULL, 'Lunch', 'Thursday', 'true'),
(1, 35, NULL, 'Lunch', 'Friday', 'true'),
(1, 32, NULL, 'Lunch', 'Saturday', 'true'),
(1, 27, NULL, 'Dinner', 'Sunday', 'true'),
(1, 26, NULL, 'Dinner', 'Monday', 'true'),
(1, 27, NULL, 'Dinner', 'Tuesday', 'true'),
(1, 31, NULL, 'Dinner', 'Wednesday', 'true'),
(1, 25, NULL, 'Dinner', 'Thursday', 'true'),
(1, 27, NULL, 'Dinner', 'Friday', 'true'),
(1, 35, NULL, 'Dinner', 'Saturday', 'true'),
(1, NULL, 34, 'Workout', 'Sunday', 'false'),
(1, NULL, 41, 'Workout', 'Monday', 'false'),
(1, NULL, 34, 'Workout', 'Tuesday', 'false'),
(1, NULL, 34, 'Workout', 'Wednesday', 'false'),
(1, NULL, 37, 'Workout', 'Thursday', 'false'),
(1, NULL, 41, 'Workout', 'Friday', 'false'),
(1, NULL, 34, 'Workout', 'Saturday', 'false'),
(2, 23, NULL, 'Breakfast', 'Sunday', 'true'),
(2, 21, NULL, 'Breakfast', 'Monday', 'true'),
(2, 26, NULL, 'Breakfast', 'Tuesday', 'true'),
(2, 33, NULL, 'Breakfast', 'Wednesday', 'true'),
(2, 27, NULL, 'Breakfast', 'Thursday', 'true'),
(2, 26, NULL, 'Breakfast', 'Friday', 'true'),
(2, 21, NULL, 'Breakfast', 'Saturday', 'true'),
(2, 30, NULL, 'Snack', 'Sunday', 'true'),
(2, 25, NULL, 'Snack', 'Monday', 'true'),
(2, 23, NULL, 'Snack', 'Tuesday', 'true'),
(2, 21, NULL, 'Snack', 'Wednesday', 'true'),
(2, 30, NULL, 'Snack', 'Thursday', 'true'),
(2, 29, NULL, 'Snack', 'Friday', 'true'),
(2, 21, NULL, 'Snack', 'Saturday', 'true'),
(2, 32, NULL, 'Lunch', 'Sunday', 'true'),
(2, 34, NULL, 'Lunch', 'Monday', 'true'),
(2, 36, NULL, 'Lunch', 'Tuesday', 'true'),
(2, 35, NULL, 'Lunch', 'Wednesday', 'true'),
(2, 32, NULL, 'Lunch', 'Thursday', 'true'),
(2, 35, NULL, 'Lunch', 'Friday', 'true'),
(2, 32, NULL, 'Lunch', 'Saturday', 'true'),
(2, 24, NULL, 'Dinner', 'Sunday', 'true'),
(2, 32, NULL, 'Dinner', 'Monday', 'true'),
(2, 33, NULL, 'Dinner', 'Tuesday', 'true'),
(2, 29, NULL, 'Dinner', 'Wednesday', 'true'),
(2, 34, NULL, 'Dinner', 'Thursday', 'true'),
(2, 23, NULL, 'Dinner', 'Friday', 'true'),
(2, 35, NULL, 'Dinner', 'Saturday', 'true'),
(2, NULL, 34, 'Workout', 'Sunday', 'false'),
(2, NULL, 42, 'Workout', 'Monday', 'false'),
(2, NULL, 34, 'Workout', 'Tuesday', 'false'),
(2, NULL, 38, 'Workout', 'Wednesday', 'false'),
(2, NULL, 34, 'Workout', 'Thursday', 'false'),
(2, NULL, 37, 'Workout', 'Friday', 'false'),
(2, NULL, 41, 'Workout', 'Saturday', 'false'),
(3, 23, NULL, 'Breakfast', 'Sunday', 'true'),
(3, 21, NULL, 'Breakfast', 'Monday', 'true'),
(3, 27, NULL, 'Breakfast', 'Tuesday', 'true'),
(3, 24, NULL, 'Breakfast', 'Wednesday', 'true'),
(3, 32, NULL, 'Breakfast', 'Thursday', 'true'),
(3, 35, NULL, 'Breakfast', 'Friday', 'true'),
(3, 33, NULL, 'Breakfast', 'Saturday', 'true'),
(3, 30, NULL, 'Snack', 'Sunday', 'true'),
(3, 29, NULL, 'Snack', 'Monday', 'true'),
(3, 23, NULL, 'Snack', 'Tuesday', 'true'),
(3, 23, NULL, 'Snack', 'Wednesday', 'true'),
(3, 21, NULL, 'Snack', 'Thursday', 'true'),
(3, 30, NULL, 'Snack', 'Friday', 'true'),
(3, 25, NULL, 'Snack', 'Saturday', 'true'),
(3, 26, NULL, 'Lunch', 'Sunday', 'true'),
(3, 23, NULL, 'Lunch', 'Monday', 'true'),
(3, 29, NULL, 'Lunch', 'Tuesday', 'true'),
(3, 34, NULL, 'Lunch', 'Wednesday', 'true'),
(3, 26, NULL, 'Lunch', 'Thursday', 'true'),
(3, 34, NULL, 'Lunch', 'Friday', 'true'),
(3, 34, NULL, 'Lunch', 'Saturday', 'true'),
(3, 29, NULL, 'Dinner', 'Sunday', 'true'),
(3, 34, NULL, 'Dinner', 'Monday', 'true'),
(3, 30, NULL, 'Dinner', 'Tuesday', 'true'),
(3, 33, NULL, 'Dinner', 'Wednesday', 'true'),
(3, 24, NULL, 'Dinner', 'Thursday', 'true'),
(3, 29, NULL, 'Dinner', 'Friday', 'true'),
(3, 36, NULL, 'Dinner', 'Saturday', 'true'),
(3, NULL, 37, 'Workout', 'Sunday', 'false'),
(3, NULL, 41, 'Workout', 'Monday', 'false'),
(3, NULL, 34, 'Workout', 'Tuesday', 'false'),
(3, NULL, 42, 'Workout', 'Wednesday', 'false'),
(3, NULL, 37, 'Workout', 'Thursday', 'false'),
(3, NULL, 34, 'Workout', 'Friday', 'false'),
(3, NULL, 38, 'Workout', 'Saturday', 'false'),
(4, 2, NULL, 'Breakfast', 'Sunday', 'true'),
(4, 2, NULL, 'Breakfast', 'Monday', 'true'),
(4, 2, NULL, 'Breakfast', 'Tuesday', 'true'),
(4, 2, NULL, 'Breakfast', 'Wednesday', 'true'),
(4, 2, NULL, 'Breakfast', 'Thursday', 'true'),
(4, 2, NULL, 'Breakfast', 'Friday', 'true'),
(4, 2, NULL, 'Breakfast', 'Saturday', 'true'),
(4, 3, NULL, 'Snack', 'Sunday', 'true'),
(4, 3, NULL, 'Snack', 'Monday', 'true'),
(4, 3, NULL, 'Snack', 'Tuesday', 'true'),
(4, 4, NULL, 'Snack', 'Wednesday', 'true'),
(4, 4, NULL, 'Snack', 'Thursday', 'true'),
(4, 3, NULL, 'Snack', 'Friday', 'true'),
(4, 4, NULL, 'Snack', 'Saturday', 'true'),
(4, 1, NULL, 'Lunch', 'Sunday', 'true'),
(4, 1, NULL, 'Lunch', 'Monday', 'true'),
(4, 1, NULL, 'Lunch', 'Tuesday', 'true'),
(4, 1, NULL, 'Lunch', 'Wednesday', 'true'),
(4, 1, NULL, 'Lunch', 'Thursday', 'true'),
(4, 1, NULL, 'Lunch', 'Friday', 'true'),
(4, 1, NULL, 'Lunch', 'Saturday', 'true'),
(4, 1, NULL, 'Dinner', 'Sunday', 'true'),
(4, 1, NULL, 'Dinner', 'Monday', 'true'),
(4, 1, NULL, 'Dinner', 'Tuesday', 'true'),
(4, 2, NULL, 'Dinner', 'Wednesday', 'true'),
(4, 2, NULL, 'Dinner', 'Thursday', 'true'),
(4, 2, NULL, 'Dinner', 'Friday', 'true'),
(4, 1, NULL, 'Dinner', 'Saturday', 'true'),
(4, NULL, 1, 'Workout', 'Sunday', 'false'),
(4, NULL, 4, 'Workout', 'Monday', 'false'),
(4, NULL, 8, 'Workout', 'Tuesday', 'false'),
(4, NULL, 6, 'Workout', 'Wednesday', 'false'),
(4, NULL, 4, 'Workout', 'Thursday', 'false'),
(4, NULL, 6, 'Workout', 'Friday', 'false'),
(4, NULL, 1, 'Workout', 'Saturday', 'false'),
(5, 21, NULL, 'Breakfast', 'Sunday', 'true'),
(5, 29, NULL, 'Snack', 'Sunday', 'true'),
(5, 35, NULL, 'Lunch', 'Sunday', 'true'),
(5, 29, NULL, 'Dinner', 'Sunday', 'true'),
(5, NULL, 34, 'Workout', 'Sunday', 'false'),
(5, 29, NULL, 'Breakfast', 'Monday', 'true'),
(5, 23, NULL, 'Snack', 'Monday', 'true'),
(5, 36, NULL, 'Lunch', 'Monday', 'true'),
(5, 27, NULL, 'Dinner', 'Monday', 'true'),
(5, NULL, 42, 'Workout', 'Monday', 'false'),
(5, 23, NULL, 'Breakfast', 'Tuesday', 'true'),
(5, 30, NULL, 'Snack', 'Tuesday', 'true'),
(5, 33, NULL, 'Lunch', 'Tuesday', 'true'),
(5, 24, NULL, 'Dinner', 'Tuesday', 'true'),
(5, NULL, 34, 'Workout', 'Tuesday', 'false'),
(5, 32, NULL, 'Breakfast', 'Wednesday', 'true'),
(5, 30, NULL, 'Snack', 'Wednesday', 'true'),
(5, 31, NULL, 'Lunch', 'Wednesday', 'true'),
(5, 26, NULL, 'Dinner', 'Wednesday', 'true'),
(5, NULL, 39, 'Workout', 'Wednesday', 'false'),
(5, 30, NULL, 'Breakfast', 'Thursday', 'true'),
(5, 21, NULL, 'Snack', 'Thursday', 'true'),
(5, 34, NULL, 'Lunch', 'Thursday', 'true'),
(5, 24, NULL, 'Dinner', 'Thursday', 'true'),
(5, NULL, 34, 'Workout', 'Thursday', 'false'),
(5, 26, NULL, 'Breakfast', 'Friday', 'true'),
(5, 25, NULL, 'Snack', 'Friday', 'true'),
(5, 35, NULL, 'Lunch', 'Friday', 'true'),
(5, 31, NULL, 'Dinner', 'Friday', 'true'),
(5, NULL, 37, 'Workout', 'Friday', 'false'),
(5, 33, NULL, 'Breakfast', 'Saturday', 'true'),
(5, 30, NULL, 'Snack', 'Saturday', 'true'),
(5, 32, NULL, 'Lunch', 'Saturday', 'true'),
(5, 36, NULL, 'Dinner', 'Saturday', 'true'),
(5, NULL, 41, 'Workout', 'Saturday', 'false'),
(6, 23, NULL, 'Breakfast', 'Sunday', 'true'),
(6, 32, NULL, 'Snack', 'Sunday', 'true'),
(6, 23, NULL, 'Lunch', 'Sunday', 'true'),
(6, 29, NULL, 'Dinner', 'Sunday', 'true'),
(6, NULL, 41, 'Workout', 'Sunday', 'false'),
(6, 27, NULL, 'Breakfast', 'Monday', 'true'),
(6, 30, NULL, 'Snack', 'Monday', 'true'),
(6, 26, NULL, 'Lunch', 'Monday', 'true'),
(6, 30, NULL, 'Dinner', 'Monday', 'true'),
(6, NULL, 37, 'Workout', 'Monday', 'false'),
(6, 21, NULL, 'Breakfast', 'Tuesday', 'true'),
(6, 23, NULL, 'Snack', 'Tuesday', 'true'),
(6, 35, NULL, 'Lunch', 'Tuesday', 'true'),
(6, 32, NULL, 'Dinner', 'Tuesday', 'true'),
(6, NULL, 41, 'Workout', 'Tuesday', 'false'),
(6, 25, NULL, 'Breakfast', 'Wednesday', 'true'),
(6, 30, NULL, 'Snack', 'Wednesday', 'true'),
(6, 32, NULL, 'Lunch', 'Wednesday', 'true'),
(6, 36, NULL, 'Dinner', 'Wednesday', 'true'),
(6, NULL, 37, 'Workout', 'Wednesday', 'false'),
(6, 35, NULL, 'Breakfast', 'Thursday', 'true'),
(6, 25, NULL, 'Snack', 'Thursday', 'true'),
(6, 31, NULL, 'Lunch', 'Thursday', 'true'),
(6, 31, NULL, 'Dinner', 'Thursday', 'true'),
(6, NULL, 34, 'Workout', 'Thursday', 'false'),
(6, 32, NULL, 'Breakfast', 'Friday', 'true'),
(6, 21, NULL, 'Snack', 'Friday', 'true'),
(6, 33, NULL, 'Lunch', 'Friday', 'true'),
(6, 24, NULL, 'Dinner', 'Friday', 'true'),
(6, NULL, 38, 'Workout', 'Friday', 'false'),
(6, 26, NULL, 'Breakfast', 'Saturday', 'true'),
(6, 29, NULL, 'Snack', 'Saturday', 'true'),
(6, 34, NULL, 'Lunch', 'Saturday', 'true'),
(6, 32, NULL, 'Dinner', 'Saturday', 'true'),
(6, NULL, 37, 'Workout', 'Saturday', 'false'),
(7, 9, NULL, 'Breakfast', 'Sunday', 'true'),
(7, 9, NULL, 'Snack', 'Sunday', 'true'),
(7, 10, NULL, 'Lunch', 'Sunday', 'true'),
(7, 10, NULL, 'Dinner', 'Sunday', 'true'),
(7, NULL, 8, 'Workout', 'Sunday', 'false'),
(7, 10, NULL, 'Breakfast', 'Monday', 'true'),
(7, 9, NULL, 'Snack', 'Monday', 'true'),
(7, 9, NULL, 'Lunch', 'Monday', 'true'),
(7, 10, NULL, 'Dinner', 'Monday', 'true'),
(7, NULL, 9, 'Workout', 'Monday', 'false'),
(7, 9, NULL, 'Breakfast', 'Tuesday', 'true'),
(7, 9, NULL, 'Snack', 'Tuesday', 'true'),
(7, 9, NULL, 'Lunch', 'Tuesday', 'true'),
(7, 4, NULL, 'Dinner', 'Tuesday', 'true'),
(7, NULL, 1, 'Workout', 'Tuesday', 'false'),
(7, 10, NULL, 'Breakfast', 'Wednesday', 'true'),
(7, 9, NULL, 'Snack', 'Wednesday', 'true'),
(7, 1, NULL, 'Lunch', 'Wednesday', 'true'),
(7, 10, NULL, 'Dinner', 'Wednesday', 'true'),
(7, NULL, 9, 'Workout', 'Wednesday', 'false'),
(7, 9, NULL, 'Breakfast', 'Thursday', 'true'),
(7, 10, NULL, 'Snack', 'Thursday', 'true'),
(7, 9, NULL, 'Lunch', 'Thursday', 'true'),
(7, 10, NULL, 'Dinner', 'Thursday', 'true'),
(7, NULL, 8, 'Workout', 'Thursday', 'false'),
(7, 9, NULL, 'Breakfast', 'Friday', 'true'),
(7, 9, NULL, 'Snack', 'Friday', 'true'),
(7, 10, NULL, 'Lunch', 'Friday', 'true'),
(7, 10, NULL, 'Dinner', 'Friday', 'true'),
(7, NULL, 9, 'Workout', 'Friday', 'false'),
(7, 10, NULL, 'Breakfast', 'Saturday', 'true'),
(7, 9, NULL, 'Snack', 'Saturday', 'true'),
(7, 10, NULL, 'Lunch', 'Saturday', 'true'),
(7, 9, NULL, 'Dinner', 'Saturday', 'true'),
(7, NULL, 8, 'Workout', 'Saturday', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE IF NOT EXISTS `workout` (
  `workoutId` int(11) NOT NULL AUTO_INCREMENT,
  `workoutName` varchar(255) NOT NULL,
  `workoutType` varchar(255) NOT NULL,
  `shortDescription` varchar(255) NOT NULL,
  `workoutGroup` varchar(255) NOT NULL,
  `muscles` text NOT NULL,
  `equipment` text NOT NULL,
  `recommendation` text NOT NULL,
  `workoutImagePath` varchar(255) NOT NULL,
  `workoutVdoPath` varchar(255) NOT NULL,
  `isRecommend` varchar(10) NOT NULL,
  `workoutStatus` varchar(10) NOT NULL,
  `workoutView` int(11) NOT NULL,
  PRIMARY KEY (`workoutId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`workoutId`, `workoutName`, `workoutType`, `shortDescription`, `workoutGroup`, `muscles`, `equipment`, `recommendation`, `workoutImagePath`, `workoutVdoPath`, `isRecommend`, `workoutStatus`, `workoutView`) VALUES
(17, 'Incline dumbbell fly', 'weightTraining', '<p>ท่าบริหารเฉพาะกล้ามเนื้ออกส่วนบน ไหล่ส่วนหน้า กระชับท้องแขน</p>', 'UPPER BASE', '<p>อกส่วนบน , ไหล่ส่วนหน้า , ท้องแขน</p>', '<p>ดัมเบล 1 &nbsp;คู่ , &nbsp;ลูกบอล</p>', '<p>ไม่ควรเกร็งคอ รักษาสมดุลของลำตัวให้มั่นคง</p>', 'workout_main-17.jpg', 'xaoSiZS7lkY', 'false', 'open', 19),
(18, 'Flat dumbbell press ', 'weightTraining', '<p>ท่าบริหารกล้ามเนื้อหน้าอก กระชับกล้ามเนื้อไม่ให้หน้าอกหย่อนคล้อย</p>', 'UPPER BASE', '<p>หน้าอก&nbsp;</p>', '<p>ดัมเบล 1 คู่ , &nbsp;ลูกบอล</p>', '<p>ขายันลำตัวให้ขนานกับพื้น<br />ดัมเบลอยู่บริเวณหู และยกขึ้นเหนือใบหน้า<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-18.jpg', 'stpIuH2HI-U', 'false', 'open', 2),
(19, 'Incline dumbbell press', 'weightTraining', '<p>บริหารกล้ามเนื้อหน้าอกส่วนบน ไหล่ส่วนหน้าและหลังแขน</p>', 'UPPER BASE', '<p>หน้าอกส่วนบน , ไหล่ส่วนหน้า &nbsp;, หลังแขน</p>', '<p>ดัมเบล 1 &nbsp;คู่ &nbsp;, ลูกบอล</p>', '<p>ขายันลำตัวให้พิงเป็นมุม 45 องศา<br />ดัมเบลอยู่บริเวณหู และยกขึ้นเหนือใบหน้า<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-19.jpg', '0p3RJ_NZUGw', 'false', 'open', 24),
(20, 'Flat dumbbell fly', 'weightTraining', '<p>บริหารกล้ามเนื้อหน้าอกให้กระชับ เสริมทรงอกให้มีมวล</p>', 'UPPER BASE', '<p>กล้ามเนื้อหน้าอก</p>', '<p>ดัมเบล 1 คู่ , ลูกบอล</p>', '<p>ขายันลำตัวให้ขนานกับพื้น<br />กางศอกออกด้านข้างของลำตัว ดัมเบลอยู่บริเวณหู และยกขึ้นเหนือใบหน้า<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-20.jpg', 'aW7_G2GG6hE', 'false', 'open', 3),
(21, 'Dumbbell pullover', 'weightTraining', '<p>กระชับสัดส่วน หน้าอก ลำตัวด้านข้าง ท้องแขนให้เข้ารูป</p>', 'UPPER BASE', '<p>หน้าอก , ลำตัวด้านข้าง , ท้องแขน</p>', '<p>ดัมเบลน้ำหนักที่เหมาะสม , ลูกบอล</p>', '<p>ขายันลำตัวให้ขนานกับพื้น<br />ดัมเบลอยู่บริเวณเหนือใบหน้า และค่อยๆลดดัมเบลลงมาด้านหลังศรีษะโดยเหยียดแขนเป็นแนวตรง<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-21.jpg', 'mNb4vaSsrsI', 'false', 'open', 3),
(22, 'Dumbbell Shoulder press', 'weightTraining', '<p>เสริมการทำงานกล้ามเนื้อไหล่ สร้างความกระชับ เสริมบุคคลิกให้ดี</p>', 'UPPER BASE', '<p>กล้ามเนื้อไหล่</p>', '<p>ดัมเบล 1 คู่ , &nbsp;ลูกบอล</p>', '<p>วางเท้าทั้งสองบนพื้นให้มั่นคง<br />ระดับข้อศอกอยู่เสมอหัวไหล่หรือต่ำกว่า<br />ยกดัมเบลขึ้นเหนือศรีษะ<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-22.jpg', 'FdCKgVh27cE', 'false', 'open', 2),
(23, 'External dumbbell rotation', 'weightTraining', '<p>ท่าบริหาร เพิ่มความแข็งแรงของกล้ามเนื้อชิ้นเล็ก ข้อต่อกระดูกหัวไหล่กับแขน</p>', 'UPPER BASE', '<p>กล้ามเนื้อชิ้นเล็ก กระดูกหัวไหล่ แขน</p>', '<p>ดัมเบลน้ำหนักที่พอเหมาะ</p>', '<p>างขาให้มั่นคง<br />วางสะโพกให้ตั้งขึ้นไม่เอนไปข้างหน้าหรือหลัง<br />วางแขนแนบดับลำตัว<br />ยกดัมเบลขึ้นจนกระทั้งแขนท่อนปลายตั้งฉากกับพื้น<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-23.jpg', 'NHkKbLFPANk', 'false', 'open', 0),
(24, 'Dumbbell upright row', 'weightTraining', '<p>บริหารกล้ามเนื้อไหล่ ต้นคอ หลังส่วนบน พัฒนาบุคคลิกให้ดี</p>', 'UPPER BASE', '<p>ไหล่ , ต้นคอ , หลังส่วนบน</p>', '<p>ดัมเบล 1 &nbsp;คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />ข้อศอกสูงกว่าหัวไหล่เล็กน้อย<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-24.jpg', '3O9S1t1ae7k', 'false', 'open', 0),
(25, 'Front dumbbell raise', 'weightTraining', '<p>บริหารกล้ามเนื้อไหล่ส่วนหน้าและส่วนกลาง</p>', 'UPPER BASE', '<p>กล้ามเนื้อไหล่ส่วนหน้า , ไหล่ส่วนกลาง</p>', '<p>ดัมเบล 1 คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />ยกดัมเบลขึ้นช้าๆ แขนเป็นแนวตรง ยื่นไปข้างหน้า<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-25.jpg', '5ZQoNkqQoGg', 'false', 'open', 0),
(26, 'Lateral dumbbell raise', 'weightTraining', '<p>บริหารกล้ามเนื้อไหล่ส่วนกลาง ส่วนบน เพิ่มความกว้างช่วงไหล่</p>', 'UPPER BASE', '<p>ไหล่ส่วนกลาง ส่วนบน</p>', '<p>ดัมเบล 1 &nbsp;คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />ยกดัมเบลขึ้นช้าๆ แขนเป็นแนวตรง ยื่นไปด้านข้าง<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-26.jpg', 'KL4NuMvw8Rs', 'false', 'open', 0),
(27, 'Rear lateral raise', 'weightTraining', '<p>แก้ปัญหาไหล่ตก บริหารกล้ามเนื้อไหล่ส่วนหลัง ส่วนกลางให้แข็งแรง<br /><br /></p>\r\n<p>&nbsp;</p>', 'UPPER BASE', '<p>กล้ามเนื้อไหล่ส่วนหลัง ส่วนกลาง</p>', '<p>ดัมเบล 1 &nbsp;คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวแนวตรง โน้มไปด้านหน้า<br />ยกดัมเบลขึ้นช้าๆ แขนเป็นแนวตรง ยื่นไปด้านข้าง<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-27.jpg', 'ZK1fYBruFSU', 'false', 'open', 0),
(28, 'Dumbbell squat', 'weightTraining', '<p>บริหารกล้ามเนื้อต้นขาด้านหน้า สะโพก ก้น ลดเซลลูไลท์และกระชับ</p>', 'LOWER BASE', '<p>ต้นขาด้านหน้า สะโพก ก้น</p>', '<p>ดัมเบล 1 คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />เอนตัวไปข้างหน้าเล็กน้อย<br />ย่อตัวลงมาจนท่อนขาขนานกับพื้น<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>\r\n<p>&nbsp;</p>', 'workout_main-28.jpg', 'HQZMnfr5El4', 'false', 'open', 2),
(29, 'Dumbbell sumo squat', 'weightTraining', '<p>เน้นการบริหารต้นขาด้านใน ขาหนีบ กระตุ้น Growth hormone ให้ร่างกาย</p>', 'LOWER BASE', '<p>ต้นขาด้านใน</p>', '<p>ดัมเบลน้ำหนักที่เหมาะสม</p>', '<p>ยืนวางเท้าห่างจากกันมากพอสมควร<br />ลำตัวตรงเสมอ<br />ย่อตัวลงมาจนท่อนขาขนานกับพื้น<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-29.jpg', 'mJrx5_jdTLw', 'false', 'open', 0),
(30, 'Dumbbell split squat', 'weightTraining', '<p>กระชับ ลดไขมันบริเวณสะโพก ให้ได้รูปสวยงาม</p>', 'LOWER BASE', '<p>สะโพก ต้นขา</p>', '<p>ดัมเบล 1คู่</p>', '<p>ยืนก้าวเท้าซ้ายไปด้านหน้า<br />ลำตัวตั้งตรง<br />ย่อตัวลงมาจนท่อนขาขนานกับพื้น<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-30.jpg', 'JM3XrVbtdAo', 'false', 'open', 0),
(31, 'Lateral lunge', 'weightTraining', '<p>กระชับให้กล้ามเนื้อต้นขา สะโพกสวยได้รูป มีทรวดทรงมากขึ้น</p>', 'LOWER BASE', '<p>กล้ามเนื้อต้นขา , &nbsp;สะโพก</p>', '<p>ดัมเบล 1 &nbsp;คู่</p>', '<p>ยืนวางเท้าห่างจากกันมากพอสมควร<br />เอนตัวไปข้างหน้าเล็กน้อย<br />ย่อตัวลงมาจนท่อนขาขนานกับพื้น<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-31.jpg', 'azrsV9q9NKw', 'false', 'open', 0),
(32, 'Dumbbell stiffleged deadlifts', 'weightTraining', '<p>เสริมสร้างความแข็งแรงกล้ามเนื้อหลังส่วนล่าง <br />ต้นขาด้านหลัง สะโพกและก้น</p>', 'CORE BASE', '<p>ต้นขาด้านหลัง สะโพกและก้น</p>', '<p>ดัมเบล 1 คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวแนวตรง โน้มไปด้านหน้า<br />ดัมเบลลงในแนวดิ่ง<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-32.jpg', '4zIqwUhVlC8', 'false', 'open', 1),
(33, 'Ball leg curl', 'weightTraining', '<p>บรรเทาอาการปวดหลัง บริหารกล้ามเนื้อต้นขา ก้น สะโพก</p>', 'LOWER BASE', '<p>กล้ามเนื้อต้นขา , ก้น , สะโพก</p>', '<p>ลูกบอล</p>', '<p>นอนหงายลำตัวแนวตรง<br />ท่อนขาแนวตรง ปลายเท้าชิดกัน<br />ยกก้นขึ้น จนลำตัวท่อนบนและล่างตรง และ ค่อยๆ งอเข่าเข้ามา<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-33.jpg', 'uJdTnXMUVLs', 'false', 'close', 0),
(34, 'Rest Day', 'cardio', '<p>Congratuation !!<br />you got a rest day</p>', 'ALL CARDIO', '<p>all rest</p>', '', '', 'workout_main-34.jpg', '', 'false', 'open', 2),
(35, 'Stretching', 'cardio', '<p>Stretching -&nbsp;ยืดเส้นยืดสายเบา ๆ &nbsp;ผ่อนคลายกลามเนื้อ</p>', 'ALL CARDIO', '<p>all muscle</p>', '<p>-</p>', '<p>-&nbsp;</p>', 'workout_main-35.jpg', '', 'false', 'close', 1),
(36, 'Dumbbell standing calf raise', 'weightTraining', '<p>เสริมสร้างกล้ามเนื้อน่อง บริเวณขาให้สวยงาม ได้รูปที่พอดี</p>', 'LOWER BASE', '<p>กล้ามเนื้อน่อง</p>', '<p>ดัมเบล 1 คู่</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />ยกส้นเท้าขึ้นให้สูงที่สุด<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>\r\n<p>&nbsp;</p>', 'workout_main-36.jpg', 'cstC4tCFja0', 'false', 'open', 1),
(37, 'Jogging', 'cardio', '<p>Jogging ! หรือวิ่งเบาๆ ระยะเวลาสัก 20 นาทีขึ้นไปค่ะ ;)</p>', 'ALL CARDIO', '<p>-</p>', '<p>-</p>', '<p>กำหนดลมหายใจดีๆนะคะ</p>', 'workout_main-37.jpg', '', 'false', 'open', 4),
(38, 'Upper body program #1', 'cardio', '<p>โปรแกรมออกกำลังกาย Upper body #1<br />เป็นการออกกำลังกายในกล้ามเนื้อส่วนบนของร่างกาย<br />ซึ่งมีทั้งกล้ามเนื้อมัดใหญ่ มัดเล็ก ในบริเวณหน้าแขน หลังแขน<br />หัวไหล่ หลัง และกล้ามเนื้อหน้าท้อง</p>', 'ALL CARDIO', '<p>กล้ามเนื้อ &nbsp;Upper body ทุกส่วน</p>', '<p>ดัมเบล , ลูกบอล</p>', '<p>1. Flat dumbbell press&nbsp;&nbsp;<br />15 rep x 3 set<br /><br />2. Incline dumbbell press<br />15 rep x 3 set<br /><br />3. Flat dumbbell fly<br />15 rep x 3 set<br /><br />4. Incline dumbbell fly<br />15 rep x 3 set<br /><br />5.Dumbbell pullover<br />15 rep x 3 set<br /><br />6.Hammer curls<br />15 rep แต่ละข้าง x 3 set<br /><br />7.Concentration curls<br />15 rep แต่ละข้าง x 3 set<br /><br />8.Crunch&nbsp;<br />25 rep x 3 set</p>', 'workout_main-38.jpg', 'wnAELQne-lc', 'false', 'open', 5),
(39, 'Upper body program #2', 'cardio', '<p>โปรแกรมออกกำลังกาย Upper body #2<br />เป็นการออกกำลังกายในกล้ามเนื้อส่วนบนของร่างกาย<br />ซึ่งมีทั้งกล้ามเนื้อมัดใหญ่ มัดเล็ก ในบริเวณหน้าแขน หลังแขน<br />หัวไหล่ หลัง และกล้ามเนื้อหน้าท้อง</p>', 'ALL CARDIO', '<p>กล้ามเนื้อส่วนบนของร่างกาย</p>', '<p>ลูกบอล ดัมเบล 1 คู่</p>', '<p>1. Incline dumbbell press<br />15 rep x 3 set<br /><br />2.Incline dumbbell fly<br />15 rep x 3 set<br /><br />3. External dumbbell rotation<br />15 rep x 3 set<br /><br />4.Lateral dumbbell raise<br />15 rep x 3 set<br /><br />5. Rear lateral raise<br />15 rep x 3 set<br /><br />6.Dumbbell pullover<br />15 rep x 3 set<br /><br />7.Dumbbell upright row<br />15 rep x 3 set<br /><br />8.Front dumbbell raise<br />15 rep x 3 set</p>', 'workout_main-39.jpg', 'ZLqtGKBJgwY', 'false', 'open', 1),
(40, 'Lower body program #1', 'weightTraining', '<p>โปรแกรมออกกำลังกาย&nbsp;Lower body program #1</p>', 'ALL CARDIO', '<p>กล้ามเนื้อส่วน Lower body</p>', '<p>ดัมเบล , ลูกบอล</p>', '<p>1.Dumbbell squat<br />15 rep x 3 set<br /><br />2. Dumbbell sumo squat<br />15 rep x 3 set<br /><br />3. Lateral lunge<br />15 rep x 3 set<br /><br />4. Dumbbell stiffleged deadlifts<br />15 rep x 3 set<br /><br />5. Ball leg curl<br />15 rep x 3 set<br /><br />6. Dumbbell standing calf raise<br />15 rep แต่ละข้าง 3 set<br /><br />7. Bent-over dumbbell row<br />15 rep x 3 set</p>', 'workout_main-40.jpg', 'pQktcPPaUdI', 'false', 'open', 2),
(41, 'Total body program #1', 'cardio', '<p>โปรแกรมออกกำลังกาย&nbsp;Total body program #1<br />ออกกำลังกายทุกส่วนของร่างกาย กระชับทั้งตัว<br />เป็นท่าที่เหมาะสำหรับมือใหม่ที่ยังไม่ชำนาญในการโฟกัสกล้ามเนื้อ<br />แต่ได้ประสิทธิภาพ เผาผลาญพลังงานสูง</p>', 'ALL CARDIO', '<p>กล้ามเนื้อทุกส่วนของร่างกาย</p>', '<p>ดัมเบล , &nbsp;ลูกบอล</p>', '<p>1. Incline dumbbell press<br />15 rep x 3 set<br /><br />2. Dumbbell pullover<br />15 rep x 3 set<br /><br />3. Rear lateral raise<br />15 rep x 3 set<br /><br />4.Dumbbell squat<br />15 rep x 3 set<br /><br />5. Dumbbell sumo squat<br />15 rep x 3 set<br /><br />6. Crunch<br />15 rep x 3 set<br /><br />7.Abdominal reverese curls<br />15 rep x 3 set<br /><br />8. Ball leg lift<br />15 rep x 3 set</p>', 'workout_main-41.jpg', 'vn9_W7os-pA', 'false', 'open', 3),
(42, 'Lower body program #2', 'cardio', '<p>โปรแกรมออกกำลังกาย&nbsp;Lower body program #2</p>', 'ALL CARDIO', '<p>กล้ามเนื้อส่วนล่างของร่างกาย</p>', '<p>ดัมเบล , ลูกบอล</p>', '<p>1. Dumbbell stiffleged deadlifts<br />13 rep x 4 set<br /><br />2. Dumbbell squat<br />13 rep x 4 set<br /><br />3.Dumbbell standing calf raise<br />15 rep แต่ละข้าง 3 set<br /><br />4.Dumbbell sumo squat<br />13 rep x 4 set<br /><br />5. Ball leg curl<br />13 rep x 4 set<br /><br />6. Bent-over dumbbell row<br />13 rep x 4 set<br /><br />7.Lateral lunge<br />13 rep x 4 set</p>', 'workout_main-42.jpg', '0Dc3iaq3fWw', 'false', 'open', 3),
(43, 'Dumbbell standing calf raise', 'weightTraining', '<p>เสริมสร้างกล้ามเนื้อน่อง บริเวณขาให้สวยงาม ได้รูปที่พอดี</p>', 'UPPER BASE', '', '<p>ดัมเบล 2 ลูก</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />ยกส้นเท้าขึ้นให้สูงที่สุด<span class="text_exposed_show"><br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</span></p>', '', 'cstC4tCFja0', 'false', 'open', 0),
(44, 'Bent-over dumbbell row', 'weightTraining', '<p>ลดอาการปวดหลัง สร้างความแข็งแรง เพิ่มความคอดของช่วงเอว</p>', 'UPPER BASE', '', '<p>ดัมเบล 2 ลูก</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวแนวตรง โน้มไปด้านหน้า<br />ยกดัมเบลจนข้อศอกอยู่สูงกว่าลำตัวเล็กน้อย<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-44.jpg', 'bvbEODYre0s', 'false', 'open', 1),
(45, 'One-arm row', 'weightTraining', '<p>บริหารความสมดุลของลำตัว ให้มีทรวดทรงมากขึ้น ไหล่เปิดกว้างขึ้น</p>', 'UPPER BASE', '', '<p>ดัมเบล 1 ลูก</p>\r\n<p>ลูกบอล</p>', '<p>วางเท้าไว้ด้านหน้า<br />วางลำตัวเป็นแนวตรง<br />ยกดัมเบลจนข้อศอกอยู่สูงกว่าระดับเอวเล็กน้อย<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-45.jpg', 'NcG3IuJjFKE', 'false', 'open', 0),
(46, 'Dumbbell deadlift', 'weightTraining', '<p>ท่าบริหารที่ใช้กล้ามเนื้อเกือบทุกส่วนของร่างกาย สร้างความแข็งแรงให้กล้ามเนื้อ</p>', 'UPPER BASE', '', '<p>ดัมเบล 2 ลูก</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวแนวตรง โน้มไปด้านหน้า<br />แขนท่อนปลายอยู่แนวดิ่งเสมอ<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-46.jpg', '6KZyXVAuu34', 'false', 'open', 0),
(47, 'Dumbbell tricep extension', 'weightTraining', '<p>เพิ่มความแข็งแรงให้แขนและบริเวณข้อมือ กระชับกล้ามเนื้อส่วนใต้ท้องแขน</p>', 'UPPER BASE', '', '<p>ลูกบอล</p>\r\n<p>ดัมเบล 1 ลูก</p>', '<p>นั่งวางขาให้มั่นคง<br />ลำตัวตั้งตรง<br />ลดดัมเบลไปด้านหลังศรีษะ โดยให้แขนท่อนบนตรึงอยู่กับที่<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-47.jpg', 'tnzbccL_yFc', 'false', 'open', 0),
(48, 'One-arm dumbbell tricep extension', 'weightTraining', '<p>ลดไขมันบริเวณแขน กระชับท้องแขน เพิ่มความแข็งแรงของข้อมือ</p>', 'UPPER BASE', '', '<p>ลูกบอล</p>\r\n<p>ดัมเบล 1 ลูก</p>', '<p>นั่งวางขาให้มั่นคง<br />ลำตัวตั้งตรง<br />ลดดัมเบลไปด้านข้างศรีษะ โดยให้แขนท่อนบนตรึงอยู่กับที่<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-48.jpg', 'QCXguwzwHyQ', 'false', 'open', 0),
(49, 'Triceps kickbacks', 'weightTraining', '<p>ทำให้แขนได้รูปสวยงาม กระชับใต้ท้องแข็งเสริมสร้างกล้ามเนื้อที่พอดี</p>', 'UPPER BASE', '', '<p>ลูกบอล</p>\r\n<p>ดัมเบล 1 ลูก</p>', '<p>วางเท้าไว้ด้านหน้า<br />ลำตัวแนวตรง โน้มไปด้านหน้า<br />ข้อศอกอยู่แนปลำตัวตลอดท่าบริหาร<br />ยกดัมเบลขึ้นมาด้านหลังอย่างช้าๆ<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-49.jpg', 'kuXZ7J8d2F4', 'false', 'open', 0),
(50, 'Hammer curls', 'weightTraining', '<p>สร้างความแข็งแรงของข้อมือ แขนช่วงปลาย กระชับกล้ามเนื้อแขน</p>', 'UPPER BASE', '', '<p>ดัมเบล 2 ลูก</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />ยกดัมเบลขึ้นมาตรงๆ ข้อศอกอยู่กับที่<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-50.jpg', 'WjZUjep7kO4', 'false', 'open', 0),
(51, 'Dumbbell curls', 'weightTraining', '<p>สร้างความแข็งแรงของข้อมือ หน้าแขน กระชับกล้ามเนื้อแขนให้สวยได้รูป</p>', 'UPPER BASE', '', '<p>ดัมเบล 2 ลูก</p>', '<p>วางเท้าห่างกันระดับไหล่<br />ลำตัวตั้งตรง<br />หงายอุ้งมือยกดัมเบลขึ้นมาตรงๆ ข้อศอกอยู่กับที่<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-51.jpg', 'uKKaRSZNcVM', 'false', 'open', 1),
(52, 'Concentration curls', 'weightTraining', '<p>เสริมสร้างกล้ามเนื้อ ความแข็งแรงของข้อมือ บริเวณแขนส่วนปลาย กระชับกล้ามเนื้อต้นแขน</p>', 'UPPER BASE', '', '<p>ดัมเบล 1 ลูก</p>\r\n<p>ลูกบอล</p>', '<p>นั่งวางขาให้มั่นคง<br />มือวางค้ำยันที่หัวเข่า<br />ยกดัมเบลขึ้นช้าๆ ศอกวางบริเวณต้นหา<br />ทำซ้ำ 15-20 ครั้ง นับเป็น 1 เซ็ต</p>', 'workout_main-52.jpg', 'L9NmyjvDapE', 'false', 'open', 2),
(53, 'Crunch', 'weightTraining', '<p>บริหารกล้ามเนื้อหน้าท้อง ด้านข้างลำตัว สร้างความกระชับให้รูปร่าง<br />เท้าชิด ชันเข่าขึ้น</p>', 'CORE BASE', '', '<p>เสื่อโยคะ</p>', '<p>นอนหงอย<br />มือประสานหลวมๆ และยกลำตัวขึ้นมา<br />ทำซ้ำ 20-25 ครั้ง นับเป็น 1 เซ็ต.</p>', 'workout_main-53.jpg', '1tHftGoOMxE', 'false', 'open', 0),
(54, 'Ball leg lift', 'weightTraining', '<p>เน้นหน้าท้องส่วนล่างและด้านข้างลำตัว สร้างความแข็งแรงและสร้างกล้ามเนื้อ</p>', 'LOWER BASE', '', '<p>เสื่อโยคะ</p>\r\n<p>ลูกบอล</p>', '<p>ขาเหยียดตรง หนีบลูกบอลไว้<br />นอนหงาย มือทั้งสองข้างวางไว้ข้างลำตัว<br />ยกลูกบอลขึ้น ขาตรงไม่งอ ยกสะโพกให้ลอยขึ้น<br />ทำซ้ำ 20-25 ครั้ง นับเป็น 1 เซ็ต.</p>', 'workout_main-54.jpg', '7_A2f6a61Ek', 'false', 'open', 1),
(55, 'Abdominal reverese curls', 'weightTraining', '<p>เน้นหน้าท้องส่วนล่าง กระชับให้หน้าท้องแบราบ สร้างความแข็งแรงและสร้างกล้ามเนื้อ</p>', 'UPPER BASE', '', '<p>เสื่อโยคะ</p>\r\n<p>ลูกบอล</p>', '<p>ขาทั้งสองข้างวางบนลูกบอล<br />นอนหงาย มือทั้งสองข้างวางไว้ข้างลำตัว<br />ยกลูกบอลขึ้น มาเข้าหาลำตัวจนสะโพกลอยขึ้น<br />ทำซ้ำ 20-25 ครั้ง นับเป็น 1 เซ็ต.</p>', 'workout_main-55.jpg', 'u96hSvDj21o', 'false', 'open', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workoutimage`
--

CREATE TABLE IF NOT EXISTS `workoutimage` (
  `workoutImageId` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(255) NOT NULL,
  `workoutId` int(11) NOT NULL,
  PRIMARY KEY (`workoutImageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=229 ;

--
-- Dumping data for table `workoutimage`
--

INSERT INTO `workoutimage` (`workoutImageId`, `imagePath`, `workoutId`) VALUES
(1, 'workout_other-1-0.jpg', 1),
(2, 'workout_other-1-1.jpg', 1),
(3, 'workout_other-1-2.jpg', 1),
(4, 'https://www.t-nation.com/system/publishing/articles/10001387/original/Cardio-for-Strong-People.jpg?1422409104', 2),
(5, 'http://tsmorder.com/image/data/0update/2015-08/Tag_Cardio.png', 2),
(6, 'https://s-media-cache-ak0.pinimg.com/originals/9b/d2/f0/9bd2f08c764f0425d06e2dc42296f687.jpg', 2),
(7, 'http://www.clubmegamusculo.com/wp-content/uploads/2013/01/suplementos-cardio-resistencia.jpg', 3),
(8, 'http://cdn1.bloguin.com/wp-content/uploads/sites/194/2016/02/cardio.jpg', 3),
(9, 'http://lifecdn.dailyburn.com/life/wp-content/uploads/2015/08/circuit-training-cardio-not-running.jpg', 3),
(10, 'http://cathe.com/wp-content/uploads/2013/09/RT2013-Sunday-3930.jpg', 4),
(11, 'http://www.zuivelonline.nl/wp-content/uploads/2015/03/ThinkstockPhotos-462030223.jpg', 4),
(12, 'http://www.bollygroove.com/wp-content/uploads/2011/02/IMG_0381.jpg', 4),
(13, 'http://www.livewell360.com/wp-content/uploads/2016/03/Best-Cardio-Bodyweight-Exercises.jpg', 5),
(14, 'http://www.zuivelonline.nl/wp-content/uploads/2015/03/ThinkstockPhotos-462030223.jpg', 5),
(15, 'http://i.walmartimages.ca/knowledge/sports_rec/bg_cardio_fitness/bg_cardio_fitness_header.jpg', 5),
(16, 'http://www.hotcountrystars.com/lib/022/679-cardio.jpg', 6),
(17, 'http://mycoachkat.com/wp-content/uploads/2016/04/CardioTextimg1.jpg', 6),
(18, 'http://armyhotel.com.vn/wp-content/uploads/2015/07/Gym.jpg', 6),
(19, 'http://www.fitwirr.com//media/blog/image/cardio-resistance-training-for-weight-loss-cover.jpg', 7),
(20, 'https://www.fitnessblender.com/siteassets/video/o_body_weight_cardio_interval_workout.jpg', 7),
(21, 'http://images.fitnessmagazine.mdpcdn.com/sites/fitnessmagazine.com/files/1200-cardio-hiit-mike.jpg', 7),
(22, 'workout_other-8-0.jpg', 8),
(23, 'workout_other-8-1.jpg', 8),
(24, 'workout_other-8-2.jpeg', 8),
(25, 'https://atthakorn.com/wp-content/uploads/2016/01/What-Too-Much-Of-Cardio-Could-Do-To-You.jpg', 9),
(26, 'https://cdn.muscleandstrength.com/sites/default/files/field/feature-image/workout/coconut-cardio-feature.jpg', 9),
(27, 'https://cdn.muscleandstrength.com/sites/default/files/field/feature-image/workout/power-hour-cardio.jpg', 9),
(28, 'workout_other-1-3.jpg', 1),
(29, 'workout_other-10-0.jpg', 10),
(30, 'workout_other-10-1.jpg', 10),
(31, 'workout_other-11-0.jpg', 11),
(32, 'workout_other-11-1.jpg', 11),
(33, 'workout_other-12-0.jpg', 12),
(34, 'workout_other-12-3.jpg', 12),
(35, 'workout_other-13-0.jpg', 13),
(36, 'workout_other-15-0.jpg', 15),
(37, 'workout_other-16-0.jpg', 16),
(38, 'workout_other-17-0.jpg', 17),
(39, 'workout_other-17-1.jpg', 17),
(40, 'workout_other-17-2.jpg', 17),
(41, 'workout_other-17-3.jpg', 17),
(42, 'workout_other-18-0.jpg', 18),
(43, 'workout_other-18-1.jpg', 18),
(44, 'workout_other-18-2.jpg', 18),
(45, 'workout_other-18-3.jpg', 18),
(46, 'workout_other-18-4.jpg', 18),
(47, 'workout_other-19-0.jpg', 19),
(48, 'workout_other-19-1.jpg', 19),
(49, 'workout_other-19-2.jpg', 19),
(50, 'workout_other-19-3.jpg', 19),
(51, 'workout_other-19-4.jpg', 19),
(52, 'workout_other-20-0.jpg', 20),
(53, 'workout_other-20-1.jpg', 20),
(54, 'workout_other-20-2.jpg', 20),
(55, 'workout_other-20-3.jpg', 20),
(56, 'workout_other-20-5.jpg', 20),
(57, 'workout_other-21-0.jpg', 21),
(58, 'workout_other-21-1.jpg', 21),
(59, 'workout_other-21-2.jpg', 21),
(60, 'workout_other-21-3.jpg', 21),
(61, 'workout_other-21-4.jpg', 21),
(62, 'workout_other-21-5.jpg', 21),
(63, 'workout_other-22-0.jpg', 22),
(64, 'workout_other-22-1.jpg', 22),
(65, 'workout_other-22-2.jpg', 22),
(66, 'workout_other-22-3.jpg', 22),
(67, 'workout_other-22-4.jpg', 22),
(68, 'workout_other-22-5.jpg', 22),
(69, 'workout_other-23-0.jpg', 23),
(70, 'workout_other-23-1.jpg', 23),
(71, 'workout_other-23-2.jpg', 23),
(72, 'workout_other-23-3.jpg', 23),
(73, 'workout_other-23-4.jpg', 23),
(74, 'workout_other-23-5.jpg', 23),
(75, 'workout_other-24-0.jpg', 24),
(76, 'workout_other-24-1.jpg', 24),
(77, 'workout_other-24-2.jpg', 24),
(78, 'workout_other-24-3.jpg', 24),
(79, 'workout_other-25-0.jpg', 25),
(80, 'workout_other-25-1.jpg', 25),
(81, 'workout_other-25-2.jpg', 25),
(82, 'workout_other-26-0.jpg', 26),
(83, 'workout_other-26-1.jpg', 26),
(84, 'workout_other-26-2.jpg', 26),
(85, 'workout_other-26-3.jpg', 26),
(86, 'workout_other-27-0.jpg', 27),
(87, 'workout_other-27-1.jpg', 27),
(88, 'workout_other-27-2.jpg', 27),
(89, 'workout_other-27-3.jpg', 27),
(90, 'workout_other-27-4.jpg', 27),
(91, 'workout_other-28-0.jpg', 28),
(92, 'workout_other-28-1.jpg', 28),
(93, 'workout_other-28-2.jpg', 28),
(94, 'workout_other-28-3.jpg', 28),
(95, 'workout_other-28-4.jpg', 28),
(96, 'workout_other-29-0.jpg', 29),
(97, 'workout_other-29-1.jpg', 29),
(98, 'workout_other-29-2.jpg', 29),
(99, 'workout_other-29-3.jpg', 29),
(100, 'workout_other-29-4.jpg', 29),
(101, 'workout_other-30-0.jpg', 30),
(102, 'workout_other-30-1.jpg', 30),
(103, 'workout_other-30-2.jpg', 30),
(104, 'workout_other-30-3.jpg', 30),
(105, 'workout_other-30-4.jpg', 30),
(106, 'workout_other-31-0.jpg', 31),
(107, 'workout_other-31-1.jpg', 31),
(108, 'workout_other-31-2.jpg', 31),
(109, 'workout_other-31-3.jpg', 31),
(110, 'workout_other-32-0.jpg', 32),
(111, 'workout_other-32-1.jpg', 32),
(112, 'workout_other-32-2.jpg', 32),
(113, 'workout_other-32-3.jpg', 32),
(114, 'workout_other-32-4.jpg', 32),
(115, 'workout_other-33-0.jpg', 33),
(116, 'workout_other-33-1.jpg', 33),
(117, 'workout_other-33-2.jpg', 33),
(118, 'workout_other-33-3.jpg', 33),
(119, 'workout_other-33-4.jpg', 33),
(120, 'workout_other-33-5.jpg', 33),
(121, 'workout_other-34-0.jpg', 34),
(122, 'workout_other-35-0.jpg', 35),
(123, 'workout_other-36-0.jpg', 36),
(124, 'workout_other-36-1.jpg', 36),
(125, 'workout_other-36-2.jpg', 36),
(126, 'workout_other-36-3.jpg', 36),
(127, 'workout_other-36-4.jpg', 36),
(128, 'workout_other-37-0.jpg', 37),
(129, 'workout_other-38-0.jpg', 38),
(130, 'workout_other-39-0.jpg', 39),
(131, 'workout_other-40-0.jpg', 40),
(132, 'workout_other-42-0.jpg', 42),
(133, 'workout_other-41-0.jpg', 41),
(134, 'workout_other-42-1.jpg', 42),
(135, 'workout_other-42-2.jpg', 42),
(136, 'workout_other-42-3.jpg', 42),
(137, 'workout_other-42-4.jpg', 42),
(138, 'workout_other-42-5.jpg', 42),
(139, 'workout_other-42-6.jpg', 42),
(140, 'workout_other-42-7.jpg', 42),
(141, 'workout_other-41-1.jpg', 41),
(142, 'workout_other-41-2.jpg', 41),
(143, 'workout_other-41-3.jpg', 41),
(144, 'workout_other-41-4.jpg', 41),
(145, 'workout_other-41-5.jpg', 41),
(146, 'workout_other-41-6.jpg', 41),
(147, 'workout_other-41-7.jpg', 41),
(148, 'workout_other-41-8.jpg', 41),
(149, 'workout_other-38-1.jpg', 38),
(150, 'workout_other-38-2.jpg', 38),
(151, 'workout_other-38-3.jpg', 38),
(152, 'workout_other-38-4.jpg', 38),
(153, 'workout_other-38-5.jpg', 38),
(154, 'workout_other-38-6.jpg', 38),
(155, 'workout_other-38-7.jpg', 38),
(156, 'workout_other-38-8.jpg', 38),
(157, 'workout_other-39-1.jpg', 39),
(158, 'workout_other-39-2.jpg', 39),
(159, 'workout_other-39-3.jpg', 39),
(160, 'workout_other-39-4.jpg', 39),
(161, 'workout_other-39-5.jpg', 39),
(162, 'workout_other-39-6.jpg', 39),
(163, 'workout_other-39-7.jpg', 39),
(164, 'workout_other-39-8.jpg', 39),
(165, 'workout_other-43-0.jpg', 43),
(166, 'workout_other-43-1.jpg', 43),
(167, 'workout_other-43-2.jpg', 43),
(168, 'workout_other-43-3.jpg', 43),
(169, 'workout_other-43-4.jpg', 43),
(170, 'workout_other-44-0.jpg', 44),
(171, 'workout_other-44-1.jpg', 44),
(172, 'workout_other-44-2.jpg', 44),
(173, 'workout_other-44-3.jpg', 44),
(174, 'workout_other-44-4.jpg', 44),
(175, 'workout_other-44-5.jpg', 44),
(176, 'workout_other-45-0.jpg', 45),
(177, 'workout_other-45-1.jpg', 45),
(178, 'workout_other-45-3.jpg', 45),
(179, 'workout_other-45-4.jpg', 45),
(180, 'workout_other-46-0.jpg', 46),
(181, 'workout_other-46-1.jpg', 46),
(182, 'workout_other-46-2.jpg', 46),
(183, 'workout_other-46-3.jpg', 46),
(184, 'workout_other-46-4.jpg', 46),
(185, 'workout_other-47-0.jpg', 47),
(186, 'workout_other-47-1.jpg', 47),
(187, 'workout_other-47-3.jpg', 47),
(188, 'workout_other-47-4.jpg', 47),
(189, 'workout_other-48-0.jpg', 48),
(190, 'workout_other-48-1.jpg', 48),
(191, 'workout_other-48-2.jpg', 48),
(192, 'workout_other-48-3.jpg', 48),
(193, 'workout_other-48-4.jpg', 48),
(194, 'workout_other-49-0.jpg', 49),
(195, 'workout_other-49-1.jpg', 49),
(196, 'workout_other-49-3.jpg', 49),
(197, 'workout_other-50-0.jpg', 50),
(198, 'workout_other-50-1.jpg', 50),
(199, 'workout_other-50-2.jpg', 50),
(200, 'workout_other-50-3.jpg', 50),
(201, 'workout_other-50-4.jpg', 50),
(202, 'workout_other-50-5.jpg', 50),
(203, 'workout_other-51-0.jpg', 51),
(204, 'workout_other-51-1.jpg', 51),
(205, 'workout_other-51-2.jpg', 51),
(206, 'workout_other-51-3.jpg', 51),
(207, 'workout_other-51-4.jpg', 51),
(208, 'workout_other-51-5.jpg', 51),
(209, 'workout_other-52-0.jpg', 52),
(210, 'workout_other-52-1.jpg', 52),
(211, 'workout_other-52-2.jpg', 52),
(212, 'workout_other-52-3.jpg', 52),
(213, 'workout_other-52-4.jpg', 52),
(214, 'workout_other-53-0.jpg', 53),
(215, 'workout_other-53-1.jpg', 53),
(216, 'workout_other-53-2.jpg', 53),
(217, 'workout_other-53-3.jpg', 53),
(218, 'workout_other-53-4.jpg', 53),
(219, 'workout_other-54-0.jpg', 54),
(220, 'workout_other-54-1.jpg', 54),
(221, 'workout_other-54-2.jpg', 54),
(222, 'workout_other-54-3.jpg', 54),
(223, 'workout_other-54-4.jpg', 54),
(224, 'workout_other-55-0.jpg', 55),
(225, 'workout_other-55-1.jpg', 55),
(226, 'workout_other-55-2.jpg', 55),
(227, 'workout_other-55-3.jpg', 55),
(228, 'workout_other-55-4.jpg', 55);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
