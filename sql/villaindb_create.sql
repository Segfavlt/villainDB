#####################
# Database Creation #
#####################

drop user if exists 'villainDB'@'localhost';;

create user if not exists 'villainDB'@'localhost' identified by 'villaindb';


drop database if exists villainDB;

create database villainDB;

use villainDB;

##################
# Table Creation #
##################

create table if not exists users (
  id int primary key auto_increment,
  passwd char(95) not null
) engine=innodb auto_increment=100000;

create table if not exists  roles (
  id int primary key,
  role enum('boss', 'minion', 'villain') not null
) engine=innodb;

create table if not exists user_role (
  user int primary key,
  role int not null,
  foreign key(user) references users(id)
    on update no action
    on delete cascade,
  foreign key(role) references roles(id)
    on update no action
    on delete cascade
) engine=innodb;

create table if not exists region(
  name ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') Primary Key,
  risk ENUM('D', 'C', 'B', 'A', 'S') not null
) engine=innodb;

create table if not exists base(
  id Integer Primary Key auto_increment,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Foreign Key(region) references region(name)
) engine=innodb auto_increment=1;

# managing_boss renamed to boss
create table if not exists boss(
  id Integer Primary Key,
  base Integer not null,
  effectiveness Integer not null,
  name varchar(20) not null,
  Foreign Key(id) references users(id)
    on delete cascade,
  Foreign Key(base) references base(id)
) engine=innodb;

# threatening_threat renamed to threat
create table if not exists threat(
  id Integer auto_increment Primary Key,
  risk ENUM('D', 'C', 'B', 'A', 'S') not null,
  name varchar(30) not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Foreign Key(region) references region(name)
) engine=innodb auto_increment=1;

create table if not exists mission(
  name ENUM('Assassination', 'Capture', 'Interception', 'Recon',
    'Destruction') not null,
  boss Integer not null,
  target varchar(30) not null,
  Primary Key(name, target, boss),
  Index summary (name, target),
  Foreign Key(boss) references boss(id)
	on delete cascade
) engine=innodb;

create table if not exists mission_description(
  name ENUM('Assassination', 'Capture', 'Interception', 'Recon',
    'Destruction') not null,
  target varchar(30) not null,
  description varchar(300) not null,
  Primary Key(name, target),
  Foreign Key(name, target) references mission(name, target)
    on delete cascade
) engine=innodb;

create table if not exists hero(
  id Integer Primary Key,
  identity varchar(30),
  Foreign Key(id) references threat(id)
    on delete cascade
) engine=innodb;

create table if not exists allies(
  hero Integer Primary Key,
  ally Integer not null,
  Foreign Key(hero) references hero(id),
  Foreign Key(ally) references hero(id)
) engine=innodb;


create table if not exists advanced(
  rank enum('0','1','2','3') primary key,
  class enum('minion', 'muscle', 'spy', 'tech') not null
) engine=innodb;

# assigned_minion renamed to minion
create table if not exists minion(
  id Integer Primary Key,
  grade ENUM('D', 'C', 'B', 'A', 'S') not null,
  base Integer not null,
  class enum('0','1','2','3') not null,
  Foreign Key(id) references users(id)
    on delete cascade,
  Foreign Key(base) references base(id),
  Foreign Key (class) references advanced(rank)
) engine=innodb;

create table if not exists muscle(
  id Integer Primary Key,
  ability_rating Integer not null,
  weapon varchar(20),
  Foreign Key(id) references minion(id)
    on delete cascade
) engine=innodb;

create table if not exists spy(
  id Integer Primary Key,
  ability_rating Integer not null,
  gadget varchar(20),
  Foreign Key(id) references minion(id)
    on delete cascade
) engine=innodb;

create table if not exists tech(
  id Integer Primary Key,
  ability_rating Integer not null,
  tool varchar(20),
  Foreign Key(id) references minion(id)
    on delete cascade
) engine=innodb;


############
# Triggers #
############

create trigger risk_upper_insert before insert on region for each row
set new.risk = upper(new.risk);

create trigger threat_upper_insert before insert on threat for each row
set new.risk = upper(new.risk);

create trigger minion_upper_insert before insert on minion for each row
set new.grade = upper(new.grade);


##############
# User Grant #
##############

grant all on villainDB.* to 'villainDB'@'localhost';


#########
# Views #
#########

drop view if exists spymuscletech;
drop view if exists allminions;
create view spymuscletech as select id, ability_rating from spy union select id, ability_rating from tech union select id, ability_rating from muscle;
create view allminions as select minion.id, minion.class, spymuscletech.ability_rating from minion, spymuscletech where minion.id=spymuscletech.id;
