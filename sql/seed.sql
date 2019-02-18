use villainDB;


###############
# Table: base #
###############
# id / region #
###############

INSERT INTO base
VALUES (1, 'North America');

INSERT INTO base
VALUES (2, 'Europe');

INSERT INTO base
VALUES (3, 'Africa');

INSERT INTO base
VALUES (4, 'South America');

INSERT INTO base
VALUES (5, 'Asia');

INSERT INTO base
VALUES (6, 'North America');

INSERT INTO base
VALUES (7, 'Europe');

INSERT INTO base
VALUES (8, 'Africa');

INSERT INTO base
VALUES (9, 'South America');

INSERT INTO base
VALUES (10, 'Asia');

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

###############
# Table: boss #
####################################
# id / base / effectiveness / name #
####################################

INSERT INTO boss(base, effectiveness, name)
VALUES (1, 5, 'Lazy Eye');

INSERT INTO boss
VALUES (2, 6, 'Fuhrer');

INSERT INTO boss
VALUES (3, 6, 'Mad General');

INSERT INTO boss
VALUES (4, 9, 'Narco');

INSERT INTO boss
VALUES (5, 9, 'The Charizard');

INSERT INTO boss
VALUES (6, 5, 'Captain Crook');

INSERT INTO boss
VALUES (7, 6, 'Gill');

INSERT INTO boss
VALUES (8, 6, 'Timon');

INSERT INTO boss
VALUES (9, 9, 'El Loco');

INSERT INTO boss
VALUES (10, 9, 'Ambrocio');

###########
# mission #
########################
# name / boss / target #
########################

INSERT INTO mission
VALUES ('Assassination', 1, 'Gordon Bates');

INSERT INTO mission
VALUES ('Assassination', 2, 'Rebecca Guerra');

INSERT INTO mission
VALUES ('Assassination', 3, 'Hassan Karim');

INSERT INTO mission
VALUES ('Assassination', 4, 'Zhang Huang');

INSERT INTO mission
VALUES ('Capture', 5, 'Imelda Barrio');

INSERT INTO mission
VALUES ('Capture', 6, 'Steve McNeil');

INSERT INTO mission
VALUES ('Capture', 7, 'Jesse Kramer');

INSERT INTO mission
VALUES ('Capture', 8, 'Carlos Ortiz');

INSERT INTO mission
VALUES ('Interception', 9, 'Esmeralda Transmission Tower');

INSERT INTO mission
VALUES ('Interception', 10, 'UPS Truck #234');

INSERT INTO mission
VALUES ('Interception', 01, 'Remote Observation Center');

INSERT INTO mission
VALUES ('Interception', 02, 'Prison Convoy');

INSERT INTO mission
VALUES ('Recon', 1, 'CSIS Headquarters');

INSERT INTO mission
VALUES ('Recon', 2, 'Steel Factory');

INSERT INTO mission
VALUES ('Recon', 3, 'Cairo International Airport');

INSERT INTO mission
VALUES ('Recon', 4, 'Puerto De Balboa');
