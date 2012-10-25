<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\DependencyInjection\ContainerInterface;

class MediasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file', array(
                    'label' => 'Photo',
                    'required' => false,
                    "attr" => array(
                        "accept" => "image/*",
                        )))
            ->add('state','choice', array(
                           'label' => 'Status',
                            'choices'   => array('0' => 'Invisible', '1' => 'Visible'),
                            'required'  => false
                        ))
            ->add('description', 'textarea', array('attr' => array('rows' => 5, 'cols' => 40, 'class' => 'textarea'), 'required' => false))
                ->add('legend', null, array(
                            'label' => 'Titre',
                           "attr" => array( 
                                'class' => 'input-xxlarge',
                                'required'  => true,
                                'empty_value' => false,
                               'empty_data'  => null
                        )));
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
