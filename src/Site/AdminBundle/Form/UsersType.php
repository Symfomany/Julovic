<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cityId')
            ->add('gender')
            ->add('firstname')
            ->add('lastname')
            ->add('description')
            ->add('email')
            ->add('tel')
            ->add('password')
            ->add('dob')
            ->add('optin')
            ->add('ip')
            ->add('salt')
            ->add('token')
            ->add('don')
            ->add('q1')
            ->add('q2')
            ->add('q3')
            ->add('q4')
            ->add('picture')
            ->add('updatedAt')
            ->add('createdAt')
            ->add('dateAuth')
            ->add('counterUpdated')
            ->add('counterFailed')
            ->add('enabled')
            ->add('accountnonlocked')
            ->add('accountnonexpired')
            ->add('slug')
            ->add('fid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Users'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_userstype';
    }
}
