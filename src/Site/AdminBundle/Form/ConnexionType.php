<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ConnexionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array('attr' => array('class' => 'email'), 'required' => true))
            ->add('password', 'password', array('attr' => array('class' => 'password'), 'required' => true));
    }
    
    public function getName()
    {
        return 'site_connexiontype';
    }
}
