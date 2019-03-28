# VillainDB

Project for Lanagara cpsc 2211. This repo contains all the necessary files to
setup the project.

This project is designed to be installed on a Ubuntu Linux host running
apache2 httpd, php7.2+ and mysql server 5.7+

## Requirements

1. Apache2, php, mysql must be configured
2. mysql innodb_version must be > 5.6.5 
Please note: if xampp is used to test this project the bundled mysql does not meet above innodb requirement and will show an error processing transactions. This should not affect funcionality of the project.

## Setup

1. Ensure requirements are met.
2. appropriate services must be running.
3. Run sql scripts against instance
4. the .sql scripts must be run using a user with the GRANT OPTION privilege
5. extract contents of html/ to /var/www/html
