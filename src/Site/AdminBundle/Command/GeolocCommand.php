<?php

namespace Site\AdminBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Request;
use Meetserious\SiteProBundle\Entity\Geoloc;


/**
 *  Load action in CLI
 */
class GeolocCommand extends ContainerAwareCommand {

    /**
     * Loading in CLI Pro Actions..
     */
    protected function configure() {
        $this->setName('meetsy:geoloc:import')
                ->setDescription('Load cities in geoloc in Interface Pro');
//                ->addArgument('name', InputArgument::OPTIONAL, 'what is the arguments?');
//                ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');
    }

    /**
     * Execute tasks
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
       $request = Request::createFromGlobals();
        $em = $this->getContainer()->get('doctrine')->getEntityManager();
//
//        $fichier =  "web/import/geoloc.csv";
//        $fic = fopen($fichier, 'rb');
//
//        for ($ligne = fgetcsv($fic, 1024); !feof($fic); $ligne = fgetcsv($fic, 1024)) {
//           $geo = new Geoloc();
//           $geo->setNom($ligne[0]);
//           $geo->setNomMaj($ligne[1]);
//           $geo->setCp($ligne[2]);
//           $geo->setInsee($ligne[3]);
//           $geo->setRegion($ligne[4]);
//           $geo->setLat($ligne[5]);
//           $geo->setLong($ligne[6]);
//           $geo->setEloi($ligne[7]);
//            $em->persist($geo);
//            $em->flush();
//        }

        $text = 'Import cities in Geoloc Success in database ';

//        if ($input->getOption('yell')) {
//            $text = strtoupper($text);
//        }

//        $style = new OutputFormatterStyle('red', 'yellow', array('bold', 'blink'));
//        $output->getFormatter()->setStyle('fire', $style);
        $output->writeln('<info>' . $text . '</info>');
    }

    /**
     * Interact in others actions
     * @param InputInterface $input
     * @param OutputInterface $output 
     */
    protected function interact(InputInterface $input, OutputInterface $output) {
        
    }

}

?>
