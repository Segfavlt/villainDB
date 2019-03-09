use villaindb;

create table if not exists user (
  id int primary key,
  username varchar(20) not null,
  passwd char(95) not null
  foreign key(id) references
) ENGINE=INNODB;

create table if not exists  roles (
  id int primary key,
  role enum('boss', 'minion', 'villain') not null
) ENGINE=INNODB;

create table if not exists user_role (
  user int primary key,
  role int not null,
  foreign key(user) references user(id)
    on update no action
    on delete cascade,
  foreign key(role) references roles(id)
    on update no action
    on delete cascade
) ENGINE=INNODB;
