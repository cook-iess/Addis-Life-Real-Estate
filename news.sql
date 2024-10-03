create database news;

use news;

CREATE TABLE new (
  counter INT NOT NULL AUTO_INCREMENT,
  image TEXT NOT NULL,
  video TEXT NOT NULL,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  date datetime NOT NULL default current_timestamp(),
  PRIMARY KEY (counter)
);