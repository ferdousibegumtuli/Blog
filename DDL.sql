table sql users
CREATE TABLE `blog`.
`users` (`user_name` VARCHAR(255) NOT NULL COMMENT 'Here store user name.' ,
`full_name` VARCHAR(255) NOT NULL COMMENT 'Here store user full name.' ,
`password` TEXT NOT NULL COMMENT 'Here store the password.' );

table sql category
CREATE TABLE `blog`.`category` (`category` VARCHAR(255) NOT NULL COMMENT 'Here store type of blogs.' );

table sql tag
CREATE TABLE `blog`.`tag` (`tags` VARCHAR(255) NOT NULL COMMENT 'Here store type of category.' );

table sql article
