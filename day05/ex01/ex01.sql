create table ft_table(id int(6) unsigned auto_increment primary key, login VARCHAR(8) NOT NULL default 'toto', 
	`group` ENUM('staff', 'student', 'other') NOT NULL, creation_date DATE NOT NULL);
