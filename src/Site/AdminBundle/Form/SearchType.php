<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('search', 'search', array(  'max_length' => 120, 'required' => true));
    }
    
        public function getDefaultOptions(array $options)
    {
        return array(
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention'       => 'task_item',
        );
    }

    public function getName()
    {
        return 'site_adminbundle_searchtype';
    }
}
