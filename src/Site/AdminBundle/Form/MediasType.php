<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('offerId')
            ->add('restaurantId')
            ->add('legend')
            ->add('picture')
            ->add('state')
            ->add('dateCreated')
            ->add('dateUpdated')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Medias'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_mediastype';
    }
}
