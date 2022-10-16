use data;

CREATE TABLE if not EXISTS `users` (
                                       `id`  INT NOT NULL auto_increment,
                                       `username` TEXT,
                                       `password` TEXT,
                                       `admin` BOOL,
                                       CONSTRAINT pk_users PRIMARY KEY (`id`)
    );

CREATE TABLE if not EXISTS `comments`(
                                       `content` TEXT,
                                       `comment_id`  INT NOT NULL auto_increment,
                                       `username` VARCHAR(255),
                                       `id` INT,
                                       `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
                                       PRIMARY KEY (`comment_id`)
    );


