DROP DATABASE IF EXISTS banking_app;
CREATE DATABASE banking_app;
USE banking_app;
DROP TABLE IF EXISTS `subjects`;
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE pages (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `subject_id` INT(11),
  `menu_name` VARCHAR(255),
  `position` INT(3),
  `visible` TINYINT(1),
  `content` TEXT,
  PRIMARY KEY (`id`)
);

ALTER TABLE `pages` ADD INDEX fk_subject_id (subject_id);

# Insert to table subjects
INSERT INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('About Globe Bank',1,1);
INSERT INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('Consumer',2,1);
INSERT INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('Small Business',3,0);

# Insert to table pages
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (1, 'Globe Bank', 1, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (1, 'History', 2, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (1, 'Leadership', 3, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (1, 'Contact Us', 4, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (2, 'Banking', 1, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (2, 'Credit Cards', 2, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (2, 'Mortgages', 3, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (3, 'Checking', 1, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (3, 'Loans', 2, 1);
INSERT INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`) VALUES (3, 'Merchant Services', 3, 1);
