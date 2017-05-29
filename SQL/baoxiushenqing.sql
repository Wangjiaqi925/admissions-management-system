/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : phpgsggzcglxt

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2017-05-29 12:34:53
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `baoxiushenqing`
-- ----------------------------
DROP TABLE IF EXISTS `baoxiushenqing`;
CREATE TABLE `baoxiushenqing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(50) DEFAULT NULL,
  `leixing` varchar(50) DEFAULT NULL,
  `baoxiuyuanyin` varchar(300) DEFAULT NULL,
  `baoxiuriqi` varchar(50) DEFAULT NULL,
  `yonghu` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `bumen` varchar(50) DEFAULT NULL,
  `shouji` varchar(50) DEFAULT NULL,
  `jieguo` varchar(50) DEFAULT NULL,
  `shuoming` varchar(500) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of baoxiushenqing
-- ----------------------------
INSERT INTO `baoxiushenqing` VALUES ('7', '14932926369216', '复印机1', '复印机', '损坏', '2017-05-02', '333', '高峰', '人事部', '13202587345', null, null, '否', '2017-05-23 16:54:16');
INSERT INTO `baoxiushenqing` VALUES ('8', '14932926369216', '复印机1', '复印机', '123', '2017-05-03', 'wjq', '王加琦', '财务部', '13472589674', null, null, '否', '2017-05-24 02:50:48');
INSERT INTO `baoxiushenqing` VALUES ('9', '14932918587601', '复印机2', '复印机', '333', '2017-05-09', 'wjq', '王加琦', '财务部', '13472589674', null, null, '否', '2017-05-24 02:52:07');
INSERT INTO `baoxiushenqing` VALUES ('10', '14932918003834', '点钞机1', '点钞机', '4444', '2017-05-09', 'wjq', '王加琦', '财务部', '13472589674', '完好', '', '否', '2017-05-24 02:52:15');
