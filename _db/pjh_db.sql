-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-09-27 10:06
-- 서버 버전: 10.4.11-MariaDB
-- PHP 버전: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `pjh_db`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ds_member`
--

CREATE TABLE `ds_member` (
  `m_num` int(100) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_id` varchar(30) NOT NULL,
  `m_password1` varchar(16) NOT NULL,
  `m_password2` varchar(16) NOT NULL,
  `m_phone` varchar(14) NOT NULL,
  `m_email` varchar(14) NOT NULL,
  `m_date` datetime NOT NULL,
  `m_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `ds_notice1`
--

CREATE TABLE `ds_notice1` (
  `n_num` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_content` text NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_file1` varchar(100) NOT NULL,
  `n_file2` varchar(100) NOT NULL,
  `n_file3` varchar(100) NOT NULL,
  `n_date` date NOT NULL,
  `n_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `ds_notice2`
--

CREATE TABLE `ds_notice2` (
  `n_num` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_content` text NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_file1` varchar(100) NOT NULL,
  `n_date` date NOT NULL,
  `n_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `ds_notice3`
--

CREATE TABLE `ds_notice3` (
  `n_num` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_content` text NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_file1` varchar(100) NOT NULL,
  `n_file2` varchar(100) NOT NULL,
  `n_file3` varchar(100) NOT NULL,
  `n_date` date NOT NULL,
  `n_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `ds_notice4`
--

CREATE TABLE `ds_notice4` (
  `n_num` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_content` text NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_file1` varchar(100) NOT NULL,
  `n_file2` varchar(100) NOT NULL,
  `n_file3` varchar(100) NOT NULL,
  `n_date` date NOT NULL,
  `n_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `portfolio`
--

CREATE TABLE `portfolio` (
  `n_num` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_content` text NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_file1` varchar(100) NOT NULL,
  `n_file2` varchar(100) NOT NULL,
  `n_file3` varchar(100) NOT NULL,
  `n_date` date NOT NULL,
  `n_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `portfolio2`
--

CREATE TABLE `portfolio2` (
  `n_num` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_content` text NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_file1` varchar(100) NOT NULL,
  `n_file2` varchar(100) NOT NULL,
  `n_file3` varchar(100) NOT NULL,
  `n_date` date NOT NULL,
  `n_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ds_member`
--
ALTER TABLE `ds_member`
  ADD PRIMARY KEY (`m_num`);

--
-- 테이블의 인덱스 `ds_notice1`
--
ALTER TABLE `ds_notice1`
  ADD PRIMARY KEY (`n_num`);

--
-- 테이블의 인덱스 `ds_notice2`
--
ALTER TABLE `ds_notice2`
  ADD PRIMARY KEY (`n_num`);

--
-- 테이블의 인덱스 `ds_notice3`
--
ALTER TABLE `ds_notice3`
  ADD PRIMARY KEY (`n_num`);

--
-- 테이블의 인덱스 `ds_notice4`
--
ALTER TABLE `ds_notice4`
  ADD PRIMARY KEY (`n_num`);

--
-- 테이블의 인덱스 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`n_num`);

--
-- 테이블의 인덱스 `portfolio2`
--
ALTER TABLE `portfolio2`
  ADD PRIMARY KEY (`n_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `ds_member`
--
ALTER TABLE `ds_member`
  MODIFY `m_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `ds_notice1`
--
ALTER TABLE `ds_notice1`
  MODIFY `n_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `ds_notice2`
--
ALTER TABLE `ds_notice2`
  MODIFY `n_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `ds_notice3`
--
ALTER TABLE `ds_notice3`
  MODIFY `n_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `ds_notice4`
--
ALTER TABLE `ds_notice4`
  MODIFY `n_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `n_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `portfolio2`
--
ALTER TABLE `portfolio2`
  MODIFY `n_num` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
