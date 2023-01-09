DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,  
  `email` varchar(50) DEFAULT NULL,
  `phonenum` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`userid`, `username`, `firstname`, `lastname`, `email`, `phonenum`, `usertype`, `password`) VALUES
	(1, 'ken', 'kenedy', 'cheruiyot', 'cheruiyotkenedy@gmail.com', '0711314358', 'Admin', 'pass');