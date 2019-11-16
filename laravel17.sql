/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel17

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-11-07 21:43:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '2019-10-09 13:40:51', '2019-10-09 13:40:51', 'Máy tính', 'may-tinh', '0', '2');
INSERT INTO `categories` VALUES ('2', '2019-10-09 13:40:51', '2019-10-09 13:40:51', 'Điện thoại', 'dien-thoai', '0', '2');
INSERT INTO `categories` VALUES ('3', '2019-10-09 13:40:51', '2019-10-09 13:40:51', 'Máy ảnh', 'may-anh', '0', '2');
INSERT INTO `categories` VALUES ('4', '2019-10-09 13:40:51', '2019-10-09 13:40:51', 'Phụ kiện', 'phu-kien', '0', '2');
INSERT INTO `categories` VALUES ('5', '2019-11-02 15:54:41', '2019-11-02 16:46:47', 'Tivi', 'tivi', '1', '2');
INSERT INTO `categories` VALUES ('6', '2019-11-02 16:49:22', '2019-11-02 16:50:04', 'máy tính bảng', 'may-tinh-bang', '1', '0');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', '2019-10-23 14:06:16', '2019-10-23 14:06:16', '0.png', 'storage/0.png', '2');
INSERT INTO `images` VALUES ('2', '2019-10-23 14:06:16', '2019-10-23 14:06:16', '1.png', 'storage/1.png', '3');
INSERT INTO `images` VALUES ('3', '2019-10-27 14:24:43', '2019-10-27 14:24:43', '0.png', 'storage/0.png', '4');
INSERT INTO `images` VALUES ('4', '2019-10-27 14:24:43', '2019-10-27 14:24:43', '1.png', 'storage/1.png', '5');
INSERT INTO `images` VALUES ('5', '2019-10-27 14:27:48', '2019-10-27 14:27:48', '0.png', 'storage/0.png', '6');
INSERT INTO `images` VALUES ('6', '2019-10-27 14:27:48', '2019-10-27 14:27:48', '1.png', 'storage/1.png', '7');
INSERT INTO `images` VALUES ('7', '2019-10-30 13:05:46', '2019-10-30 13:05:46', '0.png', 'storage/0.png', '8');
INSERT INTO `images` VALUES ('8', '2019-10-30 13:05:46', '2019-10-30 13:05:46', '1.png', 'storage/1.png', '9');
INSERT INTO `images` VALUES ('9', '2019-10-30 13:08:12', '2019-10-30 13:08:12', '0.png', 'storage/0.png', '10');
INSERT INTO `images` VALUES ('10', '2019-10-30 13:08:12', '2019-10-30 13:08:12', '1.png', 'storage/1.png', '11');
INSERT INTO `images` VALUES ('11', '2019-10-30 13:20:04', '2019-10-30 13:20:04', '0.png', 'storage/0.png', '12');
INSERT INTO `images` VALUES ('12', '2019-10-30 13:20:04', '2019-10-30 13:20:04', '1.png', 'storage/1.png', '44');
INSERT INTO `images` VALUES ('13', '2019-10-30 13:20:04', '2019-10-30 13:20:04', '2.png', 'storage/2.png', '45');
INSERT INTO `images` VALUES ('14', '2019-11-02 16:48:15', '2019-11-02 16:48:15', '0.png', 'storage/0.png', '46');
INSERT INTO `images` VALUES ('15', '2019-11-02 16:48:15', '2019-11-02 16:48:15', '1.png', 'storage/1.png', '47');
INSERT INTO `images` VALUES ('16', '2019-11-06 12:24:00', '2019-11-06 12:24:00', '0.png', 'storage/products/0.png', '48');
INSERT INTO `images` VALUES ('17', '2019-11-06 12:24:00', '2019-11-06 12:24:00', '1.png', 'storage/products/1.png', '49');
INSERT INTO `images` VALUES ('18', '2019-11-06 12:28:55', '2019-11-06 12:28:55', 'adv_2.png', 'storage/products/adv_2.png', '50');
INSERT INTO `images` VALUES ('19', '2019-11-06 12:28:55', '2019-11-06 12:28:55', 'best_3.png', 'storage/products/best_3.png', '51');
INSERT INTO `images` VALUES ('20', '2019-11-06 13:25:12', '2019-11-06 13:25:12', 'banner_product.png', 'storage/products/banner_product.png', '63');
INSERT INTO `images` VALUES ('21', '2019-11-06 13:25:12', '2019-11-06 13:25:12', 'best_1.png', 'storage/products/best_1.png', '63');
INSERT INTO `images` VALUES ('22', '2019-11-06 13:25:12', '2019-11-06 13:25:12', 'best_4.png', 'storage/products/best_4.png', '63');
INSERT INTO `images` VALUES ('23', '2019-11-06 13:32:00', '2019-11-06 13:32:00', 'banner_product.png', 'storage/products/banner_product.png', '64');
INSERT INTO `images` VALUES ('24', '2019-11-06 13:32:00', '2019-11-06 13:32:00', 'best_1.png', 'storage/products/best_1.png', '64');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('12', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('13', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('14', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('15', '2019_09_30_122516_create_todos_table', '1');
INSERT INTO `migrations` VALUES ('16', '2019_09_30_130742_add_status_column_todos_table', '1');
INSERT INTO `migrations` VALUES ('17', '2019_10_01_111644_add_user_id_column_todos_table', '1');
INSERT INTO `migrations` VALUES ('18', '2019_10_09_122756_create_products_table', '2');
INSERT INTO `migrations` VALUES ('19', '2019_10_09_123510_create_images_table', '2');
INSERT INTO `migrations` VALUES ('20', '2019_10_09_124403_create_categories_table', '3');
INSERT INTO `migrations` VALUES ('21', '2019_10_09_125706_add_slug_column_products_table', '4');
INSERT INTO `migrations` VALUES ('23', '2019_10_14_121428_create__user_info_table', '5');
INSERT INTO `migrations` VALUES ('24', '2019_10_28_123854_add_is_admin_column_users_table', '6');
INSERT INTO `migrations` VALUES ('25', '2019_10_31_070150_add_phone_column_users_table', '7');
INSERT INTO `migrations` VALUES ('26', '2019_10_31_073558_add_avatar_column_users_table', '8');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `view_count` bigint(20) NOT NULL DEFAULT '0' COMMENT 'lượt xem sp',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('12', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Aut aut et expedita.', 'aut-aut-et-expedita', 'Assumenda ducimus.', '568535', '726717', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('13', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Sit laudantium.', 'sit-laudantium', 'Dicta a ut omnis.', '645104', '737851', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('14', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Autem esse earum.', 'autem-esse-earum', 'Quis doloremque.', '677868', '635248', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('15', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Saepe qui veniam.', 'saepe-qui-veniam', 'Officiis laboriosam.', '648360', '536474', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('16', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Eligendi eius.', 'eligendi-eius', 'Aut maxime.', '720806', '681542', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('17', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Eius tempore atque.', 'eius-tempore-atque', 'Repudiandae est.', '557640', '503732', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('18', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Sed in quisquam.', 'sed-in-quisquam', 'Iste ratione sunt.', '700112', '695510', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('19', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Beatae modi modi.', 'beatae-modi-modi', 'Facilis iste odit.', '509439', '529723', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('20', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Consectetur.', 'consectetur', 'Et deleniti ad.', '629785', '563347', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('21', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Quia sint corporis.', 'quia-sint-corporis', 'Blanditiis et autem.', '689710', '427161', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('22', '2019-10-09 13:31:43', '2019-10-09 13:31:43', 'Totam quo.', 'totam-quo', 'Consequuntur rerum.', '469200', '758640', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('23', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Perferendis.', 'perferendis', 'Consequatur.', '700974', '632282', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('24', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Ex provident vel.', 'ex-provident-vel', 'Rerum non neque.', '500699', '585699', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('25', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Inventore et.', 'inventore-et', 'Deserunt iure nihil.', '595606', '648146', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('26', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Rerum fuga illum.', 'rerum-fuga-illum', 'In deserunt dolorum.', '565718', '751385', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('27', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Aperiam facilis.', 'aperiam-facilis', 'Nihil quam veniam.', '492337', '434131', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('28', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Ut aut quo.', 'ut-aut-quo', 'Voluptatum.', '422756', '799999', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('29', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Voluptates enim.', 'voluptates-enim', 'Ipsam sint debitis.', '463023', '537828', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('30', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Aut minima ea.', 'aut-minima-ea', 'Quia et porro error.', '570177', '755244', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('31', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'In ut impedit.', 'in-ut-impedit', 'Placeat qui animi.', '425271', '765855', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('32', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Qui officiis at ut.', 'qui-officiis-at-ut', 'Officia sit nostrum.', '765904', '620016', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('33', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Commodi nobis.', 'commodi-nobis', 'Doloribus.', '683476', '483177', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('34', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Ipsum optio dolore.', 'ipsum-optio-dolore', 'Fugiat amet aut.', '668810', '565057', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('35', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Velit ipsa ipsam.', 'velit-ipsa-ipsam', 'Aliquid consequatur.', '563306', '631801', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('36', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Sunt neque.', 'sunt-neque', 'Sapiente aperiam ex.', '719359', '640272', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('37', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Quis earum.', 'quis-earum', 'Enim ut temporibus.', '464517', '531566', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('38', '2019-10-09 13:31:44', '2019-10-09 13:31:44', 'Non enim molestiae.', 'non-enim-molestiae', 'Nam culpa.', '500367', '476696', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('39', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Quo quae qui.', 'quo-quae-qui', 'Officiis nostrum.', '604144', '626541', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('40', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Harum culpa nisi.', 'harum-culpa-nisi', 'Numquam at dolor.', '639480', '771591', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('41', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Repellat fugiat.', 'repellat-fugiat', 'Dolores eius quia.', '745650', '520762', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('42', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Exercitationem.', 'exercitationem', 'Impedit accusantium.', '559253', '627352', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('43', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Non maiores laborum.', 'non-maiores-laborum', 'Architecto ut odit.', '784178', '772371', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('44', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Officia.', 'officia', 'Omnis ea architecto.', '654057', '646003', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('45', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Modi amet rerum.', 'modi-amet-rerum', 'Rem aut quidem ut.', '614691', '650066', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('46', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Necessitatibus.', 'necessitatibus', 'Perferendis enim.', '597476', '624433', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('47', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Quos harum at vitae.', 'quos-harum-at-vitae', 'Est sit dolorem sed.', '548746', '708863', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('48', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Harum accusamus id.', 'harum-accusamus-id', 'Sint consequatur.', '774032', '721923', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('49', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Velit unde atque.', 'velit-unde-atque', 'Omnis mollitia qui.', '773726', '630206', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('50', '2019-10-09 13:31:45', '2019-10-09 13:31:45', 'Facere hic quo.', 'facere-hic-quo', 'Voluptate aut sed.', '439972', '588617', '201', '1', '1', '0');
INSERT INTO `products` VALUES ('51', '2019-10-21 12:28:50', '2019-10-21 12:28:50', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '<p>scsjhdchsjdcvhsdc</p>', '10000000', '10000000', '252', '1', '1', '0');
INSERT INTO `products` VALUES ('52', '2019-10-21 12:30:36', '2019-10-21 12:30:36', 'laptop', 'laptop', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '10000000', '10000000', '252', '1', '0', '0');
INSERT INTO `products` VALUES ('53', '2019-10-23 14:04:45', '2019-10-23 14:04:45', 'Iphone 11', 'iphone-11', '<p>aaaaaaaaaaaaaaaaaa</p>', '30000000', '30000000', '252', '2', '1', '0');
INSERT INTO `products` VALUES ('54', '2019-10-23 14:06:16', '2019-10-23 14:06:16', 'Iphone 1111111', 'iphone-1111111', '<p>ip</p>', '10000000', '10000000', '252', '2', '1', '0');
INSERT INTO `products` VALUES ('55', '2019-10-27 14:24:43', '2019-10-27 14:24:43', 'Iphone 11', 'iphone-11', '<p>apple</p>', '30000000', '30000000', '252', '2', '1', '1');
INSERT INTO `products` VALUES ('56', '2019-10-27 14:27:48', '2019-10-27 14:27:48', 'Iphone 11 pro', 'iphone-11-pro', '<p>Apple</p>', '30000000', '30000000', '252', '2', '1', '1');
INSERT INTO `products` VALUES ('57', '2019-10-30 13:05:46', '2019-10-30 13:05:46', 'samsung 1', 'samsung-1', '<p>samsung</p>', '30000000', '30000000', '252', '2', '0', '1');
INSERT INTO `products` VALUES ('58', '2019-10-30 13:08:12', '2019-10-30 13:08:12', 'Iphone 11', 'iphone-11', '<p>scsdcsda</p>', '30000000', '30000000', '252', '2', '0', '1');
INSERT INTO `products` VALUES ('59', '2019-10-30 13:20:04', '2019-10-30 13:20:04', 'qqqq', 'qqqq', '<p>aaa</p>', '10000000', '10000000', '252', '4', '-1', '1');
INSERT INTO `products` VALUES ('60', '2019-11-02 16:48:15', '2019-11-02 16:48:42', 'Iphone 12 new', 'iphone-12-new', '<p>iphone</p>', '30000000', '30000000', '252', '2', '0', '1');
INSERT INTO `products` VALUES ('61', '2019-11-06 12:24:00', '2019-11-06 12:24:00', 'long', 'long', '<p>abc</p>', '10000000', '10000000', '252', '3', '0', '2');
INSERT INTO `products` VALUES ('62', '2019-11-06 12:28:55', '2019-11-06 12:28:55', 'hungabc', 'hungabc', '<p>sxz</p>', '30000000', '30000000', '252', '4', '0', '1');
INSERT INTO `products` VALUES ('63', '2019-11-06 13:25:12', '2019-11-06 13:25:12', 'dfvdf', 'dfvdf', '<p>cv bcv vc&nbsp;</p>', '30000000', '30000000', '252', '1', '0', '0');
INSERT INTO `products` VALUES ('64', '2019-11-06 13:32:00', '2019-11-06 13:32:00', 'ácdsvdfvdx', 'acdsvdfvdx', '<p>&aacute;cxscsdc</p>', '30000000', '30000000', '252', '1', '0', '0');

-- ----------------------------
-- Table structure for todos
-- ----------------------------
DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of todos
-- ----------------------------
INSERT INTO `todos` VALUES ('1', '35', 'Accusamus harum.', 'Non nihil voluptatem sunt voluptatem praesentium. Et quas et rerum est facere ut est. Itaque assumenda sapiente corrupti sint dicta deleniti fuga.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('2', '13', 'Et error deleniti.', 'Est eveniet sunt cupiditate quas ratione consectetur. Porro est occaecati ullam autem cum assumenda voluptatibus ullam. Nulla reprehenderit quam pariatur eius eligendi.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('3', '27', 'Pariatur tempore.', 'Qui quia est ea omnis. Eos id aut porro magnam qui facilis commodi. Adipisci et cupiditate hic voluptas quidem voluptatum. Quos sequi et dignissimos velit eligendi velit officiis.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('4', '118', 'Impedit.', 'Dolores et nostrum atque nostrum iste odit quae. Modi consequatur eligendi et. Porro dicta magnam maiores et eligendi.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('5', '182', 'Eveniet culpa et ut.', 'Ducimus laudantium corporis accusamus. Qui rerum animi aut vel. Necessitatibus quod optio iusto inventore voluptatum. Recusandae labore dignissimos laboriosam reiciendis hic minus.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('6', '115', 'Et nisi eos et qui.', 'Laudantium incidunt deserunt tenetur aut est ipsa nemo qui. Quisquam sunt qui optio minima id eum. Sed voluptas corporis qui fugit eaque. Qui doloribus optio nam.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('7', '90', 'Ab iusto alias nisi.', 'Minus est eum alias velit. Provident ut ipsum officiis sint. Assumenda natus quia distinctio saepe aliquam consectetur harum ut.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('8', '83', 'Aut pariatur neque.', 'Illo saepe impedit ut possimus impedit. Fuga est est id porro neque accusantium magnam.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('9', '60', 'Odit architecto.', 'Ullam animi consequuntur recusandae amet laboriosam. Numquam ullam id omnis ut in nihil. Quae est impedit explicabo atque.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('10', '25', 'Necessitatibus enim.', 'Non sequi sint impedit qui. Fugiat aspernatur earum et eos quos sit. Accusamus esse ex iusto occaecati. Repellendus aut sed qui unde perspiciatis voluptas ullam est.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('11', '122', 'At qui amet qui et.', 'Voluptatem ut sed id ullam praesentium repudiandae doloribus. Id beatae nesciunt inventore similique id quia iste ut. Fugiat aliquid dolores in sequi aut quia nihil impedit.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('12', '164', 'Ut optio.', 'Iste quidem non quasi molestiae. Saepe aut dicta quisquam cupiditate corrupti asperiores. Et ut deserunt quia. Quia quas facere id labore id quo. Voluptate aspernatur ab eum quia qui maiores.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('13', '13', 'Expedita ducimus.', 'Officiis numquam odit facere vel et qui. Et commodi assumenda assumenda explicabo eos. Nesciunt odit aut expedita tempora exercitationem.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('14', '23', 'Rerum aspernatur ut.', 'Enim excepturi dolores quia sit. Soluta odio vel sit est. Suscipit veniam omnis adipisci quam.', '0', '2019-10-02 12:17:23', '2019-10-02 12:17:23');
INSERT INTO `todos` VALUES ('15', '4', 'Eius amet beatae.', 'Qui necessitatibus blanditiis sed esse aut numquam. Esse quas velit laboriosam ipsa labore eaque et est. Perferendis alias quod reiciendis quia.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('16', '145', 'Mollitia odit.', 'Est veniam omnis est delectus. Sapiente voluptatibus quasi similique dolore molestias. At illo nihil nisi quis qui.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('17', '25', 'Ipsa iste fugiat.', 'Magni laudantium non omnis placeat beatae maiores ut. Voluptas blanditiis accusamus perferendis optio.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('18', '196', 'Et ut vel animi.', 'Vel asperiores blanditiis ut sit. Iure qui incidunt quia deserunt voluptatem architecto ut. Recusandae voluptatibus rerum ex a accusantium cum aut.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('19', '17', 'Totam ducimus et.', 'Quis sit accusantium ratione ullam delectus eum. Ullam dolor fugiat sint et a eum error. Sint qui quasi quia nam.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('20', '137', 'Earum quo et magni.', 'Esse voluptatibus aut doloremque et quisquam eum et. Modi reiciendis iusto itaque. Eaque labore in modi libero.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('21', '68', 'Quas beatae.', 'Ullam quasi suscipit adipisci perferendis minima perferendis. At consequatur ad perferendis nemo fugiat. Dignissimos doloribus eum illum reiciendis sunt.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('22', '49', 'Earum culpa ab sit.', 'Blanditiis quia delectus nisi qui aut. Vitae excepturi atque cupiditate aut asperiores. Aut et expedita ut dolor sit.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('23', '144', 'Quas sapiente.', 'Pariatur dignissimos enim ducimus autem eveniet autem. Non quo eligendi et reiciendis. Repudiandae ut consectetur error ut cumque dolorum perspiciatis. Quo aut aliquid cumque quidem tempora et.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('24', '89', 'Deleniti minus.', 'Asperiores eum adipisci placeat magni quis consequuntur consequatur. Explicabo cum ducimus vel voluptates expedita. Et aut ut enim soluta fugit.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('25', '8', 'Et voluptates iste.', 'Qui deleniti asperiores sint omnis eos qui dolores in. Earum sit reprehenderit nemo vel ut non.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('26', '107', 'Ab dolorum dolores.', 'Molestiae nisi voluptate ut quod recusandae. Incidunt ea aut qui asperiores commodi dolorem sint. Consequatur molestiae nihil inventore dicta quia ut accusantium. Deserunt sit et aut qui.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('27', '179', 'Quos placeat nam.', 'Adipisci non aut possimus rem. Minima expedita molestias fuga. Perferendis adipisci itaque molestiae quis. Earum velit sint quia quia. Perferendis laboriosam nemo modi alias.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('28', '50', 'Et illum iure eius.', 'Id enim corrupti deleniti ea expedita et. Consequatur ut ut animi. Dolore sequi quo ut omnis excepturi repellendus.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('29', '45', 'Vitae delectus.', 'Adipisci optio dolor modi ad. Pariatur dolorem magnam enim praesentium eligendi. Dolor dolorem non magnam illo saepe illum nisi. Officia rem quia voluptatem quia illum possimus eum.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('30', '131', 'Magnam vitae.', 'Similique earum nulla et. Eos nobis a ut velit. Rerum ullam est soluta.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('31', '144', 'Maiores aut cumque.', 'Autem ab qui eaque voluptate voluptatibus perferendis omnis. Quas unde quod quos blanditiis voluptas. Minima velit maxime eos numquam dolorum.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('32', '66', 'Tempore fuga.', 'Eos et veniam et architecto et. Necessitatibus consequatur omnis et aut veritatis. Ipsa dicta perspiciatis dolores asperiores. Omnis nesciunt nostrum ad et.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('33', '75', 'Odit voluptatem.', 'Accusantium ut laborum sunt cumque cum. Distinctio molestiae et itaque. Dolores accusantium magni repellat et in. Enim aut illo vel. Quis quasi architecto asperiores ipsum blanditiis mollitia animi.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('34', '170', 'Id incidunt alias.', 'Debitis expedita eveniet cumque veritatis. Assumenda error et rerum molestiae deleniti excepturi qui.', '0', '2019-10-02 12:17:24', '2019-10-02 12:17:24');
INSERT INTO `todos` VALUES ('35', '114', 'Magnam sint iste.', 'Totam ut ut commodi nobis. Quis in sit quisquam odit et rerum.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('36', '89', 'Aliquam praesentium.', 'Quod consequatur illo tempore ad. Sunt alias eos qui reprehenderit recusandae saepe. Atque rerum qui voluptas commodi quo quo. Aut sit dolor non minima et.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('37', '92', 'Nesciunt aliquid.', 'Aut nulla praesentium ea. Culpa nisi in ut quam possimus cumque in illo. Rerum fugit quia eligendi doloribus vel.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('38', '121', 'Vel qui quidem.', 'Eligendi molestiae adipisci animi aut. Eum laudantium velit sed ut rerum id repellat. Eaque sunt aut recusandae quis nobis iure. Qui reiciendis fuga laudantium ea.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('39', '123', 'Aliquid laborum ut.', 'Voluptatem eveniet quaerat quia excepturi eaque veniam. In ex aut eum. Omnis rerum nulla consequatur rem.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('40', '110', 'Sunt alias.', 'Magni qui eum sed. Unde et cum earum eum rerum repellat. Eligendi vero nisi officiis dolores. Maxime reiciendis sint voluptatum necessitatibus beatae mollitia.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('41', '123', 'Qui qui eveniet aut.', 'Dignissimos ducimus occaecati dolor. Quia eum architecto voluptates voluptatem rerum harum. Est est dolores totam aut aperiam.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('42', '61', 'Labore excepturi ut.', 'Labore quisquam voluptatem amet vitae. Eligendi ratione dolorum et aliquam voluptatem excepturi. A maxime est reiciendis assumenda aut.', '0', '2019-10-02 12:17:25', '2019-10-02 12:17:25');
INSERT INTO `todos` VALUES ('43', '180', 'Non sed maxime.', 'Enim consequatur est voluptatem perferendis. Quia iste assumenda voluptas perspiciatis laudantium omnis. Illo perferendis rem qui aperiam ea.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('44', '74', 'Ut molestiae.', 'Est maxime similique fugit. Consequatur totam nostrum minus sed vel nemo. Molestias recusandae fuga natus dolor saepe ex dolores. Corrupti sapiente ut ut rem. Eum voluptatem sint sunt tempore et.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('45', '60', 'Consequatur et eos.', 'Sit alias harum et est. Culpa officiis animi occaecati sed consequatur. Animi beatae occaecati vel ab et blanditiis voluptatibus. Ut doloribus ut sequi inventore et fuga beatae sint.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('46', '120', 'Quia inventore.', 'Reiciendis quibusdam provident adipisci sed commodi quia. Consequatur et reiciendis sapiente incidunt nemo iure.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('47', '46', 'Sed iure nemo nam.', 'Quaerat qui occaecati debitis qui rerum. Qui et esse ea omnis. Aspernatur rerum ut est blanditiis enim iusto.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('48', '69', 'Similique.', 'Pariatur nam placeat sint in voluptatibus quas. Inventore consequatur voluptas minus asperiores et. Rerum consequatur enim et vel qui.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('49', '184', 'Omnis cum beatae.', 'Quas ullam eum deleniti voluptas unde reiciendis. Nemo eius non vero culpa dolorem. Vitae nihil occaecati placeat reprehenderit qui quam. Dicta accusantium et itaque eos voluptatem rem tempore.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('50', '6', 'Repudiandae.', 'Debitis atque velit vel aut sed labore. Occaecati tenetur incidunt ea pariatur aut sint. Quia et est quis consectetur aut dignissimos. Rerum ratione nesciunt non eum dolor et nulla.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('51', '132', 'Et odit architecto.', 'Adipisci adipisci est esse consectetur velit porro. Quam et illum doloribus veritatis magnam. Libero alias sit qui reprehenderit. Molestiae repudiandae porro minus quia est.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('52', '95', 'Inventore veniam.', 'Qui rerum voluptatum qui ipsum molestiae id. Saepe quam temporibus vel. Repellendus voluptatem at sunt culpa aut repellendus.', '0', '2019-10-02 12:17:26', '2019-10-02 12:17:26');
INSERT INTO `todos` VALUES ('53', '49', 'Dolorum qui vel sit.', 'Aliquam modi voluptatem et ex quis. Accusantium veritatis sed et dolores ea dolores. Eaque tempore ea optio occaecati et occaecati et.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('54', '23', 'Aut rerum autem.', 'Delectus consequuntur iste at totam amet voluptatum. Rerum atque aliquid rerum perspiciatis facere labore. Non aut pariatur vel cum nam architecto rerum et.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('55', '91', 'Id libero est et.', 'Molestias qui quia molestiae placeat debitis. Blanditiis et ipsum quod voluptatum. Autem distinctio aut perspiciatis in et excepturi iusto.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('56', '91', 'Saepe consectetur.', 'Officiis aliquam explicabo vel qui. Sit corporis sint sed eaque. Animi distinctio aut facere qui. Voluptate aut illum inventore beatae tenetur est. Deleniti aut quo ut sequi officiis.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('57', '59', 'Dolores repudiandae.', 'Sunt temporibus et velit dolores fuga esse tempore. Sed quis dicta et reprehenderit voluptas eligendi. Veniam eum quis et nam omnis qui.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('58', '46', 'Vitae error.', 'Ut asperiores deleniti magni. Illo perferendis autem natus corrupti mollitia voluptatem sequi. Est velit voluptas quos. Velit cupiditate suscipit voluptatem atque natus.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('59', '136', 'Rerum debitis aut.', 'Deleniti nulla aut delectus nihil natus voluptatem cupiditate. Exercitationem ullam vel et quis in autem. Et voluptas quo fugit eligendi eaque et aliquam.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('60', '133', 'Esse et provident.', 'Dolor asperiores aut et iusto. Et cupiditate harum sequi. Illum vero deserunt porro officiis totam est. Officia consequatur hic eos fuga libero animi.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('61', '95', 'Rerum molestiae.', 'Sed quaerat est non pariatur ut et unde. Qui provident aliquam excepturi et sit voluptatem. Quo et delectus nesciunt dolore ex quidem error. Enim porro omnis illo et.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('62', '191', 'Voluptate aut.', 'Enim ut quis culpa impedit id. Et nam sit a ut commodi. Est ea placeat facere possimus.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('63', '91', 'Ea odio consectetur.', 'Accusantium neque corrupti et nostrum quos consequatur. Beatae magnam et explicabo et a ad. Vitae aliquam aperiam consequuntur consequatur deleniti sint qui.', '0', '2019-10-02 12:17:27', '2019-10-02 12:17:27');
INSERT INTO `todos` VALUES ('64', '38', 'Iure aut voluptatem.', 'Eos dolores cumque incidunt nemo nisi amet quasi. Consequatur fuga laboriosam libero ipsum.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('65', '73', 'Et eaque vel.', 'Facere mollitia dolor sed velit ipsum voluptatem. Consequatur laborum et ex eum aut harum et et. Explicabo voluptas et quis maxime excepturi.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('66', '34', 'Id blanditiis non.', 'Id perferendis totam sit sunt et unde. Ea ut deserunt ab laborum qui. Aut eos rerum ad numquam cupiditate consequatur aut et.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('67', '139', 'Vel corrupti ut id.', 'Rerum dolore voluptas eum aut. Rem consectetur odit eos quos at. Provident deleniti ipsum voluptas aliquam. Qui odit enim aut harum vero facere repudiandae.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('68', '87', 'Vel rem modi odio.', 'Reprehenderit et qui harum autem et nisi. Nihil inventore temporibus sit quo et. Soluta similique et quibusdam dolore saepe. Qui facere voluptatem quae.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('69', '56', 'Nam tempora vitae.', 'Quas doloremque itaque eveniet. Quasi nulla ipsa deserunt nisi nostrum adipisci. Rem et in qui totam qui est totam rerum. Nulla exercitationem consequuntur quibusdam dicta debitis cupiditate sit.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('70', '107', 'Ipsum iure dolores.', 'Rerum suscipit magni et qui numquam quibusdam. Dicta architecto dolores amet nemo. Vel doloribus atque est eum.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('71', '168', 'Quo alias sunt.', 'Rerum provident dolorem et. Ab reiciendis incidunt natus est. Tenetur est sit velit optio.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('72', '27', 'Sed facilis sit.', 'Non fugiat eaque nobis maxime sed nihil omnis officiis. Culpa neque qui esse. Quisquam temporibus ut sit omnis eligendi eius molestiae. Natus dolores laudantium reprehenderit.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('73', '174', 'Rerum tempore odio.', 'Labore labore qui rerum veniam ratione inventore. Explicabo iste repellendus corrupti quasi qui incidunt. Quia est earum rerum non in maiores. Quod quos adipisci vel ut ipsa fuga quam.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('74', '166', 'Facilis est ullam.', 'Velit sint expedita sed officiis dignissimos eius. Quis laudantium non aut eaque corrupti facere eos.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('75', '135', 'Qui recusandae.', 'Nemo et dolor nobis autem voluptatum voluptatibus. Omnis mollitia animi accusamus ex nihil. Ea animi est sunt.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('76', '144', 'Quisquam illum.', 'Dolore qui assumenda dolorum unde est et esse quo. Nulla sed laboriosam tenetur velit ea natus nulla. Sequi ut occaecati non placeat nesciunt.', '0', '2019-10-02 12:17:28', '2019-10-02 12:17:28');
INSERT INTO `todos` VALUES ('77', '53', 'Quas nihil.', 'Cum ipsam perspiciatis explicabo voluptatem odio eveniet aliquid. A maiores autem magni autem. Quisquam tenetur et soluta voluptas dolor.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('78', '82', 'Occaecati.', 'Excepturi mollitia ducimus explicabo qui inventore. Aut laboriosam laboriosam officiis vero voluptatem cumque. Rerum tempore tempore minus impedit.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('79', '194', 'Qui aut sequi.', 'Placeat illum et enim veritatis. Et maiores qui ipsam fugit accusamus quod. Perferendis quia nisi et illum sit nostrum sed. Ut temporibus ut eum et.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('80', '48', 'Voluptatem odit.', 'Quasi ipsam quia accusantium similique dolorum excepturi voluptates. Aperiam possimus ut assumenda doloremque nihil. Iusto praesentium voluptatum et officiis. Modi nisi autem magnam et.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('81', '147', 'Non aut sunt.', 'Voluptas consequatur voluptas error et ut. Aut voluptatem adipisci officiis nobis quo. Repudiandae cupiditate cupiditate doloremque sit perspiciatis ut.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('82', '35', 'Quia qui magnam.', 'Nemo totam ut facilis possimus ut ullam. Sed sunt qui maxime voluptatem in eos. Exercitationem vel quisquam sunt.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('83', '167', 'Est minus tempora.', 'Nesciunt iure sint est. Unde qui qui nihil sit provident dicta quia. Aliquam possimus dolores incidunt sapiente nihil dolore. Sunt inventore laboriosam voluptatum beatae est.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('84', '90', 'Est amet molestias.', 'Illo facilis aspernatur quia vel. Sunt est magni qui illum. Voluptas fuga amet libero illum aut voluptatem. Et recusandae repudiandae molestias unde vero. Impedit ut quae vitae expedita voluptatem.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('85', '98', 'Sequi est est et.', 'Sequi ipsum distinctio omnis esse modi ratione. Eum sequi sunt molestias. Commodi dolor sit voluptatem dolorem suscipit necessitatibus.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('86', '67', 'Asperiores cum ut.', 'Ab eaque et cupiditate rerum placeat. Officiis voluptas rerum voluptate numquam eaque. Porro officiis cum et sunt. Quam fuga molestiae laboriosam facere blanditiis atque aut suscipit.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('87', '124', 'Ipsam alias quia.', 'Nobis inventore ut repellat ipsum est consequatur. Eum ex ab voluptatibus perspiciatis dicta ullam distinctio quae. Earum sit voluptate minima pariatur ut. Rerum quia voluptatem libero eos eos vel.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('88', '164', 'Dolor optio et.', 'Voluptatem praesentium dolores harum deleniti omnis labore. Accusantium qui optio excepturi quae quia ipsam voluptatem possimus. Et laudantium qui omnis deserunt.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('89', '157', 'Et molestiae et.', 'Quae quae officia pariatur voluptatibus. Rerum aperiam ea voluptates ut sunt sunt blanditiis. Libero sit tenetur corrupti sed porro ut.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('90', '137', 'Provident eaque.', 'Ut quis eum culpa. Eos enim doloribus dolores ipsum et magni delectus. Perspiciatis facilis ad eos explicabo. Nihil et velit qui.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('91', '189', 'Iure pariatur.', 'Qui eos est beatae exercitationem dolorum culpa. Fugiat non et aut voluptas et necessitatibus. Quas quia rerum praesentium deleniti nemo fugit ducimus deserunt.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('92', '193', 'Et dignissimos enim.', 'In excepturi itaque eaque tempora eveniet vel. Sed molestiae porro quisquam dolore harum. Numquam explicabo natus id dignissimos eum. Natus totam porro pariatur eos.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('93', '154', 'Illo quia nisi.', 'Minima quibusdam veritatis rerum architecto. Molestiae autem architecto laboriosam sed molestiae porro veritatis. Illum illo dolor repellendus facilis ea id.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('94', '112', 'Molestiae eveniet.', 'Deserunt dolore alias ullam dolor debitis numquam nesciunt. Necessitatibus iure dolores et dolore dolor fuga totam.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('95', '20', 'Vero sit enim.', 'Nostrum corrupti odit aliquid qui vel. Aperiam odit sunt voluptatum fuga. Quibusdam odio sed dolore minima voluptate animi.', '0', '2019-10-02 12:17:29', '2019-10-02 12:17:29');
INSERT INTO `todos` VALUES ('96', '47', 'Id impedit enim.', 'Delectus ut quasi omnis voluptatem consequatur qui nostrum exercitationem. Est harum officiis enim cupiditate enim optio. Ipsa sunt quos quam facere et.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('97', '85', 'Sit quo modi.', 'Aut quasi sit voluptas voluptas repellendus beatae perspiciatis. Ut dolore explicabo neque omnis ea aut ea. Omnis aut exercitationem suscipit est distinctio est hic.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('98', '28', 'Excepturi voluptate.', 'Maiores voluptatum fugiat autem labore eum. Tenetur fuga nihil ut et. Molestias enim dignissimos quam aut aliquid fuga. Omnis quam ut maiores eum.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('99', '49', 'Velit dolore enim.', 'Iusto labore possimus facilis totam. Perspiciatis aut ea voluptates. Aut dolorum sunt ea et facere dignissimos. Quae error maiores reiciendis sint consequatur dolor.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('100', '32', 'Debitis eum veniam.', 'Consequatur aspernatur sunt rerum vel assumenda doloremque aut. Qui voluptas eos quia quas. Sint eveniet in cupiditate facere perferendis voluptate. Vitae natus molestiae eius.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('101', '53', 'Quo voluptates.', 'Aut eos quo recusandae facere amet. Voluptas et debitis ut mollitia nemo non id. Magnam ipsam nisi rerum aut illo id dignissimos. Molestias cumque voluptatem placeat similique fugiat provident.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('102', '151', 'Illum dolores ut.', 'Delectus non ut nostrum quibusdam. Minus ratione rerum sunt nisi non voluptas.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('103', '174', 'Possimus ut.', 'Qui vitae exercitationem et sed ex quisquam. Non ducimus maxime et dolore est animi ut. Exercitationem sint omnis veniam impedit ut quos harum.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('104', '21', 'Commodi ex.', 'Alias eaque commodi omnis ducimus labore. Dolores incidunt rerum sed beatae exercitationem qui. Blanditiis cumque eos libero aut totam.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('105', '91', 'Nemo facilis.', 'Unde tempora ullam dignissimos quia. Voluptatem tempora blanditiis sit. Adipisci sint rerum labore consequuntur. Maxime consequuntur dolor nihil molestias qui.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('106', '14', 'Omnis dolorem.', 'Nostrum molestias rem enim. Perspiciatis quia nulla consectetur libero reiciendis rerum error. Aut veritatis voluptas nostrum inventore repellat explicabo et.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('107', '194', 'Ea voluptas ipsum.', 'Atque qui omnis dolorum dolorum nesciunt. Praesentium omnis doloribus in.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('108', '81', 'Ut impedit illum.', 'Modi quasi quisquam vel atque in. Vero velit ullam voluptas fugiat vel sint aut quia. Deserunt alias aliquam et similique consequuntur occaecati perspiciatis.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('109', '133', 'Sit consequuntur.', 'Placeat quo explicabo debitis ad. Cupiditate esse asperiores veritatis nam laudantium vel. Est saepe ipsam quia qui hic tempora.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('110', '194', 'Sit voluptatem cum.', 'Et ex non commodi eum. Maiores vitae facere non corrupti sit. Recusandae laudantium officia dolore. Ut autem doloribus quia perferendis delectus.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('111', '196', 'Repellendus in.', 'Nobis eos dolor sed consequatur. Eum temporibus tempora est enim adipisci dignissimos. Voluptates ipsam sed nisi.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('112', '74', 'Fuga est.', 'Est omnis autem totam. Illum voluptates et dicta rerum porro iste exercitationem. Excepturi amet minus ipsam ipsa quis labore ad. Ullam voluptates et eos soluta.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('113', '192', 'Ratione illo.', 'Aut rerum eum natus ab occaecati nisi. Alias illum nihil praesentium nam incidunt omnis ut. Numquam ea modi autem omnis vel. Unde est itaque ut aliquam aut. Aliquid rerum est quas maxime ut.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('114', '63', 'Atque quidem fugiat.', 'Perspiciatis alias labore nam deleniti. Velit aliquam iste et eaque repellendus ab. Exercitationem accusantium vel incidunt aut. Possimus quisquam occaecati sunt ut occaecati.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('115', '108', 'Assumenda commodi.', 'Esse tempore sequi officia nihil fuga voluptatum. Et porro est est est ut est est molestias. Et repellendus omnis molestias dolorem quidem qui et. Atque et cumque inventore dicta.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('116', '37', 'Corrupti ut ut.', 'Doloremque repellendus quis et in nam ipsa. Voluptas cumque dolore sint quidem omnis sapiente nobis. Sint vero dicta ut vitae temporibus nostrum.', '0', '2019-10-02 12:17:30', '2019-10-02 12:17:30');
INSERT INTO `todos` VALUES ('117', '119', 'Aliquid reiciendis.', 'Distinctio aperiam quam aut sit non praesentium odit. Voluptatem velit voluptas porro exercitationem reiciendis consequatur.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('118', '5', 'Error sit in.', 'Vel enim est ducimus voluptatem eaque atque suscipit harum. Neque nulla id voluptas consequatur est beatae laborum. Temporibus vel corrupti nisi eaque similique aut eos.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('119', '187', 'Et minus.', 'Qui laboriosam et debitis dolores veniam. Dignissimos fugiat ullam nobis deleniti amet pariatur. Qui qui enim veritatis autem.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('120', '57', 'Dolor cumque.', 'In quia a vel consequatur cum fuga et consequatur. Non corrupti et dolore labore voluptatem tempora. Aspernatur eveniet et rem illo hic possimus. Vel dolores et qui ut quis illum.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('121', '87', 'Dolor consequuntur.', 'Voluptatem et excepturi accusamus nisi. Quis sunt at ipsum odio earum tenetur cum qui.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('122', '44', 'Debitis omnis.', 'Mollitia exercitationem quo doloremque eum quos quae non. Eius id et mollitia sequi. Ab minima rerum voluptas tenetur autem optio.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('123', '185', 'Iure neque ea.', 'Ad quae iste animi non ex. Rem autem totam et illum odit. Enim eaque voluptatem numquam nesciunt rerum non. Quisquam unde autem et voluptatem modi tempore minus ex.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('124', '58', 'Voluptatem quo.', 'Enim rem ut nobis incidunt in dolores. Soluta laudantium officiis doloribus. Facilis magnam cupiditate quia voluptatem ad reprehenderit ea.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('125', '68', 'Nostrum magni quia.', 'Incidunt repudiandae praesentium repellendus provident ut explicabo explicabo. Non facere consectetur sed facilis commodi. Harum nulla rerum magnam qui animi.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('126', '142', 'Consequatur aut non.', 'Molestias est officia cupiditate ullam quasi ad. Quaerat repellat repudiandae est accusamus. Autem voluptatibus voluptatum repellat corrupti.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('127', '50', 'At vel qui magnam.', 'Expedita non fugit et quos quidem. Magnam atque consequatur aut odio. Aperiam et dolorum temporibus illum quo incidunt consequatur. Et nostrum sapiente aperiam veniam. Eos id qui quidem delectus.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('128', '48', 'Alias omnis.', 'Quidem est rerum dolores eum. Officiis qui dolor magni mollitia qui.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('129', '130', 'Voluptatibus.', 'Doloremque repellendus dolores eos quam reiciendis. Ut illo voluptas cumque rerum aliquid. Quo veniam ut ut quia aut.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('130', '42', 'Omnis consequatur.', 'Rerum quo ratione tempora ipsam atque. Provident ab amet reprehenderit est tenetur aut. Fuga qui dolor temporibus laudantium ad voluptatibus. Hic magni omnis et sit voluptatem.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('131', '137', 'Harum at et dolores.', 'Ut occaecati incidunt quam. Aut et quidem id. Repellendus voluptatum aperiam quaerat et reprehenderit sit. Qui dolorem iste accusantium dolorem vero optio.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('132', '152', 'Ut voluptatem iste.', 'Velit voluptatem labore sit error. Quam deserunt dolor laudantium rerum. Ut sint omnis qui molestiae illo non.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('133', '13', 'Iure voluptatem.', 'Sunt et est eaque ipsam. Autem et expedita ut consectetur. Fugit accusantium explicabo accusantium maxime nulla necessitatibus unde. Omnis vel quia fugiat qui voluptas.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('134', '194', 'Aut in omnis hic.', 'Eos perferendis ut nisi sint. Ratione eos in et sunt a qui a delectus. Dolores eaque voluptas et dolor omnis. Aut harum esse quia quis consequuntur quam.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('135', '81', 'Reiciendis.', 'Sunt beatae sed quia eos in. Expedita error odit sit sit quam sit est. Ex possimus eveniet beatae rerum est. Et itaque eaque voluptas aliquam quo.', '0', '2019-10-02 12:17:31', '2019-10-02 12:17:31');
INSERT INTO `todos` VALUES ('136', '183', 'Autem suscipit.', 'Explicabo a illo est est et vero ut. Voluptatem corrupti ut est eius repellat. Magni debitis incidunt cum est qui corrupti.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('137', '74', 'Non numquam tempora.', 'Non harum sed facere odio facere. Exercitationem totam vel qui quod. Neque saepe et iusto accusantium sapiente in et. Et voluptas quia minus quo.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('138', '148', 'Consectetur dolores.', 'Architecto aut nobis eaque odit optio incidunt. Dicta harum id voluptatem consequatur. Aut tempore consectetur provident accusamus consequuntur.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('139', '168', 'Laboriosam quod.', 'Consequuntur non fugiat asperiores et omnis. Modi excepturi quia quas quos atque architecto nihil. Corrupti quae eos quibusdam est voluptatem. Sed facilis et veniam ipsum earum.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('140', '195', 'Aliquid ut placeat.', 'Non asperiores qui aliquid voluptate qui delectus. Nobis recusandae explicabo velit itaque maxime et itaque. Rerum maxime fugiat aliquam animi.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('141', '52', 'Ut illum aliquam.', 'Hic rem non sint dolores. Suscipit laudantium sed alias eum ut dolore. Commodi aliquam nostrum corrupti velit distinctio atque eius.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('142', '191', 'Vero aspernatur.', 'Error et quia non dicta dicta maxime distinctio. Ad sapiente dolorem nobis repellat. Deleniti quia adipisci ab similique corrupti.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('143', '51', 'Et et rerum qui vel.', 'Provident repudiandae vel qui quia et ex occaecati aut. Et nesciunt eligendi et non ad rem labore. Facilis eum ipsam assumenda blanditiis aliquam.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('144', '126', 'Eum modi molestiae.', 'Vero cumque ipsam ipsum possimus voluptatem aut dolore. Sit qui tempora sit facere rerum ducimus. Rerum voluptatem veritatis dolor voluptatem.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('145', '78', 'Minus ipsam id.', 'Quaerat quo laudantium enim pariatur. Ut quae earum consequatur nulla voluptate autem possimus. Id ratione ipsam dolores aut molestias.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('146', '134', 'Veniam voluptatem.', 'Enim temporibus quibusdam omnis id. Sunt voluptatibus at sunt maiores deleniti quas ad. Neque accusamus sit dolor eveniet. Tempore sint vel optio sed inventore temporibus quis.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('147', '59', 'Aliquam fuga.', 'Fugit esse nesciunt quos architecto rerum necessitatibus commodi. Laborum nesciunt iste nobis aut aut ipsum ipsam.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('148', '94', 'Earum aperiam.', 'Nostrum dolorem aliquid quam similique veniam necessitatibus dolor. Magni sed et quaerat adipisci. Sunt eos ullam voluptate. Et pariatur illo omnis.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('149', '89', 'Voluptatum corrupti.', 'Nobis qui et quo consequatur eum perferendis doloremque voluptas. Quis quo iusto ut minima et aut voluptatem. Rerum et in et tempora. In consectetur et ut sunt id voluptatibus.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('150', '126', 'Eligendi error.', 'Omnis optio inventore aut praesentium. Sint et ea beatae deleniti odio rerum consectetur. Tenetur nihil asperiores error.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('151', '185', 'Est et ut ex et.', 'Aperiam iusto maiores hic rerum. Sunt animi aut dolor. At ipsum voluptatem voluptas non. Quo inventore eius nemo et aliquid. Omnis est sequi deserunt ut minima. Molestiae quas amet ad magnam.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('152', '77', 'Nostrum praesentium.', 'Nemo sequi eveniet quibusdam minus nulla cupiditate. Ipsa repellendus dolores voluptatem laboriosam ut laboriosam. Repellendus quas debitis officiis aliquid voluptas est incidunt.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('153', '105', 'Et nemo beatae rem.', 'Voluptatem esse doloremque earum hic. Voluptatem est praesentium delectus et amet. Sapiente hic veniam corrupti sint sit officia atque.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('154', '57', 'Repellat est ut.', 'Corrupti consequatur dolor impedit. Et similique beatae laborum exercitationem. Nemo necessitatibus et voluptatum asperiores perspiciatis illum. Recusandae voluptatum blanditiis error earum culpa.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('155', '15', 'Debitis est sit sed.', 'Non mollitia numquam culpa neque quae assumenda suscipit. Reiciendis quis voluptatibus a in consequuntur consequuntur sequi.', '0', '2019-10-02 12:17:32', '2019-10-02 12:17:32');
INSERT INTO `todos` VALUES ('156', '20', 'Veritatis.', 'Sapiente consequatur qui et soluta architecto. Suscipit deserunt soluta qui eum ullam omnis sed. Et eaque rerum non accusamus. Fuga sint ullam modi atque ut.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('157', '191', 'Ipsa in libero.', 'Dicta esse cupiditate debitis animi. Voluptas quo quaerat sit eum in excepturi placeat voluptas. Qui hic esse ab ratione nam eius quibusdam. Iure pariatur autem eveniet eius eos vel omnis et.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('158', '18', 'Numquam sint sunt.', 'Quisquam animi dolores sit ut quisquam dicta occaecati autem. Exercitationem laborum itaque error voluptatem. Alias cumque non eveniet nulla facere blanditiis.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('159', '14', 'Quia voluptatem.', 'Nihil enim et qui et nihil saepe nam. Ratione velit esse est voluptatum laboriosam sit. Veritatis aut magni veritatis a nam perspiciatis sint. Et sapiente et aut eaque animi.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('160', '124', 'Rerum omnis nulla.', 'Eos et quam commodi dolores at minima. Ullam harum voluptate autem quia quod. Quibusdam explicabo iste quidem voluptate error. Aut ut earum rem laborum cum ullam inventore.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('161', '90', 'Velit consequatur.', 'Omnis asperiores omnis sit vel dolor. Tenetur fuga fuga repudiandae impedit dolorem et. Omnis tempore et ratione doloremque omnis laudantium. Quas excepturi nihil perspiciatis at impedit.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('162', '28', 'Nobis qui facere.', 'Ea debitis beatae est sunt tempora. Voluptatem id in autem et. Iste amet corrupti earum sunt.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('163', '103', 'Temporibus id.', 'Et labore et quia aut facere. Voluptas impedit sunt assumenda hic aperiam. Quisquam perferendis ea illo culpa et.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('164', '168', 'Explicabo.', 'Qui tempore nihil cupiditate voluptatem perferendis. In reiciendis sit quo tempore officiis ut aut beatae. Aut repellat rerum quae dolor esse. Eaque dolore ipsam similique dolore veniam deleniti.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('165', '6', 'Similique quaerat.', 'Asperiores quibusdam harum aperiam non minus. Ut aliquam quasi illo quis nihil. Enim culpa ut hic enim iusto quam.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('166', '176', 'Soluta accusamus et.', 'Facere architecto voluptatem accusantium est tempore. Atque facilis fuga molestias deserunt iusto. In ut nobis ut odit qui aut.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('167', '69', 'Perspiciatis quidem.', 'Ipsum eum qui eligendi sit modi sit sed vitae. Nesciunt est architecto et et itaque. Aut dolorem dolorem consequatur quia recusandae quo. Ad alias labore numquam. Cum fuga eius minima.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('168', '156', 'Quo pariatur est et.', 'Iusto ratione adipisci ullam quod. Qui aliquid sint dignissimos temporibus atque consequuntur. Consectetur voluptatum dolor et modi pariatur qui.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('169', '67', 'Provident.', 'Fugit aliquid magni enim qui. Eius doloribus quia sint enim et. Ipsa ut vitae natus reiciendis possimus. Aliquid architecto dolores molestias nam sed aliquam.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('170', '73', 'Eveniet expedita et.', 'Unde quia quod laboriosam dolorum temporibus atque voluptatem. Iste voluptatem soluta quis molestiae. Deleniti aperiam nisi sint aspernatur.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('171', '139', 'Temporibus nihil.', 'Quia quos vitae sit doloremque ratione ex a. Consequatur veritatis molestiae sapiente ad similique ea id autem. Dignissimos atque nemo veritatis sunt magni aut non et.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('172', '33', 'Rerum tempore.', 'Optio et cupiditate explicabo maxime. Ex necessitatibus rem corporis. Dolor tenetur ea sapiente maiores dolorem eum.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('173', '72', 'Soluta eligendi.', 'Repellat enim delectus eos. Vero sit id delectus veritatis. Sit id molestias rerum tempora fuga est ab.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('174', '66', 'Blanditiis.', 'Ut minus dignissimos magni voluptatem eos. Optio fugiat nihil iusto. Est rerum quia modi ex voluptate. Magni enim unde et sed assumenda et. Quas nisi expedita beatae iure libero odit.', '0', '2019-10-02 12:17:33', '2019-10-02 12:17:33');
INSERT INTO `todos` VALUES ('175', '117', 'Deserunt quod.', 'Harum explicabo quo ex. Reiciendis provident non quisquam et voluptas tempore suscipit. Debitis sit cumque perspiciatis voluptas iure. Tenetur ut magnam ratione est voluptatem sunt.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('176', '141', 'Dignissimos ullam.', 'Illum sit vel a et sunt deleniti. Corrupti laudantium recusandae ad repudiandae. Aut voluptatibus ut accusamus ipsam reiciendis expedita eveniet. Numquam hic quos illum cumque.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('177', '99', 'Consequuntur.', 'Illum aut et et aliquid. Iure consequatur est placeat animi ut asperiores odit. Dignissimos consequuntur beatae molestias dicta omnis.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('178', '73', 'Tempore sit magnam.', 'Ad aut molestiae sunt nobis odio ipsum. Accusantium cumque quia nam qui. Necessitatibus totam et nostrum nam ratione commodi. Quidem consequatur in dolor omnis et facilis.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('179', '185', 'Ipsam illum.', 'A accusamus quasi dignissimos quibusdam facere. Iusto laborum tempora sapiente autem. Voluptatem consequatur reprehenderit numquam ex praesentium. Ipsam quas non laudantium.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('180', '129', 'Dicta qui magnam.', 'Qui ratione quas et nobis impedit consequatur molestias. Voluptas sequi consectetur vero. Esse aut id quae rerum ut.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('181', '45', 'Maxime consectetur.', 'Itaque sit dolore fugiat quisquam quia. Doloremque consequatur repudiandae fugiat cumque excepturi blanditiis fuga. Recusandae exercitationem consequatur dicta non laborum.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('182', '137', 'Expedita nihil.', 'Adipisci eos dolorem minima voluptatem dolor ipsa incidunt. Vel pariatur eveniet illo facilis eum. Modi voluptas vero consequatur odit doloribus autem.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('183', '180', 'Dolores cumque qui.', 'Hic cumque dolores et quia doloremque quibusdam quos amet. Pariatur est et commodi expedita harum omnis. At dolorem ut consectetur ipsam. Exercitationem vero et ut consequatur et harum aliquam quasi.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('184', '65', 'Hic exercitationem.', 'Culpa autem tempora magni. Voluptates labore quia voluptates voluptatum. In temporibus aut molestiae quia dolorem harum et. Rerum in eum vel non quia possimus.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('185', '155', 'Dolores et.', 'Dolorem odit rerum nihil sit. At culpa et dolor delectus. Animi vel qui sed quo eius voluptatem cum.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('186', '134', 'Unde mollitia aut.', 'Occaecati vitae voluptatem magnam earum et eos. Quam eum suscipit ducimus. Quisquam sunt qui laboriosam iusto et.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('187', '147', 'Consequatur facere.', 'Non dolor velit voluptatem est illo qui ex. Voluptatem quia eos id qui cupiditate. Eveniet mollitia enim nulla libero ea. Aut quis veritatis aperiam dolor nemo quia.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('188', '97', 'Est qui ut mollitia.', 'Error molestiae architecto sit atque omnis. Modi architecto eaque consectetur cumque porro. Id iusto natus consectetur aut maiores ut praesentium libero. Est nam voluptate et placeat quisquam qui id.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('189', '157', 'Animi ut et natus.', 'Provident cumque quidem enim repellat voluptatem. Tempore ex qui excepturi quidem. Fugit laborum rerum tenetur qui maiores inventore.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('190', '62', 'Ipsa doloribus illo.', 'Ea sit praesentium est repellat rerum. Voluptas adipisci fuga quis est. Voluptas ipsam inventore voluptas.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('191', '195', 'Omnis aperiam.', 'Et eum occaecati accusantium optio. Quaerat sed autem ut in voluptatem aut et. Dolores blanditiis eius optio quo.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('192', '142', 'Id sapiente.', 'Dolores itaque rerum et. Ut natus officia dolorem quae vero. Ad explicabo sunt a et consequatur eligendi qui. Est sunt omnis est sunt explicabo.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('193', '154', 'Vel quidem vel.', 'Dolor blanditiis quo repellat autem voluptatibus autem. Blanditiis commodi deserunt veritatis nobis repellendus non. Impedit odit id quod fugiat.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('194', '153', 'Et inventore.', 'Perferendis corrupti vel tempore nihil. Harum quia voluptates est labore.', '0', '2019-10-02 12:17:34', '2019-10-02 12:17:34');
INSERT INTO `todos` VALUES ('196', '153', 'Excepturi sed.', 'Aut quibusdam vitae doloremque sunt illum. Aspernatur ea omnis molestiae ut. Possimus voluptatem fugit non aspernatur laudantium. Suscipit omnis laborum vitae id eveniet assumenda vel.', '0', '2019-10-02 12:17:35', '2019-10-02 12:17:35');
INSERT INTO `todos` VALUES ('197', '134', 'Aperiam voluptatem.', 'Rerum aperiam eos nam autem. Quis reiciendis ab excepturi qui. Totam quo qui ipsam esse omnis veritatis beatae quis.', '0', '2019-10-02 12:17:35', '2019-10-02 12:17:35');
INSERT INTO `todos` VALUES ('198', '60', 'Est ratione.', 'Labore ratione molestias eveniet provident non incidunt. Possimus expedita non omnis quia. Laudantium voluptates earum atque quod dolorem et sint.', '0', '2019-10-02 12:17:35', '2019-10-02 12:17:35');
INSERT INTO `todos` VALUES ('199', '175', 'Expedita id aliquam.', 'Ipsum et molestiae accusamus et est. Rem libero ipsa itaque id ea. Suscipit hic minima velit. Nihil vitae voluptatem eum aut. Consectetur molestiae architecto vero alias porro omnis.', '0', '2019-10-02 12:17:35', '2019-10-02 12:17:35');
INSERT INTO `todos` VALUES ('200', '111', 'At quos recusandae.', 'Quia totam aut quia voluptas. Corrupti in adipisci aut iste nulla. Accusamus eligendi et ut corporis culpa. Est autem rerum molestias reiciendis eaque aut ea.', '0', '2019-10-02 12:17:35', '2019-10-02 12:17:35');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', '2019-10-14 12:26:50', '2019-10-14 12:26:50', '201', 'hung', 'hai phong');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `phone` int(11) NOT NULL,
  `avatar` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('201', 'user1', 'admin@gmail.com', '1', '0', '0', null, '$2y$10$M11CzhbdM5xBHlZf8SKC..GDoKRi3F.ZpBVBoBouGtoNxBCrYXm5G', null, '2019-10-09 13:15:01', '2019-10-09 13:15:01');
INSERT INTO `users` VALUES ('202', 'Nguyễn Văn Quang Hưng', 'heller.laura@example.net', '1', '0', '0', null, '$2y$10$3E4324GDagQS1jCYNO4qQ.hXkmD06t9tZ5iQ4Xt47KGdSQVQ9Eybe', 'Sequi.', '2019-10-09 13:15:01', '2019-10-09 13:15:01');
INSERT INTO `users` VALUES ('203', 'Et consequatur.', 'tremaine.beahan@example.org', '0', '0', '0', null, '$2y$10$UVmbNx.IK61voF.CPnSxeu4SiOvkC2d5JNoCRh7.vSkPvKQMtfTmi', 'Quo.', '2019-10-09 13:15:01', '2019-10-09 13:15:01');
INSERT INTO `users` VALUES ('204', 'Pariatur quia odio.', 'tremblay.laurie@example.com', '0', '0', '0', null, '$2y$10$XDyIioqwn/F78lJU0XRI/OkAUjwZqtiZB3V1cI.71o6XlJnFCM0dK', 'Sunt.', '2019-10-09 13:15:02', '2019-10-09 13:15:02');
INSERT INTO `users` VALUES ('205', 'Nesciunt porro ut.', 'jrau@example.org', '0', '0', '0', null, '$2y$10$qGkTtKEIhiYfWh6W5NNr2e80UF1m81CElrHph5jDaMkjltPdbtvfK', 'Illum.', '2019-10-09 13:15:02', '2019-10-09 13:15:02');
INSERT INTO `users` VALUES ('206', 'Nisi perspiciatis.', 'reichert.claud@example.com', '0', '0', '0', null, '$2y$10$KnllVF0De3FVCUmdNUhxb.Jk5/I.e2tjpbB4OqwB3dBJbRt8DRLoq', 'Quia.', '2019-10-09 13:15:02', '2019-10-09 13:15:02');
INSERT INTO `users` VALUES ('207', 'Dicta qui qui eum.', 'mills.noemi@example.com', '0', '0', '0', null, '$2y$10$KavweZq5nl8cnD3UgFz9w.LZkTc6tJD.cXo/WYgsr31PC8Jt6Vlxi', 'Quia.', '2019-10-09 13:15:02', '2019-10-09 13:15:02');
INSERT INTO `users` VALUES ('208', 'Earum expedita.', 'wward@example.net', '0', '0', '0', null, '$2y$10$AzJRFtMSE9CTtJBHIdkK4.Y02NPgIZQMHSRUavZYrJK0.VG9hQabC', 'Atque.', '2019-10-09 13:15:02', '2019-10-09 13:15:02');
INSERT INTO `users` VALUES ('209', 'Quo excepturi.', 'coty18@example.org', '0', '0', '0', null, '$2y$10$cC1TJmGEZR/ETEdzngCBlunFfi9/Mxqgw9Jg31o8Pgli.i8ZTOj2q', 'A.', '2019-10-09 13:15:02', '2019-10-09 13:15:02');
INSERT INTO `users` VALUES ('210', 'Doloribus non.', 'hrunolfsdottir@example.org', '0', '0', '0', null, '$2y$10$XfDcrf50sxk1K.4qE1btjeadCwRVoL5IyOLAeE/awJReCWvsRA0/q', 'Ut.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('211', 'Nostrum dolor et.', 'larissa96@example.net', '0', '0', '0', null, '$2y$10$Z3nPJh7gl8L7tTkIyQLg/ONPxUWg9oFR4WHY/ZjnrEKGaSMdAIRJS', 'Esse.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('212', 'Quibusdam ut.', 'grady.maximo@example.net', '0', '0', '0', null, '$2y$10$5TIHr6sgfL3qrlEnWRkBaeJ0hfp3z8ZFdD.YU.w0c2Hs9uo0l9Xiy', 'Qui.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('213', 'Dolore consequatur.', 'dante94@example.net', '0', '0', '0', null, '$2y$10$MCWC9rl6Bj8HjzsVVCZqS.vAp74TUFF/1GgorKht4b/UG0261mhWi', 'Ea.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('214', 'Nihil architecto et.', 'hand.reece@example.com', '0', '0', '0', null, '$2y$10$y0ZyaPp6GhyTAdzW3NOmEORavhuA5A8s7duZrvEYatVVwmo1xbDcO', 'Omnis.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('215', 'Maiores et minima.', 'dreichel@example.org', '0', '0', '0', null, '$2y$10$sxDiMuSvKfXLrOmen7OKM.vnnwhpVCgyjvdiQHpHlWjAQ4nV9pOnC', 'Et.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('216', 'Nostrum ad.', 'mekhi94@example.com', '0', '0', '0', null, '$2y$10$l.tjDnWXIH2J9esLw36hu.CwMDp/1vhHVSl42om96UjPB/AGn7.PC', 'Ipsum.', '2019-10-09 13:15:03', '2019-10-09 13:15:03');
INSERT INTO `users` VALUES ('217', 'Id id quis maxime.', 'jcrist@example.net', '0', '0', '0', null, '$2y$10$rSb.ZmdpnO92GNY0yHXRxeSh0TB7u7LH.RFL4bs7RLYGSYQfAPqXS', 'Cum.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('218', 'Perferendis unde ut.', 'carlo.veum@example.net', '0', '0', '0', null, '$2y$10$/IDYT1le6VIRXYAZzHwtXOL1Kvgr7yO1pdfCANn9I5Agdw6QYhl7a', 'Est.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('219', 'Praesentium natus.', 'braun.fidel@example.org', '0', '0', '0', null, '$2y$10$9Gx1.aM/GR0dMMcpGX4U0.godqUl.7gXRHn.9caxZilC7aHe0GK9S', 'Illum.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('220', 'Similique et sit.', 'kayley.bruen@example.net', '0', '0', '0', null, '$2y$10$1FYxwjdc3uk8kENPNfSW0u/GPkrzHgAL7eiffqr9zmlvvFii8HyDO', 'Ut.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('221', 'Exercitationem.', 'donnelly.darrel@example.net', '0', '0', '0', null, '$2y$10$KSV./XzA90Muwz558A/i1eBu1PvZRCA9zkyvPP8YNqwkrRo9FoHO2', 'Ut.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('222', 'Sit expedita est.', 'pwill@example.net', '0', '0', '0', null, '$2y$10$HL.qwvhCZj39vkYDh49d.OIcC1R9Hc5Z0OAACxdZEHecofVAXLC.W', 'In.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('223', 'Ullam nihil sed.', 'nbernhard@example.net', '0', '0', '0', null, '$2y$10$kIritL73YGECSxE3TdY2B.8o.rfXOiVWI74aJOOBWzR5EF9W4oB/a', 'Animi.', '2019-10-09 13:15:04', '2019-10-09 13:15:04');
INSERT INTO `users` VALUES ('224', 'Aut amet alias.', 'alva.homenick@example.net', '0', '0', '0', null, '$2y$10$GuCxSR345bM/t9xPX3Y3ru2vbJcgaDvVc7ihtbpJ1v1vXXUmA99YG', 'A.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('225', 'Recusandae.', 'kayli44@example.org', '0', '0', '0', null, '$2y$10$sMndBm1TC.bU/aWQOVyhk.v9l3/6LU8NCseAL.StsnmW5vJohAt7O', 'Illo.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('226', 'Et numquam ut ut.', 'autumn.bogan@example.com', '0', '0', '0', null, '$2y$10$baweTrJwy2212FVyeixSKunxUhzM9MaLS9QRFxoQoby/JaHxN6Iz.', 'Unde.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('227', 'Officia recusandae.', 'dibbert.howard@example.org', '0', '0', '0', null, '$2y$10$Nim9k6trihTid/fXMKYO3.7EAnrnDiPha8KVdCTD2CYZ8Wek6cvT.', 'Aut.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('228', 'Quo aut corporis.', 'mclaughlin.aric@example.org', '0', '0', '0', null, '$2y$10$VXGlXJ89dWxnoibjfZTuoucKGzbM29WF1lF.3gQbmF6G3C29Wuf/2', 'Quia.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('229', 'Occaecati id quasi.', 'hermina.kuvalis@example.org', '0', '0', '0', null, '$2y$10$ztX72prbup1jgvMwx4eaQe4zE4qgLRkOvRennVbTkBA8Cz8OZF4zC', 'Quos.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('230', 'Tenetur enim magnam.', 'bill.powlowski@example.com', '0', '0', '0', null, '$2y$10$1ZiK0qtAPgUv1pwd/Iy57.qIN1tyHnoEUF2s2eZkkxaUAG0UIIdAe', 'Vitae.', '2019-10-09 13:15:05', '2019-10-09 13:15:05');
INSERT INTO `users` VALUES ('231', 'Commodi aut.', 'batz.orlo@example.net', '0', '0', '0', null, '$2y$10$aEKGz84h1.FUg0bsA5uNVON6GHSFsz/Y02DrSB09T5qgozBJLlUbS', 'Et.', '2019-10-09 13:15:06', '2019-10-09 13:15:06');
INSERT INTO `users` VALUES ('232', 'Sint ex atque quis.', 'gberge@example.org', '0', '0', '0', null, '$2y$10$JTdPqWLICy7vBvpv4pRjjuLmELMiTHGwgIIlrXAC9/EBC..p6kdsG', 'Ut.', '2019-10-09 13:15:06', '2019-10-09 13:15:06');
INSERT INTO `users` VALUES ('233', 'Et error quis vel.', 'gkautzer@example.net', '0', '0', '0', null, '$2y$10$oDSUDgOwkh2sYe.PsI2eeuL8nIIJX7NWsa.CsSi/1jZQTFoPnp0o6', 'Neque.', '2019-10-09 13:15:06', '2019-10-09 13:15:06');
INSERT INTO `users` VALUES ('234', 'Dolorum incidunt ex.', 'friesen.makayla@example.com', '0', '0', '0', null, '$2y$10$UGiQrs8tYyxVvOMD5nSOqedjet59E4LYsLwWro4StvKRPj06WvFDy', 'Quas.', '2019-10-09 13:15:06', '2019-10-09 13:15:06');
INSERT INTO `users` VALUES ('235', 'Aut nostrum eum.', 'lynch.eveline@example.net', '0', '0', '0', null, '$2y$10$HCbJOOBPQq3cLVRtNITpsea/tVGjVZUV.447SyEfMQtlMMpdi7jMa', 'Sunt.', '2019-10-09 13:15:06', '2019-10-09 13:15:06');
INSERT INTO `users` VALUES ('236', 'Cum cumque eum est.', 'wcummerata@example.net', '0', '0', '0', null, '$2y$10$pWdwhODLpmZDEcHThMsgru795kVzdRJ8WCHWBKSYzfr6Sunyt.P5u', 'Velit.', '2019-10-09 13:15:07', '2019-10-09 13:15:07');
INSERT INTO `users` VALUES ('237', 'Aut dolores quaerat.', 'lamar07@example.com', '0', '0', '0', null, '$2y$10$i6/4C9eTASucNHGsUWxzneWkxVcrYB6/BB.4gWitOAnTSbdpWI5dm', 'Minus.', '2019-10-09 13:15:07', '2019-10-09 13:15:07');
INSERT INTO `users` VALUES ('238', 'Cumque maiores.', 'elouise.west@example.org', '0', '0', '0', null, '$2y$10$BVokEPg5M2oSRd96r7vfleJwvmnAvhfkjFpfoOSjk.N4qRCYp5yqe', 'Animi.', '2019-10-09 13:15:07', '2019-10-09 13:15:07');
INSERT INTO `users` VALUES ('239', 'Iure neque soluta.', 'rafael60@example.net', '0', '0', '0', null, '$2y$10$kmG0bo/xQd0iFr52Lyp6ne.5loj1WVmEZjyed7Ykqu7S1zr4NpWkW', 'Rerum.', '2019-10-09 13:15:07', '2019-10-09 13:15:07');
INSERT INTO `users` VALUES ('240', 'Aut commodi animi.', 'jennie.denesik@example.net', '0', '0', '0', null, '$2y$10$RLzMUCFfFLqNvPiI.Bez/Ovj7h0m9287DIYvJ93sEGiFOBfAVutXy', 'Et.', '2019-10-09 13:15:07', '2019-10-09 13:15:07');
INSERT INTO `users` VALUES ('241', 'Rerum quia et.', 'vjohnston@example.com', '0', '0', '0', null, '$2y$10$YBzEZnMTuXAR6Q4uqWf4xuyzUy0osJXzVMEsq6evuGy2kl0c6cLkG', 'Quasi.', '2019-10-09 13:15:08', '2019-10-09 13:15:08');
INSERT INTO `users` VALUES ('242', 'Possimus ut est ut.', 'hodkiewicz.martina@example.com', '0', '0', '0', null, '$2y$10$t5CZafJgy.z6q0Pleglb8OWKi4AC.ApW2ZI.itq1b0sXevEO5vUqe', 'Neque.', '2019-10-09 13:15:08', '2019-10-09 13:15:08');
INSERT INTO `users` VALUES ('243', 'Enim et repellat.', 'gmayer@example.net', '0', '0', '0', null, '$2y$10$1VG/tm8G2eD6ToYUDO31OeZ0ZxSiU6p7ldxv8a3XycHfsdWmi8Lv2', 'Rem.', '2019-10-09 13:15:08', '2019-10-09 13:15:08');
INSERT INTO `users` VALUES ('244', 'Dicta aut ab.', 'xdickinson@example.net', '0', '0', '0', null, '$2y$10$l2wVAFn6c.S/1mfCnANWWufzglCDtLI1KkzV/fB4hab8bQsiSotCO', 'Vitae.', '2019-10-09 13:15:08', '2019-10-09 13:15:08');
INSERT INTO `users` VALUES ('245', 'Dolorem nulla.', 'bogan.aylin@example.com', '0', '0', '0', null, '$2y$10$SGvOOq85FkXhcrybozRRFuBJT7tODDBdoShmQVMCOrk0nuhFjTjwG', 'Quia.', '2019-10-09 13:15:09', '2019-10-09 13:15:09');
INSERT INTO `users` VALUES ('246', 'Optio et.', 'marlen.grady@example.org', '0', '0', '0', null, '$2y$10$G/rTu5NNNH0MK.a.oWr5Kuxi2vd/tPy.HS..36uL/1HBdr/Mnh00y', 'Eaque.', '2019-10-09 13:15:09', '2019-10-09 13:15:09');
INSERT INTO `users` VALUES ('247', 'Debitis libero.', 'vkonopelski@example.net', '0', '0', '0', null, '$2y$10$k1G.g3Nlp0ncEwHtvfHo7.ubz6HVL.f4uXqddgN1z1n9FZWivtLdS', 'Et.', '2019-10-09 13:15:09', '2019-10-09 13:15:09');
INSERT INTO `users` VALUES ('248', 'Et similique.', 'itzel.cronin@example.org', '0', '0', '0', null, '$2y$10$V.wJS9j.Ok/4gpP9h5JpHuQnbv7ZsdlGj0X5q15xcO.eK0EPimt7.', 'Sint.', '2019-10-09 13:15:09', '2019-10-09 13:15:09');
INSERT INTO `users` VALUES ('249', 'Odit voluptas.', 'uschmitt@example.com', '0', '0', '0', null, '$2y$10$M7oJ9C66f1hZIMM8D8DewOrRclU0rp9EY7.LQ0mfrPw3dmdjDpEme', 'Quia.', '2019-10-09 13:15:10', '2019-10-09 13:15:10');
INSERT INTO `users` VALUES ('250', 'Tempora fugiat et.', 'etorp@example.net', '0', '0', '0', null, '$2y$10$bE.ggrKJnNIySq/Nv6PfvOlyAdsegNeLbwlvUHr4xWQT7zE1.oTmm', 'Et.', '2019-10-09 13:15:10', '2019-10-09 13:15:10');
INSERT INTO `users` VALUES ('251', 'Eligendi eos dicta.', 'rutherford.lavon@example.org', '0', '0', '0', null, '$2y$10$JUdCZ6Z8MozTPxxXncS5vOJm64lNCuFwW9/fWMdk/xg43HaGP5Kae', 'Aut.', '2019-10-09 13:15:10', '2019-10-09 13:15:10');
INSERT INTO `users` VALUES ('252', 'quang hung(admin)', 'quanghung121097@gmail.com', '1', '0', '0', null, '$2y$10$ixSR.Gv0IBqYldGb9iLmmOVcyM9yRS3lOxGy/3EJCBsJIRgphM70y', null, '2019-10-19 07:47:09', '2019-10-19 07:47:09');
INSERT INTO `users` VALUES ('253', 'hungabc', 'sdcsdc@gmail', '0', '788337682', null, null, '$2y$10$hALRNPlRUyuwJyou2jsaTOhIpkERd7XdpQvOSl0UWUt03uQH397qW', null, '2019-11-02 14:56:04', '2019-11-02 14:56:04');
INSERT INTO `users` VALUES ('255', 'qqqq', 'qqqq', '0', '788337682', null, null, '$2y$10$N/Z6Q9.lEgBSgZrQSRPujuxWjGuIfXR.SzC6HkXG1UM8EfrM13bna', null, '2019-11-02 14:57:16', '2019-11-02 15:25:07');
INSERT INTO `users` VALUES ('256', 'hungabc new', 'hungabc new', '0', '788337682', null, null, '$2y$10$3zP08JnewemEqdvBu7vdP.dl2cxwYdjWGxsWvLbxrV9Rg29rliG6y', null, '2019-11-02 16:50:37', '2019-11-02 16:52:32');
