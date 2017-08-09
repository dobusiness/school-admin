drop table IF EXISTS `sc_code`;

CREATE TABLE IF NOT EXISTS `sc_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(80) NOT NULL,
  `status` char(1) NOT NULL,
  `updatedDate` timestamp NULL,
  `updatedBy` varchar(10) NULL,
  `createdDate` timestamp NULL,
  `createdBy` varchar(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;