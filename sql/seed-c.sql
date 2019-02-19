use villainDB;

##########
# Region #
##########

insert into region values(
	'North America',
	'S'
);

insert into region values(
	'South America',
	'C'
);

insert into region values(
	'Africa',
	'D'
);

insert into region values(
	'Europe',
	'B'
);

insert into region values(
	'Asia',
	'A'
);

###########
# Threats #
###########

insert into threat values(
	'A',
	'Black Panther'
	'Africa'
);

insert into threat values(
	'S',
	'Russian President'
	'Europe'
);

insert into threat values(
	'C',
	'Captain America'
	'North America'
);

insert into threat values(
	'D',
	'Nacho Libre'
	'South America'
);

insert into threat values(
	'A',
	'Gundam'
	'Asia'
);


##########
# Heroes #
##########

insert into hero values(
	0,
	'Unknown'
);

insert into hero values(
	1,
	'Vladimir Putin'
);

insert into hero values(
	2,
	'Steve Rogers'
);

insert into hero values(
	3,
	'angsty teen'
);

insert into hero values(
	4,
	'Jack Black'
);

##########
# Allies #
##########

insert into allies values(
	0,
	2
);

insert into allies values(
	0,
	4
);

insert into allies values(
	2,
	0
);

insert into allies values(
	2,
	4
);

insert into allies values(
	2,
	3
);