/*
Navicat MySQL Data Transfer

Source Server         : yerel
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : xhoca

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-03-11 14:23:58
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `yayinlar`
-- ----------------------------
DROP TABLE IF EXISTS `yayinlar`;
CREATE TABLE `yayinlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yazar` varchar(101) COLLATE utf8_turkish_ci NOT NULL,
  `dergi` varchar(101) COLLATE utf8_turkish_ci NOT NULL,
  `makale` varchar(101) COLLATE utf8_turkish_ci NOT NULL,
  `cilt` varchar(51) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of yayinlar
-- ----------------------------
INSERT INTO `yayinlar` VALUES ('1', 'Ali Gezer', 'Türk Matematik Dergisi', 'Asal Çarpanların Hesaplanması', 'Cilt : 2, Sayı : 5, Sayfa : 7-12');
INSERT INTO `yayinlar` VALUES ('3', 'Ali Gezer', 'Journal of Algebra', 'Prime Rings', 'Vol : 4 No 3 pp : 12-22');
