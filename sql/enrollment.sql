DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE IF NOT EXISTS `enrollment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trimester` varchar(50) DEFAULT NULL,
  `fullnames` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,  
  `idno` varchar(50) DEFAULT NULL,
  `placeofbirth` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `residence` varchar(50) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `pobox` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `guardian` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `intake` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

