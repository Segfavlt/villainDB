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
# Threat #
###########

insert into threat(risk, name, region) values(
	'A',
	'Black Panther',
	'Africa'
);

insert into threat(risk, name, region) values(
	'S',
	'Russian President',
	'Europe'
);

insert into threat(risk, name, region) values(
	'C',
	'Captain America',
	'North America'
);

insert into threat(risk, name, region) values(
	'D',
	'Nacho Libre',
	'South America'
);

insert into threat(risk, name, region) values(
	'A',
	'Gundam',
	'Asia'
);

########
# Base #
########

insert into base(region)values (
  'North America'
);

insert into base(region)values (
  'Europe'
);

insert into base(region)values (
  'Africa'
);

insert into base(region)values (
  'South America'
);

insert into base(region)values (
  'Asia'
);

insert into base(region)values (
  'North America'
);

insert into base(region)values (
  'Europe'
);

insert into base(region)values (
  'Africa'
);

insert into base(region)values (
  'South America'
);

insert into base(region)values (
  'Asia'
);

###########
# Minions #
###########

insert into minion(grade, base) values(
  'B',
   1
);

insert into minion(grade, base) values(
  'D',
   8
);

insert into minion(grade, base) values(
  'S',
   6
);

insert into minion(grade, base) values(
  'S',
   1
);

insert into minion(grade, base) values(
  'A',
   7
);

insert into minion(grade, base) values(
  'C',
   5
);

insert into minion(grade, base) values(
  'D',
   4
);

insert into minion(grade, base) values(
  'B',
   10
);

insert into minion(grade, base) values(
  'A',
   9
);

insert into minion(grade, base) values(
  'D',
   2
);

insert into minion(grade, base) values(
  'A',
   4
);

insert into minion(grade, base) values(
  'B',
   3
);

insert into minion(grade, base) values(
  'S',
   5
);

insert into minion(grade, base) values(
  'D',
   1
);

insert into minion(grade, base) values(
  'A',
   4
);

insert into minion(grade, base) values(
  'S',
   10
);

insert into minion(grade, base) values(
  'A',
   8
);

insert into minion(grade, base) values(
  'S',
   2
);

insert into minion(grade, base) values(
  'A',
   9
);

insert into minion(grade, base) values(
  'S',
   7
);

insert into minion(grade, base) values(
  'A',
   4
);

insert into minion(grade, base) values(
  'A',
   1
);


insert into minion(grade, base) values(
  'S',
   9
);

#######
# Spy #
#######

insert into spy values(
  10003,
  5,
  'Taser Pen'
);

insert into spy values(
  10005,
  1,
  'Polyurethane cloak'
);

insert into spy values(
  10004,
  7,
  'Sonic Blaster'
);

insert into spy values(
  10009,
  2,
  'Hologram Projector'
);

insert into spy values(
  10011,
  8,
  'Laser Cutter'
);


##########
# Muscle #
##########


insert into muscle values(
  10002,
  9,
  'MP5'
);

insert into muscle values(
  10006,
  3,
  'Barrett M82'
);

insert into muscle values(
  10013,
  5,
  'De-atomizer'
);

insert into muscle values(
  10017,
  7,
  'Plasma Cannon'
);

insert into muscle values(
  10020,
  2,
  'AK-47'
);

########
# Tech #
########

insert into tech values(
  10019,
  4,
  "Hydospanner"
);

insert into tech values(
  10018,
  8,
  'Holographic scanner'
);

insert into tech values(
  10001,
  2,
  '3D Printer'
);

insert into tech values(
  10008,
  5,
  'Foam Steel'
);

insert into tech values(
  10014,
  4,
  'Temporal Manipulator'
);

########
# Boss #
########

insert into boss(base, effectiveness, name) values(
  1,
  5,
  'Lazy Eye'
);

insert into boss(base, effectiveness, name) values(
  2,
  6,
  'Fuhrer'
);

insert into boss(base, effectiveness, name) values(
  3,
  6,
  'Mad General'
);

insert into boss(base, effectiveness, name) values(
  4,
  9,
  'Narco'
);

insert into boss(base, effectiveness, name) values(
  5,
  9,
  'The Charizard'
);

insert into boss(base, effectiveness, name) values(
  6,
  5,
  'Captain Crook'
);

insert into boss(base, effectiveness, name) values(
  7,
  6,
  'Gill'
);

insert into boss(base, effectiveness, name) values(
  8,
  6,
  'Timon'
);

insert into boss(base, effectiveness, name) values(
  9,
  9,
  'El Loco'
);

insert into boss(base, effectiveness, name) values(
  10,
  9,
  'Ambrocio'
);

##########
# Hero #
##########

insert into hero values(
	1,
	'Unknown'
);

insert into hero values(
	2,
	'Vladimir Putin'
);

insert into hero values(
	3,
	'Steve Rogers'
);

insert into hero values(
	4,
	'angsty teen'
);

insert into hero values(
	5,
	'Jack Black'
);

##########
# Allies #
##########

insert into allies values(
	1,
	3
);

insert into allies values(
	2,
	5
);

insert into allies values(
	3,
	1
);

insert into allies values(
	5,
	2
);

insert into allies values(
	4,
	2
);

###########
# mission #
###########

insert into mission values(
  'Assassination',
  1,
  'Gordon Bates'
);

insert into mission values(
  'Assassination',
  2,
  'Rebecca Guerra'
);

insert into mission values(
  'Assassination',
  3,
  'Hassan Karim'
);

insert into mission values(
  'Assassination',
  4,
  'Zhang Huang'
);

insert into mission values(
  'Capture',
  5,
  'Imelda Barrio'
);

insert into mission values(
  'Capture',
  6,
  'Steve McNeil'
);

insert into mission values(
  'Capture',
  7,
  'Jesse Kramer'
);

insert into mission values(
  'Capture',
  8,
  'Carlos Ortiz'
);

insert into mission values(
  'Interception',
  9,
  'Esmeralda Transmission Tower'
);

insert into mission values(
  'Interception',
  10,
  'UPS Truck #234'
);

insert into mission values(
  'Interception',
  1,
  'Remote Observation Center'
);

insert into mission values(
  'Interception',
  2,
  'Prison Convoy'
);

insert into mission values(
  'Recon',
  1,
  'CSIS Headquarters'
);

insert into mission values(
  'Recon',
  2,
  'Steel Factory'
);

insert into mission values(
  'Recon',
  3,
  'Cairo International Airport'
);

insert into mission values(
  'Recon',
  4,
  'Puerto De Balboa'
);

#######################
# mission_description #
#######################

insert into mission_description values(
  'Assassination',
  'Gordon Bates',
  'Assassinate the Commissioner of Gotham city'
);

insert into mission_description values(
  'Assassination',
  'Rebecca Guerra',
  'Assassinate the leader of the UK parliament'
);

insert into mission_description values(
  'Assassination',
  'Hassan Karim',
  'Assassinate the top general of Egyptian military'
);

insert into mission_description values(
  'Capture',
  'Imelda Barrio',
  'Assassinate the leader of Social Liberal Party in Brazil'
);

insert into mission_description values(
  'Assassination',
  'Zhang Huang',
  'Assassinate the CEO of Japan\'s top military contractor'
);

insert into mission_description values(
  'Capture',
  'Steve McNeil',
  'Capture the vice president of the USA'
);

insert into mission_description values(
  'Capture',
  'Jesse Kramer',
  'Capture the lead scientist at the European Space Agency'
);

insert into mission_description values(
  'Capture',
  'Carlos Ortiz',
  'Capture the Ecuadorian Ambassador to Algeria'
);

insert into mission_description values(
  'Interception',
  'Esmeralda Transmission Tower',
  'Intercept communication between government and INTERPOL'
);

insert into mission_description values(
  'Interception',
  'UPS Truck #234',
  'Capture and seize valuable cargo'
);

insert into mission_description values(
  'Interception',
  'Remote Observation Center',
  'Intercept incoming transmission from International Space Station'
);

insert into mission_description values(
  'Interception',
  'Prison Convoy',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Recon',
  'CSIS Headquarters',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Recon',
  'Steel Factory',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Recon',
  'Cairo International Airport',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Recon',
  'Puerto De Balboa',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);
