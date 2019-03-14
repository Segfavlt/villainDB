# VillainBD

Project for Lanagara cpsc 2211. This repo contains all the necessary files to
setup the project.

This project is designed to be installed on a Ubuntu Linux host running
apache2 httpd, php7.2+ and mysql server 5.7+

## Requirements

1. Update the ServerName in villaindb.conf appropriately, add corresponding
   dns enty to /etc/hosts if testing locally
2. villaindb.conf must be placed in /etc/apache2/sites-enabled.conf
3. appropriate services must be running.
4. the .sql scripts must be run using a user with the GRANT OPTION privilege


## Setup

1. Ensure requirements are met.
2. Run sql scripts against instance
3. extract contents of html/ to /var/www/html
