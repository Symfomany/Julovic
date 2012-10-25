<?php
namespace Site\AdminBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Request;
use Site\AdminBundle\Entity\Administrateurs;
use Doctrine\Common\Util\Debug;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class AdministrateursCommand extends ContainerAwareCommand {

    protected function configure() {
        $this->setName('admin:administrateurs:add')
                ->setDescription('Ajouter un administrateur')
                ->addArgument('firstname', InputArgument::REQUIRED, 'Quel est son nom?')
                ->addArgument('lastname', InputArgument::REQUIRED, 'Quel est son prénom?')
                ->addArgument('email', InputArgument::REQUIRED, 'Quel est son email?')
                ->addArgument('password', InputArgument::REQUIRED, 'Quel est son password?')
                ->addArgument('description', InputArgument::OPTIONAL, 'Quel est la description?')
                ->addArgument('dob', InputArgument::OPTIONAL, 'Quel est la dob?')
                ->addArgument('ville', InputArgument::OPTIONAL, 'Quel est la ville?')
                ->addArgument('zipcode', InputArgument::OPTIONAL, 'Quel est la zipcode?')
                ->addArgument('tel', InputArgument::OPTIONAL, 'Quel est le téléphone?');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
       $request = Request::createFromGlobals();
        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        
        
        /* Administrateurs Loading */
        $administrateur = new Administrateurs();
        $administrateur->setFirstname($input->getArgument('firstname'));
        $administrateur->setLastname($input->getArgument('lastname'));
        $administrateur->setEmail($input->getArgument('email'));
        $administrateur->setDescription($input->getArgument('description'));
        $administrateur->setToken(sha1($input->getArgument('email')).md5($input->getArgument('lastname')));
        $administrateur->setEnabled(1);
        $pass = $input->getArgument('password');
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($pass, $administrateur->getSalt());
        $administrateur->setPassword($password);
        $em->persist($administrateur);
        $em->flush();
        
        
        $text = 'Ajouté un administrateur';
        $output->writeln('<info>' . $text . '</info>');
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        
    }

}

?>
