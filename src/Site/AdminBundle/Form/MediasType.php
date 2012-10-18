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
                            'choices'   => array('0' => 'Non', '1' => 'Oui'),
                            'required'  => false
                        ))
                ->add('legend');
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
