-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cktu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `personalinfo`
--

CREATE TABLE `personalinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL COMMENT '年齡',
  `gender` tinyint(3) UNSIGNED NOT NULL COMMENT '性別',
  `education` tinyint(3) UNSIGNED NOT NULL COMMENT '教育程度',
  `freq` tinyint(3) UNSIGNED NOT NULL COMMENT '網購次數',
  `time` tinyint(3) UNSIGNED NOT NULL COMMENT '上網時數',
  `money` tinyint(3) UNSIGNED NOT NULL COMMENT '網購金額',
  `income` tinyint(3) UNSIGNED NOT NULL COMMENT '每月收入',
  `familiar` tinyint(3) UNSIGNED NOT NULL COMMENT '網路熟悉程度'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
