/*
 Navicat Premium Data Transfer

 Source Server         : TUF-Shikikie
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : cctv

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 11/03/2024 09:42:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ipcam
-- ----------------------------
DROP TABLE IF EXISTS `ipcam`;
CREATE TABLE `ipcam`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `port` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `room` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `update_at` datetime(0) NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ipcam
-- ----------------------------
INSERT INTO `ipcam` VALUES (26, '10.1.48.182', '52047', 'DSI_Office', 'admin', 'mjucctv2020', '2024-01-29 12:25:13', '2024-01-18 15:24:34');
INSERT INTO `ipcam` VALUES (27, '10.2.9.85', '40704', 'กองบริหารทรัพย์สิน', 'admin', 'mjucctv2020', '2024-01-18 15:27:42', '2024-01-18 15:27:42');
INSERT INTO `ipcam` VALUES (29, '10.1.53.16', '48819', 'ทางเข้าที่จอดรถใต้ตึกอำนวยฯ', 'admin', 'mjucctv2020', '2024-01-18 15:29:02', '2024-01-18 15:29:02');
INSERT INTO `ipcam` VALUES (30, '10.1.6.50', '34088', 'สำนักหอสมุด ชั้น 1', 'admin', 'mjucctv2020', '2024-01-18 15:29:30', '2024-01-18 15:29:30');
INSERT INTO `ipcam` VALUES (34, '10.1.48.47', '81', 'ห้องทำงาน_ทดสอบ', 'admin', '888888', '2024-01-23 12:52:37', '2024-01-22 15:31:02');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `urole` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'shikikie', 'kikie1236', '1');

SET FOREIGN_KEY_CHECKS = 1;
