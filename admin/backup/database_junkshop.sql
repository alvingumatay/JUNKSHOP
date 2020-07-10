# WordPress : buffernow.com MySQL database backup
#
# Generated: Monday 3. February 2020 16:45 CET
# Hostname: localhost
# Database: `junkshop`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `admin`
# --------------------------------------------------------


#
# Delete any existing table `admin`
#

DROP TABLE IF EXISTS `admin`;


#
# Table structure of table `admin`
#

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ;

#
# Data contents of table admin (1 records)
#
 
INSERT INTO `admin` VALUES (2, 'administry', 'admin', 'Ad', 'L', 'Lamas') ;
#
# End of data contents of table admin
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Monday 3. February 2020 16:45 CET
# Hostname: localhost
# Database: `junkshop`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `admin`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `booking`
# --------------------------------------------------------


#
# Delete any existing table `booking`
#

DROP TABLE IF EXISTS `booking`;


#
# Table structure of table `booking`
#

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `jk_no` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `servtype` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tdate` date NOT NULL,
  `dtime` varchar(40) NOT NULL,
  `status` enum('pending','accept','done') NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ;

#
# Data contents of table booking (2 records)
#
 
INSERT INTO `booking` VALUES (2, 3, 'Bitakbitak', 'Suko', '09462886584', 'Copper Tubling/Flashing Php30.00/kilo', '5508-aluminumcopper.jpg', '2020-01-29', '10:30 PM', 'pending') ; 
INSERT INTO `booking` VALUES (4, 3, 'Bitakbitak', 'Suko', '09462886584', 'Washers(Tingga)Php5.00/kilo.', '9604-scrapmetal.jpg', '2020-01-29', '10:45 PM', 'pending') ;
#
# End of data contents of table booking
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Monday 3. February 2020 16:45 CET
# Hostname: localhost
# Database: `junkshop`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `admin`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `booking`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `jk`
# --------------------------------------------------------


#
# Delete any existing table `jk`
#

DROP TABLE IF EXISTS `jk`;


#
# Table structure of table `jk`
#

CREATE TABLE `jk` (
  `jk_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` text,
  PRIMARY KEY (`jk_no`),
  UNIQUE KEY `jk_no` (`jk_no`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ;

#
# Data contents of table jk (13 records)
#
 
INSERT INTO `jk` VALUES (3, 'bataknagoku@gmail.com', '12345678', 'Bitakbitak', 'S', 'Suko', '06/10/1993', '27', '#24 Jeans st., UP city', '09462886584') ; 
INSERT INTO `jk` VALUES (4, 'jusa@gmail.com', '123', 'jusa', 's', 'sebastian', '01/02/1992', '28', '4#gina St., Mandaluyong City', '09462886584') ; 
INSERT INTO `jk` VALUES (5, 'husay@gmail.com', '123', 'judres', 'j', 'jusau', '02/03/2000', '20', '47 Santan II Baragay Fortune', '09462886584') ; 
INSERT INTO `jk` VALUES (6, 'Michael.see31@yahoo.com', '123', 'miguak', 's', 'doy', '05/11/2000', '20', '#24 Jeans st., UP city', '0908345874') ; 
INSERT INTO `jk` VALUES (7, 'kumaider@gmail.com', '123', 'jc', 'j', 'hugas', '07/04/1992', '28', 'carlma antipolo city', '09462886584') ; 
INSERT INTO `jk` VALUES (8, 'vjohnhector9@gmail.com', 'SHAWARMA', 'John Hector', 'R', 'Vale', '10/11/1998', '10', '47 Santan II Baragay Fortune', '09979463215') ; 
INSERT INTO `jk` VALUES (9, 'josemanlibot@gmail.com', '123', 'jose', 'm', 'manlibot', '03/14/1994', '25', '#2 Kalansi St., Concepcion I., Marikina City', '09462886584') ; 
INSERT INTO `jk` VALUES (10, 'jiiseh13@gmail.com', 'jiiseh13', 'john carlo', 'pascual', 'satiada', '04/13/1996', '23', '#2 Prince Str, Victory Hills Subd, Brgy Fortune, Marikina City', '09998587056') ; 
INSERT INTO `jk` VALUES (11, 'alvingumatay@gmail.com', '12345678', 'alvin', 't', 'gumatay', '02/13/1992', '27', '2 Kalamansi st., concepcion I, Marikina City, 10 H', '09462886584') ; 
INSERT INTO `jk` VALUES (12, 'micosee@yahoo.com', 'micosee2', 'Michael', 'alvarez', 'see', '03/14/1997', '22', 'Sa may ilog', '09991231234') ; 
INSERT INTO `jk` VALUES (13, 'jessestocada@gmail.com', 'jess09063215402', 'jess', 'estocada', 'Mendoza', '10/18/1998', '21', '#di makulangan kukulang kulang st.', '09090372376') ; 
INSERT INTO `jk` VALUES (14, 'betlover@yahoo.com', 'betlogs', 'Betty', '', 'Loger', '03/14/1997', '22', 'Barbara, San Mateo', '09394297579') ; 
INSERT INTO `jk` VALUES (15, 'josemarichan@gmail.com', '123', 'jose', 'l', 'marichan', '02/12/1992', '27', '#45 Deralno St., Colpity Vill., Lansones City', '09462886584') ;
#
# End of data contents of table jk
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 5. February 2020 15:11 CET
# Hostname: localhost
# Database: `junkshop`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `admin`
# --------------------------------------------------------


#
# Delete any existing table `admin`
#

DROP TABLE IF EXISTS `admin`;


#
# Table structure of table `admin`
#

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ;

#
# Data contents of table admin (1 records)
#
 
INSERT INTO `admin` VALUES (2, 'administry', 'admin', 'Ad', 'L', 'Lamas') ;
#
# End of data contents of table admin
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 5. February 2020 15:11 CET
# Hostname: localhost
# Database: `junkshop`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `admin`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `booking`
# --------------------------------------------------------


#
# Delete any existing table `booking`
#

DROP TABLE IF EXISTS `booking`;


#
# Table structure of table `booking`
#

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `jk_no` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `servtype` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tdate` date NOT NULL,
  `dtime` varchar(40) NOT NULL,
  `status` enum('pending','accept','done') NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ;

#
# Data contents of table booking (2 records)
#
 
INSERT INTO `booking` VALUES (2, 3, 'Bitakbitak', 'Suko', '09462886584', 'Copper Tubling/Flashing Php30.00/kilo', '5508-aluminumcopper.jpg', '2020-01-29', '10:30 PM', 'accept') ; 
INSERT INTO `booking` VALUES (4, 3, 'Bitakbitak', 'Suko', '09462886584', 'Washers(Tingga)Php5.00/kilo.', '9604-scrapmetal.jpg', '2020-01-29', '10:45 PM', 'done') ;
#
# End of data contents of table booking
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 5. February 2020 15:11 CET
# Hostname: localhost
# Database: `junkshop`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `admin`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `booking`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `jk`
# --------------------------------------------------------


#
# Delete any existing table `jk`
#

DROP TABLE IF EXISTS `jk`;


#
# Table structure of table `jk`
#

CREATE TABLE `jk` (
  `jk_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` text,
  PRIMARY KEY (`jk_no`),
  UNIQUE KEY `jk_no` (`jk_no`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ;

#
# Data contents of table jk (13 records)
#
 
INSERT INTO `jk` VALUES (3, 'bataknagoku@gmail.com', '12345678', 'Bitakbitak', 'S', 'Suko', '06/10/1993', '27', '#24 Jeans st., UP city', '09462886584') ; 
INSERT INTO `jk` VALUES (4, 'jusa@gmail.com', '123', 'jusa', 's', 'sebastian', '01/02/1992', '28', '4#gina St., Mandaluyong City', '09462886584') ; 
INSERT INTO `jk` VALUES (5, 'husay@gmail.com', '123', 'judres', 'j', 'jusau', '02/03/2000', '20', '47 Santan II Baragay Fortune', '09462886584') ; 
INSERT INTO `jk` VALUES (6, 'Michael.see31@yahoo.com', '123', 'miguak', 's', 'doy', '05/11/2000', '20', '#24 Jeans st., UP city', '0908345874') ; 
INSERT INTO `jk` VALUES (7, 'kumaider@gmail.com', '123', 'jc', 'j', 'hugas', '07/04/1992', '28', 'carlma antipolo city', '09462886584') ; 
INSERT INTO `jk` VALUES (8, 'vjohnhector9@gmail.com', 'SHAWARMA', 'John Hector', 'R', 'Vale', '10/11/1998', '10', '47 Santan II Baragay Fortune', '09979463215') ; 
INSERT INTO `jk` VALUES (9, 'josemanlibot@gmail.com', '123', 'jose', 'm', 'manlibot', '03/14/1994', '25', '#2 Kalansi St., Concepcion I., Marikina City', '09462886584') ; 
INSERT INTO `jk` VALUES (10, 'jiiseh13@gmail.com', 'jiiseh13', 'john carlo', 'pascual', 'satiada', '04/13/1996', '23', '#2 Prince Str, Victory Hills Subd, Brgy Fortune, Marikina City', '09998587056') ; 
INSERT INTO `jk` VALUES (11, 'alvingumatay@gmail.com', '12345678', 'alvin', 't', 'gumatay', '02/13/1992', '27', '2 Kalamansi st., concepcion I, Marikina City, 10 H', '09462886584') ; 
INSERT INTO `jk` VALUES (12, 'micosee@yahoo.com', 'micosee2', 'Michael', 'alvarez', 'see', '03/14/1997', '22', 'Sa may ilog', '09991231234') ; 
INSERT INTO `jk` VALUES (13, 'jessestocada@gmail.com', 'jess09063215402', 'jess', 'estocada', 'Mendoza', '10/18/1998', '21', '#di makulangan kukulang kulang st.', '09090372376') ; 
INSERT INTO `jk` VALUES (14, 'betlover@yahoo.com', 'betlogs', 'Betty', '', 'Loger', '03/14/1997', '22', 'Barbara, San Mateo', '09394297579') ; 
INSERT INTO `jk` VALUES (15, 'josemarichan@gmail.com', '123', 'jose', 'l', 'marichan', '02/12/1992', '27', '#45 Deralno St., Colpity Vill., Lansones City', '09462886584') ;
#
# End of data contents of table jk
# --------------------------------------------------------

