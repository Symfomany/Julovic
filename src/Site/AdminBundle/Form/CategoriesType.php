<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array('attr' => array('class' => 'input-xxlarge'), 'required' => true))
            ->add('parent', 'entity', array(
                        'class' => 'SiteAdminBundle:Categories',
                            'property' => 'indentedTitle',
                       'query_builder' => function($er) {
                                return $er->createQueryBuilder('c')
                                    ->orderBy('c.root', 'ASC')
                                    ->addOrderBy('c.lft', 'ASC');
                            },
                            'required' => false
                    ))
            ->add('description');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\AdminBundle\Entity\Categories'
        ));
    }

    public function getName()
    {
        return 'site_adminbundle_categoriestype';
    }
}
