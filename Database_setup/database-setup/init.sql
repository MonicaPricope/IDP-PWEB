CREATE DATABASE IF NOT EXISTS test;

use test;
CREATE TABLE test.shelter (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(20) NOT NULL, location VARCHAR(20) NOT NULL, admin_name VARCHAR(25) NOT NULL, admin_phone VARCHAR(15) NOT NULL, ocupants INT NOT NULL, capacity INT NOT NULL, PRIMARY KEY(id)) ENGINE=InnoDB;

create user appuser identified by "appuserPasswd";
grant all privileges on test.* to appuser@'%';