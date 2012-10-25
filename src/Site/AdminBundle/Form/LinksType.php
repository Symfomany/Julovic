<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LinksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title' ,null, array('attr' => array('class' => 'input-xxlarge'), 'required' => true))
            ->add('link', 'url', array('attr' => array('class' => 'input-xxlarge'), 'required' => true))
            ->add('parent', 'entity', array(
                        'class' => 'SiteAdminBundle:Links',
                            'property' => 'indentedTitle',
                       'query_builder' => function($er) {
                                return $er->createQueryBuilder('c')
                                    ->orderBy('c.root', 'ASC')
                                    ->addOrderBy('c.lft', 'ASC');
                            },
                            'required' => false
            ))
            ->add('description', 'textarea', array('attr' => array('class' => 'textarea'), 'required' => true));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Links'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_linkstype';
    }
}
