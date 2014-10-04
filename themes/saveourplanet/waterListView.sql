# waterListView.sql 11/11/13

DROP TABLE IF EXISTS `water_avail`;

CREATE TABLE `water_avail`
(WaterAvailID int unsigned not null auto_increment primary key,
WaterRank int,
CityName varchar(60),
StateName varchar(60),
Description text (255),
AvailRank decimal(3,2),
VulnScore varchar (60),
MetaDescription varchar(255),
MetaKeywords varchar(255));

insert into water_avail VALUES 
(NULL,20,"Tampa-St. Petersburg","FL","Tampa-St. Petersburg is the 20th worst city for water availability.",0.17,"medium","Tampa-St. Petersburg is the 20th worst city for water availability.","tampa, st. petersburg, drought, water problems");

insert into water_avail VALUES
(NULL,19,"Lancaster-Palmdale","CA","Lancaster-Palmsdale is the 19th worst city for water availability.",0.16,"low","Lancaster-Palmsdale is the 19th worst city for water availability.","lancaster, palmsdale, drought, water problems");

insert into water_avail VALUES 
(NULL, 18, "Oxnard", "CA", "Oxnard is the 18th worst city for water availability.", 0.15, "medium", "Oxnard is the 18th worst city for water availability.", "oxnard, drought, water problems");

insert into water_avail VALUES 
(NULL, 17, "Ann Arbor", "MI", "Ann Arbor is the 17th worst city for water availability.", 0.14, "low", "Ann Arbor is the 17th worst city for water availability.", "ann arbor, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 16, "Tuscon", "AZ", "Tuscon is the 16th worst city for water availability.", 0.13, "medium", "Tuscon is the 16th worst city for water availability.", "tucson, drought, water problems");

insert into water_avail VALUES 
(NULL, 15, "Chicago", "IL", "Chicago is the 15th worst city for water availablity.", 0.12, "medium", "Chicago is the 15th worst city for water availablity.", "chicago, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 14, "Concord", "CA", "Concord is the 14th worst city for water availability.", 0.12, "medium", "Concord is the 14th worst city for water availability.", "concord, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 13, "Charleston", "SC", "Charleston is the 13th worst city for water availability.", 0.12, "medium", "Charleston is the 13th worst city for water availability.", "charleston, drought, water problems");

insert into water_avail VALUES  
(NULL, 12, "Las Cruces", "NM", "Las Cruces is the 12th worst city for water availability.", 0.12, "medium", "Las Cruces is the 12th worst city for water availability.", "las cruces, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 11, "Cleveland", "OH", "Cleveland is the 11th worst city for water availability.", 0.10, "medium", "Cleveland is the 11th worst city for water availability.", "cleveland, drought, water problems");

insert into water_avail VALUES 
(NULL, 10, "El Paso", "TX", "El Paso is the 10th worst city for water availability.", 0.07, "high", "El Paso is the 10th worst city for water availability.", "el paso, drought, water problems");

insert into water_avail VALUES 
(NULL, 9, "Mission Viejo", "CA", "Mission Viejo is the 9th worst city for water availability.", 0.06, "high", "Mission Viejo is the 9th worst city for water availability.", "mission viejo, drought, water problems");

insert into water_avail VALUES  
(NULL, 8, "Riverside-San Bernadino", "CA", "Riverside-San Bernadino is the 8th worst city for water availability.", 0.06, "high", "Riverside-San Bernadino is the 8th worst city for water availability.", "riverside, san bernadino, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 7, "Salt Lake City", "UT", "Salt Lake City is the 7th worst city for water availability.", 0.05, "high", "Salt Lake City is the 7th worst city for water availability.", "salt lake city, drought, water problems");

insert into water_avail VALUES 
(NULL, 6, "Los Angeles-Long Beach-Santa Ana", "CA", "Los Angeles-Long Beach-Santa Ana is the 6th worst city for water availability.", 0.05, "high", "Los Angeles-Long Beach-Santa Ana is the 6th worst city for water availability.", "los angeles, long beach, santa ana, drought, water problems");

insert into water_avail VALUES 
(NULL, 5, "San Diego", "CA", "San Diego is the 5th worst city for water availability.", 0.05, "high", "San Diego is the 5th worst city for water availability.", "san diego, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 4, "San Jose", "CA ", "San Jose is the 4th worst city for water availability.", 0.04, "high", "San Jose is the 4th worst city for water availability.", "san jose, drought, water problems"); 

insert into water_avail VALUES 
(NULL, 3, "Lincoln", "NE", "Lincoln is the 3rd worst city for water availability.", 0.04, "high", "Lincoln is the 3rd worst city for water availability.", "lincoln, drought, water problems");

insert into water_avail VALUES 
(NULL, 2, "Miami-Ft. Lauderdale", "FL", "Miami-Ft. Lauderdale is the 2nd worst city for water availability.", 0.04, "high", "Miami-Ft. Lauderdale is the 2nd worst city for water availability.", "miami, ft. lauderdale, drought, water problems");

insert into water_avail VALUES 
(NULL, 1, "San Antonio", "TX", "San Antonio is the worst city for water availability.", 0.04, "high", "San Antonio is the worst city for water availability.", "san antonio, drought, water problems"); 



