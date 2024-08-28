CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT COMMENT "here store user id",
    user_name varchar(255) NOT NULL COMMENT "here store user name",
    full_name varchar(255) NOT NULL COMMENT "here store user full name",
    password varchar(255) NULL COMMENT "here store user password",
    status int(2) NOT NULL COMMENT " 0 = deactivate, 1= active",
    PRIMARY KEY (ID)
);
CREATE TABLE tags (
    id int NOT NULL AUTO_INCREMENT COMMENT "here store tag id",
    tag varchar(255) NOT NULL COMMENT "here store tag id",
    PRIMARY KEY (ID)
);

CREATE TABLE categories (
    id int NOT NULL AUTO_INCREMENT COMMENT "here store category id",
    category varchar(255) NOT NULL COMMENT "here store category name",
    PRIMARY KEY (ID)
);

CREATE TABLE articles (
    id int NOT NULL AUTO_INCREMENT,
    user_id varchar(255) NOT NULL COMMENT "here store user id",
    title varchar(255) NOT NULL COMMENT "here store article title",
    description text NOT NULL COMMENT "here descript article",
    created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP COMMENT "show when article created",
    published_at DATETIME NULL COMMENT "show when article published",
    category_id int(11) NOT NULL COMMENT "here store category id",
    tag_id int(11) NOT NULL COMMENT "here store tag id",
    status int(11) NOT NULL COMMENT " 0 = draft , 1 = published",
    image varchar(255) NOT NULL COMMENT "here store user id",
    PRIMARY KEY (id)
);
