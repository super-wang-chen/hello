/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-21 09:25:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `think_admin`
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
CREATE TABLE `think_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'yzj', '1cc39ffd758234422e1f75beadfc5fb2', '12345678@qq.com', '2');
INSERT INTO `think_admin` VALUES ('4', 'admin002', '202cb962ac59075b964b07152d234b70', '345@qq.com', '3');
INSERT INTO `think_admin` VALUES ('5', 'admin001', '202cb962ac59075b964b07152d234b70', '123@qq.com', '1');

-- ----------------------------
-- Table structure for `think_banner`
-- ----------------------------
DROP TABLE IF EXISTS `think_banner`;
CREATE TABLE `think_banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_banner
-- ----------------------------
INSERT INTO `think_banner` VALUES ('1', '主页轮播图', './Public/Uploads/2016-12-30/5865b3e23831b.jpg', '1');
INSERT INTO `think_banner` VALUES ('2', '主页轮播图', './Public/Uploads/2016-12-30/5865b3d947657.jpg', '1');
INSERT INTO `think_banner` VALUES ('3', '主页轮播图', './Public/Uploads/2016-12-30/5865b3fc054da.jpg', '1');

-- ----------------------------
-- Table structure for `think_brand`
-- ----------------------------
DROP TABLE IF EXISTS `think_brand`;
CREATE TABLE `think_brand` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_brand
-- ----------------------------
INSERT INTO `think_brand` VALUES ('1', '首页在线咨询', '怀素堂', '<p>把牛奶烧开加入3%～7%的淀粉或糕干粉、藕粉等，使牛奶变稠，稍加糖即可。</p><p>适用于习惯性呕吐、反胃和需要增</p>', './Public/Uploads/2017-01-10/58748d7c250c2.jpg');
INSERT INTO `think_brand` VALUES ('2', '品牌介绍1', '怀素堂1', '<p>111怀素堂花草茶是目前中国大陆境内品种最全、品质最优、</p><p>品牌最大和产品更新最快的 花草茶品牌。</p>', './Public/Uploads/2017-01-10/58748dd71b015.jpg');
INSERT INTO `think_brand` VALUES ('3', '品牌介绍2', '怀素堂2', '<p>2222怀素堂花草茶是目前中国大陆境内品种最全、品质最优、</p><p>品牌最大和产品更新最快的 花草茶品牌</p>', './Public/Uploads/2017-01-10/58748222cd89b.jpg');
INSERT INTO `think_brand` VALUES ('4', '品牌介绍3', '怀素堂2', '<p>333境内品种最全、品质最优、品牌最大和产品更新最快的 花草茶品牌</p>', './Public/Uploads/2017-01-10/5874823463eb8.jpg');

-- ----------------------------
-- Table structure for `think_category`
-- ----------------------------
DROP TABLE IF EXISTS `think_category`;
CREATE TABLE `think_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_category
-- ----------------------------
INSERT INTO `think_category` VALUES ('1', '产品中心', '0');
INSERT INTO `think_category` VALUES ('2', '新闻中心', '0');
INSERT INTO `think_category` VALUES ('3', '草茶系列', '1');
INSERT INTO `think_category` VALUES ('4', '花茶系类', '1');
INSERT INTO `think_category` VALUES ('5', '竹茶系类', '1');
INSERT INTO `think_category` VALUES ('6', '绿茶系类', '1');
INSERT INTO `think_category` VALUES ('7', '草茶新闻', '2');
INSERT INTO `think_category` VALUES ('8', '绿茶新闻', '2');

-- ----------------------------
-- Table structure for `think_contact`
-- ----------------------------
DROP TABLE IF EXISTS `think_contact`;
CREATE TABLE `think_contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_contact
-- ----------------------------
INSERT INTO `think_contact` VALUES ('1', '新闻详情', '77088070', ' http://bj.city8.com/address', '大观南路黄村街长盛大厦', ' http://bj.city8.com/address');

-- ----------------------------
-- Table structure for `think_level`
-- ----------------------------
DROP TABLE IF EXISTS `think_level`;
CREATE TABLE `think_level` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `level_id` varchar(256) NOT NULL,
  `time` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_level
-- ----------------------------
INSERT INTO `think_level` VALUES ('1', '新闻管理', '11,12,13,14', '');
INSERT INTO `think_level` VALUES ('2', '超级管理员', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43', '');
INSERT INTO `think_level` VALUES ('3', '产品管理', '6,7,8,9,10', '');
INSERT INTO `think_level` VALUES ('4', '产品&新闻管理', '6,7,8,9,10,11,12,13,14,15', '');

-- ----------------------------
-- Table structure for `think_message`
-- ----------------------------
DROP TABLE IF EXISTS `think_message`;
CREATE TABLE `think_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_message
-- ----------------------------
INSERT INTO `think_message` VALUES ('1', 'Z,JUN', '湖北武汉', '12345678922', '12345678@qq.com', '这里的商品太贵了，买不起dasfasfsdfsafsdafsafdsafasdfasfasfsafsafdsafasdf', '2016-12-29');
INSERT INTO `think_message` VALUES ('12', '小浣熊', '湖北武汉', '15922223333', 'asfds@qq.com', '哎呀咧，正常一点吧', '2016-12-30 22:33:31');
INSERT INTO `think_message` VALUES ('13', '小浣熊', '湖北武汉', '12345678999', 'hhh@qq.com', 'asfasdfadfasdfsadfsafsafadfafdasfsafdsafasfasdfdsafadfasdsafsafsdafsafsafcsadfsafdsafsdafsafsdfsdafdafsdasadfsafsdfdsafdsafasfsa', '2016-12-31 21:45:36');
INSERT INTO `think_message` VALUES ('14', '小浣熊', '湖北武汉', '12345678999', '123@qq.com', '舒服撒范德萨阿斯顿发范德萨发的萨芬撒范德萨萨达是法士大夫撒范德萨发的萨芬撒上', '2016-12-31 22:16:26');
INSERT INTO `think_message` VALUES ('15', 'sda', 'fdasda', '15922223333', '123@qq.com', 'sadfsafdsafsasafdasf', '2016-12-31 22:17:57');
INSERT INTO `think_message` VALUES ('16', 'xiaohuanxiong', '湖北武汉', '15922223333', '123@qq.com', '是范德萨范德萨范德萨发生的发生', '2016-12-31 22:21:09');
INSERT INTO `think_message` VALUES ('17', '小浣熊', 'afdas', '15922223333', '123@qq.com', '按时发生飞洒发士大夫撒飞洒发撒范德萨', '2016-12-31 22:41:42');
INSERT INTO `think_message` VALUES ('18', 'sdsaf', 'safdsaf', '15922223333', '123@qq.com', 'sadfdsafsfds', '2016-12-31 22:45:21');
INSERT INTO `think_message` VALUES ('19', 'asfdsaf', 'dsafdsaf', '15922223333', '123@qq.com', 'safasfdsaf', '2016-12-31 22:45:52');
INSERT INTO `think_message` VALUES ('20', 'dfasdfa', '阿范德萨发', '15922223333', '123@qq.com', '阿凡达发顺丰', '2016-12-31 22:48:51');
INSERT INTO `think_message` VALUES ('33', '小浣熊', '湖北省武汉市', '15922223333', '123@qq.com', '奥德赛多法索福多三', '2017-01-03 21:43:56');
INSERT INTO `think_message` VALUES ('34', '小浣熊', '湖北武汉', '15922223333', '123@qq.com', '按时发达水电费的萨芬撒范德萨发撒飞洒地方是否撒地方', '2017-01-06 15:08:24');
INSERT INTO `think_message` VALUES ('35', 'xiaohuanxiong', '湖北武汉', '15966668888', '123@qq.com', '啥地方萨芬撒飞洒发的撒发生', '2017-01-07 13:57:36');
INSERT INTO `think_message` VALUES ('36', '小唤醒', '湖北', '15966668888', '123@qq.com', '士大夫撒发顺丰萨芬', '2017-01-07 13:58:47');
INSERT INTO `think_message` VALUES ('37', 'hahaha', '湖北武汉', '15966668888', '123@qq.com', '省道啊所发生的发士大夫撒旦法案发生大幅度顺丰到付', '2017-01-09 09:07:06');

-- ----------------------------
-- Table structure for `think_news`
-- ----------------------------
DROP TABLE IF EXISTS `think_news`;
CREATE TABLE `think_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `author` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_news
-- ----------------------------
INSERT INTO `think_news` VALUES ('9', '7', 'adfasf', 'sfsafsafsdf', '838', 'sfdsfsf', '585c952b26aba.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('10', '7', 'adfsadfas', 'sfasfdsf', '1482465033', 'asdsfsaf', '585c9f09930af.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('11', '7', 'fafdsfsf', 'adsafsafaf', '0', 'safasdfasfadasdsfsdfdffdsdfdasfs', '585cabeb1c5aa.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('12', '7', '12323', '', '1482468374', '12313', '585cac16a468a.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('13', '7', 'asfafa', 'sfdsasf', '1482475979', 'asdfsf', '585cc9cbcaf72.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('14', '7', 'afdsfdasf', 'asfdsafasfasf', '1482476973', 'afsdfsafdsf', '585ccdada9790.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('15', '7', 'asdfsadf', 'sfsafas', '1482477221', 'asdfasf', '585ccea530f15.jpg', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('16', '7', 'ASFASF', '', '1482478708', 'SAFASFDS', '585cea35c0f38.jpg|', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('17', '8', 'fasdfasdfasdfasf123', '', '1482479404', 'Z,JUN', '585ce9ffa2b8b.jpg|585cebb216a61.jpg|', './Public/Uploads/2016-12-23/');
INSERT INTO `think_news` VALUES ('18', '8', 'adfsaf', 'asfdasfda', '1482846721', 'safdsaf', '586272020eaa6.jpg', './Public/Uploads/2016-12-27/');
INSERT INTO `think_news` VALUES ('19', '8', 'sadfasdf', 'sadfdsaf', '1482847132', '', '5862739ce15ab.jpg', './Public/Uploads/2016-12-27/');
INSERT INTO `think_news` VALUES ('20', '8', 'sdfas', 'asfsdaf', '1482847883', '', '5862768b8e390.jpg', './Public/Uploads/2016-12-27/');
INSERT INTO `think_news` VALUES ('23', '7', 'asdfsf', 'sadfasfsd', '1482848247', 'asfdsf', '586277f72696f.jpg5947b8402880e.jpg|', './Public/Uploads/2017-06-19/');

-- ----------------------------
-- Table structure for `think_order`
-- ----------------------------
DROP TABLE IF EXISTS `think_order`;
CREATE TABLE `think_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(11) NOT NULL,
  `product_info` text NOT NULL,
  `total` decimal(8,0) NOT NULL,
  `status` int(9) NOT NULL DEFAULT '0',
  `member_id` varchar(255) NOT NULL,
  `user_info` text,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_order
-- ----------------------------
INSERT INTO `think_order` VALUES ('36', '1484048644958', '{\"55\":{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}}', '89', '1', 'hhhhh', '{\"name\":\"hhhhh\",\"address\":\"\\u6e56\\u5317\\u7701 \\u6b66\\u6c49\\u5e02 ***  ***\",\"phone\":\"15966668888\"}', '2017-01-10 19:44:04');
INSERT INTO `think_order` VALUES ('37', '1484058664664', '{\"49\":{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}}', '123', '1', 'hhhhh', '{\"name\":\"hhhhhh\",\"address\":\"hhhhhhh\",\"phone\":\"1233424r\"}', '2017-01-10 22:31:04');
INSERT INTO `think_order` VALUES ('38', '1484110332808', '{\"55\":{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}}', '89', '1', 'hhhhh', '{\"name\":\"\\u5c0f\\u6d63\\u718a\",\"address\":\"\\u6e56\\u5317\\u7701 \\u6b66\\u6c49\\u5e02 ***  ***\",\"phone\":\"15966668888\"}', '2017-01-11 12:52:12');
INSERT INTO `think_order` VALUES ('39', '1484110404106', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":4,\"total\":356},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '455', '1', 'hhhhh', '{\"name\":\"\\u5c0f\\u6d63\\u718a\",\"address\":\"\\u6e56\\u5317\\u7701\\u6b66\\u6c49\\u5e02\",\"phone\":\"15988888866\"}', '2017-01-11 12:53:24');
INSERT INTO `think_order` VALUES ('40', '1484117484565', '{\"53\":{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}}', '99', '1', 'hhhhh', '{\"name\":\"hahaha\",\"address\":\"\\u5b89\\u5fbd\\u7701 \\u5408\\u80a5\\u5e02 \\u7476\\u6d77\\u533a***\",\"phone\":\"15922223333\"}', '2017-01-11 14:51:24');
INSERT INTO `think_order` VALUES ('41', '1484118379430', '{\"55\":{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}}', '89', '1', 'hhhhh', '{\"name\":\"sdfdfdfd\",\"address\":\"\\u6b66\\u6c49\\u5e02\\u6d2a\\u5c71\\u533a\\u9c81\\u5df7\\u79d1\\u6280\\u82d1\",\"phone\":\"15988888866\"}', '2017-01-11 15:06:19');
INSERT INTO `think_order` VALUES ('42', '1484118413563', '{\"50\":{\"id\":\"50\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"222\",\"num\":\"1\",\"total\":222}}', '222', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-11 15:06:53');
INSERT INTO `think_order` VALUES ('43', '1484119583464', '[{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '99', '1', 'hhhhh', '{\"name\":\"SDFSF\",\"address\":\"SDFSA\",\"phone\":\"SDFDSA\"}', '2017-01-11 15:26:23');
INSERT INTO `think_order` VALUES ('44', '1484119989570', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":5,\"total\":445},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '544', '1', 'hhhhh', '{\"name\":\"adsfa\",\"address\":\"asfsdaf\",\"phone\":\"asfasdf\"}', '2017-01-11 15:33:09');
INSERT INTO `think_order` VALUES ('45', '1484120302691', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":5,\"total\":445},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '544', '1', 'hhhhh', '{\"name\":\"ASDFA\",\"address\":\"SADFS\",\"phone\":\"SDAFSA\"}', '2017-01-11 15:38:22');
INSERT INTO `think_order` VALUES ('46', '1484120486269', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":5,\"total\":445},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '544', '1', 'hhhhh', '{\"name\":\"ASDFA\",\"address\":\"SADFS\",\"phone\":\"SDAFSA\"}', '2017-01-11 15:41:26');
INSERT INTO `think_order` VALUES ('47', '1484120521554', '[{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '99', '1', 'hhhhh', '{\"name\":\"asfasdf\",\"address\":\"sdfsaf\",\"phone\":\"asfdasdf\"}', '2017-01-11 15:42:01');
INSERT INTO `think_order` VALUES ('48', '1484120815688', '[{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":2,\"total\":198}]', '198', '1', 'hhhhh', '{\"name\":\"asfsaf\",\"address\":\"asdfasf\",\"phone\":\"asdfsaf\"}', '2017-01-11 15:46:55');
INSERT INTO `think_order` VALUES ('49', '1484121378204', '{\"55\":{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}}', '89', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-11 15:56:18');
INSERT INTO `think_order` VALUES ('50', '1484121433811', '[{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":2,\"total\":198}]', '198', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-11 15:57:13');
INSERT INTO `think_order` VALUES ('51', '1484121843813', '[{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":2,\"total\":198}]', '198', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-11 16:04:03');
INSERT INTO `think_order` VALUES ('52', '1484139815763', '{\"50\":{\"id\":\"50\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"222\",\"num\":\"1\",\"total\":222}}', '222', '1', 'hhhhh', '{\"name\":\"asdfasdf\",\"address\":\"asfdasfsa\",\"phone\":\"asdfasdf\"}', '2017-01-11 21:03:35');
INSERT INTO `think_order` VALUES ('53', '1484220570466', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}]', '89', '1', 'hhhhh', '{\"name\":\"hahaha\",\"address\":\"\\u6e56\\u5317\\u7701 \\u6b66\\u6c49\\u5e02 ***  ***\",\"phone\":\"15966668888\"}', '2017-01-12 19:29:30');
INSERT INTO `think_order` VALUES ('54', '1484220633816', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}]', '89', '1', 'hhhhh', '{\"name\":\"hahaha\",\"address\":\"\\u6e56\\u5317\\u7701 \\u6b66\\u6c49\\u5e02 ***  ***\",\"phone\":\"15966668888\"}', '2017-01-12 19:30:33');
INSERT INTO `think_order` VALUES ('55', '1484221074793', '[{\"id\":\"55\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-29\\/5864db03955a4.png\",\"shop_price\":\"89\",\"num\":\"1\",\"total\":89}]', '89', '1', 'hhhhh', '{\"name\":\"hahaha\",\"address\":\"\\u6e56\\u5317\\u7701 \\u6b66\\u6c49\\u5e02 ***  ***\",\"phone\":\"15966668888\"}', '2017-01-12 19:37:54');
INSERT INTO `think_order` VALUES ('56', '1484270063464', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"hj\",\"address\":\"jhg\",\"phone\":\"jg\"}', '2017-01-13 09:14:23');
INSERT INTO `think_order` VALUES ('57', '1484270109394', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"321\",\"address\":\"1323\",\"phone\":\"132\"}', '2017-01-13 09:15:09');
INSERT INTO `think_order` VALUES ('58', '1484270127288', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:15:27');
INSERT INTO `think_order` VALUES ('59', '1484270185898', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:16:25');
INSERT INTO `think_order` VALUES ('60', '1484270427587', '[{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '99', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:20:27');
INSERT INTO `think_order` VALUES ('61', '1484270444565', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:20:44');
INSERT INTO `think_order` VALUES ('62', '1484270607591', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:23:27');
INSERT INTO `think_order` VALUES ('63', '1484270755778', '[{\"id\":\"49\",\"pro_name\":\"\\u7eff\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/586277c2a94a5.jpg\",\"shop_price\":\"123\",\"num\":\"1\",\"total\":123}]', '123', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:25:55');
INSERT INTO `think_order` VALUES ('64', '1484270818453', '[{\"id\":\"41\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"100\",\"num\":\"1\",\"total\":100}]', '100', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:26:58');
INSERT INTO `think_order` VALUES ('65', '1484270951965', '[{\"id\":\"41\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"100\",\"num\":\"1\",\"total\":100}]', '100', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:29:11');
INSERT INTO `think_order` VALUES ('66', '1484271033520', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:30:33');
INSERT INTO `think_order` VALUES ('67', '1484271124144', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:32:04');
INSERT INTO `think_order` VALUES ('68', '1484271134762', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:32:14');
INSERT INTO `think_order` VALUES ('69', '1484271142182', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:32:22');
INSERT INTO `think_order` VALUES ('70', '1484271160827', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:32:40');
INSERT INTO `think_order` VALUES ('71', '1484271169543', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:32:49');
INSERT INTO `think_order` VALUES ('72', '1484271170773', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:32:50');
INSERT INTO `think_order` VALUES ('73', '1484272562848', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:56:02');
INSERT INTO `think_order` VALUES ('74', '1484272646287', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:57:26');
INSERT INTO `think_order` VALUES ('75', '1484272671296', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:57:51');
INSERT INTO `think_order` VALUES ('76', '1484272737685', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:58:57');
INSERT INTO `think_order` VALUES ('77', '1484272776711', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 09:59:36');
INSERT INTO `think_order` VALUES ('78', '1484272866409', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 10:01:06');
INSERT INTO `think_order` VALUES ('79', '1484272962932', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 10:02:42');
INSERT INTO `think_order` VALUES ('80', '1484273063584', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 10:04:23');
INSERT INTO `think_order` VALUES ('81', '1484275814888', '[null,{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 10:50:14');
INSERT INTO `think_order` VALUES ('82', '1484277623597', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"sfas\",\"address\":\"sdfs\",\"phone\":\"sdfsf\"}', '2017-01-13 11:20:23');
INSERT INTO `think_order` VALUES ('83', '1484277923343', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"sfas\",\"address\":\"sdfs\",\"phone\":\"sdfsf\"}', '2017-01-13 11:25:23');
INSERT INTO `think_order` VALUES ('84', '1484278110807', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000}]', '5000', '1', 'hhhhh', '{\"name\":\"sfas\",\"address\":\"sdfs\",\"phone\":\"sdfsf\"}', '2017-01-13 11:28:30');
INSERT INTO `think_order` VALUES ('85', '1484278135551', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:28:55');
INSERT INTO `think_order` VALUES ('86', '1484278149845', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:29:09');
INSERT INTO `think_order` VALUES ('87', '1484278345352', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:32:25');
INSERT INTO `think_order` VALUES ('88', '1484278374466', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:32:54');
INSERT INTO `think_order` VALUES ('89', '1484278424723', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:33:44');
INSERT INTO `think_order` VALUES ('90', '1484278491552', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:34:51');
INSERT INTO `think_order` VALUES ('91', '1484279124521', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '1', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:45:24');
INSERT INTO `think_order` VALUES ('92', '1484279270792', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '0', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:47:50');
INSERT INTO `think_order` VALUES ('93', '1484279383416', '[{\"id\":\"31\",\"pro_name\":\"\\u83ca\\u82b1\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-21\\/585a4fbac7199.jpg\",\"shop_price\":\"5000\",\"num\":\"1\",\"total\":5000},{\"id\":\"53\",\"pro_name\":\"\\u7ea2\\u8336\",\"pro_img\":\"\\/tp\\/Uploads\\/Public\\/Uploads\\/2016-12-27\\/58627825e533e.png\",\"shop_price\":\"99\",\"num\":\"1\",\"total\":99}]', '5099', '0', 'hhhhh', '{\"name\":\"\",\"address\":\"\",\"phone\":\"\"}', '2017-01-13 11:49:43');

-- ----------------------------
-- Table structure for `think_product`
-- ----------------------------
DROP TABLE IF EXISTS `think_product`;
CREATE TABLE `think_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `market_price` float NOT NULL,
  `shop_price` float NOT NULL,
  `pro_num` int(11) NOT NULL,
  `pro_cate` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `pro_time` int(11) NOT NULL COMMENT '产品时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_product
-- ----------------------------
INSERT INTO `think_product` VALUES ('30', '菊花茶', '5999', '3999', '10', '3', 'asdfsfs', '585a4fcb6248d.gif|', './Public/Uploads/2016-12-21/', '1481684101');
INSERT INTO `think_product` VALUES ('31', '菊花茶', '6999', '5000', '10', '3', 'sdfsaf', '585a4fbac7199.jpg|585a4fbacb06a.jpg|', './Public/Uploads/2016-12-21/', '1481709970');
INSERT INTO `think_product` VALUES ('39', '菊花茶', '112', '312313', '2321', '3', 'sadfsaf', '58627029cd08d.jpg|58627029d086c.jpg', './Public/Uploads/2016-12-27/', '1482300744');
INSERT INTO `think_product` VALUES ('41', '菊花茶', '123', '100', '12', '3', 'sdfsaf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482845784');
INSERT INTO `think_product` VALUES ('42', '菊花茶', '599', '499', '12', '4', 'sdfsaf', '58626e80ee89f.jpg|', './Public/Uploads/2016-12-27/', '1482845824');
INSERT INTO `think_product` VALUES ('43', '菊花茶', '100', '89', '10', '4', 'asdfsf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482846035');
INSERT INTO `think_product` VALUES ('44', '绿茶', '123232', '121232', '12', '5', 'safdsf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482846686');
INSERT INTO `think_product` VALUES ('45', '绿茶', '123', '1232', '21313', '5', 'safsaf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482847002');
INSERT INTO `think_product` VALUES ('46', '绿茶', '1999', '1899', '100', '5', 'safdsf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482847040');
INSERT INTO `think_product` VALUES ('47', '绿茶', '9999', '8888', '100', '6', 'adfsf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482847335');
INSERT INTO `think_product` VALUES ('49', '绿茶', '123', '123', '123', '6', 'safsdf', '586277c2a94a5.jpg', './Public/Uploads/2016-12-27/', '1482848194');
INSERT INTO `think_product` VALUES ('50', '红茶', '222', '222', '1232', '6', 'sadfsff', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482848293');
INSERT INTO `think_product` VALUES ('53', '红茶', '100', '99', '100', '4', 'sadfsaf', '58627825e533e.png', './Public/Uploads/2016-12-27/', '1482849467');
INSERT INTO `think_product` VALUES ('55', '红茶', '99', '89', '100', '5', 'safdsa', '5864db03955a4.png', './Public/Uploads/2016-12-29/', '1483004675');

-- ----------------------------
-- Table structure for `think_video`
-- ----------------------------
DROP TABLE IF EXISTS `think_video`;
CREATE TABLE `think_video` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_video
-- ----------------------------
INSERT INTO `think_video` VALUES ('1', '新闻详情', './Public/Uploads/Video2017-01-11/58762976a092f.mp4', '2017-01-11 20:47:50');

-- ----------------------------
-- Table structure for `think_vip`
-- ----------------------------
DROP TABLE IF EXISTS `think_vip`;
CREATE TABLE `think_vip` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vip_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_vip
-- ----------------------------
INSERT INTO `think_vip` VALUES ('5', 'hhhhh', '202cb962ac59075b964b07152d234b70', '123@qq.com', '15922223333', null);
INSERT INTO `think_vip` VALUES ('6', 'kkkkk', '202cb962ac59075b964b07152d234b70', '123@qq.com', '15922223333', null);
