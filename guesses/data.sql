CREATE TABLE IF NOT EXISTS `user`
(
    `name` CHAR(50) NOT NULL,
    `passwd` CHAR(30) NOT NULL,
    PRIMARY KEY(`name`)

)ENGINE=INNODB  DEFAULT CHARSET=UTF8;
CREATE TABLE IF NOT EXISTS `dialogue`
(
    `contentid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
    `content` TEXT NOT NULL,
    `answer` CHAR(100) NOT NULL,
    `name` CHAR(50) NOT NULL,
    FOREIGN KEY(`name`) REFERENCES user(`name`),
    PRIMARY KEY(contentid)
)ENGINE=INNODB  DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `answer`
(
    `contentid` INT(10) UNSIGNED NOT NULL,
    `correct` INT(10) UNSIGNED,
    `wrong` INT(10) UNSIGNED,
    FOREIGN KEY(`contentid`) REFERENCES dialogue(`contentid`),
    PRIMARY KEY(`contentid`)
)ENGINE=INNODB  DEFAULT CHARSET=UTF8;


