drop table IF EXISTS `sc_zip`;

CREATE TABLE IF NOT EXISTS `sc_zip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zipINEI` varchar(6) NOT NULL,
  `zipMTC` varchar(5) NULL,
  `country` varchar(20) NULL,
  `department` varchar(40) NULL,
  `province` varchar(40) NULL,
  `district` varchar(40) NULL,
  `status` char(1) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;