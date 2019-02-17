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

###############
# Table: boss #
#############################################
# id / base / effectiveness / name #
#############################################

INSERT INTO boss
VALUES (100001, 1, 5, 'Lazy Eye');

INSERT INTO boss
VALUES (100002, 2, 6, 'Fuhrer');

INSERT INTO boss
VALUES (100003, 3, 6, 'Mad General');

INSERT INTO boss
VALUES (100004, 4, 9, 'Narco');

INSERT INTO boss
VALUES (100005, 5, 9, 'The Charizard');

INSERT INTO boss
VALUES (100006, 6, 5, 'Captain Crook');

INSERT INTO boss
VALUES (100007, 7, 6, 'Gill');

INSERT INTO boss
VALUES (100008, 8, 6, 'Timon');

INSERT INTO boss
VALUES (100009, 9, 9, 'El Loco');

INSERT INTO boss
VALUES (100010, 10, 9, 'Ambrocio');

###########
# mission #
########################
# name / boss / target #
########################

INSERT INTO mission
VALUES ('Assassination', 100001, 'Gordon Bates');

INSERT INTO mission
VALUES ('Assassination', 100002, 'Rebecca Guerra');

INSERT INTO mission
VALUES ('Assassination', 100003, 'Hassan Karim');

INSERT INTO mission
VALUES ('Assassination', 100004, 'Zhang Huang');

INSERT INTO mission
VALUES ('Capture', 100005, 'Imelda Barrio');

INSERT INTO mission
VALUES ('Capture', 100006, 'Steve McNeil');

INSERT INTO mission
VALUES ('Capture', 100007, 'Jesse Kramer');

INSERT INTO mission
VALUES ('Capture', 100008, 'Carlos Ortiz');

INSERT INTO mission
VALUES ('Interception', 100009, 'Esmeralda Transmission Tower');

INSERT INTO mission
VALUES ('Interception', 100010, 'UPS Truck #234');

INSERT INTO mission
VALUES ('Interception', 100001, 'Remote Observation Center');

INSERT INTO mission
VALUES ('Interception', 100002, 'Prison Convoy');

INSERT INTO mission
VALUES ('Recon', 100001, 'CSIS Headquarters');

INSERT INTO mission
VALUES ('Recon', 100002, 'Steel Factory');

INSERT INTO mission
VALUES ('Recon', 100003, 'Cairo International Airport');

INSERT INTO mission
VALUES ('Recon', 100004, 'Puerto De Balboa');


#######################
# mission_description #
#######################
##### In Progress #####

#  INSERT INTO mission_description
#  VALUES (value1, value2, value3, ...);