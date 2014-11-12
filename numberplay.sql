# numberplay.sql 10/23/14

DROP TABLE IF EXISTS `numerology_profiles`;

CREATE TABLE `numerology_profiles`
(ProfileID int unsigned not null auto_increment primary key,
FirstName varchar(60),
MiddleName varchar(60),
LastName varchar(60),
BirthMonth int,
BirthDay int,
BirthYear int);

insert into numerology_profiles VALUES 
(NULL,"Thomas","Edward","Bonin", 3, 28, 1969);

insert into numerology_profiles VALUES 
(NULL,"Kelly","Maureen","Bonin", 8, 19, 1979);

insert into numerology_profiles VALUES 
(NULL,"Martin","Edward","Bonin", 1, 15, 1943);
