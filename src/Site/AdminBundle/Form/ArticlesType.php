<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category')
            ->add('title', null, array('attr' => array('class' => 'input-xxlarge'), 'required' => true))
            ->add('resume', 'textarea', array('attr' => array('rows' => 5, 'cols' => 40, 'class' => 'wyswyg'), 'required' => true))
            ->add('content', 'textarea', array('attr' => array('rows' => 5, 'cols' => 40, 'class' => 'wyswyg'), 'required' => true))
            ->add('notes')
            ->add('active');
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Articles'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_articlestype';
    }
}
