<h2>Julovic 1.2</h2>

CMF By Juju &amp; Lulu
Open Source Project -- License MIT
2012-2013

================================

Welcome to the home of the Julovic Content Management Framework. 
The project is organized by the Symfony Framework and prominent open source leaders implementing the philosophy of the decoupled CMS.
 You can read learn more about the project on the about page.

================================
<h2>Mission Statement</h2>
The Symfony CMF project makes it easier for developers to add CMS functionality to applications built with the Symfony2 PHP framework. 
Key development principles for the provided set of bundles are scalability, usability, documentation and testing.

<h2>Getting started</h2>

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

<h2>Get Involved</h2>

Join zuzu38080@gmail.com

================================

<h2>Notices:</h2>

 - Not use app.php un URI to access production environment
 - Remove Configurator route for production
 - Use APC for Production
 - Links in top menu are configurable in config.yml
 - Route for Dashboard called by "Home"

================================

<h2>Architecture:</h2>

he Symfony CMF is a content management framework on top of Symfony2 PHP framework.
People can pick and choose the right approaches for their CMS without having to reimplement various bundles over again just because they for example use a different storage server. 

================================

<h2>Features</h2>:

  * Dashboard multi views
  * AST Functions Custom
  * Console Lines Classes
  * Custom Validator Constraints
  * Datafixtures for ORM
  * QRCode Package loaded
  * MultiStep Form loaded
  * Imagine Manipulation Images
  * Breadscrumb library
  * Ajax & Autocomplete functions
  * Event & Suscribers
  * Tests Units & Fcts
  * Administrateurs handler and configs


================================
<h2>Documentation</h2>

Further documentation can be found in the here but is still in its early stages. 
There is a documentation planning available describing the work to do.