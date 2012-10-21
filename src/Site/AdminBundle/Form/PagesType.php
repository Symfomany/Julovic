<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array('attr' => array('class' => 'input-xxlarge'), 'required' => true))
            ->add('resume', 'textarea', array('attr' => array('class' => 'textarea'), 'required' => true))
            ->add('content', 'textarea', array('attr' => array('class' => 'textarea'), 'required' => true))
            ->add('tag');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Pages'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_pagestype';
    }
}
