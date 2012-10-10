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
            ->add('nomSite')
            ->add('urlSite', 'url')
            ->add('administrateursId')
            ->add('nomAdmin')
            ->add('emailAdmin')
            ->add('adresseAdmin')
            ->add('villeAdmin')
            ->add('cpAdmin')
            ->add('telAdmin')
            ->add('portAdmin')
        ;
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
