-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-03-29 18:06:09
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1080311`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ondate` date NOT NULL,
  `dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `rank` int(3) NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `len` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `poster`, `ondate`, `dir`, `level`, `rank`, `intro`, `main`, `type`, `len`) VALUES
(114, '託陰2：布拉姆回來了', '2', '2020-03-31', 'William Brent Bell', 3, 2, '【託陰】原團隊攜手打造！一個年輕家庭搬進了希爾夏家族古宅，搬家後兒子意外交到一個詭異的新朋友：栩栩如生、彷彿有生命的陶瓷娃娃布拉姆，隨著他們每天膩在一塊，媽媽麗莎（凱蒂荷姆斯 飾）逐漸發現兒子行徑越來越古怪，而家裡毛骨悚然的事件也接踵而來…...', '拉爾夫伊尼森,凱蒂荷姆斯', '恐怖', 120),
(115, '刺激1995', '3', '2020-03-29', '弗蘭克·達拉邦特', 3, 3, 'IMDb 票選史上最佳電影！7項奧斯卡金像獎提名的曠世鉅作，25週年經典重映！銀行家安迪本欲報復外遇的妻子，但在行動之前打消主意，卻不料其妻及其情夫當晚即遭人殺害，安迪遂因此被判無期徒刑，進入「鯊堡」監獄。在獄中，安迪認識了從事黑市交易的囚犯雷，並與其他囚犯慢慢熟稔；在這同時，安迪以其專業知識，逐步引導監獄中的生活，讓事情開始有了轉變…。20年的鐵窗生涯，讓安迪看透監獄官僚的貪污、腐敗、虛偽與詭計圈套，也讓他體會到要還其清白之身，唯有逃獄一途…...', '提姆羅賓斯,摩根費里曼', '劇情', 125),
(116, '練愛iNG', '4', '2020-03-30', '林暐恆', 1, 4, '「想要戀愛不NG 就要練習ing」魏宏仁是所謂的人生魯蛇組，夢想當演員，卻只能在片場當臨演兼打雜，想在女友面前爭氣，卻慘遭毒甩。看不下的昔日好友們，決定幫助宏仁找回帥氣自信，展開一系列「練習談戀愛」的不NG訓練！宏仁不但要練習和100個女生聊天、還要學會瞬間觀察女生們心裡真正的需求！更因此認識了獨立、漂亮卻對愛情冷感的副導惠欣、兇狠但純情的製片鄭哥、精明可愛的化妝師小芳、擅長炒熱場面的魔術師、只用老招耍帥把妹的大明星。宏仁才發現，原來在練愛的路上他並...', '林暐恆(阿KEN),紀培慧,劉冠廷,陳嘉樺', '劇情', 125),
(117, '艾瑪.', '5', '2020-03-29', '奧特姆·德魏爾德', 1, 5, '改編自珍奧斯汀備受喜愛的喜劇，《艾瑪.》重新描繪出尋找真愛與幸福結局的故事。漂亮，聰穎，富有的艾瑪伍德豪斯在這個無聊平庸的小鎮裡就像一隻靜不下來的女王蜂。 然而，在這充斥著反諷社會階層與青澀的成長故事裡，艾瑪在經歷過一連串亂點鴛鴦和誤判情勢後，發現真愛一直在身邊。', '比爾奈伊,卡倫透納,安雅泰勒喬伊', '劇情', 150),
(118, '隱形人', '6', '2020-03-29', '雷・沃納爾', 3, 6, '「雖然無法看見，卻能造成傷害。」《隱形人》是一部關於癡迷的恐怖片，靈感來自環球影業經典怪物角色。西西莉亞受到一名富有和傑出的科學家感情綁架，被困在充滿暴力和控制的危險關係中，她靠著好友的幫助，趁夜黑風高之際逃走並躲藏起來。但是當她具有虐待狂的前男友自殺後將他巨大財富的一部分留給她，西西莉亞就懷疑他其實是假死。當一連串詭譎的巧合造成致命後果，威脅她所愛之人的性命時，她的精神瀕臨崩潰，而她必須證明她受到沒人看得見的兇手追殺。', '伊莉莎白摩絲', '恐怖', 157),
(119, '極地守護犬', '7', '2020-03-31', '克里斯·桑德斯', 2, 7, '改編自傑克倫敦世界名著《野性的呼喚》。劇情描述靈犬巴克原本生活在充滿陽光的加州，沒想到卻意外被拐賣到寒冷偏遠、盛產黃金的北方阿拉斯加，巴克輾轉成為雪橇犬，流落在不同主人之間，在這淘金熱時期，等著它的不是安逸的生活，巴克必需呼喚起深藏內心的野性，來面對嚴峻的生存考驗，而最終它將回歸最原始的自己，並成為自己的主人… 極地的守護者。', '歐馬希,丹史蒂文斯,哈里遜福特', '冒險', 126),
(120, '音速小子', '8', '2020-03-30', '傑夫·福勒', 1, 8, '根據全球知名SEGA電玩改編，全新超級快英雄“音速小子”，準備飆速新世界！《音速小子》敘述誤闖地球的音速小子和新認識的人類朋友湯姆華卓斯基，兩人要聯手阻止邪惡的蛋頭博士，利用音速小子的巨大力量來統治全世界。', '金凱瑞,詹姆斯馬斯登', '喜劇', 130),
(121, '1917', '9', '2020-03-29', '山姆·曼德斯', 2, 9, '《007：空降危機》、《007：惡魔四伏》金獎導演山姆曼德斯，以他獨特的想像與遠見執導第一次世界大戰史詩鉅片《1917》。第一次世界大戰進入最激烈之際，兩名年輕的英國士兵史考菲以及布雷克受到指派，執行一場看似不可能的任務。他們必須和時間賽跑，冒險進入敵區傳遞一個重要訊息，試圖阻止一場對數百名士兵的致命攻擊 － 其中包括布雷克的親兄弟。', '迪恩查爾斯查普曼,柯林佛斯,喬治麥凱,班尼迪克康柏拜區', '戰爭', 136),
(122, '鬼剋星：未來式', '10', '2020-03-31', '傑森·瑞特曼', 1, 10, '在全新的《魔鬼剋星：未來式》中，一位單身母親帶著他的兩個孩子來到傳說中的神祕小鎮，究竟在《蟻人》保羅路德的帶領之下，他們是否能成功隨著線索，並沿著他們祖父所留下的魔鬼剋星傳奇裝備與車輛，接手這個經典不敗但卻失傳已久的的抓鬼大業呢？', '芬恩沃夫哈德,保羅路德', '冒險', 125),
(123, '居禮夫人：放射永恆', '11', '2020-03-29', '瑪嘉莎塔碧', 1, 11, '《控制》奧斯卡影后提名羅莎蒙派克 甩開惡女形象，挑戰科學女強人！瑪麗居禮夫人是第一位女性諾貝爾獎得主；婚後與丈夫皮耶居禮 專注於研究，共同發現新的放射性元素—釙和鐳，亦因此奪下諾貝爾獎。在丈夫皮耶身亡後，悲痛的瑪麗全心奉獻於科學，並贏得第二座諾貝爾獎，究竟她撼動世界的偉大發明，背後有著什麼愛恨交織的人生故事？', '羅莎蒙派克 ,山姆萊利', '劇情', 89),
(124, '罪：米開朗基羅', '12', '2020-03-30', '安卓康橋羅斯基', 1, 12, '十六世紀初，文藝復興盛世，挾著天縱之才的米開朗基羅，游移在兩大金權世家獻身藝術。一邊是現任教皇儒略二世的家族：德拉羅維雷，一邊是即將入主梵蒂岡的家族：梅迪奇。為了打造儒略二世的宏偉陵墓，米開朗基羅率領石匠翻山深入「大理石聖地」卡拉拉，賣命開採龐然巨石；另一方面，梅迪奇祭出豐厚酬勞，要他和德拉羅維雷毀約，專心修建聖羅倫佐教堂。兩方人馬交相逼迫，米開朗基羅身心飽受折磨。他想藉由藝術親近上帝，卻深陷人性煉獄，久久無法脫身……', '阿爾貝托泰斯托內', '劇情', 125),
(125, '間諜速成班', '13', '2020-03-29', '彼得席格', 2, 13, '《特務行不行》億萬票房導演 爆笑動作鉅獻！★《星際異攻隊》戴夫巴帝斯塔 X《美麗心計》克蘿伊寇爾曼 萌翻大銀幕！中央情報局探員阿傑因下手過狠搞砸任務而面臨降級，他最後的翻身機會是一項臥底任務，不料這個行動竟被9歲小女孩蘇菲識破，為了保住飯碗，阿傑與蘇菲交換條件，她保密，他則教她如何成為間諜。', '克蘿伊寇爾曼,戴夫巴蒂斯塔', '喜劇', 130),
(126, 'Re：從零開始的異世界生活-外傳篇章電影', '14', '2020-03-31', '渡邊政治', 2, 14, '外傳篇章電影之一《Re：從零開始的異世界生活 冰結之絆》，以動畫前傳講述一直生活在艾利歐魯大森林的女主角「愛蜜莉雅」與精靈「帕克」最初的相遇。另一篇《Re：從零開始的異世界生活 Memory Snow》故事接續第一季動畫結尾，以幽默的番外篇描述男主角「昴」挑戰了一項無人知曉、某項極秘任務……「與愛蜜莉雅的約會行程預演」，可愛的「愛蜜莉雅」、「雷姆」、「拉姆」即將在大螢幕上大力賣萌，讓人心癢癢的萌力爆發劇情，鐵粉們千萬不要錯過在電影大螢幕上享受的機會!', '高橋李依,內山夕實,小林裕介', '卡通動畫', 118);

-- --------------------------------------------------------

--
-- 資料表結構 `m_user`
--

CREATE TABLE `m_user` (
  `id` int(11) NOT NULL,
  `acc` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `m_user`
--

INSERT INTO `m_user` (`id`, `acc`, `pw`, `email`, `name`, `tel`) VALUES
(1, 'admin', '1234', 'admin', 'admin', 1111),
(3, '123', '456', '456', '456', 456),
(5, 'test', '1234', '123@gmail.com', 'test', 1234),
(6, '123', '456', '456', '456', 456),
(7, 'test', '1234', '123@gmail.com', 'test', 1234),
(8, '123', '456', '456', '456', 456),
(9, 'test', '1234', '123@gmail.com', 'test', 1234),
(10, '123', '456', '456', '456', 456),
(11, 'test', '1234', '123@gmail.com', 'test', 1234),
(12, '123', '456', '456', '456', 456),
(13, 'test', '1234', '123@gmail.com', 'test', 1234),
(14, '123', '456', '456', '456', 456),
(15, 'test', '1234', '123@gmail.com', 'test', 1234),
(16, '123', '456', '456', '456', 456),
(17, 'test', '1234', '123@gmail.com', 'test', 1234),
(18, '123', '456', '456', '456', 456);

-- --------------------------------------------------------

--
-- 資料表結構 `ord`
--

CREATE TABLE `ord` (
  `id` int(10) NOT NULL,
  `no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `session` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qt` int(1) NOT NULL,
  `seat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ord`
--

INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seat`, `user`) VALUES
(18, '202003276834', '練愛iNG', '2020-03-27', '18:00-20:00', 2, 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"9\";}', 'sdfsdf'),
(24, '202003280024', '刺激1995', '2020-03-28', '14:00-16:00', 2, 'a:2:{i:0;s:1:\"0\";i:1;s:2:\"11\";}', 'admin'),
(25, '202003280025', '刺激1995', '2020-03-28', '14:00-16:00', 3, 'a:3:{i:0;s:1:\"4\";i:1;s:1:\"9\";i:2;s:2:\"18\";}', 'admin'),
(26, '202003280026', '刺激1995', '2020-03-28', '14:00-16:00', 2, 'a:2:{i:0;s:2:\"21\";i:1;s:2:\"14\";}', 'admin'),
(27, '202003280027', '刺激1995', '2020-03-28', '18:00-20:00', 3, 'a:3:{i:0;s:2:\"14\";i:1;s:2:\"20\";i:2;s:2:\"19\";}', 'admin'),
(28, '202003290028', '刺激1995', '2020-03-29', '18:00-20:00', 2, 'a:2:{i:0;s:2:\"21\";i:1;s:2:\"15\";}', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `poster`
--

CREATE TABLE `poster` (
  `id` int(11) NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1,
  `rank` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `poster`
--

INSERT INTO `poster` (`id`, `src`, `title`, `sh`, `rank`) VALUES
(16, 'ad1.jpg', 'main', 1, 1),
(17, 'ad.jpg', 'sub', 1, 3),
(24, 'ad3.jpg', 'sub', 1, 2);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ord`
--
ALTER TABLE `ord`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
