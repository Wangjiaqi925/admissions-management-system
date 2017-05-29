/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : phpgsggzcglxt

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2017-05-29 12:35:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `yonghuxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `yonghuxinxi`;
CREATE TABLE `yonghuxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yonghuming` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `chushengnianyue` varchar(50) DEFAULT NULL,
  `shenfenzheng` varchar(300) DEFAULT NULL,
  `bumen` varchar(50) DEFAULT NULL,
  `gongling` varchar(50) DEFAULT NULL,
  `shouji` varchar(50) DEFAULT NULL,
  `youxiang` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of yonghuxinxi
-- ----------------------------
INSERT INTO `yonghuxinxi` VALUES ('2', '111', '111', '王猛', '男', '2017-04-27', '330302198702054587', '人事部', '5', '13202587111', '259118@qq.com', '萨达萨达', '是', '2017-04-27 18:53:11');
INSERT INTO `yonghuxinxi` VALUES ('3', '555', '555', '琳琳', '女', '2017-04-27', '330302198702054333', '宣传部', '5', '13202587234', '2598@qq.com', '电风扇是', '是', '2017-04-27 18:53:51');
INSERT INTO `yonghuxinxi` VALUES ('4', '333', '333', '高峰', '男', '2017-04-27', '330302198702054111', '人事部', '5', '13202587345', '259118@qq.com', '的水电费 ', '否', '2017-04-27 19:30:14');
INSERT INTO `yonghuxinxi` VALUES ('5', 'wjq', 'wjq', '王加琦', '男', '1994-09-25', '310225199409254818', '财务部', '4', '13472589674', '1542306376@qq.com', '', '否', '2017-05-23 16:59:24');
