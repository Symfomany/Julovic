<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParametresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
                $builder
            ->add('nomSite', null,array('label' => 'Nom du site'))
            ->add('urlSite', 'url', array('label' => 'URL du site'))
            ->add('descriptionSite', 'textarea', array('label' => 'Description', 'attr' => array('rows' => 5, 'cols' => 40, 'class' => 'textarea'), 'required' => true))
            ->add('immatriculation', null, array('label' => 'Immatriculation du site'))
            ->add('nomAdmin',null, array('label' => 'Nom'))
            ->add('emailAdmin', 'email', array('label' => 'E-mail'))
            ->add('adresseAdmin', 'textarea', array('label' => 'Adresse', 'attr' => array('rows' => 5, 'cols' => 40, 'class' => 'textarea'), 'required' => true))
            ->add('villeAdmin',  null , array('label' => 'Ville', 'attr' => array('class' => 'city'), 'required' => true))
            ->add('cpAdmin',null,  array('label' => 'Cp:', 'attr' => array('maxlength' => 3)))
            ->add('telAdmin',null,  array('label' => 'Tel:',  'attr' => array('maxlength' => 10)))
            ->add('portAdmin',null,  array('label' => 'Portable:', 'attr' => array('maxlength' => 10)));
        
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Parametres'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_parametrestype';
    }
}
