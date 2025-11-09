-- phpMyAdmin SQL Dump
-- version 3.2.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Haziran 2010 saat 17:58:30
-- Sunucu sürümü: 5.1.37
-- PHP Sürümü: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `okul`
--

-- --------------------------------------------------------

--
-- Tablo yapısı: `dersler`
--

CREATE TABLE IF NOT EXISTS `dersler` (
  `ders_kodu` varchar(5) NOT NULL,
  `ders_adi` varchar(30) NOT NULL,
  PRIMARY KEY (`ders_kodu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`ders_kodu`, `ders_adi`) VALUES
('ted', 'Tük Dili ve Edebiyatı'),
('geo', 'Geometri'),
('int', 'İnternet Programcılığı'),
('mat', 'Matematik'),
('din', 'Din Kültürü ve Ahlak Bilgisi'),
('dil', 'Dil ve Anlatım');

-- --------------------------------------------------------

--
-- Tablo yapısı: `notlar`
--

CREATE TABLE IF NOT EXISTS `notlar` (
  `ogrenci_no` tinyint(3) unsigned NOT NULL,
  `ders_kodu` varchar(5) NOT NULL,
  `notu` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`ogrenci_no`,`ders_kodu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `notlar`
--

INSERT INTO `notlar` (`ogrenci_no`, `ders_kodu`, `notu`) VALUES
(54, 'ted', 79),
(67, 'ted', 42),
(71, 'ted', 42),
(72, 'ted', 59),
(18, 'ted', 85),
(22, 'ted', 60),
(41, 'ted', 90),
(44, 'ted', 45),
(59, 'ted', 19),
(11, 'ted', 63),
(14, 'ted', 69),
(25, 'ted', 24),
(33, 'ted', 49),
(57, 'ted', 15),
(70, 'ted', 42),
(86, 'ted', 26),
(85, 'ted', 43),
(81, 'ted', 97),
(87, 'ted', 26),
(54, 'geo', 39),
(67, 'geo', 86),
(71, 'geo', 15),
(72, 'geo', 84),
(18, 'geo', 91),
(22, 'geo', 46),
(41, 'geo', 36),
(44, 'geo', 62),
(59, 'geo', 82),
(11, 'geo', 91),
(14, 'geo', 39),
(25, 'geo', 23),
(33, 'geo', 44),
(57, 'geo', 91),
(70, 'geo', 31),
(86, 'geo', 71),
(85, 'geo', 48),
(81, 'geo', 42),
(87, 'geo', 64),
(54, 'int', 97),
(67, 'int', 37),
(71, 'int', 70),
(72, 'int', 60),
(18, 'int', 31),
(22, 'int', 85),
(41, 'int', 88),
(44, 'int', 70),
(59, 'int', 24),
(11, 'int', 48),
(14, 'int', 49),
(25, 'int', 16),
(33, 'int', 93),
(57, 'int', 86),
(70, 'int', 37),
(86, 'int', 35),
(85, 'int', 42),
(81, 'int', 56),
(87, 'int', 92),
(54, 'mat', 49),
(67, 'mat', 62),
(71, 'mat', 30),
(72, 'mat', 39),
(18, 'mat', 23),
(22, 'mat', 43),
(41, 'mat', 39),
(44, 'mat', 91),
(59, 'mat', 52),
(11, 'mat', 90),
(14, 'mat', 68),
(25, 'mat', 73),
(33, 'mat', 100),
(57, 'mat', 92),
(70, 'mat', 61),
(86, 'mat', 25),
(85, 'mat', 89),
(81, 'mat', 69),
(87, 'mat', 92),
(54, 'din', 31),
(67, 'din', 71),
(71, 'din', 82),
(72, 'din', 16),
(18, 'din', 45),
(22, 'din', 53),
(41, 'din', 63),
(44, 'din', 80),
(59, 'din', 63),
(11, 'din', 87),
(14, 'din', 76),
(25, 'din', 53),
(33, 'din', 42),
(57, 'din', 94),
(70, 'din', 51),
(86, 'din', 96),
(85, 'din', 63),
(81, 'din', 40),
(87, 'din', 53),
(54, 'dil', 66),
(67, 'dil', 81),
(71, 'dil', 19),
(72, 'dil', 98),
(18, 'dil', 35),
(22, 'dil', 94),
(41, 'dil', 82),
(44, 'dil', 78),
(59, 'dil', 32),
(11, 'dil', 55),
(14, 'dil', 65),
(25, 'dil', 96),
(33, 'dil', 45),
(57, 'dil', 49),
(70, 'dil', 18),
(86, 'dil', 43),
(85, 'dil', 16),
(81, 'dil', 29),
(87, 'dil', 37);

-- --------------------------------------------------------

--
-- Tablo yapısı: `ogrenciler`
--

CREATE TABLE IF NOT EXISTS `ogrenciler` (
  `ogrenci_no` smallint(5) unsigned NOT NULL,
  `adi` varchar(20) NOT NULL,
  `soyadi` varchar(20) NOT NULL,
  `cinsiyeti` char(1) DEFAULT 'e',
  `sinif_kodu` varchar(10) NOT NULL,
  PRIMARY KEY (`ogrenci_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`ogrenci_no`, `adi`, `soyadi`, `cinsiyeti`, `sinif_kodu`) VALUES
(54, 'Ahmet', 'Özdemir', 'e', '12blsa'),
(67, 'Hatice', 'Eren', 'k', '12blsa'),
(71, 'Havva', 'Demir', 'k', '12blsa'),
(72, 'Zahid', 'Koruk', 'e', '12blsa'),
(18, 'Mahir', 'Seren', 'e', '12blsb'),
(22, 'Mustafa', 'Erdem', 'e', '12blsb'),
(41, 'Ayşe', 'İyi', 'k', '12blsb'),
(44, 'Ali', 'Kaya', 'e', '12blsb'),
(59, 'Büşra', 'Maya', 'k', '12blsb'),
(11, 'Elif', 'Korkut', 'k', '12andbls'),
(14, 'Seda', 'Bayır', 'k', '12andbls'),
(25, 'Erkan', 'Çayır', 'e', '12andbls'),
(33, 'Necat', 'Er', 'e', '12andbls'),
(57, 'Cihan', 'Okur', 'e', '12andbls'),
(70, 'Meral', 'Benek', 'k', '12andbls'),
(86, 'Kenan', 'Dere', 'e', '12blsa'),
(85, 'Cemil', 'Kıyak', 'e', '12blsb'),
(81, 'Ferhat', 'Öznur', 'e', '12blsa'),
(87, 'Esma', 'Kara', 'k', '12andbls');

-- --------------------------------------------------------

--
-- Tablo yapısı: `siniflar`
--

CREATE TABLE IF NOT EXISTS `siniflar` (
  `sinif_kodu` varchar(10) NOT NULL,
  `sinif_adi` varchar(20) NOT NULL,
  PRIMARY KEY (`sinif_kodu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siniflar`
--

INSERT INTO `siniflar` (`sinif_kodu`, `sinif_adi`) VALUES
('12blsa', '12 Bilişim A'),
('12blsb', '12 Bilişim B'),
('12andbls', '12 Anadolu Bilişim');
