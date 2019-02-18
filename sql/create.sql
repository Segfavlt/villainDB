#####################
# Database Creation #
#####################

drop database if exists villainDB;

create database villainDB;

use villainDB;

##################
# Table Creation #
##################

create table if not exists region(
  name ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') Primary Key,
  risk char(1) not null
) ENGINE=INNODB;

create table if not exists base(
  id Integer Primary Key auto_increment,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Foreign Key(region) references region(name)
) ENGINE=INNODB auto_increment=1;

# managing_boss renamed to boss
create table if not exists boss(
  id Integer auto_increment Primary Key,
  base Integer not null,
  effectiveness Integer not null,
  name varchar(20) not null,
  Foreign Key(base) references base(id)
) ENGINE=INNODB auto_increment=1;

# threatening_threat renamed to threat
create table if not exists threat(
  id Integer auto_increment Primary Key,
  risk char(1) not null,
  name varchar(30) not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Foreign Key(region) references region(name)
) ENGINE=INNODB auto_increment=1;

create table if not exists mission(
  name ENUM('Assassination', 'Capture', 'Interception', 'Recon',
    'Destruction') not null,
  boss Integer not null,
  target varchar(30) not null,
  Primary Key(name, target, boss),
  Index summary (name, target),
  Foreign Key(boss) references boss(id)
) ENGINE=INNODB;

create table if not exists mission_description(
  name ENUM('Assassination', 'Capture', 'Interception', 'Recon',
    'Destruction') not null,
  target varchar(30) not null,
  description varchar(100) not null,
  Primary Key(name, target),
  Foreign Key(name, target) references mission(name, target)
) ENGINE=INNODB;

create table if not exists hero(
  id Integer Primary Key,
  identity varchar(30),
  Foreign Key(id) references threat(id)
    on delete cascade
) ENGINE=INNODB;

create table if not exists allies(
  hero Integer Primary Key,
  ally Integer not null,
  Foreign Key(hero) references hero(id),
  Foreign Key(ally) references hero(id)
) ENGINE=INNODB;

# assigned_minion renamed to minion
create table if not exists minion(
  id Integer Primary Key auto_increment,
  grade char(1) not null,
  base Integer not null,
  Foreign Key(base) references base(id)
) ENGINE=INNODB auto_increment=10000;

create table if not exists muscle(
  id Integer Primary Key,
  att_power Integer not null,
  weapon varchar(20),
  Foreign Key(id) references minion(id)
) ENGINE=INNODB;

create table if not exists spy(
  id Integer Primary Key,
  subterfuge Integer not null,
  gadget varchar(20),
  Foreign Key(id) references minion(id)
) ENGINE=INNODB;

create table if not exists tech(
  id Integer Primary Key,
  repair_rating Integer not null,
  tool varchar(20),
  Foreign Key(id) references minion(id)
) ENGINE=INNODB;


############
# Triggers #
############

create trigger risk_upper_insert before insert on region for each row
set new.risk = upper(new.risk);

create trigger threat_upper_insert before insert on threat for each row
set new.risk = upper(new.risk);

create trigger minion_upper_insert before insert on minion for each row
set new.grade = upper(new.grade);
