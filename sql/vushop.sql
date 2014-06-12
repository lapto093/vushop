/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : vushop

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2014-06-12 17:14:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) NOT NULL COMMENT '0: inactive, 1: active',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Nam', '0', 'Thời trang nam', '1', '2014-06-11 10:48:59', '2014-06-11 10:49:02');
INSERT INTO `category` VALUES ('4', 'Nữ', '0', 'Thời trang nữ', '1', '2014-06-11 15:05:43', '2014-06-11 15:05:43');
INSERT INTO `category` VALUES ('5', 'Áo thun Polo', '1', 'Áo thun Polo', '1', '2014-06-11 15:13:47', '2014-06-11 15:13:47');
INSERT INTO `category` VALUES ('6', 'Áo thun Lambo', '1', 'Áo thun Lambo', '1', '2014-06-11 15:14:13', '2014-06-11 15:14:13');
INSERT INTO `category` VALUES ('7', 'Váy', '4', 'Váy - đầm', '1', '2014-06-11 15:14:29', '2014-06-11 15:14:29');

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) DEFAULT NULL,
  `image_url` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '0: inactive, 1: active',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `description` text,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `order_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `order_description_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`order_description_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL COMMENT '0: inactive, 1: active',
  `is_new` tinyint(4) DEFAULT NULL,
  `most_sell` tinyint(4) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for related_product
-- ----------------------------
DROP TABLE IF EXISTS `related_product`;
CREATE TABLE `related_product` (
  `related_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`related_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of related_product
-- ----------------------------

-- ----------------------------
-- Table structure for slideshow
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `slideshow_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) DEFAULT NULL,
  `description` text,
  `image_url` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slideshow
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `salt` varchar(32) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'demo', null, '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'demo', '1');
