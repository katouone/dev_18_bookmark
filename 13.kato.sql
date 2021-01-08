-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 1 月 08 日 23:04
-- サーバのバージョン： 5.7.30
-- PHP のバージョン: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `php02_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_needs_table`
--

CREATE TABLE `php02_needs_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `country` varchar(64) NOT NULL,
  `scene` text NOT NULL,
  `type` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `php02_needs_table`
--

INSERT INTO `php02_needs_table` (`id`, `name`, `country`, `scene`, `type`, `content`, `url`, `indate`) VALUES
(1, 'AAA', 'マラウィ', '医療', '困りごと', '病院内にどのような部署があるのかわからない', 'https://world-diary.jica.go.jp/sunadasachie/activity/post_1.php', '2021-01-09 06:29:07'),
(2, 'AAA', 'マラウィ', '医療', '驚いたこと', '病棟は部門によってはかなり近代的で、冷蔵庫が設置されている病棟も少なくない。透析室もあり、癌化学療法も行われている。', 'https://world-diary.jica.go.jp/sunadasachie/activity/post_1.php', '2021-01-09 06:59:56'),
(3, 'BBB', 'マラウィ', '医療', '困りごと', 'ベッドも日本のように決まっておらず、小児病棟では1つのベッドに赤ちゃんが3人寝ていることは普通', 'https://world-diary.jica.go.jp/sunadasachie/activity/post_1.php', '2021-01-09 07:21:23');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php02_needs_table`
--
ALTER TABLE `php02_needs_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `php02_needs_table`
--
ALTER TABLE `php02_needs_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;