Tabletop Support

Prerequisites
-----------
You need a functional apache2 and sql server.

You need composer to install PHP packages.

Installation
-----------
```
composer install
php bin/console d:d:c
php bin/console d:s:u --dump-sql --force
```
Update your apache site conf:
```
#/etc/apache2/sites-available/
<VirtualHost *:80>
  ServerName YourServerName
  DocumentRoot "/var/www/TTSupport"

  <Directory "/var/www/TTSupport">
    AllowOverride All
    Order Allow,Deny
    Allow from All

      <IfModule mod_rewrite.c>
        Options -MultiViews
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.*)$ app.php [QSA,L]
      </IfModule>
  </Directory>

  <Directory /var/www/TTSupport/web/bundles>
    <IfModule mod_rewrite.c>
        RewriteEngine Off
    </IfModule>
  </Directory>

  ErrorLog /var/log/apache2/error_support.log
</VirtualHost>
```

Then open http://localhost/ in your web browser to enjoy your Blood Bowl manager.
## Routes ##
* /bb for the scoreboard
* /login access to star wars ffg roller
* /create initiate user for ffg roller










INSTALL
=====================
git clone https://github.com/Lubricat/SWFFGRoller
composer install
update app/config/parameters.yml

php bin/console d:d:c
php bin/console d:s:u --force

Use the /create in LoginController to create simple user


ROLES
=====================
ROLE_USER can rolls dice
ROLE_ADMIN can view roll of each player on the viewer frame
