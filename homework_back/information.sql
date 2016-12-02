/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-12-02 01:46:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `序号` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `姓名` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `性别` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `学号` int(10) DEFAULT NULL,
  `班级` int(8) DEFAULT NULL,
  PRIMARY KEY (`序号`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES ('1', '张三', '男', '2016210001', '1141601');
INSERT INTO `information` VALUES ('2', '李四', '男', '2016210002', '1141601');
INSERT INTO `information` VALUES ('3', '小明', '男', '2016210003', '1141601');
SET FOREIGN_KEY_CHECKS=1;
