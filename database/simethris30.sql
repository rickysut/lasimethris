/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80031
 Source Host           : localhost:3306
 Source Schema         : simethris30

 Target Server Type    : MySQL
 Target Server Version : 80031
 File Encoding         : 65001

 Date: 14/12/2022 14:06:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for audit_logs
-- ----------------------------
DROP TABLE IF EXISTS `audit_logs`;
CREATE TABLE `audit_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `host` varchar(46) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of audit_logs
-- ----------------------------
BEGIN;
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (1, 'audit:created', 2, 'App\\Models\\User#2', 1, '{\"name\":\"Ricky\",\"username\":\"rickysut\",\"roleaccess\":\"2\",\"email\":\"ricky@sali-evo.com\",\"updated_at\":\"2022-10-04 09:34:27\",\"created_at\":\"2022-10-04 09:34:27\",\"id\":2}', '127.0.0.1', '2022-10-04 09:34:27', '2022-10-04 09:34:27');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (2, 'audit:updated', 14, 'App\\Models\\Permission#14', 1, '{\"perm_type\":\"3\",\"grp_title\":\"Pengguna\",\"updated_at\":\"2022-10-05 07:36:34\",\"id\":14}', '127.0.0.1', '2022-10-05 07:36:34', '2022-10-05 07:36:34');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (3, 'audit:updated', 1, 'App\\Models\\Permission#1', 1, '{\"perm_type\":\"5\",\"grp_title\":\"Manajemen Pengguna\",\"updated_at\":\"2022-10-05 07:38:24\",\"id\":1}', '127.0.0.1', '2022-10-05 07:38:24', '2022-10-05 07:38:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (4, 'audit:updated', 14, 'App\\Models\\Permission#14', 1, '{\"grp_title\":\"Users\",\"updated_at\":\"2022-10-05 07:43:04\",\"id\":14}', '127.0.0.1', '2022-10-05 07:43:04', '2022-10-05 07:43:04');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (5, 'audit:updated', 1, 'App\\Models\\Permission#1', 1, '{\"grp_title\":\"User management\",\"updated_at\":\"2022-10-05 07:43:13\",\"id\":1}', '127.0.0.1', '2022-10-05 07:43:13', '2022-10-05 07:43:13');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (6, 'audit:updated', 13, 'App\\Models\\Permission#13', 1, '{\"perm_type\":\"2\",\"grp_title\":\"Users\",\"updated_at\":\"2022-10-05 07:43:41\",\"id\":13}', '127.0.0.1', '2022-10-05 07:43:41', '2022-10-05 07:43:41');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (7, 'audit:updated', 15, 'App\\Models\\Permission#15', 1, '{\"perm_type\":\"4\",\"grp_title\":\"Users\",\"updated_at\":\"2022-10-05 07:43:53\",\"id\":15}', '127.0.0.1', '2022-10-05 07:43:53', '2022-10-05 07:43:53');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (8, 'audit:updated', 12, 'App\\Models\\Permission#12', 1, '{\"perm_type\":\"1\",\"grp_title\":\"Users\",\"updated_at\":\"2022-10-05 07:44:10\",\"id\":12}', '127.0.0.1', '2022-10-05 07:44:10', '2022-10-05 07:44:10');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (9, 'audit:updated', 16, 'App\\Models\\Permission#16', 1, '{\"perm_type\":\"5\",\"grp_title\":\"Users\",\"updated_at\":\"2022-10-05 07:44:36\",\"id\":16}', '127.0.0.1', '2022-10-05 07:44:36', '2022-10-05 07:44:36');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (10, 'audit:updated', 9, 'App\\Models\\Permission#9', 1, '{\"perm_type\":\"3\",\"grp_title\":\"Roles\",\"updated_at\":\"2022-10-05 07:44:46\",\"id\":9}', '127.0.0.1', '2022-10-05 07:44:46', '2022-10-05 07:44:46');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (11, 'audit:updated', 8, 'App\\Models\\Permission#8', 1, '{\"perm_type\":\"2\",\"grp_title\":\"Roles\",\"updated_at\":\"2022-10-05 07:44:56\",\"id\":8}', '127.0.0.1', '2022-10-05 07:44:56', '2022-10-05 07:44:56');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (12, 'audit:updated', 10, 'App\\Models\\Permission#10', 1, '{\"perm_type\":\"4\",\"grp_title\":\"Roles\",\"updated_at\":\"2022-10-05 07:45:05\",\"id\":10}', '127.0.0.1', '2022-10-05 07:45:05', '2022-10-05 07:45:05');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (13, 'audit:updated', 7, 'App\\Models\\Permission#7', 1, '{\"perm_type\":\"1\",\"grp_title\":\"Roles\",\"updated_at\":\"2022-10-05 07:45:23\",\"id\":7}', '127.0.0.1', '2022-10-05 07:45:23', '2022-10-05 07:45:23');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (14, 'audit:updated', 11, 'App\\Models\\Permission#11', 1, '{\"perm_type\":\"5\",\"grp_title\":\"Roles\",\"updated_at\":\"2022-10-05 07:45:42\",\"id\":11}', '127.0.0.1', '2022-10-05 07:45:42', '2022-10-05 07:45:42');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (15, 'audit:updated', 19, 'App\\Models\\Permission#19', 1, '{\"perm_type\":\"2\",\"grp_title\":\"Profile\",\"updated_at\":\"2022-10-05 07:46:09\",\"id\":19}', '127.0.0.1', '2022-10-05 07:46:09', '2022-10-05 07:46:09');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (16, 'audit:updated', 4, 'App\\Models\\Permission#4', 1, '{\"perm_type\":\"3\",\"grp_title\":\"Permissions\",\"updated_at\":\"2022-10-05 07:46:24\",\"id\":4}', '127.0.0.1', '2022-10-05 07:46:24', '2022-10-05 07:46:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (17, 'audit:updated', 3, 'App\\Models\\Permission#3', 1, '{\"perm_type\":\"2\",\"grp_title\":\"Permissions\",\"updated_at\":\"2022-10-05 07:46:35\",\"id\":3}', '127.0.0.1', '2022-10-05 07:46:35', '2022-10-05 07:46:35');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (18, 'audit:updated', 5, 'App\\Models\\Permission#5', 1, '{\"perm_type\":\"4\",\"grp_title\":\"Permissions\",\"updated_at\":\"2022-10-05 07:46:47\",\"id\":5}', '127.0.0.1', '2022-10-05 07:46:48', '2022-10-05 07:46:48');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (19, 'audit:updated', 2, 'App\\Models\\Permission#2', 1, '{\"perm_type\":\"1\",\"grp_title\":\"Permissions\",\"updated_at\":\"2022-10-05 07:47:01\",\"id\":2}', '127.0.0.1', '2022-10-05 07:47:01', '2022-10-05 07:47:01');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (20, 'audit:updated', 6, 'App\\Models\\Permission#6', 1, '{\"perm_type\":\"5\",\"grp_title\":\"Permissions\",\"updated_at\":\"2022-10-05 07:47:13\",\"id\":6}', '127.0.0.1', '2022-10-05 07:47:13', '2022-10-05 07:47:13');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (21, 'audit:updated', 17, 'App\\Models\\Permission#17', 1, '{\"perm_type\":\"3\",\"grp_title\":\"Audit Logs\",\"updated_at\":\"2022-10-05 07:47:23\",\"id\":17}', '127.0.0.1', '2022-10-05 07:47:24', '2022-10-05 07:47:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (22, 'audit:updated', 18, 'App\\Models\\Permission#18', 1, '{\"perm_type\":\"5\",\"grp_title\":\"Audit Logs\",\"updated_at\":\"2022-10-05 07:47:34\",\"id\":18}', '127.0.0.1', '2022-10-05 07:47:34', '2022-10-05 07:47:34');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (23, 'audit:created', 20, 'App\\Models\\Permission#20', 1, '{\"title\":\"dashboard_access\",\"perm_type\":\"5\",\"grp_title\":\"Dashboard\",\"updated_at\":\"2022-10-05 08:18:49\",\"created_at\":\"2022-10-05 08:18:49\",\"id\":20}', '127.0.0.1', '2022-10-05 08:18:49', '2022-10-05 08:18:49');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (24, 'audit:created', 21, 'App\\Models\\Permission#21', 1, '{\"title\":\"landing_access\",\"perm_type\":\"5\",\"grp_title\":\"Beranda\",\"updated_at\":\"2022-10-05 15:03:17\",\"created_at\":\"2022-10-05 15:03:17\",\"id\":21}', '127.0.0.1', '2022-10-05 15:03:18', '2022-10-05 15:03:18');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (25, 'audit:updated', 20, 'App\\Models\\Permission#20', 1, '{\"grp_title\":\"Dashboard Admin\",\"updated_at\":\"2022-10-07 06:50:16\",\"id\":20}', '127.0.0.1', '2022-10-07 06:50:16', '2022-10-07 06:50:16');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (26, 'audit:created', 22, 'App\\Models\\Permission#22', 1, '{\"title\":\"dashboardv_access\",\"perm_type\":\"5\",\"grp_title\":\"Dashboard Verifikator\",\"updated_at\":\"2022-10-07 06:52:04\",\"created_at\":\"2022-10-07 06:52:04\",\"id\":22}', '127.0.0.1', '2022-10-07 06:52:04', '2022-10-07 06:52:04');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (27, 'audit:updated', 20, 'App\\Models\\Permission#20', 1, '{\"grp_title\":\"Dashboard User\",\"updated_at\":\"2022-10-07 06:52:15\",\"id\":20}', '127.0.0.1', '2022-10-07 06:52:15', '2022-10-07 06:52:15');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (28, 'audit:created', 23, 'App\\Models\\Permission#23', 1, '{\"title\":\"dashboardA\",\"perm_type\":\"5\",\"grp_title\":\"Dashboard Admin\",\"updated_at\":\"2022-10-07 06:52:32\",\"created_at\":\"2022-10-07 06:52:32\",\"id\":23}', '127.0.0.1', '2022-10-07 06:52:32', '2022-10-07 06:52:32');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (29, 'audit:updated', 23, 'App\\Models\\Permission#23', 1, '{\"title\":\"dashboarda_access\",\"updated_at\":\"2022-10-07 06:53:55\",\"id\":23}', '127.0.0.1', '2022-10-07 06:53:55', '2022-10-07 06:53:55');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (30, 'audit:created', 3, 'App\\Models\\User#3', 1, '{\"name\":\"verifikator1\",\"username\":\"verifikator1\",\"roleaccess\":\"3\",\"email\":\"veri@gmail.com\",\"updated_at\":\"2022-10-07 08:15:55\",\"created_at\":\"2022-10-07 08:15:55\",\"id\":3}', '127.0.0.1', '2022-10-07 08:15:55', '2022-10-07 08:15:55');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (31, 'audit:created', 3, 'App\\Models\\Role#3', 1, '{\"title\":\"Verifikator\",\"updated_at\":\"2022-10-07 08:16:33\",\"created_at\":\"2022-10-07 08:16:33\",\"id\":3}', '127.0.0.1', '2022-10-07 08:16:33', '2022-10-07 08:16:33');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (32, 'audit:updated', 20, 'App\\Models\\Permission#20', 1, '{\"grp_title\":\"Dashboard\",\"updated_at\":\"2022-10-13 15:32:35\",\"id\":20}', '127.0.0.1', '2022-10-13 15:32:35', '2022-10-13 15:32:35');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (33, 'audit:updated', 21, 'App\\Models\\Permission#21', 1, '{\"grp_title\":\"Landing\",\"updated_at\":\"2022-10-13 15:32:49\",\"id\":21}', '127.0.0.1', '2022-10-13 15:32:49', '2022-10-13 15:32:49');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (34, 'audit:deleted', 22, 'App\\Models\\Permission#22', 1, '{\"id\":22,\"title\":\"dashboardv_access\",\"perm_type\":\"5\",\"grp_title\":\"Dashboard Verifikator\",\"created_at\":\"2022-10-07 06:52:04\",\"updated_at\":\"2022-10-13 15:34:10\",\"deleted_at\":\"2022-10-13 15:34:10\"}', '127.0.0.1', '2022-10-13 15:34:10', '2022-10-13 15:34:10');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (35, 'audit:deleted', 23, 'App\\Models\\Permission#23', 1, '{\"id\":23,\"title\":\"dashboarda_access\",\"perm_type\":\"5\",\"grp_title\":\"Dashboard Admin\",\"created_at\":\"2022-10-07 06:52:32\",\"updated_at\":\"2022-10-13 15:34:17\",\"deleted_at\":\"2022-10-13 15:34:17\"}', '127.0.0.1', '2022-10-13 15:34:17', '2022-10-13 15:34:17');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (36, 'audit:created', 24, 'App\\Models\\Permission#24', 1, '{\"title\":\"user_task_access\",\"perm_type\":\"5\",\"grp_title\":\"User Task\",\"updated_at\":\"2022-10-13 15:46:06\",\"created_at\":\"2022-10-13 15:46:06\",\"id\":24}', '127.0.0.1', '2022-10-13 15:46:06', '2022-10-13 15:46:06');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (37, 'audit:created', 25, 'App\\Models\\Permission#25', 1, '{\"title\":\"pull_access\",\"perm_type\":\"5\",\"grp_title\":\"Pull\\/Sync Data\",\"updated_at\":\"2022-10-13 16:16:43\",\"created_at\":\"2022-10-13 16:16:43\",\"id\":25}', '127.0.0.1', '2022-10-13 16:16:43', '2022-10-13 16:16:43');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (38, 'audit:created', 26, 'App\\Models\\Permission#26', 1, '{\"title\":\"commitment_access\",\"perm_type\":\"5\",\"grp_title\":\"Commitment\",\"updated_at\":\"2022-10-13 16:17:05\",\"created_at\":\"2022-10-13 16:17:05\",\"id\":26}', '127.0.0.1', '2022-10-13 16:17:05', '2022-10-13 16:17:05');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (39, 'audit:created', 4, 'App\\Models\\User#4', 1, '{\"name\":\"Herman\",\"username\":\"herman\",\"roleaccess\":\"3\",\"email\":\"herman@gmail.com\",\"updated_at\":\"2022-10-31 14:43:00\",\"created_at\":\"2022-10-31 14:43:00\",\"id\":4}', '127.0.0.1', '2022-10-31 14:43:00', '2022-10-31 14:43:00');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (40, 'audit:created', 4, 'App\\Models\\Role#4', 1, '{\"title\":\"user_v2\",\"updated_at\":\"2022-11-02 13:22:27\",\"created_at\":\"2022-11-02 13:22:27\",\"id\":4}', '127.0.0.1', '2022-11-02 13:22:27', '2022-11-02 13:22:27');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (41, 'audit:created', 27, 'App\\Models\\Permission#27', 1, '{\"title\":\"kelompoktani_access\",\"perm_type\":\"5\",\"grp_title\":\"Kelompok Tani\",\"updated_at\":\"2022-11-02 14:29:05\",\"created_at\":\"2022-11-02 14:29:05\",\"id\":27}', '127.0.0.1', '2022-11-02 14:29:05', '2022-11-02 14:29:05');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (42, 'audit:created', 28, 'App\\Models\\Permission#28', 1, '{\"title\":\"verifikasi_access\",\"perm_type\":\"5\",\"grp_title\":\"Verifikasi & SKL\",\"updated_at\":\"2022-11-03 06:39:24\",\"created_at\":\"2022-11-03 06:39:24\",\"id\":28}', '127.0.0.1', '2022-11-03 06:39:24', '2022-11-03 06:39:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (43, 'audit:created', 29, 'App\\Models\\Permission#29', 1, '{\"title\":\"pengajuan_access\",\"perm_type\":\"5\",\"grp_title\":\"Daftar Pengajuan\",\"updated_at\":\"2022-11-03 06:42:35\",\"created_at\":\"2022-11-03 06:42:35\",\"id\":29}', '127.0.0.1', '2022-11-03 06:42:35', '2022-11-03 06:42:35');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (44, 'audit:created', 30, 'App\\Models\\Permission#30', 1, '{\"title\":\"pengajuan_create\",\"perm_type\":\"1\",\"grp_title\":\"Daftar Pengajuan\",\"updated_at\":\"2022-11-03 06:42:55\",\"created_at\":\"2022-11-03 06:42:55\",\"id\":30}', '127.0.0.1', '2022-11-03 06:42:55', '2022-11-03 06:42:55');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (45, 'audit:created', 31, 'App\\Models\\Permission#31', 1, '{\"title\":\"pengajuan_edit\",\"perm_type\":\"2\",\"grp_title\":\"Daftar Pengajuan\",\"updated_at\":\"2022-11-03 06:47:01\",\"created_at\":\"2022-11-03 06:47:01\",\"id\":31}', '127.0.0.1', '2022-11-03 06:47:01', '2022-11-03 06:47:01');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (46, 'audit:created', 32, 'App\\Models\\Permission#32', 1, '{\"title\":\"pengajuan_show\",\"perm_type\":\"3\",\"grp_title\":\"Daftar Pengajuan\",\"updated_at\":\"2022-11-03 06:47:19\",\"created_at\":\"2022-11-03 06:47:19\",\"id\":32}', '127.0.0.1', '2022-11-03 06:47:19', '2022-11-03 06:47:19');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (47, 'audit:created', 33, 'App\\Models\\Permission#33', 1, '{\"title\":\"pengajuan_delete\",\"perm_type\":\"4\",\"grp_title\":\"Daftar Pengajuan\",\"updated_at\":\"2022-11-03 06:47:35\",\"created_at\":\"2022-11-03 06:47:35\",\"id\":33}', '127.0.0.1', '2022-11-03 06:47:35', '2022-11-03 06:47:35');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (48, 'audit:created', 34, 'App\\Models\\Permission#34', 1, '{\"title\":\"skl_access\",\"perm_type\":\"5\",\"grp_title\":\"Daftar SKL\",\"updated_at\":\"2022-11-03 06:47:53\",\"created_at\":\"2022-11-03 06:47:53\",\"id\":34}', '127.0.0.1', '2022-11-03 06:47:53', '2022-11-03 06:47:53');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (49, 'audit:created', 35, 'App\\Models\\Permission#35', 1, '{\"title\":\"skl_create\",\"perm_type\":\"1\",\"grp_title\":\"Daftar SKL\",\"updated_at\":\"2022-11-03 06:48:10\",\"created_at\":\"2022-11-03 06:48:10\",\"id\":35}', '127.0.0.1', '2022-11-03 06:48:10', '2022-11-03 06:48:10');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (50, 'audit:created', 36, 'App\\Models\\Permission#36', 1, '{\"title\":\"skl_edit\",\"perm_type\":\"2\",\"grp_title\":\"Daftar SKL\",\"updated_at\":\"2022-11-03 06:48:24\",\"created_at\":\"2022-11-03 06:48:24\",\"id\":36}', '127.0.0.1', '2022-11-03 06:48:24', '2022-11-03 06:48:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (51, 'audit:created', 37, 'App\\Models\\Permission#37', 1, '{\"title\":\"skl_show\",\"perm_type\":\"3\",\"grp_title\":\"Daftar SKL\",\"updated_at\":\"2022-11-03 06:48:40\",\"created_at\":\"2022-11-03 06:48:40\",\"id\":37}', '127.0.0.1', '2022-11-03 06:48:40', '2022-11-03 06:48:40');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (52, 'audit:created', 38, 'App\\Models\\Permission#38', 1, '{\"title\":\"skl_delete\",\"perm_type\":\"4\",\"grp_title\":\"Daftar SKL\",\"updated_at\":\"2022-11-03 06:48:54\",\"created_at\":\"2022-11-03 06:48:54\",\"id\":38}', '127.0.0.1', '2022-11-03 06:48:54', '2022-11-03 06:48:54');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (53, 'audit:created', 39, 'App\\Models\\Permission#39', 1, '{\"title\":\"folder_access\",\"perm_type\":\"5\",\"grp_title\":\"Pengelolaan Berkas\",\"updated_at\":\"2022-11-03 07:43:51\",\"created_at\":\"2022-11-03 07:43:51\",\"id\":39}', '127.0.0.1', '2022-11-03 07:43:51', '2022-11-03 07:43:51');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (54, 'audit:created', 40, 'App\\Models\\Permission#40', 1, '{\"title\":\"berkas_access\",\"perm_type\":\"5\",\"grp_title\":\"Berkas Saya\",\"updated_at\":\"2022-11-03 07:44:05\",\"created_at\":\"2022-11-03 07:44:05\",\"id\":40}', '127.0.0.1', '2022-11-03 07:44:05', '2022-11-03 07:44:05');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (55, 'audit:created', 41, 'App\\Models\\Permission#41', 1, '{\"title\":\"galeri_access\",\"perm_type\":\"5\",\"grp_title\":\"Galeri Saya\",\"updated_at\":\"2022-11-03 07:44:19\",\"created_at\":\"2022-11-03 07:44:19\",\"id\":41}', '127.0.0.1', '2022-11-03 07:44:19', '2022-11-03 07:44:19');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (56, 'audit:created', 42, 'App\\Models\\Permission#42', 1, '{\"title\":\"template_access\",\"perm_type\":\"5\",\"grp_title\":\"Template Master\",\"updated_at\":\"2022-11-03 07:44:35\",\"created_at\":\"2022-11-03 07:44:35\",\"id\":42}', '127.0.0.1', '2022-11-03 07:44:35', '2022-11-03 07:44:35');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (57, 'audit:created', 43, 'App\\Models\\Permission#43', 1, '{\"title\":\"onfarm_access\",\"perm_type\":\"5\",\"grp_title\":\"Onfarm\",\"updated_at\":\"2022-11-05 15:12:36\",\"created_at\":\"2022-11-05 15:12:36\",\"id\":43}', '127.0.0.1', '2022-11-05 15:12:36', '2022-11-05 15:12:36');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (58, 'audit:created', 44, 'App\\Models\\Permission#44', 1, '{\"title\":\"online_access\",\"perm_type\":\"5\",\"grp_title\":\"Online\",\"updated_at\":\"2022-11-05 15:12:53\",\"created_at\":\"2022-11-05 15:12:53\",\"id\":44}', '127.0.0.1', '2022-11-05 15:12:53', '2022-11-05 15:12:53');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (59, 'audit:created', 45, 'App\\Models\\Permission#45', 1, '{\"title\":\"completed_access\",\"perm_type\":\"5\",\"grp_title\":\"Completed\",\"updated_at\":\"2022-11-05 15:13:11\",\"created_at\":\"2022-11-05 15:13:11\",\"id\":45}', '127.0.0.1', '2022-11-05 15:13:11', '2022-11-05 15:13:11');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (77, 'audit:created', 14, 'App\\Models\\User#14', 13, '{\"name\":\"company1 satu\",\"username\":\"company1\",\"email\":\"company1@satu.com\",\"roleaccess\":2,\"updated_at\":\"2022-11-10 12:54:17\",\"created_at\":\"2022-11-10 12:54:17\",\"id\":14}', '127.0.0.1', '2022-11-10 12:54:17', '2022-11-10 12:54:17');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (78, 'audit:created', 9, 'App\\Models\\DataUser#9', 13, '{\"user_id\":14,\"first_name\":\"company1\",\"last_name\":\"satu\",\"mobile_phone\":\"0891212121212\",\"fix_phone\":\"121212121212\",\"company_name\":\"n2nio\",\"direktur_name\":\"direktur satu\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"Prov. Aceh\",\"kabupaten\":\"Kab. Bandung\",\"kecamatan\":\"kec. Bandung\",\"desa\":\"Desa Bandung\",\"ktp\":\"poe.png\",\"assignment\":\"ubiquity.png\",\"updated_at\":\"2022-11-10 12:54:17\",\"created_at\":\"2022-11-10 12:54:17\",\"id\":9}', '127.0.0.1', '2022-11-10 12:54:17', '2022-11-10 12:54:17');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (79, 'audit:deleted', 14, 'App\\Models\\User#14', 1, '{\"id\":14,\"name\":\"company1 satu\",\"username\":\"company1\",\"email\":\"company1@satu.com\",\"email_verified_at\":null,\"roleaccess\":2,\"created_at\":\"2022-11-10 12:54:17\",\"updated_at\":\"2022-11-10 13:00:33\",\"deleted_at\":\"2022-11-10 13:00:33\"}', '127.0.0.1', '2022-11-10 13:00:33', '2022-11-10 13:00:33');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (80, 'audit:created', 15, 'App\\Models\\User#15', NULL, '{\"name\":\"company1 satu\",\"username\":\"company1\",\"email\":\"company1@satu.com\",\"roleaccess\":2,\"updated_at\":\"2022-11-10 13:10:11\",\"created_at\":\"2022-11-10 13:10:11\",\"id\":15}', '127.0.0.1', '2022-11-10 13:10:11', '2022-11-10 13:10:11');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (81, 'audit:created', 10, 'App\\Models\\DataUser#10', NULL, '{\"user_id\":15,\"first_name\":\"company1\",\"last_name\":\"satu\",\"mobile_phone\":\"0891212121212\",\"fix_phone\":\"121212121212\",\"company_name\":\"Keytech indonesia\",\"direktur_name\":\"direktur satu\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"Prov. Aceh\",\"kabupaten\":\"Kab. Bandung\",\"kecamatan\":\"kec. Bandung\",\"desa\":\"Desa Bandung\",\"ktp\":\"poe.png\",\"assignment\":\"hikvision.png\",\"updated_at\":\"2022-11-10 13:10:11\",\"created_at\":\"2022-11-10 13:10:11\",\"id\":10}', '127.0.0.1', '2022-11-10 13:10:11', '2022-11-10 13:10:11');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (82, 'audit:created', 16, 'App\\Models\\User#16', NULL, '{\"username\":\"hortikultura.jaya\",\"roleaccess\":2,\"name\":\"PT. Hortikultura Jaya\",\"email\":\"PT. Hortikultura Jaya\",\"updated_at\":\"2022-11-21 05:53:02\",\"created_at\":\"2022-11-21 05:53:02\",\"id\":16}', '127.0.0.1', '2022-11-21 05:53:02', '2022-11-21 05:53:02');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (83, 'audit:created', 17, 'App\\Models\\User#17', NULL, '{\"username\":\"hortikultura.jaya\",\"roleaccess\":2,\"name\":\"Budi\",\"email\":\"horti.riph@gmail.com\",\"updated_at\":\"2022-11-21 06:58:48\",\"created_at\":\"2022-11-21 06:58:48\",\"id\":17}', '127.0.0.1', '2022-11-21 06:58:48', '2022-11-21 06:58:48');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (84, 'audit:created', 18, 'App\\Models\\User#18', NULL, '{\"username\":\"hortikultura.jaya\",\"roleaccess\":2,\"name\":\"Budi\",\"email\":\"horti.riph@gmail.com\",\"updated_at\":\"2022-11-21 07:00:12\",\"created_at\":\"2022-11-21 07:00:12\",\"id\":18}', '127.0.0.1', '2022-11-21 07:00:12', '2022-11-21 07:00:12');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (85, 'audit:created', 19, 'App\\Models\\User#19', NULL, '{\"username\":\"hortikultura.jaya\",\"roleaccess\":2,\"name\":\"Budi\",\"email\":\"horti.riph@gmail.com\",\"updated_at\":\"2022-11-21 07:59:56\",\"created_at\":\"2022-11-21 07:59:56\",\"id\":19}', '127.0.0.1', '2022-11-21 07:59:56', '2022-11-21 07:59:56');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (86, 'audit:created', 12, 'App\\Models\\DataUser#12', NULL, '{\"user_id\":19,\"company_name\":\"\'PT. Hortikultura Jaya\'\",\"name\":\"\'Budi\'\",\"mobile_phone\":\"\'08131111111X\'\",\"fix_phone\":\"\'021123456789\'\",\"pic_name\":\"\'Budi\'\",\"jabatan\":\"\'Direktur Utama\'\",\"npwp_company\":\"\'123456123456123\'\",\"nib_company\":\"\'1234567890123\'\",\"address_company\":\"\'Pasar Minggu\'\",\"provinsi\":\"\'31\'\",\"kabupaten\":\"\'3171\'\",\"kodepos\":\"\'12520\'\",\"ktp\":\"\'1234567891\'\",\"email_company\":\"\'horti.riph@gmail.com\'\",\"updated_at\":\"2022-11-21 08:37:34\",\"created_at\":\"2022-11-21 08:37:34\",\"id\":12}', '127.0.0.1', '2022-11-21 08:37:34', '2022-11-21 08:37:34');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (87, 'audit:created', 20, 'App\\Models\\User#20', NULL, '{\"username\":\"coba1\",\"roleaccess\":2,\"name\":\"\'Coba 1\'\",\"email\":\"\'inatrade@kemendag.go.id\'\",\"updated_at\":\"2022-11-21 08:47:31\",\"created_at\":\"2022-11-21 08:47:31\",\"id\":20}', '127.0.0.1', '2022-11-21 08:47:31', '2022-11-21 08:47:31');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (88, 'audit:created', 21, 'App\\Models\\User#21', NULL, '{\"username\":\"hortikultura.jaya\",\"roleaccess\":2,\"name\":\"Budi\",\"email\":\"horti.riph@gmail.com\",\"updated_at\":\"2022-11-21 09:04:24\",\"created_at\":\"2022-11-21 09:04:24\",\"id\":21}', '127.0.0.1', '2022-11-21 09:04:24', '2022-11-21 09:04:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (89, 'audit:created', 14, 'App\\Models\\DataUser#14', NULL, '{\"user_id\":21,\"company_name\":\"PT. Hortikultura Jaya\",\"name\":\"Budi\",\"mobile_phone\":\"08131111111X\",\"fix_phone\":\"021123456789\",\"pic_name\":\"Budi\",\"jabatan\":\"Direktur Utama\",\"npwp_company\":\"123456123456123\",\"nib_company\":\"1234567890123\",\"address_company\":\"Pasar Minggu\",\"provinsi\":\"31\",\"kabupaten\":\"3171\",\"kodepos\":\"12520\",\"ktp\":\"1234567891\",\"fax\":\"\",\"email_company\":\"horti.riph@gmail.com\",\"updated_at\":\"2022-11-21 09:04:24\",\"created_at\":\"2022-11-21 09:04:24\",\"id\":14}', '127.0.0.1', '2022-11-21 09:04:24', '2022-11-21 09:04:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (90, 'audit:created', 22, 'App\\Models\\User#22', NULL, '{\"username\":\"coba1\",\"roleaccess\":2,\"name\":\"Coba 1\",\"email\":\"inatrade@kemendag.go.id\",\"updated_at\":\"2022-11-21 09:04:52\",\"created_at\":\"2022-11-21 09:04:52\",\"id\":22}', '127.0.0.1', '2022-11-21 09:04:52', '2022-11-21 09:04:52');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (91, 'audit:created', 15, 'App\\Models\\DataUser#15', NULL, '{\"user_id\":22,\"company_name\":\"PT. Uji Coba 1\",\"name\":\"Coba 1\",\"mobile_phone\":\"021500234\",\"fix_phone\":\"021345678\",\"pic_name\":\"Inatrade\",\"jabatan\":\"Manager\",\"npwp_company\":\"623456098712346\",\"nib_company\":\"\",\"address_company\":\"Jakarta\",\"provinsi\":\"09\",\"kabupaten\":\"0971\",\"kodepos\":\"12345\",\"ktp\":\"123\",\"fax\":\"021345678\",\"email_company\":\"inatrade@kemendag.go.id\",\"updated_at\":\"2022-11-21 09:04:52\",\"created_at\":\"2022-11-21 09:04:52\",\"id\":15}', '127.0.0.1', '2022-11-21 09:04:52', '2022-11-21 09:04:52');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (92, 'audit:created', 23, 'App\\Models\\User#23', NULL, '{\"username\":\"coba1\",\"roleaccess\":2,\"name\":\"Coba 1\",\"email\":\"inatrade@kemendag.go.id\",\"updated_at\":\"2022-11-21 09:07:24\",\"created_at\":\"2022-11-21 09:07:24\",\"id\":23}', '127.0.0.1', '2022-11-21 09:07:24', '2022-11-21 09:07:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (93, 'audit:created', 16, 'App\\Models\\DataUser#16', NULL, '{\"user_id\":23,\"company_name\":\"PT. Uji Coba 1\",\"name\":\"Coba 1\",\"mobile_phone\":\"021500234\",\"fix_phone\":\"021345678\",\"pic_name\":\"Inatrade\",\"jabatan\":\"Manager\",\"npwp_company\":\"623456098712346\",\"nib_company\":\"\",\"address_company\":\"Jakarta\",\"provinsi\":\"09\",\"kabupaten\":\"0971\",\"kodepos\":\"12345\",\"ktp\":\"123\",\"fax\":\"021345678\",\"email_company\":\"inatrade@kemendag.go.id\",\"updated_at\":\"2022-11-21 09:07:24\",\"created_at\":\"2022-11-21 09:07:24\",\"id\":16}', '127.0.0.1', '2022-11-21 09:07:24', '2022-11-21 09:07:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (97, 'audit:created', 27, 'App\\Models\\User#27', NULL, '{\"name\":\"RICKY SUTANTO\",\"username\":\"salievo\",\"email\":\"Digitalone8@gmail.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-21 13:37:14\",\"created_at\":\"2022-11-21 13:37:14\",\"id\":27}', '127.0.0.1', '2022-11-21 13:37:14', '2022-11-21 13:37:14');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (98, 'audit:created', 17, 'App\\Models\\DataUser#17', NULL, '{\"user_id\":27,\"name\":\"RICKY SUTANTO\",\"mobile_phone\":\"+628121062380\",\"fix_phone\":\"+628121062380\",\"company_name\":\"Sali Evo Tech\",\"pic_name\":\"Erick Sutanto\",\"jabatan\":\"Dirut\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"12\",\"kabupaten\":\"1101\",\"kecamatan\":\"1101010\",\"desa\":\"1101010001\",\"kodepos\":\"11830\",\"ktp\":\"1234123412341234\",\"ktp_image\":null,\"assignment\":null,\"avatar\":null,\"logo\":null,\"email_company\":\"info@sali-evo.com\",\"updated_at\":\"2022-11-21 13:37:14\",\"created_at\":\"2022-11-21 13:37:14\",\"id\":17}', '127.0.0.1', '2022-11-21 13:37:14', '2022-11-21 13:37:14');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (104, 'audit:created', 33, 'App\\Models\\User#33', NULL, '{\"name\":\"some\",\"username\":\"some\",\"email\":\"some@gmail.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-22 09:31:32\",\"created_at\":\"2022-11-22 09:31:32\",\"id\":33}', '127.0.0.1', '2022-11-22 09:31:32', '2022-11-22 09:31:32');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (105, 'audit:created', 18, 'App\\Models\\DataUser#18', NULL, '{\"user_id\":33,\"name\":\"some\",\"mobile_phone\":\"+628121062381\",\"fix_phone\":\"02154390891\",\"company_name\":\"n2nio\",\"pic_name\":\"direktur\",\"jabatan\":\"direktur\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"11\",\"kabupaten\":\"1101\",\"kecamatan\":\"1101030\",\"desa\":\"1101030001\",\"kodepos\":\"11830\",\"ktp\":\"1234123412341234\",\"email_company\":\"Digitalone8@gmail.com\",\"updated_at\":\"2022-11-22 09:31:32\",\"created_at\":\"2022-11-22 09:31:32\",\"id\":18}', '127.0.0.1', '2022-11-22 09:31:32', '2022-11-22 09:31:32');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (106, 'audit:created', 34, 'App\\Models\\User#34', NULL, '{\"name\":\"some\",\"username\":\"some\",\"email\":\"some@gmail.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-22 09:35:10\",\"created_at\":\"2022-11-22 09:35:10\",\"id\":34}', '127.0.0.1', '2022-11-22 09:35:10', '2022-11-22 09:35:10');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (107, 'audit:created', 19, 'App\\Models\\DataUser#19', NULL, '{\"user_id\":34,\"name\":\"some\",\"mobile_phone\":\"08131212121\",\"fix_phone\":\"+628121062380\",\"company_name\":\"n2nio\",\"pic_name\":\"direktur\",\"jabatan\":\"Dirut\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"11\",\"kabupaten\":\"1101\",\"kecamatan\":\"1101031\",\"desa\":\"1101031001\",\"kodepos\":\"11830\",\"ktp\":\"1234123412341234\",\"avatar\":{},\"email_company\":\"Digitalone8@gmail.com\",\"updated_at\":\"2022-11-22 09:35:10\",\"created_at\":\"2022-11-22 09:35:10\",\"id\":19}', '127.0.0.1', '2022-11-22 09:35:10', '2022-11-22 09:35:10');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (108, 'audit:created', 35, 'App\\Models\\User#35', NULL, '{\"name\":\"some\",\"username\":\"some\",\"email\":\"some@gmail.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-22 09:47:18\",\"created_at\":\"2022-11-22 09:47:18\",\"id\":35}', '127.0.0.1', '2022-11-22 09:47:18', '2022-11-22 09:47:18');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (109, 'audit:created', 20, 'App\\Models\\DataUser#20', NULL, '{\"user_id\":35,\"name\":\"some\",\"mobile_phone\":\"08131212121\",\"fix_phone\":\"+628121062380\",\"company_name\":\"n2nio\",\"pic_name\":\"some\",\"jabatan\":\"direktur\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"11\",\"kabupaten\":\"1101\",\"kecamatan\":\"1101010\",\"desa\":\"1101010005\",\"kodepos\":\"11830\",\"ktp\":\"1234123412341234\",\"avatar\":\"uploads\\/n2nio_\\/private\\/var\\/tmp\\/phpWBJYiP\",\"email_company\":\"Digitalone8@gmail.com\",\"updated_at\":\"2022-11-22 09:47:18\",\"created_at\":\"2022-11-22 09:47:18\",\"id\":20}', '127.0.0.1', '2022-11-22 09:47:18', '2022-11-22 09:47:18');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (110, 'audit:created', 36, 'App\\Models\\User#36', NULL, '{\"name\":\"some\",\"username\":\"some\",\"email\":\"some@gmail.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-22 09:51:31\",\"created_at\":\"2022-11-22 09:51:31\",\"id\":36}', '127.0.0.1', '2022-11-22 09:51:31', '2022-11-22 09:51:31');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (111, 'audit:created', 21, 'App\\Models\\DataUser#21', NULL, '{\"user_id\":36,\"name\":\"some\",\"mobile_phone\":\"081721121121\",\"fix_phone\":\"+628121062380\",\"company_name\":\"n2nio\",\"pic_name\":\"some\",\"jabatan\":\"Dirut\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"11\",\"kabupaten\":\"1101\",\"kecamatan\":\"1101021\",\"desa\":\"1101021003\",\"kodepos\":\"11830\",\"ktp\":\"1234123412341234\",\"avatar\":\"uploads\\/n2nio_poe.png\",\"email_company\":\"Digitalone8@gmail.com\",\"updated_at\":\"2022-11-22 09:51:31\",\"created_at\":\"2022-11-22 09:51:31\",\"id\":21}', '127.0.0.1', '2022-11-22 09:51:31', '2022-11-22 09:51:31');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (119, 'audit:created', 44, 'App\\Models\\User#44', NULL, '{\"name\":\"RICKY SUTANTO\",\"username\":\"some\",\"email\":\"Digitalone8@gmail.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-22 10:59:33\",\"created_at\":\"2022-11-22 10:59:33\",\"id\":44}', '127.0.0.1', '2022-11-22 10:59:33', '2022-11-22 10:59:33');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (120, 'audit:created', 22, 'App\\Models\\DataUser#22', NULL, '{\"user_id\":44,\"name\":\"RICKY SUTANTO\",\"mobile_phone\":\"+628121062380\",\"fix_phone\":\"+628121062380\",\"company_name\":\"n2nio\",\"pic_name\":\"some\",\"jabatan\":\"direktur\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"Puri Gardena E5 No 26\\r\\nKalideres\",\"provinsi\":\"15\",\"kabupaten\":\"1501\",\"kecamatan\":\"1501010\",\"desa\":\"1501010001\",\"kodepos\":\"11830\",\"ktp\":\"1234123412341234\",\"email_company\":\"Digitalone8@gmail.com\",\"avatar\":\"uploads\\/n2nio_logo-tutwurihandayani.png\",\"updated_at\":\"2022-11-22 10:59:33\",\"created_at\":\"2022-11-22 10:59:33\",\"id\":22}', '127.0.0.1', '2022-11-22 10:59:33', '2022-11-22 10:59:33');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (121, 'audit:created', 45, 'App\\Models\\User#45', NULL, '{\"name\":\"ome\",\"username\":\"ome\",\"email\":\"ome@email.com\",\"roleaccess\":3,\"updated_at\":\"2022-11-22 11:50:41\",\"created_at\":\"2022-11-22 11:50:41\",\"id\":45}', '127.0.0.1', '2022-11-22 11:50:41', '2022-11-22 11:50:41');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (122, 'audit:created', 23, 'App\\Models\\DataUser#23', NULL, '{\"user_id\":45,\"name\":\"ome\",\"mobile_phone\":\"0817160872\",\"fix_phone\":\"021312121222\",\"company_name\":\"Ome lestari\",\"pic_name\":\"Ome\",\"jabatan\":\"Direktur\",\"npwp_company\":\"81.551.014.4.002-000\",\"nib_company\":\"1234567890123\",\"address_company\":\"kalimalang sanaaaan\",\"provinsi\":\"31\",\"kabupaten\":\"3174\",\"kecamatan\":\"3174080\",\"desa\":\"3174080003\",\"kodepos\":\"11830\",\"ktp\":\"3073062608720004\",\"email_company\":\"info@gmail.com\",\"avatar\":\"uploads\\/Ome lestari_avatar.jpeg\",\"logo\":\"uploads\\/Ome lestari_logo.jpeg\",\"ktp_image\":\"uploads\\/Ome lestari_ktp.png\",\"assignment\":\"uploads\\/Ome lestari_assignment.jpeg\",\"updated_at\":\"2022-11-22 11:50:41\",\"created_at\":\"2022-11-22 11:50:41\",\"id\":23}', '127.0.0.1', '2022-11-22 11:50:41', '2022-11-22 11:50:41');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (123, 'audit:created', 46, 'App\\Models\\Permission#46', 1, '{\"title\":\"verificator_task_access\",\"perm_type\":\"5\",\"grp_title\":\"Verificator task\",\"updated_at\":\"2022-11-24 15:44:34\",\"created_at\":\"2022-11-24 15:44:34\",\"id\":46}', '127.0.0.1', '2022-11-24 15:44:34', '2022-11-24 15:44:34');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (124, 'audit:created', 47, 'App\\Models\\Permission#47', 1, '{\"title\":\"feedmsg_access\",\"perm_type\":\"5\",\"grp_title\":\"Feed & Messages\",\"updated_at\":\"2022-11-25 11:09:04\",\"created_at\":\"2022-11-25 11:09:04\",\"id\":47}', '127.0.0.1', '2022-11-25 11:09:04', '2022-11-25 11:09:04');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (125, 'audit:created', 48, 'App\\Models\\Permission#48', 1, '{\"title\":\"feeds_access\",\"perm_type\":\"5\",\"grp_title\":\"Feeds\",\"updated_at\":\"2022-11-25 11:16:25\",\"created_at\":\"2022-11-25 11:16:25\",\"id\":48}', '127.0.0.1', '2022-11-25 11:16:25', '2022-11-25 11:16:25');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (126, 'audit:created', 49, 'App\\Models\\Permission#49', 1, '{\"title\":\"feeds_create\",\"perm_type\":\"1\",\"grp_title\":\"Feeds\",\"updated_at\":\"2022-11-25 11:17:07\",\"created_at\":\"2022-11-25 11:17:07\",\"id\":49}', '127.0.0.1', '2022-11-25 11:17:07', '2022-11-25 11:17:07');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (127, 'audit:created', 50, 'App\\Models\\Permission#50', 1, '{\"title\":\"feeds_edit\",\"perm_type\":\"2\",\"grp_title\":\"Feeds\",\"updated_at\":\"2022-11-25 11:17:26\",\"created_at\":\"2022-11-25 11:17:26\",\"id\":50}', '127.0.0.1', '2022-11-25 11:17:26', '2022-11-25 11:17:26');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (128, 'audit:created', 51, 'App\\Models\\Permission#51', 1, '{\"title\":\"feeds_show\",\"perm_type\":\"3\",\"grp_title\":\"Feeds\",\"updated_at\":\"2022-11-25 11:17:47\",\"created_at\":\"2022-11-25 11:17:47\",\"id\":51}', '127.0.0.1', '2022-11-25 11:17:47', '2022-11-25 11:17:47');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (129, 'audit:created', 52, 'App\\Models\\Permission#52', 1, '{\"title\":\"feeds_delete\",\"perm_type\":\"4\",\"grp_title\":\"Feeds\",\"updated_at\":\"2022-11-25 11:19:47\",\"created_at\":\"2022-11-25 11:19:47\",\"id\":52}', '127.0.0.1', '2022-11-25 11:19:47', '2022-11-25 11:19:47');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (130, 'audit:created', 53, 'App\\Models\\Permission#53', 1, '{\"title\":\"messenger_access\",\"perm_type\":\"5\",\"grp_title\":\"Messenger\",\"updated_at\":\"2022-11-25 11:22:42\",\"created_at\":\"2022-11-25 11:22:42\",\"id\":53}', '127.0.0.1', '2022-11-25 11:22:42', '2022-11-25 11:22:42');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (131, 'audit:created', 54, 'App\\Models\\Permission#54', 1, '{\"title\":\"messenger_create\",\"perm_type\":\"1\",\"grp_title\":\"Messenger\",\"updated_at\":\"2022-11-25 11:22:58\",\"created_at\":\"2022-11-25 11:22:58\",\"id\":54}', '127.0.0.1', '2022-11-25 11:22:58', '2022-11-25 11:22:58');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (132, 'audit:created', 55, 'App\\Models\\Permission#55', 1, '{\"title\":\"messenger_edit\",\"perm_type\":\"2\",\"grp_title\":\"Messenger\",\"updated_at\":\"2022-11-25 11:23:13\",\"created_at\":\"2022-11-25 11:23:13\",\"id\":55}', '127.0.0.1', '2022-11-25 11:23:13', '2022-11-25 11:23:13');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (133, 'audit:created', 56, 'App\\Models\\Permission#56', 1, '{\"title\":\"messenger_show\",\"perm_type\":\"3\",\"grp_title\":\"Messenger\",\"updated_at\":\"2022-11-25 11:23:27\",\"created_at\":\"2022-11-25 11:23:27\",\"id\":56}', '127.0.0.1', '2022-11-25 11:23:27', '2022-11-25 11:23:27');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (134, 'audit:created', 57, 'App\\Models\\Permission#57', 1, '{\"title\":\"messenger_delete\",\"perm_type\":\"4\",\"grp_title\":\"Messenger\",\"updated_at\":\"2022-11-25 11:23:45\",\"created_at\":\"2022-11-25 11:23:45\",\"id\":57}', '127.0.0.1', '2022-11-25 11:23:45', '2022-11-25 11:23:45');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (135, 'audit:created', 58, 'App\\Models\\Permission#58', 1, '{\"title\":\"verification_skl_access\",\"perm_type\":\"5\",\"grp_title\":\"Verificator SKL\",\"updated_at\":\"2022-11-26 16:44:37\",\"created_at\":\"2022-11-26 16:44:37\",\"id\":58}', '127.0.0.1', '2022-11-26 16:44:37', '2022-11-26 16:44:37');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (136, 'audit:created', 59, 'App\\Models\\Permission#59', 1, '{\"title\":\"list_skl_access\",\"perm_type\":\"5\",\"grp_title\":\"SKL List\",\"updated_at\":\"2022-11-26 16:51:36\",\"created_at\":\"2022-11-26 16:51:36\",\"id\":59}', '127.0.0.1', '2022-11-26 16:51:36', '2022-11-26 16:51:36');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (137, 'audit:created', 60, 'App\\Models\\Permission#60', 1, '{\"title\":\"list_skl_create\",\"perm_type\":\"1\",\"grp_title\":\"SKL List\",\"updated_at\":\"2022-11-26 16:51:57\",\"created_at\":\"2022-11-26 16:51:57\",\"id\":60}', '127.0.0.1', '2022-11-26 16:51:57', '2022-11-26 16:51:57');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (138, 'audit:created', 61, 'App\\Models\\Permission#61', 1, '{\"title\":\"list_skl_edit\",\"perm_type\":\"2\",\"grp_title\":\"SKL List\",\"updated_at\":\"2022-11-26 16:52:15\",\"created_at\":\"2022-11-26 16:52:15\",\"id\":61}', '127.0.0.1', '2022-11-26 16:52:15', '2022-11-26 16:52:15');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (139, 'audit:created', 62, 'App\\Models\\Permission#62', 1, '{\"title\":\"list_skl_show\",\"perm_type\":\"3\",\"grp_title\":\"SKL List\",\"updated_at\":\"2022-11-26 16:52:33\",\"created_at\":\"2022-11-26 16:52:33\",\"id\":62}', '127.0.0.1', '2022-11-26 16:52:33', '2022-11-26 16:52:33');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (140, 'audit:created', 63, 'App\\Models\\Permission#63', 1, '{\"title\":\"list_skl_delete\",\"perm_type\":\"4\",\"grp_title\":\"SKL List\",\"updated_at\":\"2022-11-26 16:52:50\",\"created_at\":\"2022-11-26 16:52:50\",\"id\":63}', '127.0.0.1', '2022-11-26 16:52:50', '2022-11-26 16:52:50');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (141, 'audit:created', 64, 'App\\Models\\Permission#64', 1, '{\"title\":\"create_skl_access\",\"perm_type\":\"5\",\"grp_title\":\"Create SKL\",\"updated_at\":\"2022-11-26 16:59:53\",\"created_at\":\"2022-11-26 16:59:53\",\"id\":64}', '127.0.0.1', '2022-11-26 16:59:53', '2022-11-26 16:59:53');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (142, 'audit:created', 65, 'App\\Models\\Permission#65', 1, '{\"title\":\"issued_skl_access\",\"perm_type\":\"5\",\"grp_title\":\"Issued SKL\",\"updated_at\":\"2022-11-26 17:00:11\",\"created_at\":\"2022-11-26 17:00:11\",\"id\":65}', '127.0.0.1', '2022-11-26 17:00:11', '2022-11-26 17:00:11');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (143, 'audit:created', 66, 'App\\Models\\Permission#66', 1, '{\"title\":\"administrator_access\",\"perm_type\":\"5\",\"grp_title\":\"Administrator\",\"updated_at\":\"2022-11-29 04:58:04\",\"created_at\":\"2022-11-29 04:58:04\",\"id\":66}', '127.0.0.1', '2022-11-29 04:58:04', '2022-11-29 04:58:04');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (144, 'audit:created', 67, 'App\\Models\\Permission#67', 1, '{\"title\":\"create_skl_create\",\"perm_type\":\"1\",\"grp_title\":\"Create SKL\",\"updated_at\":\"2022-11-29 06:02:46\",\"created_at\":\"2022-11-29 06:02:46\",\"id\":67}', '127.0.0.1', '2022-11-29 06:02:46', '2022-11-29 06:02:46');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (145, 'audit:created', 68, 'App\\Models\\Permission#68', 1, '{\"title\":\"create_skl_edit\",\"perm_type\":\"2\",\"grp_title\":\"Create SKL\",\"updated_at\":\"2022-11-29 06:23:47\",\"created_at\":\"2022-11-29 06:23:47\",\"id\":68}', '127.0.0.1', '2022-11-29 06:23:47', '2022-11-29 06:23:47');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (146, 'audit:created', 69, 'App\\Models\\Permission#69', 1, '{\"title\":\"create_skl_show\",\"perm_type\":\"3\",\"grp_title\":\"Create SKL\",\"updated_at\":\"2022-11-29 06:24:09\",\"created_at\":\"2022-11-29 06:24:09\",\"id\":69}', '127.0.0.1', '2022-11-29 06:24:09', '2022-11-29 06:24:09');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (147, 'audit:created', 70, 'App\\Models\\Permission#70', 1, '{\"title\":\"create_skl_delete\",\"perm_type\":\"4\",\"grp_title\":\"Create SKL\",\"updated_at\":\"2022-11-29 06:24:28\",\"created_at\":\"2022-11-29 06:24:28\",\"id\":70}', '127.0.0.1', '2022-11-29 06:24:28', '2022-11-29 06:24:28');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (148, 'audit:created', 71, 'App\\Models\\Permission#71', 1, '{\"title\":\"issued_skl_create\",\"perm_type\":\"1\",\"grp_title\":\"Issued SKL\",\"updated_at\":\"2022-11-29 06:24:47\",\"created_at\":\"2022-11-29 06:24:47\",\"id\":71}', '127.0.0.1', '2022-11-29 06:24:47', '2022-11-29 06:24:47');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (149, 'audit:created', 72, 'App\\Models\\Permission#72', 1, '{\"title\":\"issued_skl_edit\",\"perm_type\":\"2\",\"grp_title\":\"Issued SKL\",\"updated_at\":\"2022-11-29 06:25:04\",\"created_at\":\"2022-11-29 06:25:04\",\"id\":72}', '127.0.0.1', '2022-11-29 06:25:04', '2022-11-29 06:25:04');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (150, 'audit:created', 73, 'App\\Models\\Permission#73', 1, '{\"title\":\"issued_skl_show\",\"perm_type\":\"3\",\"grp_title\":\"Issued SKL\",\"updated_at\":\"2022-11-29 06:25:24\",\"created_at\":\"2022-11-29 06:25:24\",\"id\":73}', '127.0.0.1', '2022-11-29 06:25:24', '2022-11-29 06:25:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (151, 'audit:created', 74, 'App\\Models\\Permission#74', 1, '{\"title\":\"issued_skl_delete\",\"perm_type\":\"4\",\"grp_title\":\"Issued SKL\",\"updated_at\":\"2022-11-29 06:25:36\",\"created_at\":\"2022-11-29 06:25:36\",\"id\":74}', '127.0.0.1', '2022-11-29 06:25:36', '2022-11-29 06:25:36');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (152, 'audit:created', 75, 'App\\Models\\Permission#75', 1, '{\"title\":\"master_riph_access\",\"perm_type\":\"1\",\"grp_title\":\"Master Data RIPH\",\"updated_at\":\"2022-11-29 06:51:52\",\"created_at\":\"2022-11-29 06:51:52\",\"id\":75}', '127.0.0.1', '2022-11-29 06:51:52', '2022-11-29 06:51:52');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (153, 'audit:updated', 75, 'App\\Models\\Permission#75', 1, '{\"perm_type\":\"5\",\"updated_at\":\"2022-11-29 06:53:58\",\"id\":75}', '127.0.0.1', '2022-11-29 06:53:58', '2022-11-29 06:53:58');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (154, 'audit:created', 76, 'App\\Models\\Permission#76', 1, '{\"title\":\"data_report_access\",\"perm_type\":\"5\",\"grp_title\":\"Data Report\",\"updated_at\":\"2022-12-05 07:36:16\",\"created_at\":\"2022-12-05 07:36:16\",\"id\":76}', '127.0.0.1', '2022-12-05 07:36:16', '2022-12-05 07:36:16');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (155, 'audit:created', 77, 'App\\Models\\Permission#77', 1, '{\"title\":\"master_template_access\",\"perm_type\":\"5\",\"grp_title\":\"Master Template\",\"updated_at\":\"2022-12-05 07:43:40\",\"created_at\":\"2022-12-05 07:43:40\",\"id\":77}', '127.0.0.1', '2022-12-05 07:43:40', '2022-12-05 07:43:40');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (156, 'audit:created', 78, 'App\\Models\\Permission#78', 1, '{\"title\":\"commitment_list_access\",\"perm_type\":\"5\",\"grp_title\":\"Commitment List\",\"updated_at\":\"2022-12-05 08:40:29\",\"created_at\":\"2022-12-05 08:40:29\",\"id\":78}', '127.0.0.1', '2022-12-05 08:40:29', '2022-12-05 08:40:29');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (157, 'audit:created', 79, 'App\\Models\\Permission#79', 1, '{\"title\":\"verification_report_access\",\"perm_type\":\"5\",\"grp_title\":\"Verification Report\",\"updated_at\":\"2022-12-05 08:40:45\",\"created_at\":\"2022-12-05 08:40:45\",\"id\":79}', '127.0.0.1', '2022-12-05 08:40:45', '2022-12-05 08:40:45');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (158, 'audit:created', 80, 'App\\Models\\Permission#80', 1, '{\"title\":\"verif_onfarm_access\",\"perm_type\":\"5\",\"grp_title\":\"Onfarm Report\",\"updated_at\":\"2022-12-05 16:04:53\",\"created_at\":\"2022-12-05 16:04:53\",\"id\":80}', '127.0.0.1', '2022-12-05 16:04:53', '2022-12-05 16:04:53');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (159, 'audit:created', 81, 'App\\Models\\Permission#81', 1, '{\"title\":\"verif_online_access\",\"perm_type\":\"5\",\"grp_title\":\"Online Report\",\"updated_at\":\"2022-12-05 16:05:07\",\"created_at\":\"2022-12-05 16:05:07\",\"id\":81}', '127.0.0.1', '2022-12-05 16:05:07', '2022-12-05 16:05:07');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (160, 'audit:created', 82, 'App\\Models\\Permission#82', 1, '{\"title\":\"admin_SKL_access\",\"perm_type\":\"5\",\"grp_title\":\"SKL\",\"updated_at\":\"2022-12-05 16:06:52\",\"created_at\":\"2022-12-05 16:06:52\",\"id\":82}', '127.0.0.1', '2022-12-05 16:06:52', '2022-12-05 16:06:52');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (161, 'audit:updated', 3, 'App\\Models\\QaMessage#3', 45, '{\"read_at\":\"2022-12-13T13:21:50.965206Z\",\"updated_at\":\"2022-12-13T13:21:50.000000Z\",\"id\":3}', '127.0.0.1', '2022-12-13 20:21:50', '2022-12-13 20:21:50');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (162, 'audit:created', 7, 'App\\Models\\QaMessage#7', 45, '{\"sender_id\":45,\"content\":\"Ini mau kirim file kemana?\",\"topic_id\":5,\"updated_at\":\"2022-12-13T14:33:16.000000Z\",\"created_at\":\"2022-12-13T14:33:16.000000Z\",\"id\":7}', '127.0.0.1', '2022-12-13 21:33:16', '2022-12-13 21:33:16');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (163, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:15:10.822894Z\",\"updated_at\":\"2022-12-13T16:15:10.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:15:10', '2022-12-13 23:15:10');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (164, 'audit:created', 8, 'App\\Models\\QaMessage#8', 45, '{\"sender_id\":45,\"content\":\"ke rumah\",\"topic_id\":5,\"updated_at\":\"2022-12-13T16:19:35.000000Z\",\"created_at\":\"2022-12-13T16:19:35.000000Z\",\"id\":8}', '127.0.0.1', '2022-12-13 23:19:35', '2022-12-13 23:19:35');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (165, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:20:17.029068Z\",\"updated_at\":\"2022-12-13T16:20:17.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:20:17', '2022-12-13 23:20:17');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (166, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:22:43.638316Z\",\"updated_at\":\"2022-12-13T16:22:43.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:22:43', '2022-12-13 23:22:43');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (167, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:26:52.690659Z\",\"updated_at\":\"2022-12-13T16:26:52.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:26:52', '2022-12-13 23:26:52');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (168, 'audit:updated', 3, 'App\\Models\\QaMessage#3', 45, '{\"read_at\":\"2022-12-13T16:28:31.705247Z\",\"updated_at\":\"2022-12-13T16:28:31.000000Z\",\"id\":3}', '127.0.0.1', '2022-12-13 23:28:31', '2022-12-13 23:28:31');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (169, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:31:32.268752Z\",\"updated_at\":\"2022-12-13T16:31:32.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:31:32', '2022-12-13 23:31:32');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (170, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:36:46.197420Z\",\"updated_at\":\"2022-12-13T16:36:46.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:36:46', '2022-12-13 23:36:46');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (171, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:39:42.359498Z\",\"updated_at\":\"2022-12-13T16:39:42.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:39:42', '2022-12-13 23:39:42');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (172, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:40:23.195460Z\",\"updated_at\":\"2022-12-13T16:40:23.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:40:23', '2022-12-13 23:40:23');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (173, 'audit:updated', 3, 'App\\Models\\QaMessage#3', 45, '{\"read_at\":\"2022-12-13T16:43:06.771416Z\",\"updated_at\":\"2022-12-13T16:43:06.000000Z\",\"id\":3}', '127.0.0.1', '2022-12-13 23:43:06', '2022-12-13 23:43:06');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (174, 'audit:updated', 4, 'App\\Models\\QaMessage#4', 45, '{\"read_at\":\"2022-12-13T16:45:17.290713Z\",\"updated_at\":\"2022-12-13T16:45:17.000000Z\",\"id\":4}', '127.0.0.1', '2022-12-13 23:45:17', '2022-12-13 23:45:17');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (175, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:49:07.932703Z\",\"updated_at\":\"2022-12-13T16:49:07.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:49:07', '2022-12-13 23:49:07');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (176, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:51:01.655039Z\",\"updated_at\":\"2022-12-13T16:51:01.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:51:01', '2022-12-13 23:51:01');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (177, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:52:59.937906Z\",\"updated_at\":\"2022-12-13T16:52:59.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:52:59', '2022-12-13 23:52:59');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (178, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:54:09.062710Z\",\"updated_at\":\"2022-12-13T16:54:09.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:54:09', '2022-12-13 23:54:09');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (179, 'audit:updated', 3, 'App\\Models\\QaMessage#3', 45, '{\"read_at\":\"2022-12-13T16:55:02.410509Z\",\"updated_at\":\"2022-12-13T16:55:02.000000Z\",\"id\":3}', '127.0.0.1', '2022-12-13 23:55:02', '2022-12-13 23:55:02');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (180, 'audit:updated', 3, 'App\\Models\\QaMessage#3', 45, '{\"read_at\":\"2022-12-13T16:56:11.085622Z\",\"updated_at\":\"2022-12-13T16:56:11.000000Z\",\"id\":3}', '127.0.0.1', '2022-12-13 23:56:11', '2022-12-13 23:56:11');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (181, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T16:57:24.464158Z\",\"updated_at\":\"2022-12-13T16:57:24.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-13 23:57:24', '2022-12-13 23:57:24');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (182, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T16:57:46.749043Z\",\"updated_at\":\"2022-12-13T16:57:46.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-13 23:57:46', '2022-12-13 23:57:46');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (183, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T17:08:21.978439Z\",\"updated_at\":\"2022-12-13T17:08:21.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-14 00:08:21', '2022-12-14 00:08:21');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (184, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:10:54.046043Z\",\"updated_at\":\"2022-12-13T17:10:54.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:10:54', '2022-12-14 00:10:54');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (185, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-13T17:14:34.745151Z\",\"updated_at\":\"2022-12-13T17:14:34.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-14 00:14:34', '2022-12-14 00:14:34');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (186, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:21:51.378102Z\",\"updated_at\":\"2022-12-13T17:21:51.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:21:51', '2022-12-14 00:21:51');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (187, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:25:05.723475Z\",\"updated_at\":\"2022-12-13T17:25:05.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:25:05', '2022-12-14 00:25:05');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (188, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:30:57.672065Z\",\"updated_at\":\"2022-12-13T17:30:57.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:30:57', '2022-12-14 00:30:57');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (189, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:33:18.557100Z\",\"updated_at\":\"2022-12-13T17:33:18.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:33:18', '2022-12-14 00:33:18');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (190, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:38:11.977910Z\",\"updated_at\":\"2022-12-13T17:38:11.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:38:11', '2022-12-14 00:38:11');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (191, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-13T17:39:20.925943Z\",\"updated_at\":\"2022-12-13T17:39:20.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 00:39:20', '2022-12-14 00:39:20');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (192, 'audit:updated', 1, 'App\\Models\\QaMessage#1', 45, '{\"read_at\":\"2022-12-14T07:03:51.251285Z\",\"updated_at\":\"2022-12-14T07:03:51.000000Z\",\"id\":1}', '127.0.0.1', '2022-12-14 14:03:51', '2022-12-14 14:03:51');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES (193, 'audit:updated', 2, 'App\\Models\\QaMessage#2', 45, '{\"read_at\":\"2022-12-14T07:04:20.465611Z\",\"updated_at\":\"2022-12-14T07:04:20.000000Z\",\"id\":2}', '127.0.0.1', '2022-12-14 14:04:20', '2022-12-14 14:04:20');
COMMIT;

-- ----------------------------
-- Table structure for data_users
-- ----------------------------
DROP TABLE IF EXISTS `data_users`;
CREATE TABLE `data_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fix_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nib_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assignment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_users_user_id_unique` (`user_id`),
  CONSTRAINT `uid-id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data_users
-- ----------------------------
BEGIN;
INSERT INTO `data_users` (`id`, `user_id`, `name`, `mobile_phone`, `fix_phone`, `company_name`, `pic_name`, `jabatan`, `npwp_company`, `nib_company`, `address_company`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `fax`, `ktp`, `ktp_image`, `assignment`, `avatar`, `logo`, `email_company`, `created_at`, `updated_at`, `deleted_at`) VALUES (10, 15, 'company1', '0891212121212', '121212121212', 'Keytech indonesia', 'direktur satu', 'satu', '81.551.014.4.002-000', '1234567890123', 'Puri Gardena E5 No 26\r\nKalideres', 'Prov. Aceh', 'Kab. Bandung', 'kec bandung', 'desa ku', '10201', '023111200', '1234567890', NULL, 'hikvision.png', NULL, NULL, NULL, '2022-11-10 13:10:11', '2022-11-10 13:10:11', NULL);
INSERT INTO `data_users` (`id`, `user_id`, `name`, `mobile_phone`, `fix_phone`, `company_name`, `pic_name`, `jabatan`, `npwp_company`, `nib_company`, `address_company`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `fax`, `ktp`, `ktp_image`, `assignment`, `avatar`, `logo`, `email_company`, `created_at`, `updated_at`, `deleted_at`) VALUES (14, 21, 'Budi', '08131111111X', '021123456789', 'PT. Hortikultura Jaya', 'Budi', 'Direktur Utama', '123456123456123', '1234567890123', 'Pasar Minggu', '31', '3171', NULL, NULL, '12520', '', '1234567891', NULL, NULL, NULL, NULL, 'horti.riph@gmail.com', '2022-11-21 09:04:24', '2022-11-21 09:04:24', NULL);
INSERT INTO `data_users` (`id`, `user_id`, `name`, `mobile_phone`, `fix_phone`, `company_name`, `pic_name`, `jabatan`, `npwp_company`, `nib_company`, `address_company`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `fax`, `ktp`, `ktp_image`, `assignment`, `avatar`, `logo`, `email_company`, `created_at`, `updated_at`, `deleted_at`) VALUES (16, 23, 'Coba 1', '021500234', '021345678', 'PT. Uji Coba 1', 'Inatrade', 'Manager', '623456098712346', '', 'Jakarta', '09', '0971', NULL, NULL, '12345', '021345678', '123', NULL, NULL, NULL, NULL, 'inatrade@kemendag.go.id', '2022-11-21 09:07:24', '2022-11-21 09:07:24', NULL);
INSERT INTO `data_users` (`id`, `user_id`, `name`, `mobile_phone`, `fix_phone`, `company_name`, `pic_name`, `jabatan`, `npwp_company`, `nib_company`, `address_company`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `fax`, `ktp`, `ktp_image`, `assignment`, `avatar`, `logo`, `email_company`, `created_at`, `updated_at`, `deleted_at`) VALUES (22, 44, 'RICKY SUTANTO', '+628121062380', '+628121062380', 'n2nio', 'some', 'direktur', '81.551.014.4.002-000', '1234567890123', 'Puri Gardena E5 No 26\r\nKalideres', '15', '1501', '1501010', '1501010001', '11830', NULL, '1234123412341234', NULL, NULL, 'uploads/n2nio_logo-tutwurihandayani.png', NULL, 'Digitalone8@gmail.com', '2022-11-22 10:59:33', '2022-11-22 10:59:33', NULL);
INSERT INTO `data_users` (`id`, `user_id`, `name`, `mobile_phone`, `fix_phone`, `company_name`, `pic_name`, `jabatan`, `npwp_company`, `nib_company`, `address_company`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `fax`, `ktp`, `ktp_image`, `assignment`, `avatar`, `logo`, `email_company`, `created_at`, `updated_at`, `deleted_at`) VALUES (23, 45, 'ome', '0817160872', '021312121222', 'Ome lestari', 'Ome', 'Direktur', '81.551.014.4.002-000', '1234567890123', 'kalimalang sanaaaan', '31', '3174', '3174080', '3174080003', '11830', NULL, '3073062608720004', 'uploads/Ome lestari_ktp.png', 'uploads/Ome lestari_assignment.jpeg', 'uploads/Ome lestari_avatar.jpeg', 'uploads/Ome lestari_logo.jpeg', 'info@gmail.com', '2022-11-22 11:50:41', '2022-11-22 11:50:41', NULL);
INSERT INTO `data_users` (`id`, `user_id`, `name`, `mobile_phone`, `fix_phone`, `company_name`, `pic_name`, `jabatan`, `npwp_company`, `nib_company`, `address_company`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `fax`, `ktp`, `ktp_image`, `assignment`, `avatar`, `logo`, `email_company`, `created_at`, `updated_at`, `deleted_at`) VALUES (24, 1, 'Admin system', '08121062380', '02154390713', 'Keytech', 'Ricky', 'Developer', '81291299999111', '121212121212', 'Jakarta', '21', '31', '11830', 'kalideres', '11830', NULL, '1212121212121212', NULL, NULL, 'uploads/n2nio_logo-tutwurihandayani.png', 'uploads/n2nio_logo-tutwurihandayani.png', 'ricky@sali-evo.com', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3, '2022_04_30_000001_create_audit_logs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4, '2022_04_30_000002_create_permissions_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5, '2022_04_30_000003_create_roles_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6, '2022_04_30_000004_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7, '2022_04_30_000013_create_permission_role_pivot_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8, '2022_04_30_000014_create_role_user_pivot_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9, '2022_04_30_000020_create_qa_topics_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10, '2022_04_30_000021_create_qa_messages_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11, '2022_11_06_144001_create_data_users_table', 2);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  KEY `role_id_fk_6464585` (`role_id`),
  KEY `permission_id_fk_6464585` (`permission_id`),
  CONSTRAINT `permission_id_fk_6464585` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_id_fk_6464585` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
BEGIN;
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 1);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 2);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 3);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 4);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 5);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 6);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 7);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 8);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 9);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 10);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 11);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 12);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 13);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 14);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 15);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 16);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 17);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 18);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 19);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 19);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 20);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 21);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 21);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 19);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 20);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 20);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 24);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 25);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 26);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 21);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 20);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 24);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 26);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 19);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 27);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 28);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 28);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 29);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 30);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 32);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 31);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 33);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 34);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 35);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 37);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 36);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 38);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 29);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 30);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 32);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 31);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 33);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 34);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 35);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 37);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 36);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 38);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 39);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 40);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 41);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 42);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 39);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 40);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 41);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 42);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 43);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 44);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 46);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 47);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 48);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 51);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 53);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 54);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 56);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 55);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 57);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 49);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 50);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 52);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 47);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 48);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 49);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 51);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 50);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 52);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 53);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 54);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 56);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 55);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (3, 57);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 66);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 24);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 25);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 26);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 27);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 75);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 76);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 77);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 78);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 79);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 80);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 81);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 59);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 60);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 62);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 61);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 63);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 82);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (1, 21);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 47);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 48);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 49);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 51);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 50);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 52);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 53);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 54);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 56);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 55);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (4, 57);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 47);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 48);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 49);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 51);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 50);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 52);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 53);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 54);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 56);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 55);
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES (2, 57);
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (1, 'user_management_access', '5', 'User management', NULL, '2022-10-05 07:43:13', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (2, 'permission_create', '1', 'Permissions', NULL, '2022-10-05 07:47:01', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (3, 'permission_edit', '2', 'Permissions', NULL, '2022-10-05 07:46:35', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (4, 'permission_show', '3', 'Permissions', NULL, '2022-10-05 07:46:24', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (5, 'permission_delete', '4', 'Permissions', NULL, '2022-10-05 07:46:47', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (6, 'permission_access', '5', 'Permissions', NULL, '2022-10-05 07:47:13', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (7, 'role_create', '1', 'Roles', NULL, '2022-10-05 07:45:23', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (8, 'role_edit', '2', 'Roles', NULL, '2022-10-05 07:44:56', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (9, 'role_show', '3', 'Roles', NULL, '2022-10-05 07:44:46', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (10, 'role_delete', '4', 'Roles', NULL, '2022-10-05 07:45:05', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (11, 'role_access', '5', 'Roles', NULL, '2022-10-05 07:45:42', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (12, 'user_create', '1', 'Users', NULL, '2022-10-05 07:44:10', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (13, 'user_edit', '2', 'Users', NULL, '2022-10-05 07:43:41', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (14, 'user_show', '3', 'Users', NULL, '2022-10-05 07:43:04', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (15, 'user_delete', '4', 'Users', NULL, '2022-10-05 07:43:53', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (16, 'user_access', '5', 'Users', NULL, '2022-10-05 07:44:36', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (17, 'audit_log_show', '3', 'Audit Logs', NULL, '2022-10-05 07:47:23', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (18, 'audit_log_access', '5', 'Audit Logs', NULL, '2022-10-05 07:47:34', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (19, 'profile_password_edit', '2', 'Profile', NULL, '2022-10-05 07:46:09', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (20, 'dashboard_access', '5', 'Dashboard', '2022-10-05 08:18:49', '2022-10-13 15:32:35', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (21, 'landing_access', '5', 'Landing', '2022-10-05 15:03:17', '2022-10-13 15:32:49', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (22, 'dashboardv_access', '5', 'Dashboard Verifikator', '2022-10-07 06:52:04', '2022-10-13 15:34:10', '2022-10-13 15:34:10');
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (23, 'dashboarda_access', '5', 'Dashboard Admin', '2022-10-07 06:52:32', '2022-10-13 15:34:17', '2022-10-13 15:34:17');
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (24, 'user_task_access', '5', 'User Task', '2022-10-13 15:46:06', '2022-10-13 15:46:06', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (25, 'pull_access', '5', 'Pull/Sync Data', '2022-10-13 16:16:43', '2022-10-13 16:16:43', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (26, 'commitment_access', '5', 'Commitment', '2022-10-13 16:17:05', '2022-10-13 16:17:05', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (27, 'kelompoktani_access', '5', 'Kelompok Tani', '2022-11-02 14:29:05', '2022-11-02 14:29:05', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (28, 'verifikasi_access', '5', 'Verifikasi & SKL', '2022-11-03 06:39:24', '2022-11-03 06:39:24', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (29, 'pengajuan_access', '5', 'Daftar Pengajuan', '2022-11-03 06:42:35', '2022-11-03 06:42:35', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (30, 'pengajuan_create', '1', 'Daftar Pengajuan', '2022-11-03 06:42:55', '2022-11-03 06:42:55', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (31, 'pengajuan_edit', '2', 'Daftar Pengajuan', '2022-11-03 06:47:01', '2022-11-03 06:47:01', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (32, 'pengajuan_show', '3', 'Daftar Pengajuan', '2022-11-03 06:47:19', '2022-11-03 06:47:19', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (33, 'pengajuan_delete', '4', 'Daftar Pengajuan', '2022-11-03 06:47:35', '2022-11-03 06:47:35', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (34, 'skl_access', '5', 'Daftar SKL', '2022-11-03 06:47:53', '2022-11-03 06:47:53', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (35, 'skl_create', '1', 'Daftar SKL', '2022-11-03 06:48:10', '2022-11-03 06:48:10', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (36, 'skl_edit', '2', 'Daftar SKL', '2022-11-03 06:48:24', '2022-11-03 06:48:24', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (37, 'skl_show', '3', 'Daftar SKL', '2022-11-03 06:48:40', '2022-11-03 06:48:40', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (38, 'skl_delete', '4', 'Daftar SKL', '2022-11-03 06:48:54', '2022-11-03 06:48:54', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (39, 'folder_access', '5', 'Pengelolaan Berkas', '2022-11-03 07:43:51', '2022-11-03 07:43:51', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (40, 'berkas_access', '5', 'Berkas Saya', '2022-11-03 07:44:05', '2022-11-03 07:44:05', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (41, 'galeri_access', '5', 'Galeri Saya', '2022-11-03 07:44:19', '2022-11-03 07:44:19', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (42, 'template_access', '5', 'Template Master', '2022-11-03 07:44:35', '2022-11-03 07:44:35', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (43, 'onfarm_access', '5', 'Onfarm', '2022-11-05 15:12:36', '2022-11-05 15:12:36', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (44, 'online_access', '5', 'Online', '2022-11-05 15:12:53', '2022-11-05 15:12:53', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (45, 'completed_access', '5', 'Completed', '2022-11-05 15:13:11', '2022-11-05 15:13:11', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (46, 'verificator_task_access', '5', 'Verificator task', '2022-11-24 15:44:34', '2022-11-24 15:44:34', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (47, 'feedmsg_access', '5', 'Feed & Messages', '2022-11-25 11:09:04', '2022-11-25 11:09:04', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (48, 'feeds_access', '5', 'Feeds', '2022-11-25 11:16:25', '2022-11-25 11:16:25', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (49, 'feeds_create', '1', 'Feeds', '2022-11-25 11:17:07', '2022-11-25 11:17:07', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (50, 'feeds_edit', '2', 'Feeds', '2022-11-25 11:17:26', '2022-11-25 11:17:26', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (51, 'feeds_show', '3', 'Feeds', '2022-11-25 11:17:47', '2022-11-25 11:17:47', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (52, 'feeds_delete', '4', 'Feeds', '2022-11-25 11:19:47', '2022-11-25 11:19:47', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (53, 'messenger_access', '5', 'Messenger', '2022-11-25 11:22:42', '2022-11-25 11:22:42', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (54, 'messenger_create', '1', 'Messenger', '2022-11-25 11:22:58', '2022-11-25 11:22:58', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (55, 'messenger_edit', '2', 'Messenger', '2022-11-25 11:23:13', '2022-11-25 11:23:13', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (56, 'messenger_show', '3', 'Messenger', '2022-11-25 11:23:27', '2022-11-25 11:23:27', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (57, 'messenger_delete', '4', 'Messenger', '2022-11-25 11:23:45', '2022-11-25 11:23:45', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (58, 'verification_skl_access', '5', 'Verificator SKL', '2022-11-26 16:44:37', '2022-11-26 16:44:37', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (59, 'list_skl_access', '5', 'SKL List', '2022-11-26 16:51:36', '2022-11-26 16:51:36', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (60, 'list_skl_create', '1', 'SKL List', '2022-11-26 16:51:57', '2022-11-26 16:51:57', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (61, 'list_skl_edit', '2', 'SKL List', '2022-11-26 16:52:15', '2022-11-26 16:52:15', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (62, 'list_skl_show', '3', 'SKL List', '2022-11-26 16:52:33', '2022-11-26 16:52:33', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (63, 'list_skl_delete', '4', 'SKL List', '2022-11-26 16:52:50', '2022-11-26 16:52:50', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (64, 'create_skl_access', '5', 'Create SKL', '2022-11-26 16:59:53', '2022-11-26 16:59:53', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (65, 'issued_skl_access', '5', 'Issued SKL', '2022-11-26 17:00:11', '2022-11-26 17:00:11', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (66, 'administrator_access', '5', 'Administrator', '2022-11-29 04:58:04', '2022-11-29 04:58:04', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (67, 'create_skl_create', '1', 'Create SKL', '2022-11-29 06:02:46', '2022-11-29 06:02:46', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (68, 'create_skl_edit', '2', 'Create SKL', '2022-11-29 06:23:47', '2022-11-29 06:23:47', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (69, 'create_skl_show', '3', 'Create SKL', '2022-11-29 06:24:09', '2022-11-29 06:24:09', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (70, 'create_skl_delete', '4', 'Create SKL', '2022-11-29 06:24:28', '2022-11-29 06:24:28', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (71, 'issued_skl_create', '1', 'Issued SKL', '2022-11-29 06:24:47', '2022-11-29 06:24:47', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (72, 'issued_skl_edit', '2', 'Issued SKL', '2022-11-29 06:25:04', '2022-11-29 06:25:04', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (73, 'issued_skl_show', '3', 'Issued SKL', '2022-11-29 06:25:24', '2022-11-29 06:25:24', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (74, 'issued_skl_delete', '4', 'Issued SKL', '2022-11-29 06:25:36', '2022-11-29 06:25:36', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (75, 'master_riph_access', '5', 'Master Data RIPH', '2022-11-29 06:51:52', '2022-11-29 06:53:58', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (76, 'data_report_access', '5', 'Data Report', '2022-12-05 07:36:16', '2022-12-05 07:36:16', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (77, 'master_template_access', '5', 'Master Template', '2022-12-05 07:43:40', '2022-12-05 07:43:40', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (78, 'commitment_list_access', '5', 'Commitment List', '2022-12-05 08:40:29', '2022-12-05 08:40:29', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (79, 'verification_report_access', '5', 'Verification Report', '2022-12-05 08:40:45', '2022-12-05 08:40:45', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (80, 'verif_onfarm_access', '5', 'Onfarm Report', '2022-12-05 16:04:53', '2022-12-05 16:04:53', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (81, 'verif_online_access', '5', 'Online Report', '2022-12-05 16:05:07', '2022-12-05 16:05:07', NULL);
INSERT INTO `permissions` (`id`, `title`, `perm_type`, `grp_title`, `created_at`, `updated_at`, `deleted_at`) VALUES (82, 'admin_SKL_access', '5', 'SKL', '2022-12-05 16:06:52', '2022-12-05 16:06:52', NULL);
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for qa_messages
-- ----------------------------
DROP TABLE IF EXISTS `qa_messages`;
CREATE TABLE `qa_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` bigint unsigned NOT NULL,
  `sender_id` bigint unsigned NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qa_messages_topic_id_foreign` (`topic_id`),
  KEY `qa_messages_sender_id_foreign` (`sender_id`),
  CONSTRAINT `qa_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `qa_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `qa_topics` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of qa_messages
-- ----------------------------
BEGIN;
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (1, 1, 1, '2022-12-14 14:03:51', 'Ini pesan 1', '2022-12-10 04:42:18', '2022-12-14 14:03:51', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (2, 2, 1, '2022-12-14 14:04:20', 'ini pesan 2', '2022-12-10 04:42:36', '2022-12-14 14:04:20', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (3, 3, 1, '2022-12-13 23:56:11', 'ini pesan 3', '2022-12-10 04:42:53', '2022-12-13 23:56:11', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (4, 4, 1, '2022-12-13 23:45:17', 'Invoice sudah dihapus', '2022-12-10 17:54:48', '2022-12-13 23:45:17', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (5, 4, 45, '2022-12-10 18:38:47', 'kenapa dihapus?\r\nJawabin', '2022-12-10 18:38:26', '2022-12-10 18:38:47', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (6, 4, 1, '2022-12-10 18:40:01', 'sebab sudah expired', '2022-12-10 18:39:20', '2022-12-10 18:40:01', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (7, 5, 45, NULL, 'Ini mau kirim file kemana?', '2022-12-13 21:33:16', '2022-12-13 21:33:16', NULL);
INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES (8, 5, 45, NULL, 'ke rumah', '2022-12-13 23:19:35', '2022-12-13 23:19:35', NULL);
COMMIT;

-- ----------------------------
-- Table structure for qa_topics
-- ----------------------------
DROP TABLE IF EXISTS `qa_topics`;
CREATE TABLE `qa_topics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` bigint unsigned NOT NULL,
  `receiver_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qa_topics_creator_id_foreign` (`creator_id`),
  KEY `qa_topics_receiver_id_foreign` (`receiver_id`),
  CONSTRAINT `qa_topics_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `qa_topics_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of qa_topics
-- ----------------------------
BEGIN;
INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES (1, 'Pesan 1', 1, 45, '2022-12-10 04:42:18', '2022-12-10 04:42:18');
INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES (2, 'Pesan 2', 1, 45, '2022-12-10 04:42:36', '2022-12-10 04:42:36');
INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES (3, 'pesan 3', 1, 45, '2022-12-10 04:42:53', '2022-12-10 04:42:53');
INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES (4, 'hapus invoice', 1, 45, '2022-12-10 17:54:48', '2022-12-10 17:54:48');
INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES (5, 'Download Folder', 45, 21, '2022-12-13 21:33:16', '2022-12-13 21:33:16');
COMMIT;

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  KEY `user_id_fk_6464594` (`user_id`),
  KEY `role_id_fk_6464594` (`role_id`),
  CONSTRAINT `role_id_fk_6464594` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_id_fk_6464594` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
BEGIN;
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (2, 2);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (3, 3);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (4, 4);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (15, 4);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (23, 2);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (44, 4);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (45, 4);
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (21, 2);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (1, 'Admin', NULL, NULL, NULL);
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (2, 'User', NULL, NULL, NULL);
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (3, 'Verifikator', '2022-10-07 08:16:33', '2022-10-07 08:16:33', NULL);
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (4, 'user_v2', '2022-11-02 13:22:27', '2022-11-02 13:22:27', NULL);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roleaccess` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (1, 'Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$d580yIFD6xux9D.F6lhHsOMe92iTeTbwGUCf9tbuxIX4WlE019ONO', NULL, 1, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (2, 'Ricky', 'rickysut', 'ricky@sali-evo.com', NULL, '$2y$10$sptf9V51DGIfSLNhmls8muW0cOMhglCBbYmdx7IU.EW.p4nCvF8Zq', NULL, 2, '2022-10-04 09:34:27', '2022-10-04 09:34:27', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (3, 'verifikator1', 'verifikator1', 'veri@gmail.com', NULL, '$2y$10$iga/NgzY5nsCe3kj9lVAh.O1xjg4KssyY8DfukRDwlIvGcblqh/jK', NULL, 1, '2022-10-07 08:15:55', '2022-10-07 08:15:55', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (4, 'Herman', 'herman', 'herman@gmail.com', NULL, '$2y$10$sN4uBjFe.mbfD7Uw9RhFCOfAOZ.ZTVA4RWdJlSe9/ecgtNlpW7xaC', NULL, 3, '2022-10-31 14:43:00', '2022-10-31 14:43:00', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (15, 'company1 satu', 'company1', 'company1@satu.com', NULL, '$2y$10$9NR2IAASsxAxwWWxD88M5uPugIasLfdI.naR8k8kBg.qVtrduXYdS', NULL, 3, '2022-11-10 13:10:11', '2022-11-10 13:10:11', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (21, 'Budi', 'hortikultura.jaya', 'horti.riph@gmail.com', NULL, '$2y$10$fqzbTFPislk2tHLcCEWvkeb42iZJJy.VaIOmb8hZirRiV3QlYus0G', NULL, 2, '2022-11-21 09:04:24', '2022-11-21 09:04:24', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (23, 'Coba 1', 'coba1', 'inatrade@kemendag.go.id', NULL, '$2y$10$Oxu85PsGYLZpy65o4gFFrO/mtufpcFHbf1s8z3i24GrrdG3Pu3Ipq', NULL, 2, '2022-11-21 09:07:24', '2022-11-21 09:07:24', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (44, 'RICKY SUTANTO', 'some', 'Digitalone8@gmail.com', NULL, '$2y$10$4eQEX75bR0AUbA5UwO38jeyI00wxZl6k/jTCiZx86ChtF8IXCPP6y', NULL, 3, '2022-11-22 10:59:33', '2022-11-22 10:59:33', NULL);
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `roleaccess`, `created_at`, `updated_at`, `deleted_at`) VALUES (45, 'ome', 'ome', 'ome@email.com', NULL, '$2y$10$KEtjaaFP9L6PswBqwNcuWukErkkZRFyfzi6RMaCYgQwZiMxSsLz/C', NULL, 3, '2022-11-22 11:50:41', '2022-11-22 11:50:41', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
