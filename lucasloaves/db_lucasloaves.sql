/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_lucasloaves

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-02-26 13:15:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(20) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('2', '1', 'Sourdough White ', '7.00', 'Our standard sourdough', 'img/sd-classic.webp', '1');
INSERT INTO `cart` VALUES ('3', '1', 'Sourdough White ', '7.00', 'Our standard sourdough', 'img/sd-classic.webp', '5');

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Sourdough White ', '7.00', 'Our standard sourdough', 'img/sd-classic.webp');
INSERT INTO `products` VALUES ('2', 'Sourdough Rye', '8.00', 'Sourdough created with 50% rye flour', 'img/sd-rye.jpg');

-- ----------------------------
-- Table structure for `tbl_jobseekers`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jobseekers`;
CREATE TABLE `tbl_jobseekers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `coverletter` varchar(50) NOT NULL,
  `resume` varchar(50) NOT NULL,
  `position` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_jobseekers
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_orders`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_orders`;
CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `pick_date` date DEFAULT NULL,
  `pick_time` time DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_orders
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(25) NOT NULL,
  `utype` varchar(25) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'admin', 'admin', 'admin');
INSERT INTO `tbl_user` VALUES ('2', 'guest', 'guest', 'guest');
INSERT INTO `tbl_user` VALUES ('5', '', '', 'guest');
INSERT INTO `tbl_user` VALUES ('6', '', '', 'guest');
