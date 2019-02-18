use villainDB;


########
# base #
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
  'S'
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
  3,
  5,
  'Taser Pen',
);

insert into spy values(
  5,
  1,
  'Polyurethane cloak'
);

insert into spy values(
  4,
  7,
  'Sonic Blaster'
)

insert into spy values(
  9,
  2,
  'Hologram Projector'
);

insert into spy values(
  11,
  8,
  'Laser Cutter'
);


##########
# Muscle #
##########


insert into muscle values(
  2,
  9,
  'MP5'
);

insert into muscle values(
  6,
  3,
  'Barrett M82'
);

insert into muscle values(
  13,
  5,
  'De-atomizer'
);

insert into muscle values(
  17,
  7,
  'Plasma Cannon'
);

insert into muscle values(
  20,
  2,
  'AK-47'
);

########
# Tech #
########

insert into tech values(
  19,
  4,
  "Hydospanner"
);

insert into tech values(
  18,
  8,
  'Holographic scanner'
);

insert into tech values(
  1,
  2,
  '3D Printer'
);

insert into tech values(
  8,
  5,
  'Foam Steel'
);

insert into tech values(
  14,
  4,
  'Temporal Manipulator'
);

########
# boss #
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
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Assassination',
  'Rebecca Guerra',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Assassination',
  'Hassan Karim',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Assassination',
  'Zhang Huang',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Capture',
  'Imelda Barrio',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Capture',
  'Steve McNeil',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Capture',
  'Jesse Kramer',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Capture',
  'Carlos Ortiz',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Interception',
  'Esmeralda Transmission Tower',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
);

insert into mission_description values(
  'Interception',
  'UPS Truck #234'
);

insert into mission_description values(
  'Interception',
  'Remote Observation Center',
  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean'
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