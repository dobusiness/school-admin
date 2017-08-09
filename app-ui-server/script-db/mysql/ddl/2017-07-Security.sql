drop table IF EXISTS `sc_user`;

CREATE TABLE IF NOT EXISTS `sc_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `email` varchar(50) NULL,
  `firstName` varchar(50) NULL,
  `lastName` varchar(50) NULL,
  `state` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table IF EXISTS `sc_user_config`;

CREATE TABLE IF NOT EXISTS `sc_user_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `module` varchar(50) NOT NULL,
  `privilege` varchar(3) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;