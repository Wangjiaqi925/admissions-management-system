/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : phpgsggzcglxt

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2017-05-29 12:34:59
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `gonggongzichan`
-- ----------------------------
DROP TABLE IF EXISTS `gonggongzichan`;
CREATE TABLE `gonggongzichan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(300) DEFAULT NULL,
  `leixing` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `tupian` varchar(50) DEFAULT NULL,
  `shuoming` varchar(500) DEFAULT NULL,
  `yonghu` varchar(50) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of gonggongzichan
-- ----------------------------
INSERT INTO `gonggongzichan` VALUES ('2', '14932916582909', '打印机1', '打印机', '1580', 'uploadfile/1493291785pjuu.jpg', '123', 'hsg', '是', '2017-04-27 19:16:28');
INSERT INTO `gonggongzichan` VALUES ('3', '14932918003834', '点钞机1', '点钞机', '888', 'uploadfile/1493291823wxmn.jpg', '123', 'hsg', '是', '2017-04-27 19:17:06');
INSERT INTO `gonggongzichan` VALUES ('4', '14932918587601', '复印机2', '复印机', '3280', 'uploadfile/1493291877rs81.jpg', '123', '111', '是', '2017-04-27 19:17:59');
INSERT INTO `gonggongzichan` VALUES ('5', '14932926369216', '复印机1', '复印机', '3280', 'uploadfile/1493292652vwfn.jpg', '123', '111', '是', '2017-04-27 19:30:54');
