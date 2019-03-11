use villainDB;

#########
# Users #
#########

insert into users(username, passwd) values(
  'villain',
  'password'
);

insert into users(username, passwd) values(
  'boss1',
  'password'
);

insert into users(username, passwd) values(
  'boss2',
  'password'
);

insert into users(username, passwd) values(
  'boss3',
  'password'
);

insert into users(username, passwd) values(
  'boss4',
  'password'
);

insert into users(username, passwd) values(
  'boss5',
  'password'
);

insert into users(username, passwd) values(
  'boss6',
  'password'
);

insert into users(username, passwd) values(
  'boss7',
  'password'
);

insert into users(username, passwd) values(
  'boss8',
  'password'
);

insert into users(username, passwd) values(
  'boss9',
  'password'
);

insert into users(username, passwd) values(
  'boss10',
  'password'
);

insert into users(username, passwd) values(
  'minion1',
  'password'
);

insert into users(username, passwd) values(
  'minion2',
  'password'
);

insert into users(username, passwd) values(
  'minion3',
  'password'
);

insert into users(username, passwd) values(
  'minion4',
  'password'
);

insert into users(username, passwd) values(
  'minion5',
  'password'
);

insert into users(username, passwd) values(
  'minion6',
  'password'
);

insert into users(username, passwd) values(
  'minion7',
  'password'
);

insert into users(username, passwd) values(
  'minion8',
  'password'
);

insert into users(username, passwd) values(
  'minion9',
  'password'
);

insert into users(username, passwd) values(
  'minion10',
  'password'
);

insert into users(username, passwd) values(
  'minion11',
  'password'
);

insert into users(username, passwd) values(
  'minion12',
  'password'
);

insert into users(username, passwd) values(
  'minion13',
  'password'
);

insert into users(username, passwd) values(
  'minion14',
  'password'
);

insert into users(username, passwd) values(
  'minion15',
  'password'
);

insert into users(username, passwd) values(
  'minion16',
  'password'
);

insert into users(username, passwd) values(
  'minion17',
  'password'
);

insert into users(username, passwd) values(
  'minion18',
  'password'
);

insert into users(username, passwd) values(
  'minion19',
  'password'
);

insert into users(username, passwd) values(
  'minion20',
  'password'
);

insert into users(username, passwd) values(
  'minion21',
  'password'
);

insert into users(username, passwd) values(
  'minion22',
  'password'
);

insert into users(username, passwd) values(
  'minion23',
  'password'
);



#########
# Roles #
#########

insert into roles(id, role) values(
  1,
  'villain'
);

insert into roles(id, role) values(
  2,
  'boss'
);
insert into roles(id, role) values(
  3,
  'minion'
);

##############
# User Roles #
##############

# villain #

insert into user_role(user, role) values(
  1,
  1
);

# bosses #

insert into user_role(user, role) values(
  2,
  2
);

insert into user_role(user, role) values(
  3,
  2
);

insert into user_role(user, role) values(
  4,
  2
);

insert into user_role(user, role) values(
  5,
  2
);

insert into user_role(user, role) values(
  6,
  2
);

insert into user_role(user, role) values(
  7,
  2
);

insert into user_role(user, role) values(
  8,
  2
);

insert into user_role(user, role) values(
  9,
  2
);

insert into user_role(user, role) values(
  10,
  2
);

insert into user_role(user, role) values(
  11,
  2
);

# minions #

insert into user_role(user, role) values(
  12,
  3
);

insert into user_role(user, role) values(
  13,
  3
);

insert into user_role(user, role) values(
  14,
  3
);

insert into user_role(user, role) values(
  15,
  3
);

insert into user_role(user, role) values(
  16,
  3
);

insert into user_role(user, role) values(
  17,
  3
);

insert into user_role(user, role) values(
  18,
  3
);

insert into user_role(user, role) values(
  19,
  3
);

insert into user_role(user, role) values(
  20,
  3
);

insert into user_role(user, role) values(
  21,
  3
);

insert into user_role(user, role) values(
  22,
  3
);

insert into user_role(user, role) values(
  23,
  3
);

insert into user_role(user, role) values(
  24,
  3
);

insert into user_role(user, role) values(
  25,
  3
);

insert into user_role(user, role) values(
  26,
  3
);

insert into user_role(user, role) values(
  27,
  3
);

insert into user_role(user, role) values(
  28,
  3
);

insert into user_role(user, role) values(
  29,
  3
);

insert into user_role(user, role) values(
  30,
  3
);

insert into user_role(user, role) values(
  31,
  3
);

insert into user_role(user, role) values(
  32,
  3
);

insert into user_role(user, role) values(
  33,
  3
);

insert into user_role(user, role) values(
  34,
  3
);

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

insert into minion(id, grade, base) values(
   12,
  'B',
   1
);

insert into minion(id, grade, base) values(
   13,
  'D',
   8
);

insert into minion(id, grade, base) values(
   14,
  'S',
   6
);

insert into minion(id, grade, base) values(
   15,
  'S',
   1
);

insert into minion(id, grade, base) values(
   16,
  'A',
   7
);

insert into minion(id, grade, base) values(
   17,
  'C',
   5
);

insert into minion(id, grade, base) values(
   18,
  'D',
   4
);

insert into minion(id, grade, base) values(
   19,
  'B',
   10
);

insert into minion(id, grade, base) values(
   20,
  'A',
   9
);

insert into minion(id, grade, base) values(
   21,
  'D',
   2
);

insert into minion(id, grade, base) values(
   22,
  'A',
   4
);

insert into minion(id, grade, base) values(
   23,
  'B',
   3
);

insert into minion(id, grade, base) values(
   24,
  'S',
   5
);

insert into minion(id, grade, base) values(
   25,
  'D',
   1
);

insert into minion(id, grade, base) values(
   26,
  'A',
   4
);

insert into minion(id, grade, base) values(
   27,
  'S',
   10
);

insert into minion(id, grade, base) values(
   28,
  'A',
   8
);

insert into minion(id, grade, base) values(
   29,
  'S',
   2
);

insert into minion(id, grade, base) values(
   30,
  'A',
   9
);

insert into minion(id, grade, base) values(
   31,
  'S',
   7
);

insert into minion(id, grade, base) values(
   32,
  'A',
   4
);

insert into minion(id, grade, base) values(
   33,
  'A',
   1
);

insert into minion(id, grade, base) values(
   34,
  'S',
   9
);

#######
# Spy #
#######

insert into spy values(
  12,
  5,
  'Taser Pen'
);

insert into spy values(
  13,
  1,
  'Polyurethane cloak'
);

insert into spy values(
  14,
  7,
  'Sonic Blaster'
);

insert into spy values(
  15,
  2,
  'Hologram Projector'
);

insert into spy values(
  16,
  8,
  'Laser Cutter'
);


##########
# Muscle #
##########


insert into muscle values(
  17,
  9,
  'MP5'
);

insert into muscle values(
  18,
  3,
  'Barrett M82'
);

insert into muscle values(
  19,
  5,
  'De-atomizer'
);

insert into muscle values(
  20,
  7,
  'Plasma Cannon'
);

insert into muscle values(
  21,
  2,
  'AK-47'
);

########
# Tech #
########

insert into tech values(
  22,
  4,
  "Hydospanner"
);

insert into tech values(
  23,
  8,
  'Holographic scanner'
);

insert into tech values(
  24,
  2,
  '3D Printer'
);

insert into tech values(
  25,
  5,
  'Foam Steel'
);

insert into tech values(
  26,
  4,
  'Temporal Manipulator'
);

########
# Boss #
########

insert into boss(id, base, effectiveness, name) values(
  11,
  1,
  5,
  'Crazy Eyes'
);

insert into boss(id, base, effectiveness, name) values(
  2,
  2,
  6,
  'Vader'
);

insert into boss(id, base, effectiveness, name) values(
  3,
  3,
  6,
  'Mad General'
);

insert into boss(id, base, effectiveness, name) values(
  4,
  4,
  9,
  'Narco'
);

insert into boss(id, base, effectiveness, name) values(
  5,
  5,
  9,
  'The Charizard'
);

insert into boss(id, base, effectiveness, name) values(
  6,
  6,
  5,
  'Captain Crook'
);

insert into boss(id, base, effectiveness, name) values(
  7,
  7,
  6,
  'Gill'
);

insert into boss(id, base, effectiveness, name) values(
  8,
  8,
  6,
  'Timon'
);

insert into boss(id, base, effectiveness, name) values(
  9,
  9,
  9,
  'El Loco'
);

insert into boss(id, base, effectiveness, name) values(
  10,
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
  11,
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
  11,
  'Remote Observation Center'
);

insert into mission values(
  'Interception',
  2,
  'Prison Convoy'
);

insert into mission values(
  'Recon',
  11,
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
  'Intercept and extract allied VIP "Hogtie" to friendly safehouse: use of heavy weapons authorized, expect heavy resistance of core escort elements'
);

insert into mission_description values(
  'Recon',
  'CSIS Headquarters',
  'Intelligence gathering of physical security details and patrol routes, in preparation for installation of monitoring devices to better observe anti-villain activities'
);

insert into mission_description values(
  'Recon',
  'Steel Factory',
  'Following up on rumour of potentially useful heavy industrial smelting equipment left behind, may be useful for future weapons research'
);

insert into mission_description values(
  'Recon',
  'Cairo International Airport',
  'Infiltrate and identify airport security/admin candidates for cash bribes or blackmail to expediate future smuggling of goods in region'
);

insert into mission_description values(
  'Recon',
  'Puerto De Balboa',
  'Infiltrate and assess Port of Balboa for suitability of future mission asset smuggling into North America'
);
