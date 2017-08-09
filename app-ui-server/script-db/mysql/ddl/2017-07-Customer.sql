drop table IF EXISTS `sc_customer`;

CREATE TABLE IF NOT EXISTS `sc_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NULL,
  `type` varchar(10) NULL,
  `firstName` varchar(50) NULL,
  `lastName` varchar(50) NULL,
  `comment` text NULL,
  `state` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table IF EXISTS `sc_customer_location`;

CREATE TABLE IF NOT EXISTS `sc_customer_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `priority` varchar(2) NOT NULL,
  `type` varchar(2) NOT NULL,
  `address` varchar(80) NOT NULL,
  `zipId` int(11) NOT NULL,
  `comment` text NULL,
  `status` char(1) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table IF EXISTS `sc_customer_contact`;

CREATE TABLE IF NOT EXISTS `sc_customer_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `priority` varchar(2) NOT NULL,
  `type` varchar(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `personContactName` varchar(100) NULL,
  `comment` text NULL,
  `status` char(1) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;