CREATE TABLE user (
id int(11) NOT NULL AUTO_INCREMENT,
firstname varchar(255) NOT NULL,
lastname varchar(255) NOT NULL,
email varchar(255) NOT NULL,
phone varchar(255) NOT NULL,
username varchar(255) NOT NULL,
password varchar(255) NOT NULL,
PRIMARY KEY (id),
UNIQUE KEY (username)
);
