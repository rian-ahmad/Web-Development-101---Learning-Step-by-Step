create database family;

use family;

create table `FamilyMembers`(
MemberID int unsigned not null auto_increment primary key,
FirstName varchar(80) not null,
LastName varchar(80) not null,
Age int(3) unsigned not null,
Gender ENUM('Male','Female') not null,
Relationship varchar(80) not null
);

INSERT INTO `FamilyMembers` VALUES
(NULL, 'Robert', 'Williams', 52, 'Male', 'Father'),
(NULL, 'Martha', 'Williams', 49, 'Female', 'Mother'),
(NULL, 'Doreen', 'Williams', 18, 'Female', 'Sister'),
(NULL, 'Jace', 'Williams', 13, 'Female', 'Adoptive Sister'),
(NULL, 'Benson', 'Williams', 22, 'Male', 'Brother'),
(NULL, 'Timothy', 'James', 23, 'Male', 'Cousin');

select * from `familymembers`;