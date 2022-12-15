/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80031
 Source Host           : localhost:3306
 Source Schema         : simethris

 Target Server Type    : MySQL
 Target Server Version : 80031
 File Encoding         : 65001

 Date: 15/12/2022 16:21:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for riph_admin
-- ----------------------------
DROP TABLE IF EXISTS `riph_admin`;
CREATE TABLE `riph_admin` (
  `id_riph` int NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `v_pengajuan_import` int NOT NULL,
  `v_beban_tanam` int NOT NULL,
  `v_beban_produksi` int NOT NULL,
  `jml_importir` int NOT NULL,
  `periode` int DEFAULT NULL,
  PRIMARY KEY (`id_riph`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of riph_admin
-- ----------------------------
BEGIN;
INSERT INTO `riph_admin` (`id_riph`, `tanggal`, `v_pengajuan_import`, `v_beban_tanam`, `v_beban_produksi`, `jml_importir`, `periode`) VALUES (6, '2021-02-08 21:13:00', 868324, 7236, 43416, 117, 2021);
INSERT INTO `riph_admin` (`id_riph`, `tanggal`, `v_pengajuan_import`, `v_beban_tanam`, `v_beban_produksi`, `jml_importir`, `periode`) VALUES (7, '2020-02-05 14:07:00', 1000000, 8333, 50000, 100, 2020);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
