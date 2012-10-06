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
- Enjoy with your virtualhost :) 