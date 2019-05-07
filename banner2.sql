/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : banner2

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 08/05/2019 06:14:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_banners
-- ----------------------------
DROP TABLE IF EXISTS `t_banners`;
CREATE TABLE `t_banners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_banners
-- ----------------------------
INSERT INTO `t_banners` VALUES (1, 'banner1', 'https://blog.csdn.net/Cheny_Yang', 'banner1.jpg');
INSERT INTO `t_banners` VALUES (2, 'banner2', 'https://github.com/13836005450', 'banner2.jpg');
INSERT INTO `t_banners` VALUES (3, 'banner3', 'https://www.baidu.com', 'banner3.jpg');
INSERT INTO `t_banners` VALUES (4, 'banner4', 'https://github.com/13836005450', 'banner4.jpg');
INSERT INTO `t_banners` VALUES (5, 'banner5', 'https://www.baidu.com', 'banner5.jpg');
INSERT INTO `t_banners` VALUES (6, 'banner6', 'https://www.baidu.com', 'banner6.jpg');
INSERT INTO `t_banners` VALUES (7, 'banner7', 'https://www.baidu.com', 'banner7.jpg');
INSERT INTO `t_banners` VALUES (8, 'banner8', 'https://www.baidu.com', 'banner8.jpg');
INSERT INTO `t_banners` VALUES (9, 'banner9', 'https://www.baidu.com', 'banner9.jpg');
INSERT INTO `t_banners` VALUES (10, 'banner10', 'https://www.baidu.com', 'banner10.jpg');
INSERT INTO `t_banners` VALUES (11, 'menu', 'https://www.baidu.com', 'menu.jpg');
INSERT INTO `t_banners` VALUES (12, 'tel', '13836005450', '');

-- ----------------------------
-- Table structure for t_traffic
-- ----------------------------
DROP TABLE IF EXISTS `t_traffic`;
CREATE TABLE `t_traffic`  (
  `traffic` bigint(255) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_traffic
-- ----------------------------
INSERT INTO `t_traffic` VALUES (0);

SET FOREIGN_KEY_CHECKS = 1;
