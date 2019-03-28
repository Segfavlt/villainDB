#Setup Instructions

This project is designed to be installed on a Ubuntu Linux host running apache2 httpd, php7.2+ and mariadb server 10.3.13+ (or equivalent with support for transaction flags)
####XAMPP IS NOT SUPPORTED. As of the time of writing, it doesn't have the necessary version for mariadb. This application is designed to be run on an up-to-date Linux host.

##Requirements
1. Override the mysql version string if required. Known working my.cnf entry: version=10.3.13-MariaDB
2. Apache2, php, mysql must be configured
    Apache2 must have the php mod and rewrite mod enabled
    Mysql is assumed to be running on localhost
    PHP-mysql must be installed


####mysql innodb_version must be > 5.6.5 Please note: if xampp is used to test this project the bundled mysql does not meet above innodb requirement and will show an error processing transactions. This should not affect single user functionality of the project.

##Setup
1. Ensure requirements are met.
2. Copy villaindb.conf to Apache’s sites-enabled directory, disable any other site not used
3. Appropriate services(apache, mariadb) must be running.
4. Run sql scripts against instance:
    villaindb_create.sql
    villaindb_seed.sql
    the .sql scripts must be run using a user with the GRANT OPTION privilege
5. extract contents of [archive]/html to /var/www/html
