<?php

namespace Site\AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use  Ivory\LuceneSearchBundle\Model\Document;
use Ivory\LuceneSearchBundle\Model\Field;

/**
 *  Load action in CLI
 */
class TasksCommand extends ContainerAwareCommand {

    /**
     * Loading in CLI Pro Actions..
     */
    protected function configure() {
        $this->setName('meetsy:load:cities')
                ->setDescription('Load actions in Interface Pro')
                ->addArgument('name', InputArgument::OPTIONAL, 'what is the arguments?');
//                ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');
    }

    /**
     * Execute tasks
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
//         $this->user =$this->getContainer()>get('security.context')->getToken()->getUser();
         $alls = $this->getContainer()->get('doctrine')->getRepository('SiteBundle:Villes')->findAll();
            
        // Request an index
        $index = $this->getContainer()->get('ivory_lucene_search')->getIndex('villes');
//
        foreach($alls as $al ){
              // Create a new document
                $document = new Document();
                $document->addField(Field::unIndexed('id', $al->getId() ));
                $document->addField(Field::Keyword  ('v',  $al->getNomVilleMaj()));
                $document->addField(Field::text ('c',  $al->getCodePostal()));
                // Add your document to the index
                $index->addDocument($document);
                // Commit your change
                $index->commit();
                // If you want you can optimize your index
                $index->optimize();
        }
        
        exit('la');
        
        $this->getContainer()->get('lime_thinking_spring.static')->indexAction();
        
       $dialog = $this->getHelperSet()->get('dialog');
        if (!$dialog->askConfirmation($output, '<question>Continue with this action?</question>', true)) {
            return true;
        }

        $text = 'Main Action in '.$output;

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
