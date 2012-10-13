<?php

namespace Site\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdministrateursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                
        $minDob = new \Datetime('now');
        $maxDob = new \Datetime('now');
        $minDob->modify(('-18 years'));
        $maxDob->modify(('-90 years'));
        
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('description')
            ->add('dob', 'birthday', array('widget' => 'choice', 'years' =>range($minDob->format('Y'), $maxDob->format('Y')), 'format' => 'dd / MM / yyyy'))
            ->add('email', 'email')
            ->add('tel')
            ->add('adresse')
            ->add('ville')
            ->add('zipcode')
            ->add('enabled')
            ->add('password', 'repeated', array(
                        'type' => 'password',
                        'first_name' => 'mdp',
                        'second_name' => 'mdp_conf',
                        'invalid_message' => "Le mot de passe n'est pas le même",
                        'error_bubbling' => true,
                    ));
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
