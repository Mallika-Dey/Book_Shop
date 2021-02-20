DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `User_type` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Adventure`;
CREATE TABLE IF NOT EXISTS `Adventure` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Comic`;
CREATE TABLE IF NOT EXISTS `Comic` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Detective`;
CREATE TABLE IF NOT EXISTS `Detective` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Fiction`;
CREATE TABLE IF NOT EXISTS `Fiction` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Poetry`;
CREATE TABLE IF NOT EXISTS `Poetry` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Short_Stories`;
CREATE TABLE IF NOT EXISTS `Short_Stories` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Others`;
CREATE TABLE IF NOT EXISTS `Others` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
