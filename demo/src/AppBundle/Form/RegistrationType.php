<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('accuracy');
        $builder->add('average_gains');
        $builder->add('rank');
        $builder->add('short', 'choice', array(
        'choices' => array(
          'short' => 'Short',
          'long' => 'Long'
        ),'multiple' => false,
        'expanded' => true,
        'required' => true,
        'data'     => 'short'));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
    public function getAccuracy()
    {
    	return $this->getBlockPrefix();
    }
    public function getAverageGains()
    {
    	return $this->getBlockPrefix();
    }
    public function getRank()
    {
    	return $this->getBlockPrefix();
    }
    public function getShort()
    {
    	return $this->getBlockPrefix();
    }
}
?>