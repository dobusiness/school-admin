drop table IF EXISTS `sc_employee`;

CREATE TABLE IF NOT EXISTS `sc_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NULL,
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
