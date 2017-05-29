/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50160
Source Host           : localhost:3306
Source Database       : phpgsggzcglxt

Target Server Type    : MYSQL
Target Server Version : 50160
File Encoding         : 65001

Date: 2017-04-27 21:18:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `allusers`
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES ('2', 'hsg', 'hsg', '超级管理员', '2017-04-27 07:46:56');
INSERT INTO `allusers` VALUES ('3', 'aaa', 'aaa', '超级管理员', '2017-04-27 19:31:45');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of baoxiushenqing
-- ----------------------------
INSERT INTO `baoxiushenqing` VALUES ('2', '14932918587601', '法国法国', '复印机', '的高峰电饭锅分店', '2017-04-27', '111', '王猛', '人事部', '13202587111', '损坏', '发萨达发送到', '是', '2017-04-27 19:19:49');
INSERT INTO `baoxiushenqing` VALUES ('5', '14932918003834', '才不徐碧城', '点钞机', '高峰发过火给', '2017-04-28', '111', '王猛', '人事部', '13202587111', null, null, '是', '2017-04-27 19:27:56');
INSERT INTO `baoxiushenqing` VALUES ('6', '14932918003834', '才不徐碧城', '点钞机', '地方给对方', '2017-04-27', '111', '王猛', '人事部', '13202587111', '已报修', 'sdf sdf ', '是', '2017-04-27 19:31:20');

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
INSERT INTO `gonggongzichan` VALUES ('2', '14932916582909', '人涂涂乐体育', '打印机', '1580', 'uploadfile/1493291785pjuu.jpg', '吃v下次再V型从', 'hsg', '是', '2017-04-27 19:16:28');
INSERT INTO `gonggongzichan` VALUES ('3', '14932918003834', '才不徐碧城', '点钞机', '888', 'uploadfile/1493291823wxmn.jpg', '程序VC徐相册', 'hsg', '是', '2017-04-27 19:17:06');
INSERT INTO `gonggongzichan` VALUES ('4', '14932918587601', '法国法国', '复印机', '3280', 'uploadfile/1493291877rs81.jpg', '地方地方', '111', '是', '2017-04-27 19:17:59');
INSERT INTO `gonggongzichan` VALUES ('5', '14932926369216', 'UIUI i求偶', '复印机', '3280', 'uploadfile/1493292652vwfn.jpg', '大师傅师父父都是', '111', '是', '2017-04-27 19:30:54');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of yonghuxinxi
-- ----------------------------
INSERT INTO `yonghuxinxi` VALUES ('2', '111', '111', '王猛', '男', '2017-04-27', '330302198702054587', '人事部', '5', '13202587111', '259118@qq.com', '萨达萨达', '是', '2017-04-27 18:53:11');
INSERT INTO `yonghuxinxi` VALUES ('3', '555', '555', '琳琳', '女', '2017-04-27', '330302198702054333', '宣传部', '5', '13202587234', '2598@qq.com', '电风扇是', '是', '2017-04-27 18:53:51');
INSERT INTO `yonghuxinxi` VALUES ('4', '333', '333', '高峰', '男', '2017-04-27', '330302198702054111', '人事部', '5', '13202587345', '259118@qq.com', '的水电费 ', '否', '2017-04-27 19:30:14');
