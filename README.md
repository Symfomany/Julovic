CMF By Juju &amp; Lulu
Open Source Project -- License MIT
2012-2013
================================


1) Installation

- Unzip this package
- Configure database connexion & SMTP parameters in app/config/parameters.yml (host, database...)
- Check .htaccess to configure speedly
- Generate metadata from existing database:
    php app/console doctrine:mapping:convert yml ./src/Site/AdminBundle/Resources/config/doctrine/metadata/orm --from-database --force
- Import the schema:
    php app/console doctrine:mapping:import AdminBundle annotation
- Build related entity classes:
    php app/console doctrine:generate:entities AdminBundle
- Generate CRUD modules:
    php app/console generate:doctrine:crud --entity=AdminBundle:Articles --format=yml --with-write --no-interaction
- Configure your routes in AdminBundle:config.yml
- Enjoy with your virtualhost :) 


================================

Notices:

 - Not use app.php un URI to access production environment
 - Remove Configurator route for production
 - Use APC for Production
 - Links in top menu are configurable in config.yml
 - Route for Dashboard called by "Home"