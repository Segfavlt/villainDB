#####################
# Database Creation #
#####################

create database project;

use project;

##################
# Table Creation #
##################

create table if not exists region(
  name ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') Primary Key,
  risk char(1) not null
) ENGINE=INNODB;

create table if not exists base(
  id Integer not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Primary Key(id, region),
  Foreign Key(region) references region(name)
) ENGINE=INNODB;

# managing_boss renamed to boss
create table if not exists boss(
  id Integer auto_increment Primary Key,
  base Integer not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  effectiveness Integer not null,
  name varchar(20) not null,
  Foreign Key(base) references base(id),
  Foreign Key(region) references region(name)
) ENGINE=INNODB;

# threatening_threat renamed to threat
create table if not exists threat(
  id Integer auto_increment Primary Key,
  risk char(1) not null,
  name varchar(30) not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Foreign Key(region) references region(name)
) ENGINE=INNODB;

create table if not exists mission(
  name ENUM('Assassination', 'Capture', 'Interception', 'Recon',
    'Destruction') not null,
  target varchar(30) not null,
  boss Integer not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  Primary Key(name, target, boss),
  Index summary (name, target),
  Foreign Key(boss) references boss(id),
  Foreign Key(region) references region(name)
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
  id Integer auto_increment Primary Key,
  grade char(1) not null,
  region ENUM('North America', 'South America', 'Africa',
    'Europe', 'Asia') not null,
  base Integer not null,
  Foreign Key(region) references region(name),
  Foreign Key(base) references base(id)
) ENGINE=INNODB;

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
