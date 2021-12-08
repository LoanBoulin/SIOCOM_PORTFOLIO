<?php

namespace App\Form;

use App\Entity\TacheSemaine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TacheSemaineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('domaineTache', EntityType::class, array('class' => 'App\Entity\DomaineTache','choice_label' => 'jour', 'disabled' => $options['champDesactive'],))
            //->add('domaineTache')
            //->add('jour')
            //->add('semaineStage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TacheSemaine::class,
        ]);
    }
}
