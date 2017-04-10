DROP TABLE IF EXISTS `account_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_status`
--

INSERT INTO `account_status` VALUES (1,'Active'),(2,'Inactive'),(3,'Suspended'),(4,'Deactivated'),(5,'Blocked');


--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `post_code` varchar(500) NOT NULL,
  `telephone` varchar(500) NOT NULL,
  `fax` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--


INSERT INTO `addresses` VALUES (1,'Trinity House','Heather Park Drive','Greater London','HA0 1SU','020 3397 8425','','info@cadoganmcqueen.co.uk');


--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) DEFAULT '',
  `enquiry` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--


--
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) NOT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` VALUES (11,'city-7687762.jpg',1),(18,'Couple_relocating_home2.jpg',2),(19,'Cadogan_McQueen_Airport_relocation.jpg',3),(21,'Cadogan_McQueen_relocation_agent1.jpg',5),(22,'Cadogan_McQueen_relocation_agent_team2.jpg',4);


--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--


INSERT INTO `groups` VALUES (1,'admin','Administrator');


--
-- Table structure for table `home_page_info`
--

DROP TABLE IF EXISTS `home_page_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_page_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_image_text` text,
  `title` varchar(500) NOT NULL,
  `description` text,
  `links_title` text,
  `copy_right` text,
  `footer_message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_page_info`
--


INSERT INTO `home_page_info` VALUES (1,'Welcome to Cadogan McQueen','Employee Relocation Services','&amp;lt;p&amp;gt;Welcome to Cadogan McQueen Limited. A UK based company specialising in corporate and employee relocations.&amp;lt;/p&amp;gt;\n\n&amp;lt;p&amp;gt;We understand the difficulties and processes involved with relocating for a new job and finding a home can be even more of a challenge. Whatever your requirements are, we are on hand to assist and make sure clients are happily settled with quality accommodation that runs smoothly.&amp;lt;/p&amp;gt;\n\n&amp;lt;p&amp;gt;We continuously endeavour to exceed client expectations with high levels of attention to detail and working above and beyond to get everything &amp;amp;#39;just right&amp;amp;#39;!&amp;lt;/p&amp;gt;\n\n&amp;lt;p&amp;gt;&amp;amp;nbsp;&amp;lt;/p&amp;gt;\n','Cadogan McQueen Limited: ','© Copyright Cadogan McQueen Limited','Company Nr: 09435809 (England). Trinty House, Heather Park Drive, Greater London, HA0 1SU ');

--
-- Table structure for table `landing_page`
--

DROP TABLE IF EXISTS `landing_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `landing_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `title_one_image` varchar(255) NOT NULL,
  `title_two_image` varchar(255) NOT NULL,
  `title_three_image` varchar(255) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `title_three` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `description_three` text NOT NULL,
  `address` text NOT NULL,
  `telephone1` varchar(50) DEFAULT '',
  `location1` varchar(200) DEFAULT '',
  `telephone2` varchar(50) DEFAULT '',
  `location2` varchar(200) DEFAULT '',
  `telephone3` varchar(50) DEFAULT '',
  `location3` varchar(200) DEFAULT '',  
  `telephone` varchar(20) NOT NULL,
  `email` char(200) NOT NULL,
  `bg_title` text DEFAULT '',
  `bg_subtitle` text DEFAULT '',
  `bg_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `landing_page`
--


INSERT INTO `landing_page` VALUES (1,'CADOGAN_MCQUEEN324.jpg','Cadogan_McQueen_Banner5.png','epic_win.png','house.png','people.png','<p><span style=\"color:#000080;\"><span style=\"font-size:18px;\"><strong>Concierge</strong></span></span></p>\n','<p><span style=\"color:#000080;\"><span style=\"font-size:18px;\"><strong>Design &amp; Build</strong></span></span></p>\n','<p><span style=\"color:#000080;\"><span style=\"font-size:18px;\"><strong>Cadogan McQueen Limited</strong></span></span></p>\n','<p><span style=\"font-size:12px;\">Specialising in corporate and employee relocations. We understand the difficulties and processes involved with relocating for a new job and finding a home can be even more of a challenge. Whatever your requirements are, we are on hand to assist and make sure clients are happily settled with quality accommodation that runs smoothly. We continuously endeavour to exceed client expectations with high levels of attention to detail and working above and beyond to get everything &#39;just right&#39;!</span></p>\n','<p><span style=\"font-size:12px;\">Add something new and exciting to your property so that it&#39;s the home you&#39;ve always dreamed of.&nbsp;We strive to maintain the highest standards while exceeding client&rsquo;s expectations at all levels. We not only honor commitments, but are known for meeting tough deadlines while delivering nothing but the best.&nbsp;We aim to create a responsive client relationship that allows us to meet and exceed the goals of each of our projects.</span></p>\n','<p class=\"Default\"><span style=\"font-size:12px;\"><strong><span style=\"font-family: Verdana, sans-serif; font-weight: normal; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Professional residential property investment services aimed at private investors.</span></strong><strong><span style=\"font-family: Verdana, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"> </span></strong><span style=\"font-family: Verdana, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Our team have particular expertise and offer expertise in acquiring UK property and the Private Rented Sector. We are able to provide well researched, diligent advice, taking account of different fund requirements to provide a quality consultancy service</span>.</span><span style=\"font-size:11.0pt\"><o:p></o:p></span></p>\n','Trinty House, Heather Park Drive, Greater London, HAO 1SUs','020 3397 8425','info@cadoganmcqueen.co.uk','Cadogan McQueen','Professional Property Services','bg-responsive.jpg');


--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `link` text,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

INSERT INTO `links` VALUES (1,'build_serv_bg.png','TESTIMONIALS','What our clients say about us','15',3),(2,'des_constr_bg.png','CM BLOG','Property information and updates','18',4),(3,'dev_leg_bg.png','PROPERTY MANAGEMENT','Marketing, Supervision &amp; Maintenance ','2',2),(4,'prof_cons_bg.png','RELOCATION SERVICES','Professional and Expert advice','16',1);


--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

--
-- Table structure for table `logo_types`
--

DROP TABLE IF EXISTS `logo_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logo_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logo_types`
--

INSERT INTO `logo_types` VALUES (1,'Header'),(2,'Footer');


--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logos_logo_types1_idx` (`type_id`),
  CONSTRAINT `fk_logos_logo_types1` FOREIGN KEY (`type_id`) REFERENCES `logo_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` VALUES (6,'CADOGAN_MCQUEEN32.jpg',1),(9,'PRS_Logo_high.jpg',2),(10,'mydeposits_logo.gif',2),(17,'RICS_logo_online_Purple__RICS_on_right_of_lionshead.JPG',2),(20,'CM_Luton_Landlord_Accreditation_Scheme2.png',2);
--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` VALUES (1,'ABOUT US',1),(2,'PROPERTY MANAGEMENT',3),(6,'RELOCATION SERVICE',2),(7,'TESTIMONIALS',3),(9,'CM BLOG',5);
--
-- Table structure for table `pages`
--

--
-- Table structure for table `submenus`
--

DROP TABLE IF EXISTS `submenus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submenus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_submenus_menus1_idx` (`menu_id`),
  CONSTRAINT `fk_submenus_menus1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` VALUES (1,'About Us',1,1),(2,'Property Management',2,1),(15,'Testimonials',7,1),(16,'Relocation Services',6,1),(18,'Codogan McQueen Blog',9,5);


DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT '',
  `description` text,
  PRIMARY KEY (`id`),
  KEY `fk_pages_submenus1_idx` (`submenu_id`),
  CONSTRAINT `fk_pages_submenus1` FOREIGN KEY (`submenu_id`) REFERENCES `submenus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_id` int(11) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `fk_replies_feedbacks1_idx` (`feedback_id`),
  CONSTRAINT `fk_replies_feedbacks1` FOREIGN KEY (`feedback_id`) REFERENCES `feedbacks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--




--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `account_status_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_laccount_status1` (`account_status_id`),
  CONSTRAINT `fk_users_laccount_status1` FOREIGN KEY (`account_status_id`) REFERENCES `account_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES (1,'','administrator','59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4','9462e8eee0','admin@admin.com','','eb33423e3d463d852f34288adaa409b6f8968f63',1458639231,'5d4217d7bc2b6e59a68a8b7dacb02fe09f443e5e',1268889823,1469631661,NULL,'Admin','istrator','ADMIN','0',1);


--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` VALUES (1,1,1);

