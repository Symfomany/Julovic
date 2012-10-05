<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow, all" />
        <meta name="Author" content="Extreme Sensio" />
        <meta name="Language" content="en"/>
        <meta name="Copyright" content="Sensio Labs" />
        <meta name="Publisher" content="Sensio Labs" />
        <meta name="Description" content="Symfony - Open-Source PHP web framework" />
        <meta name="Keywords" content="symfony2, symfony, project, framework, php, php5, open-source, components, symphony, symfony framework, symfony tutorial" />
        <link rel="search" type="application/opensearchdescription+xml" href="http://symfony.com/opensearch/documentation.xml" title="Symfony2 documentation" />
        <link href="http://symfony.com/css/compiled/all.css?v=2" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <div id="content_wrapper" class="home">
            <div id="sln"></div>
            <div class="content">
                <div>TODO LIST Of Symfony</div>
                <pre>

<?php

/* Maincontroller.php */

// Control FirstTime
$firstime = $this->container->get('session')->get('firstime');
if ($firstime != "" && $firstime == true) {
    $errors = null;
    /* Create Medias */
    $medias_files = new MediasHandler($this->nb_files, $this->container->get('security.context'));
    for ($i = 0; $i < $this->nb_files; $i++) {
        $media = new Medias();
        $media->setIsRestaurant(true);
        $media->setRestaurant($this->user);
        $media->setDateCreated(new \Datetime('now'));
        $this->user->addMedias($media);
    }


    $form = $this->container->get('form.factory')->create(new SuscribeExtendedType($this->container), $this->user);
                    ->add('question', 'textarea', 
                            array('attr' => array('rows' => 5, 'cols' => 60), 'required' => false))
                    ->add('medias','collection', array(
                            'type' => new MediasType(),
                            'allow_add'    => true,
                            'allow_delete' => true,
                            'by_reference' => false))                    
                    ->getForm();

    /* Submission meta suscribe */
    if ($this->request->getMethod() == 'POST') {
        $form->bindRequest($this->getRequest());
        $errors = $this->container->get('validator')->validate($form);
        if ($form->isValid()) {
            $datas_form = $form->getData();
            $medias = $datas_form->getMedias();
            if (!empty($medias)) {
                foreach ($medias as $media) {
                    $media->upload('restaurants');
                }
            }
            $datas = $form->getData();
            $question = $datas->getQuestion();
            $picture = $datas->getPicture();
            $this->user->setQuestion($question);
            $this->user->setPicture($picture);
            $this->em->persist($this->user);
            $this->em->flush();
            $this->container->get('session')->setFlash('success', 'Votre compte Ã  Ã©tÃ© modifiÃ©!');
            $this->container->get('session')->remove('firsttime');
            return $this->redirect($this->generateUrl('main'));
        }
    }
    return $this->container->get('templating')->renderResponse('SiteProBundle:Main:index.html.twig', array('form' => $form->createView()));
}

Remarques dans Symfony 2:

Command : use $this->getContainer()->get() ) ...extends ContainerAwareCommand
Command: utilisation des  Syntaxe Heredoc
<<<EOT
The <info>fos:user:activate</info> command activates a user (so they will be able to log in):

  <info>php app/console fos:user:activate matthieu</info>
EOT

Récap:
$this->container->get('security.context'), $this->container->get('templating'), $this->container->get('form.factory')->renderResponse, $this->container->get('session'), 
$this->container->get('router'),$this->get('mailer');

Eviter les  public function __construct(ContainerInterface $container)

Récup les Metas:
$meta = $em->getClassMetadata(get_class($entity));
$identifier = $meta->getSingleIdentifierFieldName();

Get/Post obj: 
$this->container->get('request')->request->get('username');

Exactitude Syntaxe: if (null === $user) if (TRUE === $user),'POST' === $this->request->getMethod()

Faire des entityManager en webservices ainsi que les Handler  pour les 
 / $this->container->get('fos_user.user_manager')->updateUser($user);
 $formHandler = $this->container->get('fos_user.resetting.form.handler');
$process = $formHandler->process($user);
 
 constante en controller tel que :
     const SESSION_EMAIL = 'fos_user_send_resetting_email/email'; => static::SESSION_EMAIL)

Utiliser les notfound tel que: 404!
            throw new NotFoundHttpException(sprintf('The user with "confirmation token" does not exist for value "%s"', $token));

			
Methode Authentificate a User => set a token by new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

  protected function authenticateUser(UserInterface $user)
    {
        try {
            $this->container->get('fos_user.user_checker')->checkPostAuth($user);
        } catch (AccountStatusException $e) {
             Don't authenticate locked, disabled or expired users
            return;
        }

        $providerKey = $this->container->getParameter('fos_user.firewall_name');
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

        $this->container->get('security.context')->setToken($token);
    }
	
	Use get form data like:
	$this->form->getData(), $this->form['name']->getData()
	
	
	Constructeur typique utilisant les webservices:
	
	  public function __construct(Form $form, Request $request, UserManagerInterface $userManager)
    {
        $this->form = $form;
        $this->request = $request;
        $this->userManager = $userManager;
    }
	
Voir FOSUserBundle pour le reseting de password

Security Controller: obtenir le dernier username entrée si il est bon mais pas le mdp:
 last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecuityContext::LAST_USERNAME);

Obtenir le security token CSRF en controller:
$csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

Get a Repository in manager ()Constructor example:
   public function __construct(DocumentManager $dm, $class)
    {
        $this->dm = $dm;
        $this->repository = $dm->getRepository($class);

        $metadata = $dm->getClassMetadata($class);
        $this->class = $metadata->name;
    }
	
	
	LifeCycle in Controller:
	public function getSubscribedEvents()
    {
        return array(
            Event::prePersist,
            Event::preUpdate,
        );
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $this->handleEvent($args);
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $this->handleEvent($args);
    }...
	
	Voir UserListener in FOSUserBundle...
	
	Services charger dans services.xml ou dans la methode load() de Extension un Bundle tel que:
	    $container->setParameter('acme_hello.my_service_type', $config['my_type']);

	Global variables dans services/ config:
	kernel.name
	kernel.environment
	kernel.debug
	kernel.root_dir
	kernel.cache_dir
	kernel.logs_dir
	kernel.bundle_dirs
	kernel.bundles
	kernel.charset
	
	Couche de Sécurité à ajouter en routin pour les GET tel que:
	 requirements:
        annee:  \d{4}
        format: html
		
	Api de Symfony Dispo sur:
		http:api.symfony.com/2.0/Symfony/Component/HttpFoundation/Request.html

		Petite def du Lazy Loading:
Doctrine utilise ce qu'on appelle le Lazy Loading, 
chargement fainéant en français. 
C'est-à-dire qu'il ne va charger les entités à l'autre bout de la relation que si vous voulez accéder à ces entités. 
C'est donc pile au moment où vous faites <?php $article->getCommentaires() que Doctrine va charger les commentaires
 (avec une nouvelle requête SQL donc) puis va vous les transmettre.

targetEntity: il définit quelle est l'entité à l'autre bout de la relation, en utilisant son namespace complet.
cascade: il définit quelles sont les opérations à répercuter sur cette entité à l'autre bout de la relation. 
Par défaut, rien n'est répercuté. On n'a pas utilisé cet argument cascade dans l'exemple, 
mais sachez qu'il s'utilise comme ceci :
Persist : Cela permet de ne pas devoir faire plusieurs persist lors de nos manipulation. 
Sans ce persist, pour enregistrer une nouvelle entité propriétaire et une nouvelle entité inverse, 
il nous faut faire deux persist() : un pour chaque entité. 
Avec cet argument persist, un seul persist() sur l'entité propriétaire est nécessaire, 
 Dans notre exemple, si on supprime un Client alors l'Adresse est automatiquement supprimée 
 remove: cela empêche d'avoir une Adresse orpheline.
Il en existe deux autres, merge et detach, moins utilisés mais bien documenté : n'hésitez pas à aller voir la documentation.


Many to Many:
     * @ORM\ManyToMany(targetEntity="Namespace\Bundle\Entity\Groupe")
J'ai mis Membre comme propriétaire de la relation. 
C'est un choix que vous pouvez faire comme bon vous semble, ici. 
Mais bon, récupérer les groupes d'un membre se fera assez souvent, alors que récupérer les membres d'un groupe, moins. 

Et puis, pour récupérer les membres d'un groupe, on aura surement besoin de personnaliser la requête,
donc on le fera de toute façon depuis le GroupeRepository.

 un ArrayCollection dans le constructeur. Un ArrayCollection est un objet utilisé par Doctrine2, qui a toute les propriétés d'un tableau normal. 
 Vous pouvez faire un foreach dessus, et le traiter comme n'importe quel tableau. 
 Il dispose juste de quelques méthodes supplémentaires très pratique, que nous verrons.

Problematique du Many To Many avec attributs: Il n'y a pas de moyen simple de gérer les attributs d'une relation avec Doctrine. Pour cela, il faut esquiver en créant simplement une entité intermédiaire qui va représenter la relation, appelons-la Commande_Produit. Et c'est dans cette entité que l'on mettra les attributs de relation, comme notre quantité. Ensuite il faut bien entendu mettre en relation cette entité intermédiaire avec les deux autres entités d'origine, Commande et Produit. Pour cela, il faut logiquement faire :

Classe intermédiaire:
class Commande_Produit
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Namespace\Bundle\Entity\Commande")
     */
    private $commande;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Namespace\Bundle\Entity\Produit")
     */
    private $produit;

  On définit le getter et le setter pour Commande
    public function getCommande()
    {
        return $this->commande;
    }
    public function setCommande(\Namespace\Bundle\Entity\Commande $commande)
    {
        $this->commande = $commande;
    }

     On définit le getter et le setter pour Produit
    public function getProduit()
    {
        return $this->produit;
    }
    public function setProduit(\Namespace\Bundle\Entity\Produit $produit)
    {
        $this->produit = $produit;
    }
	
}

 Le mappedBy correspond lui à l'attribut de l'entité propriétaire
 
 La méthode findBy() est un peu plus intéressante. Comme findAll() elle permet de retourner une liste d'entité, sauf qu'elle est capable d'effectuer un filtre pour ne retourner que les entités correspondant à un critère. 
 Elle peut aussi trier les entités, et même n'en récupérer qu'un certain nombre 

 L'EntityManager est accessible depuis un repository en utilisant l'attribut "_em" : $this->_em
 
 addselect sur un join:    $qb = $this->createQueryBuilder('a')
               ->join('a.commentaires', 'c')
               ->addSelect('c');
			   
On  peut mettre des règles de validation sur n'importe quel objet, qui n'est pas forcément entité.
			   
$form->isValid()  ==   $liste_erreurs = $validator->validate($article);

un getter est une méthode qui commence le plus souvent par "get", mais qui peut également commencer par "is"
      
      /**
	 * @Assert\True()
	 */
	public function isArticleValid()
	{
		return false;
	}
	Nommer le getter "is + le nom d'un attribut" 
	Validateur personnaliser sur un champ d'attribut etranger

	   /**
     * @Assert\Valid()
     */
    private $b;
   
   Callback General: @Assert\Callback(methods={"contenuValide"})
   public function contenuValide(ExecutionContext $context){} => $context->addViolation('Contenu invalide car il contient un mot interdit.', array(), null);

   Privilege des ParamConverter: Pas de voirAction($id) mais plutot privilégier le public function voirAction( Article $article )


 Génération de pdf
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
                
        $html = $this->container->get('templating')->renderResponse('SiteProBundle:Main:coucou.html.twig');
        $response->setStatusCode(200); 
        $response->headers->set('Content-Type', 'application/pdf'); 
        $response->headers->set('Content-Disposition', sprintf('attachment;filename="%s.pdf"', "meeeokos")); 
        $response->headers->set('Content-Type', 'application/force-download');
        $response->setContent($html->getContent());
        
        return $this->container->get('io_tcpdf')->quick_pdf($response->getContent(), 'facture.pdf', 'D');
load 
         $factures_dir = $this->container->get('request')->server->get('DOCUMENT_ROOT') . '/uploads/factures/'.$user->getId();
        
         Création du dossier s'il n'existe pas
        if(!is_dir($factures_dir))
            mkdir ($factures_dir);
        
         Note pour Julien le dieu :
         la variable "factures_dir" m'affiche : /Applications/MAMP/htdocs/uploads/factures/116 alors qu'elle devrait m'afficher le chemin jusqu'à web
         Sinon j'ai fait des tests pour créer le dossier du l'id_restaurateur dans factures s'il n'existait pas. J'ai changer les paramètres pour le zip pour éviter d'avoir toute la structure
         et j'ai fait plusieurs essais pour vois si tout fonctionnait correctement. T'aurai du me voir, j'étais trop content :D

         Zip all archives
        $zip = new \ZipArchive();
        
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
                
        $html = $this->container->get('templating')->renderResponse('SiteProBundle:Main:coucou.html.twig');
        $response->setStatusCode(200); 
        $response->headers->set('Content-Type', 'application/pdf'); 
        $response->headers->set('Content-Disposition', sprintf('attachment;filename="%s.pdf"', "meeeokos")); 
        $response->headers->set('Content-Type', 'application/force-download');
        $response->setContent($html->getContent());
        
        $nom = 'facture_'.md5( uniqid()).'.pdf';
        
         Création du pdf
        $this->container->get('io_tcpdf')->quick_pdf($response->getContent(), $factures_dir.'/'.$nom, 'F');
        
        $invoice = new Invoice();
        $invoice->setRestaurant($user);
        $invoice->setFilename($nom);
        $em = $this->container->get('doctrine.orm.entity_manager');
        $em->persist($invoice);
        $em->flush();
        if ($zip->open( $this->container->get('request')->server->get('DOCUMENT_ROOT').'/uploads/factures/'.$user->getId().'/Zip.zip', \ZipArchive::CREATE) === true) {
           return true;

        $factures_path = $this->container->get('request')->server->get('DOCUMENT_ROOT') . '/uploads/factures/'.$user->getId().'/'.$nom;
        
        if($nom){
         Ajout d’un fichier.
            if(!$zip->addFile($factures_path, $nom))
                    echo 'Impossible d&#039;ajouter &quot;'.$nom.'&quot;.<br/>';
        }

         Et on referme l'archive.
            $zip->close();
        } else {
            echo 'Impossible d&#039;ouvrir &quot;Zip.zip<br/>';
         Traitement des erreurs avec un switch(), par exemple.
        }
        ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        Voici ce qu'il faut insérer pour ne pas oublier:

    Add: ajouter des bouts de requete:

 example6: how to define: "SELECT u FROM User u WHERE u.id = ? ORDER BY u.name ASC" using QueryBuilder string support
$qb->add('select', 'u')
   ->add('from', 'User u')
   ->add('where', 'u.id = ?1')
   ->add('orderBy', 'u.name ASC');


Add where 1..100

 ->add('from', 'User u')
   ->add('where', 'u.id = ?1')
   ->add('orderBy', 'u.name ASC');
   ->setParameter(1, 100);  Sets ?1 to 100


Avec identifiant:

 ->add('where', 'u.id = :identifier')
   ->add('orderBy', 'u.name ASC');
   ->setParameter('identifier', 100); /


Get Parameters :

 See example above
$params = qb->getParameters(array(1, 2));
 Equivalent to
$param  = array($qb->getParameter(1), $qb->getParameter(2));


Use Expr():

 example8: QueryBuilder port of: "SELECT u FROM User u WHERE u.id = ? OR u.nickname LIKE ? ORDER BY u.surname DESC" using Expr class
$qb->add('select', $qb->expr()->select('u'))
   ->add('from', $qb->expr()->from('User', 'u'))
   ->add('where', $qb->expr()->orx(
       $qb->expr()->eq('u.id', '?1'),
       $qb->expr()->like('u.nickname', '?2')
   ))
   ->add('orderBy', $qb->expr()->orderBy('u.surname', 'ASC'));


Serializer une entité est trop peu recommandé:

 Si vous avez l'intention de sérialiser (et unserialize) cas d'entités qui détiennent encore des références à des objets proxy que vous pouvez rencontrer des problèmes avec les propriétés privées en raison de limitations techniques.

Rappel des types sous Doctrine:

    string: Type that maps an SQL VARCHAR to a PHP string.
    integer: Type that maps an SQL INT to a PHP integer.
    smallint: Type that maps a database SMALLINT to a PHP integer.
    bigint: Type that maps a database BIGINT to a PHP string.
    boolean: Type that maps an SQL boolean to a PHP boolean.
    decimal: Type that maps an SQL DECIMAL to a PHP double.
    date: Type that maps an SQL DATETIME to a PHP DateTime object.
    time: Type that maps an SQL TIME to a PHP DateTime object.
    datetime: Type that maps an SQL DATETIME/TIMESTAMP to a PHP DateTime object.
    text: Type that maps an SQL CLOB to a PHP string.
    object: Type that maps a SQL CLOB to a PHP object using serialize() and unserialize()
    array: Type that maps a SQL CLOB to a PHP object using serialize() and unserialize()
    float: Type that maps a SQL Float (Double Precision) to a PHP double. IMPORTANT: Works only with locale settings that use decimal points as separator.

Rapel Column:

    type: (optional, defaults to ‘string’) The mapping type to use for the column.
    name: (optional, defaults to field name) The name of the column in the database.
    length: (optional, default 255) The length of the column in the database. (Applies only if a string-valued column is used).
    unique: (optional, default FALSE) Whether the column is a unique key.
    nullable: (optional, default FALSE) Whether the database column is nullable.
    precision: (optional, default 0) The precision for a decimal (exact numeric) column. (Applies only if a decimal column is used.)
    scale: (optional, default 0) The scale for a decimal (exact numeric) column. (Applies only if a decimal column is used.)



Id avec Autoincrémente:

 @Id @Column(type="integer") */



    AUTO (default): Tells Doctrine to pick the strategy that is preferred by the used database platform. The preferred strategies are IDENTITY for MySQL, SQLite and MsSQL and SEQUENCE for Oracle and PostgreSQL. This strategy provides full portability.
    SEQUENCE: Tells Doctrine to use a database sequence for ID generation. This strategy does currently not provide full portability. Sequences are supported by Oracle and PostgreSql.
    IDENTITY: Tells Doctrine to use special identity columns in the database that generate a value on insertion of a row. This strategy does currently not provide full portability and is supported by the following platforms: MySQL/SQLite (AUTO_INCREMENT), MSSQL (IDENTITY) and PostgreSQL (SERIAL).
    TABLE: Tells Doctrine to use a separate table for ID generation. This strategy provides full portability. *This strategy is not yet implemented!*
    NONE: Tells Doctrine that the identifiers are assigned (and thus generated) by your code. The assignment must take place before a new entity is passed to EntityManager#persist. NONE is the same as leaving off the @GeneratedValue entirely.





Quoted reserved words:

/** @Column(name="`number`", type="integer") */



Unidirectional association: pas de mappedBy. Bidirectionnal: mappedby + inversedby => ils vont ensemble

    /**
     * @OneToOne(targetEntity="Shipping")
     * @JoinColumn(name="shipping_id", referencedColumnName="id")
     */
    private $shipping;



Manytoone unidrectionnelle

  /**
     * @ManyToOne(targetEntity="Address")
     * @JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;



Ordering Collection:

  /**
     * @ManyToMany(targetEntity="Group")
     * @OrderBy({"name" = "ASC"})
     */
    private $groups;




Mapped Superclass:

/** @Entity */
class EntitySubClass extends MappedSuperclassBase
{



Single Table Inheritance:

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"person" = "Person", "employee" = "Employee"})
 */
class Person
{
     ...
}

/**
 * @Entity
 */
class Employee extends Person
{
     ...
}



This strategy inherently requires multiple JOIN operations to perform just about any query which can have a negative impact on performance, especially with large tables and/or large hierarchies. 


New find of Doctrine:

$article = $entityManager->find('CMS\Article', 1234);



Example Test Lazy Loading:

 Lazy Loading Proxies pass instanceof tests:
if ($article->getAuthor() instanceof User) {
     a User Proxy is a generated "UserProxy" class
}



 Article::$comments passes instanceof tests for the Collection interface
 But it will NOT pass for the ArrayCollection interface
if ($article->getComments() instanceof \Doctrine\Common\Collections\Collection) {
    echo "This will always be true!";
}



Détacher une entité des opérations cascades en persist:

$em->detach($entity);



Merger (inverse de detacher) les entité entre elle:

$detachedEntity = unserialize($serializedEntity);  some detached entity
$entity = $em->merge($detachedEntity);




Simple conditions: findall avec filtre:

 All users that are 20 years old
$users = $em->getRepository('MyProject\Domain\User')->findBy(array('age' => 20));

 All users that are 20 years old and have a surname of 'Miller'
$users = $em->getRepository('MyProject\Domain\User')->findBy(array('age' => 20, 'surname' => 'Miller'));

 A single user by its nickname
$user = $em->getRepository('MyProject\Domain\User')->findOneBy(array('nickname' => 'romanb'));



Lazy Loading Contains Object:

$user->getFavorites()->contains($favoriteComment);  TRUE
$favoriteComment->getUserFavorites()->contains($user);  FALSE



Transitive Persistence:

    persist : Cascades persist operations to the associated entities.
    remove : Cascades remove operations to the associated entities.
    merge : Cascades merge operations to the associated entities.
    detach : Cascades detach operations to the associated entities.
    all : Cascades persist, remove, merge and detach operations to associated entities.


Transaction Implicite:

$user = new User;
$user->setName('George');
$em->persist($user);
$em->flush();


Transaction Explicite:

$em->getConnection()->beginTransaction();  suspend auto-commit
try {
    ... do some work
    $user = new User;
    $user->setName('George');
    $em->persist($user);
    $em->flush();
    $em->getConnection()->commit();
} catch (Exception $e) {
    $em->getConnection()->rollback();
    $em->close();
    throw $e;
}



Events Manager: (http:docs.doctrine-project.org/projects/doctrine-orm/en/2.0.x/reference/events.html)

Voir EventManager et SuscriberEvents

1.<?php

$evm = new EventManager();


2. Constructor:

public function __construct($evm)
    {
        $evm->addEventListener(array(self::preFoo, self::postFoo), $this);
    }



Puis, on dispatch:

$evm->dispatchEvent(EventTest::preFoo);
$evm->dispatchEvent(EventTest::postFoo);



Liste des Lifecycle:


    preRemove - The preRemove event occurs for a given entity before the respective EntityManager remove operation for that entity is executed. It is not called for a DQL DELETE statement.
    postRemove - The postRemove event occurs for an entity after the entity has been deleted. It will be invoked after the database delete operations. It is not called for a DQL DELETE statement.
    prePersist - The prePersist event occurs for a given entity before the respective EntityManager persist operation for that entity is executed.
    postPersist - The postPersist event occurs for an entity after the entity has been made persistent. It will be invoked after the database insert operations. Generated primary key values are available in the postPersist event.
    preUpdate - The preUpdate event occurs before the database update operations to entity data. It is not called for a DQL UPDATE statement.
    postUpdate - The postUpdate event occurs after the database update operations to entity data. It is not called for a DQL UPDATE statement.
    postLoad - The postLoad event occurs for an entity after the entity has been loaded into the current EntityManager from the database or after the refresh operation has been applied to it.
    loadClassMetadata - The loadClassMetadata event occurs after the mapping metadata for a class has been loaded from a mapping source (annotations/xml/yaml).
    onFlush - The onFlush event occurs after the change-sets of all managed entities are computed. This event is not a lifecycle callback.




Batch Opération: utiliser clear():

$batchSize = 20;
for ($i = 1; $i <= 10000; ++$i) {
    $user = new CmsUser;
    $user->setStatus('user');
    $user->setUsername('user' . $i);
    $user->setName('Mr.Smith-' . $i);
    $em->persist($user);
    if (($i % $batchSize) == 0) {
        $em->flush();
        $em->clear();  Detaches all objects from Doctrine!
    }




DQL full example:

http:docs.doctrine-project.org/projects/doctrine-orm/en/2.0.x/reference/dql-doctrine-query-language.html



->getResult() ->fetchone <> getResults() -> fetchall


$query = $em->createQuery('SELECT COUNT(u.id) FROM Entities\User u');
$count = $query->getSingleScalarResult();



Count Dictinct:

$query = $em->createQuery('SELECT COUNT(DISTINCT u.name) FROM CmsUser');
$users = $query->getResult();  array of ForumUser objects




Arithmetic Ecritures:

$query = $em->createQuery('SELECT u FROM CmsUser u WHERE ((u.id + 5000) * u.id + 3) < 10000000');
$users = $query->getResult();  array of ForumUser objects



Join avec restriction WITH:

$query = $em->createQuery("SELECT u FROM CmsUser u LEFT JOIN u.articles a WITH a.topic LIKE '%foo%'");
$users = $query->getResult();



In Expression:

$query = $em->createQuery('SELECT u FROM CmsUser u WHERE u.id IN (1, 2)');
$users = $query->getResult();

$query = $em->createQuery('SELECT u FROM CmsUser u WHERE u.id NOT IN (1)');
$users = $query->getResult();



Concat several fields:

$query = $em->createQuery('SELECT CONCAT(u.id, u.name) FROM CmsUser u WHERE u.id = ?1');
$query->setParameter(1, 321);
$idUsernames = $query->getResult();



Qui n'ont pas de relation / associations:

$query = $em->createQuery('SELECT u FROM CmsUser u WHERE u.phonenumbers IS EMPTY');
$users = $query->getResult();


Qui ont plus d'une association:

$query = $em->createQuery('SELECT u FROM CmsUser u WHERE SIZE(u.phonenumbers) > 1');
$users = $query->getResult();



Ceux qui sont dans un group (ManytoOne ) : relation inversion:

$query = $em->createQuery('SELECT u.id FROM CmsUser u WHERE :groupId MEMBER OF u.groups');
$query->setParameter('groupId', $group);
$ids = $query->getResult();



Apres un update de entity class : use clear:

te. It is recommended to call EntityManager#clear() and retrieve new instances of any affected entity.

Marchye avec SELECT, WHERE, HAVING:

    ABS(arithmetic_expression)
    CONCAT(str1, str2)
    CURRENT_DATE() - Return the current date
    CURRENT_TIME() - Returns the current time
    CURRENT_TIMESTAMP() - Returns a timestamp of the current date and time.
    LENGTH(str) - Returns the length of the given string
    LOCATE(needle, haystack [, offset]) - Locate the first occurrence of the substring in the string.
    LOWER(str) - returns the string lowercased.
    MOD(a, b) - Return a MOD b.
    SIZE(collection) - Return the number of elements in the specified collection
    SQRT(q) - Return the square-root of q.
    SUBSTRING(str, start [, length]) - Return substring of given string.
    TRIM([LEADING | TRAILING | BOTH] [‘trchar’ FROM] str) - Trim the string by the given trim char, defaults to whitespaces.
    UPPER(str) - Return the upper-case of the given string.
        Send email partial views
        $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('send@example.com')
        ->setTo('recipient@example.com')
        ->setBody($this->renderView('HelloBundle:Hello:email.txt.twig', array('name' => $name)))
    ;
    $this->get('mailer')->send($message);

    return $this->render(...);
        Request API
        
        / l'URI demandée (par ex. /about) sans les paramètres de requête
$request->getPathInfo();

 Récupérer les variables GET et POST respectivement
$request->query->get('foo');
$request->request->get('bar', 'valeur par defaut si bar n existe pas');

 Récupérer la variable SERVER
$request->server->get('HTTP_HOST');

 Récupérer une instance d'un objet UploadedFile identifié par foo
$request->files->get('foo');

 Récupérer la valeur d'un COOKIE
$request->cookies->get('PHPSESSID');

 Récupérer le header d'une requête HTTP, avec des clés normalisées, en minusucule
$request->headers->get('host');
$request->headers->get('content_type');

$request->getMethod();     GET, POST, PUT, DELETE, HEAD
$request->getLanguages();  Un tableau des languages que le client accepte
Errors 500 et 400:
    
$response = new Response('Not Found', 404);
} catch (Exception $e) {
    $response = new Response('An error occurred', 500);

public function boot()
{
   $em = $this->container->get('doctrine.orm.entity_manager');
   $evm = $em->getEventManager();
    Timestampable
   $evm->addEventSubscriber(new \Gedmo\Timestampable\TimestampableListener());
}
thx master
mets stp en comm:
a mettre ds le XXXBundle.php
Voici qq pistes de Dev. sur lequelle on pourrait s'y pencher:

    Ajout d'une restaurant / visiteur: Geoloc => Verifier fct d'attribution a une ville si okay et la mettre en @postPersist'siret' => "#[0-9]{14}#",'code_postal' => "#^[0-9]{2} ?[0-9]{3}$#"
    Vérifier state media sur la modération + l'inscrire en YAML pr le code
    Geoloc fiable par IP: Module PEAR ou PECLE dispo sur Maxmind:  http:www.maxmind.com/app/php
    Geoloc d'un restaurant / offre / user: utiliser Cela va nous servir de maniere UNIVERSEL et fxt ainsi en DQL : GEO(longA,lattA,longB, lattB) qui calcul la distance entre  : génial:  points
    Fcts MODELpour: 
    1/ GEOREST() get id restaurant le plus proche en fct de coordonnées (valable pour le choix des offre ainsi que la proximité)
    2/ TAUXATTR(User $user1, User $user2)
    3/ postPersist : catégorifier les menus : entree plat dessert / Boisson Apero en bg selon le nombre d'occurence (fréquence) fer mots clefs
    Methode is More 15 jr() sur entity offerdecli
    Persistence des objets pour la prévisualisation
    http:www.lexik.fr/blog/symfony/doctrine2/geolocalisation-ou-comment-creer-ses-propres-fonctions-dql-avec-doctrine2-1624  a fomule se trouve ici:   
    ((ACOS(SIN(43.61 * PI() / 180) * SIN(latitude * PI() / 180) + COS(43.61 * PI() / 180) * COS(latitude * PI() / 180) * COS((3.87 - longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515 * 1.609344) . Voici sa procédure SQL:

DROP FUNCTION IF EXISTS get_distance_metres|

CREATE FUNCTION get_distance_metres (lat1 DOUBLE, lng1 DOUBLE, lat2 DOUBLE, lng2 DOUBLE) RETURNS DOUBLE
BEGIN
DECLARE rlo1 DOUBLE;
DECLARE rla1 DOUBLE;
DECLARE rlo2 DOUBLE;
DECLARE rla2 DOUBLE;
DECLARE dlo DOUBLE;
DECLARE dla DOUBLE;
DECLARE a DOUBLE;

SET rlo1 = RADIANS(lng1);
SET rla1 = RADIANS(lat1);
SET rlo2 = RADIANS(lng2);
SET rla2 = RADIANS(lat2);
SET dlo = (rlo2 – rlo1) / 2;
SET dla = (rla2 – rla1) / 2;
SET a = SIN(dla) * SIN(dla) + COS(rla1) * COS(rla2) * SIN(dlo) * SIN(dlo);
RETURN (6378137 * 2 * ATAN2(SQRT(a), SQRT(1 – a)));
END|

Remarques première sur algo: 

A dissocier:

    le caractère qualitatif( distance la plus proche, age le plus près... => valeurs théoriques) 
    le caractère quantitatif (nb de likes, age des like, distance des likes => valeurs pratiques et limitées => Mathématiques discrètes sur les stats


En fonction du temps f(t) => Mathématiques continu avec des valeurs illimitées :  études de fct => nn pris en charge en V1. En v2: time passé sur un profil mis à jr en bdd pour calcul d'affinités plus avancé.

C'est toute la différente entre caractères quantitatif continu et quantitatif discret

    Idée Algo pour connaitre les personnes par défaut les plus adaptées pour toi: 
    A) Ce qui reste prio, c'est le like bidirectionnelle, puis le like unidirectionnelle
    A) On récupère les couples de coordonnées de la liste de 10 Users ordonnées par age Where l'age du user +/- VARIANCE
    B) On récupère les coordonées pr chacun  par distance

Idées première a rajouter dans le brouillon:

SELECT id_users
FROM users u 

INNER JOIN city c
ON c.id = u.city_id

INNER JOIN meets m
ON m.user_id = u.id

WHERE u.age = VARIANCE
ORDER BY GEO(c.long, c.lat), Age calcul distance
LIMIT 15 

Ou...

Zipcode avec un  LIKE '75%' puis ordonner by zipcode => PX etre coupler avec l'ECART-TYPE et BETWEEN (ZIPCODE - ECART TYPE , ZIPCODE + ECART TYPE)
Ou jouer avec ROUND() quand a laproximation du zicopde avec une precision de XX.XXXX => 4 chiffres après la virgule

Et...

Algo premier: Nous devons au final avoir 2 users avec leurs tableaux de Users . De manière simplissime, nous pouvons par similitude mathématique celui qui a le plus de points communs avec lautre. (le couple (A B)  qui inner le mieux ;)) 


Cette algo devra chaque jour tournée en Background et devrai stocker les ids les plus propice .

Je souhaite au final avoir pr un user donné avoir un couple de Users les plus proches(like, geographiquement, age) tel que Ux = { 156,12,6546,52,1515,456}
pour préparer derrière la théorie des graphes selon des points spaciaux.


Rappel:

Hausse:
- Augmenter une réduction
- Ajouter un nouveau service ou jour
- Augmenter le nombre de groupes recevables sur un service
- Prolonger le nombre de semaines de disponibilité de son offre
Ces modifications sont prises en compte immédiatement, sans modération de notre part, 
Tous les RDV ayant lieu à compter de H+72.
 
Baisse: Ou pour arreter totalement
- Baisser une réduction
- Changer un horaire (d'un service)
- Supprimer un service ou un jour
- Réduire le nombre de groupes recevables sur un service
-> Moins de 15: Modification / Supression Impossible sur OfferDecli
-> Si l'offre expire dans 15 jours ou plus, ceci est pris en compte immédiatement mais n'affecte que les RDV ayant lieu à compter de J+16 (car on a un tableau de RDV à la disposition des membres sur une période allant jusqu'à J+15)

Les offres expirées restent affichées mais distinctement des offres disponibles et en cours de vérification et le partenaire peut alors y accéder.
Il peut ainsi la reproposée telle quelle ou bien opérer des modifications uniquement sur le tableau de disponibilité hebdomadaire (laissé tel qu'il était avant expiration de l'offre) avant de la reproposée mais cette fois elle est automatiquement publiée sans modération de notre part. S'il souhaite modifier autre chose que ça dans une offre expirée (à savoir nature de la prestation, mets au choix, activité, photos et prix normal), il le peut mais dans ce cas la ré proposition refera l'objet d'une modération.


A ajouter de tte Urgence^^:
http:www.macalester.edu/~hutchinson/book/book.html

http:www.misfu.com/Telechargement/mathdis.pdf


Ici John Conhor,
Vous êtes la resistance.

Pour Lduo , notre seigneur qui est sur terre
        
$container->get('request')->server->get('DOCUMENT_ROOT');  Donne le chemin vers le dossier de départ (ex: MAMP ou WAMP)
 in controller:
$this->getRequest()->server->get('DOCUMENT_ROOT');
Else (your urls look like this - localhost/path/to/Symfony/web/app.php:

$container()->get('request')->getBasePath();  Donne le chemin vers le dossier web /
 in controller:
$this->getRequest()->getBasePath();
$this->get('kernel')->getRootDir();
http:www.craftitonline.com/2011/07/symfony2-base-path-and-root-path/
Controller: 
$lang = $lang ? : $this->container->getParameter('locale');
$translation = $email->getTranslation($lang);   Puis reutilisation de translation
Templating:
{{ 'lexik_mailer.email.list' | trans({}, 'LexikMailerBundle') }}
Form Template Inheritance in translation
        {% block generic_label %}
{% spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' control-label'}) %}
    {% if required %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' label-required'}) %}
    {% endif %}
    <label{% for attrname,attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>
        {{ label|trans({}) }}
        {% if required %}
            <span class="required" title="{{ 'required-field' | trans }}">*</span>
        {% endif %}
    </label>
{% endspaceless %}
{% endblock %}{# empty Twig template #}
Le Tree Builder = config.yaml mais a la difference c'est qu'il hierarchise les block de conf 
et permet à des Bundle Tier de modifier / ajouter des configs  dans config.yml...Advice: "using indentation and the fluent notation, 
it is possible to reflect the real structure of the configuration values" 

$rootNode
    ->children()
        ->booleanNode('auto_connect')
            ->defaultTrue()
        ->end()
        ->scalarNode('default_connection')
            ->defaultValue('default')
        ->end()
    ->end();
       Node Array: 
$rootNode
    ->arrayNode('connection')
        ->scalarNode('driver')->end()
        ->scalarNode('host')->end()
        ->scalarNode('username')->end()
        ->scalarNode('password')->end()
    ->end();
  Exemple avec Prototype (type):
$rootNode
    ->arrayNode('parameters')
    ->isRequired()
    ->requiresAtLeastOneElement()
    ->prototype('array')
    ->useAttributeAsKey('name')
    ->children()
    ->scalarNode('name')->isRequired()->end()
    ->scalarNode('value')->isRequired()->end()
ifTrue()
ifString()
ifNull()
ifArray()
ifInArray()
ifNotInArray()
txnUnset()
Fct Compare:
if ($a->getCreatedAt() === $b->getCreatedAt()) {
            return 0;
        }
return $a->getCreatedAt() < $b->getCreatedAt() ? -1 : 1;
return arguments: return $this->ancestors ? explode('/', $this->ancestors) : array();
Syntax preg_match =>  !preg_match('#^'.$config->requirements.'$#xs', $param)
Return Reponse with header: return new Response($content, 200, array('content-type' => 'application/pdf'));
    Return Classical:
        $class = is_object($objectOrClass) ? get_class($objectOrClass) : (string) $objectOrClass;
        The ReflectionMethod class reports information about a method.

Suffix et prefix d'un mot:
    $pos = strpos($logicalImageName, ':');
    $bundleName = substr($logicalImageName, 0, $pos);
    $imageName = substr($logicalImageName, $pos + 1);'

Classical return: return isset($this->table[count($this->table)-1]) ? $this->table[count($this->table)-1] : $this->value;

Finder manipulation file :
$finder = new Symfony\Component\Finder\Finder;
$finder->files()
    ->name('*.php')
    ->in(__DIR__ . '/../lib')
    ->in(__DIR__ . '/../tests');

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->files()->in(__DIR__);

foreach ($finder as $file) {
     Print the absolute path
    print $file->getRealpath()."\n";
     Print the relative path to the file, omitting the filename
    print $file->getRelativePath()."\n";
     Print the relative path to the file
    print $file->getRelativePathname()."\n";
}

 return ($i % 2) == 0;

Heritage d'un bundle par rapport à un autre: confi XXXBundle.php
     public function getParent()
    {
        return 'FOSUserBundle';
    }
Puis en methode de controller
 $response = parent::registerAction();

         do custom stuff

        return $response;
        
pr la connexion
multibase
jai un conférencier symfo
qui me recommande
You can use a single connection and make cross-db joins using @Table(name="dbname.table")


Avantages de l'Api Rest sous SF2:
- Architecture client/serveur
- Stateless, jamais une API rest ne doit se souvenir du client (cookies...)
- Cachable
- On peut la découper en couches (par exemple, on doit pouvoir rajouter varnish sans souci)
- Interface uniforme
        
        
@UniqueEntity(fields={"SIREN","NIC"}, message="Cette entreprise est déjà enregistrée")


exemple de handler process:

$formHandler = new InscriptionHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
 
        //traitement formulaire
        if ($formHandler->process())
        {
            $this->get('session')->setFlash('success','Votre inscription a bien été prise en compte');
            return $this->redirect('inscription');
        }


exemple simple entity:

                ->add('log_bailleur', 'entity', array('class' => 'projet\BackOfficeBundle\Entity\Bailleur'))

            ->add('tuto', 'text',array('label'=>'Titi :',))

                ->add('log_code_postal', null, array('read_only' => true, 'attr' => array('class' => 'inputText')))



Attention datetime cast, array cast:

    public function setUfoDateNaissance(DateTime $ufoDateNaissance)


General create listener:

http://symfony.com/doc/current/cookbook/doctrine/event_listeners_subscribers.html


Problèmatique: une table commentaires pour polusiurs "Modules": News , Blogs, Base... Héritage de BaseeComment en plusiers sous tables
Solution:
Doctrine propose différentes stratégies pour faire de l'héritage
http://docs.doctrine-project.org/pro...e-mapping.html
donc les entités :
BaseCommentaire (postedBy,postedOn,comment), 
NewsCommentaire (hasOne News), 
BlogCommentaires (has One Blog)


Problématique: 
Entité utilisateur: ajout de champs qui dépende de request externes: impossible d'appeller une fonction de la BDD pour obtenir le niveau par defaut courant.
Solution provisoire:
1.Il semble que avec le handler on puisse le faire, même si je n'y suis pas arrivé. Même chose avec le usermanager
2.En controller:

$em = $this->getDoctrine()->getEntityManager();
$user->setDommage($em->getRepository('MonsiteUtilisateurBundle:Dommage')->getUserDefaultDommage());


==> degeulasse...

Une seule possibilioté: utiliser un listener sur l'evenement prePersist:
http://symfony.com/doc/current/cookb...bscribers.html
exemple bien fait de listener:
https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Entity/UserListener.php


a ajouter en vhost

ErrorLog /var/log/apache2/projet.err
	LogLevel warn
 
	CustomLog /var/log/apache2/projet.log combined
	ServerSignature Off


Twig ternaire:
{{ cmd === true ? '4' : '1' }}
==> Cmd ? 4 : 1

Telecharger un .DocX

$file = dirname(__FILE__).'/../../../../web/Fichier.docx';
$response = new \Symfony\Component\HttpFoundation\Response();
$response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
$response->headers->set('Content-Disposition','attachment; filename='.basename($file));
$response->headers->set('Content-Transfer-Encoding', 'binary');
$response->headers->set('Content-Length', "".filesize($file));
$response->setContent(file_get_contents($file));
return $response;




Swift Mailer Charset et Encoder:

$message->setCharset('iso-2022-jp');
        $message->setEncoder(Swift_Encoding::get7BitEncoding());


Translation in twig:

{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}


Event postLoad():
http://www.developpez.net/forums/d1233276/php/bibliotheques-frameworks/symfony2/listener-postload/


Problème/
Comment transformer en entity en service?
Solution:
Donc, si je comprends bien, c'est pas possible de transformer une classe repository en service.
Solution proposée est de faire un service qui va utiliser ce répository

Problème: J'ai un champ qui ne formatte pas au display
Solution: je créer une methode en entité qui le formate ou j'utilise les filetrs twig replace
ex: public function getFormatedTel(){

   return chunk_split($this->tel, 2, " ");
}



Problème: je veux reinitialiser mon formulaire après soumission et validation:

 if ($form->isValid()) 
    {
      $em = $this->container->get('doctrine')->getEntityManager();
      $em->persist($acteur);
      $em->flush();
      $message='Acteur ajouté avec succès !';
      $acteur = new Acteur();
      $form = $this->container->get('form.factory')->create(new ActeurForm(), $acteur);
    }



Redirection après success auth:
http://symfony.com/doc/current/cookbook/security/form_login.html#redirecting-after-success

Links around custopm fields:

https://github.com/symfony/symfony/blob/master/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig


'Buzz'          => __DIR__.'/../vendor/buzz/lib',



Mettre a jour le projet Symfony2:

php bin/vendors update
php ./app/console cache:clear

la commande update ne fait que mettre à jour les dépendances à la version stockée dans le fichier deps et l’inscrit dans deps.lock

Requete des personnes a une distance de 5m:

$query = $this->createQueryBuilder('p')
        ->select('p.id, p.name, (GEO(p.latitude = :latitude, p.longitude = :longitude) <= :distance) AS distance')
        ->setParameter('latitude',$criteria['latitude'])
        ->setParameter('longitude', $criteria['longitude'])
        ->setParameter('distance', '5')
        ->orderBy('p.id', 'ASC')
        ->getQuery();


'il était fortement déconseillé d'accéder à l'EntityManager au sein d'une entité 
Récupérer une methode de Repository:

$offers = Registry::getEntityManager()->getRepository('ProductRepository')->getSpecialOffers( $idproduct );


Form:

 $builder
        ->add('nom')
        ->add('prenom')
        ->add('email')
        ->add('sexe', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')))
        ->add('phones','collection', array(
		'type'=> new PhoneType(),
        'prototype'=> true,
        'allow_add'=> true))          
        ->add('adresses','collection', array(
		'type'=> new AdresseType(),
        'prototype'=> true,
        'allow_add'=> true))
        ->add('metiers','collection', array(
		'type'=> new MetierType(),
        'prototype'=> true,
        'allow_add'=> true)) 
 
            ;   


un champ de type collection est utilisé pour éditer supprimer ou créer des entités, 
Il ne va pas aller rechercher de lui-même les entités métiers dont le nom est le même.
Si tu veux que l'utilisateur choisissent entre différents métier présents dans la base, il faut utiliser un champ entity

Gérer les collection d'objets: exemple:
Transformation de collectio  en objet toArray()

http://baptiste.xn--clavi-fsa.net/en-vrac/3615-mylife/vie-etudiante/symfony2-gerer-un-formulaire-avec-un-manytomany/

$qb = $this->createQueryBuilder('f')
				   ->join('f.topics', 't')
				   ->addSelect('COUNT(t)')
				   ->groupBy('f.id');


C'est SELECT t.*,COUNT(t) FROM Topic.

Petite quenelle de derivation : doctrine:generate:form

$req = $em->getRepository('MyBundle:Entity')->findBy(
        array('champ1' => $id1, 'champ2' => $id2)
 
        );


Champ 1  Ou Champ 2




http://www.php.net/manual/fr/datetime.formats.php

DateDiff: entre 2 datetime en nb de jour (absolute optional)

Accepte beaucoups de formats de dates: http://www.php.net/manual/fr/datetime.formats.date.php

    "12/22/78", "1/17/2006", "1/17/6"
    "2008/6/30", "1978/12/22"



$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";


Possibilité de comparaison:
$date1 = new DateTime("now");
$date2 = new DateTime("tomorrow");

var_dump($date1 == $date2);
var_dump($date1 < $date2);
var_dump($date1 > $date2);

Comparaison unitaires:
$Y1 = $older->format('Y'); 
  $Y2 = $newer->format('Y'); 
  $Y = $Y2 - $Y1; 

  $m1 = $older->format('m'); 
  $m2 = $newer->format('m'); 
  $m = $m2 - $m1; 

  $d1 = $older->format('d'); 
  $d2 = $newer->format('d'); 
  $d = $d2 - $d1; 

  $H1 = $older->format('H'); 
  $H2 = $newer->format('H'); 
  $H = $H2 - $H1; 

  $i1 = $older->format('i'); 
  $i2 = $newer->format('i'); 
  $i = $i2 - $i1; 

  $s1 = $older->format('s'); 
  $s2 = $newer->format('s'); 
  $s = $s2 - $s1; 


Age:
$birth = new DateTime('1966-01-21'); 
$today = new DateTime(); 
$diff = $birth->diff($today); 
echo $diff->format('%y'); // will output 45 

Helper pluralize:
function pluralize( $count, $text ) 
{ 
    return $count . ( ( $count == 1 ) ? ( " $text" ) : ( " ${text}s" ) );
}


Add=> ajoute une durée:
$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";

Sub => Soustrait une durée:
$date = new DateTime('2000-01-20');
$date->sub(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";


Get Timestamp:
$now = new DateTime('now');
$now->getTimestamp();

//Preformat a date
DateTime::createFromFormat('j-M-Y', '15-Feb-2009'); 
=> Retourn un datetime préformatter à utiliser

//Get date from timestamp
$date->setTimestamp(1171502725);
echo $date->format('U = Y-m-d H:i:s') . "\n";

Composer.phar to composer.json dependencies:

http://getcomposer.org/download/

Ressources for Symfony2 packages bundles:
http://packagist.org/packages/behat/


Composer.json:
{
    "require": {
        "symfony/class-loader": "2.1.*"
    }
}Ici, on dit à Composer que notre projet va utiliser le composant Symfony2 ClassLoader, version 2.1.0 ou supérieure.

2.  php composer.phar install => on peut voir un nouveau répertoire vendor qui doit contenir le code du ClassLoader de Symfony2.

Twig Mecanism:
1. twig parses .twig files
2. Abstract Syntax Tree AST
3. Twig writes AST as Javascript Code

Mecanism of Auth in sf2:
Firewall Listener ==> Firewall Map ==> Listeners ==> Token ==> Authentification provider ==> UserProvider ==> Encoder ==> User Checker ==> AuthFailerHandler/ AuthSuccessHandler / LogoutHandler => Remember me
(voir schema de presentation)


Create a Tree Builder:
$treeBuilder = new TreeBuilder()
$treeBuilder -> root() -> add() ..

setId() en entité => Non les indexes primaires sont uniques

        
        
        
// ----------------------------  PHPUnit ----------------------
//generaltiés:
//Framework TRES COMPLET
//Not peut etre partt ds les propriétés
//Manipulation String, Files, Array, etc...
//Doc:
//$this->assertEquals($stack, 'ok'); =>  non egal => Array, Obj, String,  etc...
//$this->assertNotEquals($stack, 'ok'); => egal
//$this->assertGreaterThan(2,1) => Si un nb/tableau/objet... est plus grand que
//$this->assertGreaterThanOrEqual(2,1) => Si un nb/tableau/objet... est plus grand que OU egal
//$this->assertInstanceOf(2,1) => Si un nb/tableau/objet... est une instance de
//$this->assertInternalType("string",1) => Si un nb/tableau/objet... est une instance interne de ARRAY STRING...
//$this->assertTrue($stack) / assertFalse => vrai 
//$this->assertNull($stack) / assertFalse => si null ou pas
//$this->assertObjectHasAttribute($attr, $class) / Not.... => si un objet a une attribut
//$this->assertRegExp('/ok/', $stack) / Not.... =>  si une variable respect la regexp
//$this->assertSame
//$this->assertClassHasAttribute($attr, $class) / Not.... => si la classe a une attribut
//$this->assertClassNotHasStaticAttribute => si la classe a une attribut static
//$this->assertContains(4, array(1,3,2))/assertNotContains(4, array(1,3,2)) =< Contient ou pas une valeur
//$this->assertContainsOnly("string", array(1,2,3)) => contient uniquement es valeurs du type...
//$this->assertEmpty() => est vide
//$this->assertEqualXMLStricture($xml) +> Si un DOM element existe, is first chils etc...multiple usecases
//$this->assertFileExists('ok.csv') => Si un fichier existe
//$this->assertFileEquals('ok.csv','la.csv') => Si 2 fichiers sont egaux
//$this->assertArrayHasKey($stack, array(1,2,3)) /$this->assertArrayNotHasKey($stack, array(1,2,3)) => Si il y a une clef ds un tableau ou non
//$this->assertEmpty($stack) => vide
//
//public function provider(){ => Mehode pour injecter des arguments diverses a une methode => 3 Tests
//return array(
//array(0,5,2),
//array(0,2,1),
//array(5,5,2),
//);
//}

        
        
// ----------------- AUTOCOMPLETION --------------------------
        <script>  
   $('#men_commandesbundle_commandetype_nature').autocomplete({
               source : function(requete, reponse){
                       var motcle = $('#men_commandesbundle_commandetype_nature').val();
                       var DATA = 'motcle=' + motcle;
                       $.ajax({
                               type:"POST",
                               url : "{{ path('mencommandes_ajaxnature') }}",
                               dataType : 'json',
                               data : DATA,

                               success : function(donnee){
                                       reponse($.map(donnee, function(objet){
                           return objet;
                       }));
                   }
                       });
               }
       });
   </script>
?>    


Voici la classe:
http://www.doctrine-project.org/api/common/2.2/source-class-Doctrine.Common.Collections.ArrayCollection.html#24

An ArrayCollection is a Collection implementation that wraps a regular PHP array.


Exemple de Serialisation:

use Symfony\Component\Serializer\Serializer,
    Symfony\Component\Serializer\Encoder\JsonEncoder,
    Symfony\Component\Serializer\Encoder\XmlEncoder;

$serializer = new Serializer(array(
    new FooNormalizer,
    new BarNormalizer
  ), array(
    'ajax_json' => new JsonEncoder(),
    'api_xml' => new XmlEncoder()
  ));

Ou:

use Symfony\Component\Serializer\Serializer;



use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;



use Symfony\Component\Serializer\Encoder\JsonEncoder;




$serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 



JsonEncoder()));



$json = $serializer->serialize($entity, 'json');



Serialiser / deserialiser:
http://api.symfony.com/2.0/Symfony/Component/Serializer/Serializer.html
$serializer->serialize($obj, 'xml')
$serializer->decode($data, 'xml')
$serializer->denormalize($data, 'Class', 'xml')


ex:

$serializer = $this->container->get('serializer');



$reports = $serializer->serialize($doctrineobject, 'json');



return new Response($doctrineobject);

Très facile et bon tuto:

http://developer.e-butik.se/2011/10/symfonys-serializer-component/


with php 5.4
implements JsonSerializable
public function jsonSerialize()
   {
       return array(
           'name' => $this->name,
           'login'=> $this->login,
       );
   }

Charger un YAML externe:

 $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

Charger un XML externes:

 $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

FileLocator: charger un fichier:

use Symfony\Component\Config\FileLocator;
 
$configDirectories = array(__DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config');
 
$locator = new FileLocator($configDirectories);
$yamlUserFiles = $locator->locate('users.yml', null, false);

FileLocator uses the KernelInterface to locate resources in bundles.

http://api.symfony.com/2.0/Symfony/Component/HttpKernel/Config/FileLocator.html

Tuto:

http://php-and-symfony.matthiasnoback.nl/2012/05/symfony2-config-component-using-filelocator-loaders-and-loaderresolver/



Testé pour les petits form: très interessant pour le form multisteps en forward:
http://knpbundles.com/craue/CraueFormFlowBundle



Attention au rewrite de twig: Regle:

/Resources/NamespaceNomduBundle/views/FormFlow/sdfiidf.html.twig

Dans services.xml: trop de services mis en clair: les séparé:
...Extension:
$loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
$loader->load('form_flow.xml');
$loader->load('twig.xml');

Puis les séparer...


     
</pre>

            </div>
        </div>
    </body>
</html>

