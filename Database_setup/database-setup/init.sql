CREATE DATABASE IF NOT EXISTS test;

use test;

CREATE TABLE test.shelter2 ( id INT NOT NULL AUTO_INCREMENT , title VARCHAR(20) NOT NULL , location VARCHAR(20) NOT NULL , admin_name VARCHAR(25) NOT NULL , admin_phone VARCHAR(15) NOT NULL , ocupants INT NOT NULL , capacity INT NOT NULL , map_user INT NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;
CREATE TABLE test.user2 ( id INT NOT NULL AUTO_INCREMENT , username VARCHAR(20) NOT NULL , password VARCHAR(20) NOT NULL , name VARCHAR(25) NOT NULL , type INT NOT NULL , PRIMARY KEY (id), UNIQUE (username)) ENGINE = InnoDB;
CREATE TABLE test.reservation ( id INT NOT NULL , user_id INT NOT NULL , location_id INT NOT NULL , start_time TIME NOT NULL , end_time TIME NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;

create user appuser identified by "appuserPasswd";
grant all privileges on test.* to appuser@'%';