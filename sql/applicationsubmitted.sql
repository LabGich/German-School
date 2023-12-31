DROP TABLE IF EXISTS `APPLICATIONSUBMITTED`;

CREATE TABLE IF NOT EXISTS `APPLICATIONSUBMITTED` (
    `USERID` INT(11) NOT NULL AUTO_INCREMENT,
    `USERNAME` VARCHAR(50) DEFAULT NULL,
    `FIRSTNAME` VARCHAR(50) DEFAULT NULL,
    `LASTNAME` VARCHAR(50) DEFAULT NULL,
    `EMAIL` VARCHAR(50) DEFAULT NULL,
    `PHONENUM` VARCHAR(50) DEFAULT NULL,
    `USERTYPE` VARCHAR(50) DEFAULT NULL,
    `PASSWORD` VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (`USERID`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=LATIN1;

INSERT INTO `APPLICATIONSUBMITTED` (
    `USERID`,
    `USERNAME`,
    `FIRSTNAME`,
    `LASTNAME`,
    `EMAIL`,
    `PHONENUM`,
    `USERTYPE`,
    `PASSWORD`
) VALUES (
    1,
    'ken',
    'kenedy',
    'cheruiyot',
    'cheruiyotkenedy@gmail.com',
    '0711314358',
    'Admin',
    'pass'
),
(
    2,
    'labu',
    'labrador',
    'mwangi',
    'labradorgichohi@gmail.com',
    '0729179309',
    'Admin',
    'pass'
);