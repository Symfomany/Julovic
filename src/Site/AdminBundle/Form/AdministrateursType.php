<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdministrateursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('picture')
            ->add('description')
            ->add('email')
            ->add('password')
            ->add('optin')
            ->add('ip')
            ->add('salt')
            ->add('token')
            ->add('updatedAt')
            ->add('createdAt')
            ->add('dateAuth')
            ->add('enabled')
            ->add('accountNonLocked')
            ->add('accountNonExpired')
            ->add('slug')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Administrateurs'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_administrateurstype';
    }
}
